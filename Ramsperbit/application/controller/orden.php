<?php

  class Orden extends Controller
{

    private $mdlGusuario;
    private $mdlFicha;
    private $mdlOrden;

    function __construct()
        {
            $this->mdlGusuario = $this->loadModel("mdlGusuario");
            $this->mdlOrden = $this->loadModel("mdlOrden");
            $this->mdlFicha = $this->loadModel("mdlFicha");
        }

    public function index()
    {
        // load views
        $orden = $this->mdlOrden->listarOrden();
        require APP . 'view/_templates/header.php';
        require APP . 'view/orden/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        // load views
        $orden = $this->mdlOrden->listarOrden();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/orden/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $orden = $this->mdlOrden->listarOrden();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/orden/index3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
          $em = $this->mdlGusuario->listar();
        $ficha = $this->mdlFicha->listarFicha();
        require APP . 'view/_templates/header.php';
        require APP . 'view/orden/registrar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
        $em = $this->mdlGusuario->listar();
        $ficha = $this->mdlFicha->listarFicha();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/orden/registrarSP.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){

        $this->mdlOrden->__SET("fecha_inicio", $_POST["txtfi"]);
        $this->mdlOrden->__SET("fecha_finalizacion", $_POST["txtff"]);
        $this->mdlOrden->__SET("ficha_tecnica_codFicha", $_POST["txtft"]);
        $this->mdlOrden->__SET("canti", $_POST["txtcan"]);
        $this->mdlOrden->__SET("Empleado_idEmpleado", $_POST["txtid"]);
        $very = $this->mdlOrden->nuevaOrden();
        //var_dump($_POST);
      header("location: ".URL."orden/index");

    }

    public function insertarSP(){

        $this->mdlOrden->__SET("fecha_inicio", $_POST["txtfi"]);
        $this->mdlOrden->__SET("fecha_finalizacion", $_POST["txtff"]);
        $this->mdlOrden->__SET("ficha_tecnica_codFicha", $_POST["txtft"]);
        $this->mdlOrden->__SET("canti", $_POST["txtcan"]);
        $this->mdlOrden->__SET("Empleado_idEmpleado", $_POST["txtid"]);
        $very = $this->mdlOrden->nuevaOrden();
        header("location: ".URL."orden/indexSP");

    }

    public function editar($id){
        $empleado = $this->mdlGusuario->listar();
        $ficha = $this->mdlFicha->listarFicha();
        $this->mdlOrden->__SET("codProduccion", $id);
        $orden = $this->mdlOrden->consultarUno();
        include APP."view/_templates/header.php";
        include APP."view/orden/editar.php";
        include APP."view/_templates/footer.php";
    }

    public function modificar(){
        $this->mdlOrden->__SET("codProduccion", $_POST["txtcod"]);
        $this->mdlOrden->__SET("fecha_inicio", $_POST["txtfi"]);
        $this->mdlOrden->__SET("fecha_finalizacion", $_POST["txtff"]);
        $this->mdlOrden->__SET("ficha_tecnica_codFicha", $_POST["txtft"]);
        $this->mdlOrden->__SET("canti", $_POST["txtcan"]);
        $this->mdlOrden->__SET("Empleado_idEmpleado", $_POST["txtid"]);
           $very = $this->mdlOrden->modificarOrden();
           //var_dump($_POST);
         header("location: ".URL."orden/index");

    }

    public function modificarEstadoO(){
        $this->mdlOrden->__SET("codProduccion", $_POST["ido"]);
        $this->mdlOrden->__SET("estado", $_POST["Estadoo"]);
        $very = $this->mdlOrden->modificarEstado();
        if($very){
        echo json_encode(["v"=>1]);
        } else {
            echo json_encode(["v"=>0]);
        }
    }
}
 ?>
