<?php include_once('../app/varsConfig.php'); ?>
<?php include_once('../app/varsLayout.php'); ?>
<?php include_once('../app/externalItens.php'); ?>

<?php session_start(); if (isset($_SESSION['usuario'])) { header("Location: ./dashboard/"); exit(); } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin | Shop Geek4Love</title>
	<link rel="stylesheet" type="text/css" href="../css/adminLogin.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<center>
					<div class="login">
						<form method="POST" action="../app/php/loginAdmin.php">
							<h3>Faça Login</h3>
							<p>Entre com usuário e senha para acessar o dashboard de admin</p>
							<input required placeholder="Insira aqui o seu usuário" type="usuario" name="usuario"><br>
							<input required placeholder="E a sua senha" type="password" name="senha"><br>
							<button>entrar</button>
							<?php if (!empty($_REQUEST['login'])) { echo '<p class="login_error">Login e/ou senha incorretos!</p>'; } ?>
						</form>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>
</html>