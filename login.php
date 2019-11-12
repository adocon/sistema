<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style> 
		body{
			width: 95%;
  			margin: 0 auto; 
  			padding-top: 80px;
		}

		div {
			width: 400px;
			border: red 2px solid;
			text-align: center;
			margin: 0 auto;
		}
	 </style>
</head>
<body>
	<?php include('funciones.php'); ?>
	<div>
		<h1>Bienvenido al sistema </h1>
		<?php if(!array_key_exists("submit", $_POST)){ ?>
			<form action="" method="POST"/>
				<p>Nombre <input type="text"  name="username" required data-msg="test" placeholder="ingrese usernam" /><br/></p>
				<br>
				<p>Pass   <input type="password"  name="passwd" required placeholder="ingrese password" /><br/></p>
				<br>
				<p><input type="submit" name="submit" value="ingresar"/></p>
			</form>
		<?php

	}else{
		if(array_key_exists('username', $_POST) && array_key_exists('passwd', $_POST)){
			echo "EXISTE DATOS";
			if($_POST['username']=="" || $_POST['passwd']==""){
				echo "Alguna campo estaba vacio";
				}else{
					$usuario=$_POST['username'];
					$password=$_POST['passwd'];
					echo "hola".$_POST['username']."tu password es: ".md5($_POST['passwd']);
				    //echo"hola".$_POST['username']."tu password es:".md5($_POST['password']);
					
					if(existeUsuario($usuario,$password)){
						session_start();
						$_SESSION['usuario']=$usuario;
						header('Location:index.php');
						//echo"validacion correta";

					}else{	
						echo"CONTRASEÑA ERRONEA ";
				//}else{
					//echo"validacion incorrecta";
				}
					
	        }
		}else{
			 echo "datos erroneos o faltantes <br>";	   
		}
	}
	 ?>  
</body>
</html>