<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderHeader $orderHeader
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderHeader->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderHeader->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Order Headers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderHeaders form content">
            <?= $this->Form->create($orderHeader) ?>
            <fieldset>
                <legend><?= __('Edit Order Header') ?></legend>
                <?php
                    echo $this->Form->control('JobNumber');
                    echo $this->Form->control('EstimateNumber');
                    echo $this->Form->control('CustAccount');
                    echo $this->Form->control('CustName');
                    echo $this->Form->control('CustAddress1');
                    echo $this->Form->control('CustAddress2');
                    echo $this->Form->control('CustCity');
                    echo $this->Form->control('CustState');
                    echo $this->Form->control('CustZip');
                    echo $this->Form->control('CustPhone');
                    echo $this->Form->control('CustFax');
                    echo $this->Form->control('CustContact');
                    echo $this->Form->control('SalesRepCode');
                    echo $this->Form->control('CustCountry');
                    echo $this->Form->control('CustEmail');
                    echo $this->Form->control('EndUserName');
                    echo $this->Form->control('EndUserAccount');
                    echo $this->Form->control('CSR');
                    echo $this->Form->control('Estimator');
                    echo $this->Form->control('JobDescription');
                    echo $this->Form->control('PONumber');
                    echo $this->Form->control('PrevPONumber');
                    echo $this->Form->control('PrevJobNumber');
                    echo $this->Form->control('OriginalJobNumber');
                    echo $this->Form->control('DistPO');
                    echo $this->Form->control('PrevDistPO');
                    echo $this->Form->control('DueTime', ['empty' => true]);
                    echo $this->Form->control('DueDate', ['empty' => true]);
                    echo $this->Form->control('DueTimeText');
                    echo $this->Form->control('EstimateDate', ['empty' => true]);
                    echo $this->Form->control('CompleteDate', ['empty' => true]);
                    echo $this->Form->control('OrderDate', ['empty' => true]);
                    echo $this->Form->control('JobStatus');
                    echo $this->Form->control('EstTimeFrame');
                    echo $this->Form->control('ReleaseNumber');
                    echo $this->Form->control('OrderType');
                    echo $this->Form->control('RFQ');
                    echo $this->Form->control('RFQDate', ['empty' => true]);
                    echo $this->Form->control('ProofDate', ['empty' => true]);
                    echo $this->Form->control('ProofTime', ['empty' => true]);
                    echo $this->Form->control('ProofTimeText');
                    echo $this->Form->control('PriorityLevel');
                    echo $this->Form->control('QuickOrder');
                    echo $this->Form->control('ProofComments');
                    echo $this->Form->control('Revision');
                    echo $this->Form->control('RevisionDate', ['empty' => true]);
                    echo $this->Form->control('RevisionReason');
                    echo $this->Form->control('TotalOverride');
                    echo $this->Form->control('CommissionA');
                    echo $this->Form->control('CommissionB');
                    echo $this->Form->control('UserDefined1');
                    echo $this->Form->control('UserDefined2');
                    echo $this->Form->control('UserDefined3');
                    echo $this->Form->control('UserDefined4');
                    echo $this->Form->control('UserDefined5');
                    echo $this->Form->control('CustUserDefined1');
                    echo $this->Form->control('CustUserDefined2');
                    echo $this->Form->control('CustUserDefined3');
                    echo $this->Form->control('TaxCodeA');
                    echo $this->Form->control('TaxCodeB');
                    echo $this->Form->control('TaxCodeC');
                    echo $this->Form->control('TaxCodeD');
                    echo $this->Form->control('EntryDate', ['empty' => true]);
                    echo $this->Form->control('EntryTime', ['empty' => true]);
                    echo $this->Form->control('CommissionTableA');
                    echo $this->Form->control('CommissionTableB');
                    echo $this->Form->control('JobDetailDescription');
                    echo $this->Form->control('Notes');
                    echo $this->Form->control('BindInstructions');
                    echo $this->Form->control('EstimateStatus');
                    echo $this->Form->control('Prepayment');
                    echo $this->Form->control('FormNumber');
                    echo $this->Form->control('TotalComponents');
                    echo $this->Form->control('BackOrder');
                    echo $this->Form->control('CustAddress3');
                    echo $this->Form->control('CustCounty');
                    echo $this->Form->control('MJobDetailDescription');
                    echo $this->Form->control('TotalSellPrice');
                    echo $this->Form->control('RecordInUse');
                    echo $this->Form->control('PriceOverrideOption');
                    echo $this->Form->control('NoProofRequired');
                    echo $this->Form->control('MNotes');
                    echo $this->Form->control('OrderSellPrice');
                    echo $this->Form->control('InvoiceSellPrice');
                    echo $this->Form->control('LastCostCenter');
                    echo $this->Form->control('CollabriaOrder');
                    echo $this->Form->control('CollabriaID');
                    echo $this->Form->control('CC_Number');
                    echo $this->Form->control('CC_Exp_Month');
                    echo $this->Form->control('CC_Exp_Year');
                    echo $this->Form->control('TotalBookThickness');
                    echo $this->Form->control('TotalFreightCost');
                    echo $this->Form->control('InvoicedFreightPrice');
                    echo $this->Form->control('MScheduleNotes');
                    echo $this->Form->control('ScheduleNotes');
                    echo $this->Form->control('PlantID');
                    echo $this->Form->control('RFQFlag');
                    echo $this->Form->control('CalculatedTotalPrice');
                    echo $this->Form->control('NoDueDate');
                    echo $this->Form->control('CreateOpr');
                    echo $this->Form->control('CreateDatim', ['empty' => true]);
                    echo $this->Form->control('UpdateOpr');
                    echo $this->Form->control('Updatedatim', ['empty' => true]);
                    echo $this->Form->control('CC_NameOnCard');
                    echo $this->Form->control('CC_Expiration');
                    echo $this->Form->control('ReorderDate', ['empty' => true]);
                    echo $this->Form->control('DeliveryDate', ['empty' => true]);
                    echo $this->Form->control('Discount');
                    echo $this->Form->control('UseDMRate');
                    echo $this->Form->control('TaxJurisdiction');
                    echo $this->Form->control('OnLineUserID');
                    echo $this->Form->control('OutsideOrder');
                    echo $this->Form->control('ProofDeliveryDate', ['empty' => true]);
                    echo $this->Form->control('OutsideOrderID');
                    echo $this->Form->control('PricingOnLineReady');
                    echo $this->Form->control('MakeComponentCalculations');
                    echo $this->Form->control('RequestForOrder');
                    echo $this->Form->control('QuoteDueDate', ['empty' => true]);
                    echo $this->Form->control('ManualCommission');
                    echo $this->Form->control('ARJobCloseOut');
                    echo $this->Form->control('GLJobCloseOut');
                    echo $this->Form->control('DontChargeFreight');
                    echo $this->Form->control('OriginatedFromRFQ');
                    echo $this->Form->control('PickSlipPrinted');
                    echo $this->Form->control('PaymentMethod');
                    echo $this->Form->control('CheckNumber');
                    echo $this->Form->control('BackOrderFrom');
                    echo $this->Form->control('TemplateCode');
                    echo $this->Form->control('OriginalPlantID');
                    echo $this->Form->control('OriginalEstimateNumber');
                    echo $this->Form->control('LockSchedule');
                    echo $this->Form->control('SchUserDefined1');
                    echo $this->Form->control('SchUserDefined2');
                    echo $this->Form->control('SchUserDefined3');
                    echo $this->Form->control('SchUserDefined4');
                    echo $this->Form->control('SchUserDefined5');
                    echo $this->Form->control('SchUserDefined6');
                    echo $this->Form->control('SchUserDefined7');
                    echo $this->Form->control('SchUserDefined8');
                    echo $this->Form->control('SchUserDefined9');
                    echo $this->Form->control('SchUserDefined10');
                    echo $this->Form->control('SchUserDefined11');
                    echo $this->Form->control('SchUserDefined12');
                    echo $this->Form->control('SchUserDefined13');
                    echo $this->Form->control('SchUserDefined14');
                    echo $this->Form->control('SchUserDefined15');
                    echo $this->Form->control('Archived');
                    echo $this->Form->control('UserDefined6');
                    echo $this->Form->control('PODate', ['empty' => true]);
                    echo $this->Form->control('TaxOverrideAmount');
                    echo $this->Form->control('OrderTime', ['empty' => true]);
                    echo $this->Form->control('ProofApprovalTime', ['empty' => true]);
                    echo $this->Form->control('LastSurveyDate', ['empty' => true]);
                    echo $this->Form->control('DontCombineCartonQty');
                    echo $this->Form->control('SurveyContact');
                    echo $this->Form->control('SchedulePriority');
                    echo $this->Form->control('JobRouted');
                    echo $this->Form->control('BillingContact');
                    echo $this->Form->control('UserDefined7');
                    echo $this->Form->control('ManufacturerItemNumber');
                    echo $this->Form->control('StatusReasonCode');
                    echo $this->Form->control('JobPriority');
                    echo $this->Form->control('JobTicketPrintDate', ['empty' => true]);
                    echo $this->Form->control('CustomerOvers');
                    echo $this->Form->control('AcceleshipOrderId');
                    echo $this->Form->control('LastOpenedBy');
                    echo $this->Form->control('CustContactID');
                    echo $this->Form->control('BillContactID');
                    echo $this->Form->control('EstimateDueDate', ['empty' => true]);
                    echo $this->Form->control('ArCloseOutOption');
                    echo $this->Form->control('Status');
                    echo $this->Form->control('CurrencyCode');
                    echo $this->Form->control('ExchangeRate');
                    echo $this->Form->control('FromCopy');
                    echo $this->Form->control('FromEstimate');
                    echo $this->Form->control('FromOrder');
                    echo $this->Form->control('PrevEstimateNumber');
                    echo $this->Form->control('TotalComponentsQtyCalculated');
                    echo $this->Form->control('OpportunityFlag');
                    echo $this->Form->control('AvaTaxOverride');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
