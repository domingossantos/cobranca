<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContratoCliente Controller
 *
 * @property \App\Model\Table\ContratoClienteTable $ContratoCliente
 */
class ContratoClienteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contratos', 'Clientes']
        ];
        $contratoCliente = $this->paginate($this->ContratoCliente);

        $this->set(compact('contratoCliente'));
        $this->set('_serialize', ['contratoCliente']);
    }

    /**
     * View method
     *
     * @param string|null $id Contrato Cliente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contratoCliente = $this->ContratoCliente->get($id, [
            'contain' => ['Contratos', 'Clientes', 'Cobrancas']
        ]);

        $this->set('contratoCliente', $contratoCliente);
        $this->set('_serialize', ['contratoCliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contratoCliente = $this->ContratoCliente->newEntity();
        if ($this->request->is('post')) {
            $contratoCliente = $this->ContratoCliente->patchEntity($contratoCliente, $this->request->data);
            if ($this->ContratoCliente->save($contratoCliente)) {
                $this->Flash->success(__('The contrato cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contrato cliente could not be saved. Please, try again.'));
            }
        }
        $contratos = $this->ContratoCliente->Contratos->find('list', ['limit' => 200]);
        $clientes = $this->ContratoCliente->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('contratoCliente', 'contratos', 'clientes'));
        $this->set('_serialize', ['contratoCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contratoCliente = $this->ContratoCliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contratoCliente = $this->ContratoCliente->patchEntity($contratoCliente, $this->request->data);
            if ($this->ContratoCliente->save($contratoCliente)) {
                $this->Flash->success(__('The contrato cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contrato cliente could not be saved. Please, try again.'));
            }
        }
        $contratos = $this->ContratoCliente->Contratos->find('list', ['limit' => 200]);
        $clientes = $this->ContratoCliente->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('contratoCliente', 'contratos', 'clientes'));
        $this->set('_serialize', ['contratoCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contratoCliente = $this->ContratoCliente->get($id);
        if ($this->ContratoCliente->delete($contratoCliente)) {
            $this->Flash->success(__('The contrato cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The contrato cliente could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
