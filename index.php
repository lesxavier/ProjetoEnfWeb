<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta name="Projeto Nightingale"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Projeto Nightingale</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="img/icon.png">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
		<script src="dist/sweetalert.min.js"></script>
		<link rel="stylesheet" href="dist/sweetalert.css" type="text/css">
		<script src="dist/sweetalert-dev.js"></script>
		<?php
			session_start('erros');
			if(isset($_SESSION['erros']['erro1']) && $_SESSION['erros']['erro1'] == 1){
				?>
				<script>
					setTimeout(function(){
						swal({
							title: "Erro",
							text: "Usuário ou Senha incorretos, tente novamente.",
							type: "error",
							allowOusideClick: true,
							confirmButtonColor: "#0029AA"
						});
					},1000);
				</script>
				<?php
				$_SESSION['erros']['erro1'] = 0;
			}
			elseif(isset($_SESSION['logout'])){
				unset($_SESSION['logout']);
				?>
				<script>
					setTimeout(function(){
						swal({
							title: 'Feito!',
							text: 'Logout feito com sucesso.',
							type: 'success',
							allowOusideClick: true,
							confirmButtonColor: '#0029AA'
						});
					},1000);
				</script>
				<?php
			}
		?>
	</head>
	<body>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<!--Cabeçalho-->
	<div class="container-fluid blue header">
		<div class="row-fluid head1">
			<div class="span1"></div>
			<div class="span5 logo"></div>
			<div class="span6">
				<form method="post" class="form-login form-inline" action="php/login.php">
					<input id="user" name="user" type="text">
					<input id="pswd" name="pswd" type="password">
					<input type="submit" class="button btn-primary" title="Entrar">
				</form>
			</div>
		</div>
		<div class="row-fluid softblue">
			<div class="span12"></div>
		</div>
	</div>

	<!--Corpo-->
	<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2"></div>
		<div class="span8">
			<h3 style="color: #006dcc">Instruções de Uso do Sistema</h3>
			<br>
			<h4>Acesso ao Sistema</h4>
			<p>Para acessar o sistema, utilize seu CPF, ou Nº de Passaporte para estrangeiros, e a senha definida. Em seguida clique em "Enviar".</p>
			<br>
			<h4>Primeiro Acesso:</h4>
			<p>Para o primeiro acesso ao sistema, você deve fazer a solicitação a um administrador. Caso seja necessário, você pode soliciar acesso clicando <a href="contato.html">aqui</a>. </p>
			<br>
			<h4>Recuperar Senha</h4>
			<p>Caso tenha esquecido sua senha e/ou deseja modifica-la, basta clicar <a href="mudasenha.html">aqui</a>.</p>
			<br>
			<h4>Mudança de E-mail</h4>
			<p>Caso seu e-mail cadastrado esteja incorreto, ou você não tenha mais acesso ao este e-mail, você deve entrar em contato com um administrador. Você pode fazer isso clicando <a href="contato.html">aqui</a>.</p>

		</div>
		<div class="span2"></div>
	</div>
	</div>

	<!--Rodapé-->
	<div class="container-fluid footer navbar-fixed-bottom">
	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span11">Projeto Nightingale, desenvolvido por alunos da UFRJ.</div>
	</div>
	</div>
	</body>
</html>
