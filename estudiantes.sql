-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2023 a las 05:22:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_estudiantil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombres`, `apellidos`, `edad`, `telefono`, `email`, `imagen`) VALUES
(1, 'nelly', 'gomez', 6, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(3, 'sara', 'pico', 8, 2147483647, 'stefannie.b.ruiz@gmail.com', 'yo.jpeg'),
(4, 'nicolas', 'Rodriguez', 9, 2147483647, 'nico.ro@gmail.com', 'imgen2.jpg'),
(5, 'nicolas', 'Rodriguez', 9, 2147483647, 'nico.ro@gmail.com', 'imgen2.jpg'),
(6, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(7, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(8, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(9, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(10, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(11, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', ''),
(12, 'nelly', 'gomez', 5, 2147483647, 'julieth_andreita33@hotmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
