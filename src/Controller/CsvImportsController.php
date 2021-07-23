<?php


namespace App\Controller;


use App\Model\Table\CsvImportsTable;
use App\Model\Table\MaterialsTable;
use Cake\Cache\Cache;
use Cake\Filesystem\Folder;
use Cake\Http\Session;
use Cake\ORM\Entity;
use Laminas\Diactoros\UploadedFile;
use Stacks\Constants\LayerCon;
use Stacks\Model\Lib\Layer;

/**
 * Class CsvImportsController
 * @package App\Controller
 * @property CsvImportsTable CsvImports
 */
class CsvImportsController extends AppController
{
    /**
     * @var MaterialsTable
     */
    private $Materials;
    /**
     * @var \Cake\Datasource\RepositoryInterface|string|string[]|null
     */
    private $primaryKey;
    /**
     * @var Session|null
     */
    private $Session;
    private $uid;

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Materials = $this->getTableLocator()->get('Materials');
        $this->Session = $this->getRequest()->getSession();
        if(is_null($this->Session->read('unique_id'))){
            $this->Session->write('unique_id', uniqid());
        }
        $this->uid = $this->Session->read('unique_id');
    }

    public function add()
    {
        Cache::write("$this->uid.action", 'add');
        $table = $this->CsvImports;
        $targets = $this->ormTables();

        if($this->getRequest()->is('post')) {
            /**
             * @var UploadedFile $file
             */
            $file = $this->getRequest()->getData('file');
            Cache::write('target_table', $this->getRequest()->getData('target'));
            $file->moveTo($this->getFilePath());
            return $this->redirect(['action' => 'map']);
        }

        $this->set(compact('table', 'targets'));
    }

    public function edit()
    {
        Cache::write("$this->uid.action", 'edit');
        $table = $this->CsvImports;
        $targets = $this->ormTables();

        if($this->getRequest()->is('post')){
            /**
             * @var UploadedFile $file
             */
            $file = $this->getRequest()->getData('file');
            Cache::write('target_table', $this->getRequest()->getData('target'));
            $file->moveTo($this->getFilePath());
            return $this->redirect(['action' => 'map']);
        }

        $this->set(compact('table', 'targets'));
    }

    public function map()
    {
        $target_table = Cache::read('target_table');
        $this->$target_table = $this->getTableLocator()->get($target_table);
        $this->ImportedData = $this->CsvImports->import($this->getFileName());
        $target_columns = $this->$target_table->getSchema()->columns();
        $target_columns = array_combine($target_columns, $target_columns);
        $source_columns = $this->CsvImports->getSchema()->columns();

        if($this->getRequest()->is('post') && $this->validMap()){
            Cache::write('map', $this->getRequest()->getData());
            return $this->redirect(['action' => 'processMap']);
        }

        $this->set(compact('target_columns', 'source_columns', 'target_table'));
    }

    public function validMap(): bool
    {
        $map = $this->getRequest()->getData();
        $assigned_targets = [];
        $return = true;
        $result = collection($map)
            ->reduce(function($accum, $target, $source) use (&$assigned_targets){
                if (!empty($target)) {
                    if (!array_key_exists($target, $assigned_targets)) {
                        $assigned_targets[$target] = $target;
                    }
                    else {
                        $this->Flash->error("You cannot assign $target to two sources");
                        $accum['duplicates'] = true;
                    }
                }
                if ($target == 'MaterialCode') {
                    Cache::write('key', $source);
                    $accum['MaterialCode'] = true;
                }
                return $accum;
            }, ['MaterialCode' => false, 'duplicates' => false]);

        if(!$result['MaterialCode']){
            $this->Flash->error("You must target the MaterialCode");
            $return = false;
        }
        if($result['duplicates']){
            $return = false;
        }
        return $return;
    }

    public function processMap()
    {
        $target_table = Cache::read('target_table');
        $this->$target_table = $this->getTableLocator()->get($target_table);
        $primary_key = $this->primaryKey = $this->$target_table->getPrimaryKey();
        $map = Cache::read('map');
        $key = Cache::read('key');
        $action = Cache::read("$this->uid.action");
        $reduced_map = $this->reduceMap($map, $key);
        $import = $this->CsvImports->import($this->getFileName());
        $imp_layer = new Layer($import, 'CsvImport');
        $find_array = collection($import)
            ->reduce(function($accum, $record) use ($key){
                $accum[] = $record->$key;
                return $accum;
            }, []);
        $target_records = $this->$target_table->find('all')
            ->where(["$primary_key IN" => $find_array])
            ->toArray();

        if ($this->getRequest()->is('post')){
            $patch = $this->setupPatch($target_records, $imp_layer, $reduced_map);
            $entities_to_save = $this->$target_table->patchEntities($target_records, $patch);
            $result = $this->$target_table->saveMany($entities_to_save);
        }

        $this->set(compact('map', 'key', 'target_records', 'imp_layer', 'reduced_map', 'primary_key'));
    }

    private function setupPatch(array $target_records, Layer $imp_layer, $reduced_map)
    {
        return collection($target_records)
            ->reduce(function($accum, $target_record) use ($imp_layer, $reduced_map){
                $full_patch = collection ($reduced_map)
                    ->reduce(function($patch, $target_key, $source_key) use ($target_record, $imp_layer){
                        $patch[$target_key] = $imp_layer->element($target_record->{$this->primaryKey}, LayerCon::LAYERACC_ID)->$source_key;
                        return $patch;
                    }, []);
                $full_patch[$this->primaryKey] = $target_record->{$this->primaryKey};
                $accum[] = $full_patch;
             return $accum;
        }, []);
    }

    private function reduceMap($map, $key)
    {
        return collection($map)
            ->reduce(function($accum, $target, $source) use ($key){
                if(!empty($target) && $source != $key){
                    $accum[$source] = $target;
                }
                return $accum;
            }, []);
    }

    /**
     * Get an array of standard ORM table names (in alias form)
     *
     * @return mixed|null
     */
    public function ormTables() {
        $tableDir = new Folder(APP.'Model'.DS.'Table');
        $allFiles = ($tableDir->find('.*Table.php'));
        $files = collection($allFiles)
            ->reduce(function($accum, $file) {
                if (!preg_match('/Stack/', $file)) {
                    $accum[] = str_replace('Table.php', '', $file);
                }
                return $accum;
            }, []);
        return array_combine($files, $files);
    }

    /**
     * @param Entity $target_record
     */
    private function getPrimaryKey($target_record)
    {
        $alias = $target_record->getSource();
        $table = $this->getTableLocator()->get($alias);
        return $table->getPrimaryKey();

    }

    /**
     * @return string
     */
    private function getFilePath(): string
    {
        return WWW_ROOT . 'files/' . $this->getFileName();
    }

    /**
     * @return string
     */
    private function getFileName(): string
    {
        return "$this->uid-workingFile.csv";
    }


}
