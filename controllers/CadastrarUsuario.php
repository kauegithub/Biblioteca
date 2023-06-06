<?php
include './ConnectDB.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$data_nasc = $_POST['data_nasc'];
$pais = $_POST['pais'];

$cadastro_realizado=false;

if (strlen($data_nasc)==10){
	$q = "INSERT INTO usuarios VALUES (0, '$nome', '$login', '$senha', 'data_nasc', '$pais')";
	$result = $phpconnect->query($q);
	if ($result==false){
		$cadastro_realizado = false;
	}
	else{
	$cadastro_realizado = true;
	}
}

	session_start();
	$_SESSION['cadastro_realizado'] = $cadastro_realizado;



?>