-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2016 a las 18:27:42
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestordocumental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abono`
--

CREATE TABLE `abono` (
  `idabono` int(11) NOT NULL,
  `proveedor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `documento` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `comentario` tinytext COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `abono`
--

INSERT INTO `abono` (`idabono`, `proveedor`, `fecha`, `documento`, `importe`, `comentario`) VALUES
(1, '1', '2016-06-05', 'b509b-proyectogestion.xlsx', 200, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `idcentro` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`idcentro`, `nombre`) VALUES
(1, 'Hospiten Norte'),
(2, 'Hospiten Sur'),
(3, 'Hospiten Rambla'),
(4, 'Hospiten Roca'),
(5, 'Hospiten Lanzarote'),
(6, 'Hospiten Estepona'),
(7, 'MDA'),
(8, 'Hospiten Gestion'),
(9, 'Hospiten Cancún'),
(10, 'Hospiten Riviera Maya'),
(11, 'Amerimed Vallarta'),
(12, 'Amerimed Los Cabos'),
(13, 'Hospiten Bávaro'),
(14, 'Hospiten Santo Domingo'),
(15, 'Hospiten Jamaica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `idgestion` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `proveedor` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `año` varchar(4) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tag` text COLLATE utf8_spanish2_ci,
  `comentarios` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL,
  `proveedor` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `documento` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `verificada` tinyint(1) DEFAULT NULL,
  `fecha_verificacion` date DEFAULT NULL,
  `comentario` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`idfactura`, `proveedor`, `fecha`, `documento`, `importe`, `verificada`, `fecha_verificacion`, `comentario`) VALUES
(1, 1, '2016-06-05', '2241b-oferta-3m-2016.pdf', 220.5, 0, '2016-06-05', '<p>\r\n	verificado por Jose Ignacio</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE `gestion` (
  `idgestion` int(11) NOT NULL,
  `centro` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `proveedor` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `documento1` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento2` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento3` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento4` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento5` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento6` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento7` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`idgestion`, `centro`, `proveedor`, `fecha`, `documento1`, `documento2`, `documento3`, `documento4`, `documento5`, `documento6`, `documento7`) VALUES
(1, '4', '1', '2016-06-05', '17580-oferta-3m-2016.pdf', '27fd9-mascarilla-quirurgica-visor-1818fs.pdf', 'dc873-ficha-tapon-oido-desechable-ref-1100.pdf', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `user` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rol` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`iduser`, `user`, `pass`, `rol`) VALUES
(1, 'victor', 'ffc150a160d37e92012c196b6af4160d', 'administrado'),
(2, 'josemanuel', '4726becedaed1544162169bb7315e60a', 'registrado'),
(3, 'juanpedro', '2ce323869b83a4cc728879265aab5519', 'registrado'),
(4, 'garafernandez', 'f45793d5908a1acced81b29c40df4597', 'registrado'),
(5, 'joseignacio', '55bfa20f4490506b65d2f1b41cddaa6a', 'registrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idpais` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idpais`, `nombre`) VALUES
(1, 'ESPAÑA'),
(2, 'MEXICO'),
(3, 'JAMAICA'),
(4, 'REPUBLICA DOMINICANA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pais` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `historico` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `nombre`, `pais`, `historico`) VALUES
(1, 'COSUMAR', '1', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abono`
--
ALTER TABLE `abono`
  ADD PRIMARY KEY (`idabono`);

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`idcentro`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`idgestion`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfactura`);

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`idgestion`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idpais`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abono`
--
ALTER TABLE `abono`
  MODIFY `idabono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `idcentro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `idgestion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idfactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `gestion`
--
ALTER TABLE `gestion`
  MODIFY `idgestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idpais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
