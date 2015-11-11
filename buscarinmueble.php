<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LeasingJYD</title>
		<link rel="stylesheet" type="text/css" href="css/social.css">
		<link rel="stylesheet" type="text/css" href="css/buscarinmueble.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<link rel="shortcut icon" href="imagen/home.ico" type="image/x-icon">		
	</head>
<body>
	<style>
	
	table
	{
		padding-left: 0px;
		margin-top: 25px;
	}

	td
	{
		text-align: center;
	}

	#tb
	{
		background: white;
		width: 30%;
		margin-left: 13%;
	}

	</style>
	<header>
		<div class="logotipo">
			<img src="imagen/holi.png" width="1000" alt="">
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
		<section id="tb">
			<table border ="0">
			<tr><td colspan="2"><h3>Filtrar Búsqueda</h3></td></tr>		
			<tr>
			<td><label for="nombre">Tipo Inmueble: </label></td>	 	
			<td><select id="tipo_inmueble" class="caja" name="tipo_inmueble">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="Casa">Casa</option>
					<option value="Apartamento">Apartamento</option>
					<option value="Local">Local</option>
				    <option value="Finca">Finca</option></td>
			</tr>
			<tr>
			<td><label for="ubicacion">Ubicación:</label></td>
			<td><select id="comuna" class="caja" name="comuna" >
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="Popular">01-Popular</option>
					<option value="Santa Cruz">02-Santa Cruz</option>
					<option value="Manrique">03-Manrique</option>
				    <option value="Aranjuez">04-Aranjuez</option>
				    <option value="Castilla">05-Castilla</option>
					<option value="Doce de Octubre">06-Doce de Octubre</option>
					<option value="Robledo">07-Robledo</option>
				    <option value="Villa Hermosa">08-Villa Hermosa</option>
				    <option value="Buenos Aires">09-Buenos Aires</option>
					<option value="La Candelaria">10-La Candelaria</option>
					<option value="Laureles/Estadio">11-Laurele/Estadio</option>
				    <option value="La América">12-La América</option>
				    <option value="San Javier">13-San Javier</option>
				    <option value="Poblado">14-Poblado</option>
				    <option value="Guayabal">15-Guayabal</option>
				    <option value="Belén">16-Belén</option>
				    <option value="San Sebastián de Palmitas">C1-San Sebastián de Palmitas</option>
				    <option value="San Cristóbal">C2-San Cristóbal</option>
				    <option value="Altavista">C3-Altavista</option>
				    <option value="San Antonio de Prado">C4-San Antonio de Prado</option>
				    <option value="Santa Elena">C5-Santa Elena</option> 
			</select></td>
			</tr>
			<tr>
			<td><label for="area">Área<sup>2</sup>:</label></td>
			<td><select id="area" class="caja" name="area" >
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="-50">Menos de 50mts</option>
					<option value="50-90">Entre 50mts y 90mts</option>
					<option value="91-140">Entre 91mts y 140mts</option>
					<option value="141-300">Entre 141mts y 300mts</option>
				    <option value="300+">Más de 300mts</option>
			</select></td>
			</tr>
			<tr>
			<td><label for="Num_Pisos">Número de Pisos: </label></td>
			<td><select id="numero_pisos" class="caja" name="numero_pisos" >
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option></td>
			</tr>
			<tr>
			<td><label for="Num_Hab">Número de Habitaciones: </label></td>
			<td><select id="numero_hab" class="caja" name="numero_habitaciones">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5+</option></td>
			</tr>
			<tr>
			<td><label for="numero_banios">Número de Baños: </label></td>
			<td><select id="numero_banios" class="caja" name="numero_banios">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5+">5+</option>
			</select></td>
			</tr>
			<tr>
			<td><label for="estrato">Estrato: </label></td>
			<td><select id="estrato" name="estrato" class="caja">
			  <option value="" selected="selected">->Selecciona<-</option>
			  <option value="">1</option>
			  <option value="">2</option>
			  <option value="">3</option>
			  <option value="">4</option>
			  <option value="">5</option>
			  <option value="">6</option>
			</select></td>
			</tr>
			<tr>
			<td><label for="antiguedad">Antigüedad:</label></td>
			<td><select id="antiguedad" class="caja"name="antiguedad" >
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="-1">Menos de un año</option>
					<option value="1-10">Entre 1 y 10 años</option>
					<option value="11-20">Entre 11 y 20 años</option>
					<option value="21-30">Entre 21 y 30 años</option>
				    <option value="30+">Más de 30 años</option></td>
			</select>
			</tr>
			<tr>
			<td colspan="2"><input type="submit" class="btn" value="Buscar"/></td>
			</tr>
			</table>
		</section>
		<footer>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0378401328594!2d-75.58620568523065!3d6.258745995469811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44291ace0905c5%3A0xa82ebb8889ab4dae!2sFundaci%C3%B3n+Universitaria+Luis+Amig%C3%B3!5e0!3m2!1ses-419!2s!4v1446652666882" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="info"> FUNDACIÓN UNIVERSITARIA LUIS AMIGÓ<br>Transversal 51A #67B 90<br> Medellín - Colombia<br>funlam@funlam.edu.co</div>
		</footer>
</body>

</html>