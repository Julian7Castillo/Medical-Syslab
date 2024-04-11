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
		<article class="col-xs-12">
			<center><h2>Registro de Consultorios</h2><br>
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