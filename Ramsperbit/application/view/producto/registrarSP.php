<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <center>
            <div class="box-header with-border">
              <h1>Registro de Producto</h1>
            </div>
              <h6>Los campos con (*) son obligatorios</h6>
          </center>
          <form role="form" action="<?= URL ?>producto/insertarSP" method="POST" id="registrarProducto">
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Nombre del Producto:</label>
                  <input type="text" class="form-control" name="txtnom" placeholder="Introduzca el nombre del producto">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">*Stock Minimo:</label>
                  <input type="text" class="form-control" name="txtstock" placeholder="Introduzca las existencias del producto">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">*Ubicacion:</label>
                  <input type="text" class="form-control" name="txtubi" placeholder="Introduzca las ubicacion del producto">
                </div>
            <label for="exampleInputEmail1">*Categoria:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="selectmelo" name="txtcat" style="width: 100%;">
                    <option value="null">Seleccionar</option>
                      <?php foreach ($catego as $value):?>
                      <option value="<?=$value['codCategoria'] ?>"><?=$value['descripcionc']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1 ">
                   <a href="#modalmelo" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
            </div>
        <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Cantidad Actual:</label>
                  <input type="text" class="form-control" name="txtexi" placeholder="Introduzca las existencias del producto">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">*Descripción:</label>
                  <input type="text" class="form-control" name="txtcom" placeholder="Introduzca la descripción del producto">
                </div>
                <label for="exampleInputEmail1">*Unidad de medida:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2" id="txtunii" name="txtuni" style="width: 100%;">
                    <option value="null">Seleccionar</option>
                      <?php foreach ($medi as $value):?>
                      <option value="<?=$value['codUnidad_medida'] ?>"><?=$value['nombreu']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroU" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
              <br><br>
            <label for="exampleInputEmail1">*Presentación:</label>
                <div class="form-group">
                  <div class="col-md-11">
                    <select class="form-control select2"  id="txtpre" name="txtpre" style="width: 100%;">
                    <option value="null">Seleccionar</option>
                      <?php foreach ($present as $value):?>
                      <option value="<?=$value['codPresentacion'] ?>"><?=$value['descripcionp']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                   <a href="#registroP" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-md-offset-5">
              <div class="box-header with-border">
                <button value="registrar" class="btn btn-info" type="button" name="enviar" id="enviar"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                 <a href="<?php echo URL; ?>producto/indexSP" class="btn btn-warning" type="button"><span class="glyphicon glyphicon-remove"></span>Cancelar</a>
              </div>
            </div>
              </div>
          </form>
      </div>
    </div>

    <div>
      <div class="modal fade" id="registroP" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Presentacion</h4>
            </div>
              <div class="modal-body">
                <!--Formulario Baja-->
                <label class="">Descripción</label>
                <input type="text" class="form-control" id="pre" name="txtdes">
                <br>
              <div class="modal-footer" >
                <button  onclick="registrarPresentacion()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div >
      <div class="modal fade" id="modalmelo" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Categoria</h4>
            </div>
              <div class="modal-body">
                <!--Formulario Baja-->
                <label class="">Descripción</label>
                <input type="text" class="form-control" id="melo" name="txtdes">
                <br>
              <div class="modal-footer" >
                <button onclick="registrarCategoria()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="modal fade" id="registroU" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Unidad de Medida</h4>
            </div>
              <div class="modal-body">

                <label class="">*Nombre</label>
                <input type="text" class="form-control" id="nomu" name="txtnom">
                <br>
                <label class="">*Abreviatura</label>
                <input type="text" class="form-control" id="nomuu" name="txtabr">
                <br>
              <div class="modal-footer" >
                <button onclick="registrarUnidad()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
<script src="<?php echo URL; ?>js/vproducto.js"></script>


<script type="text/javascript">
   function registrarCategoria(){
          var d = $("#melo").val();
     $.ajax({
            url:uri+"categoria/insertar2",
            type:"POST",
            data:{txtdes:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);


           $.each(r, function(i, v){

            if (v.descripcionc.toLowerCase() == d.toLowerCase()) {

             $("#selectmelo").append('<option selected="selected" value="'+v.codCategoria+'">'+v.descripcionc+' </option>')

            }
           });
  $("#modalmelo").modal("toggle");
  $("#melo").val("");
        });

        }

        function registrarPresentacion(){
          var d = $("#pre").val();
     $.ajax({
            url:uri+"presentacion/insertar2",
            type:"POST",
            data:{txtdes:d},
            dataType: "json"
          }).done(function(r){
            console.log(r);


           $.each(r, function(i, v){

            if (v.descripcionp.toLowerCase() == d.toLowerCase()) {

             $("#txtpre").append('<option selected="selected" value="'+v.codPresentacion+'">'+v.descripcionp+' </option>')

            }
           });
  $("#registroP").modal("toggle");
  $("#pre").val("");
        });

        }

        function registrarUnidad(){
          var d = $("#nomu").val();
          var a = $("#nomuu").val();
     $.ajax({
            url:uri+"medida/insertar3",
            type:"POST",
            data:{txtnom:d, txtabr:a},
            dataType: "json"
          }).done(function(r){
            console.log(r);

           $.each(r, function(i, v){

            if (v.nombreu.toLowerCase() == d.toLowerCase()){

             $("#txtunii").append('<option selected="selected" value="'+v.codUnidad_medida+'">'+v.nombreu+' </option>')

            }
           });
  $("#registroU").modal("toggle");
  $("#nomu").val("");
  $("#nomuu").val("");
        });

        }



   $('#enviar').on('click',function(){
    var form = $(this).parents('form');
    if($('#selectmelo').val() == "null" || $('#txtunii').val() == "null" || $('#txtpre').val() == "null"){
      swal("", "Seleccione los campos faltantes", "error");
    }else{
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
         swal("Excelente!", "El registro ha sido guardado correctamente", "success");
      }

    });
      }
  });

</script>
