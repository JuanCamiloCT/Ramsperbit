
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
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $total1; ?></h3>

            <p>Clientes Registrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-handshake-o"></i>
          </div>
          <a href="<?= URL ?>cliente/index" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3><?php echo $total2; ?></h3>

            <p>Empresas</p>
          </div>
          <div class="icon">
            <i class="fa fa-group"></i>
          </div>
          <a href="<?= URL ?>cliente/indexEmpresa" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $total3; ?></h3>

            <p>Personas</p>
          </div>
          <div class="icon">
            <i class="fa fa-male"></i>
          </div>
          <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-down"></i></a>
        </div>
      </div>
      <!-- ./col -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="btn-group pull-right">


              </div>
              <h3 class="box-title">Personas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>TELÉFONO</th>
                  <th>DIRECCIÓN</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($client as $value): ?>
                  <tr>
                    <td><?= $value['idCliente'] ?></td>
                    <td><?= $value['nombre'] ?></td>
                    <td><?= $value['apellidos'] ?></td>
                    <td><?= $value['telefono'] ?></td>
                    <td><?= $value['direccion'] ?></td>
                    <td><?= $value['estado']==1?"Activo":"Inactivo" ?></td>
                    <td>
                      <a href="<?= URL ?>cliente/editar/<?= $value['idCliente'] ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                      <?php if($value["estado"] == 1){  ?>
                        <a href="#" onclick="modificarEstadoCliente(<?= $value['idCliente'] ?>,0)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                      <?php }else { ?>
                        <a href="#" onclick="modificarEstadoCliente(<?= $value['idCliente'] ?>,1)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
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

</section>
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
