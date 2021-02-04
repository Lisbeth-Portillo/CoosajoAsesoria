<?php
include "../../config/Conexion.php";
$query0=$conexion->query("SELECT * FROM municipios WHERE Departamento_idDepartamento=$_GET[departamento]");
$municipio = array();
while($r=$query0->fetch_object()){ $municipio[]=$r; }
if(count($municipio)>0){
print "<option value=''> Seleccione el municipio </option>";
foreach ($municipio as $m) {
	print "<option value='$m->idMunicipios'>$m->Municipio</option>";
}
}else{
print "<option value=''>-- No hay datos --</option>";
}
