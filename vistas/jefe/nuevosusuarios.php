<!DOCTYPE html>
<html lang="en">

<head>
    <title>NuevoUsuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url(https://i.pinimg.com/474x/f0/bb/e8/f0bbe822b0e0ca7554b88ae060062a65.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        margin-top: 100px;
    }
    
    #nue {
        height: 50px;
        width: 500px;
        margin: 0px auto;
        text-align: center;
    }
    
    table {
        border: black 1px solid;
        width: 100%;
        border-collapse: separate;
        margin: 3px;
        background-color: white;
    }
    
    td,
    th {
        border: black 1px solid;
    }
    
    .usu {
        background-color: #31B404;
        text-align: center;
        border-bottom: black 1px solid;
        color: white;
    }
    
    .bor {
        border: black 1px solid;
    }
    
    .usua {
        border: black 1px solid;
        background-color: #31B404;
        color: white;
    }
    
    #x {
        color: red;
    }
    
    #edi {
        color: #DFD52F;
    }
    
    #key {
        color: #D8CC05;
    }
</style>

<body>
    <div class="general">
        <div id="nue"><br>
            <div class="bor">
                <div class="usu">Crear Usuario</div><br>
                <label>Nombre Usuario:</label><input type="text" name="usuario" id=""><br>
                <label>Contraseña: </label><input type="password" name="pass" value=""><br>


                <button type="button" class="btn btn-primary">Crear</button>
                <br><br>
            </div><br><br>
            <table class="uno">
                <div class="usua">Usuarios Activos</div>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Permisos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ludy López</td>
                        <td>062018López</td>
                        <td>Asesor</td>
                        <td>

                            <a href="asociado.html"> <svg width="2em" height="2em" viewBox="0 0 16 16" id="edi" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  
                                </svg></a>



                            <a href="asociado.html"> <svg width="2em" height="2em" viewBox="0 0 16 16" id="x" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                  </svg></a>


                        </td>
                        <td>
                            <a href="asociado.html"><svg width="2em" height="2em" viewBox="0 0 16 16" id="key" class="bi bi-key-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                              </svg></a>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
</body>

</html>