<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Ramsperbit
      <small>Licol S.A.S</small>
    </h1>
  </section>
  <br>
  <br>
    <!-- Main content -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#genero" data-toggle="tab">Género</a></li>
        <li><a href="#documento" data-toggle="tab">Tipo de Documento</a></li>
        <li><a href="#pension" data-toggle="tab">Pensión</a></li>
        <li><a href="#eps" data-toggle="tab">EPS</a></li>
        <li><a href="#estudio" data-toggle="tab">Nivel Estudio</a></li>
        <li><a href="#profesion" data-toggle="tab">Profesiones</a></li>
        <li><a href="#cajacom" data-toggle="tab">Caja Compensación</a></li>
      </ul>


  <div class="tab-content">
    <div class="active tab-pane" id="genero">
    <div class="row">
      <div class="col-xs-12">
          <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Género</h3>
          </div>
            <!-- /.box-header -->
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>CÓDIGO</th>
                    <th>NOMBRE</th>
                    <th>OPCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($genero as $value): ?>
                    <tr>
                      <td><?= $value["idGenero"] ?></td>
                      <td><?= $value["nombre"] ?></td>
                      <td>
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
    <form  action="<?= URL ?>genero/crearG" method="POST" id="modalGe">
      <div class="modal fade" id="registroG" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Género</h4>
            </div>
              <div class="modal-body">
                <!--Formulario Baja-->
                <label class="">Nombre</label>
                <input type="text" class="form-control" id="txtnomg" name="txtnomg">
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
    <!-- /.content -->
</div>


      <!-- Main content -->
    <div class="tab-pane" id="documento">
    <div class="row">
      <div class="col-xs-12">
            <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tipo Documento</h3>
            </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>CÓDIGO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>OPCIONES</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($documento as $value): ?>
                        <tr>
                          <td><?= $value["idTipo_documento"] ?></td>
                          <td><?= $value["descripcion"] ?></td>
                          <td>
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
    <form  action="<?= URL ?>tipodocumento/crearT" method="post" id="modalTi">
      <div class="modal fade" id="registroT" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Registrar Tipo Documento</h4>
              </div>
                <div class="modal-body">
                  <!--Formulario Baja-->
                  <label class="">Descripción</label>
                  <input type="text" class="form-control" id="txtdestip" name="txtdestip">
                  <br>
                    <div class="modal-footer" >
                      <button value="registrar" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    </div>
              </div>
          </div>
        </div>
      </div>
    </form>
        <!-- /.row -->

      <!-- /.content -->
</div>

<div class="tab-pane" id="pension">
    <div class="row">
      <div class="col-xs-12">
              <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Pensión</h3>
          </div>
                <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>NOMBRE</th>
                  <th>ABREVIATURA</th>
                  <th>FECHA INGRESO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                  <tbody>
                    <?php foreach ($pension as $value): ?>
                      <tr>
                        <td><?= $value["idPension"] ?></td>
                        <td><?= $value["nombre"] ?></td>
                        <td><?= $value["abreviatura"] ?></td>
                        <td><?= $value["fecha_ingreso"] ?></td>
                        <td>
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
        <form  action="<?= URL ?>pension/crearP" method="post" id="modalPe">
          <div class="modal fade" id="registroP" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Registrar Pensión</h4>
                </div>
                <div class="modal-body">
                    <!--Formulario Baja-->
                   <label class="">Nombre</label>
                  <input type="text" class="form-control" id="txtnompen" name="txtnompen">
                  <br>
                   <label class="">Abreviatura</label>
                  <input type="text" class="form-control" id="txtabre" name="txtabre">
                  <br>
                   <label class="">Fecha Ingreso</label>
                  <input type="date" class="form-control" id="txtfecin" name="txtfecin">
                    <div class="modal-footer">
                      <button value="registrar" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
          <!-- /.row -->

<div class="tab-pane" id="eps">
    <div class="row">
      <div class="col-xs-12">
                  <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">EPS</h3>
          </div>
                    <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>NOMBRE</th>
                  <th>ABREVIATURA</th>
                  <th>OPCIONES</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($ep as $value): ?>
                <tr>
                  <td><?= $value["idEPS"] ?></td>
                  <td><?= $value["nombre"] ?></td>
                  <td><?= $value["abreviatura"] ?></td>
                  <td>
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
  <form  action="<?= URL ?>eps/crearE" method="POST" id="modalEps">
    <div class="modal fade" id="registroE" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Registrar EPS</h4>
          </div>
        <div class="modal-body">
                        <!--Formulario Baja-->
          <label class="">Nombre</label>
          <input type="text" class="form-control" id="txtnome" name="txtnome">
          <br>
          <label class="">Abreviatura</label>
          <input type="text" class="form-control" id="txtabrep" name="txtabrep">
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
</div>
              <!-- /.row -->
<div class="tab-pane" id="estudio">
    <div class="row">
      <div class="col-xs-12">
                    <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Niveles de Estudio</h3>
          </div>
                      <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>CÓDIGO</th>
                <th>DESCRIPCIÓN</th>
                <th>OPCIONES</th>
              </tr>
              </thead>
                <tbody>
                  <?php foreach ($nivel as $value): ?>
                    <tr>
                              <td><?= $value["idNivel_estudio"] ?></td>
                              <td><?= $value["descripcion"] ?></td>
                              <td>
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
                <form  action="<?= URL ?>nivelEstudio/crearN" method="POST" id="modalEs">
                <div class="modal fade" id="registroNV" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Registrar Nivel de Estudio</h4>
                      </div>
                      <div class="modal-body">
                          <!--Formulario Baja-->
                     <label class="">Descripción</label>
                    <input type="text" class="form-control" id="txtdesnv" name="txtdesnv">


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
            </div>
                <!-- /.row -->

<div class="tab-pane" id="profesion">
                  <div class="row">
                    <div class="col-xs-12">
                      <!-- /.box -->
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Profesiones</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>CÓDIGO</th>
                              <th>DESCRIPCIÓN</th>
                              <th>OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($profe as $value): ?>
                              <tr>
                                <td><?= $value["idProfesion"] ?></td>
                                <td><?= $value["descripcion"] ?></td>
                                <td>
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
                  <form  action="<?= URL ?>profesion/crearPro" method="POST" id="modalPro">
                  <div class="modal fade" id="registroPro" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="exampleModalLabel">Registrar Profesion</h4>
                        </div>
                        <div class="modal-body">
                            <!--Formulario Baja-->
                       <label class="">Descripción</label>
                      <input type="text" class="form-control" id="txtDESPRO" name="txtDESPRO">
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
              </div>
                  <!-- /.row -->
<div class="tab-pane" id="cajacom">
    <div class="row">
      <div class="col-xs-12">
          <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Caja de Compensación</h3>
          </div>
            <!-- /.box-header -->
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>CÓDIGO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>OPCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($caja as $value): ?>
                    <tr>
                      <td><?= $value["idCaja_compensacion"] ?></td>
                      <td><?= $value["descripcion"] ?></td>
                      <td>
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
    <form  action="<?= URL ?>caja/crearC" method="POST" id="modalCa">
      <div class="modal fade" id="registroCa" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Caja de Compensación</h4>
            </div>
              <div class="modal-body">
                <!--Formulario Baja-->
                <label class="">Descripción</label>
                <input type="text" class="form-control" name="txtdes">
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
  </div>
      <!-- /.row -->



  <!-- cierres del tab -->
  </div>
</div>

</div>
<script src="<?php echo URL; ?>js/vadicional.js"></script>
