function guardar(){

  var formData = new FormData ($("#formRegistrarCuenta")[0]);

  $.ajax({
    url:uri + "login/registrarCuenta",
    type: "POST",
    dataType: "json",
    data: formData,
    processData: false,
    contentType: false
  }).done(function(resultado){
    alert(resultado);
    login.indexx();

  }).fail(function(error){
      console.log(error);

  });
}
