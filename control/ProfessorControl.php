<?php
include_once '../model/Professor.php';


 
class ProfessorControl {
    public function inserir() {
        
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