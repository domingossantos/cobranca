<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BancosContasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BancosContasTable Test Case
 */
class BancosContasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BancosContasTable
     */
    public $BancosContas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bancos_contas',
        'app.bancos',
        'app.empresas',
        'app.clientes',
        'app.contrato_cliente',
        'app.contratos',
        'app.produtos',
        'app.crons',
        'app.cobrancas',
        'app.banco_contas',
        'app.usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BancosContas') ? [] : ['className' => 'App\Model\Table\BancosContasTable'];
        $this->BancosContas = TableRegistry::get('BancosContas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BancosContas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
