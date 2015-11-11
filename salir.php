<?php
session_start();
session_destroy(); //Cerrar la sesión

header("Location: index.php");
?>