<?php
include_once '../db/Conexao.php';


class Professor {
    private $id;
    private $numero_contribuinte;
    private $nome;
    private $nascimento;
    private $carga_horaria;
    private $especialidade_id;
    
    function getId() {
        return $this->id;
    }

    function getNumero_contribuinte() {
        return $this->numero_contribuinte;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getCarga_horaria() {
        return $this->carga_horaria;
    }

    function getEspecialidade_id() {
        return $this->especialidade_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero_contribuinte($numero_contribuinte) {
        $this->numero_contribuinte = $numero_contribuinte;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setCarga_horaria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }

    function setEspecialidade_id($especialidade_id) {
        $this->especialidade_id = $especialidade_id;
    }

 public function listarTodosProfessores() {
      $sql = 'SELECT * FROM professores' ;
      $query = Conexao::prepare($sql);
      $query->execute();
      return $query->fetchAll();
    }
     public function salvar(){
        
      $sql = "INSERT INTO professores 
          (numero_contribuinte,nome , nascimento, carga_horaria, especialidade_id)"
          . " values(:numero_contribuinte, :nome , :nascimento, :carga_horaria, :especialidade_id)" ; 
       
       $query = Conexao::prepare($sql);
       $query->bindValue(":numero_contribuinte", $this->getNumero_contribuinte());
       $query->bindValue(":nome", $this->getNome());
       $query->bindValue(":nascimento", $this->getNascimento());
       $query->bindValue(":carga_horaria", $this->getCarga_horaria());
       $query->bindValue(":especialidade_id", $this->getEspecialidade_id());   
       $query->execute();
   
    }
    
    
}
