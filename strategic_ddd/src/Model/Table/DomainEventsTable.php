<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DomainEvents Model
 *
 * @property \Cake\ORM\Table&\Cake\ORM\Association\BelongsTo $Sources
 *
 * @method \App\Model\Entity\DomainEvent newEmptyEntity()
 * @method \App\Model\Entity\DomainEvent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DomainEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DomainEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\DomainEvent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DomainEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DomainEvent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DomainEvent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DomainEvent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DomainEvent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DomainEvent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DomainEvent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DomainEvent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DomainEventsTable extends Table
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

        $this->setTable('domain_events');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
            'joinType' => 'INNER',
        ]);
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('source_table')
            ->maxLength('source_table', 255)
            ->requirePresence('source_table', 'create')
            ->notEmptyString('source_table');

        $validator
            ->scalar('action')
            ->maxLength('action', 255)
            ->notEmptyString('action');

        $validator
            ->scalar('subsystem')
            ->maxLength('subsystem', 255)
            ->notEmptyString('subsystem');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->notEmptyString('description');

        $validator
            ->allowEmptyString('detail');

        $validator
            ->uuid('event_uuid')
            ->requirePresence('event_uuid', 'create')
            ->notEmptyString('event_uuid')
            ->add('event_uuid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->dateTime('when_occurred')
            ->requirePresence('when_occurred', 'create')
            ->notEmptyDateTime('when_occurred');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['event_uuid']), ['errorField' => 'event_uuid']);
        $rules->add($rules->existsIn('source_id', 'Sources'), ['errorField' => 'source_id']);

        return $rules;
    }
}
