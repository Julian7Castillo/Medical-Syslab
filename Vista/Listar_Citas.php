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
			<b><h2 class="text-center"> LISTADO DE CITAS </h2></b>

			<?php
				require "./Modelo/conecta.php";
				require './Modelo/ClaseCita.php';
				$Cita = new Cita();
				$resultado = $Cita->ListarCitas();
				if (isset($resultado)) {
					if($resultado->num_rows >0 ){
						echo	'<h1>Datos de Citas</h1>
								<table class="table table-hover text-center mt-3">
									<thead>
									<th class="text-center">id.</th>
									<th class="text-center">Paciente</th>
									<th class="text-center">Medico</th>
									<th class="text-center">Consultorio</th>
									<th class="text-center">Fecha</th>
									<th class="text-center">Hora</th>
									<th class="text-center">Estado</th>
									<th class="text-center">Observaciones</th>
								
									</thead>
									<tbody>';
						while($registro=$resultado->fetch_object()){
							echo '<tr>';
							echo '<td>' . htmlspecialchars($registro->idCita) . '</td>';
							echo '<td>' . htmlspecialchars($registro->pacienteNombre) . ' ' . htmlspecialchars($registro->pacienteApellidos) . '</td>';
							echo '<td>' . htmlspecialchars($registro->medicoNombre) . ' ' . htmlspecialchars($registro->medicoApellidos) . '</td>';
							echo '<td>' . htmlspecialchars($registro->conNombre) . '</td>';
							echo '<td>' . htmlspecialchars($registro->citFecha) . '</td>';
							echo '<td>' . htmlspecialchars($registro->citHora) . '</td>';
							echo '<td>' . htmlspecialchars($registro->citEstado) . '</td>';
							echo '<td>' . htmlspecialchars($registro->citObservaciones) . '</td>';
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