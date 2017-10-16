<?php

class Genero extends Controller
{

  private $mdlGenero;


  function __construct()
	{
		$this->mdlGenero = $this->loadModel("mdlGenero");
	}

  public function index()
  {
      $genero = $this->mdlGenero->listar1();


      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearG()
    {
        $this->mdlGenero->__SET("nombre", $_POST["txtnomg"]);
        $very = $this->mdlGenero->insertarGenero();
        header("location: ".URL."adicional/index");
    }

    public function crearGSP()
    {
        $this->mdlGenero->__SET("nombre", $_POST["txtnomg"]);
        $very = $this->mdlGenero->insertarGenero();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearG2()
    {
        $this->mdlGenero->__SET("nombre", $_POST["txtnomg"]);
        $very = $this->mdlGenero->insertarGenero();
        if ($very >  0) {

            $genero = $this->mdlGenero->listar1();

            echo json_encode($genero);

        }
    }

    public function cambiarEstadoGe()
    {
      $this->mdlGenero->__SET("idGenero", $_POST["idGenero"]);
      $this->mdlGenero->__SET("estadog", $_POST["estadog"]);
    $very = $this->mdlGenero->modificarestado();
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
