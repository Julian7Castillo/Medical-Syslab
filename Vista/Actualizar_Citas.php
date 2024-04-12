<?php
	extract ($_REQUEST); 
	require "./Modelo/conecta.php";
	require "./Modelo/ClaseCita.php";
	require "./Modelo/ClaseUsuario.php";
	require "./Modelo/ClaseConsultorio.php";

	$objConexion = Conectarse();

  	$sql="Select idMedico, medNombres, medApellidos, medEspecialidad from medicos";
  	$medicos=$objConexion->query($sql);

  	$sql= "select idPaciente, pacIdentification, pacNombres, pacApellidos from pacientes";
  	$pacientes=$objConexion->query($sql);

  	$sql="select * from consultorios";
  	$consultorios=$objConexion->query($sql);

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
		<FORM action= "/CentroMedico/Controlador/Validacion_Actualizar_Citas.php" method="post" class="form-horizontal">
			<P><h3><b>Datos personales</b></center><br><br></h3>
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
					<INPUT class="form-control" type="text" name="Fecha" value="<?php echo $registro->citFecha?>"><br><br>
				</div>
			</div><br><br>
			<div class="form-group">
				<label class="control-label col-md-2"> Hora: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" name="hora" value="<?php echo $registro->citHora?>"><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Paciente: </label>
				<div class="col-md-10">
					<select class="form-control col-sm-5" name="paciente" id="paciente">
				    <option value="0"><?php echo $registro2->pacNombres?> <?php echo $registro2->pacApellidos?></option>
				      <?php    
				          while ($paciente=$pacientes->fetch_object()){
				      ?>
				   	<option value="<?php echo $paciente->idPaciente;?> ">
				      <?php echo $paciente->pacIdentification." - ".$paciente->pacNombres." ".$paciente->pacApellidos;?>
				    </option>
				      <?php 
				        }
				      ?>
				  </select><br><br><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Medico: </label>
				<div class="col-md-10">
					<select class="form-control col-sm-5" name="medico" id="medico">
	          <option value="0"><?php echo $registro3->medNombres?> <?php echo $registro3->medApellidos?></option>
	          <?php
	            while ($medico=$medicos->fetch_object()){
	            ?>
	                <option value="<?php echo $medico->idMedico;?>">
	                <?php echo $medico->medNombres." ".$medico->medApellidos. " ( ".$medico->medEspecialidad." )" ?> 
	                </option>
	            <?php 
	            }
	            ?>   
	        </select><br><br><br><br>
				</div><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> Consultorio: </label>
				<div class="col-md-10">
					<select class="form-control col-sm-5" name="consultorio" id="consultorio">
	          <option value="0"><?php echo $registro4->conNombre?></option>
	          <?php
	            while ($consultorio=$consultorios->fetch_object()){
	            ?>
	                <option value="<?php echo $consultorio->idConsultorio;?> ">
	                <?php echo $consultorio->conNombre?>
	                </option>
	            <?php
	            } 
	            ?>
	        </select><br><br><br><br>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"> estado: </label>
				<div class="col-md-10">
					<select class="form-control" name="estado" id="estado" >
						<option value="<?php echo $registro->citEstado?>"><?php echo $registro->citEsado?></option>
				        <option value="Medico">Asignado</option>
				        <option value="Paciente">Atendido</option>
				     </select><br><br>
				</div>
				<div class="form-group">
				<label class="control-label col-md-2"> Observaciones: </label>
				<div class="col-md-10">
					<INPUT class="form-control" type="text" name="observaciones" value="<?php echo $registro->citObservaciones?>"><br><br>
				</div><br><br>
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