-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 23-02-2021 a las 12:26:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `swchamezadb`
--
CREATE DATABASE IF NOT EXISTS `swchamezadb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `swchamezadb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `Nombre_agenda` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `Lugar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE `dependencia` (
  `idDependencia` int(11) NOT NULL,
  `Nombre_dep` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`idDependencia`, `Nombre_dep`) VALUES
(1, 'Sistemas'),
(4, 'Planeacion'),
(5, 'Tesoreria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `idDocumento` int(11) NOT NULL,
  `Nombre_doc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo_doc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`idDocumento`, `Nombre_doc`, `Tipo_doc`, `url`, `created_at`, `updated_at`, `active`, `idUsuario`) VALUES
(1, 'Reporte Mensual', 'texto', 'documentos/reportes', '2021-02-18 23:05:31', '2021-02-17 23:06:58', 0, 20),
(2, 'contrato Agua', 'texto', 'documentos/contratos', '2021-02-18 23:05:31', '2021-02-17 23:07:17', 1, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `idEvent` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_nopad_ci NOT NULL,
  `color` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`idEvent`, `title`, `color`, `start`, `end`) VALUES
(1, 'Reunion Instructor', '#40E0D0', '2021-02-17 00:00:00', '2021-02-18 00:00:00'),
(2, 'enviar actividades pendientes', '#FF8C00', '2021-02-18 00:00:00', '2021-02-19 00:00:00'),
(3, 'prueba', '#FF0000', '2021-02-19 00:00:00', '2021-02-20 00:00:00'),
(6, 'prueba', '#FF0000', '2021-02-19 00:00:00', '2021-02-20 00:00:00'),
(7, 'prueba', '#FF0000', '2021-02-19 00:00:00', '2021-02-20 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Dependencia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Nacimiento` datetime NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` bigint(11) NOT NULL,
  `idDependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombre`, `Apellido`, `Dependencia`, `Usuario`, `contraseña`, `Fecha_Nacimiento`, `email`, `Telefono`, `idDependencia`) VALUES
(20, 'william', 'mendoza', 'sistemas', 'admin', 'chameza', '0000-00-00 00:00:00', 'wamendoza@unisangil.edu.co', 3017995934, 1),
(31, 'Rosalba', 'Barrera', 'sistemas', 'RosBarrera', 'chameza', '0000-00-00 00:00:00', 'rosalba_Barrera@gmail.com', 3017995934, 1),
(32, 'Leidy ', 'Vasquez', 'Tesoreria', 'LVasquez', 'chameza', '0000-00-00 00:00:00', 'leidyVasquez@gmail.com', 3017995934, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_events`
--

CREATE TABLE `usuarios_events` (
  `idUsuarios_events` int(10) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`),
  ADD UNIQUE KEY `fkidUsuario` (`idUsuario`);

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD PRIMARY KEY (`idDependencia`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`idDocumento`),
  ADD KEY `fkid_usuario` (`idUsuario`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fkidDependencia` (`idDependencia`);

--
-- Indices de la tabla `usuarios_events`
--
ALTER TABLE `usuarios_events`
  ADD PRIMARY KEY (`idUsuarios_events`),
  ADD KEY `fkidUsuario` (`idUsuario`),
  ADD KEY `fkidEvent` (`idEvent`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  MODIFY `idDependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios_events`
--
ALTER TABLE `usuarios_events`
  MODIFY `idUsuarios_events` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idDependencia`) REFERENCES `dependencia` (`idDependencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_events`
--
ALTER TABLE `usuarios_events`
  ADD CONSTRAINT `usuarios_events_ibfk_1` FOREIGN KEY (`idEvent`) REFERENCES `events` (`idEvent`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_events_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
