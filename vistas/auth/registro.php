<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- CSS externo -->
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>CEDEC</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background: url("../../assets/img/registro.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="div">
        <form method="POST" class="formulario" style="margin-top:3rem" id="registroU">
            <i class="fas fa-user-plus fa-8x fa-lg" style="color:darkblue"></i>
            <br><br>
            <h2>CEDEC</h2>
            <h6>Centro de Emprendimiento y Desarrollo</h6>
            <h6>Empresarial Coperativo</h6>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fa fa-user-check"></i>
                    <input id="usuarioR" class="form-control-lg" name="usuarioR" value="" type="text" placeholder="Nombre de usuario" autofocus>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-envelope  icon"></i>
                    <input id="correoR" class="form-control-lg  " type="email" placeholder="Correo" name="correoR" value="">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-unlock-alt icon"></i>
                    <input id="passwordR" type="password" class="form-control-lg" value="" name="passwordR" placeholder="Contraseña">
                </div>
                <p>Al registrarse acepta nuestros términos y condiciones de uso y políticas de privacidad <a href="">Leer términos y condiciones</a></p>

                <input type="submit" value="Registrarse" class="button">
            </div>
        </form><br>
        <div class="coosajo">
            <br><br><br><br><br><br><br>
            <img src="../../assets/img/logo.png" width="350px" height="50px" alt="">
        </div>
    </div>
</body>
  <!-- jQuery -->
  <script src="../../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="../../scripts/login.js"></script>  
  <script src="../../assets/alertify/alertify.js"></script>
</html>