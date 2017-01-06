<html>
<head>
    <meta charset="UTF-8">
    <title>Projeto Enfermagem</title>
    <script src="../dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <link rel="stylesheet" href="../dist/sweetalert.css" type="text/css">
</head>
<body>

    <?php
        session_start('erros');
        include "connection.php";

        $user = mysqli_real_escape_string($connection,$_POST['user']);
        $psswd = mysqli_real_escape_string($connection,$_POST['pswd']);

        $query = "SELECT * FROM cadastros WHERE user ='$user' AND psswd = MD5('$psswd')";
        $result = mysqli_query($connection,$query) or print(mysql_error());


        if ($result){
            $user = mysqli_fetch_array($result);
            if(mysqli_num_rows($result)>0) {

                setcookie('user', $user['user']);
                setcookie('name', $user['name']);
                $last = new DateTime($user['last_login']);
                $last = $last->format('d/m/Y H:i');
                setcookie('last_login', $last);
                $query = "UPDATE cadastros SET last_login= NOW() WHERE user =".$user['user'];
                mysqli_query($connection,$query) or print (mysqli_error());

                header("Location: home.php");
            }
            else {
                $_SESSION['erros']['erro1'] = 1;
                header("Location: ../index.php");
            }

        }
        else{
            echo 'Erro ao fazer Login. Tente Novamente <a href="../../index.html">Voltar</a>';
        }
    mysqli_close($connection);
    ?>
</body>
</html>