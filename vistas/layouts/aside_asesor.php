<?php

function aside($str_ruta){

  /*separar la ruta (cadena) en palabras (array)*/
  $ruta_split = explode('\\', $str_ruta);
  //print_r($ruta_split);
   
  //array revertido
  $ruta_split_reverse = array_reverse($ruta_split);


   if (!empty($ruta_split[5])) {
      if ($ruta_split[5] == "asesor") {
         /*Si la ruta asesor existe mostrar contenido en el aside */
         ?>
         <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="../asociado/" class="brand-link">
               <img src="../../../assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
               <span class="brand-text font-weight-light text-light">Asesor</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar Menu -->
               <nav class="mt-4">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     
                     <!-- AGENDA -->
                     <li class="nav-item has-treeview">
                        <a href="agenda.php" class="nav-link <?php echo $ruta_split_reverse[0] == 'agenda.php' ? 'active' : '';?>">
                           <i class="nav-icon fas fa-calendar-alt"></i>
                           <p>
                              Agenda
                           </p>
                        </a>
                     </li>
                     
                     <!-- ASESORIAS -->
                     <li class="nav-item <?php echo $ruta_split_reverse[1] == 'asesorias' ? 'menu-open' : '';?>">
                        <a href="" class="nav-link <?php echo $ruta_split_reverse[1] == 'asesorias' ? 'active' : '';?>">
                           <i class="nav-icon fas fa-handshake"></i>
                           <p>Asesorias
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <!-- MENU DE ASESORIAS -->
                        <ul class="nav nav-treeview mb-2">
                           <!-- RESUMEN -->
                           <li class="nav-item">
                              <a href="../resumen.php" class="nav-link <?php echo $ruta_split_reverse[0] == 'resumen.php' ? 'active' : '';?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Resumen</p>
                              </a>
                           </li>

                           <!-- DETALLE POR EMPRESA -->
                           <li class="nav-item">
                              <a href="../buscar_empresa.php" class="nav-link <?php echo $ruta_split_reverse[0] == 'buscar_empresa.php' ? 'active' : '';?>">
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


                     <li class="nav-item <?php echo $ruta_split_reverse[1] == 'formacion' ? 'menu-open' : '';?>">
                        <a href="#" class="nav-link <?php echo $ruta_split_reverse[1] == 'formacion' ? 'active' : '';?>">
                           <i class="nav-icon fas fa-align-justify"></i>
                           <p>Formación
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview mb-2">
                           <li class="nav-item">
                              <a href="eventos.php" class="nav-link <?php echo $ruta_split_reverse[0] == 'eventos.php' ? 'active' : '';?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Eventos</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="add.php" class="nav-link <?php echo $ruta_split_reverse[0] == 'add.php' ? 'active' : '';?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Crear evento</p>
                              </a>
                           </li>
                        </ul>
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
   <?php



      } else {
         echo 'esta vacio';
      }
   } else {
      //si la ruta /asesor no existe
   }


   ?>

<?php
} 
?>