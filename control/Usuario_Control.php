<?php
include_once '../model/Usuarios.php';

class Usuario_Control {
    
    
    public function inserir() {
        
    }
    
    public function listarTodos() {
     $usuario = new Usuarios();
     return $usuario->listarTodosUsuarios();
    }
    
    public function buscar(){
           
}


    public function editar(){
    
    
}

    public function deletar() {
    
}


}   

    

