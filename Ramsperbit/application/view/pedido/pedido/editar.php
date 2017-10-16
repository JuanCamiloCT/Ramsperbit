<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificar  Pedido</h1>
            <h6>Los campos con (*) son obligatorios</h6>
        </div>
      </center>
      <form role="form" action="<?= URL ?>pedido/modificar" method="POST">
      <div class="box-body">
          <div class="form-group">


            <div class="col-md-6 col-md-offset-3">

            <label for="">*Código:</label>
            <input type="text" class="form-control"   readonly="" name="txtcod"  value="<?= $cod ?>" placeholder="Introduzca codigo">
          </div>
          </div>

          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

              <label for="exampleInputEmail1">*Fecha:</label>
              <input type="date" class="form-control" readonly="" name="fecha" placeholder="" value="<?= $pep['fecha']; ?>">
            </div>
          </div>

          <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <label>*ID CLIENTE:</label>
            <select class="form-control select2" id="idc" name="idc" style="width: 100%;">
              <option value="<?=$pep['Cliente_idCliente'] ?>"><?=$pep['Cliente_idCliente']?>  /  <?=$pep['nombre']?></option>
              <?php foreach ($client as $value):?>
                <option value="<?=$value['idCliente'] ?>"><?=$value['idCliente']?>-<?=$value['nombre']?></option>
              <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="box-header with-border">
            <button value="modificar" class="btn btn-info" type="button" name="modificar" id="modificar"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
            <a href="<?php echo URL; ?>pedido/index" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
          </div>

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
