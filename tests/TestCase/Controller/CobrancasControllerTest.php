<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CobrancasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CobrancasController Test Case
 */
class CobrancasControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
