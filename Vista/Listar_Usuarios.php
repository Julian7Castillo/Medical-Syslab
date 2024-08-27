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
		<article class="col-xs-12">
			<b><h2 class="text-center"><strong>LISTADO DE USUARIOS</strong></h2></b>
				<?php
				require "./Modelo/conecta.php";
				require './Modelo/ClaseUsuario.php';
				$usuario = new usuarioMedicalSyslab();
				$resultado = $usuario->ListarUsuarios();
				if (isset($resultado)) {
					if($resultado->num_rows >0 ){
						echo	'<h1>Datos de Usuarios</h1>
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
							echo '<td>
									<button class="ButtonSetting">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
											<path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
											<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
										</svg>
									</button>
									<button class="buttonDelete">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
											<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
											<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
										</svg>	
									</button>
									</td>';
							echo '</tr>';
						}
						echo '</tbody></table>';
					}else{  
						echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';
					}
				}else {
					echo '<div class="alert alert-danger text-center">Error en la consulta</div>';
				}
				?>
				</tbody>
			</table>
		</article>
	</body>
<html>