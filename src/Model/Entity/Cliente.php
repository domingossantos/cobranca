<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf_cnpj
 * @property string $fone
 * @property string $email
 * @property string $endereco
 * @property int $empresa_id
 * @property \App\Model\Entity\Empresa $empresa
 * @property \Cake\I18n\Time $data_cadastro
 * @property string $status
 * @property \App\Model\Entity\ContratoCliente[] $contrato_cliente
 */
class Cliente extends Entity
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
