

<?php


	    class Emprestimo{
	    
	    	private $valor;
	    	private $id;
	    	private $data;


	    	function setValor($valor){
	    		$this->valor = $valor;
	    	}

	    	function setId($id){
	    		$this->id = $id;
	    	}

	    	function setData($data){
	    		$this->data = $data;
	    	}

	    	function getValor(){
	    		return $this->valor;
	    	}

	    	function getId(){
	    		return $this->id;
	    	}

	    	function getData(){
	    		return $this->data;
	    	}
	    	
	    }    

?>