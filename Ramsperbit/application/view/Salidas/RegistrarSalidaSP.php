<div class="content-wrapper">
  <section class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Salida</h1>
            <h6>Los campos con (*) son obligatorios</h6>
        </div>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>Salidas/insertarSP" method="POST">
          <div class="box-body">
            <div class="col-md-12">
               <div class="col-md-6">
                 <div class="col-md-6">
                   <?php foreach ($US as $ul):?>
              <label for="">*Codigo:</label>
              <input type="text" class="form-control" name="txtcod" value="<?= $ul['ultima']; ?>"  readonly="" id="txtcod" placeholder="0">
            <br>
                  <?php endforeach; ?>


              <label for="exampleInputEmail1">*Fecha:</label>
              <input type="text" class="form-control"  readonly="" name="fecha" id="fecha" value="<?php echo date("Y-m-d"); ?>">
            <br>

            <label>*ID Empleado:</label>
              <select class="form-control select2" id="ID" name="ID" style="width: 100%;">
                <option value="null">Seleccionar</option>
                <?php foreach ($em as $value):?>
                  <option value="<?=$value['idEmpleado'] ?>"><?=$value['idEmpleado']?>  /  <?=$value['nombres']?></option>
                <?php endforeach; ?>
              </select>


          <!--<div class="form-group">
            <label for="exampleInputEmail1">*ID Empleado:</label>
              <input type="text" class="form-control" name="ID" placeholder="Introduzca la ID-Empleado">
          </div>-->
        </div>
        <div class="col-md-3">



      </div>

        <div class="col-md-6">

          <label>*Materia prima:</label>
            <select class="form-control select2" name="IDMP" onchange="ponerCant(this)"  id="IDMP" style="width: 100%;">
              <option value="null">Seleccionar</option>
              <?php foreach ($MP as $value):?>

                <option cantidad="<?=$value['cantidad']?>" stock="<?=$value['stock_min']?>" value="<?=$value['codMateria_prima'] ?>"><?=$value['nombre']?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Acerca de las cantidades:</h3>
            </div>
            <div class="panel-body">
              <br>
              <label>Cantidad Actual:</label>
              <label id="ccantidad">0</label>
              <br>
              <label>Stock mínimo:</label>
              <label id="sstock">0</label>

              <br>
            </div>
        </div>

              <label for="exampleInputEmail1">*Cantidad:</label>
              <input type="number" class="form-control" name="ncant"  id="ncant" min="0"  placeholder="Introduzca la cantidad">
              <br>
            <button onclick="agregarSalida()" type="button"class="btn btn-info" ><span class="glyphicon glyphicon-plus-sign"></span>Agregar</button>
          </div>
              </div>
              <div class="col-md-6">

              <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-log-out" ></span>  Detalle de salida:</h3>
                     </div>
                     <div class="panel-body" id="detalleS">


                     </div>
                   </div>
                    </div>




                </div>
                </div>
                <center>
                          <div class="box-header with-border">
                <button value="registrar" class="btn btn-info" name="enviar" id="enviar" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
               <a href="<?php echo URL; ?>Salidas/indexSP"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
             </div>
           </div>
         </center>
             </div>
             </div>
           </form>
         </div>
       </div>
       </div>
         </section>

       </div>

       <script>
       function quitarSalida(elemento) {
         var e = $(elemento).parent().parent();
         $(e).remove();
       }
          function agregarSalida(){
            if($('#IDMP').val() == "null" ){
              swal("", "Seleccione una materia prima", "error");

         }else if ($('#ncant').val() == "")  {
           swal("", "Ingrese una cantidad,tenga en cuenta las cantidades disponibles.", "error");
         }else{
           var cSalida = $("#txtcod").val();
           var cMateria_prima = $("#IDMP").val();
           var cMateria_primaText = $("#IDMP [value='"+cMateria_prima+"']").text();
           var Cantidad = $("#ncant").val();


         var html =   '<div class="row"><div class="col-md-9 cta-contents">';
         html +=  '<h3 class="cta-title">Materia prima: '+cMateria_primaText+'</h3>';
         html +=  '<div class="cta-desc">';
         html +=  '<p>Codigo de materia prima: '+cMateria_prima+'</p>';
         html +=  '<p>Codigo Salida: '+cSalida+'</p>';
         html +=  '<p>Cantidad: '+Cantidad+'</p>';
         html +=  '</div>';
         html += '<input type="hidden" name="codSalida[]" value="'+cSalida+'">';
         html += '<input type="hidden" name="codMateria_prima[]" value="'+cMateria_prima+'">';
         html += '<input type="hidden" name="sCantidad[]" value="'+Cantidad+'">';
         html +=  '</div>';
         html +=  '<div class="col-md-3 cta-button">';
         html +=   '<a href="#" onclick="quitarSalida(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
         html +=    '</div>';
         html +=    '</div>';



            $("#detalleS").append(html);

         }
         }
         $('#enviar').on('click',function(){
           if($('#ID').val() == "null" ){
             swal("", "Seleccione un empleado", "error");
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
                swal("Excelente!", "El registro ha sido guardado correctamente", "success");
             }

           });
         }
         });


         function validarstock () {

           var iden = $("#IDMP").val();
           $.ajax({
             dataType:'json',
               type:'post',
               url:uri+"Salidas/consultarStock/"+IDMP
           }).done(function(response) {
             console.log(response);
             if (response.codMateria_prima == IDMP) {
               document.getElementById("IDMP").focus();
             swal("Ups!!", "El empleado ya existe", "error");

          $("#IDMP").val("");

             }

           });

         }

function ponerCant(elemento){

var valor = $("#IDMP").val();
var cantidad = $("#IDMP [value='"+valor+"']").attr("cantidad");
var stock = $("#IDMP [value='"+valor+"']").attr("stock");

$("#ccantidad").text(cantidad);

$("#sstock").text(stock);



}

       </script>
