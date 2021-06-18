<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MaterialUnitCost[]|\Cake\Collection\CollectionInterface $materialUnitCosts
 */
?>
<div class="materialUnitCosts index content">
    <?= $this->Html->link(__('New Material Unit Cost'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Material Unit Costs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('MaterialCode') ?></th>
                    <th><?= $this->Paginator->sort('Quantity') ?></th>
                    <th><?= $this->Paginator->sort('UnitCost') ?></th>
                    <th><?= $this->Paginator->sort('EntryDate') ?></th>
                    <th><?= $this->Paginator->sort('EntryTime') ?></th>
                    <th><?= $this->Paginator->sort('CreateOpr') ?></th>
                    <th><?= $this->Paginator->sort('CreateDatim') ?></th>
                    <th><?= $this->Paginator->sort('UpdateOpr') ?></th>
                    <th><?= $this->Paginator->sort('Updatedatim') ?></th>
                    <th><?= $this->Paginator->sort('ContractUnitCost') ?></th>
                    <th><?= $this->Paginator->sort('POUnitCost') ?></th>
                    <th><?= $this->Paginator->sort('FlatCost') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materialUnitCosts as $materialUnitCost): ?>
                <tr>
                    <td><?= h($materialUnitCost->MaterialCode) ?></td>
                    <td><?= $this->Number->format($materialUnitCost->Quantity) ?></td>
                    <td><?= $this->Number->format($materialUnitCost->UnitCost) ?></td>
                    <td><?= h($materialUnitCost->EntryDate) ?></td>
                    <td><?= h($materialUnitCost->EntryTime) ?></td>
                    <td><?= h($materialUnitCost->CreateOpr) ?></td>
                    <td><?= h($materialUnitCost->CreateDatim) ?></td>
                    <td><?= h($materialUnitCost->UpdateOpr) ?></td>
                    <td><?= h($materialUnitCost->Updatedatim) ?></td>
                    <td><?= $this->Number->format($materialUnitCost->ContractUnitCost) ?></td>
                    <td><?= $this->Number->format($materialUnitCost->POUnitCost) ?></td>
                    <td><?= $this->Number->format($materialUnitCost->FlatCost) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $materialUnitCost->MaterialCode]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materialUnitCost->MaterialCode]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materialUnitCost->MaterialCode], ['confirm' => __('Are you sure you want to delete # {0}?', $materialUnitCost->MaterialCode)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
