<?php

  class Presentacion extends Controller
{

     private $mdlPresentacion;

    function __construct()
        {
            $this->mdlPresentacion = $this->loadModel("mdlPresentacion");
        }

    public function index()
    {
        // load views
        $present = $this->mdlPresentacion->listarPresentacion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/presentacion/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        // load views
        $present = $this->mdlPresentacion->listarPresentacion();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/presentacion/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $present = $this->mdlPresentacion->listarPresentacion();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/presentacion/index3.php';
        require APP . 'view/_templates/footer.php';
    }



    public function insertar(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        header("location: ".URL."presentacion/index");

    }

    public function insertarSP(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        header("location: ".URL."presentacion/indexSP");

    }

    public function insertar2(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        if ($very >  0) {

        $present = $this->mdlPresentacion->listarPresentacion();

        echo json_encode($present);

    }

    }

    public function insertar3(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        if ($very >  0) {

        $present = $this->mdlPresentacion->listarPresentacion();

        echo json_encode($present);

    }

    }

    public function insertar4(){
        $this->mdlPresentacion->__SET("descripcionp", $_POST["txtdes"]);
        $very = $this->mdlPresentacion->nuevaPresentacion();
        if ($very >  0) {

        $present = $this->mdlPresentacion->listarPresentacion();

        echo json_encode($present);

    }

    }

    public function cambiarEstadoPresentacion()
    {
      $this->mdlPresentacion->__SET("codPresentacion", $_POST["codPresentacion"]);
      $this->mdlPresentacion->__SET("estado", $_POST["estado"]);
    $very = $this->mdlPresentacion->modificarestado();
    if ($very)
     {
      echo json_encode(["v"=>1]);
    }
    else{
        echo json_encode(["v"=>0]);
        }
    }

}

 ?>
