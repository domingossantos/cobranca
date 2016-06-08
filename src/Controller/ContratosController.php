<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contratos Controller
 *
 * @property \App\Model\Table\ContratosTable $Contratos
 */
class ContratosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id = null)
    {
        $this->paginate = [
            'contain' => ['Produtos'],
            'conditions' => ['Contratos.produto_id' => $id]
        ];
        $this->loadModel('Produtos');
        $produto = $this->Produtos->get($id);

        $contratos = $this->paginate($this->Contratos);

        $this->set(compact('contratos','produto'));
        $this->set('_serialize', ['contratos']);
    }

    /**
     * View method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => ['Produtos', 'ContratoCliente', 'Crons']
        ]);

        $this->set('contrato', $contrato);
        $this->set('_serialize', ['contrato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $contrato = $this->Contratos->newEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->data);
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('Contrato salvo.'));
                return $this->redirect(['action' => 'index',$id]);
            } else {
                $this->Flash->error(__('Erro ao salvar registro.'));
            }
        }
        $this->loadModel('Produtos');
        $produto = $this->Produtos->get($id);

        $this->set(compact('contrato', 'produto'));
        $this->set('_serialize', ['contrato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->data);
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('Contrato salvo.'));
                return $this->redirect(['action' => 'index',$contrato->produto_id]);
            } else {
                $this->Flash->error(__('Erro ao salvar registro.'));
            }
        }
        //$produtos = $this->Contratos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'produtos'));
        $this->set('_serialize', ['contrato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contratos->get($id);
        if ($this->Contratos->delete($contrato)) {
            $this->Flash->success(__('Contrato apagado.'));
        } else {
            $this->Flash->error(__('Erro ao apagar contrato.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
