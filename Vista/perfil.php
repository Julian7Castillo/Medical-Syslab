<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Centro Medico</title>
	</head>
	<body>
		<main class="col-xs-12">
			<b><h1 class="text-center"> PERFIL DE USUARIOO </h1></b>

			<FORM action= "/CentroMedico/Controlador/UsuarioController.php?op=ActualizarUsuario" method="post" class="form-horizontal">
				<P><h3><b>Datos personales</b></h3>
				<h4>

				<?php
			require "Modelo/conecta.php";
			require 'Modelo/ClaseUsuario.php';
			
			$usuario = new usuarioMedicalSyslab();
			$resultado = $usuario->Perfil($_SESSION['ccMedicalSyslab']);
			if (isset($resultado)) {
				if($resultado->num_rows >0 ){
					while($registro=$resultado->fetch_object()){
						echo '<div class="form-group">
								<label class="control-label col-md-2"> Identificación: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="identificacion" placeholder="CC" disabled value="' . htmlspecialchars($registro->usucc) . '">
								</div>
							</div>';
							
						echo '<div class="form-group">
								<label class="control-label col-md-2"> Nombre: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="nombreUsuario" placeholder="Nombre" disabled value="' . htmlspecialchars($registro->usuNombre) . '">
								</div>
							</div>';

						echo '<div class="form-group">
								<label class="control-label col-md-2"> Apellido: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="ApellidoUsuario" placeholder="Nombre" disabled value=' . htmlspecialchars($registro->usuApellidos) . '">
								</div>
							</div>';						
						
						echo '<div class="form-group">
								<label class="control-label col-md-2"> Fecha de Nacimiento: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="FechaNacimiento" placeholder="Fecha de nacimiento" disabled value="' . htmlspecialchars($registro->usuFechaNacimiento) . '">
								</div>
							</div>';

						echo '<div class="form-group">
								<label class="control-label col-md-2"> Sexo: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="Sexo" disabled value="' . htmlspecialchars($registro->usuSexo) . '">
								</div>
							</div>';

						echo '<div class="form-group">
								<label class="control-label col-md-2"> Email: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="Email" placeholder="Email" value="' . htmlspecialchars($registro->usuCorreo) . '">
								</div>
							</div>';

						echo '<div class="form-group">
								<label class="control-label col-md-2"> Telefono: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="text" name="Telefono" placeholder="Telefono" value="' . htmlspecialchars($registro->susTelefono) . '">
								</div>
							</div>';

						echo '<div class="form-group">
								<label class="control-label col-md-2"> Contraseña: </label>
								<div class="col-md-10">
									<INPUT class="form-control" type="Password" name="password" placeholder="Password" value="' . htmlspecialchars($registro->usuPassword) . '">
								</div>
							</div>';
					}
				}else{  
					echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';
				}
			}
			?>
				<center>
					<button class="btn btn-primary btn-lg" type="submit">Cambiar datos Datos</button>
				</center></p></h4>
			</FORM>
		</main>
	</body>
<html>