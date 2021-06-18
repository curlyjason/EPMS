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
            <?= $this->Html->link(__('Edit Order Header'), ['action' => 'edit', $orderHeader->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Header'), ['action' => 'delete', $orderHeader->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderHeader->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Headers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Header'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderHeaders view content">
            <h3><?= h($orderHeader->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('JobNumber') ?></th>
                    <td><?= h($orderHeader->JobNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstimateNumber') ?></th>
                    <td><?= h($orderHeader->EstimateNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustAccount') ?></th>
                    <td><?= h($orderHeader->CustAccount) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustName') ?></th>
                    <td><?= h($orderHeader->CustName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustAddress1') ?></th>
                    <td><?= h($orderHeader->CustAddress1) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustAddress2') ?></th>
                    <td><?= h($orderHeader->CustAddress2) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustCity') ?></th>
                    <td><?= h($orderHeader->CustCity) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustState') ?></th>
                    <td><?= h($orderHeader->CustState) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustZip') ?></th>
                    <td><?= h($orderHeader->CustZip) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustPhone') ?></th>
                    <td><?= h($orderHeader->CustPhone) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustFax') ?></th>
                    <td><?= h($orderHeader->CustFax) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustContact') ?></th>
                    <td><?= h($orderHeader->CustContact) ?></td>
                </tr>
                <tr>
                    <th><?= __('SalesRepCode') ?></th>
                    <td><?= h($orderHeader->SalesRepCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustCountry') ?></th>
                    <td><?= h($orderHeader->CustCountry) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustEmail') ?></th>
                    <td><?= h($orderHeader->CustEmail) ?></td>
                </tr>
                <tr>
                    <th><?= __('EndUserName') ?></th>
                    <td><?= h($orderHeader->EndUserName) ?></td>
                </tr>
                <tr>
                    <th><?= __('EndUserAccount') ?></th>
                    <td><?= h($orderHeader->EndUserAccount) ?></td>
                </tr>
                <tr>
                    <th><?= __('CSR') ?></th>
                    <td><?= h($orderHeader->CSR) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estimator') ?></th>
                    <td><?= h($orderHeader->Estimator) ?></td>
                </tr>
                <tr>
                    <th><?= __('JobDescription') ?></th>
                    <td><?= h($orderHeader->JobDescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('PONumber') ?></th>
                    <td><?= h($orderHeader->PONumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrevPONumber') ?></th>
                    <td><?= h($orderHeader->PrevPONumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrevJobNumber') ?></th>
                    <td><?= h($orderHeader->PrevJobNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('OriginalJobNumber') ?></th>
                    <td><?= h($orderHeader->OriginalJobNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('DistPO') ?></th>
                    <td><?= h($orderHeader->DistPO) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrevDistPO') ?></th>
                    <td><?= h($orderHeader->PrevDistPO) ?></td>
                </tr>
                <tr>
                    <th><?= __('DueTimeText') ?></th>
                    <td><?= h($orderHeader->DueTimeText) ?></td>
                </tr>
                <tr>
                    <th><?= __('JobStatus') ?></th>
                    <td><?= h($orderHeader->JobStatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstTimeFrame') ?></th>
                    <td><?= h($orderHeader->EstTimeFrame) ?></td>
                </tr>
                <tr>
                    <th><?= __('ReleaseNumber') ?></th>
                    <td><?= h($orderHeader->ReleaseNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('OrderType') ?></th>
                    <td><?= h($orderHeader->OrderType) ?></td>
                </tr>
                <tr>
                    <th><?= __('RFQ') ?></th>
                    <td><?= h($orderHeader->RFQ) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProofTimeText') ?></th>
                    <td><?= h($orderHeader->ProofTimeText) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProofComments') ?></th>
                    <td><?= h($orderHeader->ProofComments) ?></td>
                </tr>
                <tr>
                    <th><?= __('RevisionReason') ?></th>
                    <td><?= h($orderHeader->RevisionReason) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined1') ?></th>
                    <td><?= h($orderHeader->UserDefined1) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined2') ?></th>
                    <td><?= h($orderHeader->UserDefined2) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined3') ?></th>
                    <td><?= h($orderHeader->UserDefined3) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined4') ?></th>
                    <td><?= h($orderHeader->UserDefined4) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined5') ?></th>
                    <td><?= h($orderHeader->UserDefined5) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustUserDefined1') ?></th>
                    <td><?= h($orderHeader->CustUserDefined1) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustUserDefined2') ?></th>
                    <td><?= h($orderHeader->CustUserDefined2) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustUserDefined3') ?></th>
                    <td><?= h($orderHeader->CustUserDefined3) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaxCodeA') ?></th>
                    <td><?= h($orderHeader->TaxCodeA) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaxCodeB') ?></th>
                    <td><?= h($orderHeader->TaxCodeB) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaxCodeC') ?></th>
                    <td><?= h($orderHeader->TaxCodeC) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaxCodeD') ?></th>
                    <td><?= h($orderHeader->TaxCodeD) ?></td>
                </tr>
                <tr>
                    <th><?= __('CommissionTableA') ?></th>
                    <td><?= h($orderHeader->CommissionTableA) ?></td>
                </tr>
                <tr>
                    <th><?= __('CommissionTableB') ?></th>
                    <td><?= h($orderHeader->CommissionTableB) ?></td>
                </tr>
                <tr>
                    <th><?= __('JobDetailDescription') ?></th>
                    <td><?= h($orderHeader->JobDetailDescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notes') ?></th>
                    <td><?= h($orderHeader->Notes) ?></td>
                </tr>
                <tr>
                    <th><?= __('BindInstructions') ?></th>
                    <td><?= h($orderHeader->BindInstructions) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstimateStatus') ?></th>
                    <td><?= h($orderHeader->EstimateStatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('FormNumber') ?></th>
                    <td><?= h($orderHeader->FormNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustAddress3') ?></th>
                    <td><?= h($orderHeader->CustAddress3) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustCounty') ?></th>
                    <td><?= h($orderHeader->CustCounty) ?></td>
                </tr>
                <tr>
                    <th><?= __('CollabriaID') ?></th>
                    <td><?= h($orderHeader->CollabriaID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CC Number') ?></th>
                    <td><?= h($orderHeader->CC_Number) ?></td>
                </tr>
                <tr>
                    <th><?= __('ScheduleNotes') ?></th>
                    <td><?= h($orderHeader->ScheduleNotes) ?></td>
                </tr>
                <tr>
                    <th><?= __('PlantID') ?></th>
                    <td><?= h($orderHeader->PlantID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreateOpr') ?></th>
                    <td><?= h($orderHeader->CreateOpr) ?></td>
                </tr>
                <tr>
                    <th><?= __('UpdateOpr') ?></th>
                    <td><?= h($orderHeader->UpdateOpr) ?></td>
                </tr>
                <tr>
                    <th><?= __('CC NameOnCard') ?></th>
                    <td><?= h($orderHeader->CC_NameOnCard) ?></td>
                </tr>
                <tr>
                    <th><?= __('CC Expiration') ?></th>
                    <td><?= h($orderHeader->CC_Expiration) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaxJurisdiction') ?></th>
                    <td><?= h($orderHeader->TaxJurisdiction) ?></td>
                </tr>
                <tr>
                    <th><?= __('OutsideOrderID') ?></th>
                    <td><?= h($orderHeader->OutsideOrderID) ?></td>
                </tr>
                <tr>
                    <th><?= __('PaymentMethod') ?></th>
                    <td><?= h($orderHeader->PaymentMethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('CheckNumber') ?></th>
                    <td><?= h($orderHeader->CheckNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('BackOrderFrom') ?></th>
                    <td><?= h($orderHeader->BackOrderFrom) ?></td>
                </tr>
                <tr>
                    <th><?= __('TemplateCode') ?></th>
                    <td><?= h($orderHeader->TemplateCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('OriginalPlantID') ?></th>
                    <td><?= h($orderHeader->OriginalPlantID) ?></td>
                </tr>
                <tr>
                    <th><?= __('OriginalEstimateNumber') ?></th>
                    <td><?= h($orderHeader->OriginalEstimateNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined1') ?></th>
                    <td><?= h($orderHeader->SchUserDefined1) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined2') ?></th>
                    <td><?= h($orderHeader->SchUserDefined2) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined3') ?></th>
                    <td><?= h($orderHeader->SchUserDefined3) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined4') ?></th>
                    <td><?= h($orderHeader->SchUserDefined4) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined5') ?></th>
                    <td><?= h($orderHeader->SchUserDefined5) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined6') ?></th>
                    <td><?= h($orderHeader->SchUserDefined6) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined7') ?></th>
                    <td><?= h($orderHeader->SchUserDefined7) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined8') ?></th>
                    <td><?= h($orderHeader->SchUserDefined8) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined9') ?></th>
                    <td><?= h($orderHeader->SchUserDefined9) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined10') ?></th>
                    <td><?= h($orderHeader->SchUserDefined10) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined11') ?></th>
                    <td><?= h($orderHeader->SchUserDefined11) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined12') ?></th>
                    <td><?= h($orderHeader->SchUserDefined12) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined13') ?></th>
                    <td><?= h($orderHeader->SchUserDefined13) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined14') ?></th>
                    <td><?= h($orderHeader->SchUserDefined14) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchUserDefined15') ?></th>
                    <td><?= h($orderHeader->SchUserDefined15) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined6') ?></th>
                    <td><?= h($orderHeader->UserDefined6) ?></td>
                </tr>
                <tr>
                    <th><?= __('SurveyContact') ?></th>
                    <td><?= h($orderHeader->SurveyContact) ?></td>
                </tr>
                <tr>
                    <th><?= __('BillingContact') ?></th>
                    <td><?= h($orderHeader->BillingContact) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserDefined7') ?></th>
                    <td><?= h($orderHeader->UserDefined7) ?></td>
                </tr>
                <tr>
                    <th><?= __('ManufacturerItemNumber') ?></th>
                    <td><?= h($orderHeader->ManufacturerItemNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('StatusReasonCode') ?></th>
                    <td><?= h($orderHeader->StatusReasonCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastOpenedBy') ?></th>
                    <td><?= h($orderHeader->LastOpenedBy) ?></td>
                </tr>
                <tr>
                    <th><?= __('CurrencyCode') ?></th>
                    <td><?= h($orderHeader->CurrencyCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrevEstimateNumber') ?></th>
                    <td><?= h($orderHeader->PrevEstimateNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('PriorityLevel') ?></th>
                    <td><?= $this->Number->format($orderHeader->PriorityLevel) ?></td>
                </tr>
                <tr>
                    <th><?= __('CommissionA') ?></th>
                    <td><?= $this->Number->format($orderHeader->CommissionA) ?></td>
                </tr>
                <tr>
                    <th><?= __('CommissionB') ?></th>
                    <td><?= $this->Number->format($orderHeader->CommissionB) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prepayment') ?></th>
                    <td><?= $this->Number->format($orderHeader->Prepayment) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalComponents') ?></th>
                    <td><?= $this->Number->format($orderHeader->TotalComponents) ?></td>
                </tr>
                <tr>
                    <th><?= __('BackOrder') ?></th>
                    <td><?= $this->Number->format($orderHeader->BackOrder) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalSellPrice') ?></th>
                    <td><?= $this->Number->format($orderHeader->TotalSellPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('RecordInUse') ?></th>
                    <td><?= $this->Number->format($orderHeader->RecordInUse) ?></td>
                </tr>
                <tr>
                    <th><?= __('PriceOverrideOption') ?></th>
                    <td><?= $this->Number->format($orderHeader->PriceOverrideOption) ?></td>
                </tr>
                <tr>
                    <th><?= __('NoProofRequired') ?></th>
                    <td><?= $this->Number->format($orderHeader->NoProofRequired) ?></td>
                </tr>
                <tr>
                    <th><?= __('OrderSellPrice') ?></th>
                    <td><?= $this->Number->format($orderHeader->OrderSellPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceSellPrice') ?></th>
                    <td><?= $this->Number->format($orderHeader->InvoiceSellPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastCostCenter') ?></th>
                    <td><?= $this->Number->format($orderHeader->LastCostCenter) ?></td>
                </tr>
                <tr>
                    <th><?= __('CollabriaOrder') ?></th>
                    <td><?= $this->Number->format($orderHeader->CollabriaOrder) ?></td>
                </tr>
                <tr>
                    <th><?= __('CC Exp Month') ?></th>
                    <td><?= $this->Number->format($orderHeader->CC_Exp_Month) ?></td>
                </tr>
                <tr>
                    <th><?= __('CC Exp Year') ?></th>
                    <td><?= $this->Number->format($orderHeader->CC_Exp_Year) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalBookThickness') ?></th>
                    <td><?= $this->Number->format($orderHeader->TotalBookThickness) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalFreightCost') ?></th>
                    <td><?= $this->Number->format($orderHeader->TotalFreightCost) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoicedFreightPrice') ?></th>
                    <td><?= $this->Number->format($orderHeader->InvoicedFreightPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('RFQFlag') ?></th>
                    <td><?= $this->Number->format($orderHeader->RFQFlag) ?></td>
                </tr>
                <tr>
                    <th><?= __('CalculatedTotalPrice') ?></th>
                    <td><?= $this->Number->format($orderHeader->CalculatedTotalPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('NoDueDate') ?></th>
                    <td><?= $this->Number->format($orderHeader->NoDueDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($orderHeader->Discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('UseDMRate') ?></th>
                    <td><?= $this->Number->format($orderHeader->UseDMRate) ?></td>
                </tr>
                <tr>
                    <th><?= __('OnLineUserID') ?></th>
                    <td><?= $this->Number->format($orderHeader->OnLineUserID) ?></td>
                </tr>
                <tr>
                    <th><?= __('OutsideOrder') ?></th>
                    <td><?= $this->Number->format($orderHeader->OutsideOrder) ?></td>
                </tr>
                <tr>
                    <th><?= __('PricingOnLineReady') ?></th>
                    <td><?= $this->Number->format($orderHeader->PricingOnLineReady) ?></td>
                </tr>
                <tr>
                    <th><?= __('MakeComponentCalculations') ?></th>
                    <td><?= $this->Number->format($orderHeader->MakeComponentCalculations) ?></td>
                </tr>
                <tr>
                    <th><?= __('RequestForOrder') ?></th>
                    <td><?= $this->Number->format($orderHeader->RequestForOrder) ?></td>
                </tr>
                <tr>
                    <th><?= __('ManualCommission') ?></th>
                    <td><?= $this->Number->format($orderHeader->ManualCommission) ?></td>
                </tr>
                <tr>
                    <th><?= __('ARJobCloseOut') ?></th>
                    <td><?= $this->Number->format($orderHeader->ARJobCloseOut) ?></td>
                </tr>
                <tr>
                    <th><?= __('GLJobCloseOut') ?></th>
                    <td><?= $this->Number->format($orderHeader->GLJobCloseOut) ?></td>
                </tr>
                <tr>
                    <th><?= __('DontChargeFreight') ?></th>
                    <td><?= $this->Number->format($orderHeader->DontChargeFreight) ?></td>
                </tr>
                <tr>
                    <th><?= __('OriginatedFromRFQ') ?></th>
                    <td><?= $this->Number->format($orderHeader->OriginatedFromRFQ) ?></td>
                </tr>
                <tr>
                    <th><?= __('PickSlipPrinted') ?></th>
                    <td><?= $this->Number->format($orderHeader->PickSlipPrinted) ?></td>
                </tr>
                <tr>
                    <th><?= __('LockSchedule') ?></th>
                    <td><?= $this->Number->format($orderHeader->LockSchedule) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $this->Number->format($orderHeader->Archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaxOverrideAmount') ?></th>
                    <td><?= $this->Number->format($orderHeader->TaxOverrideAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('DontCombineCartonQty') ?></th>
                    <td><?= $this->Number->format($orderHeader->DontCombineCartonQty) ?></td>
                </tr>
                <tr>
                    <th><?= __('SchedulePriority') ?></th>
                    <td><?= $this->Number->format($orderHeader->SchedulePriority) ?></td>
                </tr>
                <tr>
                    <th><?= __('JobRouted') ?></th>
                    <td><?= $this->Number->format($orderHeader->JobRouted) ?></td>
                </tr>
                <tr>
                    <th><?= __('JobPriority') ?></th>
                    <td><?= $this->Number->format($orderHeader->JobPriority) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerOvers') ?></th>
                    <td><?= $this->Number->format($orderHeader->CustomerOvers) ?></td>
                </tr>
                <tr>
                    <th><?= __('AcceleshipOrderId') ?></th>
                    <td><?= $this->Number->format($orderHeader->AcceleshipOrderId) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustContactID') ?></th>
                    <td><?= $this->Number->format($orderHeader->CustContactID) ?></td>
                </tr>
                <tr>
                    <th><?= __('BillContactID') ?></th>
                    <td><?= $this->Number->format($orderHeader->BillContactID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ArCloseOutOption') ?></th>
                    <td><?= $this->Number->format($orderHeader->ArCloseOutOption) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orderHeader->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($orderHeader->Status) ?></td>
                </tr>
                <tr>
                    <th><?= __('ExchangeRate') ?></th>
                    <td><?= $this->Number->format($orderHeader->ExchangeRate) ?></td>
                </tr>
                <tr>
                    <th><?= __('FromCopy') ?></th>
                    <td><?= $this->Number->format($orderHeader->FromCopy) ?></td>
                </tr>
                <tr>
                    <th><?= __('FromEstimate') ?></th>
                    <td><?= $this->Number->format($orderHeader->FromEstimate) ?></td>
                </tr>
                <tr>
                    <th><?= __('FromOrder') ?></th>
                    <td><?= $this->Number->format($orderHeader->FromOrder) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalComponentsQtyCalculated') ?></th>
                    <td><?= $this->Number->format($orderHeader->TotalComponentsQtyCalculated) ?></td>
                </tr>
                <tr>
                    <th><?= __('OpportunityFlag') ?></th>
                    <td><?= $this->Number->format($orderHeader->OpportunityFlag) ?></td>
                </tr>
                <tr>
                    <th><?= __('DueTime') ?></th>
                    <td><?= h($orderHeader->DueTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('DueDate') ?></th>
                    <td><?= h($orderHeader->DueDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstimateDate') ?></th>
                    <td><?= h($orderHeader->EstimateDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('CompleteDate') ?></th>
                    <td><?= h($orderHeader->CompleteDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('OrderDate') ?></th>
                    <td><?= h($orderHeader->OrderDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('RFQDate') ?></th>
                    <td><?= h($orderHeader->RFQDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProofDate') ?></th>
                    <td><?= h($orderHeader->ProofDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProofTime') ?></th>
                    <td><?= h($orderHeader->ProofTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('RevisionDate') ?></th>
                    <td><?= h($orderHeader->RevisionDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EntryDate') ?></th>
                    <td><?= h($orderHeader->EntryDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EntryTime') ?></th>
                    <td><?= h($orderHeader->EntryTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreateDatim') ?></th>
                    <td><?= h($orderHeader->CreateDatim) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updatedatim') ?></th>
                    <td><?= h($orderHeader->Updatedatim) ?></td>
                </tr>
                <tr>
                    <th><?= __('ReorderDate') ?></th>
                    <td><?= h($orderHeader->ReorderDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('DeliveryDate') ?></th>
                    <td><?= h($orderHeader->DeliveryDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProofDeliveryDate') ?></th>
                    <td><?= h($orderHeader->ProofDeliveryDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('QuoteDueDate') ?></th>
                    <td><?= h($orderHeader->QuoteDueDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('PODate') ?></th>
                    <td><?= h($orderHeader->PODate) ?></td>
                </tr>
                <tr>
                    <th><?= __('OrderTime') ?></th>
                    <td><?= h($orderHeader->OrderTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProofApprovalTime') ?></th>
                    <td><?= h($orderHeader->ProofApprovalTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastSurveyDate') ?></th>
                    <td><?= h($orderHeader->LastSurveyDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('JobTicketPrintDate') ?></th>
                    <td><?= h($orderHeader->JobTicketPrintDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstimateDueDate') ?></th>
                    <td><?= h($orderHeader->EstimateDueDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('QuickOrder') ?></th>
                    <td><?= $orderHeader->QuickOrder ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Revision') ?></th>
                    <td><?= $orderHeader->Revision ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalOverride') ?></th>
                    <td><?= $orderHeader->TotalOverride ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('AvaTaxOverride') ?></th>
                    <td><?= $orderHeader->AvaTaxOverride ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('MJobDetailDescription') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($orderHeader->MJobDetailDescription)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('MNotes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($orderHeader->MNotes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('MScheduleNotes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($orderHeader->MScheduleNotes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
