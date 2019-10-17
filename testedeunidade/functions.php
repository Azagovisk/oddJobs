<?php

class Pessoa{

public $nome;
public $NumeroRegistro;
public $email;

function __construct($nome, $NumeroRegistro, $email){

	$this->nome = $nome;
	$this->NumeroRegistro = $NumeroRegistro;
	$this->email = $email;


}

function add(){
	$x = new Connect;
	$conn = $x->getConn();
	$nome = $this->nome;
	$NumeroRegistro = $this->NumeroRegistro;
	$email = $this->email;

    //Verifica se o Nome é vazio
    if($nome == ""){
        return false;
    }

    //Verifica o tamanho do NumeroRegistro
    if(strlen($NumeroRegistro) < 6){
        return false;
    }
    //Varifica a soma do NumeroRegistro
    $arrayDeNumeros = array();
    $soma = 0;
    $teste = 0;
    $del = strlen($NumeroRegistro);
    for ($i=0; $i <$del ; $i++) {
        if($soma > 10){
            $soma =0;
            $soma = $NumeroRegistro[$i-1]+$soma;
        } 
        $arrayDeNumeros[] = $NumeroRegistro[$i];
        if($i+1 != $del)
            $soma = $NumeroRegistro[$i]+$soma;
        else
            $teste = $NumeroRegistro[$i];
    }
    $soma2 = (int) $soma;

    if($soma2 == 10 && $teste==0){
            $query = "INSERT INTO pessoa(nome,NumeroRegistro,email)";
            $query.="VALUES ('$nome', '$NumeroRegistro', '$email')";
            //EXECUTA o comando SQL
            $conn->query($query);
            //Verifica se houve algum registro afetado(se o INSERT funcionou)
            if($conn->affected_rows>0){
                return true;
            }else{
                return false;
            }
    }
    elseif($soma2 != $teste){
        return false;
    }
    else{
        $query = "INSERT INTO pessoa(nome,NumeroRegistro,email)";
            $query.="VALUES ('$nome', '$NumeroRegistro', '$email')";
            //EXECUTA o comando SQL
            $conn->query($query);
            //Verifica se houve algum registro afetado(se o INSERT funcionou)
            if($conn->affected_rows>0){
                return true;
            }else{
                return false;
            }

    }
    return false;
}

}


class DeletePessoa{

function delete($id){
	$x = new Connect;
	$conn = $x->getConn();
	$query = "DELETE FROM pessoa WHERE `pessoa`.`NumeroRegistro` =".$id;
    $conn->query($query);
    if($conn->affected_rows>0){
    	return false;          
    }else{
    	return true;
    }

  }
}

class EditPessoa{

function edit($nome, $id, $email){
	$x = new Connect;
	$conn = $x->getConn();
	$queryUpd = " UPDATE pessoa SET";
    $queryUpd.= " nome = '{$nome}', ";               
    $queryUpd.= " email = '{$email}' ";
    $queryUpd.= " WHERE `pessoa`.`NumeroRegistro` = {$id} ";
    $conn->query($queryUpd);
    if($conn->affected_rows>0){
    	return false;          
    }else{
    	return true;
    }
	}
}



class Connect{
	private $conn;
	function __construct(){
		$this->conn = new mysqli("localhost", "root", "", "cadastropessoas");
        if($this->conn->connect_errno){
            echo "<p>Atenção, erro de conexão: ". $this->conn->connect_error. "</p>";
        }
	}

	function getConn(){
		return $this->conn;
	}
}

class BuscadorDePessoas{

	function buscar(){
	$x = new Connect;
	$conn = $x->getConn();
	$querySe = " SELECT * FROM pessoa ";
            //BUSCA OS REGISTROS NO BANCO e salvando na variável Result
            if($result=$conn->query($querySe)){
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["nome"]. "</td>";
                    echo "<td>" . $row["NumeroRegistro"]. "</td>";
                    echo "<td><a href='processa.php?id=". $row["NumeroRegistro"]."/edit'>Editar</a> | <a href='processa.php?id=". $row["NumeroRegistro"]."/delete'>Deletar</a> | <a href='processa.php?id=". $row["NumeroRegistro"]."/view'>Visualizar</a>";
                }
            }
             //FECHA a conexão
 			$conn->close();
    }

    function buscarCompleto(){
    $x = new Connect;
	$conn = $x->getConn();
	$querySe = " SELECT * FROM pessoa ";
            //BUSCA OS REGISTROS NO BANCO e salvando na variável Result
            if($result=$conn->query($querySe)){
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["nome"]. "</td>";
                    echo "<td>" . $row["NumeroRegistro"]. "</td>";
                    echo "<td>" . $row["email"]. "</td>";
                }
            }
             //FECHA a conexão
 			$conn->close();
    }

    function buscaUm($id){
    $pessoaArray = [];
   	$x = new Connect;
	$conn = $x->getConn();
	$querySe = " SELECT * FROM pessoa WHERE `pessoa`.`NumeroRegistro` =".$id;
            if($result=$conn->query($querySe)){
                while ($row = $result->fetch_assoc()) {
                	$pessoaArray[0] = $row["nome"];
                	$pessoaArray[1] = $row["NumeroRegistro"];
                	$pessoaArray[2] = $row["email"];
                }
                return $pessoaArray;
            }
    }
}




?>