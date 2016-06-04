<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsuariosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsuariosController Test Case
 */
class UsuariosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuarios',
        'app.empresas',
        'app.bancos_contas',
        'app.bancos',
        'app.clientes',
        'app.contrato_cliente',
        'app.contratos',
        'app.produtos',
        'app.crons',
        'app.cobrancas',
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
