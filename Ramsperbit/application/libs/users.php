<?php
function Users() {
  $db = new mdlConexion();
  $sql = $db->query("SELECT * FROM cuenta;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $users[$d['idCuenta']] = array(
        'idCuenta' => $d['idCuenta'],
        'nombre_usuario' => $d['nombre_usuario'],
        'contraseña' => $d['contraseña'],
        'correo_electronico' => $d['correo_electronico'],
        'imagen' => $d['imagen'],
        'estado' => $d['estado'],
        'Rol_idrol' => $d['Rol_idrol'],
      );
      }
    }else {
      $users = false;
    }


  $db->liberar($sql);
  $db->close();
  return $users;
}
?>
