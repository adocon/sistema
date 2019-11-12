<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location:login.php');
	}else{
		echo"<a href='logout.php'>salir</a>";
	}
