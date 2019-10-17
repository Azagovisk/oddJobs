<meta charset="utf-8">
<?php
	require_once 'Nodo.class.php';
	class Lista{

		public $root;

		public function getProx($nodo){
			if(!isset($nodo->proximo)){
				return $nodo;
			}

			return $this->getProx($nodo->proximo);	

		}

		public function add($value){

			$nodo = new Nodo();
			$nodo->valor = $value;

			if(!isset($this->root)){
				$this->root = $nodo;
			}else{
				$proximo = $this->getProx($this->root);
				$proximo->proximo = $nodo;
			}

		}

		public function ler(){
			$this->lerNodo($this->root);
		}

		public function lerNodo($nodo){
			if(!isset($nodo)){
				echo "Fim da Lista";
				return;		
			}
			echo $nodo->valor . '<br/>';
			$this->lerNodo($nodo->proximo);
		}


		public function getProxRemove($nodo){

			return $nodo->proximo;

		}
		public function remove(){
			$x = $this->root->valor;
			// echo "<script type='text/javascript'>alert('Você removeu o item ".$this->root->valor."')</script>";
			// //$this->root = $this->getProxRemove($this->root);
			$this->root = $this->root->proximo;
			return $x;
}
		}


	//Index

	//DECODE
	$obj = new Lista();
	$obj->add("1");
	$obj->add("2");
	$obj->add("3");
	$obj->add("4");
	$obj->add("5");
	//$obj->ler();
	echo "<br/>";
	echo $obj->remove();
	//$obj->ler();
	echo "<br/>";
	echo $obj->remove();
	//$obj->ler();
	echo "<br/>";
	echo $obj->remove();
	//$obj->ler();
	echo "<br/>";
	$obj->add("6");
	//$obj->ler();
	echo "<br/>";

?>