<?php
if(!isset($_COOKIE['user'])) {
    echo "<script type='text/javascript'>
            alert('Faça Login Para Fazer Acesso ao Sistema');
          </script>";
    echo "<script>
            location.href = '../index.php'
          </script>";
}