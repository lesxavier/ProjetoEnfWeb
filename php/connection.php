<?php

$servidor = "server18.hostinger.com.br";
$user = "u556840316_root";
$senha = "nightingale";
$banco = "u556840316_proje";

$connection = mysqli_connect($servidor, $user, $senha);

if(!$connection){
    echo "Falha de Conexão";
}else{
    mysqli_set_charset('utf8');
    $db = mysqli_select_db($connection,$banco);
    if(!$db){
        echo "Erro ao conectar com base de dados!";
    }
}
?>