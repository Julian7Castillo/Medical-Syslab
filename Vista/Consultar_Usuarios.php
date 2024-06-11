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
			<h2 class="text-center">Consultar Usuario</h2>
			<FORM action= "./Controlador/UsuarioController.php?op=ConsultarUsuario" method="post" class="form-horizontal">
				<P><h3><b>Digite el Documento de Indentidad del Usuario a Consultar</b><br><br></h3><h4>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación de usuario: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="usuario" placeholder="CC"><br><br>
					</div>
				</div><br><br>
				<center><button class="btn btn-primary btn-lg" type="submit">Buscar</button>
				</P></center></p><br><br></h4>
			</FORM>	
		</article>
	</body>
<html>
