<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BancosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BancosTable Test Case
 */
class BancosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BancosTable
     */
    public $Bancos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bancos',
        'app.bancos_contas',
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
        $config = TableRegistry::exists('Bancos') ? [] : ['className' => 'App\Model\Table\BancosTable'];
        $this->Bancos = TableRegistry::get('Bancos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bancos);

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
}
