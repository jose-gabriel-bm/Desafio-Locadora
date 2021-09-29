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

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',
        [
            'authenticate' => 
            [
                'Form' => 
                [
                    'fields' => 
                    [
                        'username' => 'username',
                        'password' => 'password'

                    ]
                ]
            ],
    
            'loginRedirect' => 
            [
                'controller' => 'Users' ,
                'action' => 'index'
            ],
            
            'logoutRedirect' => 
            [
                'controller' => 'Users' ,
                'action' => 'login'
            ],
    
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');


    }

    public function beforeRender(Event $event)
    {
        // $prefix = null;
        // if($this->request->getParam(['prefix']) !== null )){
        //     $prefix = $this->request->getParam(['prefix']);
        // }
        // if($prefix == 'admin'){
        //     if(($this->request->getParam(['action'] !== null)) and
        //      ($this->request->getParam(['action'] == 'login')){
        //        $this->viewBuilder()->setLayout('login'); 
        //     }
        
        // }



        if(!array_key_exists('_serialize', $this->viewVars) && in_array($this->response->type(),['aplication/json', 'aplication/xml'])
        ){
            $this->set('__serialize', true);
            $this->viewBuilder()->setLayout('login');
        }
    }

    public function beforeFilter(Event $event)
    {
        $this->set('username', $this-> Auth->user('username'));
        $this->viewBuilder()->setLayout('login');
    }
    
}
