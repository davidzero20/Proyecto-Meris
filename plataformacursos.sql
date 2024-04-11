-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-04-2024 a las 21:14:42
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataformacursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `codigo` varchar(5) NOT NULL,
  `curso` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`codigo`, `curso`) VALUES
('ne34s', 'diseño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroalumno`
--

DROP TABLE IF EXISTS `registroalumno`;
CREATE TABLE IF NOT EXISTS `registroalumno` (
  `id` bigint NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registroalumno`
--

INSERT INTO `registroalumno` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1804200598765, 'jazmin', 'umanzor', 'jazmin@gmail.com', '0987');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registromaestro`
--

DROP TABLE IF EXISTS `registromaestro`;
CREATE TABLE IF NOT EXISTS `registromaestro` (
  `id` bigint NOT NULL,
  `nombre` text,
  `apellido` text,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registromaestro`
--

INSERT INTO `registromaestro` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(0, '', '', '', ''),
(18042001678, 'df', 'dfs', 'junior@gmail.com', 'r567'),
(1804200104367, 'junior', ' vasquez', 'junior@gmail.com', '2324');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
