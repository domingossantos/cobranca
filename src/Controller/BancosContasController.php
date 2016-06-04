<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BancosContas Controller
 *
 * @property \App\Model\Table\BancosContasTable $BancosContas
 */
class BancosContasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bancos', 'Empresas']
        ];
        $bancosContas = $this->paginate($this->BancosContas);

        $this->set(compact('bancosContas'));
        $this->set('_serialize', ['bancosContas']);
    }

    /**
     * View method
     *
     * @param string|null $id Bancos Conta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bancosConta = $this->BancosContas->get($id, [
            'contain' => ['Bancos', 'Empresas']
        ]);

        $this->set('bancosConta', $bancosConta);
        $this->set('_serialize', ['bancosConta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bancosConta = $this->BancosContas->newEntity();
        if ($this->request->is('post')) {
            $bancosConta = $this->BancosContas->patchEntity($bancosConta, $this->request->data);
            if ($this->BancosContas->save($bancosConta)) {
                $this->Flash->success(__('The bancos conta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bancos conta could not be saved. Please, try again.'));
            }
        }
        $bancos = $this->BancosContas->Bancos->find('list', ['limit' => 200]);
        $empresas = $this->BancosContas->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('bancosConta', 'bancos', 'empresas'));
        $this->set('_serialize', ['bancosConta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bancos Conta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bancosConta = $this->BancosContas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bancosConta = $this->BancosContas->patchEntity($bancosConta, $this->request->data);
            if ($this->BancosContas->save($bancosConta)) {
                $this->Flash->success(__('The bancos conta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bancos conta could not be saved. Please, try again.'));
            }
        }
        $bancos = $this->BancosContas->Bancos->find('list', ['limit' => 200]);
        $empresas = $this->BancosContas->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('bancosConta', 'bancos', 'empresas'));
        $this->set('_serialize', ['bancosConta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bancos Conta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bancosConta = $this->BancosContas->get($id);
        if ($this->BancosContas->delete($bancosConta)) {
            $this->Flash->success(__('The bancos conta has been deleted.'));
        } else {
            $this->Flash->error(__('The bancos conta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
