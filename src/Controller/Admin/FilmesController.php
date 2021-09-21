<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Filmes Controller
 *
 * @property \App\Model\Table\FilmesTable $Filmes
 *
 * @method \App\Model\Entity\Filme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $filmes = $this->paginate($this->Filmes);

        $this->set(compact('filmes'));
    }

    /**
     * View method
     *
     * @param string|null $id Filme id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filme = $this->Filmes->get($id, [
            'contain' => [],
        ]);

        $this->set('filme', $filme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filme = $this->Filmes->newEntity();
        if ($this->request->is('post')) {
            $filme = $this->Filmes->patchEntity($filme, $this->request->getData());
            if ($this->Filmes->save($filme)) {
                $this->Flash->success(__('The filme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filme could not be saved. Please, try again.'));
        }
        $this->set(compact('filme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Filme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filme = $this->Filmes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filme = $this->Filmes->patchEntity($filme, $this->request->getData());
            if ($this->Filmes->save($filme)) {
                $this->Flash->success(__('The filme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filme could not be saved. Please, try again.'));
        }
        $this->set(compact('filme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Filme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filme = $this->Filmes->get($id);
        if ($this->Filmes->delete($filme)) {
            $this->Flash->success(__('The filme has been deleted.'));
        } else {
            $this->Flash->error(__('The filme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
