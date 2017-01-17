<?php

$servidor = "mysql.hostinger.com.br";
$user = "u995390527_root";
$senha = "nightr00t";
$banco = "u995390527_night";


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
