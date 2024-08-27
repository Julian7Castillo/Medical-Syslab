<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<title>menu</title>
	</head> 
	<body>
		<nav class="col-xs-12 containers btn-group menu-centrado">

			<div class="center-div">

			<?php
			
				if($_SESSION['rolMedicalSyslab'] == 1){
					?>
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Usuarios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuUsuario">
								<li><a href="index.php?pag=Registro_Usuarios">Registrar Usuarios </a></li>
								<li><a href="index.php?pag=Consultar_Usuarios">Consultar Usuarios </a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Listar_Usuarios">Listar Usuarios </a></li>
							</ul>
						</div>
					</div>

					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuConsultorio">
								<li><a href="index.php?pag=Registro_Consultorios">Registrar Consultorios </a></li>
								<li><a href="index.php?pag=Consultar_Consultorios">Consultar Consultorios</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Listar_Consultorios">Listar Consultorios </a></li>
							</ul>
						</div>
					</div>
					
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menuCitas">
								<li><a href="index.php?pag=Registro_Citas">Registrar Citas</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Listar_Citas">Listar Citas</a></li>
							</ul>
						</div>
					</div>
					<?php
				}if($_SESSION['rolMedicalSyslab'] == 2){
					?>
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuConsultorio">
								<li><a href="index.php?pag=Listar_Consultorios">Listar Consultorios </a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Consultar_Consultorios">Consultar Consultorios</a></li>
							</ul>
						</div>
					</div>

					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menuCitas">
								<li><a href="index.php?pag=Registro_Citas">Agendar Citas Personal</a></li>
								<li><a href="index.php?pag=Listar_Citas">Listar Citas Personales</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pag=Listar_Citas">Listar Citas Asignadas</a></li>
							</ul>
						</div>
					</div>
					<?php
				}if($_SESSION['rolMedicalSyslab'] == 3){
					?>
					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Consultorios <span class="caret"></span></button>

							<ul class="dropdown-menu" role="menuConsultorio">
								<li><a href="index.php?pag=Listar_Consultorios">Listar Consultorios </a></li>
							</ul>
						</div>
					</div>

					<div class="btn-group">
						<div class="dropdown">
							<button type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" data-toggle="dropdown"> Citas <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menuCitas">
								<li><a href="index.php?pag=Registro_Citas">Agendar Citas</a></li>
								<li><a href="index.php?pag=Listar_Citas">Listar Citas</a></li>
							</ul>
						</div>
					</div>
					<?php
				};
			?>

			<button style=background-color:white type="button" class="btn btn-primary btn-lg dropdown-toggle btn-ajus" ><a href="./Controlador/Logout.php">&nbsp; Cerrar sesion </a></button>
			</div>
		</nav><br>
	</body>
</html>