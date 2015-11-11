<?php

$link = mysql_connect("localhost","root","") or die("No se puedo conectar con el servidor de base de datos");
echo "Conectado al servidor de BD MySQl <br />";

mysql_select_db("bdleasing") or die("No se pudo seleccionar la BD");
echo "BD seleccionada: <b>bdleasing<b />";


if (isset($_POST['user'])) {
$User=$_POST['user'];
} else {
$User= "";
}

if (isset($_POST['password'])) {
$Password=$_POST['password'];
} else {
$Password="";
}

$consulta="SELECT * FROM rol WHERE User ='".$User."'AND Password ='".$Password."'";

$llamado=mysql_query($consulta,$link);


		/*if(mysql_result($llamado, 0))
		{
		$result=mysql_result($llamado, 0);
		if($_POST["user"]=="Admin" && $_POST["password"]=="123")
		{	session_start();
			$_SESSION["autentificado"] =true;
			header("Location: paneladmi.php");
			$_SESSION["usuario"]= $_POST["user"];
		}
		else 
		{	session_start();
			$_SESSION["autentificado"] =true;	
			header("Location: indexlogin.php");
			$_SESSION["usuario"]= $_POST["user"];
		}
	}*/ 

		if(mysql_result($llamado, 0))
		{
		$result=mysql_result($llamado, 0);
		if($_POST["user"]=="Admin" && $_POST["password"]=="123")
		{	session_start();
			$_SESSION["autentificado"] =true;
			header("Location: paneladmi.php");
			$_SESSION["usuario"]= $_POST["user"];
		}
		else 
		{	session_start();
			$_SESSION["autentificado"] =true;	
			header("Location: indexlogin.php");
			$_SESSION["usuario"]= $_POST["user"];
		}
	} 

mysql_close($link);
?>