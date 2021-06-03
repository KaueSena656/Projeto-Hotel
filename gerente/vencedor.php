<?php
include '../conexao/conexao.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = mysqli_query($conn, "SELECT * FROM cadastro WHERE id = {$id}") or die(mysqli_error($conn));
	$array = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vencedor</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
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
				background-color: #202c39;
				font-family: 'Poppins', sans-serif;
			}
			.box{
				margin: 120px 30% 0 30%;
				width: 40%;
				height: 360px;
				background-color: #202c39;
				border: 1px solid gray;
			}
			.box .container{
				width: 98%;
				height: 98%;
				margin: 0.5% 1% 1% 1%;
				background-color: white;
			}
			.container .topo{
				width: 100%;
				height: 70px;
				background-color: gray;
			}
			.topo h2{
				font-family: 'Poppins', sans-serif;
				font-weight: bolder;
				color: white;
				padding: 10px;
				float: left;
			}
			.topo h2 p{
				font-size: 14px;
				font-family: 'Poppins', sans-serif;
				font-weight: 300;
				margin-top: -5px;
			}
			.topo h2 p svg{
				transform: translateY(2.5px);
			}
			.topo button{
				float: right;
				width: 140px;
				height: 38px;
				background-color: #202c39;
				border-radius: 2px;
				margin: 15px;
				color: white;
				font-family: 'Poppins', sans-serif;
				cursor: pointer;
				transition: 0.5s;
			}
			.box form{
				margin:20px 4% 0 4%;
				width: 92%;
			}
			form input[type="number"]{
				width: 18%;
				height: 36px;
				padding-left: 0.4rem;
				border: 1px solid gray;
				float: left;
				font-family: 'Roboto', sans-serif;
			}
			form input[type="text"]{
				width: 38%;
				height: 36px;
				margin-left: 3%;
				padding-left: 0.4rem;
				border: 1px solid gray;
				float: left;
				font-family: 'Roboto', sans-serif;
			}
			form input[type="email"]{
				width: 38%;
				height: 36px;
				margin-left: 3%;
				padding-left: 0.4rem;
				border: 1px solid gray;
				margin-bottom: 10px;
				font-family: 'Roboto', sans-serif;

			}
			form textarea{
				width: 100%;
				height: 140px;
				border: 1px solid gray;
				margin-bottom: 10px;
				padding: 0.4rem;
				font-family: 'Roboto', sans-serif;
			}
			form button{
				margin: 2.5px 30% 0 30%;
				width: 40%;
				height: 38px;
				background-color: #202c39;
				color: white;
				border-radius: 2px;
				font-family: 'Poppins', sans-serif;
				cursor: pointer;
				transition: 0.5s;
			}
			button:hover{
				opacity: 0.5;
				border: 1px solid gray;
			}
		</style>
<body>
<div class="box">
<div class="container">
	<div class="topo">
		<h2>Vencedor do sorteio
			<p>
				<?php include '../conexao/conexao.php';
					  $nome = mysqli_query($conn, "SELECT * FROM sorteio");
				      $dado = mysqli_fetch_array($nome);
				      echo $dado['nome_s'];
				?>
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
  <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
  <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
</svg>
			</p>
		</h2>
			<a href="listarVencedor.php"><button>Sair</button></a>
	</div>
	<form method="POST" action="cad_vencedor.php">
		<input type="number" name="cod_v" value="<?php echo $array['id']; ?>">
		<input type="text" name="nome" value="<?php echo $array['nome']; ?>">
		<input type="email" name="email" value="<?php echo $array['email']; ?>">
		<textarea name="descricao" placeholder="Descrição do sorteio para o vencedor"></textarea>
		<button type="submit" name="enviar">Enviar</button>
	</form>
<?php } ?>
</div>
</div>
</body>
</html>