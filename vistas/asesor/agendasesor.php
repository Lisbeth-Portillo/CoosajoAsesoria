<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AgendaAsesor</title>
</head>
<style>
    .general {
        margin: auto;
        margin-top: 60px;
        text-align: center;
    }
    
    #izqui {
        float: right;
        margin-right: 25px;
        border: black 1px solid;
        margin-top: 70px;
        margin-left: 50px;
    }
    
    #dere {
        margin-top: 50px;
        margin-left: 25px;
        float: right;
        height: 450px;
    }
    
    h5 {
        text-align: center;
    }
    
    body {
        background-image: url(https://i.pinimg.com/474x/f0/bb/e8/f0bbe822b0e0ca7554b88ae060062a65.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    
    table {
        /* border: black 1px solid;*/
        width: 100%;
        border-collapse: separate;
        margin: 3px;
    }
    
    td,
    th {
        border: black 1px solid;
    }
    
    .fe {
        border: black 1px solid;
        max-width: 300px;
        text-align: center;
        margin-left: 500px;
    }
    
    p {
        margin-top: 20px;
    }
    
    .uno {
        margin-right: 4px;
    }
</style>

<body>
    <div class="general">
        <div class="fe">
            <b><p>Fecha:<input type="date" name="fecha" size="40"></p></b>
        </div>
        <div id="izqui"><br>
            <u><h5>Formaciones</h5></u>
            <div>
                <h5>Eventos del día</h5>
                <table class="uno">
                    <thead>
                        <tr>
                            <th>Evento</th>
                            <th>Hora</th>
                            <th>Inscritos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Charla</th>
                            <td>3:00PM</td>
                            <td>8</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete seccion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success">Detallos de eventos</button>
            </div><br><br>
            <div class="">
                <h5>Eventos próximos</h5>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Evento</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Charla</th>
                            <td>3:00PM</td>
                            <td>18/11/2020</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete seccion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="dere">
            <div class="">
                <h5>Asesorías</h5>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Empresario</th>
                            <th scope="col">Empresa/Negocio</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Reagendar</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Andrea Aguilar</th>
                            <td>MCD</td>
                            <td>3:00PM</td>
                            <td>18/11/2020</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete seccion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success">Agregar Asesoría</button>
            </div><br><br><br><br>
            <div class="">
                <h5>Microcréditos</h5>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Empresario</th>
                            <th scope="col">Empresa/Negocio</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Reagendar</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Andrea Aguilar</th>
                            <td>MCD</td>
                            <td>3:00PM</td>
                            <td>18/11/2020</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete seccion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success">Agregar Microcrédito</button>
            </div>
        </div>
    </div>
</body>

</html>