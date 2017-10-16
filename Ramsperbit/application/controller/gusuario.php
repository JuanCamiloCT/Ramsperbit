<?php

class Gusuario extends Controller
{

  private $mdlGenero;
  private $mdlTipoDocumento;
  private $mdlPension;
  private $mdlGusuario;
  private $mdlEps;
  private $mdlProfesion;
  private $mdlNivelEstudio;
  private $mdlCaja;
  private $mdlLogin;



  function __construct()
	{
    $this->mdlGenero = $this->loadModel("mdlGenero");
    $this->mdlTipoDocumento = $this->loadModel("mdlTipoDocumento");
    $this->mdlPension = $this->loadModel("mdlPension");
	  $this->mdlGusuario = $this->loadModel("mdlGusuario");
    $this->mdlEps = $this->loadModel("mdlEps");
    $this->mdlNivelEstudio = $this->loadModel("mdlNivelEstudio");
    $this->mdlProfesion = $this->loadModel("mdlProfesion");
    $this->mdlCaja = $this->loadModel("mdlCaja");
    $this->mdlLogin = $this->loadModel("mdlLogin");
	}

    public function index()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexEmp()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/gusuario/indexEmp.php';
        require APP . 'view/_templates/footer.php';
    }

    public function indexSP()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/gusuario/indexsp.php';
        require APP . 'view/_templates/footer.php';
    }

    public function index2()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar2();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/index2.php';
        require APP . 'view/_templates/footer.php';
    }

        public function index2sp()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar2();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/gusuario/index2sp.php';
        require APP . 'view/_templates/footer.php';
    }

    public function index3()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar3();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/index3.php';
        require APP . 'view/_templates/footer.php';
    }

    public function index3sp()
    {
        $amount_of_songs = $this->mdlGusuario->getEmpleados();
        $amount_of_songs2 = $this->mdlGusuario->getEmpleados2();
        $amount_of_songs3 = $this->mdlGusuario->getEmpleados3();
        $empleado = $this->mdlGusuario->listar3();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/gusuario/index3sp.php';
        require APP . 'view/_templates/footer.php';
    }


    public function registrar()
    {
        $genero = $this->mdlGenero->listar1();
        $documento = $this->mdlTipoDocumento->listar2();
        $pension = $this->mdlPension->listar3();
        $ep = $this->mdlEps->listarEps();
        $nivel = $this->mdlNivelEstudio->listarNivel();
        $profe = $this->mdlProfesion->listarProfesion();
        $cuent = $this->mdlLogin->listarCuenta();
        $caja = $this->mdlCaja->listarC();
        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/registrar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarSP()
    {
        $genero = $this->mdlGenero->listar1();
        $documento = $this->mdlTipoDocumento->listar2();
        $pension = $this->mdlPension->listar3();
        $ep = $this->mdlEps->listarEps();
        $nivel = $this->mdlNivelEstudio->listarNivel();
        $profe = $this->mdlProfesion->listarProfesion();
        $cuent = $this->mdlLogin->listarCuenta();
        $caja = $this->mdlCaja->listarC();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/gusuario/registrarSP.php';
        require APP . 'view/_templates/footer.php';
    }

    public function editar($id)
    {
        $this->mdlGusuario->__SET("idEmpleado",$id);
        $empleado = $this->mdlGusuario->consultarUno();
        $genero = $this->mdlGenero->listar1();
        $documento = $this->mdlTipoDocumento->listar2();
        $pension = $this->mdlPension->listar3();
        $ep = $this->mdlEps->listarEps();
        $nivel = $this->mdlNivelEstudio->listarNivel();
        $profe = $this->mdlProfesion->listarProfesion();
        $cuent = $this->mdlLogin->listarCuenta();
        $caja = $this->mdlCaja->listarC();
        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/editar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function ver($documento)
    {

        $this->mdlGusuario->__SET("idEmpleado", $documento);
        $datos = $this->mdlGusuario->consultarUno();
        echo json_encode($datos);

    }

    public function ide($documento)
    {

        $this->mdlGusuario->__SET("identificacion", $documento);
        $datos = $this->mdlGusuario->consultarIde();
        echo json_encode($datos);

    }

    public function crear()
    {
        $this->mdlGusuario->__SET("Tipo_documento_idTipo_documento", $_POST["tipdoc"]);
        $this->mdlGusuario->__SET("identificacion", $_POST["txtiden"]);
        $this->mdlGusuario->__SET("nombres", $_POST["txtnom"]);
        $this->mdlGusuario->__SET("apellidos", $_POST["txtape"]);
        $this->mdlGusuario->__SET("fecha_nacimiento", $_POST["fehna"]);
        $this->mdlGusuario->__SET("celular", $_POST["txtcel"]);
        $this->mdlGusuario->__SET("rh", $_POST["txtrh"]);
        $this->mdlGusuario->__SET("correo_electronico", $_POST["txtemail"]);
        $this->mdlGusuario->__SET("fecha_ingreso", $_POST["fehing"]);
        $this->mdlGusuario->__SET("numero_hijos", $_POST["numhijo"]);
        $this->mdlGusuario->__SET("telefono_fijo", $_POST["txttel"]);
        $this->mdlGusuario->__SET("direccion", $_POST["txtdir"]);
        $this->mdlGusuario->__SET("barrio", $_POST["txtbar"]);
        $this->mdlGusuario->__SET("municipio", $_POST["txtmun"]);
        $this->mdlGusuario->__SET("cargo", $_POST["txtcar"]);
        $this->mdlGusuario->__SET("profesion_idProfesion", $_POST["txtprof"]);
        $this->mdlGusuario->__SET("nivel_estudio_idNivel_estudio", $_POST["txtniv"]);
        $this->mdlGusuario->__SET("cesantias", $_POST["txtces"]);
        $this->mdlGusuario->__SET("Pension_idPension", $_POST["txtpen"]);
        $this->mdlGusuario->__SET("Caja_compensacion_idCaja_compensacion", $_POST["txtcaj"]);
        $this->mdlGusuario->__SET("Tipo_contrato", $_POST["txtpco"]);
        $this->mdlGusuario->__SET("procesos", $_POST["txtpro"]);
        $this->mdlGusuario->__SET("eps_idEPS", $_POST["txteps"]);
        $this->mdlGusuario->__SET("fecha_ingreso_eps", $_POST["txtfee"]);
        $this->mdlGusuario->__SET("Genero_idGenero", $_POST["txtgen"]);
        $this->mdlGusuario->__SET("cuenta_idCuenta", $_POST["txtcue"]);
        $very = $this->mdlGusuario->insertarEmpleado();
      //var_dump($_POST);


       header("location: ".URL."gusuario/index");
    }

    public function crearSP()
    {
        $this->mdlGusuario->__SET("Tipo_documento_idTipo_documento", $_POST["tipdoc"]);
        $this->mdlGusuario->__SET("identificacion", $_POST["txtiden"]);
        $this->mdlGusuario->__SET("nombres", $_POST["txtnom"]);
        $this->mdlGusuario->__SET("apellidos", $_POST["txtape"]);
        $this->mdlGusuario->__SET("fecha_nacimiento", $_POST["fehna"]);
        $this->mdlGusuario->__SET("celular", $_POST["txtcel"]);
        $this->mdlGusuario->__SET("rh", $_POST["txtrh"]);
        $this->mdlGusuario->__SET("correo_electronico", $_POST["txtemail"]);
        $this->mdlGusuario->__SET("fecha_ingreso", $_POST["fehing"]);
        $this->mdlGusuario->__SET("numero_hijos", $_POST["numhijo"]);
        $this->mdlGusuario->__SET("telefono_fijo", $_POST["txttel"]);
        $this->mdlGusuario->__SET("direccion", $_POST["txtdir"]);
        $this->mdlGusuario->__SET("barrio", $_POST["txtbar"]);
        $this->mdlGusuario->__SET("municipio", $_POST["txtmun"]);
        $this->mdlGusuario->__SET("cargo", $_POST["txtcar"]);
        $this->mdlGusuario->__SET("profesion_idProfesion", $_POST["txtprof"]);
        $this->mdlGusuario->__SET("nivel_estudio_idNivel_estudio", $_POST["txtniv"]);
        $this->mdlGusuario->__SET("cesantias", $_POST["txtces"]);
        $this->mdlGusuario->__SET("Pension_idPension", $_POST["txtpen"]);
        $this->mdlGusuario->__SET("Caja_compensacion_idCaja_compensacion", $_POST["txtcaj"]);
        $this->mdlGusuario->__SET("Tipo_contrato", $_POST["txtpco"]);
        $this->mdlGusuario->__SET("procesos", $_POST["txtpro"]);
        $this->mdlGusuario->__SET("eps_idEPS", $_POST["txteps"]);
        $this->mdlGusuario->__SET("fecha_ingreso_eps", $_POST["txtfee"]);
        $this->mdlGusuario->__SET("Genero_idGenero", $_POST["txtgen"]);
        $this->mdlGusuario->__SET("cuenta_idCuenta", $_POST["txtcue"]);
        $very = $this->mdlGusuario->insertarEmpleado();
    //  var_dump($_POST);

       header("location: ".URL."gusuario/indexSP");
    }

    public function modificar()
    {
        $this->mdlGusuario->__SET("idEmpleado", $_POST["txtid"]);
        $this->mdlGusuario->__SET("Tipo_documento_idTipo_documento", $_POST["tipdoc"]);
        $this->mdlGusuario->__SET("identificacion", $_POST["txtiden"]);
        $this->mdlGusuario->__SET("nombres", $_POST["txtnom"]);
        $this->mdlGusuario->__SET("apellidos", $_POST["txtape"]);
        $this->mdlGusuario->__SET("fecha_nacimiento", $_POST["fehna"]);
        $this->mdlGusuario->__SET("celular", $_POST["txtcel"]);
        $this->mdlGusuario->__SET("rh", $_POST["txtrh"]);
        $this->mdlGusuario->__SET("correo_electronico", $_POST["txtemail"]);
        $this->mdlGusuario->__SET("fecha_ingreso", $_POST["fehing"]);
        $this->mdlGusuario->__SET("numero_hijos", $_POST["numhijo"]);
        $this->mdlGusuario->__SET("telefono_fijo", $_POST["txttel"]);
        $this->mdlGusuario->__SET("direccion", $_POST["txtdir"]);
        $this->mdlGusuario->__SET("barrio", $_POST["txtbar"]);
        $this->mdlGusuario->__SET("municipio", $_POST["txtmun"]);
        $this->mdlGusuario->__SET("cargo", $_POST["txtcar"]);
        $this->mdlGusuario->__SET("profesion_idProfesion", $_POST["txtprof"]);
        $this->mdlGusuario->__SET("nivel_estudio_idNivel_estudio", $_POST["txtniv"]);
        $this->mdlGusuario->__SET("cesantias", $_POST["txtces"]);
        $this->mdlGusuario->__SET("Pension_idPension", $_POST["txtpen"]);
        $this->mdlGusuario->__SET("Caja_compensacion_idCaja_compensacion", $_POST["txtcaj"]);
        $this->mdlGusuario->__SET("Tipo_contrato", $_POST["txtpco"]);
        $this->mdlGusuario->__SET("procesos", $_POST["txtpro"]);
        $this->mdlGusuario->__SET("eps_idEPS", $_POST["txteps"]);
        $this->mdlGusuario->__SET("fecha_ingreso_eps", $_POST["txtfee"]);
        $this->mdlGusuario->__SET("Genero_idGenero", $_POST["txtgen"]);
        $this->mdlGusuario->__SET("cuenta_idCuenta", $_POST["txtcue"]);
        $very = $this->mdlGusuario->modificar();

//  var_dump($_POST);
        header("location: ".URL."gusuario/index");
    }

    public function modificarEst()
    {
        $this->mdlGusuario->__SET("idEmpleado", $_POST["ide"]);
        $this->mdlGusuario->__SET("estado", $_POST["Estadoe"]);
        $very = $this->mdlGusuario->modificarEstado();
        if($very){
          echo json_encode(["v"=>1]);
        }else{
          echo json_encode(["v"=>0]);
        }
    }

}

 ?>
