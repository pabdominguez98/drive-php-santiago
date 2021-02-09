-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2020 a las 01:19:32
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wildercom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos_zonas`
--

CREATE TABLE `catalogos_zonas` (
  `ID` int(50) NOT NULL,
  `Zona` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `catalogos_zonas`
--

INSERT INTO `catalogos_zonas` (`ID`, `Zona`) VALUES
(15, 'Catalogo_neuquen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_ejemplo`
--

CREATE TABLE `catalogo_ejemplo` (
  `ID` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_contado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IVA` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_total` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Bonificacion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_neuquen`
--

CREATE TABLE `catalogo_neuquen` (
  `ID` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_contado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `IVA` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_total` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Bonificacion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo_neuquen`
--

INSERT INTO `catalogo_neuquen` (`ID`, `Descripcion`, `Precio_contado`, `IVA`, `Precio_total`, `Bonificacion`, `Categoria`) VALUES
('79AS01D', 'PTA.ARTESTAMP AC 81 BARRAL RECTO DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS01I', 'PTA.ARTESTAMP AC 81 BARRAL RECTO IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('79AS03D', 'PTA.ARTESTAMP AC 85 NEGRA BARRAL CURVO DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS03I', 'PTA.ARTESTAMP AC 85 NEGRA BARRAL CURVO IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('79AS04D', 'PTA.ARTESTAMP AC 81 NEGRO BARRAL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS06I', 'PTA.ARTESTAMP AC 85 D/B IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('79AS10D', 'PTA.ARTESTAMP 1410 M y P.PLATIL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS12D', 'PTA.ARTESTAMP AC 71 M.PLATIL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS12I', 'PTA.ARTESTAMP AC 71 M.PLATIL IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('79AS16D', 'PTA.ARTESTAMP 1600 MANIJON PLATIL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS16I', 'PTA.ARTESTAMP 1600 MANIJON PLATIL IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('79AS17D', 'PTA.ARTESTAMP AC 76 MANIJON PLATIL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS18D', 'PTA.ARTESTAMP 1810 BARRAL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS18I', 'PTA.ARTESTAMP 1810 BARRAL IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('79AS20D', 'PTA.ARTESTAMP 800 BARRAL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS21D', 'PTA.ARTESTAMP 1865 NEGRO BARRAL DER', '0', '0', '0', '0', 'ABERTURAS'),
('79AS21I', 'PTA.ARTESTAMP 1700 MANIJON PLATIL IZQ', '0', '0', '0', '0', 'ABERTURAS'),
('602920', 'VENTANA CHAPA CORREDIZA C/REJA 100x0.90', '0', '0', '0', '0', 'ABERTURAS'),
('602921', 'VENTANA CHAPA CORREDIZA C/REJA 120x0.90', '0', '0', '0', '0', 'ABERTURAS'),
('602924', 'VENTANA CHAPA CORREDIZA C/CEL. 100x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602925', 'VENTANA CHAPA CORREDIZA C/CEL. 120x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602926', 'VENTANA CHAPA CORREDIZA C/CEL. 150x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602928', 'VENTANA CHAPA CORREDIZA COMPLETA 100x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602929', 'VENTANA CHAPA CORREDIZA COMPLETA 120x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602930', 'VENTANA CHAPA CORREDIZA COMPLETA 15x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602931', 'VENTANA CHAPA ABRIR C/REJA 100x0.90', '0', '0', '0', '0', 'ABERTURAS'),
('602932', 'VENTANA CHAPA ABRIR C/REJA 120x0.90', '0', '0', '0', '0', 'ABERTURAS'),
('602938', 'VENTANA CHAPA ABRIR COMPLETA 100x1.00', '0', '0', '0', '0', 'ABERTURAS'),
('602939', 'VENTANA CHAPA ABRIR COMPLETA 120x1.00', '0', '0', '0', '0', 'ABERTURAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_general`
--

CREATE TABLE `clientes_general` (
  `ID` int(10) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Zona` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_de_registro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_prox_contact` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RegistradoPor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes_general`
--

INSERT INTO `clientes_general` (`ID`, `Nombre`, `Apellido`, `Telefono`, `Email`, `Zona`, `Fecha_de_registro`, `Fecha_prox_contact`, `Estado`, `RegistradoPor`, `Usuario`) VALUES
(1, 'Hector', 'Amador de Penes', '48298394274', 'hectoa.penes@gmail.com', 'Posadas', '24-07-2020', '27-07-2020', 'Tercer contacto', 'Carlos hcasji', 'cgomez'),
(2, 'Gabriel', 'Perez', '115587899', 'gperez@gmail.com', 'Catan', '28-07-2020', '30-07-2020', 'Primer contacto', 'Pablo Dominguez', 'pabdominguez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(50) NOT NULL,
  `Numero` int(50) NOT NULL,
  `Sucursal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cliente` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Productos` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `Total_contado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Total_iva` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono_cliente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Asesor` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`ID`, `Numero`, `Sucursal`, `Cliente`, `Productos`, `Total_contado`, `Total_iva`, `Estado`, `Telefono_cliente`, `Asesor`) VALUES
(4, 324, 'Catan', 'Gabriel Perez', '689052, AIREADOR CHAPA STANDARD 0.50x0.26, 3, 30,278, ; 7PU470I, PTA HMAS CIEGA CON APLIQUE Y BARRAL  470-80 IZQ, 45, 7126,555, ; 603064, VENTILUZ ALUMINIO C/VIDRIO MOSQ.REJA 60x45, 32, 99,385, ; | ', '323966,125', '391999,031', 'A confirmar', '115587899', 'pabdominguez'),
(5, 4662, 'Catan', '', 'GG4662A, Chapa De puto, 6, 54,000, ; 3245AF, Puerta de metal, 98, 5462,000, ; AS2312424, Electrodo Conarco bla bla bla, 5, 2334,000, ; | ', '547270,000', '662196,688', 'A confirmar', '1544950838', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_general`
--

CREATE TABLE `registro_general` (
  `ID` int(50) NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Zona` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre_usuario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Clave` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Nivel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Nombre_usuario`, `Clave`, `Nivel`, `Estado`) VALUES
(1, 'Pablo', 'Dominguez', 'dominguezpablo0998@gmail.com', '+5491144950838', 'pabdominguez', 'choco3644', 'Administrador', 'Activo'),
(2, 'Carlos', 'hcasji', 'ncosdcnsio', 'cdscds', 'cgomez', '123456', 'Vendedor', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogos_zonas`
--
ALTER TABLE `catalogos_zonas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `clientes_general`
--
ALTER TABLE `clientes_general`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro_general`
--
ALTER TABLE `registro_general`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogos_zonas`
--
ALTER TABLE `catalogos_zonas`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `clientes_general`
--
ALTER TABLE `clientes_general`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro_general`
--
ALTER TABLE `registro_general`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
