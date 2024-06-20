-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2024 a las 00:33:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodega`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombreApellido` varchar(70) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `telefono` int(30) NOT NULL,
  `mensaje` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombreApellido`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'SEBASTIAN TORO', 'storo@itsinfocom.com', 2147483647, 'Saludos'),
(2, 'SEBASTIAN TORO', 'storo@itsinfocom.com', 2147483647, 'Saludos'),
(4, 'BORIS CASTRO', 'bcastro@itsinfocom.com', 322847625, 'Saludos Boris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(100) NOT NULL,
  `inOut` varchar(200) DEFAULT NULL,
  `dia` date NOT NULL,
  `ubicacion` varchar(200) DEFAULT NULL,
  `rack` varchar(200) DEFAULT NULL,
  `equipo` varchar(200) DEFAULT NULL,
  `ocTicket` varchar(200) DEFAULT NULL,
  `serial` varchar(200) DEFAULT NULL,
  `entregado` varchar(200) DEFAULT NULL,
  `recibido` varchar(200) DEFAULT NULL,
  `observacion` varchar(200) DEFAULT NULL,
  `eSol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `inOut`, `dia`, `ubicacion`, `rack`, `equipo`, `ocTicket`, `serial`, `entregado`, `recibido`, `observacion`, `eSol`) VALUES
(2, 'IN', '2023-12-19', 'TELCO 2', '14', 'ROUTER', '6548215', 'FNS15020KJ4', 'SAMUEL', 'HAWAR', 'N/A', 'SI'),
(5, 'IN', '2023-12-20', 'AREA BLANCA', 'AK04', 'ROUTER', 'C3925', 'FNS15020KJ6', 'HAWAR', 'SAMUEL', 'N/A', 'SI'),
(8, 'OUT', '2023-12-20', 'COB', '1', 'SWITCH', '6548215', 'FNS15020KJ6', 'HAWAR', 'HAWAR', 'N/A', 'SI'),
(9, 'IN', '2023-12-27', 'TELCO 1', '14', 'ROUTER', '6548265', 'FNS15020KJ4', 'HAWAR', 'HAWAR', 'N/A', 'SI'),
(10, 'OUT', '2023-12-28', 'AREA BLANCA', 'AE34', 'UCS C220', '4567889', 'FXO763NHDH', 'SAMUEL', 'RICARDO', 'N/A', 'NO'),
(11, 'IN', '2023-12-13', 'bodega', 'n/a', 'sfp', 'fet', 'FDO0309I3545', 'HAWAR', 'SAMUEL', 'saludos', 'si'),
(12, 'OUT', '2023-12-29', 'bodega', 'N/A', 'SWITCH', '4567889', 'FNS15026KK', 'SAMUEL', 'BORIS', 'SALUDOS', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombreUsuario` varchar(70) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `fecha` date NOT NULL,
  `hora` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rma`
--

CREATE TABLE `rma` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tipodeMovimiento` varchar(70) NOT NULL,
  `tipoElemento` varchar(70) NOT NULL,
  `modelo` varchar(70) NOT NULL,
  `serial` varchar(70) NOT NULL,
  `creadoPor` varchar(70) NOT NULL,
  `casoCisco` int(30) NOT NULL,
  `RMA` int(30) NOT NULL,
  `tickectOcUsd` int(30) NOT NULL,
  `estadoEquipo` varchar(70) NOT NULL,
  `responsableMovimiento` varchar(70) NOT NULL,
  `observaciones` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rma`
--

INSERT INTO `rma` (`id`, `fecha`, `tipodeMovimiento`, `tipoElemento`, `modelo`, `serial`, `creadoPor`, `casoCisco`, `RMA`, `tickectOcUsd`, `estadoEquipo`, `responsableMovimiento`, `observaciones`) VALUES
(1, '0000-00-00', '2023-12-20', 'SWITCH', 'C9348', 'FDO26420AP4', 'CRISTIAN', 56498981, 84521389, 654235, 'BUENO', 'SAMUEL', 'NO HA LLEGADO'),
(2, '2023-12-05', 'INGRESO', 'SWITCH', 'N2K', 'FDO0309I3', 'CRISTIAN', 56498981, 84521389, 65423534, 'BUENO', 'SAMUEL', 'N/A'),
(3, '2023-12-19', 'INGRESO', 'TARJETA', 'N9K-SUP-A= ', 'F0C21251BV7', 'MAHOLI', 8945647, 802692589, 4082565, 'BUENO', 'HAWAR', 'N/A'),
(4, '2023-11-29', 'INGRESO', 'SFP', 'FET 10G', 'AVC34F56HT', 'MAHOLI', 2147483647, 85422658, 482525, 'BUENO', 'HAWAR', 'No ha llegado'),
(5, '2024-01-09', 'INGRESO', 'SWITCH', 'C9348', 'FNS15020KJ4', 'CRISTIAN', 56498981, 88882451, 65423534, 'BUENO', 'SAMUEL', 'saludos'),
(6, '2024-01-09', 'RETIRO', 'ROUTER', 'ASR 1004', 'FDO09476HT3', 'ROBERTO', 8542356, 80002547, 6235014, 'MALO', 'SAMUEL', 'SE ENVIA EL PC A CISCO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rma`
--
ALTER TABLE `rma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rma`
--
ALTER TABLE `rma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
