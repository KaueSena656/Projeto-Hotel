<?php
include '../conexao/conexao.php';
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$inReserva = $_POST['inreserva'];
	$fimReserva = $_POST['fimreserva'];
 	$adultos = $_POST['adultos'];
	$criancas = $_POST['criancas'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$valor = $_POST['valor'];

	$insert = "INSERT INTO reserva(nome, cpf, in_reserva, fim_reserva, adultos, crianca, email,	senha, valor) VALUES ('$nome', '$cpf', '$inReserva', '$fimReserva', '$adultos', '$criancas', '$email',  '$senha', '$valor')";
	$query = mysqli_query($conn, $insert);
	echo "Reserva concluída";
	header("Location: ../index.html");
?>