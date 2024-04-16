<?php
extract ($_REQUEST); 
require "./Modelo/conecta.php";
require "./Modelo/ClaseUsuario.php";
if (isset($_REQUEST['usLogin'])) {
$objUsuario= new Usuario();
$resultado=$objUsuario->ConsultarUsuario($_REQUEST['usLogin']);

	if (isset($resultado)) { 
	    if($resultado->num_rows >0 ){
	     	$registro=$resultado->fetch_object()?>
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
	<body><br>
		<h2 class="text-center">Eliminar Usuario</h2>
		<FORM action= "/CentroMedico/Controlador/Validacion_Borrar_Usuario.php" method="post" class="form-horizontal">
				<P><h3><b>Datos personales</b><br><br></h3>
				<h4><div class="form-group">
					<label class="control-label col-md-2"> Rol: </label>
					<div class="col-md-10">
						<select class="form-control" disabled="disabled" name="rol" id="rol">
							<option value="<?php echo $registro->nombre_rol?>"><?php echo $registro->nombre_rol?></option>
							<option value="Administrador">Seleccionar</option>
					     </select><br>
					</div>
				</div><br><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Identificación: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" disabled="disabled" name="identificacion" value="<?php echo $registro->usLogin?>" ><br><br>
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Nombre: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="text" disabled="disabled"name="nombreUsuario" value="<?php echo $registro->usunom?>"><br><br>
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-md-2"> Contraseña: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="password" disabled="disabled"name="password" value="<?php echo $registro->usuPassword?>"><br><br>
					</div><br>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"> Estado: </label>
					<div class="col-md-10">
						<select class="form-control" disabled="disabled" name="estado" id="estado" >
							<option value="<?php echo $registro->usuEstado?>"><?php echo $registro->usuEstado?></option>
					  </select><br>
					</div>
				</div>
				<center><br><button class="btn btn-primary btn-lg" type="submit">Eliminar Datos</button></center><br><br></h4></p>
			</FORM>
	</body>
</html>
<?php
  	}
  }
}
?>