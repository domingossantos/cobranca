<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity.
 *
 * @property int $id
 * @property string $cnpj
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property string $endereco
 * @property string $site
 * @property string $fone
 * @property string $email
 * @property string $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\BancosConta[] $bancos_contas
 * @property \App\Model\Entity\Cliente[] $clientes
 * @property \App\Model\Entity\Produto[] $produtos
 * @property \App\Model\Entity\User[] $users
 */
class Empresa extends Entity
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
