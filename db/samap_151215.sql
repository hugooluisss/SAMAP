-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2015 a las 17:54:31
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `samap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idReporte` bigint(20) unsigned NOT NULL,
  `campo1` text,
  `campo2` text,
  `campo3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idReporte`, `campo1`, `campo2`, `campo3`) VALUES
(61, '1234', '', ''),
(68, '12342', '12342', '12342'),
(95, 'Nada', 'Ok', 'Sale');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `idReporte` bigint(20) unsigned NOT NULL,
  `idUsuario` bigint(20) unsigned NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `latitud` varchar(20) DEFAULT '0',
  `longitud` varchar(20) DEFAULT '0',
  `direccion` text
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`idReporte`, `idUsuario`, `fecha`, `latitud`, `longitud`, `direccion`) VALUES
(17, 11, '2015-12-15 15:41:15', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(18, 11, '2015-12-15 15:42:10', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(19, 11, '2015-12-15 15:42:25', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(20, 11, '2015-12-15 15:42:26', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(21, 11, '2015-12-15 15:42:27', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(22, 11, '2015-12-15 15:42:28', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(23, 11, '2015-12-15 15:42:30', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(24, 11, '2015-12-15 15:42:35', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(25, 11, '2015-12-15 15:42:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(26, 11, '2015-12-15 15:42:37', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(27, 11, '2015-12-15 15:42:39', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(28, 11, '2015-12-15 15:42:40', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(29, 11, '2015-12-15 15:45:03', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(30, 11, '2015-12-15 15:46:33', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(31, 11, '2015-12-15 15:48:14', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(32, 11, '2015-12-15 15:49:15', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(33, 11, '2015-12-15 15:50:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(34, 11, '2015-12-15 15:51:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(35, 11, '2015-12-15 15:52:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(36, 11, '2015-12-15 15:53:26', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(37, 11, '2015-12-15 15:55:02', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(38, 11, '2015-12-15 16:06:55', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(39, 11, '2015-12-15 16:07:21', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(40, 11, '2015-12-15 16:08:45', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(41, 11, '2015-12-15 16:08:57', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(42, 11, '2015-12-15 16:10:29', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(43, 11, '2015-12-15 16:11:29', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(44, 11, '2015-12-15 16:12:29', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(45, 11, '2015-12-15 16:13:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(46, 11, '2015-12-15 16:14:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(47, 11, '2015-12-15 16:15:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(48, 11, '2015-12-15 16:16:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(49, 11, '2015-12-15 16:17:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(50, 11, '2015-12-15 16:18:36', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(51, 11, '2015-12-15 16:19:45', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(52, 11, '2015-12-15 16:20:52', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(53, 11, '2015-12-15 16:22:00', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(54, 11, '2015-12-15 16:23:01', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(55, 11, '2015-12-15 16:24:02', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(56, 11, '2015-12-15 16:25:10', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(57, 11, '2015-12-15 16:26:10', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(58, 11, '2015-12-15 16:27:15', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(59, 11, '2015-12-15 16:28:15', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(60, 11, '2015-12-15 16:28:46', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(61, 11, '2015-12-15 16:30:10', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(62, 11, '2015-12-15 16:31:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(63, 11, '2015-12-15 16:32:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(64, 11, '2015-12-15 16:33:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(65, 11, '2015-12-15 16:34:16', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(66, 11, '2015-12-15 16:35:17', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(67, 11, '2015-12-15 16:36:17', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(68, 11, '2015-12-15 16:36:32', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(69, 11, '2015-12-15 16:38:17', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(70, 11, '2015-12-15 16:39:17', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(71, 11, '2015-12-15 16:40:18', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(72, 11, '2015-12-15 16:41:20', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(73, 11, '2015-12-15 16:42:21', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(74, 11, '2015-12-15 16:43:29', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(75, 11, '2015-12-15 16:44:32', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(76, 11, '2015-12-15 16:45:40', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(77, 11, '2015-12-15 16:46:49', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(78, 11, '2015-12-15 16:47:49', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(79, 11, '2015-12-15 16:48:50', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(80, 11, '2015-12-15 16:49:57', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(81, 11, '2015-12-15 16:51:00', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(82, 11, '2015-12-15 16:52:12', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(83, 11, '2015-12-15 16:53:12', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(84, 11, '2015-12-15 16:54:19', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(85, 11, '2015-12-15 16:55:19', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(86, 11, '2015-12-15 16:56:24', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(87, 11, '2015-12-15 16:57:24', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(88, 11, '2015-12-15 16:58:25', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(89, 11, '2015-12-15 16:59:25', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(90, 11, '2015-12-15 17:00:32', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(91, 11, '2015-12-15 17:01:37', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(92, 11, '2015-12-15 17:03:33', '17.078886', '-96.7119513', 'Reforma, Oaxaca, Oax., México'),
(93, 12, '2015-12-15 18:02:12', '17.0797416', '-96.7098857', 'Reforma, Oaxaca, Oax., México'),
(94, 12, '2015-12-15 18:03:12', '17.0797219', '-96.7098563', 'Reforma, Oaxaca, Oax., México'),
(95, 12, '2015-12-15 18:05:15', '17.07987101', '-96.70965669', 'Reforma, Oaxaca, Oax., México'),
(96, 11, '2015-12-15 18:21:47', '', '', ''),
(97, 12, '2015-12-15 18:51:53', '17.0797702', '-96.7098759', 'Reforma, Oaxaca, Oax., México'),
(98, 12, '2015-12-15 18:52:54', '17.07981594', '-96.70971621', 'Reforma, Oaxaca, Oax., México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoUsuario`
--

CREATE TABLE IF NOT EXISTS `tipoUsuario` (
  `idTipo` tinyint(3) unsigned NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoUsuario`
--

INSERT INTO `tipoUsuario` (`idTipo`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` bigint(20) unsigned NOT NULL,
  `idTipo` tinyint(3) unsigned DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idTipo`, `nombre`, `email`, `pass`) VALUES
(11, 1, 'Hugo Luis Santiago Altamirano', 'hugooluisss@gmail.com', 'k0rgk0rg'),
(12, 2, 'Usuario de prueba', 'hugooluisss@hotmail.com', 'k0rgk0rg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idReporte`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idReporte`), ADD KEY `fk_usuario` (`idUsuario`);

--
-- Indices de la tabla `tipoUsuario`
--
ALTER TABLE `tipoUsuario`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`), ADD KEY `usuarioTipo` (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idReporte` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT de la tabla `tipoUsuario`
--
ALTER TABLE `tipoUsuario`
  MODIFY `idTipo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
ADD CONSTRAINT `fk_idReporte` FOREIGN KEY (`idReporte`) REFERENCES `reporte` (`idReporte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `fk_tipoUsuario` FOREIGN KEY (`idTipo`) REFERENCES `tipoUsuario` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
