<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Permiso{ 


	//implementamos nuestro constructor
public function __construct(){

}
//


//Buscar empresa 
public function buscar($empresa,$asesor){
	$sql="SELECT 
                e.NombreEmpresa,
                e.Telefono,
                l.NombreCompleto,
                s.NombreSec
            FROM detalleempresa AS d
            INNER JOIN lineabase AS l
            ON d.Linebase_idLineabase = l.idLineabase
            INNER JOIN empresa AS e
            ON e.idEmpresa = d.Empresa_idEmpresa
            INNER JOIN sector AS s 
            ON s.idSector = e.Sector_idSector
            WHERE e.NombreEmpresa LIKE '%$empresa%'
            AND l.Usuarios_idUsuarios ='$asesor' ";
                return ejecutarConsulta($sql);
}

//Sesiones de la empresa
public function sesiones($empresa,$asesor){
	$sql="SELECT
            count(a.idAgenda) AS sesiones
            FROM agenda AS a
            INNER JOIN detalleempresa AS d
            ON a.detalleempresa_idDetalleEmpresa = d.idDetalleEmpresa
            INNER JOIN empresa AS e 
            ON e.idEmpresa = d.Empresa_idEmpresa
            WHERE e.NombreEmpresa LIKE '%$empresa%'
            AND l.Usuarios_idUsuarios ='$asesor'";
        return ejecutarConsulta($sql);
}

//Buscar sesiones por empresario
public function sesionesE($empresa,$asesor,$propietario){
	$sql="	SELECT
    a.idAgenda,
    a.FechaAgenda,
    a.HoraInicio,
    a.HoraFinal
       FROM agenda AS a
        INNER JOIN detalleempresa AS d
        ON a.detalleempresa_idDetalleEmpresa = d.idDetalleEmpresa
        INNER JOIN lineabase AS l
        ON d.Linebase_idLineabase = l.idLineabase
        INNER JOIN empresa AS e
        ON e.idEmpresa = d.Empresa_idEmpresa
        INNER JOIN sector AS s 
        ON s.idSector = e.Sector_idSector
        WHERE l.NombreCompleto = '$propietario'
        AND e.NombreEmpresa = '$empresa'
        AND l.Usuarios_idUsuarios = '$asesor'";
        return ejecutarConsulta($sql);
}
}
