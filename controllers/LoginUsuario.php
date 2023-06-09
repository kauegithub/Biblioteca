<?php

include './ConnectDB.php';

$login = $_POST['login'];
$senha =$_POST['senha'];




$q = "SELECT * FROM usuarios WHERE login = '$login' AND senha ='$senha'";
$result = $phpconnect -> query($q);


session_start();

if($result->num_rows >0){
		while($row = $result->fetch_assoc()){
			$nome_usuario = $row['nome'];
			$id_usuario = $row['id'];
			}

	$_SESSION['erro_login'] = false;
	$_SESSION['usuario_logado']= true;
	$_SESSION['nome_usuario'] = $nome_usuario;
	$_SESSION['id'] = $id_usuario;

	header("location: "." ../home.php");



	}else{
		$_SESSION['erro_login'] = true;
		header("location: "." ../login.php");
	}

	$phpconnect ->close();

?>