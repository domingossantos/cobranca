<?php
namespace App\Model\Table;

use App\Model\Entity\BancosConta;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BancosContas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Bancos
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 */
class BancosContasTable extends Table
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

        $this->table('bancos_contas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id'
        ]);
        $this->belongsTo('Empresas', [
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
            ->allowEmpty('num_conta');

        $validator
            ->allowEmpty('ag_conta');

        $validator
            ->allowEmpty('contrato');

        $validator
            ->allowEmpty('convenio');

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
        $rules->add($rules->existsIn(['banco_id'], 'Bancos'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        return $rules;
    }
}
