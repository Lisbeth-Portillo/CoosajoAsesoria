//Funcion de registro 
function registro() {

    Usuario = $("#Usuario").val();
    Pass = $("#Pass").val();
    Correo = $("#Correo").val();

    if (Pass == "" || Usuario == "" || Correo == "") {
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Todos los datos son necesarios');
    }
    if (Correo != "") {
        //Validacion del correo 
        validarEmail(Correo);

        function validarEmail(Correo) {
            expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!expr.test(Correo)) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error('EL correo electronico es invalido');
            } else {
                $.ajax({
                    url: 'ajax/usuario.php?op=registro',
                    type: 'POST',
                    async: true,
                    datatype: 'json',
                    data: $('#registroU').serialize(),

                    success: function(response) {
                        if (response == 1) {
                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success('Registro exitoso');
                            $(location).attr("href", "vistas/asociado/");
                        }
                        if (response == 2) {
                            alertify.set('notifier', 'position', 'top-right');
                            alertify.error('El usuario / correo existente');
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

        }
    }
}

//Funcion de login
function login() {

    Usuario = $("#UsuarioL").val();
    Pass = $("#PassL").val();

    if (Pass == "" || Usuario == "") {
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Todos los datos son necesarios');
    } else {
        $.ajax({
            url: 'ajax/usuario.php?op=verificar',
            type: 'POST',
            async: true,
            datatype: 'json',
            data: $('#loginU').serialize(),

            success: function(response) {
                if (response == 1) {
                    $(location).attr("href", "vistas/jefe");
                }
                if (response == 2) {
                    $(location).attr("href", "vistas/asesor");
                }
                if (response == 3) {
                    $(location).attr("href", "vistas/asociado");
                }
                if (response == 4) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error('El usuario / contraseña incorrectos');
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

}

//Funcion al cerra modal - limpiar inputs
function closeModal() {
    $("#Usuario").val('');
    $("#Pass").val('');
    $("#Correo").val('');

    $("#UsuarioL").val('');
    $("#PassL").val('');

    check_pass();
}


//Comprobacion de contraseña Registro
$(document).ready(function() {
    $("#Pass").keyup(function() {
        check_pass();
    });

});

function check_pass() {
    var val = document.getElementById("Pass").value;
    var no = 0;
    if (val != "") {
        // Si la longitud de la contraseña es menor o igual a 6
        if (val.length <= 6) no = 1;

        // Si la longitud de la contraseña es superior a 6 y contiene cualquier alfabeto en minúsculas o cualquier número o carácter especial
        if (val.length > 6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))) no = 2;

        // Si la longitud de la contraseña es mayor que 6 y contiene alfabeto, número, carácter especial respectivamente
        if (val.length > 6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))) no = 3;

        // Si la longitud de la contraseña es superior a 6 y debe contener letras, números y caracteres especiales
        if (val.length > 6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) no = 4;

        if (no == 1 || no == 2) {
            $("#meter").animate({ width: '50px' }, 300);
            meter.style.backgroundColor = "red";
            document.getElementById("pass_type").innerHTML = "Débil";
        }

        if (no == 3) {
            $("#meter").animate({ width: '100px' }, 300);
            meter.style.backgroundColor = "orange";
            document.getElementById("pass_type").innerHTML = "Buena";
        }

        if (no == 4) {
            $("#meter").animate({ width: '150px' }, 300);
            meter.style.backgroundColor = "darkgreen";
            document.getElementById("pass_type").innerHTML = "Fuerte";
        }
    } else {
        meter.style.backgroundColor = "";
        document.getElementById("pass_type").innerHTML = "";
    }
}

//Mensaje al cierre por inactividad