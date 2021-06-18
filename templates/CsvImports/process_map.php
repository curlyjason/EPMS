<?php

use App\Model\Entity\Material;
use App\View\AppView;
use Cake\ORM\Entity;
use Stacks\Constants\LayerCon;
use Stacks\Model\Lib\Layer;

/**
 * @var AppView $this
 * @var Entity[] $import
 * @var Material[] $materials
 * @var array $map
 * @var array $reduced_map
 * @var Layer $imp_layer
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
    foreach ($materials as $material) {
        echo '<tr>';
        echo $this->Html->tag('td', $material->MaterialCode);
        echo $this->Html->tag('td', $material->Description);
        foreach ($reduced_map as $source_key => $target_key) {
            $source = $imp_layer->element($material->MaterialCode, LayerCon::LAYERACC_ID)->$source_key;
            $target = $material->$target_key;
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
