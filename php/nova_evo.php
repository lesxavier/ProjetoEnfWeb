<?php
    include "vcookie.php";
    header("Content-Type: text/html;  charset=ISO-8859-1",true);
    ?>
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
</head>
<body>
<?php
include "vcookie.php";
?>
<!--Cabe�alho-->
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
                <li><button class="btn2 btn-custom sharp" ONCLICK="window.location.href = 'home.php">In�cio</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = '../consulta_pacientes.php'">Pacientes</button></li>
                <li><button class="btn2 btn-custom sharp active disabled" onclick="window.location.href = 'nova_evo.php'">Nova Evolu��o</button></li>
                <li><button class="btn2 btn-custom sharp" onclick="window.location.href = '#'">Gerar Relat�rio</button></li>
            </ul>
        </div>
    </div>
</div>

<!--Corpo-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span1"></div>
        <div class="span10">
            <form method="post" class="form-group" action="cadastra_evo.php?cod=<?php echo $_GET["cod"];?>">
            <div title="Cabe�alho" class="form-group">
                <label for="number">N� do Leito: </label>
                <input class="form-control" id="leito"  name="num" type="number">
            </div>
            <div title="Evolu��o" class="form-group">
                <label>Observa��es Gerais: <textarea id="obs" name="obs" cols="100" rows="10"></textarea></label>
                <label>Posi��o: <input list="posicoes" id="pos" class="form-control" name="pos"></label>
                <datalist id="posicoes">
                    <option value="Dec Dorsal">
                    <option value="Fowler">
                    <option value="Dec Lat Dir">
                    <option value="Dec Lat Esq">
                    <option value="Dec Ventral">
                    <option value="Outro" selected>
                </datalist>
                <label>Modo de Locomo��o: <input class="form-control" id="loc" name="loc" list="locomocao"></label>
                <datalist id="locomocao">
                    <option value="Deaambulando">
                    <option value="Rest ao Leito">
                    <option value="Outro" selected>
                </datalist>
                <label>N�vel de Consci�ncia: <input class="form-control" id="con" name="con" list="consc"></label>
                <datalist id="consc">
                    <option value="Orientado" selected>
                    <option value="Consciente">
                    <option value="Inconsciente">
                    <option value="Outro">
                </datalist>
                <label>Forma de Consci�ncia: <input class="form-control" name="fcon" id="fcon" list="fconsc"></label>
                <datalist id="fconsc">
                    <option value="Verbalizando" selected>
                    <option value="Amig�vel">
                    <option value="Agitado">
                    <option value="Confuso">
                    <option value="Dificuldade">
                    <option value="Outros">
                </datalist>
            </div>
            <div title="Exame F�sico" class="form-group">
                <div title="Temperatura" class="form-group">
                    <label>Temperatura: <input name="tmp" id="tmp" type="number" class="form-control" max="100" min="0">�C</label>
                    <input list="est_temps" id="etmp" name="etmp" class="form-control">
                    <datalist id="est_temps">
                        <option value="Normotermia" selected>
                        <option value="Afebril">
                        <option value="Febril">
                        <option value="Hipertermia">
                        <option value="Hiperpirexia">
                        <option value="Hipotermia">
                    </datalist>
                </div>
                <div title="Respira��o" class="form-group">
                    <label>Respira��o: <input class="form-control" id="ersp" name="ersp" list="respiracao"></label>
                    <datalist id="respiracao">
                        <option value="Eupneia">
                        <option value="Taquipneia">
                        <option value="Bradipneia"/>
                        <option value="Apneia"/>
                        <option value="Hiperpneia"/>
                        <option value="Dispneia"/>
                        <option value="Outro"/>
                    </datalist>
                    <label>Respira��o: <input id='rsp' type="number" class="form-control" name="rsp">rpm</label>
                    <label>Forma:
                        <input class="form-control" type="radio" id="frsp" name="frsp" value="ambiente"> Respirando ar ambiente
                        <input class="form-control" type="radio" id="frsp" name="frsp" value="oxigena��o"> Em oxigena��o
                    </label>
                    <label>Oxigena��o a <input name="oxg" id="oxg" class="form-control" type="number" min="0" max="100"> &percnt; </label>
                    <!--TODO: FAZER O CAMPO OXIGENA��O A DESAPARECER CASO DESNECESS�RIO-->
                </div>
                <div title="Pulso" class="form-group">
                    <label>Pulsa��o: <input name="pls" class="form-control" id="pls" type="number">bpm</label>
                    <input id="epls" name="epls" list="est_pulso" class="form-control">
                    <datalist id="est_pulso">
                        <option value="Normoc�rdico" selected />
                        <option value="R�tmico"/>
                        <option value="Arr�tmico"/>
                        <option value="Dicr�tico"/>
                        <option value="Taquisfigmia"/>
                        <option value="Bradisfigmia"/>
                        <option value="Taquicardia"/>
                        <option value="Bradicardia"/>
                        <option value="Filiforme/D�bil"/>
                    </datalist>
                </div>
                <div title="Press�o" class="form-group">
                    <label>Press�o: <input id="pss1" class="form-control" name="pss1" type="number">/<input name="pss2" id="pss2" type="number">mmHg</label>
                    <input list="est_pressao" class="form-control" id="epss" name="epss">
                    <datalist id="est_pressao">
                        <option value="Normotensa" selected/>
                        <option value="Hipertens�o"/>
                        <option value="Hipotens�o"/>
                        <option value="Convergente"/>
                        <option value="Divergente"/>
                    </datalist>

                </div>
                <div title="Pele e Mucosa" class="form-group">
                    <label>Pele: <input class="form-control" list="pele" id="ple" name="ple"></label>
                    <datalist id="pele">
                        <option value="Normocoradas" selected/>
                        <option value="Hipercoradas"/>
                        <option value="Hipocoradas"/>
                        <option value="Ict�ricas"/>
                        <option value="Outros"/>
                    </datalist>
                </div>
                <div title="Couro Cabeludo" id="cab" class="form-group">
                    <label>Cabelo: <input list="cabelo" name="cab" class="form-control"></label>
                    <datalist id="cabelo">
                        <option value="�ntegro" selected/>
                        <option value="Inflama��es"/>
                        <option value="Pediculose"/>
                        <option value="Sujidade"/>
                        <option value="Alopecia"/>
                        <option value="Outro"/>
                    </datalist>
                </div>
            </div>
            <input type="submit" class="form-control">
        </form>
        </div>
        <div class="span1"></div>
    </div>
</div>

<!--Rodap�-->
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

