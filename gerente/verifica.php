<?php
	include '../conexao/conexao.php';

	if (isset($_POST['conferir'])) {
		$erro = array();
			$email = mysqli_escape_string($conn, $_POST['email']);
			$senha = mysqli_escape_string($conn, $_POST['senha']);

				if (empty($email) or empty($senha)) {
					$erro[] = "<p id=erro>Preencha os campos Email / Senha!</p>";
				}else{
					$sql = mysqli_query($conn, "SELECT email FROM gerente WHERE email = '$email'");
					if (mysqli_num_rows($sql) > 0) {
						$sql = mysqli_query($conn, "SELECT email FROM gerente WHERE email = '$email' AND senha = md5('$senha')");
						if (mysqli_num_rows($sql) == 1) {
							header("Location: painelProjeto.php");
						}else{
						$erro[] = "<p id=erro>Dados inválidos!</p>";
						}
					}else{
						$erro[] = "<p id=erro>Este usuário não existe</p>";
					}
				}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
			outline: none;
			box-sizing: border-box;
		}
		body{
			background-color: #202c39;
		}
		.login{
			width: 400px;
			height: 300px;
			background-color: white;
			border-radius: 2px;
			box-shadow: 4px 4px 10px black;
			position: absolute;
			top: 25%;
			left: 50%;
			transform: translateY(-50%);
			transform: translateX(-50%);
		}
		form{
			width: 90%;
			height: 100%;
			margin: 0 5% 0 5%;
		}
		form h2{
			font-size: 26px;
			font-family: 'Poppins', sans-serif;
			text-align: center;
			padding-top: 10px;
			color: #202c39;
		}
		form hr{
			width: 86%;
			height: 2px;
			background-color: gray;
			margin:0 7% 20px 7%;
		}
		form label{
			font-family: 'Montserrat', sans-serif;
			font-weight: bolder;
		}
		form input{
			width: 100%;
			height: 36px;
			border: 1px solid gray;
			margin-bottom: 20px;
			padding: 0.6rem;
			font-family: 'Poppins', sans-serif;
			border-radius: 2px;
			transition: 0.5s;
		}
		form input:focus{
			border: 1px solid #202c39;
		}
		form button{
			width: 100%;
			height: 36px;
			background-color: #202c39;
			color: white;
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
			border-radius: 2px;
			cursor: pointer;
			transition: 0.5s;
		}
		form button:hover{
			opacity: 0.5;
			border: 1px solid gray;
		}
		#erro{
			color: red;
			margin-bottom: 15px;
			font-family: 'Roboto',sans-serif;
			font-weight: bold;
		}
	</style>
<body>
	<div class="login">
		<form method="POST" action="">
			<h2>Área restrita ao gerente</h2>
			<hr>
			<label>Email</label>
			<input type="email" name="email" placeholder="Seu email">
			<label>Senha</label>
			<input style="margin-bottom: 10px;" type="password" name="senha" placeholder="Sua senha">
		<?php if (!empty($erro)) {
			foreach ($erro as $erros) {
				echo $erros;
			}
		} ?>
			<button type="submit" name="conferir">Conferir</button>
		</form>

	</div>
</body>
</html>