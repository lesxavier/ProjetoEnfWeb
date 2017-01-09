<?php
if(!isset($_SESSION)) {
    echo "<script>alert('Deu ruim')</script>";
    echo "<script type='text/javascript'>
            setTimeout(function(){
                swal({
                    title: 'Acesso Negado',
                    text: 'Faça login para continuar.',
                    type: 'error'
                });
            },2000);
            location.href='../index.html';
          </script>";
}