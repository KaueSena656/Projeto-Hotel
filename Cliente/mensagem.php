<?php 
	include '../conexao/conexao.php';
	if (isset($_GET["id"])) {
	$id = $_GET["id"];
// id cad = id msg
	// echo $id;
	
	$sql = mysqli_query($conn, "SELECT * FROM mensagem");
	$return = mysqli_fetch_array($sql);
	// echo $return['cv'];

	if ($id != $return['cv']) {
		echo "Não há nada aqui pra você";
			header("Location: sem_mensagem.php");

	}else{
				$sql = mysqli_query($conn, "SELECT * FROM mensagem");
	 			$return = mysqli_fetch_array($sql);
	 		echo "Bem vindo ", $return['nome'], "<br>"; 
	 		echo $return['texto'];
	 	}

	}	

// Esquece
?>