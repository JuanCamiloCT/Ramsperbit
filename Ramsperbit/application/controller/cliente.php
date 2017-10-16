<?php

  class Cliente extends Controller
{

     private $mdlCliente;

    function __construct()
        {
            $this->mdlCliente = $this->loadModel("mdlCliente");
        }

    public function index()
    {
        // load views
        $total1 = $this->mdlCliente->getCliente1();
        $total2 = $this->mdlCliente->getCliente2();
        $total3 = $this->mdlCliente->getCliente3();
        $client = $this->mdlCliente->listarCliente();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/cliente/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function indexEmpresa()
    {
        // load views
        $total1 = $this->mdlCliente->getCliente1();
        $total2 = $this->mdlCliente->getCliente2();
        $total3 = $this->mdlCliente->getCliente3();
        $client = $this->mdlCliente->listarCliente2();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/cliente/indexEmpresa1.php';
        require APP . 'view/_templates/footer.php';
    }
    public function indexPersona()
    {
        // load views
        $total1 = $this->mdlCliente->getCliente1();
        $total2 = $this->mdlCliente->getCliente2();
        $total3 = $this->mdlCliente->getCliente3();
        $client = $this->mdlCliente->listarCliente3();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/cliente/indexPersona.php';
        require APP . 'view/_templates/footer.php';
    }




    public function indexEmp()
    {
        // load views
        $total1 = $this->mdlCliente->getCliente1();
        $total2 = $this->mdlCliente->getCliente2();
        $total3 = $this->mdlCliente->getCliente3();
        $client = $this->mdlCliente->listarCliente();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/pedido/cliente/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $total1 = $this->mdlCliente->getCliente1();
        $total2 = $this->mdlCliente->getCliente2();
        $total3 = $this->mdlCliente->getCliente3();
        $client = $this->mdlCliente->listarCliente();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/pedido/cliente/index3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/cliente/registrar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/pedido/cliente/registrarSP.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){

        $this->mdlCliente->__SET("nombre", $_POST["txtnom"]);
        $this->mdlCliente->__SET("tipo_cliente", $_POST["txtcl"]);
        $this->mdlCliente->__SET("apellidos", $_POST["txtape"]);
        $this->mdlCliente->__SET("nit", $_POST["txtnit"]);
        $this->mdlCliente->__SET("telefono", $_POST["txttel"]);
        $this->mdlCliente->__SET("direccion", $_POST["txtdir"]);
        $very = $this->mdlCliente->nuevoCliente();
        header("location: ".URL."cliente/index");

    }

    public function insertarSP(){

        $this->mdlCliente->__SET("nombre", $_POST["txtnom"]);
        $this->mdlCliente->__SET("tipo_cliente", $_POST["txtcl"]);
        $this->mdlCliente->__SET("apellidos", $_POST["txtape"]);
        $this->mdlCliente->__SET("nit", $_POST["txtnit"]);
        $this->mdlCliente->__SET("telefono", $_POST["txttel"]);
        $this->mdlCliente->__SET("direccion", $_POST["txtdir"]);
        $very = $this->mdlCliente->nuevoCliente();
        header("location: ".URL."cliente/indexSP");

    }

    public function editar($id){
        $this->mdlCliente->__SET("idCliente", $id);
        $client = $this->mdlCliente->consultarUno();
        include APP."view/_templates/header.php";
        include APP."view/pedido/cliente/editar.php";
        include APP."view/_templates/footer.php";
    }

    public function modificar(){
        $this->mdlCliente->__SET("idCliente", $_POST["txtcod"]);
        $this->mdlCliente->__SET("nombre", $_POST["txtnom"]);
        $this->mdlCliente->__SET("tipo_cliente", $_POST["txtcl"]);
        $this->mdlCliente->__SET("apellidos", $_POST["txtape"]);
        $this->mdlCliente->__SET("nit", $_POST["txtnit"]);
        $this->mdlCliente->__SET("telefono", $_POST["txttel"]);
        $this->mdlCliente->__SET("direccion", $_POST["txtdir"]);
        $very = $this->mdlCliente->modificarCliente();
        header("location: ".URL."cliente/index");
    }

    public function modificarEstado(){
        $this->mdlCliente->__SET("idCliente", $_POST["id"]);
        $this->mdlCliente->__SET("estado", $_POST["Estado"]);
        $very = $this->mdlCliente->modificarEstado();
        if($very){
        echo json_encode(["v"=>1]);
        } else {
            echo json_encode(["v"=>0]);
        }
    }

    public function reportes(){
        include APP."view/pedido/cliente/reporte.php";
    }



    //public function eliminar($id){
      //  $this->mdlCliente->__SET("idCliente", $id);
        //$client = $this->mdlCliente->elimina();
        //header("location: ".URL."cliente/index");
    //}

}

 ?>
