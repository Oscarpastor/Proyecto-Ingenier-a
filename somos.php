<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LeasingJYD</title>
		<link rel="stylesheet" type="text/css" href="JYDestilos.css">
		<link rel="stylesheet" type="text/css" href="css/social.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<link rel="stylesheet" type="text/css" href="css/somos.css">
		<link rel="shortcut icon" href="imagen/home.ico" type="image/x-icon">		
	</head>
<body>
	<header>
		<div class="logotipo">
				<img src="imagen/holi.png" width="1000" alt="">
			</div>
		<div id="ingreso">
			<form action= "loginconexion.php" method="POST">
			<table border="1">	
			<tr>
            <td><label>Usuario: </label></td>
            <td><input type="text" name="user" class="caja" id="usuario"/></td>
           	<td><label>Contraseña: </label></td>
            <td><input type="password" name="password" class="caja" id="contrasenia"/></td>
            <td><input type="submit" value="Enviar" class="btn" id="btn"/></td>
            </tr>
            <tr>
            <td colspan="2"><a href="#">¿Olvidó su contraseña?</a></td>
            <td colspan="2"><span id="alerta">
            <?php
			if ($_POST["error"]="si"){
				echo "<span>";
			}else{
				echo "Verifica tus datos</span>";
			}
			?>
			</span></a></td>
            </tr>
            </table>
         </form>	
		</div>
				<div class="social">
		<ul>
			<li><a href="http://www.facebook.com" target="_blank" class="icon-facebook"></a></li>
			<li><a href="http://www.twitter.com" target="_blank" class="icon-twitter"></a></li>
			<li><a href="http://www.google.com.co" target="_blank" class="icon-google"></a></li>
			<li><a href="http://www.youtube.com" target="_blank" class="icon-youtube"></a></li>
		</ul>
	</div>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="buscarinmueble.php">Buscar Inmuebles</a></li>
				<li><a href="registrousuarios.php">Regístrate</a></li>
				<li><a href="somos.php">¿Quiénes somos?</a></li>
				<div id="reloj"></div>
				<div id="fecha"></div>
			</ul>
		</nav>
	</header>
	<section class="main">
		<div class="somos"><h2><span>Misión:<br>Ofrecer el mejor servicio de arrendamientos en la ciudad de Medellín, brindándoles a los clientes una platarforma ágil y segura para el trámite de inmuebles.</h2></span>
		<span><h2><br>Visión:<br>Para el año 2020 Leasing JYD será una de las mejores herramientas web, siendo una de las más preferidad por los usuarios de la ciudad de Medellín y con mayor alcance en las ciudades de Colombia.</h2></span></div>
	</section>
		<footer>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0378401328594!2d-75.58620568523065!3d6.258745995469811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44291ace0905c5%3A0xa82ebb8889ab4dae!2sFundaci%C3%B3n+Universitaria+Luis+Amig%C3%B3!5e0!3m2!1ses-419!2s!4v1446652666882" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="info"> FUNDACIÓN UNIVERSITARIA LUIS AMIGÓ<br>Transversal 51A #67B 90<br> Medellín - Colombia<br>funlam@funlam.edu.co</div>
		</footer>
</body>
</html>