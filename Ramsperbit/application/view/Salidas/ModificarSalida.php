<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificar Salida</h1>
            <h6>Los campos con (*) son obligatorios</h6>
        </div>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>Salidas/modificar" method="POST">
          <div class="box-body">


            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <?php foreach ($s as $value): ?>
              <label for="">*Código:</label>
              <input type="text" class="form-control" readonly="" name="txtcod" value="<?= $cod ?>" placeholder="Introduzca codigo">
            </div>
            </div>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="exampleInputEmail1">*Fecha:</label>
              <input type="date" class="form-control" name="fecha" readonly="" value="<?= $value['fecha']; ?>">
            </div>
            </div>

          <!--<div class="form-group">
            <label for="exampleInputEmail1">*ID Empleado:</label>
              <input type="text" class="form-control" name="ID" value="">
          </div>-->
          <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
            <label>*ID Empleado:</label>
              <select class="form-control select2" id="ID" name="ID" style="width: 100%;">
                <option value="<?=$value['Empleado_idEmpleado'] ?>"><?=$value['Empleado_idEmpleado']?>  /  <?=$value['nombre_empleado']?></option>
                <?php foreach ($em as $value):?>
                  <option value="<?=$value['idEmpleado'] ?>"><?=$value['idEmpleado']?>  /  <?=$value['nombres']?></option>
                <?php endforeach; ?>
              </select>
          </div>
          </div>

          <!-- /.box-body -->
          <div class="col-md-6 col-md-offset-3">
          <div class="box-header with-border">
               <button value="modificar" class="btn btn-info" type="button" name="modificar" id="modificar" ><span class="glyphicon glyphicon-ok"></span>Modificar</button>
               <a href="<?php echo URL; ?>Salidas/index"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
               </div>
          </div>
        </form>

      <?php endforeach ?>
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
    confirmButtonText: "Si!",
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
