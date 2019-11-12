<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tu p&aacute;gina de inicio</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="profile">
		<b id="welcome">Bienvenido : <i><?php echo $login_name; ?></i></b>
		<b id="logout"><a href="logout.php">Salir</a></b>
		</div>
	</body>
</html>
