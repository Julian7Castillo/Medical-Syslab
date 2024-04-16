<?php
	//Insertar
	require"../Modelo/Conecta.php";
	require"../Modelo/ClaseCita.php";

	$fecha =($_POST['fecha']);
	$hora = ($_POST['hora']);
	$pac = ($_POST['pac']);
	//settype($pac, "integer");
	$inpac = (int)$pac;
	$med = ($_POST['med']);
	//settype($med, "integer");
	$inmed = (int)$med;
	$consultorio = ($_POST['cons']);
	//settype($consultorio, "integer");
	$inconsultorio = (int)$consultorio;
	$estado = ($_POST['estado']);
	$observaciones = ($_POST['observaciones']);
	
	$objCita=New Cita();
	$objCita->crearCita($fecha, $hora, $inpac, $inmed, $estado,$inconsultorio, $observaciones);
	$resultado=$objCita->BorrarCita();

	print("hola");

	print(" $fecha, $hora, $pac, $pac, $consultorio");
	
	if($resultado){
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	}else{
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
	}
	//listar

	//consultar

	//actualizar
	//llama a la conexion con la base de datos
	require"../Modelo/Conecta.php";
	require"../Modelo/ClaseCita.php";

	$fecha =($_POST['fecha']);
	$hora = ($_POST['hora']);
	$pac = ($_POST['pac']);
	//settype($pac, "integer");
	$inpac = (int)$pac;
	$med = ($_POST['med']);
	//settype($med, "integer");
	$inmed = (int)$med;
	$consultorio = ($_POST['con']);
	//settype($consultorio, "integer");
	$inconsultorio = (int)$consultorio;
	$estado = ($_POST['estado']);
	$observaciones = ($_POST['observaciones']);
	
	$objCita=New Cita();
	$objCita->crearCita($fecha, $hora, $inpac, $inmed, $estado, $inconsultorio, $observaciones);
	$resultado=$objCita->ActualizarCita();

	print("hola");

	print(" $fecha, $hora, $pac, $pac, $consultorio");
	
	if($resultado){
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	}else{
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
	}
	//eliminar
	//llama a la conexion con la base de datos
	require"../Modelo/Conecta.php";
	require"../Modelo/ClaseCita.php";

	$fecha =($_POST['fecha']);
	$hora = ($_POST['hora']);
	$pac = ($_POST['pac']);
	//settype($pac, "integer");
	$inpac = (int)$pac;
	$med = ($_POST['med']);
	//settype($med, "integer");
	$inmed = (int)$med;
	$consultorio = ($_POST['cons']);
	//settype($consultorio, "integer");
	$inconsultorio = (int)$consultorio;
	$estado = ($_POST['estado']);
	$observaciones = ($_POST['observaciones']);
	
	$objCita=New Cita();
	$objCita->crearCita($fecha, $hora, $inpac, $inmed, $estado,$inconsultorio, $observaciones);
	$resultado=$objCita->BorrarCita();

	print("hola");

	print(" $fecha, $hora, $pac, $pac, $consultorio");
	
	if($resultado){
		header("location:../Vista/inicio.php?pag=ingresoExitoso");
	}else{
		header("location:../Vista/inicio.php?pag=ingresoErroneo");
	}
?>
