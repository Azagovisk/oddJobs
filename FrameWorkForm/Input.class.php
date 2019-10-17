

<?php
include_once 'Campo.class.php';
abstract class Input extends Campo{
    private $name;
    private $type;
    private $id;
    
    function setType($type){
        $this->type=$type;
    }
    function getName(){
        return $this->name;
    }
    function __construct($n,$label, $id) {
        $this->name = $n;
        $this->label = $label;
        $this->id = $id;
    }
    function getHTML(){
    
	$html = "<label for='{$this->name}'>{$this->label}</label><input type='{$this->type}' name='{$this->name}' id='{$this->id}'placeholder='{$this->name}' {$this->check}/><br/>";
		return $html;
	}
    
}
