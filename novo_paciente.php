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
        function cadastra_paciente() {
            var dat = new FormData(document.getElementById('form'));
            $.ajax({
                url: 'php/cadastra_paciente.php',
                type: 'POST',
                data: dat,
                cache: false,
                processData: false,
                contentType: false,
                success: function (result) {
                    if (result == 1) {
                        setTimeout(function(){
                            swal({
                                title: 'Enviado',
                                text: 'Paciente cadastrado com sucesso!',
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
                                title: 'Paciente Já Existente',
                                text: 'O CPF de paciente fornecido não está cadastrado no sistema. Verifique o código, ou até mesmo o cadaastro do paciente na aba Pacientes',
                                type: 'warning'
                            });
                        },2000);

                    }
                    else{
                        alert(result);
                    }
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        };
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
            <li><button class="btn btn-info" onclick="location.href = 'home.php'">Início</button></li>
            <li><button class="btn btn-info selected" onclick="location.href='consulta_pacientes.php'">Pacientes</button></li>
            <li><button class="btn btn-info" onclick="location.href = 'nova_evo.php'">Nova Evolução</button></li>
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

            <table class="table">

                <form action="javascript:cadastra_paciente()" method="post" class="form-group" id="form">

                    <tr>
                        <th colspan="3" class="titulo">
                            Identificação
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <input type="text" name="cpf" id="cpf" maxlength="12" class="form-control" placeholder="CPF">
                        </th>
                        <th>
                            <input type="text" name="nome" id="nome" maxlength="50" required class="form-control" placeholder="Nome">
                        </th>
                        <th>
                            <input type="text" id="nome_social" name="nome_social" maxlength="40" placeholder="Nome Social" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <input type="date" required id="nasc" name="nasc" class="form-control" placeholder="Data de Nascimento">
                        </th>
                        <th>
                            <input type="text" maxlength="40" name="nome_mae" id="nome_mae" required placeholder="Nome Completo da(o) Mãe(Pai)" class="form-control">
                        </th>
                        <th>
                            Sexo:
                            <input type="radio" name="sexo" id="sexo" value="M" checked>
                            <label for="sexom">M</label>
                            <input type="radio" name="sexo" id="sexo" value="F">
                            <label for="sexof">F</label>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <input list="racas" id="raca" name="raca" class="form-control" required placeholder="Cor">
                            <datalist id="racas">
                                <option value="Amarela"></option>
                                <option value="Branca"></option>
                                <option value="Indígena"></option>
                                <option value="Preta"></option>
                                <option value="Parda"></option>
                            </datalist>
                        </th>
                        <th>
                            <input class="form-control" list="nacionalidades" name="nacionalidade" placeholder="Nacionalidade">
                            <datalist id="nacionalidades">
                                <option value="Brasileiro"></option>
                                <option value="Estrangeiro"></option>
                                <option value="Naturalizado"></option>
                            </datalist>
                        </th>
                        <th>
                            <input type="text" id="loc_nasc" name="loc_nasc" maxlength="100" placeholder="Local de Nascimento" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th class="titulo" colspan="3">Dados de Contato</th>
                    </tr>
                    <tr>
                        <th><input type="text" placeholder="Telefone" maxlength="14" id="tel_res" name="tel_res" title="(DDD)1234-5678" class="form-control"></th>
                        <th>
                            <input type="text" placeholder="Celular" maxlength="14" id="cel" name="cel" title="(DDD)1234-5678" class="form-control">
                        </th>
                        <th>
                            <input type="email" maxlength="30" id="email" name="email" class="form-control" placeholder="Email">
                        </th>
                    </tr>
                    <tr>
                        <th class="titulo" colspan="3">Informações Sociodemográficas</th>
                    </tr>
                    <tr>
                        <th>
                            <input type="text" maxlength="20" id="ocupacao" placeholder="Ocupação" name="ocupacao" class="form-control">
                        </th>
                        <th>
                            Frequenta escola?
                            <input type="radio" name="escola" value="Sim" id="escola">
                            <label for="esim">Sim</label>
                            <input type="radio" name="escola" value="Não" id="escola" checked>
                            <label for="enao">Não</label>
                        </th>
                        <th>
                            <input list="escolaridade" name="escolaridade" class="form-control" placeholder="Escolaridade">
                            <datalist id="escolaridade">
                                <option value="Creche"></option>
                                <option value="Pré-Escola"></option>
                                <option value="Classe Alfabetizada"></option>
                                <option value="Ensino Fudamental Incompleto"></option>
                                <option value="Ensino Fudamental Completo"></option>
                                <option value="Ensino Médio Incompleto"></option>
                                <option value="Ensino Médio Completo"></option>
                                <option value="Ensino Superior Incompleto"></option>
                                <option value="Ensino Superior Completo"></option>
                                <option value="Nenhum"></option>
                            </datalist>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input list="trabalho" name="emprego" id="emprego" placeholder="Situação no Mercado de Trabalho" class="form-control">
                            <datalist id="trabalho">
                                <option value="Empregador"></option>
                                <option value="Assalariado"></option>
                                <option value="Autônomo"></option>
                                <option value="Aposentado/Pensionista"></option>
                                <option value="Desempregado"></option>
                                <option value="Não Trabalha"></option>
                                <option value="Outro"></option>
                            </datalist>
                        </th>
                        <th>
                            Plano de Saúde?
                            <input type="radio" name="plano" id="plano" value="Sim">
                            <label for="psim">Sim</label>
                            <input type="radio" name="plano" id="plano" value="Não" checked>
                            <label for="pnao">Não</label>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3"><input type="submit" value="Enviar" class="form-control btn-primary"></th>
                    </tr>
                </form>

            </table>

        </div>
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


