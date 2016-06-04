<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratoClienteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratoClienteTable Test Case
 */
class ContratoClienteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratoClienteTable
     */
    public $ContratoCliente;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contrato_cliente',
        'app.contratos',
        'app.produtos',
        'app.empresas',
        'app.bancos_contas',
        'app.clientes',
        'app.usuarios',
        'app.crons',
        'app.cobrancas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContratoCliente') ? [] : ['className' => 'App\Model\Table\ContratoClienteTable'];
        $this->ContratoCliente = TableRegistry::get('ContratoCliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContratoCliente);

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
