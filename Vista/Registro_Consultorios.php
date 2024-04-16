<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css&style.css">
		<title>Centro Medico</title>
	</head>

	<body>
		<article class="col-xs-12">
			<h2 class="text-center">Registro de Consultorios</h2><br>
			<FORM action="/CentroMedico/Controlador/Validacion_insertar_Consultorio.php" method="post" class="form-horizontal">
			<P><h3><b>Datos del consultorio</b><br><br></h3>
			<div class="form-group">
				<label class="control-label col-md-3"> Nombre del consultorio: </label>
				<div class="col-md-9">
					<INPUT class="form-control" type="text" name="nombre_consultorio"placeholder="nombre consultorio"><br><br><br>
				</div>
			</div>
			<button class="btn btn-primary" type="submit">Enviar Datos</button>
			<button class="btn btn-primary"type="reset">Limpiar Formulario</button></P>
			</FORM></center><br><br><br><br>
		</article>
	</body>
<html>