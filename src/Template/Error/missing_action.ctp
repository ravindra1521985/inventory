<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;
 $this->viewBuilder()->layout('');
 $this->layout = 'error';
 ?>

<h1 style="text-align: center;"><?php echo $this->Html->image('404.jpg', array('alt' => 'CakePHP',)); ?></h1>
 