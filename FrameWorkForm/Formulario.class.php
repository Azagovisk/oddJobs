
<?php
require_once "Select.class.php";
class Formulario{
	private $campos;
        private $action;
        private $method;
        
        function __construct($action, $method) {
            $this->action = $action;
            $this->method = $method;
        }
	function addCampo($c){
		$this->campos[] = $c;
	}
        
	function getHTML(){
		$html = "<form action='{$this->action}' method='{$this->method}'>";
		foreach($this->campos as $c){
			$html .= $c->getHTML();
		}
		$html .= "<input type='submit' value='salvar'/></form>";
		return $html;
	}
}
?>