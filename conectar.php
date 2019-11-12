<?php

$mysqli = null ;


function conectarDB(){

	global $mysqli ;
	// Conectarse a y seleccionar una base de datos de MySQL llamada sakila
	// Nombre de host: 127.0.0.1, nombre de usuario: usuario, contraseña: baja123, bd: programacion\_web
	$mysqli = new mysqli('127.0.0.1', 'usuario', 'usuario*123', 'programacionweb');

	// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
	if ($mysqli ==  null || $mysqli->connect_errno) {
	    // La conexión falló. ¿Que vamos a hacer? 
	    // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
	    // No se debe revelar información delicada

	    // Probemos esto:
	    echo "Lo sentimos, este sitio web está experimentando problemas.";

	    // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
	    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
	    echo "Error: Fallo al conectarse a MySQL debido a: \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
	    
	    // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
	    exit;
	}
}

function realizarConsulta($sql){

	global $mysqli ;

	// Realizar una consulta SQL

	if ($mysqli!=null && !$resultado = $mysqli->query($sql)) {
	    // ¡Oh, no! La consulta falló. 
	    echo "Lo sentimos, este sitio web está experimentando problemas.";

	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
	    // cómo obtener información del error
	    echo "Error: La ejecución de la consulta falló debido a: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
	    exit;
	}

	return $resultado;


}


function cerrarConexion(){


	global $mysqli;
	$mysqli->close();
}


?>


