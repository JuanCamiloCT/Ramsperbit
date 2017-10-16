$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarEmpleado').validate({
       rules:{
         txtnom:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtape:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtnit:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txttel:{
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
         txtnom:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtape:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtnit:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txttel:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
       },
     });
    });
