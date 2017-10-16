<?php

class mdlOrden
{

    private $codProduccion;
    private $fecha_inicio;
    private $fecha_finalizacion;
    private $ficha_tecnica_codFicha;
    private $canti;
    private $Empleado_idEmpleado;
    private $estado;
    private $db;

    public function __SET($attr, $value){
        $this->$attr = $value;
    }

    public function __GET($attr){
       return $this->$attr;
    }


    function __construct($db)
    {
        try{

            $this->db=$db;
        }catch (PDOException $e){
            exit("La conexion a la base de datos no fue establecida.");

        }
    }

    public function nuevaOrden(){
		$sql = "CALL SP_InsertarOrden(?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codProduccion);
    $stm->bindParam(2, $this->fecha_inicio);
    $stm->bindParam(3, $this->fecha_finalizacion);
    $stm->bindParam(4, $this->ficha_tecnica_codFicha);
    $stm->bindParam(5, $this->canti);
    $stm->bindParam(6, $this->Empleado_idEmpleado);
		return $stm->execute();
	}

	public function listarOrden(){
		$sql = "CALL SP_ListarOrden";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function modificarOrden(){

		$sql = "CALL SP_ModificarOrden(?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codProduccion);
		$stm->bindParam(2, $this->fecha_inicio);
		$stm->bindParam(3, $this->fecha_finalizacion);
		$stm->bindParam(4, $this->ficha_tecnica_codFicha);
		$stm->bindParam(5, $this->canti);
		$stm->bindParam(6, $this->Empleado_idEmpleado);
		return $stm->execute();

	}

	public function consultarUno(){ //Request $id
		$sql = "SELECT codProduccion, fecha_inicio, fecha_finalizacion, ficha_tecnica_codFicha, canti, Empleado_idEmpleado FROM produccion WHERE codProduccion = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codProduccion);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC);
	}

	public function modificarEstado(){
		$sql = "CALL SP_ModificarEstadoOrden(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codProduccion);
		$stm->bindParam(2, $this->estado);
		return $stm->execute();
	}

}

 ?>
