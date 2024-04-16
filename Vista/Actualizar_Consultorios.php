<?php
extract ($_REQUEST); 
require "./Modelo/conecta.php";
require "./Modelo/ClaseConsultorio.php";
if (isset($_REQUEST['idConsultorio'])) {
$objConsultorio= new Consultorio();
$resultado=$objConsultorio->ConsultarConsultorio($_REQUEST['idConsultorio']);

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
		<h2 class="text-center">Actualizar Consultorio</h2>
		<FORM action= "/CentroMedico/Controlador/Validacion_Actualizar_Consultorio.php" method="post" class="form-horizontal">
			<P><h3><b> Datos </b><br><br></h3>
			<h4>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Identificación: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" id="identificacion" name="identificacion" value="<?php echo $registro->idConsultorio?>" ><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Nombre: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" name="nombre" value="<?php echo $registro->conNombre?>"><br><br>
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