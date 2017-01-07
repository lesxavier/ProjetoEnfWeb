<?php
/**
 * Created by PhpStorm.
 * User: LuizEduardo
 * Date: 07/01/2017
 * Time: 02:48
 */
if(!empty($_GET['nome'])) {
    include "connection.php";
    $query="SELECT nome,cod FROM pacientes WHERE nome LIKE '$_GET[nome]%' OR cod LIKE '$_GET[nome]%'";
    $resultado=mysqli_query($connection,$query) or die (mysql_error());

    $linhas=mysqli_num_rows($resultado);

    if($linhas>0){
        while($paciente=mysqli_fetch_array($resultado)) {
            echo "<a href='perfil_paciente.php?".$paciente['cod']."'>".$paciente['nome']."(".$paciente['cod'].")</a><br>";
        }
    }
    else {
        echo "Nenhum registro encontrado.";
    }
}
?>