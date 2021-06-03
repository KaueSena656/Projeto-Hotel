<?php
require "../conexao/conexao.php";
	if (isset($_POST['enviar'])) {
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$insert = "INSERT INTO administrador(nome, cpf, telefone, email, senha) VALUES ('$nome', '$cpf', '$telefone', '$email', '$senha')";
		$return = mysqli_query($conn, $insert);
		// echo "Usuário cadastrado";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de administradores</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
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
			width: 100%;
			background-color: #202c39;
		}
		.box{
			width: 60%;
			height: 400px;
			margin: 80px 20% 0 20%;
			background-color: #202c39;
			border: 1px solid gray;
			border-radius: 5px;
		}
		.box .container{
			width: 98%;
			height: 96%;
			margin: 1% 1% 1% 1%;
			background-color: white;
		}
		.container .adm{
			width: 100%;
			height: 60px;
			color: white;
			background-color: gray;
			padding: 10px;
			font-family: 'Poppins', sans-serif;
			font-size: 16px;
		}
		.container .logo{
			float: right;
			height: 50px;
			width: 50px;
			margin: -5px;	
			margin-right: 3%;	
		}
		.logo img{
			width: 100%;
			height: 100%;
		}
		.container h2{
			font-size: 28px;
			color: white;
			margin-left: 3.5%;
		}
		form{
			width: 90%;
			margin:30px 5% 0 5%;
		}
		form .cad{
			width: 45%;
			float: left;
		}
		form .cad input{
			width: 100%;
			height: 36px;
			border: 1px solid gray;
			padding: 0.6rem;
		}
		form .list{
			width: 45%;
			height: 195px;
			margin-left: 55%;
			background-color: gray;
			border: 1px solid #c3c3c3;
			border-radius: 1px;

			overflow-y: auto;
		}
		.list::-webkit-scrollbar{
			width: 10px;
			background-color: gray; 
		}
		.list::-webkit-scrollbar-thumb{
			background-color: #202c39;
		}
		form button{
			margin: 20px 0 0 10%;
			width: 20%;
			height: 36px;
			background-color: #202c39;
			color: white;
			font-family: 'Poppins', sans-serif;
			border-radius: 2px;
			border: none;
			cursor: pointer;
			transition: 0.5s;
			float: right;
		}
		form a button{
			transform: translateY(-56px);
			width: 20%;
			float: left;
		}
		form button:hover{
			opacity: 0.5;
			border: 1px solid gray;
		}
		.list table{
			width: 100%;
		}
		table thead{
			background-color: #202c39;

		}
		table thead tr{
			height: 40px;
		}
		table thead tr th{
			color: white;
			font-family: 'Poppins', sans-serif;
		}
		table tbody tr{
			height: 25px;
			color: white;
		}
		table tbody tr th{
			border: 1px solid #c3c3c3;
			color: white;
			font-family: 'Poppins', sans-serif;
			font-weight: 200;
		}
		form
	</style>
<body>
<div class="box">
	<div class="container">
		<div class="adm">
			<div class="logo">
				<img src="LogoJF.png">
			</div>
		<h2>Novo administrador</h2>
		</div>
	<form method="POST" action="">
	<div class="cad">
		<input type="text" name="nome" placeholder="Nome"><br><br>
		<input type="number" name="cpf" placeholder="CPF"><br><br>
		<input type="number" name="telefone" placeholder="Telefone"><br><br>
		<input type="email" name="email" placeholder="Email"><br><br>
		<input type="password" name="senha" placeholder="Senha">
	</div>
			<div class="list">
<!-- Table -->
				<table>
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome</th>
						</tr>
					</thead>
				<?php include '../conexao/conexao.php';
					$sql = mysqli_query($conn, "SELECT * FROM administrador");
					if (mysqli_num_rows($sql) > 0) {
						while ($array = mysqli_fetch_assoc($sql)) {
				?>			
	
					<tbody>
						<tr>
							<th><?php echo $array['id']; ?></th>
							<th><?php echo $array['nome'];?></th>
						</tr>
					</tbody>
					<?php 
						}
					}else{

					}
				?>
				</table>
					

			</div>
		<button type="submit" name="enviar">Cadastrar</button>
		<a href="listar_adm.php"><button type="button">Sair</button></a>
	</form>
	</div>
</div>
</body>
</html>