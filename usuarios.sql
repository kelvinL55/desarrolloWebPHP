-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 18:46:04
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
-- Base de datos: `persona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `cedula`, `correo`, `telefono`, `rol`, `fecha_registro`) VALUES
(2, 'Daniel', '1719953786', 'daniel13@gmail.com', '0998453689', 'Jefe Regional', '2020-10-20'),
(8, 'nely', '1750671024', 'nely@gmail.com', '0994622492', 'directivo', '2020-07-27'),
(9, 'Maria Jose herrera', '1750671008', 'majo@gmail.com', '0994622496', 'Pasante', '2021-09-17'),
(11, 'haley', '1266359858', 'haleyc@hotmail.com', '0995632870', 'recursos humanos', '2022-09-19'),
(12, 'percival', '1715523014', 'perci@gmail.com', '0997706541', ' Pasante', '2023-05-15'),
(13, 'maria', '1425896310', 'maria152@gmail.com', '0999601043', 'Gerente', '2022-10-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
