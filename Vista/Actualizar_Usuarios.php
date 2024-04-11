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
			<center><h2>Actualizar Usuarios</h2>
			<FORM action= "" method="post" class="form-horizontal">
				<P><h3><b>Digite el Documento de Indentidad del Usuario</b></center><br><br></h3><h4>
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
		extract ($_POST); 
		require "../Modelo/conecta.php";
		require "../Modelo/ClaseUsuario.php";

		if (isset($_POST['usuario'])) {
			$objUsuario= new Usuario();
			$resultado=$objUsuario->ConsultarUsuario($_POST['usuario']);
		if (isset($resultado))  
		{ if($resultado->num_rows >0 ){?>
		    
		  <h1 align="center">DATOS DEL USUARIO</h1><br>
		 <table class="table table-hover text-center mt-3">
		  <thead>
		        <th class="text-center">Usuario.</th>
		        <th class="text-center">Nombre</th>
		        <th class="text-center">Password</th>
		        <th class="text-center">Estado</th>
		        <th class="text-center">Rol</th>
		        <th class="text-center">Accion</th>
		        
		      </thead>
		 <?php
			while($registro=$resultado->fetch_object())
			{
			?>
			  <tr>
			    <td><?php echo $registro->usLogin?></td>
			    <td><?php echo $registro->usunom?></td>
			    <td><?php echo $registro->usuPassword?></td>
			    <td><?php echo $registro->usuEstado?></td>
			    <td><?php echo $registro->nombre_rol?></td>	
			    <td><a href="inicio.php?pag=Edicion_Usuarios&usLogin=<?php echo $registro->usLogin?>">
      			<span class="class btn btn-warning">Editar</span>
    			</a></td>		      
			  </tr> 
					 <?php
					}  //cerrando el ciclo while
				?>
				</table>
			<?php 
				}else{  
					echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';}
				}
			}
			?>	
		</article>
	</body>
<html>