-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2014 a las 17:33:46
-- Versión del servidor: 5.6.12
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hack`
--
CREATE DATABASE IF NOT EXISTS `hack` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hack`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PadreHijo`
--

CREATE TABLE IF NOT EXISTS `PadreHijo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `padre` varchar(25) NOT NULL,
  `hijo` varchar(25) NOT NULL,
  `ID_hijo` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `PadreHijo`
--

INSERT INTO `PadreHijo` (`ID`, `padre`, `hijo`, `ID_hijo`) VALUES
(1, 'Juan', 'Pedro', 2),
(2, 'Pedro', 'Jesus', -1),
(3, 'Raul', 'Josue', -1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
