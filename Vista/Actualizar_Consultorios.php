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
			<center><br><h1> Actualizar datos de Consultorio </h1><br><br></center>

			<FORM action= "" method="post" class="form-horizontal">
				<P><h3><b>Datos </b></center><br><br></h3>
				<div class="form-group">
					<label class="control-label col-md-2"> Id de consultorio: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" name="id" placeholder="CC"></INPUT></P>
					</div>					
				</div>	
				<center><button class="btn btn-primary btn-lg" type="submit">Buscar</button><br>			
			</FORM>
			<?php
		extract ($_POST); 
		require "../Modelo/conecta.php";
		require "../Modelo/ClaseConsultorio.php";

		if (isset($_POST['id'])) {
			$objConsultorio= new Consultorio();
			$resultado=$objConsultorio->ConsultarConsultorio($_POST['id']);
		if (isset($resultado))  
		{ if($resultado->num_rows >0 ){?>
		    
		  <h1 align="center">DATOS DEL CONSULTORIO</h1><br>
		 <table class="table table-hover text-center mt-3">
		  <thead>
		  		<th class="text-center">N</th>
		        <th class="text-center">Nombre</th>		        
		   </thead>
		 <?php
			while($registro=$resultado->fetch_object())
			{
			?>
			  <tr>
			    <td><?php echo $registro->idConsultorio?></td>
			    <td><?php echo $registro->conNombre?></td>	
			    <td><a href="inicio.php?pag=Edicion_Consultorio&idConsultorio=<?php echo $registro->idConsultorio?>">
      			<span class="class btn btn-warning">Editar</span>
    			</a></td>		      
			  </tr> 
					 <?php
					}  //cerrando el ciclo while
				?>
				</table>
			<?php 
				}else{  
					echo '<div class="alert alert-danger text-center">El Consultorio No existe en la base de datos</div>';}
				}
			}
			?>	
		<br></article>
	</body>
<html>