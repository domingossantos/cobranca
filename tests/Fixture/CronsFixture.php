<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CronsFixture
 *
 */
class CronsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'periodo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contrato_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'hora' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_cadastro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'crons_contrato_id_fk' => ['type' => 'index', 'columns' => ['contrato_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'crons_contrato_id_fk' => ['type' => 'foreign', 'columns' => ['contrato_id'], 'references' => ['contratos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'periodo' => 1,
            'contrato_id' => 1,
            'hora' => 'Lorem ',
            'data_cadastro' => '2016-06-01 01:37:52',
            'status' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
