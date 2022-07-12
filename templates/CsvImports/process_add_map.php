<?php

use App\Model\Entity\Material;
use App\View\AppView;
use Cake\ORM\Entity;
use Stacks\Constants\LayerCon;
use Stacks\Model\Lib\Layer;

/**
 * @var AppView $this
 * @var Entity[] $records
 * @var Entity[] $target_records
 * @var array $map
 * @var array $reduced_map
 * @var array $manual_map
 * @var Layer $imp_layer
 * @var string $primary_key
 */

$columnHeader = function($target_key, $source_key) use ($manual_map){
    if(in_array($target_key, $manual_map)){
        $value = "<span style='color:green;'>$target_key</span>" .
            "</br>" .
            "<span style='color:red;'>$source_key</span>";

    }
    else {
        $value = $target_key;
    }
    return $value;
};

/**
 * @param $record Entity
 */
$trElementPicker = function($record){
    return $record->isNew() ? 'CsvImports/new_record' : 'CsvImports/existing_record';
}

?>
<h1>Add</h1>
<table>
    <tbody>
    <tr>
        <th><?=$primary_key?></th>
        <?php foreach ($reduced_map as $source_key => $target_key): ?>
            <th><?= $columnHeader($target_key, $source_key) ?></th>
        <?php endforeach; ?>
    </tr>
    <?php
    foreach ($records as $record) {
        echo $this->element($trElementPicker($record), ['record' => $record]);
    }
    ?>
    </tbody>
</table>

<?php
echo $this->Form->create();
echo $this->Form->submit();
echo $this->Form->end();
