<?php
/**
 * Created by PhpStorm.
 * User: LuizEduardo
 * Date: 09/09/2016
 * Time: 17:34
 */

/**TODO
 * Verificar se paciente não existe (como? CPF)
 */

include "connection.php";

$name = mysqli_real_escape_string($connection,$_POST['name']);
$cod = mysqli_real_escape_string($connection,$_POST['cpf']);
$bday = $_POST['birth'];
$zip = mysqli_real_escape_string($connection,$_POST['endereco']);
$phone = mysqli_real_escape_string($connection,$_POST['phone']);

$query = "INSERT INTO pacientes (name,cpf,birth,phone,zip)
          VALUES ('$name','$cod','$bday','$phone','$zip')";

echo $query;
if(mysqli_query($connection,$query)){
    header("Location: consulta_pacientes.php");
}
else{
    print(mysqli_errno($connection));
}
mysqli_close($connection);