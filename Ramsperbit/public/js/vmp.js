$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarMP').validate({
       rules:{


         txtnom:{
           required: true,
           maxlength: 45,

         },
         txtp:{
           Precio:true,
           required: true,

         },
         smin:{

           required: true,
           maxlength: 45,

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

         },
         txtp:{
           required: "Este campo es requerido",
           maxlength: "Máximo 11 carácteres",

         },

         smin:{
           required: "Este campo es requerido",
           maxlength: "Máximo 11 carácteres",

         },

       },
     });
     jQuery.validator.addMethod("Precio", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');



    });
