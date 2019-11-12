<?php
// Iniciamos la session PHP
session_start(); 

//Variable donde almacenamos el mensaje en caso de error
$error=''; 

// Es TRUE si se hizo previamente un SUBMIT en el formulario
if (isset($_POST['submit'])) {
	// Verifico que los datos de usuario y contraseña no esten vacíos
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Nombre de usuario o password inv&aacute;lido";
} else {
	// Defino las variables donde guardo usuario y contraseña
	$username=$_POST['username'];
	$password=$_POST['password'];

	// Establecemos la conexion a la base de datos 
	$connection = mysql_connect("localhost", "usuario", "user*123");

	// Para prevenir inyeccion SQL se convierten los campos
	// 	stripslashes : Quita las barras de un string con comillas escapadas.
	//	mysql_real_escape_string :  Escapa caracteres especiales en una cadena para su uso en una sentencia SQL. Antepone barras invertidas a los siguientes caracteres: \x00, \n, \r, \, ', " y \x1a.
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	// Selecciono la base de datos con la que voy a trabajar
	$db = mysql_select_db("programacion_web", $connection);

	// Consulta SQL para verificar si existe en la base la información ingresada
	$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);

	// mysql_num_rows : Cuenta la cantidad de filas del resultado, retorna un entero.
	$rows = mysql_num_rows($query);

	// Si la cantidad de resultados es 1 , esta ok.
	if ($rows == 1) {
		// Guardo en la sesión el nombre de usuario
		$_SESSION['login_user']=$username; 
		// Redirecciono luego a otra página
		header("location: perfil.php"); 
	} else {
		$error = "Nombre de usuario o password inv&aacute;lido";
	}
		// Cierro la conexión a la base
		mysql_close($connection); // Closing Connection
	}
}
?>
