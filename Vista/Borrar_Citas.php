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
		<article>
			<center><br><h1> Eliminar Citas </h1><br><br></center>

			<FORM action= "" method="post" class="form-horizontal">
				<P><h3><b>Datos </b></center><br><br></h3>
				<div class="form-group">
					<label class="control-label col-md-2"> Id Cita: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="idcit" placeholder="ID"></INPUT></P>
					</div>					
				</div>	
				<center><button class="btn btn-primary btn-lg" type="submit">Buscar</button><br><br>		
			</FORM>
			<?php
		extract ($_POST); 
		require "../Modelo/conecta.php";
		require "../Modelo/ClaseCita.php";
		require "../Modelo/ClasePaciente.php";
		require "../Modelo/ClaseMedico.php";
		require "../Modelo/ClaseConsultorio.php";

		if (isset($_POST['idcit'])) {
			$objCita= new Cita();
			$resultado=$objCita->ConsultarCita($_POST['idcit']);
			
		if (isset($resultado))  
		{ if($resultado->num_rows >0 ){?>
		    
		  <h1 align="center">DATOS DEL PACIENTE</h1><br>
		 <table class="table table-hover text-center mt-3">
		  <thead>
		  		<th class="text-center">N</th>
		        <th class="text-center">Fecha</th>
		        <th class="text-center">Hora</th>
		        <th class="text-center">Paciente</th>
		        <th class="text-center">Medico</th>
		        <th class="text-center">Consultorio</th>
		        <th class="text-center">estado</th>
		        <th class="text-center">Observaciones</th>		        
		   </thead>
		 <?php

			while($registro=$resultado->fetch_object())
			{
				$objPaciente = new Paciente();
				$resultado2 = $objPaciente->ConsultarPacientecit($registro->citPaciente);
				$registro2 = $resultado2->fetch_object();

				$objMedico = new Medico();
				$resultado3 = $objMedico->ConsultarMedicocit($registro->citMedico);
				$registro3 = $resultado3->fetch_object();

				$objConsultorio = new Consultorio();
				$resultado4 = $objConsultorio->ConsultarConsultorio($registro->citConsultorio);
				$registro4 = $resultado4->fetch_object();
			?>
			  <tr>
			    <td><?php echo $registro->idCita?></td>
			    <td><?php echo $registro->citFecha?></td>
			    <td><?php echo $registro->citHora?></td>
			    <td><?php echo $registro2->pacNombres?> <?php echo $registro2->pacApellidos?></td>
			    <td><?php echo $registro3->medNombres?> <?php echo $registro3->medApellidos?></td>
			    <td><?php echo $registro4->conNombre?></td>	
			    <td><?php echo $registro->citEsado?></td>
			    <td><?php echo $registro->citObservaciones?></td>
			    <td><a href="inicio.php?pag=Eliminacion_Citas&idCita=<?php echo $registro->idCita?>">
      			<span class="class btn btn-warning">Eliminar</span>
    			</a></td>		      
			  </tr> 
					 <?php
					}  //cerrando el ciclo while
				?>
				</table>
			<?php 
				}else{  
					echo '<div class="alert alert-danger text-center">La Cita No existe en la base de datos</div>';}
				}
			}
			?>	
		</article>
	</body>
<html>