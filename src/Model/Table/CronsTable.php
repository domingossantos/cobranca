<?php
namespace App\Model\Table;

use App\Model\Entity\Cron;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crons Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contratos
 */
class CronsTable extends Table
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

        $this->table('crons');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Contratos', [
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
            ->integer('periodo')
            ->allowEmpty('periodo');

        $validator
            ->allowEmpty('hora');

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
        $rules->add($rules->existsIn(['contrato_id'], 'Contratos'));
        return $rules;
    }
}
