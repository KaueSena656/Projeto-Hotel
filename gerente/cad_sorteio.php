<?php 
  include '../conexao/conexao.php';

  $nomeS = $_POST['nome'];
  $premio = $_POST['premio'];
  $descricao = $_POST['descricao'];
  $dataS = $_POST['datef'];

  $insert = "INSERT INTO sorteio(nome_s, premio, descricao, data) VALUES ('$nomeS', '$premio', '$descricao', '$dataS')";
  $sql = mysqli_query($conn, $insert);
  // header("Location: cad_sorteio.html");
  echo "Cadastrado";
?>