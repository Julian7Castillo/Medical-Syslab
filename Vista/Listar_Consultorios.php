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
			<b><h2 class="text-center"> LISTADO DE CONSULTORIOS </h2></b>
			<?php
				require "./Modelo/conecta.php";
				require './Modelo/ClaseConsultorio.php';
				$consultorio = new Consultorio();
				$resultado = $consultorio->ListarConsultorios();
				if (isset($resultado)) {
					if($resultado->num_rows >0 ){
						echo	'<h1>Datos de consultorios</h1>
								<table class="table table-hover text-center mt-3">
									<thead>
										<th class="text-center">Identificacion.</th>
										<th class="text-center">Consultorio</th>
									</thead>
									<tbody>';
						while($registro=$resultado->fetch_object()){
							echo '<tr>';
							echo '<td>' . htmlspecialchars($registro->idConsultorio) . '</td>';
							echo '<td>' . htmlspecialchars($registro->conNombre) . '</td>';
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
		</article>
	</body>
<html>