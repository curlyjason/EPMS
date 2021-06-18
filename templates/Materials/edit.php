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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $material->MaterialCode],
                ['confirm' => __('Are you sure you want to delete # {0}?', $material->MaterialCode), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Materials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materials form content">
            <?= $this->Form->create($material) ?>
            <fieldset>
                <legend><?= __('Edit Material') ?></legend>
                <?php
                    echo $this->Form->control('CategoryCode');
                    echo $this->Form->control('MaterialType');
                    echo $this->Form->control('Width');
                    echo $this->Form->control('Length');
                    echo $this->Form->control('BWT');
                    echo $this->Form->control('SBS');
                    echo $this->Form->control('MWT');
                    echo $this->Form->control('Caliper');
                    echo $this->Form->control('LastUpdated', ['empty' => true]);
                    echo $this->Form->control('VendorID');
                    echo $this->Form->control('VendorProductID');
                    echo $this->Form->control('ReorderLevel');
                    echo $this->Form->control('ReorderQty');
                    echo $this->Form->control('OnHandQty');
                    echo $this->Form->control('Washups');
                    echo $this->Form->control('UnitDescription');
                    echo $this->Form->control('Minimum');
                    echo $this->Form->control('CostingMethod');
                    echo $this->Form->control('Height');
                    echo $this->Form->control('NonStock');
                    echo $this->Form->control('CubicWeight');
                    echo $this->Form->control('RollFeet');
                    echo $this->Form->control('CartonQty');
                    echo $this->Form->control('PreCollated');
                    echo $this->Form->control('InkMileage');
                    echo $this->Form->control('EnterDimensions');
                    echo $this->Form->control('DefaultMarkup');
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Color');
                    echo $this->Form->control('EntryDate', ['empty' => true]);
                    echo $this->Form->control('EntryTime', ['empty' => true]);
                    echo $this->Form->control('SeparateMarkup');
                    echo $this->Form->control('Description2');
                    echo $this->Form->control('Description3');
                    echo $this->Form->control('Description4');
                    echo $this->Form->control('Description5');
                    echo $this->Form->control('Description6');
                    echo $this->Form->control('Description7');
                    echo $this->Form->control('Option1');
                    echo $this->Form->control('Option2');
                    echo $this->Form->control('LinerWeight');
                    echo $this->Form->control('ValuationMethod');
                    echo $this->Form->control('RollInventory');
                    echo $this->Form->control('Comments');
                    echo $this->Form->control('GLAccount');
                    echo $this->Form->control('RevisionDate', ['empty' => true]);
                    echo $this->Form->control('CoreWaste');
                    echo $this->Form->control('POUnitDescription');
                    echo $this->Form->control('QtyPerPOUnit');
                    echo $this->Form->control('HouseQuantity');
                    echo $this->Form->control('CustAccount');
                    echo $this->Form->control('CustomerOwned');
                    echo $this->Form->control('LastReceivedCost');
                    echo $this->Form->control('FlatCost');
                    echo $this->Form->control('DefaultCoverage');
                    echo $this->Form->control('CreateOpr');
                    echo $this->Form->control('CreateDatim', ['empty' => true]);
                    echo $this->Form->control('UpdateOpr');
                    echo $this->Form->control('Updatedatim', ['empty' => true]);
                    echo $this->Form->control('NoRequisition');
                    echo $this->Form->control('Description8');
                    echo $this->Form->control('DefaultLocationCode');
                    echo $this->Form->control('InventoryByWeightOption');
                    echo $this->Form->control('UserDefined1');
                    echo $this->Form->control('UserDefined2');
                    echo $this->Form->control('UserDefined3');
                    echo $this->Form->control('UserDefined4');
                    echo $this->Form->control('UserDefined5');
                    echo $this->Form->control('CoatedOneSide');
                    echo $this->Form->control('RFQDescription');
                    echo $this->Form->control('DontAllocateByRolls');
                    echo $this->Form->control('InventoryNumberUp');
                    echo $this->Form->control('CoverageOption1');
                    echo $this->Form->control('PlantID');
                    echo $this->Form->control('ParentMaterialCode');
                    echo $this->Form->control('ParentNumberOut');
                    echo $this->Form->control('InactiveFlag');
                    echo $this->Form->control('POCostingMethod');
                    echo $this->Form->control('PODivisor');
                    echo $this->Form->control('POFactor');
                    echo $this->Form->control('RollChange');
                    echo $this->Form->control('OriginalInvtQuantity');
                    echo $this->Form->control('OriginalInvtDate', ['empty' => true]);
                    echo $this->Form->control('LeadTime');
                    echo $this->Form->control('InspectionRequired');
                    echo $this->Form->control('MMSI');
                    echo $this->Form->control('AutoDeduct');
                    echo $this->Form->control('DontAutoUpdate');
                    echo $this->Form->control('CustomUOMCode');
                    echo $this->Form->control('FGPermConverted');
                    echo $this->Form->control('ManufacturerItemNumber');
                    echo $this->Form->control('MarkupTable');
                    echo $this->Form->control('AutoReceiveRolls');
                    echo $this->Form->control('CoreDiameter');
                    echo $this->Form->control('RollDiameter');
                    echo $this->Form->control('CustomerMixedFor');
                    echo $this->Form->control('MaterialMixedFor');
                    echo $this->Form->control('BackgroundColor');
                    echo $this->Form->control('InkUserDefined1');
                    echo $this->Form->control('ProductTaxCode');
                    echo $this->Form->control('ShippingTaxCode');
                    echo $this->Form->control('PerSidePerCopyOption');
                    echo $this->Form->control('TrackByPallet');
                    echo $this->Form->control('DataCollectConversion');
                    echo $this->Form->control('UnitMultiplier');
                    echo $this->Form->control('ExemptFromCoverageSlowdown');
                    echo $this->Form->control('GLCOGAccount');
                    echo $this->Form->control('CalculateCoreWidth');
                    echo $this->Form->control('UVInk');
                    echo $this->Form->control('CostConversion');
                    echo $this->Form->control('MaximumSpineThickness');
                    echo $this->Form->control('CWTFeet');
                    echo $this->Form->control('UnitCostOverride');
                    echo $this->Form->control('Transfer');
                    echo $this->Form->control('PrintReleafEligible');
                    echo $this->Form->control('AvgPalletQuantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
