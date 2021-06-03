<?php
	include '../conexao/conexao.php';

	if (isset($_POST['cadastrar'])) {
		$nome = $_POST['nome'];		
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$insert = "INSERT INTO cadastro(nome, telefone, email, senha) VALUES 
		('$nome', '$telefone', '$email', '$senha')";
		$permissao = mysqli_query($conn, $insert);
		// echo "Cadastrado <a href=../index.php>Sair</a>";
	}else{
		echo "";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro no site</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
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
			min-height: 100vh;
			width: 100%;
			background-color:#202c39;
		}
		.cad-page{
			width: 1200px;
			height: 400px;
			position: absolute;
			top: 20%;
			left: 50%;
			transform: translateY(-50%);
			transform: translateX(-50%);
		}
		.box-1{
			margin-top: 50px;
			width: 300px;
			height: 300px;
			background-color: #33485f;
			position: absolute;
			border-radius: 5px;
			transition: 0.3s;
		}
		.box-1:hover{
			margin: 40px 20px;
			width: 320px;
			height: 320px;
			box-shadow: 4px 4px 10px black;
		}
		.box-1 h2{
			text-align: center;
			margin-top: 5px;
			font-family: 'Teko', sans-serif;
			color: #c2a056;
			font-weight: 500;
			font-size: 40px;
		}
		p{
			margin: 15px 5% 0 5%;
			text-align: justify;
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
			color: white;
		}
		.box-1 svg{
			width: 50px;
			height: 50px;
			text-align: center;
			margin-left: 41.5%;
			margin-top: 35px;
			color: white;
			animation: svg-random 3s alternate infinite;
		}
		.box-1 hr{
			width: 90%;
			margin-left: 5%;
			height: 4px;
			border: none;
			background-color: #202c39;
			margin-top: -5px;
			margin-bottom: 20px;
		}
		@keyframes svg-random{
			0%{

			}
			50%{
				color: #c2a056;
			}
			100%{
				color: #202c39;
			}
		}
		.box-2{
			height: 300px;
			width: 300px;
			background-color: #33485f;
			transform: translateY(-350px);
			border-radius: 5px;
			float: right;
			transition: 0.5s;
		}
		.box-2:hover{
			margin: -10px 20px;
			width: 320px;
			height: 320px;
			box-shadow: 4px 4px 10px black;
		}
		.box-2 h2{
			text-align: center;
			margin-top: 5px;
			font-family: 'Teko', sans-serif;
			color: #c2a056;
			font-weight: 500;
			font-size: 40px;
		}
		.box-2 svg{
			width: 50px;
			height: 50px;
			text-align: center;
			margin-left: 41.5%;
			margin-top: 15px;
			color: white;
			animation: svg-random 3s alternate infinite;
		}
		.box-2 hr{
			width: 90%;
			margin-left: 5%;
			height: 4px;
			border: none;
			background-color: #202c39;
			margin-top: -5px;
			margin-bottom: 20px;
		}
		.container{
			width: 400px;
			height: 400px;
			background: linear-gradient(40deg, #33485f, #15202c);
			box-shadow: 4px 4px 10px black;
			margin-left: 400px;
			border-radius: 5px;
		}
		.container form{
			width: 90%;
			margin: 0px 5% 0 5%;
		}
		form h2{
			font-family: 'Poppins', sans-serif;
			color: white;

			text-align: center;
		}
		hr{
			width: 90%;
			margin-left: 5%;
			height: 2px;
			border: none;
			background-color: white;
			margin-top: 5px;
			margin-bottom: 10px;
		}
		form svg{
			margin-left: 30px;
			height: 20px;
			width: 20px;
			color: #202c39;
			transform: translateY(32.5px);
		}
		form input{
			width: 90%;
			height: 36px;
			margin:0 5% 0 5%;
			border-radius: 2px;
			border: 2px solid gray;
			padding-left: 3rem;
			transition: 0.5s;
			font-family: 'Roboto', sans-serif;
			font-weight: bolder;
		}
		input:hover{
			border: 2px solid #53a5ee;
		}
		input:focus{
			border: 2px solid #53a5ee;
		}
		form button{
			width: 90%;
			height: 36px;
			margin:20px 5% 0 5%;
			background: linear-gradient(90deg, #202c39, #33485f);
			color: white;
			font-size: 16px;
			font-family: 'Poppins', sans-serif;
			border-radius: 2px;
			cursor: pointer;
			transition: 0.5s;
		}
		form button:hover{
			opacity: 0.7;
			border: 1px solid gray;
		}
	</style>
<body>
<div class="cad-page">

	<div class="box-1">
		<h2>Sorteios</h2>
		<hr>
		<p>° Concorra a vários sorteios.</p>
		<p>° Com seu cadastro você estará concorrendo automaticamente a todos os sorteios feitos pelo Hotel Jardim florescente!</p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
	</div>
<div class="container">
<div style="height: 25px;"></div>
	<form method="POST" action="">
			<h2>Dados necessários:</h2>
			<hr>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><input type="text" name="nome" placeholder="Seu nome" required>


<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg><input type="number" name="telefone" placeholder="Telefone" required>


<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg><input type="email" name="email" placeholder="Seu email" required>


<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg><input type="password" name="senha" placeholder="Senha" required>

		<button type="submit" name="cadastrar" onclick="cadastro();">Cadastrar</button>
	</form></div>
		<div class="box-2">
		<h2>Reserva</h2>
		<hr>
		<p>° Toda semana ocorre um sorteio de uma reserva.</p>
		<p>° Com seu cadastro você pode concorrer a uma vaga em nosso hotel com 20% a 80% de desconto em todas as despezas!</p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg>
	</div>
	</div>
	<script type="text/javascript">
		function cadastro() {
			alert("Usuário cadastrado com sucesso!");
		}
	</script>
</body>
</html>