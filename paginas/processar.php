<?php

$nome = $_POST["email"];
$email = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$id = $_GET["editar"];
	$sql = "UPDATE dados_user SET email='$email', nome='$nome', usuario= '$usuario', senha='$senha' WHERE id = $id";
}
else{
	$sql = "INSERT INTO dados_user (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')";
}

$query = mysqli_query($link, $sql);

if ($query === TRUE) {

	echo '<div class="alert alert-success" role="alert">Cadastro Realizado!</div>';	

}else{
	echo '<div class="alert alert-danger" role="alert">Opa! Você esqueceu de alguma coisa. Formulário incompleto.</div>';
}

?>