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
                  <a href="resumen.php" class="nav-link active">
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
              <h1>Resumen</h1>
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
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="tabla_resumen" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Empresa</th>
                          <th>Telefono</th>
                          <th>Propietario</th>
                          <th>Sector</th>
                          <th>Sessiones realizadas</th>
                          <th>Grado de avance</th>
                          <th>Detalle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Empresa 1</td>
                          <td>+502</td>
                          <td>Propietario 1</td>
                          <td>Servicio</td>
                          <td>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">40%</td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="asesorias/d_1.php" class="btn btn-danger pr-0">Consultar</a>
                              <button type="button" class="btn btn-danger dropdown-toggle pl-1 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="asesorias/d_1.php">Detalle por empresa</a>
                                <a class="dropdown-item" href="asesorias/d_2.php">Bitacora</a>
                                <a class="dropdown-item" href="asesorias/d_3.php">Linea Base</a>
                                <a class="dropdown-item" href="asesorias/d_4.php">Reporte por empresa</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Empresa 2</td>
                          <td>+502</td>
                          <td>Propietario 2</td>
                          <td>Servicio</td>
                          <td>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (success)</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">60%</td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="asesorias/d_1.php" class="btn btn-danger pr-0">Consultar</a>
                              <button type="button" class="btn btn-danger dropdown-toggle pl-1 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="asesorias/d_1.php">Detalle por empresa</a>
                                <a class="dropdown-item" href="asesorias/d_2.php">Bitacora</a>
                                <a class="dropdown-item" href="asesorias/d_3.php">Linea Base</a>
                                <a class="dropdown-item" href="asesorias/d_4.php">Reporte por empresa</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Empresa 3</td>
                          <td>+502</td>
                          <td>Propietario 3</td>
                          <td>Servicio</td>
                          <td>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                <span class="sr-only">10% Complete (success)</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">10%</td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="asesorias/d_1.php" class="btn btn-danger pr-0">Consultar</a>
                              <button type="button" class="btn btn-danger dropdown-toggle pl-1 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="asesorias/d_1.php">Detalle por empresa</a>
                                <a class="dropdown-item" href="asesorias/d_2.php">Bitacora</a>
                                <a class="dropdown-item" href="asesorias/d_3.php">Linea Base</a>
                                <a class="dropdown-item" href="asesorias/d_4.php">Reporte por empresa</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Empresa 4</td>
                          <td>+502</td>
                          <td>Propietario 4</td>
                          <td>Servicio</td>
                          <td>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">90% Complete (success)</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">90%</td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="asesorias/d_1.php" class="btn btn-danger pr-0">Consultar</a>
                              <button type="button" class="btn btn-danger dropdown-toggle pl-1 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="asesorias/d_1.php">Detalle por empresa</a>
                                <a class="dropdown-item" href="asesorias/d_2.php">Bitacora</a>
                                <a class="dropdown-item" href="asesorias/d_3.php">Linea Base</a>
                                <a class="dropdown-item" href="asesorias/d_4.php">Reporte por empresa</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Empresa 5</td>
                          <td>+502</td>
                          <td>Propietario 5</td>
                          <td>Servicio</td>
                          <td>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">100% Complete (success)</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">100%</td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="asesorias/d_1.php" class="btn btn-danger pr-0">Consultar</a>
                              <button type="button" class="btn btn-danger dropdown-toggle pl-1 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="asesorias/d_1.php">Detalle por empresa</a>
                                <a class="dropdown-item" href="asesorias/d_2.php">Bitacora</a>
                                <a class="dropdown-item" href="asesorias/d_3.php">Linea Base</a>
                                <a class="dropdown-item" href="asesorias/d_4.php">Reporte por empresa</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/js/demo.js"></script>
    <!-- page script -->
    <script src="../../assets/js/functions.js"></script>
    <script>
      $(function() {
        $('#tabla_resumen').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </div>
  <!-- /.wrapper -->
</body>

</html>