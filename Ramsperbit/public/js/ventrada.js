$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarentrada').validate({
       rules:{
         txtcod:{
           required: true,
           maxlength: 45,
           minlength:2
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
         txtcod:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },

       },
     });

    });
