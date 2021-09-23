-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2021 a las 19:23:11
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `semillas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `contra` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`nombre`, `apellido`, `dni`, `contra`, `id`) VALUES
('Diego', 'Marmiroli', 42182999, 'mansilla', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `temporada` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ano` int(4) NOT NULL,
  `zona` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dia` date NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`temporada`, `ano`, `zona`, `calle`, `dia`, `id`) VALUES
('Primavera -Verano', 2021, 'Norte', 'Rivadavia 800', '2021-09-01', 9),
('Primavera - Verano', 2021, 'Centro 1', 'Belgrano 155', '2021-09-01', 5),
('Primavera -Verano', 2021, 'Este', 'Jujuy 780', '2021-09-01', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdo`
--

CREATE TABLE `pdo` (
  `temporada` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ano` int(4) NOT NULL,
  `zona` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dia` date NOT NULL,
  `dni` int(8) NOT NULL,
  `entregado` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'No',
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pdo`
--

INSERT INTO `pdo` (`temporada`, `ano`, `zona`, `calle`, `dia`, `dni`, `entregado`, `id`) VALUES
('Primavera -Verano', 2021, 'Norte', 'Rivadavia 800', '2021-09-01', 42182999, 'Si', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu1`
--

CREATE TABLE `usu1` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `direccion` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `inte` int(2) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usu1`
--

INSERT INTO `usu1` (`nombre`, `apellido`, `mail`, `telefono`, `dni`, `direccion`, `inte`, `id`) VALUES
('Diego Agust?n', 'Marmiroli', 'diegomarmiroli20@gmail.com', '3462681684', 11111111, 'Eva Per?n 191', 3, 20),
('Diego', 'Marmiroli', 'diegomarmiroli20@gmail.com', '3462681684', 42182999, 'Eva Per?n 191', 3, 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `pdo`
--
ALTER TABLE `pdo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usu1`
--
ALTER TABLE `usu1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pdo`
--
ALTER TABLE `pdo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usu1`
--
ALTER TABLE `usu1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
