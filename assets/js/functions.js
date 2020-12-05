

$("input[name=total_empleados]").click(function(){
    alert("hola mundo");
})

/*************************CARTA ASOCIADO/*************************/
$(".carta .firma #texto_firma").keyup(function(){
    let input = $(this)
    let firma = input.text()
    $(".almacenador_texto_firma").val(firma)
})
/*****************************************************************/


