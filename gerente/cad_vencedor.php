<?php  
	include '../conexao/conexao.php';
	if (isset($_POST['enviar'])) {
		$cv = $_POST['cod_v'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$text = $_POST['descricao'];

		$insert = "INSERT INTO mensagem(cv, nome, email, texto) VALUES ('$cv', '$nome', '$email', '$text')";
		$permissao = mysqli_query($conn, $insert);
		echo "Mensagem enviada com sucesso";
		echo "<a href=painelProjeto.php>Sair</a>";
	}



?>