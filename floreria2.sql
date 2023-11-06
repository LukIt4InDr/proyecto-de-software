-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 03:19:25
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
-- Base de datos: `floreria2`
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
('Julio', 'Pereira', 'jpereira@gmail.com', 1167010590, 'Cabildo', 50, 'Canning', 'Echeverria', 1801, 51, 'cliente2');

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
(50, 'Juan', 'ortega', 1167810195, 'juor@gmail.com', 'Laprida', 58, 'Miramar', 'La Costa', 1870, 'Arreglo de fresias perfumadas', 'Entrega unica', 80, 2),
(51, 'Florencia', 'Gomes', 1167777777, 'maria@gmail.com', 'Laprida', 58, 'Avellenada', 'Zona Sur', 2000, '', 'Entrega Unica', 81, 18);

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
(11, 'preparao', 'entregado'),
(12, 'preparao', 'no entregado');

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
(7, 6000, '2023-11-08', 'pendiente', 18, 100);

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
  `ID_Tajeta` int(11) NOT NULL,
  `Tipo` varchar(60) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`ID_Tajeta`, `Tipo`, `Nombre`, `Precio`) VALUES
(1, 'prediseñada', 'Felicidades', 2000),
(2, 'personalizada', 'Bienvenido', 3000);

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
(8, 42000.00);

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
  ADD PRIMARY KEY (`ID_Tajeta`);

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
-- AUTO_INCREMENT de la tabla `estado_del_pedido1`
--
ALTER TABLE `estado_del_pedido1`
  MODIFY `IDEstado_del_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `IDPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `ID_Tajeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `fk_EMPLEADO_USUARIO` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`);

--
-- Filtros para la tabla `historial_del_estado`
--
ALTER TABLE `historial_del_estado`
  ADD CONSTRAINT `fk_HISTORIAL_DEL_ESTADO_PEDIDO` FOREIGN KEY (`IDPedido`) REFERENCES `pedido` (`IDPedido`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_PEDIDO_EMPLEADO` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleado` (`ID_Empleado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_PERFIL_CARGO` FOREIGN KEY (`IDPerfil_Cargo`) REFERENCES `perfil_cargo` (`IDPerfil_Cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
