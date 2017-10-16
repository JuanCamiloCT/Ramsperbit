<?php

class mdlSalida
{
    private $codSalidas;
    private $fecha;
    private $estado;
    private $Empleado_idEmpleado;
    private $Salidas_codSalidas;
    private $Materia_prima_codMateria_prima;
    private $cantidad;
    private $db;

    public function __SET($attr, $value){
         $this->$attr = $value;
     }

     public function __GET($attr){
        return $this->$attr;
     }

     function __construct($db)
     {
         try
         {
             $this->db = $db;
         }
         catch (PDOException $e)
         {
             exit('La conexion a la base de datos no fue establecida.');
         }
     }
     //Listar
         public function listarSalida()
         {
         $sql = "CALL SP_ListarSalidas()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }
         //Ultima salida
         public function UltimaSalida()
         {
         $sql = "CALL SP_UltimaSalida()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }
         //Consultar Stock
         public function consultarMateria(){
          $sql = "CALL SP_MateriaStock(?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1,$this->codMateria_prima);
          $stm->execute();
          return $stm->fetch(PDO::FETCH_ASSOC);
      }
     //Insertar
     public function insertarSalida()
         {
         $sql = "CALL SP_InsertarSalida(?,?,?,?)";
         $stm = $this->db->prepare($sql);

        $stm->bindParam(1, $this->codSalidas);
        $stm->bindParam(2, $this->fecha);
        $stm->bindParam(3, $this->estado);
        $stm->bindParam(4, $this->Empleado_idEmpleado);

        return $stm->execute();

         }
         //Insertar DTLL
         public function insertarDllSalidaMP()
             {
             $sql = "CALL SP_InsertarDllSalidaMP(?,?,?)";
             $stm = $this->db->prepare($sql);

            $stm->bindParam(1, $this->Salidas_codSalidas);
            $stm->bindParam(2, $this->Materia_prima_codMateria_prima);
            $stm->bindParam(3, $this->cantidad);

            return $stm->execute();

             }
         //Consultar

    public function consultarSalida()
        {
        $sql = "SELECT s.codSalidas, s.fecha, s.estado, s.Empleado_idEmpleado,em.nombres as nombre_empleado FROM salidas s INNER JOIN empleado em on s.Empleado_idEmpleado = em.idEmpleado WHERE codSalidas = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->codSalidas);
        $stm->execute();
       return $stm->fetchall(PDO::FETCH_ASSOC);
       }
       //Consultar DLL
  public function consultarDetalleSalida()
   {
   $sql = "SELECT sm.Materia_prima_codMateria_prima as codigo_MP ,mp.nombre as Nombre_MP,sm.cantidad from salidas_has_materia_prima sm inner JOIN materia_prima mp on sm.Materia_prima_codMateria_prima = mp.codMateria_prima inner join salidas s on sm.Salidas_codSalidas = s.codSalidas where s.codSalidas = ?";
   $stm = $this->db->prepare($sql);
   $stm->bindParam(1, $this->codSalidas);
   $stm->execute();
   return $stm->fetchall(PDO::FETCH_ASSOC);
   }
       //Modificar
      public function modificarSalida()
          {
          $sql = "CALL SP_ModificarSalida(?,?,?,?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->codSalidas);
          $stm->bindParam(2, $this->fecha);
          $stm->bindParam(3, $this->estado);
          $stm->bindParam(4, $this->Empleado_idEmpleado);

         return $stm->execute();

          }
          //CambiarEstado
          public function modificarestado()
              {
              $sql = "CALL SP_ModificarEstadoSa(?,?)";
              $stm = $this->db->prepare($sql);
              $stm->bindParam(1, $this->codSalidas);
              $stm->bindParam(2, $this->estado);
              return $stm->execute();

              }
  }
?>
