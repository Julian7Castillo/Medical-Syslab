<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<title>menu</title>
	</head>
	<body>
		<nav class="col-xs-12 containers">

			<center><button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus"><a href="index.php?pag=bienvenida">&nbsp; Inicio </a></button>

			<?php
				if($_SESSION['rol'] == 1){
					echo '
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Usuario <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menuUsuario">
							<li><a href="inicio.php?pag=Registro_Usuarios">Registrar Usuarios </a></li>
							<li><a href="inicio.php?pag=Consultar_Usuarios">Consultar Usuarios </a></li>
							<li><a href="inicio.php?pag=Actualizar_Usuarios">Actualizar Usuarios</a></li>
							<li class="divider"></li>
							<li><a href="inicio.php?pag=Eliminar_Usuarios">Borrar Usuarios </a></li>
						</ul>

						<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menuConsultorio">
							<li><a href="inicio.php?pag=registro_Consultorio">Ingresar Consultorios</a></li>
							<li><a href="inicio.php?pag=Consulta_Consultorios">Consultar Consultorios</a></li>
							<li><a href="inicio.php?pag=Actualizar_Consultorios">Actualizar Consultorios</a></li>
							<li class="divider"></li>
							<li><a href="inicio.php?pag=Eliminar_Consultorios">Borrar</a></li>
						</ul>

						<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menuCitas">
							<li><a href="inicio.php?pag=registro_Citas">Ingresar Citas</a></li>
							<li><a href="inicio.php?pag=Consulta_Citass">Consultar Citas</a></li>
							<li><a href="inicio.php?pag=Actualizar_Citas">Actualizar Citas</a></li>
							<li class="divider"></li>
							<li><a href="inicio.php?pag=Eliminar_Citas">Borrar</a></li>
						</ul>';
				}if($_SESSION['rol'] == 2){
					echo '
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menuConsultorio">
							<li><a href="inicio.php?pag=Consulta_Consultorios">Consultar Consultorios</a></li>
						</ul>

						<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span>

						<ul class="dropdown-menu" role="menuCitas">
							<li><a href="inicio.php?pag=Consulta_Citass">Consultar Citas</a></li>
							<li><a href="inicio.php?pag=Actualizar_Citas">Actualizar Citas</a></li>
						</ul></button>';
				}if($_SESSION['rol'] == 3){
					echo '
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menuCitas">
							<li><a href="inicio.php?pag=Registro_Citas">Agendar Citas</a></li>
							<li><a href="inicio.php?pag=Consulta_Citass">Consultar Citas</a></li>
						</ul>';
				};
			?>

			<button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" ><a href="index.php?pag=login">&nbsp; Cerrar sesion </a></button></center>

		</nav><br>
	</body>
</html>