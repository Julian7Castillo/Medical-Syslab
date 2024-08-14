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
			<h2 class="text-center">CONSULTAR CONSULTORIO</h2>
			<FORM action= "" method="post" class="form-horizontal">
				<P><h3><b>Digite el Documento de Indentidad del Paciente a Consultar</b><br><br></h3><h4>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación de usuario: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="id" placeholder="CC"><br><br>
					</div>
				</div><br><br>
				<center><button class="btn btn-primary btn-lg" type="submit">Buscar</button>
				</P></center></p><br><br></h4>
			</FORM>

		<?php
		require "./Modelo/conecta.php";
		require "./Modelo/ClaseConsultorio.php";
		if (isset($_POST['id'])) {
			$objConsultorio= new Consultorio();
			$resultado=$objConsultorio->ConsultarConsultorio($_POST['id']);
			if (isset($resultado)) { 
				if($resultado->num_rows >0 ){
		?>
		    
		 	<h2>DATOS DE LOS CONSULTORIOS</h2><br><br>
		 	<table class="table table-hover text-center mt-3">
		  		<thead>
					<th class="text-center"> N </th>
					<th class="text-center"> Nombre </th>
				</thead>
		<?php
				while($registro=$resultado->fetch_object()){
		?>
				<tr>
					<td><?php echo $registro->idConsultorio?></td>
					<td><?php echo $registro->conNombre?></td>
				</tr>  
				<?php
				}  //cerrando el ciclo while
		?>
		</table>
		<?php 
			}else{  
				echo '<div class="alert alert-danger text-center">No hay Consultorios en la base de datos</div>';
			}
		}
	}
		?>
		<br><br>
		</article>
	</body>
<html>