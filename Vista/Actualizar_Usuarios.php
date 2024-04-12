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
		<FORM action= "/CentroMedico/Controlador/Validacion_Actualizar_Usuarios.php" method="post" class="form-horizontal">
			<P><h3><b>Datos personales</b></center><br><br></h3>
			<h4><div class="form-group">
				<label class="control-label col-md-2"> Rol: </label>
				<div class="col-md-10">
					<select class="form-control" name="rol" id="rol" value="<?php echo $registro->nombre_rol?>">
								<option value="<?php echo $registro->nombre_rol?>"><?php echo $registro->nombre_rol?></option>
				        <option value="Administrador">Administrador</option>
				        <option value="Medico">Medico</option>
				        <option value="Paciente">Paciente</option>
				     </select><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Identificación: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="identificacion" value="<?php echo $registro->usLogin?>" ><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Nombre: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" name="nombreUsuario" value="<?php echo $registro->usunom?>"><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Contraseña: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="password" name="password" value="<?php echo $registro->usuPassword?>"><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Estado: </label>
				<div class="col-md-10">
					<select class="form-control" name="estado" id="estado" >
						<option value="<?php echo $registro->usuEstado?>"><?php echo $registro->usuEstado?></option>
				        <option value="Administrador">Activo</option>
				        <option value="Medico">inactivo</option>
				        <option value="Paciente">Bloqueado</option>
				     </select><br><br>
				</div>
			<center><button class="btn btn-primary btn-lg" type="submit"> Actualizar Datos</button></P></center></p><br><br></h4>
		</FORM>
	</body>
</html>
<?php
  	}
  }
}
?>
