<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <center>
            <div class="box-header with-border">
              <h1>Registro de Empleados</h1>
            </div>
            <h6>Los campos con (*) son obligatorios</h6>
          </center>
          <form action="<?= URL ?>gusuario/crearSP" method="POST" id="registrarEmpleado">
            <div class="box-body">
          <div class="col-md-6">
            <label for="exampleInputEmail1">*Tipo de Documento:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="tipdoc" name="tipdoc" style="width: 100%;">
                    <option value="null">Seleccionar</option>
                    <?php foreach ($documento as $value):?>
                      <option value="<?=$value['idTipo_documento'] ?>"><?=$value['descripcion']?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroTi" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputEmail1">*Nombres:</label>
                  <input type="text" class="form-control" name="txtnom" placeholder="Introduzca los nombres del empleado">
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Nacimiento:</label>
                  <input type="date" class="form-control" name="fehna" value="<?php echo date("Y-m-d");?>">
              </div>
              <br>
              <div class="form-group">
                  <label>*Tipo de RH:</label>
                  <select class="form-control select2" name="txtrh" id="tiprh" style="width: 100%;">
                      <option value="null">Seleccionar</option>
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
              <br>
              <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Ingreso Laboral:</label>
                  <input type="date" class="form-control" name="fehing" value="<?php echo date("Y-m-d");?>">
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputEmail1">*Teléfono Fijo:</label>
                  <input type="number" class="form-control" name="txttel" placeholder="Introduzca el número de telefono fijo del empleado">
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputEmail1">*Barrio:</label>
                  <input type="text" class="form-control" name="txtbar" placeholder="Introduzca el barrio del domicilio del empleado">
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputEmail1">*Cargo:</label>
                  <input type="text" class="form-control" name="txtcar" placeholder="Introduzca el cargo a ejercer en la empresa">
              </div>
              <br>
              <label for="exampleInputEmail1">*Nivel Estudio:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="nivele" name="txtniv" style="width: 100%;">
                      <option value="null">Seleccionar</option>
                      <?php foreach ($nivel as $value):?>
                        <option value="<?=$value['idNivel_estudio'] ?>"><?=$value['descripcion']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroN" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
              <br>
              <label for="exampleInputEmail1">*Pensión:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="pen" name="txtpen" style="width: 100%;">
                    <option value="null">Seleccionar</option>
                      <?php foreach ($pension as $value):?>
                        <option value="<?=$value['idPension'] ?>"><?=$value['nombre']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroP" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
              <br>
              <div class="form-group">
                  <label>*Tipo de Contrato:</label>
                  <select class="form-control select2" name="txtpco" style="width: 100%;">
                      <option selected="selected">Seleccionar</option>
                      <option >Definido</option>
                      <option>Indefinido</option>
                  </select>
              </div>
              <br>
              <label for="exampleInputEmail1">*EPS:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="eps" name="txteps" style="width: 100%;">
                      <option value="null">Seleccionar</option>
                      <?php foreach ($ep as $value):?>
                        <option value="<?=$value['idEPS'] ?>"><?=$value['nombre']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroE" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
              <br>
              <label for="exampleInputEmail1">*Género:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="gene" name="txtgen" style="width: 100%;">
                      <option value="null">Seleccionar</option>
                        <?php foreach ($genero as $value):?>
                          <option value="<?=$value['idGenero'] ?>"><?=$value['nombre']?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroG" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
            </div>
            <br>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">*Identificacíon:</label>
                <input type="text" class="form-control" name="txtiden" placeholder="Introduzca el número de identificación del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Apellidos:</label>
                <input type="text" class="form-control" name="txtape" placeholder="Introduzca los apellidos del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Celular:</label>
                <input type="text" class="form-control" name="txtcel" placeholder="Introduzca el número de celular del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Correo Electrónico:</label>
                <input type="email" class="form-control" name="txtemail" id="exampleInputEmail1" placeholder="Introduzca el email del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Numero de Hijos:</label>
                <input type="text" class="form-control" name="numhijo" placeholder="Introduzca el número de hijos del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Dirección:</label>
                <input type="text" class="form-control" name="txtdir" placeholder="Introduzca la dirección del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Municipio:</label>
                <input type="text" class="form-control" name="txtmun" placeholder="Introduzca el municipio del domicilio del empleado">
              </div>
              <br>
              <label for="exampleInputEmail1">*Profesión:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="pro" name="txtprof" style="width: 100%;">
                      <option value="null">Seleccionar</option>
                      <?php foreach ($profe as $value):?>
                        <option value="<?=$value['idProfesion'] ?>"><?=$value['descripcion']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroPf" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                  </div>
                </div>
                <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Cesantias:</label>
                <input type="text" class="form-control" name="txtces" placeholder="Introduzca la fuente de sus cesantias">
              </div>
              <br>
              <label for="exampleInputEmail1">*Caja de Compensación:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="tipoca" name="txtcaj" style="width: 100%;">
                      <option value="null">Seleccionar</option>
                      <?php foreach ($caja as $value):?>
                        <option value="<?=$value['idCaja_compensacion'] ?>"><?=$value['descripcion']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroCo" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Proceso a Cargo:</label>
                <input type="text" class="form-control" name="txtpro" placeholder="Introduzca el proceso designado en la empresa del empleado">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">*Fecha Ingreso a la EPS:</label>
                <input type="date" class="form-control" name="txtfee" value="<?php echo date("Y-m-d");?>">
              </div>
              <br>
              <div class="form-group">
                <label>*Cuenta:</label>
                  <select class="form-control select2" id="txtcuenta" name="txtcue" style="width: 100%;">
                    <option>Seleccionar</option>
                      <?php foreach ($cuent as $value):?>
                        <option value="<?=$value['idCuenta'] ?>"><?=$value['nombre_usuario']?></option>
                      <?php endforeach; ?>
                  </select>
              </div>
            </div>
<!-- Form EPS NIVEL PROFESION -->
              <div class="col-md-6 col-md-offset-5">
                <div class="box-header with-border">
                  <button  class="btn btn-info" type="button" name="enviar" id="enviar"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                  <a href="<?php echo URL; ?>gusuario/indexSP" class="btn btn-warning" type="button"><span class="glyphicon glyphicon-remove"></span>Cancelar</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

      <div class="modal fade" id="registroTi" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
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
                      <button onclick="registrarDocumento()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    </div>
              </div>
          </div>
        </div>
      </div>



      <div class="modal fade" id="registroN" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
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
                <button  onclick="registrarEstudio()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
          </div>
        </div>
      </div>
    </div>

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
                <button onclick="registrarPension()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

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
              <button  onclick="registrarEPS()"class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                <button  onclick="registrarGenero()"class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="registroPf" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
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
                <button  onclick="registrarProfesion()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="registroCo" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Caja de Compensación</h4>
            </div>
              <div class="modal-body">
                <!--Formulario Baja-->
                <label class="">Descripción</label>
                <input type="text" class="form-control" name="txtdes" id="descaja">
                <br>
              <div class="modal-footer" >
                <button onclick="registrarCaja()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>
</div>
<!--<script type="text/javascript">
$(document).ready(function(){
  $("#gene").select2();
  $("#tipdoc").select2();
  $("#tiprh").select2();
  $("#txtcuenta").select2();
  $("#eps").select2();
  $("#pro").select2();
  $("#nivele").select2();
  $("#pen").select2();
  $("#tipoco").select2();
})
</script>-->
<script src="<?php echo URL; ?>js/vusuario.js"></script>


<script type="text/javascript">
   function registrarDocumento(){
          var d = $("#txtdestip").val();
     $.ajax({
            url:uri+"tipodocumento/crearT2",
            type:"POST",
            data:{txtdestip:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);


           $.each(r, function(i, v){

            if (v.descripcion.toLowerCase() == d.toLowerCase()) {

             $("#tipdoc").append('<option selected="selected" value="'+v.idTipo_documento+'">'+v.descripcion+' </option>')

            }
           });
  $("#registroTi").modal("toggle");
  $("#txtdestip").val("");
        });

        }

        function registrarEstudio(){
          var d = $("#txtdesnv").val();
     $.ajax({
            url:uri+"NivelEstudio/crearN2",
            type:"POST",
            data:{txtdesnv:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);


           $.each(r, function(i, v){

            if (v.descripcion.toLowerCase() == d.toLowerCase()) {

             $("#nivele").append('<option selected="selected" value="'+v.idNivel_estudio+'">'+v.descripcion+' </option>')

            }
           });
  $("#registroN").modal("toggle");
  $("#txtdesnv").val("");
        });

        }

        function registrarPension(){
          var d = $("#txtnompen").val();
          var b = $("#txtabre").val();
          var a = $("#txtfecin").val();
     $.ajax({
            url:uri+"pension/crearP2",
            type:"POST",
            data:{txtnompen:d,txtabre:b,txtfecin:a},
            dataType: "json"
          }).done(function(r){
            console.log(r);


           $.each(r, function(i, v){

            if (v.nombre.toLowerCase() == d.toLowerCase()) {

             $("#pen").append('<option selected="selected" value="'+v.idPension+'">'+v.nombre+' </option>')

            }
           });
  $("#registroP").modal("toggle");

   $("#txtnompen").val("");
   $("#txtabre").val("");
   $("#txtfecin").val("");
        });

        }

        function registrarEPS(){
          var d = $("#txtnome").val();
          var a = $("#txtabrep").val();
     $.ajax({
            url:uri+"eps/crearE2",
            type:"POST",
            data:{txtnome:d, txtabrep:a},
            dataType: "json"
          }).done(function(r){
            console.log(r);

           $.each(r, function(i, v){

            if (v.nombre.toLowerCase() == d.toLowerCase()){

             $("#eps").append('<option selected="selected" value="'+v.idEPS+'">'+v.nombre+' </option>')

            }
           });
  $("#registroE").modal("toggle");
  $("#txtnome").val("");
  $("#txtabrep").val("");
        });

        }

        function registrarGenero(){
          var d = $("#txtnomg").val();

     $.ajax({
            url:uri+"genero/crearG2",
            type:"POST",
            data:{txtnomg:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);

           $.each(r, function(i, v){

            if (v.nombre.toLowerCase() == d.toLowerCase()){

             $("#gene").append('<option selected="selected" value="'+v.idGenero+'">'+v.nombre+' </option>')

            }
           });
  $("#registroG").modal("toggle");
  $("#txtnomg").val("");

        });
        }

        function registrarProfesion(){
          var d = $("#txtDESPRO").val();

     $.ajax({
            url:uri+"profesion/crearPro2",
            type:"POST",
            data:{txtDESPRO:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);

           $.each(r, function(i, v){

            if (v.descripcion.toLowerCase() == d.toLowerCase()){

             $("#pro").append('<option selected="selected" value="'+v.idProfesion+'">'+v.descripcion+' </option>')

            }
           });
  $("#registroPf").modal("toggle");
  $("#txtDESPRO").val("");

        });

        }

        function registrarCaja(){
          var d = $("#descaja").val();

     $.ajax({
            url:uri+"caja/crearC2",
            type:"POST",
            data:{txtdes:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);

           $.each(r, function(i, v){

            if (v.descripcion.toLowerCase() == d.toLowerCase()){

             $("#tipoca").append('<option selected="selected" value="'+v.idCaja_compensacion+'">'+v.descripcion+' </option>')

            }
           });
  $("#registroCo").modal("toggle");
  $("#descaja").val("");

        });

        }
         $('#enviar').on('click',function(){
           if(
    $('#tipdoc').val() == "null" ||  $('#tiprh').val() == "null" ||  $('#nivele').val() == "null" ||  $('#pen').val() == "null" ||  $('#tp').val() == "null"
  ||  $('#eps').val() == "null" ||  $('#gene').val() == "null" || $('#pro').val() == "null" || $('#tipoca').val() == "null" ||  $('#txtcuenta').val() == "null"
         )
           {
             swal("", "Seleccione los campos faltantes.", "error");
           }else{
    var form = $(this).parents('form');
    swal({
      title: "¿Desea guardar el registro?",
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
         swal("¡Excelente!", "El registro ha sido guardado correctamente.", "success");
      }

    });
  }});
</script>
