<?php
	include '../conexao/conexao.php';
	session_start();
	$id = $_SESSION['id_adm'];
	$sql = "SELECT * FROM administrador WHERE id='$id'";
	$return = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($return);
	mysqli_close($conn);
?>

	<!-- <p>Bem vindo <?php echo $dados['nome']; ?></p> -->

	
	<!-- <a href="tabela.php">Atendimento</a> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="painel_adm.css">
	<title>Sistema</title>
<style type="text/css">
	form{
		width: 90%;
		margin:10px 5% 0 5%;
	}
	input{
		width: 47.5%;
		height: 32px;
		margin-bottom: 10px;
		border: 1px solid orange;
		border-radius: 2px;
		transition: 0.5s;
	}
	input:focus{
		border: 1px solid orange;
	}
	h3{
		text-align: center;
	}
	.bloco_1 .content_1{
		background-color: white;
		padding: 6px 0 0 10px;
    	height: 300px;
   		width: 550px;
   		background-color: white;
   		border-style: solid;
   		border-width: 0;
    	border-radius: 5px;
	}
	.content_2 h3{
		text-align: center;
		margin-bottom: 20px;
	}
	.content_2 p{
		margin:0 6% 0 4%;
		text-align: justify;
	}
	.content_1 button[type="submit"]{
		width: 49%;
		height: 34px;
		font-family:'Roboto', sans-serif;
		font-size: 14px;
		font-weight: bolder;
		background-color: orange;
		border-radius: 2px;
		outline: none;
		cursor: pointer;
		transition: 0.5s;
		border: 1px solid orange;
	}
	.content_1 button:hover{
		border: 1px solid yellow;
	}
	.content_2 button{
		width: 90%;
		margin: 10px 6% 20px 4%;
		height: 40px;
		font-family:'Roboto', sans-serif;
		font-size: 14px;
		font-weight: bolder;
		background-color: orange;
		border-radius: 2px;
		outline: none;
		cursor: pointer;
		transition: 0.5s;
		border: 1px solid orange;
	}
	.content_2 button:hover{
		border: 1px solid yellow;
	}
	.content_2 button[type="button"]{
		margin-top: 45px;
	}
	.content_3 p{
		margin:10px 40% 0 5%;
	}
	.content_3 button{
		transform: translateX(630px);
		height: 40px;
		width: 32%;
		height: 40px;
		font-family:'Roboto', sans-serif;
		font-size: 14px;
		font-weight: bolder;
		background-color: orange;
		border-radius: 2px;
		outline: none;
		cursor: pointer;
		transition: 0.5s;
		border: 1px solid orange;

	}
	.aling{
		transform: translateY(-44px);
	}
	.text_aling h3{
		text-align: center;
		transform: translateX(-200px);
	}
	.menu_icons #icon{
	color:#000000;
	font-size: 14px;
	text-decoration: none;
	cursor: pointer;
	margin-left: 2%;
	}
	.menu_icons svg{
	transform: translateY(5px);
	padding: 20px 0 0 30px;
	height: 20px;
	width: 20px;
	color: orange;
	}
	.usuario{
	transform: translateY(8px);	
	width: 90%;
	margin:20px 6% 0 4%;
	height: 320px;
	background-color: white;
	border-radius: 5px;
	border: 2px solid orange;
	}
	.usuario svg{
	height: 40px;
	width: 40%;
	margin: 2px 30% 0 30%;
	color: orange;
	}
	.espaco{
		width: 94%;
		margin: 3% 3% 3% 3%;
		height: 94%;
		background-color: white;
	}
	.espaco #p{
		margin: 0px 2% 15px 1%;
		height: 24px;
		width: 96%;
		border: 1px solid orange;
		padding-top: 10px;
		text-align: center;
		font-size: 13px;
		font-weight: bolder;
		color: orange;
		border-radius: 2px;
	}
	.espaco #a{
		margin-top: 5px;
		font-size: 14px;
		color: black;
		font-weight: bolder;
		margin-left: 1%;
	}
	.btn{
		width: 96%;
		height: 38px;
		background-color: orange;
		border: 1px solid yellow;
		border-radius: 2px;
		margin:10px 2.5% 0 1.5%;
		font-family:'Roboto', sans-serif;
		font-size: 14px;
		font-weight: bolder;
		transition: 0.4s;
		cursor: pointer;
		outline: none;
	}
	#icon:hover{
		color: orange;
	}
	input{
		padding-left: 2px;
		outline: none;
	}
	select{
	font-family: 'Roboto', sans-serif;
	font-weight: bolder;
	margin-left: 85%;
	transform: translateY(-30px);
	outline: none;
	border: 1px solid orange;
	transition: 0.3s;
	background-color: #eee;
	width: 140px;
	height: 40px;
	border-radius: 5px;
	}
	select:focus{
	color: black;
	}
	.painel_gerente hr{
	transform: translateY(-15px);
	width: 100%;
	height: 1px;
	background-color: #cbcbcb;
	border: none;
}
</style>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;1,200&family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>
<body>
	<div class="content">
	<div class="menu_lateral">
		<button class="user"></button><p class="p_site">ADMINISTRADOR</p>
		<div class="menu_icons">
<hr>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>
			<a href="" id="icon">ADMINISTRADORES</a>
<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
  <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg>
			<a href="relatorio.php" id="icon">RELATÓRIO EM PDF</a><br>


<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
  <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
</svg>
	<a href="" id="icon">RELATÓRIO EM GRÁFICOS</a><br>
			

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
</svg><a href="" id="icon">CONFIGURAÇÕES</a><br>
			

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg><a href="../index.php" id="icon">SAIR</a><br>

		</div>
		<div class="usuario"><div class="espaco">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
		
		<p id="a">Nome:</p>	<p id="p"><?php echo $dados['nome']; ?></p>
		<p id="a">CPF:</p>	<p id="p"><?php echo $dados['cpf']; ?></p>
		<p id="a">Email:</p><p class="email" id="p"><?php echo $dados['email']; ?></p>
		<button class="btn">Minhas credenciais</button>
		</div>
		</div>
	</div>
	<div class="painel_gerente">
	<div class="topo">
		<p class="p_user">	<?php echo $dados['nome']; ?>   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg></p>
		<div class="selector"><select>
			<option><a href="">Meus dados</a></option>
			<option>Informar um erro</option>
			<option>Sair</option>
		</select></div>
<hr>
<p class="pg">Painel</p>
	<div class="container">
			<div class="bloco_1">
			<div class="content_1">
			<h3>Cadastrar clientes</h3>

			<form method="POST" action="">
		<h2>Informações</h2>
		<input type="text" name="nome" placeholder="Nome" required>
		<input type="number" name="cpf" placeholder="CPF" required><br>
		<input type="date" name="inreserva" placeholder="Dia inicial" required>
		<input type="date" name="fimreserva" placeholder="Dia final" required><br>
		<input type="number" name="adultos" placeholder="Adultos" id="a4" required>
		<input type="number" name="criancas" placeholder="Crianças(menores que 12)" id="a5" required><br>
		<input type="email" name="email" placeholder="Email" required>
		<input type="password" name="senha" placeholder="Senha" required><br>
		<input type="number" name="valor" placeholder="Valor" required>

		<!-- <input type="checkbox"> -->
		<button type="submit">Efetuar pagamento</button>

	</form>
		</div>
	</div>

			<div class="bloco_2">
			<div class="content_2">
			<h3>Atendimento</h3>
			<p>lorem ipsum dolor sit amet consectetur adipiscing elit commodo sagittis hac eget rutrum dui cubilia nam potenti primis parturient gravida.</p>
			<a><button type="button">Responder feedbacks</button></a>
			<a href="tabela.php"><button>Visualizar reservas</button></a>
		</div>
	</div>
			<div class="bloco_3">
			<div class="content_3">
		<div class="text_aling"><h3>Acessar relatórios</h3>
			<p>lorem ipsum dolor sit amet consectetur adipiscing elit commodo sagittis hac eget rutrum dui cubilia nam potenti primis parturient gravida.</p></div>
			<div class="aling"><button>Acessar</button></div>
		</div>
	</div>

</div>
	</div>
	</div>
	</div>
</body>
</html>