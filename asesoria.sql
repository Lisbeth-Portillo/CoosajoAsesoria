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
  CONSTRAINT `fk_agenda_detalleempresa1` FOREIGN KEY (`detalleempresa_idDetalleEmpresa`) REFERENCES `detalleempresa` (`idDetalleEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `asesor` (
  `idAsesor` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idAsesor`),
  KEY `fk_Asesor_Usuarios1_idx` (`Usuarios_idUsuarios`),
  CONSTRAINT `fk_Asesor_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `asesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `asesor` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `asociado` (
  `idAsociado` int(11) NOT NULL AUTO_INCREMENT,
  `NombreA` varchar(25) NOT NULL,
  `ApellidoA` varchar(25) NOT NULL,
  `Genero` enum('M','F') NOT NULL,
  `Asociado` enum('Si','No') NOT NULL,
  `Cif` varchar(15) NOT NULL,
  `Empresario` enum('Si','No') NOT NULL,
  `FechaEmpresario` date DEFAULT NULL,
  `EmpleadoTercero` enum('Si','No') DEFAULT NULL,
  `FechaETercero` date DEFAULT NULL,
  `Desempleado` enum('Si','No') DEFAULT NULL,
  `FechaDesempleado` date DEFAULT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Escolaridad_idEscolaridad` int(11) NOT NULL,
  `Comunidad_idComunidad` int(11) NOT NULL,
  `Ingresos_idIngresos` int(11) NOT NULL,
  `CartaCompromiso_idCartaCompromiso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAsociado`),
  KEY `fk_Asociado_Usuarios1_idx` (`Usuarios_idUsuarios`),
  KEY `fk_Asociado_Escolaridad1_idx` (`Escolaridad_idEscolaridad`),
  KEY `fk_Asociado_Comunidad1_idx` (`Comunidad_idComunidad`),
  KEY `fk_Asociado_Ingresos1_idx` (`Ingresos_idIngresos`),
  KEY `fk_Asociado_CartaCompromiso1_idx` (`CartaCompromiso_idCartaCompromiso`),
  CONSTRAINT `fk_Asociado_CartaCompromiso1` FOREIGN KEY (`CartaCompromiso_idCartaCompromiso`) REFERENCES `cartacompromiso` (`idCartaCompromiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Asociado_Comunidad1` FOREIGN KEY (`Comunidad_idComunidad`) REFERENCES `comunidad` (`idComunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Asociado_Escolaridad1` FOREIGN KEY (`Escolaridad_idEscolaridad`) REFERENCES `escolaridad` (`idEscolaridad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Asociado_Ingresos1` FOREIGN KEY (`Ingresos_idIngresos`) REFERENCES `ingresos` (`idIngresos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Asociado_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `asociado` DISABLE KEYS */;
/*!40000 ALTER TABLE `asociado` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `capacitacion` (
  `idCapacitacion` int(11) NOT NULL AUTO_INCREMENT,
  `Capacitacion` enum('Si','No') NOT NULL,
  `TipoCapacitacion` varchar(100) DEFAULT NULL,
  `OtrasCapacitaciones` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCapacitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `capacitacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `capacitacion` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cartacompromiso` (
  `idCartaCompromiso` int(11) NOT NULL AUTO_INCREMENT,
  `Firma` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`idCartaCompromiso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `cartacompromiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `cartacompromiso` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `comunidad` (
  `idComunidad` int(11) NOT NULL AUTO_INCREMENT,
  `NombreComu` varchar(25) NOT NULL,
  PRIMARY KEY (`idComunidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `comunidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `comunidad` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `condicioneslab` (
  `idCondicionesLab` int(11) NOT NULL AUTO_INCREMENT,
  `Mobiliario` tinyint(1) NOT NULL,
  `Espacio` tinyint(1) NOT NULL,
  `Iluminacion` tinyint(1) NOT NULL,
  `Ventilacion` tinyint(1) NOT NULL,
  `Herramientas` tinyint(1) NOT NULL,
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

CREATE TABLE IF NOT EXISTS `detalleagenda` (
  `idDetalleAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `Agenda_idAgenda` int(11) NOT NULL,
  `Asesor_idAsesor` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleAgenda`),
  KEY `fk_DetalleAsesoria_Agenda1_idx` (`Agenda_idAgenda`),
  KEY `fk_DetalleAsesoria_Asesor1_idx` (`Asesor_idAsesor`),
  CONSTRAINT `fk_DetalleAsesoria_Agenda1` FOREIGN KEY (`Agenda_idAgenda`) REFERENCES `agenda` (`idAgenda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DetalleAsesoria_Asesor1` FOREIGN KEY (`Asesor_idAsesor`) REFERENCES `asesor` (`idAsesor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detalleagenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleagenda` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detallecredito` (
  `idDetalleCredito` int(11) NOT NULL AUTO_INCREMENT,
  `Credito_idCredito` int(11) NOT NULL,
  `Asociado_idAsociado` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleCredito`),
  KEY `fk_DetalleCredito_Credito1_idx` (`Credito_idCredito`),
  KEY `fk_DetalleCredito_Asociado1_idx` (`Asociado_idAsociado`),
  CONSTRAINT `fk_DetalleCredito_Asociado1` FOREIGN KEY (`Asociado_idAsociado`) REFERENCES `asociado` (`idAsociado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DetalleCredito_Credito1` FOREIGN KEY (`Credito_idCredito`) REFERENCES `credito` (`idCredito`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detallecredito` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallecredito` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detalleempresa` (
  `idDetalleEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Asociado_idAsociado` int(11) NOT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleEmpresa`),
  KEY `fk_DetalleEmpresa_Asociado1_idx` (`Asociado_idAsociado`),
  KEY `fk_DetalleEmpresa_Empresa1_idx` (`Empresa_idEmpresa`),
  CONSTRAINT `fk_DetalleEmpresa_Asociado1` FOREIGN KEY (`Asociado_idAsociado`) REFERENCES `asociado` (`idAsociado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DetalleEmpresa_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detalleempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleempresa` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `detalletareas` (
  `idDetalleTareas` int(11) NOT NULL AUTO_INCREMENT,
  `detalleagenda_idDetalleAgenda` int(11) NOT NULL,
  `tareas_idTareas` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleTareas`),
  KEY `fk_DetalleTareas_detalleagenda1_idx` (`detalleagenda_idDetalleAgenda`),
  KEY `fk_DetalleTareas_tareas1_idx` (`tareas_idTareas`),
  CONSTRAINT `fk_DetalleTareas_detalleagenda1` FOREIGN KEY (`detalleagenda_idDetalleAgenda`) REFERENCES `detalleagenda` (`idDetalleAgenda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DetalleTareas_tareas1` FOREIGN KEY (`tareas_idTareas`) REFERENCES `tareas` (`idTareas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `detalletareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalletareas` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `diagnostico` (
  `idDiagnostico` int(11) NOT NULL AUTO_INCREMENT,
  `Etapa` enum('0','1','2','3') NOT NULL,
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
  `Ventas_idVentas` int(11) NOT NULL,
  `CondicionesLab_idCondicionesLab` int(11) NOT NULL,
  `Asesor_idAsesor` int(11) NOT NULL,
  PRIMARY KEY (`idEmpresa`),
  KEY `fk_Empresa_Sector1_idx` (`Sector_idSector`),
  KEY `fk_Empresa_InveEmpresa1_idx` (`InveEmpresa_idInveEmpresa`),
  KEY `fk_Empresa_Capacitacion1_idx` (`Capacitacion_idCapacitacion`),
  KEY `fk_Empresa_Prestaciones1_idx` (`Prestaciones_idPrestaciones`),
  KEY `fk_Empresa_Empleado1_idx` (`Empleado_idEmpleado`),
  KEY `fk_Empresa_Diagnostico1_idx` (`Diagnostico_idDiagnostico`),
  KEY `fk_Empresa_Negocio1_idx` (`Negocio_idNegocio`),
  KEY `fk_Empresa_Ventas1_idx` (`Ventas_idVentas`),
  KEY `fk_Empresa_CondicionesLab1_idx` (`CondicionesLab_idCondicionesLab`),
  KEY `fk_Empresa_Asesor1_idx` (`Asesor_idAsesor`),
  CONSTRAINT `fk_Empresa_Asesor1` FOREIGN KEY (`Asesor_idAsesor`) REFERENCES `asesor` (`idAsesor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Capacitacion1` FOREIGN KEY (`Capacitacion_idCapacitacion`) REFERENCES `capacitacion` (`idCapacitacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_CondicionesLab1` FOREIGN KEY (`CondicionesLab_idCondicionesLab`) REFERENCES `condicioneslab` (`idCondicionesLab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Diagnostico1` FOREIGN KEY (`Diagnostico_idDiagnostico`) REFERENCES `diagnostico` (`idDiagnostico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_InveEmpresa1` FOREIGN KEY (`InveEmpresa_idInveEmpresa`) REFERENCES `inveempresa` (`idInveEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Negocio1` FOREIGN KEY (`Negocio_idNegocio`) REFERENCES `negocio` (`idNegocio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Prestaciones1` FOREIGN KEY (`Prestaciones_idPrestaciones`) REFERENCES `prestaciones` (`idPrestaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Sector1` FOREIGN KEY (`Sector_idSector`) REFERENCES `sector` (`idSector`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_Ventas1` FOREIGN KEY (`Ventas_idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE NO ACTION ON UPDATE NO ACTION
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

CREATE TABLE IF NOT EXISTS `estadopregunta` (
  `idEstadoPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `EstadoPregunta` varchar(25) NOT NULL,
  PRIMARY KEY (`idEstadoPregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `estadopregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadopregunta` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `ingresos` (
  `idIngresos` int(11) NOT NULL AUTO_INCREMENT,
  `IngresoFamiliar` decimal(10,2) NOT NULL,
  `EgresoFamiliar` decimal(10,2) NOT NULL,
  `SaldoFinal` decimal(10,2) NOT NULL,
  `CubrenGastos` enum('Si','No') NOT NULL,
  `CapacidaAhorro` enum('Si','No') NOT NULL,
  `CreditosActivos` enum('Si','No') NOT NULL,
  PRIMARY KEY (`idIngresos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `ingresos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresos` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `inveempresa` (
  `idInveEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Proceso` enum('Si','No') DEFAULT NULL,
  `ProServ` enum('Si','No') DEFAULT NULL,
  `MaqEqu` enum('Si','No') DEFAULT NULL,
  `NueTec` enum('Si','No') DEFAULT NULL,
  `SofHar` enum('Si','No') DEFAULT NULL,
  `Otros` enum('Si','No') DEFAULT NULL,
  PRIMARY KEY (`idInveEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `inveempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `inveempresa` ENABLE KEYS */;

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
  PRIMARY KEY (`idPermisos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `permisosusuarios` (
  `idPermisosUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Permisos_idPermisos` int(11) NOT NULL,
  PRIMARY KEY (`idPermisosUsuarios`),
  KEY `fk_PermisosUsuarios_Usuarios1_idx` (`Usuarios_idUsuarios`),
  KEY `fk_PermisosUsuarios_Permisos1_idx` (`Permisos_idPermisos`),
  CONSTRAINT `fk_PermisosUsuarios_Permisos1` FOREIGN KEY (`Permisos_idPermisos`) REFERENCES `permisos` (`idPermisos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisosUsuarios_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `permisosusuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisosusuarios` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `preguntas` (
  `idPreguntas` int(11) NOT NULL AUTO_INCREMENT,
  `Pregunta` varchar(50) NOT NULL,
  `Diagnostico_idDiagnostico` int(11) NOT NULL,
  `EstadoPregunta_idEstadoPregunta` int(11) NOT NULL,
  PRIMARY KEY (`idPreguntas`),
  KEY `fk_Preguntas_Diagnostico1_idx` (`Diagnostico_idDiagnostico`),
  KEY `fk_Preguntas_EstadoPregunta1_idx` (`EstadoPregunta_idEstadoPregunta`),
  CONSTRAINT `fk_Preguntas_Diagnostico1` FOREIGN KEY (`Diagnostico_idDiagnostico`) REFERENCES `diagnostico` (`idDiagnostico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Preguntas_EstadoPregunta1` FOREIGN KEY (`EstadoPregunta_idEstadoPregunta`) REFERENCES `estadopregunta` (`idEstadoPregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `prestaciones` (
  `idPrestaciones` int(11) NOT NULL AUTO_INCREMENT,
  `SalarioMini` tinyint(1) NOT NULL,
  `Bonificacion` tinyint(1) NOT NULL,
  `Aguinaldo` tinyint(1) NOT NULL,
  `Bono14` tinyint(1) NOT NULL,
  `Vacaciones` tinyint(1) NOT NULL,
  `Indenmizacion` tinyint(1) NOT NULL,
  `IGSS` tinyint(1) NOT NULL,
  `IRS` tinyint(1) NOT NULL,
  `Incentivos` tinyint(1) NOT NULL,
  `Extras` tinyint(1) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `sector` DISABLE KEYS */;
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
  `Estado` enum('Activo','Innactivo') NOT NULL DEFAULT 'Activo',
  `Correo` varchar(45) NOT NULL,
  `Rol_idRol` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_Usuarios_Rol_idx` (`Rol_idRol`),
  CONSTRAINT `fk_Usuarios_Rol` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `ventas` (
  `idVentas` int(11) NOT NULL AUTO_INCREMENT,
  `Facturacion1` year(4) DEFAULT NULL,
  `Facturacion2` year(4) DEFAULT NULL,
  `Facturacion3` year(4) DEFAULT NULL,
  `MontoAnual1` decimal(15,2) DEFAULT NULL,
  `MontoAnual2` decimal(15,2) DEFAULT NULL,
  `MontoAnual3` decimal(15,2) DEFAULT NULL,
  `MontoMensual1` decimal(15,2) DEFAULT NULL,
  `MontoMensual2` decimal(15,2) DEFAULT NULL,
  `MontoMensual3` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`idVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
