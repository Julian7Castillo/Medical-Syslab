<?php
	class Consultorio{
		private $nombre;
		
		// metodos setter getter
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		
		public function getNombre(){
			return ($this->nombre);
		}

		//metodos
		public function crearConsultorio($nombre){
			$this->nombre = $nombre;
		}
		
		public function agregarConsultorio(){	
			$this->Conexion=Conectarse();
			$sql="CALL inscon('$this->nombre');";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}

		public function ConsultarConsultorio($identificacion){
			$this->Conexion=Conectarse();
			$sql="SELECT * FROM consultorios WHERE idConsultorio = '$identificacion'";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}
		public function ConsultarConsultoriosg(){
			$this->Conexion=Conectarse();
			$sql="SELECT * FROM consultorios";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}

		public function ActualizarConsultorio($identificacion, $nombre){
			$this->Conexion=Conectarse();
			$sql="update consultorios set conNombre ='$nombre' where idConsultorio='$identificacion'";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}	

		public function BorrarConsultorio($identificacion){
			$this->Conexion=Conectarse();
			$sql="DELETE FROM consultorios WHERE idConsultorio ='$identificacion';";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}	
	}
?>