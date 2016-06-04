<?php
namespace App\Model\Table;

use App\Model\Entity\Cobranca;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cobrancas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ContratoCliente
 * @property \Cake\ORM\Association\BelongsTo $BancoContas
 */
class CobrancasTable extends Table
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

        $this->table('cobrancas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('ContratoCliente', [
            'foreignKey' => 'contrato_cliente_id'
        ]);
        $this->belongsTo('BancoContas', [
            'foreignKey' => 'banco_conta_id'
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
            ->date('data_vencimento')
            ->allowEmpty('data_vencimento');

        $validator
            ->dateTime('data_registro')
            ->allowEmpty('data_registro');

        $validator
            ->decimal('valor')
            ->allowEmpty('valor');

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
        $rules->add($rules->existsIn(['contrato_cliente_id'], 'ContratoCliente'));
        $rules->add($rules->existsIn(['banco_conta_id'], 'BancoContas'));
        return $rules;
    }
}
