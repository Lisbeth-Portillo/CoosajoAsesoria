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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../assets/css/style.css">
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
                        <a href="../auth/salir.php" class="dropdown-item dropdown-footer">Cerrar sesion</a>
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
                            <a href="agenda.php" class="nav-link active">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../asociado/carta.php" class="nav-link">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>Asesorias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview mb-2">
                                <li class="nav-item">
                                    <a href="resumen.php" class="nav-link">
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">

                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Agenda</h1>
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
                            <div class="row mt-3">
                                <div class="col-7 col-md-4 offset-md-4 d-md-flex justify-content-md-center">
                                    <div class="form-inline ">
                                        <label class="my-1 mr-2 form-check-label" for="fecha">Fecha: </label>
                                        <input type="date" class="form-control" value="2021-01-04">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row 1 campo fecha -->
                            <div class="row mt-1">
                                <div class="col-lg-8">
                                    <div class="row px-0">
                                        <div class="col-12">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <h4 class="pt-3 pb-2 text-center mt-4">Asesorias</h4>
                                                    <tr class="table-success">
                                                        <th scope="col">Empresario</th>
                                                        <th scope="col">Empresa/Negocio</th>
                                                        <th scope="col">Horario</th>
                                                        <th scope="col">Reagendar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <h4 class="py-2 text-center">Microcreditos</h4>
                                                    <tr class="table-success">
                                                        <th scope="col">Empresario</th>
                                                        <th scope="col">Empresa/Negocio</th>
                                                        <th scope="col">Horario</th>
                                                        <th scope="col">Reagendar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Andrea Aguilar" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.col-md-7 -->
                                <div class="col-lg-4">
                                    <!-- FORMACIONES -->
                                    <h4 class="pt-1 pb-2 text-center">Formaciones</h4>
                                    <div class="">
                                        <div class="eventos_de_hoy mb-4">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <h6 class="font-weight-bold border-bottom pb-2">Eventos de hoy</h6>
                                                    </tr>
                                                    <tr class="table-info text-center">
                                                        <th scope="col">Evento</th>
                                                        <th scope="col">Hora</th>
                                                        <th scope="col">Inscritos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Nombre evento" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white" value="15:30" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control bg-white" value="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Nombre evento" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white" value="15:30" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control bg-white" value="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Nombre evento" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white" value="15:30" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control bg-white" value="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Nombre evento" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white" value="15:30" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control bg-white" value="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-info btn-sm ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon_centrado bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                    <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"></path>
                                                </svg>
                                                Detalles de eventos
                                            </button>
                                        </div>
                                        <div class="eventos_proximos mt-5">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <h6 class="font-weight-normal border-bottom pb-2">Eventos proximos</h6>
                                                    </tr>
                                                    <tr class="table-info text-center">
                                                        <th scope="col">Evento</th>
                                                        <th scope="col">Hora</th>
                                                        <th scope="col">Fecha</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control bg-white" value="Nombre evento" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="time" class="form-control bg-white" value="15:30" readonly>
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control bg-white" value="2021-05-27">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-7 -->


                            </div>
                            <!-- /.row 2 asesoria->microcreditos y formaciones -->

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
        <script src="../../assets/js/functions.js"></script>

    </div>
    <!-- /.wrapper -->
</body>

</html>