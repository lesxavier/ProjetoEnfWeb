<?php

$servidor = "mysql.hostinger.com.br";
$user = "u556840316_root";
$senha = "nightingale";
$banco = "u556840316_proje";

echo $servidor.$user.$senha.$banco;

$connection = mysqli_connect($servidor, $user, $senha);



if(!$connection){
    echo "Falha de Conexão";
}else{
    $db = mysqli_select_db($connection,$banco);
    if(!$db){
        echo "Erro ao conectar com base de dados!";
    }
}
?>
