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
			<center><h1>Consultar Citas</h1><br><br>
			<FORM action= "" method="post" class="form-horizontal">
				<P><h3><b>Digite el Documento de Indentidad del Paciente a Consultar</b></center><br><br></h3><h4>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación de usuario: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="usuario" placeholder="CC"><br><br>
					</div>
				</div><br><br>
				<center><button class="btn btn-primary btn-lg" type="submit">Buscar</button>
				</P></center></p><br><br></h4>
			</FORM>

		<?php
		require "../Modelo/conecta.php";
		require "../Modelo/ClaseCita.php";
		if (isset($_POST['usuario'])) {
			$objCita = new Cita();
			$resultado=$objCita->ConsultarCita($_POST['usuario']);
		if (isset($resultado))  
		{ if($resultado->num_rows >0 ){?>
		    
		  <h2>DATOS DE LAS CITAS</h2><br><br>
		 <table class="table table-hover text-center mt-3">
		  <thead>
		        <th class="text-center"> N </th>
		        <th class="text-center"> Fecha </th>
		        <th class="text-center"> Hora </th>
		        <th class="text-center"> Paciente </th>
		        <th class="text-center"> Medico </th>
		        <th class="text-center"> Consultorio </th>
		        <th class="text-center"> Estado </th>
		        <th class="text-center"> Observaciones </th>
		      </thead>
		 <?php
			while($registro=$resultado->fetch_object())
			{
			?>
			  <tr>
			    <td><?php echo $registro->idCita?></td>
			    <td><?php echo $registro->citFecha?></td>
			    <td><?php echo $registro->citHora?></td>
			    <td><?php echo $registro->citPaciente?></td>
			    <td><?php echo $registro->citMedico?></td>
			    <td><?php echo $registro->citConsultorio?></td>
			    <td><?php echo $registro->citEsado?></td>
			    <td><?php echo $registro->citObservaciones?></td>
			  </tr>  
			 <?php
			}  //cerrando el ciclo while
		?>
		</table>
		<?php 
			}else{  
				echo '<div class="alert alert-danger text-center">No hay Medicos en la base de datos</div>';
			}
		}
	}
		?>
		<br><br>
		</article>
	</body>
<html>