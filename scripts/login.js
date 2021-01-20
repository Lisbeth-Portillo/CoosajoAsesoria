function login() {
    usuarioo = $("#usuarioL").val();
    password = $("#passwordL").val();
    //validamos campos
    if (password == "" || usuarioo == "") {
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Todos los datos son necesarios');
    } else {
        $.post("../ajax/usuario.php?op=verificar", { "usuarioo": usuarioo, "password": password },
            function(data) {
                if (data != "null") {
                    if ($_SESSION['Rol_idRol'] == 1) {
                        $(location).attr("href", "vistas/jefe");
                    }
                    if ($_SESSION['Rol_idRol'] == 2) {
                        $(location).attr("href", "vistas/asesor");
                    }
                    if ($_SESSION['Rol_idRol'] == 3) {
                        $(location).attr("href", "vistas/asociado");
                    }

                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error('Los datos ingresados son inválidos');
                }
            });
    }
};

function registro() {
    logina = $("#usuarioR").val();
    clavea = $("#passwordR").val();
    clavea = $("#passwordR").val();
    alert(logina);

    $.post("../ajax/usuario.php?op=guardaryeditar", { "logina": logina, "clavea": clavea },
        function(data) {
            if (data != "null") {
                $(location).attr("href", "login.html");
            } else {
                console.log('dfasdf');
                bootbox.alert("Usuario y/o Password incorrectos");
            }
        });
};