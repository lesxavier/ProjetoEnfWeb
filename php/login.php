<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Projeto Enfermagem</title>
</head>
<body>
    <?php
        include "connection.php";

        $user = mysqli_real_escape_string($connection,$_POST['login']);
        $psswd = mysqli_real_escape_string($connection,$_POST['password']);

        $query = "SELECT * FROM cadastros WHERE user ='$user' AND psswd = MD5('$psswd')";
        $result = mysqli_query($connection,$query) or print(mysql_error());


        if ($result){
            $user = mysqli_fetch_array($result);
            if(mysqli_num_rows($result)>0) {
                setcookie('user', $user['user']);
                setcookie('name', $user['name']);
                header("Location: home.php");
            }
            else{
                echo "<script>
                        alert('Usuário e/ou Senha não conferem!');
                        window.location='../../index.html';
                      </script>";
            }
        }
        else{
            echo 'Erro ao fazer Login. Tente Novamente <a href="../../index.html">Voltar</a>';
        }
        mysqli_close($connection);
    ?>
</body>
</html>