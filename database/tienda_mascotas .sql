-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 05:35:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4
CREATE DATABASE tienda_mascotas;
USE tienda_mascotas;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_mascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alertas`
--

CREATE TABLE `alertas` (
  `idAlerta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `idEmisor` int(11) NOT NULL,
  `nombreEmisor` varchar(150) NOT NULL,
  `numeroEmisor` int(10) NOT NULL,
  `correoEmisor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alertas`
--

INSERT INTO `alertas` (`idAlerta`, `idUsuario`, `mensaje`, `idEmisor`, `nombreEmisor`, `numeroEmisor`, `correoEmisor`) VALUES
(8, 88, 'Te he enviado una alerta', 83, '', 2147483647, 'user2@example.com'),
(9, 77, 'Te he enviado una alerta', 83, 'user2', 2147483647, 'user2@example.com'),
(10, 77, 'Te he enviado una alerta', 71, 'user', 115315, 'dgdrgdr'),
(11, 88, 'Te he enviado una alerta', 71, 'user', 115315, 'dgdrgdr'),
(12, 77, 'Te he enviado una alerta', 71, 'user', 115315, 'dgdrgdr'),
(13, 69, 'Te he enviado una alerta', 71, 'user', 115315, 'dgdrgdr'),
(14, 77, 'Te he enviado una alerta', 83, 'user2', 2147483647, 'user2@example.com'),
(15, 69, 'Te he enviado una alerta', 81, 'usuario1', 2147483647, 'example@example.com'),
(16, 69, 'Te he enviado una alerta', 71, 'user', 115315, 'dgdrgdr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idArticulo` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precioVenta` decimal(11,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idArticulo`, `idCategoria`, `idUsuario`, `nombre`, `precioVenta`, `stock`, `descripcion`, `imagen`) VALUES
(15, 2, 77, 'reloj para gatos', 50000.00, 10, 'lindo reloj llamativo', 'iii/feature_prod_02.jpg'),
(16, 2, 76, '111', 1111.00, 11, '111', 'iii/brand_04.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'diversion y entretenimiento'),
(2, 'Estilo y confort'),
(3, 'bienestar y cuidado'),
(4, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `idNotificacion` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`) VALUES
(1, 'admin'),
(2, 'empresa'),
(3, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `RUT` int(9) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `RUT`, `direccion`, `telefono`, `correo`, `clave`, `idRol`) VALUES
(69, 'empre', 154665984, 'dcvzdvzd', 10101515, 'zffxdf', '1234', 2),
(70, 'empre', 154665984, 'dcvzdvzd', 10101515, 'zffxdf', '1234', 2),
(71, 'user', 0, 'sgdfrsgd', 115315, 'dgdrgdr', '555', 3),
(72, 'admin', 0, 'fthfj', 621315, 'ghvcvcfhcvf', 'senasofia1234', 1),
(73, 'usuariosss', 0, 'segfsegfs', 12515, 'gvhvgj', '123456', 3),
(74, 'yo', 123, 'yoyo', 3225, 'yo@yo.com', '1234', 2),
(75, 'empresa sas', 123465468, 'cra 243 # 24-23', 3225465574, 'empresa@empresa.com', '', 2),
(76, 'empresa sas', 123465468, 'cra 243 # 24-23', 3225465574, 'empresa@empresa.com', '1234', 2),
(77, 'lolitas sas', 465529561, 'cra 111111 # 23-32', 3224584521, 'lolitas@gmail.com', '1234', 2),
(78, 'juanitos asocia', 164512147, 'cra 25#1344-4g', 3224651254, 'juanitos@outlook.com', '4321', 2),
(80, 'herramientas sas', 551454646, 'calle sas # rot', 21542154, 'herra@gmail.com', '123456789', 2),
(81, 'usuario1', 0, 'calle 23 # 24 23', 3245648925, 'example@example.com', '4321', 3),
(83, 'user2', 0, 'cra 23 #54-23', 3201256891, 'user2@example.com', '1234', 3),
(84, 'SENA', 1115454644, 'cra 64 #13-13', 3222011541, 'sena@example', '1234', 2),
(85, 'alberto', 0, 'tercer milenio', 3333333333, 'ej@example.com', 'sena1234', 3),
(88, 'jhan ', 0, 'calle999', 3220564, 'jhancarlo1909@gmail.com', '1234', 2),
(89, 'fffff', 0, '000', 0, '0000@000', '111111111q', 2),
(90, '....', 0, '0000', 0, '00@00', '00000000q', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`idAlerta`),
  ADD KEY `alertas_ibfk_1` (`idUsuario`),
  ADD KEY `idEmisor` (`idEmisor`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idEmpresa` (`idUsuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`idNotificacion`),
  ADD KEY `idArticulo` (`idArticulo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `id_rol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alertas`
--
ALTER TABLE `alertas`
  MODIFY `idAlerta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `idNotificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD CONSTRAINT `alertas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alertas_ibfk_2` FOREIGN KEY (`idEmisor`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_ibfk_4` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `notificacion_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `articulo` (`idArticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacion_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
