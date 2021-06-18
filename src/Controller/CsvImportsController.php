<?php


namespace App\Controller;


use App\Model\Table\CsvImportsTable;
use App\Model\Table\MaterialsTable;
use Cake\Cache\Cache;
use Cake\Filesystem\Folder;
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

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Materials = $this->getTableLocator()->get('Materials');
    }


    public function add()
    {
        $table = $this->CsvImports;
        $this->set(compact('table'));
        $targets = $this->ormTables();

        if($this->getRequest()->is('post')){
            /**
             * @var UploadedFile $file
             */
            $file = $this->getRequest()->getData('file');
            debug($this->getRequest()->getData());die;
            $file->moveTo(WWW_ROOT . 'files/workingFile.csv');
            return $this->redirect(['action' => 'map']);
        }
        $this->set(compact('targets'));
    }

    public function map()
    {
        $this->ImportedData = $this->CsvImports->import('workingFile.csv');
        $target_columns = $this->Materials->getSchema()->columns();
        $target_columns = array_combine($target_columns, $target_columns);
        $source_columns = $this->CsvImports->getSchema()->columns();

        if($this->getRequest()->is('post') && $this->validMap()){
            Cache::write('map', $this->getRequest()->getData());
            return $this->redirect(['action' => 'processMap']);
        }

        $this->set(compact('target_columns', 'source_columns'));
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
        $map = Cache::read('map');
        $key = Cache::read('key');
        $reduced_map = $this->reduceMap($map, $key);
        $import = $this->CsvImports->import('workingFile.csv');
        $imp_layer = new Layer($import, 'CsvImport');
        $find_array = collection($import)
            ->reduce(function($accum, $record) use ($key){
                $accum[] = $record->$key;
                return $accum;
            }, []);
        $materials = $this->Materials->find('all')
            ->where(['MaterialCode IN' => $find_array])
            ->toArray();

        if ($this->getRequest()->is('post')){
            $patch = $this->setupPatch($materials, $imp_layer, $reduced_map);
            $entities_to_save = $this->Materials->patchEntities($materials, $patch);
            $result = $this->Materials->saveMany($entities_to_save);
        }

        $this->set(compact('map', 'key', 'materials', 'imp_layer', 'reduced_map'));
    }

    private function setupPatch(array $materials, Layer $imp_layer, $reduced_map)
    {
        return collection($materials)
            ->reduce(function($accum, $material) use ($imp_layer, $reduced_map){
                $full_patch = collection ($reduced_map)
                    ->reduce(function($patch, $target_key, $source_key) use ($material, $imp_layer){
                        $patch[$target_key] = $imp_layer->element($material->MaterialCode, LayerCon::LAYERACC_ID)->$source_key;
                        return $patch;
                    }, []);
                $full_patch['MaterialCode'] = $material->MaterialCode;
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


}
