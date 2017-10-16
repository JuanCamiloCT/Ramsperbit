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
              <h3 class="box-title">Empleados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>IDENTIFICACIÓN</th>
                  <th>NOMBRES</th>
                  <th>APELLIDOS</th>
                  <th>FECHA INGRESO</th>
                  <th>CARGO</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($empleado as $value): ?>
                  <tr>
                    <td><?= $value["identificacion"] ?></td>
                    <td><?= $value["nombres"] ?></td>
                    <td><?= $value["apellidos"] ?></td>
                    <td><?= $value["fecha_ingreso"] ?></td>
                    <td><?= $value["cargo"] ?></td>
                    <td><?= $value["estado"]==1?"Activo" : "Inactivo" ?></td>
                    <td>
                    <a class="btn btn-info btn-sm"  onclick="ver(<?= $value['idEmpleado']?>)"><span class="glyphicon glyphicon-eye-open" ></span></a>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
          </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
      </div>
        <!-- /.col -->
    </div>

    <div class="modal" id="ver" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fa fa-times"></i></button>
                  <h4 class="modal-title" id="myModalLabel"><i class="text-muted fa fa-id-card-o"></i> <strong></strong> - Informacion del Empleado </h4>
                </div>
                <div class="modal-body">

                  <table class="pull-left col-md-8 ">


                    <tbody id="TblUs">

                    </tbody>

                  </table>

                  <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->
</div>
<script src="<?php echo URL; ?>js/verusuario.js"></script>
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
