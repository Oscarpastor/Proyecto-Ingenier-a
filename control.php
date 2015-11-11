<?php
if($_POST["usuario_txt"]=="Admi" && $_POST["password_txt"]=="12345" ||$_POST["usuario_txt"]== "Jona" && $_POST["password_txt"]=="12345"){
	//inicio la sesión
	session_start(); //<- Método para iniciar Sesión
	//Declaro mis variables de sesión
	$_SESSION["autentificado"] =true;
	$_SESSION["usuario"]= $_POST["usuario_txt"];

	header("Location: archivo-protegido.php");
}else{
	header("Location: index.php?error=si");
}
?>