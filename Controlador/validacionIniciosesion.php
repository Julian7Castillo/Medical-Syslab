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
		$_SESSION['user']= $usuario->usucc;
		$_SESSION['rol']= $usuario->usuRol;
		header("location:../vista/index.php?pag=bienvenida");
	}
	else
	{
		header("location:../vista/index.php?msj=2?pag=login");  
		//msj=2, quiere decir que el usuario no esta registrado
	}
?>