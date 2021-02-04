<?php include('../../config/inactividad.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CEDEC</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/adminlte.css">
  <!-- CSS Personalizado -->
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
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <h6>
              <?php echo $_SESSION['Usuario'] ?>
              <i class="right fas fa-angle-down"></i>
            </h6>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 250px; text-align: center;">
            <!-- Usuario ingresado-->
            <span class="dropdown-item dropdown-header">
              <b>
                <?php
                if ($_SESSION['Rol_idRol'] == 1) {
                  echo "Jefe CEDEC";
                } elseif ($_SESSION['Rol_idRol'] == 2) {
                  echo "Asesor";
                } else {
                  echo "Asociado";
                }
                ?>
              </b>
            </span>


            <?php
            $meses = array  ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

            echo  $meses[date('n') - 1] . " del " . date('Y');
            ?>
            <div class="dropdown-divider"></div>

            <!-- Cierre de sesion -->


            <a href="../../ajax/usuario.php?op=salir" class="dropdown-item dropdown-footer">Salir</a>
            </a>
          </div>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Contenedor de barra lateral principal -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
      <!-- Brand Logo -->
      <a href="../asociado/asociado.php" class="brand-link">
        <img src="<?php
                  if ($_SESSION['Rol_idRol'] == 1) {
                    echo "../../assets/img/fondo.jpg";
                  } else {
                    echo "../../assets/img/AdminLTELogo.png";
                  }
                  ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-light">
          <?php
          if ($_SESSION['Rol_idRol'] == 1) {
            echo "Jefe";
          }
          if ($_SESSION['Rol_idRol'] == 2) {
            echo "Asesor";
          }
          if ($_SESSION['Rol_idRol'] == 3) {
            echo "Asociado";
          }
          ?>
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-4">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <?php
            //Acceso del asociado al modulo de asesorias
            if ($_SESSION['AsesoriaAso'] == 1) { ?>
              <!--Menú desplegable documentos -->
              <li class="nav-item has-treeview menu-open">
                <a href="../" class="nav-link active">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Documentos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../asociado/index.php" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Línea Base</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../asociado/carta.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Carta de compromiso</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../asociado/diagnostico.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Diagnóstico del negocio</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-chart-bar"></i>
                  <p>
                    Resultados
                  </p>
                </a>
              </li>

            <?php } ?>

            <?php
            //Acceso del Jefe CEDEC
            if ($_SESSION['Jefe'] == 1) { ?>
              <!--Menú desplegable documentos -->
              <li class="nav-item has-treeview menu-open">
                <a href="nuevosusuarios.php" class="nav-link active">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview menu-open">
                <a href="../" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Servicios/Programas
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview menu-open">
                <a href="../" class="nav-link">
                  <i class="nav-icon fas fa-file-medical-alt"></i>
                  <p>
                    Informes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../asociado/index.php" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Asesorías</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../asociado/index.php" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Microcréditos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../asociado/index.php" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Formación</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-chart-bar"></i>
                  <p>
                    Informe General
                  </p>
                </a>
              </li>
            <?php } ?>


            <?php
            //Acceso del asociado a Formaciones
            if ($_SESSION['FormacionAso'] == 1) { ?>

            <?php } ?>


            <?php
            //Acceso del Asesor a Formaciones
            if ($_SESSION['FormacionAse'] == 1) { ?>

            <?php } ?>

            <?php
            //Acceso del Asesor a Micorcreditos
            if ($_SESSION['Microcreditos'] == 1) { ?>

            <?php } ?>


            <?php
            //Acceso del Asesor a Asesorias
            if ($_SESSION['Asesoria'] == 1) { ?>

            <?php } ?>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>