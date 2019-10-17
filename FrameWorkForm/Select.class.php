
<?php
require_once "Option.class.php";
class Select{
	private $options;
	private $value;
	private $name;
	function __construct($v, $n){$this->value=$v; $this->name=$n;}
	function addOption($v, $t){
		$this->options[] = new Option($v, $t);
	}
	function getHTML(){
	$html = "<label for='{$this->name}'>{$this->name}</label><select name='{$this->name}'>";
		foreach($this->options as $o){
			if($o->getValue() == $this->value)
				$o->setSelected(true);
			$html .= $o->getHTML();
		}
		$html .= "</select><br/>";
		return $html;
	}
}
?>