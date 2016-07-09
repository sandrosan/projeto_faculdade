<?php

include_once '../model/Especialidades.php';

class Especialidade_Control {
    
    
    public function inserir() {
        
    }
    
    public function listarTodos() {
     $especialidade = new Especialidades();
      return $especialidade->listarTodasEspecialidades();
     
    }
    
    public function buscar(){
           
}


public function editar(){
    
    
}

public function deletar() {
    
}


}   

    

