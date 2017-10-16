<?php

class NivelEstudio extends Controller
{

  private $mdlNivelEstudio;


  function __construct()
	{
		$this->mdlNivelEstudio = $this->loadModel("mdlNivelEstudio");
	}

  public function index()
  {
      $nivel = $this->mdlNivelEstudio->listarNivel();


      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearN()
    {
        $this->mdlNivelEstudio->__SET("descripcion", $_POST["txtdesnv"]);
        $very = $this->mdlNivelEstudio->insertarNivel();
        header("location: ".URL."adicional/index");
    }

    public function crearNSP()
    {
        $this->mdlNivelEstudio->__SET("descripcion", $_POST["txtdesnv"]);
        $very = $this->mdlNivelEstudio->insertarNivel();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearN2()
    {
        $this->mdlNivelEstudio->__SET("descripcion", $_POST["txtdesnv"]);
        $very = $this->mdlNivelEstudio->insertarNivel();
        if ($very >  0) {

            $nivel = $this->mdlNivelEstudio->listarNivel();

            echo json_encode($nivel);

        }
    }

    public function cambiarEstadoNv()
    {
      $this->mdlNivelEstudio->__SET("idNivel_estudio", $_POST["idNivel_estudio"]);
      $this->mdlNivelEstudio->__SET("estadon", $_POST["estadon"]);
    $very = $this->mdlNivelEstudio->modificarestado();
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
