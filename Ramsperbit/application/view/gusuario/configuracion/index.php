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
              <h3 class="box-title">Cuentas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>NOMBRE DE USUARIO</th>
                  <th>CORREO ELECTRÓNICO</th>
                  <th>IMÁGEN</th>
                  <th>ROL</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($cuent as $value): ?>
                  <tr>
                    <td><?= $value["idCuenta"] ?></td>
                    <td><?= $value["nombre_usuario"] ?></td>
                    <td><?= $value["correo_electronico"] ?></td>
                    <td><img src="<?= URL. $value["imagen"]; ?>" width="50" height="50"></td>
                    <td><?= $value["nombre"] ?></td>
                    <td><?= $value["estado"]==1?"Activo" : "Desactivo" ?></td>
                    <td>
                      <a href="<?= URL ?>login/editar/<?= $value['idCuenta'] ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                      <?php if($value["estado"] == 1){  ?>
                        <a href="#" onclick="modificarEstadoCu(<?= $value['idCuenta'] ?>,0)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                      <?php }else { ?>
                        <a href="#" onclick="modificarEstadoCu(<?= $value['idCuenta'] ?>,1)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                      <?php } ?>
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
