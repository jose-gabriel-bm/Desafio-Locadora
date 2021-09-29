<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' =>[
                'controller'=>'Users',
                'action'=>'index'
            ],
            'logoutRedirect'=>[
                'controller'=>'users',
                'action'=>'login'
            ]
        ]);
    }

    public function beforeRender(Event $event)
    {
        $prefix = null;
        if($this->request->getParam(['prefix']) !== null ){
            $prefix = $this->request->getParam(['prefix']);
        }

         if($prefix == 'admin')
        {
            if(($this->request->getParam(['action']) !== null ) AND ($this->request->getParam(['action']) == 'login')){
                $this->viewBuilder()->setLayout('login');
            }else{
                $this->viewBuilder()->setLayout('admin');
            }
        }
    }
}

  //     public function beforeFilter(Event $event)
//     {
//         $this->set('username', $this-> Auth->user('username'));
//         $this->viewBuilder()->setLayout('login');
//     }
    
//}
