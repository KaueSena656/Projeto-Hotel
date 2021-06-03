<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Gerente</title>
        
        <link rel="stylesheet" href="painelProjeto.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;700&display=swap" rel="stylesheet">



    </head>
    <body>
        <nav>
            <div class="info">
                <div class="logo">
                    <img src="LogoJF.png"> 
                </div>
                <h1>DASHBOARD</h1>
                <p>Controle financeiro</p>
            </div>
            <div class="user">
                <div class="aling">
                    <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle2-on" viewBox="0 0 16 16">
                    <path d="M7 5H3a3 3 0 0 0 0 6h4a4.995 4.995 0 0 1-.584-1H3a2 2 0 1 1 0-4h3.416c.156-.357.352-.692.584-1z"/>
                    <path d="M16 8A5 5 0 1 1 6 8a5 5 0 0 1 10 0z"/>
                    <p id="online">online</p>
                    </svg>
                <div class="alt">
                    <div class="gerente">
                        <img src="foto_gerente.jpg">
                    </div>
                    <a href="verifica.php">Sair</a>
                </div>
                </div>
            </div>
        </nav>
        <hr>
        <!-- Menu lateral -->
        <div class="menu-lateral">
            <div class="elementos">
            <!-- Home -->
            <a href="#"><svg class="elemento-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg></a>
            <!-- Administradores -->
            <a href="listar_adm.php"><svg class="elemento-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg></a>
            <!-- Sorteios -->
            <a href="cad_sorteio.html"><svg class="elemento-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                </svg></a>
            <!-- Relatório -->
            <a href="relatorio.php"><svg class="elemento-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                </svg></a>
            <!-- Sair -->
            <a href="verifica.php"><svg class="elemento-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg></a>
            </div>
        </div>
        
            <div class="container">
                <div class="box">
                    <h2>PAINEL</h2>
                    <div class="informacoes">
                        <div class="info-1">
                          <!-- Hoje -->
                          <svg class="info-11" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                          </svg>
                          <p>Hoje</p>
                          <p id="valor">R$ 1.500</p>
                          <div class="loader"></div>
                        </div>

                        <div class="info-2">
                            <svg class="info-11" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                              </svg>
                              <p>Cartões</p>
                              <p id="valor">R$ 1.500</p>
                              <div class="loader"></div>
                        </div>
                            
                        <div class="info-3">
                            <svg class="info-11" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dock" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 5H1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5zm0-1H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v1zm1-1a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3z"/>
                                <path d="M3 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                              </svg>
                              <p>Banco</p>
                              <p id="valor">R$ 1.500</p>
                              <div class="loader"></div>
                        </div>

                        <div class="info-4">
                            <svg class="info-11" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                              </svg>
                              <p>Tranferência</p>
                              <p id="valor">R$ 1.500</p>
                              <div class="loader"></div>
                        </div>
                        
                        <div class="info-5">
    <?php include '../conexao/conexao.php';
           $resultado = mysqli_query($conn, "SELECT SUM(valor) FROM reserva");
           $linhas = mysqli_num_rows($resultado);

           while ($linhas = mysqli_fetch_array($resultado)) {
            
           
          ?>
                            <svg class="info-11" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                              </svg>
                              <p>Total</p>

                              <p id="valor"><?php  echo 'R$ '.$linhas['SUM(valor)'].',00<br>'; } ?></p>
                              <div class="loader"></div>
                        </div>
                    </div>
                </div>
                <!-- Div - animada -->
                <div class="dados">
                    <h2>Meus dados</h2>
                  <?php include '../conexao/conexao.php';
                      $select= mysqli_query($conn, "SELECT * FROM gerente");
                      
                      $dado = mysqli_fetch_array($select);
                            echo "<p id=b1>Id<br/><p>";
                      echo "<p id=a1>".$dado['id']."</p>";
                            echo "<p id=b1>Nome<br/><p>"; 
                      echo "<p id=a2>".$dado['nome']."</p>";
                            echo "<p id=b1>CPF<br/><p>";
                      echo "<p id=a3>".$dado['cpf']."</p>";
                            echo "<p id=b1>Telefone<br/><p>";
                      echo "<p id=a4>".$dado['telefone']."</p>";
                            echo "<p id=b1>Email<br/><p>";
                      echo "<p id=a3>".$dado['email']."</p>";
                            echo "<p id=b1>Senha<br/><p>";
                      echo "<p id=a4>........</p>";
                  ?>
            </div>
          </div>
        <!-- Busca por data -->

        <div class="busca">
            <div class="topo">
                <p>Buscar clientes</p>
                <form method="POST" action="">
                <input type="date" name="data"><button type="submit" name="conferir">Buscar</button></form>
                       
            </div>
            <style type="text/css">
                .scrollbar{
                    overflow-y: scroll;
                    height: 170px;
                    width: 100%;

                }
                .scrollbar::-webkit-scrollbar{
                    width: 10px;
                    background-color: #303e4d;
                    float: right;
                }
                .scrollbar::-webkit-scrollbar-track{
                    background-color: #c3c3c3;
                }
                .scrollbar::-webkit-scrollbar-button{
                    background-color: #303e4d;
                }
                .scrollbar::-webkit-scrollbar-thumb{
                    background-color: #202c39;
                }
                .scrollbar::-webkit-scrollbar-thumb:hover{
                    opacity: 0.5;
                }
                .busca .rodape{
                    height: 30px;
                    width: 100%;
                    background-color: #303e4d;
                    border-bottom-left-radius: 5px;
                    border-bottom-right-radius: 5px;

                }
                .vazio{
                    padding: 10px;
                    font-size: 20px;
                    font-family: 'Poppins';
                }
                .sem_user{
                  padding: 10px;
                  font-size: 20px;
                  font-family: 'Poppins';

                }
                table{
                  width: 100%;

                }
                table thead{
                   background-color: #202c39;
                   width: 100%;
                   height: 30px;
                }
                table thead tr th{
                  color: white;
                  font-family: 'Roboto';
                  padding-top: 20px;
                  transform: translateY(-10px);
                }
                table tbody th{
                  border-bottom: 1px solid #202c39;
                }
                table tbody tr th{
                  color: black;
                  font-family: 'Poppins';
                }
            </style>
                <div class="scrollbar">
<?php 
include '../conexao/conexao.php';
if (isset($_POST['conferir'])) {
  $data = $_POST['data'];
    if (!empty($data)) {

        $sql = "SELECT * FROM reserva WHERE in_reserva = '$data'";
        $return = mysqli_query($conn, $sql);

          if (mysqli_num_rows($return) > 0) {

          ?>  

              <table>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nome</th>
                  <th>Início da reserva</th>
                  <th>Fim da reserva</th>
                  <th>Valor</th>
                </tr>
              </thead>

          <?php
              while ($cliente = mysqli_fetch_array($return)) {
          ?>
                <tbody>
                <tr>
                  <th><?php echo $cliente['id']; ?></th>
                  <th><?php echo $cliente['nome']; ?></th>
                  <th><?php echo $cliente['in_reserva']; ?></th>
                  <th><?php echo $cliente['fim_reserva']; ?></th>
                  <th><?php echo $cliente['valor']; ?></th>
                </tr>
              </tbody>
                <?php } ?>
            </table>
                
          <?php      

              // $dados = mysqli_fetch_array($return);
              // echo $dados['in_reserva'];
            // echo "Funciona até aqui";

          }else{
            echo "<p class=sem_user>Não há ninguém aqui com essa data :(";
          }
    }else{
      echo "<p class=vazio>Digite alguma data ;)</p>";
    }}
?>   

                </div>
            <div class="rodape"></div>
        </div>


    </body>
</html>