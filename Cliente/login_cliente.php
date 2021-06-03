<?php
include '../conexao/conexao.php';

session_start();
if (isset($_POST['conferir'])) {

$error = array();

	$email = mysqli_escape_string($conn, $_POST['email']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);

if(empty($email) or empty($senha)){
	$error[] = "<p>O campo email/senha precisa ser preenchido</p>";
}else{
	$sql = "SELECT email FROM cadastro WHERE email = '$email'";
	$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
	$sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
	$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
	$dados = mysqli_fetch_array($resultado);
	
	$_SESSION['logado'] = true;
	$_SESSION['id_cliente'] = $dados['id'];
	
	header("location: painel_cliente.php");
}else{
	$error[] = "<p>Este usuário não existe</p>";
}

}else{
	$error[] = "<p>Este usuário não foi encontrado</p>";
}

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="stylesheet" type="text/css" href="css/login_cliente.css"> -->

	<title>Login</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
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
			align-items: center;
			min-height: 100vh;
			width: 100%;
		}
		.box{
			height: 420px;
			width: 400px;
			background-color: white;
			border-radius: 5px;
			position: absolute;
			top: 20%;
			left: 50%;
			transform: translateY(-50%);
			transform: translateX(-50%);
			border-radius: 7px;
		}
		.box .topo{
			height: 80px;
			width: 100%;
			background-color: #2c3d4f;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		.topo h2{
			font-family: 'Poppins', sans-serif;
			padding:20px 10px;
			color: white;
			float: left;
		}
		.topo a{
			float: right;	
			margin: 30px 10px;
			height: 30px;
			width: 30px;
			color: white;
			background-color: #2c3d4f;
			transition: 0.3s;
		}
		.topo a:hover{
			color: #202c39;
		}
		form{
			width: 90%;
			height: 220px;
			margin:10px 5% 0 5%;
		}
		form input{
			width: 100%;
			height: 36px;
			/*margin-top: 20px;*/
			border: 2px solid #2c3d4f;
			border-radius: 2px;
			padding-left: 2.5rem;
		}
		form input[type='checkbox']{
			width: 15px;
			height: 15px;
			margin-top: 20px;
		}
		form p{
			margin-left: 35px;
			transform: translateY(-20px);
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
		}
		form svg{
			width: 20px;
			height: 20px;
			color: #2c3d4f;
			transform: translateY(32px);
			margin-left: 10px;
		}
		button{
			width: 100%;
			height: 36px;
			border-radius: 2px;
			background-color: #202c39;
			color: white;
			font-weight: 300;
			font-family: 'Poppins', sans-serif;
			cursor: pointer;
			transition: 0.5s;
		}
		button:hover{
			opacity: 0.5;
			border: 1px solid gray;
		}
		.rodape{
			width: 100%;
			height: 100px;
			background-color: #2c3d4f;
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
		}
		.rodape p{
			font-family: 'Roboto', sans-serif;
			text-align: center;
			padding-top: 5px;
			margin:0 5% 0 5%;
			color: white;
			font-weight: 300;
		}
		.rodape button{
			width: 90%;
			height: 36px;
			margin: 10px 5% 0 5%;
			border-radius: 2px;
			background-color: #202c39;
		}
		.erro{
			width: 300px;
			height: 100px;
			background-color: white;
			border-radius: 2px;
			display: flex;
			position: absolute;
			top: 80%;
			transform: translateY(-80%);
			
			font-family: 'Roboto', sans-serif;
			font-weight: 300;

			margin-left: -280px;
			transition: 1s;
			animation: posicao-aviso 1s ease-in-out;
			animation-fill-mode: forwards;
		}
		.erro .aviso{
		}
		@keyframes posicao-aviso{
			to{
				margin-left: 0;
			}
		}
</style>
<body>


<?php if (!empty($error)) {
			foreach ($error as $erros) {
				echo "<div class=erro>";
				echo "<a href=login_cliente.php>&times;</a>";
				echo "<p class=aviso>".$erros."</p>";
				echo "</div>";
			}
} ?>

	<div class="box">
		<div class="topo">
			<h2>Login cliente</h2><a href="../index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg></a>
		</div>
		<form method="POST" action="">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
			<input type="email" name="email" placeholder="Ex: joaomarcos12@gmail.com">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
			<input type="password" name="senha" placeholder="Ex: marcos123">

			<input type="checkbox" name="" onclick="logar();" required="Marque essa caixa">
			<p id="lembrado">Mantenha-me logado</p>

			<button type="submit" name="conferir">Logar</button>

		</form>
		<br>

		<div class="rodape">
			<p>Ainda não tem uma conta? Cadastre-se e participe de sorteios</p>
			<a href="cadastrar.php"><button type="button">Cadastrar</button></a>
			<!-- <p id="ks">©Hotel Jardim florescente</p> -->
		</div>
	</div>
		<footer>
			<script type="text/javascript">
				function logar() {
					document.getElementById('lembrado').innerHTML = "Logado";
				}
			</script>
		</footer>
</body>
</html>