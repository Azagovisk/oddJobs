

<?php

include_once 'Input.class.php';
class Radio extends Input{
   
    private $options;
    protected $check;

    function __construct($n, $label, $id){
       parent::__construct($n, $label, $id);
       $this->setType('radio');
       
       
    }
    function addOption($value, $text, $check = ""){
        $this->options[] = array($value, $text, $check);
    }
    function getHTML(){
        parent::getHTML();
        $html ="";
        foreach($this->options as $o){
            $html .= "<br><input type='radio' name='{$this->getName()}' value='{$o[0]}' {$o[2]}/> {$o[1]}";
        }
        return $html;
   }
}