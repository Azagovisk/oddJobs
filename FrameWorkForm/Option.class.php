
<?php
class Option{
	private $value;
	private $text;
	private $selected;
	function __construct($value, $text){
		$this->value = $value;
		$this->text = $text;
	}
	function setSelected($s){$this->selected = $s;}
	function setValue($v){$this->value = $v;}
	function getValue(){return $this->value;}
	function setText($t){$this->text = $t;}
	function getText(){return $this->text;}
	function getHTML(){
		$html = '';
		if($this->selected)
			$html = 'selected';
		return "<option {$html} value='{$this->value}'>{$this->text}</option>";
	}
}


?>