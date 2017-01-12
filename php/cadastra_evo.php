<?php session_start('login');

include "connection.php";

ob_start();

$pac    =   $_POST['pac'];

$query = "SELECT cod FROM pacientes WHERE cod='$pac'";
$result = mysqli_query($connection,$query);

if($result){
    if(mysqli_num_rows($result)== 0) {
        mysqli_close($connection);
        echo 2;
        return 2;
    }
} else {
    mysqli_close($connection);
    echo 0;
    return 0;
}

$leito  =   $_POST['num'];
$nome   =   $_SESSION['cod'];
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
est_temperatura,respiracao,rpm,pulso,bpm,pressao,paps,pele,cabelo,obs)
VALUES ('$pac','$data',".$_SESSION['cod'].",'$leito','$pos','$loc','$frsp','$oxg','$con','$fcon','$tmp','$etmp','$ersp','$rsp','$epls','$pls','$epss','$pss','$ple','$cab','$obs')";

if(mysqli_query($connection,$query)){
    mysqli_close($connection);
    echo 1;
    return 1;
}

mysqli_close($connection);
echo 0;