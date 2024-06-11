<?php
	//Insertar
	include("./Modelo/conecta.php");
	require "./Modelo/ClaseConsultorio.php";

	//guarda los datos en la base de datos 
	$objConsultorio=New Consultorio();
	$objConsultorio->crearConsultorio($_POST['nombre_consultorio']); 
	$resultado=$objConsultorio->agregarConsultorio();
	
	if($resultado){
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	}
	else{
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
	}

	//listar

	//consultar

	//actualizar
	//llama a la conexion con la base de datos
	include("./Modelo/conecta.php");
	require "./Modelo/ClaseConsultorio.php";

	//guarda los datos en la base de datos 
	$objConsultorio=New Consultorio();
	$resultado=$objConsultorio->ActualizarConsultorio($_POST['identificacion'],$_POST['nombre']);
	
	if($resultado){
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	}else{
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
	}
	//eliminar
	session_start();
	extract($_REQUEST); 
	//imprime un mensaje para asegurar el guardado de datos
	//print("los datos insertados son: $_POST['nombre']");

	//llama a la conexion con la base de datos
	include("../Modelo/conecta.php");
	require "../Modelo/ClaseConsultorio.php";

	//guarda los datos en la base de datos 
	$objConsultorio=New Consultorio();
	$resultado=$objConsultorio->BorrarConsultorio($_REQUEST['identificacion']);

	echo $_REQUEST['identificacion'];
	
	if($resultado){
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	}else{
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
	}
?>
