<?php

class Uploads
{
  public static function imagen($uploadDir, $files, $nombre){

    if(empty($files)){
      return array('subio' => false, 'mensaje' => 'No existen archivos para subir');
    }

    if (!empty($files['foto']) && $files['foto']['error'] !== 4){
      if (!$files['foto']['error']) {
        if(!move_uploaded_file($files['foto']['tmp_name'], $uploadDir.$nombre.'.'.explode(".", $files['foto']['name'])[1])){
          return array('subio' => false, 'mensaje' => 'Ocurrio un error subiendo el archivo al servidor.');
        }else {
          return array('subio' => true, 'mensaje' => 'El archivo ha sido subido con exito.', 'nombre' => $nombre.'.'.explode(".", $files['foto']['name'])[1]);
        }
        }else {
          return array('subio' => false, 'mensaje' => 'Ocurrio un error subiendo el archivo al servidor.');
        }

      }
    }

  }






 ?>
