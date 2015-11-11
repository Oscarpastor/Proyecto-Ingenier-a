<?php include("sesion.php");  ?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista Usuarios</title>
		<link rel="stylesheet" type="text/css" href="JYDestilos.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<link rel="shortcut icon" href="imagen/home.ico" type="image/x-icon">		
	</head>
	<style>

	section
	{
		background: red;
		height: 200px;
		margin-top: 25px;
		border: medium solid black;
	}

	h3
	{
		text-align: center;
	}

	table
	{
		margin-top: 20px;
		padding-left: 42%;
	}

	</style>
<body>
	<header>
		<div class="logotipo">
				<img src="imagen/holi.png" width="1000" alt="">
			</div>
			<section>
			<?php

			$conexion = mysql_connect("localhost","root","");
			mysql_select_db("bdleasing");

			$consulta ="SELECT * FROM rol";

			$ejecutar_consulta=mysql_query($consulta,$conexion);

			echo "<h3>Listado de usuarios registrados en la página: <h3>";

			while($registro=mysql_fetch_array($ejecutar_consulta)){
			echo $registro["User"].'--';
				}
			?>
			</section>
			<table>
				<tr>
					<td><a href="paneladmi.php"><img src="imagen/volver.png" width="150" height="150" title="Regresar"></td></a>
				</tr>
			</table>
		</body>
	
</html>
