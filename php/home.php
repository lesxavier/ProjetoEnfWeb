<html>
<meta charset="UTF-8">
<head>
    <title>Nightingale Project</title>
</head>
<body>
<!--TODO: VERIFICAR SE OS COOKIES ESTÃO SETADOS, CASO CONTRÁRIO AVISAR, E MANDAR PARA INDEX.HTML-->
<?php
$user = $_COOKIE['user'];
$name = $_COOKIE['name'];
if(!$user){
    echo "<script type='text/javascript'>
            alert('Faça Login Para Fazer Acesso ao Sistema');
          </script>";
    location.href = "../index.html";
}
echo "<h1>Bem-Vindo(a) $name!</h1></br>"
?>
<a href="consulta_pacientes.php"><button >Nova Evolução</button></a>
<a href="cadastra_paciente.php"><button>Novo Paciente</button></a>
<a href="logout.php"><button>Sair</button></a>
</body>
</html>
