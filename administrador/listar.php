<?php
include '../conexao/conexao.php';
$sql = mysqli_query($conn, "SELECT * FROM reserva") or die(mysqli_error($conn));

?>