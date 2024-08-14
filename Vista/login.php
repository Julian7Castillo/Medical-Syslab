<!DOCTYPE html>
<html>
	<body>
		<!--contenido del formulario del login-->
		<scrip src="js/funciones.js"></script>
		<scrip src="Vista/js/funciones.js"></script>
		<div class="container">
			<section class="main row center-di" >
				<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
					<p><h2 class="text-center">Bienvenido a nuestro centro medico virtual por favor inicie sesion</h2><br><br>
					<form class="center-div" action="controlador/LoginController.php" mothod="post">
						<h3><p class="center-div">Usuario: </p><br>
						<INPUT type="text" name="usuario"><br><br>
						<p class="center-div">Contraseña: </p><br>
						<INPUT type="password" name ="psw">
						<button class="btn btn-primary btn-lg" type="button" onclick="mostrar()">
							<svg name="eye" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
								<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
								<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
							</svg>
						</button><br><br>
						<div class="center-div">
							<button class="btn btn-primary btn-lg" type="submit" >Iniciar sesion</button>
						</div></h3></p><br><br>
					</form><br><br>
				</article>
				<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<p>
						<h2>Gracias por visitar nuestra sitio web esperamos tengas una gran atención con nuestros servicios y accesibilidad, siempre buscamos lo mejor para nuestros usuarios no olvides dejarnos tus opiniones.<h2><br> 
					</p>
				</aside>
			</section>
		</div>
		<scrip src="js/funciones.js"></script>
		<scrip src="Vista/js/funciones.js"></script>
	</body>
<html>
