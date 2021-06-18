<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materials Model
 *
 * @method \App\Model\Entity\Material newEmptyEntity()
 * @method \App\Model\Entity\Material newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Material[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Material get($primaryKey, $options = [])
 * @method \App\Model\Entity\Material findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Material patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Material[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Material|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsTable extends Table
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

        $this->setTable('Material');
        $this->setDisplayField('MaterialCode');
        $this->setPrimaryKey('MaterialCode');

        $this->hasMany('MaterialUnitCosts')
            ->setForeignKey('MaterialCode')
            ->setBindingKey('MaterialCode');
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
            ->scalar('CategoryCode')
            ->maxLength('CategoryCode', 10)
            ->allowEmptyString('CategoryCode');

        $validator
            ->scalar('MaterialType')
            ->maxLength('MaterialType', 2)
            ->allowEmptyString('MaterialType');

        $validator
            ->scalar('MaterialCode')
            ->maxLength('MaterialCode', 50)
            ->allowEmptyString('MaterialCode', null, 'create');

        $validator
            ->numeric('Width')
            ->allowEmptyString('Width');

        $validator
            ->numeric('Length')
            ->allowEmptyString('Length');

        $validator
            ->numeric('BWT')
            ->allowEmptyString('BWT');

        $validator
            ->numeric('SBS')
            ->allowEmptyString('SBS');

        $validator
            ->numeric('MWT')
            ->allowEmptyString('MWT');

        $validator
            ->numeric('Caliper')
            ->allowEmptyString('Caliper');

        $validator
            ->dateTime('LastUpdated')
            ->allowEmptyDateTime('LastUpdated');

        $validator
            ->scalar('VendorID')
            ->maxLength('VendorID', 20)
            ->allowEmptyString('VendorID');

        $validator
            ->scalar('VendorProductID')
            ->maxLength('VendorProductID', 20)
            ->allowEmptyString('VendorProductID');

        $validator
            ->numeric('ReorderLevel')
            ->allowEmptyString('ReorderLevel');

        $validator
            ->numeric('ReorderQty')
            ->allowEmptyString('ReorderQty');

        $validator
            ->numeric('OnHandQty')
            ->allowEmptyString('OnHandQty');

        $validator
            ->allowEmptyString('Washups');

        $validator
            ->scalar('UnitDescription')
            ->maxLength('UnitDescription', 30)
            ->allowEmptyString('UnitDescription');

        $validator
            ->decimal('Minimum')
            ->allowEmptyString('Minimum');

        $validator
            ->allowEmptyString('CostingMethod');

        $validator
            ->numeric('Height')
            ->allowEmptyString('Height');

        $validator
            ->boolean('NonStock')
            ->requirePresence('NonStock', 'create')
            ->notEmptyString('NonStock');

        $validator
            ->numeric('CubicWeight')
            ->allowEmptyString('CubicWeight');

        $validator
            ->integer('RollFeet')
            ->allowEmptyString('RollFeet');

        $validator
            ->integer('CartonQty')
            ->allowEmptyString('CartonQty');

        $validator
            ->boolean('PreCollated')
            ->requirePresence('PreCollated', 'create')
            ->notEmptyString('PreCollated');

        $validator
            ->integer('InkMileage')
            ->allowEmptyString('InkMileage');

        $validator
            ->boolean('EnterDimensions')
            ->requirePresence('EnterDimensions', 'create')
            ->notEmptyString('EnterDimensions');

        $validator
            ->numeric('DefaultMarkup')
            ->allowEmptyString('DefaultMarkup');

        $validator
            ->scalar('Description')
            ->maxLength('Description', 1000)
            ->allowEmptyString('Description');

        $validator
            ->scalar('Color')
            ->maxLength('Color', 20)
            ->allowEmptyString('Color');

        $validator
            ->dateTime('EntryDate')
            ->allowEmptyDateTime('EntryDate');

        $validator
            ->dateTime('EntryTime')
            ->allowEmptyDateTime('EntryTime');

        $validator
            ->boolean('SeparateMarkup')
            ->requirePresence('SeparateMarkup', 'create')
            ->notEmptyString('SeparateMarkup');

        $validator
            ->scalar('Description2')
            ->maxLength('Description2', 50)
            ->allowEmptyString('Description2');

        $validator
            ->scalar('Description3')
            ->maxLength('Description3', 50)
            ->allowEmptyString('Description3');

        $validator
            ->scalar('Description4')
            ->maxLength('Description4', 50)
            ->allowEmptyString('Description4');

        $validator
            ->scalar('Description5')
            ->maxLength('Description5', 50)
            ->allowEmptyString('Description5');

        $validator
            ->scalar('Description6')
            ->maxLength('Description6', 50)
            ->allowEmptyString('Description6');

        $validator
            ->scalar('Description7')
            ->maxLength('Description7', 50)
            ->allowEmptyString('Description7');

        $validator
            ->allowEmptyString('Option1');

        $validator
            ->allowEmptyString('Option2');

        $validator
            ->numeric('LinerWeight')
            ->allowEmptyString('LinerWeight');

        $validator
            ->allowEmptyString('ValuationMethod');

        $validator
            ->allowEmptyString('RollInventory');

        $validator
            ->scalar('Comments')
            ->maxLength('Comments', 2000)
            ->allowEmptyString('Comments');

        $validator
            ->scalar('GLAccount')
            ->maxLength('GLAccount', 50)
            ->allowEmptyString('GLAccount');

        $validator
            ->dateTime('RevisionDate')
            ->allowEmptyDateTime('RevisionDate');

        $validator
            ->numeric('CoreWaste')
            ->allowEmptyString('CoreWaste');

        $validator
            ->scalar('POUnitDescription')
            ->maxLength('POUnitDescription', 30)
            ->allowEmptyString('POUnitDescription');

        $validator
            ->numeric('QtyPerPOUnit')
            ->allowEmptyString('QtyPerPOUnit');

        $validator
            ->integer('HouseQuantity')
            ->allowEmptyString('HouseQuantity');

        $validator
            ->scalar('CustAccount')
            ->maxLength('CustAccount', 50)
            ->allowEmptyString('CustAccount');

        $validator
            ->allowEmptyString('CustomerOwned');

        $validator
            ->decimal('LastReceivedCost')
            ->allowEmptyString('LastReceivedCost');

        $validator
            ->decimal('FlatCost')
            ->allowEmptyString('FlatCost');

        $validator
            ->numeric('DefaultCoverage')
            ->allowEmptyString('DefaultCoverage');

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
            ->allowEmptyString('NoRequisition');

        $validator
            ->scalar('Description8')
            ->maxLength('Description8', 50)
            ->allowEmptyString('Description8');

        $validator
            ->scalar('DefaultLocationCode')
            ->maxLength('DefaultLocationCode', 20)
            ->allowEmptyString('DefaultLocationCode');

        $validator
            ->allowEmptyString('InventoryByWeightOption');

        $validator
            ->scalar('UserDefined1')
            ->maxLength('UserDefined1', 100)
            ->allowEmptyString('UserDefined1');

        $validator
            ->scalar('UserDefined2')
            ->maxLength('UserDefined2', 100)
            ->allowEmptyString('UserDefined2');

        $validator
            ->scalar('UserDefined3')
            ->maxLength('UserDefined3', 100)
            ->allowEmptyString('UserDefined3');

        $validator
            ->scalar('UserDefined4')
            ->maxLength('UserDefined4', 100)
            ->allowEmptyString('UserDefined4');

        $validator
            ->scalar('UserDefined5')
            ->maxLength('UserDefined5', 100)
            ->allowEmptyString('UserDefined5');

        $validator
            ->allowEmptyString('CoatedOneSide');

        $validator
            ->scalar('RFQDescription')
            ->maxLength('RFQDescription', 1000)
            ->allowEmptyString('RFQDescription');

        $validator
            ->allowEmptyString('DontAllocateByRolls');

        $validator
            ->allowEmptyString('InventoryNumberUp');

        $validator
            ->allowEmptyString('CoverageOption1');

        $validator
            ->scalar('PlantID')
            ->maxLength('PlantID', 3)
            ->allowEmptyString('PlantID');

        $validator
            ->scalar('ParentMaterialCode')
            ->maxLength('ParentMaterialCode', 50)
            ->allowEmptyString('ParentMaterialCode');

        $validator
            ->allowEmptyString('ParentNumberOut');

        $validator
            ->allowEmptyString('InactiveFlag');

        $validator
            ->allowEmptyString('POCostingMethod');

        $validator
            ->allowEmptyString('PODivisor');

        $validator
            ->numeric('POFactor')
            ->allowEmptyString('POFactor');

        $validator
            ->numeric('RollChange')
            ->allowEmptyString('RollChange');

        $validator
            ->integer('OriginalInvtQuantity')
            ->allowEmptyString('OriginalInvtQuantity');

        $validator
            ->dateTime('OriginalInvtDate')
            ->allowEmptyDateTime('OriginalInvtDate');

        $validator
            ->integer('LeadTime')
            ->allowEmptyString('LeadTime');

        $validator
            ->allowEmptyString('InspectionRequired');

        $validator
            ->numeric('MMSI')
            ->allowEmptyString('MMSI');

        $validator
            ->allowEmptyString('AutoDeduct');

        $validator
            ->allowEmptyString('DontAutoUpdate');

        $validator
            ->scalar('CustomUOMCode')
            ->maxLength('CustomUOMCode', 5)
            ->allowEmptyString('CustomUOMCode');

        $validator
            ->allowEmptyString('FGPermConverted');

        $validator
            ->scalar('ManufacturerItemNumber')
            ->maxLength('ManufacturerItemNumber', 50)
            ->allowEmptyString('ManufacturerItemNumber');

        $validator
            ->scalar('MarkupTable')
            ->maxLength('MarkupTable', 5)
            ->allowEmptyString('MarkupTable');

        $validator
            ->allowEmptyString('AutoReceiveRolls');

        $validator
            ->numeric('CoreDiameter')
            ->allowEmptyString('CoreDiameter');

        $validator
            ->numeric('RollDiameter')
            ->allowEmptyString('RollDiameter');

        $validator
            ->scalar('CustomerMixedFor')
            ->maxLength('CustomerMixedFor', 50)
            ->allowEmptyString('CustomerMixedFor');

        $validator
            ->scalar('MaterialMixedFor')
            ->maxLength('MaterialMixedFor', 50)
            ->allowEmptyString('MaterialMixedFor');

        $validator
            ->scalar('BackgroundColor')
            ->maxLength('BackgroundColor', 50)
            ->allowEmptyString('BackgroundColor');

        $validator
            ->scalar('InkUserDefined1')
            ->maxLength('InkUserDefined1', 50)
            ->allowEmptyString('InkUserDefined1');

        $validator
            ->scalar('ProductTaxCode')
            ->maxLength('ProductTaxCode', 50)
            ->allowEmptyString('ProductTaxCode');

        $validator
            ->scalar('ShippingTaxCode')
            ->maxLength('ShippingTaxCode', 50)
            ->allowEmptyString('ShippingTaxCode');

        $validator
            ->allowEmptyString('PerSidePerCopyOption');

        $validator
            ->allowEmptyString('TrackByPallet');

        $validator
            ->allowEmptyString('DataCollectConversion');

        $validator
            ->integer('UnitMultiplier')
            ->allowEmptyString('UnitMultiplier');

        $validator
            ->allowEmptyString('ExemptFromCoverageSlowdown');

        $validator
            ->scalar('GLCOGAccount')
            ->maxLength('GLCOGAccount', 50)
            ->allowEmptyString('GLCOGAccount');

        $validator
            ->allowEmptyString('CalculateCoreWidth');

        $validator
            ->allowEmptyString('UVInk');

        $validator
            ->allowEmptyString('CostConversion');

        $validator
            ->numeric('MaximumSpineThickness')
            ->allowEmptyString('MaximumSpineThickness');

        $validator
            ->numeric('CWTFeet')
            ->allowEmptyString('CWTFeet');

        $validator
            ->decimal('UnitCostOverride')
            ->allowEmptyString('UnitCostOverride');

        $validator
            ->allowEmptyString('Transfer');

        $validator
            ->allowEmptyString('PrintReleafEligible');

        $validator
            ->integer('AvgPalletQuantity')
            ->allowEmptyString('AvgPalletQuantity');

        return $validator;
    }
}
