<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--link de css-->
		<link rel="stylesheet" href="css/styles.css">

    	<!--llamado a estilos del framwork bootstrap-->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
		<title> Medical SysLab</title>
	</head>

	<body>
		<!--contenido del formulario del login-->
		<div class="container">
			<section class="main row center-di" >
				<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
					<p><h2 class="text-center">Bienvenido a nuestro centro medico virtual por favor inicie sesion</h2><br><br>
					<form class="center-div" action="controlador/LoginController.php" mothod="post">
						<h3><p class="center-div">Usuario: </p><br>
						<INPUT type="text" name="usuario"><br><br>
						<p class="center-div">Contraseña: </p><br>
						<INPUT type="password" name ="psw"><br><br>
						<div class="center-div">
							<button class="btn btn-primary btn-lg" type="submit" >Iniciar sesion</button>
						</div></h3>
					</p><br><br><br><br></form>
				</article>
				<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<p>
						<h2>Gracias por visitar nuestra sitio web esperamos tengas una gran atención con nuestros servicios y accesibilidad, siempre buscamos lo mejor para nuestros usuarios no olvides dejarnos tus opiniones.<h2><br> 
					</p>
				</aside>
			</section>
		</div>
	</body>
<html>
