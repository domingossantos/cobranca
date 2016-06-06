<?php
namespace App\Model\Table;

use App\Model\Entity\Empresa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \Cake\ORM\Association\HasMany $BancosContas
 * @property \Cake\ORM\Association\HasMany $Clientes
 * @property \Cake\ORM\Association\HasMany $Produtos
 * @property \Cake\ORM\Association\HasMany $Users
 */
class EmpresasTable extends Table
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

        $this->table('empresas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BancosContas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Clientes', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Produtos', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'empresa_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj');

        $validator
            ->allowEmpty('razao_social');

        $validator
            ->allowEmpty('nome_fantasia');

        $validator
            ->allowEmpty('endereco');

        $validator
            ->allowEmpty('site');

        $validator
            ->allowEmpty('fone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('status');

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
