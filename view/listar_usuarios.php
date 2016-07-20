<?php
include_once '../style/template.php';
include_once '../control/UsuarioControl.php';
$usuarioControl = new UsuarioControl();

//print_r($usuarioControl->listarTodos());

?>
<div class="col-sm-10 col-sm-offset-1">
       <h1>Usuarios</h1>
       <a href="" class ="pull-right btn btn-primary btn-xs">cadastrar especialidade</a>

<table class ="table table-striped">
    <tr>
        <th>id </th> 
        <th>nome</th>
        <th></th>
    </tr>
    
<?php
foreach ($usuarioControl->listarTodos() as $usuario) {
    ?>

    <tr>
    
    <td><?php echo $usuario->id;?></td
    <td><?php echo $usuario->nome;?></td>
    <td>
            <div class="pull-right">
                
                <a href= "">editar</a>
                |
                <a href="">deletar</a>
            </div>
    </td>
</tr>

<?php } ?>

</table>
</div>

<?php include_once '../style/footer.php';?>

    

