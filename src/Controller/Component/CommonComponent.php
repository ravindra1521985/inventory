<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Cache\Cache;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;

class CommonComponent extends Component
{
       public $components = [];

    public function deleteCache($cache_name)
    {
        Cache::delete(md5($cache_name));
    }
    

    /*
    public function setDefaultAttributeCreate($login_user_id)
    { 
        return array(
            'status_id'  => STATUS_ACTIVE,
            'created_on' => date('Y-m-d H:i:s'),
            'created_by' => $login_user_id
        );
    }
     * 
     

    public function setDefaultAttributeUpdate($login_user_id)
    { 
        return array(
            'updated_on' => date('Y-m-d H:i:s'),
            'updated_by' => $login_user_id
        );
    }
     * 
     

    public function getStatus()
    {
        return array(STATUS_ACTIVE,STATUS_DEACTIVE);
    }
    
    public function getStatusList()
    {
        return array(STATUS_ACTIVE=>STATUS_ACTIVE_TEXT,STATUS_DEACTIVE=>STATUS_DEACTIVE_TEXT);
    }
*/


    /*  add item log */
    
  public function itemlog($item_id=null,$itemname=null,$itemcode=null, $itemprice=null,$itemquantity=null, $createdby=null,$type=null){

                    $itemlogTable           = TableRegistry::get('items_log');
                    $item                   =   $itemlogTable->newEntity();
	  				$item->item_id          =  $item_id;
                    $item->name             =  $itemname;
                    $item->item_code        =   $itemcode;
                    $item->item_price       =   $itemprice;
                    $item->item_quantity    =   $itemquantity;
                    $item->created_by       =  $createdby ;
                    $item->created_date     =   date('Y-m-d H:i:s');
                    $item->type             =   $type;                         
                
            if ($itemlogTable->save($item)) {

            }



}
	

	
 public function getItemList()
    {
       
        $item = TableRegistry::get('Items');
        $query = $item->find()
            ->select(['id', 'name','item_code'])->toArray();
            $itemList = array();
            foreach ($query as $row) {
               $itemList[$row->id] = $row->name.'('.$row->item_code.')';
            }
       return $itemList;
    }

   
	
	
	

   public function sendreplyEmail($to=null,$message=null,$cc=null,$subject=null)
   {
	    $email = new Email('default');
		$email->from(['singh85.ravindra@gmail.com' => 'singh85.ravindra@gmail.com'])
        ->to($to)
        ->cc($cc)
        ->subject($subject)
       // ->template('fail', 'default')
      //  ->emailFormat('html')
        ->send($message);
	   
   }
   
    public function sendEmail($to=null,$message=null,$subject=null)
   {
	    $email = new Email('default');
		$email->from(['singh85.ravindra@gmail.com' => 'Inventory'])
        ->to($to)
        ->subject($subject)
       // ->template('fail', 'default')
       ->emailFormat('html')
        ->send($message);
	   
   }
    
     public function sendEmail2($to=null,$message=null,$subject=null)
        {
            $email = new Email('default');
          $email->from(['singh85@gmail.com'=>'Inventory'])
            ->to($to)
            ->subject($subject)
            ->template('fail', 'default')
           ->emailFormat('html')
            ->send($message);


     /*   $email = new Email('production');
        $email->template('all_mails','production')               
            ->emailFormat('html')
            ->to('singh85.ravindra@gmail.com')
            ->from(['singh85.ravindra@gmail.com'=>'inventory'])
            ->subject($subject)
           // ->viewVars(['user_type'=>'aa','title'=>'aaa'])
          //  ->send();
       prd($email);*/






       
            }  

  
	
    public function uploadimg($file,$path){
		
					ini_set('upload_max_filesize', '100M');	
					$file = $file; //put the  data into a var for easy use
					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
					//echo $ext1 = substr(strtolower(strrchr($file['name'], '.')), 0);
					
					//get the extension
					$arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
					if(in_array($ext, $arr_ext))
					{
					//;	
						
				$path='img/'.$path;
				unlink(WWW_ROOT.$path.'/'.$file['name']);
				
					$filename=rand().'_'.$file['name'];
		if(move_uploaded_file($file['tmp_name'], WWW_ROOT . $path . DS . 	$filename))
            {
                //prepare the filename for database entry
                $photo = $filename;
				unset($file);
				
				
               //print_r($this->request->data);
			}
		}
		
		return $photo;
	}
	
	 public function uploadpdffile($file,$path){
		
					//ini_set("memory_limit","2048M");    # 2 GB
					//set_time_limit(0);
						
			ini_set ( 'max_execution_time', 12000); 
			ini_set('post_max_size', '100M');
			ini_set('upload_max_filesize', '100M');
     ini_get('upload_max_filesize'); // 100M
	//die;
						
						
					$file = $file; //put the  data into a var for easy use

                    $filename=str_replace(" ","_",$file['name']);
					$ext = substr(strtolower(strrchr($filename, '.')), 1); 
					//echo $ext1 = substr(strtolower(strrchr($file['name'], '.')), 0);
					
					//get the extension
					$arr_ext = array('pdf','csv'); //set allowed extensions
					if(in_array($ext, $arr_ext))
					{
				$path='img/'.$path;
					$filename=time().'_'.$file['name'];
		if(move_uploaded_file($file['tmp_name'], WWW_ROOT . $path . DS . 	$filename))
            {
                //prepare the filename for database entry
                $photo = $filename;
				unset($file);
				
				
               //print_r($this->request->data);
			}
		}
		
		return $photo;
	}
	
	 public function getfield($table,$conditio1,$condition2,$field)
    {
        $datay = TableRegistry::get($table);
        $queryy = $datay->find()        
         ->where([$conditio1 => $condition2]);      
     foreach ($queryy as $roww)
                   {
                    $typelist = $roww->$field;
                   }
               return $typelist;
 
    }
	
	public function userlog($user_type=null,$user_id=null)
    {
        /*save into user log table*/
                     /* user type should be admin , customer, business*/
                     
                     $businessAccountTable1                       = TableRegistry::get('users_log');
                     $businessAccount1                            = $businessAccountTable1->newEntity();
                     $businessAccount1->login_user_id                   =$user_id;
                     $businessAccount1->login_date                =date('Y-m-d H:i:s');
                     $businessAccount1->user_type                 =$user_type;
                   
                     $businessAccountTable1->save($businessAccount1);
        /*end save into user log table*/
    }
  
   
  public function statusupdate($table=null,$id=null,$status=null){
	  
	  
	  $statuseTable = TableRegistry::get($table);
	  $statusmodul = $statuseTable->newEntity();												
				$statusmodul->id =$id;				
				$statusmodul->status =0	;		
			
				 if ($statuseTable->save($statusmodul)) {
	  
	  
	  
					}
  }
  
  function delete_record($id=null,$table=null){
   $moduleassocTable1    =  TableRegistry::get($table);
                   $query = $moduleassocTable1->query();
                        $query->delete()
                        ->where(['id' => $id])
                        ->execute();
  }

    public function deletealltable($tablename=null){

             $itemtempTable             =            TableRegistry::get($tablename);

             $itemtempTable->deleteall();

     }


  public function getitembyitemcode($itemcode=null){

     $item = TableRegistry::get('Items');
        $itemrecord = $item->find()
            ->where(['item_code'=>$itemcode])           
            ->first();

            //prd($itemrecord);

             return $itemrecord;
         
  } 

public function getcustomerbyemail($email=null){

     $customer = TableRegistry::get('Customer');
        $customer_record = $customer->find()
            ->where(['email'=>$email])           
            ->first();

            //prd($itemrecord);

             return $customer_record;
         
  } 



  public function customerlog($customer1=null,$type=null){
         
            $CustomerLog = TableRegistry::get('CustomerLog');
             
                $customer_id=$customer1['id'];
                $customer1['customer_id']=$customer_id;
                 $customer1['type']=$type;
                $customer1['id']='';

            $customer = $CustomerLog->newEntity();     
            $customer2 = $CustomerLog->patchEntity($customer,$customer1);
            if($CustomerLog->save($customer2)) {
            }



  }

 

public function export_excel($fileName, $data11,$type) {
    ob_end_clean();

 //ini_set('max_execution_time', 1600);  
 if($type=='ITEM'){ 

    $header = array('Sr.','Name', 'code','Price.','Quantity') ;
}

if($type=='Customer'){ 

    $header = array('Sr.','Name', 'Phone','Email.','Dr.Amount','Cr.Amount') ;
}
 
$fp = fopen('php://output', 'w');
    
header("Cache-Control: public"); 
header("Content-Type: application/octet-stream");
header('Content-Encoding: UTF-8');
header("Content-Type: text/csv; charset=utf-8");
header('Content-Disposition: attachment; filename='.$fileName);
fputcsv($fp, $header);
     
    // prd($data11);
     foreach($data11 as $value)
     {
        // prd($value);
        fputcsv($fp, $value);
     }
     
    echo file_get_contents('php://output');
     exit;
   // }

 
 
 /*$fileContent = "Sr.\t Name\t Email\t Mobile No.\t Membership Plan\t Amount Due "."\n"; 
 $i = 1;
  foreach($data11 as $result) {  
    $fileContent .=  $i++."\t ".$result."\t "."\n";
  }
 header('Content-type: application/ms-excel'); /// you can set csv format
 header('Content-Disposition: attachment; filename='.$fileName);*/
 //}
 /*if($type=='client'){
     
    //$this->autoRender = false;
    // error_reporting(0);   
//$filename = "toy_csv.csv";
$fp = fopen('php://output', 'w');

$header = array('Sr.','Name', 'Email','Mobile No.','Member Plan','Payment Status') ;
    
//header('Content-type: application/csv;charset=UTF-8');
//header('Content-Disposition: attachment; filename='.$fileName);

header("Cache-Control: public"); 
header("Content-Type: application/octet-stream");
header('Content-Encoding: UTF-8');
header("Content-Type: text/csv; charset=utf-8");
header('Content-Disposition: attachment; filename='.$fileName);


fputcsv($fp, $header);
     
    // prd($data11);
     foreach($data11 as $value)
     {
        // prd($value);
        fputcsv($fp, $value);
     }
     
//  echo file_get_contents('php://output');

    //echo "\xEF\xBB\xBF"; // UTF-8 BOM
echo file_get_contents('php://output');

    
    exit;
    }
    */
   


}

 public function getcustomerlist()
    {
       
        $customer = TableRegistry::get('customer');
        $query = $customer->find()
            ->select(['id', 'name','email'])
            ->where(['status'=>1])
            ->toArray();
            $custlist = array();
            foreach ($query as $row) {
               $custlist[$row->id] = $row->name.'('.$row->email.')';
            }
       return $custlist;
    }


public function getcustomerbyid($id=null){

     $customer = TableRegistry::get('Customer');
        $customer_record = $customer->find()
            ->where(['id'=>$id])           
            ->first();

           return $customer_record;
         
  } 

  public function getitemrecord()
    {
       
        $item = TableRegistry::get('Items');
        $query = $item->find()
            ->where(['status'=>1])
            ->order(['name'=>'ASC'])
            ->toArray();
            
       return $query;
    }

public function updatecustomer($data=null){

          //  print_r($data);

            $CustomerTable = TableRegistry::get('Customer');  
            $customer = $CustomerTable->newEntity();     
            $customer2 = $CustomerTable->patchEntity($customer, $data);
            if($CustomerTable->save($customer2)) {
              $id= $customer2->id;

            }


            return $id;


          /*  $customer = $this->Customer->newEntity();     
            $customer1 = $this->Customer->patchEntity($customer, $this->request->data);
            if($this->Customer->save($customer1)) {
            }*/

}

public function updateitem($data=null){

            $itemTable = TableRegistry::get('Items');  
            $item = $itemTable->newEntity();     
            $item1 = $itemTable->patchEntity($item, $data);
            if($itemTable->save($item1)) {
              $id = $item1->id;

            }

            return $id;

}





}