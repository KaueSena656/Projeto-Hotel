# Projeto-Hotel
Nome do hotel: Hotel jardim florescente.<br>
O projeto foi criado na versão 7 do php e css 3.<br>
As transações monetárias não estão inclusas no cadastro de reserva, como o projeto é simples, o cliente faz sua reserva e digita o próprio valor para não ocorrer problemas técnicos.
<br>
O projeto está divido em três categorias:<br>
1 - Gerente<br>
2 - Administrador<br>
3 - Cliente<br>

<br>
1 - Gerente -> Administra todo o sistema, pode fazer cadastro de administradores e promover <strong>SORTEIOS</strong> de reservas ou outros atributos para os clientes, para acessar o painel do gerente as informações requeridas são: email e senha, ambos são únicos e de acesso restrito, apenas o gerente pode acessar. <br>
Email: gerentemario111@gmail.com<br>
Senha: mario123<br>
<br>

2 - Administradores -> Fazem cadastro de clientes com novas reservas no hotel, apenas os administradores podem apagar reservas feitas por clientes, o administrador deve excluir a reserva quando chegar no período previsto.<br>
<br>

3 - Clientes - > Os clientes se subdividem em duas categorias: CLIENTE RESERVISTA e USUÁRIO.<br>
Cliente reservista: é o cliente que faz a reserva pelo site ou pelo contato de agendamento com administradores.
Cliente usuário: são clientes que se cadastram no site para concorrer a brindes, como: reservas gratuitas e viagens, <strong>além de serem notificados quando ocorre promoção</strong>(Foi desenvolvida apenas visualmente, não ocorre notificações).<br><br>

<strong>FUNÇÕES ADICIONAIS</strong>
<br>
Sorteio de usuários cadastrados no site.
Ao gerente sortear um usuário é enviado uma mensagem ao cliente sorteado.
<br>
<br>
<strong>COMO ACESSAR AS PÁGINAS?</strong><br>
Acesso do gerente: gerente\verifica.php<br>
Email: gerentemario111@gmail.com<br>
Senha: mario123<br><br>

Acesso do administrador: administrador\login_adm.php<br>
O login do administrador dependerá das informações que o gerente cadastrou no site<br><br>

Como fazer/visualizar a reserva?<br>
Como fazer a reserva: Cliente/reserva.php<br>
Como visualizar a reserva: Cliente/verifica_reserva.php<br><br>

Como fazer o cadastro/login para concorrer a sorteios?<br>
Acesso: Cliente/cadastrar.php<br>
login: Cliente/login_cliente.php
