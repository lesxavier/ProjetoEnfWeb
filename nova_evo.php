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
    <script>
        function procura_paciente() {
            var myForm = document.getElementById('form');
            var data = new FormData(myForm);
            $.ajax({
                url: 'php/cadastra_evo.php',
                type: 'POST',
                data: data,
                cache: false,
                processData: false,
                contentType: false,
                success: function (result) {
                    alert('Oi');
                    if (result == 1) {
                        setTimeout(function(){
                            swal({
                                title: 'Enviado',
                                text: 'Evolu��o cadastrada com sucesso!',
                                type: 'success'
                            });
                        },2000);
                        $('#form').trigger('reset');
                    }
                    else if (result == 0) {
                        setTimeout(function () {
                            swal({
                                title: 'Erro',
                                text: 'Estamos tendo problemas no servidor, tente novamente mais tarde.',
                                type: 'error'
                            });
                        },2000);
                    }
                    else if(result==2) {
                        setTimeout(function () {
                            swal({
                                title: 'Paciente N�o Encontrado',
                                text: 'O c�digo de paciente fornecido n�o est� cadastrado no sistema. Verifique o c�digo, ou at� mesmo o cadaastro do paciente na aba Pacientes',
                                type: 'warning'
                            });
                        },2000);

                    }
                    else {
                        alert(result);
                    }
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        }
    </script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/xtailo.css">
</head>
<body>
<!--Cabe�alho-->
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
            <li><button class="btn btn-info">In�cio</button></li>
            <li><button class="btn btn-info" onclick="location.href='consulta_pacientes.php'">Pacientes</button></li>
            <li><button class="btn btn-info selected">Nova Evolu��o</button></li>
            <li><button class="btn btn-info">Gerar Relat�rio</button> </li>
            <li><button class="btn btn-info">Administra��o</button> </li>
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
            <form method="post" id="form" class="form-group" action="javascript:procura_paciente()">
            <div title="Cabe�alho" class="form-group">
                <tr>
                    <th colspan="2" class="titulo">
                        Identifica��o
                    </th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" placeholder="C�digo do Paciente" type="text" id="pac" name="pac" required>
                    </th>
                    <th>
                        <input class="form-control" id="leito"  name="num" type="number" placeholder="N� do Leito" min="1" required>
                    </th>
                </tr>
            </div>
                <tr>
                    <th colspan="2" class="titulo">
                        Evolu��o
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <textarea placeholder="Observa��es Gerais" id="obs" name="obs" cols="100" rows="10" maxlength="65535"></textarea>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Posi��o" list="posicoes" id="pos" class="form-control" name="pos" required>
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
                        <input placeholder="Locomo��o" class="form-control" id="loc" name="loc" list="locomocao" required>
                        <datalist id="locomocao">
                            <option value="Deaambulando">
                            <option value="Rest ao Leito">
                            <option value="Outro" selected>
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Nivel de Consci�ncia" class="form-control" id="con" name="con" list="consc" required>
                        <datalist id="consc">
                            <option value="Orientado" selected>
                            <option value="Consciente">
                            <option value="Inconsciente">
                            <option value="Outro">
                        </datalist>
                    </th>
                    <th>
                        <input placeholder="Forma de Consci�ncia" class="form-control" name="fcon" id="fcon" list="fconsc" required>
                        <datalist id="fconsc">
                            <option value="Verbalizando" selected>
                            <option value="Amig�vel">
                            <option value="Agitado">
                            <option value="Confuso">
                            <option value="Dificuldade">
                            <option value="Outros">
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th class="titulo" colspan="2">Exame F�sico</th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Temperatura" name="tmp" id="tmp" type="number" max="100" min="0" any class="form-control" required>�C
                    </th>
                    <th>
                        <input placeholder="Estado de Temperatura" list="est_temps" id="etmp" name="etmp" class="form-control" required>
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
                    <input placeholder="Estado de Respira��o" class="form-control" id="ersp" name="ersp" list="respiracao" required>
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
                        <input placeholder="Velocidade" id='rsp' type="number" class="form-control" name="rsp" required>rpm
                    </th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control form-radio" type="radio" id="frsp" name="frsp" value="ambiente" onclick="javascript:mudaVisibilidade()" checked> Respirando ar ambiente
                    </th>
                    <th>
                        <input class="form-control form-radio" type="radio" id="oxS" name="frsp" value="oxigena��o" onclick="javascript:mudaVisibilidade()"> Em oxigena��o<br/><div id="ox" style="visibility: hidden"> <input placeholder="Oxigena��o" name="oxg" id="oxg" class="form-control" type="number" min="0" max="100" value="0"> &percnt;</div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Pulsa��o" name="pls" class="form-control" id="pls" type="number" required>bpm
                    </th>
                    <th>
                        <input placeholder="Estado de Pulso" id="epls" name="epls" list="est_pulso" class="form-control" required>
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
                    </th>
                </tr>
                <tr>
                    <th>
                    <input placeholder="PA" id="pss1" class="form-control" name="pss1" type="number" style="width: 140px">/<input placeholder="PS" name="pss2" id="pss2" type="number" class="form-control" style="width: 140px" required>mmHg
                    </th>
                    <th colspan="2">
                        <input placeholder="Estado da Press�o" list="est_pressao" class="form-control" id="epss" name="epss" required>
                        <datalist id="est_pressao">
                            <option value="Normotensa" selected/>
                            <option value="Hipertens�o"/>
                            <option value="Hipotens�o"/>
                            <option value="Convergente"/>
                            <option value="Divergente"/>
                        </datalist>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input placeholder="Estado da Pele" class="form-control" list="pele" id="ple" name="ple" required>
                        <datalist id="pele">
                            <option value="Normocoradas" selected/>
                            <option value="Hipercoradas"/>
                            <option value="Hipocoradas"/>
                            <option value="Ict�ricas"/>
                            <option value="Outros"/>
                        </datalist>
                    </th>
                    <th>
                        <input placeholder="Estado do Cabelo" list="cabelo" name="cab" class="form-control" required>
                        <datalist id="cabelo">
                            <option value="�ntegro" selected/>
                            <option value="Inflama��es"/>
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

<!--Rodap�-->
<div class="row modal-footer navbar-fixed-bottom">
    Projeto Nightingale, desenvolvido por alunos da UFRJ.
</div>
</body>
</html>


