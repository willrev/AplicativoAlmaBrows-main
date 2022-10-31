-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-10-2022 a las 14:57:42
-- Versión del servidor: 8.0.30-0ubuntu0.20.04.2
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tipificadoralma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipificacion`
--

CREATE TABLE `tipificacion` (
  `idTipificacion` int NOT NULL,
  `nombreUsuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fechaGestion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaFinGestion` datetime DEFAULT NULL,
  `embudoOrigen` varchar(30) NOT NULL,
  `tipoOT` varchar(30) DEFAULT NULL,
  `redSocial` varchar(30) DEFAULT NULL,
  `nombreCliente` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefonoCliente` varchar(11) NOT NULL,
  `estadoTipificacion` varchar(35) NOT NULL,
  `agendaIncumplida` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cancelaCita` varchar(50) DEFAULT NULL,
  `noInteresado` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `exito` varchar(30) NOT NULL,
  `fechaCheckCalidad` datetime DEFAULT NULL,
  `costoModelo` varchar(15) DEFAULT NULL,
  `fechaPagoModelo` datetime DEFAULT NULL,
  `fechaMantenimientoGratis` datetime DEFAULT NULL,
  `fechaValoracionGratis` datetime DEFAULT NULL,
  `fechaValoracionPresencial` datetime DEFAULT NULL,
  `fechaValoracionVirtual` datetime DEFAULT NULL,
  `fechaVolverALlamar` datetime DEFAULT NULL,
  `fechaVolverALlamarInteresado` datetime DEFAULT NULL,
  `observaciones` varchar(350) DEFAULT NULL,
  `recordatorio` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipificacion`
--

INSERT INTO `tipificacion` (`idTipificacion`, `nombreUsuario`, `fechaGestion`, `fechaFinGestion`, `embudoOrigen`, `tipoOT`, `redSocial`, `nombreCliente`, `telefonoCliente`, `estadoTipificacion`, `agendaIncumplida`, `cancelaCita`, `noInteresado`, `exito`, `fechaCheckCalidad`, `costoModelo`, `fechaPagoModelo`, `fechaMantenimientoGratis`, `fechaValoracionGratis`, `fechaValoracionPresencial`, `fechaValoracionVirtual`, `fechaVolverALlamar`, `fechaVolverALlamarInteresado`, `observaciones`, `recordatorio`) VALUES
(129, 'Administrador', '2022-10-25 21:27:57', '2022-10-25 21:28:17', 'Lead Nuevo', '', 'WhatssApp', 'Cristian', '333', 'Confirmado', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Todo salio OK.', 'on');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int NOT NULL,
  `nombreTipoUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `nombreTipoUsuario`) VALUES
(1, 'administrador'),
(2, 'supervisor'),
(3, 'asesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `claveUsuario` varchar(30) NOT NULL,
  `idTipoUsuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `claveUsuario`, `idTipoUsuario`) VALUES
(1, 'Administrador', 'Arcos2022', 1),
(9, 'PruebaAsesor', 'Arcos2021', 3),
(10, 'PruebaSupervisor', 'Arcos2021', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipificacion`
--
ALTER TABLE `tipificacion`
  ADD PRIMARY KEY (`idTipificacion`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `tipoUsuario` (`idTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipificacion`
--
ALTER TABLE `tipificacion`
  MODIFY `idTipificacion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
