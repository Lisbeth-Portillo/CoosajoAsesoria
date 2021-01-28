<?php
include "../../../config/conexion1.php";

$id_asociado = $_POST["id_asociado"];

$resultado = mysqli_query($con, "SELECT * FROM `empresas_prueba` WHERE id_asociado = $id_asociado");

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td data-th="Codigo" id="idlibro"><?php echo $fila['id']; ?></td>
            <td data-th="Ejemplares"><?php echo $fila['nombre']; ?></td>
            <td>
                <a class="btn btn-info btn-sm text-white" href="detalle1asesoria.html">Ver detalles</a>
               
            </td>
        </tr>
    <?php
    }
} else { ?>

    <tr>
        <td colspan="3" rowspan="3" class="text-center font-weight-light py-3">
            No hay empresas registradas para este asociado
        </td>
    </tr>

<?php
}

?>