<?php

class mdlPension
{

    private $idPension;
    private $nombre;
    private $abreviatura;
    private $fecha_ingreso;
    private $estadop;
    private $db;

    public function __SET($attr,$value){
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

    public function insertarPension(){
        $sql = "CALL SP_InsertarPension(?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idPension);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->abreviatura);
        $stm->bindParam(4, $this->fecha_ingreso);
        return $stm->execute();
    }


    public function listar3(){
        $sql = "CALL SP_ListarPension()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarUno()
    {
        $sql = "SELECT  idPension, nombre, abreviatura, fecha_ingreso FROM pension WHERE idPension = ? ";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idPension);
        $stm -> execute();
        return $stm ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modificarestado()
        {
        $sql = "CALL SP_ModificarEstadoPension(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idPension);
        $stm->bindParam(2, $this->estadop);
        return $stm->execute();

        }

}

?>
