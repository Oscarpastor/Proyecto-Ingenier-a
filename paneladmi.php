<?php include("sesion.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LeasingJYD - Usuario</title>
		<link rel="stylesheet" type="text/css" href="JYDestilos.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/social.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>
		<script type="text/javascript" src="js/jquery.slides.min.js"></script>
		<script type="text/javascript" src="js/jquery.slides.js"></script>
		<script type="text/javascript" src="js/fundamentos2.js"></script>
		<link rel="shortcut icon" href="imagen/home.ico" type="image/x-icon">		
	</head>
<body>
	<style>
	
	#opciones
	{
		background: red;
		height:220px;
		margin-top: 25px;
		border: medium solid black;
	}

	#barra
	{
	background:#67C0E9;
	margin-top:230px;
	position: relative;
	border-radius:  0em 0.5em;
	font-family:sans-serif; 
	margin-top: 25px;
	}
	
	table
	{
		padding-left: 35%;
	}

	</style>
	<header>
		<div class="logotipo">
				<img src="imagen/holi.png" width="1000" alt="">
			</div>
         </form>	
		</div>
		<section id="opciones">
			<h3 align="center">Bienvenid@: <?php echo $_SESSION["usuario"];?></h3>
			<br />
			<h4 align="center">A continuación encontrarás una lista de opciones de las que dispones.</h4>
			<table border="0">
				<tr>
					<td><a href="lista_usuarios.php"><img src="imagen/usuarios.png"width="150" height="150" title="Ver Usuarios Registrados"></td></a></td>
					<td><a href="salir.php"><img src="imagen/cerrar.png"width="150" height="150" title="Cerrar Sesión"></td></a>
				</tr>
			</table>
		</section>
</html>

