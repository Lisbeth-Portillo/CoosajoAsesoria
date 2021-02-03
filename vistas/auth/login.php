<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- CSS externo -->
    <link rel="stylesheet" href="../../assets/css/login.css">
    
  <!-- Alertify-->
  <link rel="stylesheet" href="../../assets/alertify/css/alertify.css">
    <title>CEDEC</title>
</head>
<style>
    body {
        background: url("../../assets/img/login.jpg");
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>
    <div class="div">
        <form method="POST" class="formulario" id="loginU">
            <br>
            <i class="fas fa-user-circle fa-10x fa-lg" style="color:darkblue"></i>
            <br><br>
            <h3>CEDEC</h3>
            <h6>Centro de Emprendimiento y Desarrollo</h6>
            <h6>Empresarial Coperativo</h6>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-envelope  icon"></i>
                    <input id="usuarioL" class="form-control-lg" type="text" placeholder="Usuario" name="usuarioL" value="">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-unlock-alt icon"></i>
                    <input id="passwordL" type="password" class="form-control-lg " value="" name="passwordL" placeholder="Contraseña">
                </div>
                <div class="alert"><?php echo isset($alert)? $alert : '';  ?></div>
                
                <input type="submit" value="Registrarse" class="button">
            </div>
        </form><br>
        <div class="coosajo">
            <br><br><br>
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