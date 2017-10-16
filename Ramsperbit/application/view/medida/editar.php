<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificar Unidad de Medida</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>medida/modificar" method="POST">
          <div class="box-body">

            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                  <label for="exampleInputEmail1">*Código:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1"  readonly="" name="txtCOD" value="<?= $medi['codUnidad_medida']; ?>">
                </div>
              </div>
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="exampleInputEmail1">*Nombre:</label>
                <input type="text" class="form-control" name="txtnom"  value="<?= $medi['nombreu']; ?>" placeholder="Introduzca el nombre de la unidad de medida">
              </div>
            </div>

            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="exampleInputEmail1">*Abreviatura:</label>
                <input type="text" class="form-control" name="txtabr" value="<?= $medi['abreviatura']; ?>" placeholder="Introduzca la abreviatura de la unidad de medida">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="col-md-6 col-md-offset-3">
              <div class="box-header with-border">
                 <button value="modificar" class="btn btn-info" type="button" name="modificar" id="modificar"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
                 <a href="<?php echo URL; ?>medida/index"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
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
       swal("¡Excelente!", "El registro ha sido modificado correctamente.", "success");
    }

  });
});
</script>
