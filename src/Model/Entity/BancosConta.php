<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BancosConta Entity.
 *
 * @property int $id
 * @property int $banco_id
 * @property \App\Model\Entity\Banco $banco
 * @property string $num_conta
 * @property string $ag_conta
 * @property string $contrato
 * @property string $convenio
 * @property \Cake\I18n\Time $data_cadastro
 * @property string $status
 * @property int $empresa_id
 * @property \App\Model\Entity\Empresa $empresa
 */
class BancosConta extends Entity
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
