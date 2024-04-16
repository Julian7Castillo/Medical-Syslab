<?php
	extract ($_REQUEST); 
	require "./Modelo/conecta.php";
	require "./Modelo/ClaseCita.php";
	require "./Modelo/ClaseUsuario.php";
	require "./Modelo/ClaseConsultorio.php";

	if (isset($_REQUEST['idCita'])) {
	$objCita= new Cita();
	$resultado=$objCita->ConsultarCita($_REQUEST['idCita']);

		if (isset($resultado)) { 
		    if($resultado->num_rows >0 ){
		     	$registro=$resultado->fetch_object();

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
		<h2 class="text-center">Eliminar Citas</h2>
		<FORM action= "/CentroMedico/Controlador/Validacion_Borrar_Citas.php" method="post" class="form-horizontal">
			<P><h3><b>Datos personales</b><br><br></h3>
			<h4>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Identificación: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="identificacion" value="<?php echo $registro->idCita?>" ><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2">Fecha: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="fecha" value="<?php echo $registro->citFecha?>"><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Hora: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="hora" value="<?php echo $registro->citHora?>"><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Paciente: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="pac" value="<?php echo $registro2->pacNombres?> <?php echo $registro2->pacApellidos?>"><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Medico: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="med" value="<?php echo $registro3->medNombres?> <?php echo $registro3->medApellidos?>"><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Consultorio: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="con" value="<?php echo $registro4->conNombre?>"><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> estado: </label>
				<div class="col-md-10">
					<select class="form-control" disabled="disabled" name="sexo" id="estado" >
						<option value="<?php echo $registro->citEstado?>"><?php echo $registro->citEsado?></option>
				  </select><br><br>
				</div>
				<div class="form-group">
				<label class="control-label col-md-2"> Observaciones: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" disabled="disabled" name="observaciones" value="<?php echo $registro->citObservaciones?>"><br><br>
				</div><br><br>
			</div>
			<center><button class="btn btn-primary btn-lg" type="submit"> Eliminar Datos</button></P></center></p><br><br></h4>
		</FORM>
	</body>
</html>
<?php
  	}
  }
}
?>