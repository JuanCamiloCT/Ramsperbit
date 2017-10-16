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