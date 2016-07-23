<?php
include_once '../model/Professor.php';


 
class ProfessorControl {
    public function inserir() {
        $nome = $_POST['nome'];
     
        $professor = new Professor();
        $professor->setNome($nome);
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
