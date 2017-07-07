<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
      $espControl = new EspecialidadeControl();

    if(isset($_POST['salvar'])){
        $espControl->inserir();
        ?> 

<div class="alert alert-success" role="alert"> 
    <?php echo $_POST['nome']?> 
    salvo com sucesso
</div>

    <?php } ?>

<div class="col-sm-5 col-sm-offset-3 jumbotron" >
  <h2>Nova Especialidade </h2>
<form method="POST">
<label>nome da especialidade</label>
    <input class ="form-control" name="nome" required="" />
    <br/>
    <input name="salvar" type="submit" value="salvar" class="btn btn-info btn-sm">

</form>   
</div>

<?php include_once '../style/footer.php';?>