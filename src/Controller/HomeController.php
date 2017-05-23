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

class HomeController extends AppController
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
       

        $this->Security->config('unlockedActions', ['index','loginRegistration','aboutUs','newsEvents','changepassword','thankyou','myAccount','course','contactUs','editProfile']);

                $this->Auth->allow();
         
        /*check user type and send user on to own dashboard*/

     $redirecturl=array('controller'=>'admin','action'=>'index');
			 return $this->redirect($redirecturl);
		
		
      
        
        
       
      
    }


    
    
    public function index()
    {
		
	 



        
    }
		
    

    
}
