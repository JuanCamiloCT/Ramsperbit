<?php

class Eps extends Controller
{

  private $mdlEps;


  function __construct()
	{
		$this->mdlEps = $this->loadModel("mdlEps");
	}

  public function index()
  {
      $ep = $this->mdlEps->listarEps();


      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearE()
    {
        $this->mdlEps->__SET("nombre", $_POST["txtnome"]);
        $this->mdlEps->__SET("abreviatura", $_POST["txtabrep"]);
        $very = $this->mdlEps->insertarEps();
        header("location: ".URL."adicional/index");
    }

    public function crearESP()
    {
        $this->mdlEps->__SET("nombre", $_POST["txtnome"]);
        $this->mdlEps->__SET("abreviatura", $_POST["txtabrep"]);
        $very = $this->mdlEps->insertarEps();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearE2()
    {
        $this->mdlEps->__SET("nombre", $_POST["txtnome"]);
        $this->mdlEps->__SET("abreviatura", $_POST["txtabrep"]);
        $very = $this->mdlEps->insertarEps();
        if ($very >  0) {

            $ep = $this->mdlEps->listarEps();

            echo json_encode($ep);

        }
    }

    public function cambiarEstadoEp()
    {
      $this->mdlEps->__SET("idEPS", $_POST["idEPS"]);
      $this->mdlEps->__SET("estadoe", $_POST["estadoe"]);
    $very = $this->mdlEps->modificarestado();
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
