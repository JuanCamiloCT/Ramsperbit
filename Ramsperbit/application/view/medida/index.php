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
              <a class="btn btn-primary" href="<?= URL ?>medida/registrar" ><span class="glyphicon glyphicon-plus-sign"></span>Registrar</a>
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
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($medi as $value): ?>
                <tr>
                  <td><?= $value['codUnidad_medida'] ?></td>
                  <td><?= $value['nombreu'] ?></td>
                  <td><?= $value['abreviatura'] ?></td>
                  <td><?= $value['estado']==1?"Activo":"Inactivo" ?></td>
                  <td>


                    <?php if ($value["estado"] ==1){?>
                      <a href="<?= URL ?>medida/editar/<?= $value['codUnidad_medida'] ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                      <a href="#" onclick="cambiarEstadoUni(<?= $value['codUnidad_medida'] ?>, 0)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh" ></i></a>
                    <?php }else {?>
                      <a href="#"  onclick="cambiarEstadoUni(<?= $value['codUnidad_medida'] ?>, 1)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh" ></i></a>
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
