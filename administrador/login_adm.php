<?php
require_once '../conexao/conexao.php';

session_start();
if (isset($_POST['conferir'])) {

$error = array();

	$email = mysqli_escape_string($conn, $_POST['email']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);

if(empty($email) or empty($senha)){
	$error[] = "<p>O campo email/senha precisa ser preenchido</p>";
}else{
	$sql = "SELECT email FROM administrador WHERE email = '$email'";
	$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
	$sql = "SELECT * FROM administrador WHERE email = '$email' and senha = '$senha'";
	$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
	$dados = mysqli_fetch_array($resultado);
	
	$_SESSION['logado'] = true;
	$_SESSION['id_adm'] = $dados['id'];
	header("location: painel_administrador.php");
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
	<title>Login</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
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
			background-color: #253b52;
			height: 100vh;
		}
		.aviso{
			width: 350px;
			height: 100px;
			background-color: #202c39;
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			margin-top: 30px;
			border: 1px solid gray;
			border-radius: 5px;
		}
		.aviso svg{
			width: 30px;
			height: 30px;
			color: red;
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			margin-top: 10px;
		}
		.aviso p{
			color: red;
			font-family: 'Roboto', sans-serif;
			text-align: center;
			padding: 15px;
		}
		.box{
			height: 350px;
			width: 350px;
			background-color: white;
			position: absolute;
			top: 25%;
			left: 50%;
			transform: translateY(-50%);
			transform: translateX(-50%);
			border-radius: 10px;

			/*animation: shadow 4s alternate infinite ease-in-out;
		}
		@keyframes shadow{
			from{
				box-shadow: 3px 3px 30px white;
			}
			to{
				box-shadow: 3px 3px 30px #202c39;
			}*/
		}
		.box .topo{
			width: 100%;
			height: 80px;
			background-color: #202c39;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		.box .topo h2{
			padding: 20px;
			font-size: 26px;
			font-family: 'Poppins', sans-serif;
			font-weight: 600;
			text-align: center;
			color: white;
		}
		.box form{
			margin: 20px 5.5% 0 4.5%;
			width: 90%;
			height: 200px;
			background-color: white;
		}
		form svg{
			transform: translateY(25.5px);
			height: 25px;
			width: 25px;
			margin-left: 10px;
			color: #202c39;
		}
		form input{
			width: 100%;
			height: 36px;
			border: 1px solid gray;
			padding-left: 3rem;
			margin-top: -20px;
			font-family: 'Roboto', sans-serif;
			font-weight: 300;
			border-radius: 2px;
		}
		form input:focus{
			background-color: #dbedff;
		}
		form button{
			margin-top: 30px;
			width: 100%;
			height: 36px;
			background-color: #202c39;
			border-radius: 2px;
			color: white;
			font-family: 'Poppins', sans-serif;
			font-weight: 300;
			cursor: pointer;
			transition: 0.5s;
		}
		form button:hover{
			opacity: 0.5;
			border: 1px solid gray;
		}
		.box a{
			position: absolute;
			float: left;
			color: #253b52;		
			font-family: 'Poppins', sans-serif;
			font-weight: 600;
			margin: 20px 20%;
			transition: 0.5s;
			height: 10px;
		}
		.box a:hover{
			text-decoration: none;
			color: #58c75d;
		}
		
	</style>
<body>
	<?php  if (!empty($error)) { 
		foreach ($error as $erros) {
			?>
	<div class=aviso>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>	
						<?php echo "<p>".$erros."</p>";
					}
			}
	 ?>
	</div>
<div class="box">
<div class="topo">
	<h2>Administrador</h2>
</div>
	<form method="POST" action="">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg><input type="email" name="email" placeholder="Email"><br><br>
		
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg><input type="password" name="senha" placeholder="Senha">

		<button type="submit" name="conferir">Conferir</button>
	</form>

	<a href="#">Quero me tornar um Adm</a>
</div>
</body>
</html>