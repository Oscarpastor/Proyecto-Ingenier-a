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
		padding-left: 25%;
	}


	</style>
	<header>
		<div class="logotipo">
				<img src="imagen/holi.png" width="1000" alt="">
			</div>
         </form>	
		</div>
				<div class="social">
		<ul>
			<li><a href="#" target="_blank" class="icon-facebook"></a></li>
			<li><a href="#" target="_blank" class="icon-twitter"></a></li>
			<li><a href="#" target="_blank" class="icon-google"></a></li>
			<li><a href="#" target="_blank" class="icon-youtube"></a></li>
		</ul>
	</div>
		<section id="opciones">
			<h3 align="center">Bienvenid@: <?php echo $_SESSION["usuario"];?></h3>
			<br />
			<h4 align="center">A continuación encontrarás una lista de opciones de las que dispones.</h4>
			<table border="0">
				<tr>
					<td><a href="registroinmueble.php"><img src="imagen/lapiz.png"width="150" height="150" title="Registrar Inmueble"></td></a>
					<td><a href="buscarinmueble.php"><img src="imagen/lupa.png" width="150" height="150" title="Buscar Inmueble"></a></td>
					<td><a href="salir.php"><img src="imagen/cerrar.png"width="150" height="150" title="Cerrar Sesión"></td></a>
				</tr>
			</table>
		</section>
	</header>
	
	<div id = "contenedor-slideshow">
	 <div class="slideshow">
		<div style="relative" class="slides">
			<a href="#"><img src="imagen/mapa.jpg" alt=""></a>
			<a href="#"><img src="imagen/slide1.jpg" alt=""></a> 
			<a href="#"><img src="imagen/slide3.jpg" alt=""></a>
			<a href="#"><img src="imagen/slide4.jpg" alt=""></a>
		</div>
	  </div>
	 </div> 
	<section class="main">
				<div class= "inmueblesa">
					<a href="#"> <img id ="casa" src="imagen/img/Casa.jpg" width="" alt=""></a>
					<a href="#"> <img id="apto" src="imagen/img/Apto.jpg" width="" alt=""></a>
				</div>
				<div class= "inmueblesb">
					<a href="#"> <img id="local" src="imagen/img/local.jpg" width="" alt=""></a>
					<a href="#"> <img id="finca" src="imagen/img/finca.jpg" width="" alt=""></a>
				</div>
		</section>
		<footer>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0378401328594!2d-75.58620568523065!3d6.258745995469811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44291ace0905c5%3A0xa82ebb8889ab4dae!2sFundaci%C3%B3n+Universitaria+Luis+Amig%C3%B3!5e0!3m2!1ses-419!2s!4v1446652666882" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="info"> FUNDACIÓN UNIVERSITARIA LUIS AMIGÓ<br>Transversal 51A #67B 90<br> Medellín - Colombia<br>funlam@funlam.edu.co</div>
		</footer>
</body>
</html>