<?php

class mdlGenero
{
    private $idGenero;
    private $nombre;
    private $estadog;
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
    public function insertarGenero(){
        $sql = "CALL SP_InsertarGenero(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idGenero);
        $stm->bindParam(2, $this->nombre);
        return $stm->execute();
    }

    public function listar1(){
        $sql = "CALL SP_ListarGenero()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarUno()
    {
        $sql = "SELECT  idGenero, nombre FROM genero WHERE idGenero = ? ";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idGenero);
        $stm -> execute();
        return $stm ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modificarestado()
        {
        $sql = "CALL SP_ModificarEstadoGene(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idGenero);
        $stm->bindParam(2, $this->estadog);
        return $stm->execute();

        }


}

?>
