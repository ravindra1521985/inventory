<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class InvoiceDetailTable extends Table
{
    public function initialize(array $config)
    { 
      	  
    
	  
	  
    }
    
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select([])
           ->where(['status' =>1]);

        return $query;
    }

      
}?>