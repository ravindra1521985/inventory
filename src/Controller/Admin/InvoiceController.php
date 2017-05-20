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


class InvoiceController extends AppController
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

    /* List of item*/
    public function list()
    {       
      
        $this->loadModel('Invoice');

        if($this->request->is('post'))
        {

            if(isset($this->request->data['search']) && !empty($this->request->data['search']))
                {
                   
                  $search = explode(",",$this->request->data['search']);

                    if(isset($search[0]) && !empty($search[0])){
                     $conditions['invoice_code LIKE ']='%'.$search[0].'%';
                    }
                     if(isset($search[1]) && !empty($search[1])){
                     $conditions['total_amount LIKE ']='%'.$search[1].'%';
                    }
                     if(isset($search[2]) && !empty($search[2])){
                     $conditions['dr_amount LIKE ']='%'.$search[2].'%';
                    }
                   
                     if(isset($search[4]) && !empty($search[4])){
                     $conditions['cr_amount LIKE ']='%'.$search[4].'%';
                    }


                }




        }

        //print_r($conditions);
      
        $this->paginate = array(
           'limit' => 10,
             'conditions' => array('status'=>'1',$conditions),
          //  'contain' => ['Stock','ItemPrice'],
           'order'=>array('id'=>'ASC'),
       );
                
    $result = $this->paginate('Invoice');
    //prd($result);
    $this->set('invoice',$result);
         $this->set('custlist',$this->Common->getcustomerlist());
   

        
    }

    /* add customer */
    public function addinvoice(){

        $this->loadModel('Customer');

            $this->set('custlist',$this->Common->getcustomerlist());

             $this->set('itemlist',$this->Common->getitemrecord());

              $this->loadModel('Invoice');
        $inv=$this->Invoice->find()->last();


        if ($this->request->is('post')) { 


     //  prd($this->request->data);
                        $cid='';
                      if($this->request->data['c_id']==''){

                        $this->loadModel('Customer');
                        $custrecord = $this->Customer->find()
                        ->where(['email'=>$this->request->data['email']])
                        ->first();

                        if(count($custrecord)>0){
                          $this->Flash->error(__("Customer already exists")); 
                          return $this->redirect(['action' => 'list']);
                        }else{

                            $data2['email']       =$this->request->data['email'];
                            $data2['name']        =$this->request->data['name'];
                            $data2['phone']       =$this->request->data['phone'];
                            $data2['dr_amount']   =$this->request->data['dr_amount'];
                            $data2['cr_amount']   =$this->request->data['cr_amount'];
                            $data2['detail']      =$this->request->data['detail'];                           

                            $cid=$this->Common->updatecustomer($data2);
                          }
                      }else{

                          $cid=$this->request->data['c_id'];
                       }

            $string                           =$inv['id']+1;              
            $ids                              = str_pad($string, 6, "0", STR_PAD_LEFT);   
              
            $invoiceTable                      =            TableRegistry::get('Invoice');
            $invoice                           =            $invoiceTable->newEntity();
            $invoice->invoice_code             =            $ids;
            $invoice->customer_id              =            $cid;
            $invoice->total_amount             =            $this->request->data['totalamount'];
            $invoice->dr_amount                =            $this->request->data['dr_amount'];
            $invoice->cr_amount                =            $this->request->data['cr_amount'];
            $invoice->created_by               =            $this->request->session()->read('Auth.User.id') ;
            $invoice->created_date             =            date('Y-m-d H:i:s');               

                    if ($invoiceTable->save($invoice)){
                
                               $invid= $invoice->id;
                                foreach($this->request->data['product_id'] as $key => $value){

                                      if($value!=''){

                                       $invoicedetailTable        =      TableRegistry::get('InvoiceDetail');
                                       $invoicedetail             =      $invoicedetailTable->newEntity();

                                       $invoicedetail->invoice_id =      $invid;
                                       $invoicedetail->item_id    =      $this->request->data['product_id'][$key];
                                       $invoicedetail->item_amount=      $this->request->data['amount'][$key];
                                       $invoicedetail->item_price =      $this->request->data['product_rate'][$key];
                                        $invoicedetail->quantity  =      $this->request->data['stock_qty'][$key];

                                         if($invoicedetailTable->save($invoicedetail)){

                                                /* update this item */
                                              $itemdata1['id']=$this->request->data['product_id'][$key];
                                                $itemdata1['item_quantity']=$this->request->data['qty'][$key]-$this->request->data['stock_qty'][$key];

                                              $this->Common->updateitem($itemdata1);
                                              $this->Common->itemlog($invoicedetail->item_id,$this->request->data['product_name'][$key],$this->request->data['product_code'][$key],$invoicedetail->item_price,$itemdata1['item_quantity'],$this->request->session()->read('Auth.User.id'),'invoice');


                                             }

                                         }

                                    }


                                $data1['id']= $cid;
                                $data1['modify_date'] = date('Y-m-d H:i:s'); 
                                $data1['modify_by']   = $this->request->session()->read('Auth.User.id');
                                $data1['cr_amount']   = $this->request->data['cr_amount'] - $this->request->data['totalamount'];
                                $data1['dr_amount']  = $this->request->data['dr_amount'] + $this->request->data['totalamount'];                          
                                $this->Common->updatecustomer($data1);
                                $this->Common->customerlog($data1,'invoice');

                                $this->Flash->success(__("Record Added")); 
                                return $this->redirect(['action' => 'list']);
                    }
                  
                }


             }



public function getitem(){

       $this->layout = 'ajax';
   // $this->set('itemlist',$this->Common->getitemrecord());
      // echo "sdgfd";
      //$this->render(false);
   $this->viewBuilder()->layout('ajax');


}

public function delete($id=null){
            if(!empty($id)){
                  $id=base64_decode($id);
              }
    $this->Common->statusupdate('invoice',$id,'1');
     $this->Flash->success(__("Record Deleted")); 
                return $this->redirect(['action' => 'list']);
}


public function print($id=null){
             if(!empty($id)){
                  $id=base64_decode($id);             
                  $this->loadModel('Invoice');            
                  $invoice = $this->Invoice->get($id);      
                  $this->set('invoice', $invoice);
            }
}

    
 }