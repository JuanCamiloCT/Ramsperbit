<?php
if(!empty($_POST['user']) and !empty($_POST['pass'])) {
  $db = new mdlConexion();
  $data = $db->real_escape_string($_POST['user']);
  $pass = Encrypt($_POST['pass']);
  $sql = $db->query("SELECT idCuenta FROM cuenta WHERE (nombre_usuario='$data' OR correo_electronico='$data') AND contraseña='$pass' LIMIT 1;");
  if($db->rows($sql) > 0) {

    $_SESSION['app_id'] = $db->recorrer($sql)[0];
  
    echo 1;
  } else {
    echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> Las credenciales son incorrectas.
  </div>';
  }
  $db->liberar($sql);
  $db->close();
} else {
  echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR:</strong> Todos los datos deben estar llenos.
</div>';
}
?>
