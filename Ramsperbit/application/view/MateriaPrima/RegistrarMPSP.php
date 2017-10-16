<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Materia prima</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <form role="form" action="<?= URL ?>MateriaPrima/insertarSP" method="POST" id="registrarMP">
          <div class="box-body">
          <div class="col-md-6">

            <div class="form-group">
              <?php foreach ($UM as $ump):?>
              <label>*Código:</label>
              <input maxlength="11" type="text" readonly="" value="<?= $ump['ultima']; ?>"  class="form-control" name="txtcod" placeholder="0">
              </div>
                <?php endforeach; ?>
           <div class="form-group">
              <label>*Nombre:</label>
              <input type="text" required=”required” class="form-control" name="txtnom" placeholder="Introduzca el nombre">
          </div>
             <div class="form-group">
              <label>*Precio:</label>
              <input  type="number" class="form-control" name="txtp" placeholder="Introduzca el precio">
              </div>
               <div class="form-group">
              <label>*Stock minimo:</label>
              <input type="number" class="form-control" name="smin" placeholder="Introduzca el stock minimo">
              </div>

            </div>



            <div class="col-md-6">


              <label>*Unidad de medida:</label>
              <div class="form-group">
                <div class="col-md-11">
                  <select class="form-control select2" id="txtcat" name="txtuni" style="width: 100%;">
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



   <label>*Presentación:</label>
       <div class="form-group">
         <div class="col-md-11">
           <select class="form-control select2" id="txtpre"  name="txtpre" style="width: 100%;">
           <option value="ño">Seleccionar</option>
             <?php foreach ($present as $value):?>
             <option value="<?=$value['codPresentacion'] ?>"><?=$value['descripcionp']?></option>
             <?php endforeach; ?>
           </select>
         </div>
         <div class="col-md-1">
          <a href="#registroP"  data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
        </div>
     </div>

     <br><br>

                  <div class="form-group">
                    <label for="exampleInputEmail1">*Descripcion:</label>
                    <textarea class="form-control" name="txtd" rows="3"></textarea>
                  </div>
                  </div>

          <!-- /.box-body -->
          <div class="col-md-6 col-md-offset-5">
       <div class="box-header with-border">
  <button value="registrar" onclick="" class="btn btn-info" type="button" name="enviar" id="enviar" ><span class="glyphicon glyphicon-ok"></span>Registrar</button>
             <a href="<?php echo URL; ?>MateriaPrima/indexSP" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
           </div>
         </div>
           </div>
       </form>
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
               <input type="text" class="form-control"  name="txtnom" id="nomu">
               <br>
               <label class="">*Abreviatura</label>
               <input type="text" class="form-control"  name="txtabr" id="nomuu">
               <br>
             <div class="modal-footer" >
               <button  onclick="registrarUnidadm()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
               <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div>
     <div class="modal fade" id="registroP" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
       <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title" id="exampleModalLabel">Registrar Presentación</h4>
           </div>
             <div class="modal-body">
               <!--Formulario Baja-->
               <label class="">Descripción</label>
               <input type="text" class="form-control" id="prem" name="txtdes">
               <br>
             <div class="modal-footer" >
               <button  class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="button" onclick="registrarPresentacionm()" id="btn-con"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
               <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

</section>
</div>
<script>
$('#enviar').on('click',function(){
  var form = $(this).parents('form');
  if($('#txtcat').val() == "null" || $('#txtpre').val() == "ño"){
    swal("", "Seleccione los campos faltantes.", "error");
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
       swal("¡Excelente!", "El registro ha sido guardado correctamente.", "success");
    }

  });
}
});
</script>
<script type="text/javascript">

function registrarPresentacionm(){
  var d = $("#prem").val();
$.ajax({
    url:uri+"presentacion/insertar3",
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
$("#prem").val("");
});

}

function registrarUnidadm(){
  var d = $("#nomu").val();
  var a = $("#nomuu").val();
$.ajax({
    url:uri+"medida/insertar4",
    type:"POST",
    data:{txtnom:d, txtabr:a},
    dataType: "json"
  }).done(function(r){
    console.log(r);

   $.each(r, function(i, v){

    if (v.nombreu.toLowerCase() == d.toLowerCase()){

     $("#txtcat").append('<option selected="selected" value="'+v.codUnidad_medida+'">'+v.nombreu+' </option>')

    }
   });
$("#registroU").modal("toggle");
$("#nomu").val("");
$("#nomuu").val("");
});

}
</script>
