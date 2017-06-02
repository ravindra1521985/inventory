<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;
use Cake\Core\Exception\Exception;


class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
      //  $this->loadComponent('Business');
	  $this->loadComponent('Paginator');
	    $this->loadComponent('Common');
		
		
			//$this->set('state',$this->Common->getState(101));
			//$this->set('country',$this->Common->getCountryList());
			$this->viewBuilder()->layout('admin');
	  
        
    }
    public function beforeFilter(Event $event)
    { 
        parent::beforeFilter($event); 
        $this->Security->config('unlockedActions', ['login','editmember','reply']);
        $this->Auth->allow(['login','reply']); 
        $this->viewBuilder()->layout('admin');
    }

    public function index($request_type=null)
    { 
                 
    }

   
    
    public function login()
    { 
        //checking if user is already logged in
        if($this->Auth->User())
        {
            $this->_checkExistingLogin();
        }
        else
        {
            $this->Auth->config('authenticate', ['Form' => ['userModel' =>'admin']]);
            if ($this->request->is('post')) {  

            	 if($this->request->data['user_id']!="" && $this->request->data['password']!=""){             
               

                $user = $this->Auth->identify();
									
                if ($user) { 

                    $user['login_time'] = date('M d Y H:i:s');
                    $user['type'] = $this->request->data['type'];
                     $user['session_key']=$this->request->session()->id();
                   
                 		   
				     $this->Common->userlog($user['type'],$user['id']);
                   
                 
                   
                    $this->Auth->setUser($user);
                   
                    	 return $this->redirect($this->Auth->redirectUrl());

                }else{
                	  $this->Flash->error(__("Username or Password Invalid."));
                	 }

            	}else
                { 
                    
                        $this->Flash->error(__("Username or Password Is Empty."));
                    
                }
            }

            if ($this->request->is('ajax')) {
                $this->autoRender = false ;
            }
        }
        
    }
    
    public function logout()
    {
        
        return $this->redirect($this->Auth->logout());
    }

    protected function _checkExistingLogin()
    {
        if ($this->request->is('ajax')) {
            echo json_encode(array('status'=>SUCCESS,'msg'=>SYSTEM_MESSAGE_SUCCESS_LOGIN,'url'=>$this->Auth->redirectUrl()));
            $this->autoRender = false ;
        }
        return $this->redirect($this->Auth->redirectUrl());
    } 
    
   
     public function notallowed()
    {
        
    }
	
	
   
}