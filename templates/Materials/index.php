<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Material[]|\Cake\Collection\CollectionInterface $materials
 */
?>
<div class="materials index content">
    <?= $this->Html->link(__('New Material'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Materials') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('CategoryCode') ?></th>
                    <th><?= $this->Paginator->sort('MaterialType') ?></th>
                    <th><?= $this->Paginator->sort('MaterialCode') ?></th>
                    <th><?= $this->Paginator->sort('Width') ?></th>
                    <th><?= $this->Paginator->sort('Length') ?></th>
                    <th><?= $this->Paginator->sort('BWT') ?></th>
                    <th><?= $this->Paginator->sort('SBS') ?></th>
                    <th><?= $this->Paginator->sort('MWT') ?></th>
                    <th><?= $this->Paginator->sort('Caliper') ?></th>
                    <th><?= $this->Paginator->sort('LastUpdated') ?></th>
                    <th><?= $this->Paginator->sort('VendorID') ?></th>
                    <th><?= $this->Paginator->sort('VendorProductID') ?></th>
                    <th><?= $this->Paginator->sort('ReorderLevel') ?></th>
                    <th><?= $this->Paginator->sort('ReorderQty') ?></th>
                    <th><?= $this->Paginator->sort('OnHandQty') ?></th>
                    <th><?= $this->Paginator->sort('Washups') ?></th>
                    <th><?= $this->Paginator->sort('UnitDescription') ?></th>
                    <th><?= $this->Paginator->sort('Minimum') ?></th>
                    <th><?= $this->Paginator->sort('CostingMethod') ?></th>
                    <th><?= $this->Paginator->sort('Height') ?></th>
                    <th><?= $this->Paginator->sort('NonStock') ?></th>
                    <th><?= $this->Paginator->sort('CubicWeight') ?></th>
                    <th><?= $this->Paginator->sort('RollFeet') ?></th>
                    <th><?= $this->Paginator->sort('CartonQty') ?></th>
                    <th><?= $this->Paginator->sort('PreCollated') ?></th>
                    <th><?= $this->Paginator->sort('InkMileage') ?></th>
                    <th><?= $this->Paginator->sort('EnterDimensions') ?></th>
                    <th><?= $this->Paginator->sort('DefaultMarkup') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th><?= $this->Paginator->sort('Color') ?></th>
                    <th><?= $this->Paginator->sort('EntryDate') ?></th>
                    <th><?= $this->Paginator->sort('EntryTime') ?></th>
                    <th><?= $this->Paginator->sort('SeparateMarkup') ?></th>
                    <th><?= $this->Paginator->sort('Description2') ?></th>
                    <th><?= $this->Paginator->sort('Description3') ?></th>
                    <th><?= $this->Paginator->sort('Description4') ?></th>
                    <th><?= $this->Paginator->sort('Description5') ?></th>
                    <th><?= $this->Paginator->sort('Description6') ?></th>
                    <th><?= $this->Paginator->sort('Description7') ?></th>
                    <th><?= $this->Paginator->sort('Option1') ?></th>
                    <th><?= $this->Paginator->sort('Option2') ?></th>
                    <th><?= $this->Paginator->sort('LinerWeight') ?></th>
                    <th><?= $this->Paginator->sort('ValuationMethod') ?></th>
                    <th><?= $this->Paginator->sort('RollInventory') ?></th>
                    <th><?= $this->Paginator->sort('Comments') ?></th>
                    <th><?= $this->Paginator->sort('GLAccount') ?></th>
                    <th><?= $this->Paginator->sort('RevisionDate') ?></th>
                    <th><?= $this->Paginator->sort('CoreWaste') ?></th>
                    <th><?= $this->Paginator->sort('POUnitDescription') ?></th>
                    <th><?= $this->Paginator->sort('QtyPerPOUnit') ?></th>
                    <th><?= $this->Paginator->sort('HouseQuantity') ?></th>
                    <th><?= $this->Paginator->sort('CustAccount') ?></th>
                    <th><?= $this->Paginator->sort('CustomerOwned') ?></th>
                    <th><?= $this->Paginator->sort('LastReceivedCost') ?></th>
                    <th><?= $this->Paginator->sort('FlatCost') ?></th>
                    <th><?= $this->Paginator->sort('DefaultCoverage') ?></th>
                    <th><?= $this->Paginator->sort('CreateOpr') ?></th>
                    <th><?= $this->Paginator->sort('CreateDatim') ?></th>
                    <th><?= $this->Paginator->sort('UpdateOpr') ?></th>
                    <th><?= $this->Paginator->sort('Updatedatim') ?></th>
                    <th><?= $this->Paginator->sort('NoRequisition') ?></th>
                    <th><?= $this->Paginator->sort('Description8') ?></th>
                    <th><?= $this->Paginator->sort('DefaultLocationCode') ?></th>
                    <th><?= $this->Paginator->sort('InventoryByWeightOption') ?></th>
                    <th><?= $this->Paginator->sort('UserDefined1') ?></th>
                    <th><?= $this->Paginator->sort('UserDefined2') ?></th>
                    <th><?= $this->Paginator->sort('UserDefined3') ?></th>
                    <th><?= $this->Paginator->sort('UserDefined4') ?></th>
                    <th><?= $this->Paginator->sort('UserDefined5') ?></th>
                    <th><?= $this->Paginator->sort('CoatedOneSide') ?></th>
                    <th><?= $this->Paginator->sort('RFQDescription') ?></th>
                    <th><?= $this->Paginator->sort('DontAllocateByRolls') ?></th>
                    <th><?= $this->Paginator->sort('InventoryNumberUp') ?></th>
                    <th><?= $this->Paginator->sort('CoverageOption1') ?></th>
                    <th><?= $this->Paginator->sort('PlantID') ?></th>
                    <th><?= $this->Paginator->sort('ParentMaterialCode') ?></th>
                    <th><?= $this->Paginator->sort('ParentNumberOut') ?></th>
                    <th><?= $this->Paginator->sort('InactiveFlag') ?></th>
                    <th><?= $this->Paginator->sort('POCostingMethod') ?></th>
                    <th><?= $this->Paginator->sort('PODivisor') ?></th>
                    <th><?= $this->Paginator->sort('POFactor') ?></th>
                    <th><?= $this->Paginator->sort('RollChange') ?></th>
                    <th><?= $this->Paginator->sort('OriginalInvtQuantity') ?></th>
                    <th><?= $this->Paginator->sort('OriginalInvtDate') ?></th>
                    <th><?= $this->Paginator->sort('LeadTime') ?></th>
                    <th><?= $this->Paginator->sort('InspectionRequired') ?></th>
                    <th><?= $this->Paginator->sort('MMSI') ?></th>
                    <th><?= $this->Paginator->sort('AutoDeduct') ?></th>
                    <th><?= $this->Paginator->sort('DontAutoUpdate') ?></th>
                    <th><?= $this->Paginator->sort('CustomUOMCode') ?></th>
                    <th><?= $this->Paginator->sort('FGPermConverted') ?></th>
                    <th><?= $this->Paginator->sort('ManufacturerItemNumber') ?></th>
                    <th><?= $this->Paginator->sort('MarkupTable') ?></th>
                    <th><?= $this->Paginator->sort('AutoReceiveRolls') ?></th>
                    <th><?= $this->Paginator->sort('CoreDiameter') ?></th>
                    <th><?= $this->Paginator->sort('RollDiameter') ?></th>
                    <th><?= $this->Paginator->sort('CustomerMixedFor') ?></th>
                    <th><?= $this->Paginator->sort('MaterialMixedFor') ?></th>
                    <th><?= $this->Paginator->sort('BackgroundColor') ?></th>
                    <th><?= $this->Paginator->sort('InkUserDefined1') ?></th>
                    <th><?= $this->Paginator->sort('ProductTaxCode') ?></th>
                    <th><?= $this->Paginator->sort('ShippingTaxCode') ?></th>
                    <th><?= $this->Paginator->sort('PerSidePerCopyOption') ?></th>
                    <th><?= $this->Paginator->sort('TrackByPallet') ?></th>
                    <th><?= $this->Paginator->sort('DataCollectConversion') ?></th>
                    <th><?= $this->Paginator->sort('UnitMultiplier') ?></th>
                    <th><?= $this->Paginator->sort('ExemptFromCoverageSlowdown') ?></th>
                    <th><?= $this->Paginator->sort('GLCOGAccount') ?></th>
                    <th><?= $this->Paginator->sort('CalculateCoreWidth') ?></th>
                    <th><?= $this->Paginator->sort('UVInk') ?></th>
                    <th><?= $this->Paginator->sort('CostConversion') ?></th>
                    <th><?= $this->Paginator->sort('MaximumSpineThickness') ?></th>
                    <th><?= $this->Paginator->sort('CWTFeet') ?></th>
                    <th><?= $this->Paginator->sort('UnitCostOverride') ?></th>
                    <th><?= $this->Paginator->sort('Transfer') ?></th>
                    <th><?= $this->Paginator->sort('PrintReleafEligible') ?></th>
                    <th><?= $this->Paginator->sort('AvgPalletQuantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materials as $material): ?>
                <tr>
                    <td><?= h($material->CategoryCode) ?></td>
                    <td><?= h($material->MaterialType) ?></td>
                    <td><?= h($material->MaterialCode) ?></td>
                    <td><?= $this->Number->format($material->Width) ?></td>
                    <td><?= $this->Number->format($material->Length) ?></td>
                    <td><?= $this->Number->format($material->BWT) ?></td>
                    <td><?= $this->Number->format($material->SBS) ?></td>
                    <td><?= $this->Number->format($material->MWT) ?></td>
                    <td><?= $this->Number->format($material->Caliper) ?></td>
                    <td><?= h($material->LastUpdated) ?></td>
                    <td><?= h($material->VendorID) ?></td>
                    <td><?= h($material->VendorProductID) ?></td>
                    <td><?= $this->Number->format($material->ReorderLevel) ?></td>
                    <td><?= $this->Number->format($material->ReorderQty) ?></td>
                    <td><?= $this->Number->format($material->OnHandQty) ?></td>
                    <td><?= $this->Number->format($material->Washups) ?></td>
                    <td><?= h($material->UnitDescription) ?></td>
                    <td><?= $this->Number->format($material->Minimum) ?></td>
                    <td><?= $this->Number->format($material->CostingMethod) ?></td>
                    <td><?= $this->Number->format($material->Height) ?></td>
                    <td><?= h($material->NonStock) ?></td>
                    <td><?= $this->Number->format($material->CubicWeight) ?></td>
                    <td><?= $this->Number->format($material->RollFeet) ?></td>
                    <td><?= $this->Number->format($material->CartonQty) ?></td>
                    <td><?= h($material->PreCollated) ?></td>
                    <td><?= $this->Number->format($material->InkMileage) ?></td>
                    <td><?= h($material->EnterDimensions) ?></td>
                    <td><?= $this->Number->format($material->DefaultMarkup) ?></td>
                    <td><?= h($material->Description) ?></td>
                    <td><?= h($material->Color) ?></td>
                    <td><?= h($material->EntryDate) ?></td>
                    <td><?= h($material->EntryTime) ?></td>
                    <td><?= h($material->SeparateMarkup) ?></td>
                    <td><?= h($material->Description2) ?></td>
                    <td><?= h($material->Description3) ?></td>
                    <td><?= h($material->Description4) ?></td>
                    <td><?= h($material->Description5) ?></td>
                    <td><?= h($material->Description6) ?></td>
                    <td><?= h($material->Description7) ?></td>
                    <td><?= $this->Number->format($material->Option1) ?></td>
                    <td><?= $this->Number->format($material->Option2) ?></td>
                    <td><?= $this->Number->format($material->LinerWeight) ?></td>
                    <td><?= $this->Number->format($material->ValuationMethod) ?></td>
                    <td><?= $this->Number->format($material->RollInventory) ?></td>
                    <td><?= h($material->Comments) ?></td>
                    <td><?= h($material->GLAccount) ?></td>
                    <td><?= h($material->RevisionDate) ?></td>
                    <td><?= $this->Number->format($material->CoreWaste) ?></td>
                    <td><?= h($material->POUnitDescription) ?></td>
                    <td><?= $this->Number->format($material->QtyPerPOUnit) ?></td>
                    <td><?= $this->Number->format($material->HouseQuantity) ?></td>
                    <td><?= h($material->CustAccount) ?></td>
                    <td><?= $this->Number->format($material->CustomerOwned) ?></td>
                    <td><?= $this->Number->format($material->LastReceivedCost) ?></td>
                    <td><?= $this->Number->format($material->FlatCost) ?></td>
                    <td><?= $this->Number->format($material->DefaultCoverage) ?></td>
                    <td><?= h($material->CreateOpr) ?></td>
                    <td><?= h($material->CreateDatim) ?></td>
                    <td><?= h($material->UpdateOpr) ?></td>
                    <td><?= h($material->Updatedatim) ?></td>
                    <td><?= $this->Number->format($material->NoRequisition) ?></td>
                    <td><?= h($material->Description8) ?></td>
                    <td><?= h($material->DefaultLocationCode) ?></td>
                    <td><?= $this->Number->format($material->InventoryByWeightOption) ?></td>
                    <td><?= h($material->UserDefined1) ?></td>
                    <td><?= h($material->UserDefined2) ?></td>
                    <td><?= h($material->UserDefined3) ?></td>
                    <td><?= h($material->UserDefined4) ?></td>
                    <td><?= h($material->UserDefined5) ?></td>
                    <td><?= $this->Number->format($material->CoatedOneSide) ?></td>
                    <td><?= h($material->RFQDescription) ?></td>
                    <td><?= $this->Number->format($material->DontAllocateByRolls) ?></td>
                    <td><?= $this->Number->format($material->InventoryNumberUp) ?></td>
                    <td><?= $this->Number->format($material->CoverageOption1) ?></td>
                    <td><?= h($material->PlantID) ?></td>
                    <td><?= h($material->ParentMaterialCode) ?></td>
                    <td><?= $this->Number->format($material->ParentNumberOut) ?></td>
                    <td><?= $this->Number->format($material->InactiveFlag) ?></td>
                    <td><?= $this->Number->format($material->POCostingMethod) ?></td>
                    <td><?= $this->Number->format($material->PODivisor) ?></td>
                    <td><?= $this->Number->format($material->POFactor) ?></td>
                    <td><?= $this->Number->format($material->RollChange) ?></td>
                    <td><?= $this->Number->format($material->OriginalInvtQuantity) ?></td>
                    <td><?= h($material->OriginalInvtDate) ?></td>
                    <td><?= $this->Number->format($material->LeadTime) ?></td>
                    <td><?= $this->Number->format($material->InspectionRequired) ?></td>
                    <td><?= $this->Number->format($material->MMSI) ?></td>
                    <td><?= $this->Number->format($material->AutoDeduct) ?></td>
                    <td><?= $this->Number->format($material->DontAutoUpdate) ?></td>
                    <td><?= h($material->CustomUOMCode) ?></td>
                    <td><?= $this->Number->format($material->FGPermConverted) ?></td>
                    <td><?= h($material->ManufacturerItemNumber) ?></td>
                    <td><?= h($material->MarkupTable) ?></td>
                    <td><?= $this->Number->format($material->AutoReceiveRolls) ?></td>
                    <td><?= $this->Number->format($material->CoreDiameter) ?></td>
                    <td><?= $this->Number->format($material->RollDiameter) ?></td>
                    <td><?= h($material->CustomerMixedFor) ?></td>
                    <td><?= h($material->MaterialMixedFor) ?></td>
                    <td><?= h($material->BackgroundColor) ?></td>
                    <td><?= h($material->InkUserDefined1) ?></td>
                    <td><?= h($material->ProductTaxCode) ?></td>
                    <td><?= h($material->ShippingTaxCode) ?></td>
                    <td><?= $this->Number->format($material->PerSidePerCopyOption) ?></td>
                    <td><?= $this->Number->format($material->TrackByPallet) ?></td>
                    <td><?= $this->Number->format($material->DataCollectConversion) ?></td>
                    <td><?= $this->Number->format($material->UnitMultiplier) ?></td>
                    <td><?= $this->Number->format($material->ExemptFromCoverageSlowdown) ?></td>
                    <td><?= h($material->GLCOGAccount) ?></td>
                    <td><?= $this->Number->format($material->CalculateCoreWidth) ?></td>
                    <td><?= $this->Number->format($material->UVInk) ?></td>
                    <td><?= $this->Number->format($material->CostConversion) ?></td>
                    <td><?= $this->Number->format($material->MaximumSpineThickness) ?></td>
                    <td><?= $this->Number->format($material->CWTFeet) ?></td>
                    <td><?= $this->Number->format($material->UnitCostOverride) ?></td>
                    <td><?= $this->Number->format($material->Transfer) ?></td>
                    <td><?= $this->Number->format($material->PrintReleafEligible) ?></td>
                    <td><?= $this->Number->format($material->AvgPalletQuantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $material->MaterialCode]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $material->MaterialCode]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $material->MaterialCode], ['confirm' => __('Are you sure you want to delete # {0}?', $material->MaterialCode)]) ?>
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
