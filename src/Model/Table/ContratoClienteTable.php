<?php
namespace App\Model\Table;

use App\Model\Entity\ContratoCliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContratoCliente Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contratos
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 * @property \Cake\ORM\Association\HasMany $Cobrancas
 */
class ContratoClienteTable extends Table
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

        $this->table('contrato_cliente');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Contratos', [
            'foreignKey' => 'contrato_id'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->hasMany('Cobrancas', [
            'foreignKey' => 'contrato_cliente_id'
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
            ->integer('data_cadastro')
            ->allowEmpty('data_cadastro');

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
        $rules->add($rules->existsIn(['contrato_id'], 'Contratos'));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        return $rules;
    }
}
