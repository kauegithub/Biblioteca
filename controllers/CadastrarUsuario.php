<?php
include './ConnectDB.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$data_nasc = $_POST['data_nasc'];
$pais = $_POST['pais'];




if (strlen($data_nasc) == 10){
	$q = "INSERT INTO usuarios VALUES (0, '$nome', '$login', '$senha', '$data_nasc', '$pais')";
	$result = $phpconnect->query($q);
	$cadastro_concluido=false;
	}else{
	$cadastro_concluido = true;
	}


	
	session_start();
	$_SESSION['cadastro'] = $cadastro_concluido;


	header('Location: '.' ../cadastro.php')


?>