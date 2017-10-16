<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Unidad de Medida</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>medida/insertarSP" method="POST" id="registrarunidad">
          <div class="box-body">
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="exampleInputEmail1">*Nombre:</label>
                <input type="text" class="form-control" name="txtnom" placeholder="Introduzca el nombre de la unidad de medida">
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="exampleInputEmail1">*Abreviatura:</label>
                <input type="text" class="form-control" name="txtabr" placeholder="Introduzca la abreviatura de la unidad de medida">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="col-md-6 col-md-offset-3">
              <div class="box-header with-border">
                <button type="button" name ="enviar"  id ="enviar" class="btn btn-info" ><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                 <a href="<?php echo URL; ?>medida/indexSP"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
<script src="<?php echo URL; ?>js/vunidad.js"></script>
<script>
$('#enviar').on('click',function(){
  var form = $(this).parents('form');
  swal({
    title: "¿Desea guardar el registro?",
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
       swal("¡Excelente!", "El registro ha sido guardado correctamente.", "success");
    }

  });
});
</script>
<script src="<?php echo URL; ?>js/vunidad.js"></script>
