<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
      <center>
        <div class="box-header with-border">
          <h1>Modificar Orden de Producción</h1>
        </div>
                <h6>Los campos con (*) son obligatorios</h6>
        </center>
        <form role="form" action="<?= URL ?>orden/modificar" method="POST">
        <div class="box-body">
        <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
              <label for="exampleInputEmail1">*Código:</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  readonly="" name="txtcod" value="<?= $orden['codProduccion']; ?>">
            </div>
          </div>
              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Inicio:</label>
                  <input type="date" class="form-control" name="txtfi" value="<?= $orden['fecha_inicio'];?>">
                </div>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Finalización:</label>
                  <input type="date" class="form-control" name="txtff" value="<?= $orden['fecha_finalizacion'];?>">
                </div>
              </div>
              <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label>*Ficha técnica del producto:</label>
                  <select class="form-control select2" name="txtft" style="width: 100%;">
                  <option>Seleccionar</option>
                    <?php foreach ($ficha as $value):?>
                      <option value="<?=$value['codFicha'] ?>"><?= $value["nombre"]?></option>
                    <?php endforeach; ?>
                  </select>
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="">*Cantidad:</label>
                <input type="text" class="form-control" name="txtcan" value="<?= $orden['canti'];?>">
              </div>
            </div>
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label>*Identificación del Empleado:</label>
                <select class="form-control select2" name="txtid" style="width: 100%;">
                  <?php foreach ($empleado as $value):?>
                    <option value="<?=$value['idEmpleado'] ?>"><?= $value["nombres"].' '.$value["apellidos"] ?></option>
                  <?php endforeach; ?>
                </select>
            </div>
          </div>
          <div class="col-md-6  col-md-offset-5">
                <div class="box-header with-border">
                   <button value="Modificar" class="btn btn-info" name="modificar" id="modificar" type="button"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
                   <button value="Cancelar" class="btn btn-warning" href="<?= URL ?>orden/index"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
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
