<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CEDEC</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <!-- Select2 -->
  <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/style.css">



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
            <a href="#" class="dropdown-item dropdown-footer">Cerrar sesion</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Contenedor de barra lateral principal -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
      <!-- Brand Logo -->
      <a href="../asociado/" class="brand-link">
        <img src="../../assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
              <a href="agenda.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Agenda
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="../asociado/carta.php" class="nav-link active">
                <i class="nav-icon fas fa-handshake"></i>
                <p>Asesorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview mb-2">
                <li class="nav-item">
                  <a href="lista_asesorias.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Resumen</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="buscar_empresa.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Detalle por empresa</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../asociado/diagnostico.php" class="nav-link">
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
      <section class="content-header">
        <div class="container-fluid">


          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="text-dark ml-1 ml-lg-0">Lista de asesorias</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->


        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->

          <div class="card card-default">

            <!-- /.card-header -->
         
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->


      <div class="row">
        <div class="col-md-4">
          <div class="buscar_asociado">

          </div>
        </div>
        <div class="col-md-8">

        </div>
      </div>




    </div>
    <!-- /.SECCION DE CONTENIDO -->


    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/js/demo.js"></script>
    <!-- Page script -->

</body>

</html>