

<?php

include_once'Input.class.php';
class Checkbox extends Input{
protected $check;

    function __construct($n, $label,$id,$check = ""){
       parent::__construct($n, $label,$id);
       $this->setType('checkbox');
       $this->check = $check;
   }
    
    
}
