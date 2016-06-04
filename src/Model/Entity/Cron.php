<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cron Entity.
 *
 * @property int $id
 * @property int $periodo
 * @property int $contrato_id
 * @property \App\Model\Entity\Contrato $contrato
 * @property string $hora
 * @property \Cake\I18n\Time $data_cadastro
 * @property string $status
 */
class Cron extends Entity
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
