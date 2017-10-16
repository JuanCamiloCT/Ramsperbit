$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#formRegistrarCuenta').validate({
       rules:{
         txtname:{
           required: true,
           maxlength: 45,
           minlength:3
         },
         txtmail:{
           required: true,
           maxlength: 100,
           minlength:5
         },
         txtpass:{
           required: true,
           maxlength: 100,
           minlength:3
         },
         txtpass2:{
           required: true,
           maxlength: 100,
           minlength:3,
           equalTo: "#pass_reg"
         },
         txtrol:{
           required: true
         },
         exampleInputFile:{
           required: true,
          extension: "jpg|png"
         },

       },
       submitHandler: function (form) {
         form.submit();
       },

       highlight: function (element) {
         $(element).parent().removeClass('has-success').addClass('has-error');
       },

       success: function (element) {
         $(element).parent().removeClass('has-error').addClass('has-success');
       },
       messages:{
         txtname:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 3 carácteres"
         },
         txtmail:{
           required: "Este campo es requerido",
           maxlength: "Máximo 100 carácteres",
           minlength:"Mínimo 5 carácteres"
         },
         txtpass:{
           required: "Ingrese una contraseña",
           maxlength: "Máximo 100 carácteres",
           minlength:"Mínimo 3 carácteres"
         },
         txtpass2:{
           required: "Este campo es requerido",
           maxlength: "Máximo 100 carácteres",
           minlength:"Mínimo 3 carácteres",
           equalTo:"Por favor repita la contraseña anterior"
         },
         txtrol:{
           required: "Por favor seleccione un 'Rol'"
         },
         exampleInputFile:{
           required: "Por favor selecciona una imagen de perfil"

         },
       },
     });
    });
