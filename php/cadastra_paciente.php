<?php
include "connection.php";

$name = mysqli_real_escape_string($connection,$_POST['nome']);
$cod = mysqli_real_escape_string($connection,$_POST['cpf']);

$query = "SELECT cod FROM pacientes WHERE cpf=$_POST[cpf]";
$result = mysqli_query($connection,$query);

if($result){
    if(mysqli_num_rows($result) > 0) {
        mysqli_close($connection);
        echo 2;
        return 2;
    }
} else {
    mysqli_close($connection);
    echo 0;
    return 0;
}


$query = "INSERT INTO pacientes (nome,cpf)
          VALUES ('$name','$cod')";


if(!mysqli_query($connection,$query)){
    print mysqli_error($connection);
    echo 0;
    return 0;
}

$query = "SELECT cod FROM pacientes WHERE cpf=$cod";

$result = mysqli_query($connection,$query);
$result = mysqli_fetch_array($result);
$result = $result['cod'];


$query= "INSERT INTO dados_complementares (cod,nome_soc,nome_mae,raca,nacionalidade,local_nasc,tel1,tel2,email,ocupacao,freq_escola,escolaridade,situacao_trab,plano_saude,nasc,sexo) VALUES ('$result','$_POST[nome_social]','$_POST[nome_mae]','$_POST[raca]','$_POST[nacionalidade]','$_POST[loc_nasc]','$_POST[tel_res]','$_POST[cel]','$_POST[email]','$_POST[ocupacao]','$_POST[escola]','$_POST[escolaridade]','$_POST[emprego]','$_POST[plano]','$_POST[nasc]','$_POST[sexo]')";


if(mysqli_query($connection,$query)){
    echo 1;
    return 1;
}
print(mysqli_error($connection));
mysqli_close($connection);
echo 0;
return 0;