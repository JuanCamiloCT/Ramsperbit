<?php

class Profesion extends Controller
{

  private $mdlProfesion;


  function __construct()
	{
		$this->mdlProfesion = $this->loadModel("mdlProfesion");
	}

  public function index()
  {
      $profe = $this->mdlProfesion->listarProfesion();


      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearPro()
    {
        $this->mdlProfesion->__SET("descripcion", $_POST["txtDESPRO"]);
        $very = $this->mdlProfesion->insertarProfesion();
        header("location: ".URL."adicional/index");
    }

    public function crearProSP()
    {
        $this->mdlProfesion->__SET("descripcion", $_POST["txtDESPRO"]);
        $very = $this->mdlProfesion->insertarProfesion();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearPro2()
    {
        $this->mdlProfesion->__SET("descripcion", $_POST["txtDESPRO"]);
        $very = $this->mdlProfesion->insertarProfesion();
        if ($very >  0) {

            $profe = $this->mdlProfesion->listarProfesion();

            echo json_encode($profe);

        }
    }

    public function cambiarEstadoPro()
    {
      $this->mdlProfesion->__SET("idProfesion", $_POST["idProfesion"]);
      $this->mdlProfesion->__SET("estadopr", $_POST["estadopr"]);
    $very = $this->mdlProfesion->modificarestado();
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
