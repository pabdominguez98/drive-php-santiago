-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 03. Feb 2021 um 09:55
-- Server-Version: 5.7.33-0ubuntu0.18.04.1
-- PHP-Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `wildercom`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usuarios`
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
  `Estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Intentos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Nombre_usuario`, `Clave`, `Nivel`, `Estado`, `Intentos`) VALUES
(4, 'Pablo', 'Dominguez', 'dominguezpablo0998@gmail.com', '1144950838', 'pdominguez', 'pablo1998', 'Administrador', 'Activo', 0),
(5, 'Gonzalo', 'Bernath', 'gonzalobernath96@gmail.com', '1557182656', 'gbernath', 'gonzalo1996', 'Administrador', 'Activo', 0),
(10, 'Enrique', 'Bernath', 'enrique.bernath@gmail.com', '1544147626', 'ebernath', 'enrique1967', 'Administrador', 'Activo', 0),
(11, 'Federico', 'Bernath', 'federicobernath@gmail.com', '1557182649', 'fbernath', 'federico1993', 'Administrador', 'Activo', 0),
(12, 'Mayra', 'Cambiasso', 'may', '1234', 'Mayra', '123456', 'Vendedor', 'Activo', 0),
(13, 'Gregorio', 'Carranza', 'grego', '123', 'Gregorio', '123456', 'Vendedor', 'Activo', 0),
(14, 'Prueba', 'Asesor', 'jijiojio', 'jiojiojio', 'prueba', '123456', 'Vendedor', 'Activo', 0),
(15, 'a', 'A', 'A', 'A', 'A', '123456', 'Sucursal', 'Activo', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
