<?php


class Login extends Controller
{

  private $mdlLogin;


  function __construct()
     {
         $this->mdlLogin = $this->loadModel("mdlLogin");
         $this->mdlCliente = $this->loadModel("mdlCliente");
     }

    public function index()
    {


        require APP . 'view/login/index.php';

    }

    public function indexx()
    {

        $cuent = $this->mdlLogin->listarCuenta();
        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/configuracion/index.php';
        require APP . 'view/_templates/footer.php';

    }

    public function indexxEmp()
    {

        $cuent = $this->mdlLogin->listarCuenta();
        require APP . 'view/_templates/headeremple.php';
        require APP . 'view/gusuario/configuracion/index2.php';
        require APP . 'view/_templates/footer.php';

    }

    public function indexxSP()
    {

        $cuent = $this->mdlLogin->listarCuenta();
        require APP . 'view/_templates/headersuper.php';
        require APP . 'view/gusuario/configuracion/index3.php';
        require APP . 'view/_templates/footer.php';

    }

    public function registrar()
    {
        $rol = $this->mdlLogin->consultarol();
        require APP . 'view/login/registrar.php';

    }

    public function editar($id){
        $this->mdlLogin->__SET("idCuenta", $id);
        $cuent = $this->mdlLogin->consultarUno();
        include APP."view/_templates/header.php";
        include APP."view/gusuario/configuracion/editar.php";
        include APP."view/_templates/footer.php";
    }

    public function registrarCuenta()
    {
        $this->mdlLogin->__SET("nombre_usuario", $_POST["txtname"]);
        $this->mdlLogin->__SET("correo_electronico", $_POST["txtmail"]);
        $this->mdlLogin->__SET("contrasena", $_POST["txtpass"]);
        $img = $_FILES["exampleInputFile"]["name"];
        $parte = explode(".", $img);
        $ruta = $_FILES["exampleInputFile"] ["tmp_name"];
        $destinodb = "img/". $_POST["txtname"].".".$parte[1];
        $destinoarc = "img/". $_POST["txtname"].".".$parte[1];
        copy($ruta, $destinoarc);
        $this->mdlLogin->__SET("imagen", $destinodb);
        $very= $this->mdlLogin->insertarCuenta();
        //$this->mdlLogin->__SET("Rol_idrol", $_POST["txtrol"]);

        //$cuentaCreada = false;
        //$mensajeImagen = "";

        //$pathUpload = $GLOBALS['settings']['uploads_imagen']."avatars/";
        //$publicPathUpload = $GLOBALS['settings']['public_uploads_imagen']."avatars/";



      //  if($very !=0){

          //$idC = $very;
          //$nombreImagen = "avatar_".$idC;
          //$imagen = Uploads::imagen($pathUpload, $FILES, $nombreImagen);
          //$mensajeImagen = $imagen["mensaje"];

          //if ($imagen["subio"]) {

            //$this->mdlLogin->__SET("idCuenta", $idC);
            //$this->mdlLogin->__SET("imagen", $publicPathUpload.$imagen["nombre"]);
            //$cuentaCreada = $this->mdlLogin->actualizarFoto();

          //}

        //}



      header("location: ". URL ."login");
    }


    public function modificarCuent()
    {
        $this->mdlLogin->__SET("idCuenta", $_POST["txtid"]);
        $this->mdlLogin->__SET("nombre_usuario", $_POST["txtname"]);
        $this->mdlLogin->__SET("correo_electronico", $_POST["txtmail"]);
        $this->mdlLogin->__SET("contrasena", $_POST["txtpass"]);
        //$this->mdlLogin->__SET("imagen", $_POST["exampleInputFile"]);
        $img = $_FILES["exampleInputFile"]["name"];
        $parte = explode(".", $img);
        $ruta = $_FILES["exampleInputFile"] ["tmp_name"];
        $destinodb = "img/". $_POST["txtname"].".".$parte[1];
        $destinoarc = "img/". $_POST["txtname"].".".$parte[1];
        copy($ruta, $destinoarc);
        $this->mdlLogin->__SET("imagen", $destinodb);
        $this->mdlLogin->__SET("Rol_idrol", $_POST["txtrol"]);
        $very= $this->mdlLogin->modificarCuenta();
        header("location: ". URL ."login/indexx");
    }

    public function modificarEstadoc()
    {
        $this->mdlLogin->__SET("idCuenta", $_POST["idcu"]);
        $this->mdlLogin->__SET("estado", $_POST["Estadocu"]);
        $very = $this->mdlLogin->modificarEstado();
        if($very){
          echo json_encode(["v"=>1]);
        }else{
          echo json_encode(["v"=>0]);
        }
    }

    public function ver($documento)
  {

       $this->mdlLogin->__SET("nombre_usuario", $documento);
       $datos = $this->mdlLogin->consultarDos();
      echo json_encode($datos);

    }

 public function correo($correo)
    {

        $this->mdlLogin->__SET("correo_electronico", $correo);
        $datos = $this->mdlLogin->consultacorreo2();
        echo json_encode($datos);

    }
     public function logueo()

    {
        //var_dump($_POST);
        header('location: ' . URL . 'login');
        if (isset($_POST["btnLogin"])) {

            $contrasena= $_POST["txtclave"];
            $this->mdlLogin->__SET("nombre_usuario",$_POST["txtnombre"]);
            $resultado = $this->mdlLogin->logueo();
            $estado = $this->mdlLogin->logueo();
            if ($resultado != false) {
              if ($resultado["contrasena"] == $contrasena ) {

                $this->mdlLogin->__SET("Rol_idrol",$resultado["Rol_idrol"]);
                  $this->mdlLogin->__SET("estado",$estado["estado"]);


                if ($resultado["Rol_idrol"] == 1  && $estado["estado"] == 1) {

                  session_start();
                  $_SESSION["nombre_usuario"] = $resultado["nombre_usuario"];
                  $_SESSION["correo_electronico"] = $resultado["correo_electronico"];
                  $_SESSION["imagen"] = $resultado["imagen"];
                  $_SESSION["Rol_idrol"] = $resultado["Rol_idrol"];





                  header("location: ".URL."login/administrador");
                }else   if ($resultado["Rol_idrol"] == 2  && $estado["estado"] == 1) {

                  session_start();
                  $_SESSION["nombre_usuario"] = $resultado["nombre_usuario"];
                  $_SESSION["correo_electronico"] = $resultado["correo_electronico"];
                  $_SESSION["imagen"] = $resultado["imagen"];
                  $_SESSION["Rol_idrol"] = $resultado["Rol_idrol"];

                    header("location: ".URL."login/supervisor");
                  }else if ($resultado["Rol_idrol"] == 3  && $estado["estado"] == 1) {

                    session_start();
                  $_SESSION["nombre_usuario"] = $resultado["nombre_usuario"];
                  $_SESSION["correo_electronico"] = $resultado["correo_electronico"];
                  $_SESSION["imagen"] = $resultado["imagen"];
                  $_SESSION["Rol_idrol"] = $resultado["Rol_idrol"];

                    header("location: ".URL."login/empleado");
                  }

              }

            }else
            {
              header('location: ' . URL . 'login');
            }

        }
    }

    public function administrador()
    {
   $client = $this->mdlCliente->listarCliente();
     require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';

    }

  public function supervisor()
    {

   $client = $this->mdlCliente->listarCliente();
     require APP . 'view/_templates/headersuper.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

  public function empleado()
    {

  $client = $this->mdlCliente->listarCliente();
     require APP . 'view/_templates/headeremple.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';

    }

    public function salir(){
      session_start();
      unset($_SESSION["nombre_usuario"]);
      unset($_SESSION["correo_electronico"]);
      unset($_SESSION["imagen"]);



      header('location: ' . URL . 'login');

    }


        public function recuperar()

        {


        $this->mdlLogin->__SET("correo_electronico",$_POST["txtcorreo"]);
        $resultado = $this->mdlLogin->consultacorreo();
        $correo = $resultado["correo_electronico"];
        $documento = $resultado["idCuenta"];
        $nombre_usuario = $resultado["nombre_usuario"];


        $cadena = "1234567890abcdefghij";
        $longitudCadena=strlen($cadena);
        $pass = "";
        $longitudPass=10;
        for($i=1 ; $i<=$longitudPass ; $i++){
        $pos=rand(0,$longitudCadena-1);
        $pass .= substr($cadena,$pos,1);
        }

        if ($resultado != false) {

        $this->mdlLogin->__SET("contrasena", $pass);
        $this->mdlLogin->__SET("idCuenta",$documento);
        $very= $this->mdlLogin->modificarclave();
        }

        if (isset($_POST["enviarcorreo"])) {

        require APP . 'libs/phpmailer/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->Host = "localhost";
        $mail->From = "ramsperbitdev@gmail.com";
        $mail->FromName = "Sistema Recuperacion";
        $mail->Subject = "Recuperacion de clave";
        $mail->addAddress($correo);
        $mail->MsgHTML('Estimado(a) '.$nombre_usuario.' te hemos asignado una contraseña nueva, intenta ingresar nuevamente con tu respectivo documento y la contraseña asignada
        <br>
        <br>
        Contraseña: '.$pass.'
        <br>
        <br>
        Le recordamos que esta dirección de e-mail es utilizada solamente para los envíos de la información solicitada. Por favor no responda con consultas personales ya que no podrán ser respondidas.
        <br>
        <br>
        Cordialmente
        Administracion - Ramsperbit.

        ');


        if ($mail->Send()) {
        $msg = "Enhorabuena email enviado con exito";
        }
        else
        {
        $msg = "Ha ocorrido un error al enviar email a email";
        }
        }

        header('location: ' . URL . 'Login');
        }


}


 ?>
