<?php
namespace App\Model\Table;

use App\Model\Entity\Contrato;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contratos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 * @property \Cake\ORM\Association\HasMany $ContratoCliente
 * @property \Cake\ORM\Association\HasMany $Crons
 */
class ContratosTable extends Table
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

        $this->table('contratos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Produtos', [
            'foreignKey' => 'produto_id'
        ]);
        $this->hasMany('ContratoCliente', [
            'foreignKey' => 'contrato_id'
        ]);
        $this->hasMany('Crons', [
            'foreignKey' => 'contrato_id'
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
            ->allowEmpty('path_arquivo');

        $validator
            ->dateTime('data_cadastro')
            ->allowEmpty('data_cadastro');

        $validator
            ->allowEmpty('status');

        $validator
            ->decimal('valor_total')
            ->allowEmpty('valor_total');

        $validator
            ->decimal('valor_parcela')
            ->allowEmpty('valor_parcela');

        $validator
            ->decimal('valor_mora')
            ->allowEmpty('valor_mora');

        $validator
            ->decimal('percentual_juros')
            ->allowEmpty('percentual_juros');

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
        $rules->add($rules->existsIn(['produto_id'], 'Produtos'));
        return $rules;
    }
}
