<?php session_start('login');
header("Content-Type: text/html;  charset=ISO-8859-1",true) ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="Projeto Nightingale"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Projeto Nightingale</title>
    <link rel="shortcut icon" href="img/icon.png">
    <script src="dist/sweetalert.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    <?php include "php/vcookie.php";?> <!--Verifica coockies e os chama-->
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/xtailo.css">
    <script src="js/pesdim.js"></script>
    <script>
        function pesquisa(nome){
            url= "php/busca_nome.php?nome="+nome;
            ajax(url);
        }
    </script> <!--Pesquisa nomes de pacientes-->
</head>
<body>
<!--Cabeçalho-->
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
            <li><button class="btn btn-info" onclick="location.href='home.php'">Início</button></li>
            <li><button class="btn btn-info selected">Pacientes</button></li>
            <li><button class="btn btn-info" onclick="location.href ='nova_evo.php'">Nova Evolução</button></li>
            <li><button class="btn btn-info">Gerar Relatório</button> </li>
            <li><button class="btn btn-info">Administração</button> </li>
        </ul>
    </div>
    <div class="col-md-2"></div>
</div>

<!--Corpo-->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align: center;">
            <table class="table table-bordered table-responsive mytable">
                <tr>
                    <th style="text-align: center">
                        <input type="text" name="nome" onkeyup="pesquisa(this.value)" autocomplete="off" class="form-control search-input" placeholder="Buscar Paciente">
                        </button>
                    </th>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <div id="pagina"></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-responsive table-hover table-bordered">
                <thead>
                <tr class="info">
                    <th style="text-align: center" >Código</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <?php
                ob_start();
                include "php/connection.php";

                $query = "SELECT * FROM pacientes WHERE 1";
                $result = mysqli_query($connection,$query);

                while ($paciente = mysqli_fetch_array($result)){
                    ?>
                    <div class="mydiv">
                    <tr role="button" class="hand-cursor" onclick="window.location.href= 'perfil_paciente.php?<?php echo $paciente['cod']?>'">
                        <th style="text-align: center" ><?php echo $paciente['cod']?></th>
                        <th><?php echo $paciente['nome']?></th>
                    </tr>
                    </div>
                    <?php
                }

                mysqli_free_result($result);
                mysqli_close($connection);
                ?>
                <tr role="button" onclick="window.location.href = 'novo_paciente.php'"><th colspan="2" style="text-align: center">Incluir Novo</th></tr>
            </table>
        </div>
        <div class="col-md-2"></div>


    </div>
</div>
<div class="row modal-footer navbar-fixed-bottom">
    Projeto Nightingale, desenvolvido por alunos da UFRJ.
</div>
</body>
</html>