function modificarEstadoCliente(cod, est){
    $.ajax({
        dataType: 'json',
        type: 'post',
        url:uri+"cliente/modificarEstado",
        data:{id:cod, Estado:est}
    }).done(function(respuesta){
        if(respuesta.v == "1"){
          swal({
      title: "Se ha cambiado el estado exitosamente",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#00acd6",
      confirmButtonText: "OK",
      closeOnConfirm: false,
    },
    function(isConfirm){
          location.href = uri+"cliente/index";
        });

        } else{

        }
    }).fail(function(){

    })
}

function modificarEstadoUsuario(cod, est){
    $.ajax({
        dataType: 'json',
        type: 'post',
        url:uri+"gusuario/modificarEst",
        data:{ide:cod, Estadoe:est}
    }).done(function(respuesta){
        if(respuesta.v == "1"){
          swal({
      title: "Se ha cambiado el estado exitosamente",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#00acd6",
      confirmButtonText: "OK",
      closeOnConfirm: false,
    },
    function(isConfirm){
            location.href = uri+"gusuario/index";
          });

        } else{

        }
    }).fail(function(){

    })
}

function modificarEstadoOrden(cod, est){
    $.ajax({
        dataType: 'json',
        type: 'post',
        url:uri+"orden/modificarEstadoO",
        data:{ido:cod, Estadoo:est}
    }).done(function(respuesta){
        if(respuesta.v == "1"){
          swal({
      title: "Se ha cambiado el estado exitosamente",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#00acd6",
      confirmButtonText: "OK",
      closeOnConfirm: false,
    },
    function(isConfirm){
            location.href = uri+"orden/index";
          });

        } else{

        }
    }).fail(function(){

    })
}

function modificarEstadoProducto(cod, est){
    $.ajax({
        dataType: 'json',
        type: 'post',
        url:uri+"producto/modificarEstadoP",
        data:{idp:cod, Estadop:est}
    }).done(function(respuesta){
        if(respuesta.v == "1"){
          swal({
      title: "Se ha cambiado el estado exitosamente",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#00acd6",
      confirmButtonText: "OK",
      closeOnConfirm: false,
    },
    function(isConfirm){
            location.href = uri+"producto/index";
          });

        } else{

        }
    }).fail(function(){

    })
}

function modificarEstadoCu(cod, est){
    $.ajax({
        dataType: 'json',
        type: 'post',
        url:uri+"login/modificarEstadoc",
        data:{idcu:cod, Estadocu:est}
    }).done(function(respuesta){
        if(respuesta.v == "1"){
          swal({
      title: "Se ha cambiado el estado exitosamente",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#00acd6",
      confirmButtonText: "OK",
      closeOnConfirm: false,
    },
    function(isConfirm){
            location.href = uri+"login/indexx";
          });

        } else{

        }
    }).fail(function(){

    })
}


function modificarEstadoLo(cod, est){

    $.ajax({
        dataType: 'json',
        type: 'post',
        url:uri+"lote/modificarEstadoLote",
        data:{idl:cod, Estadol:est}
    }).done(function(respuesta){
        if(respuesta.v == "1"){
          swal({
      title: "Se ha cambiado el estado exitosamente",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#00acd6",
      confirmButtonText: "OK",
      closeOnConfirm: false,
    },
    function(isConfirm){
            location.href = uri+"lote/index";
          });

        } else{

        }
    }).fail(function(){

    })
}


  //  function editar(id){
  // $.ajax({
  //       dataType: 'json',
  //       type: 'post',
  //       url:uri+"lote/modificarEstadoL",
  //       data:{idl:cod, Estadol:est}
  //   }).done(function(respuesta){
  //      $("#codigo").val(respuesta.codigo);
  //      $("#codigo").val(respuesta.codigo);
  //      $("#codigo").val(respuesta.codigo);
  //      $("#codigo").val(respuesta.codigo);
  //      $("#modal_edt_produccion").modal();
  //       } else{
  //           alert("El lote esta en proceso");
  //       }

  //   }).fail(function(){

  //   })
  //  }

function cambiarEstado(codSalidas, estado) {
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"Salidas/cambiarEstado",
    data:{codSalidas:codSalidas, estado:estado}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){

      location.href = uri+"Salidas/index";
        });
    }else{

    }
  }).fail(function(){

  })
}

  //function cambiarEstadoMP(codMateria_prima, estado) {
//$.ajax({
//  dataType:'json',
//  type:'post',
//  url:uri+"MateriaPrima/cambiarEstadoMP",
//  data:{codMateria_primaa:codMateria_prima, estadoo:estado}
//}).done(function(respuesta){
//  //alert("La materia prima fue aprobada");
//  //console.log(respuesta);
//  //if(respuesta.v == "1"){
////location.href = uri+"MateriaPrima/index";
//  }else{
////alert("La materia prima fue rechazada");
//  //}
//}).fail(function(){

//})

//}

function cambiarEstadoE(codEntradas, estado) {
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"Entrada/cambiarEstadoE",
    data:{codEntradas:codEntradas, estado:estado}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"Entrada/index";
        });
    }else{

    }
  }).fail(function(){

  })
}

function cambiarEstadoPe(codPedido, estado) {
$.ajax({
    dataType:'json',
    type:'post',
    url:uri+"pedido/cambiarEstadoPe",
    data:{codPedido:codPedido, estado:estado}
  }).done(function(respuesta){


    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"pedido/index";
      });
    }else
    {

    }
  }).fail(function(){


  })

}


function cambiarEstadoUni(codUnidad_medida, estado) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"medida/cambiarEstadoUni",
    data:{codUnidad_medida:codUnidad_medida, estado:estado}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"medida/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}
function cambiarEstadoFT(codFicha, estado) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"Ficha/cambiarEstadoFT",
    data:{codFicha:codFicha, estado:estado}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"Ficha/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}
function cambiarEstadoPre(codPresentacion, estado) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"presentacion/cambiarEstadoPresentacion",
    data:{codPresentacion:codPresentacion, estado:estado}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"presentacion/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}

function cambiarEstadoCa(codCategoria, estado) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"categoria/cambiarEstadoCategoria",
    data:{codCategoria:codCategoria, estado:estado}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"categoria/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}

function cambiarEstadoCaja(idCaja_compensacion, estadoc) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"caja/cambiarEstadoCa",
    data:{idCaja_compensacion:idCaja_compensacion, estadoc:estadoc}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}

function cambiarEstadoEps(idEPS, estadoe) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"eps/cambiarEstadoEp",
    data:{idEPS:idEPS, estadoe:estadoe}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}


function cambiarEstadoGene(idGenero, estadog) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"genero/cambiarEstadoGe",
    data:{idGenero:idGenero, estadog:estadog}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}


function cambiarEstadoNiv(idNivel_estudio, estadon) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"nivelEstudio/cambiarEstadoNv",
    data:{idNivel_estudio:idNivel_estudio, estadon:estadon}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}


function cambiarEstadoPen(idPension, estadop) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"pension/cambiarEstadoPe",
    data:{idPension:idPension, estadop:estadop}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}


function cambiarEstadoProf(idProfesion, estadopr) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"profesion/cambiarEstadoPro",
    data:{idProfesion:idProfesion, estadopr:estadopr}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}


function cambiarEstadoDocu(idTipo_documento, estadod) {

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"tipodocumento/cambiarEstadoDoc",
    data:{idTipo_documento:idTipo_documento, estadod:estadod}
  }).done(function(respuesta){

    if(respuesta.v == "1"){
      swal({
  title: "Se ha cambiado el estado exitosamente",
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#00acd6",
  confirmButtonText: "OK",
  closeOnConfirm: false,
},
function(isConfirm){
      location.href = uri+"adicional/index";
      });
    }else
    {

    }
  }).fail(function(){

  })

}
