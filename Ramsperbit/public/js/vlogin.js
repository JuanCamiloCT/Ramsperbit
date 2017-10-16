$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#LoginGo').validate({
       rules:{
         txtnombre:{
           required: true,
           maxlength: 100,
           minlength:3
         },
         txtclave:{
           required: true,
           maxlength: 100,
           minlength:3
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
         txtnombre:{
           required: "Ingrese un nombre de Usuario",
           maxlength: "Máximo 100 carácteres",
           minlength:"Mínimo 3 carácteres"
         },
         txtclave:{
           required: "Ingrese una Contraseña",
           maxlength: "Máximo 100 carácteres",
           minlength:"Mínimo 3 carácteres"
         },
       },
     });
    });
