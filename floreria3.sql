-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 20-11-2023 a las 14:58:15
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
-- Base de datos: `floreria3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_calificacion` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `comentario` text DEFAULT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id_calificacion`, `puntaje`, `comentario`, `id_pedido`) VALUES
(1, 5, 'Volvere. Me gusto todo.', 89),
(2, 5, 'me gusto', 88),
(3, 2, 'Mala atencion, lo recomiendo', 93),
(4, 5, 'Me parece que los voy a recomendar.', 90),
(5, 5, 'Muchas gracias por la rapida atencion', 91);

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
('Maria', 'Gomes', 'maria@gmail.com', 1177775555, 'laprida', 1956, 'Avellaneda', 'Avellaneda', 1244, 55, 'cliente1'),
('Maria', 'Gomes', 'maria@gmail.com', 1177775555, 'laprida', 1956, 'Avellaneda', 'Avellaneda', 1234, 56, 'cliente1'),
('Maria', 'Gomes', 'maria@gmail.com', 1177775555, 'Belgrano', 1956, 'Avellaneda', 'Avellaneda', 1012, 57, 'cliente1'),
('Maria', 'Gomes', 'maria@gmail.com', 1177775555, 'laprida', 1956, 'Avellaneda', 'Avellaneda', 1234, 58, 'cliente1'),
('rosa', 'OJEDA', 'mojeda098@gmail.com', 1187094356, 'irupe', 6543, 'turder', 'turder', 3874, 85, 'cliente1'),
('rosa', 'OJEDA', 'rasoj@gmail.com', 1754090987, 'irupe', 789, 'turder', 'turder', 2345, 86, 'cliente1'),
('rosa', 'OJEDA', 'rasoj@gmail.com', 1754090987, 'rivadavia', 789, 'turder', 'turder', 345, 87, ''),
('Martina', 'OJEDA', 'mojeda098@gmail.com', 1187094356, 'irupe', 789, 'turder', 'turder', 2345, 88, ''),
('Martina', 'OJEDA', 'mojeda098@gmail.com', 1123657809, 'irupe', 789, 'turder', 'turder', 3874, 89, ''),
('Martina', 'OJEDA', 'naranjaghj@gmail.com.ar', 1754090987, 'irupe', 789, 'turder', 'turder', 123, 90, ''),
('rosa', 'OJEDA', 'rasoj@gmail.com', 1123657809, 'Ituzaingo', 765, 'Palermo', 'Palermo', 3874, 91, 'cliente1'),
('Martina', 'OJEDA', 'rasoj@gmail.com', 1187094356, 'Salta', 754, 'Constitucion', 'Constitucion', 8765, 92, 'cliente1'),
('rosa', 'fiol', 'floreria570@gmail.com', 1123657809, 'Ituzaingo', 567, 'turder', 'turder', 345, 93, 'cliente1'),
('rosa', 'ert', 'floreria938@gmail.com', 1754090987, 'Salta', 765, 'Palermo', 'Palermo', 123, 94, 'vendedor1'),
('rosa', 'fiol', 'naranjaghj@gmail.com.ar', 1123657809, 'Ituzaingo', 6543, 'Adrogue', 'Adrogue', 345, 95, ''),
('rosa', 'OJEDA', 'rasoj@gmail.com', 1754090987, 'rivadavia', 1098, 'Adrogue', 'Adrogue', 5678, 96, 'cliente1'),
('Martina', 'OJEDA', 'floreria570@gmail.com', 1123657809, 'rivadavia', 789, 'Constitucion', 'Constitucion', 3874, 97, 'cliente1'),
('rosa', 'OJEDA', 'mojeda098@gmail.com', 1123657809, 'irupe', 789, 'turder', 'turder', 2345, 98, 'cliente1'),
('Martina', 'ert', 'floreria938@gmail.com', 1187094356, 'Lavalle', 765, 'Palermo', 'Palermo', 2345, 99, 'cliente1'),
('ras', 'OJ', 'mojeda098@gmail.com', 1187094356, 'rivadavia', 6543, 'Adrogue', 'Adrogue', 2345, 100, 'cliente1'),
('Martina', 'fiol', 'floreria938@gmail.com', 1123657809, 'Salta', 1098, 'Merlo', 'Merlo', 2345, 101, 'vendedor1'),
('Martina', 'fiol', 'mojeda098@gmail.com', 1123657809, 'Salta', 1098, 'Palermo', 'Palermo', 123, 102, 'vendedor1'),
('Martina', 'fiol', 'naranjaghj@gmail.com.ar', 1754090987, 'Ocantos', 765, 'lomas', 'lomas', 2345, 103, 'cliente1'),
('rosa', 'OJEDA', 'floreria570@gmail.com', 1754090987, 'irupe', 789, 'turder', 'turder', 2345, 104, 'vendedor1'),
('ras', 'fiol', 'mojeda098@gmail.com', 1123657809, 'rivadavia', 567, 'Merlo', 'Merlo', 3874, 105, 'cliente1'),
('rosa', 'fiol', 'floreriapetals62@gmail.com', 1187094356, 'irupe', 789, 'turder', 'turder', 2345, 106, 'cliente1'),
('rosa', 'ert', 'floreria938@gmail.com', 1754090987, 'Ituzaingo', 1098, 'Adrogue', 'Adrogue', 2345, 107, 'cliente1'),
('rosa', 'OJEDA', 'floreria938@gmail.com', 1123657809, 'Ocantos', 1098, 'lomas', 'lomas', 3874, 108, 'cliente1'),
('Martina', 'OJEDA', 'floreriapetals62@gmail.com', 1123657809, 'Ocantos', 6543, 'lomas', 'lomas', 2345, 109, 'cliente1');

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
  `IDPedido` int(11) NOT NULL,
  `tarjeta` varchar(100) NOT NULL,
  `tarjeta_mensaje` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`Codigo_de_Pedido`, `Nombre`, `Apellido_destinatario`, `Telefono`, `Email`, `Calle`, `Numero`, `Localidad`, `Partido`, `CP`, `Producto`, `Observacion`, `IDDestinatario`, `IDPedido`, `tarjeta`, `tarjeta_mensaje`) VALUES
(800118, 'Florencia', 'Gomes', 1167777777, 'maria@gmail.com', 'laprida', 1956, 'Avellaneda', 'Avellaneda', 2000, '', 'Entrega Unica', 86, 88, '', ''),
(123419, 'Romina', 'vidal', 1167777777, 'maria@gmail.com', 'Belgrano', 85, 'Avellaneda', 'Avellaneda', 2000, '', 'Entrega Unica', 87, 89, '', ''),
(940626, 'Florencia', 'Gomes', 1167777777, 'maria@gmail.com', 'laprida', 1956, 'Avellaneda', 'Avellaneda', 2000, '', 'Entrega Unica', 88, 90, '', ''),
(348524, 'Florencia', 'Gomes', 1167777777, 'maria@gmail.com', 'laprida', 1956, 'Avellaneda', 'Avellaneda', 1033, '', 'Entrega Unica', 89, 91, 'tarjeta5', 'felicidades en tu dia te deseo lo mejor en esta navidad'),
(967322, 'julio', 'garssia', 1154670935, 'maria@gmail.com', 'Ocantos', 1098, 'Merlo', 'Merlo', 3450, '', 'Entrega Unica', 128, 145, 'tarjeta3', 'felicidades en tu dia te deseo lo mejor en esta navidad'),
(380534, 'julio', 'garssia', 1568905479, 'maria@gmail.com', 'rivadavia', 789, 'Constitucion', 'Constitucion', 3450, '', 'Entrega Unica', 129, 146, '', ''),
(144517, 'Paulo', 'garssia', 1154670935, 'maria@gmail.com', 'Ocantos', 1098, 'lomas', 'lomas', 3450, '', 'Entrega Unica', 130, 147, 'Bienvenido', ''),
(294616, 'julio', 'qwe', 1154670935, 'maria@gmail.com', 'irupe', 789, 'turder', 'turder', 7865, '', 'Entrega Unica', 136, 153, 'tarjeta4', 'felicidades en tu dia, hoy ayer'),
(425228, 'julio', 'garssia', 1154670935, 'maria@gmail.com', 'irupe', 789, 'turder', 'turder', 3450, '', 'Entrega Unica', 137, 156, 'tarjeta2', ''),
(502209, 'julio', 'garssia', 1154670935, 'maria@gmail.com', 'Lavalle', 1098, 'Palermo', 'Palermo', 7865, '', 'Entrega Unica', 138, 157, '', ''),
(229189, 'julio', 'garssia', 1154670935, 'maria@gmail.com', 'Salta', 1098, 'Adrogue', 'Adrogue', 7865, '', 'Entrega Unica', 139, 158, 'tarjeta3', 'felicidades en tu dia te deseo lo mejor en esta navidad'),
(418495, 'julio', 'garssia', 1154670935, 'maria@gmail.com', 'irupe', 1098, 'Constitucion', 'Constitucion', 3450, '', 'Entrega Unica', 140, 159, 'tarjeta1', '');

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
  `IDProducto_Catalogo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Cantidad`, `Precio`, `Fecha_Entrega`, `Estado_Actual`, `IDPedido`, `IDProducto_Catalogo`) VALUES
(7, 6000, '2023-11-16', 'enviado', 88, 7581),
(2, 7000, '2023-11-17', 'enviado', 89, 7582),
(8, 4000, '2023-11-15', 'preparado', 90, 7580),
(4, 6000, '2023-11-18', 'enviado', 91, 7581),
(4, 6000, '2023-11-18', 'entregado', 92, 7581),
(2, 7000, '2023-11-17', 'pendiente', 93, 7582),
(4, 6000, '2023-11-17', 'pendiente', 94, 7581),
(2, 7000, '2023-11-19', 'pendiente', 95, 7582),
(4, 9000, '2023-11-16', 'pendiente', 96, 7584),
(2, 6000, '2023-11-17', 'pendiente', 97, 7581),
(3, 6000, '2023-11-29', 'pendiente', 98, 7581),
(11, 9000, '2023-11-21', 'pendiente', 99, 7584),
(3, 7000, '2023-11-17', 'pendiente', 100, 7582),
(3, 6000, '2023-11-22', 'pendiente', 101, 7581),
(6, 4000, '2023-11-17', 'preparado', 109, 7580),
(1, 6000, '0000-00-00', 'pendiente', 110, 7581),
(3, 4000, '2023-11-06', 'preparado', 111, 7580),
(14, 6000, '0000-00-00', 'pendiente', 112, 7581),
(14, 6000, '2023-11-23', 'pendiente', 113, 7581),
(2, 6000, '2023-11-23', 'pendiente', 114, 7581),
(4, 6000, '2023-11-30', 'pendiente', 115, 7581),
(2, 9000, '2023-11-24', 'pendiente', 116, 7584),
(3, 7000, '2023-11-23', 'pendiente', 117, 7582),
(1, 6000, '0000-00-00', 'pendiente', 118, 7581),
(1, 6000, '2023-11-24', 'pendiente', 119, 7581),
(3, 4000, '2023-11-24', 'pendiente', 120, 7580),
(1, 8000, '2023-11-23', 'pendiente', 121, 7583),
(1, 8000, '0000-00-00', 'pendiente', 122, 7583),
(1, 4000, '2023-11-22', 'pendiente', 123, 7580),
(1, 7000, '2023-11-22', 'pendiente', 124, 7582),
(1, 7000, '2023-11-22', 'pendiente', 125, 7582),
(1, 7000, '2023-11-23', 'pendiente', 126, 7582),
(1, 7000, '2023-11-23', 'pendiente', 127, 7582),
(1, 7000, '2023-11-23', 'pendiente', 128, 7582),
(1, 4000, '2023-11-23', 'pendiente', 129, 7580),
(1, 4000, '2023-11-23', 'pendiente', 130, 7580),
(1, 4000, '2023-11-27', 'pendiente', 131, 7580),
(2, 7000, '2023-11-21', 'pendiente', 132, 7582),
(1, 9000, '2023-11-21', 'pendiente', 133, 7584),
(8, 4000, '2023-11-27', 'pendiente', 134, 7580),
(1, 7000, '2023-11-21', 'pendiente', 135, 7582),
(1, 4000, '2023-11-20', 'pendiente', 136, 7580),
(1, 7000, '2023-11-20', 'pendiente', 137, 7582),
(1, 8000, '2023-11-20', 'pendiente', 138, 7583),
(1, 9000, '2023-11-21', 'preparado', 139, 7584),
(1, 7000, '2023-11-21', 'pendiente', 140, 7582),
(1, 4000, '2023-11-26', 'preparado', 141, 7580),
(1, 4000, '2023-11-21', 'preparado', 142, 7580),
(1, 8000, '2023-11-22', 'pendiente', 143, 7583),
(1, 4000, '2023-11-22', 'pendiente', 144, 7580),
(1, 8000, '2023-11-28', 'enviado', 145, 7583),
(1, 6000, '2023-11-21', 'pendiente', 146, 7581),
(1, 4000, '2023-11-22', 'preparado', 147, 7580),
(1, 7000, '2023-11-21', 'pendiente', 148, 7582),
(1, 4000, '2023-11-28', 'preparado', 149, 7580),
(1, 8000, '2023-11-21', 'pendiente', 150, 7583),
(1, 4000, '2023-11-21', 'preparado', 151, 7580),
(1, 8000, '2023-11-21', 'preparado', 152, 7583),
(1, 4000, '2023-11-28', 'preparado', 153, 7580),
(1, 4000, '2023-11-29', 'pendiente', 154, 7580),
(1, 4000, '2023-11-29', 'pendiente', 155, 7580),
(1, 8000, '2023-11-29', 'preparado', 156, 7583),
(1, 4000, '2023-11-21', 'enviado', 157, 7580),
(1, 8000, '2023-11-27', 'enviado', 158, 7583),
(1, 7000, '2023-11-22', 'enviado', 159, 7582);

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
(1, 'prediseñada', 'tarjeta1', 2000, 'tarjeta1'),
(2, 'personalizada', 'tarjeta2', 3000, 'tarjeta2');

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
(56, 24000.00),
(57, 42000.00),
(58, 14000.00),
(59, 32000.00),
(60, 24000.00),
(61, 27000.00),
(62, 17000.00),
(63, 27000.00),
(64, 16000.00),
(65, 39000.00),
(66, 12000.00),
(67, 21000.00),
(68, 101000.00),
(69, 24000.00),
(70, 21000.00),
(71, 24000.00),
(72, 15000.00),
(73, 12000.00),
(74, 12000.00),
(75, 72000.00),
(76, 24000.00),
(77, 6000.00),
(78, 12000.00),
(79, 84000.00),
(80, 96000.00),
(81, 24000.00),
(82, 18000.00),
(83, 21000.00),
(84, 6000.00),
(85, 9000.00),
(86, 11000.00),
(87, 8000.00),
(88, 7000.00),
(89, 9000.00),
(90, 9000.00),
(91, 10000.00),
(92, 9000.00),
(93, 7000.00),
(94, 7000.00),
(95, 4000.00),
(96, 17000.00),
(97, 34000.00),
(98, 10000.00),
(99, 7000.00),
(100, 15000.00),
(101, 12000.00),
(102, 10000.00),
(103, 7000.00),
(104, 7000.00),
(105, 12000.00),
(106, 11000.00),
(107, 6000.00),
(108, 7000.00),
(109, 10000.00),
(110, 6000.00),
(111, 11000.00),
(112, 7000.00),
(113, 10000.00),
(114, 7000.00),
(115, 7000.00),
(116, 4000.00),
(117, 11000.00),
(118, 9000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `id_pedido` (`id_pedido`);

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
  ADD KEY `fk_IDProducto_Catalogo` (`IDProducto_Catalogo`) USING BTREE;

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
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente_empresa`
--
ALTER TABLE `cliente_empresa`
  MODIFY `IDCliente_Empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `IDDestinatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

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
  MODIFY `IDPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

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
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`IDPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `historial_del_estado_ibfk_1` FOREIGN KEY (`IDPedido`) REFERENCES `pedido` (`IDPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`IDProducto_Catalogo`) REFERENCES `producto_catalogo` (`IDProducto_Catalogo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Perfil_Cargo` FOREIGN KEY (`IDPerfil_Cargo`) REFERENCES `perfil_cargo` (`IDPerfil_Cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
