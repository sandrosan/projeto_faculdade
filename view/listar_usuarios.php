<?php

include_once '../control/UsuarioControl.php';
$usuarioControl = new UsuarioControl();

//print_r($usuarioControl->listarTodos());

?>

<table>
    <tr>
    <th>id </th> 
    <th>nome</th>
    
    </tr>
    


<?php
foreach ($usuarioControl->listarTodos() as $usuario) {
    ?>
}
    <tr>
    
    <td><?php echo $usuario->id;?></td
    <td><?php echo $usuario->nome;?></td>
</tr>

<?php } ?>

</table>

    

