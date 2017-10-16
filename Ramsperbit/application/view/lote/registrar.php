<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
      <center>
        <div class="box-header with-border">
          <h1>Registro de lote</h1>
        </div>
          <h6>Los campos con (*) son obligatorios</h6>
        </center>
        <form role="form" action="<?= URL ?>lote/insertar" method="POST" id="registrarLote">
        <div class="box-body">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">*Nombre:</label>
                  <input type="text" class="form-control" name="txtdes" placeholder="Introduzca la descripción del lote">
              </div>
            </div>

              <div class="col-md-6 col-md-offset-3">
              <label for="exampleInputEmail1">*Producto:</label>
                <div class="form-group">
                    <select class="form-control select2" id="txtcat" name="txtpro" style="width: 100%;">
                    <option value="null">Seleccionar</option>
                      <?php foreach ($pro as $value):?>
                      <option value="<?=$value['codProducto'] ?>"><?=$value['nombre']?></option>
                      <?php endforeach; ?>
                    </select>
              </div>
              </div>

              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Cantidad del producto:</label>
                    <input type="text" class="form-control" name="txtcan" placeholder="Introduzca la cantidad del lote">
                  </div>
              </div>
          <div class="col-md-6 col-md-offset-5">
                <div class="box-header with-border">
                   <button value="registrar" class="btn btn-info" type="button" name="enviar" id="enviar"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                   <a href="<?php echo URL; ?>lote" class="btn btn-warning" type="button"><span class="glyphicon glyphicon-remove"></span>Cancelar</a>
                </div>
          </div>
          </div>
        </form>
      </div>
</div>
</div>
  </section>
</div>
<script src="<?php echo URL; ?>js/vlote.js"></script>
<script>

   $('#enviar').on('click',function(){
    var form = $(this).parents('form');
    if($('#txtcat').val() == "null" ){
      swal("", "Seleccione los campos faltantes.", "error");
    }else{
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
}  });
</script>
