<?php
if(!isset($_COOKIE['user'])) {
    echo "<script type='text/javascript'>
            alert('Fa�a Login Para Fazer Acesso ao Sistema');
          </script>";
    echo "<script>
            location.href = '../index.php'
          </script>";
}