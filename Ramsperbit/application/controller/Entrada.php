<?php



class Entrada extends Controller
{
      private $mdlEntrada;
      private $mdlGusuario;
      private $mdlMateriaPrima;



    function __construct()
    {

        $this->mdlEntrada = $this->loadModel("mdlEntrada");
        $this->mdlGusuario = $this->loadModel("mdlGusuario");
        $this->mdlMateriaPrima = $this->loadModel("mdlMateriaPrima");
    }
    public function index(){

      $ej = $this->mdlEntrada->consultarEntrada();
      $em = $this->mdlGusuario->listar();
      $e = $this->mdlEntrada->listarEntrada();
        include APP . 'view/_templates/header.php';
        include APP . 'view/Entrada/Listar.php';
        include APP . 'view/_templates/footer.php';
    }

    public function indexEmp(){

      $ej = $this->mdlEntrada->consultarEntrada();
      $em = $this->mdlGusuario->listar();
      $e = $this->mdlEntrada->listarEntrada();
        include APP . 'view/_templates/headeremple.php';
        include APP . 'view/Entrada/Listar3.php';
        include APP . 'view/_templates/footer.php';
    }

    public function indexSP(){

      $ej = $this->mdlEntrada->consultarEntrada();
      $em = $this->mdlGusuario->listar();
      $e = $this->mdlEntrada->listarEntrada();
        include APP . 'view/_templates/headersuper.php';
        include APP . 'view/Entrada/Listar2.php';
        include APP . 'view/_templates/footer.php';
    }

    //insertar
    public function registrar()
    {
        $UE = $this->mdlEntrada->UltimaEntrada();
        $MP = $this->mdlMateriaPrima->listarMPAprobada();
        $em = $this->mdlGusuario->listar();
        include APP . 'view/_templates/header.php';
        include APP . 'view/Entrada/RegistrarEntrada.php';
        include APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
        $UE = $this->mdlEntrada->UltimaEntrada();
        $MP = $this->mdlMateriaPrima->listarMPAprobada();
        $em = $this->mdlGusuario->listar();
        include APP . 'view/_templates/headersuper.php';
        include APP . 'view/Entrada/RegistrarEntradaSP.php';
        include APP . 'view/_templates/footer.php';
    }


    public function insertar(){
        $this->mdlEntrada->__SET("codEntradas", $_POST["txtcod"]);
        $this->mdlEntrada->__SET("fecha", $_POST["fecha"]);
        $this->mdlEntrada->__SET("Empleado_idEmpleado", $_POST["ID"]);
        $E = $this->mdlEntrada->insertarEntrada();

        if($E){
          //$ultima = $this->mdlEntrada->UltimaEntrada()["ultima"];
         for ($i=0; $i < count($_POST["eCantidad"]); $i++) {
          $this->mdlEntrada->__SET("Entradas_codEntradas", $_POST["codEntrada"][$i]);
          $this->mdlEntrada->__SET("Materia_prima_codMateria_prima", $_POST["codMateria_prima"][$i]);
          $this->mdlEntrada->__SET("cantidad", $_POST["eCantidad"][$i]);
          $this->mdlEntrada->__SET("fecha_vencimiento", $_POST["eFecha"][$i]);
          $this->mdlEntrada->insertarDllEntradaMP();
        }
        }
      //  var_dump($_POST);
      header("location:".URL."Entrada/index");

    }

    public function insertarSP(){
        $this->mdlEntrada->__SET("codEntradas", $_POST["txtcod"]);
        $this->mdlEntrada->__SET("fecha", $_POST["fecha"]);
        $this->mdlEntrada->__SET("Empleado_idEmpleado", $_POST["ID"]);
        $E = $this->mdlEntrada->insertarEntrada();

        if($E){
          //$ultima = $this->mdlEntrada->UltimaEntrada()["ultima"];
         for ($i=0; $i < count($_POST["eCantidad"]); $i++) {
          $this->mdlEntrada->__SET("Entradas_codEntradas", $_POST["codEntrada"][$i]);
          $this->mdlEntrada->__SET("Materia_prima_codMateria_prima", $_POST["codMateria_prima"][$i]);
          $this->mdlEntrada->__SET("cantidad", $_POST["eCantidad"][$i]);
          $this->mdlEntrada->__SET("fecha_vencimiento", $_POST["eFecha"][$i]);
          $this->mdlEntrada->insertarDllEntradaMP();
        }
        }
      //  var_dump($_POST);
      header("location:".URL."Entrada/indexSP");

    }

    //Modificar
    public function editar($cod){
        $this->mdlEntrada->__SET("codEntradas", $cod);
        $em = $this->mdlGusuario->listar();
        $eje = $this->mdlEntrada->consultarEntrada();

        include APP . 'view/_templates/header.php';
        include APP . 'view/Entrada/ModificarEntrada.php';
        include APP . 'view/_templates/footer.php';
    }

    public function modificar(){
      $this->mdlEntrada->__SET("codEntradas", $_POST["txtcod"]);
      $this->mdlEntrada->__SET("fecha", $_POST["fecha"]);
      $this->mdlEntrada->__SET("Empleado_idEmpleado", $_POST["ID"]);

      //var_dump($_POST);
        $very = $this->mdlEntrada->modificarEntrada();

      header("location: ".URL."Entrada/index");
    }
    //Cambiar estado
    public function cambiarEstadoE()
    {
      $this->mdlEntrada->__SET("codEntradas", $_POST["codEntradas"]);
      $this->mdlEntrada->__SET("estado", $_POST["estado"]);
    $very = $this->mdlEntrada->modificarestadoE();
    if ($very)
     {
      echo json_encode(["v"=>1]);
    }
    else{
        echo json_encode(["v"=>0]);
        }
    }

    public function verDetalleEntrada($codEntrada)
   {

     $this->mdlEntrada->__set("codEntradas",$codEntrada);

     $datos = $this->mdlEntrada->consultarDetalleEntrada();
     echo json_encode($datos);

   }

}
