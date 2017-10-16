<?php

class mdlCaja
{
    private $idCaja_compensacion;
    private $descripcion;
    private $estadoc;
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
    public function insertarCaja(){
        $sql = "CALL SP_InsertarCaja(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idCaja_compensacion);
        $stm->bindParam(2, $this->descripcion);
        return $stm->execute();
    }

    public function listarC(){
        $sql = "CALL SP_ListarCaja()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarUno()
    {
        $sql = "SELECT  idCaja_compensacion, descripcion FROM caja_compensacion WHERE idCaja_compensacion = ? ";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idCaja_compensacion);
        $stm->execute();
        return $stm ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modificarestado()
        {
        $sql = "CALL SP_ModificarEstadoCaja(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idCaja_compensacion);
        $stm->bindParam(2, $this->estadoc);
        return $stm->execute();

        }


}

?>
