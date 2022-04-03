<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proffesion Model
 *
 * @method \App\Model\Entity\Proffesion newEmptyEntity()
 * @method \App\Model\Entity\Proffesion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Proffesion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proffesion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proffesion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Proffesion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proffesion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proffesion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proffesion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proffesion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proffesion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proffesion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proffesion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProffesionTable extends Table
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

        $this->setTable('proffesion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('description')
            ->maxLength('description', 200)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->notEmptyString('level');

        $validator
            ->date('effect_date')
            ->requirePresence('effect_date', 'create')
            ->notEmptyDate('effect_date');

        return $validator;
    }
}
