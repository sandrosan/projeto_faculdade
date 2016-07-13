<?php

include_once '../control/ProfessorControl.php';
$professorControl = new ProfessorControl();

//print_r($professorControl->listarTodos());


 
 foreach ($professorControl->listarTodos() as $professor) {
     echo $professor->id . '/';
     echo $professor->nome . '/';
 }
 
 ?>