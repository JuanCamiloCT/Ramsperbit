<?php

  class Ficha extends Controller
{

     private $mdlFicha;
     private $mdlMedida;
     private $mdlPresentacion;
     private $mdlMateriaPrima;
  //   private $mdlForma;

    function __construct()
        {
            $this->mdlFicha = $this->loadModel("mdlFicha");
            $this->mdlMedida = $this->loadModel("mdlMedida");
            $this->mdlPresentacion = $this->loadModel("mdlPresentacion");
            $this->mdlMateriaPrima = $this->loadModel("mdlMateriaPrima");
        //    $this->mdlForma = $this->loadModel("mdlForma");
        }

    public function index()
    {
        // load views
        $FT = $this->mdlFicha->listarFicha();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Ficha/ListarFT.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        // load views
        $FT = $this->mdlFicha->listarFicha();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/Ficha/ListarFT2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $FT = $this->mdlFicha->listarFicha();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/Ficha/ListarFT3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
      $MP = $this->mdlMateriaPrima->listarMPAprobada();
      $medi = $this->mdlMedida->listarMedidaAct();
      $present = $this->mdlPresentacion->listarPresentacion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Ficha/RegistarFT.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
      $medi = $this->mdlMedida->listarMedidaAct();
      $present = $this->mdlPresentacion->listarPresentacion();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/Ficha/RegistrarFTSP.php';
        require APP . 'view/_templates/footer.php';
    }

    public function editar($cod)
    {
      $this->mdlFicha->__SET("codFicha", $cod);
      $ficha = $this->mdlFicha->ConsultarUno();

      $medi = $this->mdlMedida->listarMedidaAct();
      $present = $this->mdlPresentacion->listarPresentacion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Ficha/ModificarFT.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){
        $this->mdlFicha->__SET("codFicha", $_POST["cod"]);
        $this->mdlFicha->__SET("nombre", $_POST["nom"]);
        $this->mdlFicha->__SET("descripcion", $_POST["des"]);
        $this->mdlFicha->__SET("lugar_elaboracion", $_POST["le"]);
        $this->mdlFicha->__SET("info_Contacto", $_POST["info"]);
        $this->mdlFicha->__SET("nombre_cientifico", $_POST["nomc"]);
        $this->mdlFicha->__SET("forma_farmaceutica_cod_forma", $_POST["formf"]);
        $this->mdlFicha->__SET("Unidad_medida_codUnidad_medida", $_POST["uni"]);
        $this->mdlFicha->__SET("Presentacion_codPresentacion", $_POST["pre"]);
        $this->mdlFicha->__SET("recomendacion", $_POST["reco"]);
        $this->mdlFicha->__SET("procedimientos", $_POST["pro"]);
        $this->mdlFicha->__SET("usos", $_POST["uso"]);

        $very = $this->mdlFicha->InsertarFicha();
        header("location: ".URL."Ficha/index");
        //var_dump($_POST);
    }
    public function insertarPre(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        header("location:".URL."Ficha/registrar");

    }
    public function insertar2(){
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        $very = $this->mdlMedida->nuevaMedida();
        header("location:".URL."Ficha/registrar");

    }
    public function modificar(){
        $this->mdlFicha->__SET("codFicha", $_POST["cod"]);
        $this->mdlFicha->__SET("nombre", $_POST["nom"]);
        $this->mdlFicha->__SET("descripcion", $_POST["des"]);
        $this->mdlFicha->__SET("lugar_elaboracion", $_POST["le"]);
        $this->mdlFicha->__SET("info_Contacto", $_POST["info"]);
        $this->mdlFicha->__SET("nombre_cientifico", $_POST["nomc"]);
        $this->mdlFicha->__SET("forma_farmaceutica_cod_forma", $_POST["formf"]);
        $this->mdlFicha->__SET("Unidad_medida_codUnidad_medida", $_POST["uni"]);
        $this->mdlFicha->__SET("Presentacion_codPresentacion", $_POST["pre"]);
        $this->mdlFicha->__SET("recomendacion", $_POST["reco"]);
        $this->mdlFicha->__SET("procedimientos", $_POST["pro"]);
        $this->mdlFicha->__SET("usos", $_POST["uso"]);

        $very = $this->mdlFicha->ModificarFicha();
       header("location: ".URL."Ficha/index");
      //var_dump($_POST);
    }
    public function cambiarEstadoFT()
    {
      $this->mdlFicha->__SET("codFicha", $_POST["codFicha"]);
      $this->mdlFicha->__SET("estado", $_POST["estado"]);
    $very = $this->mdlFicha->modificarestadoFT();
    if ($very)
     {
      echo json_encode(["v"=>1]);
    }
    else{
        echo json_encode(["v"=>0]);
        }
    }

    public function insertarSP(){
        $this->mdlFicha->__SET("codFicha", $_POST["cod"]);
        $this->mdlFicha->__SET("nombre", $_POST["nom"]);
        $this->mdlFicha->__SET("descripcion", $_POST["des"]);
        $this->mdlFicha->__SET("lugar_elaboracion", $_POST["le"]);
        $this->mdlFicha->__SET("info_Contacto", $_POST["info"]);
        $this->mdlFicha->__SET("nombre_cientifico", $_POST["nomc"]);
        $this->mdlFicha->__SET("forma_farmaceutica_cod_forma", $_POST["formf"]);
        $this->mdlFicha->__SET("Unidad_medida_codUnidad_medida", $_POST["uni"]);
        $this->mdlFicha->__SET("Presentacion_codPresentacion", $_POST["pre"]);
        $this->mdlFicha->__SET("recomendacion", $_POST["reco"]);
        $this->mdlFicha->__SET("procedimientos", $_POST["pro"]);
        $this->mdlFicha->__SET("usos", $_POST["uso"]);

        $very = $this->mdlFicha->InsertarFicha();
        header("location: ".URL."Ficha/indexSP");
        //var_dump($_POST);
    }

    public function Vermas($codFicha)
   {

     $this->mdlFicha->__set("codFicha",$codFicha);

     $datos = $this->mdlFicha->Vermas();
     echo json_encode($datos);

   }

}

 ?>
