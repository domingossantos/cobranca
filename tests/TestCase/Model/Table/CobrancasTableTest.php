<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CobrancasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CobrancasTable Test Case
 */
class CobrancasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CobrancasTable
     */
    public $Cobrancas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cobrancas',
        'app.contrato_cliente',
        'app.contratos',
        'app.produtos',
        'app.empresas',
        'app.bancos_contas',
        'app.bancos',
        'app.clientes',
        'app.usuarios',
        'app.crons',
        'app.banco_contas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cobrancas') ? [] : ['className' => 'App\Model\Table\CobrancasTable'];
        $this->Cobrancas = TableRegistry::get('Cobrancas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cobrancas);

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
