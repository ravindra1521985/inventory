<?php
namespace App\Controller;
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\ConnectionManager;
use Cake\Controller\Component\FlashComponent;
//use Cake\View\ViewBuilder;
class UsersController extends AppController
{
    public function initialize()
    { 

        parent::initialize();
           
        $this->loadComponent('Common');
     
       // $this->loadComponent('Cookie', ['expiry' => '1 month']);

     
         ############### for select check box of diet plan poup
          $user = $this->Auth->user();
         
        
    }
    public function beforeFilter(Event $event)
    { 
        parent::beforeFilter($event); 
        $this->Security->config('unlockedActions', ['login','changepassword']);
        $this->Auth->allow(['login']); 
        $coustomer = $this->Auth->user(); 
		$id = $coustomer->erp_customer_id;
	$table   = TableRegistry::get('LoginUsers');
        $query  = $table->find()->where(['id'=>$id])->first(); 
        $this->Auth->user()->id = $query;
       
    }
    
    public function index($request_type=null)
    { 
        $this->loadComponent('Paginator');
        $conditions['Users.status_id in'] =$this->Common->getStatus();
        if($this->request->is('post')) 
        {               
                if(isset($this->request->data['Users']['search_hidden']))
                {
                    if($this->request->data['Users']['username']) {
                        $this->request->session()->write('Search.conditions',$this->request->data) ;
                        $this->redirect(array('controller'=>'users', 'action'=>'index', 'search'));
                    } else {
                        $this->Flash->error(__(SYSTEM_MESSAGE_SEARCH_CRITERIA));
                        $this->request->session()->delete('Search.conditions') ;
                    }
                }
        }
        else
        {
            if($request_type == 'search')
            {
                $this->request->data = $this->request->session()->read("Search.conditions");
                if (isset($this->request->data['Users']['username']) && !empty($this->request->data['Users']['username'])){
                    $conditions['Users.username like']="%".trim($this->request->data['Users']['username'])."%";
                }
            }
        }
        
        $this->paginate = [
            'contain' => ['Labs','UserGroups'],
            'limit'=>PAGINATE_LIMIT,
            'conditions' => $conditions,
            'order'=>array('id'=>'DESC')
        ];
        
        $this->set('data', $this->paginate($this->Users));           
    }

  
    

    public function login()
    { 
			
			
			//$this->request->Session()->destroy();
		$hasher = new DefaultPasswordHasher();
		$this->Auth->config('authenticate', ['Form' => ['userModel' => 'LoginUsers']]);
		if ($this->request->is('post')) {
			//$this->request->data['password'] =$hasher->hash($this->request->data['password']);
		
			$user = $this->Auth->identify();
			
		//	print_r($user);
			//die;
			if ($user) {
				$this->request->session()->Write('newuser','newuser');
				
				  $this->Common->userlog($user['type'],$user['id']);
				// $user['type'] = 'guest';
			$this->Auth->setUser($user);
			//print_r($this->request->session()->read('lession_id'));
			//die;
			if($this->request->session()->read('lession_id')!=''){
				$lessionid=$this->request->session()->read('lession_id');
				return $this->redirect(['controller'=>'Home','action' => 'lesson',$lessionid]);
			}else{
				return $this->redirect(['controller'=>'Home','action' => 'myaccount']);
			}
       // return $this->redirect($this->Auth->redirectUrl());
    }else{
		
			$this->Flash->error(__('Invalid User Name or password, try again'));
		return $this->redirect(['controller'=>'Home','action' => 'login_registration']);
	}
	
	
   // $this->Flash->error(__('Invalid email or password, try again'));
  }
        
    }
    
    public function logout()
    {
           $this->request->Session()->destroy();
    //  $this->Cookie->write('remember_me_cookie','-3600');
     // $cookie = $this->Cookie->read('remember_me_cookie');      
     // $this->Cookie->delete($cookie);
    //$this->Cookie->destroy();
        return $this->redirect($this->Auth->logout());
    }
	
	
    

  
	
	
}