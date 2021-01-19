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
            <span class="brand-text text-light">Asesor</span>
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
                        <li class="breadcrumb-item"><a class="text-secondary" href="d_2.php">Bitácora</a></li>
                        <li class="breadcrumb-item"><a href="d_3.php">Línea Base</a></li>
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
               <div class="row ">
                  <div class="col-md-12">
                     <div class="card card-info">
                        <div class="card-header">
                           <h3 class="card-title float-none text-center">Datos del empresario</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                           </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <div class="row">

                              <!-- PRIMER TARJETA -->
                              <div class="col-sm-6 col-12">
                                 <div class="card card-primary-light">
                                    <div class="card-header">
                                       <h3 class="card-title">Datos personales</h3>

                                       <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                       </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                       <div class="form-group">
                                          <label for="nombre">Nombre completo</label>
                                          <input type="text" class="form-control" name="NombreA" id="NombreA" placeholder="" autocomplete="off">
                                       </div>
                                       <!-- /.form-group -->

                                       <div class="form-group">
                                          <label>Género</label>
                                          <div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="genero" name="genero" value="M" class="custom-control-input">
                                                <label class="custom-control-label font-weight-normal" for="genero">Masculino</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="genero2" name="genero" value="F" class="custom-control-input">
                                                <label class="custom-control-label font-weight-normal" for="genero2">Femenino</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-6 col-12">
                                             <div class="form-group">
                                                <label>Escolaridad</label>
                                                <select class="form-control select2">
                                                   <option selected="selected">Seleccione la escolaridad</option>

                                                   <?php
                                                   //Datos de la escolaridad
                                                   $query = mysqli_query($conexion, "SELECT * FROM escolaridad");


                                                   $result = mysqli_num_rows($query);
                                                   if ($result > 0) {
                                                      while ($data = mysqli_fetch_array($query)) {
                                                   ?>
                                                         <option value="<?php echo $data["idEscolaridad"]; ?>"><?php echo $data["NombreEsc"]; ?></option>
                                                   <?php    }
                                                   }

                                                   mysqli_close($conexion);
                                                   ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-12">
                                             <div class="form-group">
                                                <label>Comunidad</label>
                                                <select class="form-control select2">
                                                   <option selected="selected">Seleccione la comunidad</option>

                                                   <?php
                                                   //Datos de la escolaridad
                                                   $query2 = mysqli_query($conexion, "SELECT * FROM comunidad");


                                                   $result2 = mysqli_num_rows($query2);
                                                   if ($result2 > 0) {
                                                      while ($data2 = mysqli_fetch_array($query2)) {
                                                   ?>
                                                         <option value="<?php echo $data2["idComunidad"]; ?>"><?php echo $data2["NombreComu"]; ?></option>
                                                   <?php    }
                                                   }
                                                   mysqli_close($conexion);
                                                   ?>
                                                </select>
                                             </div>
                                          </div>

                                       </div>
                                       <!-- /row de campos inline -->
                                       <div class="row">
                                          <div class="col-lg-6 col-12">
                                             <div class="form-group">
                                                <label>Asociado</label>
                                                <select class="form-control select2" name="asociado">
                                                   <option selected="selected">Asociado</option>
                                                   <option value="Si">Si</option>
                                                   <option value="No">No</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-12">
                                             <div class="form-group">
                                                <label>CIF</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <!-- /.row de campos inline-->
                                    </div>
                                    <!-- /.card-body -->


                                 </div>
                                 <!-- /.primer card -->

                                 <div class="card card-primary-light">
                                    <div class="card-header">
                                       <h3 class="card-title">Situación actual en términos de empleo</h3>

                                       <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                       </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                       <div class="row mb-2 mb-md-0">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Empresario</label>
                                                <select class="form-control select2" name="Empresario">
                                                   <option selected="selected">Empresario</option>
                                                   <option value="Si">Si</option>
                                                   <option value="No">No</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="desdecuando">¿Desde cuando?</label>
                                                <input class="form-control" name="FechaEmpresario" id="FechaEmpresario" type="date">
                                             </div>
                                          </div>
                                       </div>


                                       <div class="row mb-2 mb-md-0">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Empleado para terceros</label>
                                                <select class="form-control select2" name="EmpleadoTercero">
                                                   <option selected="selected">Empleado para terceros</option>
                                                   <option value="Si">Si</option>
                                                   <option value="No">No</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="desdecuando2">¿Desde cuando?</label>
                                                <input class="form-control" name="FechaETercero" id="FechaETercero" type="date">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Desempleado</label>
                                                <select class="form-control select2" name="Desempleado">
                                                   <option selected="selected">Desempleado</option>
                                                   <option value="Si">Si</option>
                                                   <option value="No">No</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="desdecuando3">¿Desde cuando?</label>
                                                <input class="form-control" name="FechaDesempleado" id="FechaDesempleado" type="date">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- card-body -->
                                 </div>
                                 <!-- /.card-->
                              </div>
                              <!-- /.col -->

                              <!-- SEGUNDA COLUMNA -->
                              <div class="col-sm-6 col-12">
                                 <div class="card card-primary-light">
                                    <div class="card-header">
                                       <h3 class="card-title">Nivel de ingresos familiares mensuales</h3>

                                       <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                       </div>
                                    </div>
                                    <!-- /.card-header -->


                                    <div class="card-body">
                                       <div class="form-group">
                                          <label for="nombre">Ingresos Familiares</label>
                                          <input type="number" min="0" pattern="^[0-9]+" class="form-control solodosdecimales" name="ingresofamiliares" id="ingresofamiliares" step=".01" placeholder="0.00" autocomplete="off">
                                       </div>

                                       <div class="form-group">
                                          <label for="egresofamiliares">Egresos Familiares</label>
                                          <input type="number" min="0" pattern="^[0-9]+" class="form-control solodosdecimales" name="egresofamiliares" id="egresofamiliares" step=".01" placeholder="0.00" autocomplete="off">
                                       </div>

                                       <div class="form-group">
                                          <label for="nombre">Saldo Final</label>
                                          <input type="number" min="0" pattern="^[0-9]+" class="form-control solodosdecimales" name="saldofinal" id="ingresofamiliares" step=".01" placeholder="0.00" autocomplete="off">
                                       </div>

                                       <!-- Pregunta 1 -->
                                       <div class="form-group">
                                          <label>Los ingresos familiares ¿cubren todos los gastos?</label>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="respuesta1pregunta1" name="respuestapregunta1" class="custom-control-input">
                                             <label class="custom-control-label font-weight-light" for="respuesta1pregunta1">Si</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="respuesta2pregunta1" name="respuestapregunta1" class="custom-control-input">
                                             <label class="custom-control-label font-weight-light" for="respuesta2pregunta1">No</label>
                                          </div>
                                       </div>

                                       <!-- Pregunta 2 -->
                                       <div class="form-group">
                                          <label>¿Tiene capacidad de ahorro?</label>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="respuesta1pregunta2" name="respuestapregunta2" class="custom-control-input">
                                             <label class="custom-control-label font-weight-light" for="respuesta1pregunta2">Si</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="respuesta2pregunta2" name="respuestapregunta2" class="custom-control-input">
                                             <label class="custom-control-label font-weight-light" for="respuesta2pregunta2">No</label>
                                          </div>
                                       </div>

                                       <!-- Pregunta 3 -->
                                       <div class="form-group">
                                          <label>¿Tiene créditos activos?</label>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="respuesta1pregunta3" name="respuestapregunta3" class="custom-control-input">
                                             <label class="custom-control-label font-weight-light" for="respuesta1pregunta3">Si</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="respuesta2pregunta3" name="respuestapregunta3" class="custom-control-input">
                                             <label class="custom-control-label font-weight-light" for="respuesta2pregunta3">No</label>
                                          </div>
                                       </div>


                                       <div class="row">
                                          <div class="col-6">
                                             <div class="form-group">
                                                <label for="conquien1">¿Con quién?</label>
                                                <input class="form-control" name="conquien1" type="text" id="conquien1" autocomplete="off">
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="form-group">
                                                <label>¿Cuanto?</label>
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" name="cuanto1" class="form-control solodosdecimales" placeholder="0.00">
                                             </div>
                                          </div>
                                       </div>
                                       <!-- /.row de campos inline-->


                                    </div>
                                    <!-- /.card-body -->
                                 </div>
                                 <!-- /.tercera card -->

                              </div>
                              <!-- /.col -->
                           </div>
                           <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                     </div>
                     <!-- ./card -->

                  </div>
                  <!-- /.col datos de empresario -->

                  <div class="col-md-12 empresas">
                     <div class="formulario_empresa card card-info">
                        <div class="card-header">
                           <h3 class="card-title">Información general de la empresa</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                           </div>
                        </div>
                        <div class="card-body p-0 pb-4">
                           <div class="p-4">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="nombreempresa">Nombre de la empresa o negocio</label>
                                       <input type="text" class="form-control" name="nombreempresa" id="nombreempresa" placeholder="" autocomplete="off">
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                       <label for="razonsocial">Razón Social</label>
                                       <input class="form-control" type="text" name="razonsocial" id="razonsocial">
                                    </div>
                                    <div class="form-group">
                                       <label for="direccionempresa">Dirección</label>
                                       <input class="form-control" type="text" name="direccionempresa" id="direccionempresa">
                                    </div>
                                    <div class="form-group">
                                       <label for="telefonoempresa">Teléfono</label>
                                       <input class="form-control" type="text" name="telefonoempresa" id="telefonoempresa" value="+502">
                                    </div>
                                    <div class="form-group">
                                       <label for="correoempresa">Correo Electrónico</label>
                                       <input class="form-control" type="text" name="correoempresa" id="correoempresa">
                                    </div>
                                    <div class="form-group">
                                       <label for="fangpageempresa">Página/Fanpage</label>
                                       <input class="form-control" type="text" name="fangpageempresa" id="fangpageempresa">
                                    </div>
                                    <div class="form-group">
                                       <label for="sectorempresa">Sector</label>
                                       <select class="form-control select2" name="sectorempresa" id="sectorempresa">
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="inversioninicial">Inversión Inicial/Actual</label>
                                       <input type="number" min="0" pattern="^[0-9]+" step=".01" name="inversioninicial" id="inversioninicial" class="form-control solodosdecimales" placeholder="0.00">
                                    </div>

                                    <div class="row">
                                       <div class="col-6">
                                          <div class="form-gruop">
                                             <label for="inversionpropia">Inversión Propia</label>
                                             <input id="inversionpropia" name="inversionpropia" type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" placeholder="0.00">
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="form-gruop">
                                             <label for="credito">Crédito</label>
                                             <input id="credito" name="credito" type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" placeholder="0.00">
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.row -->
                                 </div>
                                 <div class="col-md-6 ">

                                    <div class="row mt-3">
                                       <div class="col-6">
                                          <div class="form-gruop">
                                             <label for="inversionterceros">Inversión de Terceros</label>
                                             <input id="inversionterceros" name="inversionterceros" type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" placeholder="0.00">
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="form-gruop">
                                             <label for="otrainversion">Otro</label>
                                             <input id="otrainversion" name="otrainversion" type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" placeholder="0.00">
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.row -->

                                    <div>
                                       <div class="alert alert-primary mt-4 py-1" role="alert">
                                          Volumen de venta los ultimos 3 años
                                       </div>
                                       <div class="row">
                                          <div class="col-4 ultimostresanios">
                                             <label for="aniofacturacion1" class="">Facturación</label>
                                             <div class="form-group">
                                                <input type="text" id="aniofacturacion1" name="aniofacturacion1" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <input type="text" name="aniofacturacion2" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <input type="text" name="aniofacturacion3" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-4">
                                             <label for="montoanual1">Monto Anual</label>

                                             <div class="form-group">
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" name="montoanual1" id="montoanual1" placeholder="0.00">
                                             </div>
                                             <div class="form-group">
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" name="montoanual2" placeholder="0.00">
                                             </div>
                                             <div class="form-group">
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" name="montoanual3" placeholder="0.00">
                                             </div>
                                          </div>
                                          <div class="col-4">
                                             <label for="montomensual1">Monto Mensual</label>
                                             <div class="form-group">
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" name="montomensual1" id="montomensual1" placeholder="0.00">
                                             </div>
                                             <div class="form-group">
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" name="montomensual2" placeholder="0.00">
                                             </div>
                                             <div class="form-group">
                                                <input type="number" min="0" pattern="^[0-9]+" step=".01" class="form-control solodosdecimales" name="montomensual3" placeholder="0.00">
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div>
                                       <div class="alert alert-primary mt-3 py-1" role="alert">
                                          ¿En qué ha invertido su empresa en los útimos 3 años?
                                       </div>
                                       <div class="row invertido_opciones">
                                          <div class="col-sm-6">
                                             <!-- checkbox -->
                                             <div class="form-group">
                                                <div class="form-check mb-1">
                                                   <input class="form-check-input" id="invertidochekc1" type="checkbox" name=invertido_ultimos3anios[] value="1">
                                                   <label class="form-check-label" for="invertidochekc1">En procesos</label>
                                                </div>
                                                <div class="form-check mb-1">
                                                   <input class="form-check-input" type="checkbox" id="invertidochekc2" name=invertido_ultimos3anios[] value="2">
                                                   <label class="form-check-label" for="invertidochekc2">Maquinaria/Equipo</label>
                                                </div>
                                                <div class="form-check mb-1">
                                                   <input class="form-check-input" type="checkbox" id="invertidochekc3" name=invertido_ultimos3anios[] value="3">
                                                   <label class="form-check-label" for="invertidochekc3">Software/Hardware</label>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-sm-6">
                                             <!-- checkbox -->
                                             <div class="form-group">
                                                <div class="form-check mb-1">
                                                   <input class="form-check-input" type="checkbox" id="invertidochekc4" name=invertido_ultimos3anios[] value="4">
                                                   <label class="form-check-label" for="invertidochekc4">Productos/Servicios</label>
                                                </div>
                                                <div class="form-check mb-1">
                                                   <input class="form-check-input" type="checkbox" id="invertidochekc5" name=invertido_ultimos3anios[] value="5">
                                                   <label class="form-check-label" for="invertidochekc5">Nuevas Tecnologías</label>
                                                </div>
                                                <div class="form-check mb-1 check_otros">
                                                   <input class="form-check-input" type="checkbox" id="invertidochekc6" name=invertido_ultimos3anios[] value="6">
                                                   <label class="form-check-label" for="invertidochekc6">Otros</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12 detalle_otros">
                                             <div class="form-group">
                                                <textarea class="form-control" name="tipo_capacitación" id="tipo_capacitación" rows="3" placeholder="Ingrese su respuesta"></textarea>
                                             </div>
                                          </div>

                                       </div>

                                    </div>


                                    <div>
                                       <div class="alert alert-primary mt-3 py-1" role="alert">
                                          Aspectos relacionados a Recursos Humanos
                                       </div>
                                       <div class="row">
                                          <div class="col-12 col-md-6">
                                             Empleados con los que cuenta actualmente
                                          </div>
                                          <div class="col-6 col-md-3">
                                             <div class="input-group flex-nowrap">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text" id="addon-wrapping">
                                                      <i class="ion-ios-body"></i>
                                                   </span>
                                                </div>
                                                <input type="number" min="0" pattern="^[0-9]+" name="emp_hombres" class="form-control" placeholder="0">
                                             </div>
                                          </div>
                                          <div class="col-6 col-md-3">
                                             <div class="input-group flex-nowrap">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text" id="addon-wrapping">
                                                      <i class="fas fa-female"></i>
                                                   </span>
                                                </div>
                                                <input type="number" min="0" pattern="^[0-9]+" name="emp_mujeres" class="form-control" placeholder="0">
                                             </div>
                                          </div>

                                       </div>

                                       <div class="row mt-3 pb-0">
                                          <div class="col-12 col-md-6">
                                             ¿Cuántos de ellos están entre los 14 y 24 años?
                                          </div>
                                          <div class="col-6 col-md-3">
                                             <div class="input-group flex-nowrap">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text" id="addon-wrapping">
                                                      <i class="ion-ios-body"></i>
                                                   </span>
                                                </div>
                                                <input name="emp_hombres_14_24" type="number" min="0" pattern="^[0-9]+" class="form-control" placeholder="0">
                                             </div>
                                          </div>
                                          <div class="col-6 col-md-3">
                                             <div class="input-group flex-nowrap">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text" id="addon-wrapping">
                                                      <i class="fas fa-female"></i>
                                                   </span>
                                                </div>
                                                <input type="number" min="0" pattern="^[0-9]+" name="emp_mujeres_14_24" class="form-control" placeholder="0">
                                             </div>
                                          </div>

                                       </div>

                                       <div class="row mt-3">
                                          <div class="col-12 col-md-6">
                                             Total de empleados
                                          </div>
                                          <div class="col-6 col-md-6">
                                             <div class="input-group flex-nowrap">
                                                <input name="total_empleados" type="number" min="0" pattern="^[0-9]+" class="form-control bg-white" placeholder="0" disabled>
                                             </div>
                                          </div>


                                       </div>

                                    </div>



                                 </div>
                              </div>
                              <!-- /.row -->

                              <div class="row">
                                 <div class="col-12 mt-5">
                                    <div class="form-group">


                                       <label>Actualmente, ¿Brinda usted, algún tipo de capacitación a sus Empleados?</label>

                                       <div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="ud_brinda_r_si" name="genero" class="custom-control-input">
                                             <label class="custom-control-label font-weight-normal" for="ud_brinda_r_si">Si</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="ud_brinda_r_no" name="genero" class="custom-control-input">
                                             <label class="custom-control-label font-weight-normal" for="ud_brinda_r_no">No</label>
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                                 <!-- col-12 -->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="tipo_capacitación">¿Qué tipo de capacitación?</label>
                                       <textarea class="form-control" name="tipo_capacitación" id="tipo_capacitación" rows="3"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="otras_capacitaciones">¿Requiere su personal otras capacitaciones?</label>
                                       <textarea class="form-control" name="requiere_otras_capacitaciones" id="otras_capacitaciones" rows="3"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                        </div>
                        <!-- ./card-body -->
                     </div>
                     <div class="card card-info">
                        <div class="card-header">
                           <h3 class="card-title">Condiciones Laborales</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-12 col-sm-12 col-xl-6">
                                 <div class="card card-light">
                                    <div class="card-header">
                                       <h3 class="card-title">Condiciones físicas del lugar de trabajo</h3>

                                       <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                       </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <Label>Mobiliario Adecuado</Label>
                                          </div>
                                          <div class="col-sm-6 col-12">
                                             <div class="row mt-1 si_no_icons">
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_1" id="r_si_preg1" class="resp_si" value="1">
                                                   <label for="r_si_preg1">
                                                      <i class="fas fa-check-circle"></i>
                                                   </label>
                                                </div>
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_1" id="r_no_preg1" class="resp_no" value="0">
                                                   <label for="r_no_preg1">
                                                      <i class="fas fa-times-circle icon_no"></i>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>


                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <Label>Espacio físico cómodo</Label>
                                          </div>
                                          <div class="col-sm-6 col-12">
                                             <div class="row mt-1 si_no_icons">
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_2" id="r_si_preg2" class="resp_si" value="1">
                                                   <label for="r_si_preg2">
                                                      <i class="fas fa-check-circle"></i>
                                                   </label>
                                                </div>
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_2" id="r_no_preg2" class="resp_no" value="0">
                                                   <label for="r_no_preg2">
                                                      <i class="fas fa-times-circle icon_no"></i>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <Label>Buena iluminación</Label>
                                          </div>
                                          <div class="col-sm-6 col-12">
                                             <div class="row mt-1 si_no_icons">
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_3" id="r_si_preg3" class="resp_si" value="1">
                                                   <label for="r_si_preg3">
                                                      <i class="fas fa-check-circle"></i>
                                                   </label>
                                                </div>
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_3" id="r_no_preg3" class="resp_no" value="0">
                                                   <label for="r_no_preg3">
                                                      <i class="fas fa-times-circle icon_no"></i>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <Label>Buena ventilación</Label>
                                          </div>
                                          <div class="col-sm-6 col-12">
                                             <div class="row mt-1 si_no_icons">
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_4" id="r_si_preg4" class="resp_si" value="1">
                                                   <label for="r_si_preg4">
                                                      <i class="fas fa-check-circle"></i>
                                                   </label>
                                                </div>
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_4" id="r_no_preg4" class="resp_no" value="0">
                                                   <label for="r_no_preg4">
                                                      <i class="fas fa-times-circle icon_no"></i>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <Label>Herramientas adecuadas</Label>
                                          </div>
                                          <div class="col-sm-6 col-12">
                                             <div class="row mt-1 si_no_icons">
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_5" id="r_si_preg5" class="resp_si" value="1">
                                                   <label for="r_si_preg5">
                                                      <i class="fas fa-check-circle"></i>
                                                   </label>
                                                </div>
                                                <div class="col-6">
                                                   <input type="radio" name="cond_laboral_preg_5" id="r_no_preg5" class="resp_no" value="0">
                                                   <label for="r_no_preg5">
                                                      <i class="fas fa-times-circle icon_no"></i>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>



                                    </div>
                                    <!-- /.card-body -->


                                 </div>
                                 <!-- /.card -->
                              </div>

                              <div class="col-12 col-sm-12 col-xl-6">
                                 <div class="card card-light">
                                    <div class="card-header">
                                       <h3 class="card-title">Prestaciones Laborales</h3>

                                       <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                       </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">



                                       <div class="row mb-2">
                                          <div class="col-12 col-sm-6">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Salario Mínimo</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_1" id="r_si_preg6" class="resp_si" value="1">
                                                         <label for="r_si_preg6">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_1" id="r_no_preg6" class="resp_no" value="0">
                                                         <label for="r_no_preg6">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Indermnización</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_2" id="r_si_preg7" class="resp_si" value="1">
                                                         <label for="r_si_preg7">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_2" id="r_no_preg7" class="resp_no" value="0">
                                                         <label for="r_no_preg7">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                       <!--/.FILA -->

                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Bonificación</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_3" id="r_si_preg8" class="resp_si" value="1">
                                                         <label for="r_si_preg8">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_3" id="r_no_preg8" class="resp_no" value="0">
                                                         <label for="r_no_preg8">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>IGSS</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_4" id="r_si_preg9" class="resp_si" value="1">
                                                         <label for="r_si_preg9">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_4" id="r_no_preg9" class="resp_no" value="0">
                                                         <label for="r_no_preg9">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                       <!--/.FILA -->
                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Aguinaldo</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_5" id="r_si_preg10" class="resp_si" value="1">
                                                         <label for="r_si_preg10">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_5" id="r_no_preg10" class="resp_no" value="0">
                                                         <label for="r_no_preg10">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Paga ISR</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_6" id="r_si_preg11" class="resp_si" value="1">
                                                         <label for="r_si_preg11">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_6" id="r_no_preg11" class="resp_no" value="0">
                                                         <label for="r_no_preg11">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                       <!--/.FILA -->
                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Bono 14</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_7" id="r_si_preg12" class="resp_si" value="1">
                                                         <label for="r_si_preg12">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_7" id="r_no_preg12" class="resp_no" value="0">
                                                         <label for="r_no_preg12">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Incentivos</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_8" id="r_si_preg13" class="resp_si" value="1">
                                                         <label for="r_si_preg13">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_8" id="r_no_preg13" class="resp_no" value="0">
                                                         <label for="r_no_preg13">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/.FILA -->
                                       <div class="row mb-2">
                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Vacaciones</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_9" id="r_si_preg14" class="resp_si" value="1">
                                                         <label for="r_si_preg14">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_9" id="r_no_preg14" class="resp_no" value="0">
                                                         <label for="r_no_preg14">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-sm-6 col-12">
                                             <div class="row">
                                                <div class="col-sm-8 col-12">
                                                   <Label>Extras</Label>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                   <div class="row mt-1 si_no_icons">
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_10" id="r_si_preg15" class="resp_si" value="1">
                                                         <label for="r_si_preg15">
                                                            <i class="fas fa-check-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-6">
                                                         <input type="radio" name="prest_laboral_preg_10" id="r_no_preg15" class="resp_no" value="0">
                                                         <label for="r_no_preg15">
                                                            <i class="fas fa-times-circle icon_no"></i>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                       <!--/.FILA -->

                                    </div>
                                    <!-- /.card-body -->
                                 </div>
                                 <!-- /.card -->
                              </div>
                           </div>
                           <!-- /.row -->
                        </div>
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->

               </div>
               <!-- row -->

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