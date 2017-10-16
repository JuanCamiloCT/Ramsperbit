<?php

class Tipodocumento extends Controller
{

  private $mdlTipoDocumento;


  function __construct()
	{
		$this->mdlTipoDocumento = $this->loadModel("mdlTipoDocumento");
	}

  public function index()
  {

      $documento = $this->mdlTipoDocumento->listar2();
      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearT()
    {
        $this->mdlTipoDocumento->__SET("descripcion", $_POST["txtdestip"]);
        $very = $this->mdlTipoDocumento->insertarTipodoc();
        header("location: ".URL."adicional/index");
    }

    public function crearTSP()
    {
        $this->mdlTipoDocumento->__SET("descripcion", $_POST["txtdestip"]);
        $very = $this->mdlTipoDocumento->insertarTipodoc();
        header("location: ".URL."adicional/indexSP");
    }

    public function crearT2()
    {
        $this->mdlTipoDocumento->__SET("descripcion", $_POST["txtdestip"]);
        $very = $this->mdlTipoDocumento->insertarTipodoc();
        if ($very >  0) {

            $documento = $this->mdlTipoDocumento->listar2();

            echo json_encode($documento);

        }
    }

    public function cambiarEstadoDoc()
    {
      $this->mdlTipoDocumento->__SET("idTipo_documento", $_POST["idTipo_documento"]);
      $this->mdlTipoDocumento->__SET("estadod", $_POST["estadod"]);
    $very = $this->mdlTipoDocumento->modificarestado();
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
