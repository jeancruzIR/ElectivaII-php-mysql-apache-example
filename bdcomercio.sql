-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2022 a las 20:30:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcomercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `tipousuario` char(10) NOT NULL,
  `fechaing` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombre`, `apellido`, `correo`, `telefono`, `pais`, `contrasena`, `tipousuario`, `fechaing`) VALUES
(4, 'admin1', 'probar', 'admin1@yahoo.com', '', '', '123456a', 'admin', '2015-11-24 00:00:00'),
(7, 'alma', 'lopez', 'alma@yahoo.com', '', '', '525525q', 'Cliente', '2015-11-22 00:00:00'),
(8, 'usuario1', 'probar', 'usuario1@yahoo.com', '', '', '123456a', 'Cliente', '2015-11-22 00:00:00'),
(11, 'javier', 'gomez', 'jago@yahoo.com', '2258-8855', 'el salvador', '232345a', 'admin', '2022-05-31 05:46:35'),
(12, 'karen', 'escobar', 'karen@yahoo.com', '7788-9966', 'el salvador', '433443q', 'Cliente', '2022-05-31 05:48:14'),
(13, 'miriam', 'quintanilla', 'miqui@yahoo.com', '8888-9999', 'el salvador', '11223344q', 'Cliente', '2022-06-01 06:29:50'),
(15, 'mario', 'montes', 'mario@google.com', '5558-8888', 'el salvador', '4445556y', 'Cliente', '2022-06-01 07:46:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
