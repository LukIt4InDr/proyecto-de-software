-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2023 a las 03:04:16
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
-- Base de datos: `floreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_empresa`
--

CREATE TABLE `cliente_empresa` (
  `Nombre` varchar(45) NOT NULL,
  `ApellidoDeCliente` varchar(45) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Calle` varchar(45) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Localidad` varchar(60) NOT NULL,
  `Partido` varchar(60) NOT NULL,
  `CP` int(11) NOT NULL,
  `IDCliente_Empresa` int(11) NOT NULL,
  `Usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente_empresa`
--

INSERT INTO `cliente_empresa` (`Nombre`, `ApellidoDeCliente`, `Email`, `Telefono`, `Calle`, `Numero`, `Localidad`, `Partido`, `CP`, `IDCliente_Empresa`, `Usuario`) VALUES
('Ana', 'Garcia', 'agarcia@gmail.com', 1176879650, 'Edison', 30, 'Villa Golf', 'Ezeiza', 1987, 50, 'cliente1'),
('Julio', 'Pereira', 'jpereira@gmail.com', 1167010590, 'Cabildo', 50, 'Canning', 'Echeverria', 1801, 51, 'cliente2'),
('Maria', 'Gomes', 'maria@gmail.com', 1177778888, 'Laprida', 525, 'La plata', 'La plata', 1002, 52, 'cliente1'),
('Maria', 'Gomes', 'maria@gmail.com', 1177778888, 'Laprida', 152, 'La plata', 'La plata', 1002, 53, 'cliente1'),
('Maria', 'Gomes', 'maria@gmail.com', 1155555555, 'laprida', 1956, 'Avellaneda', 'Avellaneda', 1862, 54, 'cliente1'),
('Maria', 'Gomes', 'maria@gmail.com', 1177775555, 'laprida', 1956, 'Avellaneda', 'Avellaneda', 1244, 55, 'cliente1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE `destinatario` (
  `Codigo_de_Pedido` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido_destinatario` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Calle` varchar(45) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Localidad` varchar(45) NOT NULL,
  `Partido` varchar(45) NOT NULL,
  `CP` int(11) NOT NULL,
  `Producto` varchar(45) NOT NULL,
  `Observacion` varchar(60) NOT NULL,
  `IDDestinatario` int(11) NOT NULL,
  `IDPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`Codigo_de_Pedido`, `Nombre`, `Apellido_destinatario`, `Telefono`, `Email`, `Calle`, `Numero`, `Localidad`, `Partido`, `CP`, `Producto`, `Observacion`, `IDDestinatario`, `IDPedido`) VALUES
(50, 'Florencia', 'Gomes', 1167777777, 'maria@gmail.com', 'Laprida', 58, 'Avellenada', 'Zona Sur', 2000, 'Arreglo de fresias perfumadas', 'Entrega Unica', 0, 2),
(50, 'Juan', 'ortega', 1167810195, 'juor@gmail.com', 'Laprida', 58, 'Miramar', 'La Costa', 1870, 'Arreglo de fresias perfumadas', 'Entrega unica', 80, 2),
(106581, 'Yeni', 'Gomez', 1188887777, 'maria@gmail.com', 'Rivadavia', 152, 'la plata', 'la plata', 1003, '', 'Entrega Unica', 82, 84),
(809872, 'Yeni', 'Gomez', 1188887777, 'maria@gmail.com', 'Rivadavia', 152, 'la plata', 'la plata', 1003, '', 'Entrega Unica', 83, 85),
(583530, 'Romina', 'Gomes', 1167777777, 'maria@gmail.com', 'laprida', 85, 'Avellaneda', 'Avellaneda', 4321, '', 'Entrega Unica', 84, 86),
(264432, 'Florencia', 'Gomes', 1177889911, 'maria@gmail.com', 'laprida', 85, 'Avellaneda', 'Avellaneda', 1033, '', 'Entrega Unica', 85, 87);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `IDUsuario` int(11) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `ID_Empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Nombre`, `Apellido`, `IDUsuario`, `Usuario`, `ID_Empleado`) VALUES
('Luisa', 'Roa', 10, 'empleada1', 100),
('Rosa', 'Ortega', 11, 'empleada2', 101),
('Juan', 'Perez', 12, 'empleado3', 102),
('Pepe', 'Moreno', 13, 'empleado4', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_del_envio`
--

CREATE TABLE `estado_del_envio` (
  `IdEstado_Envio` int(11) NOT NULL,
  `Estado_anterior_del_Envio` varchar(45) DEFAULT NULL,
  `Estado_posterior_del_Envio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_del_envio`
--

INSERT INTO `estado_del_envio` (`IdEstado_Envio`, `Estado_anterior_del_Envio`, `Estado_posterior_del_Envio`) VALUES
(11, 'preparado', 'entregado'),
(12, 'preparado', 'no entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_del_pedido1`
--

CREATE TABLE `estado_del_pedido1` (
  `IDEstado_del_Pedido` int(11) NOT NULL,
  `Nombre_del_Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_del_pedido1`
--

INSERT INTO `estado_del_pedido1` (`IDEstado_del_Pedido`, `Nombre_del_Estado`) VALUES
(1, 'pendiente'),
(2, 'entregado'),
(3, 'preparado'),
(4, 'enviado'),
(5, 'no_entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_del_estado`
--

CREATE TABLE `historial_del_estado` (
  `Codigo_de_Estado` int(11) NOT NULL,
  `Codigo_de_Pedido` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `IDHistorial_de_Estado` int(11) NOT NULL,
  `IDPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial_del_estado`
--

INSERT INTO `historial_del_estado` (`Codigo_de_Estado`, `Codigo_de_Pedido`, `Fecha`, `IDHistorial_de_Estado`, `IDPedido`) VALUES
(1, 1000, '2023-10-29', 10, 2),
(3, 1001, '2023-10-29', 11, 3),
(4, 1002, '2023-10-29', 12, 4),
(2, 1003, '2023-10-29', 13, 5),
(5, 1004, '2023-10-29', 14, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Cantidad` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Fecha_Entrega` date NOT NULL,
  `Estado_Actual` varchar(45) NOT NULL,
  `IDPedido` int(11) NOT NULL,
  `ID_Empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Cantidad`, `Precio`, `Fecha_Entrega`, `Estado_Actual`, `IDPedido`, `ID_Empleado`) VALUES
(4, 4000, '2023-10-29', 'preparado', 2, 100),
(1, 6000, '2023-10-29', 'preparado', 3, 100),
(7, 6000, '2023-10-29', 'preparado', 4, 100),
(4, 7000, '2023-10-29', 'preparado', 5, 100),
(4, 6000, '2023-10-29', 'preparado', 6, 100),
(7, 6000, '0000-00-00', 'pendiente', 7, 100),
(4, 7000, '0000-00-00', 'pendiente', 8, 100),
(2, 6000, '2023-11-06', 'pendiente', 10, 100),
(4, 4000, '2023-11-06', 'pendiente', 11, 100),
(7, 6000, '2023-11-08', 'pendiente', 12, 100),
(7, 6000, '2023-11-08', 'pendiente', 13, 100),
(7, 6000, '2023-11-08', 'pendiente', 14, 100),
(7, 6000, '2023-11-08', 'pendiente', 15, 100),
(7, 6000, '2023-11-08', 'pendiente', 16, 100),
(7, 6000, '2023-11-08', 'pendiente', 17, 100),
(7, 6000, '2023-11-08', 'pendiente', 18, 100),
(3, 9000, '2024-01-04', 'pendiente', 28, 100),
(2, 6000, '2023-11-09', 'pendiente', 29, 100),
(2, 6000, '2023-11-15', 'pendiente', 30, 100),
(3, 9000, '2023-11-30', 'pendiente', 31, 100),
(3, 9000, '2023-11-15', 'pendiente', 32, 100),
(3, 9000, '2023-11-08', 'pendiente', 33, 100),
(3, 9000, '2023-11-08', 'pendiente', 34, 100),
(3, 6000, '2023-11-21', 'pendiente', 35, 100),
(7, 9000, '2023-11-23', 'pendiente', 36, 100),
(3, 6000, '2023-11-22', 'pendiente', 37, 100),
(6, 9000, '2023-12-07', 'pendiente', 38, 100),
(6, 9000, '2023-12-07', 'pendiente', 39, 100),
(2, 6000, '2023-11-14', 'pendiente', 40, 100),
(2, 6000, '2023-11-14', 'pendiente', 41, 100),
(2, 6000, '2023-11-08', 'pendiente', 42, 100),
(4, 6000, '2023-11-08', 'pendiente', 43, 100),
(4, 6000, '2023-11-14', 'pendiente', 44, 100),
(4, 6000, '2023-11-16', 'pendiente', 45, 100),
(2, 6000, '2023-11-30', 'pendiente', 46, 100),
(23, 6000, '2023-11-09', 'pendiente', 47, 100),
(23, 6000, '2023-11-09', 'pendiente', 48, 100),
(4, 6000, '2023-11-08', 'pendiente', 49, 100),
(4, 6000, '2023-11-08', 'pendiente', 50, 100),
(8, 9000, '2023-11-09', 'pendiente', 51, 100),
(3, 9000, '2023-11-08', 'pendiente', 52, 100),
(3, 7000, '2023-11-15', 'pendiente', 53, 100),
(3, 7000, '2023-11-15', 'pendiente', 54, 100),
(5, 9000, '2023-11-15', 'pendiente', 55, 100),
(4, 8000, '2023-11-15', 'pendiente', 56, 100),
(3, 7000, '2023-11-15', 'pendiente', 57, 100),
(3, 7000, '2023-11-15', 'pendiente', 58, 100),
(5, 9000, '2023-11-15', 'pendiente', 59, 100),
(4, 8000, '2023-11-15', 'pendiente', 60, 100),
(3, 7000, '2023-11-09', 'pendiente', 61, 100),
(3, 7000, '2023-11-09', 'pendiente', 62, 100),
(5, 9000, '2023-11-09', 'pendiente', 63, 100),
(4, 8000, '2023-11-09', 'pendiente', 64, 100),
(2, 9000, '2023-11-09', 'pendiente', 65, 100),
(3, 4000, '2023-11-09', 'pendiente', 66, 100),
(3, 4000, '2023-11-09', 'pendiente', 67, 100),
(5, 9000, '2023-11-09', 'pendiente', 68, 100),
(3, 7000, '2023-11-09', 'pendiente', 69, 100),
(3, 7000, '2023-11-09', 'pendiente', 70, 100),
(5, 9000, '2023-11-09', 'pendiente', 71, 100),
(4, 8000, '2023-11-09', 'pendiente', 72, 100),
(2, 9000, '2023-11-09', 'pendiente', 73, 100),
(3, 4000, '2023-11-09', 'pendiente', 74, 100),
(3, 4000, '2023-11-09', 'pendiente', 75, 100),
(5, 9000, '2023-11-09', 'pendiente', 76, 100),
(14, 6000, '2023-11-10', 'pendiente', 77, 100),
(2, 6000, '2023-12-07', 'pendiente', 78, 100),
(1, 9000, '2023-11-10', 'pendiente', 79, 100),
(1, 6000, '2023-11-16', 'pendiente', 80, 100),
(1, 6000, '2023-11-16', 'pendiente', 81, 100),
(1, 6000, '2023-11-16', 'pendiente', 82, 100),
(1, 6000, '2023-11-12', 'pendiente', 83, 100),
(3, 6000, '2023-11-12', 'pendiente', 84, 100),
(1, 6000, '2023-11-12', 'pendiente', 85, 100),
(7, 6000, '2023-11-12', 'pendiente', 86, 100),
(3, 7000, '2023-11-16', 'pendiente', 87, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_cargo`
--

CREATE TABLE `perfil_cargo` (
  `Descripcion` varchar(50) DEFAULT NULL,
  `IDPerfil_Cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil_cargo`
--

INSERT INTO `perfil_cargo` (`Descripcion`, `IDPerfil_Cargo`) VALUES
('cliente', 1),
('administrador', 2),
('encargado', 3),
('vendedor', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_catalogo`
--

CREATE TABLE `producto_catalogo` (
  `Imagen_del_AF` varchar(45) NOT NULL,
  `Nombre_del_AF` varchar(45) NOT NULL,
  `Codigo_del_AF` int(11) NOT NULL,
  `Precio_del_AF` int(11) NOT NULL,
  `Descripcion_del_AF` varchar(50) DEFAULT NULL,
  `Activo` varchar(10) NOT NULL,
  `IDProducto_Catalogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_catalogo`
--

INSERT INTO `producto_catalogo` (`Imagen_del_AF`, `Nombre_del_AF`, `Codigo_del_AF`, `Precio_del_AF`, `Descripcion_del_AF`, `Activo`, `IDProducto_Catalogo`) VALUES
('Floreria.jpg', 'Arreglo de Fresias Perfumados', 4230, 4000, '25 unidades', 'si', 7580),
('2.jpg', 'Arreglo Multicolor de Rosas y Flores', 4231, 6000, '25 unidades', 'si', 7581),
('3.jpg', 'Arreglo premium blanco', 4232, 7000, '25 unidades', 'si', 7582),
('4.jpg', 'Arreglo Multicolor Premium', 4233, 8000, '25 unidades', 'si', 7583),
('5.jpg', 'Arreglo  de Astromelias ', 4234, 9000, '25 unidades', 'si', 7584);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `ID_Tarjeta` int(11) NOT NULL,
  `Tipo` varchar(60) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` int(11) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`ID_Tarjeta`, `Tipo`, `Nombre`, `Precio`, `imagen`) VALUES
(1, 'prediseñada', 'Felicidades', 2000, 'tarjeta1.jpg '),
(2, 'personalizada', 'Bienvenido', 3000, 'tarjeta2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombre_de_Usuario` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `IDUsuario` int(11) NOT NULL,
  `IDPerfil_Cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre_de_Usuario`, `Password`, `IDUsuario`, `IDPerfil_Cargo`) VALUES
('vendedor1', 'flor1', 10, 20),
('cliente1', 'flor2', 11, 1),
('administrador1', 'flor3', 12, 2),
('encargado1', 'flor4', 13, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `total` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `total`) VALUES
(1, 28000.00),
(2, 42000.00),
(3, 42000.00),
(4, 42000.00),
(5, 42000.00),
(6, 42000.00),
(7, 42000.00),
(8, 42000.00),
(9, 6000.00),
(10, 6000.00),
(11, 18000.00),
(12, 6000.00),
(13, 12000.00),
(14, 9000.00),
(15, 6000.00),
(16, 6000.00),
(17, 6000.00),
(18, 27000.00),
(19, 12000.00),
(20, 12000.00),
(21, 27000.00),
(22, 27000.00),
(23, 27000.00),
(24, 27000.00),
(25, 18000.00),
(26, 63000.00),
(27, 18000.00),
(28, 54000.00),
(29, 54000.00),
(30, 12000.00),
(31, 12000.00),
(32, 36000.00),
(33, 24000.00),
(34, 24000.00),
(35, 12000.00),
(36, 138000.00),
(37, 138000.00),
(38, 24000.00),
(39, 24000.00),
(40, 72000.00),
(41, 27000.00),
(42, 119000.00),
(43, 119000.00),
(44, 206000.00),
(45, 206000.00),
(46, 84000.00),
(47, 12000.00),
(48, 9000.00),
(49, 6000.00),
(50, 6000.00),
(51, 6000.00),
(52, 6000.00),
(53, 18000.00),
(54, 6000.00),
(55, 42000.00),
(56, 24000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente_empresa`
--
ALTER TABLE `cliente_empresa`
  ADD PRIMARY KEY (`IDCliente_Empresa`);

--
-- Indices de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  ADD PRIMARY KEY (`IDDestinatario`),
  ADD KEY `fk_DESTINATARIO_PEDIDO` (`IDPedido`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_Empleado`),
  ADD KEY `fk_EMPLEADO_USUARIO` (`IDUsuario`);

--
-- Indices de la tabla `estado_del_envio`
--
ALTER TABLE `estado_del_envio`
  ADD PRIMARY KEY (`IdEstado_Envio`);

--
-- Indices de la tabla `estado_del_pedido1`
--
ALTER TABLE `estado_del_pedido1`
  ADD PRIMARY KEY (`IDEstado_del_Pedido`);

--
-- Indices de la tabla `historial_del_estado`
--
ALTER TABLE `historial_del_estado`
  ADD PRIMARY KEY (`IDHistorial_de_Estado`),
  ADD KEY `fk_HISTORIAL_DEL_ESTADO_PEDIDO` (`IDPedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`IDPedido`),
  ADD KEY `fk_PEDIDO_EMPLEADO` (`ID_Empleado`);

--
-- Indices de la tabla `perfil_cargo`
--
ALTER TABLE `perfil_cargo`
  ADD PRIMARY KEY (`IDPerfil_Cargo`);

--
-- Indices de la tabla `producto_catalogo`
--
ALTER TABLE `producto_catalogo`
  ADD PRIMARY KEY (`IDProducto_Catalogo`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`ID_Tarjeta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUsuario`),
  ADD KEY `fk_USUARIO_PERFIL_CARGO` (`IDPerfil_Cargo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente_empresa`
--
ALTER TABLE `cliente_empresa`
  MODIFY `IDCliente_Empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `IDDestinatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `estado_del_envio`
--
ALTER TABLE `estado_del_envio`
  MODIFY `IdEstado_Envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estado_del_pedido1`
--
ALTER TABLE `estado_del_pedido1`
  MODIFY `IDEstado_del_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `historial_del_estado`
--
ALTER TABLE `historial_del_estado`
  MODIFY `IDHistorial_de_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `IDPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `perfil_cargo`
--
ALTER TABLE `perfil_cargo`
  MODIFY `IDPerfil_Cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `producto_catalogo`
--
ALTER TABLE `producto_catalogo`
  MODIFY `IDProducto_Catalogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7585;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `ID_Tarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destinatario`
--
ALTER TABLE `destinatario`
  ADD CONSTRAINT `destinatario_ibfk_1` FOREIGN KEY (`IDPedido`) REFERENCES `pedido` (`IDPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `kf_Empleado_Usuario` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`);

--
-- Filtros para la tabla `historial_del_estado`
--
ALTER TABLE `historial_del_estado`
  ADD CONSTRAINT `fk_HISTORIAL_DEL_ESTADO_PEDIDO` FOREIGN KEY (`IDPedido`) REFERENCES `pedido` (`IDPedido`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Empleado` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleado` (`ID_Empleado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Perfil_Cargo` FOREIGN KEY (`IDPerfil_Cargo`) REFERENCES `perfil_cargo` (`IDPerfil_Cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
