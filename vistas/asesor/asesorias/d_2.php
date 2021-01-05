<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <title>CEDEC</title>
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
                        <li class="breadcrumb-item"><a class="text-secondary" href="d_1.php">Detalle</a></li>
                        <li class="breadcrumb-item"><a href="d_2.php">Bitácora</a></li>
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
                  <div class="card-body">
                     <div class="row mt-4">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label for="Propietario" class="col-sm-3 col-form-label">Propietario(a)</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="Propietario" placeholder="Nombre completo">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="negocio" class="col-sm-3 col-form-label">Negocio/Empresa</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="negocio" placeholder="Nombre de empresa">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="ubicacion" class="col-sm-3 col-form-label">Ubicación</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="ubicacion" placeholder="ej. Col. San Mateo 2, primera entrada">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label for="codigo" class="col-sm-3 col-form-label">Código</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="Propietario" placeholder="02020">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="negocio" class="col-sm-3 col-form-label">Contacto</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="negocio" placeholder="+502 0000 0000">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="ubicacion" class="col-sm-3 col-form-label">Asesor Asignado</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="ubicacion">
                              </div>
                           </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12 text-center mb-4">
                           <button type="button" class="btn btn-info">Crear</button>
                        </div>
                        <!-- /.col -->

                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card main  -->
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
      <script src="../../../assets/js/functions.js"></script>
   </div>
   <!-- /.wrapper -->
</body>

</html>