

<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
      <center>
        <div class="box-header with-border">
          <h1>Registro de Orden de Producción</h1>
        </div>
                <h6>Los campos con (*) son obligatorios</h6>
        </center>
        <form role="form" action="<?= URL ?>orden/insertar" method="POST">
        <div class="box-body">
        <!--<div class="col-md-6 col-md-offset-3">
          <div class="form-group">
              <label for="exampleInputEmail1">*Código:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="txtcod" placeholder="Introduzca el código de la orden">
            </div>
          </div>-->
              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Inicio:</label>
                    <input type="date" class="form-control" name="txtfi" min="<?php echo date("Y-m-d"); ?>">
                </div>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Finalización:</label>
                      <input type="date" class="form-control" name="txtff" min="<?php echo date("Y-m-d"); ?>">
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label>*Ficha técnica del producto:</label>
                <select class="form-control select2" id="ft"name="txtft" style="width: 100%;">
                <option value="null">Seleccionar</option>
                  <?php foreach ($ficha as $value):?>
                    <option value="<?=$value['codFicha'] ?>"><?= $value["nombre"]?></option>
                  <?php endforeach; ?>
                </select>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="">*Cantidad:</label>
              <input type="text" class="form-control" name="txtcan">
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label>*Identificación del Empleado:</label>
              <select class="form-control select2" id="ID" name="ID" style="width: 100%;">
                <option value="null">Seleccionar</option>
                <?php foreach ($em as $value):?>
                  <option value="<?=$value['idEmpleado'] ?>"><?=$value['nombres'].' '.$value["apellidos"] ?></option>
                <?php endforeach; ?>
              </select>

            </div>
          </div>
          <div class="col-md-6  col-md-offset-5">
                <div class="box-header with-border">
                   <button value="registrar" class="btn btn-info" type="button" name="enviar" id="enviar"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
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

   $('#enviar').on('click',function(){
    var form = $(this).parents('form');
    if($('#ft').val() == "null" || $('#id').val() == "null"){
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
