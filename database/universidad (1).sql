-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2024 a las 20:53:04
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
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Grado` varchar(10) NOT NULL,
  `Genero` varchar(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `carrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `Grado`, `Genero`, `nombre`, `correo`, `telefono`, `carrera`) VALUES
(1, '4º', 'Masculino', 'fernando', 'idea_software@hotmail.com', '8331553481', 'Ing.Negocios'),
(2, '1º', 'Masculino', 'jorge', 'hipolito@hotmail.com', '8331367579', 'Ing.Sist.Computacionales'),
(3, '1º', 'Masculino', 'maria', 'pruebas@pruebas.com', '8331367579', 'Ing.Negocios'),
(4, '1º', 'Masculino', 'Veronica', 'pruebas@pruebas.com', '8331367579', 'Ing.Negocios'),
(5, '5º', 'Masculino', 'Andrea', 'pruebas@pruebas.com', '8331367579', 'Ing.Negocios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `EmpleadoID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `CargoID` int(11) DEFAULT NULL,
  `DepartamentoID` int(11) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `FechaContratacion` date DEFAULT NULL,
  `Salario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `HorarioID` int(11) NOT NULL,
  `EmpleadoID` int(11) DEFAULT NULL,
  `DiaSemana` varchar(10) DEFAULT NULL,
  `HoraEntrada` time DEFAULT NULL,
  `HoraSalida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_academico`
--

CREATE TABLE `personal_academico` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `CargoID` int(11) NOT NULL,
  `DepartamentoID` int(11) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Salario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal_academico`
--

INSERT INTO `personal_academico` (`ID`, `Nombre`, `Apellido`, `CargoID`, `DepartamentoID`, `Telefono`, `Email`, `fecha`, `Salario`) VALUES
(0, 'FERNANDO', 'wilches', 0, 0, '8331553481', 'compras_will2@hotmail.com', '2024-04-15 18:20:06', 1500.00),
(0, 'FERNANDO', 'wilches', 0, 0, '8331553481', 'compras_will2@hotmail.com', '2024-04-15 18:20:06', 1500.00),
(0, 'FERNANDO', 'wilches', 0, 0, '8331553481', 'compras_will2@hotmail.com', '2024-04-15 18:20:06', 1500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `Nombre`, `Correo`, `Contraseña`, `fecha`) VALUES
(1, 'adminTest', 'admin@admin.com', '$2y$10$cQWIPJNr9RRtfJ5Vxtbdg.NVvvUuE4iUr72CXAhRxHzjavqci18O6', '2023-11-28 02:17:57'),
(17, 'mi', 'profesor6@example.com', 'admin', '2024-04-10 17:20:49'),
(18, 'ROBERTO ', 'profesor11@example.com', 'ADMIN', '2024-04-15 02:05:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`EmpleadoID`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`HorarioID`),
  ADD KEY `EmpleadoID` (`EmpleadoID`);

--
-- Indices de la tabla `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`EmpleadoID`) REFERENCES `empleados` (`EmpleadoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
