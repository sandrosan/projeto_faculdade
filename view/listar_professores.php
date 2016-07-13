<?php

include_once '../control/ProfessorControl.php';
$professorControl = new ProfessorControl();

//print_r($professorControl->listarTodos());


 
// foreach ($professorControl->listarTodos() as $professor) {
    // echo $professor->id . '/';
    // echo $professor->nome . '/';
// }


?>
<table>
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