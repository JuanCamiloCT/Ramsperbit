<?php

class mdlPresentacion
{

    private $codPresentacion;
    private $descripcionp;
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

    public function nuevaPresentacion(){
		$sql = "CALL SP_InsertarPresentacion(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codPresentacion);
		$stm->bindParam(2, $this->descripcionp);
		return $stm->execute();
	}

	public function listarPresentacion(){
		$sql = "CALL SP_ListarPresentacion";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarUno(){
		$sql = "SELECT codPresentacion, descripcionp FROM presentacion WHERE codPresentacion = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codPresentacion);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC);
	}

  public function modificarestado()
      {
      $sql = "CALL SP_ModificarEstadoPre(?,?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->codPresentacion);
      $stm->bindParam(2, $this->estado);
      return $stm->execute();

      }

}

 ?>
