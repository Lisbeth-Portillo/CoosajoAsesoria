<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <title>CEDEC</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../../assets/plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="../../../assets/plugins/select2/css/select2.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../../../assets/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="../../../assets/css/style.css">
   <!-- Boton estilo ios  -->
   <link rel="stylesheet" href="../../../assets/css/btn_ios.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
   <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">

         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
               <!-- otro link -->
            <li class="nav-item d-none d-sm-inline-block">
               <!-- otro link -->
            </li>
         </ul>

         <ul class="navbar-nav ml-auto">
            <!-- User options -->
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                  Ludy López
                  <i class="fas fa-angle-down"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">Opciones de cuenta</span>

                  <div class="dropdown-divider"></div>

                  <a href="#" class="dropdown-item">
                     Configurar
                  </a>

                  <div class="dropdown-divider"></div>
                  <a href="../../auth/salir.php" class="dropdown-item dropdown-footer">Cerrar sesion</a>
               </div>
            </li>
         </ul>



      </nav>
      <!-- /.navbar -->

      <!-- Contenedor de barra lateral principal -->
      <aside class="main-sidebar sidebar-dark-success elevation-4">
         <!-- Brand Logo -->
         <a href="../../asociado/" class="brand-link">
            <img src="../../../assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light text-light">Asesor</span>
         </a>
         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-4">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <!--Menú desplegable documentos -->
                  <li class="nav-item has-treeview">
                     <a href="../agenda.php" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                           Agenda
                        </p>
                     </a>
                  </li>
                  <li class="nav-item menu-open">
                     <a href="../../asociado/carta.php" class="nav-link active">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Asesorias
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview mb-2">
                        <li class="nav-item">
                           <a href="../resumen.php" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Resumen</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="../buscar_empresa.php" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Detalle por empresa</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="../../asociado/diagnostico.php" class="nav-link">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>Microcrédios</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>
                           Formación
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                           Informes
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-chart-bar"></i>
                        <p>
                           Informe General
                        </p>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">

               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1>Detalle por empresa</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right mt-2 mt-sm-0">
                        <li class="breadcrumb-item"><a href="d_1.php">Detalle</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="d_2.php">Bitácora</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="d_3.php">Línea Base</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="d_4.php">Reporte de Asistencia Técnica</a></li>
                     </ol>
                  </div>
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </section>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">

               <div class="card card-default">
                  <!-- form start -->
                  <div class="row mt-4">
                     <div class="col-md-6">
                        <div class="card-body">
                           <div class="form-group">
                              <label for="codigo">Código</label>
                              <input type="number" class="form-control bg-white bg-white" value="0202020" readonly id="codigo">
                           </div>
                           <!-- /.form-group -->
                           <div class="form-group">
                              <label for="propietario">Propietario</label>
                              <input type="text" class="form-control bg-white" value="Byron Alexander García Cruz" readonly id="propietario">
                           </div>
                           <!-- /.form-group -->
                           <div class="form-group">
                              <label for="telefono">Teléfono</label>
                              <input type="text" class="form-control bg-white" value="+50251903632" readonly id="telefono">
                           </div>
                           <!-- /.form-group -->
                           <div class="form-group">
                              <label for="Edad">Edad</label>
                              <input type="number" class="form-control bg-white" value="15" readonly id="edad">
                           </div>
                           <!-- /.form-group -->
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <div class="col-md-6">
                        <div class="card-body">
                           <div class="form-group">
                              <label for="sector">Sector</label>
                              <input type="number" class="form-control bg-white" value="Agrícola" readonly id="sector">
                           </div>
                           <!-- /.form-group -->
                           <div class="d-block mb-3">
                              <label for="empleados">Empleados</label>
                              <div class="row not_selectable">
                                 <div class="col-lg-6 mb-3 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-female"></i>
                                             </span>
                                          </div>
                                          <input type="number" class="form-control input_toggle_female" placeholder="F" aria-label="Cantidad">
                                       </div>
                                       <div class="ml-2 my-0 py-0">
                                          <input type="checkbox" id="toggle_femenino" class="toggle-btn">
                                          <label class="m-0"></label>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-male"></i>
                                             </span>
                                          </div>
                                          <input type="number" class="form-control" placeholder="M" aria-label="Cantidad">
                                       </div>
                                       <div class="ml-2 my-0 py-0">
                                          <input type="checkbox" id="toggle_masculino" class="toggle-btn">
                                          <label class="m-0"></label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /.form-group -->
                           <div class="form-group">
                              <label for="promedio_ventas_anuales">Email address</label>
                              <input type="number" class="form-control bg-white" value="0202020" readonly id="promedio_ventas_anuales">
                           </div>
                           <!-- /.form-group -->
                           <div class="form-group">
                              <label for="sesiones_atencion">Sesiones de atención</label>
                              <input type="number" class="form-control bg-white" value="0202020" readonly id="sesiones_atencion">
                           </div>
                           <!-- /.form-group -->
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.col -->
                     <div class="col-12 text-center mb-4">
                        <button type="button" class="btn btn-info">Reporte asistencia Técnica</button>
                     </div>
                     <!-- /.col -->

                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.card -->


            </div>
            <!-- /.container-fluid -->
         </section>
         <!-- /.section content -->
      </div>
      <!-- /.content DE CONTENIDO -->

      <!-- jQuery -->
      <script src="../../../assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- DataTables -->
      <script src="../../../assets/plugins/datatables/jquery.dataTables.js"></script>
      <script src="../../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../../assets/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../../assets/js/demo.js"></script>
      <!-- page script -->
      <script src="../../../assets/js/functions.js"></script>
   </div>
   <!-- /.wrapper -->
</body>

</html>