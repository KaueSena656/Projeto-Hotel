<!DOCTYPE html>
<html>
<head>
	<title></title>
<!--  -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
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
    		background-color: white;
		}
		nav{
			height: 60px;
			background-color: #202c39;
		}
		#nome{
			padding: 15px 0 0 5%;
			font-size: 20px;
			font-family: 'Poppins', sans-serif;
			color: white;
		}
		nav a{
			padding: 15px 5% 0 0;
			float: right;
			color: white;
			font-family: 'Poppins', sans-serif;
			text-decoration: none;
			transition: 0.5s;
		}
		nav a:hover{
			color: #c3c3c3;
		}
		h2{
			margin: 40px 0 0 5%;
			color: #202c39;
			font-family: 'Poppins', sans-serif;
		}
		#sorteio{
			color: #202c39;
			margin-left: 5%;
			font-family: 'Poppins', sans-serif;
		}
		#sorteio svg{
			transform: translateY(2.5px);
		}
		 table{
			background-color: #c3c3c3;
			width: 90%;
			margin: 40px 5% 0 5%;
		}
		table thead tr th{
			background-color: #202c39;
			color: white;
			text-align: center;
			font-family: 'Poppins', sans-serif;
			font-weight: 200;
			padding: 10px;
		}
		table tbody tr th{
			text-align: center;
			background-color: #7f7f7f;
			font-family: 'Poppins', sans-serif;
			font-weight: 200;
			color: white;
			height: 34px;
		}
		table tbody tr th a button{
			width: 150px;
			height: 30px;
			border-radius: 2px;
			background-color: #202c39;
			color: white;
			font-family: 'Poppins', sans-serif;
			font-weight: 300;
			cursor: pointer;
			transition: 0.5s;
		}
		table tbody tr th a button svg{
			transform: translateY(2.5px);
		}
		table tbody tr th a button:hover{
			opacity: 0.5;
			border: 1px solid gray;
		}
	</style>
<body>
<nav>
		<a href="painelProjeto.php">Sair</a><div class="objeto"></div>
		<?php include '../conexao/conexao.php';
			  $sql = mysqli_query($conn, "SELECT * FROM gerente");
			  $array = mysqli_fetch_assoc($sql);
			  echo "<p id=nome>".$array['nome']."</p>";	
		?>
		
	</nav>

<h2>Sorteio:</h2><p id="sorteio">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg>
<?php
	include '../conexao/conexao.php';
	$sorteio = mysqli_query($conn, "SELECT * FROM sorteio");
	if (mysqli_num_rows($sorteio) > 0) {
	$sorteioNome = mysqli_fetch_assoc($sorteio);
	echo $sorteioNome['nome_s'];
}else{
	echo "Não há nenhum sorteio";
}
?>
<p>

	<div class="d_table">
		<table class="table hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Promover vencedor</th>
				</tr>
			</thead>
<?php
	include '../conexao/conexao.php';
	$sql = mysqli_query($conn, "SELECT * FROM cadastro");
 	while($user = mysqli_fetch_assoc($sql)) {
?>
			<tbody>
				<tr>
					<th><?php echo $user['id']; ?></th>
					<th><?php echo $user['nome']; ?></th>
					<th><?php echo $user['email']; ?></th>
					<th><a
						href="vencedor.php?id=<?php echo $user['id']; ?>"><button type="button">Vencedor
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></button></a></th>
				</tr>
			</tbody>
				<?php } ?>
		</table>
	</div>


</body>
</html>
