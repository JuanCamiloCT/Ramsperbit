<?php



class Salidas extends Controller
{
  private$mdlSalida;
  private $mdlGusuario;
  private $mdlMateriaPrima;

    function __construct()
    {
        $this->mdlSalida = $this->loadModel("mdlSalida");
        $this->mdlGusuario = $this->loadModel("mdlGusuario");
        $this->mdlMateriaPrima = $this->loadModel("mdlMateriaPrima");
    }
    public function index()
    {
        $em = $this->mdlGusuario->listar();
        $s = $this->mdlSalida->listarSalida();
        include APP . 'view/_templates/header.php';
        include APP . 'view/Salidas/Listar.php';
        include APP . 'view/_templates/footer.php';
    }

        public function indexEmp()
        {
            $em = $this->mdlGusuario->listar();
            $s = $this->mdlSalida->listarSalida();
            include APP . 'view/_templates/headeremple.php';
            include APP . 'view/Salidas/Listar3.php';
            include APP . 'view/_templates/footer.php';
        }

        public function indexSP()
        {
            $em = $this->mdlGusuario->listar();
            $s = $this->mdlSalida->listarSalida();
            include APP . 'view/_templates/headersuper.php';
            include APP . 'view/Salidas/Listar2.php';
            include APP . 'view/_templates/footer.php';
        }
    //Insertar
    public function registrar()
    {
        $US = $this->mdlSalida->UltimaSalida();
        $MP = $this->mdlMateriaPrima->listarMPAprobada();
        $em = $this->mdlGusuario->listar();
        include APP . 'view/_templates/header.php';
        include APP . 'view/Salidas/RegistrarSalida.php';
        include APP . 'view/_templates/footer.php';
    }
    public function registrarSP()
    {
        $US = $this->mdlSalida->UltimaSalida();
        $MP = $this->mdlMateriaPrima->listarMPAprobada();
        $em = $this->mdlGusuario->listar();
        include APP . 'view/_templates/headersuper.php';
        include APP . 'view/Salidas/RegistrarSalidaSP.php';
        include APP . 'view/_templates/footer.php';
    }

    public function insertar(){

        $this->mdlSalida->__SET("codSalidas", $_POST["txtcod"]);
        $this->mdlSalida->__SET("fecha", $_POST["fecha"]);
        $this->mdlSalida->__SET("Empleado_idEmpleado", $_POST["ID"]);
        $S= $this->mdlSalida->insertarSalida();
        if($S){
          //$ultima = $this->mdlEntrada->UltimaEntrada()["ultima"];
         for ($i=0; $i < count($_POST["sCantidad"]); $i++) {
          $this->mdlSalida->__SET("Salidas_codSalidas", $_POST["codSalida"][$i]);
          $this->mdlSalida->__SET("Materia_prima_codMateria_prima", $_POST["codMateria_prima"][$i]);
          $this->mdlSalida->__SET("cantidad", $_POST["sCantidad"][$i]);
          $this->mdlSalida->insertarDllSalidaMP();

        }
        }

    //    var_dump($_POST);
      header("location:".URL."Salidas/index");

    }
    public function insertarSP(){

        $this->mdlSalida->__SET("codSalidas", $_POST["txtcod"]);
        $this->mdlSalida->__SET("fecha", $_POST["fecha"]);
        $this->mdlSalida->__SET("Empleado_idEmpleado", $_POST["ID"]);
        $S= $this->mdlSalida->insertarSalida();
        if($S){
          //$ultima = $this->mdlEntrada->UltimaEntrada()["ultima"];
         for ($i=0; $i < count($_POST["sCantidad"]); $i++) {
          $this->mdlSalida->__SET("Salidas_codSalidas", $_POST["codSalida"][$i]);
          $this->mdlSalida->__SET("Materia_prima_codMateria_prima", $_POST["codMateria_prima"][$i]);
          $this->mdlSalida->__SET("cantidad", $_POST["sCantidad"][$i]);
          $this->mdlSalida->insertarDllSalidaMP();

        }
        }

    //    var_dump($_POST);
      header("location:".URL."Salidas/indexSP");

    }
    //Modificar
    public function editar($cod){
        $this->mdlSalida->__SET("codSalidas", $cod);
        $em = $this->mdlGusuario->listar();
        $s = $this->mdlSalida->consultarSalida();

        include APP . 'view/_templates/header.php';
        include APP . 'view/Salidas/ModificarSalida.php';
        include APP . 'view/_templates/footer.php';
    }
    public function modificar(){
      $this->mdlSalida->__SET("codSalidas", $_POST["txtcod"]);
      $this->mdlSalida->__SET("fecha", $_POST["fecha"]);
      $this->mdlSalida->__SET("estado", $_POST["es"]);
      $this->mdlSalida->__SET("Empleado_idEmpleado", $_POST["ID"]);

      $very = $this->mdlSalida->modificarSalida();
      header("location:".URL."Salidas/index");
    }
    //Cambiar estado
    public function cambiarEstado()
    {
      $this->mdlSalida->__SET("codSalidas", $_POST["codSalidas"]);
      $this->mdlSalida->__SET("estado", $_POST["estado"]);
    $very = $this->mdlSalida->modificarestado();
    if ($very)
     {
      echo json_encode(["v"=>1]);
    }
    else{
        echo json_encode(["v"=>0]);
        }
    }
      //Consultar DLL Salidas

        public function verDetalleSalida($codSalidas)
       {

         $this->mdlSalida->__set("codSalidas",$codSalidas);

         $datos = $this->mdlSalida->consultarDetalleSalida();
         echo json_encode($datos);

       }
       public function consultarStock($cod)
       {

           $this->mdlSalida->__SET("codMateria_prima", $cod);
           $datos = $this->mdlSalida->consultarMateria();
           echo json_encode($datos);

       }
}
?>
