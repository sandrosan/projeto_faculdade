<?php

include_once '../model/Especialidade.php';

class EspecialidadeControl {
    public function inserir() {
        $nome = $_POST['nome'];
     
        $especialidade = new Especialidade();
        $especialidade->setNome($nome);
        $especialidade->salvar();
        
    }
    
    public function listarTodos() {
     $especialidade = new Especialidade();
      return $especialidade->listarTodasEspecialidades();
     
    }
    
    public function buscar(){
           
    }


    public function editar(){
    
    
    }

    public function deletar() {
    
    }


}   

    

