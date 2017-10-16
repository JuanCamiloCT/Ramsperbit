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
                <a class="btn btn-primary" href="<?= URL ?>orden/registrar"><span class="glyphicon glyphicon-plus-sign"></span> Registrar </a>

                </div>

                <h3 class="box-title">Orden de Producción</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>FECHA INICIO</th>
                  <th>FECHA FINALIZACIÓN</th>
                  <th>FICHA TÉCNICA</th>
                  <th>CANTIDAD</th>
                  <th>EMPLEADO QUÉ REGISTRÓ</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($orden as $value): ?>
                    <tr>
                      <td><?= $value['codProduccion'] ?></td>
                      <td><?= $value['fecha_inicio'] ?></td>
                      <td><?= $value['fecha_finalizacion'] ?></td>
                      <td><?= $value['ficha_tecnica_codFicha'] ?></td>
                      <td><?= $value['canti'] ?></td>
                      <td><?= $value['nombres'] ?></td>
                      <td><?= $value['estado']==1?"En proceso":"Terminado" ?></td>
                      <td>
                        <a href="<?= URL ?>orden/editar/<?= $value['codProduccion'] ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                        <?php if($value["estado"] == 1){  ?>
                          <a href="#" onclick="modificarEstadoOrden(<?= $value['codProduccion'] ?>,0)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                        <?php }else { ?>
                          <a href="#" onclick="modificarEstadoOrden(<?= $value['codProduccion'] ?>,1)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',

        buttons: [
            {
              extend: 'pdfHtml5',
              download: 'open',
              pageSize: 'LEGAL',
              title: 'ORDEN DE PRODUCCIÓN',
              message: 'Información sobre las ordenes de produccion.',
              text: 'Descargar',
              pageMargins: [ 50, 50, 60, 60 ], // try #1 setting margins
              margin: [  50, 50, 60, 60  ],
                 customize: function ( doc ) {
                    doc.content.splice( 0, 0, {
                      alignment: 'center',


                        image: 'data:image/png;base64,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'
                    } );
                }
            }
        ]
    } );
} );

</script>
