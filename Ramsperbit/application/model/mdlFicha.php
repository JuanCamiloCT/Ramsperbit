<?php

class mdlFicha
{

  private $codFicha;
  private $nombre;
  private $descripcion;
  private $lugar_elaboracion;
  private $info_Contacto;
  private $nombre_cientifico;
  private $forma_farmaceutica_cod_forma;
  private $Unidad_medida_codUnidad_medida;
  private $Presentacion_codPresentacion;
  private $recomendacion;
  private $procedimientos;
  private $usos;
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
  //Listar Ficha
  public function listarFicha(){
      $sql = "CALL SP_ListarFicha()";
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      }
  //Registar ficha
  public function InsertarFicha(){
  $sql = "CALL SP_InsertarFT(?,?,?,?,?,?,?,?,?,?,?,?)";
  $stm = $this->db->prepare($sql);
  $stm->bindParam(1, $this->codFicha);
  $stm->bindParam(2, $this->nombre);
  $stm->bindParam(3, $this->descripcion);
  $stm->bindParam(4, $this->lugar_elaboracion);
  $stm->bindParam(5, $this->info_Contacto);
  $stm->bindParam(6, $this->nombre_cientifico);
  $stm->bindParam(7, $this->forma_farmaceutica_cod_forma);
  $stm->bindParam(8, $this->Unidad_medida_codUnidad_medida);
  $stm->bindParam(9, $this->Presentacion_codPresentacion);
  $stm->bindParam(10, $this->recomendacion);
  $stm->bindParam(11, $this->procedimientos);
  $stm->bindParam(12, $this->usos);
  return $stm->execute();
  }
  //Ver mas detalles
  public function Vermas()
   {
   $sql = "SELECT codFicha , nombre, descripcion,info_Contacto,recomendacion,procedimientos, usos from ficha_tecnica where codFicha = ?";
   $stm = $this->db->prepare($sql);
   $stm->bindParam(1, $this->codFicha);
   $stm->execute();
   return $stm->fetchall(PDO::FETCH_ASSOC);
   }

   //Consultar
   public function ConsultarUno()
    {
    $sql = "SELECT ft.codFicha,ft.nombre,ft.descripcion,ft.lugar_elaboracion,ft.info_Contacto,ft.nombre_cientifico,ft.forma_farmaceutica_cod_forma,ft.Unidad_medida_codUnidad_medida,uni.nombreu as unidad ,ft.Presentacion_codPresentacion,p.descripcionp as presentacion ,ft.recomendacion,ft.procedimientos,ft.usos from ficha_tecnica ft INNER JOIN presentacion p on ft.Presentacion_codPresentacion = p.codPresentacion INNER join unidad_medida uni on ft.Unidad_medida_codUnidad_medida = uni.codUnidad_medida where codFicha = ?";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codFicha);
    $stm->execute();
    return $stm->fetchall(PDO::FETCH_ASSOC);
    }
    //Modificar
    public function ModificarFicha(){
    $sql = "CALL SP_ModificarFT(?,?,?,?,?,?,?,?,?,?,?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codFicha);
    $stm->bindParam(2, $this->nombre);
    $stm->bindParam(3, $this->descripcion);
    $stm->bindParam(4, $this->lugar_elaboracion);
    $stm->bindParam(5, $this->info_Contacto);
    $stm->bindParam(6, $this->nombre_cientifico);
    $stm->bindParam(7, $this->forma_farmaceutica_cod_forma);
    $stm->bindParam(8, $this->Unidad_medida_codUnidad_medida);
    $stm->bindParam(9, $this->Presentacion_codPresentacion);
    $stm->bindParam(10, $this->recomendacion);
    $stm->bindParam(11, $this->procedimientos);
    $stm->bindParam(12, $this->usos);
    return $stm->execute();
    }

    public function modificarestadoFT()
        {
        $sql = "CALL SP_ModificarEstadoFT(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->codFicha);
        $stm->bindParam(2, $this->estado);
        return $stm->execute();

        }



}
