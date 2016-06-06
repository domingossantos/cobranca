<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresasTable Test Case
 */
class EmpresasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresasTable
     */
    public $Empresas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empresas',
        'app.bancos_contas',
        'app.bancos',
        'app.clientes',
        'app.contrato_cliente',
        'app.contratos',
        'app.produtos',
        'app.crons',
        'app.cobrancas',
        'app.banco_contas',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Empresas') ? [] : ['className' => 'App\Model\Table\EmpresasTable'];
        $this->Empresas = TableRegistry::get('Empresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Empresas);

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
