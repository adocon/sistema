<?php
// Incluyo el script de login
include('login.php');

if(isset($_SESSION['login_user'])){
	header("location: perfil.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Form in PHP with Session</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main">
			<h1>Ejemplo de Login con uso de sesi&oacute;n PHP</h1>
			<div id="login">
		
				<h2>Formulario Login</h2>
				<form action="" method="post">
					
					<input id="name" name="username" placeholder="username" type="text">
					
					<input id="password" name="password" placeholder="**********" type="password">
					<input name="submit" type="submit" value=" Login ">
					<span><?php echo $error; ?></span>
				</form>
			</div>
		</div>
	</body>
</html>
