<?php<?php
  require "../Modelo/conecta.php";
  $objConexion = Conectarse();

  $sql="Select idMedico, medNombres, medApellidos, medEspecialidad from medicos";
  $medicos=$objConexion->query($sql);

  $sql= "select idPaciente, pacIdentification, pacNombres, pacApellidos from pacientes";
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
		<article class="col-xs-12">
			<center><h2>Registro de Citas</h2>					
			<FORM action= "/CentroMedico/Controlador/Validacion_insertar_Citas.php" method="post" class="form-horizontal">
				<p><h3><b>Datos de la cita</b><br></h3></center><br>
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
				              <?php echo $paciente->pacIdentification." - ".$paciente->pacNombres." ".$paciente->pacApellidos;?>
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
				                <?php echo $medico->medNombres." ".$medico->medApellidos. " ( ".$medico->medEspecialidad." )" ?> 
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