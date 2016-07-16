<?php
include_once '../control/Especialidade_Control.php';
$especialidadeControl = new Especialidade_Control();

//print_r($especialidadeControl->listarTodos());
?>
<table>
    <tr>
    <th>id </th> 
    <th>nome</th>
    
    </tr>
    


<?php
foreach ($especialidadeControl->listarTodos() as $especialidade) {
    ?>

    <tr>
    
    <td><?php echo $especialidade->id;?></td
    <td><?php echo $especialidade->nome;?></td>
</tr>

<?php } ?>

</table>
