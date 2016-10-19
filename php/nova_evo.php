<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" >
    <title>Cadastro de Paciente</title>
</head>
<body>
    <form method="post" action="cadastra_evo.php?<?php echo $_GET["cod"];?>">
        <fieldset title="Cabeçalho">
            <label for="number">Nº do Leito: </label>
            <input id="number" type="number">
        </fieldset>
        <fieldset title="Evolução">
            <label>Observações Gerais: <textarea id="obs" cols="100" rows="10"></textarea></label>
            <label>Posição: <input list="posicoes" name="pos"></label>
            <datalist id="posicoes">
                <option value="Dec Dorsal">
                <option value="Fowler">
                <option value="Dec Lat Dir">
                <option value="Dec Lat Esq">
                <option value="Dec Ventral">
                <option value="Outro" selected>
            </datalist>
            <label>Modo de Locomoção: <input list="locomocao"></label>
            <datalist id="locomocao">
                <option value="Deaambulando">
                <option value="Rest ao Leito">
                <option value="Outro" selected>
            </datalist>
            <label>Nível de Consciência: <input list="consc"></label>
            <datalist id="consc">
                <option value="Orientado" selected>
                <option value="Consciente">
                <option value="Inconsciente">
                <option value="Outro">
            </datalist>
            <label>Forma de Consciência: <input list="fconsc"></label>
            <datalist id="fconsc">
                <option value="Verbalizando" selected>
                <option value="Amigável">
                <option value="Agitado">
                <option value="Confuso">
                <option value="Dificuldade">
                <option value="Outros">
            </datalist>
        </fieldset>
        <fieldset title="Exame Físico">
            <fieldset title="Temperatura">
                <label>Temperatura: <input type="number" max="100" min="0">ºC</label>
                <input list="est_temps">
                <datalist id="est_temps">
                    <option value="Normotermia" selected>
                    <option value="Afebril">
                    <option value="Febril">
                    <option value="Hipertermia">
                    <option value="Hiperpirexia">
                    <option value="Hipotermia">
                </datalist>
            </fieldset>
            <fieldset title="Respiração">
                <label>Respiração: <input list="respiracao"></label>
                <datalist id="respiracao">
                <option value="Eupneia">
                <option value="Taquipneia">
                <option value="Bradipneia"/>
                <option value="Apneia"/>
                <option value="Hiperpneia"/>
                <option value="Dispneia"/>
                <option value="Outro"/>
            </datalist>
                <label>Respiração: <input type="number">rpm</label>
                <label>Forma:
                        <input type="radio" name="fresp" value="ambiente"> Respirando ar ambiente
                        <input type="radio" name="fresp" value="oxigenação"> Em oxigenação
                </label>
                <label>Oxigenação a <input type="number" min="0" max="100"> &percnt; </label>
                <!--TODO: FAZER O CAMPO OXIGENAÇÃO A DESAPARECER CASO DESNECESSÁRIO-->
            </fieldset>
            <fieldset title="Pulso">
                <label>Pulsação: <input type="number">bpm</label>
                <input list="est_pulso">
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
            </fieldset>
            <fieldset title="Pressão">
                <label>Pressão: <input type="number">/<input type="number">mmHg</label>
                <input list="est_pressao">
                <datalist id="est_pressao">
                    <option value="Normotensa" selected/>
                    <option value="Hipertensão"/>
                    <option value="Hipotensão"/>
                    <option value="Convergente"/>
                    <option value="Divergente"/>
                </datalist>

            </fieldset>
            <fieldset title="Pele e Mucosa">
                <input list="pele">
                <datalist id="pele">
                    <option value="Normocoradas" selected/>
                    <option value="Hipercoradas"/>
                    <option value="Hipocoradas"/>
                    <option value="Ictéricas"/>
                    <option value="Outros"/>
                </datalist>
            </fieldset>
            <fieldset title="Couro Cabeludo">
                <input list="cabelo">
                <datalist id="cabelo">
                    <option value="Íntegro" selected/>
                    <option value="Inflamações"/>
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