<?php


class Usuarios {
   private $id;
   private $email;
   private $senha;
   private $nome;
   
   
   function getId() {
       return $this->id;
   }

   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function getNome() {
       return $this->nome;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }


   
   
   
}
