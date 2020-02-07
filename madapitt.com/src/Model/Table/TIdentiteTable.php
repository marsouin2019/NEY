<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TIdentite Model
 *
 * @method \App\Model\Entity\TIdentite get($primaryKey, $options = [])
 * @method \App\Model\Entity\TIdentite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TIdentite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TIdentite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TIdentite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TIdentite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TIdentite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TIdentite findOrCreate($search, callable $callback = null, $options = [])
 */
class TIdentiteTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('t_identite');
        $this->setDisplayField('ididentite');
        $this->setPrimaryKey('ididentite');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('ididentite', null, 'create');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 10)
            ->requirePresence('reference', 'create')
            ->notEmptyString('reference');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 15)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('puce')
            ->maxLength('puce', 10)
            ->requirePresence('puce', 'create')
            ->notEmptyString('puce');

        $validator
            ->scalar('age')
            ->maxLength('age', 2)
            ->requirePresence('age', 'create')
            ->notEmptyString('age');

        $validator
            ->scalar('sexe')
            ->requirePresence('sexe', 'create')
            ->notEmptyString('sexe');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 150)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

        $validator
            ->dateTime('date_add')
            ->requirePresence('date_add', 'create')
            ->notEmptyDateTime('date_add');

        $validator
            ->dateTime('date_update')
            ->requirePresence('date_update', 'create')
            ->notEmptyDateTime('date_update');

        return $validator;
    }
}
