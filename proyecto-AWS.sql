-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2021 a las 22:02:07
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `Id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cursos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`Id`, `id_usuario`, `cursos`) VALUES
(1, 1, 'AWS Budgetsr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Apellidos` varchar(70) NOT NULL,
  `Usuario` varchar(70) NOT NULL,
  `CorreoElectronico` varchar(70) NOT NULL,
  `Contrasena` varchar(70) NOT NULL,
  `Nacimiento` date NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Telefono` int(16) NOT NULL,
  `CelReferencia` int(15) NOT NULL,
  `Ocupacion` varchar(70) NOT NULL,
  `Pais` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellidos`, `Usuario`, `CorreoElectronico`, `Contrasena`, `Nacimiento`, `Sexo`, `Telefono`, `CelReferencia`, `Ocupacion`, `Pais`) VALUES
(1, 'jesus', 'solis', 'yisus28', 'aprovado11@hotmail.com', 'mutante11', '2001-11-28', 'Hombre', 2147483647, 2147483647, 'Estudiante', '139'),
(3, 'juan', 'perez', 'j28', 'edwardcraw28@gmail.com', 'mutante11', '2001-11-16', 'Hombre', 2147483647, 2147483647, 'Estudiante', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
