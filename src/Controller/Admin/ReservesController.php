<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ReservesController extends AppController
{

       
    public function index()
    {
        $reserves = $this->paginate($this->Reserves);

        $this->set(compact('reserves'));
    }

    public function view($id = null)
    {
        $reserve = $this->Reserves->get($id, [
            'contain' => [],
        ]);

        $this->set('reserve', $reserve);
    }

    public function add()
    {
        $reserve = $this->Reserves->newEntity();
        
        if ($this->request->is('post')) {
            $reserve = $this->Reserves->patchEntity($reserve, $this->request->getData());
            
            if ($this->Reserves->save($reserve)) {
                $this->Flash->success(__('The reserve has been saved.'));
                
                // debug ($this->request->data());
                $filmeTable = TableRegistry::getTableLocator()->get('Filmes');
                $filme = $filmeTable->get($this->request->data('id_movies')); 
                $filme->quantity = ($filme['quantity']-1);
                $filmeTable->save($filme);
                
                               
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The reserve could not be saved. Please, try again.'));
        }
        $this->set(compact('reserve'));
    }
  
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

    public function Devolver($id_movies)
    {
       
        $filmeTable = TableRegistry::getTableLocator()->get('Filmes');
        $filme = $filmeTable->get($id_movies); 
        $filme->quantity = ($filme['quantity']+1);
        $filmeTable->save($filme);
        
        // debug($filme['quantity'] +1);
        return $this->redirect(['action' => 'index']);

    }
}
