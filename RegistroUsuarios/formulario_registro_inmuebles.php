<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario Registro Inmuebles</title>
	<style>
		html,body{
		font-family: sans-serif;
		font-size: 16px;
		}

		caption
		{
			font-family: sans-serif;
			font-size: 20px;
		}

.btn {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 12px 15px;
    border: 3px solid #50d0e6;
    border-radius: 0px;
    background: ##d6fbae;
    background: -webkit-gradient(linear, left top, left bottom, from(##d6fbae), to(#ffffff));
    background: -moz-linear-gradient(top, ##d6fbae, #ffffff);
    background: linear-gradient(to bottom, ##d6fbae, #ffffff);
    text-shadow: #ffffe2 1px 1px 1px;
    font: normal normal normal 19px arial;
    color: #111111;
    text-decoration: none;
}
.btn:hover,
.btn:focus {
    border: 3px solid #5cefff;
    background: #ffffd1;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffd1), to(#ffffff));
    background: -moz-linear-gradient(top, #ffffd1, #ffffff);
    background: linear-gradient(to bottom, #ffffd1, #ffffff);
    color: #111111;
    text-decoration: none;
}
.btn:active {
    background: #96b07a;
    background: -webkit-gradient(linear, left top, left bottom, from(#96b07a), to(#ffffff));
    background: -moz-linear-gradient(top, #96b07a, #ffffff);
    background: linear-gradient(to bottom, #96b07a, #ffffff);
}
.btn:after{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 -4px -6px 4px;
    position: relative;
    top: 0px;
    left: 0px;
    background-size: 100% 100%;
}
    .caja{
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 10px;
  margin: 5px 1px 3px 0px;
  border: 3px solid #DDDDDD;
		}
 
	.caja:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 10px;
  margin: 5px 1px 3px 0px;
  border: 3px solid rgba(81, 203, 238, 1);
		}

	section
	{		
		width: 64%;
		height: 780px;
	}

	table
	{ 
		border-spacing:30px;
		text-align: left;		
	}

	</style>
</head>
<body>
	<section>
	<form action="">
	<table border="0">
		<caption>REGISTRO INMUEBLES</caption>
		<tr>
			<td><label for="tipo_inmueble">Tipo de Inmueble :</label></td>
			<td><select id="tipo_inmueble" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="Casa">Casa</option>
					<option value="Inmueble">Inmueble</option>
					<option value="Local">Local</option>
				    <option value="Finca">Finca</option>
			</select></td>
			<td><label for="numero_banios">Número de Baños: </label></td>
			<td><select id="numero_banios" class="caja" name="td">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="B1">1</option>
					<option value="B2">2</option>
					<option value="B3">3</option>
				    <option value="B4">4</option>
				    <option value="B5">5+</option>
			</select></td>
		</tr>
		<tr>
			<td><label for="comuna">Ubicación : </label></td>
			<td><select id="comuna" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="01">01-Popular</option>
					<option value="02">02-Santa Cruz</option>
					<option value="03">03-Manrique</option>
				    <option value="04">04-Aranjuez</option>
				    <option value="05">05-Castilla</option>
					<option value="06">06-Doce de Octubre</option>
					<option value="07">07-Robledo</option>
				    <option value="08">08-Villa Hermosa</option>
				    <option value="09">09-Buenos Aires</option>
					<option value="10">10-La Candelaria</option>
					<option value="11">11-Laurele/Estadio</option>
				    <option value="12">12-La América</option>
				    <option value="13">13-San Javier</option>
				    <option value="14">14-Poblado</option>
				    <option value="15">15-Guayabal</option>
				    <option value="16">16-Belén</option>
				    <option value="C1">C1-San Sebastián de Palmitas</option>
				    <option value="C2">C2-San Cristóbal</option>
				    <option value="C3">C3-Altavista</option>
				    <option value="C4">C4-San Antonio de Prado</option>
				    <option value="C5">C5-Santa Elena</option> 
					</select></td>
			<td><label for="antiguedad">Antiguedad del inmueble: </label></td>
			<td><select id="antiguedad" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="A0">Menos de un año</option>
					<option value="A1">Entre 1 y 10 años</option>
					<option value="A2">Entre 11 y 20 años</option>
					<option value="A3">Entre 21 y 30 años</option>
				    <option value="A4">Más de 30 años</option></td>
		</tr>
		<tr>
			<td><label for="estrato">Estrato: </label></td>
			<td><select id="estrato" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="E1">1</option>
					<option value="E2">2</option>
					<option value="E3">3</option>
				    <option value="E4">4</option>
				    <option value="E5">5</option>
				    <option value="E6">6</option>
			</select></td>
			<td><label for="valor_arriendo">Valor Arriendo Mensual :</label></td>
			<td><input type="text" class="caja" id="valor_arriendo"></td>
		</tr>
		<tr>
			<td><label for="area">Área(m<sup>2</sup>) : </label></td>
			<td><select id="area" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="">Menos de 50mts</option>
					<option value="T1">Entre 50mts y 90mts</option>
					<option value="T2">Entre 91mts y 140mts</option>
					<option value="T3">Entre 141mts y 300mts</option>
				    <option value="T4">Más de 300mts</option>
				    </select></td>
			<td><label for="tiempo_minimo">Tiempo Mínimo Arrendamiento :</label></td>
			<td><select id="tiempo_minimo" class="caja">
				<option value="0"selected="selected">->Selecciona<-</option>
				<option value="TMA1">Menos de 6 meses</option>
				<option value="TMA2">Entre 6 meses y 12 Meses</option>
				<option value="TMA3">Más de 12 Meses</option>
			</select></td>
		</tr>
		<tr>
			<td><label for="numero_pisos">Número de Pisos: </label></td>
			<td><select id="numero_pisos" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="P1">1</option>
					<option value="P2">2</option>
					<option value="P3">3</option>
				    <option value="P4">4+</option></td>
			<td><label for="imagen">Imagen Inmueble :</label></td>
			<td><input value="0" type="file" id="imagen"></td>
		</tr>
		<tr>
			<td><label for="numero_hab">Número de Habitaciones: </label></td>
			<td><select id="numero_hab" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="H1">1</option>
					<option value="H2">2</option>
					<option value="H3">3</option>
				    <option value="H4">4</option>
				    <option value="H5">5+</option></td>
			<td><label for="descripcion">Descripción :</label></td>
			<td><textarea value="0" name="descripcion" id="descripcion" cols="40" rows="5" placeholder="Información que desees agregar"/></textarea> </td>
		</tr>
		<tr>
			<td colspan="4" align="center" ><input type="button" class="btn" id="btnregistro" value="Publicar Inmueble"></td>
		</tr>
	</table>
	</form>
</section>
<script src="js/formulario_registro_inmuebles.js"></script>
</body>
</html>