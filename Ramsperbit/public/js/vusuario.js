$(document).ready(function(){
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

     $('#modalGe').validate({
       rules:{
         txtnomg:{
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
         txtnomg:{
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

     $('#modalTi').validate({
       rules:{
         txtdestip:{
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
         txtdestip:{
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

     $('#modalPe').validate({
       rules:{
         txtnompen:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtabre:{
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
         txtnompen:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtabre:{
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

     $('#modalEps').validate({
       rules:{
         txtnome:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtabrep:{
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
         txtnome:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtabrep:{
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

     $('#modalEs').validate({
       rules:{
         txtdesnv:{
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
         txtdesnv:{
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

     $('#modalPro').validate({
       rules:{
         txtDESPRO:{
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
         txtDESPRO:{
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

     $('#modalCa').validate({
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

     $('#registrarEmpleado').validate({
       rules:{
         txtnom:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txttel:{
           required: true,
           maxlength: 7,
           minlength:7
         },
         txtbar:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtcar:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtiden:{
           required: true,
           iden: true,
           maxlength: 11,
           minlength:3
         },
         txtape:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtcel:{
           required: false,
           cel: true,
           maxlength: 11,
           minlength:9
         },
         numhijo:{
           required: true,
           maxlength:3,
           minlength:1
         },
         txtdir:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtmun:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtces:{
           required: true,
           maxlength: 45,
           minlength:2
         },
         txtpro:{
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
         txttel:{
           required: "Este campo es requerido",
           maxlength: "Máximo 7 carácteres",
           minlength:"Mínimo 7 carácteres"
         },
         txtbar:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtcar:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtiden:{
           required: "Este campo es requerido",
           maxlength: "Máximo 11 digitos",
           minlength:"Mínimo 3 digitos"
         },
         txtape:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtcel:{
           maxlength: "Máximo 11 digitos",
           minlength:"Mínimo 9 digitos"
         },
         numhijo:{
           required: "Este campo es requerido",
           maxlength: "Máximo 3 digitos",
           minlength:"Mínimo 1 digito"
         },
         txtdir:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtmun:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtces:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
         txtpro:{
           required: "Este campo es requerido",
           maxlength: "Máximo 45 carácteres",
           minlength:"Mínimo 2 carácteres"
         },
       },
     });
     jQuery.validator.addMethod("iden", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
     jQuery.validator.addMethod("cel", function (value, element) {
       return this.optional(element) || /^[0-9]+$/.test(value);
     }, 'Solo se admiten números');
    });
