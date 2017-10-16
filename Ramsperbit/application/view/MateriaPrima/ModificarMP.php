
 <div class="content-wrapper">
 <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificar materia prima</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>MateriaPrima/modificar" method="POST">
          <div class="box-body">
             <div class="col-md-12">
                <div class="col-md-6">

              <?php foreach ($MP as $valor): ?>
              <label>*Código:</label>
              <input type="text" class="form-control" name="txtcod"  readonly="" value="<?= $cod ?>" placeholder="Introduzca codigo">

            <br>

              <label>*Nombre:</label>
              <input type="text" class="form-control" name="txtnom" value="<?= $valor['nombre']; ?>">
            <br>

              <label>*Precio:</label>
              <input type="number" class="form-control" name="txtp" value="<?= $valor['precio']; ?>">
            <br>
            <label>*Descripción:</label>
            <textarea class="form-control" name="txtd" rows="3" ><?= $valor['descripcion']; ?></textarea>

            </div>



          <div class="col-md-6">

            <label>*Cantidad:</label>
            <input type="number" class="form-control"  readonly ="" name="cant" value="<?= $valor['cantidad']; ?>">
          <br>
          <label>*Stock mínimo:</label>
          <input type="number" class="form-control" name="smin" value="<?= $valor['stock_min']; ?>">
        <br>


                  <label>*Presentación:</label>
                    <select class="form-control select2" id="txtpre" name="txtpre" style="width: 100%;">
                      <option value="<?=$valor['presentacion'] ?>"><?=$valor['presentacionx']?></option>
                      <?php foreach ($present as $value):?>
                        <option value="<?=$value['codPresentacion'] ?>"><?=$value['descripcionp']?></option>
                      <?php endforeach; ?>
                    </select>
       <br>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">*Estado:</h3>
                   </div>
                   <div class="panel-body">
                     <select class="form-control select2" id="txtes" name="txtes" style="width: 100%;">
                      <option value="<?=$valor['estado'] ?>"><?=$valor['estados']?></option>
                           <?php foreach ($est as $value):?>
                         <option value="<?=$value['codEstado'] ?>"><?=$value['estado']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>


         <br>

                    <label>*Unidad de medida:</label>
                      <select class="form-control select2" id="txtuni" name="txtuni" style="width: 100%;">
                        <option value="<?=$valor['Unidad_medida_codUnidad_medida'] ?>"><?=$valor['Unidad_medida_codUnidad_medidad'] ?></option>
                        <?php foreach ($medi as $value):?>
                          <option value="<?=$value['codUnidad_medida'] ?>"><?=$value['nombreu']?></option>
                        <?php endforeach; ?>
                      </select>


          </div>
          </div>
          </div>
          <!-- /.box-body -->

          <center><div class="box-header with-border">
            <button value="modificar" class="btn btn-info" type="button" name="modificar" id="modificar"><span class="glyphicon glyphicon-ok"></span>Modificar</button>

            <a href="<?php echo URL; ?>MateriaPrima/index"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
          </div></center>
        </form>
      </div>
        <?php endforeach ?>
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
