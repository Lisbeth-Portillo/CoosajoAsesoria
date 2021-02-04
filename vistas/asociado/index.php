<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
  echo $_SESSION['Usuario'];
  header("Location: ../../index.php");
} else {

  include '../../config/Conexion.php';
  require '../layouts/header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-dark ml-1 ml-lg-0">Línea base de desarrollo empresarial</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row ">
          <div class="col-md-12 mb-3">
            <div class="card card-primary">
              <div class="card-header pt-2 pb-2">
                <h5 class="text-center my-1">Datos del Empresario</h5>
                <div class="card-tools float-right">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body px-2 px-lg-3 px-xl-4">
                <div class="row">

                  <!-- PRIMER TARJETA -->
                  <div class="col-sm-6 col-12">
                    <div class="card card-success">
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
                                ?>
                              </select>
                            </div>
                          </div>
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

                        </div>
                        <!-- /row de campos inline -->
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <div class="form-group">
                              <label>Departamento</label>
                              <select class="form-control select2" id="departamento" name="departamento">
                                <option selected="selected">Seleccione la departamento</option>

                                <?php
                                //Datos de la escolaridad
                                $query2 = mysqli_query($conexion, "SELECT * FROM departamentos");


                                $result2 = mysqli_num_rows($query2);
                                if ($result2 > 0) {
                                  while ($data2 = mysqli_fetch_array($query2)) {
                                ?>
                                    <option value="<?php echo $data2["idDepartamento"]; ?>"><?php echo $data2["Departamento"]; ?></option>
                                <?php    }
                                }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-12">
                            <div class="form-group">
                              <label>Municipio</label>
                              <select class="form-control select2" id="municipio" name="municipio">
                                <option selected="selected">Seleccione el municipio </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
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

                    <div class="card card-success">
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
                    <div class="card card-success">
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


          <<<<<<< HEAD <div class="col-md-12">
            <div class="card card card-primary">
              <div class="card-header pt-2 pb-2">
                <h5 class="text-center my-1">Información general de la empresa</h5>
              </div>
              <!-- /.card-header -->


              <div class="card-body">
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
                      <label>Escolaridad</label>
                      <select class="form-control select2">
                        <option selected="selected">Seleccione sector</option>

                        <?php
                        //Datos de la escolaridad
                        $query3 = mysqli_query($conexion, "SELECT * FROM sector");


                        $result3 = mysqli_num_rows($query3);
                        if ($result3 > 0) {
                          while ($data3 = mysqli_fetch_array($query3)) {
                        ?>
                            <option value="<?php echo $data3["idSector"]; ?>"><?php echo $data3["NombreSec"]; ?></option>
                        <?php    }
                        }

                        mysqli_close($conexion);
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inversioninicial">Inversión Inicial/Actual</label>
                      <input type="number" step=".01" name="inversioninicial" id="inversioninicial" class="form-control solodosdecimales" placeholder="0.00">
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-gruop">
                          <label for="inversionpropia">Inversión Propia</label>
                          <input id="inversionpropia" name="inversionpropia" type="number" step=".01" class="form-control solodosdecimales" placeholder="0.00">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-gruop">
                          <label for="credito">Crédito</label>
                          <input id="credito" name="credito" type="number" step=".01" class="form-control solodosdecimales" placeholder="0.00">
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
                          <input id="inversionterceros" name="inversionterceros" type="number" step=".01" class="form-control solodosdecimales" placeholder="0.00">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-gruop">
                          <label for="otrainversion">Otro</label>
                          <input id="otrainversion" name="otrainversion" type="number" step=".01" class="form-control solodosdecimales" placeholder="0.00">
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
                            <input type="number" step=".01" class="form-control solodosdecimales" name="montoanual1" id="montoanual1" placeholder="0.00">
                          </div>
                          <div class="form-group">
                            <input type="number" step=".01" class="form-control solodosdecimales" name="montoanual2" placeholder="0.00">
                          </div>
                          <div class="form-group">
                            <input type="number" step=".01" class="form-control solodosdecimales" name="montoanual3" placeholder="0.00">
                          </div>
                        </div>
                        <div class="col-4">
                          <label for="montomensual1">Monto Mensual</label>
                          <div class="form-group">
                            <input type="number" step=".01" class="form-control solodosdecimales" name="montomensual1" id="montomensual1" placeholder="0.00">
                          </div>
                          <div class="form-group">
                            <input type="number" step=".01" class="form-control solodosdecimales" name="montomensual2" placeholder="0.00">
                          </div>
                          <div class="form-group">
                            <input type="number" step=".01" class="form-control solodosdecimales" name="montomensual3" placeholder="0.00">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="alert alert-primary mt-3 py-1" role="alert">
                        ¿En qué ha invertido su empresa en los útimos 3 años?
                      </div>
                      <div class="row">
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
                            <div class="form-check mb-1">
                              <input class="form-check-input" type="checkbox" id="invertidochekc6" name=invertido_ultimos3anios[] value="6">
                              <label class="form-check-label" for="invertidochekc6">Otros</label>
                            </div>
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
                            <input type="number" name="emp_hombres" class="form-control" placeholder="0">
                          </div>
                        </div>
                        <div class="col-6 col-md-3">
                          <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="addon-wrapping">
                                <i class="fas fa-female"></i>
                              </span>
                            </div>
                            <input type="number" name="emp_mujeres" class="form-control" placeholder="0">
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
                            <input name="emp_hombres_14_24" type="number" class="form-control" placeholder="0">
                          </div>
                        </div>
                        <div class="col-6 col-md-3">
                          <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="addon-wrapping">
                                <i class="fas fa-female"></i>
                              </span>
                            </div>
                            <input type="number" name="emp_mujeres_14_24" class="form-control" placeholder="0">
                          </div>
                        </div>

                      </div>

                      <div class="row mt-3">
                        <div class="col-12 col-md-6">
                          Total de empleados
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="input-group flex-nowrap">
                            <input name="total_empleados" type="number" class="form-control bg-white" placeholder="0" disabled>
                          </div>
                        </div>


                      </div>

                    </div>



                  </div>

                </div>


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


              <h3 class="text-secondary font-weight-normal ml-2 ml-lg-1">
                Empresas del empresario
              </h3>
              <div class="col-md-12 mb-3 empresas">
                <!-- Contenido dinámico -->


                <!-- Mientras este vacio -->
                <div class="text-center d-block mt-5 s_loader">
                  <h4 class="text-center font-weight-light text-secondary">Ninguna empresa agregada</h4>
                </div>
              </div>

              <div class="col-12">
                <div class="row ">
                  <div class="col-md-6">

                  </div>
                  <div class="col-md-6 align-content-center">
                    <button type="button" class="btn btn-primary float-right" id="nueva_empresa_btn" title="Agregar nueva empresa/negocio">Añadir</button>
                  </div>
                </div>
              </div>

            </div>
            <!-- row -->
        </div>
        <!-- /.content-fruid -->
    </section>
    <!-- section content -->
  </div>
  <!-- content-wrapper -->
  </div>
  <!-- ./wrapper -->
  <!-- Select dinamico departamento/municipio -->

<?php
  require '../layouts/scripts.php';
}
?>
<script type="text/javascript">
    $(document).ready(function() {
      $("#departamento").change(function() {
        $.get("municipio.php", "departamento=" + $("#departamento").val(), function(data) {
          $("#municipio").html(data);
          console.log(data);
        });
      });
    });
  </script>
</body>

</html>