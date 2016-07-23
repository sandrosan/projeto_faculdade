<?php

include_once '../control/ProfessorControl.php';
$professorControl = new ProfessorControl();

//print_r($professorControl->listarTodos());


 
// foreach ($professorControl->listarTodos() as $professor) {
    // echo $professor->id . '/';
    // echo $professor->nome . '/';
    
// }


?>
<div class="col-sm-10 col-sm-offset-1">
       <h1>Professores</h1>
       <a href="" class ="pull-right btn btn-primary btn-xs">cadastrar professores</a>
       
<table class ="table table-striped">
    <tr>
    <th>id </th> 
    <th>nome</th>
    
    </tr>
    


<?php
foreach ($professorControl->listarTodos() as $professor) {
    ?>
}
    <tr>
    
    <td><?php echo $professor->id;?></td
    <td><?php echo $professor->nome;?></td>
</tr>

<?php } ?>

</table>

 
 ?>