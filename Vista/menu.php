<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<title>menu</title>
	</head>
	<body>
		<nav class="col-xs-12 containers btn-group">

			<center><button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus"><a href="index.php?pag=bienvenida">&nbsp; Inicio </a></button>
			<button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus"><a href="index.php?pag=perfil">&nbsp; Perfil </a></button>

			<?php
				if($_SESSION['rol'] == 1){
					echo '
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Usuarios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuUsuario">
								<li><a href="index.php?pag=Registro_Usuarios">Registrar Usuarios </a></li>
								<li><a href="index.php?pag=Listar_Usuarios">Listar Usuarios </a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Consultar_Usuarios">Consultar Usuarios </a></li>
							</ul>
						</div>
					</div>
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuConsultorio">
								<li><a href="index.php?pag=Registro_Consultorios">Ingresar Consultorios</a></li>
								<li><a href="index.php?pag=Listar_Consultorios">Listar Consultorios</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Consultar_Consultorios">Consultar Consultorios</a></li>
							</ul>
						</div>
					</div>
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuCitas">
								<li><a href="index.php?pag=Registro_Citas">Ingresar Citas</a></li>
								<li><a href="index.php?pag=Listar_Citas">Listar Citas</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Consultar_Citas">Consultar Citas</a></li>
							</ul>
						</div>
					</div>';
				}if($_SESSION['rol'] == 2){
					echo '
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuConsultorio">
								<li><a href="index.php?pag=Consulta_Consultorios">Consultar Consultorios</a></li>
							</ul>
						</div>
					</div>
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span>

							<ul class="dropdown-menu" role="menuCitas">
								<li><a href="inicio.php?pag=Consulta_Citass">Consultar Citas</a></li>
								<li><a href="inicio.php?pag=Actualizar_Citas">Actualizar Citas</a></li>
							</ul></button>
						</div>
					</div>';
				}if($_SESSION['rol'] == 3){
					echo '
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuCitas">
								<li><a href="inicio.php?pag=Registro_Citas">Agendar Citas</a></li>
								<li><a href="inicio.php?pag=Consultae_Citas">Consultar Citas</a></li>
							</ul>
						</div>
					</div>';
				};
			?>

			<button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" ><a href="./Controlador/Logout.php">&nbsp; Cerrar sesion </a></button></center>

		</nav><br>
	</body>
</html>