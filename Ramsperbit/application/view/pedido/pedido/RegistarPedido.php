<div class="content-wrapper">
  <section class="content">
    <div class="row">

   <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Pedido</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>pedido/insertar" method="POST">
        <div class="box-body">
          <div class="col-md-12">
             <div class="col-md-6">
               <div class="col-md-6">

                 <?php foreach ($UP as $upi):?>
          <label for="">*Código:</label>
          <input type="text" class="form-control" name="codp" value="<?= $upi['ultima']; ?>"   readonly="" id="cod" placeholder="0">
            <br>
                <?php endforeach; ?>


              <label for="">*Fecha:</label>
              <input type="date" class="form-control" readonly="" name="fecha" id="fecha" value="<?php echo date("Y-m-d"); ?>" placeholder="">

              <br>

            <label>*Cliente:</label>
              <select class="form-control select2" id="idc" name="idc" style="width: 100%;">
                <option value="null">Seleccionar</option>
                <?php foreach ($client as $value):?>
                  <option value="<?=$value['idCliente'] ?>"><?=$value['idCliente']?>  /  <?=$value['nombre']?></option>
                <?php endforeach; ?>
              </select>
              <br>

              </div>
                <div class="col-md-3">
                </div>

                  <div class="col-md-6">

                    <label>*Producto:</label>
                      <select class="form-control select2"   name="IDP" id="IDP" style="width: 100%;">
                        <option value="null">Seleccionar</option>
                        <?php foreach ($pro as $value):?>
                          <option value="<?=$value['codProducto'] ?>"><?=$value['nombre']?></option>
                        <?php endforeach; ?>
                      </select>
                  <br>
                  <label for="">*Cantidad:</label>
                  <input type="number" class="form-control"  min="0" name="cant" id="cant" placeholder="">

                  <br>
                  <button onclick="AgregarP()" type="button"class="btn btn-info" ><span class="glyphicon glyphicon-plus-sign"></span>Agregar</button>
                       </div>
                  </div>
                  <div class="col-md-6">

                  <div class="panel panel-info">
                  <div class="panel-heading">
                  <h3 class="panel-title">  <h3 class="panel-title"><span class="glyphicon glyphicon-shopping-cart" ></span>  Detalle de pedido:</h3></h3>

                    </div>
                    <div class="panel-body" id="detalleP">


                    </div>
                  </div>
                   </div>




                  </div>
                  </div>
                  <!-- /.box-body -->
<center>
            <div class="box-header with-border">
              <button value="registrar" class="btn btn-info" type="button" name="enviar" id="enviar" ><span class="glyphicon glyphicon-ok"></span>Registrar</button>
              <a href="<?php echo URL; ?>pedido/index" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
            </div>
          </center>

          </form>
        </div>
      </div>
      </div>
        </section>
        </div>
<script>



      function quitarPedido(elemento) {
        var e = $(elemento).parent().parent();
        $(e).remove();
      }
         function AgregarP(){
           if($('#IDP').val() == "null"){
             swal("", "Seleccione un producto", "error");
           }else{
          var cPedido = $("#cod").val();
          var cProducto = $("#IDP").val();
          var cProductoText = $("#IDP [value='"+cProducto+"']").text();
          var Cantidad = $("#cant").val();


        var html =   '<div class="row"><div class="col-md-9 cta-contents">';
        html +=  '<h3 class="cta-title">Producto: '+cProductoText+'</h3>';
        html +=  '<div class="cta-desc">';
        html +=  '<p>Código de producto: '+cProducto+'</p>';
        html +=  '<p>Código Pedido: '+cPedido+'</p>';
        html +=  '<p>Cantidad: '+Cantidad+'</p>';
        html +=  '</div>';
        html += '<input type="hidden" name="codPedido[]" value="'+cPedido+'">';
        html += '<input type="hidden" name="codProducto[]" value="'+cProducto+'">';
        html += '<input type="hidden" name="pcantidad[]" value="'+Cantidad+'">';
        html +=  '</div>';
        html +=  '<div class="col-md-3 cta-button">';
        html +=   '<a href="#" onclick="quitarPedido(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
        html +=    '</div>';
        html +=    '</div>';



           $("#detalleP").append(html);

        }
      }
        $('#enviar').on('click',function(){
          if($('#idc').val() == "null"){
            swal("", "Seleccione un cliente", "error");
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

      </script>
