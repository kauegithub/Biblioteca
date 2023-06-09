<!DOCTYPE html>
<html lang = "pt-BR">
<head> 
	<meta charset = "utf-8">
	<title> Biblioteca</title>
	<link rel = "stylesheet" href = "css/estilo.css">
</head>
<body>
	<?php 
	session_start();

	 ?>

	<div id= login-topo>
		<div>
			 	<h2 id= "text-cadastro"> Logar Usuário</h2>
			</div>
	<main>
		<form action="./controllers/LoginUsuario.php" method = "post" name= "login_form">
	<div id="login-center">
		<label for="login"> Login</label>
		<input type = "text" class= "input_login_padrao" name= "login" id="login">
		<label for="senha"> Senha</label>
		<input type = "text" class= "input_login_padrao" name= "senha" id="senha">
	<div id= "enviar">
		<label class= "separacao">_______________</label>
		<input type="submit" id="logar" value="Logar Usuário">
		<label class= "separacao">_______________</label>
	</div>
	</div>
		<?php
		include 'footer.php'
		?>
	</main>
</body>
</html>