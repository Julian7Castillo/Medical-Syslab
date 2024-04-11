<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Centro Medico</title>

		<!--estilos css edicionales personalizados-->
		<style type="text/css">
			a:link{
				color: blue;
			}
			header{
				background:#2c3e5a;
				color:#fff;
			}
			nav{
				background:black;
				color:#fff;
			}
			aside{
				background: #c0392b;
				color: #fff;
			}
			footer{
				background: #2c3e5a;
				color: #fff;
			}
		</style>
	</head>

	<body>
		<!--questionario para ingresar nuevos medicos en la  pagina-->
		<article class="col-xs-12">
			<center><h2>Registro de Usuarios</h2>
			<FORM action= "/CentroMedico/Controlador/Validacion_Insertar_Usuario.php" method="post" class="form-horizontal">
				<P><h3><b>Datos personales</b></center><br><br></h3>
				<h4><div class="form-group">
					<label class="control-label col-md-2"> Rol: </label>
					<div class="col-md-10">
						<select class="form-control" name="rol" id="rol">
							<option value="Administrador">Seleccionar</option>
					        <option value="Administrador">Administrador</option>
					        <option value="Medico">Medico</option>
					        <option value="Paciente">Paciente</option>
					     </select><br><br>
					</div>
				</div><br><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="identificacion" placeholder="CC"><br><br>
					</div>
				</div><br><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Nombre: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="nombreUsuario" placeholder="Nombre"><br><br>
					</div>
				</div><br><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Contraseña: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="password" name="password" placeholder="Contraseña"><br><br>
					</div><br><br>
				</div>
				<center><button class="btn btn-primary btn-lg" type="submit">Enviar Datos</button>
				<button class="btn btn-primary btn-lg"type="reset">Limpiar Formulario</button></P></center></p><br><br></h4>
			</FORM>
		</article>
	</body>
<html>