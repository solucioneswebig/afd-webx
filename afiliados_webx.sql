-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2020 a las 02:40:52
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `afiliados_webx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro_afiliado`
--

CREATE TABLE `tb_registro_afiliado` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `apellido_paterno` varchar(255) NOT NULL,
  `apellido_materno` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  `colonia` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email_code` text NOT NULL,
  `email` text NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_registro_afiliado`
--

INSERT INTO `tb_registro_afiliado` (`id_usuario`, `nombre_usuario`, `password`, `nombre_completo`, `apellido_paterno`, `apellido_materno`, `direccion`, `colonia`, `municipio`, `estado`, `codigo_postal`, `telefono`, `email_code`, `email`, `estatus`) VALUES
(20, 'alriva83', '$2a$07$asxx54ahjppf45sd87a5auBfgvAv4vCpKNJfYc8k9N4Xai72AaYji', 'Alberto', 'Ríos', 'Vázquez', 'Juárez ,242', 'Centro', 'Autlan', 'Jalisco', '48900', '3171011565', '3ba5d336e92ee3ae5ac3d40983b1ebc9', '', 1),
(18, 'Alex', '$2a$07$asxx54ahjppf45sd87a5au7I6Q5wfKrWMOXEK8BMEV1Eey3CASOhy', 'Alexander', 'Gutierrez', 'Ramirez', 'La piedad', 'Cabudare', 'Palavecino', 'Lara', '3023', '584542145451', '2ec5e3a5ae95102e4912cc27b66e140c', '', 1),
(19, 'Alex', '$2a$07$asxx54ahjppf45sd87a5au7I6Q5wfKrWMOXEK8BMEV1Eey3CASOhy', 'Alexander', 'Gutierrez', 'Ramirez', 'La piedad', 'Cabudare', 'Palavecino', 'Lara', '3023', '584542145451', '2ec5e3a5ae95102e4912cc27b66e140c', '', 1),
(21, 'Alexander', '$2a$07$asxx54ahjppf45sd87a5aubmNu17qOkjTmMfj73LFwPCpfHQyV9Ke', 'Alexander', 'Gutierrez', 'Ramirez', 'La piedad', 'Cabudare', 'Palavecino', 'Lara', '3023', '04245143194', '2ec5e3a5ae95102e4912cc27b66e140c', '', 1),
(22, 'alriva', '$2a$07$asxx54ahjppf45sd87a5auBfgvAv4vCpKNJfYc8k9N4Xai72AaYji', 'ALBERTO', 'RIOS', 'VAZQUEZ', 'JUAREZ 242 ', 'CENTRO', 'AUTLAN DE NAVARRO', 'JALISCO', '48900', '317382040', '3ba5d336e92ee3ae5ac3d40983b1ebc9', '', 1),
(25, 'Alexis', '$2a$07$asxx54ahjppf45sd87a5aubmNu17qOkjTmMfj73LFwPCpfHQyV9Ke', 'Alexis', 'f', 'f', 'f', 'f', 'f', 'f', 'f', '2575110', '2ec5e3a5ae95102e4912cc27b66e140c', 'alexanderr677@outlook.com', 1),
(26, 'Alexis', '$2a$07$asxx54ahjppf45sd87a5aubmNu17qOkjTmMfj73LFwPCpfHQyV9Ke', 'Alexis', 'f', 'f', 'f', 'f', 'f', 'f', 'f', '2575110', '2ec5e3a5ae95102e4912cc27b66e140c', 'alexanderr677@outlook.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro_afiliado_mas_info`
--

CREATE TABLE `tb_registro_afiliado_mas_info` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `dominio` varchar(255) NOT NULL,
  `impuesto` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `paypal` varchar(255) NOT NULL,
  `emailPaypal` varchar(255) NOT NULL,
  `terminos` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_registro_afiliado`
--
ALTER TABLE `tb_registro_afiliado`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `tb_registro_afiliado_mas_info`
--
ALTER TABLE `tb_registro_afiliado_mas_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_registro_afiliado`
--
ALTER TABLE `tb_registro_afiliado`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `tb_registro_afiliado_mas_info`
--
ALTER TABLE `tb_registro_afiliado_mas_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
