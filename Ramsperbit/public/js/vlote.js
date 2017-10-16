$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarLote').validate({
       rules:{
         txtdes:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtcan:{
           dad: true,
           required: true,
           maxlength: 4,
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
         txtdes:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtcan:{
           required: "Este campo es requerido",
           maxlength: "Máximo de cantidad es 3000",
           minlength:"Mínimo de cantidad es 10"
         },
       },
     });
     jQuery.validator.addMethod("dad", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
    });
