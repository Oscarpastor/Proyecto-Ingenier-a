<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario Registro</title>

</head>
<body>
<style>

	html,body{
		font-family: sans-serif;
		font-size: 16px;
		}

		caption
		{
			font-family: sans-serif;
			font-size: 20px;
			font-weight: bold;
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
		width: 55%;
		height: 780px;	

	}

	table
	{
		border:"0"; 
		border-spacing:30px;
		text-align: left;
	}

</style>
		<section>
		<form action="">
		<table>
			<caption>DATOS PERSONALES</caption>
    <tr>
      <td><label for="primer_nombre">Primer Nombre :</label></td>
      <td><input type="text" id="primer_nombre" class="caja" placeholder=""/></td>
      <td>	<label for="tel" >Teléfono Fijo :</label></td>			
      <td><input type="text" id="tel" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="segundo_nombre">Segundo Nombre :</label></td>
      <td><input type="text" id="segundo_nombre" class="caja" placeholder="" /></td>
      <td><label for="celular" >Celular :</label></td>			
      <td><input type="text" id="celular" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="primer_apellido">Primer Apellido :</label></td>
      <td><input type="text" id="primer_apellido" class="caja" placeholder="" /></td>
      <td><label for="correo">Correo Electrónico :</label></td>
     <td><input type="text" id="correo" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="segundo_apellido">Segundo Apellido :</label></td>			
      <td><input type="text" id="segundo_apellido" class="caja" placeholder="" /></td>
      <td><label for="tarjeta">Tarjeta :</label></td>				
       <td><select id="tarjeta"class="caja">
						  <option value="0"selected="selected">->Selecciona<-</option>
						  <option value="1">Débito</option>
						  <option value="2">Crédito</option>
						</select></td>
    </tr>
    <tr>
      <td><label for="nacimiento"> Fecha nacimiento :</label></td>
      <td><input class="caja" type="date" name="nacimiento" step="1" min="1980-01-01" max="2050-01-01" value="<?php echo date("Y-m-d");?>"></td>
      <td><label for="num_cuenta">Número de Cuenta :</label></td>			
      <td><input type="text" id="num_cuenta" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="sexo">Sexo :</label></td>
      <td><select id="sexo" class="caja">
					<option value="0"selected="selected">->Selecciona<-</option>
					<option value="1">Femenino</option>
					<option value="2">Masculino</option>
				</select></td>
      <td><label for="usuario">Usuario :</label></td>
       <td><input type="text" id="usuario" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="tipo_documento">Tipo de Documento :</label></td>
      <td><select id="tipo_documento" class="caja">
						  <option value="0"selected="selected">->Selecciona<-</option>
						  <option value="RC">RC</option>
						  <option value="TI">TI</option>
						  <option value="CC">CC</option>
						</select></td>
      <td><label for="clave1">Contraseña :</label></td>
       <td><input type="password" id="clave1" class="caja" placeholder=""/></td>
    </tr>
    <tr>
      <td><label for="numero_documento">Número Documento :</label></td>
      <td><input type="text" id="numero_documento" class="caja" placeholder="Sin puntos" /></td>		
      <td><label for="clave2"> Confirmar contraseña :</label></td>
       <td><input type="password" id="clave2" class="caja" placeholder=""/></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" id="enviar" class="btn" value="Enviar Registro"/></td>		
      <td><input type="reset" id="limpiar" class="btn" value="Limpiar Formulario"/></td>
      <td></td>
    </tr>
</table>
</form>	
	</section>

<script src="js/formulario_registro_usuarios.js"></script>

</body>
</html>