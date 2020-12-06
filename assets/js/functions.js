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
/*********************************************************************/



$(".check_otros").click(function(){
    if( $('#invertidochekc6').prop('checked') ) {
        $(".detalle_otros").css({"transform" : "scale(1)", "display" : "block"})
    }else{
        $(".detalle_otros").css({"transform" : "scale(0.5)", "display" : "none"})  
    }
})


/* $("input[name=total_empleados]").click(function(){
    alert("hola mundo");
}) */

/*************************CARTA ASOCIADO/*************************/
/* $(".carta .firma #texto_firma").keyup(function(){
    let input = $(this)
    let firma = input.text()
    $(".almacenador_texto_firma").val(firma)
}) */
/*****************************************************************/


