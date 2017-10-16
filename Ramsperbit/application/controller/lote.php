<?php

class Lote extends Controller
{
    private $mdlLote;
    private $mdlPedido;
    private $mdlProducto;

    function __construct()
        {
            $this->mdlLote = $this->loadModel("mdlLote");
            $this->mdlProducto = $this->loadModel("mdlProducto");
            $this->mdlPedido = $this->loadModel("mdlPedido");
        }

    public function index()
    {
        // load views
        $lote = $this->mdlLote->listarLote();
        $pro = $this->mdlProducto->listarProducto();
        require APP . 'view/_templates/header.php';
        require APP . 'view/lote/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        // load views
        $lote = $this->mdlLote->listarLote();
        $pro = $this->mdlProducto->listarProducto();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/lote/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $lote = $this->mdlLote->listarLote();
        $pro = $this->mdlProducto->listarProducto();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/lote/index3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
        $pro = $this->mdlPedido->listarproductosON();
        require APP . 'view/_templates/header.php';
        require APP . 'view/lote/registrar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
        $pro = $this->mdlPedido->listarproductosON();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/lote/registrarSP.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){

        $this->mdlLote->__SET("descripcion", $_POST["txtdes"]);
        $this->mdlLote->__SET("producto_codProducto", $_POST["txtpro"]);
        $this->mdlLote->__SET("cantidad", $_POST["txtcan"]);
        $very = $this->mdlLote->nuevoLote();
        header("location: ".URL."lote/index");

    }

    public function insertarSP(){

        $this->mdlLote->__SET("descripcion", $_POST["txtdes"]);
        $this->mdlLote->__SET("producto_codProducto", $_POST["txtpro"]);
        $this->mdlLote->__SET("cantidad", $_POST["txtcan"]);
        $very = $this->mdlLote->nuevoLote();
        header("location: ".URL."lote/indexSP");

    }

    public function editar($id){
        $this->mdlLote->__SET("codLote", $id);
        $lote = $this->mdlLote->consultarUno();
        $pro = $this->mdlProducto->listarProducto();
        include APP."view/_templates/header.php";
        include APP."view/lote/edit.php";
        include APP."view/_templates/footer.php";
    }

    public function modificar(){
        $this->mdlLote->__SET("codLote", $_POST["txtcod"]);
        $this->mdlLote->__SET("descripcion", $_POST["txtdes"]);
        $this->mdlLote->__SET("producto_codProducto", $_POST["txtpro"]);
        $this->mdlLote->__SET("cantidad", $_POST["txtcan"]);
        $very = $this->mdlLote->modificarLote();
        header("location: ".URL."lote/index");
    }

    public function modificarEstadoLote(){
        $this->mdlLote->__SET("codLote", $_POST["idl"]);
        $this->mdlLote->__SET("estado", $_POST["Estadol"]);
        $very = $this->mdlLote->modificarEstadoL();
        if($very){
        echo json_encode(["v"=>1]);
        } else {
            echo json_encode(["v"=>0]);
        }
    }

}
 ?>
