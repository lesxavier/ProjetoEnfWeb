<?php session_start('login');
header("Content-Type: text/html;  charset=ISO-8859-1",true);?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Projeto Nightingale</title>
    <link rel="icon shortcut" href="img/icon.png">
    <meta name="viewport" content="width-device-width,initial-scale=1"/>
    <script src="dist/sweetalert.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    <?php include "php/vcookie.php";?> <!--Verifica coockies e os chama-->
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/xtailo.css">
</head>
<body>
<!--CABEÇALHO-->
<div class="row head1">
    <div class="col-md-1"></div>
    <div class="col-md-7 logo"></div>
    <div class="col-md-4 name">
        <?php echo "<h3 class='name'>$_SESSION[name]</h3>" ?>
        <h6><a href="#">Alterar Dados</a> - <a href="php/logout.php">Sair</a></h6>
    </div>
</div>
<div class="row head2">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <ul class="nav-custom">
            <li><button class="btn btn-info selected">Início</button></li>
            <li><button class="btn btn-info" onclick="location.href='consulta_pacientes.php'">Pacientes</button></li>
            <li><button class="btn btn-info">Nova Evolução</button></li>
            <li><button class="btn btn-info">Gerar Relatório</button> </li>
            <li><button class="btn btn-info">Administração</button> </li>
        </ul>
    </div>
    <div class="col-md-2"></div>
</div>

<!--CORPO-->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="titulo">Instruções de Uso do Sistema</h3>

            <p>HELLO</p>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<!--RODAPÉ-->
<div class="row modal-footer navbar-fixed-bottom">
    Projeto Nightingale, desenvolvido por alunos da UFRJ.
</div>
</body>
</html>
