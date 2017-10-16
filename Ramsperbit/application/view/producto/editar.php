
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <center>
            <div class="box-header with-border">
              <h1>Modificar Producto</h1>
            </div>
              <h6>Los campos con (*) son obligatorios</h6>
          </center>
          <form role="form" action="<?= URL ?>producto/modificar" method="POST">
            <div class="box-body">
               <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Código:</label>
                  <input type="text" class="form-control" readonly="" name="txtcod" value="<?= $produc['codProducto']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Nombre del Producto:</label>
                  <input type="text" class="form-control" name="txtnom" value="<?= $produc['nombre']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Cantidad Actual:</label>
                  <input type="number" class="form-control" name="txtexi" value="<?= $produc['cantidad_actual']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Stock Mínimo:</label>
                  <input type="number" class="form-control" name="txtstock" value="<?= $produc['Stock_minimo']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Ubicación:</label>
                  <input type="text" class="form-control" name="txtubi" value="<?= $produc['ubicacion']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Descripción:</label>
                  <input type="text" class="form-control" name="txtcom" value="<?= $produc['descripcion']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>*Categoría:</label>
                    <select class="form-control select2" id="txtcat" name="txtcat" style="width: 100%;">
                      <?php foreach ($catego as $value):?>
                        <option value="<?=$value['codCategoria'] ?>"><?=$value['descripcionc']?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>*Unidad de medida:</label>
                    <select class="form-control select2" id="txtuni" name="txtuni" style="width: 100%;">
                      <?php foreach ($medi as $value):?>
                        <option value="<?=$value['codUnidad_medida'] ?>"><?=$value['nombreu']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>*Presentación:</label>
                    <select class="form-control select2" id="txtpre" name="txtpre" style="width: 100%;">
                      <?php foreach ($present as $value):?>
                        <option value="<?=$value['codPresentacion'] ?>"><?=$value['descripcionp']?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="col-md-6 col-md-offset-5">
                <div class="box-header with-border">
                  <button value="registrar" class="btn btn-info" type="button" name="modificar" id="modificar"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
                   <a href="<?php echo URL; ?>producto" class="btn btn-warning" type="button"><span class="glyphicon glyphicon-remove"></span>Cancelar</a>
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
