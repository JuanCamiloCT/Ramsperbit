<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ramsperbit
      <small>Licol S.A.S</small>
    </h1>
  </section>
  <!-- Main content -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="btn-group pull-right">
              <a class="btn btn-primary" href="<?= URL ?>cliente/registrarSP"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>

              </div>
              <h3 class="box-title">Clientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>TIPO CLIENTE</th>
                  <th>NIT</th>
                  <th>TELÉFONO</th>
                  <th>DIRECCIÓN</th>
                  <th>ESTADO</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($client as $value): ?>
                  <tr>
                    <td><?= $value['idCliente'] ?></td>
                    <td><?= $value['nombre'] ?></td>
                    <td><?= $value['apellidos'] ?></td>
                    <td>
                      <?php if ($value["tipo_cliente"] == "Empresa"){?>
                      <h4><span class="label label-primary"><?= $value['tipo_cliente'] ?></span></h4>
                    <?php } else{?>
                        <h4><span class="label label-danger"><?= $value['tipo_cliente'] ?></span></h4>
                      <?php } ?>
                    <td><?= $value['nit'] ?></td>
                    <td><?= $value['telefono'] ?></td>
                    <td><?= $value['direccion'] ?></td>
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
