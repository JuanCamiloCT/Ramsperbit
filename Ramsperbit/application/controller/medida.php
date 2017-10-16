<?php

  class Medida extends Controller
{

     private $mdlMedida;

    function __construct()
        {
            $this->mdlMedida = $this->loadModel("mdlMedida");
        }

    public function index()
    {
        // load views
        $medi = $this->mdlMedida->listarMedida();
        require APP . 'view/_templates/header.php';
        require APP . 'view/medida/index.php';
        require APP . 'view/_templates/footer.php';
    }

        public function indexEmp()
        {
            // load views
            $medi = $this->mdlMedida->listarMedida();
            require APP . 'view/_templates/headeremple.php';
            require APP . 'view/medida/index2.php';
            require APP . 'view/_templates/footer.php';
        }

        public function indexSP()
        {
            // load views
            $medi = $this->mdlMedida->listarMedida();
            require APP . 'view/_templates/headersuper.php';
            require APP . 'view/medida/index3.php';
            require APP . 'view/_templates/footer.php';
        }
    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/medida/registrar.php';
        require APP . 'view/_templates/footer.php';
    }
    public function registrarSP()
    {
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/medida/registrarSP.php';
        require APP . 'view/_templates/footer.php';
    }
    public function insertar(){
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        $very = $this->mdlMedida->nuevaMedida();
        header("location: ".URL."medida/index");


    }

        public function insertarSP(){
            $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
            $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
            $very = $this->mdlMedida->nuevaMedida();
            header("location: ".URL."medida/indexSP");
        }
    public function insertar2(){
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        $very = $this->mdlMedida->nuevaMedida();
        header("location:".URL."MateriaPrima/registrar");

    }

    public function insertar3(){
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        $very = $this->mdlMedida->nuevaMedida();
        if ($very >  0) {

        $medi = $this->mdlMedida->listarMedida();

        echo json_encode($medi);

    }

    }

    public function insertar4(){
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        $very = $this->mdlMedida->nuevaMedida();
        if ($very >  0) {

        $medi = $this->mdlMedida->listarMedida();

        echo json_encode($medi);

    }

    }

    public function insertar5(){
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        $very = $this->mdlMedida->nuevaMedida();
        if ($very >  0) {

        $medi = $this->mdlMedida->listarMedida();

        echo json_encode($medi);

    }

    }

    public function editar($cod){
        $this->mdlMedida->__SET("codUnidad_medida", $cod);
        $medi = $this->mdlMedida->consultarUno();
        include APP . 'view/_templates/header.php';
        include APP . 'view/medida/editar.php';
        include APP . 'view/_templates/footer.php';
    }

    public function modificar(){
        $this->mdlMedida->__SET("codUnidad_medida",  $_POST["txtCOD"]);
        $this->mdlMedida->__SET("nombreu", $_POST["txtnom"]);
        $this->mdlMedida->__SET("abreviatura", $_POST["txtabr"]);
        //var_dump($_POST);
        $very = $this->mdlMedida->modificarmedida();
        header("location: ".URL."medida/index");
    }


    public function cambiarEstadoUni()
    {
      $this->mdlMedida->__SET("codUnidad_medida", $_POST["codUnidad_medida"]);
      $this->mdlMedida->__SET("estado", $_POST["estado"]);
    $very = $this->mdlMedida->modificarestadoUni();
    if ($very)
     {
      echo json_encode(["v"=>1]);
    }
    else{
        echo json_encode(["v"=>0]);
        }
    }
    //public function eliminar($id){
        //$this->mdlMedida->__SET("codUnidad_medida", $id);
        //$medi = $this->mdlMedida->elimina();
        //header("location: ".URL."medida/index");
    //}

}

 ?>
