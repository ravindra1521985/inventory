<?php
namespace App\Controller\Admin;
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;


class ItemsController extends AppController
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
        $this->viewBuilder()->layout('admin');
        
    }
   
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
    }
    
    
    public function index($request_type=null,$page=null)
    {
       
	  
	
		
    }

    /* List of item*/
    public function list()
    {       
      
        $this->loadModel('Items');


         if($this->request->is('post'))
        {

            if(isset($this->request->data['search']) && !empty($this->request->data['search']))
                {
                   
                  $search = explode(",",$this->request->data['search']);

                    if(isset($search[0]) && !empty($search[0])){
                     $conditions['name LIKE ']='%'.$search[0].'%';
                    }
                     if(isset($search[1]) && !empty($search[1])){
                     $conditions['item_code LIKE ']='%'.$search[1].'%';
                    }
                     if(isset($search[2]) && !empty($search[2])){
                     $conditions['item_price LIKE ']='%'.$search[2].'%';
                    }
                    if(isset($search[3]) && !empty($search[3])){
                     $conditions['item_quantity LIKE ']='%'.$search[3].'%';
                    }
                     


                }


        }





//print_r($conditions);



      
    $this->paginate = array(
           'limit' => 10,
            'conditions' => array('status'=>1, $conditions),
          //  'contain' => ['Stock','ItemPrice'],
         'order'=>array('created_date'=>'desc'),
           //->Order(['name'=>'Asc'])
       );
                
    $result = $this->paginate('Items');
    //prd($result);
    $this->set('item',$result);
   
        
    }

    /* add item */
    public function additem(){

         if ($this->request->is('post')) { 

                    $this->loadModel('Items');
                        $itemrecord = $this->Items->find()
                        ->where(['Items.item_code'=>$this->request->data['item_code']])
                        ->first();

                        if(count($itemrecord)>0){

                        $this->Flash->error(__("Item already exists")); 
                        return $this->redirect(['action' => 'list']);
                        }

             
                    $itemTable                      =            TableRegistry::get('Items');
                    $item                           =            $itemTable->newEntity();
                    $item->name                     =            $this->request->data['name'];
                    $item->item_code                =            $this->request->data['item_code'];
                    $item->item_price               =            $this->request->data['item_price'];
                    $item->status                   =            1; 
                    $item->item_quantity            =            $this->request->data['item_qty'];
                    $item->created_by               =            $this->request->session()->read('Auth.User.id') ;
                    $item->created_date             =            date('Y-m-d H:i:s');               

                    if ($itemTable->save($item)){
					
						/*itemlog USE FOR ITEM LOG*/
		              $this->Common->itemlog($item->id,$item->name,$item->item_code,$item->item_price,$item->item_quantity,$this->request->session()->read('Auth.User.id'),'manual');

                  
                        $this->Flash->success(__("Record Added")); 
                        return $this->redirect(['action' => 'list']);
                   
                     }

                    }
                }

        public function edititem($id=null){

                //echo $id;
            if(!empty($id)){
          $id=base64_decode($id);         
                        
            
            $this->loadModel('Items');
            // $this->loadModel('ItemPrice');
           $itemrecord = $this->Items->get($id);			
              $this->set('itemrecord', $itemrecord);
            }
        //  print_r($levelrecord);
            
           if ($this->request->is('post')) {

                    $this->loadModel('Items');
                        $itemrecord = $this->Items->find()
                        ->where(['Items.item_code'=>$this->request->data['item_code'],'Items.id !='=>$this->request->data['id']])
                        ->first();

                        if(count($itemrecord)>0){

                        $this->Flash->error(__("Item already exists")); 
                        return $this->redirect(['action' => 'list']);
                        }



                     
                    $itemTable          = TableRegistry::get('Items');
                    $item               =   $itemTable->newEntity();
                    $item->id           =   $this->request->data['id'];
                    $item->name         =   $this->request->data['name'];
                    $item->item_code    =   $this->request->data['item_code'];
                    $item->item_price   =   $this->request->data['item_price'];
                    $item->status       =    1; 
                    $item->item_quantity=    $this->request->data['item_qty'];
                    $item->modify_by    =   $this->request->session()->read('Auth.User.id') ;
                    $item->modify_date  =   date('Y-m-d H:i:s');                    
                
            		if ($itemTable->save($item)) {
									
						  $this->Common->itemlog($item->id,$item->name,$item->item_code,$item->item_price,$item->item_quantity,$this->request->session()->read('Auth.User.id'),'manual');
				
                           $this->Flash->success(__("Record Update")); 
                            return $this->redirect(['action' => 'list']);
                     
                }
            }
        }

   /* upload csv file to  item list*/     

   public function uploaditemcsv(){



     if($this->request->is('post')) {


                $itemtempTable             =            TableRegistry::get('items_temp');

                  // $itemtempTable->deleteall();
               
                    $this->Common->deletealltable('items_temp');

                   $book='';
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

                     $itemtempTable                = TableRegistry::get('items_temp');
                     $itemtemp               =   $itemtempTable->newEntity();

                    $itemtemp->name          =   $col4;
                    $itemtemp->item_code     =   $col2.$col3;
                    $itemtemp->item_price    =    $col5;
                    $item->status        =    1; 
                    $itemtemp->item_quantity =     $col6;
                    $itemtemp->created_by    =   $this->request->session()->read('Auth.User.id') ;
                    $itemtemp->created_date  =   date('Y-m-d H:i:s');                    
                
            if ($itemtempTable->save($itemtemp)) {

                }
  
                }
            }
            fclose($handle);
            }


                        $itemtempTable1    =    TableRegistry::get('items_temp');
                        $itemrecord1 = $itemtempTable1->find()                       
                        ->All();


                        if(count($itemrecord1)>0){
                        foreach($itemrecord1 as $key=>$value){

                         

                    $itemTable          = TableRegistry::get('Items');
                    $item               =   $itemTable->newEntity();

                         /* check item code allready exsits */
                    $itemrecord = $this->Common->getitembyitemcode($value->item_code);

                     if(count($itemrecord)>0) {
                  

                    $item->id            =   $itemrecord['id'];
                    $item->name          =   $value->name;
                    $item->item_code     =   $value->item_code;
                    $item->item_price    =   $value->item_price;
                    $item->status        =    1; 
                    $item->item_quantity =     $value->item_quantity;
                    $item->modify_by     =   $this->request->session()->read('Auth.User.id') ;
                    $item->modify_date   =   date('Y-m-d H:i:s');   
                     } else{ 

                    $item->name          =   $value->name;
                    $item->item_code     =   $value->item_code;
                    $item->item_price    =   $value->item_price;
                    $item->status        =    1; 
                    $item->item_quantity =    $value->item_quantity;
                    $item->created_by    =   $this->request->session()->read('Auth.User.id') ;
                    $item->created_date  =   date('Y-m-d H:i:s'); 
                    }                  
                
                    if ($itemTable->save($item)) {
                                    
                          $this->Common->itemlog($item->id,$item->name,$item->item_code,$item->item_price,$item->item_quantity,$this->request->session()->read('Auth.User.id'),'excel');
                      }


                        }
                    }


 $this->Common->deletealltable('items_temp');
              $this->Flash->success(__("Record Added")); 
              return $this->redirect(['action' => 'list']);

}

   }           



 public function uploaditempricecsv(){

     if($this->request->is('post')) {

            

                $book='';
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

                     $itemTable                = TableRegistry::get('items_temp');
                     $item               =   $itemTable->newEntity();

                    $item->name          =   $col4;
                    $item->item_code     =   $col2.$col3;
                    $item->status        =   1;
                    $item->created_by    =   $this->request->session()->read('Auth.User.id') ;
                    $item->created_date  =   date('Y-m-d H:i:s');                    
                
            if ($itemTable->save($item)) {

                $this->Common->itemlog($col4,$col3,$this->request->session()->read('Auth.User.id'),'excel');

            }
               
  
// SQL Query to insert data into DataBase
//$query = "INSERT INTO csvtbl(ID,name,city) VALUES('".$col1."','".$col2."','".$col3."')";
//$s     = mysql_query($query, $connect );
 }
    fclose($handle);
}

                $this->Flash->success(__("Record Added")); 
                return $this->redirect(['action' => 'list']);

}

   } 

   public function delete($id=null){
            if(!empty($id)){
                  $id=base64_decode($id);
              }
    $this->Common->statusupdate('items',$id,'1');
     $this->Flash->success(__("Record Deleted")); 
                return $this->redirect(['action' => 'list']);
}


public function downloadexcel(){

    $filename="list_of_item.csv";
        $this->loadModel('Items');
        $data1=$this->Items->find()
            ->where(['status'=>'1'])      
            ->Order(['name'=>'ASC'])
        ->toArray();

           foreach($data1 as $key=>$value)

        $data11[$key]=[++$key,$value->name,$value->item_code,$value->item_price,$value->item_quantity];

        $this->Common->export_excel($fileName, $data11,'ITEM');
    
} 

 

    
 }
