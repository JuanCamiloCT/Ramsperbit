$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#registrarProducto').validate({
       rules:{
         txtnom:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtstock:{
           stock: true,
           required: true,
           maxlength: 45,
           minlength:3
         },
         txtubi:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtexi:{
           can: true,
           required: true,
           maxlength: 4,
           minlength:1
         },
         txtcom:{
           required: true,
           maxlength: 100,
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
         txtstock:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 cifras",
           minlength:"Mínimo 100"
         },
         txtubi:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtexi:{
           required: "Este campo es requerido",
           maxlength: "Máximo 4 cifras",
           minlength:"Mínimo 2 carácteres"
         },
          txtcom:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
       },
     });
     jQuery.validator.addMethod("stock", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
     jQuery.validator.addMethod("can", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
    });


$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#modalP').validate({
       rules:{
         txtdes:{
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
         txtdes:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
       },
     });
    });

$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#modalC').validate({
       rules:{
         txtdes:{
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
         txtdes:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
       },
     });
    });

$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#modalM').validate({
       rules:{
         txtnom:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtabr:{
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
         txtabr:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
       },
     });
    });
