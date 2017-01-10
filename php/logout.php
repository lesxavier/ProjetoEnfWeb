<?php session_start('login');
    include "connection.php";
    ob_start();
    $time = date("Y-m-d h:i:sa");
    $query = "UPDATE 'cadastros' SET 'last_login' =.CURRENT_DATE ".$time."WHERE 'cadastro'.'user' =".$_COOKIE['user'];
    mysqli_query($connection,$query);

    session_unset();
    header("Location: ../index.html");
?>