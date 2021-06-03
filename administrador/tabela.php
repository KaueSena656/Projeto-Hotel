
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Teko:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
    *{
      margin: 0;
      padding: 0;
      border: 0;
      outline: none;
      box-sizing: border-box;
    }
    .menu{
      width: 100%;
      height: 60px;
      background-color: #202c39;
    }
    .menu .logo{
      width: 40px;
      height: 50px;
      margin-left: 5%;
      float: left;
    }
    .logo img{
      margin-top: 10%;
      width: 100%;
      height: 90%;
    }
    .menu p{
      font-family: 'Teko', sans-serif;
      font-size: 30px;
      color:#b59e63;
      margin-left:100px;
      padding-top: 5px;
    }
    .element{
      width: 400px;
      height: 50px;
      margin:40px 5%;
    }
    .element button{
      margin-top: 7.5px;
      width: 47.5%;
      height: 36px;
      background-color: #202c39;
      border-radius: 2px;
      border: none;
      color: white;
      font-family: 'Poppins';
      cursor: pointer;
      transition: 0.5s;
      margin-left: 5px;
    }
    .element button svg{
      transform: translateY(2.5px);
    }
    button:hover{
      opacity: 0.5;
      border: 1px solid gray;
    }
    hr{
      width: 400px;
      height: 1px;
      background-color: #c3c3c3;
      float: left;
      margin:-30px 0 20px 5%;
    }
    h3{
      margin-left: 5%;
      font-family: 'Poppins';
      font-weight: 600;
      font-size: 26px;
      color: #202c39;
    }
    /* Table 1 */
    .aling{
      width: 90%;
      height: 400px;
      margin: 20px 5% 0 5%;
      overflow-y: auto;
    }
		table{
			width: 100%;
      background-color: #c3c3c3;
		}
    table thead{
      background-color: #202c39;
      text-align: center;
    }
    table thead tr th{
      color: white;
      font-family: 'Poppins';
      font-weight: 200;
      padding: 10px
    }
    table tbody{
      background-color: white;
      text-align: center;
    }
    table tbody tr th{
      font-size: 16px;
      color: black;
      font-family: 'Poppins', sans-serif;
      height: 44px;
    }
    tbody tr th a .bt-1{
      height: 36px;
      width: 150px;
      background-color: crimson;
      color: white;
      font-family: 'Poppins';
      font-weight: 200;
      border-radius: 2px;
      cursor: pointer;
      transition: 0.3s;
    }
    tbody tr th a .bt-1 svg{
      transform: translateY(3px);
    }
	</style>
</head>
<body>
  <nav class="menu">
      <div class="logo">
        <img src="LogoJF.png">
      </div>
      <p>Hotel Jardim florescente</p>
  </nav>
  <div class="element">
      <a href="painel_administrador.php"><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg> Sair</button></a>
      <a href="tabela.php"><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg> Atualizar</button></a>
  </div>
  <hr>
  <!-- table -->
  <h3>Lista de clientes</h3>
<div class="aling">
	
<table class="table">
  <thead>
     <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Inico da reserva</th>
      <th>Fim da reserva</th>
      <th>Adultos</th>
      <th>Crianças</th>
      <th>Valor</th>
      <th>Fechar</th>
    </tr>
  </thead>
   <?php 
  include '../conexao/conexao.php';
  include 'listar.php';
   while($clientes = mysqli_fetch_assoc($sql)) { ?>
  <tbody>
  <tr>
  	<th><?php echo $clientes['id'];  ?></th>
  	<th id="nome"><?php echo $clientes['nome'];  ?></th><!-- 
  	<th><?php echo $clientes['cpf'];  ?></th> -->
  	<th><?php echo $clientes['in_reserva'];  ?></th>
  	<th><?php echo $clientes['fim_reserva'];  ?></th>
  	<th><?php echo $clientes['adultos'];  ?></th>
  	<th><?php echo $clientes['crianca'];  ?></th><!-- 
  	<th><?php echo $clientes['email'];  ?></th>
  	<th><?php echo $clientes['senha'];  ?></th> -->
  	<th><?php echo $clientes['valor'];  ?></th>
    <th><a href="deletarreserva.php?id=<?php echo $clientes['id']; ?>"><button onclick="alerta();" type="button" class="bt-1">Deletar
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