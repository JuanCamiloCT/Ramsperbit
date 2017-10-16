<!-- ./wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ramsperbit
      <small>Licol S.A.S</small>
    </h1>
  </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Presentación</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="#registroP" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-success col-md-offset-11"><span class="glyphicon glyphicon-plus" ></span>Nuevo</button></a><br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>DESCRIPCIÓN</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($present as $value): ?>
                <tr>
                  <td><?= $value['codPresentacion'] ?></td>
                  <td><?= $value['descripcionp'] ?></td>
                  <td><?= $value['estado']==1?"Activo":"Inactivo" ?></td>
                    <td>
                      <?php if ($value["estado"] ==1){?>
                        <a href="#" onclick="cambiarEstadoPre(<?= $value['codPresentacion'] ?>, 0)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh" ></i></a>
                      <?php }else {?>
                        <a href="#"  onclick="cambiarEstadoPre(<?= $value['codPresentacion'] ?>, 1)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh" ></i></a>
                      <?php } ?>
                    </td>

                </tr>
                <?php endforeach ?>
                </tbody>
              </table>
          </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
      </div>
        <!-- /.col -->
    </div>
    <form  action="<?= URL ?>presentacion/insertar" method="POST" id="modalPresentacion">
      <div class="modal fade" id="registroP" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Presentación</h4>
            </div>
              <div class="modal-body">
                <!--Formulario Baja-->
                <label class="">Descripción</label>
                <input type="text" class="form-control" id="txtdes" name="txtdes">
                <br>
              <div class="modal-footer" >
                <button  class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      <!-- /.row -->
  </section>
    <!-- /.content -->
</div>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="<?php echo URL; ?>js/vpresentacion.js"></script>
