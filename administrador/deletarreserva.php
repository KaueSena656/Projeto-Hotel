<?php
include '../conexao/conexao.php';



if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = mysqli_query($conn, "DELETE FROM reserva WHERE id = {$id}") or die(mysqli_error($conn));

	header("location: tabela.php");
}
?>

