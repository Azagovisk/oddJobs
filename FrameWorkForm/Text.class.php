

<?php

include_once 'Input.class.php';

class Text extends Input{
	protected $check;
	
   function __construct($n, $label, $id){
       parent::__construct($n, $label,$id);
       $this->setType('text');
   }
}

