<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ramsperbit | Página de Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=URL ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=URL ?>plugins/iCheck/square/blue.css">

    <!-- Icono -->
  <link rel="shortcut icon"  type="image/x-icon" href="<?php echo URL ?>dist/img/logo2.ico">
      <!-- Icono -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Ramsper</b>BIT</a>
  </div>

  <div class="register-box-body">



    <p class="login-box-msg">Registrar nuevo miembro</p>

    <form action="<?= URL ?>login/registrarCuenta" method="post" id="formRegistrarCuenta" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtname" id="user_reg" placeholder="*Nombre Usuario">

      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="txtmail" id="email_reg" placeholder="*Email">

      </div>
      <div class="form-group">
        <label for="exampleInputFile">*Subir imágen</label>
        <input type="file" id="exampleInputFile" name="exampleInputFile">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpass" id="pass_reg" placeholder="*Contraseña">

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpass2" id="pass2_reg" placeholder="*Retipa Contraseña">

      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
           Por favor,lea la siguiente <a href="#" a data-toggle="modal" data-target="#myModal">información.</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-file"></span>Información:</h4>
    </div>
    <div class="modal-body">
    <p>
      Usted al registrarse, se le asignara a continuación una cuenta de la aplicación Ramsperbit, la cual tendrá como rol empleado,  eso significa
      que usted solo podrá consultar información que le brindara la aplicación, en el caso que necesite registrar o modificar alguna información,
      deberá solicitar al administrador de la aplicación un cambio de rol.

    </p>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

    </div>
  </div>
</div>
</div>
<!-- jQuery 2.2.3 -->
<script src="<?=URL ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=URL ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=URL ?>plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo URL; ?>js/jquery.validate.js"></script>

<script src="<?php echo URL; ?>js/additional-methods.js"></script>

<script src="<?php echo URL; ?>js/messages_es.js"></script>

<script src="<?php echo URL; ?>js/vloginRegistro.js"></script>





<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>


</body>
</html>
