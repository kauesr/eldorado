<?php

$actionEditar = "";
$id_user = 0;
$email = NULL;
$nome = NULL;
$telefone = NULL;

if (isset($_GET["editar"])) {
	$id_user = $_GET["editar"];
	$sql = "SELECT * FROM dados_user WHERE id_user = $id_user";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		$email = $row["email"];
		$nome = $row["nome"];
		$telefone = $row["telefone"];
	}
	else{
		echo "Falha ao carregar registro!";
	}
	$actionEditar = "&editar=$id_user";
}

?>

<h2>Receber Novidades</h2>

<div class="row">

	<div class="col-md-3">
	</div>
	
    <div class="col-md-6">

		<form action="?pg=processar<?= $actionEditar ?>" method="POST">

		<div class="form-group">
			<label for="exampleInputEmail1">E-mail</label>
			<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
			<small id="emailHelp" class="form-text text-muted"></small>
		</div>

		<div class="form-group">
			<label for="exampleInputName1">Nome</label>
			<input type="text" class="form-control" id="exampleInputName1" name="nome" placeholder="Digite seu nome completo">
		</div>

		<div class="form-group">
			<label for="exampleInputTelefone1">Telefone</label>
			<input type="text" class="form-control" id="exampleInputTelefone1" name="telefone" placeholder="Digite seu telefone">
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</div>
</div>