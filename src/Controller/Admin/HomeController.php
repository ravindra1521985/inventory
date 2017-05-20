<?php
namespace App\Controller\Admin;
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;


class HomeController extends AppController
{
       
   public function initialize()
    {
        parent::initialize();
      $this->loadComponent('Common');
       
    }
     public function beforeFilter(Event $event)
    { 
        parent::beforeFilter($event); 
        $this->Security->config('unlockedActions', []);
        
    }
   
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
    }
    
    
    public function index($request_type=null,$page=null)
    {
       
	  
	
		
    }
    
   
    
 }


