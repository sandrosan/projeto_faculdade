<?php

include_once '../control/ProfessorControl.php';
$especialidadeControl = new EspecialidadeControl();

//print_r($especialidadeControl->listarTodos());


 
 foreach ($professorControl->listarTodos() as $professor) {
     echo $professor->id . '/';
     echo $professor->nome . '/';
 }
 
 ?>