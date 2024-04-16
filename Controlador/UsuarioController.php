<?php
    //insertar usuario
	session_start();
	extract($_POST);
	require"./Modelo/Conecta.php";
	require"./Modelo/ClaseUsuario.php";
	
	if($_POST['rol'] == 'Administrador'){
		$_POST['rol'] = 1;

	}if($_POST['rol'] == 'Medico'){
		$_POST['rol']= 2;

	}if($_POST['rol'] == 'Paciente'){
		$_POST['rol'] = 3;

	}

	$objUsuario=New Usuario();
	$objUsuario->crearUsuario($_POST['rol'], $_POST['identificacion'], $_POST['nombreUsuario'], $_POST['password'], 'Activo');
	$resultado=$objUsuario->agregarUsuario();
	
	if($resultado)
		header("location:./Vista/inicio.php?pag=ingresoExitoso");
	else
		header("location:./Vista/inicio.php?pag=ingresoErroneo");

	//Listar

	//Consultar

	//Actualizar
	session_start();
	extract($_POST);
	require"../Modelo/Conecta.php";
	require"../Modelo/ClaseUsuario.php";
	
	if($_POST['rol'] == 'Administrador'){
		$_POST['rol'] = 1;

	}if($_POST['rol'] == 'Medico'){
		$_POST['rol']= 2;

	}if($_POST['rol'] == 'Paciente'){
		$_POST['rol'] = 3;

	}

	$objupUsuario=New Usuario();
	$objupUsuario->crearUsuario($_POST['rol'], $_POST['identificacion'], $_POST['nombreUsuario'], $_POST['password'], $_POST['estado']);
	$resultado=$objupUsuario->ActualizarUsuario();
	
	if($resultado)
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	else
		header("location:../Vista/inicio.php?pag=ingresoErroneo");

	//Eliminar
	session_start();
	extract($_POST);
	require"../Modelo/Conecta.php";
	require"../Modelo/ClaseUsuario.php";

	$objUsuario=New Usuario();
	$objUsuario->crearUsuario($_POST['rol'], $_POST['identificacion'], $_POST['nombreUsuario'], $_POST['password'], $_POST['estado']);
	$resultado=$objUsuario->BorrarUsuario();
	
	if($resultado)
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	else
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
?>
