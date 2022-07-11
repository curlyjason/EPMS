<?php

use App\Model\Entity\Material;
use App\View\AppView;
use Cake\ORM\Entity;
use Stacks\Constants\LayerCon;
use Stacks\Model\Lib\Layer;

/**
 * @var AppView $this
 * @var Entity[] $import
 * @var Entity[] $target_records
 * @var array $map
 * @var array $reduced_map
 * @var array $manual_map
 * @var Layer $imp_layer
 * @var string $primary_key
 * @var string $action
 */

$columnHeader = function($target_key, $source_key) use ($manual_map){
    if(in_array($target_key, $manual_map)){
        return "<th style='color: red'> $target_key</br>$source_key </th>";
    }
    else {
        return "<th> $target_key </th>";
    }
}
?>
<h1><?= $action ?></h1>
<table>
    <tbody>
    <tr>
        <th><?=$primary_key?></th>
        <?php foreach ($reduced_map as $source_key => $target_key): ?>
        <?= $columnHeader($target_key, $source_key) ?>
        <?php endforeach; ?>
    </tr>
    <?php
    foreach ($import as $record) {
        echo '<tr>';
        echo $this->Html->tag('td', $record->id);
        foreach ($reduced_map as $source_key => $target_key) {
            echo $this->Html->tag('td', $record->$source_key);
        }
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

<?php
echo $this->Form->create();
echo $this->Form->submit();
echo $this->Form->end();
