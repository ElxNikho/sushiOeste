-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2018 a las 04:09:07
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sushioeste`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `detalle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(1, 'CALIFORNIA', 'Envueltos en sésamo o masago'),
(2, 'ENVUELTOS EN PALTA', 'Envueltos en palta'),
(3, 'ENVUELTOS EN ATÚN ROJO O BLANCO', 'Envueltos en atún rojo o blanco'),
(4, 'BEBESTIBLES', 'Bebidas, jugos, te');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id` int(9) NOT NULL,
  `id_usuario` int(9) NOT NULL,
  `id_producto` int(9) NOT NULL,
  `id_venta` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `detalle` varchar(45) NOT NULL,
  `precio` float NOT NULL,
  `url` varchar(55) NOT NULL,
  `tipo_producto` int(9) NOT NULL,
  `id_categoria` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `detalle`, `precio`, `url`, `tipo_producto`, `id_categoria`) VALUES
(1, 'MAGURO ROLL', 'Kanikama y palta', 6200, 'img/California/maguro_roll.png', 1, 1),
(2, 'SAIKO MAGURO', 'Camarón tempura y palta con salsa de unagui', 6700, 'img/California/saiko_maguro.png', 1, 1),
(3, 'TAKI MAGURO', 'Unagio y palta con salsa unagui', 7100, 'img/California/taki_maguro.png', 1, 1),
(4, 'EDU ROLL', 'Salmón normal o ahumado y queso crema', 6400, 'img/palta/edu_roll.png', 1, 2),
(5, 'ISHI ROLL', 'Camarón tempura, pepino y masago', 6200, 'img/palta/ishi_roll.png', 1, 2),
(6, 'MEMO ROLL TEMPURA', 'Camarón tempura con salsa spicy', 6500, 'img/palta/memo_roll_tempura.png', 1, 2),
(7, 'MIKEY ROLL', 'Camarón picado y salsa spicy', 6100, 'img/palta/mikey_roll.png', 1, 2),
(8, 'ALAN MAGURO', 'Camarón y palta', 6700, 'img/atun/alan_maguro.png', 1, 3),
(9, 'DANI MAGURO', 'Salmón normal o ahumado y palta', 6700, 'img/atun/dani_maguro.png', 1, 3),
(10, 'DON ROLL', 'Unagui y pepino con salsa unagui', 7100, 'img/atun/don_roll.png', 1, 3),
(11, 'LA PARVA CALIENTE', 'Queso crema y cebollin', 6700, 'img/atun/la_parva_caliente.png', 1, 3),
(12, 'BEBIDAS LATA', 'Bebida en lata', 950, 'img/bebestibles/bebida.jpg', 2, 4),
(13, 'JUGO (FRUTA NATURAL)', 'Jugo de fruta natural', 1800, 'img/bebestibles/jugo.jpg', 2, 4),
(14, 'TEA GREEN GINSENG DIET', 'Tea green ginseng diet', 2800, 'img/bebestibles/tea.jpg', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id`, `nombre`) VALUES
(1, 'ROLL'),
(2, 'BEBESTIBLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(9) NOT NULL,
  `total` float NOT NULL,
  `despacho` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
