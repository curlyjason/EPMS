<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property string|null $CategoryCode
 * @property string|null $MaterialType
 * @property string $MaterialCode
 * @property float|null $Width
 * @property float|null $Length
 * @property float|null $BWT
 * @property float|null $SBS
 * @property float|null $MWT
 * @property float|null $Caliper
 * @property \Cake\I18n\FrozenTime|null $LastUpdated
 * @property string|null $VendorID
 * @property string|null $VendorProductID
 * @property float|null $ReorderLevel
 * @property float|null $ReorderQty
 * @property float|null $OnHandQty
 * @property int|null $Washups
 * @property string|null $UnitDescription
 * @property string|null $Minimum
 * @property int|null $CostingMethod
 * @property float|null $Height
 * @property bool $NonStock
 * @property float|null $CubicWeight
 * @property int|null $RollFeet
 * @property int|null $CartonQty
 * @property bool $PreCollated
 * @property int|null $InkMileage
 * @property bool $EnterDimensions
 * @property float|null $DefaultMarkup
 * @property string|null $Description
 * @property string|null $Color
 * @property \Cake\I18n\FrozenTime|null $EntryDate
 * @property \Cake\I18n\FrozenTime|null $EntryTime
 * @property bool $SeparateMarkup
 * @property string|null $Description2
 * @property string|null $Description3
 * @property string|null $Description4
 * @property string|null $Description5
 * @property string|null $Description6
 * @property string|null $Description7
 * @property int|null $Option1
 * @property int|null $Option2
 * @property float|null $LinerWeight
 * @property int|null $ValuationMethod
 * @property int|null $RollInventory
 * @property string|null $Comments
 * @property string|null $GLAccount
 * @property \Cake\I18n\FrozenTime|null $RevisionDate
 * @property float|null $CoreWaste
 * @property string|null $POUnitDescription
 * @property float|null $QtyPerPOUnit
 * @property int|null $HouseQuantity
 * @property string|null $CustAccount
 * @property int|null $CustomerOwned
 * @property string|null $LastReceivedCost
 * @property string|null $FlatCost
 * @property float|null $DefaultCoverage
 * @property string|null $CreateOpr
 * @property \Cake\I18n\FrozenTime|null $CreateDatim
 * @property string|null $UpdateOpr
 * @property \Cake\I18n\FrozenTime|null $Updatedatim
 * @property int|null $NoRequisition
 * @property string|null $Description8
 * @property string|null $DefaultLocationCode
 * @property int|null $InventoryByWeightOption
 * @property string|null $UserDefined1
 * @property string|null $UserDefined2
 * @property string|null $UserDefined3
 * @property string|null $UserDefined4
 * @property string|null $UserDefined5
 * @property int|null $CoatedOneSide
 * @property string|null $RFQDescription
 * @property int|null $DontAllocateByRolls
 * @property int|null $InventoryNumberUp
 * @property int|null $CoverageOption1
 * @property string|null $PlantID
 * @property string|null $ParentMaterialCode
 * @property int|null $ParentNumberOut
 * @property int|null $InactiveFlag
 * @property int|null $POCostingMethod
 * @property int|null $PODivisor
 * @property float|null $POFactor
 * @property float|null $RollChange
 * @property int|null $OriginalInvtQuantity
 * @property \Cake\I18n\FrozenTime|null $OriginalInvtDate
 * @property int|null $LeadTime
 * @property int|null $InspectionRequired
 * @property float|null $MMSI
 * @property int|null $AutoDeduct
 * @property int|null $DontAutoUpdate
 * @property string|null $CustomUOMCode
 * @property int|null $FGPermConverted
 * @property string|null $ManufacturerItemNumber
 * @property string|null $MarkupTable
 * @property int|null $AutoReceiveRolls
 * @property float|null $CoreDiameter
 * @property float|null $RollDiameter
 * @property string|null $CustomerMixedFor
 * @property string|null $MaterialMixedFor
 * @property string|null $BackgroundColor
 * @property string|null $InkUserDefined1
 * @property string|null $ProductTaxCode
 * @property string|null $ShippingTaxCode
 * @property int|null $PerSidePerCopyOption
 * @property int|null $TrackByPallet
 * @property int|null $DataCollectConversion
 * @property int|null $UnitMultiplier
 * @property int|null $ExemptFromCoverageSlowdown
 * @property string|null $GLCOGAccount
 * @property int|null $CalculateCoreWidth
 * @property int|null $UVInk
 * @property int|null $CostConversion
 * @property float|null $MaximumSpineThickness
 * @property float|null $CWTFeet
 * @property string|null $UnitCostOverride
 * @property int|null $Transfer
 * @property int|null $PrintReleafEligible
 * @property int|null $AvgPalletQuantity
 */
class Material extends Entity
{
}
