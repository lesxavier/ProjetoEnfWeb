<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "projenfbd";


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
