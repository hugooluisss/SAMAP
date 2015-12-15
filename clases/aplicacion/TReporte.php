<?php
/**
* TReporte
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TReporte{
	private $idReporte;
	private $idUsuario;
	private $fecha;
	private $latitud;
	private $longitud;
	private $direccion;
	private $comentario;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TReporte($id = ''){
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from reporte where idReporte = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idReporte;
	}
	
	/**
	* Establece el identificador del usuario
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setUsuario($val = ''){
		if ($val == ''){
			global $sesion;
			$this->idUsuario = $sesion['usuario'];
		}else
			$this->idUsuario = $val;
			
		return true;
	}
	
	/**
	* Retorna el identificador de usuario
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getIdUsuario(){
		return $this->idUsuario;
	}
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param String $val Fecha
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		if ($val == '')
			$this->fecha = date("Y-m-d H:m:s");
		else
			$this->fecha = $val;
			
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Establece la latitud
	*
	* @autor Hugo
	* @access public
	* @param string $val Latitud
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLatitud($val = 0){
		$this->latitud = $val;
		return true;
	}
	
	/**
	* Retorna la latitud
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLatitud(){
		return $this->latitud;
	}
	
	/**
	* Establece la longitud
	*
	* @autor Hugo
	* @access public
	* @param string $val Longitud
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLongitud($val = 0){
		$this->longitud = $val;
		return true;
	}
	
	/**
	* Retorna la longitud
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLongitud(){
		return $this->longitud;
	}
	
	/**
	* Establece la dirección
	*
	* @autor Hugo
	* @access public
	* @param string $val Dirección
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDireccion($val = ''){
		$this->direccion = $val;
		return true;
	}
	
	/**
	* Retorna el identificador de usuario
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDireccion(){
		return $this->direccion;
	}
	
	/**
	* Establece el campo 1
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCampo1($val = ''){
		$this->campo1 = $val;
		return true;
	}
	
	/**
	* Retorna el valor del campo 1
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCampo1(){
		return $this->campo1;
	}
	
	/**
	* Establece el campo 2
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCampo2($val = ''){
		$this->campo2 = $val;
		return true;
	}
	
	/**
	* Retorna el valor del campo 2
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCampo2(){
		return $this->campo2;
	}
	
	/**
	* Establece el campo 3
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCampo3($val = ''){
		$this->campo3 = $val;
		return true;
	}
	
	/**
	* Retorna el valor del campo 3
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCampo3(){
		return $this->campo3;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->getIdUsuario() == '') return false;
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO reporte(idUsuario, fecha) VALUES(".$this->getIdUsuario().", now());");
			
			if (!$rs) return false;
				
			$this->idReporte = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE reporte
			SET
				latitud = '".$this->getLatitud()."',
				longitud = '".$this->getLongitud()."',
				direccion = '".$this->getDireccion()."'
			WHERE idReporte = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from reporte where idReporte = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Agregar comentarios
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setComentarios(){
		if ($this->getId() == '') return false;
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idReporte from comentario where idReporte = ".$this->getId());
		
		if ($rs->EOF){
			$rs = $db->Execute("insert into comentario (idReporte, campo1, campo2, campo3) values (".$this->getId().", '".$this->getCampo1()."', '".$this->getCampo2()."', '".$this->getCampo3()."')");
		}else
			$rs = $db->Execute("update comentario set
					campo1 = '".$this->getCampo1()."',
					campo2 = '".$this->getCampo2()."',
					campo3 = '".$this->getCampo3()."'
				where idReporte = ".$this->getId());
		
		return $rs?true:false;
	}
};
?>