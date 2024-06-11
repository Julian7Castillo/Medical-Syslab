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
		<article class="resultOperation">
			<b><h2 class="text-center"> Listado de Usuarios </h2></b>

			<h1 align="center">DATOS DEL USUARIO</h1>
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
			<?php
				while($registro=$resultado->fetch_object()){
			?>
				<tr>
					<td><?php echo $registro->usucc?></td>
					<td><?php echo $registro->usuNombre?><?php echo $registro->usuApellido?></td>
					<td><?php echo $registro->usuRol?></td>
					<td><?php echo $registro->usuFechaNacimiento?></td>
					<td><?php echo $registro->usuRol?></td>
					<td><?php echo $registro->usuRol?></td>
					<td><?php echo $registro->usuRol?></td>
					<td><?php echo $registro->usuRol?></td>
					<td><?php echo $registro->usuEstado?></td>
				</tr>  
			<?php
				}  //cerrando el ciclo while
			?>
		</table>
		</article>
	</body>
<html>