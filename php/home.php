<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nightingale Project</title>
</head>
<body>
<!--TODO: VERIFICAR SE OS COOKIES EST�O SETADOS, CASO CONTR�RIO AVISAR, E MANDAR PARA INDEX.HTML-->
<?php
$user = $_COOKIE['user'];
$name = $_COOKIE['name'];
echo "<h1>Bem-Vindo(a) $name!</h1></br>"
?>
<a href="consulta_pacientes.php"><button >Nova Evolu��o</button></a>
<a href="logout.php">Sair</a>
</body>
</html>
