<?php

$link = mysql_connect("localhost","root",""); 
mysql_select_db("bdleasing"); 
/*----CAMPOS FORMULARIO DE REGISTRO USUARIOS----*/

if (isset($_POST['primer_nombre'])) {
$Primer_nombre = $_POST['primer_nombre'];
} else {
$Primer_nombre = "";
}

if (isset($_POST['tel'])) {
$Telefono_fijo = $_POST['tel'];
} else {
$Telefono_fijo = "";
}

if (isset($_POST['segundo_nombre'])) {
$Segundo_nombre = $_POST['segundo_nombre'];
} else {
$Segundo_nombre = "";
}

if (isset($_POST['celular'])) {
$Celular = $_POST['celular'];
} else {
$Celular = "";
}

if (isset($_POST['primer_ape'])) {
$Primer_apellido = $_POST['primer_ape'];
} else {
$Primer_apellido = "";
}

if (isset($_POST['correo'])) {
$Correo= $_POST['correo'];
} else {
$Correo = "";
}

if (isset($_POST['segundo_apellido'])) {
$Segundo_apellido = $_POST['segundo_apellido'];
} else {
$Segundo_apellido = "";
}

if (isset($_POST['tarjeta'])) {
$Tarjeta= $_POST['tarjeta'];
} else {
$Tarjeta = "";
}


if (isset($_POST['num_tarjeta'])) {
$Num_tarjeta = $_POST['num_tarjeta'];
} else {
$Num_tarjeta = "";
}

if (isset($_POST['sexo'])) {
$Sexo = $_POST['sexo'];
} else {
$Sexo = "";
}

if (isset($_POST['usuario'])) {
$User = $_POST['usuario'];
} else {
$User = "";
}

if (isset($_POST['tipo_documento'])) {
$Tipo_documento = $_POST['tipo_documento'];
} else {
$Tipo_documento = "";
}

if (isset($_POST['clave1'])) {
$Password= $_POST['clave1'];
} else {
$Password = "";
}

if (isset($_POST['numero_documento'])) {
$Numero_documento= $_POST['numero_documento'];
} else {
$Numero_documento = "";
}

if (isset($_POST['clave2'])) {
$Password2= $_POST['clave2'];
} else {
$Password2 = "";
}

if (isset($_POST['nacimiento'])){
$Fecha_nacimiento=$_POST['nacimiento'];
} else {
$Fecha_nacimiento="";
}


/*-------------------------------------------------------------------*/

mysql_query("INSERT INTO usuarios VALUES('$Primer_nombre','$Segundo_nombre','$Primer_apellido','$Segundo_apellido','$Sexo','$Fecha_nacimiento','$Tipo_documento','$Numero_documento','$Telefono_fijo','$Celular','$Correo')",$link) or die ("<h2>Error Usuarios</h2>");

mysql_query("INSERT INTO rol VALUES('$User','$Password','$Password2')",$link) or die("<h2>Error rol</h2>");

mysql_query("INSERT INTO datos_financieros VALUES('$Tarjeta','$Num_tarjeta')",$link) or die("<h2>Error Tarjeta</h2>");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cargando...</title>
</head>
<body>
<script type="text/javascript">
function redireccionar(){
  window.location="exitoso.php";
} 
setTimeout ("redireccionar()", 1000); //tiempo expresado en milisegundos
</script>
</body>
</html>

