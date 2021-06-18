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
 * @var Layer $imp_layer
 * @var string $primary_key
 */

?>
<table>
    <tbody>
    <tr>
        <th>Code</th>
        <th>Description</th>
        <?php foreach ($reduced_map as $source_key => $target_key): ?>
        <th><?= "$source_key => $target_key" ?></th>
        <?php endforeach; ?>
    </tr>
    <?php
    foreach ($target_records as $target_record) {
        echo '<tr>';
        echo $this->Html->tag('td', $target_record->$primary_key);
        echo $this->Html->tag('td', $target_record->Description);
        foreach ($reduced_map as $source_key => $target_key) {
            $source = $imp_layer->element($target_record->$primary_key, LayerCon::LAYERACC_ID)->$source_key;
            $target = $target_record->$target_key;
            echo $this->Html->tag('td', "$source => <strike>$target</strike>");
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
