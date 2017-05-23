<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;





/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

		//for use frefix
		
 public function __getprefix()
    {
        error_reporting(0);
       //$prefixx=$this->request->params['prefix'];

        $prefixx='admin';

      //  echo  $prefixx;
      //  die;
	
       if($prefixx=='guest')
       {
             return  $logouturl=array('controller'=>'home','action'=>'index',);
       }
       else if($prefixx=='admin')
       {
		   
           return  $logouturl=array('controller'=>'Users','action'=>'login',);
       }
       else{

            return  $logouturl=array('controller'=>'home','action'=>'index',);
       }

      
         
         
     
    }






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
       /* parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');*/
		
		
		
		$logouturl=$this->__getprefix();
        
        parent::initialize();
        $this->loadComponent('Security');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
       // $this->loadComponent('Common');
        //$this->loadComponent('Cookie');
          $this->loadComponent('Auth', [
                'authenticate' => [
                        'Form' => [
                                'fields' => [
                                        'username' => 'user_id',
                                        'password' => 'password'
                                ],
                                'finder' => 'auth'
                        ]
                ],
               // 'authError' => 'Did you really think you are allowed to see that?',
			 'authError' => '',	
				
                /*'loginAction' => [
                        'controller' => 'Users',
                        'action' => 'login'
                ],*/
                  'loginAction'=>$logouturl,
                'loginRedirect' => [
                        'controller' => 'home',
                        'action' => 'index'
                ],
              //  'logoutRedirect' => ['controller' => 'Users','action' => 'login',],
               'logoutRedirect' => $logouturl,
                'authorize' => 'Controller',
        ]);
        $action = strtolower($this->request->params['action']);
        $controller = strtolower($this->request->params['controller']); 
        $routing_prefix = strtolower(isset($this->request->params['prefix']) ? $this->request->params['prefix'] : ''); 
        $this->set('controller',$controller);
        $this->set('action',$action);
        $this->set('routing_prefix',$routing_prefix);
		
		
		
		

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
     
		
		date_default_timezone_set("Asia/Kolkata"); 

		
		  if(isset($this->request->params['prefix']) && ($this->request->params['prefix'] == 'admin'))
        {
			
           // $this->viewBuilder()->layout('admin');
        }
        else
        {
			  
           // $this->viewBuilder()->layout('home');
        }
        //$this->Auth->allow(['index', 'view', 'display']);
        ///////////  code for privilege
        
      if($this->request->session()->read('Auth.User.id'))
            {
          
        if( $this->request->session()->read('User.AllowedActions') && $this->request->session()->read('Auth.User.id') > 1)
           {  
             
            $prefixx=$this->request->params['prefix'];
            $controller=$this->request->params['controller'];
            
            $tt=$this->request->session()->read('User.AllowedActions');
            if($prefixx=='admin')
            {
               if(!in_array($controller, $tt))
                       {                 
                   $this->viewBuilder()->layout('');
                  $this->redirect(['controller'=>'users','action'=>'notallowed']);
               }
            }
		   }
			}
		
		
		/*if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }*/
    }
	 public function isAuthorized($user = null)
    { 

         
        // Any registered user can access public functions
        if (empty($this->request->params['prefix'])) {

            if($user['type'] ==='guest'){
                   return true;
              }else{

                 return $this->redirect($this->Auth->redirectUrl());
              }
           
        }

        // Only user type admin can access admin prefix functions
        if ($this->request->params['prefix'] === 'admin') {
            return (bool)($user['type'] === 'admin');
            
        }
        
        // Only user type lab can access admin prefix functions
       
       
     
        

        // Default deny
        return false;
    }
}
