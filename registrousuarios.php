<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro Usuarios</title>
		<link rel="stylesheet" type="text/css" href="JYDestilos.css"> 
		<link rel="stylesheet" type="text/css" href="css/social.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/fundamentos2.js"></script>
		<link rel="shortcut icon" href="imagen/home.ico" type="image/x-icon">	
	</head>
<body>
  <style>
  html,body{
    font-family: sans-serif;
    font-size: 16px;
    }

  table
  {
    border:"0"; 
    border-spacing:30px;
    text-align: left;
  }
  .tituloForm {
  width: 50%;
  margin-left: 25%;
  margin-top: 2%;
  text-align: center;
  padding: 0;
  font-family: "Tahoma";
  color: #555555;
  background: rgba(255,255,255,0.4);
  }
  .formu {
  background:white;
  float: left;
  width: 100%;
  margin-top:-10px;
  position: relative;
  margin-bottom: 2px;
  border-radius: 0.5em;
  font-family:sans-serif; 
  padding: 7px;
  color: black;
  box-sizing:border-box;
  height: 800px;
}
nav {
  background:#67C0E9;
  margin-top:10px;
  position: relative;
  border-radius:  0em 0.5em;
  font-family:sans-serif; 
}

  footer
{
  margin-top: 100px;
}


  </style>
	<header>
		<div class="logotipo">
			<img src="imagen/holi2.png" width="1000" alt="">
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
		
	<div class="tituloForm">
	 <h2>FORMULARIO REGISTRO USUARIOS</h2>
	</div>
	
	<div class="form">
		<nav class="formu">
			<section>
    <form action="usuariosconexion.php" method="POST">
    <table border="0">
    <tr>
      <td><label for="primer_nombre">Primer Nombre :</label></td>
      <td><input type="text" id="primer_nombre" name="primer_nombre" class="caja" placeholder=""/></td>
      <td><label for="segundo_nombre">Segundo Nombre :</label></td>
      <td><input type="text" id="segundo_nombre" name="segundo_nombre" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="primer_apellido">Primer Apellido :</label></td>
      <td><input type="text" id="primer_apellido" name="primer_ape" class="caja" placeholder="" /></td>
      <td><label for="segundo_apellido">Segundo Apellido :</label></td>     
      <td><input type="text" id="segundo_apellido" name="segundo_apellido" class="caja" placeholder="" /></td>
    </tr>
    <tr>
        <td><label for="sexo">Sexo :</label></td>
        <td><select id="sexo" class="caja" name="sexo">
          <option value="0"selected="selected">->Selecciona<-</option>
          <option value="Femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
          </select></td>
        <td><label for="nacimiento"> Fecha nacimiento :</label></td>
        <td><input class="caja" type="text" name="nacimiento" placeholder="DD/MM/AAAA"></td> 
      </tr>
      <tr>
      <td><label for="tel" >Teléfono Fijo :</label></td>      
        <td><input type="text" id="tel" name="tel" class="caja" placeholder="" /></td>
        <td><label for="celular" >Celular :</label></td>      
        <td><input type="text" id="celular" name="celular" class="caja" placeholder="" /></td>
      </tr>
    <tr>
     <td><label for="tipo_documento">Tipo de Documento :</label></td>
      <td><select id="tipo_documento" class="caja" name="tipo_documento" >
              <option value="0"selected="selected">->Selecciona<-</option>
              <option value="RC">RC</option>
              <option value="TI">TI</option>
              <option value="CC">CC</option>
            </select></td>
      <td><label for="numero_documento">Número Documento :</label></td>
      <td><input type="text" id="numero_documento" name="numero_documento" class="caja" placeholder="Sin puntos" /></td>
      <tr>
      <td><label for="tarjeta">Tarjeta :</label></td>       
      <td><select id="tarjeta"class="caja" name="tarjeta">
            <option value="0"selected="selected">->Selecciona<-</option>
            <option value="Debito">Débito</option>
            <option value="Credito">Crédito</option>
          </select></td>
      <td><label for="num_cuenta">Número de Cuenta :</label></td>     
      <td><input type="text" id="num_cuenta" name="num_tarjeta" class="caja" placeholder="" /></td>
      </tr> 
    <tr>
      <td><label for="correo">Correo Electrónico :</label></td>
      <td><input type="text" id="correo" name="correo" class="caja" placeholder="" /></td>
      <td><label for="usuario">Usuario :</label></td>
      <td><input type="text" id="usuario" name="usuario" class="caja" placeholder="" /></td>
    </tr>
    <tr>
      <td><label for="clave1">Contraseña :</label></td>
      <td><input type="password" id="clave1" name="clave1" class="caja" placeholder=""/></td>
      <td><label for="clave2"> Confirmar contraseña :</label></td>
      <td><input type="password" id="clave2" name="clave2" class="caja" placeholder=""/></td>
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
		</div> 	
	</nav>
		<footer>
      <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0378401328594!2d-75.58620568523065!3d6.258745995469811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44291ace0905c5%3A0xa82ebb8889ab4dae!2sFundaci%C3%B3n+Universitaria+Luis+Amig%C3%B3!5e0!3m2!1ses-419!2s!4v1446652666882" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="info"> FUNDACIÓN UNIVERSITARIA LUIS AMIGÓ<br>Transversal 51A #67B 90<br> Medellín - Colombia<br>funlam@funlam.edu.co</div>
    </footer>
		<script src="js/formularioregistrousuarios.js"></script>
</body>
</html>