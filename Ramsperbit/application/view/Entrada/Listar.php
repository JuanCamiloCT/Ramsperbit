<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Ramsperbit
      <small>Licol S.A.S</small>
    </h1>
  </section>

  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="btn-group pull-right">
                <a class="btn btn-primary" href="<?= URL ?>Entrada/registrar"><span class="glyphicon glyphicon-plus-sign"></span>Registrar</a>
              </div>
              <h3 class="box-title">Entradas</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>FECHA </th>
                  <th>ID EMPLEADO</th>
                  <th>NOMBRE EMPLEADO</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($e as $value): ?>
                    <tr>
                    <td><?= $value['codEntradas'] ?></td>
                    <td><?= $value['fecha'] ?></td>
                    <td><?= $value['Empleado_idEmpleado'] ?></td>
                    <td><?= $value['nombre_empleado'] ?></td>
                    <td><?= $value['estado']==1?"Activo":"Inactivo" ?></td>
                    <td>


                      <a href="#" onclick="verDetalleEntrada(<?= $value['codEntradas'] ?>)" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open" ></span></a>
                      

                      <?php if ($value["estado"] ==1){?>
                        <a href="#" onclick="cambiarEstadoE(<?= $value['codEntradas'] ?>, 0)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh" ></i></a>
                      <?php }else {?>
                        <a href="#"  onclick="cambiarEstadoE(<?= $value['codEntradas'] ?>, 1)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh" ></i></a>
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
  </div>
  <!-- Modal -->
                <div class="modal" id="Ver" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body" id="ModalDLLEntradaMP">


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

                <!--Ver entradas-->
        <div class="modal fade" id="ver" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-md-4">
                  <h4><span class="glyphicon glyphicon-log-in" ></span>-Detalles de entradas:</h4></label><input type="hidden" name="codEntrada" id="codEntrada">
                </div>
              </div>
              <div class="modal-body">
               <div class="panel-body">

                 <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">

                                <br>
                              <table div class="box box-primary">
                                <thead>
                                   <tr>

                                     <th class="text-center">Código materia prima</th>
                                     <th class="text-center">Nombre de materia prima</th>
                                     <th class="text-center">Cantidad </th>
                                     <th class="text-center">Fecha vencimiento </th>

                                      </tr>
                                </thead>
                                   <tbody id="detalleVerEntrada">
                                  </tbody>
                               </table>



                  </div></div>


              </div></div></div></div></div><!--fin modal-->
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
