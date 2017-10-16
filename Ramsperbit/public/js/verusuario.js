function ver(documento){
    $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"gusuario/ver/"+documento
    }).done(function(respuesta){

        $("#TblUs").empty()

        console.log(respuesta);

         if (respuesta != null ) {

            if (respuesta.estado == 1) {

                estado = "Activo";
            }else{

                estado = "Inactivo";
            }

             $("#TblUs").append("<tr><td>"+'Identificación: '+respuesta.identificacion+
                "<tr><td>"+'Tipo Documento: '+respuesta.descripcion+
                "<tr><td>"+'Nombres: '+respuesta.nombres+
                "<tr><td>"+'Apellidos: '+respuesta.apellidos+
                "<tr><td>"+'RH: '+respuesta.rh +
                "<tr><td>"+'Celular: '+respuesta.celular+
                "<tr><td>"+'Fecha de Nacimiento: '+respuesta.fecha_nacimiento+
                "<tr><td>"+'Correo Electrónico: '+respuesta.correo_electronico+
                "<tr><td>"+'Fecha de ingreso laboral: '+respuesta.fecha_ingreso+
                "<tr><td>"+'Número de Hijos: '+respuesta.numero_hijos+
                "<tr><td>"+'Teléfono Fijo: '+respuesta.telefono_fijo+
                "<tr><td>"+'Dirección: '+respuesta.direccion+
                "<tr><td>"+'Barrio: '+respuesta.barrio+
                "<tr><td>"+'Municipio: '+respuesta.municipio+
                "<tr><td>"+'Cargo en la Empresa: '+respuesta.cargo+
                "<tr><td>"+'Profesión: '+respuesta.dp+
                "<tr><td>"+'Nivel de Estudio: '+respuesta.dni+
                "<tr><td>"+'Cesantias: '+respuesta.cesantias+
                "<tr><td>"+'Pensión: '+respuesta.nombrepe+
                "<tr><td>"+'Caja de Compensación: '+respuesta.descca+
                "<tr><td>"+'Tipo de Contrato: '+respuesta.Tipo_contrato+
                "<tr><td>"+'Procesos: '+respuesta.procesos+
                "<tr><td>"+'EPS: '+respuesta.nombreep+
                "<tr><td>"+'Fecha de ingreso a la EPS: '+respuesta.fecha_ingreso_eps+
                "<tr><td>"+'Género: '+respuesta.nombrege+
                "<tr><td>"+'Cuenta asociada: '+respuesta.nombre_usuario+
                "<tr><td>"+estado+
                "</tr></td>");

         }


    });
    $("#ver").modal();
};
