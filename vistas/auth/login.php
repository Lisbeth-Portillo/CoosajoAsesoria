<?php
/**
 * Inicia sesión siempre y cuando esta este activa
 * Que no envie parametros vacios 
 * Y de último los valida con un query a la BBDD
 */
session_start();
if(!empty($_SESSION['active'])){
    header('location: sistema/');
}else{
    if(!empty($_POST)){
        if (empty($_POST['usuario']) || empty($_POST['contrase'])){
            $alert = "Ingrese un usuario y una contraseña";
        }else{
            include '../../config/Conexion.php';
            
            /**
             * Se utiliza la funcion mysqli_real_escape_string para escapar los caracteres y evitar SQL inyección
             * Se desencripta la contraseña para poder validarla
             */
            $user = mysqli_real_escape_string($conexion,$_POST['usuario']);
            $pass =md5(mysqli_real_escape_string($conexion,$_POST['contrase']));
            
            /**
             * Utilizacion de comillas mágicas en la consulta SQL para escapar los datos 
             * y no permitir insercciones de código
             */

            $query = mysqli_query($conexion,"SELECT * FROM usuarios where Usuario = '$user' and Pass = '$pass' and Rol_idRol = 3 and Estado = 'Activo'");
            mysqli_close($conexion);
            $result = mysqli_num_rows($query);
            
            if($result > 0){

                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUsuarios'] = $data['idUsuarios'];
                $_SESSION['Usuario'] = $data['Usuario'];
                $_SESSION['Rol_idRol'] = $data['Rol_idRol'];
                $_SESSION['Estado'] = $data['Estado'];

                header('location: ../asociado');
            }else{
                
                $alert = "El usuario o la clave son incorrectos";
                session_destroy();
            }

        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">

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
        background: url("../../assets/img/login.jpg");
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>
    <div class="div">
        <form method="POST" class="formulario" action="">
            <br>
            <i class="fas fa-user-circle fa-10x fa-lg" style="color:darkblue"></i>
            <br><br>
            <h3>CEDEC</h3>
            <h6>Centro de Emprendimiento y Desarrollo</h6>
            <h6>Empresarial Coperativo</h6>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-envelope  icon"></i>
                    <input id="email" class="form-control-lg" type="text" placeholder="Usuario" name="usuario" value="">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-unlock-alt icon"></i>
                    <input id="password" type="password" class="form-control-lg " value="" name="contrase" placeholder="Contraseña">
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

</html>