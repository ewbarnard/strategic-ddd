<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExceptionReports Model
 *
 * @method \App\Model\Entity\ExceptionReport newEmptyEntity()
 * @method \App\Model\Entity\ExceptionReport newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ExceptionReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExceptionReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExceptionReport findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ExceptionReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExceptionReport[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExceptionReport|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExceptionReport saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExceptionReport[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ExceptionReport[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ExceptionReport[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ExceptionReport[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExceptionReportsTable extends Table
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

        $this->setTable('exception_reports');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->notEmptyString('description');

        $validator
            ->allowEmptyString('detail');

        return $validator;
    }
}
