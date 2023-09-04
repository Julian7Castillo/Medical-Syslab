<?php
class Cita
{
	private $fecha;
	private $hora;
	private $idpac;
	private $idmed;
	private $idcon;
	private $estado;
	private $observaciones;
	
	public function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
	
	public function getFecha()
	{
		return ($this->fecha);
	}
	
	public function setHora($hora)
	{
		$this->hora=$hora;
	}
	
	public function getHora()
	{
		return ($this->hora);
	}

	public function setIdpac($idpac)
	{
		$this->idpac=$idpac;
	}
	
	public function getIdpac()
	{
		return ($this->idpac);
	}
	
	public function setIdmed($idmed)
	{
		$this->idmed=$idmed;
	}
	
	public function getIdmed()
	{
		return ($this->idmed);
	}
	
	public function setIdcon($idcon)
	{
		$this->idcon=$idcon;
	}
	
	public function getIdcon()
	{
		return ($this->idcon);
	}	

	public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	
	public function getEstado()
	{
		return ($this->estado);
	}	

	public function setObservaciones($observaciones)
	{
		$this->observaciones=$observaciones;
	}
	
	public function getObservaciones()
	{
		return ($this->$observaciones);
	}	

	public function crearCita($fecha,$hora,$idpac,$idmed, $estado,$idcon,$observaciones)
	{
		$this->fecha = $fecha;
		$this->hora = $hora;
		$this->idpac = (int)$idpac;
		$this->idmed = (int)(int)$idmed;
		$this->estado = $estado;
		$this->idcon = (int)$idcon;
		$this->observaciones = $observaciones;
	}
	
	public function agregarCita()
	{	
		$this->Conexion=Conectarse();
		$sql="CALL inscit('$this->$fecha','$this->$hora','$this->$idpac','$this->$idmed','$this->$idcon');";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ConsultarCita($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM Citas WHERE idCita = '$identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultarCitasgasg()
	{
		$this->Conexion=Conectarse();
		$sql="select idCita,pacNombres, pacApellidos, medNombres, medApellidos, medEspecialidad,conNombre, citFecha, citHora, citEsado, citObservaciones from pacientes, medicos, consultorios, citas where (idPaciente = citPaciente) and (idMedico = citMedico) and (idConsultorio = citConsultorio) and (citEsado='Asignado')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultarCitasgate()
	{
		$this->Conexion=Conectarse();
		$sql="select idCita,pacNombres, pacApellidos, medNombres, medApellidos, medEspecialidad,conNombre, citFecha, citHora, citEsado, citObservaciones from pacientes, medicos, consultorios, citas where (idPaciente = citPaciente) and (idMedico = citMedico) and (idConsultorio = citConsultorio) and (citEsado='Atendido')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ActualizarCita()
	{
		$this->Conexion=Conectarse();
		$sql="UPDATE citas SET citFecha='$this->fecha', citHora='$this->hora', citPaciente='$this->idpac', citMedico='$this->idmed', citConsultorio='$this->idcon', citEsado='$this->estado',citObservaciones='$this->observaciones' WHERE idCita='$this->identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	

	public function BorrarCita()
	{
		$this->Conexion=Conectarse();
		$sql="DELETE FROM citas WHERE idCita='$this->identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
}

?>