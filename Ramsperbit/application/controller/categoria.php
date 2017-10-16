<?php

  class Categoria extends Controller
{

     private $mdlCategoria;

    function __construct()
        {
            $this->mdlCategoria = $this->loadModel("mdlCategoria");
        }

    public function index()
    {
        // load views
        $catego = $this->mdlCategoria->listarCategoria();
        require APP . 'view/_templates/header.php';
        require APP . 'view/categoria/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        // load views
        $catego = $this->mdlCategoria->listarCategoria();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/categoria/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        // load views
        $catego = $this->mdlCategoria->listarCategoria();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/categoria/index3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){
        $this->mdlCategoria->__SET("descripcionc", $_POST["txtdes"]);
        $very = $this->mdlCategoria->nuevaCategoria();
        header("location: ".URL."categoria/index");

    }

    public function insertarSP(){
        $this->mdlCategoria->__SET("descripcionc", $_POST["txtdes"]);
        $very = $this->mdlCategoria->nuevaCategoria();
        header("location: ".URL."categoria/indexSP");

    }

    // public function insertar2(){
    //     $this->mdlCategoria->__SET("descripcionc", $_POST["txtdes"]);
    //     $very = $this->mdlCategoria->nuevaCategoria();
    //   echo "string";

    // }

    public function insertar2()
{
    $this->mdlCategoria->__SET("descripcionc", $_POST["txtdes"]);
        $very = $this->mdlCategoria->nuevaCategoria();

    if ($very >  0) {

        $catego = $this->mdlCategoria->listarCategoria();

        echo json_encode($catego);

    }

}

public function cambiarEstadoCategoria()
{
  $this->mdlCategoria->__SET("codCategoria", $_POST["codCategoria"]);
  $this->mdlCategoria->__SET("estado", $_POST["estado"]);
$very = $this->mdlCategoria->modificarestado();
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
