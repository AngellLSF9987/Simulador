-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 21:20:35
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simulador`
--
CREATE DATABASE IF NOT EXISTS `simulador` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simulador`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--
-- Creación: 24-11-2022 a las 14:55:28
-- Última actualización: 24-11-2022 a las 14:55:28
--

CREATE TABLE `categorias` (
  `id` int(2) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `categorias`:
--

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `imagen`) VALUES
(1, 'Cafe en Grano', 'grano.jpg'),
(2, 'Cafes Solubles', 'soluble.jpg'),
(3, 'Capuchinos y Mocachinos', 'capuccinomocaccino.jpg'),
(4, 'Chocolates', 'chocolates.jpg'),
(5, 'Infusiones', 'infusiones.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--
-- Creación: 24-11-2022 a las 18:13:20
-- Última actualización: 24-11-2022 a las 19:15:33
--

CREATE TABLE `pedidos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `pedidos`:
--   `categoria`
--       `categorias` -> `id`
--

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombre`, `precio`, `imagen`, `categoria`) VALUES
(1, 'Expresso corto', '0.50', 'expresso.png', 1),
(2, 'Descafeinado Expresso corto', '0.50', 'expresso.png', 1),
(3, 'Ristretto', '0.50', 'ristretto.png', 1),
(4, 'Ristretto Descafeinado', '0.50', 'ristretto.png', 1),
(5, 'Cafe Largo Expresso', '0.70', 'expresso.png', 1),
(6, 'Cafe Largo Descafeinado', '0.70', 'expresso.png', 1),
(7, 'Cafe Doble', '0.80', 'expresso.png', 1),
(8, 'Cafe Doble Descafeinado', '0.80', 'expresso.png', 1),
(9, 'Cafe con Leche', '1.10', 'conleche.png', 1),
(10, 'Cafe con Leche Descafeinado', '1.10', 'conleche.png', 1),
(11, 'Cafe Cortado', '0.90', 'cortado.png', 1),
(12, 'Cafe Cortado Descafeinado', '0.90', 'cortado.png', 1),
(13, 'Infusión de Tila', '0.80', 'tila.png', 5),
(14, 'infusión de Manzanilla', '0.80', 'manzanilla.png', 5),
(15, 'Infusión de Poleo Menta', '0.80', 'poleo.png', 5),
(16, 'Infusión de Té', '0.80', 'te.png', 5),
(17, 'Chocolate a la Taza', '1.20', 'choco.png', 4),
(18, 'Mocaccino', '1.30', 'mocaccino.png', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_FK` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `categorias_FK` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
