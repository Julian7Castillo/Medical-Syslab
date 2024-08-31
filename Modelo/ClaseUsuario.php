<?php
	class usuarioMedicalSyslab{
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
		
		public function setIdentificacion($identificacion){
			$this->identificacion=$identificacion;
		}
		
		public function getIdentificacion(){
			return ($this->identificacion);
		}
		
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		
		public function getNombre(){
			return ($this->nombre);
		}

		public function setApellido($apellido){
			$this->apellido=$apellido;
		}
		
		public function getApellido(){
			return ($this->apellido);
		}

		public function setFecha($apefechanacillido){
			$this->fechanaci=$fechanaci;
		}
		
		public function getFecha(){
			return ($this->fechanaci);
		}

		public function setSexo($sexo){
			$this->sexo=$apellsexoido;
		}
		
		public function getSexo(){
			return ($this->sexo);
		}

		public function setCorreo($correo){
			$this->correo=$correo;
		}
		
		public function getCorreo(){
			return ($this->correo);
		}

		public function setTelefono($telefono){
			$this->telefono=$aptelefonoellido;
		}
		
		public function getTelefono(){
			return ($this->telefono);
		}

		public function setEspecialidad($especialidad){
			$this->especialidad=$especialidad;
		}
		
		public function getEspecialidad(){
			return ($this->especialidad);
		}

		public function setPassword($password){
			$this->password=$password;
		}
		
		public function getPassword(){
			return ($this->password);
		}
		
		public function setEstado($estado){
			$this->estado=$estado;
		}
		
		public function getEstado(){
			return ($this->estado);
		}
		
		public function setRol($rol){
			$this->rol=$rol;
		}
		
		public function getRol(){
			return ($this->rol);
		}	

		public function crearUsuario($identificacion, $rol, $nombre,$apellido,$fechanaci,$sexo,$correo,$telefono,$especialidad,$password,$estado){
			$this->rol = $rol;
			$this->identificacion = $identificacion;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->fechanaci = $fechanaci;
			$this->sexo = $sexo;
			$this->correo = $correo;
			$this->telefono = $telefono;
			$this->especialida=$especialidad;
			$this->password = $password;
			$this->estado = $estado;
		}
		
		public function agregarUsuario(){	
			$this->Conexion=Conectarse();
			$sql="CALL insusu('$this->identificacion','$this->rol','$this->nombre', '$this->apellido', '$this->fechanaci','$this->sexo', '$this->correo', '$this->telefono', '$this->especialidad', '$this->password');";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}

		public function Perfil($identificacion){
			$this->Conexion=Conectarse();
			$sql="SELECT usucc, nombre_rol, usuNombre, usuApellidos, usuFechaNacimiento, usuSexo, usuCorreo, susTelefono, Especialidad, usuEstado, usuPassword FROM usuarios INNER JOIN roles ON usuRol = id_rol WHERE usucc = '$identificacion';";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;		
		}

		public function ConsultarUsuario($identificacion){
			$this->Conexion=Conectarse();
			$sql="SELECT usucc, nombre_rol, usuNombre, usuApellidos, usuFechaNacimiento, usuSexo, usuCorreo, susTelefono, Especialidad, usuEstado FROM usuarios INNER JOIN roles ON usuRol = id_rol WHERE usucc = ?;";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;		
		}
		public function ListarUsuarios(){
			$this->Conexion=Conectarse();
			$sql="SELECT usucc, nombre_rol, usuNombre, usuApellidos, usuFechaNacimiento, usuSexo, usuCorreo, susTelefono, Especialidad, usuEstado FROM roles INNER JOIN usuarios ON usuRol = id_rol;";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;		
		}

		public function ActualizarUsuario()	{
			$this->Conexion=Conectarse();
			$sql="CALL upusu('$this->identificacion','$this->rol','$this->nombre', '$this->apelldio', '$this->fechanaci','$this->sexo', '$this->correo', '$this->telefono', '$this->fechanaci', '$this->fechanaci',  '$this->password');";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;
		}	

		public function BorrarUsuario(){
			$this->Conexion=Conectarse();
			$sql="DELETE FROM usuarios WHERE usLogin='$this->identificacion'";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}	
	}
?>