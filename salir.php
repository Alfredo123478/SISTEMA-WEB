<?php
	// inicia la sesion
    session_start();
    // destruye la sesion
    session_destroy();
    echo '<script>alert("Cerrando sesión"); </script>';    
    echo '<script>window.location="index.php"; </script>';
?>