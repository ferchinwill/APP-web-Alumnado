-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2024 a las 20:19:06
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
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `carrito` text DEFAULT NULL,
  `historial_compras` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logins`
--

INSERT INTO `logins` (`id`, `Nombre`, `Correo`, `Contraseña`, `carrito`, `historial_compras`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', NULL, NULL),
(2, 'Profesor1', 'profesor1@example.com', 'admin', NULL, NULL),
(3, 'Profesor2', 'profesor2@example.com', 'admin', NULL, NULL),
(4, 'Profesor3', 'profesor3@example.com', 'admin', NULL, NULL),
(5, 'Profesor4', 'profesor4@example.com', 'admin', NULL, NULL),
(6, 'Profesor5', 'profesor5@example.com', 'admin', NULL, NULL),
(7, 'Profesor6', 'profesor6@example.com', 'admin', NULL, NULL),
(8, 'Profesor7', 'profesor7@example.com', 'admin', NULL, NULL),
(9, 'Profesor8', 'profesor8@example.com', 'admin', NULL, NULL),
(10, 'Profesor9', 'profesor9@example.com', 'admin', NULL, NULL),
(11, 'Profesor10', 'profesor10@example.com', 'admin', NULL, NULL),
(12, 'fernando', 'admin@admin.com', 'admin', NULL, NULL),
(13, 'jorge', 'admin@admin.com', 'admin', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
