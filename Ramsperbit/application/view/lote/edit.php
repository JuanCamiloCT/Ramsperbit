
<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
      <center>
        <div class="box-header with-border">
          <h1>Modificar Lote</h1>
        </div>
          <h6>Los campos con (*) son obligatorios</h6>
        </center>
        <form role="form" action="<?= URL ?>lote/modificar" method="POST">
        <div class="box-body">
        <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
              <label for="exampleInputEmail1">*Código:</label>
              <input type="text" class="form-control" readonly="" name="txtcod" value="<?= $lote['codLote']; ?>">
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">*Nombre:</label>
                <input type="text" class="form-control" name="txtdes" value="<?= $lote['descripcion']; ?>">
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
              <label for="exampleInputEmail1">*Producto:</label>
                <div class="form-group">
                    <select class="form-control select2" id="txtcat" name="txtpro" style="width: 100%;">
                    <option>Seleccionar</option>
                      <?php foreach ($pro as $value):?>
                      <option value="<?=$value['codProducto'] ?>"><?=$value['nombre']?></option>
                      <?php endforeach; ?>
                    </select>
              </div>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Cantidad:</label>
                  <input type="number" class="form-control" name="txtcan" value="<?= $lote['cantidad']; ?>">
                </div>
              </div>
          <div class="col-md-6 col-md-offset-5">
                <div class="box-header with-border">
                   <button value="registrar" class="btn btn-info" type="button" name="modificar" id="modificar"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
                   <button value="Cancelar" class="btn btn-warning" href="<?= URL ?>lote/index"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
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
