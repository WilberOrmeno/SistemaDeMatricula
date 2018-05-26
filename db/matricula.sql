-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2018 a las 17:11:31
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
(28, '20140143', 'Wilber', 'Vera', 'OrmeÃ±o', 'Wilber', 'Secundaria', '5to', 'A', '2018-05-05', '994318344', '13245678', 'wilber.ormeno@hotmail.com', 'Av. BBBB nro 123', NULL),
(31, '123', 'Javier', 'OrmeÃ±o', 'Vera', 'Masculino', 'Inicial', '1ro', 'A', '2018-05-04', '994318344', '13213', 'wilber.ormeno@hotmail.com', 'Calle Amador Merino Reyna 492', NULL),
(34, '123', '123', '32', '23', 'Masculino', 'Inicial', '4aÃ±os', 'A', '2018-05-10', '123', '123', '11', '123', NULL),
(35, '9876789', 'qqqq', 'qqqqq', 'qqqq', 'Masculino', 'Primaria', '1ro', 'A', '2018-05-03', '111', '11', '11', '11', NULL),
(36, '123123', 'aa', 'aa', 'aaaa', 'Femenino', 'Inicial', '3aÃ±os', 'A', '2018-05-01', 'aaa', 'aa', 'aa', 'aa', NULL),
(37, '132', 'AAA', 'AA', 'AA', 'Masculino', 'Primaria', '2do', 'A', '2018-05-16', 'AA', 'AAA', 'A', 'AAA', NULL),
(38, '3333', 'aaa', 'aaa', 'aaa', 'Femenino', 'Secundaria', '4to', 'A', '0000-00-00', 'aaa', 'aaa', 'aa', 'aaaaaaa', 'FotosAlumnos/'),
(39, '123', 'wqeqw', 'ewqe', 'ewee', 'Masculino', 'Inicial', '3aÃ±os', 'A', '2018-05-15', 'qeqwe', 'qweqwe', 'qeqweqw', 'eqweqwe', 'FotosAlumnos/'),
(40, '123', '3123', '12312', 'qwe', 'Masculino', 'Primaria', '2do', 'A', '2018-05-01', '1231', '2312', '23123', '123123', 'FotosAlumnos/'),
(41, '234', 'werw', 'wer', 'rwer', 'Masculino', 'Inicial', '4aÃ±os', 'A', '2018-05-02', 'erw', 'erwer', 'wer', 'werwerwer', 'FotosAlumnos/'),
(42, '123123', 'weqwe', 'qweq', 'qweq', 'Masculino', 'Inicial', '3aÃ±os', 'A', '2018-05-09', 'qweq', 'weqwe', 'qwe', 'qweqwe', 'FotosAlumnos/'),
(43, '1212', '123', '323', 'QW', 'Femenino', 'Primaria', '3ro', 'A', '0000-00-00', '12312', '3123', '123123', '123123', 'FotosAlumnos/'),
(44, '213', '123', '123', 'qw', 'Masculino', 'Inicial', '3aÃ±os', 'A', '2018-05-10', '1232', '132131', '2312', '3123', 'FotosAlumnos/'),
(45, '123213', 'weqwe', 'qweq', 'qwe', 'Femenino', 'Inicial', '3aÃ±os', 'A', '2018-05-09', 'qweqwe', 'qweqw', 'eqwe', 'eqwe', 'FotosAlumnos/'),
(46, '1231231231', '123', '123', '123', 'Femenino', 'Inicial', '4aÃ±os', 'A', '2018-05-07', '123', '123', '123', '123', 'FotosAlumnos/'),
(47, '123', '123', '123', '123', 'Femenino', 'Primaria', '1ro', 'A', '2018-05-08', '123', '123', '123', '123123', 'FotosAlumnos/'),
(48, '1111', '111', '1111', '1111', 'Femenino', 'Inicial', '3aÃ±os', 'A', '0000-00-00', '11111', '1111', '1111', '11111', 'FotosAlumnos/'),
(49, '12313', 'Wilber Javier', 'OrmeÃ±o Vera', 'OrmeÃ±o Vera', 'Masculino', 'Inicial', '4aÃ±os', 'A', '2018-05-02', '994318344', '111', 'wilber.ormeno@hotmail.com', 'Calle Amador Merino Reyna 492', 'FotosAlumnos/cintia-moreno.jpg'),
(51, '222121', '2', '2', '2', 'Femenino', 'Inicial', '3aÃ±os', 'A', '1111-11-11', '1111', '111', '111', '111', 'FotosAlumnos/cintia-moreno.jpg'),
(52, '222', '22', '22', '222', 'Femenino', 'Primaria', '2do', 'A', '0022-02-22', '22', '222', '22', '222', 'FotosAlumnos/'),
(54, '3333', '3', '33', '33', 'Femenino', 'Inicial', '3aÃ±os', 'A', '2015-01-11', '888', '8', '88', '88', 'FotosAlumnos/');

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
(1, 54, 'ewqe', 'ewqe', 'ewqe', 'qwe', '', '');

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
(2010, 1);

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
(2, 'Inicial', '3aÃ±os', 'A');

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
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `apoderados`
--
ALTER TABLE `apoderados`
  MODIFY `id_apoderado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
