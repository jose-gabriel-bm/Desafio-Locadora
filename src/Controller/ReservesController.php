<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reserves Controller
 *
 * @property \App\Model\Table\ReservesTable $Reserves
 *
 * @method \App\Model\Entity\Reserve[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReservesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $reserves = $this->paginate($this->Reserves);

        $this->set(compact('reserves'));
    }

    /**
     * View method
     *
     * @param string|null $id Reserve id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reserve = $this->Reserves->get($id, [
            'contain' => [],
        ]);

        $this->set('reserve', $reserve);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reserve = $this->Reserves->newEntity();
        if ($this->request->is('post')) {
            $reserve = $this->Reserves->patchEntity($reserve, $this->request->getData());
            if ($this->Reserves->save($reserve)) {
                $this->Flash->success(__('The reserve has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reserve could not be saved. Please, try again.'));
        }
        $this->set(compact('reserve'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reserve id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reserve = $this->Reserves->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reserve = $this->Reserves->patchEntity($reserve, $this->request->getData());
            if ($this->Reserves->save($reserve)) {
                $this->Flash->success(__('The reserve has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reserve could not be saved. Please, try again.'));
        }
        $this->set(compact('reserve'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reserve id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reserve = $this->Reserves->get($id);
        if ($this->Reserves->delete($reserve)) {
            $this->Flash->success(__('The reserve has been deleted.'));
        } else {
            $this->Flash->error(__('The reserve could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
