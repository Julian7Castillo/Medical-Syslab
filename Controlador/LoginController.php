<?php
	session_start();
	extract ($_POST);
	require "../Modelo/conecta.php";

	$pass = $_REQUEST['psw'];
	$login = $_REQUEST['usuario'];

	$objConexion=Conectarse();

	$sql="SELECT * FROM usuarios WHERE usucc = '$login' AND usuPassword = '$pass'";

	$resultado=$objConexion->query($sql);
	$existe = $resultado->num_rows;

	if ($existe==1)  
	{
		$usuario=$resultado->fetch_object() or die ("Error");
		$_SESSION['user']= $usuario->usuNombre;
		$_SESSION['cc']= $usuario->usucc;
		$_SESSION['rol']= $usuario->usuRol;
		header("location:../index.php?pag=bienvenida");
	}
	else
	{
		header("location:../index.php?msj=2");  
		//msj=2, quiere decir que el usuario no esta registrado
	}
?>