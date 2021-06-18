<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialUnitCosts Model
 *
 * @method \App\Model\Entity\MaterialUnitCost newEmptyEntity()
 * @method \App\Model\Entity\MaterialUnitCost newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialUnitCost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialUnitCost get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialUnitCost[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialUnitCost|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialUnitCost[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialUnitCostsTable extends Table
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

        $this->setTable('MaterialUnitCost');
        $this->setDisplayField('MaterialCode');
//        $this->setPrimaryKey(['MaterialCode', 'Quantity']);
        $this->setPrimaryKey('MaterialCode');
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
            ->scalar('MaterialCode')
            ->maxLength('MaterialCode', 50)
            ->allowEmptyString('MaterialCode', null, 'create');

        $validator
            ->numeric('Quantity')
            ->allowEmptyString('Quantity', null, 'create');

        $validator
            ->decimal('UnitCost')
            ->allowEmptyString('UnitCost');

        $validator
            ->dateTime('EntryDate')
            ->allowEmptyDateTime('EntryDate');

        $validator
            ->dateTime('EntryTime')
            ->allowEmptyDateTime('EntryTime');

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
            ->decimal('ContractUnitCost')
            ->allowEmptyString('ContractUnitCost');

        $validator
            ->decimal('POUnitCost')
            ->allowEmptyString('POUnitCost');

        $validator
            ->decimal('FlatCost')
            ->allowEmptyString('FlatCost');

        return $validator;
    }
}
