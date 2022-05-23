-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2022 a las 00:55:19
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_solicitudes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_oficina`
--

CREATE TABLE `tb_oficina` (
  `id_oficina` int(1) NOT NULL,
  `oficina` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_oficina`
--

INSERT INTO `tb_oficina` (`id_oficina`, `oficina`) VALUES
(1, 'Cuautitlán Izcalli'),
(2, 'Tlalnepantla'),
(3, 'Tultitlán'),
(4, 'Toluca'),
(5, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_solicitud`
--

CREATE TABLE `tb_solicitud` (
  `id_solicitud` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_actual` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` varchar(250) NOT NULL,
  `fecha_solicitada` date NOT NULL,
  `tipo_solicitud` varchar(25) NOT NULL,
  `nomb_solicita` varchar(50) NOT NULL,
  `oficina` varchar(25) NOT NULL,
  `comentarios` varchar(250) NOT NULL,
  `aprobada` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_solicitud`
--

INSERT INTO `tb_solicitud` (`id_solicitud`, `nombre`, `fecha_actual`, `descripcion`, `fecha_solicitada`, `tipo_solicitud`, `nomb_solicita`, `oficina`, `comentarios`, `aprobada`) VALUES
(1, 'Ivan Ruiz Rodriguez', '2021-10-07 08:40:48', 'Solicito un vehiculo', '2021-10-10', 'Vehículo', 'Leonardo Brena', 'Cuautitlán Izcalli', 'Sin comentarios adicionales', 3),
(2, 'Leonardo Brena', '2021-10-07 14:53:35', 'Solicito una computadora', '2021-10-10', 'Material', 'Lucy', 'Cuautitlán Izcalli', 'solicito una computadora con especificaciones:\r\nINTEL CORE i5\r\nRAM 12GB\r\nPantalla de 29\"', 3),
(3, 'Cynthia Valdez', '2021-10-07 20:06:08', 'Solicita un paquete de hojas', '2021-10-07', 'Material', 'Lucy', 'Cuautitlán Izcalli', 'sin comentarios adicionales', 2),
(4, 'Cynthia Valdez', '2021-10-07 20:37:29', 'Solicito un paquete de hojas', '2021-10-07', 'Material', 'Lucy', 'Cuautitlán Izcalli', 'sin comentarios adicionales', 3),
(5, 'Ivan Ruiz Rodriguez', '2021-10-07 21:32:44', 'Solicito un vehiculo para viaje a toluca', '2021-10-12', 'Vehículo', 'Leonardo Brena', 'Cuautitlán Izcalli', 'sin comentarios adicionales', 3),
(6, 'Leonardo brena', '2021-10-07 21:35:38', 'solicito un vehiculo', '2021-10-13', 'Vehículo', 'Lucy', 'Cuautitlán Izcalli', 'sin comentarios adicionales', 3),
(7, 'Ivan Ruiz', '2021-10-07 21:39:20', 'solicito un vehiculo', '2021-10-18', 'Vehículo', 'Leonardo Brena', 'Cuautitlán Izcalli', 'sin comentarios adicionales', 3),
(8, 'Ivan Ruiz', '2021-10-07 21:41:21', 'solicito un vehiculo', '2021-10-18', 'Vehículo', 'Leonardo Brena', 'Cuautitlán Izcalli', 'sin comentarios adicionales', 2),
(9, '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', 3),
(10, 'Cynthia Valdez', '2021-10-07 21:43:14', 'paquete de hojas', '2021-10-10', 'Material', 'lucy', 'Cuautitlán Izcalli', 'sin comentarios', 2),
(11, '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', 3),
(12, 'julio', '2021-10-07 21:47:29', 'solicita un equipo nuevo', '2021-10-10', 'Material', 'lucy', 'Tlalnepantla', 'no procede', 3),
(13, 'Abril', '2021-10-08 01:28:37', 'Solicito un paquete de hojas', '2021-10-10', 'Material', 'Mayra', 'Toluca', 'Sin comentarios adicionales', 3),
(14, 'Ivan Ruiz Rodriguez', '2021-10-08 16:35:08', 'Solicito un equipo de computo', '2021-10-10', 'Material', 'Leonardo Brena', 'Cuautitlán Izcalli', 'no procede, especificar marca y modelo del equipo', 3),
(15, 'Ivan Ruiz Rodriguez', '2021-10-08 16:37:10', 'Solicito un disco duro', '2021-10-22', 'Material', 'Leonardo Brena', 'Cuautitlán Izcalli', 'Especificar capacidad de almacenamiento', 3),
(16, 'Leonardo brena', '2021-10-08 16:52:33', 'Solicito un vehiculo', '2021-10-20', 'Vehículo', 'Lucy', 'Cuautitlán Izcalli', '', 2),
(17, 'Cynthia Valdez', '2021-10-08 16:53:04', 'solcito un paquete de hojas', '2021-10-08', 'Material', 'Leonardo Brena', 'Cuautitlán Izcalli', 'no procede', 3),
(18, 'Ivan Ruiz', '2021-10-11 15:28:52', 'Prueba actualizar pantalla', '2021-10-11', 'Personal', 'Leonardo Brena', 'otro', 'Rechazo por pruebas de sistemas ', 3),
(19, 'Ivan Ruiz', '2021-10-11 15:29:15', 'prueba de actualizar ventana automatica', '2021-10-11', 'Personal', 'Leonardo Brena', 'otro', 'Rechazo por pruebas de sistemas', 3),
(20, 'Ivan Ruiz', '2021-10-11 15:41:08', 'Prueba de actualoziar ventana #2', '2021-10-11', 'Personal', 'Leonardo Brena', 'Toluca', 'rechazo por pruebas de sistemas', 3),
(21, 'nombre prueba', '2021-10-27 20:10:19', 'prueba de registro formulario ', '2021-10-30', 'Vehículo', 'Leo', 'Cuautitlán Izcalli', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_status`
--

CREATE TABLE `tb_status` (
  `id_estatus` int(1) NOT NULL,
  `estatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_status`
--

INSERT INTO `tb_status` (`id_estatus`, `estatus`) VALUES
(1, 'Pendiente'),
(2, 'Aprobada'),
(3, 'Rechazada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_solicitud`
--

CREATE TABLE `tb_tipo_solicitud` (
  `id_tipo` int(1) NOT NULL,
  `tipo_solicitud` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_tipo_solicitud`
--

INSERT INTO `tb_tipo_solicitud` (`id_tipo`, `tipo_solicitud`) VALUES
(1, 'Insumo'),
(2, 'Vehículo'),
(3, 'Material'),
(4, 'Personal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_oficina`
--
ALTER TABLE `tb_oficina`
  ADD PRIMARY KEY (`id_oficina`);

--
-- Indices de la tabla `tb_solicitud`
--
ALTER TABLE `tb_solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `tb_tipo_solicitud`
--
ALTER TABLE `tb_tipo_solicitud`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_oficina`
--
ALTER TABLE `tb_oficina`
  MODIFY `id_oficina` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_solicitud`
--
ALTER TABLE `tb_solicitud`
  MODIFY `id_solicitud` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_estatus` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_tipo_solicitud`
--
ALTER TABLE `tb_tipo_solicitud`
  MODIFY `id_tipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
