<?php

class Producto extends Controller
{
    private $mdlProducto;
    private $mdlPresentacion;
    private $mdlMedida;
    private $mdlCategoria;

    function __construct()
        {
            $this->mdlPresentacion = $this->loadModel("mdlPresentacion");
            $this->mdlCategoria = $this->loadModel("mdlCategoria");
            $this->mdlMedida = $this->loadModel("mdlMedida");
            $this->mdlProducto = $this->loadModel("mdlProducto");
        }

    public function index()
    {
        // load views
        $produc = $this->mdlProducto->listarProducto();
        require APP . 'view/_templates/header.php';
        require APP . 'view/producto/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        // load views
        $produc = $this->mdlProducto->listarProducto();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/producto/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $produc = $this->mdlProducto->listarProducto();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/producto/index3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
        $catego = $this->mdlCategoria->listarCategoria();
        $present = $this->mdlPresentacion->listarPresentacion();
        $medi = $this->mdlMedida->listarMedida();
        require APP . 'view/_templates/header.php';
        require APP . 'view/producto/registrar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
        $catego = $this->mdlCategoria->listarCategoria();
        $present = $this->mdlPresentacion->listarPresentacion();
        $medi = $this->mdlMedida->listarMedida();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/producto/registrarSP.php';
        require APP . 'view/_templates/footer.php';
    }


    public function insertar(){
        $this->mdlProducto->__SET("nombre", $_POST["txtnom"]);
        $this->mdlProducto->__SET("cantidad_actual", $_POST["txtexi"]);
        $this->mdlProducto->__SET("Stock_minimo", $_POST["txtstock"]);
        $this->mdlProducto->__SET("ubicacion", $_POST["txtubi"]);
        $this->mdlProducto->__SET("descripcion", $_POST["txtcom"]);
        $this->mdlProducto->__SET("Categoria_idCategoria", $_POST["txtcat"]);
        $this->mdlProducto->__SET("Unidad_medida_codUnidad_medida", $_POST["txtuni"]);
        $this->mdlProducto->__SET("Presentacion_codPresentacion", $_POST["txtpre"]);
        $very = $this->mdlProducto->nuevoProducto();

       header("location: ".URL."producto/index");

    }

    public function insertarSP(){
        $this->mdlProducto->__SET("nombre", $_POST["txtnom"]);
        $this->mdlProducto->__SET("cantidad_actual", $_POST["txtexi"]);
        $this->mdlProducto->__SET("Stock_minimo", $_POST["txtstock"]);
        $this->mdlProducto->__SET("ubicacion", $_POST["txtubi"]);
        $this->mdlProducto->__SET("descripcion", $_POST["txtcom"]);
        $this->mdlProducto->__SET("Categoria_idCategoria", $_POST["txtcat"]);
        $this->mdlProducto->__SET("Unidad_medida_codUnidad_medida", $_POST["txtuni"]);
        $this->mdlProducto->__SET("Presentacion_codPresentacion", $_POST["txtpre"]);
        $very = $this->mdlProducto->nuevoProducto();

       header("location: ".URL."producto/indexSP");

    }

    public function ver($documento)
    {

        $this->mdlProducto->__SET("codProducto", $documento);
        $datos = $this->mdlProducto->consultarDos();
        echo json_encode($datos);

    }

    public function editar($id){
        $this->mdlProducto->__SET("codProducto", $id);
        $produc = $this->mdlProducto->consultarUno();
        $catego = $this->mdlCategoria->listarCategoria();
        $present = $this->mdlPresentacion->listarPresentacion();
        $medi = $this->mdlMedida->listarMedida();
        include APP."view/_templates/header.php";
        include APP."view/producto/editar.php";
        include APP."view/_templates/footer.php";
    }

    public function modificar(){
        $this->mdlProducto->__SET("codProducto", $_POST["txtcod"]);
        $this->mdlProducto->__SET("nombre", $_POST["txtnom"]);
        $this->mdlProducto->__SET("cantidad_actual", $_POST["txtexi"]);
        $this->mdlProducto->__SET("Stock_minimo", $_POST["txtstock"]);
        $this->mdlProducto->__SET("ubicacion", $_POST["txtubi"]);
        $this->mdlProducto->__SET("descripcion", $_POST["txtcom"]);
        $this->mdlProducto->__SET("Categoria_idCategoria", $_POST["txtcat"]);
        $this->mdlProducto->__SET("Unidad_medida_codUnidad_medida", $_POST["txtuni"]);
        $this->mdlProducto->__SET("Presentacion_codPresentacion", $_POST["txtpre"]);
        $very = $this->mdlProducto->modificarProducto();
        header("location: ".URL."producto/index");
    }

    public function modificarEstadoP(){
        $this->mdlProducto->__SET("codProducto", $_POST["idp"]);
        $this->mdlProducto->__SET("estado", $_POST["Estadop"]);
        $very = $this->mdlProducto->modificarEstadoProducto();
        if($very){
        echo json_encode(["v"=>1]);
        } else {
            echo json_encode(["v"=>0]);
        }
    }

}
 ?>
