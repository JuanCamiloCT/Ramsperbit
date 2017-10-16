<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Modificar Perfil de Usuario
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?= URL. $cuent['imagen']; ?>"  alt="User profile picture">

            <h3 class="profile-username text-center"><?= $cuent['nombre_usuario']; ?></h3>

            <p class="text-muted text-center"><?= $cuent['Rol_idrol']; ?></p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Acerca de Mí</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Localización</strong>

            <p class="text-muted">Medellín, Colombia</p>

            <hr>



            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notas</strong>

            <p>Sí desea modificar el rol de la cuenta por favor ingrese el número (1) para asignarle modo administrador.
            ingrese el número (2) para asignarle modo administrador.
          ingrese el número (3) para asignarle modo administrador.</p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#settings" data-toggle="tab">Opciones</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="settings">
              <form class="form-horizontal" role="form" action="<?= URL ?>login/modificarCuent" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Código:</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                      </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly="" name="txtid" value="<?= $cuent['idCuenta']; ?>">
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nombre de Usuario:</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                      </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtname" value="<?= $cuent['nombre_usuario']; ?>">
                  </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Correo Electrónico:</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                      </div>
  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtmail" value="<?= $cuent['correo_electronico']; ?>">
</div>
                </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">*Subir imágen</label>
                  <input type="file" id="exampleInputFile" name="exampleInputFile"  value="<?= $cuent['imagen']; ?>">
                  <p class="col-sm-2 help-block">Solo se admiten imagenes con extension (JPG).</p>
                </div>
                <br>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Contraseña:</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                      </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtpass" value="<?= $cuent['contrasena']; ?>">
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">ROL:</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                      </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtrol" value="<?= $cuent['Rol_idrol']; ?>">
                  </div>
                    </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-10">
                    <button type="button"  name="modificar" id="modificar" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
                    <a href="<?php echo URL; ?>login/indexx"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>

<script >

  $('#modificar').on('click',function(){
  var form = $(this).parents('form');
  swal({
    title: "¿Desea modificar el registro?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#31b0d5",
    confirmButtonText: "Si",
    closeOnConfirm: false
  },
  function(isConfirm){
    if(isConfirm){
      setTimeout(function(){
        form.submit();
      },1500);
       swal("¡Excelente!", "El registro ha sido modificado correctamente.", "success");
    }

  });
});
</script>
