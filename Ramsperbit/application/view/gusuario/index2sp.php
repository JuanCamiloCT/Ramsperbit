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
              <h3><?php echo $amount_of_songs; ?></h3>

              <p>Empleados Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= URL ?>gusuario/indexsp" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $amount_of_songs2; ?></h3>

              <p>Empleados Contrato Definido</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= URL ?>gusuario/index2sp" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-down"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $amount_of_songs3; ?></h3>

              <p>Empleados Contrato Indefinido</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= URL ?>gusuario/index3sp" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
              <h3 class="box-title">Empleados Contrato Definido</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="inde2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>IDENTIFICACIÓN</th>
                  <th>NOMBRES</th>
                  <th>APELLIDOS</th>
                  <th>FECHA INGRESO</th>
                  <th>CARGO</th>
                  <th>ESTADO</th>
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
                <!--  <a href="#myModal" data-toggle="modal" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open" ></span></a> -->
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
    $("#inde2").DataTable();
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
