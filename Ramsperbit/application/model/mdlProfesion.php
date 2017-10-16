<?php

class mdlProfesion
{
    private $idProfesion;
    private $descripcion;
    private $estadopr;

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
    public function insertarProfesion(){
        $sql = "CALL SP_InsertarProfesion(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idProfesion);
        $stm->bindParam(2, $this->descripcion);
        return $stm->execute();
    }

  //  public function insertarDetalleEps(){
        //$sql = "CALL SP_InsertarEmpleadoEps(?,?)";
      //  $stm = $this->db->prepare($sql);
        //$stm->bindParam(1, $this->idEmpleado);
        //$stm->bindParam(2, $this->EPS_idEPS);
        //return $stm->execute();
    //}

    public function listarProfesion(){
        $sql = "CALL SP_ListarProfesion()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    //public function modificarProfesion(){
        //$sql = "CALL SP_ModificarProfesion(?,?)";
        //$stm = $this->db->prepare($sql);
        //$stm->bindParam(1, $this->idProfesion);
        //$stm->bindParam(2, $this->descripcion);

      //  return $stm->execute();
    //}
    public function modificarestado()
        {
        $sql = "CALL SP_ModificarEstadoProfesion(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idProfesion);
        $stm->bindParam(2, $this->estadopr);
        return $stm->execute();

        }


}

?>
