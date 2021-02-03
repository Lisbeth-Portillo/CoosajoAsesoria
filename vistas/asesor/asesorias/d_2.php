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
                  <div class="card-body mt-2">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalbitacora">
                        Nueva bitácora
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="modalbitacora" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Nueva Bitácora</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group row">
                                          <label for="Propietario" class="col-lg-3 col-form-label">Propietario</label>
                                          <div class="col-lg-9">
                                             <input type="text" class="form-control" id="Propietario" placeholder="Nombre completo" title="Dueño(a) del negocio">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="negocio" class="col-lg-3 col-form-label">Empresa</label>
                                          <div class="col-lg-9">
                                             <input type="text" class="form-control" id="negocio" placeholder="Nombre de empresa" title="Empresa/Negocio">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="ubicacion" class="col-lg-3 col-form-label">Ubicación</label>
                                          <div class="col-lg-9">
                                             <input type="text" class="form-control" id="ubicacion" placeholder="ej. Col. San Mateo 2, primera entrada">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group row">
                                          <label for="codigo" class="col-lg-3 col-form-label">Código</label>
                                          <div class="col-lg-9">
                                             <input type="text" class="form-control" id="Propietario" placeholder="02020">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="negocio" class="col-lg-3 col-form-label">Contacto</label>
                                          <div class="col-lg-9">
                                             <input type="text" class="form-control" id="negocio" placeholder="+502 0000 0000">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="ubicacion" class="col-lg-3 col-form-label">Asesor</label>
                                          <div class="col-lg-9 not_selectable">
                                             <input type="text" class="form-control bg-white" id="ubicacion" value="Ludy López" readonly>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12">
                                       <div class="form-group mt-3">
                                          <label for="" class="font-weight-normal">Observaciones</label>
                                          <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                       </div>
                                    </div>
                                    <!-- /.col -->

                                 </div>
                                 <!-- /.row -->
                              </div>
                              <div class="modal-footer justify-content-between">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                 <button type="button" class="btn btn-primary">Guardar</button>
                              </div>
                              <!-- <div class="modal-footer">
                                 <div class="row">
                                    <div class="col-12 text-center my-2 ">
                                       <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                       <button type="button" class="btn btn-info px-4">Crear</button>
                                    </div>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                     </div>


                     <div class="card card-info mt-4">
                        <div class="card-header">
                           <h5 class="card-title">Bitácora Sesión</h5>
                        </div>
                        <div class="card-body">
                           <p class="text-muted text-center">Bitácora Trabajo Administrativo</p>
                           <div class="row p-1 pr-1 mt-3">
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
                                    <div class="col-sm-9 not_selectable">
                                       <input type="text" class="form-control bg-white" id="ubicacion" value="Ludy López" readonly>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.col -->

                              <!-- /.col -->

                           </div>
                           <!-- /.row -->


                        </div>
                     </div>

                     <div class="mt-5">
                        <div class="alert alert-primary-light mt-4 " role="alert">
                           Sesión del día
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered text-center">
                              <thead>
                                 <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora de inicio</th>
                                    <th scope="col">Hora final</th>
                                    <th scope="col">Editar</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <th scope="row">1</th>
                                    <td>21/09/2020</td>
                                    <td>9:00 am</td>
                                    <td>10:00 am</td>
                                    <td>
                                       <button type="button" class="btn btn-warning text-light" data-toggle="modal" data-target="#sesionbitacoraedit">
                                          <i class="fas fa-edit pl-2 pr-1"></i>
                                       </button>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>

                     </div>

                     <div>
                        <div class="alert alert-primary-light mt-4 " role="alert">
                           Próxima sesión
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered text-center">
                              <thead>
                                 <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora de inicio</th>
                                    <th scope="col">Hora final</th>
                                    <th scope="col">Editar</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <th scope="row">1</th>
                                    <td>21/09/2020</td>
                                    <td>9:00 am</td>
                                    <td>10:00 am</td>
                                    <td>
                                       <button type="button" class="btn btn-warning text-light" data-toggle="modal" data-target="#sesionbitacoraedit">
                                          <i class="fas fa-edit pl-2 pr-1"></i>
                                       </button>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>

                     </div>


                     <div class="row">
                        <div class="col-12 text-right">
                           <button class="btn btn-success btn-sm border-success">Crear nueva sesión</button>
                           <button class="btn btn-success btn-sm border-success">Generar última sesión</button>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">Avances: </label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                        </div>

                        <div class="col-12">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">Temas tratados: </label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                        </div>


                        <div class="col-12">
                           <div class="">
                              <div class="alert alert-primary-light mt-4 " role="alert">
                                 Tareas
                              </div>
                              <div class="p-0">
                                 <table class="table table-bordered text-center">
                                    <thead>
                                       <tr class="table-success">
                                          <th scope="col">No</th>
                                          <th scope="col" colspan="3">Tarea</th>
                                          <th scope="col" colspan="2">Fecha de entrega</th>
                                          <th scope="col" colspan="2">Material</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th>45</th>
                                          <td colspan="3">Este es el nombre de una tarea</td>
                                          <td colspan="2">2012/051/5</td>
                                          <td colspan="2">
                                             <button type="button" class="btn btn-success text-light" data-toggle="modal" data-target="#subirmaterialmodal">
                                                Subir <i class="fas fa-upload pl-1"></i>
                                             </button>
                                             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#listadematerial">
                                                Consultar <i class="fas fa-list-ul pl-1"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <th>45</th>
                                          <td colspan="3">Tarea numero docientos doce</td>
                                          <td colspan="2">2012/051/5</td>
                                          <td colspan="2">
                                             <button type="button" class="btn btn-success text-light" data-toggle="modal" data-target="#subirmaterialmodal">
                                                Subir <i class="fas fa-upload pl-1"></i>
                                             </button>
                                             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#listadematerial">
                                                Consultar <i class="fas fa-list-ul pl-1"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>


                        <div class="col-12">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1" class="font-weight-normal">Observaciones: </label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                        </div>




                        <div class="col-12 text-center">
                           <button class="btn btn-success">Guardar cambios</button>
                        </div>

                     </div>
                  </div>

               </div>
            </div>
            <!-- /.container-fluid -->
         </section>
         <!-- /.section content -->
      </div>
      <!-- /.content wrapper -->

   </div>


   <!-- MODALS -->
   <!-- Modal editar sesiones de bitácoras -->
   <div class="modal fade" id="sesionbitacoraedit" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <label for="fecha2" class="font-weight-normal">Fecha</label>
                     <input type="date" class="form-control" id="fecha2" aria-describedby="fecha" value="2021-07-22">
                  </div>

                  <div class="form-row">
                     <div class="col">
                        <label for="" class="font-weight-normal">Hora inicial</label>
                        <input type="time" class="form-control" value="09:00">
                     </div>
                     <div class="col">
                        <label for="" class="font-weight-normal">Hora final</label>
                        <input type="time" class="form-control" value="10:00">
                     </div>
                  </div>

               </form>
            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="button" class="btn btn-success text-light">Guardar
                  <i class="fas fa-save pl-2 pr-1"></i>
               </button>
            </div>
         </div>
      </div>
   </div>


   <!-- Modal editar sesiones de bitácoras -->
   <div class="modal fade" id="subirmaterialmodal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               ....
            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
         </div>
      </div>
   </div>

   <!-- lista de materiales -->
   <div class="modal fade" id="listadematerial" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <table class="table table-borderless">
                  <thead>
                     <tr>
                        <th scope="col">Nombre archivo</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Opciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Larry the Bird</td>
                        <td colspan="2">32Mb</td>
                        <td>PDF</td>
                        <td>
                           <button class="btn btn-info">Ver
                              <i class="fas fa-eye"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Larry the Bird</td>
                        <td colspan="2">32Mb</td>
                        <td>PDF</td>
                        <td>
                           <button class="btn btn-info">Ver
                              <i class="fas fa-eye"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Larry the Bird</td>
                        <td colspan="2">32Mb</td>
                        <td>PDF</td>
                        <td>
                           <button class="btn btn-info">Ver
                              <i class="fas fa-eye"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Larry the Bird</td>
                        <td colspan="2">32Mb</td>
                        <td>PDF</td>
                        <td>
                           <button class="btn btn-info">Ver
                              <i class="fas fa-eye"></i>
                           </button>
                        </td>
                     </tr>
                     
                  </tbody>
               </table>
            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
         </div>
      </div>
   </div>



   <!-- /.wrapper -->
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
</body>

</html>