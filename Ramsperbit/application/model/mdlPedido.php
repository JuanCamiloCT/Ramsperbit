<?php


class mdlPedido
{
  private $codPedido;
  private $fecha;
  private $Cliente_idCliente;
  private $idDetalle_Producto_Pedido;
  private $Cantidad;
  private $Cod_Pedido;
  private $Cod_producto;
  private $Producto_has_Lote_Producto_has_Lotecol;
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
        try{

            $this->db=$db;
        }catch (PDOException $e){
            exit("La conexion a la base de datos no fue establecida.");

        }
    }
    //Listar
    public function listarPedido(){
      $sql = "CALL SP_ListarPedido";
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    //Listar clientes activos
    public function ListarClientesON(){
      $sql = "CALL SP_ListarClientesON";
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
//Listar productos terminados
      public function listarproductosON(){
        $sql = "CALL SP_ListarProductosON";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
      }
    //Ultimo pedido
    public function UltimaPedido()
    {
    $sql = "CALL SP_UltimoPedido()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchall(PDO::FETCH_ASSOC);
    }

    //Inserta
    public function insertarPedido(){
    $sql = "CALL SP_InsertarPedido(?,?,?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codPedido);
    $stm->bindParam(2, $this->fecha);
    $stm->bindParam(3, $this->Cliente_idCliente);
    $stm->bindParam(4, $this->estado);
    return $stm->execute();
  }
  //Insertar DTLL
  public function insertarDllPedidOPL()
      {
      $sql = "CALL SP_InsertarDllPedidOPL(?,?,?)";
      $stm = $this->db->prepare($sql);

     $stm->bindParam(1, $this->Cantidad);
     $stm->bindParam(2, $this->Cod_Pedido);
     $stm->bindParam(3, $this->Cod_producto);

     return $stm->execute();

      }
  //Consulta
  public function consultarPedido(){
    $sql = "SELECT pe.codPedido,pe.fecha,pe.Cliente_idCliente,c.nombre as nombre ,pe.estado FROM pedido pe inner join cliente c on pe.Cliente_idCliente = c.idCliente WHERE codPedido = ?";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codPedido);
    $stm->execute();
    return $stm->fetch(PDO::FETCH_ASSOC);
  }
  //Consultar DLL
  public function consultarDetallePedido()
   {
   $sql = "SELECT pl.Cantidad, pl.Cod_producto, p.nombre as producto from detalle_producto_pedido pl inner join producto p on pl.Cod_producto = p.codProducto where pl.Cod_Pedido= ?";
   $stm = $this->db->prepare($sql);
   $stm->bindParam(1, $this->codPedido);
   $stm->execute();
   return $stm->fetchall(PDO::FETCH_ASSOC);
   }

  //Modificar
 public function modificarPedido()
     {
     $sql = "CALL SP_ModificarPedido(?,?,?)";
     $stm = $this->db->prepare($sql);
     $stm->bindParam(1, $this->codPedido);
     $stm->bindParam(2, $this->fecha);
     $stm->bindParam(3, $this->Cliente_idCliente);
    return $stm->execute();

     }
     //Cambiar estado
     public function modificarestadoPe()
         {
         $sql = "CALL SP_ModificarEstadoPe(?,?)";
         $stm = $this->db->prepare($sql);
         $stm->bindParam(1, $this->codPedido);
         $stm->bindParam(2, $this->estado);
         return $stm->execute();

         }

}
 ?>
