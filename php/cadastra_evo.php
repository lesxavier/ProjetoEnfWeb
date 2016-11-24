<?php

include "connection.php";

ob_start();

$leito  =   $_POST['num'];
$nome   =   $_COOKIE['user'];
$pac    =   $_GET['cod'];
$data   =   date("Y-m-d h:i:s");
$obs    =   $_POST['obs'];
$pos    =   $_POST['pos'];
$loc    =   $_POST['loc'];
$con    =   $_POST['con'];
$fcon   =   $_POST['fcon'];
$tmp    =   $_POST['tmp'];
$etmp   =   $_POST['etmp'];
$rsp    =   $_POST['rsp'];
$ersp   =   $_POST['ersp'];
$frsp   =   $_POST['frsp'];
$oxg    =   $_POST['oxg'];
$pls    =   $_POST['pls'];
$epls   =   $_POST['epls'];
$pss    =   $_POST['pss1']."/".$_POST['pss2'];
$epss   =   $_POST['epss'];
$ple    =   $_POST['ple'];
$cab    =   $_POST['cab'];

$query = "INSERT INTO evolucoes (paciente,horario,user,leito,posicao,modo_loc,forma_resp,oxigenacao,nivel_consc,forma_consc,temperatura,
est_temperatura,respiracao,rpm,pulso,bpm,pressao,paps,pele,cabelo)
VALUES ('$pac','$data',".$_COOKIE['user'].",'$leito','$pos','$loc','$frsp','$oxg','$con','$fcon','$tmp','$etmp','$ersp','$rsp','$epls','$pls','$epss','$pss','$ple','$cab')";

if(mysqli_query($connection,$query)){
    echo "<meta charset='UTF-8'>
           <script type='text/javascript'>
                alert('Evolução Adicionada com Sucesso!');
                location.href = 'home.php';
          </script>";
} else {
    print(mysqli_error($connection));
}
mysqli_close($connection);
