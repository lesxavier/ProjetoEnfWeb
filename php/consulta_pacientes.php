<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto Enfermagem</title>
</head>
<body>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
    </tr>
    <?php
    ob_start();
    include "connection.php";

    $query = "SELECT * FROM pacientes WHERE 1";
    $result = mysqli_query($connection,$query);

    while ($paciente = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<th><a href="nova_evo.php?cod=' .$paciente['cod'].'">'.$paciente['cod'].'</a></th>';
        echo '<th>'.$paciente['nome'].'</th>';
        echo '</tr>';
    }

    mysqli_free_result($result);
    mysqli_close($connection);
    ?>
</table>
<a href="../form.html"><button>Incluir novo paciente</button></a>
</body>
</html>