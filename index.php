<?php
?>
<!DOCTYPE html>
<html lang="es">

<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEDEC</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.css">
  <!-- Alertify-->
  <link rel="stylesheet" href="assets/alertify/css/alertify.css">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index.css">

  <!-- CSS externo -->
  <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

  <div class="text-center">

    <p class="h2 m-5"> CEDEC </p>
    <p> Centro de Emprendimiento y
      <br> Desarrollo Empresarial Cooperativo
    </p>
    <h1>Bienvenido Asociado </h1>

    <!-- Boton de registro -->
    <button type="button" class="button1" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#registro">
      Registrarse
    </button>

    <!-- Modal -->
    <div class="modal fade" id="registro" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Registrarte</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal();">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background: url('assets/img/registro.jpg'); background-size:cover">
            <form method="POST" id="registroU" name="registroU" onsubmit="event.preventDefault(); registro();">
              <h2>CEDEC</h2>
              <h6>Centro de Emprendimiento y Desarrollo <br> </h6>
              <h6>Empresarial Coperativo</h6>

              <!-- Usuario -->
              <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">
                    <i class="fa fa-user-check"></i>
                  </span>
                </div>
                <input type="text" name="Usuario" id="Usuario" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" autocomplete="off">
              </div>

              <!-- Correo -->
              <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1" autocomplete="off">
              </div>

              <!-- Contraseña -->
              <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">
                    <i class="fas fa-unlock-alt"></i>
                  </span>
                </div>
                <input type="password" name="Pass" id="Pass" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" autocomplete="off">
                <span class="input-group-addon">
                  <div id="meter_wrapper">
                    <span id="pass_type"> </span>
                    <div id="meter"> </div>
                  </div>
                </span>
              </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg mt-3 mb-3">Registrarse</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Boton de login -->

    <button type="button" class="button2" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#login">
      Inicio de sesión
    </button>

    <!-- Modal -->
    <div class="modal fade" id="login" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Inicio de sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal();">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background: url('assets/img/login.jpg'); background-size:cover">
            <form method="POST" id="loginU">
              <h2>CEDEC</h2>
              <h6>Centro de Emprendimiento y Desarrollo <br> </h6>
              <h6>Empresarial Coperativo</h6>

              <!-- Usuario -->
              <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">
                    <i class="fa fa-user-check"></i>
                  </span>
                </div>
                <input type="text" name="UsuarioL" id="UsuarioL" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" autocomplete="off">
              </div>

              <!-- Contraseña -->
              <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">
                    <i class="fas fa-unlock-alt"></i>
                  </span>
                </div>
                <input type="password" name="PassL" id="PassL" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" autocomplete="off">
              </div>

            </form>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg mt-3 mb-3" onclick="login()">Iniciar sesión</button>
          </div>
        </div>
      </div>
    </div>
    <!--  <a href="vistas/auth/registro.php">Registrarse</a>
            <a class="button2" href="vistas/auth/login.php">Iniciar sesión</a>-->



  </div>

  <footer class="m-5  text-center">
    <img src="assets/img/logo.png" alt="CoosajoRL">
  </footer>
  <!--Inicializacion del modal -->
  <script>
    //$('#registro').modal(options);
    //$('#login').modal(options);
  </script>
  <!-- Bootstrap 4 -->

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="scripts/login.js"></script>
  <script src="assets/alertify/alertify.js"></script>
</body>

</html>
<?php
//}
?>