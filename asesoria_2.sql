/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `asesoria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `asesoria`;

CREATE TABLE IF NOT EXISTS `agenda` (
  `idAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `HoraInicio` time NOT NULL,
  `HoraFinal` time DEFAULT NULL,
  `FechaAgenda` date NOT NULL,
  `detalleempresa_idDetalleEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idAgenda`),
  KEY `fk_agenda_detalleempresa1_idx` (`detalleempresa_idDetalleEmpresa`),
  CONSTRAINT `fk_agenda_detalleempresa1` FOREIGN KEY (`detalleempresa_idDetalleEmpresa`) REFERENCES `detalleempresa` (`idDetalleEmpresa`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `capacitacion` (
  `idCapacitacion` int(11) NOT NULL AUTO_INCREMENT,
  `Capacitacion` tinyint(1) NOT NULL,
  `TipoCapacitacion` varchar(150) DEFAULT NULL,
  `OtrasCapacitaciones` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idCapacitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `capacitacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `capacitacion` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cartacompromiso` (
  `idCartaCompromiso` int(11) NOT NULL AUTO_INCREMENT,
  `Ruta` varchar(1000) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`idCartaCompromiso`),
  UNIQUE KEY `idCartaCompromiso_UNIQUE` (`idCartaCompromiso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `cartacompromiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `cartacompromiso` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `comunidad` (
  `idComunidad` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL,
  PRIMARY KEY (`idComunidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `comunidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `comunidad` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `condicioneslab` (
  `idCondicionesLab` int(11) NOT NULL AUTO_INCREMENT,
  `Mobiliario` tinyint(1) DEFAULT NULL,
  `Espacio` tinyint(1) DEFAULT NULL,
  `Iluminacion` tinyint(1) DEFAULT NULL,
  `Ventilacion` tinyint(1) DEFAULT NULL,
  `Herramientas` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idCondicionesLab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `condicioneslab` DISABLE KEYS */;
/*!40000 ALTER TABLE `condicioneslab` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `credito` (
  `idCredito` int(11) NOT NULL AUTO_INCREMENT,
  `Persona` varchar(50) NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idCredito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `credito` DISABLE KEYS */;
/*!40000 ALTER TABLE `credito` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detallecredito` (
  `idDetalleCredito` int(11) NOT NULL AUTO_INCREMENT,
  `Credito_idCredito` int(11) NOT NULL,
  `Lineabase_idLineabase` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleCredito`),
  KEY `fk_DetalleCredito_Credito1_idx` (`Credito_idCredito`),
  KEY `fk_DetalleCredito_Asociado1_idx` (`Lineabase_idLineabase`),
  CONSTRAINT `fk_DetalleCredito_Credito1` FOREIGN KEY (`Credito_idCredito`) REFERENCES `credito` (`idCredito`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_DetalleCredito_Lineabase1` FOREIGN KEY (`Lineabase_idLineabase`) REFERENCES `lineabase` (`idLineabase`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detallecredito` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallecredito` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detalleempresa` (
  `idDetalleEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Linebase_idLineabase` int(11) NOT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleEmpresa`),
  KEY `fk_DetalleEmpresa_Asociado1_idx` (`Linebase_idLineabase`),
  KEY `fk_DetalleEmpresa_Empresa1_idx` (`Empresa_idEmpresa`),
  CONSTRAINT `fk_DetalleEmpresa_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_DetalleEmpresa_Lineabase1` FOREIGN KEY (`Linebase_idLineabase`) REFERENCES `lineabase` (`idLineabase`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detalleempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleempresa` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detallematerial` (
  `idDetalleMaterial` int(11) NOT NULL AUTO_INCREMENT,
  `tareas_idTareas` int(11) NOT NULL,
  `Material_idMaterial` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleMaterial`),
  KEY `fk_DetalleMaterial_tareas1_idx` (`tareas_idTareas`),
  KEY `fk_DetalleMaterial_Material1_idx` (`Material_idMaterial`),
  CONSTRAINT `fk_DetalleMaterial_Material1` FOREIGN KEY (`Material_idMaterial`) REFERENCES `material` (`idMaterial`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_DetalleMaterial_tareas1` FOREIGN KEY (`tareas_idTareas`) REFERENCES `tareas` (`idTareas`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detallematerial` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallematerial` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detallepregunta` (
  `iddetallepregunta` int(11) NOT NULL AUTO_INCREMENT,
  `diagnostico_idDiagnostico` int(11) NOT NULL,
  `preguntas_idPreguntas` int(11) NOT NULL,
  PRIMARY KEY (`iddetallepregunta`),
  KEY `fk_detallepregunta_diagnostico1_idx` (`diagnostico_idDiagnostico`),
  KEY `fk_detallepregunta_preguntas1_idx` (`preguntas_idPreguntas`),
  CONSTRAINT `fk_detallepregunta_diagnostico1` FOREIGN KEY (`diagnostico_idDiagnostico`) REFERENCES `diagnostico` (`idDiagnostico`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_detallepregunta_preguntas1` FOREIGN KEY (`preguntas_idPreguntas`) REFERENCES `preguntas` (`idPreguntas`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detallepregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallepregunta` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detalletareas` (
  `idDetalleTareas` int(11) NOT NULL AUTO_INCREMENT,
  `tareas_idTareas` int(11) NOT NULL,
  `agenda_idAgenda` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleTareas`),
  KEY `fk_DetalleTareas_tareas1_idx` (`tareas_idTareas`),
  KEY `fk_detalletareas_agenda1_idx` (`agenda_idAgenda`),
  CONSTRAINT `fk_DetalleTareas_tareas1` FOREIGN KEY (`tareas_idTareas`) REFERENCES `tareas` (`idTareas`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_detalletareas_agenda1` FOREIGN KEY (`agenda_idAgenda`) REFERENCES `agenda` (`idAgenda`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detalletareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalletareas` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detalleventa` (
  `idDetalleVenta` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_idEmpresa` int(11) NOT NULL,
  `ventas_idVentas` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleVenta`),
  KEY `fk_DetalleVenta_empresa1_idx` (`empresa_idEmpresa`),
  KEY `fk_DetalleVenta_ventas1_idx` (`ventas_idVentas`),
  CONSTRAINT `fk_DetalleVenta_empresa1` FOREIGN KEY (`empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_DetalleVenta_ventas1` FOREIGN KEY (`ventas_idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `diagnostico` (
  `idDiagnostico` int(11) NOT NULL AUTO_INCREMENT,
  `Etapa` enum('1','2','3','4') NOT NULL,
  PRIMARY KEY (`idDiagnostico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `diagnostico` DISABLE KEYS */;
/*!40000 ALTER TABLE `diagnostico` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `EmpleadosF` int(5) DEFAULT NULL,
  `EmpleadoM` int(5) DEFAULT NULL,
  `EmpleadoEntreF` int(5) DEFAULT NULL,
  `EmpleadoEntreM` int(5) DEFAULT NULL,
  `TotalEmpleado` int(10) NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEmpresa` varchar(45) NOT NULL,
  `RazonSocial` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Pagina` varchar(45) DEFAULT NULL,
  `Inversion` decimal(15,2) NOT NULL,
  `InversionPropia` decimal(15,2) DEFAULT NULL,
  `Credito` decimal(15,2) DEFAULT NULL,
  `InversionTerceros` decimal(15,2) DEFAULT NULL,
  `OtroInversion` varchar(25) DEFAULT NULL,
  `FechaAplicacion` date NOT NULL,
  `Sector_idSector` int(11) NOT NULL,
  `InveEmpresa_idInveEmpresa` int(11) NOT NULL,
  `Capacitacion_idCapacitacion` int(11) NOT NULL,
  `Prestaciones_idPrestaciones` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL,
  `Diagnostico_idDiagnostico` int(11) NOT NULL,
  `Negocio_idNegocio` int(11) NOT NULL,
  `condicionesFis_idcondicionesFis` int(11) NOT NULL,
  PRIMARY KEY (`idEmpresa`),
  KEY `fk_Empresa_Sector1_idx` (`Sector_idSector`),
  KEY `fk_Empresa_InveEmpresa1_idx` (`InveEmpresa_idInveEmpresa`),
  KEY `fk_Empresa_Capacitacion1_idx` (`Capacitacion_idCapacitacion`),
  KEY `fk_Empresa_Prestaciones1_idx` (`Prestaciones_idPrestaciones`),
  KEY `fk_Empresa_Empleado1_idx` (`Empleado_idEmpleado`),
  KEY `fk_Empresa_Diagnostico1_idx` (`Diagnostico_idDiagnostico`),
  KEY `fk_Empresa_Negocio1_idx` (`Negocio_idNegocio`),
  KEY `fk_Empresa_CondicionesLab1_idx` (`condicionesFis_idcondicionesFis`),
  CONSTRAINT `fk_Empresa_Capacitacion1` FOREIGN KEY (`Capacitacion_idCapacitacion`) REFERENCES `capacitacion` (`idCapacitacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_CondicionesLab1` FOREIGN KEY (`condicionesFis_idcondicionesFis`) REFERENCES `condicioneslab` (`idCondicionesLab`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_Diagnostico1` FOREIGN KEY (`Diagnostico_idDiagnostico`) REFERENCES `diagnostico` (`idDiagnostico`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_InveEmpresa1` FOREIGN KEY (`InveEmpresa_idInveEmpresa`) REFERENCES `inveempresa` (`idInveEmpresa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_Negocio1` FOREIGN KEY (`Negocio_idNegocio`) REFERENCES `negocio` (`idNegocio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_Prestaciones1` FOREIGN KEY (`Prestaciones_idPrestaciones`) REFERENCES `prestaciones` (`idPrestaciones`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Empresa_Sector1` FOREIGN KEY (`Sector_idSector`) REFERENCES `sector` (`idSector`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `escolaridad` (
  `idEscolaridad` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEsc` varchar(45) NOT NULL,
  PRIMARY KEY (`idEscolaridad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `escolaridad` DISABLE KEYS */;
INSERT INTO `escolaridad` (`idEscolaridad`, `NombreEsc`) VALUES
	(1, 'No estudió'),
	(2, 'Primaria'),
	(3, 'Básico'),
	(4, 'Diversificado'),
	(5, 'Universitario');
/*!40000 ALTER TABLE `escolaridad` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `filtronegocio` (
  `idFiltronegocio` int(11) NOT NULL AUTO_INCREMENT,
  `Filtro` varchar(100) NOT NULL,
  PRIMARY KEY (`idFiltronegocio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `filtronegocio` DISABLE KEYS */;
/*!40000 ALTER TABLE `filtronegocio` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `formaciones` (
  `idFormaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Evento` varchar(150) NOT NULL,
  `Capacitador` varchar(100) NOT NULL,
  `FechaFormacion` date NOT NULL,
  `HoraFormacion` time NOT NULL,
  `Duracion` datetime NOT NULL,
  `LugarPlataforma` varchar(50) NOT NULL,
  `Participantes` int(5) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  `Modalidad_idModalidad` int(11) NOT NULL,
  `usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idFormaciones`),
  KEY `fk_Formaciones_Categoria1_idx` (`Categoria_idCategoria`),
  KEY `fk_Formaciones_Modalidad1_idx` (`Modalidad_idModalidad`),
  KEY `fk_Formaciones_usuarios1_idx` (`usuarios_idUsuarios`),
  CONSTRAINT `fk_Formaciones_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Formaciones_Modalidad1` FOREIGN KEY (`Modalidad_idModalidad`) REFERENCES `modalidad` (`idModalidad`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Formaciones_usuarios1` FOREIGN KEY (`usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `formaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `formaciones` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `ingresos` (
  `idIngresos` int(11) NOT NULL AUTO_INCREMENT,
  `IngresoFamiliar` decimal(10,2) NOT NULL,
  `EgresoFamiliar` decimal(10,2) NOT NULL,
  `SaldoFinal` decimal(10,2) NOT NULL,
  `CubrenGastos` tinyint(1) NOT NULL,
  `CapacidaAhorro` tinyint(1) NOT NULL,
  `CreditosActivos` tinyint(1) NOT NULL,
  PRIMARY KEY (`idIngresos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `ingresos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresos` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `inveempresa` (
  `idInveEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Proceso` tinyint(1) DEFAULT NULL,
  `ProServ` tinyint(1) DEFAULT NULL,
  `MaqEqu` tinyint(1) DEFAULT NULL,
  `NueTec` tinyint(1) DEFAULT NULL,
  `SofHar` tinyint(1) DEFAULT NULL,
  `Otros` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idInveEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `inveempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `inveempresa` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `lineabase` (
  `idLineabase` int(11) NOT NULL AUTO_INCREMENT,
  `AsociadoId` tinyint(11) NOT NULL,
  `NombreCompleto` varchar(100) NOT NULL,
  `Genero` enum('M','F') NOT NULL,
  `Asociado` tinyint(1) NOT NULL,
  `Departamento` int(11) NOT NULL,
  `Municipio` int(11) NOT NULL,
  `Cif` varchar(15) NOT NULL,
  `Empresario` tinyint(1) NOT NULL,
  `FechaEmpresario` date DEFAULT NULL,
  `EmpleadoTercero` tinyint(1) DEFAULT NULL,
  `FechaETercero` date DEFAULT NULL,
  `Desempleado` tinyint(1) DEFAULT NULL,
  `FechaDesempleado` date DEFAULT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Escolaridad_idEscolaridad` int(11) NOT NULL,
  `Ingresos_idIngresos` int(11) NOT NULL,
  `CartaCompromiso_idCartaCompromiso` int(11) DEFAULT NULL,
  `Filtronegocio_idFiltronegocio` int(11) NOT NULL,
  PRIMARY KEY (`idLineabase`),
  KEY `fk_Asociado_Usuarios1_idx` (`Usuarios_idUsuarios`),
  KEY `fk_Asociado_Escolaridad1_idx` (`Escolaridad_idEscolaridad`),
  KEY `fk_Asociado_Ingresos1_idx` (`Ingresos_idIngresos`),
  KEY `fk_Asociado_CartaCompromiso1_idx` (`CartaCompromiso_idCartaCompromiso`),
  KEY `fk_asesoria_Filtronegocio1_idx` (`Filtronegocio_idFiltronegocio`),
  CONSTRAINT `fk_Asociado_CartaCompromiso1` FOREIGN KEY (`CartaCompromiso_idCartaCompromiso`) REFERENCES `cartacompromiso` (`idCartaCompromiso`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Asociado_Escolaridad1` FOREIGN KEY (`Escolaridad_idEscolaridad`) REFERENCES `escolaridad` (`idEscolaridad`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Asociado_Ingresos1` FOREIGN KEY (`Ingresos_idIngresos`) REFERENCES `ingresos` (`idIngresos`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Asociado_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_asesoria_Filtronegocio1` FOREIGN KEY (`Filtronegocio_idFiltronegocio`) REFERENCES `filtronegocio` (`idFiltronegocio`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `lineabase` DISABLE KEYS */;
/*!40000 ALTER TABLE `lineabase` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `material` (
  `idMaterial` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialUrl` varchar(1000) NOT NULL,
  PRIMARY KEY (`idMaterial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `modalidad` (
  `idModalidad` int(11) NOT NULL AUTO_INCREMENT,
  `Modalidad` varchar(50) NOT NULL,
  PRIMARY KEY (`idModalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `modalidad` DISABLE KEYS */;
INSERT INTO `modalidad` (`idModalidad`, `Modalidad`) VALUES
	(1, 'Virtual'),
	(2, 'Presencial');
/*!40000 ALTER TABLE `modalidad` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `negocio` (
  `idNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `NombreNegocio` varchar(25) NOT NULL,
  PRIMARY KEY (`idNegocio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `negocio` DISABLE KEYS */;
/*!40000 ALTER TABLE `negocio` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `permisos` (
  `idPermisos` int(11) NOT NULL AUTO_INCREMENT,
  `Permiso` varchar(45) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idPermisos`,`Descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` (`idPermisos`, `Permiso`, `Descripcion`) VALUES
	(1, 'Asesoria', 'Acceso al módulo de Asesoria, edición de documentos e informes'),
	(2, 'Microcréditos', 'Acceso al módulo de Microcréditos, edición de documentos e informes'),
	(3, 'Formación Asesor', 'Acceso al módulo de Formación, crear, editar, eliminar, informes'),
	(4, 'Formación Asociado', 'Acceso al formulario de inscripción, datos del evento'),
	(5, 'Impresión - Eliminiación', 'Impresión de documentos, eliminación de datos'),
	(6, 'Jefe', 'Acceso a usuarios, contraseñas, edición de metas.'),
	(7, 'Asesoría Asociado', 'Acceso a la linea base, carta de compromiso, diagnostico');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `permisosusuarios` (
  `idPermisosUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Permisos_idPermisos` int(11) NOT NULL,
  PRIMARY KEY (`idPermisosUsuarios`),
  KEY `fk_PermisosUsuarios_Usuarios1_idx` (`Usuarios_idUsuarios`),
  KEY `fk_PermisosUsuarios_Permisos1_idx` (`Permisos_idPermisos`),
  CONSTRAINT `fk_PermisosUsuarios_Permisos1` FOREIGN KEY (`Permisos_idPermisos`) REFERENCES `permisos` (`idPermisos`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_PermisosUsuarios_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `permisosusuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisosusuarios` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `preguntas` (
  `idPreguntas` int(11) NOT NULL AUTO_INCREMENT,
  `Pregunta` varchar(150) NOT NULL,
  `EstadoPregunta` enum('1','2','3','4','5') NOT NULL,
  PRIMARY KEY (`idPreguntas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `prestaciones` (
  `idPrestaciones` int(11) NOT NULL AUTO_INCREMENT,
  `SalarioMini` tinyint(1) DEFAULT NULL,
  `Bonificacion` tinyint(1) DEFAULT NULL,
  `Aguinaldo` tinyint(1) DEFAULT NULL,
  `Bono14` tinyint(1) DEFAULT NULL,
  `Vacaciones` tinyint(1) DEFAULT NULL,
  `Indenmizacion` tinyint(1) DEFAULT NULL,
  `IGSS` tinyint(1) DEFAULT NULL,
  `IRS` tinyint(1) DEFAULT NULL,
  `Incentivos` tinyint(1) DEFAULT NULL,
  `Extras` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idPrestaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `prestaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `prestaciones` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `Rol` varchar(15) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`idRol`, `Rol`) VALUES
	(1, 'Jefe Cedec'),
	(2, 'Asesor'),
	(3, 'Asociado');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `sector` (
  `idSector` int(11) NOT NULL AUTO_INCREMENT,
  `NombreSec` varchar(25) NOT NULL,
  PRIMARY KEY (`idSector`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `sector` DISABLE KEYS */;
INSERT INTO `sector` (`idSector`, `NombreSec`) VALUES
	(1, 'Servicio'),
	(2, 'Comercio'),
	(3, 'Agroindustria'),
	(4, 'Industria'),
	(5, 'Artesanías'),
	(6, 'Gobierno'),
	(7, 'Academia'),
	(8, 'Tecnología');
/*!40000 ALTER TABLE `sector` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tareas` (
  `idTareas` int(11) NOT NULL AUTO_INCREMENT,
  `NombreTarea` varchar(60) NOT NULL,
  `Tarea` varchar(150) NOT NULL,
  `FechaEntrega` date NOT NULL,
  PRIMARY KEY (`idTareas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(15) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Estado` tinyint(1) NOT NULL DEFAULT '0',
  `Correo` varchar(45) NOT NULL,
  `Rol_idRol` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_Usuarios_Rol_idx` (`Rol_idRol`),
  CONSTRAINT `fk_Usuarios_Rol` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `ventas` (
  `idVentas` int(11) NOT NULL AUTO_INCREMENT,
  `Facturacion` year(4) DEFAULT NULL,
  `MontoMensual` decimal(15,2) DEFAULT NULL,
  `MontoAnual` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`idVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
