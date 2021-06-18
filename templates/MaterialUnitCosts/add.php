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
            <?= $this->Html->link(__('List Material Unit Costs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materialUnitCosts form content">
            <?= $this->Form->create($materialUnitCost) ?>
            <fieldset>
                <legend><?= __('Add Material Unit Cost') ?></legend>
                <?php
                    echo $this->Form->control('UnitCost');
                    echo $this->Form->control('EntryDate', ['empty' => true]);
                    echo $this->Form->control('EntryTime', ['empty' => true]);
                    echo $this->Form->control('CreateOpr');
                    echo $this->Form->control('CreateDatim', ['empty' => true]);
                    echo $this->Form->control('UpdateOpr');
                    echo $this->Form->control('Updatedatim', ['empty' => true]);
                    echo $this->Form->control('ContractUnitCost');
                    echo $this->Form->control('POUnitCost');
                    echo $this->Form->control('FlatCost');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
