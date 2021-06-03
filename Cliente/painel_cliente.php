<?php 
	include '../conexao/conexao.php';
	session_start();

	$id = $_SESSION['id_cliente'];
	$sql = "SELECT * FROM cadastro WHERE id = '$id'";
	$return = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($return);
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">

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
			background-color: white;
			height: 100vh;
			width: 100%;
			align-items: center;
		}
		.menu{
			height: 60px;
			width: 100%;
			background-color: #008acf;
		}
		.menu h2{
			font-family: 'Roboto', sans-serif;
			padding: 12px 10px;
			font-size: 26px;
			color: white;
			font-weight: 300;
		}
		.menu-2{
			height: 60px;
			width: 100%;
			border-bottom: 1px solid gray;
			background-color: #e6e6e6;
		}
		.menu-2 button{
			width: 140px;
			height: 36px;
			background-color: #c3c3c3;
			margin: 10px;
			border-radius: 2px;
			font-family: 'Poppins', sans-serif;
			font-weight: 500;
			cursor: pointer;
		}
		.menu-2 button svg{
			transform: translateY(3px);
			color: #008acf;
		}
		.menu-2 button:hover{
			border: 1px solid #008a
		}
		.container{
			height: 60px;
			width: 100%;
		}
		.container p{
			padding: 15px;
			font-family: 'Poppins';
			float: left;
		}
		.container .search{
			margin: 7.5px 10px;
			float: right;
			background-color: white;
			height: 40px;
			width: 350px;
		}
		.search input{
			width: 90%;
			height: 100%;
			border: 2px solid #c3c3c3;
			border-top-left-radius: 3px;
			border-bottom-left-radius: 3px;
			padding-left: 0.6rem;
			font-family: 'Poppins', sans-serif;
			font-weight: 300;
			transition: 0.4s;
		}
		.search input:focus{
			border: 2px solid #008acf;
		}
		.search button{
			width: 10%;
			height: 100%;
			background-color: #008acf;
			border-top-right-radius: 3px;
			border-bottom-right-radius: 3px;
			transform: translateY(2px);
			cursor: pointer;
		}
		.search button svg{
			color: white;
		}
		.box{
			width: 100%;
			height: 417px;
			border: 1px solid gray;
		}
		.box #caixa-1{
			width: 30%;
			height: 360px;
			float: left;
			margin: 20px 2% 0 3%; 
		}
		#caixa-1 h2{
			font-family: 'Roboto', sans-serif;
			padding: 12px 20%;
			font-size: 26px;
			color: black;
			font-weight: 300;
		}
		#caixa-1 select{
			width: 60%;
			margin:10px 20% 10px 20%;
			height: 40px;
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
			border-radius: 2px;
			border: 1px solid gray;
			padding: 0.4rem;
		}
		.box #caixa-2{
			margin-top: 20px;
			width: 30%;
			height: 360px;
			float: left;
		}
		#caixa-2 h2{
			font-family: 'Roboto', sans-serif;
			padding: 12px 5%;
			font-size: 26px;
			color: black;
			font-weight: 300;
		}
		#caixa-2 .list{
			height: 205px;
			width: 90%;
			margin: 10px 5% 0 5%;
		}
		.list #andar{
			width: 100%;
			height: 40px;
			background-color: white;
			margin-top: 1px;
			border: 1px solid gray;
			transition: 0.4s;
			border-radius: 2px;
		}
		#andar input{
			height: 20px;
			width: 20px;
			margin: 10px;
			float: left;
		}
		#andar p{
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
			margin: 10px;
		}
		#andar:hover{
			background-color: #008acf;
		}
		.box #caixa-3{
			width: 30%;
			height: 360px;
			float: left;
			margin: 20px 3% 0 2%; 
		}
		#caixa-3 h2{
			font-family: 'Roboto', sans-serif;
			padding: 12px 5%;
			font-size: 26px;
			color: black;
			font-weight: 300;
		}
		#caixa-3 .list{
			height: 205px;
			width: 90%;
			margin: 10px 5% 0 5%;
		}
		.list #preco{
			width: 100%;
			height: 40px;
			background-color: white;
			margin-top: 1px;
			border: 1px solid gray;
			transition: 0.4s;
			border-radius: 2px;
		}
		#preco input{
			height: 20px;
			width: 20px;
			margin: 10px;
			float: left;
		}
		#preco p{
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
			margin: 10px;
		}
		#preco:hover{
			background-color: #008acf;
		}
		#caixa-3 button{
			width: 200px;
			height: 36px;
			background-color: #008acf;
			color: white;
			border-radius: 2px;
			font-family: 'Poppins', sans-serif;
			float: right;
			margin: 20px 5%;
			cursor: pointer;
			transition: 0.4s;
		}
		#caixa-3 button:hover{
			opacity: 0.7;
		}
		footer{
			height: 60px;
			width: 100%;
			bottom: 0;
			background-color: #e6e6e6;
		}
		footer p{
			font-size: 14px;
			padding: 20px 10px;
			font-family: 'Roboto', sans-serif;
		}
	</style>
<body>
<nav class="menu">
	<h2>Gerenciador</h2>
</nav>
<div class="menu-2">

<a href="../index.html"><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Sair</button></a>

<a href="#"><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
</svg> Excluir</button></a>

<a href="verifica_msg.php?id=<?php echo $dados['id']; ?>" style="float: right;"><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg> Mensagens</button></a>
</div>

<div class="container">
	<p><?php echo $dados['nome']; ?></p>
		<form class="search">
			<input type="search" name="" placeholder="Pesquisar por..." required><button type="submit" onclick="pesquisa();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
		</form>
</div>
<div class="box">
	<form> 
		<!-- Form - dados -->
	<div id="caixa-1">
		<h2>Filtrar:</h2>
		<select required>
			<option>1º Andar</option>
			<option>2º Andar</option>
			<option>3º Andar</option>
			<option>4º Andar</option>
			<option>5º Andar</option>
		</select>

		<select>
			<option>Jardim florescente</option>
		</select>
	</div>
	<div id="caixa-2">
		<h2>Listar categoria:</h2>

		<div class="list">
			<div id="andar">
			<input type="checkbox" name=""><p>Luxo</p>
			</div>
			<div id="andar">
			<input type="checkbox" name=""><p>Valioso</p>
			</div>
			<div id="andar">
			<input type="checkbox" name=""><p>Suíte junior</p>
			</div>
			<div id="andar">
			<input type="checkbox" name=""><p>Superior</p>
			</div>
			<div id="andar">
			<input type="checkbox" name=""><p>Gran class</p>
			</div>
		</div>
	</div>
	<div id="caixa-3">
		<h2>Ofertas de reserva:</h2>

		<div class="list">
			<div id="preco">
			<input type="checkbox" name=""><p>Frequente - 2% de desconto</p>
			</div>
			<div id="preco">
			<input type="checkbox" name=""><p>Semanal - 10% de desconto</p>
			</div>
			<div id="preco">
			<input type="checkbox" name=""><p>Intermédiario - 20% de desconto</p>
			</div>
			<div id="preco">
			<input type="checkbox" name=""><p>Bônus de mais uma semana no hotel</p>
			</div>
			<div id="preco">
			<input type="checkbox" name=""><p>Difícil - 50% de desconto</p>
			</div>
		</div>
			<button type="submit" onclick="filtro();">Aplicar filtros</button>
			
	</div>
	</form>
</div><footer>
	<p>©Hotel Jardim florescente</p> 
</footer>
	<script type="text/javascript">
		function pesquisa(){
			alert("Não encontramos sua pesquisa")
		}
		function filtro() {
			alert("Filtros aplicados com sucesso")
		}
	</script>
</body>
</html>