<?php
require "conexao/conexao.php";
	if (isset($_POST['enviar'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$insert = "INSERT INTO cliente(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
		$return = mysqli_query($conn, $insert);
		echo "Cadastrado";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="nome"><br><br>
		<input type="email" name="email"><br><br>
		<input type="password" name="senha">

		<button type="submit" name="enviar">cadastrar</button>
	</form>
</body>
</html>