
<html>
<head>
    <meta charset="UTF-8" >
    <title>Cadastro de Paciente</title>
</head>
<body>
<?php
if(!$_COOKIE['user']){
    echo "<script type='text/javascript'>
            alert('Fa�a Login Para Fazer Acesso ao Sistema');
          </script>";
    location.href = "../index.html";
}
?>
    <form method="post" action="cadastra_evo.php?cod=<?php echo $_GET["cod"];?>">
        <fieldset title="Cabe�alho">
            <label for="number">N� do Leito: </label>
            <input id="leito"  name="num" type="number">
        </fieldset>
        <fieldset title="Evolu��o">
            <label>Observa��es Gerais: <textarea id="obs" name="obs" cols="100" rows="10"></textarea></label>
            <label>Posi��o: <input list="posicoes" id="pos" name="pos"></label>
            <datalist id="posicoes">
                <option value="Dec Dorsal">
                <option value="Fowler">
                <option value="Dec Lat Dir">
                <option value="Dec Lat Esq">
                <option value="Dec Ventral">
                <option value="Outro" selected>
            </datalist>
            <label>Modo de Locomo��o: <input id="loc" name="loc" list="locomocao"></label>
            <datalist id="locomocao">
                <option value="Deaambulando">
                <option value="Rest ao Leito">
                <option value="Outro" selected>
            </datalist>
            <label>N�vel de Consci�ncia: <input id="con" name="con" list="consc"></label>
            <datalist id="consc">
                <option value="Orientado" selected>
                <option value="Consciente">
                <option value="Inconsciente">
                <option value="Outro">
            </datalist>
            <label>Forma de Consci�ncia: <input name="fcon" id="fcon" list="fconsc"></label>
            <datalist id="fconsc">
                <option value="Verbalizando" selected>
                <option value="Amig�vel">
                <option value="Agitado">
                <option value="Confuso">
                <option value="Dificuldade">
                <option value="Outros">
            </datalist>
        </fieldset>
        <fieldset title="Exame F�sico">
            <fieldset title="Temperatura">
                <label>Temperatura: <input name="tmp" id="tmp" type="number" max="100" min="0">�C</label>
                <input list="est_temps" id="etmp" name="etmp">
                <datalist id="est_temps">
                    <option value="Normotermia" selected>
                    <option value="Afebril">
                    <option value="Febril">
                    <option value="Hipertermia">
                    <option value="Hiperpirexia">
                    <option value="Hipotermia">
                </datalist>
            </fieldset>
            <fieldset title="Respira��o">
                <label>Respira��o: <input id="ersp" name="ersp" list="respiracao"></label>
                <datalist id="respiracao">
                <option value="Eupneia">
                <option value="Taquipneia">
                <option value="Bradipneia"/>
                <option value="Apneia"/>
                <option value="Hiperpneia"/>
                <option value="Dispneia"/>
                <option value="Outro"/>
            </datalist>
                <label>Respira��o: <input id='rsp' type="number" name="rsp">rpm</label>
                <label>Forma:
                        <input type="radio" id="frsp" name="frsp" value="ambiente"> Respirando ar ambiente
                        <input type="radio" id="frsp" name="frsp" value="oxigena��o"> Em oxigena��o
                </label>
                <label>Oxigena��o a <input name="oxg" id="oxg" type="number" min="0" max="100"> &percnt; </label>
                <!--TODO: FAZER O CAMPO OXIGENA��O A DESAPARECER CASO DESNECESS�RIO-->
            </fieldset>
            <fieldset title="Pulso">
                <label>Pulsa��o: <input name="pls" id="pls" type="number">bpm</label>
                <input id="epls" name="epls" list="est_pulso">
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
            </fieldset>
            <fieldset title="Press�o">
                <label>Press�o: <input id="pss1" name="pss1" type="number">/<input name="pss2" id="pss2" type="number">mmHg</label>
                <input list="est_pressao" id="epss" name="epss">
                <datalist id="est_pressao">
                    <option value="Normotensa" selected/>
                    <option value="Hipertens�o"/>
                    <option value="Hipotens�o"/>
                    <option value="Convergente"/>
                    <option value="Divergente"/>
                </datalist>

            </fieldset>
            <fieldset title="Pele e Mucosa">
                <label>Pele: <input list="pele" id="ple" name="ple"></label>
                <datalist id="pele">
                    <option value="Normocoradas" selected/>
                    <option value="Hipercoradas"/>
                    <option value="Hipocoradas"/>
                    <option value="Ict�ricas"/>
                    <option value="Outros"/>
                </datalist>
            </fieldset>
            <fieldset title="Couro Cabeludo" id="cab">
                <label>Cabelo: <input list="cabelo" name="cab"></label>
                <datalist id="cabelo">
                    <option value="�ntegro" selected/>
                    <option value="Inflama��es"/>
                    <option value="Pediculose"/>
                    <option value="Sujidade"/>
                    <option value="Alopecia"/>
                    <option value="Outro"/>
                </datalist>
            </fieldset>
        </fieldset>
        <input type="submit">
    </form>
</body>