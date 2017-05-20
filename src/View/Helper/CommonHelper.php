<?php 
namespace App\View\Helper;
use Cake\View\Helper;
use Cake\View\View;
use Cake\ORM\TableRegistry;

//App::import('Component', 'MyComponent');

//App::uses('AppHelper', 'View/Helper');
//App::import('Component', 'Common');

class CommonHelper extends Helper
{
     private $Common = null;

     /*
    public function getStatus($status_id=null)
    {
        if(isset($status_id) && !empty($status_id))
        {
            if($status_id == STATUS_ACTIVE)
            {
                return STATUS_ACTIVE_TEXT;
            }
            elseif($status_id == STATUS_DEACTIVE)
            {
                return STATUS_DEACTIVE_TEXT;
            }
        }
        else
        {
            return false;
        }
    }
    * 
      */
   
   

   public function getlevel($id=null){

    $level = TableRegistry::get('Level');
   
				$con['id'] = $id;  
              $levelinfo = $level->find()
				->select(['level_name'])
                ->where($con)
                ->first();

  return $levelinfo['level_name'];

}

 public function getlastlogindetail($id=null){

    $level = TableRegistry::get('users_log');
   
				$con['login_user_id'] = $id;  
              $levelinfo = $level->find()
				->where($con)
				->order(['users_log.id' => 'DESC'])
				->first();

  return $levelinfo['login_date'];

}


public function getdetail($string=null)
{
    $str1=substr($string,0,50);
    $str2=substr($string,49,52);
    if($str2!='')
    {
        $finalstring=$str1.'...';
    }
    else
    {
        $finalstring=$str1;
    }
   return $finalstring;
   }

   public function getfield($table,$conditio1,$condition2,$field)
    {
      if($condition2=='' && $condition2==0)
      {
         return 0;
      }
        $datay = TableRegistry::get($table);
        $queryy = $datay->find()        
         ->where([$conditio1 => $condition2]);      
     foreach ($queryy as $roww)
                   {
                    $typelist = $roww->$field;
                   }
               return $typelist;
 
    }
	
public function getquestion_option($id=null){

    $questionoptiontable = TableRegistry::get('QuestionOptions');
   
				$con['questions_id'] = $id;  
                $questionoption = $questionoptiontable->find()
				//->select(['level_name'])
                ->where($con)
                ->toArray();

  return $questionoption;

}

public function action_name($actionname=null){
	if($actionname=='myaccount'){
		return 'My Profile'; 
	}
	
	if($actionname=='course'){
		return 'Course'; 
	}
	
	if($actionname=='lesson'){
		return 'lesson'; 
	}
	if($actionname=='editProfile'){
		return 'Edit Profile'; 
	}
	if($actionname=='viewmark'){
		return 'View Mark'; 
	}
	if($actionname=='viewResult'){
		return 'View Result'; 
	}
	
	if($actionname=='answers'){
		return 'Answers'; 
	}
	if($actionname=='test'){
		return 'Test'; 
	}
	if($actionname=='thankyou'){
		return 'Thank You'; 
	}
	
}

public function getquestiondetail($id=null){
	
	
	$this->loadModel('Questions');	

		$questionoptiontable = TableRegistry::get('Questions');	
		$question=$questionoptiontable->find()
		->where(['Questions.id'=>$id])
		->contain(['QuestionOptions'])		
		->toArray();
		
				
		return $question;
	
}

/* fectch data from user log */
   function getuserlog($user_type=null,$user_id=null)
    {
       
        $datay = TableRegistry::get('users_log');        
               $datay = TableRegistry::get('users_log');        
                $queryy1 =  $datay->find('all',['conditions'=>['login_user_id'=>$user_id,'user_type'=>$user_type],'order'=>['id desc limit 1,1']]);  
                if(count($queryy1)<2)
                {
                    $queryy =  $datay->find('all',['conditions'=>['login_user_id'=>$user_id,'user_type'=>$user_type],'order'=>['id desc limit 0,1']]);  
                }
                else { $queryy=$queryy1; }                 
                $data=array();         
                foreach ($queryy as $roww)
                   {
                   
                    $ex=explode(',', $roww['login_date']);
                    
                     $data=array('date'=>date('d/m/Y',strtotime($ex['0'])),'time'=>$ex['1']);
                     
                   }                     
                 return $data;
    }


 
}