<?php
session_start();
?>
<html>
	<head>
		<title>BIENVENIDO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body >
		<?php
			include('conexion.php');
				if(isset($_POST['submit'])){
                    $entro=false;
					$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
					$clave=md5(mysqli_real_escape_string($conexion,$_POST['clave']));

					
                    $registros = "SELECT usuario,clave FROM usuario WHERE usuario ='$usuario' AND clave='$clave'";
                    foreach($conexion->query($registros) as $fila) {  
						$_SESSION["usuario"]=$fila['usuario'];
						echo '<script>alert("Usuario correcto"); </script>';
						echo '<script>window.location="index2.php"; </script>';	
                    }
                   $conexion= null;
                    if (!$entro){
                        echo '<script>alert("Usuario incorrecto"); </script>';
						echo '<script>window.location="index.php"; </script>';	
                    }
				}
				if(isset($_POST['terminar'])){
				  echo '<script>window.location="index.php"; </script>';
				}
		?>
</body>
</html>

