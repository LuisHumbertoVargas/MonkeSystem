-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-09-2021 a las 01:32:00
-- Versión del servidor: 5.7.35-0ubuntu0.18.04.1
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_yaneri193`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nombre_cat` varchar(500) NOT NULL,
  `descr_cat` varchar(1000) DEFAULT 'No tiene descripción',
  `estado_cat` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nombre_cat`, `descr_cat`, `estado_cat`) VALUES
(1, 'Otros', 'Si en realidad lo único que deseas es disfrutar de tu fiesta, déjanos todo a nosotros, nosotros nos encargamos hasta del último detalle como por ejemplo: las invitaciones. Solo tienes que pedirlo y realizaremos tu cotización a medida de tu evento.', 1),
(2, 'Montables', 'Salón Sfera pondrá en tu evento ya sea carpas, inflables o cualquier cosa que tenga en su inventario para eventos.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_solicitud`
--

CREATE TABLE `detalle_solicitud` (
  `id_det_soli` int(11) NOT NULL,
  `id_soli` int(11) NOT NULL,
  `Mail_Client_Det` varchar(300) NOT NULL,
  `id_serv` int(11) NOT NULL,
  `cant_serv` int(11) NOT NULL,
  `subtotal` float(12,2) DEFAULT NULL,
  `subtotal_iva` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_solicitud`
--

INSERT INTO `detalle_solicitud` (`id_det_soli`, `id_soli`, `Mail_Client_Det`, `id_serv`, `cant_serv`, `subtotal`, `subtotal_iva`) VALUES
(1, 1, 'erickjesusybran@gmail.com', 3, 4, 18000.00, 2880.00),
(2, 1, 'erickjesusybran@gmail.com', 4, 5, 25000.00, 4000.00),
(3, 1, 'erickjesusybran@gmail.com', 6, 1, 600.00, 96.00),
(4, 2, 'Lii_Stetphany@gmail.com', 5, 3, 6000.00, 960.00),
(5, 2, 'Lii_Stetphany@gmail.com', 1, 6, 6000.00, 960.00),
(6, 2, 'Lii_Stetphany@gmail.com', 3, 8, 36000.00, 5760.00),
(7, 2, 'Lii_Stetphany@gmail.com', 4, 5, 25000.00, 4000.00),
(8, 3, 'erickjesusybran@gmail.com', 1, 3, 3000.00, 480.00),
(9, 3, 'erickjesusybran@gmail.com', 3, 4, 18000.00, 2880.00),
(10, 3, 'erickjesusybran@gmail.com', 5, 5, 10000.00, 1600.00),
(11, 4, 'erickjesusybran@gmail.com', 1, 4, 4000.00, 640.00),
(12, 4, 'erickjesusybran@gmail.com', 3, 6, 27000.00, 4320.00),
(13, 4, 'erickjesusybran@gmail.com', 5, 7, 14000.00, 2240.00),
(14, 5, 'erickjesusybran@gmail.com', 1, 4, 4000.00, 640.00),
(15, 5, 'erickjesusybran@gmail.com', 3, 5, 22500.00, 3600.00),
(16, 5, 'erickjesusybran@gmail.com', 5, 6, 12000.00, 1920.00),
(17, 7, 'stephany@gmail.com', 1, 3, 3000.00, 480.00),
(18, 7, 'stephany@gmail.com', 3, 4, 18000.00, 2880.00),
(19, 7, 'stephany@gmail.com', 5, 4, 8000.00, 1280.00),
(20, 8, 'erickjesusybran@gmail.com', 1, 5, 5000.00, 800.00),
(21, 8, 'erickjesusybran@gmail.com', 3, 7, 31500.00, 5040.00),
(22, 8, 'erickjesusybran@gmail.com', 5, 3, 6000.00, 960.00),
(23, 8, 'erickjesusybran@gmail.com', 6, 2, 1200.00, 192.00);

--
-- Disparadores `detalle_solicitud`
--
DELIMITER $$
CREATE TRIGGER `nuevaSolicitud` BEFORE INSERT ON `detalle_solicitud` FOR EACH ROW BEGIN

DECLARE ServicioElegido INT;
DECLARE newIdDetalle INT;
DECLARE newIdSoli INT;

SET ServicioElegido = (SELECT id_serv FROM servicio WHERE id_serv = new.id_serv);
SET newIdDetalle = (SELECT MAX(id_det_soli) FROM detalle_solicitud);
SET newIdSoli = (SELECT MAX(id_soli) FROM solicitud WHERE Mail_Client = new.Mail_Client_Det);

IF newIdDetalle IS NULL THEN 
SET new.id_det_soli = 1;
ELSE
SET new.id_det_soli = newIdDetalle + 1;
END IF;

IF newIdSoli IS NULL THEN 
SET new.id_soli = (SELECT id_soli FROM solicitud WHERE Mail_Client = new.Mail_Client_Det);
ELSE
SET new.id_soli =  newIdSoli;
END IF;

SET new.id_serv =  ServicioElegido;

SET new.subtotal = (
	SELECT precio_serv
	FROM servicio 
	WHERE servicio.id_serv = ServicioElegido
	)*new.cant_serv;

SET new.subtotal_iva = (
	SELECT iva_serv
	FROM servicio 
	WHERE servicio.id_serv = ServicioElegido
	)*new.cant_serv;

UPDATE solicitud SET monto_soli = monto_soli + new.subtotal WHERE id_soli = new.id_soli;
UPDATE solicitud SET iva = iva + new.subtotal_iva WHERE id_soli = new.id_soli;
UPDATE solicitud SET total = monto_soli + iva WHERE id_soli = new.id_soli;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_serv` int(11) NOT NULL,
  `nombre_serv` varchar(512) NOT NULL,
  `precio_serv` float(12,2) NOT NULL,
  `iva_serv` float(12,2) NOT NULL,
  `descr_serv` varchar(512) DEFAULT NULL,
  `id_cat` int(11) NOT NULL,
  `estado_serv` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_serv`, `nombre_serv`, `precio_serv`, `iva_serv`, `descr_serv`, `id_cat`, `estado_serv`) VALUES
(1, 'Carpa pequeña', 1000.00, 160.00, 'Carpa montable de 6 metros por 3 metros, esencial para un evento con pocos invitados.', 2, '1'),
(2, 'Carpa  mediana', 3000.00, 480.00, 'Carpa montable de 6 metros por 6 metros para un evento normal, esencial para un evento normal.', 2, '1'),
(3, 'Carpa grande', 4500.00, 720.00, 'Carpa montable de 6 metros por 9 metros para un evento y tener espacio para tus invitados en el exterior, completamente necesario para un evento grande.', 2, '1'),
(4, 'Carpa extra grande', 5000.00, 800.00, 'Carpa montable de 10 metros por 10 metros, para un evento grande, necesario para tu evento.', 2, '1'),
(5, 'Inflable de colores', 2000.00, 320.00, 'Inflable de colores de 6 metros por 7 metros, esencial para un evento  infantil o para eventos con invitados menores de edad.', 2, '1'),
(6, 'Tumbling', 600.00, 96.00, 'Trampolín montable para los niños pequeños del evento, esencial para una fiesta infantil y para eventos con niños.', 2, '1');

--
-- Disparadores `servicio`
--
DELIMITER $$
CREATE TRIGGER `calcularIvaServicio` BEFORE INSERT ON `servicio` FOR EACH ROW BEGIN

DECLARE iva FLOAT(4,2);

SET iva = 0.16;

SET new.iva_serv = new.precio_serv * iva;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calcularIvaServicioActual` BEFORE UPDATE ON `servicio` FOR EACH ROW BEGIN

DECLARE iva FLOAT(4,2);

SET iva = 0.16;

SET new.iva_serv = new.precio_serv * iva;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_soli` int(11) NOT NULL,
  `Nom_Client` varchar(300) NOT NULL,
  `Ap_Client` varchar(300) DEFAULT NULL,
  `Mail_Client` varchar(300) NOT NULL,
  `Tel_Client` varchar(12) NOT NULL,
  `fecha_soli` date DEFAULT NULL,
  `renta_salon` float(12,2) DEFAULT '0.00',
  `monto_soli` float(12,2) DEFAULT '0.00',
  `iva` float(12,2) DEFAULT '0.00',
  `hrs_extras` int(11) DEFAULT '0',
  `cant_inv` enum('0','1','2','3','4') NOT NULL DEFAULT '0',
  `total` float(12,2) DEFAULT '0.00',
  `estado_soli` enum('0','1','2','3') NOT NULL DEFAULT '1',
  `Mail_Us` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_soli`, `Nom_Client`, `Ap_Client`, `Mail_Client`, `Tel_Client`, `fecha_soli`, `renta_salon`, `monto_soli`, `iva`, `hrs_extras`, `cant_inv`, `total`, `estado_soli`, `Mail_Us`) VALUES
(1, 'jesus', 'Yañez', 'erickjesusybran@gmail.com', '4423534410', '2021-09-10', 6600.00, 50200.00, 8032.00, 0, '1', 58232.00, '1', NULL),
(2, 'Stephany', 'Moreno', 'Lii_Stetphany@gmail.com', '4427124852', '2021-09-13', 7000.00, 80000.00, 12800.00, 0, '3', 92800.00, '1', NULL),
(3, 'jesus', 'Yañez', 'erickjesusybran@gmail.com', '4423534410', '2021-09-13', 6500.00, 37500.00, 6000.00, 0, '0', 43500.00, '1', NULL),
(4, 'jesus', 'Yañez', 'erickjesusybran@gmail.com', '4423534410', '2021-09-13', 6500.00, 51500.00, 8240.00, 0, '0', 59740.00, '1', NULL),
(5, 'jesus', 'Yañez', 'erickjesusybran@gmail.com', '4423534410', '2021-09-13', 6500.00, 45000.00, 7200.00, 0, '0', 52200.00, '1', NULL),
(6, 'stephany', 'Yañez', 'stephany@gmail.com', '4423534410', '2021-09-13', 7500.00, 7500.00, 1200.00, 0, '4', 0.00, '1', NULL),
(7, 'stephany', 'Yañez', 'stephany@gmail.com', '4423534410', '2021-09-13', 7500.00, 36500.00, 5840.00, 0, '4', 42340.00, '1', NULL),
(8, 'jesus', 'Yañez', 'erickjesusybran@gmail.com', '4423534410', '2021-09-22', 6800.00, 50500.00, 8080.00, 0, '2', 58580.00, '1', NULL);

--
-- Disparadores `solicitud`
--
DELIMITER $$
CREATE TRIGGER `nuevaSolicitud2` BEFORE INSERT ON `solicitud` FOR EACH ROW BEGIN

DECLARE RentaElegida float(12,2);


IF new.cant_inv LIKE '0' THEN
SET RentaElegida='6500';
END IF;

IF new.cant_inv LIKE '1' THEN
SET RentaElegida='6600';
END IF;

IF new.cant_inv LIKE '2' THEN
SET RentaElegida='6800';

END IF;

IF new.cant_inv LIKE '3' THEN
SET RentaElegida='7000';
END IF;

IF new.cant_inv LIKE '4' THEN
SET RentaElegida='7500';

END IF;

SET new.renta_salon = RentaElegida;
SET new.monto_soli=RentaElegida;
SET new.iva=RentaElegida*0.16;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Mail_Us` varchar(300) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nombre1` varchar(300) NOT NULL,
  `nombre2` varchar(300) DEFAULT NULL,
  `apellidoPaterno` varchar(300) NOT NULL,
  `apellidoMaterno` varchar(300) DEFAULT NULL,
  `telefono` varchar(10) NOT NULL,
  `estado` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Mail_Us`, `password`, `nombre1`, `nombre2`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `estado`) VALUES
('emedina@uteq.edu.mx', ': emedina@uteq.edu.mx', 'Elizabeth', '', 'Medina', '', '4423833050', 1),
('erickjesusybran@gmail.com', '12345', 'Erick', 'Jesus', 'Yañez', 'Bran', '4423534410', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
  ADD PRIMARY KEY (`id_det_soli`),
  ADD KEY `Index_detalleSolicitud_FK1_solicitud` (`id_soli`),
  ADD KEY `Index_detalleSolicitud_FK2_servicio` (`id_serv`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_serv`),
  ADD KEY `Index_servicio_FK1_categoria` (`id_cat`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_soli`),
  ADD KEY `Index_usuarios_FK1_solicitud` (`Mail_Us`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Mail_Us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_soli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
