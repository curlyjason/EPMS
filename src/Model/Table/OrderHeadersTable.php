<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderHeaders Model
 *
 * @method \App\Model\Entity\OrderHeader newEmptyEntity()
 * @method \App\Model\Entity\OrderHeader newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrderHeader[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrderHeader get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrderHeader findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrderHeader patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrderHeader[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrderHeader|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderHeader saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderHeader[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderHeader[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderHeader[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderHeader[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrderHeadersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('OrderHeader');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('JobNumber')
            ->maxLength('JobNumber', 20)
            ->requirePresence('JobNumber', 'create')
            ->notEmptyString('JobNumber');

        $validator
            ->scalar('EstimateNumber')
            ->maxLength('EstimateNumber', 20)
            ->allowEmptyString('EstimateNumber');

        $validator
            ->scalar('CustAccount')
            ->maxLength('CustAccount', 50)
            ->allowEmptyString('CustAccount');

        $validator
            ->scalar('CustName')
            ->maxLength('CustName', 50)
            ->allowEmptyString('CustName');

        $validator
            ->scalar('CustAddress1')
            ->maxLength('CustAddress1', 50)
            ->allowEmptyString('CustAddress1');

        $validator
            ->scalar('CustAddress2')
            ->maxLength('CustAddress2', 50)
            ->allowEmptyString('CustAddress2');

        $validator
            ->scalar('CustCity')
            ->maxLength('CustCity', 50)
            ->allowEmptyString('CustCity');

        $validator
            ->scalar('CustState')
            ->maxLength('CustState', 3)
            ->allowEmptyString('CustState');

        $validator
            ->scalar('CustZip')
            ->maxLength('CustZip', 50)
            ->allowEmptyString('CustZip');

        $validator
            ->scalar('CustPhone')
            ->maxLength('CustPhone', 30)
            ->allowEmptyString('CustPhone');

        $validator
            ->scalar('CustFax')
            ->maxLength('CustFax', 30)
            ->allowEmptyString('CustFax');

        $validator
            ->scalar('CustContact')
            ->maxLength('CustContact', 50)
            ->allowEmptyString('CustContact');

        $validator
            ->scalar('SalesRepCode')
            ->maxLength('SalesRepCode', 5)
            ->allowEmptyString('SalesRepCode');

        $validator
            ->scalar('CustCountry')
            ->maxLength('CustCountry', 50)
            ->allowEmptyString('CustCountry');

        $validator
            ->scalar('CustEmail')
            ->maxLength('CustEmail', 100)
            ->allowEmptyString('CustEmail');

        $validator
            ->scalar('EndUserName')
            ->maxLength('EndUserName', 50)
            ->allowEmptyString('EndUserName');

        $validator
            ->scalar('EndUserAccount')
            ->maxLength('EndUserAccount', 20)
            ->allowEmptyString('EndUserAccount');

        $validator
            ->scalar('CSR')
            ->maxLength('CSR', 50)
            ->allowEmptyString('CSR');

        $validator
            ->scalar('Estimator')
            ->maxLength('Estimator', 50)
            ->allowEmptyString('Estimator');

        $validator
            ->scalar('JobDescription')
            ->maxLength('JobDescription', 100)
            ->allowEmptyString('JobDescription');

        $validator
            ->scalar('PONumber')
            ->maxLength('PONumber', 50)
            ->allowEmptyString('PONumber');

        $validator
            ->scalar('PrevPONumber')
            ->maxLength('PrevPONumber', 50)
            ->allowEmptyString('PrevPONumber');

        $validator
            ->scalar('PrevJobNumber')
            ->maxLength('PrevJobNumber', 20)
            ->allowEmptyString('PrevJobNumber');

        $validator
            ->scalar('OriginalJobNumber')
            ->maxLength('OriginalJobNumber', 20)
            ->allowEmptyString('OriginalJobNumber');

        $validator
            ->scalar('DistPO')
            ->maxLength('DistPO', 50)
            ->allowEmptyString('DistPO');

        $validator
            ->scalar('PrevDistPO')
            ->maxLength('PrevDistPO', 50)
            ->allowEmptyString('PrevDistPO');

        $validator
            ->dateTime('DueTime')
            ->allowEmptyDateTime('DueTime');

        $validator
            ->dateTime('DueDate')
            ->allowEmptyDateTime('DueDate');

        $validator
            ->scalar('DueTimeText')
            ->maxLength('DueTimeText', 5)
            ->allowEmptyString('DueTimeText');

        $validator
            ->dateTime('EstimateDate')
            ->allowEmptyDateTime('EstimateDate');

        $validator
            ->dateTime('CompleteDate')
            ->allowEmptyDateTime('CompleteDate');

        $validator
            ->dateTime('OrderDate')
            ->allowEmptyDateTime('OrderDate');

        $validator
            ->scalar('JobStatus')
            ->maxLength('JobStatus', 10)
            ->allowEmptyString('JobStatus');

        $validator
            ->scalar('EstTimeFrame')
            ->maxLength('EstTimeFrame', 20)
            ->allowEmptyString('EstTimeFrame');

        $validator
            ->scalar('ReleaseNumber')
            ->maxLength('ReleaseNumber', 20)
            ->allowEmptyString('ReleaseNumber');

        $validator
            ->scalar('OrderType')
            ->maxLength('OrderType', 50)
            ->allowEmptyString('OrderType');

        $validator
            ->scalar('RFQ')
            ->maxLength('RFQ', 20)
            ->allowEmptyString('RFQ');

        $validator
            ->dateTime('RFQDate')
            ->allowEmptyDateTime('RFQDate');

        $validator
            ->dateTime('ProofDate')
            ->allowEmptyDateTime('ProofDate');

        $validator
            ->dateTime('ProofTime')
            ->allowEmptyDateTime('ProofTime');

        $validator
            ->scalar('ProofTimeText')
            ->maxLength('ProofTimeText', 5)
            ->allowEmptyString('ProofTimeText');

        $validator
            ->allowEmptyString('PriorityLevel');

        $validator
            ->boolean('QuickOrder')
            ->requirePresence('QuickOrder', 'create')
            ->notEmptyString('QuickOrder');

        $validator
            ->scalar('ProofComments')
            ->maxLength('ProofComments', 2000)
            ->allowEmptyString('ProofComments');

        $validator
            ->boolean('Revision')
            ->requirePresence('Revision', 'create')
            ->notEmptyString('Revision');

        $validator
            ->dateTime('RevisionDate')
            ->allowEmptyDateTime('RevisionDate');

        $validator
            ->scalar('RevisionReason')
            ->maxLength('RevisionReason', 100)
            ->allowEmptyString('RevisionReason');

        $validator
            ->boolean('TotalOverride')
            ->requirePresence('TotalOverride', 'create')
            ->notEmptyString('TotalOverride');

        $validator
            ->numeric('CommissionA')
            ->allowEmptyString('CommissionA');

        $validator
            ->numeric('CommissionB')
            ->allowEmptyString('CommissionB');

        $validator
            ->scalar('UserDefined1')
            ->maxLength('UserDefined1', 100)
            ->requirePresence('UserDefined1', 'create')
            ->notEmptyString('UserDefined1');

        $validator
            ->scalar('UserDefined2')
            ->maxLength('UserDefined2', 100)
            ->requirePresence('UserDefined2', 'create')
            ->notEmptyString('UserDefined2');

        $validator
            ->scalar('UserDefined3')
            ->maxLength('UserDefined3', 100)
            ->requirePresence('UserDefined3', 'create')
            ->notEmptyString('UserDefined3');

        $validator
            ->scalar('UserDefined4')
            ->maxLength('UserDefined4', 100)
            ->requirePresence('UserDefined4', 'create')
            ->notEmptyString('UserDefined4');

        $validator
            ->scalar('UserDefined5')
            ->maxLength('UserDefined5', 100)
            ->requirePresence('UserDefined5', 'create')
            ->notEmptyString('UserDefined5');

        $validator
            ->scalar('CustUserDefined1')
            ->maxLength('CustUserDefined1', 50)
            ->allowEmptyString('CustUserDefined1');

        $validator
            ->scalar('CustUserDefined2')
            ->maxLength('CustUserDefined2', 50)
            ->allowEmptyString('CustUserDefined2');

        $validator
            ->scalar('CustUserDefined3')
            ->maxLength('CustUserDefined3', 50)
            ->allowEmptyString('CustUserDefined3');

        $validator
            ->scalar('TaxCodeA')
            ->maxLength('TaxCodeA', 5)
            ->allowEmptyString('TaxCodeA');

        $validator
            ->scalar('TaxCodeB')
            ->maxLength('TaxCodeB', 5)
            ->allowEmptyString('TaxCodeB');

        $validator
            ->scalar('TaxCodeC')
            ->maxLength('TaxCodeC', 5)
            ->allowEmptyString('TaxCodeC');

        $validator
            ->scalar('TaxCodeD')
            ->maxLength('TaxCodeD', 5)
            ->allowEmptyString('TaxCodeD');

        $validator
            ->dateTime('EntryDate')
            ->allowEmptyDateTime('EntryDate');

        $validator
            ->dateTime('EntryTime')
            ->allowEmptyDateTime('EntryTime');

        $validator
            ->scalar('CommissionTableA')
            ->maxLength('CommissionTableA', 5)
            ->allowEmptyString('CommissionTableA');

        $validator
            ->scalar('CommissionTableB')
            ->maxLength('CommissionTableB', 5)
            ->allowEmptyString('CommissionTableB');

        $validator
            ->scalar('JobDetailDescription')
            ->maxLength('JobDetailDescription', 8000)
            ->allowEmptyString('JobDetailDescription');

        $validator
            ->scalar('Notes')
            ->maxLength('Notes', 2000)
            ->allowEmptyString('Notes');

        $validator
            ->scalar('BindInstructions')
            ->maxLength('BindInstructions', 2000)
            ->allowEmptyString('BindInstructions');

        $validator
            ->scalar('EstimateStatus')
            ->maxLength('EstimateStatus', 1)
            ->allowEmptyString('EstimateStatus');

        $validator
            ->decimal('Prepayment')
            ->allowEmptyString('Prepayment');

        $validator
            ->scalar('FormNumber')
            ->maxLength('FormNumber', 30)
            ->allowEmptyString('FormNumber');

        $validator
            ->integer('TotalComponents')
            ->allowEmptyString('TotalComponents');

        $validator
            ->allowEmptyString('BackOrder');

        $validator
            ->scalar('CustAddress3')
            ->maxLength('CustAddress3', 50)
            ->allowEmptyString('CustAddress3');

        $validator
            ->scalar('CustCounty')
            ->maxLength('CustCounty', 50)
            ->allowEmptyString('CustCounty');

        $validator
            ->scalar('MJobDetailDescription')
            ->allowEmptyString('MJobDetailDescription');

        $validator
            ->decimal('TotalSellPrice')
            ->allowEmptyString('TotalSellPrice');

        $validator
            ->allowEmptyString('RecordInUse');

        $validator
            ->allowEmptyString('PriceOverrideOption');

        $validator
            ->allowEmptyString('NoProofRequired');

        $validator
            ->scalar('MNotes')
            ->allowEmptyString('MNotes');

        $validator
            ->decimal('OrderSellPrice')
            ->allowEmptyString('OrderSellPrice');

        $validator
            ->decimal('InvoiceSellPrice')
            ->allowEmptyString('InvoiceSellPrice');

        $validator
            ->allowEmptyString('LastCostCenter');

        $validator
            ->allowEmptyString('CollabriaOrder');

        $validator
            ->scalar('CollabriaID')
            ->maxLength('CollabriaID', 50)
            ->allowEmptyString('CollabriaID');

        $validator
            ->scalar('CC_Number')
            ->maxLength('CC_Number', 100)
            ->allowEmptyString('CC_Number');

        $validator
            ->integer('CC_Exp_Month')
            ->allowEmptyString('CC_Exp_Month');

        $validator
            ->integer('CC_Exp_Year')
            ->allowEmptyString('CC_Exp_Year');

        $validator
            ->numeric('TotalBookThickness')
            ->allowEmptyString('TotalBookThickness');

        $validator
            ->decimal('TotalFreightCost')
            ->allowEmptyString('TotalFreightCost');

        $validator
            ->decimal('InvoicedFreightPrice')
            ->allowEmptyString('InvoicedFreightPrice');

        $validator
            ->scalar('MScheduleNotes')
            ->allowEmptyString('MScheduleNotes');

        $validator
            ->scalar('ScheduleNotes')
            ->maxLength('ScheduleNotes', 2000)
            ->allowEmptyString('ScheduleNotes');

        $validator
            ->scalar('PlantID')
            ->maxLength('PlantID', 3)
            ->allowEmptyString('PlantID');

        $validator
            ->allowEmptyString('RFQFlag');

        $validator
            ->decimal('CalculatedTotalPrice')
            ->allowEmptyString('CalculatedTotalPrice');

        $validator
            ->allowEmptyString('NoDueDate');

        $validator
            ->scalar('CreateOpr')
            ->maxLength('CreateOpr', 50)
            ->allowEmptyString('CreateOpr');

        $validator
            ->dateTime('CreateDatim')
            ->allowEmptyDateTime('CreateDatim');

        $validator
            ->scalar('UpdateOpr')
            ->maxLength('UpdateOpr', 50)
            ->allowEmptyString('UpdateOpr');

        $validator
            ->dateTime('Updatedatim')
            ->allowEmptyDateTime('Updatedatim');

        $validator
            ->scalar('CC_NameOnCard')
            ->maxLength('CC_NameOnCard', 100)
            ->allowEmptyString('CC_NameOnCard');

        $validator
            ->scalar('CC_Expiration')
            ->maxLength('CC_Expiration', 10)
            ->allowEmptyString('CC_Expiration');

        $validator
            ->dateTime('ReorderDate')
            ->allowEmptyDateTime('ReorderDate');

        $validator
            ->dateTime('DeliveryDate')
            ->allowEmptyDateTime('DeliveryDate');

        $validator
            ->numeric('Discount')
            ->allowEmptyString('Discount');

        $validator
            ->allowEmptyString('UseDMRate');

        $validator
            ->scalar('TaxJurisdiction')
            ->maxLength('TaxJurisdiction', 5)
            ->allowEmptyString('TaxJurisdiction');

        $validator
            ->integer('OnLineUserID')
            ->allowEmptyString('OnLineUserID');

        $validator
            ->allowEmptyString('OutsideOrder');

        $validator
            ->dateTime('ProofDeliveryDate')
            ->allowEmptyDateTime('ProofDeliveryDate');

        $validator
            ->scalar('OutsideOrderID')
            ->maxLength('OutsideOrderID', 20)
            ->allowEmptyString('OutsideOrderID');

        $validator
            ->allowEmptyString('PricingOnLineReady');

        $validator
            ->allowEmptyString('MakeComponentCalculations');

        $validator
            ->allowEmptyString('RequestForOrder');

        $validator
            ->dateTime('QuoteDueDate')
            ->allowEmptyDateTime('QuoteDueDate');

        $validator
            ->decimal('ManualCommission')
            ->allowEmptyString('ManualCommission');

        $validator
            ->allowEmptyString('ARJobCloseOut');

        $validator
            ->allowEmptyString('GLJobCloseOut');

        $validator
            ->allowEmptyString('DontChargeFreight');

        $validator
            ->allowEmptyString('OriginatedFromRFQ');

        $validator
            ->allowEmptyString('PickSlipPrinted');

        $validator
            ->scalar('PaymentMethod')
            ->maxLength('PaymentMethod', 50)
            ->allowEmptyString('PaymentMethod');

        $validator
            ->scalar('CheckNumber')
            ->maxLength('CheckNumber', 50)
            ->allowEmptyString('CheckNumber');

        $validator
            ->scalar('BackOrderFrom')
            ->maxLength('BackOrderFrom', 20)
            ->allowEmptyString('BackOrderFrom');

        $validator
            ->scalar('TemplateCode')
            ->maxLength('TemplateCode', 50)
            ->allowEmptyString('TemplateCode');

        $validator
            ->scalar('OriginalPlantID')
            ->maxLength('OriginalPlantID', 3)
            ->allowEmptyString('OriginalPlantID');

        $validator
            ->scalar('OriginalEstimateNumber')
            ->maxLength('OriginalEstimateNumber', 20)
            ->allowEmptyString('OriginalEstimateNumber');

        $validator
            ->allowEmptyString('LockSchedule');

        $validator
            ->scalar('SchUserDefined1')
            ->maxLength('SchUserDefined1', 50)
            ->allowEmptyString('SchUserDefined1');

        $validator
            ->scalar('SchUserDefined2')
            ->maxLength('SchUserDefined2', 50)
            ->allowEmptyString('SchUserDefined2');

        $validator
            ->scalar('SchUserDefined3')
            ->maxLength('SchUserDefined3', 50)
            ->allowEmptyString('SchUserDefined3');

        $validator
            ->scalar('SchUserDefined4')
            ->maxLength('SchUserDefined4', 50)
            ->allowEmptyString('SchUserDefined4');

        $validator
            ->scalar('SchUserDefined5')
            ->maxLength('SchUserDefined5', 50)
            ->allowEmptyString('SchUserDefined5');

        $validator
            ->scalar('SchUserDefined6')
            ->maxLength('SchUserDefined6', 50)
            ->allowEmptyString('SchUserDefined6');

        $validator
            ->scalar('SchUserDefined7')
            ->maxLength('SchUserDefined7', 50)
            ->allowEmptyString('SchUserDefined7');

        $validator
            ->scalar('SchUserDefined8')
            ->maxLength('SchUserDefined8', 50)
            ->allowEmptyString('SchUserDefined8');

        $validator
            ->scalar('SchUserDefined9')
            ->maxLength('SchUserDefined9', 50)
            ->allowEmptyString('SchUserDefined9');

        $validator
            ->scalar('SchUserDefined10')
            ->maxLength('SchUserDefined10', 50)
            ->allowEmptyString('SchUserDefined10');

        $validator
            ->scalar('SchUserDefined11')
            ->maxLength('SchUserDefined11', 50)
            ->allowEmptyString('SchUserDefined11');

        $validator
            ->scalar('SchUserDefined12')
            ->maxLength('SchUserDefined12', 50)
            ->allowEmptyString('SchUserDefined12');

        $validator
            ->scalar('SchUserDefined13')
            ->maxLength('SchUserDefined13', 50)
            ->allowEmptyString('SchUserDefined13');

        $validator
            ->scalar('SchUserDefined14')
            ->maxLength('SchUserDefined14', 50)
            ->allowEmptyString('SchUserDefined14');

        $validator
            ->scalar('SchUserDefined15')
            ->maxLength('SchUserDefined15', 50)
            ->allowEmptyString('SchUserDefined15');

        $validator
            ->allowEmptyString('Archived');

        $validator
            ->scalar('UserDefined6')
            ->maxLength('UserDefined6', 100)
            ->allowEmptyString('UserDefined6');

        $validator
            ->dateTime('PODate')
            ->allowEmptyDateTime('PODate');

        $validator
            ->decimal('TaxOverrideAmount')
            ->allowEmptyString('TaxOverrideAmount');

        $validator
            ->dateTime('OrderTime')
            ->allowEmptyDateTime('OrderTime');

        $validator
            ->dateTime('ProofApprovalTime')
            ->allowEmptyDateTime('ProofApprovalTime');

        $validator
            ->dateTime('LastSurveyDate')
            ->allowEmptyDateTime('LastSurveyDate');

        $validator
            ->allowEmptyString('DontCombineCartonQty');

        $validator
            ->scalar('SurveyContact')
            ->maxLength('SurveyContact', 50)
            ->allowEmptyString('SurveyContact');

        $validator
            ->allowEmptyString('SchedulePriority');

        $validator
            ->allowEmptyString('JobRouted');

        $validator
            ->scalar('BillingContact')
            ->maxLength('BillingContact', 50)
            ->allowEmptyString('BillingContact');

        $validator
            ->scalar('UserDefined7')
            ->maxLength('UserDefined7', 100)
            ->allowEmptyString('UserDefined7');

        $validator
            ->scalar('ManufacturerItemNumber')
            ->maxLength('ManufacturerItemNumber', 50)
            ->allowEmptyString('ManufacturerItemNumber');

        $validator
            ->scalar('StatusReasonCode')
            ->maxLength('StatusReasonCode', 5)
            ->allowEmptyString('StatusReasonCode');

        $validator
            ->allowEmptyString('JobPriority');

        $validator
            ->dateTime('JobTicketPrintDate')
            ->allowEmptyDateTime('JobTicketPrintDate');

        $validator
            ->numeric('CustomerOvers')
            ->allowEmptyString('CustomerOvers');

        $validator
            ->integer('AcceleshipOrderId')
            ->allowEmptyString('AcceleshipOrderId');

        $validator
            ->scalar('LastOpenedBy')
            ->maxLength('LastOpenedBy', 50)
            ->allowEmptyString('LastOpenedBy');

        $validator
            ->integer('CustContactID')
            ->notEmptyString('CustContactID');

        $validator
            ->integer('BillContactID')
            ->notEmptyString('BillContactID');

        $validator
            ->dateTime('EstimateDueDate')
            ->allowEmptyDateTime('EstimateDueDate');

        $validator
            ->integer('ArCloseOutOption')
            ->allowEmptyString('ArCloseOutOption');

        $validator
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->integer('Status')
            ->allowEmptyString('Status');

        $validator
            ->scalar('CurrencyCode')
            ->maxLength('CurrencyCode', 5)
            ->allowEmptyString('CurrencyCode');

        $validator
            ->numeric('ExchangeRate')
            ->allowEmptyString('ExchangeRate');

        $validator
            ->allowEmptyString('FromCopy');

        $validator
            ->allowEmptyString('FromEstimate');

        $validator
            ->allowEmptyString('FromOrder');

        $validator
            ->scalar('PrevEstimateNumber')
            ->maxLength('PrevEstimateNumber', 20)
            ->allowEmptyString('PrevEstimateNumber');

        $validator
            ->allowEmptyString('TotalComponentsQtyCalculated');

        $validator
            ->allowEmptyString('OpportunityFlag');

        $validator
            ->boolean('AvaTaxOverride')
            ->allowEmptyString('AvaTaxOverride');

        return $validator;
    }
}
