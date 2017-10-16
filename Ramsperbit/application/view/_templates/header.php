<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ramsperbit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo URL ?>bootstrap/css/bootstrap.min.css">

  <script src="<?php echo URL; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- Icono -->
  <link rel="shortcut icon"  type="image/x-icon" href="<?php echo URL ?>dist/img/logo2.ico">
      <!-- Icono -->
  <link rel="stylesheet" href="<?php echo URL ?>dist/css/AdminLTE.css">
  <!--Alert-->
      <link rel="stylesheet" href="<?php echo URL ?>plugins/sweetalert/dist/sweetalert.css">

    <link rel="stylesheet" href="<?php echo URL ?>dist/css/skins/skin-blue.css">

    <link rel="stylesheet" href="<?php echo URL ?>plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" href="<?php echo URL ?>plugins/morris/morris.css">

    <link rel="stylesheet" href="<?php echo URL ?>plugins/select2/select2.min.css">

    <link rel="stylesheet" href="<?php echo URL ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <link rel="stylesheet" href="<?php echo URL ?>plugins/datepicker/datepicker3.css">

    <link rel="stylesheet" href="<?php echo URL ?>plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="<?php echo URL ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <link rel="stylesheet" href="<?php echo URL ?>plugins/colorpicker/bootstrap-colorpicker.min.css">

  <link rel="stylesheet" href="<?php echo URL ?>plugins/timepicker/bootstrap-timepicker.min.css">

  <link rel="stylesheet" href="<?php echo URL ?>plugins/fullcalendar/fullcalendar.min.css">

  <link rel="stylesheet" href="<?php echo URL ?>plugins/iCheck/all.css">

  <link rel="stylesheet" href="<?php echo URL ?>plugins/fullcalendar/fullcalendar.print.css" media="print">

  <link rel="stylesheet" href="<?php echo URL ?>css/font-awesome.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">




</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<?php

    session_start();
    if ($_SESSION["nombre_usuario"]  != null && $_SESSION["Rol_idrol"] == 1)
    {
      $nombre = $_SESSION["nombre_usuario"];
      $correo = $_SESSION["correo_electronico"];
      $imga = $_SESSION["imagen"];
      $rol = $_SESSION["Rol_idrol"];


    }
    else
    {
    header('location: ' . URL . 'login');
    }

   ?>

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= URL ?>home/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ramsper</b>BIT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-question-sign"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><b>Ayuda:</b></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                  </span><a data-toggle="modal" data-target="#mapa"><span class="glyphicon glyphicon-globe"></span>Mapa del sitio</a>
                  </li>
                  <li>
                  <a href="<?= URL ?>doc/Manual.docx" target=”_blank”><span class="glyphicon glyphicon-book"></span>Manual de usuario</a>
                  </li>
                </ul>
              </li>

            </ul>
          </li>

          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= URL. $imga ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo "$nombre";?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= URL. $imga ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo "$nombre-$correo";?>
                  <small>Miembro de Laboratorios Licol S.A.S</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"><?php
                    if ($rol == 1) {
                      echo"ADMINISTRADOR";
                    } elseif ($rol == 2) {
                      echo "SUPERVISOR";
                    } else{
                      echo "EMPLEADO";
                    }
                    ?></a>
                    <a href="<?=URL ?>login/salir" class="btn btn-default btn-flat">Salir</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= URL ?>dist/img/logo.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            Licol S.A.S

          </p>

        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color: #fff; font-size: x-large; text-align: center">MÓDULOS</li>
        <!-- Optionally, you can add icons to the links -->

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-sunglasses"></i> <span>Gestión de Usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= URL ?>gusuario/index">Gestión de Empleado</a></li>
            <li><a href="<?= URL ?>adicional/index">Información Adicional</a></li>
            <li><a href="<?= URL ?>login/indexx">Cuentas Asociadas</a></li>

          </ul>

        </li>
        <li><a href="<?= URL ?>cliente/index"><i class="fa fa-address-book"></i> <span>Clientes</span></a></li>
        <li><a href="<?= URL ?>pedido/index"><i class="glyphicon glyphicon-hourglass"></i> <span>Pedido</span></a></li>

        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-compressed"></i> <span>Inventario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= URL ?>MateriaPrima/index">Materia Prima</a></li>
            <li><a href="<?= URL ?>Entrada/index">Entradas</a></li>
            <li><a href="<?= URL ?>Salidas/index">Salidas</a></li>
            <li><a href="<?= URL ?>medida/index">Unidades de Medida</a></li>
          </ul>
        </li>
        <li><a href="<?= URL ?>Ficha/index"><i class="glyphicon glyphicon-list-alt"></i> <span>Ficha Técnica</span></a></li>


        <li class="treeview">
         <a href="#"><i class="glyphicon glyphicon-filter"></i> <span>Producción</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?= URL ?>presentacion/index">Presentación</a></li>
           <li><a href="<?= URL ?>categoria/index">Categoría</a></li>
           <li><a href="<?= URL ?>producto/index">Producto</a></li>
           <li><a href="<?= URL ?>orden/index">Orden de Producción</a></li>
           <li><a href="<?= URL ?>lote/index"></i> <span>Lote</span></a></li>
         </ul>
       </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <div class="modal fade" id="mapa" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"> <span class="glyphicon glyphicon-globe"></span>Mapa del sitio</h4>
</div>
<div class="modal-body">


    <!-- Optionally, you can add icons to the links -->
    <li>
      <i class="glyphicon glyphicon-home"></i> <span>Inicio:</span></a>
      <ul>
        <li><a href="<?= URL ?>home/index"><span>Página de inicio</span></a></li>
      </ul>
    </li>
    <li>
      <i class="glyphicon glyphicon-user"></i> <span>Cuenta:</span></a>
      <ul>
        <li><a href="<?=URL ?>login/salir"><span>Cerrar sesión</span></a></li>
      </ul>
    </li>
         <li>
      <i class="glyphicon glyphicon-sunglasses"></i> <span>Gestión de usuario</span>
      <ul>
        <span>Gestión de empleado:</span>
        <ul>
          <li><a href="<?= URL ?>gusuario/index">Listar todos los empleados</a></li>
          <li><a href="<?= URL ?>gusuario/registrar">Registrar un nuevo empleado</a></li>

       </ul>
       <span>información adicional:</span>
       <ul>
         <li><a href="<?= URL ?>adicional/index">Listar toda la Información adicional</a></li>
      </ul>
      <span>Cuentas adicionales:</span>
      <ul>
        <li><a href="<?= URL ?>login/indexx">Listar todas las cuentas asociadas</a></li>
     </ul>
      </ul>
    </li>

        <li>
  <i class="fa fa-address-book"></i> <span>Clientes</span></a>
  <ul>
    <li><a href="<?= URL ?>cliente/index"></i> <span>Listar todos los clientes</span></a></li>
    <li><a href="<?= URL ?>cliente/registrar"></i> <span>Registrar un nuevo cliente</span></a></li>
  </ul>
</li>
<li>
<i class="glyphicon glyphicon-hourglass"></i> <span>Pedido</span></a>
<ul>
<li><a href="<?= URL ?>pedido/index"></i> <span>Listar todos los pedidos</span></a></li>
<li><a href="<?= URL ?>pedido/registrar"></i> <span>Registrar un nuevo pedido</span></a></li>
</ul>
</li>




    <li>
      <i class="glyphicon glyphicon-compressed"></i> <span>Inventario:</span>
      <ul>


      <span>Materia prima:</span>
      <ul>
        <li><a href="<?= URL ?>MateriaPrima/index">Listar todas las materias primas</a></li>
        <li><a href="<?= URL ?>MateriaPrima/registrar">Registrar una nueva materia prima:</a></li>
     </ul>
       <span>Entradas:</span>
       <ul>
         <li><a href="<?= URL ?>Entrada/index">Listar todas las entradas</a></li>
         <li><a href="<?= URL ?>Entrada/registrar">Registrar una nueva entrada</a></li>
      </ul>
      <span>Salidas:</span>
      <ul>
        <li><a href="<?= URL ?>Salidas/index">Listar todas las salidas</a></li>
        <li><a href="<?= URL ?>Salidas/registrar">Registrar nueva salida</a></li>
     </ul>
     <span>Unidades de medida:</span>
     <ul>
      <li><a href="<?= URL ?>medida/index">Listar todas las unidades de medida</a></li>
      <li><a href="<?= URL ?>medida/registrar">Registrar nueva unidad de medida</a></li>
    </ul>
   </ul>
    </li>

        <li>
      <i class="glyphicon glyphicon-list-alt"></i> <span>Ficha técnica</span></a>
      <ul>
        <li><a href="<?= URL ?>Ficha/index"></i> <span>Listar todas las fichas técnicas</span></a></li>
        <li><a href="<?= URL ?>Ficha/registrar"></i> <span>Registrar una nueva ficha técnica</span></a></li>
      </ul>
    </li>






     <li>
      <i class="glyphicon glyphicon-filter"></i> <span>Producción</span>
      <ul>
       <span>Presentación:</span>
        <ul>
          <li><a href="<?= URL ?>presentacion/index">Listar todas las presentaciones</a></li>
        </ul>
        <span>Categorías:</span>
        <ul>
        <li><a href="<?= URL ?>categoria/index">Listar todas las categorías</a></li>
       </ul>
        <span>Producto:</span>
        <ul>
          <li><a href="<?= URL ?>producto/index">Listar todos los productos</a></li>
          <li><a href="<?= URL ?>producto/registrar">Registrar un nuevo producto</a></li>
        </ul>
        <span>Orden de producción:</span>
        <ul>
          <li><a href="<?= URL ?>orden/index">Listar todas las órdenes de Producción</a></li>
          <li><a href="<?= URL ?>orden/registrar">Registrar una nueva orden de producción</a></li>
        </ul>


        <span>Lote:</span>
        <ul>
        <li><a href="<?= URL ?>lote/index"><span>Listar todos los lotes</span></a></li>
        <li><a href="<?= URL ?>lote/registrar"></i> <span>Registrar un nuevo lote</span></a></li>
       </ul>
    </ul>
    </li>



</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>
</div>

</div>
</div>
