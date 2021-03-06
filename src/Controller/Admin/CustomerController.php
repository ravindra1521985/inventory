<?php
namespace App\Controller\Admin;
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;


class CustomerController extends AppController
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
       
	    
        $this->viewBuilder()->layout('admin');
	
		
    }


    /* view list*/


    public function viewuser(){

       // echo "sdfdfgd";
       // die;

        $this->viewBuilder()->layout('admin');

       $this->loadModel('Admin');

        if($this->request->is('post'))
        {

            if(isset($this->request->data['search']) && !empty($this->request->data['search']))
                {
                   
                  $search = explode(",",$this->request->data['search']);

                     if(isset($search[0]) && !empty($search[0])){
                     $conditions['user_id LIKE ']='%'.$search[0].'%';
                    }


                    if(isset($search[1]) && !empty($search[1])){
                     $conditions['first_name LIKE ']='%'.$search[1].'%';
                    }
                    if(isset($search[2]) && !empty($search[2])){
                     $conditions['last_name LIKE ']='%'.$search[2].'%';
                    }

                     
                     if(isset($search[3]) && !empty($search[3])){
                     $conditions['email LIKE ']='%'.$search[3].'%';
                    }
                   
                    

                }


             
        }


        $this->paginate = array(
           'limit' => 10,
             'conditions' => array('status'=>'1',$conditions),
          //  'contain' => ['Stock','ItemPrice'],
           'order'=>array('Admin.created_date'=>'DESC'),
       );
                
          $result = $this->paginate('Admin');
   //prd($result);
          $this->set('userrecord',$result);


    }

    public function edituser($id=null){


        $this->viewBuilder()->layout('admin');
          if(!empty($id)){
                  $id=base64_decode($id);             
                  $this->loadModel('Admin');            
                  $admin = $this->Admin->get($id);      
                  $this->set('customer_record', $admin);
                }
       
            
           if ($this->request->is('post')) {

                
                       
                      
            $data['created_by']    =     $this->request->session()->read('Auth.User.id') ;
            $data['user_id']       =     $this->request->data['user_id'] ;
            $data['id']            =     $this->request->data['id'] ;
            $data['mobile']        =     $this->request->data['mobile'] ;
            $data['email']         =     $this->request->data['email'] ;
            $data['grouptype']     =     $this->request->data['grouptype'] ;

            if($this->request->data['password'] !=""){

                $hasher = new DefaultPasswordHasher();

                    $data['password']  = $hasher->hash($this->request->data['password']);

            
         
            $admin = $this->Admin->newEntity(); 


            $admin1 = $this->Admin->patchEntity($admin, $data);
            if($this->Admin->save($admin1)) {
                
               
                        $this->Flash->success(__("Record Added")); 
                      return $this->redirect(['action' => 'viewuser']);
               }

            }
          }





    }

    public function adduser(){



        $this->viewBuilder()->layout('admin');
         $this->loadModel('Admin');
      
        if ($this->request->is('post')) { 


          //  print_r($this->request->data);

          $this->request->data['grouptype']=$this->request->data['group'];

          $this->request->data['created_by']    =     $this->request->session()->read('Auth.User.id') ;
           
            $hasher = new DefaultPasswordHasher();

            $this->request->data['password'] = $hasher->hash($this->request->data['password']);

            $admin = $this->Admin->newEntity();     
            $admin1 = $this->Admin->patchEntity($admin, $this->request->data);
            if($this->Admin->save($admin1)) {
                //return $this->redirect(['action' => 'index']);
                        /*itemlog USE FOR ITEM LOG*/
                     
                        $this->Flash->success(__("Record Added")); 
                        return $this->redirect(['action' => 'viewuser']);
                    }




                      }





    }

    public function deleteuser($id=null){

          if(!empty($id)){
                  $id=base64_decode($id);
              }
            $this->Common->statusupdate('admin',$id,'1');
            $this->Flash->success(__("Record Deleted")); 
                return $this->redirect(['action' => 'viewuser']);

    }




    /* List of item*/
    public function viewlist()
    {       
        
        $this->viewBuilder()->layout('admin');
        $this->loadModel('Customer');

        if($this->request->is('post'))
        {

            if(isset($this->request->data['search']) && !empty($this->request->data['search']))
                {
                   
                  $search = explode(",",$this->request->data['search']);

                    if(isset($search[0]) && !empty($search[0])){
                     $conditions['name LIKE ']='%'.$search[0].'%';
                    }
                     if(isset($search[1]) && !empty($search[1])){
                     $conditions['phone LIKE ']='%'.$search[1].'%';
                    }
                     if(isset($search[2]) && !empty($search[2])){
                     $conditions['email LIKE ']='%'.$search[2].'%';
                    }
                    if(isset($search[3]) && !empty($search[3])){
                     $conditions['dr_amount LIKE ']='%'.$search[3].'%';
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
           'order'=>array('Customer.created_date'=>'DESC'),
       );
                
    $result = $this->paginate('Customer');
    //prd($result);
    $this->set('Customer',$result);
   

        
    }

    /* add customer */
    public function addcustomer(){

        $this->viewBuilder()->layout('admin');
        $this->loadModel('Customer');
        $customer=$this->Customer->find()->last();

        if ($this->request->is('post')) { 

                        $this->loadModel('Customer');
                        $custrecord = $this->Customer->find()
                        ->where(['email'=>$this->request->data['email']])
                        ->first();

                        if(count($custrecord)>0){

                        $this->Flash->error(__("Customer already exists")); 
                        return $this->redirect(['action' => 'viewlist']);
                        }


            $this->request->data['created_by']    =     $this->request->session()->read('Auth.User.id') ;
            $this->request->data['created_date']  =     date('Y-m-d H:i:s'); 
            $customer = $this->Customer->newEntity();     
            $customer1 = $this->Customer->patchEntity($customer, $this->request->data);
            if($this->Customer->save($customer1)) {
                //return $this->redirect(['action' => 'index']);
                        /*itemlog USE FOR ITEM LOG*/
                        $this->request->data['id']=$customer1->id;
                        $this->Common->customerlog($this->request->data,'manual');
                        $this->Flash->success(__("Record Added")); 
                        return $this->redirect(['action' => 'viewlist']);
                    }
       
                }
             }

        public function editcustomer($id=null){

                //echo $id;
            
        $this->viewBuilder()->layout('admin');
            if(!empty($id)){
                  $id=base64_decode($id);             
                  $this->loadModel('Customer');            
                  $customer = $this->Customer->get($id);			
                  $this->set('customer_record', $customer);
            }
       
            
           if ($this->request->is('post')) {

                    $this->loadModel('Customer');
                        $custecord = $this->Customer->find()
                        ->where(['Customer.email'=>$this->request->data['email'],'Customer.id !='=>$this->request->data['id']])
                        ->first();

                        if(count($custecord)>0){

                        $this->Flash->error(__("Customer already exists")); 
                        return $this->redirect(['action' => 'viewlist']);
                        die;
                        }
 
            $this->request->data['modify_by']    =     $this->request->session()->read('Auth.User.id') ;
            $this->request->data['modify_date']  =     date('Y-m-d H:i:s'); 
            $customer = $this->Customer->newEntity();     
            $customer1 = $this->Customer->patchEntity($customer, $this->request->data);
            if($this->Customer->save($customer1)) {
                //return $this->redirect(['action' => 'index']);
                        /*itemlog USE FOR ITEM LOG*/
                    //  $this->Common->customerlog($customer,$this->request->session()->read('Auth.User.id'),'manual');
                $this->Common->customerlog($this->request->data,'manual');
                        $this->Flash->success(__("Record Added")); 
                        return $this->redirect(['action' => 'viewlist']);
            }

            }
        }

   /* upload csv file to  item list*/     
        


public function delete($id=null){
            if(!empty($id)){
                  $id=base64_decode($id);
              }
    $this->Common->statusupdate('customer',$id,'1');
     $this->Flash->success(__("Record Deleted")); 
                return $this->redirect(['action' => 'viewlist']);
}


public function uploadcustomercsv(){

  
        $this->viewBuilder()->layout('admin');
if($this->request->is('post')) {


                    $itemtempTable      =      TableRegistry::get('customer_temp');
               
                    $this->Common->deletealltable('customer_temp');

                  
             if(!empty($this->request->data['csv']['name']))
                {
                    $csv =$this->Common->uploadpdffile($this->request->data['csv'],'csv');
                    
                }


    $csv1=SITEURL.'img/csv/'.$csv;

   // $csv_file = "test.csv"; 

if(($handle = fopen($csv1, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }
                                    $col1 = $col[0];
                                    $col2 = $col[1];
                                    $col3 = $col[2];
                                    $col4 = $col[3];
                                    $col5 = $col[4];
                                    $col6 = $col[5];
                      if($col2!=''){             

                     $cust_tempTable         = TableRegistry::get('customer_temp');
                    $itemtemp                =   $cust_tempTable->newEntity();
                    $itemtemp->email         =   $col2;
                    $itemtemp->name          =   $col3;                   
                    $item->status            =    1; 
                    $itemtemp->dr_amount     =    $col4;
                    $itemtemp->cr_amount     =    $col5;
                    $itemtemp->created_by    =   $this->request->session()->read('Auth.User.id') ;
                    $itemtemp->created_date  =   date('Y-m-d H:i:s');                    
                
            if ($itemtempTable->save($itemtemp)) {

                }
  
                }
            }
            fclose($handle);
            }


                        $custtempTable1    =    TableRegistry::get('customer_temp');
                        $custrecord1 = $custtempTable1->find()                       
                        ->All();


                        if(count($custrecord1)>0){
                        foreach($custrecord1 as $key=>$value){

                         

                   // $customerTable2          = TableRegistry::get('Customer');
                   // $customer                    =  $customerTable2->newEntity();

                         /* check item code allready exsits */
                $custrecord = $this->Common->getcustomerbyemail($value->email);

                     if(count($custrecord)>0) {
                  

            $this->request->data['modify_by']    =       $this->request->session()->read('Auth.User.id') ;
            $this->request->data['modify_date']  =       date('Y-m-d H:i:s');           
            $this->request->data['id']           =       $custrecord['id'];
            }
            else{

            $this->request->data['created_by']    =       $this->request->session()->read('Auth.User.id') ;
            $this->request->data['created_date']  =       date('Y-m-d H:i:s'); 
            }
            $this->request->data['name']         =       $value->name;
            $this->request->data['dr_amount']    =       $value->dr_amount;
            $this->request->data['cr_amount']    =       $value->cr_amount;
            $this->request->data['email']        =        $value->email;
                

                    $this->loadModel('Customer');
                 $customer123 = $this->Customer->newEntity();     
            $customer1 = $this->Customer->patchEntity($customer123, $this->request->data);
            if($this->Customer->save($customer1)) {
                $this->Common->customerlog($this->request->data,'excel');
           // $customer1 = $customerTable2->patchEntity($customer, $this->request->data);
           // if($customerTable2->save($customer1)) {
            }
      


         }
    }


 $this->Common->deletealltable('customer_temp');
                $this->Flash->success(__("Record Added")); 
               return $this->redirect(['action' => 'viewlist']);

}

}


public function downloadexcel(){

    $filename="list_of_Customer.csv";
         $this->loadModel('Customer');
        $data1=$this->Customer->find()
            ->where(['status'=>'1'])      
            ->Order(['name'=>'ASC'])
        ->toArray();

           foreach($data1 as $key=>$value)

        $data11[$key]=[++$key,$value->name,$value->phone,$value->email,$value->dr_amount,$value->cr_amount];

        $this->Common->export_excel($fileName, $data11,'Customer');
    
} 

public function invoicepdfbyclient($id=null){

        //  echo  "sff";
        //  die;

       // $invoice=  $this->Common->getmonthlyinvoiceofclient($id);

      //  prd($invoice);
           $this->set('invoice',$this->Common->getmonthlyinvoiceofclient($id));

        $this->layout = 'pdf'; //this will use the pdf.ctp layout
                $this->render();

}


    
 }
