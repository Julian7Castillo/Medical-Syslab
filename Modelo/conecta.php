<html>
	<dody>
		<?php
			function Conectarse(){
				$Conexion = new mysqli("localhost","root","Julian_Windows.115","medicalsyslab");
				if($Conexion->connect_errno){
					echo "Error de conexión a la base de datos".$Conexion->connect_error;
					exit();
				}
				else{
					return $Conexion;
				}
			}
		?>
	<dody>
<html>