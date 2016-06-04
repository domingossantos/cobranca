<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cobrancas Controller
 *
 * @property \App\Model\Table\CobrancasTable $Cobrancas
 */
class CobrancasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContratoCliente', 'BancoContas']
        ];
        $cobrancas = $this->paginate($this->Cobrancas);

        $this->set(compact('cobrancas'));
        $this->set('_serialize', ['cobrancas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cobranca id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cobranca = $this->Cobrancas->get($id, [
            'contain' => ['ContratoCliente', 'BancoContas']
        ]);

        $this->set('cobranca', $cobranca);
        $this->set('_serialize', ['cobranca']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cobranca = $this->Cobrancas->newEntity();
        if ($this->request->is('post')) {
            $cobranca = $this->Cobrancas->patchEntity($cobranca, $this->request->data);
            if ($this->Cobrancas->save($cobranca)) {
                $this->Flash->success(__('The cobranca has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cobranca could not be saved. Please, try again.'));
            }
        }
        $contratoCliente = $this->Cobrancas->ContratoCliente->find('list', ['limit' => 200]);
        $bancoContas = $this->Cobrancas->BancoContas->find('list', ['limit' => 200]);
        $this->set(compact('cobranca', 'contratoCliente', 'bancoContas'));
        $this->set('_serialize', ['cobranca']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cobranca id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cobranca = $this->Cobrancas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobranca = $this->Cobrancas->patchEntity($cobranca, $this->request->data);
            if ($this->Cobrancas->save($cobranca)) {
                $this->Flash->success(__('The cobranca has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cobranca could not be saved. Please, try again.'));
            }
        }
        $contratoCliente = $this->Cobrancas->ContratoCliente->find('list', ['limit' => 200]);
        $bancoContas = $this->Cobrancas->BancoContas->find('list', ['limit' => 200]);
        $this->set(compact('cobranca', 'contratoCliente', 'bancoContas'));
        $this->set('_serialize', ['cobranca']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cobranca id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cobranca = $this->Cobrancas->get($id);
        if ($this->Cobrancas->delete($cobranca)) {
            $this->Flash->success(__('The cobranca has been deleted.'));
        } else {
            $this->Flash->error(__('The cobranca could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
