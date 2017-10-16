<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificar Cliente</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>cliente/modificar" method="post">
          <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">*Identificacíon:</label>
              <input type="text" class="form-control" readonly="" name="txtcod" value="<?= $client['idCliente']; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">*Nombre:</label>
              <input type="text" class="form-control" name="txtnom" value="<?= $client['nombre']; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                  <label>*Tipo de cliente:</label>
                  <select class="form-control select2" name="txtcl" id="tiprh" style="width: 100%;">
                      <option selected="selected"><?= $client['tipo_cliente']; ?></option>
                      <option>Persona</option>
                      <option>Empresa</option>
                  </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Apellido:</label>
              <input type="text" class="form-control" name="txtape" value="<?= $client['apellidos']; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">NIT:</label>
              <input type="text" class="form-control" name="txtnit" value="<?=$client['nit']; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Teléfono:</label>
              <input type="text" class="form-control" name="txttel" value="<?=$client['telefono']; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Dirección:</label>
              <input type="text" class="form-control" name="txtdir" value="<?=$client['direccion']; ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="col-md-6 col-md-offset-5">
            <div class="box-header with-border">
               <button value="Modificar" class="btn btn-info" id="modificar" name="modificar" type="button"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
               <button value="Cancelar" class="btn btn-warning" href="<?= URL ?>cliente/index"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>

<script>

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
       swal("Excelente!", "El registro ha sido modificado correctamente", "success");
    }

  });
});
</script>
