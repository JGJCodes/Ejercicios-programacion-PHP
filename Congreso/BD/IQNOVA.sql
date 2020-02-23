-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-04-2015 a las 22:52:38
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `IQNOVA`
--

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `IQNOVA` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE `IQNOVA`;

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `Expositor`
--

CREATE TABLE IF NOT EXISTS `Expositor` (
  `idExpositor` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apePaterno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apeMaterno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `curriculum` tinytext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idExpositor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Participante`
--

CREATE TABLE IF NOT EXISTS `Participante` (
  `idParticipante` int(10) NOT NULL AUTO_INCREMENT,
  `contraseña` char(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apePaterno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apeMaterno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `escuela` enum('ITCM','UTA','ITESM-TAMPICO','UNE','CBTIS-103','CETIS-109','CBTIS-164') COLLATE utf8_spanish_ci NOT NULL,
  `genero` enum('M','F') COLLATE utf8_spanish_ci NOT NULL,
  `tipo` enum('Participante','Administrador') COLLATE utf8_spanish_ci NOT NULL,
  `paquete` bit(1) NOT NULL,
  `tiempo-registro` datetime NOT NULL,
  PRIMARY KEY (`idParticipante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PartxTaller`
--
CREATE TABLE IF NOT EXISTS `PartxTaller` (
  `participante` int(10) NOT NULL,
  `taller` int(10) NOT NULL,
  `asistencia` bit(1) NOT NULL,
  PRIMARY KEY (`participante`,`taller`),
  KEY `PartxTaller_ibfk_2` (`taller`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PartxConf`
--
CREATE TABLE IF NOT EXISTS `PartxConf` (
  `participante` int(10) NOT NULL,
  `conferencia` int(10) NOT NULL,
  `asistencia` bit(1) NOT NULL,
  PRIMARY KEY (`participante`,`conferencia`),
  KEY `PartxConf_ibfk_2` (`conferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PartxVisita`
--
CREATE TABLE IF NOT EXISTS `PartxVisita` (
  `participante` int(10) NOT NULL,
  `visita` int(10) NOT NULL,
  `asistencia` bit(1) NOT NULL,
  PRIMARY KEY (`participante`,`visita`),
  KEY `PartxVisita_ibfk_2` (`visita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Taller`
--

CREATE TABLE IF NOT EXISTS `Taller` (
  `idTaller` int(10) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `lugar` text COLLATE utf8_spanish_ci,
  `descripcion` text COLLATE utf8_spanish_ci,
  `expositor` int(10) NOT NULL,
  PRIMARY KEY (`idTaller`),
  KEY `expositor` (`expositor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conferencia`
--

CREATE TABLE IF NOT EXISTS `Conferencia` (
  `idConf` int(10) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `lugar` text COLLATE utf8_spanish_ci,
  `descripcion` text COLLATE utf8_spanish_ci,
  `expositor` int(10) NOT NULL,
  PRIMARY KEY (`idConf`),
  KEY `expositor` (`expositor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Visitas`
--

CREATE TABLE IF NOT EXISTS `Visita` (
  `idVisita` int(10) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `lugar` text COLLATE utf8_spanish_ci,
  `descripcion` text COLLATE utf8_spanish_ci,
  `expositor` int(10) NOT NULL,
  PRIMARY KEY (`idVisita`),
  KEY `expositor` (`expositor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `PartxTaller`
--
ALTER TABLE `PartxTaller`
  ADD CONSTRAINT `PartxTaller_ibfk_1` FOREIGN KEY (`participante`) REFERENCES `Participante` (`idParticipante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PartxTaller_ibfk_2` FOREIGN KEY (`taller`) REFERENCES `Taller` (`idTaller`) ON DELETE CASCADE ON UPDATE CASCADE;
  
--
-- Filtros para la tabla `PartxTaller`
--
ALTER TABLE `PartxConf`
  ADD CONSTRAINT `PartxConf_ibfk_1` FOREIGN KEY (`participante`) REFERENCES `Participante` (`idParticipante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PartxConf_ibfk_2` FOREIGN KEY (`conferencia`) REFERENCES `Conferencia` (`idConf`) ON DELETE CASCADE ON UPDATE CASCADE;
  
--
-- Filtros para la tabla `PartxTaller`
--
ALTER TABLE `PartxVisita`
  ADD CONSTRAINT `PartxVisita_ibfk_1` FOREIGN KEY (`participante`) REFERENCES `Participante` (`idParticipante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PartxVisita_ibfk_2` FOREIGN KEY (`visita`) REFERENCES `Conferencia` (`idConf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Taller`
--
ALTER TABLE `Taller`
  ADD CONSTRAINT `Taller_ibfk_1` FOREIGN KEY (`expositor`) REFERENCES `Expositor` (`idExpositor`) ON DELETE CASCADE ON UPDATE CASCADE;
  
--
-- Filtros para la tabla `Conferencia`
--
ALTER TABLE `Conferencia`
  ADD CONSTRAINT `Conferencia_ibfk_1` FOREIGN KEY (`expositor`) REFERENCES `Expositor` (`idExpositor`) ON DELETE CASCADE ON UPDATE CASCADE;
  
--
-- Filtros para la tabla `Visitas`
--
ALTER TABLE `Visita`
  ADD CONSTRAINT `Visita` FOREIGN KEY (`expositor`) REFERENCES `Expositor` (`idExpositor`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
