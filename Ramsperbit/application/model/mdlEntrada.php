<?php

class mdlEntrada
{
    private $codEntradas;
    private $fecha;
    private $Empleado_idEmpleado;
    private $Entradas_codEntradas;
    private $cantidad;
    private $fecha_vencimiento;
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
         public function listarEntrada()
         {
         $sql = "CALL SP_ListarEntrada()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }
      //Ultima Entrada
         public function UltimaEntrada()
         {
         $sql = "CALL SP_UltimaEntrada()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }





     //Insertar
     public function insertarEntrada()
         {
         $sql = "CALL SP_InsertarEntradas(?,?,?,?)";
         $stm = $this->db->prepare($sql);

        $stm->bindParam(1, $this->codEntradas);
        $stm->bindParam(2, $this->fecha);
        $stm->bindParam(3, $this->Empleado_idEmpleado);
        $stm->bindParam(4, $this->estado);

        return $stm->execute();

         }
         //Insertar DTLL
         public function insertarDllEntradaMP()
             {
             $sql = "CALL SP_InsertarDllEntradasMP(?,?,?,?)";
             $stm = $this->db->prepare($sql);

            $stm->bindParam(1, $this->Entradas_codEntradas);
            $stm->bindParam(2, $this->Materia_prima_codMateria_prima);
            $stm->bindParam(3, $this->cantidad);
            $stm->bindParam(4, $this->fecha_vencimiento);

            return $stm->execute();

             }
         //Consultar

    public function consultarEntrada()
        {
        $sql = "SELECT e.codEntradas, e.fecha, e.estado, e.Empleado_idEmpleado,em.nombres as nombre_empleado FROM entradas e INNER JOIN empleado em on e.Empleado_idEmpleado = em.idEmpleado  WHERE codEntradas = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->codEntradas);
        $stm->execute();
       return $stm->fetchall(PDO::FETCH_ASSOC);
       }
       //Consultar DLLs
       public function consultarDetalleEntrada()
        {
        $sql = "SELECT em.Entradas_codEntradas, em.Materia_prima_codMateria_prima as codigo_MP ,mp.nombre as Nombre_MP,em.cantidad, em.fecha_vencimiento from entradas_has_materia_prima em inner join materia_prima mp on em.Materia_prima_codMateria_prima = mp.codMateria_prima inner join entradas e on em.Entradas_codEntradas = e.codEntradas where e.codEntradas = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->codEntradas);
        $stm->execute();
        return $stm->fetchall(PDO::FETCH_ASSOC);
        }

       //Modificar
      public function modificarEntrada()
          {
          $sql = "CALL SP_ModificarEntrada(?,?,?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->codEntradas);
          $stm->bindParam(2, $this->fecha);
          $stm->bindParam(3, $this->Empleado_idEmpleado);

         return $stm->execute();

          }
          //Cambiar estado
          public function modificarestadoE()
              {
              $sql = "CALL SP_ModificarEstadoEn(?,?)";
              $stm = $this->db->prepare($sql);
              $stm->bindParam(1, $this->codEntradas);
              $stm->bindParam(2, $this->estado);
              return $stm->execute();

              }
  }
?>
