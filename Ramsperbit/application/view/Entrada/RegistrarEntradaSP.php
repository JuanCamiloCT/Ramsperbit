<div class="content-wrapper">

  <section class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Entrada</h1>
            <h6>Los campos con (*) son obligatorios</h6>
        </div>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>Entrada/insertarSP" method="POST" id="registrarentrada">
        <div class="box-body">
              <div class="col-md-12">
                 <div class="col-md-6">
                   <div class="col-md-6">
                     <?php foreach ($UE as $ul):?>
              <label for="">*Codigo:</label>
              <input type="text" class="form-control" name="txtcod" value="<?= $ul['ultima']; ?>"   readonly="" id="txtcod" placeholder="0">
          <br>
                    <?php endforeach; ?>


              <label for="">*Fecha:</label>
              <input type="text" class="form-control"  readonly="" name="fecha" id="fecha" value="<?php echo date("Y-m-d"); ?>">

          <br>


          <label>*ID Empleado:</label>
            <select class="form-control select2" id="ID" name="ID" style="width: 100%;">
              <option value="null">Seleccionar</option>
              <?php foreach ($em as $value):?>
                <option value="<?=$value['idEmpleado'] ?>"><?=$value['idEmpleado']?>  /  <?=$value['nombres']?></option>
              <?php endforeach; ?>
            </select>
            <br>
             <!--<button value="registrar" class="btn btn-info" type="submit"><span class="glyphicon glyphicon-plus-sign"></span>Agregar</button>-->
            </div>
            <div class="col-md-3">



          </div>

            <div class="col-md-6">

              <label>*Codigo de Materia prima:</label>
                <select class="form-control select2"    id="IDMP" style="width: 100%;">
                <option value="null">Seleccionar</option>
                  <?php foreach ($MP as $value):?>
                    <option value="<?=$value['codMateria_prima'] ?>"><?=$value['nombre']?></option>
                  <?php endforeach; ?>
                </select>
            <br>
            <label for="exampleInputEmail1">*Cantidad:</label>
            <input type="number" class="form-control"  min="0"id="ncant" placeholder="Introduzca la cantidad">
            <br>
            <label for="">*Fecha de vencimiento:</label>
            <input type="date" class="form-control"  id="fv" placeholder="" min="<?php echo date("Y-m-d"); ?>">
            <br>
             <button onclick="agregarEntrada()" type="button"class="btn btn-info" ><span class="glyphicon glyphicon-plus-sign"></span>Agregar</button>
                  </div>
        </div>
        <div class="col-md-6">

      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">  <h3 class="panel-title"><span class="glyphicon glyphicon-log-in" ></span>  Detalle de entrada:</h3></h3>
               </div>
               <div class="panel-body" id="detalleE">


               </div>
             </div>
              </div>




          </div>
          </div>
          <!-- /.box-body -->
<center>
          <div class="box-header with-border">

                <button name="enviar" id="enviar" class="btn btn-info" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
               <a href="<?php echo URL; ?>Entrada/indexSP"class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
          </div>
        </center>

        </form>
      </div>
    </div>
    </div>
      </section>

    </div>
<script>
function quitarEntrada(elemento) {
  var e = $(elemento).parent().parent();
  $(e).remove();
}
   function agregarEntrada(){

                      if($('#IDMP').val() == "null" ){
                        swal("", "Seleccione una materia prima.", "error");

                   }else if ($('#ncant').val() == ""){
                     swal("", "Ingrese una cantidad.", "error");
                   }else if ($('#fv').val() == ""){
                     swal("", "Ingrese la fecha de vencimiento.", "error");
                   }else{
    var cEntrada = $("#txtcod").val();
    var cMateria_prima = $("#IDMP").val();
    var cMateria_primaText = $("#IDMP [value='"+cMateria_prima+"']").text();
    var Cantidad = $("#ncant").val();
    var Fecha = $("#fv").val();


  var html =   '<div class="row"><div class="col-md-9 cta-contents">';
  html +=  '<h3 class="cta-title">Materia prima: '+cMateria_primaText+'</h3>';
  html +=  '<div class="cta-desc">';
  html +=  '<p>Codigo de materia prima: '+cMateria_prima+'</p>';
  html +=  '<p>Codigo Entrada: '+cEntrada+'</p>';
  html +=  '<p>Cantidad: '+Cantidad+'</p>';
  html +=  '<p>Fecha: '+Fecha+'</p>';
  html +=  '</div>';
  html += '<input type="hidden" name="codEntrada[]" value="'+cEntrada+'">';
  html += '<input type="hidden" name="codMateria_prima[]" value="'+cMateria_prima+'">';
  html += '<input type="hidden" name="eCantidad[]" value="'+Cantidad+'">';
  html += '<input type="hidden" name="eFecha[]" value="'+Fecha+'">';
  html +=  '</div>';
  html +=  '<div class="col-md-3 cta-button">';
  html +=   '<a href="#" onclick="quitarEntrada(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
  html +=    '</div>';
  html +=    '</div>';



     $("#detalleE").append(html);

  }
  }
  $('#enviar').on('click',function(){
    if($('#ID').val() == "null"){
      swal("", "Seleccione un empleado.", "error");
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
         swal("¡Excelente!", "El registro ha sido guardado correctamente", "success");
      }

    });
  }
  });

</script>

<!--<script src="?php echo URL; ?>js/ventrada.js"></script>-->
