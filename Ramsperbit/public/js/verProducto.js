function verP(documento){
    $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"producto/ver/"+documento
    }).done(function(respuesta){

        $("#tblUs").empty()

         if (respuesta != null ) {



            if (respuesta.estado == 1) {

                estado = "Activo";
            }else{

                estado = "Inactivo";
            }

             $("#tblUs").append("<tr><td>"+respuesta.nombre+
                "</td><td>"+respuesta.descripcion+"</td><td>"+respuesta.cantidad_actual+
                "</td><td>" + respuesta.Stock_minimo +"</td><td> "+respuesta.ubicacion+"</td><td> "+
                respuesta.descripcionc+"</td><td> "+respuesta.nombreu+"</td><td>"+
                respuesta.descripcionp+"</td><td>"+estado+
                "</td></tr>");

         }


    });
    $("#verP").modal();
};
