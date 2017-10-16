<?php

class mdlEps
{
    private $idEPS;
    private $nombre;
    private $abreviatura;
    private $estadoe;
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

            $this->db= $db;
        }catch (PDOException $e){
            exit("La conexion a la base de datos no fue establecida.");

        }

    }
    public function insertarEps(){
        $sql = "CALL SP_InsertarEps(?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEPS);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->abreviatura);
        return $stm->execute();
    }


    public function listarEps(){
        $sql = "CALL SP_ListarEps()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    //public function modificarEps(){
        //$sql = "CALL SP_ModificarEps(?,?,?)";
        //$stm = $this->db->prepare($sql);
        //$stm->bindParam(1, $this->idEPS);
        //$stm->bindParam(2, $this->nombre);
        //$stm->bindParam(3, $this->abreviatura);
      //  return $stm->execute();
    //}


    public function consultarUno(){
        $sql = "SELECT nombre, abreviatura FROM eps WHERE idEPS = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEPS);
        $stm->execute();
        return $stm->fetch();
    }

    public function modificarestado()
        {
        $sql = "CALL SP_ModificarEstadoEPS(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEPS);
        $stm->bindParam(2, $this->estadoe);
        return $stm->execute();

        }

}

?>
