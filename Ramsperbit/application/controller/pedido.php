<?php

class Pedido extends Controller
{
  private $mdlPedido;
  private $mdlCliente;
  private $mdlProducto;

  function __construct()
  {
      $this->mdlPedido = $this->loadModel("mdlPedido");
      $this->mdlCliente = $this->loadModel("mdlCliente");
      $this->mdlProducto = $this->loadModel("mdlProducto");
  }
    public function index()
    {
      $pep = $this->mdlPedido->listarPedido();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/pedido/Listar.php';
        require APP . 'view/_templates/footer.php';
    }
    public function indexEmp()
    {
      $pep = $this->mdlPedido->listarPedido();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/pedido/pedido/Listar2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
      $pep = $this->mdlPedido->listarPedido();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/pedido/pedido/Listar3.php';
        require APP . 'view/_templates/footer.php';
    }
    //Insertar
    public function registrar()
    {
      $UP = $this->mdlPedido->UltimaPedido();
      $client = $this->mdlPedido->ListarClientesON();
      $pro = $this->mdlPedido->listarproductosON();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/pedido/RegistarPedido.php';
        require APP . 'view/_templates/footer.php';
    }
    public function registrarSP()
    {
      $UP = $this->mdlPedido->UltimaPedido();
      $client = $this->mdlCliente->listarCliente();
      $pro = $this->mdlPedido->listarproductosON();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/pedido/pedido/RegistarPedidoSP.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){
        $this->mdlPedido->__SET("codPedido", $_POST["codp"]);
        $this->mdlPedido->__SET("fecha", $_POST["fecha"]);
        $this->mdlPedido->__SET("Cliente_idCliente", $_POST["idc"]);
        $this->mdlPedido->__SET("estado", 0);

        $Pe = $this->mdlPedido->insertarPedido();
        if($Pe){
          //$ultima = $this->mdlEntrada->UltimaEntrada()["ultima"];
         for ($i=0; $i < count($_POST["pcantidad"]); $i++) {
          $this->mdlPedido->__SET("Cantidad", $_POST["pcantidad"][$i]);
          $this->mdlPedido->__SET("Cod_Pedido", $_POST["codPedido"][$i]);
          $this->mdlPedido->__SET("Cod_producto", $_POST["codProducto"][$i]);
          $this->mdlPedido->insertarDllPedidOPL();
        }
        }
       //var_dump($_POST);
        header("location:".URL."pedido/index");

    }
    public function insertarSP(){
        $this->mdlPedido->__SET("codPedido", $_POST["codp"]);
        $this->mdlPedido->__SET("fecha", $_POST["fecha"]);
        $this->mdlPedido->__SET("Cliente_idCliente", $_POST["idc"]);
        $this->mdlPedido->__SET("estado", 0);

        $Pe = $this->mdlPedido->insertarPedido();
        if($Pe){
          //$ultima = $this->mdlEntrada->UltimaEntrada()["ultima"];
         for ($i=0; $i < count($_POST["pcantidad"]); $i++) {
          $this->mdlPedido->__SET("Cantidad", $_POST["pcantidad"][$i]);
          $this->mdlPedido->__SET("Cod_Pedido", $_POST["codPedido"][$i]);
          $this->mdlPedido->__SET("Cod_producto", $_POST["codProducto"][$i]);
          $this->mdlPedido->insertarDllPedidOPL();
        }
        }

        header("location:".URL."pedido/indexSP");

    }
    //Modificar
    public function editar($cod)
    {
      $this->mdlPedido->__SET("codPedido", $cod);
      $client = $this->mdlCliente->listarCliente();
      $pep = $this->mdlPedido->consultarPedido();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/pedido/editar.php';
        require APP . 'view/_templates/footer.php';
}
    public function modificar(){
        $this->mdlPedido->__SET("fecha", $_POST["fecha"]);
        $this->mdlPedido->__SET("codPedido", $_POST["txtcod"]);
        $this->mdlPedido->__SET("Cliente_idCliente", $_POST["idc"]);

        $very = $this->mdlPedido->modificarPedido();
       header("location:".URL."pedido/index");
       //var_dump($_POST);
    }
    //Cambiar estado
    public function cambiarEstadoPe()
    {
      $this->mdlPedido->__SET("codPedido", $_POST["codPedido"]);
      $this->mdlPedido->__SET("estado", $_POST["estado"]);
    $very = $this->mdlPedido->modificarestadoPe();
    if ($very)
     {
      echo json_encode(["v"=>1]);
    }
    else{
        echo json_encode(["v"=>0]);
        }
    }
    public function verDetallePedido($codPedido)
   {

     $this->mdlPedido->__set("codPedido",$codPedido);

     $datos = $this->mdlPedido->consultarDetallePedido();
     echo json_encode($datos);

   }

}

 ?>
