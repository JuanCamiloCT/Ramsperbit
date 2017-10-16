<?php

class mdlMateriaPrima
{
    private $codMateria_prima;
    private $nombre;
    private $precio;
    private $descripcion;
    private $cantidad;
    private $stock_min;
    private $presentacion;
    private $estado;
    private $Unidad_medida_codUnidad_medida;
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
         public function listarMP()
         {
         $sql = "CALL SP_ListarMateriaPrima()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }
         //ultima
         public function UltimaMP()
         {
         $sql = "CALL SP_UltimaMP()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }

         //Mapeo Estados
         public function listarEstados()
         {
         $sql = "CALL SP_MapeoEstado()";
         $stm = $this->db->prepare($sql);
         $stm->execute();
         return $stm->fetchall(PDO::FETCH_ASSOC);
         }
         //Disponibilidad de Materia prima en los select.
          public function listarMPAprobada(){
            $sql = "CALL SP_ListarMPApro";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
          }

     //Insertar
     public function insertarMP()
         {
         $sql = "CALL SP_InsertarMP(?,?,?,?,?,?,?,?)";
         $stm = $this->db->prepare($sql);

        $stm->bindParam(1, $this->codMateria_prima);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->precio);
        $stm->bindParam(4, $this->descripcion);
        $stm->bindParam(5, $this->stock_min);
        $stm->bindParam(6, $this->presentacion);
        $stm->bindParam(7, $this->estado);
        $stm->bindParam(8, $this->Unidad_medida_codUnidad_medida);

        return $stm->execute();

         }
         //Consultar

    public function consultarMP()
        {
        $sql = "SELECT m.codMateria_prima, m.nombre, m.precio, m.descripcion,m.cantidad,m.stock_min,m.presentacion,p.descripcionp as presentacionx,m.estado,
         e.estado as estados,m.Unidad_medida_codUnidad_medida,u.nombreu as Unidad_medida_codUnidad_medidad  FROM materia_prima m
         INNER JOIN presentacion p on m.presentacion = p.codPresentacion
         INNER join unidad_medida u on m.Unidad_medida_codUnidad_medida = u.codUnidad_medida
         INNER JOIN estados e on m.estado = e.codEstado
         WHERE codMateria_prima = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->codMateria_prima);
        $stm->execute();
       return $stm->fetchall(PDO::FETCH_ASSOC);
       }
       //Modificar
       public function modificarMP()
          {
          $sql = "CALL SP_ModificarMP(?,?,?,?,?,?,?,?,?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->codMateria_prima);
          $stm->bindParam(2, $this->nombre);
          $stm->bindParam(3, $this->precio);
          $stm->bindParam(4, $this->descripcion);
          $stm->bindParam(5, $this->cantidad);
          $stm->bindParam(6, $this->stock_min);
          $stm->bindParam(7, $this->presentacion);
          $stm->bindParam(8, $this->estado);
          $stm->bindParam(9, $this->Unidad_medida_codUnidad_medida);

         return $stm->execute();

          }
        //Factura

          //public function modificarestadoMP()
            //  {
              //$sql = "CALL SP_ModificarEstadoMP(?,?)";
              //$stm = $this->db->prepare($sql);
              //$stm->bindParam(1, $this->codMateria_prima);
              //$stm->bindParam(2, $this->estado);
               //return $stm->execute();

              //}
  }
?>
