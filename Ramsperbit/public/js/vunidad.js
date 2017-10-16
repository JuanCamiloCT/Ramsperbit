$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarunidad').validate({
       rules:{
         txtnom:{
           required: true,
           maxlength: 45,
           minlength:5
         },
         txtabr:{
           required: true,
           maxlength: 5,
           minlength:1
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
         txtnom:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 5 carácteres"
         },
         txtabr:{
           required: "Este campo es requerido",
           maxlength: "Máximo 5 carácteres",
           minlength:"Mínimo 1 carácteres"
         },
       },
     });

    });
