<!DOCTYPE html>
<?php 
include_once('conexao.php')
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="row">
	<div class="col-sm-4 jumbotron offset-4">
<form method="post" enctype="multipart/form-data">
	<h2>Cadastrar filme</h2>
	<hr>
	<div class="form-group">
		<label for="nome"><strong>Nome</strong></label>
		<input type="text" name="nome" class="form-control" id="nome"></input>
	</div>
	<div class="form-group">
		<label for="sinopse">Sinopse</label>
		<textarea class="form-control" name="sinopse" id="sinopse" style="resize: none;"></textarea>
	</div>
	<div class="form-group">
		<label for="img" class="btn btn-info form-control">Imagem</label>
		<input type="file" name="img" id="img">
	</div>
		<div class="form-group">
		<label for="valor">Valor</label>
		<input type="text" name="valor" id="valor" class="form-control">		
	</div>
		<div class="form-group">
		<label for="qtd">Quantidade</label>
		<input type="number" name="qtd" id="qtd" class="form-control">		
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success col-4 offset-4">Confirmar</button>
	</div>
</form>
</div>	
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php 
if ($_POST) {
	$destino = 'imagens/'.$_FILES['img']['name'];
	$nome = $_POST['nome'];
	$sinopse = $_POST['sinopse'];
	$capa = $destino;
	$valor = $_POST['valor'];
	$qtd = $_POST['qtd'];

if (move_uploaded_file($_FILES['img']['tmp_name'], $destino)) {
	Cadastrar($nome, $sinopse, $capa, $valor, $qtd);
}

}

 ?>