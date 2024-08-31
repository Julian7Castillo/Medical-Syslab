<?php
	session_start();
	extract ($_POST);
	require "../Modelo/conecta.php";
	require "../Modelo/ClaseUsuario.php";

	$passMedicalSyslab = $_REQUEST['pswMedicalSyslab'];
	$loginMedicalSyslab = $_REQUEST['usuarioMedicalSyslab'];

	$objConexion=Conectarse();

	$sql="SELECT * FROM usuarios WHERE usucc = '$loginMedicalSyslab' AND usuPassword = 'pass' OR '1'='1'";

	$resultado=$objConexion->query($sql);
	$existe = $resultado->num_rows;

	if ($existe==1) {
		$usuarioMedicalSyslab=$resultado->fetch_object() or die ("Error");
		$_SESSION['userMedicalSyslab']= $usuarioMedicalSyslab->usuNombre;
		$_SESSION['ccMedicalSyslab']= $usuarioMedicalSyslab->usucc;
		$_SESSION['rolMedicalSyslab']= $usuarioMedicalSyslab->usuRol;
		header("location:../index.php?pag=inicio");
	}
	else{
		header("location:../index.php?msj=2");  
		//msj=2, quiere decir que el usuario no esta registrado
	}
?>