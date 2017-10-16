function verDetalleEntrada(codEntradas){
   $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"Entrada/verDetalleEntrada/"+codEntradas
    }).done(function(respuesta){
            console.log(respuesta);
           $.each(respuesta,function(i,e){
            $("#codEntradas").val(e.codEntradas);
             var html  = '<tr>';

          html +=   '<td class="text-center"><p>'+e.codigo_MP+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.Nombre_MP+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.cantidad+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.fecha_vencimiento+'</p></td>';
          html += '</tr>';
          html += '</tbody>';
          html +=  '</table>';
   $("#detalleVerEntrada").append(html);
});
            $("#ver").modal();
});
    $("#detalleVerEntrada").empty();
}


function verDetalleSalida(codSalidas){
   $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"Salidas/verDetalleSalida/"+codSalidas
    }).done(function(respuesta){
            console.log(respuesta);
           $.each(respuesta,function(i,e){
            $("#codSalidas").val(e.codSalidas);
             var html  = '<tr>';

          html +=   '<td class="text-center"><p>'+e.codigo_MP+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.Nombre_MP+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.cantidad+'</p></td>';
          html += '</tr>';
          html += '</tbody>';
          html +=  '</table>';
   $("#detalleVerSalida").append(html);
});
            $("#vers").modal();
});
    $("#detalleVerSalida").empty();
}

function verDetallePedido(codPedido){
   $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"pedido/verDetallePedido/"+codPedido
    }).done(function(respuesta){
            console.log(respuesta);
           $.each(respuesta,function(i,e){
            $("#codPedido").val(e.codPedido);
             var html  = '<tr>';

          html +=   '<td class="text-center"><p>'+e.Cantidad+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.Cod_producto+'</p></td>';
          html +=   '<td class="text-center"><p>'+e.producto+'</p></td>';
          html += '</tr>';
          html += '</tbody>';
          html +=  '</table>';
   $("#detalleVerPedido").append(html);
});
            $("#verp").modal();
});
    $("#detalleVerPedido").empty();
}
function Vermas(codFicha){
   $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"Ficha/Vermas/"+codFicha
    }).done(function(respuesta){
            console.log(respuesta);
           $.each(respuesta,function(i,e){
            $("#codFicha").val(e.codFicha);


             var html  = '<tr>';
             html +=   '<td><p><b>Código ficha técnica:</b></p></td>';
             html +=   '<td class="text-justify"><p>'+e.codFicha+'</p></td>';
             html += '</tr>';
             html += '<tr>';
             html +=   '<td><p><b>Nombre del producto:</b></p></td>';
             html +=   '<td class="text-justify"><p>'+e.nombre+'</p></td>';
             html += '</tr>';
             html += '<tr>';
             html +=   '<td><p><b>Descripción:</b></p></td>';
             html +=   '<td class="text-justify"><p>'+e.descripcion+'</p></td>';
             html += '</tr>';
             html += '<tr>';
             html +=   '<td><p><b>Información del contacto:</b></p></td>';
             html +=   '<td class="text-justify"><p>'+e.info_Contacto+'</p></td>';
             html += '</tr>';
             html += '<tr>';
             html +=   '<td><p><b>Recomendaciones:</b></p></td>';
             html +=   '<td class="text-justify"><p>'+e.recomendacion+'</p></td>';
             html += '</tr>';
             html += '<tr>';
          html +=   '<td><p><b>Procedimientos:</b></p></td>';
          html +=   '<td class="text-justify"><p>'+e.procedimientos+'</p></td>';
          html += '</tr>';
          html += '<tr>';
          html +=   '<td><p><b>Usos:</b></p></td>';
          html +=   '<td class="text-justify"><p>'+e.usos+'</p></td>';
          html += '</tr>';


          html += '</tbody>';
          html +=  '</table>';
   $("#detalleVerficha").append(html);
});
            $("#verft").modal();
});
    $("#detalleVerficha").empty();
}
