<?php

class mdlProducto
{

    private $codProducto;
    private $nombre;
    private $cantidad_actual;
    private $Stock_minimo;
    private $ubicacion;
    private $descripcion;
    private $Categoria_idCategoria;
    private $Unidad_medida_codUnidad_medida;
    private $Presentacion_codPresentacion;
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

    public function nuevoProducto(){
		$sql = "CALL SP_InsertarProducto(?,?,?,?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codProducto);
		$stm->bindParam(2, $this->nombre);
		$stm->bindParam(3, $this->cantidad_actual);
    $stm->bindParam(4, $this->Stock_minimo);
    $stm->bindParam(5, $this->ubicacion);
		$stm->bindParam(6, $this->descripcion);
		$stm->bindParam(7, $this->Categoria_idCategoria);
		$stm->bindParam(8, $this->Unidad_medida_codUnidad_medida);
		$stm->bindParam(9, $this->Presentacion_codPresentacion);
		return $stm->execute();
	}

	public function listarProducto(){
		$sql = "CALL SP_ListarProducto";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function modificarProducto(){
	$sql = "CALL SP_ModificarProducto(?,?,?,?,?,?,?,?,?)";
	$stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->codProducto);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->cantidad_actual);
        $stm->bindParam(4, $this->Stock_minimo);
        $stm->bindParam(5, $this->ubicacion);
        $stm->bindParam(6, $this->descripcion);
        $stm->bindParam(7, $this->Categoria_idCategoria);
        $stm->bindParam(8, $this->Unidad_medida_codUnidad_medida);
        $stm->bindParam(9, $this->Presentacion_codPresentacion);
		return $stm->execute();
	}

	public function consultarUno(){
		$sql = "SELECT codProducto, nombre, descripcion, cantidad_actual, Stock_minimo, ubicacion, Categoria_idCategoria, Unidad_medida_codUnidad_medida, Presentacion_codPresentacion, estado FROM producto WHERE codProducto = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codProducto);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC);
	}

  public function consultarDos(){
   $sql = "CALL SP_verPro(?)";
   $stm = $this->db->prepare($sql);
   $stm->bindParam(1,$this->codProducto);
   $stm->execute();
   return $stm->fetch(PDO::FETCH_ASSOC);
}

	public function modificarEstadoProducto(){
		$sql = "CALL SP_ModificarEstadoProducto(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codProducto);
		$stm->bindParam(2, $this->estado);
		return $stm->execute();
	}

}

 ?>
