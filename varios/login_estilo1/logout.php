<?php
session_start();

// Destruye la session
if(session_destroy()) {
	// Redirecciona a la pagina principal
	header("Location: index.php"); 
}
?>
