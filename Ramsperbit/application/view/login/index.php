<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ramsperbit | Iniciar sesión</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=URL ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=URL ?>plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="<?php echo URL ?>plugins/sweetalert/dist/sweetalert.css">

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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Ramsper</b>BIT</a>
  </div>

  <div class="login-box-body">


    <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Inicia sesión</h4>

    <form  action="<?php echo URL; ?>login/logueo" method="POST" id="LoginGo">
      <div class="form-group has-feedback">
        <input type="username_or_email" onchange="validardocumento()" class="form-control" name="txtnombre" id="user_login" placeholder="Usuario">

      </div>
      <div class="form-group has-feedback">
        <input type="password" onchange="validarclave()" class="form-control" name="txtclave" id="pass_login" placeholder="Contraseña">

      </div>
      <div class="row">
      <div class="col-xs-8">
          <div class="checkbox icheck">
          </div>
        </div>
        <!-- /.col -->
        <!--<input type="hidden" name="login" value="1">-->
        <div class="col-xs-4">
          <button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-flat" >Iniciar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a  href="#" data-toggle="modal" data-target="#modal-default" >Olvidé mí contraseña</a><br>
    <a href="<?= URL ?>login/registrar" class="text-center">Registrar nueva cuenta</a>

  </div>
  <!-- /.login-box-body -->
</div>




<div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Recupere su contraseña</h4>
          </div>
           <form action="<?= URL ?>login/recuperar" method="post" enctype="multipart/form-data">
             <input id="lost_email" onchange="validarcorreo()" class="form-control" type="email" name="txtcorreo" placeholder="Ingrese su correo electrónico" required>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" name="enviarcorreo" id="enviarcorreo">Enviar</button>
            <input type="hidden" name="phpmailer">

          </div>

          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>





<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?=URL ?>plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?=URL ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=URL ?>plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo URL; ?>plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo URL; ?>plugins/sweetalert/dist/sweetalert-dev.js"></script>

<script src="<?php echo URL; ?>js/jquery.validate.js"></script>

<script src="<?php echo URL; ?>js/additional-methods.js"></script>

<script src="<?php echo URL; ?>js/messages_es.js"></script>

<script src="<?php echo URL; ?>js/vlogin.js"></script>



<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  </script>





<script>
       var uri = "<?php echo URL; ?>";
</script>

<script type="text/javascript">

function validarclave () {

var docu = $("#user_login").val();
var cla = $("#pass_login").val();
$.ajax({
dataType:'json',
  type:'post',
  url:uri+"login/ver/"+docu
}).done(function(response) {
// cla = clave;
if (response.contrasena != cla) {
   document.getElementById("user_login").focus();
swal("¡Ups!", "El usuario y/o clave son incorrectos", "error");

$("#pass_login").val("");
$("#user_login").val("");

}

});

}
</script>

<script type="text/javascript">

   function validardocumento () {

   var docu = $("#user_login").val();
   $.ajax({
   dataType:'json',
       type:'post',
        url:uri+"login/ver/"+docu
   }).done(function(response) {
      console.log(response.estado);
      if (response.estado == 0) {

      document.getElementById("user_login").focus();
      swal("¡Ups!", "Su cuenta actualmente esta inactiva", "error");

   $("#user_login").val("");
      }

    });

  }
</script>

<script type="text/javascript">

  function validarcorreo () {

    var correo = $("#lost_email").val();
    $.ajax({
      dataType:'json',
        type:'post',
        url:uri+"login/correo/"+correo
    }).done(function(response) {
      console.log(response);
      if (response.correo_electronico == null) {
        document.getElementById("lost_email").focus();
      swal("¡Ups!", "El correo indicado no existe", "error");

   $("#lost_email").val("");

      }

    });

  }
</script>

</body>
</html>
