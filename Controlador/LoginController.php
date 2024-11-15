<?php
	function limpiar_cadena($cadena){
		$cadena = trim($cadena);
		$cadena = stripcslashes($cadena);
		$cadena = str_ireplace("<script>","", $cadena);
		$cadena = str_ireplace("</script>","", $cadena);
		$cadena = str_ireplace("<script src","", $cadena);
		$cadena = str_ireplace("<script type=","", $cadena);
		$cadena = str_ireplace("SELECT * FROM","", $cadena);
		$cadena = str_ireplace("DELETE FROM","", $cadena);
		$cadena = str_ireplace("INSERT INTO","", $cadena);
		$cadena = str_ireplace("DROP TABLE","", $cadena);
		$cadena = str_ireplace("DROP DATABASE","", $cadena);
		$cadena = str_ireplace("TRUNCATE TABLE","", $cadena);
		$cadena = str_ireplace("SHOW TABLES","", $cadena);
		$cadena = str_ireplace("SHOW DATABASES","", $cadena);
		$cadena = str_ireplace("<?php","", $cadena);
		$cadena = str_ireplace("?>","", $cadena);
		$cadena = str_ireplace("--","", $cadena);
		$cadena = str_ireplace("<","", $cadena);
		$cadena = str_ireplace("^","", $cadena);
		$cadena = str_ireplace(">","", $cadena);
		$cadena = str_ireplace("[","", $cadena);
		$cadena = str_ireplace("]","", $cadena);
		$cadena = str_ireplace("==","", $cadena);
		$cadena = str_ireplace(";","", $cadena);
		$cadena = str_ireplace("::","", $cadena);
		$cadena = trim($cadena);
		$cadena = stripcslashes($cadena);
		return $cadena;
	}

	session_start();
	extract ($_POST);
	require ("../Modelo/conecta.php");
	require ("../Modelo/ClaseUsuario.php");

	$passMedicalSyslab = $_REQUEST['pswMedicalSyslab'];
	$loginMedicalSyslab = $_REQUEST['usuarioMedicalSyslab'];

	$objConexion=Conectarse();

	$sql="SELECT * FROM usuarios WHERE usucc = ? AND usuPassword = ?";
	$stmt = mysqli_prepare($objConexion, $sql);

	if($stmt){
		$ok = mysqli_stmt_bind_param($stmt, "ss", $loginMedicalSyslab, $passMedicalSyslab);
		$ok = mysqli_stmt_execute($stmt);	//$sql = limpiar_cadena($sql)
	
		$resultado = mysqli_stmt_get_result($stmt);
		$existe = $resultado->num_rows;
	
		if ($existe/*== 1*/) {
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

	}else{
		die("Error en la preparación de la consulta");
	}

	mysqli_close($objConexion);