<?php

class mdlEstado 
{

  private $codEstado;
  private $estado;
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
  public function listarestado(){
      $sql = "CALL SP_ListarEstado()";
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
}




















 ?>
