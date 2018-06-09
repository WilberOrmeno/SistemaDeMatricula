-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2018 a las 18:16:55
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matricula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `cod_alumno` varchar(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `ape_materno` varchar(40) NOT NULL,
  `ape_paterno` varchar(40) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `nivel` varchar(15) NOT NULL,
  `grado` varchar(11) NOT NULL,
  `seccion` varchar(1) NOT NULL DEFAULT 'A',
  `fecNacimiento` date NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `cod_alumno`, `nombres`, `ape_materno`, `ape_paterno`, `sexo`, `nivel`, `grado`, `seccion`, `fecNacimiento`, `telefono`, `dni`, `email`, `direccion`, `foto`) VALUES
(1, '1', 'Elena', 'Rodas', 'Quispe', 'Femenino', 'Secundaria', '5to', 'A', '0000-00-00', '994318344', '98765432', 'elena@hotmail.com', 'Calle Amador Merino Reyna 492', 'FotosAlumnos/cintia-moreno.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderados`
--

CREATE TABLE `apoderados` (
  `id_apoderado` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `ape_paterno` varchar(30) NOT NULL,
  `ape_materno` varchar(30) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `relacion` varchar(20) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apoderados`
--

INSERT INTO `apoderados` (`id_apoderado`, `id_alumno`, `ape_paterno`, `ape_materno`, `nombres`, `relacion`, `celular`, `email`) VALUES
(1, 1, 'Quispe', 'Solis', 'Daniel', 'Padre', '987654311', 'daniel@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `dni_nino` int(11) NOT NULL DEFAULT '0',
  `dni_apoderado` int(11) NOT NULL DEFAULT '0',
  `partida_nacimiento` int(11) NOT NULL DEFAULT '0',
  `certificado` int(11) NOT NULL DEFAULT '0',
  `resTraslado` int(11) NOT NULL DEFAULT '0',
  `pagoMatricula` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `id_alumno`, `dni_nino`, `dni_apoderado`, `partida_nacimiento`, `certificado`, `resTraslado`, `pagoMatricula`) VALUES
(1, 1, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `periodo` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`periodo`, `id_periodo`) VALUES
(2009, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `seccion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `nivel`, `grado`, `seccion`) VALUES
(1, 'Inicial', '3aÃ±os', 'A'),
(2, 'Secundaria', '1ro', 'A'),
(3, 'Secundaria', '2do', 'A'),
(4, 'Secundaria', '3ro', 'A'),
(5, 'Secundaria', '4to', 'A'),
(6, 'Secundaria', '5to', 'A'),
(7, 'Inicial', '3aÃ±os', 'B'),
(8, 'Inicial', '3aÃ±os', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `apoderados`
--
ALTER TABLE `apoderados`
  ADD PRIMARY KEY (`id_apoderado`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `apoderados`
--
ALTER TABLE `apoderados`
  MODIFY `id_apoderado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
