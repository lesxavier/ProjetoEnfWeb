<?php header("Content-Type: text/html;  charset=ISO-8859-1",true) ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="Projeto Nightingale"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Projeto Nightingale</title>
    <script src="../js/bootstrap.js"></script>
    <link rel="shortcut icon" href="../img/icon.png">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/pesdim.js"></script>
    <script>
        function pesquisa(nome){
            url= "busca_nome.php?nome="+nome;
            ajax(url);
        }
    </script>
    <script>
        function cansei() {
            controller.getElementsByClassName('hand-cursor').style.cursor = "pointer";
        }
    </script>
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
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href='home.php'">Início</button></li>
                <li><button class="btn2 btn-custom sharp active disabled">Pacientes</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = 'nova_evo.php'">Nova Evolução</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = '#'">Gerar Relatório</button></li>
            </ul>
        </div>
    </div>
</div>

<!--Corpo-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3"></div>
        <div class="span6" style="text-align: center;">
            <table class="table table-bordered table-responsive mytable">
                <tr>
                    <th colspan="2" style="text-align: center">
                        <span class="glyphicon glyphicon-search"><input style="width: 500px" type="text" name="nome" class="form-control" onkeypress="pesquisa(this.value)" autocomplete="off"></span>
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
        <div class="span3"></div>
    </div>
    <div class="row-fluid">
        <div class="span3"></div>
        <div class="span6">
            <table class="table table-responsive table-hover table-bordered">
                <thead>
                <tr class="info">
                    <th style="text-align: center" >Código</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <?php
                ob_start();
                include "connection.php";

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
                <tr role="button" onclick="window.location.href = '../html/form.html'"><th colspan="2" style="text-align: center">Incluir Novo</th></tr>
            </table>
        </div>
        <div class="span3"></div>
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