

<?php


include_once 'Campo.class.php';
class Textarea extends Campo{

   private $name;
   private $id;
    private $rows;
    private $cols;

    function __construct($n,$label, $id, $cols, $rows) {
        $this->name = $n;
        $this->label = $label;
        $this->id = $id;
        $this->cols = $cols;
        $this->rows = $rows;
    }
    function getHTML(){
    
	$html = "<br/><label for='{$this->name}'>{$this->label}</label><textarea name='{$this->name}' id= '{$this->id}' rows='{$this->rows}' cols='{$this->cols}'></textarea><br/>";
		return $html;
	}
}

