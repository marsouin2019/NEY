<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TProprietaire Model
 *
 * @method \App\Model\Entity\TProprietaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\TProprietaire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TProprietaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TProprietaire|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TProprietaire saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TProprietaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TProprietaire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TProprietaire findOrCreate($search, callable $callback = null, $options = [])
 */
class TProprietaireTable extends Table
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

        $this->setTable('t_proprietaire');
        $this->setDisplayField('idproprietaire');
        $this->setPrimaryKey('idproprietaire');
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
            ->allowEmptyString('idproprietaire', null, 'create');

        $validator
            ->requirePresence('ididentite', 'create')
            ->notEmptyString('ididentite');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 99)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 99)
            ->requirePresence('prenom', 'create')
            ->notEmptyString('prenom');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 10)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
