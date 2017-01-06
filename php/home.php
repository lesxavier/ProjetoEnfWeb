<?php header("Content-Type: text/html;  charset=ISO-8859-1",true) ?>
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="Projeto Nightingale"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Projeto Nightingale</title>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrap-responsive.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png">
    <script src="../dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <link rel="stylesheet" href="../dist/sweetalert.css" type="text/css">
</head>
<body>
<?php
    include "vcookie.php";
?>
<!--Cabeçalho-->
<div class="container-fluid blue header">
    <div class="row-fluid head1">
        <div class="span1"></div>
        <div class="span5 logo"></div>
        <div class="span6">
            <?php
                echo "<h3 class='name'>".$_COOKIE['name']."</h3>";
            ?>
            <a class="head" href="#">Alterar Dados</a> - <a class="head" href="logout.php">Sair</a>
        </div>
    </div>
    <div class="row-fluid softblue">
        <div class="span2"></div>
        <div class="span10 navbar">
            <ul class="nav">
                <li><button class="btn2 btn-custom sharp active disabled">Início</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = 'consulta_pacientes.php'">Pacientes</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = 'nova_evo.php'">Nova Evolução</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = '#'">Gerar Relatório</button></li>
            </ul>
        </div>
    </div>
</div>

<!--Corpo-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2"></div>
        <div class="span8">
            <h3 style="color: #006dcc">Bem-vindo(a) <?php echo $_COOKIE['name']?>.</h3>
            <h4>Seu Último Login:</h4>
            <p><?php echo $_COOKIE['last_login'] ?></p>
            <h4>Avisos</h4>
            <p> Caso queira alterar algum dado de seu cadastro você pode fazer isso acessando, no canto superior direito, a opção "Alterar Dados". </p>
            <p> A aba "Administração" só pode ser acessada por usuários administradores do sistema. Onde poderão </p>
            <br>
            <h4>Recuperar Senha</h4>
            <p>Caso tenha esquecido sua senha e/ou deseja modifica-la, basta clicar <a href="mudasenha.html">aqui</a>.</p>
            <br>
            <h4>Contato com Administradores:</h4>
            <p> Caso surja algum problema, ou dificuldade, durante o uso do sistema, você pode contactar um administrador clicando <a href="contato.html">aqui</a>.</p>

        </div>'
        <div class="span2"></div>
    </div>
</div>

<!--Rodapé-->
<div class="container-fluid footer navbar-fixed-bottom">
    <div class="row-fluid">
        <div class="span12" style="text-align: center">Projeto Nightingale, desenvolvido por alunos da UFRJ.</div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

