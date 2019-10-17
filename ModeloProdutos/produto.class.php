<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author Mauri
 */
class Produto {
    private $id;
    private $nome;
    private $serie;
    private $conn;
    private $stmt;

    const HOST_NAME = "localhost";
    const DATABASE_NAME = "aluno_mydb";
    const DATABASE_USER_NAME = "aluno";
    const DATABASE_PASSWORD= "aluno";
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getNome() {
        return $this->nome;
    }

 public function getSerie() {
        return $this->serie;
    }


    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }


    
    public function __construct() {
        //Cria conexão com o banco
        
        try {
            $this->conn = new PDO("mysql:host=".self::HOST_NAME."; dbname=".self::DATABASE_NAME, self::DATABASE_USER_NAME, self::DATABASE_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch (PDOException $erro) {
            die ($erro->getMessage());            
        }
        
        
    }

    public function __destruct(){
        //Fecha a conexão
        if(!empty($this->conn)) $this->conn=null;        
    }

    public function salvar(){
        try{
            //Comando SQL para inserir um cliente
            $query="INSERT INTO Produto (nome,serie) VALUES (:nome,:serie) ";

            $this->stmt= $this->conn->prepare($query);

            $this->stmt->bindValue(':nome', $this->nome, PDO::PARAM_STR);
            $this->stmt->bindValue(':serie', $this->serie, PDO::PARAM_STR);

            if($this->stmt->execute()){
               return true;
            }        
        } catch(PDOException $e) {
            echo "<div class='erro'>".$e->getMessage()."</div>";      
            return false;
        }
    }
    
    public function atualizar(){
        try{
            
            //Comando SQL para inserir um produtos
            $query="UPDATE Produto SET nome = :nome, serie = :serie  WHERE id=:id ";
            $this->stmt= $this->conn->prepare($query);

            $this->stmt->bindValue(':nome', $this->nome, PDO::PARAM_STR);
            $this->stmt->bindValue(':serie', $this->serie, PDO::PARAM_STR);
            $this->stmt->bindValue(':id', $this->id, PDO::PARAM_INT);


            if($this->stmt->execute()){
                return true;
            }        
        } catch(PDOException $e) {
            echo "<div class='erro'>".$e->getMessage()."</div>";      
            return false;
        }
    }
    
    public function excluir(){
        try{
            //Comando SQL para inserir um cliente
            $query="DELETE FROM Produto WHERE id=:id ";
            $this->stmt= $this->conn->prepare($query);
            $this->stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            if($this->stmt->execute()){
               return true;
            }        
        } catch(PDOException $e) {
            echo "<div class='erro'>".$e->getMessage()."</div>";      
            return false;
        }
    }
    
    public function listar($nome=null){
        
        try{
            $produto = array();
            //Comando SQL para inserir um cliente
            if(!empty($this->id)){
                //Pesquisa pelo id
                $query="SELECT id,nome,serie FROM Produto WHERE id=:id";
            }elseif(!is_null($nome)){
                //Pesquisa pelo nome
                $query="SELECT id,nome,serie FROM Produto WHERE nome LIKE :nome";
            }else{
                // Pesquisa todos
                $query="SELECT id,nome,serie FROM Produto";
            }
            $this->stmt= $this->conn->prepare($query);
            if(!empty($this->id))$this->stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            if(!is_null($nome))$this->stmt->bindValue(':nome', '%'.$nome.'%', PDO::PARAM_STR);

            if($this->stmt->execute()){
                // Associa cada registro a uma classe Cliente
                // Depois, coloca os resultados em um array
                $produto = $this->stmt->fetchAll(PDO::FETCH_CLASS,"Produto");  
                
            }
            
            return $produto;            
        } catch(PDOException $e) {
            echo "<div class='erro'>".$e->getMessage()."</div>";   
            return null;
        }
        
    }
    
    
}
