-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 15:38:41
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
  `nombre` varchar(252) NOT NULL,
  `apellido` varchar(252) NOT NULL,
  `dni` varchar(252) NOT NULL,
  `contra` varchar(252) NOT NULL,
  `id` int(252) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`nombre`, `apellido`, `dni`, `contra`, `id`) VALUES
('Diego', 'Marmiroli', '42182999', 'mansilla', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `temporada` varchar(252) NOT NULL,
  `ano` int(252) NOT NULL,
  `zona` varchar(252) NOT NULL,
  `calle` varchar(252) NOT NULL,
  `dia` date NOT NULL,
  `id` int(252) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`temporada`, `ano`, `zona`, `calle`, `dia`, `id`) VALUES
('Primavera -Verano', 2021, 'Centro 2', 'San martín', '2021-09-15', 8),
('Primavera -Verano', 2021, 'Norte', 'Rivadavia 800', '2021-09-01', 9),
('Primavera - Verano', 2021, 'Centro 1', 'Belgrano 155', '2021-09-15', 5),
('Primavera -Verano', 2021, 'Este', 'Jujuy 780', '2021-09-01', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdo`
--

CREATE TABLE `pdo` (
  `temporada` varchar(252) NOT NULL,
  `ano` int(252) NOT NULL,
  `zona` varchar(252) NOT NULL,
  `calle` varchar(252) NOT NULL,
  `dia` date NOT NULL,
  `dni` bigint(252) NOT NULL,
  `entregado` varchar(252) DEFAULT NULL,
  `id` int(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pdo`
--

INSERT INTO `pdo` (`temporada`, `ano`, `zona`, `calle`, `dia`, `dni`, `entregado`, `id`) VALUES
('Primavera -Verano', 2021, 'Este', 'Jujuy 780', '2021-09-01', 41444444, NULL, 15),
('Primavera - Verano', 2021, 'Centro 1', 'Belgrano 155', '2021-09-15', 41444444, NULL, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu1`
--

CREATE TABLE `usu1` (
  `nombre` varchar(258) NOT NULL,
  `apellido` varchar(352) NOT NULL,
  `mail` varchar(547) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `dni` int(252) NOT NULL,
  `direccion` varchar(689) NOT NULL,
  `inte` int(252) NOT NULL,
  `id` int(252) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usu1`
--

INSERT INTO `usu1` (`nombre`, `apellido`, `mail`, `telefono`, `dni`, `direccion`, `inte`, `id`) VALUES
('Anahi', 'García', 'anagarcia@live.com', 3462778899, 42999999, 'Eva Perón 191', 3, 16),
('Diego Agustin', 'Marmiroli', 'diegomarmiroli20@gmail.com', 3462681684, 42182999, 'Eva Perón 191', 3, 11),
('Diego', 'Marmiroli', 'diegomarmiroli20@gmail.com', 3462681684, 41444444, 'Eva Perón 191', 3, 15);

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
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pdo`
--
ALTER TABLE `pdo`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usu1`
--
ALTER TABLE `usu1`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
