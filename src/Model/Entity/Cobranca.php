<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cobranca Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $data_vencimento
 * @property \Cake\I18n\Time $data_registro
 * @property float $valor
 * @property int $contrato_cliente_id
 * @property \App\Model\Entity\ContratoCliente $contrato_cliente
 * @property int $banco_conta_id
 * @property \App\Model\Entity\BancoConta $banco_conta
 * @property string $status
 */
class Cobranca extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
