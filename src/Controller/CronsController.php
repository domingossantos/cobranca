<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Crons Controller
 *
 * @property \App\Model\Table\CronsTable $Crons
 */
class CronsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contratos']
        ];
        $crons = $this->paginate($this->Crons);

        $this->set(compact('crons'));
        $this->set('_serialize', ['crons']);
    }

    /**
     * View method
     *
     * @param string|null $id Cron id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cron = $this->Crons->get($id, [
            'contain' => ['Contratos']
        ]);

        $this->set('cron', $cron);
        $this->set('_serialize', ['cron']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cron = $this->Crons->newEntity();
        if ($this->request->is('post')) {
            $cron = $this->Crons->patchEntity($cron, $this->request->data);
            if ($this->Crons->save($cron)) {
                $this->Flash->success(__('The cron has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cron could not be saved. Please, try again.'));
            }
        }
        $contratos = $this->Crons->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('cron', 'contratos'));
        $this->set('_serialize', ['cron']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cron id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cron = $this->Crons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cron = $this->Crons->patchEntity($cron, $this->request->data);
            if ($this->Crons->save($cron)) {
                $this->Flash->success(__('The cron has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cron could not be saved. Please, try again.'));
            }
        }
        $contratos = $this->Crons->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('cron', 'contratos'));
        $this->set('_serialize', ['cron']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cron id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cron = $this->Crons->get($id);
        if ($this->Crons->delete($cron)) {
            $this->Flash->success(__('The cron has been deleted.'));
        } else {
            $this->Flash->error(__('The cron could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
