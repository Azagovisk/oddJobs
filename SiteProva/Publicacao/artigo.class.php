

<?php

include_once 'publicacao.class.php';
class artigo extends publicacao{
    public $artigos=array();
    
    function getArtigos() {
    	for($i=0;$i < count($this->artigos); $i++){

    		echo $this->artigos[$i];
    		if($i<4){
    			echo", ";
    		}	
    	}
    	
        
    }

    function setArtigos($artigos) {
    	static $x =0;
    	if($x<=4){
    		$this->artigos[$x] = $artigos;
    		$x++;
    	}else{
    		return("Quantidade máxima de artigos excedida (5)");
    	}
        
    }


    
}

