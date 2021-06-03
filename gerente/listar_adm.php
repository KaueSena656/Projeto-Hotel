<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administradores</title>

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
		.box{
			margin: 50px 5% 0 5%;
			width: 90%;
			height: 80px;
			border-bottom: 1px solid #c3c3c3;
			/*background-color: #202c39;*/
		}
		.box .btn{
			width: 120px;
			height: 40px;
			margin-top: 10px;
			background-color: #202c39;
			border-radius: 2px;
			color: white;
			font-size: 14px;
			font-family: 'Poppins', sans-serif;
			font-weight: 300;
			cursor: pointer;
			transition: 1s;
			border: none;
		}
		.box .btn-1{
			float: right;	
			width: 120px;
			height: 40px;
			margin-top: 10px;
			background-color: #202c39;
			border-radius: 2px;
			color: white;
			font-size: 14px;
			font-family: 'Poppins', sans-serif;
			font-weight: 300;
			cursor: pointer;
			transition: 1s;
			border: none;
		}
		.btn:hover{
			opacity: 0.5;
			border: 1px solid #202c39;
		}
		.btn-1:hover{
			opacity: 0.5;
			border: 1px solid #202c39;
		}
		.btn svg{
			transform: translateY(2.5px);
		}
		.btn-1 svg{
			transform: translateY(2.5px);
		}
		.list{
			top: 0;
			width: 90%;
			margin: 30px 5% 0 5%;
			overflow-y: auto;
			height: 410px;
		}
		table{
			width: 100%;
			background-color: #c3c3c3;
			border-radius: 1px;
		}
		table thead tr{
			height: 40px;
			width: 100%;
			background-color: #202c39	
		}
		table thead tr th{
			color: white;
			font-size: 14px;
			font-family: 'Poppins', sans-serif;
			font-weight: 200;
		}
		table tbody tr th{
			background-color: #7f7f7f;
			color: white;
			font-size: 14px;
			font-family: 'Poppins', sans-serif;
			font-weight: 200;
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
		<a href="#">Sair</a><div class="objeto"></div>
		<?php include '../conexao/conexao.php';
			  $sql = mysqli_query($conn, "SELECT * FROM gerente");
			  $array = mysqli_fetch_assoc($sql);
			  echo "<p id=nome>".$array['nome']."</p>";	
		?>
		
	</nav>
<div class="box">
	<a href="painelProjeto.php"><button class="btn" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
Sair</button></a>
	<a href="listar_adm.php"><button class="btn" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg>
	Atualizar</button></a>

<a href="relatorio.php"><button class="btn-1" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>
	Relatório</button></a>
<a href="cad_adm.php"><button class="btn-1" type="button" style="width: 180px; margin-right: 10px;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
	Novo administrador</button></a>
</div>
<div class="list">
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Senha</th>
				<th>Deletar</th>
			</tr>
		</thead>

<?php  include '../conexao/conexao.php';
		$sql = mysqli_query($conn, "SELECT * FROM administrador");
	    if (mysqli_num_rows($sql) > 0) {
		while ($array = mysqli_fetch_assoc($sql)) {
?>	
		<tbody>
			<tr>
				<th><?php echo $array['id']; ?></th>
				<th><?php echo $array['nome']; ?></th>
				<th><?php echo $array['cpf']; ?></th>
				<th><?php echo $array['telefone']; ?></th>
				<th><?php echo $array['email']; ?></th>
				<th><?php echo $array['senha']; ?></th>
				<th><a href="deletar_adm.php?id=<?php echo $array['id']; ?>"><button type="button">Deletar
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></button></a></th>
			</tr>
		<?php }
		}else{
		echo "";
		}?>
		</tbody>

	</table>
</div>
</body>
</html>