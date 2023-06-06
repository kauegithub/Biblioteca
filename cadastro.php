<!DOCTYPE html>
<html lang = "pt-BR">
<head> 
	<meta charset = "utf-8">
	<title> Biblioteca</title>
	<link rel = "stylesheet" href = "css/estilo.css">
</head>
<body>
	<header>
		<div id="header-up-left">
			<h2>Biblioteca</h2>
		</div>
		<div id="header-up-right">
			<a href=' ./cadastro.php' id= "">Cadastre-se</a>
			<a href=' ./cadastro.php' id="link-login">Login</a>
		</div>			
	</header>
	<main>
		<div id="login-center">
			<div>
			 	<h2 id= "text-cadastro"> Realize o seu Cadastro</h2>
			</div>
			<div id= "formulario">
				<form name = "cadastro-user" id="cadastro-user" action= "./controllers/CadastrarUsuario.php" method="post">
					<label for ="nome">Nome Completo</label>
					<input type = "text" name= "nome" id= "nome" class = "input_padrao" required>
					<label for = "login">Login</label>
					<input type= "text" name= "login" id= "login" class= "input_padrao" required>
					<label for = "senha">Senha</label>
					<input type= "text" name= "senha" id="senha" class= "input_padrao" required>
					<label for = "data_nasc" maxlength="10"> Data de Nascimento</label>
					<input type= "text" name= "data_nasc" id= "data_nasc" class="input_padrao" required>
					<label> País</label>
					<select name= "pais" id ="pais" required>
						<option value= "Brasil">Brasil</option>
						<option value="Argentina">Argentina</option>
						<option value="Uruguai">Uruguai</option>
						<option value="Paraguai">Paraguai</option>
					<select>
					<div id= "enviar">
						<label class= "separacao">_______________</label>
						<input type="submit" id="cadastrar" value="Cadastrar Usuário">
						<label class= "separacao">_______________</label>
					</div>
				</form>
			</div>
			
		</div>
	<main>
	<footer>		
	</footer>
</body>
</html>