<?php
	session_start();
	extract ($_REQUEST);
	if (!isset($_REQUEST['msj'])){
		$msj=0;
	}
	if (!isset($_REQUEST['pag'])){
    	$pag='inicio';
	}
	else
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--llamado a estilos del framwork bootstrap-->
    	<link rel="stylesheet" href="Vista/css/normalize.css">

    	<!--llamado a estilos del framwork bootstrap-->
    	<link rel="stylesheet" href="Vista/css/bootstrap.min.css">

		<!--link de la hoja de estilos en cascada css-->
		<link rel="stylesheet" href="Vista/css/styles.css">

		<script defer src="Vista/js/app.js"></script>

		<!--Lineas de cambio de icono en la ventana y el nombre en la ventana-->
        <link rel="icon" href="Vista/img/logoMS.png" type="image/x-icon">
		<title>Medical SysLab</title>
	</head>

	<body>
		<!--encabezado con icono y tutulo-->
		<?php include "Vista/encabezado.php";?>

		<!--area de trabao dode ira cambiando el script-->
		<div class="container-fluid cabecera fixed-top">
			<section class="row">
				<?php 
					if (isset($_SESSION["cc"])) {
						include "Vista/menu.php";
					}
				?>
				<?php
					if ($msj==2)
						echo '<br><br><div class="alert alert-danger text-center">Error de usuario y/o contraseña son incorrectos </div>';
				?>
				<div class="container">
					<div id="divContenido"> 
						<?php include "Vista/".$pag.".php";?> 
					</div>
			</section>
		</div>

		<!--footer con bootstrap y con los colores de los estilos extras-->
		<?php include "Vista/footer.php"?>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
	    <script src= "Vista/js/jquery.js"></script>
		<script src="Vista/js/bootstrap.min.js"></script>	
		<scrip src="Vista/js/funciones.js"></script>
		<scrip src="js/funciones.js"></script>
	</body>
</html>