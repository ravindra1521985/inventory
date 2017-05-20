<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    { 
       
    }
    
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('first_name', 'First name is required')
            ->notEmpty('last_name', 'Last name is required')    
            ->notEmpty('username', 'User ID is required')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table','last' => true,'message' => 'User ID already exist'])    
            ->notEmpty('password1', 'Password is required')    
            ->notEmpty('password2', 'Confirm password is required')
            ->add('password1', [
                'length' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Password need to be at least 5 characters long',
                ]
            ])    
            ->add('password2',
                'compareWith', [
                    'rule' => ['compareWith', 'password1'],
                    'message' => 'Passwords not equal.'
                ]
            )  
            ->notEmpty('email','Email is required')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'E-mail must be valid'
            ])    
            ->notEmpty('contact_number','Contact number is required')
            ->add('contact_number', [
                'length' => [
                    'rule' => ['minLength', 10],
                    'message' => 'Contact number need to be at least 10 digit long',
                ]
            ])    
            ->add('contact_number', [
                    'numeric'=>[
                        'rule'=>['numeric'],
                        'message'=>'Please enter only numeric'
                    ]
            ])    
            ->notEmpty('lab_id', 'Lab is required')
            ->notEmpty('pcc_id', 'PCC is required') 
            ->notEmpty('group_id', 'Group is required')    
            ;
    }
    
    public function validationUpdate(Validator $validator)
    {
        return $validator
            ->notEmpty('first_name', 'First name is required')
            ->notEmpty('last_name', 'Last name is required')    
            ->notEmpty('username', 'User ID is required')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table','message' => 'User ID already exist'])    
            ->allowEmpty('password1', 'Password is required')    
            ->allowEmpty('password2', 'Confirm password is required')
            ->add('password1', [
                'length' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Password need to be at least 5 characters long',
                ]
            ])    
            ->add('password2',
                'compareWith', [
                    'rule' => ['compareWith', 'password1'],
                    'message' => 'Passwords not equal.'
                ]
            )  
            ->notEmpty('email','Email is required')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'E-mail must be valid'
            ])    
            ->notEmpty('contact_number','Contact number is required')
            ->add('contact_number', [
                'length' => [
                    'rule' => ['minLength', 10],
                    'message' => 'Contact number need to be at least 10 digit long',
                ]
            ])    
            ->add('contact_number', [
                    'numeric'=>[
                        'rule'=>['numeric'],
                        'message'=>'Please enter only numeric'
                    ]
            ])    
            ->notEmpty('lab_id', 'Lab is required')
            ->notEmpty('pcc_id', 'PCC is required') 
            ->notEmpty('group_id', 'Group is required')    
            ;        
    }

}