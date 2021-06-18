<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Material $material
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Material'), ['action' => 'edit', $material->MaterialCode], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Material'), ['action' => 'delete', $material->MaterialCode], ['confirm' => __('Are you sure you want to delete # {0}?', $material->MaterialCode), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Materials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Material'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materials view content">
            <h3><?= h($material->MaterialCode) ?></h3>
            <table>
                <tr>
                    <th><?= __('CategoryCode') ?></th>
                    <td><?= h($material->CategoryCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('MaterialType') ?></th>
                    <td><?= h($material->MaterialType) ?></td>
                </tr>
                <tr>
                    <th><?= __('MaterialCode') ?></th>
                    <td><?= h($material->MaterialCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('VendorID') ?></th>
                    <td><?= h($material->VendorID) ?></td>
                </tr>
                <tr>
                    <th><?= __('VendorProductID') ?></th>
                    <td><?= h($material->VendorProductID) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitDescription') ?></th>
                    <td><?= h($material->UnitDescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($material->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($material->Color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description2') ?></th>
                    <td><?= h($material->Description2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description3') ?></th>
                    <td><?= h($material->Description3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description4') ?></th>
                    <td><?= h($material->Description4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description5') ?></th>
                    <td><?= h($material->Description5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description6') ?></th>
                    <td><?= h($material->Description6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description7') ?></th>
                    <td><?= h($material->Description7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comments') ?></th>
                    <td><?= h($material->Comments) ?></td>
                </tr>
                <tr>
                    <th><?= __('GLAccount') ?></th>
                    <td><?= h($material->GLAccount) ?></td>
                </tr>
                <tr>
                    <th><?= __('POUnitDescription') ?></th>
                    <td><?= h($material->POUnitDescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustAccount') ?></th>
                    <td><?= h($material->CustAccount) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreateOpr') ?></th>
                    <td><?= h($material->CreateOpr) ?></td>
                </tr>
                <tr>
                    <th><?= __('UpdateOpr') ?></th>
                    <td><?= h($material->UpdateOpr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description8') ?></th>
                    <td><?= h($material->Description8) ?></td>
                </tr>
                <tr>
                    <th><?= __('DefaultLocationCode') ?></th>
                    <td><?= h($material->DefaultLocationCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined1') ?></th>
                    <td><?= h($material->UserDefined1) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined2') ?></th>
                    <td><?= h($material->UserDefined2) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined3') ?></th>
                    <td><?= h($material->UserDefined3) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined4') ?></th>
                    <td><?= h($material->UserDefined4) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined5') ?></th>
                    <td><?= h($material->UserDefined5) ?></td>
                </tr>
                <tr>
                    <th><?= __('RFQDescription') ?></th>
                    <td><?= h($material->RFQDescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('PlantID') ?></th>
                    <td><?= h($material->PlantID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ParentMaterialCode') ?></th>
                    <td><?= h($material->ParentMaterialCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomUOMCode') ?></th>
                    <td><?= h($material->CustomUOMCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('ManufacturerItemNumber') ?></th>
                    <td><?= h($material->ManufacturerItemNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('MarkupTable') ?></th>
                    <td><?= h($material->MarkupTable) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerMixedFor') ?></th>
                    <td><?= h($material->CustomerMixedFor) ?></td>
                </tr>
                <tr>
                    <th><?= __('MaterialMixedFor') ?></th>
                    <td><?= h($material->MaterialMixedFor) ?></td>
                </tr>
                <tr>
                    <th><?= __('BackgroundColor') ?></th>
                    <td><?= h($material->BackgroundColor) ?></td>
                </tr>
                <tr>
                    <th><?= __('InkUserDefined1') ?></th>
                    <td><?= h($material->InkUserDefined1) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProductTaxCode') ?></th>
                    <td><?= h($material->ProductTaxCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('ShippingTaxCode') ?></th>
                    <td><?= h($material->ShippingTaxCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('GLCOGAccount') ?></th>
                    <td><?= h($material->GLCOGAccount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Width') ?></th>
                    <td><?= $this->Number->format($material->Width) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length') ?></th>
                    <td><?= $this->Number->format($material->Length) ?></td>
                </tr>
                <tr>
                    <th><?= __('BWT') ?></th>
                    <td><?= $this->Number->format($material->BWT) ?></td>
                </tr>
                <tr>
                    <th><?= __('SBS') ?></th>
                    <td><?= $this->Number->format($material->SBS) ?></td>
                </tr>
                <tr>
                    <th><?= __('MWT') ?></th>
                    <td><?= $this->Number->format($material->MWT) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caliper') ?></th>
                    <td><?= $this->Number->format($material->Caliper) ?></td>
                </tr>
                <tr>
                    <th><?= __('ReorderLevel') ?></th>
                    <td><?= $this->Number->format($material->ReorderLevel) ?></td>
                </tr>
                <tr>
                    <th><?= __('ReorderQty') ?></th>
                    <td><?= $this->Number->format($material->ReorderQty) ?></td>
                </tr>
                <tr>
                    <th><?= __('OnHandQty') ?></th>
                    <td><?= $this->Number->format($material->OnHandQty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Washups') ?></th>
                    <td><?= $this->Number->format($material->Washups) ?></td>
                </tr>
                <tr>
                    <th><?= __('Minimum') ?></th>
                    <td><?= $this->Number->format($material->Minimum) ?></td>
                </tr>
                <tr>
                    <th><?= __('CostingMethod') ?></th>
                    <td><?= $this->Number->format($material->CostingMethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= $this->Number->format($material->Height) ?></td>
                </tr>
                <tr>
                    <th><?= __('CubicWeight') ?></th>
                    <td><?= $this->Number->format($material->CubicWeight) ?></td>
                </tr>
                <tr>
                    <th><?= __('RollFeet') ?></th>
                    <td><?= $this->Number->format($material->RollFeet) ?></td>
                </tr>
                <tr>
                    <th><?= __('CartonQty') ?></th>
                    <td><?= $this->Number->format($material->CartonQty) ?></td>
                </tr>
                <tr>
                    <th><?= __('InkMileage') ?></th>
                    <td><?= $this->Number->format($material->InkMileage) ?></td>
                </tr>
                <tr>
                    <th><?= __('DefaultMarkup') ?></th>
                    <td><?= $this->Number->format($material->DefaultMarkup) ?></td>
                </tr>
                <tr>
                    <th><?= __('Option1') ?></th>
                    <td><?= $this->Number->format($material->Option1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Option2') ?></th>
                    <td><?= $this->Number->format($material->Option2) ?></td>
                </tr>
                <tr>
                    <th><?= __('LinerWeight') ?></th>
                    <td><?= $this->Number->format($material->LinerWeight) ?></td>
                </tr>
                <tr>
                    <th><?= __('ValuationMethod') ?></th>
                    <td><?= $this->Number->format($material->ValuationMethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('RollInventory') ?></th>
                    <td><?= $this->Number->format($material->RollInventory) ?></td>
                </tr>
                <tr>
                    <th><?= __('CoreWaste') ?></th>
                    <td><?= $this->Number->format($material->CoreWaste) ?></td>
                </tr>
                <tr>
                    <th><?= __('QtyPerPOUnit') ?></th>
                    <td><?= $this->Number->format($material->QtyPerPOUnit) ?></td>
                </tr>
                <tr>
                    <th><?= __('HouseQuantity') ?></th>
                    <td><?= $this->Number->format($material->HouseQuantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerOwned') ?></th>
                    <td><?= $this->Number->format($material->CustomerOwned) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastReceivedCost') ?></th>
                    <td><?= $this->Number->format($material->LastReceivedCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('FlatCost') ?></th>
                    <td><?= $this->Number->format($material->FlatCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('DefaultCoverage') ?></th>
                    <td><?= $this->Number->format($material->DefaultCoverage) ?></td>
                </tr>
                <tr>
                    <th><?= __('NoRequisition') ?></th>
                    <td><?= $this->Number->format($material->NoRequisition) ?></td>
                </tr>
                <tr>
                    <th><?= __('InventoryByWeightOption') ?></th>
                    <td><?= $this->Number->format($material->InventoryByWeightOption) ?></td>
                </tr>
                <tr>
                    <th><?= __('CoatedOneSide') ?></th>
                    <td><?= $this->Number->format($material->CoatedOneSide) ?></td>
                </tr>
                <tr>
                    <th><?= __('DontAllocateByRolls') ?></th>
                    <td><?= $this->Number->format($material->DontAllocateByRolls) ?></td>
                </tr>
                <tr>
                    <th><?= __('InventoryNumberUp') ?></th>
                    <td><?= $this->Number->format($material->InventoryNumberUp) ?></td>
                </tr>
                <tr>
                    <th><?= __('CoverageOption1') ?></th>
                    <td><?= $this->Number->format($material->CoverageOption1) ?></td>
                </tr>
                <tr>
                    <th><?= __('ParentNumberOut') ?></th>
                    <td><?= $this->Number->format($material->ParentNumberOut) ?></td>
                </tr>
                <tr>
                    <th><?= __('InactiveFlag') ?></th>
                    <td><?= $this->Number->format($material->InactiveFlag) ?></td>
                </tr>
                <tr>
                    <th><?= __('POCostingMethod') ?></th>
                    <td><?= $this->Number->format($material->POCostingMethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('PODivisor') ?></th>
                    <td><?= $this->Number->format($material->PODivisor) ?></td>
                </tr>
                <tr>
                    <th><?= __('POFactor') ?></th>
                    <td><?= $this->Number->format($material->POFactor) ?></td>
                </tr>
                <tr>
                    <th><?= __('RollChange') ?></th>
                    <td><?= $this->Number->format($material->RollChange) ?></td>
                </tr>
                <tr>
                    <th><?= __('OriginalInvtQuantity') ?></th>
                    <td><?= $this->Number->format($material->OriginalInvtQuantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('LeadTime') ?></th>
                    <td><?= $this->Number->format($material->LeadTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('InspectionRequired') ?></th>
                    <td><?= $this->Number->format($material->InspectionRequired) ?></td>
                </tr>
                <tr>
                    <th><?= __('MMSI') ?></th>
                    <td><?= $this->Number->format($material->MMSI) ?></td>
                </tr>
                <tr>
                    <th><?= __('AutoDeduct') ?></th>
                    <td><?= $this->Number->format($material->AutoDeduct) ?></td>
                </tr>
                <tr>
                    <th><?= __('DontAutoUpdate') ?></th>
                    <td><?= $this->Number->format($material->DontAutoUpdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('FGPermConverted') ?></th>
                    <td><?= $this->Number->format($material->FGPermConverted) ?></td>
                </tr>
                <tr>
                    <th><?= __('AutoReceiveRolls') ?></th>
                    <td><?= $this->Number->format($material->AutoReceiveRolls) ?></td>
                </tr>
                <tr>
                    <th><?= __('CoreDiameter') ?></th>
                    <td><?= $this->Number->format($material->CoreDiameter) ?></td>
                </tr>
                <tr>
                    <th><?= __('RollDiameter') ?></th>
                    <td><?= $this->Number->format($material->RollDiameter) ?></td>
                </tr>
                <tr>
                    <th><?= __('PerSidePerCopyOption') ?></th>
                    <td><?= $this->Number->format($material->PerSidePerCopyOption) ?></td>
                </tr>
                <tr>
                    <th><?= __('TrackByPallet') ?></th>
                    <td><?= $this->Number->format($material->TrackByPallet) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataCollectConversion') ?></th>
                    <td><?= $this->Number->format($material->DataCollectConversion) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitMultiplier') ?></th>
                    <td><?= $this->Number->format($material->UnitMultiplier) ?></td>
                </tr>
                <tr>
                    <th><?= __('ExemptFromCoverageSlowdown') ?></th>
                    <td><?= $this->Number->format($material->ExemptFromCoverageSlowdown) ?></td>
                </tr>
                <tr>
                    <th><?= __('CalculateCoreWidth') ?></th>
                    <td><?= $this->Number->format($material->CalculateCoreWidth) ?></td>
                </tr>
                <tr>
                    <th><?= __('UVInk') ?></th>
                    <td><?= $this->Number->format($material->UVInk) ?></td>
                </tr>
                <tr>
                    <th><?= __('CostConversion') ?></th>
                    <td><?= $this->Number->format($material->CostConversion) ?></td>
                </tr>
                <tr>
                    <th><?= __('MaximumSpineThickness') ?></th>
                    <td><?= $this->Number->format($material->MaximumSpineThickness) ?></td>
                </tr>
                <tr>
                    <th><?= __('CWTFeet') ?></th>
                    <td><?= $this->Number->format($material->CWTFeet) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitCostOverride') ?></th>
                    <td><?= $this->Number->format($material->UnitCostOverride) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transfer') ?></th>
                    <td><?= $this->Number->format($material->Transfer) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrintReleafEligible') ?></th>
                    <td><?= $this->Number->format($material->PrintReleafEligible) ?></td>
                </tr>
                <tr>
                    <th><?= __('AvgPalletQuantity') ?></th>
                    <td><?= $this->Number->format($material->AvgPalletQuantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastUpdated') ?></th>
                    <td><?= h($material->LastUpdated) ?></td>
                </tr>
                <tr>
                    <th><?= __('EntryDate') ?></th>
                    <td><?= h($material->EntryDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EntryTime') ?></th>
                    <td><?= h($material->EntryTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('RevisionDate') ?></th>
                    <td><?= h($material->RevisionDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreateDatim') ?></th>
                    <td><?= h($material->CreateDatim) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updatedatim') ?></th>
                    <td><?= h($material->Updatedatim) ?></td>
                </tr>
                <tr>
                    <th><?= __('OriginalInvtDate') ?></th>
                    <td><?= h($material->OriginalInvtDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('NonStock') ?></th>
                    <td><?= $material->NonStock ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('PreCollated') ?></th>
                    <td><?= $material->PreCollated ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('EnterDimensions') ?></th>
                    <td><?= $material->EnterDimensions ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('SeparateMarkup') ?></th>
                    <td><?= $material->SeparateMarkup ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Material Unit Costs') ?></h4>
                <?php if (!empty($material->material_unit_costs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('MaterialCode') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('UnitCost') ?></th>
                            <th><?= __('EntryDate') ?></th>
                            <th><?= __('EntryTime') ?></th>
                            <th><?= __('CreateOpr') ?></th>
                            <th><?= __('CreateDatim') ?></th>
                            <th><?= __('UpdateOpr') ?></th>
                            <th><?= __('Updatedatim') ?></th>
                            <th><?= __('ContractUnitCost') ?></th>
                            <th><?= __('POUnitCost') ?></th>
                            <th><?= __('FlatCost') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($material->material_unit_costs as $materialUnitCosts) : ?>
                        <tr>
                            <td><?= h($materialUnitCosts->MaterialCode) ?></td>
                            <td><?= h($materialUnitCosts->Quantity) ?></td>
                            <td><?= h($materialUnitCosts->UnitCost) ?></td>
                            <td><?= h($materialUnitCosts->EntryDate) ?></td>
                            <td><?= h($materialUnitCosts->EntryTime) ?></td>
                            <td><?= h($materialUnitCosts->CreateOpr) ?></td>
                            <td><?= h($materialUnitCosts->CreateDatim) ?></td>
                            <td><?= h($materialUnitCosts->UpdateOpr) ?></td>
                            <td><?= h($materialUnitCosts->Updatedatim) ?></td>
                            <td><?= h($materialUnitCosts->ContractUnitCost) ?></td>
                            <td><?= h($materialUnitCosts->POUnitCost) ?></td>
                            <td><?= h($materialUnitCosts->FlatCost) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MaterialUnitCosts', 'action' => 'view', $materialUnitCosts->MaterialCode]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MaterialUnitCosts', 'action' => 'edit', $materialUnitCosts->MaterialCode]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MaterialUnitCosts', 'action' => 'delete', $materialUnitCosts->MaterialCode], ['confirm' => __('Are you sure you want to delete # {0}?', $materialUnitCosts->MaterialCode)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
