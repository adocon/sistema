<?php

function existeUsuario($user,$pass){
	require_once ('conectar.php');
	conectarDB();
	$hash=md5($pass);
	$consulta="SELECT * from usuarios WHERE username='$user' AND passwd='$hash' ";
	$resultado= realizarConsulta($consulta);
	if ($resultado->num_rows==1) 
		return true;
		else
		return false;
		

}


?>