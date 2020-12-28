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
                            <a href="agendasesor.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="../asociado/carta.php" class="nav-link active">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>Asesoria
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview mb-2">
                                <li class="nav-item">
                                    <a href="lista_asesorias.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista de asesorias</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="buscar_empresa.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Detalle empresa</p>
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-dark ml-1 ml-lg-0">Buscar empresa</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->

                    <div class="card card-default">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                            <label class="form-check-label not_selectable" for="gridCheck">
                                                 Filtrar por asociado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control select2 select_asociado no_outline" style="width: 100%;">
                                            <option selected="selected" value="">Seleccionar</option>

                                            <?php
                                            require "../../config/conexion1.php";

                                            $consulta = mysqli_query($con, "SELECT * FROM asociado_prueba");

                                            if (mysqli_num_rows($consulta) > 0) {
                                                while ($asociado = mysqli_fetch_assoc($consulta)) { ?>
                                                    <option value="<?php echo $asociado['id'] ?>"><?php echo $asociado['nombre'] ?></option>
                                            <?php
                                                }
                                            }

                                            ?>


                                            <!-- <option value="1">Alex Cruz Garcia </option>
                                                <option value="2">Pablo Jose Heredia</option>
                                                <option value="3">Maria Pilar Llanos</option>
                                                <option value="4">Saturnino Saavedra</option>
                                                <option value="5">Demetrio Llanos</option>
                                                <option value="6">Piedad Gutierrez</option>
                                                <option value="7">Ainoa Mata</option>
                                                <option value="8">Silvia Maria Ali</option>
                                                <option value="9">Sheila Calle</option>
                                                <option value="10">Eulalia Diez</option>
                                                <option value="11">Celestino Amaya</option>
                                                <option value="12">Hilario Mir</option>
                                                <option value="13">Maria Azucena Jurado</option>
                                                <option value="14">Anna Sainz</option>
                                                <option value="15">Rosa Ana De-Las-Heras</option>
                                                <option value="16">Elvira Caamaño</option> -->
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-7">
                                    <table class="table table-bordered">
                                        <thead class="font-weight-normal">
                                            <tr>
                                                <th scope="col">Codigo</th>
                                                <th scope="col">Nombre empresa</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="empresas_de_asociado">
                                            <tr>
                                                <td colspan="3" rowspan="3" class="text-center font-weight-light py-3">
                                                    Seleccione un asociado
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                        </div>
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
        <script src="../../assets/js/functions.js"></script>
        <!-- Page script -->
        <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

            })
        </script>


</body>

</html>