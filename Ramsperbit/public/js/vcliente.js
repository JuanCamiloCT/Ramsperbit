$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarCliente').validate({
       rules:{
         txtnom:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtape:{
           required: false,
           maxlength: 45,
           minlength:2
         },
         txttel:{
           lla: true,
           required: true,
           maxlength: 7,
           minlength:7
         },
         txtnit:{
           nit: true,
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
           maxlength: "Máximo 7 carácteres",
           minlength:"Mínimo 7 carácteres"
         },
       },
     });
     jQuery.validator.addMethod("nit", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
     jQuery.validator.addMethod("lla", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
    });
