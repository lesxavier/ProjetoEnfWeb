<?php
    session_start('login');
    header("Content-Type: text/html;  charset=ISO-8859-1",true);
    ?>
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
    <script>
        function mudaVisibilidade(){
            if(document.getElementById('oxS').checked){
                document.getElementById('ox').style.visibility ='visible';
            }
            else {
                document.getElementById('ox').style.visibility ='hidden';
            }
        }
    </script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/xtailo.css">
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
            <li><button class="btn btn-info">Início</button></li>
            <li><button class="btn btn-info" onclick="location.href='consulta_pacientes.php'">Pacientes</button></li>
            <li><button class="btn btn-info selected">Nova Evolução</button></li>
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
        <div class="col-md-8">
            <table class="table bordeless">
            <form method="post" class="form-group" action="php/cadastra_evo.php?">
            <div title="Cabeçalho" class="form-group">
                <tr>
                    <th colspan="2" class="titulo">
                        Identificação
                    </th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" placeholder="Código do Paciente" type="text" id="cod_pac">
                    </th>
                    <th>
                        <input class="form-control" id="leito"  name="num" type="number" placeholder="Nº do Leito">
                    </th>
                </tr>
            </div>
                <tr>
                    <th colspan="2" class="titulo">
                        Evolução
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <textarea placeholder="Observações Gerais" id="obs" name="obs" cols="100" rows="10"></textarea>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Posição" list="posicoes" id="pos" class="form-control" name="pos">
                        <datalist id="posicoes">
                            <option value="Dec Dorsal">
                            <option value="Fowler">
                            <option value="Dec Lat Dir">
                            <option value="Dec Lat Esq">
                            <option value="Dec Ventral">
                            <option value="Outro" selected>
                        </datalist>
                    </th>
                    <th>
                        <input placeholder="Locomoção" class="form-control" id="loc" name="loc" list="locomocao">
                        <datalist id="locomocao">
                            <option value="Deaambulando">
                            <option value="Rest ao Leito">
                            <option value="Outro" selected>
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Nivel de Consciência" class="form-control" id="con" name="con" list="consc">
                        <datalist id="consc">
                            <option value="Orientado" selected>
                            <option value="Consciente">
                            <option value="Inconsciente">
                            <option value="Outro">
                        </datalist>
                    </th>
                    <th>
                        <input placeholder="Forma de Consciência" class="form-control" name="fcon" id="fcon" list="fconsc">
                        <datalist id="fconsc">
                            <option value="Verbalizando" selected>
                            <option value="Amigável">
                            <option value="Agitado">
                            <option value="Confuso">
                            <option value="Dificuldade">
                            <option value="Outros">
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th class="titulo" colspan="2">Exame Físico</th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Temperatura" name="tmp" id="tmp" type="number" max="100" min="0" class="form-control">ºC
                    </th>
                    <th>
                        <input placeholder="Estado de Temperatura" list="est_temps" id="etmp" name="etmp" class="form-control">
                        <datalist id="est_temps">
                            <option value="Normotermia" selected>
                            <option value="Afebril">
                            <option value="Febril">
                            <option value="Hipertermia">
                            <option value="Hiperpirexia">
                            <option value="Hipotermia">
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th>
                    <input placeholder="Estado de Respiração" class="form-control" id="ersp" name="ersp" list="respiracao">
                    <datalist id="respiracao">
                        <option value="Eupneia">
                        <option value="Taquipneia">
                        <option value="Bradipneia"/>
                        <option value="Apneia"/>
                        <option value="Hiperpneia"/>
                        <option value="Dispneia"/>
                        <option value="Outro"/>
                    </datalist>
                    </th>
                    <th>
                        <input placeholder="Velocidade" id='rsp' type="number" class="form-control" name="rsp">rpm
                    </th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control form-radio" type="radio" id="frsp" name="frsp" value="ambiente" onclick="javascript:mudaVisibilidade()"> Respirando ar ambiente
                    </th>
                    <th>
                        <input class="form-control form-radio" type="radio" id="oxS" name="frsp" value="oxigenação" onclick="javascript:mudaVisibilidade()"> Em oxigenação<br/><div id="ox" style="visibility: hidden"> <input placeholder="Oxigenação" name="oxg" id="oxg" class="form-control" type="number" min="0" max="100"> &percnt;</div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Pulsação" name="pls" class="form-control" id="pls" type="number">bpm
                    </th>
                    <th>
                        <input placeholder="Estado de Pulso" id="epls" name="epls" list="est_pulso" class="form-control">
                        <datalist id="est_pulso">
                            <option value="Normocárdico" selected />
                            <option value="Rítmico"/>
                            <option value="Arrítmico"/>
                            <option value="Dicrótico"/>
                            <option value="Taquisfigmia"/>
                            <option value="Bradisfigmia"/>
                            <option value="Taquicardia"/>
                            <option value="Bradicardia"/>
                            <option value="Filiforme/Débil"/>
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th>
                    <input placeholder="PA" id="pss1" class="form-control" name="pss1" type="number" style="width: 140px">/<input placeholder="PS" name="pss2" id="pss2" type="number" class="form-control" style="width: 140px">mmHg
                    </th>
                    <th colspan="2">
                        <input placeholder="Estado da Pressão" list="est_pressao" class="form-control" id="epss" name="epss">
                        <datalist id="est_pressao">
                            <option value="Normotensa" selected/>
                            <option value="Hipertensão"/>
                            <option value="Hipotensão"/>
                            <option value="Convergente"/>
                            <option value="Divergente"/>
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Estado da Pele" class="form-control" list="pele" id="ple" name="ple">
                        <datalist id="pele">
                            <option value="Normocoradas" selected/>
                            <option value="Hipercoradas"/>
                            <option value="Hipocoradas"/>
                            <option value="Ictéricas"/>
                            <option value="Outros"/>
                        </datalist>
                    </th>
                    <th>
                        <input placeholder="Estado do Cabelo" list="cabelo" name="cab" class="form-control">
                        <datalist id="cabelo">
                            <option value="Íntegro" selected/>
                            <option value="Inflamações"/>
                            <option value="Pediculose"/>
                            <option value="Sujidade"/>
                            <option value="Alopecia"/>
                            <option value="Outro"/>
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" class="form-control btn-primary">
                    </th>
                </tr>
            </div>

        </form>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<!--Rodapé-->
<div class="row modal-footer navbar-fixed-bottom">
    Projeto Nightingale, desenvolvido por alunos da UFRJ.
</div>
</body>
</html>


