<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reserva</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
			background: linear-gradient(45deg, #2c537e, black);
			background-repeat: no-repeat;
			width: 100%;
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.container{
			width: 700px;
			height: 400px;
			background-color: white;
			border-radius: 5px;
			border-bottom-right-radius: 6px;
		}
		.container form{
			width: 95%;
			margin: 10px 0 0 5%;
		}
		form h2{
			font-family: 'Poppins', sans-serif;
			font-size: 20px;
		}
		form .aling{
			width: 300px;
			height: 280px;
			float: left;
		}
		form .aling input{
			width: 100%;
			height: 40px;
			margin-top: 10px;
			border: 2px solid gray;
			border-radius: 4px;
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			padding: 0.5rem;
			transition: 0.5s;
		}
		form input:focus{
			border: 2px solid #0b92d6;
			background-color: #eee;
		}
		.aling #ad{
			width: 145px;
		}
		.colum{
			float: right;
			width: 340px;
			height:360px;
		}
		.colum input{
			width: 90%;
			margin-right: 10%;
			height: 40px;
			margin-top: 10px;
			border: 2px solid gray;
			border-radius: 4px;
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			padding: 0.5rem;
			transition: 0.5s;
		}
		form button{
			width: 300px;
			height: 40px;
			background-color: #202c39;
			border-radius: 2px;
			color: white;
			font-family: 'Poppins', sans-serif;
			font-size: 16px;
			cursor: pointer;
			transition: 0.4s;
		}
		form button:hover{
			opacity: 0.5;
			border: 1px solid gray;
		}
		.colum .logo{
			width: 340px;
			height: 200px;
			float: right;
			margin-top: 10px;
		}
		.logo img{
			width: 100%;
			height: 100%;
			border-bottom-right-radius: 5px;
		}
	</style>
<body>
<div class="reserva-page"></div>
<div class="container">
	<form method="POST" action="cloud.php">
		<h2>Informações</h2>
<div class="aling">
		<input type="text" name="nome" placeholder="Nome" required>   
		<input type="number" name="cpf" placeholder="CPF">
		<input type="date" name="inreserva" placeholder="Dia inicial">
		<input type="date" name="fimreserva" placeholder="Dia final">
		<input type="number" id="ad" name="adultos" placeholder="Adultos" >
		<input type="number" style="margin-left: 5px;" id="ad" name="criancas" placeholder="Crianças - 12 anos)">
</div>
<div class="colum">
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="senha" placeholder="Senha">
		<input type="number" name="valor" placeholder="Valor">

		<div class="logo">
			<img src="Original.jpg">
		</div>
</div>
		<button type="submit">Efetuar reserva</button>

	</form>
</div>
</body>
</html>