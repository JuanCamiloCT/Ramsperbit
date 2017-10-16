<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Clientes</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="<?= URL ?>cliente/insertar" method="POST" id="registrarCliente">
          <div class="box-body">
          <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                  <label>*Tipo de cliente:</label>
                  <select class="form-control select2" name="txtcl" id="tiprh" style="width: 100%;">
                      <option selected="selected">Seleccionar</option>
                      <option value="Persona">Persona</option>
                      <option value="Empresa">Empresa</option>
                  </select>
            </div>
            <div class="form-group">
              <label for="">*Nombre:</label>
              <input type="text" class="form-control" name="txtnom" placeholder="Introduzca el nombre del cliente">
            </div>

            <div class="form-group">
              <label id="la">Apellido:</label>
                <input type="text" class="form-control" id = "a" name="txtape" placeholder="Introduzca los apellidos del cliente">
              </div>

            <div class="form-group">
              <label id="ln">*NIT:</label>
                <input type="text" class="form-control" id = "n" name="txtnit" placeholder="Introduzca el NIT">
              </div>

            <div class="form-group">
              <label for="">*Teléfono:</label>
                <input type="text" class="form-control" name="txttel" placeholder="Introduzca el teléfono del cliente">
              </div>

            <div class="form-group">
              <label for="">Dirección:</label>
                <input type="text" class="form-control" name="txtdir" placeholder="Introduzca la dirección del cliente">
              </div>
          </div>

          <!-- /.box-body -->
          <div class="col-md-6 col-md-offset-4">
          <div class="box-header with-border">
             <button class="btn btn-info" type="button" name="enviar" id="enviar"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
             <!--<button class="btn btn-info" type="submit"  value="Ocultar" onclick="OcultarE()" ><span class="glyphicon glyphicon-ok"></span>Ocultar</button>-->
               <a href="<?php echo URL; ?>cliente" class="btn btn-warning" type="button"><span class="glyphicon glyphicon-remove"></span>Cancelar</a>
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

$('#tiprh').change(function() {


if($('#tiprh').val() == "Persona")
{
  document.getElementById('a').style.display = "block";
  document.getElementById('la').style.display = "block";

document.getElementById('n').style.display = "none";
document.getElementById('ln').style.display = "none";
}
else
if($("#tiprh").val()== "Empresa")
{
document.getElementById('a').style.display = "none";
document.getElementById('la').style.display = "none";

document.getElementById('n').style.display = "block";
document.getElementById('ln').style.display = "block";
}


});

/////////////////////////////////


   $('#enviar').on('click',function(){
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
  });
</script>

<script src="<?php echo URL; ?>js/vcliente.js"></script>
