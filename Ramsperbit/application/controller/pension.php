<?php

class Pension extends Controller
{

  private $mdlPension;


  function __construct()
	{
		$this->mdlPension = $this->loadModel("mdlPension");
	}

  public function index()
  {

      $pension = $this->mdlPension->listar3();

      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }



    public function crearP()
    {
        $this->mdlPension->__SET("nombre", $_POST["txtnompen"]);
        $this->mdlPension->__SET("abreviatura", $_POST["txtabre"]);
        $this->mdlPension->__SET("fecha_ingreso", $_POST["txtfecin"]);
        $very = $this->mdlPension->insertarPension();
        header("location: ".URL."adicional/index");
    }

    public function crearPSP()
    {
        $this->mdlPension->__SET("nombre", $_POST["txtnompen"]);
        $this->mdlPension->__SET("abreviatura", $_POST["txtabre"]);
        $this->mdlPension->__SET("fecha_ingreso", $_POST["txtfecin"]);
        $very = $this->mdlPension->insertarPension();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearP2()
    {
        $this->mdlPension->__SET("nombre", $_POST["txtnompen"]);
        $this->mdlPension->__SET("abreviatura", $_POST["txtabre"]);
        $this->mdlPension->__SET("fecha_ingreso", $_POST["txtfecin"]);
        $very = $this->mdlPension->insertarPension();
        if ($very >  0) {

            $pension = $this->mdlPension->listar3();

            echo json_encode($pension);

        }
    }

    public function cambiarEstadoPe()
    {
      $this->mdlPension->__SET("idPension", $_POST["idPension"]);
      $this->mdlPension->__SET("estadop", $_POST["estadop"]);
    $very = $this->mdlPension->modificarestado();
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
