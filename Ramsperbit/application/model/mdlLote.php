<?php 


class mdlLote
{
	private $codLote;
    private $descripcion;
    private $cantidad;
    private $producto_codProducto;
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

    public function nuevoLote(){
		$sql = "CALL SP_InsertarLote(?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codLote);
		$stm->bindParam(2, $this->descripcion);
		$stm->bindParam(3, $this->producto_codProducto);
		$stm->bindParam(4, $this->cantidad);
		return $stm->execute();
	}

	public function listarLote(){
		$sql = "CALL SP_ListarLote";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function modificarLote(){
		$sql = "CALL SP_ModificarLote(?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codLote);
		$stm->bindParam(2, $this->descripcion);
		$stm->bindParam(3, $this->producto_codProducto);
		$stm->bindParam(4, $this->cantidad);
		return $stm->execute();
	}

	public function consultarUno(){
		$sql = "SELECT codLote, descripcion, producto_codProducto, cantidad, estado FROM lote WHERE codLote = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codLote);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC); 
	}

	public function modificarEstadoL(){
		$sql = "CALL SP_ModificarEstadoLote(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->codLote);
		$stm->bindParam(2, $this->estado);
		return $stm->execute();
	}
}

 ?>