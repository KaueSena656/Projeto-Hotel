<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mensagens</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&family=Roboto:wght@300&display=swap" rel="stylesheet">
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
			background-color: #e2e2e2;
			height: 100vh;
			width: 100%;
		}
		.container{
			width: 800px;
			height: 500px;
			background-color: white;
			position: absolute;
			top: 10%;
			left: 50%;
			transform: translateY(-50%);
			transform: translateX(-50%);
		}
		.container .menu-lateral{
			width: 200px;
			height: 100%;
			background-color: #202c39;
			float: left;
		}
		.logo{
			margin: 0px 60px 0 60px;
			width: 80px;
			height: 80px;
		}
		.logo img{
			width: 100%;
			height: 100%;
		}
		.elements{
			width: 100px;
			height: 140px;
			background-color: #202c39;
			margin: 40px 50px 0 50px;
		}
		.elements a{
			text-decoration: none;
			font-family: 'Poppins', sans-serif;
			text-align: center;
			margin: 15px;
			display: block;
			color: gray;
		}
		.elements a:hover{
			color: white;
		}
		.user{
			border-top: 1px solid gray;
			border-bottom: 1px solid gray;
			margin: 60px 5px 0 5px;
			height: 100px;
			background-color: #202c39;
		}
		.user p{
			margin-top: 5px;
			font-family: 'Poppins', sans-serif;
			color: white;
			font-size: 14px;
		}
		.user #online{
			font-family: 'Poppins', sans-serif;
			color: white;
			font-size: 12px;
		}
		.user svg{
			color: #1ff729;
			margin-top: 10px;
			height: 8px;
			width: 8px;
		}
		.menu-lateral button{
			width: 140px;
			height: 36px;
			background-color: #bea164;
			margin: 12px 30px 0 30px;
			border-radius: 2px;
			font-family: 'Poppins', sans-serif;
			font-weight: 500;
			cursor: pointer;
			transition: 0.4s;
		}
		button:hover{
			opacity: 0.8rem;
			border: 1px solid gray;
		}
		.nav{
			width: 600px;
			height: 80px;
			float: left;
			background-color: #eee;
		}
		.nav form{
			width: 300px;
			height: 40px;
			margin:20px 10px 0 290px;
		}
		form input{
			width: 260px;
			height: 100%;
			border: 2px solid gray;
			border-top-left-radius: 2px;
			border-bottom-left-radius: 2px;
			float: left;
			padding-left: 0.4rem;
			font-family: 'Poppins', sans-serif;
		}
		form button{
			float: right;
			width: 40px;
			height: 40px;
			background-color: #202c39;
			border-top-right-radius: 2px;
			border-bottom-right-radius: 2px;
			cursor: pointer;
		}
		button svg{
			width: 25px;
			height: 25px;
			color: white;
		}
		.box{
			width: 580px;
			height: 340px;
			float: left;
			margin:10px 10px 0 10px;
			overflow-y: auto;
		}
		.mensagem{
			width: 400px;
			height: auto;
			background-color: #eee;
			float: left;
			margin:20px 20px;
			
			overflow-y: auto;
		}
		.mensagem h2{
			padding: 10px;
			font-family: 'Poppins', sans-serif;
		}
		.mensagem p{
			font-family: 'Poppins', sans-serif;
			padding: 10px;
			text-align: justify;
		}
		.footer{
			margin-top: 10px;
			height: 60px;
			width: 600px;
			background-color: #eee;
			float: left;
		}
		.footer p{
			float: right;
			margin: 20px;
			font-family:'Roboto', sans-serif;
			font-size: 14px;
		}
	</style>
<body>
	<div class="container">
		<div class="menu-lateral"><br>
			<div class="logo">
				<img src="LogoJF.png">
			</div>


				<div class="elements">
					<a href="#" style="color: white;">Entrada</a>
					<a href="#">Enviado</a>
					<a href="#">Reserva</a>
				</div>
				<div class="user">
<p>
 <?php include '../conexao/conexao.php';
 	   if (isset($_GET['id'])) {
		$id = $_GET['id'];
			$sql = mysqli_query($conn, "SELECT nome FROM cadastro WHERE id = $id");
				$nome = mysqli_fetch_array($sql);
					echo $nome['nome'];
		}
 ?>	
</p>
<p id="online"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
  <circle cx="8" cy="8" r="8"/>
</svg> ONLINE</p>
				</div>

					<a href="painel_cliente.php"><button type="button">Sair</button></a>
		</div>
			<div class="nav">
				<form><input type="search" name="" placeholder="Pesquisar por..." required><button type="submit"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button></form>
			</div>
<div class="box">
			<div class="mensagem">
<?php 
	include '../conexao/conexao.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
			$sql = mysqli_query($conn, "SELECT * FROM mensagem");
				if (mysqli_num_rows($sql) > 0) {
					$sql = mysqli_query($conn, "SELECT cv FROM mensagem");
					 	while ($array = mysqli_fetch_array($sql)) {
					 		if ($array['cv'] == $id) {
					 			$sql = mysqli_query($conn, "SELECT * FROM mensagem WHERE cv = '$id'");
					 				$select = mysqli_fetch_array($sql);
					 					echo "<h2>Mensagem!</h2>";
					 					echo "<p>".$select['texto']."</p>";
					 		}
					 	}
				}else{
					echo "Não há nenhuma mensagem";
				}

	}else{
		echo "Erro";
	}

?>
			</div>
		</div>
		<div class="footer">
			<p>©Hotel Jardim florescente</p>
		</div>
	</div>
</body>
</html>