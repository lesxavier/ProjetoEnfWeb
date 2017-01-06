<?php
    include "connection.php";
    ob_start();
    $time = date("Y-m-d h:i:sa");
    $query = "UPDATE 'cadastros' SET 'last_login' =.CURRENT_DATE ".$time."WHERE 'cadastro'.'user' =".$_COOKIE['user'];
    mysqli_query($connection,$query);

    setcookie('user','',time()-3600);
    setcookie('name','',time()-3600);

    session_start('erros');
    $_SESSION['logout'] = 1;
    header("Location: ../index.php");
?>