<?php
if(!isset($_SESSION['name'])) {
    echo "<script type='text/javascript'>
            setTimeout(function(){
                swal({
                    title: 'Acesso Negado',
                    text: 'Fa�a login para continuar.',
                    type: 'error'
                });
            },2000);
            location.href='index.html';
          </script>";
}