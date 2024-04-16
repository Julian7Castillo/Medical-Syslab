<?php
  require "./Modelo/conecta.php";
  $objConexion = Conectarse();

  $sql="Select usucc, usuNombre, usuApellidos, Especialidad from usuarios Where usuRol = 2";
  $medicos=$objConexion->query($sql);

  $sql= "select usucc, usuNombre, usuApellidos from usuarios Where usuRol = 3";
  $pacientes=$objConexion->query($sql);

  $sql="select * from consultorios";
  $consultorios=$objConexion->query($sql);
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

	<body>
		<article class="col-xs-12">
			<h2 class="text-center">Registro de Citas</h2>					
			<FORM action= "/CentroMedico/Controlador/Validacion_insertar_Citas.php" method="post" class="form-horizontal">
				<p><h3><b>Datos de la cita</b><br></h3><br>
				<div class="form-group">
					<label class="control-label col-md-2">Fecha: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="date" name="fecha"><br><br>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2">Hora: </label>
					<div class="col-md-10">
						<INPUT class="form-control" type="time" name="hora"><br><br>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2">id Paciente: </label>
					<div class="col-md-10">
						<select class="form-control col-sm-5" name="paciente" id="paciente">
				          <option value="0">Seleccione Paciente</option>
				          <?php    
				          while ($paciente=$pacientes->fetch_object()){
				            ?>
				              <option value="<?php echo $paciente->idPaciente;?> ">
				              <?php echo $paciente->usucc." - ".$paciente->usuNombre." ".$paciente->usuApellidos;?>
				              </option>
				          <?php 
				          }
				          ?>
				        </select><br><br><br><br>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2">id Medico: </label>
					<div class="col-md-10">
						<select class="form-control col-sm-5" name="medico" id="medico">
				          <option value="0">Seleccione Medico</option>
				          <?php
				            while ($medico=$medicos->fetch_object()){
				            ?>
				                <option value="<?php echo $medico->idMedico;?>">
				                <?php echo $medico->usuNombre." ".$medico->usuApellidos. " ( ".$medico->Especialidad." )" ?> 
				                </option>
				            <?php 
				            }
				            ?>   
				        </select><br><br><br><br>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2">id Consultorio: </label>
					<div class="col-md-10">
						<select class="form-control col-sm-5" name="consultorio" id="consultorio">
				          <option value="0">Seleccione Consultorio</option>
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
				</div>
				<center><button class="btn btn-primary btn-lg" type="submit">Enviar Datos</button>
				<button class="btn btn-primary btn-lg"type="reset">Limpiar Formulario</button></center></p>
			</FORM><br><br>
		</article>
	</body>
<html>