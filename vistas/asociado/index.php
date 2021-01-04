<?php
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
<?php
require '../layouts/scripts.php';
?>
</body>

</html>