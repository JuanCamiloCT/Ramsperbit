<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificar de ficha técnica</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <form role="form" action="<?= URL ?>Ficha/modificar" method="POST">
          <div class="box-body">
          <div class="col-md-6">
            <?php foreach ($ficha as $valor):   ?>
            <div class="form-group">
              <label>*Codigo de ficha técnica:</label>
              <input maxlength="11" type="text" onlyread="" readonly="" value="<?= $valor['codFicha']; ?>" class="form-control" name="cod" placeholder="">
              </div>
           <div class="form-group">
              <label>*Nombre:</label>
              <input type="text" required=”required” class="form-control" name="nom" value="<?= $valor['nombre']; ?>"  placeholder="Introduzca el nombre">
          </div>
             <div class="form-group">
              <label>*Descripción:</label>
              <textarea input type="text" name="des" class="form-control" rows="3"><?= $valor['descripcion']; ?> </textarea>
              </div>
              <div class="form-group">
                 <label>*Lugar de elaboración:</label>
                 <input type="text" required=”required” class="form-control" name="le" value="<?= $valor['lugar_elaboracion']; ?>"  placeholder="">
                 </div>
                 <div class="form-group">
                    <label>*Información del contacto:</label>
                    <input type="text" required=”required” class="form-control" name="info"value="<?= $valor['info_Contacto']; ?>"  placeholder="">
                </div>


            </div>



            <div class="col-md-6">
              <div class="panel panel-info">
                <div class="panel-heading">
                <h3 class="panel-title"> <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>  Composiciones:</h3></h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                     <label>*Nombre científico:</label>
                     <input type="text" required=”required” class="form-control" name="nomc" value="<?= $valor['nombre_cientifico']; ?>"  placeholder="Introduzca el nombre farmaceutico">
                 </div>
                 <label>*Forma farmaceutica:</label>
                 <div class="form-group">
                     <select class="form-control select2"  name="formf" style="width: 100%;">
                     <option><?= $valor['forma_farmaceutica_cod_forma']; ?></option>
                     <option>Aerosol</option>
                     <option>Capsula para infusión</option>
                     <option>Cápsula</option>
                     <option>Crema</option>
                     <option>Emulsion</option>
                     <option>Gel</option>
                     <option>Jarabe</option>
                     <option>Loción</option>
                     <option>Pasta</option>
                     <option>Polvo</option>
                     <option>Pomada</option>
                     <option>Solución inhalatoria</option>
                     <option>Tabletas</option>
                     <option>Tabletas efervescentes</option>
                     <option>Tabletas masticables</option>
                     <option>Ungüento</option>
                     </select>

               </div>

                 <label>*Unidad de medida:</label>
                 <div class="form-group">
                   <div class="col-md-10">
                     <select class="form-control select2" id="txtcat" name="uni" style="width: 100%;">
                     <option value="<?=$valor['Unidad_medida_codUnidad_medida'] ?>"><?=$valor['unidad'] ?></option>
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
                     <div class="col-md-10">
                       <select class="form-control select2" id="pre" name="pre" style="width: 100%;">
                       <option value="<?=$valor['Presentacion_codPresentacion'] ?>"><?=$valor['presentacion']?></option>
                         <?php foreach ($present as $value):?>
                         <option value="<?=$value['codPresentacion'] ?>"><?=$value['descripcionp']?></option>
                         <?php endforeach; ?>
                       </select>
                     </div>
                     <div class="col-md-1">
                      <a href="#registroP"  data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
                    </div>
                 </div>



                    </div>
              </div>



                  <div class="form-group">
                    <label for="exampleInputEmail1">*Recomendaciones:</label>
                    <textarea class="form-control" name="reco" rows="3"><?= $valor['recomendacion']; ?> </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">*Procedimientos:</label>
                    <textarea class="form-control" name="pro" rows="3"><?= $valor['procedimientos']; ?> </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">*Usos:</label>
                    <textarea class="form-control" name="uso" rows="3"><?= $valor['usos']; ?> </textarea>
                  </div>
                  </div>

                ?>
          <!-- /.box-body -->
          <div class="col-md-6 col-md-offset-5">
       <div class="box-header with-border">
            <button value="registrar" onclick="" class="btn btn-info" type="button" id="modificar" name="modificar" ><span class="glyphicon glyphicon-ok"></span>Modificar</button>
             <a href="<?php echo URL; ?>Ficha/index" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button></a>
           </div>
             <?php endforeach ?>
         </div>
           </div>
       </form>
   </div>
 </div>
  <form  action="<?= URL ?>medida/insertar2" method="POST" id="modalM">
    <div class="modal fade" id="registroU" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Registrar Unidad de Medida</h4>
          </div>
            <div class="modal-body">

              <label class="">*Nombre</label>
              <input type="text" class="form-control"  name="txtnom">
              <br>
              <label class="">*Abreviatura</label>
              <input type="text" class="form-control"  name="txtabr">
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

  <form  action="<?= URL ?>MateriaPrima/insertarP" method="POST" id="modalP">
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
              <input type="text" class="form-control" id="txtdes" name="txtdes">
              <br>
            <div class="modal-footer" >
              <button  class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit" id="btn-con"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

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
