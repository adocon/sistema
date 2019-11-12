<?php
session_start();
if(isset($_SESSION['usuario'])){
	echo"BIENBENIDO<br>";
	echo"<a href='listarUsuarios.php'>LISTA DE USUARIOS<a>";
	echo "<br>";
	echo"<a href='logout.php'>SALIR DEL SISTEMA<a>";

	
    }else{

		header('location:login.php');
	
}	
	/* require('validar_login.php');*/
?>