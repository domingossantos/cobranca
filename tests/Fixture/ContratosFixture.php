<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosFixture
 *
 */
class ContratosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'path_arquivo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_cadastro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_total' => ['type' => 'decimal', 'length' => 20, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'valor_parcela' => ['type' => 'decimal', 'length' => 20, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'valor_mora' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'percentual_juros' => ['type' => 'decimal', 'length' => 5, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'contratos_produto_id_fk' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'contratos_produto_id_fk' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['produtos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'nome' => 'Lorem ipsum dolor sit amet',
            'path_arquivo' => 'Lorem ipsum dolor sit amet',
            'data_cadastro' => '2016-06-01 01:37:13',
            'status' => 'Lorem ipsum dolor sit ame',
            'produto_id' => 1,
            'valor_total' => 1.5,
            'valor_parcela' => 1.5,
            'valor_mora' => 1.5,
            'percentual_juros' => 1.5
        ],
    ];
}
