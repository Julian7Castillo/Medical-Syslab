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
			<FORM action= "" method="post" class="form-horizontal"><!--"./Controlador/UsuarioController.php?op=ConsultarUsuario"--> 
				<P><h3><b>Digite el Documento de Indentidad del Usuario a Consultar</b><br><br></h3><h4>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación del consultorio: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="id" placeholder="CC"><br><br>
					</div>
				</div><br><br>
				<center>
					<button class="btn btn-primary btn-lg" type="submit">Buscar</button></P>
				</center></p><br><br></h4>
			</FORM>	
			<?php
			require "./Modelo/conecta.php";
			require './Modelo/ClaseUsuario.php';
			if (isset($_POST['id'])) {
				$usuario = new Usuario();
				$resultado = $usuario->ConsultarUsuario($_POST['id']);
				if (isset($resultado)) {
					if($resultado->num_rows >0 ){
						echo	'<h1 class="text-center">DATOS DEL USUARIO</h1>
								<table class="table table-hover text-center mt-3">
									<thead>
									<th class="text-center">CC.</th>
									<th class="text-center">Usuario</th>
									<th class="text-center">Rol</th>
									<th class="text-center">Nacimiento</th>
									<th class="text-center">Sexo</th>
									<th class="text-center">Correo</th>
									<th class="text-center">Telefono</th>
									<th class="text-center">Estado</th>
								
									</thead>
									<tbody>';
						while($registro=$resultado->fetch_object()){
							echo '<tr>';
							echo '<td>' . htmlspecialchars($registro->usucc) . '</td>';
							echo '<td>' . htmlspecialchars($registro->usuNombre) . ' ' . htmlspecialchars($registro->usuApellidos) . '</td>';
							echo '<td>' . htmlspecialchars($registro->nombre_rol) . '</td>';
							echo '<td>' . htmlspecialchars($registro->usuFechaNacimiento) . '</td>';
							echo '<td>' . htmlspecialchars($registro->usuSexo) . '</td>';
							echo '<td>' . htmlspecialchars($registro->usuCorreo) . '</td>';
							echo '<td>' . htmlspecialchars($registro->susTelefono) . '</td>';
							echo '<td>' . htmlspecialchars($registro->usuEstado) . '</td>';
							echo '</tr>';
						}
						echo '</tbody></table>';
					}else{  
						echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';
					}
				}else {
					echo '<div class="alert alert-danger text-center">Error en la consulta</div>';
				}
			}else{  
				
			}
			?>
		</article>
	</body>
<html>
