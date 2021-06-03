<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "basehotel";

$conn = mysqli_connect($host, $user,  $password,  $db);
if ($conn == "") {
	echo "Erro" .$conn;
}
?>