<?php
class Usuario
{
	private $identificacion;
	private $rol;
	private $nombre;
	private $apellido;
	private $fechanaci;
	private $sexo;
	private $correo;
	private $telefono;
	private $especialidad;
	private $password;
	private $estado;
	private $Conexion;
	
	public function setIdentificacion($identificacion)
	{
		$this->identificacion=$identificacion;
	}
	
	public function getIdentificacion()
	{
		return ($this->identificacion);
	}
	
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
	public function getNombre()
	{
		return ($this->nombre);
	}

	public function setPassword($password)
	{
		$this->password=$password;
	}
	
	public function getPassword()
	{
		return ($this->password);
	}
	
	public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	
	public function getEstado()
	{
		return ($this->estado);
	}
	
	public function setRol($rol)
	{
		$this->rol=$rol;
	}
	
	public function getRol()
	{
		return ($this->rol);
	}	

	public function crearUsuario($identificacion, $rol, $nombre,$apellido,$fechanaci,$sexo,$correo,	$telefono,$especialidad,$password,$estado,$Conexion)
	{
		$this->rol = $rol;
		$this->identificacion = $identificacion;
		$this->nombre = $nombre;
		$this->apellido = $nombre;
		$this->fechanaci = $nombre;
		$this->sexo = $nombre;
		$this->correo = $nombre;
		$this->telefono = $nombre;
		$this->password = $password;
		$this->estado = $estado;
	}
	
	public function agregarUsuario()
	{	
		$this->Conexion=Conectarse();
		$sql="CALL insusu('$this->identificacion','$this->rol','$this->nombre', '$this->password');";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ConsultarUsuario($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="SELECT nombre_rol, usLogin, usunom, usuPassword, usuEstado FROM roles INNER JOIN usuarios ON usuRol = id_Rol WHERE usLogin = '$identificacion';";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;		
	}
	public function ConsultarUsuariosg()
	{
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM usuarios ;";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;		
	}

	public function ActualizarUsuario()
	{
		$this->Conexion=Conectarse();
		$sql="CALL upusu('$this->rol','$this->identificacion','$this->nombre', '$this->password','$this->estado');";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}	

	public function BorrarUsuario()
	{
		$this->Conexion=Conectarse();
		$sql="DELETE FROM usuarios WHERE usLogin='$this->identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
}

?>