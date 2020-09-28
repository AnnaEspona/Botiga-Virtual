<!DOCTYPE html>
<html>
	<head>
		<title> Wofi T-shirtsAndStuff </title>
		<link rel="stylesheet" type="text/css" href="css/portada.css">
		<meta charset="UTF-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/codiJavascript.js"></script>

	</head>
	<body>
		<header>
			<div>
				<div class = "logo" id="logo">
					<a href="index.php"><img src="images/logo.jpg" height="150"/></a>
				</div>
				<div class = "titol">
					<h1> Wofi T-shirts&Stuff </h1>
				</div>
				<div class="buscador">
					<form action="">
	  					Busca un producte:
	  					<input type="search" name="Producte buscat">
	  					<input type="submit">
					</form>
				</div>
				<div class="identificador">
					<div id="perfil" class="perfil">
						<img src="images/perfil.png" height="50">
					</div>
					<div id="menu-perfil" class="menu-perfil" style="display: none;">
						<ul>
							<li>El meu perfil</li>
							<li>Configuració</li>
							<li>Tancar sessió</li>
						</ul>
					</div>
					<div class="carrito">
						<a href="carrito.php"><img src="images/carrito.png" height="40"></a>
					</div>
					<div class="menu-login">
						<div class="sign">
							<a onclick="loadSign()">SignIn </a>
						</div>
						<div id="login" class="login">
							<p>LogIn</p>
						</div>
						<div id="opcions-login" class="opcions-login" style="display: none;">
							<?php include("logIn.php") ?>
						</div>
						<div id="admin">
							<p>Admin</p>
						</div>
					</div>
				</div>
				<div id="Boto" class="boto-menu">
					<img src="images/BotoMenu.jpg" height="30">
				</div>
			</div>
		</header>
		<hr>
		<div id="menu" style="display: none;">
			<?php include("Controllers/menu.php") ?>
		</div>

		<script>


		</script>
