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
              <div class="btn-group pull-right">
            </div>
              <h3 class="box-title">Unidad de Medida</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>NOMBRE</th>
                  <th>ABREVIATURA</th>
                  <th>ESTADO</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($medi as $value): ?>
                <tr>
                  <td><?= $value['codUnidad_medida'] ?></td>
                  <td><?= $value['nombreu'] ?></td>
                  <td><?= $value['abreviatura'] ?></td>
                  <td><?= $value['estado']==1?"Activo":"Inactivo" ?></td>

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
