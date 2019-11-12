  <?php 

		  //validar login
		  //concectar
		  // hacer consulta select
		  //recorer datos y darle formato
		  //cerrar la conexion
  		require('validar_login.php');
  		require('conectar.php');
  		conectarDB();
  		//$consulta="SELECT apUsuario as apellido, nombUsuario as nombre FROM clientes;";
  		$consulta="SELECT * from clientes";

		$resultado=realizarConsulta($consulta);
		//fechassoc, devuelve un array asociativo 
		echo "<br>";
		 echo "<br><br>";
			echo "<table width='70%'border='1px' align='center'>";
			echo '<tr style="text-align:center" ><td>index</td><td>Nombre</td>
			<td>Apellido</td><td>mail</td><td>Edad</td>';
		while ($usuario=$resultado->fetch_assoc()){
			var_dump($usuario	);
			//cada vez que lo llamas te da un array asociativo del siguiente registo
		 //echo $usuarios['apellido'].",".$usuario['nombre'];
		 echo "<tr>";
		 echo "<td>".$usuario['id_clientes']."</td>";
		 echo "<td>".$usuario['nombre']."</td>";
		 echo "<td>".$usuario['apellido']."</td>";
		 echo "<td>".$usuario['mail']."</td>";
		 echo "<td>".$usuario['edad']."</td>";
		 echo "</tr>";
		}


	 ?>  