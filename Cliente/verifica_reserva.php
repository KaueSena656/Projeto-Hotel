<!-- <?php
	include '../conexao/conexao.php';
session_start();
	if (isset($_POST['buscar'])) {

$erro = array();
	$nome = mysqli_escape_string($conn, $_POST['nome']);
	$email = mysqli_escape_string($conn, $_POST['email']);

	if (empty($nome) or empty($email)) {
			$erro[] = "<p>Para realizar a busca você deve preencher o campo</p>";
		}else{
			$sql = "SELECT nome FROM reserva WHERE nome = '$nome'";
			$return = mysqli_query($conn, $sql);

		if (mysqli_num_rows($return) > 0) {
			$sql = "SELECT * FROM reserva WHERE email = '$email' AND nome = '$nome'";
			$return = mysqli_query($conn, $sql);

			if (mysqli_num_rows($return) == 1) {
				$dados = mysqli_fetch_array($return);
				
				$_SESSION['encontrado'] = true;
				$_SESSION['id_cliente'] = $dados['id'];


				header("location: visualizar_reserva.php");

			}else{
				$erro[] = "<p>Desculpe, mas não encontramos uma reserva em seu nome</p>";
			}
		
			}else{
				$erro[] = "<p>Desculpe, mas não encontramos uma reserva em seu nome</p>";
			}
			
		}	

}
?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1.0">

	<title>Login</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Roboto:wght@900&display=swap" rel="stylesheet">
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
			background-color: #eee;
			width: 100%;
			height: 100vh;
		}
		.login-page{
    		background-image: url('pexels-pixabay-316093 (1).jpg');
    		background-repeat: no-repeat;
    		background-size:100%;
    		bottom: 0;
   		    color: black;
    		left: 0;
    		overflow: auto;
    		padding: 3em;
   		    position: absolute;
    		right: 0;
    		text-align: center;
    		top: 0;
		}
		.page{/*
			width: 100%;
			height: 100%;
			background-color: white;
			position: absolute;*/
		}
		.container{
			width: 400px;
			height: 520px;
			position: absolute;
			top: 10%;
			left: 50%;
			transform: translateY(-50%);
			transform: translateX(-50%);
			border: 1px solid #eee;
			border-radius: 5px;
		}
		.container form{
			width: 80%;
			height: 270px;
			margin:0 10% 0 10%;
		}
		form h2{
			padding-top: 10px;
			font-size: 26px;
			font-family: 'Poppins', sans-serif;
			color: white;
			text-align: center;
		}
		form hr{
			width: 100%;
			height: 2px;
			background-color: white;
			margin-bottom: 15px;
		}
		form svg{
			transform: translateY(22.5px);
			margin-left: 10px;
			height: 20px;
			width: 20px;
			color: #202c39;
		}
		form input{
			margin-top: -10px;
			width: 100%;
			height: 36px;
			border: 2px solid gray;
			border-radius: 2px;
			padding-left: 2.5rem;
			font-family: 'Roboto', sans-serif;
		}
		input:focus{
			border: 1px solid #195596;
			background-color: #d2e8ff;
		}
		form button{
			width: 100%;
			height: 36px;
			background-color: #202c39;
			color: white;
			font-size: 16px;
			border-radius: 2px;
			cursor: pointer;
			transition: 0.5s;
			font-family: 'Poppins', sans-serif;
		}
		button:hover{
			opacity: 0.9;
			border: 1px solid gray;
		}
		.itens{
			width: 80%;
			height: 220px;
			margin:0 10% 0 10%;
		}

		.itens .box{
			width: 100%;
			height: 70px;
			background-color: white;
			margin-bottom: 20px;
		}
		.itens .box p{
			color: #202c39;
			font-family: 'Poppins', sans-serif;
			font-weight: 200;
			text-align: center;
			margin-bottom: 10px;
			padding: 10px;
		}
		.itens a{
			color: #202c39;
			font-size: 'Poppins';
			font-weight: 500;
		}

		.itens .item{
			width: 49%;
			height: 140px;
			background-color: #202c39;
			float: left;
			border-radius: 4px;
			transition: 0.5s;
		}
		.item:hover{
			opacity: 0.8;
			border: 1px solid gray;
		}
		.item h2{
			font-family: 'Poppins', sans-serif;
			font-size: 20px;
			color: white;
			text-align: center;
		}
		.item p{
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
			color: white;
			text-align: center;
			margin-bottom: 10px;
		}
		.item svg{
			margin-top: -10px;
			width: 40px;
			height: 40px;
			color: white;
			position: absolute;
			margin-left: 15%;
		}
	</style>
<body>
<div class="login-page"></div>

	<div class="container">
		<form method="POST" action="">
<h2>Procurar reserva</h2>
<hr>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg><input type="text" name="nome" placeholder="Seu nome" style="margin-bottom: 15px;" required>
			
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg><input type="email" name="email" placeholder="Seu email" style="margin-bottom: 25px;" required>


					<button type="submit" name="buscar">Verificar</button>

</form>
	<div class="itens"> <div class="box">
			<p>Não tem uma reserva? Faça uma agora clicando <a href="reserva.php">AQUI</a></p></div>
		<div class="item"><h2>WI-FI</h2>
						<p>Wi-fi gratuito e acessivel a todos os locais do Hotel</p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
  <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
  <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
</svg>
		</div>
		<div class="item" style="margin-left: 2%;"><h2>GAMES</h2>
					<p>Área de lazer para todas as crianças na sala de games</p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
  <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
  <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
</svg>
		</div>
</div>
</div>
</body>
</html>