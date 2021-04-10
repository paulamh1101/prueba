DROP DATABASE IF EXISTS intranet;

CREATE DATABASE intranet;
USE intranet;

CREATE TABLE usuarios (
	usuario  varchar(45) PRIMARY KEY,
	clave varchar(45) NOT NULL,
	admin boolean NOT NULL
);

CREATE TABLE datospersonales(
	usuario varchar(45) PRIMARY KEY,
	nombre varchar(65),
	email varchar(45),
	FOREIGN KEY (usuario) REFERENCES usuarios(usuario) 
);

CREATE TABLE categorias(
	id_categoria int AUTO_INCREMENT PRIMARY	KEY,
	categoria varchar(45) NOT NULL,
	descripcion varchar(255) NOT NULL,
	ruta varchar(40) NOT NULL
);

CREATE TABLE permisos(
	usuario varchar(45),
	id_categoria int,
	PRIMARY KEY (usuario, id_categoria),
	FOREIGN KEY (usuario) REFERENCES usuarios(usuario), 
	FOREIGN KEY	(id_categoria) REFERENCES categorias(id_categoria)
);

INSERT categorias VALUES
(NULL, 'Compartir Archivos', 'Carga y Comparte Archivos De Su Utilidad','archivos.php'),
(NULL, 'Tares Programadas', 'Revisar Las Tareas Pendientes','tareas.php'),
(NULL, 'Chat','Comunicación Interna','chat.php'),
(NULL, 'Eventos Gestión Humana','Visualiza Cumpleaños y Demas Actividades Internas','eventos.php'),
(NULL, 'Reuniones','Agenda De Reuniones Programadas','reuniones.php');

INSERT usuarios VALUES
('Paula','2000',0),
('Jhony','1234',0),
('Marcela','1234',0),
('Azucena','1234',0),
('Estefania','1234',0),
('Vanesa','1234',0),
('Federico','1234',0),
('Ludivia','1234',0),
('Rodrigo','1234',0),
('LuisaG','1234',0),
('Helena','1234',0),
('LuisaF','1234',0),
('Jessica','1234',0),
('Sebastian','1234',0),
('LinaG','1234',0),
('Bibiana','1234',0),
('Claudia','1234',0),
('Gonzalo','1234',0),
('Jairo','1234',0),
('Laura','1234',0),
('Esteban','1234',0),
('LinaU','1234',0),
('Erika','1234',0),
('Ruby','1234',0),
('Karen','1234',0),
('Tania','1234',0),
('Patricia','1234',0),
('Jenny','1234',0),
('LinaM','1234',0),
('Angela','1234',0),
('Admin','9876',1);

INSERT permisos VALUES
('Paula',3), ('Paula',4), 
('Jhony',1), ('Jhony',2);

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 10:45:38
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `ruta` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `descripcion`, `ruta`) VALUES
(1, 'Compartir Archivos', 'Carga y Comparte Archivos De Su Utilidad', '../../litllebox.php'),
(2, 'Tares Programadas', 'Revisar Las Tareas Pendientes', 'tareas/index.php'),
(3, 'Chat', 'Comunicación Interna', 'chat.php'),
(4, 'Eventos Gestión Humana', 'Visualiza Cumpleaños y Demas Actividades Internas', 'eventosgh/index.php'),
(5, 'Reuniones', 'Agenda De Reuniones Programadas', 'reuniones/index.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `usuario` varchar(45) NOT NULL,
  `nombre` varchar(65) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id_notificacion` int(11) NOT NULL,
  `id_tareas` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `observacion` varchar(500) NOT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id_notificacion`, `id_tareas`, `estado`, `fecha`, `observacion`, `usuario`) VALUES
(345, 60, 0, '2018-04-16 17:09:37', 'Facturacion ha creado la tarea: 60', 'Sistemas'),
(346, 60, 1, '2018-04-16 17:09:37', 'Facturacion ha creado la tarea: 60', 'Facturacion'),
(347, 60, 1, '2018-04-16 17:24:50', 'Facturacion ha cambiado los usuarios asignados a la tareas 60', 'Angela'),
(348, 60, 0, '2018-04-16 17:24:50', 'Facturacion ha cambiado los usuarios asignados a la tareas 60', 'Sistemas'),
(349, 60, 1, '2018-04-16 17:24:50', 'Facturacion ha cambiado los usuarios asignados a la tareas 60', 'Facturacion'),
(350, 60, 0, '2018-04-16 17:25:05', 'Angela ha cambiado el estado a la tarea 60 a: En proceso', 'Sistemas'),
(351, 60, 1, '2018-04-16 17:25:05', 'Angela ha cambiado el estado a la tarea 60 a: En proceso', 'Facturacion'),
(352, 60, 1, '2018-04-16 17:25:05', 'Angela ha cambiado el estado a la tarea 60 a: En proceso', 'Angela'),
(353, 60, 0, '2018-04-16 17:25:10', 'Angela ha cambiado el estado a la tarea 60 a: Pendiente', 'Sistemas'),
(354, 60, 1, '2018-04-16 17:25:10', 'Angela ha cambiado el estado a la tarea 60 a: Pendiente', 'Facturacion'),
(355, 60, 1, '2018-04-16 17:25:10', 'Angela ha cambiado el estado a la tarea 60 a: Pendiente', 'Angela'),
(356, 60, 0, '2018-04-16 17:25:20', 'Angela ha cambiado el estado a la tarea 60 a: Terminado', 'Sistemas'),
(357, 60, 1, '2018-04-16 17:25:20', 'Angela ha cambiado el estado a la tarea 60 a: Terminado', 'Facturacion'),
(358, 60, 1, '2018-04-16 17:25:20', 'Angela ha cambiado el estado a la tarea 60 a: Terminado', 'Angela'),
(359, 61, 1, '2018-04-18 14:20:21', 'Angela ha creado la tarea: 61', 'Facturacion'),
(360, 61, 0, '2018-04-18 14:20:21', 'Angela ha creado la tarea: 61', 'Sistemas'),
(361, 61, 0, '2018-04-18 14:20:21', 'Angela ha creado la tarea: 61', 'Ventas Caldas'),
(362, 61, 1, '2018-04-18 14:20:21', 'Angela ha creado la tarea: 61', 'Angela'),
(383, 64, 1, '2018-04-19 15:53:16', 'Facturacion ha creado la reunión: 64', 'Angela'),
(384, 64, 0, '2018-04-19 15:53:16', 'Facturacion ha creado la reunión: 64', 'Sistemas'),
(385, 64, 0, '2018-04-19 15:53:16', 'Facturacion ha creado la reunión: 64', 'Ventas Caldas'),
(386, 64, 1, '2018-04-19 15:53:16', 'Facturacion ha creado la reunión: 64', 'Facturacion'),
(387, 61, 0, '2018-04-19 17:17:06', 'Angela ha cambiado los usuarios asignados a la tareas 61', 'Facturacion'),
(388, 61, 0, '2018-04-19 17:17:06', 'Angela ha cambiado los usuarios asignados a la tareas 61', 'Sistemas'),
(389, 61, 0, '2018-04-19 17:17:06', 'Angela ha cambiado los usuarios asignados a la tareas 61', 'Ventas Caldas'),
(390, 61, 1, '2018-04-19 17:17:06', 'Angela ha cambiado los usuarios asignados a la tareas 61', 'Angela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones_baja_usuarios_tareas`
--

CREATE TABLE `notificaciones_baja_usuarios_tareas` (
  `id_notificacion` int(11) NOT NULL,
  `id_tareas` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `observacion` varchar(500) NOT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `usuario` varchar(45) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`usuario`, `id_categoria`) VALUES
('Angela', 1),
('Angela', 2),
('Angela', 3),
('Angela', 4),
('Angela', 5),
('Facturacion', 1),
('Facturacion', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_respuesta` int(11) NOT NULL,
  `id_tarea` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_respuesta`, `id_tarea`, `comentario`, `fecha`) VALUES
(1, 10, 'este es un comentario', '2018-03-28 17:54:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `descripcion` varchar(500) NOT NULL,
  `prioridad` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `creado_por` varchar(50) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `title`, `color`, `start`, `end`, `descripcion`, `prioridad`, `estado`, `creado_por`, `fecha_creacion`, `tipo`) VALUES
(60, 'Revisar reporte 013 Vicky', '#08f508', '2018-04-16 17:09:37', '2018-04-16 17:09:37', 'wrfsd', 'Baja', 'Terminado', 'Facturacion', '2018-04-16 17:09:37', 'tarea'),
(61, 'Soporte', 'red', '2018-04-18 14:20:21', '2018-04-18 14:20:21', 'aaaaaaaa', 'Media', 'Pendiente', 'Angela', '2018-04-18 14:20:21', 'tarea'),
(64, 'Reunion sala de juntas', '#0071c5', '2018-04-19 16:00:00', '2018-04-19 18:00:00', '', '', '', 'Facturacion', '2018-04-19 15:53:16', 'reunion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_usuarios`
--

CREATE TABLE `tareas_usuarios` (
  `id_tareas_usuarios` int(11) NOT NULL,
  `id_tareas` int(11) NOT NULL,
  `id_usuarios` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas_usuarios`
--

INSERT INTO `tareas_usuarios` (`id_tareas_usuarios`, `id_tareas`, `id_usuarios`) VALUES
(310, 60, 'Facturacion'),
(311, 60, 'Angela'),
(312, 60, 'Sistemas'),
(329, 64, 'Facturacion'),
(330, 64, 'Angela'),
(331, 64, 'Sistemas'),
(332, 64, 'Ventas Caldas'),
(333, 61, 'Angela'),
(334, 61, 'Facturacion'),
(335, 61, 'Sistemas'),
(336, 61, 'Ventas Caldas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `admin`) VALUES
('admin', '1234', 1),
('Angela', '1234', 0),
('Facturacion', '1234', 0),
('Sistemas', '1234', 0),
('Ventas Caldas', '1234', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id_notificacion`),
  ADD KEY `id_tareas` (`id_tareas`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `notificaciones_baja_usuarios_tareas`
--
ALTER TABLE `notificaciones_baja_usuarios_tareas`
  ADD PRIMARY KEY (`id_notificacion`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`usuario`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_tarea` (`id_tarea`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  ADD PRIMARY KEY (`id_tareas_usuarios`),
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_tareas` (`id_tareas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id_notificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id_tareas_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD CONSTRAINT `datospersonales_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificaciones_ibfk_2` FOREIGN KEY (`id_tareas`) REFERENCES `tareas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificaciones_baja_usuarios_tareas`
--
ALTER TABLE `notificaciones_baja_usuarios_tareas`
  ADD CONSTRAINT `notificaciones_baja_usuarios_tareas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  ADD CONSTRAINT `tareas_usuarios_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tareas_usuarios_ibfk_3` FOREIGN KEY (`id_tareas`) REFERENCES `tareas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
