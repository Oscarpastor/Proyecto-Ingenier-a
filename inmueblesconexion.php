<?php

$link = mysql_connect("localhost","root","");

mysql_select_db("bdleasing");

if (isset($_POST['tipo_inmueble'])) {
$Tipo_inmueble= $_POST['tipo_inmueble'];
} else {
$Tipo_inmueble= "";
}

if (isset($_POST['comuna'])) {
$Comuna= $_POST['comuna'];
} else {
$Comuna = "";
}

if (isset($_POST['area'])) {
$Area= $_POST['area'];
} else {
$Area = "";
}

if (isset($_POST['numero_pisos'])) {
$Num_Pisos= $_POST['numero_pisos'];
} else {
$Num_Pisos = "";
}

if (isset($_POST['numero_habitaciones'])) {
$Num_Hab= $_POST['numero_habitaciones'];
} else {
$Num_Hab = "";
}

if (isset($_POST['numero_banios'])) {
$Num_Banios= $_POST['numero_banios'];
} else {
$Num_Banios = "";
}

if (isset($_POST['estrato'])) {
$Estrato= $_POST['estrato'];
} else {
$Estrato = "";
}

if (isset($_POST['antiguedad'])) {
$Antiguedad= $_POST['antiguedad'];
} else {
$Antiguedad = "";
}

if (isset($_POST['valor_arriendo'])) {
$Valor_Mensual= $_POST['valor_arriendo'];
} else {
$Valor_Mensual = "";
}

if (isset($_POST['tiempo_minimo'])) {
$TMA= $_POST['tiempo_minimo'];
} else {
$TMA = "";
}

if (isset($_POST['imagen'])) {
$imagen= $_POST['imagen'];
} else {
$imagen = "";
}

if (isset($_POST['descripcion'])) {
$Descripcion= $_POST['descripcion'];
} else {
$Descripcion= "";
}

mysql_query("INSERT INTO inmuebles VALUES('','$Tipo_inmueble','$Comuna','$Area','$Num_Pisos','$Num_Hab','$Num_Banios','$Estrato','$Antiguedad','$Valor_Mensual','$TMA','$imagen','$Descripcion')",$link) or die ("<h2>Errorr</h2>");

?>

<html>
<head>
<script type="text/javascript">
function redireccionar(){
  window.location="exitoso.php";
} 
setTimeout ("redireccionar()", 1000); //tiempo expresado en milisegundos
</script>
</head>
</html>

