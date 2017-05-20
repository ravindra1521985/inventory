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
			
	  
        
    }
    public function beforeFilter(Event $event)
    { 
        parent::beforeFilter($event); 
        $this->Security->config('unlockedActions', ['login','editmember','reply']);
        $this->Auth->allow(['login','reply']); 
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
               
                $user = $this->Auth->identify();
				
			//	print_r($this->request->data);
				//die;
				
                if ($user) { 
                    $user['login_time'] = date('M d Y H:i:s');
                    $user['type'] = $this->request->data['type'];
                   
                    /* insert into user log table*/
                   // $this->Business->userlog('admin',$user['id']);
				   
				     $this->Common->userlog($user['type'],$user['id']);
                   
                    //////  check privilege
                  //  $tt=$this->Business->getadminprivilege($user['group_id']);                   
                    
                //   $this->request->session()->Write('User.AllowedActions',$tt);
                    // end privilege
                   
                    $this->Auth->setUser($user);
                    if ($this->request->is('ajax')) {
                        echo json_encode(array('status'=>SUCCESS,'msg'=>SYSTEM_MESSAGE_SUCCESS_LOGIN,'url'=>$this->Auth->redirectUrl()));
                    }
                    else
                    {
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                }
                else
                { 
                    if ($this->request->is('ajax')) {
                        echo json_encode(array('status'=>FAILURE,'msg'=>SYSTEM_MESSAGE_INVALID_LOGIN,'url'=>''));
                    }
                    else
                    { 
                        $this->Flash->error(__(SYSTEM_MESSAGE_INVALID_LOGIN));
                    }
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
	
	public function member()
    {
        $this->loadModel('LoginUsers');
	   		
		$this->paginate = array(
            'limit' => 50,
            //'contain' => ['BusinessSubscription','BusinessTypeCategoryAssociation'],
            'conditions' => array('type'=>'student'),
            'order'=>array('LoginUsers.Name'=>'ASC'),
        );
                
        $result = $this->paginate('LoginUsers');
     //prd($result);
	 $this->set('users',$result);
       
	  
	
        
    }
	public function teacher()
    {
        $this->loadModel('LoginUsers');
	   		
		$this->paginate = array(
            'limit' => 50,
            //'contain' => ['BusinessSubscription','BusinessTypeCategoryAssociation'],
            'conditions' => array('type'=>'teacher'),
            'order'=>array('LoginUsers.Name'=>'ASC'),
        );
                
        $result = $this->paginate('LoginUsers');
     //prd($result);
	 $this->set('users',$result);
       
	  
	
        
    }
public function volunteer()
    {
        $this->loadModel('LoginUsers');
	   		
		$this->paginate = array(
            'limit' => 50,
            //'contain' => ['BusinessSubscription','BusinessTypeCategoryAssociation'],
            'conditions' => array('type'=>'volunteer'),
            'order'=>array('LoginUsers.Name'=>'ASC'),
        );
                
        $result = $this->paginate('LoginUsers');
     //prd($result);
	 $this->set('users',$result);
       
	  
	
        
    }
	
 public function editmember($id=null)
    {
       if(!empty($id)){
				$id=base64_decode($id);				
				$this->loadModel('LoginUsers');
				$users = $this->LoginUsers->get($id);
			    $this->set('users', $users);
			}
			$this->set('state',$this->Common->getState(101));
			$this->set('city',$this->Common->getCity($users['state']));
			
			//$this->set('level', $this->Common->getLevelList());
			//	print_r($levelrecord);
			
	       if ($this->request->is('post')) {
			   
			   	   
				//print_r($this->request->data);
				   
				 // die;
				 	$hasher = new DefaultPasswordHasher();
           			 
					$loginusersTable = TableRegistry::get('LoginUsers');
					$loginusers = $loginusersTable->newEntity();
					
					// $book='';
			 	 if(!empty($this->request->data['photo']['name']))
				{
					$photo =$this->Common->uploadimg($this->request->data['photo'],'user_photo');
					$loginusers->photo = $photo;
					
					$path='img/user_photo/'.$this->request->data['oldphoto'];
					unlink(WWW_ROOT.$path);
				}
					$qid=$this->request->data['id'];
				
					$loginusers->first_name = $this->request->data['first_name'];
					$loginusers->last_name =$this->request->data['last_name'];
					$loginusers->tsize =$this->request->data['tsize'];
					$loginusers->id =$this->request->data['id'];
				
					
					
							//$string=$user['id'];
					// $ids= str_pad($string, 6, "0", STR_PAD_LEFT);
					
					//$userid=$this->request->data['first_name'].'_'.$ids;
					//$loginusers->user_id =$userid;
					if($this->request->data['password']!=''){
										$password=$this->request->data['password'];
									
					$loginusers->password=$hasher->hash($password);
					}
					$loginusers->type =$this->request->data['user_type'];
					$loginusers->gender =$this->request->data['gender'];
					$loginusers->dob = $this->request->data['year']."-".$this->request->data['month']."-".$this->request->data['Day'];
					$loginusers->email =$this->request->data['email'];
					//$loginusers->created_date =date('Y-m-d H:i:s');
					$loginusers->father_name =$this->request->data['father_name'];
					$loginusers->address =$this->request->data['address'];
					$loginusers->country =$this->request->data['country'];
					$loginusers->state =$this->request->data['state'];
					$loginusers->mobile =$this->request->data['mobile'];
					$loginusers->city =$this->request->data['city'];
					$loginusers->type =$this->request->data['type'];
					
					$loginusers->education =$this->request->data['education'];
					$loginusers->anyother =$this->request->data['anyother'];
					$loginusers->age =$this->request->data['age'];
					$loginusers->user_class =$this->request->data['class'];
					$loginusers->outcity_teach =$this->request->data['outcity_teach'];			
					
					
					if(isset($this->request->data['c'])){
					$loginusers->shiver_attend =implode(',',$this->request->data['c']);
					}
					//$loginusers->term =$this->request->data['terms'];
					$loginusers->modify_date =date('Y-m-d H:i:s');	
					$loginusers->modify_by =$this->request->session()->read('Auth.User.id');					
					//$loginusers->status = 1;
					
					if ($loginusersTable->save($loginusers)) {
						$this->Flash->success(__("Record updated "));
						 return $this->redirect(['controller'=>'users','action' => 'editmember',base64_encode($qid)]);
					}
		   }
       
	  
	
        
    }
	
public function viewmember($id=null){

  if(!empty($id)){
				$id=base64_decode($id);				
				$this->loadModel('LoginUsers');
					$users=$this->LoginUsers->find()
		->where(['id' => $id])
		->contain(['Comment'])
		->first();
				//pr($users);
			    $this->set('users', $users);
			}
			$this->set('state',$this->Common->getState(101));
			$this->set('city',$this->Common->getCity($users['state']));

}	


public function reply(){
	//$this->viewBuilder()->layout('home');
        
		
		if($this->request->data['user_id']){
			$message=$this->request->data['comment'];
			
			$memberid=$this->request->data['user_id'];
						
						
						 $email=$this->Common->getfield('login_users','id',$memberid,'email');
						
		$id=$this->request->session()->read('Auth.User.id');            
					if($this->request->session()->read('Auth.User.id'))
					{
						
						
		/*  $email = new Email();
        //$email->transport('Mail');
     
            $res = $email->from(['singh85.ravindra@gmail.com'])
                  ->to(['singh85.ravindra@gmail.com' => 'My Website'])
				  ->setCc(['singh85.ravindra@gmail.com'])
                  ->subject('Jain')                   
                  ->send($message);*/

				  
				  
	/* @$email = new Email('default'); 
     @$email->to('singh85.ravindra@gmail.com')
    ->from(['singh85.ravindra@gmail.com' =>'test'])
    ->subject('reply')
    ->send('test');
	*/
	//print_r($email);
	
	
	
	/* try{
    $email = new Email('default');
    $email->from(['singh85.ravindra@gmail.com' => 'singh85.ravindra@gmail.com'])
        ->to('singh85.ravindra@gmail.com')
        ->bcc('singh85.ravindra@gmail.com')
        ->subject('test')
       // ->template('fail', 'default')
      //  ->emailFormat('html')
        ->send("test");
} catch (Exception $ex) {
	
}*/
				$sendemail=$this->Common->sendreplyEmail($email,$message,'singh85.ravindra@gmail.com','Notification');

						
						
						
						
						
						
						
						 $data['success'] = true;
                          $data['message'] = 'Success!';
                          echo json_encode($data);                       
                        
                          $this->render(false);
                           exit;    


                       }
					
				  }
              $this->render(false);
               exit; 
		
			}

 
   
}