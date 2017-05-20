<?php
namespace App\Controller;
//use Cake\Core\Configure;
//use Cake\Network\Exception\NotFoundException;
//use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Core\App;
use Cake\Datasource\ConnectionManager;
use Cake\Controller\Component\FlashComponent;
/*for sending email*/
use Cake\Mailer\Email;
/*end of sending email */

class QuestionController extends AppController
{
    public function initialize()
    {
        parent::initialize();
		 $this->loadComponent('Common');
		  $this->loadComponent('Paginator');
   
      
        
    }
	
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
       

        $this->Security->config('unlockedActions', ['index','answers']);

                $this->Auth->allow();
         
        /*check user type and send user on to own dashboard*/
      
            if($this->request->session()->read('Auth.User.type')!='student')
        {
            $redirecturl=array('controller'=>'home','action'=>'index');
			 return $this->redirect($redirecturl);
		}
       
	   	$this->loadModel('Pages');
		$pomenutext=$this->Pages->find()
		->where(['name'=>'program objective'])		
		->toArray();
		
		
		$this->set('pomenutext',$pomenutext);
		
	 $hiwmenutext=$this->Pages->find()
		->where(['name'=>'how it works'])		
		->toArray();
		$this->set('hiwmenutext',$hiwmenutext);
	   
      
    }


    

function test($lessionid=null){
	
	$this->viewBuilder()->layout('home');
	
	$this->loadModel('Questions');			
		$question=$this->Questions->find()
		->where(['Questions.lession_id'=>$lessionid])
		->contain(['QuestionOptions'])
		 ->order(['RAND()'])
		 ->limit(15)
		->toArray();
		
		//print_r($question);
		//die;
		$this->request->session()->Write('allquestion',$question);
		$this->request->session()->Write('testid',rand());
		$this->set('question',$question);
		//$this->set('testid',rand());
		
		
	
	
	
}
function answers(){
	 if ($this->request->is('post')) {
			 
			 $user=$this->request->session()->read('Auth.User');
			// $this->set('user',$this->request->session()->read('Auth.User'));
			 $this->viewBuilder()->layout('home');
	
				$this->loadModel('Answer');	
			
			 	
					
				//	print_r($this->request->data);
					
					 count($this->request->data['question']);
						$tiscurrect=0;
						$level=1;
					$test_id=rand();
					
					$date=date('Y-m-d H:i:s');
					foreach($this->request->data['question'] as $key=>$value){
						
						//echo $value;
					//echo $this->request->data['answer_'.$key];;
						//echo "<br>";
						if(isset($this->request->data['answer_'.$key])){
							
							$answerTable = TableRegistry::get('Answer');
							$answer = $answerTable->newEntity();
															
						
						$answer->question_id =$value;						
						$answer->question_option_id =$this->request->data['answer_'.$key];
						$answer->user_id =$user['id'];
						$level=$this->request->data['level_id'][$key];
						$answer->level_id =$this->request->data['level_id'][$key];
						$answer->lession_id =$this->request->data['lession_id'][$key];
						$iscurrect=0;
						
						$answer->test_id =$test_id;
						$answer->date =$date;
						
						
						$iscurrect =	$this->Common->getfield('question_options','id',$this->request->data['answer_'.$key],'is_correct');
						if($iscurrect==1){
							$tiscurrect++;
						}
						
						//$answer->iscorrect =$this->request->data['lession_id'][$key];
						$answer->course_id =$this->request->data['course_id'][$key];						
						$answer->iscorrect =$iscurrect;
						
							 if ($answerTable->save($answer)) {
						  //$this->Flash->success(__("Record Added")); 
					//	return $this->redirect(['action' => 'library']);
			 
			 
			 
			 
							}
						
						}
				
						
					}
		 
				if(count($this->request->data['question']) > 0){
						$userlevelTable = TableRegistry::get('UserLevel');
						$userlevel = $userlevelTable->newEntity();
						
						$userlevel->user_id =$user['id'];						
						$userlevel->level_id =$level;
						
						$userlevel->test_id =$test_id;
						$userlevel->date =$date;
						//$date;
						//(count($this->request->data['question'])
						$mark=($tiscurrect*100)/count($this->request->data['question']);
						$userlevel->mark =$mark;
						$this->set('mark',$mark);
						
							 if ($userlevelTable->save($userlevel)) {
						
				}
			}
		 
		 
		//echo $tiscurrect;
		// echo "<br>";
		// echo $mark;
		// die;
					
		$this->Flash->success(__("Your Test Is Sumbit")); 
		
		//die;
		return $this->render('thankyou');
		 $this->render(false);
	
}
}

function thankyou(){
	
	
}


public function printquestion(){
	
				$userid=$this->request->session()->read('Auth.User.id');
				$question=$this->request->session()->read('allquestion');
				
				$downloadquestionTable = TableRegistry::get('Downloadquestion');
			   $dwonloadquestion = $downloadquestionTable->newEntity();												
						
				$dwonloadquestion->user_id =$userid;						
				$dwonloadquestion->date =date('Y-m-d,H:i:S');
				$dwonloadquestion->level_id =$question[0]['level_id'];
				$dwonloadquestion->lession_id =$question[0]['lession_id'];
				$dwonloadquestion->course_id =$question[0]['course_id'];
				$rendnumber=rand();
				$dwonloadquestion->test_id =$rendnumber;
			//$this->request->session()->read('testid');	
				
				
				 if ($downloadquestionTable->save($dwonloadquestion)) {
					  $dqid = $dwonloadquestion->id;
					 $flag=0;
				 foreach($question as $key=>$value){
								
			   $downloadquestionDetilTable = TableRegistry::get('DownloadquestionDetail');
			   $dwonloadquestiondetail = $downloadquestionDetilTable->newEntity();
				$dwonloadquestiondetail->downloadquestion_id=$dqid;
				$dwonloadquestiondetail->question_id=$value['id'];
						
					if ($downloadquestionDetilTable->save($dwonloadquestiondetail)) {
								
								$flag=1;
							}
					 
					 
					 
				 }
			}
				 
				 if($flag==1){
				
						  $data['success'] = true;
                          $data['message'] = 'Success!';
						   $data['text_id'] = $rendnumber;
						  
                          echo json_encode($data);                       
                          $this->render(false);
						exit;  
				 } else{
					 
					  $data['success'] = false;
                          $data['message'] = 'fail!';
                          echo json_encode($data);                       
                          $this->render(false);
						exit;  
				 }
	
}
    

    
}
