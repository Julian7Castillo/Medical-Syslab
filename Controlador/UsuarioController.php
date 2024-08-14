<?php
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	extract($_POST);
	require "../Modelo/conecta.php";
	require "../Modelo/ClaseUsuario.php";

	switch($_GET["op"]){
		case "crearUsuario":

			if($_POST['rol'] == 'Administrador'){
				$_POST['rol'] = 1;
		
			}else if($_POST['rol'] == 'Medico'){
				$_POST['rol']= 2;
		
			}else if($_POST['rol'] == 'Paciente'){
				$_POST['rol'] = 3;
			}

			$especialidad = "";

			if(!empty($_POST['especialidad'])){
				$especialidad = $_POST['especialidad'];
			}

			try{
				$objUsuario = New Usuario();
				$objUsuario->crearUsuario($_POST['identificacion'], $_POST['rol'], $_POST['nombreUsuario'], $_POST['ApellidoUsuario'], $_POST['Fecha'], $_POST['Sexo'], $_POST['email'], $_POST['telefono'],$especialidad,$_POST['password'], 'Activo');
				$resultado=$objUsuario->agregarUsuario();
			
				if($resultado)
					header("location:../index.php?pag=ingreso_Exitoso");
				else
					header("location:../index.php?pag=ingreso_Erroneo");
			}catch(Exception $e){
				echo "Error: " .$e->getMessage();
				header("location:../index.php?pag=ingreso_Erroneo");
			}
			break;

		case "ListarUsuario":
			break;

		case "ActualizarUsuario":

			$objupUsuario=New Usuario();
			$objupUsuario->crearUsuario($_POST['rol'], $_POST['identificacion'], $_POST['nombreUsuario'], $_POST['password'], $_POST['estado']);
			$resultado=$objupUsuario->ActualizarUsuario();
			
			if($resultado)
				header("location:../Vista/inicio.php?pag=ingresoExitoso");
			else
				header("location:../Vista/inicio.php?pag=ingresoErroneo");
			break;
		case "ConsultarUsuario":

			if (isset($_POST['usuario'])) {
				$objUsuario= new Usuario();
				$resultado=$objUsuario->ConsultarUsuario($_POST['usuario']);
				return $resultado;
				
			} else {
				header("location:../Vista/inicio.php?pag=ingresoErroneo");
			}
			break;

		case "EliminarUsuario":

			$objUsuario=New Usuario();
			$objUsuario->crearUsuario($_POST['rol'], $_POST['identificacion'], $_POST['nombreUsuario'], $_POST['password'], $_POST['estado']);
			$resultado=$objUsuario->BorrarUsuario();
			
			if($resultado)
				header("location:../Vista/inicio.php?pag=ingresoExitoso");
			else
				header("location:../Vista/inicio.php?pag=ingresoErroneo");
			break;
	}

?>
