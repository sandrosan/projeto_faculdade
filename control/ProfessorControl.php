<?php
include_once '../model/Professor.php';

class ProfessorControl {
    public function inserir() {
        
        $professor = new Professor();
        $nome = $_POST['nome'];
        $numero_contribuinte = $_POST['numero_contribuinte'];
        $nascimento = $_POST['nascimento'];
        $carga_horaria = $_POST['carga_horaria'];
        $especialidade_id = $_POST['especialidade_id'];
        
        $professor->setNome($nome);
        $professor->setNumero_contribuinte($numero_contribuinte);
        $professor->setNascimento($nascimento);
        $professor->setCarga_horaria($carga_horaria);
        $professor->setEspecialidade_id($especialidade_id);
        $professor->salvar();
        
        
        
        
        
    }
    
    public function listarTodos() {
        $professor = new Professor();
      return $professor->listarTodosProfessores();
        
    }
    
    public function buscar(){
           
    }


    public function editar(){
    
    
    }

    public function deletar() {
    
    }

}   
