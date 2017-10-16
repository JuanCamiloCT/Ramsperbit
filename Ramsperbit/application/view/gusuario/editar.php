<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <center>
            <div class="box-header with-border">
              <h1>Modificar Empleado</h1>
            </div>
            <h6>Los campos con (*) son obligatorios</h6>
          </center>
          <form role="form" action="<?= URL ?>gusuario/modificar" method="POST">
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Código:</label>
                  <input type="text" class="form-control" readonly="" name="txtid" value="<?= $empleado['idEmpleado']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo de Documento:</label>
                  <select class="form-control select2" id="tipdoc" name="tipdoc" style="width: 100%;">
                    <option value="<?=$empleado['Tipo_documento_idTipo_documento']?>"><?=$empleado['descripcion']?></option>
                    <?php foreach ($documento as $value):?>
                      <option value="<?=$value['idTipo_documento'] ?>"><?=$value['descripcion']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Identificacíon:</label>
                  <input type="text" class="form-control" name="txtiden" value="<?= $empleado['identificacion']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombres:</label>
                  <input type="text" class="form-control" name="txtnom" value="<?= $empleado['nombres']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellidos:</label>
                  <input type="text" class="form-control" name="txtape" value="<?= $empleado['apellidos']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha Nacimiento:</label>
                  <input type="date" class="form-control" name="fehna" value="<?= $empleado['fecha_nacimiento']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Celular:</label>
                  <input type="text" class="form-control" name="txtcel" value="<?= $empleado['celular']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo de RH:</label>
                  <select class="form-control select2" name="txtrh" id="tiprh" style="width: 100%;">
                      <option><?=$empleado['rh']?></option>
                      <option>O-</option>
                      <option>O+</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electronico:</label>
                  <input type="email" class="form-control" name="txtemail" id="exampleInputEmail1" value="<?= $empleado['correo_electronico']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Fecha Ingreso Laboral:</label>
                  <input type="date" class="form-control" name="fehing" value="<?= $empleado['fecha_ingreso']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Numero de Hijos:</label>
                  <input type="number" class="form-control" name="numhijo" value="<?= $empleado['numero_hijos']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Teléfono Fijo:</label>
                  <input type="number" class="form-control" name="txttel" value="<?= $empleado['telefono_fijo']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Dirección:</label>
                  <input type="text" class="form-control" name="txtdir" value="<?= $empleado['direccion']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Barrio:</label>
                  <input type="text" class="form-control" name="txtbar" value="<?= $empleado['barrio']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Municipio:</label>
                  <input type="text" class="form-control" name="txtmun" value="<?= $empleado['municipio']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cargo:</label>
                  <input type="text" class="form-control" name="txtcar" value="<?= $empleado['cargo']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Profesion:</label>
                  <select class="form-control select2" id="pro" name="txtprof" style="width: 100%;">
                  <option  value="<?=$empleado['profesion_idProfesion']?>"><?=$empleado['dp']?></option>
                  <?php foreach ($profe as $value):?>
                    <option  value="<?=$value['idProfesion'] ?>"><?=$value['descripcion']?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nivel Estudio:</label>
                  <select class="form-control select2" id="nivele" name="txtniv" style="width: 100%;">
                  <option  value="<?=$empleado['nivel_estudio_idNivel_estudio']?>"><?=$empleado['dni']?></option>
                  <?php foreach ($nivel as $value):?>
                    <option value="<?=$value['idNivel_estudio'] ?>"><?=$value['descripcion']?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cesantias:</label>
                  <input type="text" class="form-control" name="txtces" value="<?= $empleado['cesantias']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Pension:</label>
                  <select class="form-control select2" id="pen" name="txtpen" style="width: 100%;">
                  <option  value="<?=$empleado['Pension_idPension']?>"><?=$empleado['nombrepe']?></option>
                  <?php foreach ($pension as $value):?>
                    <option value="<?=$value['idPension'] ?>"><?=$value['nombre']?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Caja de Compensación:</label>
                  <select class="form-control select2" id="tipoca" name="txtcaj" style="width: 100%;">
                  <option  value="<?=$empleado['Caja_compensacion_idCaja_compensacion']?>"><?=$empleado['descca']?></option>
                  <?php foreach ($caja as $value):?>
                    <option value="<?=$value['idCaja_compensacion'] ?>"><?=$value['descripcion']?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo de Contrato:</label>
                  <select class="form-control select2" name="txtpco" id="tipco" style="width: 100%;">
                    <option selected="selected"><?=$empleado['Tipo_contrato']?></option>
                      <option>Definido</option>
                      <option>Indefinido</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Proceso a Cargo:</label>
                  <input type="text" class="form-control" name="txtpro" value="<?= $empleado['procesos']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>EPS:</label>
                  <select class="form-control select2" id="eps" name="txteps" style="width: 100%;">
                  <option  value="<?=$empleado['eps_idEPS']?>"><?=$empleado['nombreep']?></option>
                  <?php foreach ($ep as $value):?>
                    <option value="<?=$value['idEPS'] ?>"><?=$value['nombre']?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                 <label for="exampleInputEmail1">Fecha Ingreso a la EPS:</label>
                 <input type="date" class="form-control" name="txtfee" value="<?= $empleado['fecha_ingreso_eps']; ?>">
               </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Género:</label>
                  <select class="form-control select2" id="gene" name="txtgen" style="width: 100%;">
                    <option  value="<?=$empleado['Genero_idGenero']?>"><?=$empleado['nombrege']?></option>
                    <?php foreach ($genero as $value):?>
                        <option value="<?=$value['idGenero'] ?>"><?=$value['nombre']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Cuenta:</label>
                    <select class="form-control select2" id="txtcuenta" name="txtcue" style="width: 100%;">
                      <option  value="<?=$empleado['cuenta_idCuenta']?>"><?=$empleado['nombre_usuario']?></option>
                      <?php foreach ($cuent as $value):?>
                        <option selected="selected" value="<?=$value['idCuenta'] ?>"><?=$value['nombre_usuario']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
              </div>
<!-- Form EPS NIVEL PROFESION -->
              <div class="col-md-6  col-md-offset-5">     <!-- /.box-body -->
                <div class="box-header with-border">
                  <button  class="btn btn-info" type="button" name="modificar" id="modificar"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
                  <button  class="btn btn-warning" href="<?= URL ?>gusuario/index"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
$('#modificar').on('click',function(){
  var form = $(this).parents('form');
  swal({
    title: "¿Desea modificar el registro?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#31b0d5",
    confirmButtonText: "Si",
    closeOnConfirm: false
  },
  function(isConfirm){
    if(isConfirm){
      setTimeout(function(){
        form.submit();
      },1500);
       swal("¡Excelente!", "El registro ha sido modificado correctamente.", "success");
    }

  });
});
</script>
