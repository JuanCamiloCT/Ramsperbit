<?php

class Caja extends Controller
{

  private $mdlCaja;


  function __construct()
	{
		$this->mdlCaja = $this->loadModel("mdlCaja");
	}

  public function index()
  {
      $caja = $this->mdlCaja->listarC();
      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }

    public function crearC()
    {
        $this->mdlCaja->__SET("descripcion", $_POST["txtdes"]);
        $very = $this->mdlCaja->insertarCaja();
        header("location: ".URL."adicional/index");
    }

    public function crearCSP()
    {
        $this->mdlCaja->__SET("descripcion", $_POST["txtdes"]);
        $very = $this->mdlCaja->insertarCaja();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearC2()
    {
        $this->mdlCaja->__SET("descripcion", $_POST["txtdes"]);
        $very = $this->mdlCaja->insertarCaja();
        if ($very >  0) {

            $caja = $this->mdlCaja->listarC();

            echo json_encode($caja);

        }
    }

    public function cambiarEstadoCa()
    {
      $this->mdlCaja->__SET("idCaja_compensacion", $_POST["idCaja_compensacion"]);
      $this->mdlCaja->__SET("estadoc", $_POST["estadoc"]);
    $very = $this->mdlCaja->modificarestado();
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
