<?php

class mdlLogin
{

    private $idCuenta;
    private $nombre_usuario;
    private $contrasena;
    private $correo_electronico;
    private $imagen;
    private $estado;
    private $Rol_idrol;
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

    public function insertarCuenta()
    {
        $sql = "CALL SP_InsertarCuenta(?,?,?,?,?)";
        //try {

        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idCuenta);
        $stm->bindParam(2, $this->nombre_usuario);
        $stm->bindParam(3, $this->contrasena);
        $stm->bindParam(4, $this->correo_electronico);
        $stm->bindParam(5, $this->imagen);
        //$stm->bindParam(6, $this->Rol_idrol);
            return $stm->execute();

        //return $this->db->lastInsertId();

    //  }catch (Exception $e){
        //return 0;

      //}
    }

  //  public function actualizarFoto()
  //  {
    //  $sql = "UPDATE cuenta SET imagen = :imagen WHERE idCuenta = :idCuenta";
      //  try {
      //    $stm = $this->db->prepare($sql);
      //    $stm->bindValue(":idCuenta",$this->__GET("idCuenta"));
      //    $stm->bindValue(":imagen",$this->__GET("imagen"));
      //    return $stm->execute();
      //  } catch (Exception $e) {
      //      return 0;
      //  }
    //}

    public function modificarCuenta()
    {
        //$contraseña = md5($contraseña);
        $sql = "CALL SP_ModificarCuenta(?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idCuenta);
        $stm->bindParam(2, $this->nombre_usuario);
        $stm->bindParam(3, $this->contrasena);
        $stm->bindParam(4, $this->correo_electronico);
        $stm->bindParam(5, $this->imagen);
        $stm->bindParam(6, $this->Rol_idrol);
        return $stm->execute();
    }

    public function listarCuenta(){
  		$sql = "CALL SP_ListarCuenta";
  		$stm = $this->db->prepare($sql);
  		$stm->execute();
  		return $stm->fetchAll(PDO::FETCH_ASSOC);
  	}

    public function consultarUno()
    {

        $sql = "SELECT c.idCuenta, c.nombre_usuario, c.contrasena, c.correo_electronico, c.imagen, c.Rol_idrol, c.estado FROM cuenta c WHERE idCuenta = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idCuenta);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function modificarEstado(){
        $sql = "CALL SP_ModificarEstadoCuenta(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idCuenta);
        $stm->bindParam(2,$this->estado);
        return $stm->execute();

    }

    public function consultarol()
{

    $sql = "SELECT idrol, nombre, descripcion, estado FROM rol";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);

}

      public function consultacorreoo()
    {

        $sql = "CALL SP_consultarcorreo(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->correo_electronico);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);

    }

   public function logueo(){

           $sql = "SELECT idCuenta, nombre_usuario, contrasena, correo_electronico,
           estado, imagen, Rol_idrol FROM cuenta WHERE nombre_usuario = ?";

           $stm = $this->db->prepare($sql);

           $stm->bindValue(1,$this->__GET("nombre_usuario"));


           $stm->execute();

           return $stm->fetch(PDO::FETCH_ASSOC);
       }


  public function consultacorreo()
        {

      $sql = "CALL SP_consultarcorreo(?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->correo_electronico);
      $stm->execute();
      return $stm->fetch(PDO::FETCH_ASSOC);

        }

        public function consultacorreo2()
              {

            $sql = "CALL SP_consultarcorreo2(?)";
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->correo_electronico);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_ASSOC);

              }

  public function modificarclave()
      {
          // $clave = md5($clave);
          $sql = "CALL SP_modificarclave(?,?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->idCuenta);
          $stm->bindParam(2, $this->contrasena);
          return $stm->execute();

      }

      public function consultarDos()
      {

          $sql = "CALL SP_consultarusuariosuno(?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->nombre_usuario);
          $stm->execute();
          return $stm->fetch(PDO::FETCH_ASSOC);

      }



}
