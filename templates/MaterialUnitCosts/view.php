<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MaterialUnitCost $materialUnitCost
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Material Unit Cost'), ['action' => 'edit', $materialUnitCost->MaterialCode], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Material Unit Cost'), ['action' => 'delete', $materialUnitCost->MaterialCode], ['confirm' => __('Are you sure you want to delete # {0}?', $materialUnitCost->MaterialCode), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Material Unit Costs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Material Unit Cost'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materialUnitCosts view content">
            <h3><?= h($materialUnitCost->MaterialCode) ?></h3>
            <table>
                <tr>
                    <th><?= __('MaterialCode') ?></th>
                    <td><?= h($materialUnitCost->MaterialCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreateOpr') ?></th>
                    <td><?= h($materialUnitCost->CreateOpr) ?></td>
                </tr>
                <tr>
                    <th><?= __('UpdateOpr') ?></th>
                    <td><?= h($materialUnitCost->UpdateOpr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($materialUnitCost->Quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitCost') ?></th>
                    <td><?= $this->Number->format($materialUnitCost->UnitCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('ContractUnitCost') ?></th>
                    <td><?= $this->Number->format($materialUnitCost->ContractUnitCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('POUnitCost') ?></th>
                    <td><?= $this->Number->format($materialUnitCost->POUnitCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('FlatCost') ?></th>
                    <td><?= $this->Number->format($materialUnitCost->FlatCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('EntryDate') ?></th>
                    <td><?= h($materialUnitCost->EntryDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EntryTime') ?></th>
                    <td><?= h($materialUnitCost->EntryTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreateDatim') ?></th>
                    <td><?= h($materialUnitCost->CreateDatim) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updatedatim') ?></th>
                    <td><?= h($materialUnitCost->Updatedatim) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
