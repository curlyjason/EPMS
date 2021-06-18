<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderHeader Entity
 *
 * @property string $JobNumber
 * @property string|null $EstimateNumber
 * @property string|null $CustAccount
 * @property string|null $CustName
 * @property string|null $CustAddress1
 * @property string|null $CustAddress2
 * @property string|null $CustCity
 * @property string|null $CustState
 * @property string|null $CustZip
 * @property string|null $CustPhone
 * @property string|null $CustFax
 * @property string|null $CustContact
 * @property string|null $SalesRepCode
 * @property string|null $CustCountry
 * @property string|null $CustEmail
 * @property string|null $EndUserName
 * @property string|null $EndUserAccount
 * @property string|null $CSR
 * @property string|null $Estimator
 * @property string|null $JobDescription
 * @property string|null $PONumber
 * @property string|null $PrevPONumber
 * @property string|null $PrevJobNumber
 * @property string|null $OriginalJobNumber
 * @property string|null $DistPO
 * @property string|null $PrevDistPO
 * @property \Cake\I18n\FrozenTime|null $DueTime
 * @property \Cake\I18n\FrozenTime|null $DueDate
 * @property string|null $DueTimeText
 * @property \Cake\I18n\FrozenTime|null $EstimateDate
 * @property \Cake\I18n\FrozenTime|null $CompleteDate
 * @property \Cake\I18n\FrozenTime|null $OrderDate
 * @property string|null $JobStatus
 * @property string|null $EstTimeFrame
 * @property string|null $ReleaseNumber
 * @property string|null $OrderType
 * @property string|null $RFQ
 * @property \Cake\I18n\FrozenTime|null $RFQDate
 * @property \Cake\I18n\FrozenTime|null $ProofDate
 * @property \Cake\I18n\FrozenTime|null $ProofTime
 * @property string|null $ProofTimeText
 * @property int|null $PriorityLevel
 * @property bool $QuickOrder
 * @property string|null $ProofComments
 * @property bool $Revision
 * @property \Cake\I18n\FrozenTime|null $RevisionDate
 * @property string|null $RevisionReason
 * @property bool $TotalOverride
 * @property float|null $CommissionA
 * @property float|null $CommissionB
 * @property string $UserDefined1
 * @property string $UserDefined2
 * @property string $UserDefined3
 * @property string $UserDefined4
 * @property string $UserDefined5
 * @property string|null $CustUserDefined1
 * @property string|null $CustUserDefined2
 * @property string|null $CustUserDefined3
 * @property string|null $TaxCodeA
 * @property string|null $TaxCodeB
 * @property string|null $TaxCodeC
 * @property string|null $TaxCodeD
 * @property \Cake\I18n\FrozenTime|null $EntryDate
 * @property \Cake\I18n\FrozenTime|null $EntryTime
 * @property string|null $CommissionTableA
 * @property string|null $CommissionTableB
 * @property string|null $JobDetailDescription
 * @property string|null $Notes
 * @property string|null $BindInstructions
 * @property string|null $EstimateStatus
 * @property string|null $Prepayment
 * @property string|null $FormNumber
 * @property int|null $TotalComponents
 * @property int|null $BackOrder
 * @property string|null $CustAddress3
 * @property string|null $CustCounty
 * @property string|null $MJobDetailDescription
 * @property string|null $TotalSellPrice
 * @property int|null $RecordInUse
 * @property int|null $PriceOverrideOption
 * @property int|null $NoProofRequired
 * @property string|null $MNotes
 * @property string|null $OrderSellPrice
 * @property string|null $InvoiceSellPrice
 * @property int|null $LastCostCenter
 * @property int|null $CollabriaOrder
 * @property string|null $CollabriaID
 * @property string|null $CC_Number
 * @property int|null $CC_Exp_Month
 * @property int|null $CC_Exp_Year
 * @property float|null $TotalBookThickness
 * @property string|null $TotalFreightCost
 * @property string|null $InvoicedFreightPrice
 * @property string|null $MScheduleNotes
 * @property string|null $ScheduleNotes
 * @property string|null $PlantID
 * @property int|null $RFQFlag
 * @property string|null $CalculatedTotalPrice
 * @property int|null $NoDueDate
 * @property string|null $CreateOpr
 * @property \Cake\I18n\FrozenTime|null $CreateDatim
 * @property string|null $UpdateOpr
 * @property \Cake\I18n\FrozenTime|null $Updatedatim
 * @property string|null $CC_NameOnCard
 * @property string|null $CC_Expiration
 * @property \Cake\I18n\FrozenTime|null $ReorderDate
 * @property \Cake\I18n\FrozenTime|null $DeliveryDate
 * @property float|null $Discount
 * @property int|null $UseDMRate
 * @property string|null $TaxJurisdiction
 * @property int|null $OnLineUserID
 * @property int|null $OutsideOrder
 * @property \Cake\I18n\FrozenTime|null $ProofDeliveryDate
 * @property string|null $OutsideOrderID
 * @property int|null $PricingOnLineReady
 * @property int|null $MakeComponentCalculations
 * @property int|null $RequestForOrder
 * @property \Cake\I18n\FrozenTime|null $QuoteDueDate
 * @property string|null $ManualCommission
 * @property int|null $ARJobCloseOut
 * @property int|null $GLJobCloseOut
 * @property int|null $DontChargeFreight
 * @property int|null $OriginatedFromRFQ
 * @property int|null $PickSlipPrinted
 * @property string|null $PaymentMethod
 * @property string|null $CheckNumber
 * @property string|null $BackOrderFrom
 * @property string|null $TemplateCode
 * @property string|null $OriginalPlantID
 * @property string|null $OriginalEstimateNumber
 * @property int|null $LockSchedule
 * @property string|null $SchUserDefined1
 * @property string|null $SchUserDefined2
 * @property string|null $SchUserDefined3
 * @property string|null $SchUserDefined4
 * @property string|null $SchUserDefined5
 * @property string|null $SchUserDefined6
 * @property string|null $SchUserDefined7
 * @property string|null $SchUserDefined8
 * @property string|null $SchUserDefined9
 * @property string|null $SchUserDefined10
 * @property string|null $SchUserDefined11
 * @property string|null $SchUserDefined12
 * @property string|null $SchUserDefined13
 * @property string|null $SchUserDefined14
 * @property string|null $SchUserDefined15
 * @property int|null $Archived
 * @property string|null $UserDefined6
 * @property \Cake\I18n\FrozenTime|null $PODate
 * @property string|null $TaxOverrideAmount
 * @property \Cake\I18n\FrozenTime|null $OrderTime
 * @property \Cake\I18n\FrozenTime|null $ProofApprovalTime
 * @property \Cake\I18n\FrozenTime|null $LastSurveyDate
 * @property int|null $DontCombineCartonQty
 * @property string|null $SurveyContact
 * @property int|null $SchedulePriority
 * @property int|null $JobRouted
 * @property string|null $BillingContact
 * @property string|null $UserDefined7
 * @property string|null $ManufacturerItemNumber
 * @property string|null $StatusReasonCode
 * @property int|null $JobPriority
 * @property \Cake\I18n\FrozenTime|null $JobTicketPrintDate
 * @property float|null $CustomerOvers
 * @property int|null $AcceleshipOrderId
 * @property string|null $LastOpenedBy
 * @property int $CustContactID
 * @property int $BillContactID
 * @property \Cake\I18n\FrozenTime|null $EstimateDueDate
 * @property int|null $ArCloseOutOption
 * @property int $ID
 * @property int|null $Status
 * @property string|null $CurrencyCode
 * @property float|null $ExchangeRate
 * @property int|null $FromCopy
 * @property int|null $FromEstimate
 * @property int|null $FromOrder
 * @property string|null $PrevEstimateNumber
 * @property int|null $TotalComponentsQtyCalculated
 * @property int|null $OpportunityFlag
 * @property bool|null $AvaTaxOverride
 */
class OrderHeader extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'JobNumber' => true,
        'EstimateNumber' => true,
        'CustAccount' => true,
        'CustName' => true,
        'CustAddress1' => true,
        'CustAddress2' => true,
        'CustCity' => true,
        'CustState' => true,
        'CustZip' => true,
        'CustPhone' => true,
        'CustFax' => true,
        'CustContact' => true,
        'SalesRepCode' => true,
        'CustCountry' => true,
        'CustEmail' => true,
        'EndUserName' => true,
        'EndUserAccount' => true,
        'CSR' => true,
        'Estimator' => true,
        'JobDescription' => true,
        'PONumber' => true,
        'PrevPONumber' => true,
        'PrevJobNumber' => true,
        'OriginalJobNumber' => true,
        'DistPO' => true,
        'PrevDistPO' => true,
        'DueTime' => true,
        'DueDate' => true,
        'DueTimeText' => true,
        'EstimateDate' => true,
        'CompleteDate' => true,
        'OrderDate' => true,
        'JobStatus' => true,
        'EstTimeFrame' => true,
        'ReleaseNumber' => true,
        'OrderType' => true,
        'RFQ' => true,
        'RFQDate' => true,
        'ProofDate' => true,
        'ProofTime' => true,
        'ProofTimeText' => true,
        'PriorityLevel' => true,
        'QuickOrder' => true,
        'ProofComments' => true,
        'Revision' => true,
        'RevisionDate' => true,
        'RevisionReason' => true,
        'TotalOverride' => true,
        'CommissionA' => true,
        'CommissionB' => true,
        'UserDefined1' => true,
        'UserDefined2' => true,
        'UserDefined3' => true,
        'UserDefined4' => true,
        'UserDefined5' => true,
        'CustUserDefined1' => true,
        'CustUserDefined2' => true,
        'CustUserDefined3' => true,
        'TaxCodeA' => true,
        'TaxCodeB' => true,
        'TaxCodeC' => true,
        'TaxCodeD' => true,
        'EntryDate' => true,
        'EntryTime' => true,
        'CommissionTableA' => true,
        'CommissionTableB' => true,
        'JobDetailDescription' => true,
        'Notes' => true,
        'BindInstructions' => true,
        'EstimateStatus' => true,
        'Prepayment' => true,
        'FormNumber' => true,
        'TotalComponents' => true,
        'BackOrder' => true,
        'CustAddress3' => true,
        'CustCounty' => true,
        'MJobDetailDescription' => true,
        'TotalSellPrice' => true,
        'RecordInUse' => true,
        'PriceOverrideOption' => true,
        'NoProofRequired' => true,
        'MNotes' => true,
        'OrderSellPrice' => true,
        'InvoiceSellPrice' => true,
        'LastCostCenter' => true,
        'CollabriaOrder' => true,
        'CollabriaID' => true,
        'CC_Number' => true,
        'CC_Exp_Month' => true,
        'CC_Exp_Year' => true,
        'TotalBookThickness' => true,
        'TotalFreightCost' => true,
        'InvoicedFreightPrice' => true,
        'MScheduleNotes' => true,
        'ScheduleNotes' => true,
        'PlantID' => true,
        'RFQFlag' => true,
        'CalculatedTotalPrice' => true,
        'NoDueDate' => true,
        'CreateOpr' => true,
        'CreateDatim' => true,
        'UpdateOpr' => true,
        'Updatedatim' => true,
        'CC_NameOnCard' => true,
        'CC_Expiration' => true,
        'ReorderDate' => true,
        'DeliveryDate' => true,
        'Discount' => true,
        'UseDMRate' => true,
        'TaxJurisdiction' => true,
        'OnLineUserID' => true,
        'OutsideOrder' => true,
        'ProofDeliveryDate' => true,
        'OutsideOrderID' => true,
        'PricingOnLineReady' => true,
        'MakeComponentCalculations' => true,
        'RequestForOrder' => true,
        'QuoteDueDate' => true,
        'ManualCommission' => true,
        'ARJobCloseOut' => true,
        'GLJobCloseOut' => true,
        'DontChargeFreight' => true,
        'OriginatedFromRFQ' => true,
        'PickSlipPrinted' => true,
        'PaymentMethod' => true,
        'CheckNumber' => true,
        'BackOrderFrom' => true,
        'TemplateCode' => true,
        'OriginalPlantID' => true,
        'OriginalEstimateNumber' => true,
        'LockSchedule' => true,
        'SchUserDefined1' => true,
        'SchUserDefined2' => true,
        'SchUserDefined3' => true,
        'SchUserDefined4' => true,
        'SchUserDefined5' => true,
        'SchUserDefined6' => true,
        'SchUserDefined7' => true,
        'SchUserDefined8' => true,
        'SchUserDefined9' => true,
        'SchUserDefined10' => true,
        'SchUserDefined11' => true,
        'SchUserDefined12' => true,
        'SchUserDefined13' => true,
        'SchUserDefined14' => true,
        'SchUserDefined15' => true,
        'Archived' => true,
        'UserDefined6' => true,
        'PODate' => true,
        'TaxOverrideAmount' => true,
        'OrderTime' => true,
        'ProofApprovalTime' => true,
        'LastSurveyDate' => true,
        'DontCombineCartonQty' => true,
        'SurveyContact' => true,
        'SchedulePriority' => true,
        'JobRouted' => true,
        'BillingContact' => true,
        'UserDefined7' => true,
        'ManufacturerItemNumber' => true,
        'StatusReasonCode' => true,
        'JobPriority' => true,
        'JobTicketPrintDate' => true,
        'CustomerOvers' => true,
        'AcceleshipOrderId' => true,
        'LastOpenedBy' => true,
        'CustContactID' => true,
        'BillContactID' => true,
        'EstimateDueDate' => true,
        'ArCloseOutOption' => true,
        'Status' => true,
        'CurrencyCode' => true,
        'ExchangeRate' => true,
        'FromCopy' => true,
        'FromEstimate' => true,
        'FromOrder' => true,
        'PrevEstimateNumber' => true,
        'TotalComponentsQtyCalculated' => true,
        'OpportunityFlag' => true,
        'AvaTaxOverride' => true,
    ];
}
