<?php

class mdlCategoria
{

    private $codCategoria;
    private $descripcionc;
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

    public function nuevaCategoria(){
		$sql = "CALL SP_InsertarCategoria(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codCategoria);
		$stm->bindParam(2, $this->descripcionc);
		return $stm->execute();
	}

	public function listarCategoria(){
		$sql = "CALL SP_ListarCategoria";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarUno(){
		$sql = "SELECT codCategoria, descripcionc FROM categoria WHERE codCategoria = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codCategoria);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC);
	}

  public function modificarestado()
      {
      $sql = "CALL SP_ModificarEstadoCate(?,?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->codCategoria);
      $stm->bindParam(2, $this->estado);
      return $stm->execute();

      }

}

 ?>
