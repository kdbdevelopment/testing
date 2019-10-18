-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2019 a las 04:04:00
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escritores`
--

CREATE TABLE `escritores` (
  `Id_Escritor` int(11) NOT NULL,
  `Apellido` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `Edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `escritores`
--

INSERT INTO `escritores` (`Id_Escritor`, `Apellido`, `Nombre`, `Edad`) VALUES
(14, 'GÃ³mez', 'Horacio', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `Id_Noticia` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `Subtitulo` text COLLATE utf16_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Noticia_Desarrollo` text COLLATE utf16_spanish_ci NOT NULL,
  `Tema` varchar(40) COLLATE utf16_spanish_ci NOT NULL,
  `Id_Escritor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Id_Noticia`, `Titulo`, `Subtitulo`, `Fecha`, `Noticia_Desarrollo`, `Tema`, `Id_Escritor`) VALUES
(3, 'assa', 'sasa', '2019-10-02', 'sassa', 'saass', 0),
(13, '', '', '0000-00-00', '', '', 0),
(14, '', '', '0000-00-00', '', '', 0),
(29, 'dssdsddsdsassasaassa', 'dssddsdsdsds', '2019-10-10', 'dsdsdsdsdssdsddsddssd dsd sdd sassaassasa', 'ssdsdsdsdsdsdsd', 1),
(34, 'asassasa', 'saasassa', '2019-10-18', 'asasasasass', 'asasaassas', 4),
(35, 'asassasa', 'saasassa', '2019-10-08', 'asasasasasassaass', 'asasaassaass', 3),
(36, 'asassasassasassassa', 'saasassasasas', '2019-10-09', 'asasasasasassaasssaassas', 'asasaassaass', 5),
(37, 'asassasassasaasasasasasasssassa', 'saasassasasasasasas', '2019-10-09', 'asasasasasassaasssaassaasasassassas', 'asasaassaass', 3),
(38, 'asassasassasaasasasaasassasasasssassa', 'saasassasasasasasasassa', '2019-10-09', 'asasasasasassaaasassssaassaasasassassas', 'asasaassaass', 3),
(39, 'asassasassasaassasasasasaasassasasasssassa', 'saasassasasasasasasasasassa', '2019-10-09', 'asasasasasassasasasaasassssaassaasasassassas', 'asasaassaassasasasas', 5),
(41, 'sasa', 'sasa', '2019-10-09', 'sasasa', 'assa', 1),
(42, 'dsds', 'dsdsds', '2019-10-09', 'sddssd', 'dsdsds', 1),
(43, 'sdsdds', 'dsddd', '2019-10-09', 'sddssdds', 'dsdsdsdsd', 1),
(44, 'dsdsds', 'dsdsds', '2019-10-09', 'sdsddd', 'graciela', 1),
(45, 'dsdsds', 'dsdsdssas', '2019-10-09', 'sdsddd', 'graciela', 1),
(46, 'sasaas', 'sasas', '2019-10-02', 'saassasasasasas', 'sasaassa', 10),
(47, 'sasaas', 'sasas', '2019-10-02', 'saassasasa', 'sasaassa', 10),
(48, 'sddssd', 'sddssd', '2019-10-02', 'sddsds', 'sddsdsdsds', 6),
(49, 'dsdsdsds', 'asss', '2019-10-09', 'saasasasasas', 'asasaassa', 7),
(50, 'sdsdsd', 'sdsddssd', '2019-10-02', 'dsdssddsds', 'dssdds', 8),
(51, 'dsdsdsdsds', 'dsdsdsds', '2019-10-02', 'dsdsds', 'Historia', 10),
(52, 'sddssdds', 'sdsdsdsds', '2019-10-09', 'sdsdsdssasasa', 'sddsdsddsd', 6),
(53, 'saassa', 'saassasa', '2019-10-02', 'aassaas', 'saassa', 8),
(54, 'asassa', 'sasasa', '2019-10-02', 'asassasa', 'saas', 8),
(55, 'assas', 'sasas', '2019-10-23', 'saass', 'sassa', 8),
(56, 'Deporte', 'El deporte en', '2019-10-09', 'El deporte es una actividad reglamentada, normalmente de carÃ¡cter competitivo, que puede mejorar la condiciÃ³n fÃ­sicaâ€‹ de quien lo practica.', 'Deportes', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre_Persona` varchar(40) COLLATE utf16_spanish_ci NOT NULL,
  `Nombre_Usuario` varchar(40) COLLATE utf16_spanish_ci NOT NULL,
  `Password_Usuario` varchar(20) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre_Persona`, `Nombre_Usuario`, `Password_Usuario`) VALUES
(1, 'Kevin Del Bello', 'kevin', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escritores`
--
ALTER TABLE `escritores`
  ADD PRIMARY KEY (`Id_Escritor`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id_Noticia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escritores`
--
ALTER TABLE `escritores`
  MODIFY `Id_Escritor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `Id_Noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
