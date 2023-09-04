<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<title>menu</title>
	</head>
	<body>
		<nav class="col-xs-12">
			<center>
			<div class="btn-group">
				<button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle"><a href="index.php?pag=bienvenida">&nbsp; Inicio </a></button>
			</div>
			<?php
				if($_SESSION['rol'] == 1){
					echo '<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Medicos <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=registro_medicos">Ingresar</a></li>
						<li><a href="inicio.php?pag=Consulta_Medicos">Consultar</a></li>
						<li><a href="inicio.php?pag=Actualizar_Medicos">Actualizar</a></li>
						<li class="divider"></li>
						<li><a href="inicio.php?pag=Eliminar_Medicos">Borrar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Pacientes <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=registro_Pacientes">Ingresar</a></li>
						<li><a href="inicio.php?pag=Consulta_Pacientes">Consultar</a></li>
						<li><a class="dropdown-item" href="inicio.php?pag=Actualizar_Pacientes">Actualizar</a></li>
						<li class="divider"></li>
						<li><a class="dropdown-item" href="inicio.php?pag=Eliminar_Pacientes">Borrar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=registro_Consultorio">Ingresar</a></li>
						<li><a href="inicio.php?pag=Consulta_Consultorios">Consultar</a></li>
						<li><a href="inicio.php?pag=Actualizar_Consultorios">Actualizar</a></li>
						<li class="divider"></li>
						<li><a href="inicio.php?pag=Eliminar_Consultorios">Borrar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Citas <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=registro_Citas">Ingresar</a></li>
						<li><a href="inicio.php?pag=Consulta_Citass">Consultar</a></li>
						<li><a href="inicio.php?pag=Actualizar_Citas">Actualizar</a></li>
						<li class="divider"></li>
						<li><a href="inicio.php?pag=Eliminar_Citas">Borrar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> usuario <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Registro_Usuarios">Ingresar nuevo usuario </a></li>
						<li><a href="inicio.php?pag=Consultar_Usuarios">Consultar Usuarios </a></li>
						<li><a href="inicio.php?pag=Actualizar_Usuarios">Actualizar Usuarios</a></li>
						<li class="divider"></li>
						<li><a href="inicio.php?pag=Eliminar_Usuarios">Borrar Usuarios </a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Registros <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Lista_Usuarios">Registros de Usuarios</a></li>
						<li><a href="inicio.php?pag=Lista_Medicos">Registros de Medicos</a></li>
						<li><a href="inicio.php?pag=Lista_Pacientes">Registros de Pacientes</a></li>
						<li><a href="inicio.php?pag=Lista_Consultorios">Registros de Consultorios</a></li>
						<li><a href="inicio.php?pag=Lista_Citas_Asignadas">Registros de Citas asignadas</a></li>
						<li><a href="inicio.php?pag=Lista_Citas_Atendidas">Registros de Citas atendidas</a></li>
						</ul>
					</div>';
				}if($_SESSION['rol'] == 2){
					echo '<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Medicos <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Consulta_Medicos">Consultar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Pacientes <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Consulta_Pacientes">Consultar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Consulta_Consultorios">Consultar</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Citas <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Consulta_Citass">Consultar</a></li>
						<li><a href="inicio.php?pag=Actualizar_Citas">Actualizar</a></li>
						</ul>
					</div>';
				}if($_SESSION['rol'] == 3){
					echo '<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown"> Citas <span class="caret"></span></button>

						<ul class="dropdown-menu" role="menu">
						<li><a href="inicio.php?pag=Registro_Citas">Agendar Citas</a></li>
						<li><a href="inicio.php?pag=Consulta_Citass">Consultar Citas</a></li>
						</ul>
					</div>';
					
				}
				echo '<div class="btn-group">
					<button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle" ><a href="index.php?pag=login">&nbsp; Cerrar sesion </a></button>
				</div></center>';
			?>
		</nav><br>
	</body>
</html>