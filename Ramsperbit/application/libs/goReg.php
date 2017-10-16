<?php
$db = new mdlConexion();

$pass = Encrypt($_POST['pass']); //la variable que recibe POST proviene del reg.js linea 12
$user = $db->real_escape_string($_POST['user']);
$email = $db->real_escape_string($_POST['email']);

$sql = $db->query("SELECT nombre_usuario FROM cuenta WHERE nombre_usuario='$user' OR correo_electronico='$email' LIMIT 1;");
if($db->rows($sql) == 0) {

  //$this->mdlLogin->__SET("nombre_usuario", $_POST["txtname"]);
  //$this->mdlLogin->__SET("contraseña", $_POST["txtpass"]);
  //$this->mdlLogin->__SET("correo_electronico", $_POST["txtmail"]);
  //$this->mdlLogin->__SET("imagen", $_POST["exampleInputFile"]);
  //$this->mdlLogin->__SET("Rol_idrol", $_POST["txtrol"]);
  //$very= $this->mdlLogin->insertarCuenta();

  $sql_2 = $db->query("SELECT MAX(idCuenta) AS idCuenta FROM cuenta;");
     $_SESSION['app_id'] = $db->recorrer($sql_2)[0];
     $db->liberar($sql_2);
$HTML = 1;
}else {
  $usuario = $db->recorrer($sql)[0];
  if(strtolower($user) == strtolower($usuario)){
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El usuario ingresado ya existe.
  </div>';
  } else {
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El email ingresado ya existe.
  </div>';
  }

}

$db->liberar();
$db->close();
echo $HTML;

 ?>
