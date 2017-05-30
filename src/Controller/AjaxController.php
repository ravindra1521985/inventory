<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Auth\DefaultPasswordHasher;

class AjaxController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
		
		$this->loadComponent('Common');
		$this->Security->config('unlockedActions', ['getCityList','checkduplicate','checkuser']);

      //  $this->Auth->deny('*');
		 $this->Auth->allow(); 
        
        $this->viewBuilder()->layout('');
    }


    public function checkuser(){

    	$adminTable  = TableRegistry::get('admin');
			if($this->request->is('post')){
					if($this->request->data){
					$myArray = $this->request->data;	
						// $myArray['user_id'];
						//die;
					$cond['user_id ='] = $myArray['user_id'];                                        
			
					$getuser = $adminTable
						->find()
						->where($cond)
						->first();
					}
                        
			if(count($getuser)!=0){

			echo json_encode(array('status'=>'Success','user_id'=>$getuser->id));
			//$this->render(false);
			 exit;
		}
		else{
				echo json_encode(array('status'=>'Fail'));
					 exit;
		}

		}

    } 

    public function getStateList($country_id = null)
    {
        if(isset($country_id) && !empty($country_id))
        {
            $list = $this->Common->getStateList($country_id);
            echo json_encode($list);
        }
        $this->render(false);
        exit;
    }

    public function getCityList($state_id = null)
    {
		
        if(isset($state_id) && !empty($state_id))
        {
            $list = $this->Common->getCityList($state_id);
				
			           
            echo json_encode($list);
        }
        $this->render(false);
        exit;
    }
	//getCourseList
	
   
   
   
  
   


   public function  checkemail($id=null){

   		//$erpcoustomer = TableRegistry::get('ErpCustomer');
		$businessAccountTable  = TableRegistry::get('login_customer');
			if($this->request->is('post')){
					if($this->request->data){
					$myArray = $this->request->data;	
						 $myArray['email'];
						//die;
					$cond['email ='] = $myArray['email'];
                                        $cond['status_id ='] = 1;
			
			$getuser = $businessAccountTable
				->find()
				->where($cond)
				->first();
			}
                        
			if(count($getuser)!=0){

			echo json_encode(array('status'=>'Success','login_id'=>$getuser->id,'customer_id'=>$getuser->erp_customer_id));
			//$this->render(false);
			 exit;
		}
		else{
				echo json_encode(array('status'=>'Fail'));
					 exit;
		}

}}	


function checkduplicate(){
	
	
			//print_r($this->request->data);
			$firstname=$this->request->data['firstname'];
			$last_name=$this->request->data['lastname'];
			$father_name=$this->request->data['father_name'];
			$day=$this->request->data['day'];
			$month=$this->request->data['month'];
			$year=$this->request->data['year'];
			$user_type=$this->request->data['user_type'];
			$age=$this->request->data['age'];
			$dob=$year.'-'.$month.'-'.$day;
			$userTable  = TableRegistry::get('login_users');
			if($user_type=='student'){		
		$getuser = $userTable
				->find('all')
				->where(['first_name'=>$firstname,'last_name'=>$last_name,'father_name'=>$father_name,'dob'=>$dob])
				->order(['id'=>'DESC'])
				->toArray();
			}else{
		$getuser = $userTable
				->find('all')
				->where(['first_name'=>$firstname,'last_name'=>$last_name,'father_name'=>$father_name,'age'=>$age])
				->order(['id'=>'DESC'])
				->toArray();
				
			}
				
				
				
				if(isset($getuser) && !empty($getuser) && $getuser !=''){
				
				echo json_encode(array('status'=>'duplicate'));
					 exit;
			}else{
				
				echo json_encode(array('status'=>'notduplicate'));
					 exit;
			}
	
	
	
}

	
        
    
 public function getcustomer($id = null)
    {
        if(isset($id) && !empty($id))
        {
            $list = $this->Common->getcustomerbyid($id);
            echo json_encode($list);
        }
        $this->render(false);
        exit;
    }
  

}
