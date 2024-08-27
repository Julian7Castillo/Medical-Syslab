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
		<!--questionario para ingresar nuevos medicos en la  pagina-->
		<article class="col-xs-12">
			<h2 class="text-center"><strong>REGISTRO DE USUARIOS</strong></h2>
			<FORM action= "Controlador/UsuarioController.php?op=crearUsuario" method="post" class="form-horizontal">
				<P><h3><b>Datos personales</b><br><br></h3>
				<h4>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="identificacion" placeholder="CC" require="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Nombre: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="ApellidoUsuario" placeholder="Nombre" require="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Apellido: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="nombreUsuario" placeholder="Apellido" require="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Rol: </label>
					<div class="col-md-10">
						<select class="form-control" name="rol" id="rol" require="">
							<option value="Administrador">Seleccionar</option>
					        <option value="Administrador">Administrador</option>
					        <option value="Medico">Medico</option>
					        <option value="Paciente">Paciente</option>
					     </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Fecha de Nacimiento: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="date" name="Fecha" placeholder="Fecha de nacimiento" require="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Sexo: </label>
					<div class="col-md-10">
						<select class="form-control" name="Sexo" id="Sexo" require="">
							<option value="seleccione">Seleccionar</option>
					        <option value="Masculino">Masculino</option>
					        <option value="Femenino">Femenino</option>
					     </select>
					</div>
				</div>
				<h3><b>Datos de Contacto</b><br><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Correo: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="email" name="email" placeholder="Email" require="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2">Telefono: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="phone" name="telefono" placeholder="Telefono" require="" >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Contraseña: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="password" name="password" placeholder="Contraseña" min="12" require="">
					</div>
				</div>
				<div class="center-div">
					<button class="btn btn-primary btn-lg" type="submit">Crear Usuario</button>
				</div></p></h4>
			</FORM>
		</article>
	</body>
<html>