<?php
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Permiso
{


    //implementamos nuestro constructor
    public function __construct()
    {
    }



    //Filtro por fecha agenda asesoria / microcreditos
    public function agenda($asesor, $fecha, $filtro)
    {
        $sql = "SELECT 
                    l.NombreCompleto,
                    e.NombreEmpresa,
                    a.HoraInicio,
                    a.HoraFinal,
                    a.FechaAgenda
                FROM agenda AS a
                INNER JOIN detalleempresa AS de
                on de.idDetalleEmpresa = a.detalleempresa_idDetalleEmpresa
                INNER JOIN empresa AS e 
                ON e.idEmpresa = de.Empresa_idEmpresa
                INNER JOIN lineabase AS l
                ON l.idLineabase = de.Linebase_idLineabase
                WHERE l.Usuarios_idUsuarios = '$asesor'
                AND a.FechaAgenda = '$fecha'
                AND l.Filtronegocio_idFiltronegocio = '$filtro'";

        return ejecutarConsultaSimpleFila($sql);
    }

    //Filtro por fecha formacion
    public function agendaFormacion($asesor, $fecha)
    {
        $sql = "SELECT 
                    Evento, 
                    HoraFormacion, 
                    Participantes
                FROM formaciones
                WHERE usuarios_idUsuarios = '$asesor'
                AND FechaFormacion = '$fecha'";

        return ejecutarConsultaSimpleFila($sql);
    }
}
