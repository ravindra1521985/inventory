<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class InvoiceTable extends Table
{
    public function initialize(array $config)
    { 
      	  
        $this->hasMany('InvoiceDetail', [
        'foreignKey' => 'invoice_id',        
        'dependent' => true,
  ]);
	  
	  
    }
    
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select([])
           ->where(['status' =>1]);

        return $query;
    }

      
}?>