<?php session_start('login');
    include "connection.php";

    $user = mysqli_real_escape_string($connection,$_POST['user']);
    $psswd = mysqli_real_escape_string($connection,$_POST['pswd']);

    $query = "SELECT * FROM cadastros WHERE user ='$user' AND psswd = MD5('$psswd')";
    $result = mysqli_query($connection,$query) or die;

    if ($result){
        $user = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0) {
            //SESSION guarda coockies do usu�rio no servidor. O usu�rio ficar� 2h logado, ou at� que d� logout.
            $_SESSION['name'] = $user['name'];
            $_SESSION['nvl'] = $user['nvl'];
            $_SESSION['cod'] = $user['user'];
            $_SESSION['teste'] = 'testando...';
            setcookie("teste",'testando');
            $last = new DateTime($user['last_login']);
            $_SESSION['last_login'] = $last->format('d/m/Y H:i');
            $query = "UPDATE cadastros SET last_login= NOW() WHERE user =".$user['user'];
            mysqli_query($connection,$query) or die;

            echo 1;
            session_write_close();
        }
        else {
            echo 0;
        }

    }
    else{
        echo 2;
    }
mysqli_close($connection);
?>