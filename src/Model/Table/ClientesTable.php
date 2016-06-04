<?php
namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 * @property \Cake\ORM\Association\HasMany $ContratoCliente
 */
class ClientesTable extends Table
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

        $this->table('clientes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('ContratoCliente', [
            'foreignKey' => 'cliente_id'
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
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('cpf_cnpj');

        $validator
            ->allowEmpty('fone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('endereco');

        $validator
            ->dateTime('data_cadastro')
            ->allowEmpty('data_cadastro');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        return $rules;
    }
}
