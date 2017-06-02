<?php
namespace App\Controller\Admin;
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;
use Cake\Controller\Component\FlashComponent;


class PrintController extends AppController
{
       
   public function initialize()
    {
        parent::initialize();
      $this->loadComponent('Common');
       
    }
     public function beforeFilter(Event $event)
    { 
        parent::beforeFilter($event); 
        $this->Security->config('unlockedActions', ['getitem','addinvoice']);
        
    }
   
  // public function beforeRender(Event $event)
  //  {
   //     parent::beforeRender($event);
   // }
    
    
    public function index($request_type=null,$page=null)
    {
       
	  
	
		
    }

 



public function printinvoice($id=null){

            $this->viewBuilder()->layout('print');
             if(!empty($id)){
                  $id=base64_decode($id);             
                  $this->loadModel('Invoice');            
                 // $invoice = $this->Invoice->get($id);      
                //  $this->set('invoice', $invoice);

                  // $this->loadModel('Customer');
                  $this->set('itemlist',$this->Common->getitemrecord());
                        $invoicerecord = $this->Invoice->find()
                        ->where(['id'=>$id])
                         ->contain(['InvoiceDetail'])
                        ->All();

                       // prd($invoicerecord);

                      //  print_r($invoicerecord);
                        $this->set('invoice', $invoicerecord);

                      //  return $this->redirect(['controller'=>'invoice','action' => 'addinvoice']);

                       // die;
            }
}

public function printinvoicep($id=null){

            $this->viewBuilder()->layout('print');
             if(!empty($id)){
                  $id=base64_decode($id);             
                  $this->loadModel('Invoice');            
                 // $invoice = $this->Invoice->get($id);      
                //  $this->set('invoice', $invoice);

                  // $this->loadModel('Customer');
                  $this->set('itemlist',$this->Common->getitemrecord());
                        $invoicerecord = $this->Invoice->find()
                        ->where(['id'=>$id])
                         ->contain(['InvoiceDetail'])
                        ->All();

                       // prd($invoicerecord);

                      //  print_r($invoicerecord);
                        $this->set('invoice', $invoicerecord);

                      //  return $this->redirect(['controller'=>'invoice','action' => 'addinvoice']);

                       // die;
            }
}

    
 }
