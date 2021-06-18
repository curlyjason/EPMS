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
 * @var Layer $imp_layer
 */

//debug($imp_layer);
debug($map);
?>
<table>
    <tbody>
    <tr>
        <th>Code</th>
        <th>Description</th>
        <th>Original MWT</th>
        <th>New MWT</th>
    </tr>
    <?php
    foreach ($materials as $material) {
        echo '<tr>';
        echo $this->Html->tag('td', $material->MaterialCode);
        echo $this->Html->tag('td', $material->Description);
        echo $this->Html->tag('td', $material->MWT);
        echo $this->Html->tag('td', $imp_layer->element($material->MaterialCode, LayerCon::LAYERACC_ID)->m_weight);
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

<?php
echo $this->Form->create();
echo $this->Form->submit();
echo $this->Form->end();
