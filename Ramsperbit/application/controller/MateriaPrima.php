<?php



class MateriaPrima extends Controller
{
     private $mdlMateriaPrima;
     private $mdlMedida;
     private $mdlPresentacion;
     private $mdlEstado;

    function __construct()
    {
        $this->mdlMateriaPrima = $this->loadModel("mdlMateriaPrima");
        $this->mdlMedida= $this->loadModel("mdlMedida");
        $this->mdlPresentacion= $this->loadModel("mdlPresentacion");
        $this->mdlEstado= $this->loadModel("mdlEstado");

    }
    //Listar
    public function index()
    {
        $MP = $this->mdlMateriaPrima->listarMP();
        $present = $this->mdlPresentacion->listarPresentacion();
        $est = $this->mdlEstado->listarestado();

        include APP . 'view/_templates/header.php';
        include APP . 'view/MateriaPrima/ListarMP.php';
        include APP . 'view/_templates/footer.php';
    }
    public function indexEmp()
    {
        $MP = $this->mdlMateriaPrima->listarMP();
        $present = $this->mdlPresentacion->listarPresentacion();
        $est = $this->mdlEstado->listarestado();

        include APP . 'view/_templates/headeremple.php';
        include APP . 'view/MateriaPrima/ListarMP2.php';
        include APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        $MP = $this->mdlMateriaPrima->listarMP();
        $present = $this->mdlPresentacion->listarPresentacion();
        $est = $this->mdlEstado->listarestado();

        include APP . 'view/_templates/headersuper.php';
        include APP . 'view/MateriaPrima/ListarMP3.php';
        include APP . 'view/_templates/footer.php';
    }
    //Listar
    public function Reporte()
    {
        $MP = $this->mdlMateriaPrima->listarMP();
        $present = $this->mdlPresentacion->listarPresentacion();
        $est = $this->mdlEstado->listarestado();


        include APP . 'view/MateriaPrima/Reporte.php';

    }
        public function registrarSP()
        {

            $UM = $this->mdlMateriaPrima->UltimaMP();
            $medi = $this->mdlMedida->listarMedidaAct();
            $present = $this->mdlPresentacion->listarPresentacion();
            $est = $this->mdlEstado->listarestado();
            include APP . 'view/_templates/headersuper.php';
            include APP . 'view/MateriaPrima/RegistrarMPSP.php';
            include APP . 'view/_templates/footer.php';
        }

    //Insertar
    public function registrar()
    {
      $UM = $this->mdlMateriaPrima->UltimaMP();
      $medi = $this->mdlMedida->listarMedidaAct();
      $present = $this->mdlPresentacion->listarPresentacion();
      $est = $this->mdlEstado->listarestado();
        include APP . 'view/_templates/header.php';
        include APP . 'view/MateriaPrima/RegistrarMP.php';
        include APP . 'view/_templates/footer.php';
    }
    public function insertarP(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        header("location:".URL."MateriaPrima/registrar");

    }
    public function insertar(){
        $this->mdlMateriaPrima->__SET("codMateria_prima", $_POST["txtcod"]);
        $this->mdlMateriaPrima->__SET("nombre", $_POST["txtnom"]);
        $this->mdlMateriaPrima->__SET("precio", $_POST["txtp"]);
        $this->mdlMateriaPrima->__SET("descripcion", $_POST["txtd"]);
        $this->mdlMateriaPrima->__SET("stock_min", $_POST["smin"]);
        $this->mdlMateriaPrima->__SET("presentacion", $_POST["txtpre"]);
        $this->mdlMateriaPrima->__SET("Unidad_medida_codUnidad_medida", $_POST["txtuni"]);
        //var_dump($_POST);

        $very = $this->mdlMateriaPrima->insertarMP();
        header("location:".URL."MateriaPrima/index");

    }
    public function insertarSP(){
        $this->mdlMateriaPrima->__SET("codMateria_prima", $_POST["txtcod"]);
        $this->mdlMateriaPrima->__SET("nombre", $_POST["txtnom"]);
        $this->mdlMateriaPrima->__SET("precio", $_POST["txtp"]);
        $this->mdlMateriaPrima->__SET("descripcion", $_POST["txtd"]);
        $this->mdlMateriaPrima->__SET("stock_min", $_POST["smin"]);
        $this->mdlMateriaPrima->__SET("presentacion", $_POST["txtpre"]);
        $this->mdlMateriaPrima->__SET("Unidad_medida_codUnidad_medida", $_POST["txtuni"]);
        //var_dump($_POST);

        $very = $this->mdlMateriaPrima->insertarMP();
        header("location:".URL."MateriaPrima/indexSP");

    }
    public function mapeo(){
        $es = $this->mdlMateriaPrima->listarEstados();


    }
    //Modificar
    public function editar($cod)
    {
        $this->mdlMateriaPrima->__SET("codMateria_prima", $cod);
        $medi = $this->mdlMedida->listarMedidaAct();
        $MP = $this->mdlMateriaPrima->consultarMP();
        $present = $this->mdlPresentacion->listarPresentacion();
        $est = $this->mdlEstado->listarestado();
        include APP . 'view/_templates/header.php';
        include APP . 'view/MateriaPrima/ModificarMP.php';
        include APP . 'view/_templates/footer.php';
    }

    public function modificar(){
      $this->mdlMateriaPrima->__SET("codMateria_prima", $_POST["txtcod"]);
      $this->mdlMateriaPrima->__SET("nombre", $_POST["txtnom"]);
      $this->mdlMateriaPrima->__SET("precio", $_POST["txtp"]);
      $this->mdlMateriaPrima->__SET("descripcion", $_POST["txtd"]);
      $this->mdlMateriaPrima->__SET("cantidad", $_POST["cant"]);
      $this->mdlMateriaPrima->__SET("stock_min", $_POST["smin"]);
      $this->mdlMateriaPrima->__SET("presentacion", $_POST["txtpre"]);
      $this->mdlMateriaPrima->__SET("estado",$_POST["txtes"]);
      $this->mdlMateriaPrima->__SET("Unidad_medida_codUnidad_medida", $_POST["txtuni"]);


      $very = $this->mdlMateriaPrima->modificarMP();

       header("location:".URL."MateriaPrima/index");
      //var_dump($_POST);
  }
  //Cambiar estado
//  public function cambiarEstadoMP()
  //{
    //  $this->mdlMateriaPrima->__SET("codMateria_prima", $_POST["codMateria_primaa"]);
    //  $this->mdlMateriaPrima->__SET("estado", $_POST["estadoo"]);
  //$very = $this->mdlMateriaPrima->modificarestadoMP();
  //if ($very)
  // {
    //echo json_encode(["v"=>1]);
  //}
  //else{
    //  echo json_encode(["v"=>0]);
      //}
  //}
}
