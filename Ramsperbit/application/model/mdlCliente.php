<?php

class mdlCliente
{

    private $idCliente;
    private $nombre;
    private $tipo_cliente;
    private $apellidos;
    private $nit;
    private $telefono;
    private $direccion;
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

    public function nuevoCliente(){
		$sql = "CALL SP_InsertarCliente(?,?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->bindParam(2, $this->nombre);
		$stm->bindParam(3, $this->tipo_cliente);
		$stm->bindParam(4, $this->apellidos);
		$stm->bindParam(5, $this->nit);
		$stm->bindParam(6, $this->telefono);
		$stm->bindParam(7, $this->direccion);
		return $stm->execute();
	}

	public function listarCliente(){
		$sql = "CALL SP_ListarCliente";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
  public function listarCliente2(){
    $sql = "CALL SP_ListarCliente2";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
  public function listarCliente3(){
    $sql = "CALL SP_ListarCliente3";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

	public function modificarCliente(){
		$sql = "CALL SP_ModificarCliente(?,?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->bindParam(2, $this->nombre);
		$stm->bindParam(3, $this->tipo_cliente);
		$stm->bindParam(4, $this->apellidos);
		$stm->bindParam(5, $this->nit);
		$stm->bindParam(6, $this->telefono);
		$stm->bindParam(7, $this->direccion);
		return $stm->execute();
	}

	public function consultarUno(){
		$sql = "SELECT idCliente, nombre, tipo_cliente, apellidos, nit, telefono, direccion FROM cliente WHERE idCliente = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC);
	}

	public function modificarEstado(){
		$sql = "CALL SP_ModificarEstadoCliente(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->bindParam(2, $this->estado);
		return $stm->execute();
	}

  public function reporteCliente(){
    $sql = "SELECT * FROM cliente";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->idCliente);
    $stm->bindParam(2, $this->estado);
    return $stm->execute();
  }

	//public function elimina(){
	//	$sql = "CALl SP_EliminarCliente(?)";
	//	$stm = $this->db->prepare($sql);
	//	$stm->bindParam(1, $this->idCliente);
	//	return $stm->execute();
	//}



//Listar Tipos de clientes
public function getCliente1()
{
    $sql = "SELECT COUNT(idCliente) AS total1 FROM cliente";
    $query = $this->db->prepare($sql);
    $query->execute();

    // fetch() is the PDO method that get exactly one result
    return $query->fetch()->total1;
}
public function getCliente2()
{
    $sql = "SELECT COUNT(idCliente) AS total2 FROM cliente  WHERE tipo_cliente ='Empresa'";
    $query = $this->db->prepare($sql);
    $query->execute();

    // fetch() is the PDO method that get exactly one result
    return $query->fetch()->total2;
}
public function getCliente3()
{
    $sql = "SELECT COUNT(idCliente) AS total3 FROM cliente WHERE tipo_cliente ='Persona'";
    $query = $this->db->prepare($sql);
    $query->execute();

    // fetch() is the PDO method that get exactly one result
    return $query->fetch()->total3;
}
}
 ?>
