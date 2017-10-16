<?php

class mdlMedida
{

    private $codUnidad_medida;
    private $nombreu;
    private $abreviatura;
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

    public function nuevaMedida(){
		$sql = "CALL SP_InsertarMedida(?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codUnidad_medida);
		$stm->bindParam(2, $this->nombreu);
		$stm->bindParam(3, $this->abreviatura);
		return $stm->execute();
	}

	public function listarMedida(){
		$sql = "CALL SP_ListarMedida";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
  public function listarMedidaAct(){
		$sql = "CALL SP_ListarMedidaAct";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarUno(){
		$sql = "SELECT codUnidad_medida, nombreu, abreviatura FROM unidad_medida WHERE codUnidad_medida = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codUnidad_medida);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC);
	}
  public function modificarmedida(){
    $sql = "CALL SP_ModificarMedida(?,?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codUnidad_medida);
    $stm->bindParam(2, $this->nombreu);
    $stm->bindParam(3, $this->abreviatura);
    return $stm->execute();

  }
  public function modificarestadoUni()
      {
      $sql = "CALL SP_ModificarEstadoUni(?,?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->codUnidad_medida);
      $stm->bindParam(2, $this->estado);
      return $stm->execute();

      }

	//public function elimina(){
		//$sql = "CALL SP_EliminarMedida(?)";
		//$stm = $this->db->prepare($sql);
		//$stm->bindParam(1, $this->codUnidad_medida);
		//return $stm->execute();
	//}

}

 ?>
