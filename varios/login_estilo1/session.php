<?php

// Establece la conexion a la base.
$connection = mysql_connect("localhost", "usuario", "user*123");

// Selecciona la base de datos de 'programacion_web'
$db = mysql_select_db("programacion_web", $connection);

//Inicio la session PHP
session_start();

// Obtengo de la session el usuario logueado
$user_check=$_SESSION['login_user'];

// Consulta SQL para traer los datos del usuario
$ses_sql=mysql_query("select apellido,nombre,username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
$login_name =$row['apellido'] . ', '. $row['nombre'];

// Si no aparece el usuario en la base , o sea no tiene resultados la consulta de SELECT
if(!isset($login_session)){
	// Cierro la conexión a la base
	mysql_close($connection); 
	// Redirecciono a la pagina de inicio
	header('Location: index.php'); 
}
?>
