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

           
        
        $filmes = $this->Reserves->Filmes->find('list',array('fields' => array('id','title')));
        $clients = $this->Reserves->Clients->find('list',array('fields' => array('id','name')));
        $this->set(compact('reserve','filmes','clients'));
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
        $filmes = $this->Reserves->Filmes->find('list',array('fields' => array('id','title')));
        $clients = $this->Reserves->Clients->find('list',array('fields' => array('id','name')));
        $this->set(compact('reserve','filmes','clients'));
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
        // $reserveTable = TableRegistry::getTableLocator()->get('Reserves');
        // $status = $reserveTable->get($id_movies); 
        // $status->devolvido = ('Sim');
        // $reserveTable->save($status);   
        
        $filmeTable = TableRegistry::getTableLocator()->get('Filmes');
        $filme = $filmeTable->get($id_movies); 
        $filme->quantity = ($filme['quantity']+1);

        // $filmeTable->save($filme);
        // debug($filme['quantity'] +1);

        if ($filmeTable->save($filme)) {
            $this->Flash->success(__('Devolvido com sucesso'));
        } else {
            $this->Flash->error(__('Nao pode ser devolvido'));
        }    
        return $this->redirect(['action' => 'index']);
    }
    public function AlterStatus ($devolvido){
        
        $reserveTable = TableRegistry::getTableLocator()->get('Reserves');
        
        $status = $reserveTable->get($devolvido); 
        $status->devolvido = ('Sim');
        $reserveTable->save($status); 
       
        return $this->redirect(['action' => 'index']);
    }


}