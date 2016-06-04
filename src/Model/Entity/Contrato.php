<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $path_arquivo
 * @property \Cake\I18n\Time $data_cadastro
 * @property string $status
 * @property int $produto_id
 * @property \App\Model\Entity\Produto $produto
 * @property float $valor_total
 * @property float $valor_parcela
 * @property float $valor_mora
 * @property float $percentual_juros
 * @property \App\Model\Entity\ContratoCliente[] $contrato_cliente
 * @property \App\Model\Entity\Cron[] $crons
 */
class Contrato extends Entity
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
