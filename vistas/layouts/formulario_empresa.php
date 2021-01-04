<div class="formulario_empresa card card-primary">
    <div class="card-header pt-2 pb-2">
        <h5 class="text-center my-1 titulo_card">Información general de la empresa</h5>
        <div class="card-tools float-right">
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


        <div class="pt-2 pb-2">
            <h5 class="alert-primary text-center py-2 mx-2 rounded-top">Condiciones Laborales</h5>
        </div>


        <div class="px-2 px-lg-3 px-xl-4">
            <div class="row">
                <!-- PRIMER TARJETA -->
                <div class="col-12 col-sm-12 col-xl-6">
                    <div class="card card-success">
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
                    <!-- /.primer card -->


                </div>
                <!--/.PRIMER COLUMNA -->

                <!-- SEGUNDA TARJETA -->
                <div class="col-12 col-sm-12 col-xl-6">
                    <div class="card card-success">
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
                    <!-- /card -->
                </div>
                <!--/.SEGUNDA COLUMNA -->
            </div>
            <!-- /.row -->

            <!-- <div class="row ">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend ">
                                <span class="input-group-text bg-primary border-primary" id="inputGroup-sizing-sm">Filtro de negocio</span>
                            </div>
                            <select class="form-control" id="filt_negocio" required>
                                <option selected>Seleccionar</option>
                                <option value="1">Microcréditos</option>
                                <option value="2">Mipyme</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 align-content-center">
                        <button type="button" class="btn btn-primary btn-sm float-right">Agregar nueva empresa/negocio</button>
                    </div>
                </div> -->

        </div>
    </div>
    <!-- ./card-body -->
</div>