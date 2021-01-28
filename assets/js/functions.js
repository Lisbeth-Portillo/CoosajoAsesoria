var loader = "<div class=\"cargando\">\n" +
    "                <div class=\"spinner-border text-dark\" role=\"status\">\n" +
    "                    <span class=\"sr-only\">Loading...</span>\n" +
    "                </div>\n" +
    "             </div>";

var loader2 = "<div class=\"text-center py-3 cargando\">" +
    "<div class=\"spinner-grow text-success\" role=\"status\">" +
    "<span class=\"sr-only\">Loading...</span>" +
    "</div>" +
    "<div class=\"spinner-grow text-danger\" role=\"status\">" +
    "<span class=\"sr-only\">Loading...</span>" +
    "</div>" +
    "<div class=\"spinner-grow text-warning\" role=\"status\">" +
    "<span class=\"sr-only\">Loading...</span>" +
    "</div>" +
    "</div>";



var mensaje1default = `<tr>
                            <td colspan="3" rowspan="3" class="text-center font-weight-light py-3">
                                Seleccione un asociado
                            </td>
                        </tr>`;

/*************************LINEA BASE ASOCIADO/*************************/

//esta funcion hara que los campos acepten unicamente dos decimales para el manejo correcto de centavos
$(".solodosdecimales").change(function () {
    let numero = Number($(this).val())
    let conDecimal = numero.toFixed(2)
    $(this).val(conDecimal)
})


function ultimostresanios() {
    var fecha = new Date();
    var anio = fecha.getFullYear();
    $(".ultimostresanios input").each(function () {
        $(this).val(anio)
        anio--
    })
}
ultimostresanios();


$("body").on("click", ".check_otros", function(){
    if( $('#invertidochekc6').prop('checked') ) {
        $(".detalle_otros").css({"transform" : "scale(1)", "display" : "block"})
    }else{
        $(".detalle_otros").css({"transform" : "scale(0.5)", "display" : "none"})  
    }
})

$(".empresas").on("keyup", "input[name=nombreempresa]", function(){
    let input_nombre_empresa = $(this)
    let titulo_card = input_nombre_empresa.parents(".formulario_empresa").find(".titulo_card")
    let nombre_empresa = input_nombre_empresa.val().trim()
    
    if(nombre_empresa.length > 0){
        titulo_card.text(nombre_empresa)
    }else{
        titulo_card.text("Información general de la empresa") 
    }
    
    
    
    
})

/* $("input[name=total_empleados]").click(function(){
    alert("hola mundo");
}) */


/**PETICIONES AJAX */

$("#nueva_empresa_btn").click(function(){

    $.ajax({
        type: "GET",
        url: "../layouts/formulario_empresa.php",
        success: function (res) {
            $(".s_loader").remove()
            $(".empresas").append(res);
            
        }
    });
    
})

/*********************************************************************/






/*************************CARTA ASOCIADO/*************************/
/* $(".carta .firma #texto_firma").keyup(function(){
    let input = $(this)
    let firma = input.text()
    $(".almacenador_texto_firma").val(firma)
}) */
/*****************************************************************/




$(".select_asociado").change(function(){
    var id = $(this).val();

    if(id.length > 0){
        $.ajax({
            type: "POST",
            data: {id_asociado : id},
            url: "includes/empresas_de_asociado.php",
            success: function (res) {
                $(".empresas_de_asociado").html(res);
                
                $(function() {
                    $('#tablaempresas').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                        "lenguage" : "es"
                    });
                });
            }
        });
    }else{
        $(".empresas_de_asociado").html(mensaje1default)
    }
    
})
