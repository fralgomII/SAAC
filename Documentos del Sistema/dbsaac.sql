-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2024 a las 13:14:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsaac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_abono` date DEFAULT NULL,
  `asociado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `credito_id` bigint(20) UNSIGNED DEFAULT NULL,
  `valor_abono` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_primer_bien` varchar(20) DEFAULT NULL,
  `direccion_primer_bien` varchar(100) DEFAULT NULL,
  `valor_primer_bien` int(11) DEFAULT NULL,
  `hipoteca_primer_bien` varchar(50) DEFAULT NULL,
  `saldo_primer_bien` int(11) DEFAULT NULL,
  `tipo_segundo_bien` varchar(20) DEFAULT NULL,
  `direccion_segundo_bien` varchar(100) DEFAULT NULL,
  `valor_segundo_bien` int(11) DEFAULT NULL,
  `hipoteca_segundo_bien` varchar(50) DEFAULT NULL,
  `saldo_segundo_bien` int(11) DEFAULT NULL,
  `tipo_primer_vehiculo` varchar(20) DEFAULT NULL,
  `valor_primer_vehiculo` int(11) DEFAULT NULL,
  `marca_primer_vehiculo` varchar(20) DEFAULT NULL,
  `placa_primer_vehiculo` varchar(10) DEFAULT NULL,
  `saldo_primer_vehiculo` int(11) DEFAULT NULL,
  `prenda_primer_vehiculo` varchar(50) DEFAULT NULL,
  `tipo_segundo_vehiculo` varchar(20) DEFAULT NULL,
  `valor_segundo_vehiculo` int(11) DEFAULT NULL,
  `marca_segundo_vehiculo` varchar(20) DEFAULT NULL,
  `placa_segundo_vehiculo` varchar(10) DEFAULT NULL,
  `saldo_segundo_vehiculo` int(11) DEFAULT NULL,
  `prenda_segundo_vehiculo` varchar(50) DEFAULT NULL,
  `descripcion_primer_otrobien` varchar(255) DEFAULT NULL,
  `valor_primer_otrobien` int(11) DEFAULT NULL,
  `saldo_primer_otrobien` int(11) DEFAULT NULL,
  `prenda_primer_otrobien` varchar(50) DEFAULT NULL,
  `descripcion_segundo_otrobien` varchar(255) DEFAULT NULL,
  `valor_segundo_otrobien` int(11) DEFAULT NULL,
  `saldo_segundo_otrobien` int(11) DEFAULT NULL,
  `prenda_segundo_otrobien` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`id`, `asociado_id`, `tipo_primer_bien`, `direccion_primer_bien`, `valor_primer_bien`, `hipoteca_primer_bien`, `saldo_primer_bien`, `tipo_segundo_bien`, `direccion_segundo_bien`, `valor_segundo_bien`, `hipoteca_segundo_bien`, `saldo_segundo_bien`, `tipo_primer_vehiculo`, `valor_primer_vehiculo`, `marca_primer_vehiculo`, `placa_primer_vehiculo`, `saldo_primer_vehiculo`, `prenda_primer_vehiculo`, `tipo_segundo_vehiculo`, `valor_segundo_vehiculo`, `marca_segundo_vehiculo`, `placa_segundo_vehiculo`, `saldo_segundo_vehiculo`, `prenda_segundo_vehiculo`, `descripcion_primer_otrobien`, `valor_primer_otrobien`, `saldo_primer_otrobien`, `prenda_primer_otrobien`, `descripcion_segundo_otrobien`, `valor_segundo_otrobien`, `saldo_segundo_otrobien`, `prenda_segundo_otrobien`, `created_at`, `updated_at`) VALUES
(1, 1, 'Casa', 'Anillo vial Oriental 20-20 Urbanización Arboretto Casa B31', 200000000, 'BBVA', 72000000, NULL, NULL, NULL, NULL, NULL, 'Auto', 35000000, 'Clio/2016', 'HRQ192', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 00:39:28', '2024-05-11 08:21:10'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-11 14:03:13', '2024-05-11 14:39:52'),
(3, 3, 'CASA', 'PARQUES  RESIDENCIALES', 450000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CAMIONETA', 50000000, 'suzuki', 'sux 138', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:45:35', '2024-05-14 12:58:16'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MOTOCICLETA', 2500000, 'HONDA  2013', 'WOS 58C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(8, 8, 'CASA', 'FLORIDA  BLANCA', 10400000, 'BBUVA', 35000000, 'APARTAMENTO', 'LA CASTELLANA', 170000000, 'BAMCOLOMBIA', 85000000, 'CARRY', 35000000, 'CHEVROLET 2005', 'UDW 543', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(9, 9, 'CASA', 'VIVIENDA  FAMILIAR', 250000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:57:11', '2024-05-14 19:54:26'),
(10, 13, 'CASA', 'NATURA  PARQUE  CENTRAL', 105000000, 'DAVIVIVIENDA', 48000000, NULL, NULL, NULL, NULL, NULL, 'AUTOMOVIL', 40000000, 'CHEVROLET 2019', 'FRP-776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(11, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(12, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_afiliacion` date NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `tipo_documento` varchar(5) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `fecha_expedicion` date DEFAULT NULL,
  `dpto_expedicion` varchar(2) DEFAULT NULL,
  `lugar_expedicion` varchar(6) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` varchar(3) DEFAULT NULL,
  `dpto_nacimiento` varchar(2) DEFAULT NULL,
  `lugar_nacimiento` varchar(6) DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL,
  `cedula_representante` varchar(10) DEFAULT NULL,
  `nombre_representante` varchar(40) DEFAULT NULL,
  `edad_representante` int(11) DEFAULT NULL,
  `genero` varchar(11) DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `personas_adultos` int(11) DEFAULT NULL,
  `personas_menores` int(11) DEFAULT NULL,
  `cabeza_familia` varchar(2) DEFAULT NULL,
  `tipo_vivienda` varchar(10) DEFAULT NULL,
  `estrato` int(11) DEFAULT NULL,
  `dpto` varchar(2) DEFAULT NULL,
  `ciudad` varchar(6) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `nivel_educativo` varchar(15) DEFAULT NULL,
  `profesion` varchar(30) DEFAULT NULL,
  `idiomas` varchar(30) DEFAULT NULL,
  `hobbies` varchar(30) DEFAULT NULL,
  `autoriza_residencia` varchar(2) DEFAULT NULL,
  `autoriza_trabajo` varchar(2) DEFAULT NULL,
  `autoriza_familiar` varchar(2) DEFAULT NULL,
  `autoriza_email` varchar(2) DEFAULT NULL,
  `autoriza_telefono` varchar(2) DEFAULT NULL,
  `autoriza_datos` varchar(2) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`id`, `fecha_afiliacion`, `nombre`, `primer_apellido`, `segundo_apellido`, `tipo_documento`, `cedula`, `fecha_expedicion`, `dpto_expedicion`, `lugar_expedicion`, `fecha_nacimiento`, `edad`, `dpto_nacimiento`, `lugar_nacimiento`, `nacionalidad`, `cedula_representante`, `nombre_representante`, `edad_representante`, `genero`, `estado_civil`, `personas_adultos`, `personas_menores`, `cabeza_familia`, `tipo_vivienda`, `estrato`, `dpto`, `ciudad`, `direccion`, `telefono`, `celular`, `email`, `nivel_educativo`, `profesion`, `idiomas`, `hobbies`, `autoriza_residencia`, `autoriza_trabajo`, `autoriza_familiar`, `autoriza_email`, `autoriza_telefono`, `autoriza_datos`, `estado`, `created_at`, `updated_at`) VALUES
(1, '2024-05-02', 'Franklin Albeiro', 'Gómez', 'Mendoza', 'C.C.', '88227526', '1995-11-20', '54', '275', '1977-07-16', '46', '54', '275', 'Colombiano', NULL, NULL, NULL, 'Masculino', 'Casado(a)', 1, 1, 'No', 'Propia', 1, '54', '1059', 'Anillo vial Oriental 20-20 Urbanización Arboretto Casa B31', '5832353', '3112543996', 'fralgom@gmail.com', 'Magister', 'Profesor', 'No', 'Leer', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', 'Activo', '2024-05-10 00:39:27', '2024-05-10 00:39:27'),
(2, '2024-05-11', 'JHOAN  MANUEL', 'CAICEDO', 'BOHORQUEZ', 'C.C.', '88194151', '1998-01-07', '54', '1059', '1979-09-13', '44', '54', '423', 'COLOMBIANA', NULL, NULL, NULL, 'Masculino', 'Soltero(a)', NULL, 1, 'No', 'Familiar', 2, '54', '1059', 'CALLE 8# 2-53  BARRIO  VILLA ANTIGUA', '5701929', '3228642938', 'jhoanmanuelcaicedo@gmail.com', 'Especialista', 'ADMINISTRADOR', 'NO', 'GYM', 'Si', 'No', 'Si', 'Si', 'No', 'No', 'Activo', '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(3, '2024-04-25', 'FEDERICO MIGUEL', 'MARQUEZ', 'HERNANADEZ', 'C.C.', '8724372', '1981-01-28', '8', '78', '1962-05-23', '61', '8', '78', 'COLOMBIANA', NULL, NULL, NULL, 'Masculino', 'Casado(a)', NULL, NULL, 'No', 'Propia', 4, '54', '275', 'PARQUES LIBERTADORES  CASA 103', NULL, '3187709542', 'FEDMARQUEZ@HOTMAIL.COM', 'Especialista', 'MEDICO', 'NO', 'ATLETISMO', 'Si', 'No', 'No', 'Si', 'Si', 'No', 'Activo', '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(4, '2024-04-17', 'SINDI JULIETH', 'SUAREZ', 'ACUÑA', 'C.C.', '1093760344', '2010-02-05', '54', '275', '1991-12-13', '32', '54', '275', 'COLOMBIANA', NULL, NULL, NULL, 'Femenino', 'Casado(a)', NULL, NULL, 'Si', 'Familiar', 3, '54', '510', 'CALL 32 AV 4 # 32-04', NULL, '3147237336', 'SINDIYULIETH@GMAIL.COM', 'Tecnólogo', 'GESTION   COMERCIAL', 'NO', 'MUSICA', 'Si', 'No', 'No', 'Si', 'No', 'No', 'Activo', '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(5, '2024-04-10', 'ANA KATHERINE', 'CORDERO', 'GALINDO', 'C.C.', '1093760012', '2010-01-14', '54', '510', '1992-01-06', '32', '54', '275', 'COLOMBIANA', NULL, NULL, NULL, 'Femenino', 'Casado(a)', 2, NULL, 'No', 'Propia', 2, '54', '275', 'AV 4 B # 23- 11  SAN  MATEO', NULL, '3108096750', 'KATHERINECORDERO1992@GMAIL.COM', 'Tecnólogo', 'AUX ENFERMERIA', 'NO', 'NO', 'Si', 'No', 'No', 'Si', 'No', 'No', 'Activo', '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(7, '2024-04-23', 'MAURA  VICTORIA', 'GRANADOS', 'BECERRA', 'C.C.', '1090514432', '1998-03-14', '54', '275', '1998-03-14', '26', '54', '275', 'COLOMBIANO', NULL, NULL, NULL, 'Femenino', 'Soltero(a)', NULL, NULL, 'No', 'Familiar', 2, '54', '275', 'CLL 19 # 0-69 BRR OSPINA PEREZ', NULL, '3502734097', 'MAURA14GRANADOS@GMAIL.COM', 'Tecnólogo', 'TEC CONTROL AMBIENTAL', 'NO', 'LEER', 'No', 'No', 'No', 'No', 'No', 'No', 'Activo', '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(8, '2024-04-24', 'EDITH YAJAIRA', 'ANAVITARTE', 'CORREA', 'C.C.', '37440487', '2000-12-28', '54', '275', '1982-09-19', '41', '54', '275', 'COLOMBIANA', NULL, NULL, NULL, 'Femenino', 'Unión Libre', NULL, NULL, 'No', 'Familiar', 3, '54', '275', 'CLL 4N #0AE - 115', '5489755', '3115213914', 'YAJAIRA1909@HOTMAIL.COM', 'Universitario', 'MEDICO', 'NO', 'BICICLETA', 'No', 'No', 'No', 'No', 'No', 'No', 'Activo', '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(9, '2024-04-30', 'ANGELKA  MARIA', 'BARRIOS', 'ROJAS', 'C.C.', '1090374591', '2004-12-16', '54', '275', '1987-11-26', '36', '54', '275', 'COLOMBIANO', NULL, NULL, NULL, 'Femenino', 'Soltero(a)', NULL, 1, 'No', 'Familiar', 3, '5', '1', NULL, NULL, NULL, NULL, 'Especialista', 'MEDICO  ESPECIALISTA', 'NO', 'MUSICA', 'Si', 'No', 'No', 'Si', 'No', 'No', 'Activo', '2024-05-14 16:57:11', '2024-05-14 19:54:26'),
(13, '2024-04-19', 'ANDERSON JOSE', 'ALVAREZ', 'MEZA', 'C.C.', '8649810', '2003-07-03', '54', '275', '1985-05-21', '38', '8', '769', 'COLOMBIANO', NULL, NULL, NULL, 'Masculino', 'Casado(a)', NULL, 1, 'No', 'Propia', 3, '54', '275', 'NATURA PARQUE  CENTRAL', NULL, '3017775907', 'ANDERSON-PROMO@HOTMAIL.COM', 'Especialista', 'MEDICO  ESPECIALISTA', 'NO', 'LEER', 'Si', 'No', 'No', 'Si', 'No', 'Si', 'Activo', '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(14, '2024-04-26', 'MILEYDI TATIANA', 'BARRERA', 'MONTES', 'C.C.', '1090518503', '2016-08-19', '54', '275', '1998-05-22', '25', '54', '275', 'COLOMBIA', NULL, NULL, NULL, 'Femenino', 'Soltero(a)', NULL, NULL, 'No', 'Familiar', 3, '54', '275', 'CALLE 7 # 3-20 BRR BOGORA', NULL, '3133699228', 'BARRERAMILEYDI22@GMAIL.COM', 'Tecnólogo', 'AUXILIAR  DE ENFERMERIA', 'NO', 'GYM', 'Si', 'No', 'No', 'Si', 'No', 'Si', 'Activo', '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(15, '2024-04-26', 'ASTRID CAROLINA', 'GELVEZ', 'LOZANO', 'C.C.', '37396304', '2002-11-25', '54', '275', '1984-11-06', '39', '54', '275', 'COLOMBIA', NULL, NULL, NULL, 'Femenino', 'Soltero(a)', 2, 1, 'No', 'Familiar', 2, '54', '275', 'CALLE 8#1-180 URB CAMPO  VERDE', NULL, '3209934916', 'ASTRIDGELVEZ9356@GMAIL.COM', 'Universitario', 'BACTERIOLOGO', 'NO', 'CANTAR', 'Si', 'No', 'No', 'Si', 'No', 'Si', 'Activo', '2024-05-14 21:49:02', '2024-05-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado_aportes`
--

CREATE TABLE `asociado_aportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lineaaporte_id` bigint(20) UNSIGNED DEFAULT NULL,
  `valor_aporte` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asociado_aportes`
--

INSERT INTO `asociado_aportes` (`id`, `asociado_id`, `lineaaporte_id`, `valor_aporte`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100000, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(2, 1, 2, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(3, 1, 3, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(4, 1, 4, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(5, 1, 5, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(6, 1, 6, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(7, 1, 7, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(8, 1, 8, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(9, 1, 9, NULL, '2024-05-02 19:39:28', '2024-05-02 19:39:28'),
(10, 2, 1, 60000, '2024-05-11 14:03:13', '2024-05-11 14:39:52'),
(11, 2, 2, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(12, 2, 3, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(13, 2, 4, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(14, 2, 5, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(15, 2, 6, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(16, 2, 7, 30000, '2024-05-11 14:03:13', '2024-05-11 14:39:52'),
(17, 2, 8, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(18, 2, 9, NULL, '2024-05-11 14:03:13', '2024-05-11 14:03:13'),
(19, 3, 1, 100000, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(20, 3, 2, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(21, 3, 3, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(22, 3, 4, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(23, 3, 5, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(24, 3, 6, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(25, 3, 7, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(26, 3, 8, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(27, 3, 9, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(28, 4, 1, 60000, '2024-05-14 12:45:35', '2024-05-14 12:58:16'),
(29, 4, 2, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(30, 4, 3, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(31, 4, 4, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(32, 4, 5, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(33, 4, 6, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(34, 4, 7, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(35, 4, 8, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(36, 4, 9, NULL, '2024-05-14 12:45:35', '2024-05-14 12:45:35'),
(37, 5, 1, 10000, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(38, 5, 2, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(39, 5, 3, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(40, 5, 4, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(41, 5, 5, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(42, 5, 6, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(43, 5, 7, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(44, 5, 8, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(45, 5, 9, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(46, 7, 1, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(47, 7, 2, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(48, 7, 3, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(49, 7, 4, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(50, 7, 5, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(51, 7, 6, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(52, 7, 7, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(53, 7, 8, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(54, 7, 9, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(55, 8, 1, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(56, 8, 2, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(57, 8, 3, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(58, 8, 4, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(59, 8, 5, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(60, 8, 6, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(61, 8, 7, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(62, 8, 8, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(63, 8, 9, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(64, 9, 1, 60000, '2024-05-14 16:57:11', '2024-05-14 19:54:26'),
(65, 9, 2, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(66, 9, 3, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(67, 9, 4, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(68, 9, 5, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(69, 9, 6, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(70, 9, 7, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(71, 9, 8, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(72, 9, 9, NULL, '2024-05-14 16:57:11', '2024-05-14 16:57:11'),
(73, 13, 1, 60000, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(74, 13, 2, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(75, 13, 3, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(76, 13, 4, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(77, 13, 5, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(78, 13, 6, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(79, 13, 7, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(80, 13, 8, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(81, 13, 9, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(82, 14, 1, 60000, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(83, 14, 2, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(84, 14, 3, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(85, 14, 4, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(86, 14, 5, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(87, 14, 6, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(88, 14, 7, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(89, 14, 8, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(90, 14, 9, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(91, 15, 1, 60000, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(92, 15, 2, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(93, 15, 3, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(94, 15, 4, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(95, 15, 5, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(96, 15, 6, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(97, 15, 7, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(98, 15, 8, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02'),
(99, 15, 9, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conocimientos`
--

CREATE TABLE `conocimientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED NOT NULL,
  `politica_expuesta` varchar(2) DEFAULT NULL,
  `indique_politica_expuesta` varchar(50) DEFAULT NULL,
  `representa_ong` varchar(2) DEFAULT NULL,
  `indique_representa_ong` varchar(50) DEFAULT NULL,
  `persona_publica` varchar(2) DEFAULT NULL,
  `indique_persona_publica` varchar(50) DEFAULT NULL,
  `movimiento_politico` varchar(2) DEFAULT NULL,
  `indique_movimiento_politico` varchar(50) DEFAULT NULL,
  `administra_publico` varchar(2) DEFAULT NULL,
  `indique_administra_publico` varchar(50) DEFAULT NULL,
  `tributa_otro_pais` varchar(2) DEFAULT NULL,
  `indique_tributa_otro_pais` varchar(50) DEFAULT NULL,
  `vinculo_pep` varchar(2) DEFAULT NULL,
  `indique_vinculo_pep` varchar(50) DEFAULT NULL,
  `vinculo1` varchar(20) DEFAULT NULL,
  `nombre_vinculo1` varchar(50) DEFAULT NULL,
  `tipodoc_vinculo1` varchar(5) DEFAULT NULL,
  `numero_vinculo1` varchar(20) DEFAULT NULL,
  `nacionalidad_vinculo1` varchar(20) DEFAULT NULL,
  `entidad_vinculo1` varchar(20) DEFAULT NULL,
  `cargo_vinculo1` varchar(20) DEFAULT NULL,
  `fecha_vinculo1` date DEFAULT NULL,
  `vinculo2` varchar(20) DEFAULT NULL,
  `nombre_vinculo2` varchar(50) DEFAULT NULL,
  `tipodoc_vinculo2` varchar(5) DEFAULT NULL,
  `numero_vinculo2` varchar(20) DEFAULT NULL,
  `nacionalidad_vinculo2` varchar(20) DEFAULT NULL,
  `entidad_vinculo2` varchar(20) DEFAULT NULL,
  `cargo_vinculo2` varchar(20) DEFAULT NULL,
  `fecha_vinculo2` date DEFAULT NULL,
  `operaciones_extranjeras` varchar(2) DEFAULT NULL,
  `tipo_operaciones` varchar(50) DEFAULT NULL,
  `cuentas_extranjeras` varchar(2) DEFAULT NULL,
  `numero_cuenta` varchar(30) DEFAULT NULL,
  `entidad_cuenta` varchar(50) DEFAULT NULL,
  `moneda` varchar(30) DEFAULT NULL,
  `monto` int(11) DEFAULT NULL,
  `ciudad_operaciones` varchar(30) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `conocimientos`
--

INSERT INTO `conocimientos` (`id`, `asociado_id`, `politica_expuesta`, `indique_politica_expuesta`, `representa_ong`, `indique_representa_ong`, `persona_publica`, `indique_persona_publica`, `movimiento_politico`, `indique_movimiento_politico`, `administra_publico`, `indique_administra_publico`, `tributa_otro_pais`, `indique_tributa_otro_pais`, `vinculo_pep`, `indique_vinculo_pep`, `vinculo1`, `nombre_vinculo1`, `tipodoc_vinculo1`, `numero_vinculo1`, `nacionalidad_vinculo1`, `entidad_vinculo1`, `cargo_vinculo1`, `fecha_vinculo1`, `vinculo2`, `nombre_vinculo2`, `tipodoc_vinculo2`, `numero_vinculo2`, `nacionalidad_vinculo2`, `entidad_vinculo2`, `cargo_vinculo2`, `fecha_vinculo2`, `operaciones_extranjeras`, `tipo_operaciones`, `cuentas_extranjeras`, `numero_cuenta`, `entidad_cuenta`, `moneda`, `monto`, `ciudad_operaciones`, `pais`, `created_at`, `updated_at`) VALUES
(1, 1, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 00:39:28', '2024-05-11 08:21:10'),
(2, 2, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-11 14:03:13', '2024-05-11 14:39:52'),
(3, 3, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(4, 4, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:45:35', '2024-05-14 12:58:16'),
(5, 5, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(7, 7, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(8, 8, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(9, 9, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:57:11', '2024-05-14 19:54:26'),
(10, 13, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(11, 14, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(12, 15, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_credito` date DEFAULT NULL,
  `asociado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lineacredito_id` bigint(20) UNSIGNED DEFAULT NULL,
  `interes_anual` decimal(5,2) DEFAULT NULL,
  `interes_credito` decimal(5,2) DEFAULT NULL,
  `seguro_deudor` int(11) DEFAULT NULL,
  `seguro_credito` int(11) DEFAULT NULL,
  `plazo_credito` varchar(3) DEFAULT NULL,
  `valor_credito` int(11) DEFAULT NULL,
  `valor_cuota` decimal(12,2) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Solicitado',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(2) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(5, 'ANTIOQUIA'),
(8, 'ATLÁNTICO'),
(11, 'BOGOTÁ, D.C.'),
(13, 'BOLÍVAR'),
(15, 'BOYACÁ'),
(17, 'CALDAS'),
(18, 'CAQUETÁ'),
(19, 'CAUCA'),
(20, 'CESAR'),
(23, 'CÓRDOBA'),
(25, 'CUNDINAMARCA'),
(27, 'CHOCÓ'),
(41, 'HUILA'),
(44, 'LA GUAJIRA'),
(47, 'MAGDALENA'),
(50, 'META'),
(52, 'NARIÑO'),
(54, 'NORTE DE SANTANDER'),
(63, 'QUINDIO'),
(66, 'RISARALDA'),
(68, 'SANTANDER'),
(70, 'SUCRE'),
(73, 'TOLIMA'),
(76, 'VALLE DEL CAUCA'),
(81, 'ARAUCA'),
(85, 'CASANARE'),
(86, 'PUTUMAYO'),
(88, 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'),
(91, 'AMAZONAS'),
(94, 'GUAINÍA'),
(95, 'GUAVIARE'),
(97, 'VAUPÉS'),
(99, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economicas`
--

CREATE TABLE `economicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED NOT NULL,
  `actividad_economica` varchar(20) DEFAULT NULL,
  `declara_renta` varchar(2) DEFAULT NULL,
  `codigo_ciiu` varchar(5) DEFAULT NULL,
  `descripcion_ciiu` varchar(50) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `tipo_empresa` varchar(10) DEFAULT NULL,
  `tipo_contrato` varchar(30) DEFAULT NULL,
  `tiempo_actividad` varchar(10) DEFAULT NULL,
  `jornada` varchar(10) DEFAULT NULL,
  `direccion_empresa` varchar(100) DEFAULT NULL,
  `ciudad_empresa` varchar(6) DEFAULT NULL,
  `dpto_empresa` varchar(2) DEFAULT NULL,
  `telefono_empresa` varchar(30) DEFAULT NULL,
  `extension` varchar(10) DEFAULT NULL,
  `actividad_secundaria` varchar(50) DEFAULT NULL,
  `direccion_secundaria` varchar(100) DEFAULT NULL,
  `ciudad_secundaria` varchar(6) DEFAULT NULL,
  `dpto_secundaria` varchar(2) DEFAULT NULL,
  `telefono_secundaria` varchar(30) DEFAULT NULL,
  `descripcion_secundaria` varchar(255) DEFAULT NULL,
  `pensionado` varchar(2) DEFAULT NULL,
  `entidad_pension` varchar(20) DEFAULT NULL,
  `valor_pension` int(11) DEFAULT NULL,
  `fecha_pension` date DEFAULT NULL,
  `resolucion_pension` varchar(20) DEFAULT NULL,
  `fecha_corte` date DEFAULT NULL,
  `ingresos_anuales` int(11) DEFAULT NULL,
  `ingresos_mensuales` int(11) DEFAULT NULL,
  `egresos_anuales` int(11) DEFAULT NULL,
  `egresos_mensuales` int(11) DEFAULT NULL,
  `total_activos` int(11) DEFAULT NULL,
  `total_pasivos` int(11) DEFAULT NULL,
  `otros_ingresos` int(11) DEFAULT NULL,
  `descripcion_ingresos` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `economicas`
--

INSERT INTO `economicas` (`id`, `asociado_id`, `actividad_economica`, `declara_renta`, `codigo_ciiu`, `descripcion_ciiu`, `ocupacion`, `cargo`, `empresa`, `tipo_empresa`, `tipo_contrato`, `tiempo_actividad`, `jornada`, `direccion_empresa`, `ciudad_empresa`, `dpto_empresa`, `telefono_empresa`, `extension`, `actividad_secundaria`, `direccion_secundaria`, `ciudad_secundaria`, `dpto_secundaria`, `telefono_secundaria`, `descripcion_secundaria`, `pensionado`, `entidad_pension`, `valor_pension`, `fecha_pension`, `resolucion_pension`, `fecha_corte`, `ingresos_anuales`, `ingresos_mensuales`, `egresos_anuales`, `egresos_mensuales`, `total_activos`, `total_pasivos`, `otros_ingresos`, `descripcion_ingresos`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asalariado', 'No', NULL, NULL, 'Profesor', 'Profesor', 'Secretaria de Educación de Cúcuta', 'Pública', 'Indefinido', '11', 'Tarde', 'Calle 10 No. 0E – 16 Edif. Centro Empresarial – Bloque B Hotel Tonchalá', '275', '54', '5784949', NULL, NULL, NULL, '1', NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 48000000, 4000000, 36000000, 3000000, 235000000, 150000000, NULL, NULL, '2024-05-10 00:39:28', '2024-05-11 08:21:10'),
(2, 2, 'Independiente', 'No', NULL, NULL, 'ADMINISTRADOR', 'SUBGERENTE  COMERCIAL', 'COOPSERPROG', 'Privada', 'Prestación de servicios', 'TOTAL', 'DIURNO', 'CALLLE 21A # 0B - 75', '275', '54', '3042479158', NULL, 'NO', 'NO', '1', NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 25200000, 2100000, 12000000, 1000000, 25200000, 12000000, NULL, NULL, '2024-05-11 14:03:13', '2024-05-11 14:39:52'),
(3, 3, 'Asalariado', 'Si', '8621', 'MEDICO', 'MEDICO', 'MEDICO', 'IPS PROGRESANDO', 'Privada', 'Prestación de servicios', 'TOTAL', 'DIURNO', 'CALLE 21A # 0B - 95', '275', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 44000000, 12000000, 42000000, 3500000, 144000000, 42000000, NULL, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(4, 4, 'Asalariado', 'No', NULL, NULL, 'EMPLEADO', 'ASESOR  COMERCIAL', 'IPS PROGRESANDO', 'Privada', 'Indefinido', 'TOTAL', 'DIURNO', 'CALLE 21A # 0B-75  BARRIO  EL ROSAL', '275', '54', '5489755', NULL, 'NO', NULL, '1', NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 19176000, 1518000, 8400000, 700000, 19176000, 8400000, NULL, NULL, '2024-05-14 12:45:35', '2024-05-14 12:58:16'),
(5, 5, 'Asalariado', 'No', NULL, NULL, 'EMPLEADO', 'AUXILIAR  LOGISTICO', 'IPS PROGRESANDO', 'Privada', 'Indefinido', 'TOTAL', 'DIURNO', 'IPS  PROGRESANDO', '275', '54', '5489755', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 20160000, 1680000, 12000000, 1000000, 20160000, 12000000, NULL, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(7, 7, 'Asalariado', 'No', NULL, NULL, 'EMPLEADO', 'AUXILIAR  LOGISTICA ASISTENCIAL', 'IPS  PROGRESANDO', 'Privada', 'Termino Fijo', 'TOTAL', 'DIURNA', 'CALLE 21A # 0B-75', '275', '54', '5489755', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 18000000, 1500000, 10800000, 900000, 18000000, 10800000, NULL, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(8, 8, 'Asalariado', 'Si', NULL, NULL, 'MEDICO', 'ESP SALUD OCUPACIONAL', 'IPS  PROGRESANDO', 'Privada', 'Indefinido', 'COMPLETO', 'DIURNA', 'CALLE 21A # 0B - 75', '275', '54', '5489755', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 48000000, 4000000, 30000000, 2500000, 48000000, 30000000, NULL, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(9, 9, 'Asalariado', 'Si', NULL, NULL, 'MEDICO  ESPECIALISTA', 'MEDICO  ESPECIALISTA', 'IPS  PROGRESANDO', 'Privada', 'Indefinido', 'COMPLETO', 'DIURNS', 'CALLE 21A # 0B-75 BRR  BLANCO', '275', '54', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 46200000, 3850000, 2500000, 30000000, 46200000, 30000000, NULL, NULL, '2024-05-14 16:57:11', '2024-05-14 19:54:26'),
(10, 13, 'Asalariado', 'Si', '8621', NULL, 'MEDICO', 'MEDICO ESPECIALISTA', 'IPS  PROGRESANDO', 'Privada', 'Termino Fijo', 'TOTAL', 'DIURNA', 'CALLE 21A # 0B-75 EL  ROSAL', '275', '54', '5489755', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 92000000, 8000000, 48000000, 4000000, 92000000, 48000000, NULL, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(11, 14, 'Asalariado', 'No', NULL, NULL, 'AUXILIAR DE  LABORATOTIO', 'AUXILIAR DE LABORATORIO', 'UNIDAD  DIAGNOSTICA  DE COLOMBIA  SAS', 'Privada', 'Termino Fijo', 'TOTAL', 'DIURNO', 'CALLE 21A # 0-75 BRR EL  ROSAL', '275', '54', '3002942731', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 16800000, 1400000, 7200000, 600000, 18304000, 7200000, NULL, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(12, 15, 'Asalariado', 'No', NULL, NULL, 'EMPLEADO', 'BACTERIOLOGA', 'UNIDAD  DIAGNOSTICA  DE COLOMBIA', 'Privada', 'Indefinido', 'COMPLETO', 'DIURNA', 'CALLE 21A  # 0B-75 EL  ROSAL', '275', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 44400000, 3700000, 21600000, 1800000, 44400000, 21600000, NULL, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_egreso` date DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `concepto` varchar(254) DEFAULT NULL,
  `forma_pago` varchar(20) DEFAULT 'Efectivo',
  `valor` decimal(10,2) DEFAULT NULL,
  `interes_rfte` decimal(5,2) DEFAULT NULL,
  `valor_rfte` decimal(10,2) DEFAULT NULL,
  `interes_rica` decimal(5,2) DEFAULT NULL,
  `valor_rica` decimal(10,2) DEFAULT NULL,
  `valor_egreso` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaaportes`
--

CREATE TABLE `lineaaportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineaaportes`
--

INSERT INTO `lineaaportes` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Aporte Voluntario', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(2, 'Aporte a Fondo de Vivienda', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(3, 'Aporte a Fondo de Vehiculo', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(4, 'Aporte a Fondo de Microempresa', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(5, 'Aporte a Fondo de la Vista', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(6, 'Aporte para Ahorro Programado', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(7, 'Aporte Progresandito', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(8, 'Aporte Extra', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(9, 'Aporte para Ahorro Fijo', 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineacreditos`
--

CREATE TABLE `lineacreditos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `plazo` varchar(3) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `interes_anual` decimal(5,2) DEFAULT NULL,
  `interes` decimal(5,2) DEFAULT NULL,
  `seguro_vida` int(11) DEFAULT NULL,
  `seguro_credito` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineacreditos`
--

INSERT INTO `lineacreditos` (`id`, `nombre`, `plazo`, `valor`, `interes_anual`, `interes`, `seguro_vida`, `seguro_credito`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Libre Inversión', '24', 5000000, 22.80, 1.90, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(2, 'Especial Aportes', '12', 5000000, 12.00, 1.00, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(3, 'Compra de Cartera Externa', '24', 5000000, 12.00, 1.00, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(4, 'Cupo Rotativo', '24', 5000000, 24.00, 2.00, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(5, 'Crédito vehiculo (Moto)', '24', 7000000, 19.20, 1.60, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(6, 'Educativo', '6', 3000000, 18.00, 1.50, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(7, 'Credilicencias', '6', 2000000, 24.00, 2.00, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(8, 'Credisoat', '6', 2000000, 24.00, 2.00, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(9, 'Credi-tecnomecanica', '6', 2000000, 24.00, 2.00, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37'),
(10, 'Crédito Progresando', '24', 10000000, 15.60, 1.30, 0, 0, 'Activo', '2024-05-11 13:36:37', '2024-05-11 13:36:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_05_015323_create_asociados_table', 1),
(7, '2024_02_07_134559_create_lineacreditos_table', 1),
(8, '2024_02_07_134621_create_creditos_table', 1),
(9, '2024_02_07_134822_create_recaudos_table', 1),
(10, '2024_02_07_134920_create_abonos_table', 1),
(11, '2024_02_09_151947_create_permission_tables', 1),
(12, '2024_03_18_071629_create_movimiento_abonos_table', 1),
(13, '2024_03_18_071638_create_movimiento_creditos_table', 1),
(14, '2024_03_18_071807_create_periodos_table', 1),
(15, '2024_03_18_072040_create_pago_creditos_table', 1),
(16, '2024_03_18_072049_create_movimiento_pago_creditos_table', 1),
(17, '2024_03_18_072234_create_movimiento_pago_aportes_table', 1),
(18, '2024_03_18_072844_create_pago_aportes_table', 1),
(19, '2024_03_18_083749_create_lineaaportes_table', 1),
(20, '2024_04_06_003933_create_egresos_table', 1),
(21, '2024_04_20_103305_create_asociado_aportes_table', 1),
(22, '2024_04_22_143257_create_economicas_table', 1),
(23, '2024_04_22_143646_create_activos_table', 1),
(24, '2024_04_30_145844_create_conocimientos_table', 1),
(25, '2024_04_30_160944_create_referencias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_abonos`
--

CREATE TABLE `movimiento_abonos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_creditos`
--

CREATE TABLE `movimiento_creditos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `credito_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cuota` varchar(3) DEFAULT NULL,
  `interes` decimal(12,2) DEFAULT NULL,
  `capital` decimal(12,2) DEFAULT NULL,
  `seguro_deudor` int(11) DEFAULT NULL,
  `seguro_credito` int(11) DEFAULT NULL,
  `valor_cuota` decimal(12,2) DEFAULT NULL,
  `valor_abono` decimal(12,2) DEFAULT NULL,
  `valor_saldo` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_pago_aportes`
--

CREATE TABLE `movimiento_pago_aportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_pago_creditos`
--

CREATE TABLE `movimiento_pago_creditos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `estado` int(1) UNSIGNED NOT NULL,
  `departamento_id` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `nombre`, `estado`, `departamento_id`) VALUES
(1, 'ABRIAQUÍ', 1, 5),
(2, 'ACACÍAS', 1, 50),
(3, 'ACANDÍ', 1, 27),
(4, 'ACEVEDO', 1, 41),
(5, 'ACHÍ', 1, 13),
(6, 'AGRADO', 1, 41),
(7, 'AGUA DE DIOS', 1, 25),
(8, 'AGUACHICA', 1, 20),
(9, 'AGUADA', 1, 68),
(10, 'AGUADAS', 1, 17),
(11, 'AGUAZUL', 1, 85),
(12, 'AGUSTÍN CODAZZI', 1, 20),
(13, 'AIPE', 1, 41),
(14, 'ALBANIA', 1, 18),
(15, 'ALBANIA', 1, 44),
(16, 'ALBANIA', 1, 68),
(17, 'ALBÁN', 1, 25),
(18, 'ALBÁN (SAN JOSÉ)', 1, 52),
(19, 'ALCALÁ', 1, 76),
(20, 'ALEJANDRIA', 1, 5),
(21, 'ALGARROBO', 1, 47),
(22, 'ALGECIRAS', 1, 41),
(23, 'ALMAGUER', 1, 19),
(24, 'ALMEIDA', 1, 15),
(25, 'ALPUJARRA', 1, 73),
(26, 'ALTAMIRA', 1, 41),
(27, 'ALTO BAUDÓ (PIE DE PATO)', 1, 27),
(28, 'ALTOS DEL ROSARIO', 1, 13),
(29, 'ALVARADO', 1, 73),
(30, 'AMAGÁ', 1, 5),
(31, 'AMALFI', 1, 5),
(32, 'AMBALEMA', 1, 73),
(33, 'ANAPOIMA', 1, 25),
(34, 'ANCUYA', 1, 52),
(35, 'ANDALUCÍA', 1, 76),
(36, 'ANDES', 1, 5),
(37, 'ANGELÓPOLIS', 1, 5),
(38, 'ANGOSTURA', 1, 5),
(39, 'ANOLAIMA', 1, 25),
(40, 'ANORÍ', 1, 5),
(41, 'ANSERMA', 1, 17),
(42, 'ANSERMANUEVO', 1, 76),
(43, 'ANZOÁTEGUI', 1, 73),
(44, 'ANZÁ', 1, 5),
(45, 'APARTADÓ', 1, 5),
(46, 'APULO', 1, 25),
(47, 'APÍA', 1, 66),
(48, 'AQUITANIA', 1, 15),
(49, 'ARACATACA', 1, 47),
(50, 'ARANZAZU', 1, 17),
(51, 'ARATOCA', 1, 68),
(52, 'ARAUCA', 1, 81),
(53, 'ARAUQUITA', 1, 81),
(54, 'ARBELÁEZ', 1, 25),
(55, 'ARBOLEDA (BERRUECOS)', 1, 52),
(56, 'ARBOLEDAS', 1, 54),
(57, 'ARBOLETES', 1, 5),
(58, 'ARCABUCO', 1, 15),
(59, 'ARENAL', 1, 13),
(60, 'ARGELIA', 1, 5),
(61, 'ARGELIA', 1, 19),
(62, 'ARGELIA', 1, 76),
(63, 'ARIGUANÍ (EL DIFÍCIL)', 1, 47),
(64, 'ARJONA', 1, 13),
(65, 'ARMENIA', 1, 5),
(66, 'ARMENIA', 1, 63),
(67, 'ARMERO (GUAYABAL)', 1, 73),
(68, 'ARROYOHONDO', 1, 13),
(69, 'ASTREA', 1, 20),
(70, 'ATACO', 1, 73),
(71, 'ATRATO (YUTO)', 1, 27),
(72, 'AYAPEL', 1, 23),
(73, 'BAGADÓ', 1, 27),
(74, 'BAHÍA SOLANO (MÚTIS)', 1, 27),
(75, 'BAJO BAUDÓ (PIZARRO)', 1, 27),
(76, 'BALBOA', 1, 19),
(77, 'BALBOA', 1, 66),
(78, 'BARANOA', 1, 8),
(79, 'BARAYA', 1, 41),
(80, 'BARBACOAS', 1, 52),
(81, 'BARBOSA', 1, 5),
(82, 'BARBOSA', 1, 68),
(83, 'BARICHARA', 1, 68),
(84, 'BARRANCA DE UPÍA', 1, 50),
(85, 'BARRANCABERMEJA', 1, 68),
(86, 'BARRANCAS', 1, 44),
(87, 'BARRANCO DE LOBA', 1, 13),
(88, 'BARRANQUILLA', 1, 8),
(89, 'BECERRÍL', 1, 20),
(90, 'BELALCÁZAR', 1, 17),
(91, 'BELLO', 1, 5),
(92, 'BELMIRA', 1, 5),
(93, 'BELTRÁN', 1, 25),
(94, 'BELÉN', 1, 15),
(95, 'BELÉN', 1, 52),
(96, 'BELÉN DE BAJIRÁ', 1, 27),
(97, 'BELÉN DE UMBRÍA', 1, 66),
(98, 'BELÉN DE LOS ANDAQUÍES', 1, 18),
(99, 'BERBEO', 1, 15),
(100, 'BETANIA', 1, 5),
(101, 'BETEITIVA', 1, 15),
(102, 'BETULIA', 1, 5),
(103, 'BETULIA', 1, 68),
(104, 'BITUIMA', 1, 25),
(105, 'BOAVITA', 1, 15),
(106, 'BOCHALEMA', 1, 54),
(107, 'BOGOTÁ D.C.', 1, 11),
(108, 'BOJACÁ', 1, 25),
(109, 'BOJAYÁ (BELLAVISTA)', 1, 27),
(110, 'BOLÍVAR', 1, 5),
(111, 'BOLÍVAR', 1, 19),
(112, 'BOLÍVAR', 1, 68),
(113, 'BOLÍVAR', 1, 76),
(114, 'BOSCONIA', 1, 20),
(115, 'BOYACÁ', 1, 15),
(116, 'BRICEÑO', 1, 5),
(117, 'BRICEÑO', 1, 15),
(118, 'BUCARAMANGA', 1, 68),
(119, 'BUCARASICA', 1, 54),
(120, 'BUENAVENTURA', 1, 76),
(121, 'BUENAVISTA', 1, 15),
(122, 'BUENAVISTA', 1, 23),
(123, 'BUENAVISTA', 1, 63),
(124, 'BUENAVISTA', 1, 70),
(125, 'BUENOS AIRES', 1, 19),
(126, 'BUESACO', 1, 52),
(127, 'BUGA', 1, 76),
(128, 'BUGALAGRANDE', 1, 76),
(129, 'BURÍTICA', 1, 5),
(130, 'BUSBANZA', 1, 15),
(131, 'CABRERA', 1, 25),
(132, 'CABRERA', 1, 68),
(133, 'CABUYARO', 1, 50),
(134, 'CACHIPAY', 1, 25),
(135, 'CAICEDO', 1, 5),
(136, 'CAICEDONIA', 1, 76),
(137, 'CAIMITO', 1, 70),
(138, 'CAJAMARCA', 1, 73),
(139, 'CAJIBÍO', 1, 19),
(140, 'CAJICÁ', 1, 25),
(141, 'CALAMAR', 1, 13),
(142, 'CALAMAR', 1, 95),
(143, 'CALARCÁ', 1, 63),
(144, 'CALDAS', 1, 5),
(145, 'CALDAS', 1, 15),
(146, 'CALDONO', 1, 19),
(147, 'CALIFORNIA', 1, 68),
(148, 'CALIMA (DARIÉN)', 1, 76),
(149, 'CALOTO', 1, 19),
(150, 'CALÍ', 1, 76),
(151, 'CAMPAMENTO', 1, 5),
(152, 'CAMPO DE LA CRUZ', 1, 8),
(153, 'CAMPOALEGRE', 1, 41),
(154, 'CAMPOHERMOSO', 1, 15),
(155, 'CANALETE', 1, 23),
(156, 'CANDELARIA', 1, 8),
(157, 'CANDELARIA', 1, 76),
(158, 'CANTAGALLO', 1, 13),
(159, 'CANTÓN DE SAN PABLO', 1, 27),
(160, 'CAPARRAPÍ', 1, 25),
(161, 'CAPITANEJO', 1, 68),
(162, 'CARACOLÍ', 1, 5),
(163, 'CARAMANTA', 1, 5),
(164, 'CARCASÍ', 1, 68),
(165, 'CAREPA', 1, 5),
(166, 'CARMEN DE APICALÁ', 1, 73),
(167, 'CARMEN DE CARUPA', 1, 25),
(168, 'CARMEN DE VIBORAL', 1, 5),
(169, 'CARMEN DEL DARIÉN (CURBARADÓ)', 1, 27),
(170, 'CAROLINA', 1, 5),
(171, 'CARTAGENA', 1, 13),
(172, 'CARTAGENA DEL CHAIRÁ', 1, 18),
(173, 'CARTAGO', 1, 76),
(174, 'CARURÚ', 1, 97),
(175, 'CASABIANCA', 1, 73),
(176, 'CASTILLA LA NUEVA', 1, 50),
(177, 'CAUCASIA', 1, 5),
(178, 'CAÑASGORDAS', 1, 5),
(179, 'CEPITA', 1, 68),
(180, 'CERETÉ', 1, 23),
(181, 'CERINZA', 1, 15),
(182, 'CERRITO', 1, 68),
(183, 'CERRO SAN ANTONIO', 1, 47),
(184, 'CHACHAGUÍ', 1, 52),
(185, 'CHAGUANÍ', 1, 25),
(186, 'CHALÁN', 1, 70),
(187, 'CHAPARRAL', 1, 73),
(188, 'CHARALÁ', 1, 68),
(189, 'CHARTA', 1, 68),
(190, 'CHIGORODÓ', 1, 5),
(191, 'CHIMA', 1, 68),
(192, 'CHIMICHAGUA', 1, 20),
(193, 'CHIMÁ', 1, 23),
(194, 'CHINAVITA', 1, 15),
(195, 'CHINCHINÁ', 1, 17),
(196, 'CHINÁCOTA', 1, 54),
(197, 'CHINÚ', 1, 23),
(198, 'CHIPAQUE', 1, 25),
(199, 'CHIPATÁ', 1, 68),
(200, 'CHIQUINQUIRÁ', 1, 15),
(201, 'CHIRIGUANÁ', 1, 20),
(202, 'CHISCAS', 1, 15),
(203, 'CHITA', 1, 15),
(204, 'CHITAGÁ', 1, 54),
(205, 'CHITARAQUE', 1, 15),
(206, 'CHIVATÁ', 1, 15),
(207, 'CHIVOLO', 1, 47),
(208, 'CHOACHÍ', 1, 25),
(209, 'CHOCONTÁ', 1, 25),
(210, 'CHÁMEZA', 1, 85),
(211, 'CHÍA', 1, 25),
(212, 'CHÍQUIZA', 1, 15),
(213, 'CHÍVOR', 1, 15),
(214, 'CICUCO', 1, 13),
(215, 'CIMITARRA', 1, 68),
(216, 'CIRCASIA', 1, 63),
(217, 'CISNEROS', 1, 5),
(218, 'CIÉNAGA', 1, 15),
(219, 'CIÉNAGA', 1, 47),
(220, 'CIÉNAGA DE ORO', 1, 23),
(221, 'CLEMENCIA', 1, 13),
(222, 'COCORNÁ', 1, 5),
(223, 'COELLO', 1, 73),
(224, 'COGUA', 1, 25),
(225, 'COLOMBIA', 1, 41),
(226, 'COLOSÓ (RICAURTE)', 1, 70),
(227, 'COLÓN', 1, 86),
(228, 'COLÓN (GÉNOVA)', 1, 52),
(229, 'CONCEPCIÓN', 1, 5),
(230, 'CONCEPCIÓN', 1, 68),
(231, 'CONCORDIA', 1, 5),
(232, 'CONCORDIA', 1, 47),
(233, 'CONDOTO', 1, 27),
(234, 'CONFINES', 1, 68),
(235, 'CONSACA', 1, 52),
(236, 'CONTADERO', 1, 52),
(237, 'CONTRATACIÓN', 1, 68),
(238, 'CONVENCIÓN', 1, 54),
(239, 'COPACABANA', 1, 5),
(240, 'COPER', 1, 15),
(241, 'CORDOBÁ', 1, 63),
(242, 'CORINTO', 1, 19),
(243, 'COROMORO', 1, 68),
(244, 'COROZAL', 1, 70),
(245, 'CORRALES', 1, 15),
(246, 'COTA', 1, 25),
(247, 'COTORRA', 1, 23),
(248, 'COVARACHÍA', 1, 15),
(249, 'COVEÑAS', 1, 70),
(250, 'COYAIMA', 1, 73),
(251, 'CRAVO NORTE', 1, 81),
(252, 'CUASPUD (CARLOSAMA)', 1, 52),
(253, 'CUBARRAL', 1, 50),
(254, 'CUBARÁ', 1, 15),
(255, 'CUCAITA', 1, 15),
(256, 'CUCUNUBÁ', 1, 25),
(257, 'CUCUTILLA', 1, 54),
(258, 'CUITIVA', 1, 15),
(259, 'CUMARAL', 1, 50),
(260, 'CUMARIBO', 1, 99),
(261, 'CUMBAL', 1, 52),
(262, 'CUMBITARA', 1, 52),
(263, 'CUNDAY', 1, 73),
(264, 'CURILLO', 1, 18),
(265, 'CURITÍ', 1, 68),
(266, 'CURUMANÍ', 1, 20),
(267, 'CÁCERES', 1, 5),
(268, 'CÁCHIRA', 1, 54),
(269, 'CÁCOTA', 1, 54),
(270, 'CÁQUEZA', 1, 25),
(271, 'CÉRTEGUI', 1, 27),
(272, 'CÓMBITA', 1, 15),
(273, 'CÓRDOBA', 1, 13),
(274, 'CÓRDOBA', 1, 52),
(275, 'CÚCUTA', 1, 54),
(276, 'DABEIBA', 1, 5),
(277, 'DAGUA', 1, 76),
(278, 'DIBULLA', 1, 44),
(279, 'DISTRACCIÓN', 1, 44),
(280, 'DOLORES', 1, 73),
(281, 'DON MATÍAS', 1, 5),
(282, 'DOS QUEBRADAS', 1, 66),
(283, 'DUITAMA', 1, 15),
(284, 'DURANIA', 1, 54),
(285, 'EBÉJICO', 1, 5),
(286, 'EL BAGRE', 1, 5),
(287, 'EL BANCO', 1, 47),
(288, 'EL CAIRO', 1, 76),
(289, 'EL CALVARIO', 1, 50),
(290, 'EL CARMEN', 1, 54),
(291, 'EL CARMEN', 1, 68),
(292, 'EL CARMEN DE ATRATO', 1, 27),
(293, 'EL CARMEN DE BOLÍVAR', 1, 13),
(294, 'EL CASTILLO', 1, 50),
(295, 'EL CERRITO', 1, 76),
(296, 'EL CHARCO', 1, 52),
(297, 'EL COCUY', 1, 15),
(298, 'EL COLEGIO', 1, 25),
(299, 'EL COPEY', 1, 20),
(300, 'EL DONCELLO', 1, 18),
(301, 'EL DORADO', 1, 50),
(302, 'EL DOVIO', 1, 76),
(303, 'EL ESPINO', 1, 15),
(304, 'EL GUACAMAYO', 1, 68),
(305, 'EL GUAMO', 1, 13),
(306, 'EL MOLINO', 1, 44),
(307, 'EL PASO', 1, 20),
(308, 'EL PAUJIL', 1, 18),
(309, 'EL PEÑOL', 1, 52),
(310, 'EL PEÑON', 1, 13),
(311, 'EL PEÑON', 1, 68),
(312, 'EL PEÑÓN', 1, 25),
(313, 'EL PIÑON', 1, 47),
(314, 'EL PLAYÓN', 1, 68),
(315, 'EL RETORNO', 1, 95),
(316, 'EL RETÉN', 1, 47),
(317, 'EL ROBLE', 1, 70),
(318, 'EL ROSAL', 1, 25),
(319, 'EL ROSARIO', 1, 52),
(320, 'EL TABLÓN DE GÓMEZ', 1, 52),
(321, 'EL TAMBO', 1, 19),
(322, 'EL TAMBO', 1, 52),
(323, 'EL TARRA', 1, 54),
(324, 'EL ZULIA', 1, 54),
(325, 'EL ÁGUILA', 1, 76),
(326, 'ELÍAS', 1, 41),
(327, 'ENCINO', 1, 68),
(328, 'ENCISO', 1, 68),
(329, 'ENTRERRÍOS', 1, 5),
(330, 'ENVIGADO', 1, 5),
(331, 'ESPINAL', 1, 73),
(332, 'FACATATIVÁ', 1, 25),
(333, 'FALAN', 1, 73),
(334, 'FILADELFIA', 1, 17),
(335, 'FILANDIA', 1, 63),
(336, 'FIRAVITOBA', 1, 15),
(337, 'FLANDES', 1, 73),
(338, 'FLORENCIA', 1, 18),
(339, 'FLORENCIA', 1, 19),
(340, 'FLORESTA', 1, 15),
(341, 'FLORIDA', 1, 76),
(342, 'FLORIDABLANCA', 1, 68),
(343, 'FLORIÁN', 1, 68),
(344, 'FONSECA', 1, 44),
(345, 'FORTÚL', 1, 81),
(346, 'FOSCA', 1, 25),
(347, 'FRANCISCO PIZARRO', 1, 52),
(348, 'FREDONIA', 1, 5),
(349, 'FRESNO', 1, 73),
(350, 'FRONTINO', 1, 5),
(351, 'FUENTE DE ORO', 1, 50),
(352, 'FUNDACIÓN', 1, 47),
(353, 'FUNES', 1, 52),
(354, 'FUNZA', 1, 25),
(355, 'FUSAGASUGÁ', 1, 25),
(356, 'FÓMEQUE', 1, 25),
(357, 'FÚQUENE', 1, 25),
(358, 'GACHALÁ', 1, 25),
(359, 'GACHANCIPÁ', 1, 25),
(360, 'GACHANTIVÁ', 1, 15),
(361, 'GACHETÁ', 1, 25),
(362, 'GALAPA', 1, 8),
(363, 'GALERAS (NUEVA GRANADA)', 1, 70),
(364, 'GALÁN', 1, 68),
(365, 'GAMA', 1, 25),
(366, 'GAMARRA', 1, 20),
(367, 'GARAGOA', 1, 15),
(368, 'GARZÓN', 1, 41),
(369, 'GIGANTE', 1, 41),
(370, 'GINEBRA', 1, 76),
(371, 'GIRALDO', 1, 5),
(372, 'GIRARDOT', 1, 25),
(373, 'GIRARDOTA', 1, 5),
(374, 'GIRÓN', 1, 68),
(375, 'GONZALEZ', 1, 20),
(376, 'GRAMALOTE', 1, 54),
(377, 'GRANADA', 1, 5),
(378, 'GRANADA', 1, 25),
(379, 'GRANADA', 1, 50),
(380, 'GUACA', 1, 68),
(381, 'GUACAMAYAS', 1, 15),
(382, 'GUACARÍ', 1, 76),
(383, 'GUACHAVÉS', 1, 52),
(384, 'GUACHENÉ', 1, 19),
(385, 'GUACHETÁ', 1, 25),
(386, 'GUACHUCAL', 1, 52),
(387, 'GUADALUPE', 1, 5),
(388, 'GUADALUPE', 1, 41),
(389, 'GUADALUPE', 1, 68),
(390, 'GUADUAS', 1, 25),
(391, 'GUAITARILLA', 1, 52),
(392, 'GUALMATÁN', 1, 52),
(393, 'GUAMAL', 1, 47),
(394, 'GUAMAL', 1, 50),
(395, 'GUAMO', 1, 73),
(396, 'GUAPOTA', 1, 68),
(397, 'GUAPÍ', 1, 19),
(398, 'GUARANDA', 1, 70),
(399, 'GUARNE', 1, 5),
(400, 'GUASCA', 1, 25),
(401, 'GUATAPÉ', 1, 5),
(402, 'GUATAQUÍ', 1, 25),
(403, 'GUATAVITA', 1, 25),
(404, 'GUATEQUE', 1, 15),
(405, 'GUAVATÁ', 1, 68),
(406, 'GUAYABAL DE SIQUIMA', 1, 25),
(407, 'GUAYABETAL', 1, 25),
(408, 'GUAYATÁ', 1, 15),
(409, 'GUEPSA', 1, 68),
(410, 'GUICÁN', 1, 15),
(411, 'GUTIÉRREZ', 1, 25),
(412, 'GUÁTICA', 1, 66),
(413, 'GÁMBITA', 1, 68),
(414, 'GÁMEZA', 1, 15),
(415, 'GÉNOVA', 1, 63),
(416, 'GÓMEZ PLATA', 1, 5),
(417, 'HACARÍ', 1, 54),
(418, 'HATILLO DE LOBA', 1, 13),
(419, 'HATO', 1, 68),
(420, 'HATO COROZAL', 1, 85),
(421, 'HATONUEVO', 1, 44),
(422, 'HELICONIA', 1, 5),
(423, 'HERRÁN', 1, 54),
(424, 'HERVEO', 1, 73),
(425, 'HISPANIA', 1, 5),
(426, 'HOBO', 1, 41),
(427, 'HONDA', 1, 73),
(428, 'IBAGUÉ', 1, 73),
(429, 'ICONONZO', 1, 73),
(430, 'ILES', 1, 52),
(431, 'IMÚES', 1, 52),
(432, 'INZÁ', 1, 19),
(433, 'INÍRIDA', 1, 94),
(434, 'IPIALES', 1, 52),
(435, 'ISNOS', 1, 41),
(436, 'ISTMINA', 1, 27),
(437, 'ITAGÜÍ', 1, 5),
(438, 'ITUANGO', 1, 5),
(439, 'IZÁ', 1, 15),
(440, 'JAMBALÓ', 1, 19),
(441, 'JAMUNDÍ', 1, 76),
(442, 'JARDÍN', 1, 5),
(443, 'JENESANO', 1, 15),
(444, 'JERICÓ', 1, 5),
(445, 'JERICÓ', 1, 15),
(446, 'JERUSALÉN', 1, 25),
(447, 'JESÚS MARÍA', 1, 68),
(448, 'JORDÁN', 1, 68),
(449, 'JUAN DE ACOSTA', 1, 8),
(450, 'JUNÍN', 1, 25),
(451, 'JURADÓ', 1, 27),
(452, 'LA APARTADA Y LA FRONTERA', 1, 23),
(453, 'LA ARGENTINA', 1, 41),
(454, 'LA BELLEZA', 1, 68),
(455, 'LA CALERA', 1, 25),
(456, 'LA CAPILLA', 1, 15),
(457, 'LA CEJA', 1, 5),
(458, 'LA CELIA', 1, 66),
(459, 'LA CRUZ', 1, 52),
(460, 'LA CUMBRE', 1, 76),
(461, 'LA DORADA', 1, 17),
(462, 'LA ESPERANZA', 1, 54),
(463, 'LA ESTRELLA', 1, 5),
(464, 'LA FLORIDA', 1, 52),
(465, 'LA GLORIA', 1, 20),
(466, 'LA JAGUA DE IBIRICO', 1, 20),
(467, 'LA JAGUA DEL PILAR', 1, 44),
(468, 'LA LLANADA', 1, 52),
(469, 'LA MACARENA', 1, 50),
(470, 'LA MERCED', 1, 17),
(471, 'LA MESA', 1, 25),
(472, 'LA MONTAÑITA', 1, 18),
(473, 'LA PALMA', 1, 25),
(474, 'LA PAZ', 1, 68),
(475, 'LA PAZ (ROBLES)', 1, 20),
(476, 'LA PEÑA', 1, 25),
(477, 'LA PINTADA', 1, 5),
(478, 'LA PLATA', 1, 41),
(479, 'LA PLAYA', 1, 54),
(480, 'LA PRIMAVERA', 1, 99),
(481, 'LA SALINA', 1, 85),
(482, 'LA SIERRA', 1, 19),
(483, 'LA TEBAIDA', 1, 63),
(484, 'LA TOLA', 1, 52),
(485, 'LA UNIÓN', 1, 5),
(486, 'LA UNIÓN', 1, 52),
(487, 'LA UNIÓN', 1, 70),
(488, 'LA UNIÓN', 1, 76),
(489, 'LA UVITA', 1, 15),
(490, 'LA VEGA', 1, 19),
(491, 'LA VEGA', 1, 25),
(492, 'LA VICTORIA', 1, 15),
(493, 'LA VICTORIA', 1, 17),
(494, 'LA VICTORIA', 1, 76),
(495, 'LA VIRGINIA', 1, 66),
(496, 'LABATECA', 1, 54),
(497, 'LABRANZAGRANDE', 1, 15),
(498, 'LANDÁZURI', 1, 68),
(499, 'LEBRIJA', 1, 68),
(500, 'LEIVA', 1, 52),
(501, 'LEJANÍAS', 1, 50),
(502, 'LENGUAZAQUE', 1, 25),
(503, 'LETICIA', 1, 91),
(504, 'LIBORINA', 1, 5),
(505, 'LINARES', 1, 52),
(506, 'LLORÓ', 1, 27),
(507, 'LORICA', 1, 23),
(508, 'LOS CÓRDOBAS', 1, 23),
(509, 'LOS PALMITOS', 1, 70),
(510, 'LOS PATIOS', 1, 54),
(511, 'LOS SANTOS', 1, 68),
(512, 'LOURDES', 1, 54),
(513, 'LURUACO', 1, 8),
(514, 'LÉRIDA', 1, 73),
(515, 'LÍBANO', 1, 73),
(516, 'LÓPEZ (MICAY)', 1, 19),
(517, 'MACANAL', 1, 15),
(518, 'MACARAVITA', 1, 68),
(519, 'MACEO', 1, 5),
(520, 'MACHETÁ', 1, 25),
(521, 'MADRID', 1, 25),
(522, 'MAGANGUÉ', 1, 13),
(523, 'MAGÜI (PAYÁN)', 1, 52),
(524, 'MAHATES', 1, 13),
(525, 'MAICAO', 1, 44),
(526, 'MAJAGUAL', 1, 70),
(527, 'MALAMBO', 1, 8),
(528, 'MALLAMA (PIEDRANCHA)', 1, 52),
(529, 'MANATÍ', 1, 8),
(530, 'MANAURE', 1, 44),
(531, 'MANAURE BALCÓN DEL CESAR', 1, 20),
(532, 'MANIZALES', 1, 17),
(533, 'MANTA', 1, 25),
(534, 'MANZANARES', 1, 17),
(535, 'MANÍ', 1, 85),
(536, 'MAPIRIPAN', 1, 50),
(537, 'MARGARITA', 1, 13),
(538, 'MARINILLA', 1, 5),
(539, 'MARIPÍ', 1, 15),
(540, 'MARIQUITA', 1, 73),
(541, 'MARMATO', 1, 17),
(542, 'MARQUETALIA', 1, 17),
(543, 'MARSELLA', 1, 66),
(544, 'MARULANDA', 1, 17),
(545, 'MARÍA LA BAJA', 1, 13),
(546, 'MATANZA', 1, 68),
(547, 'MEDELLÍN', 1, 5),
(548, 'MEDINA', 1, 25),
(549, 'MEDIO ATRATO', 1, 27),
(550, 'MEDIO BAUDÓ', 1, 27),
(551, 'MEDIO SAN JUAN (ANDAGOYA)', 1, 27),
(552, 'MELGAR', 1, 73),
(553, 'MERCADERES', 1, 19),
(554, 'MESETAS', 1, 50),
(555, 'MILÁN', 1, 18),
(556, 'MIRAFLORES', 1, 15),
(557, 'MIRAFLORES', 1, 95),
(558, 'MIRANDA', 1, 19),
(559, 'MISTRATÓ', 1, 66),
(560, 'MITÚ', 1, 97),
(561, 'MOCOA', 1, 86),
(562, 'MOGOTES', 1, 68),
(563, 'MOLAGAVITA', 1, 68),
(564, 'MOMIL', 1, 23),
(565, 'MOMPÓS', 1, 13),
(566, 'MONGUA', 1, 15),
(567, 'MONGUÍ', 1, 15),
(568, 'MONIQUIRÁ', 1, 15),
(569, 'MONTEBELLO', 1, 5),
(570, 'MONTECRISTO', 1, 13),
(571, 'MONTELÍBANO', 1, 23),
(572, 'MONTENEGRO', 1, 63),
(573, 'MONTERIA', 1, 23),
(574, 'MONTERREY', 1, 85),
(575, 'MORALES', 1, 13),
(576, 'MORALES', 1, 19),
(577, 'MORELIA', 1, 18),
(578, 'MORROA', 1, 70),
(579, 'MOSQUERA', 1, 25),
(580, 'MOSQUERA', 1, 52),
(581, 'MOTAVITA', 1, 15),
(582, 'MOÑITOS', 1, 23),
(583, 'MURILLO', 1, 73),
(584, 'MURINDÓ', 1, 5),
(585, 'MUTATÁ', 1, 5),
(586, 'MUTISCUA', 1, 54),
(587, 'MUZO', 1, 15),
(588, 'MÁLAGA', 1, 68),
(589, 'NARIÑO', 1, 5),
(590, 'NARIÑO', 1, 25),
(591, 'NARIÑO', 1, 52),
(592, 'NATAGAIMA', 1, 73),
(593, 'NECHÍ', 1, 5),
(594, 'NECOCLÍ', 1, 5),
(595, 'NEIRA', 1, 17),
(596, 'NEIVA', 1, 41),
(597, 'NEMOCÓN', 1, 25),
(598, 'NILO', 1, 25),
(599, 'NIMAIMA', 1, 25),
(600, 'NOBSA', 1, 15),
(601, 'NOCAIMA', 1, 25),
(602, 'NORCASIA', 1, 17),
(603, 'NOROSÍ', 1, 13),
(604, 'NOVITA', 1, 27),
(605, 'NUEVA GRANADA', 1, 47),
(606, 'NUEVO COLÓN', 1, 15),
(607, 'NUNCHÍA', 1, 85),
(608, 'NUQUÍ', 1, 27),
(609, 'NÁTAGA', 1, 41),
(610, 'OBANDO', 1, 76),
(611, 'OCAMONTE', 1, 68),
(612, 'OCAÑA', 1, 54),
(613, 'OIBA', 1, 68),
(614, 'OICATÁ', 1, 15),
(615, 'OLAYA', 1, 5),
(616, 'OLAYA HERRERA', 1, 52),
(617, 'ONZAGA', 1, 68),
(618, 'OPORAPA', 1, 41),
(619, 'ORITO', 1, 86),
(620, 'OROCUÉ', 1, 85),
(621, 'ORTEGA', 1, 73),
(622, 'OSPINA', 1, 52),
(623, 'OTANCHE', 1, 15),
(624, 'OVEJAS', 1, 70),
(625, 'PACHAVITA', 1, 15),
(626, 'PACHO', 1, 25),
(627, 'PADILLA', 1, 19),
(628, 'PAICOL', 1, 41),
(629, 'PAILITAS', 1, 20),
(630, 'PAIME', 1, 25),
(631, 'PAIPA', 1, 15),
(632, 'PAJARITO', 1, 15),
(633, 'PALERMO', 1, 41),
(634, 'PALESTINA', 1, 17),
(635, 'PALESTINA', 1, 41),
(636, 'PALMAR', 1, 68),
(637, 'PALMAR DE VARELA', 1, 8),
(638, 'PALMAS DEL SOCORRO', 1, 68),
(639, 'PALMIRA', 1, 76),
(640, 'PALMITO', 1, 70),
(641, 'PALOCABILDO', 1, 73),
(642, 'PAMPLONA', 1, 54),
(643, 'PAMPLONITA', 1, 54),
(644, 'PANDI', 1, 25),
(645, 'PANQUEBA', 1, 15),
(646, 'PARATEBUENO', 1, 25),
(647, 'PASCA', 1, 25),
(648, 'PATÍA (EL BORDO)', 1, 19),
(649, 'PAUNA', 1, 15),
(650, 'PAYA', 1, 15),
(651, 'PAZ DE ARIPORO', 1, 85),
(652, 'PAZ DE RÍO', 1, 15),
(653, 'PEDRAZA', 1, 47),
(654, 'PELAYA', 1, 20),
(655, 'PENSILVANIA', 1, 17),
(656, 'PEQUE', 1, 5),
(657, 'PEREIRA', 1, 66),
(658, 'PESCA', 1, 15),
(659, 'PEÑOL', 1, 5),
(660, 'PIAMONTE', 1, 19),
(661, 'PIE DE CUESTA', 1, 68),
(662, 'PIEDRAS', 1, 73),
(663, 'PIENDAMÓ', 1, 19),
(664, 'PIJAO', 1, 63),
(665, 'PIJIÑO', 1, 47),
(666, 'PINCHOTE', 1, 68),
(667, 'PINILLOS', 1, 13),
(668, 'PIOJO', 1, 8),
(669, 'PISVA', 1, 15),
(670, 'PITAL', 1, 41),
(671, 'PITALITO', 1, 41),
(672, 'PIVIJAY', 1, 47),
(673, 'PLANADAS', 1, 73),
(674, 'PLANETA RICA', 1, 23),
(675, 'PLATO', 1, 47),
(676, 'POLICARPA', 1, 52),
(677, 'POLONUEVO', 1, 8),
(678, 'PONEDERA', 1, 8),
(679, 'POPAYÁN', 1, 19),
(680, 'PORE', 1, 85),
(681, 'POTOSÍ', 1, 52),
(682, 'PRADERA', 1, 76),
(683, 'PRADO', 1, 73),
(684, 'PROVIDENCIA', 1, 52),
(685, 'PROVIDENCIA', 1, 88),
(686, 'PUEBLO BELLO', 1, 20),
(687, 'PUEBLO NUEVO', 1, 23),
(688, 'PUEBLO RICO', 1, 66),
(689, 'PUEBLORRICO', 1, 5),
(690, 'PUEBLOVIEJO', 1, 47),
(691, 'PUENTE NACIONAL', 1, 68),
(692, 'PUERRES', 1, 52),
(693, 'PUERTO ASÍS', 1, 86),
(694, 'PUERTO BERRÍO', 1, 5),
(695, 'PUERTO BOYACÁ', 1, 15),
(696, 'PUERTO CAICEDO', 1, 86),
(697, 'PUERTO CARREÑO', 1, 99),
(698, 'PUERTO COLOMBIA', 1, 8),
(699, 'PUERTO CONCORDIA', 1, 50),
(700, 'PUERTO ESCONDIDO', 1, 23),
(701, 'PUERTO GAITÁN', 1, 50),
(702, 'PUERTO GUZMÁN', 1, 86),
(703, 'PUERTO LEGUÍZAMO', 1, 86),
(704, 'PUERTO LIBERTADOR', 1, 23),
(705, 'PUERTO LLERAS', 1, 50),
(706, 'PUERTO LÓPEZ', 1, 50),
(707, 'PUERTO NARE', 1, 5),
(708, 'PUERTO NARIÑO', 1, 91),
(709, 'PUERTO PARRA', 1, 68),
(710, 'PUERTO RICO', 1, 18),
(711, 'PUERTO RICO', 1, 50),
(712, 'PUERTO RONDÓN', 1, 81),
(713, 'PUERTO SALGAR', 1, 25),
(714, 'PUERTO SANTANDER', 1, 54),
(715, 'PUERTO TEJADA', 1, 19),
(716, 'PUERTO TRIUNFO', 1, 5),
(717, 'PUERTO WILCHES', 1, 68),
(718, 'PULÍ', 1, 25),
(719, 'PUPIALES', 1, 52),
(720, 'PURACÉ (COCONUCO)', 1, 19),
(721, 'PURIFICACIÓN', 1, 73),
(722, 'PURÍSIMA', 1, 23),
(723, 'PÁCORA', 1, 17),
(724, 'PÁEZ', 1, 15),
(725, 'PÁEZ (BELALCAZAR)', 1, 19),
(726, 'PÁRAMO', 1, 68),
(727, 'QUEBRADANEGRA', 1, 25),
(728, 'QUETAME', 1, 25),
(729, 'QUIBDÓ', 1, 27),
(730, 'QUIMBAYA', 1, 63),
(731, 'QUINCHÍA', 1, 66),
(732, 'QUIPAMA', 1, 15),
(733, 'QUIPILE', 1, 25),
(734, 'RAGONVALIA', 1, 54),
(735, 'RAMIRIQUÍ', 1, 15),
(736, 'RECETOR', 1, 85),
(737, 'REGIDOR', 1, 13),
(738, 'REMEDIOS', 1, 5),
(739, 'REMOLINO', 1, 47),
(740, 'REPELÓN', 1, 8),
(741, 'RESTREPO', 1, 50),
(742, 'RESTREPO', 1, 76),
(743, 'RETIRO', 1, 5),
(744, 'RICAURTE', 1, 25),
(745, 'RICAURTE', 1, 52),
(746, 'RIO NEGRO', 1, 68),
(747, 'RIOBLANCO', 1, 73),
(748, 'RIOFRÍO', 1, 76),
(749, 'RIOHACHA', 1, 44),
(750, 'RISARALDA', 1, 17),
(751, 'RIVERA', 1, 41),
(752, 'ROBERTO PAYÁN (SAN JOSÉ)', 1, 52),
(753, 'ROLDANILLO', 1, 76),
(754, 'RONCESVALLES', 1, 73),
(755, 'RONDÓN', 1, 15),
(756, 'ROSAS', 1, 19),
(757, 'ROVIRA', 1, 73),
(758, 'RÁQUIRA', 1, 15),
(759, 'RÍO IRÓ', 1, 27),
(760, 'RÍO QUITO', 1, 27),
(761, 'RÍO SUCIO', 1, 17),
(762, 'RÍO VIEJO', 1, 13),
(763, 'RÍO DE ORO', 1, 20),
(764, 'RÍONEGRO', 1, 5),
(765, 'RÍOSUCIO', 1, 27),
(766, 'SABANA DE TORRES', 1, 68),
(767, 'SABANAGRANDE', 1, 8),
(768, 'SABANALARGA', 1, 5),
(769, 'SABANALARGA', 1, 8),
(770, 'SABANALARGA', 1, 85),
(771, 'SABANAS DE SAN ANGEL (SAN ANGEL)', 1, 47),
(772, 'SABANETA', 1, 5),
(773, 'SABOYÁ', 1, 15),
(774, 'SAHAGÚN', 1, 23),
(775, 'SALADOBLANCO', 1, 41),
(776, 'SALAMINA', 1, 17),
(777, 'SALAMINA', 1, 47),
(778, 'SALAZAR', 1, 54),
(779, 'SALDAÑA', 1, 73),
(780, 'SALENTO', 1, 63),
(781, 'SALGAR', 1, 5),
(782, 'SAMACÁ', 1, 15),
(783, 'SAMANIEGO', 1, 52),
(784, 'SAMANÁ', 1, 17),
(785, 'SAMPUÉS', 1, 70),
(786, 'SAN AGUSTÍN', 1, 41),
(787, 'SAN ALBERTO', 1, 20),
(788, 'SAN ANDRÉS', 1, 68),
(789, 'SAN ANDRÉS SOTAVENTO', 1, 23),
(790, 'SAN ANDRÉS DE CUERQUÍA', 1, 5),
(791, 'SAN ANTERO', 1, 23),
(792, 'SAN ANTONIO', 1, 73),
(793, 'SAN ANTONIO DE TEQUENDAMA', 1, 25),
(794, 'SAN BENITO', 1, 68),
(795, 'SAN BENITO ABAD', 1, 70),
(796, 'SAN BERNARDO', 1, 25),
(797, 'SAN BERNARDO', 1, 52),
(798, 'SAN BERNARDO DEL VIENTO', 1, 23),
(799, 'SAN CALIXTO', 1, 54),
(800, 'SAN CARLOS', 1, 5),
(801, 'SAN CARLOS', 1, 23),
(802, 'SAN CARLOS DE GUAROA', 1, 50),
(803, 'SAN CAYETANO', 1, 25),
(804, 'SAN CAYETANO', 1, 54),
(805, 'SAN CRISTOBAL', 1, 13),
(806, 'SAN DIEGO', 1, 20),
(807, 'SAN EDUARDO', 1, 15),
(808, 'SAN ESTANISLAO', 1, 13),
(809, 'SAN FERNANDO', 1, 13),
(810, 'SAN FRANCISCO', 1, 5),
(811, 'SAN FRANCISCO', 1, 25),
(812, 'SAN FRANCISCO', 1, 86),
(813, 'SAN GÍL', 1, 68),
(814, 'SAN JACINTO', 1, 13),
(815, 'SAN JACINTO DEL CAUCA', 1, 13),
(816, 'SAN JERÓNIMO', 1, 5),
(817, 'SAN JOAQUÍN', 1, 68),
(818, 'SAN JOSÉ', 1, 17),
(819, 'SAN JOSÉ DE MIRANDA', 1, 68),
(820, 'SAN JOSÉ DE MONTAÑA', 1, 5),
(821, 'SAN JOSÉ DE PARE', 1, 15),
(822, 'SAN JOSÉ DE URÉ', 1, 23),
(823, 'SAN JOSÉ DEL FRAGUA', 1, 18),
(824, 'SAN JOSÉ DEL GUAVIARE', 1, 95),
(825, 'SAN JOSÉ DEL PALMAR', 1, 27),
(826, 'SAN JUAN DE ARAMA', 1, 50),
(827, 'SAN JUAN DE BETULIA', 1, 70),
(828, 'SAN JUAN DE NEPOMUCENO', 1, 13),
(829, 'SAN JUAN DE PASTO', 1, 52),
(830, 'SAN JUAN DE RÍO SECO', 1, 25),
(831, 'SAN JUAN DE URABÁ', 1, 5),
(832, 'SAN JUAN DEL CESAR', 1, 44),
(833, 'SAN JUANITO', 1, 50),
(834, 'SAN LORENZO', 1, 52),
(835, 'SAN LUIS', 1, 73),
(836, 'SAN LUÍS', 1, 5),
(837, 'SAN LUÍS DE GACENO', 1, 15),
(838, 'SAN LUÍS DE PALENQUE', 1, 85),
(839, 'SAN MARCOS', 1, 70),
(840, 'SAN MARTÍN', 1, 20),
(841, 'SAN MARTÍN', 1, 50),
(842, 'SAN MARTÍN DE LOBA', 1, 13),
(843, 'SAN MATEO', 1, 15),
(844, 'SAN MIGUEL', 1, 68),
(845, 'SAN MIGUEL', 1, 86),
(846, 'SAN MIGUEL DE SEMA', 1, 15),
(847, 'SAN ONOFRE', 1, 70),
(848, 'SAN PABLO', 1, 13),
(849, 'SAN PABLO', 1, 52),
(850, 'SAN PABLO DE BORBUR', 1, 15),
(851, 'SAN PEDRO', 1, 5),
(852, 'SAN PEDRO', 1, 70),
(853, 'SAN PEDRO', 1, 76),
(854, 'SAN PEDRO DE CARTAGO', 1, 52),
(855, 'SAN PEDRO DE URABÁ', 1, 5),
(856, 'SAN PELAYO', 1, 23),
(857, 'SAN RAFAEL', 1, 5),
(858, 'SAN ROQUE', 1, 5),
(859, 'SAN SEBASTIÁN', 1, 19),
(860, 'SAN SEBASTIÁN DE BUENAVISTA', 1, 47),
(861, 'SAN VICENTE', 1, 5),
(862, 'SAN VICENTE DEL CAGUÁN', 1, 18),
(863, 'SAN VICENTE DEL CHUCURÍ', 1, 68),
(864, 'SAN ZENÓN', 1, 47),
(865, 'SANDONÁ', 1, 52),
(866, 'SANTA ANA', 1, 47),
(867, 'SANTA BÁRBARA', 1, 5),
(868, 'SANTA BÁRBARA', 1, 68),
(869, 'SANTA BÁRBARA (ISCUANDÉ)', 1, 52),
(870, 'SANTA BÁRBARA DE PINTO', 1, 47),
(871, 'SANTA CATALINA', 1, 13),
(872, 'SANTA FÉ DE ANTIOQUIA', 1, 5),
(873, 'SANTA GENOVEVA DE DOCORODÓ', 1, 27),
(874, 'SANTA HELENA DEL OPÓN', 1, 68),
(875, 'SANTA ISABEL', 1, 73),
(876, 'SANTA LUCÍA', 1, 8),
(877, 'SANTA MARTA', 1, 47),
(878, 'SANTA MARÍA', 1, 15),
(879, 'SANTA MARÍA', 1, 41),
(880, 'SANTA ROSA', 1, 13),
(881, 'SANTA ROSA', 1, 19),
(882, 'SANTA ROSA DE CABAL', 1, 66),
(883, 'SANTA ROSA DE OSOS', 1, 5),
(884, 'SANTA ROSA DE VITERBO', 1, 15),
(885, 'SANTA ROSA DEL SUR', 1, 13),
(886, 'SANTA ROSALÍA', 1, 99),
(887, 'SANTA SOFÍA', 1, 15),
(888, 'SANTANA', 1, 15),
(889, 'SANTANDER DE QUILICHAO', 1, 19),
(890, 'SANTIAGO', 1, 54),
(891, 'SANTIAGO', 1, 86),
(892, 'SANTO DOMINGO', 1, 5),
(893, 'SANTO TOMÁS', 1, 8),
(894, 'SANTUARIO', 1, 5),
(895, 'SANTUARIO', 1, 66),
(896, 'SAPUYES', 1, 52),
(897, 'SARAVENA', 1, 81),
(898, 'SARDINATA', 1, 54),
(899, 'SASAIMA', 1, 25),
(900, 'SATIVANORTE', 1, 15),
(901, 'SATIVASUR', 1, 15),
(902, 'SEGOVIA', 1, 5),
(903, 'SESQUILÉ', 1, 25),
(904, 'SEVILLA', 1, 76),
(905, 'SIACHOQUE', 1, 15),
(906, 'SIBATÉ', 1, 25),
(907, 'SIBUNDOY', 1, 86),
(908, 'SILOS', 1, 54),
(909, 'SILVANIA', 1, 25),
(910, 'SILVIA', 1, 19),
(911, 'SIMACOTA', 1, 68),
(912, 'SIMIJACA', 1, 25),
(913, 'SIMITÍ', 1, 13),
(914, 'SINCELEJO', 1, 70),
(915, 'SINCÉ', 1, 70),
(916, 'SIPÍ', 1, 27),
(917, 'SITIONUEVO', 1, 47),
(918, 'SOACHA', 1, 25),
(919, 'SOATÁ', 1, 15),
(920, 'SOCHA', 1, 15),
(921, 'SOCORRO', 1, 68),
(922, 'SOCOTÁ', 1, 15),
(923, 'SOGAMOSO', 1, 15),
(924, 'SOLANO', 1, 18),
(925, 'SOLEDAD', 1, 8),
(926, 'SOLITA', 1, 18),
(927, 'SOMONDOCO', 1, 15),
(928, 'SONSÓN', 1, 5),
(929, 'SOPETRÁN', 1, 5),
(930, 'SOPLAVIENTO', 1, 13),
(931, 'SOPÓ', 1, 25),
(932, 'SORA', 1, 15),
(933, 'SORACÁ', 1, 15),
(934, 'SOTAQUIRÁ', 1, 15),
(935, 'SOTARA (PAISPAMBA)', 1, 19),
(936, 'SOTOMAYOR (LOS ANDES)', 1, 52),
(937, 'SUAITA', 1, 68),
(938, 'SUAN', 1, 8),
(939, 'SUAZA', 1, 41),
(940, 'SUBACHOQUE', 1, 25),
(941, 'SUCRE', 1, 19),
(942, 'SUCRE', 1, 68),
(943, 'SUCRE', 1, 70),
(944, 'SUESCA', 1, 25),
(945, 'SUPATÁ', 1, 25),
(946, 'SUPÍA', 1, 17),
(947, 'SURATÁ', 1, 68),
(948, 'SUSA', 1, 25),
(949, 'SUSACÓN', 1, 15),
(950, 'SUTAMARCHÁN', 1, 15),
(951, 'SUTATAUSA', 1, 25),
(952, 'SUTATENZA', 1, 15),
(953, 'SUÁREZ', 1, 19),
(954, 'SUÁREZ', 1, 73),
(955, 'SÁCAMA', 1, 85),
(956, 'SÁCHICA', 1, 15),
(957, 'TABIO', 1, 25),
(958, 'TADÓ', 1, 27),
(959, 'TALAIGUA NUEVO', 1, 13),
(960, 'TAMALAMEQUE', 1, 20),
(961, 'TAME', 1, 81),
(962, 'TAMINANGO', 1, 52),
(963, 'TANGUA', 1, 52),
(964, 'TARAIRA', 1, 97),
(965, 'TARAZÁ', 1, 5),
(966, 'TARQUI', 1, 41),
(967, 'TARSO', 1, 5),
(968, 'TASCO', 1, 15),
(969, 'TAURAMENA', 1, 85),
(970, 'TAUSA', 1, 25),
(971, 'TELLO', 1, 41),
(972, 'TENA', 1, 25),
(973, 'TENERIFE', 1, 47),
(974, 'TENJO', 1, 25),
(975, 'TENZA', 1, 15),
(976, 'TEORAMA', 1, 54),
(977, 'TERUEL', 1, 41),
(978, 'TESALIA', 1, 41),
(979, 'TIBACUY', 1, 25),
(980, 'TIBANÁ', 1, 15),
(981, 'TIBASOSA', 1, 15),
(982, 'TIBIRITA', 1, 25),
(983, 'TIBÚ', 1, 54),
(984, 'TIERRALTA', 1, 23),
(985, 'TIMANÁ', 1, 41),
(986, 'TIMBIQUÍ', 1, 19),
(987, 'TIMBÍO', 1, 19),
(988, 'TINJACÁ', 1, 15),
(989, 'TIPACOQUE', 1, 15),
(990, 'TIQUISIO (PUERTO RICO)', 1, 13),
(991, 'TITIRIBÍ', 1, 5),
(992, 'TOCA', 1, 15),
(993, 'TOCAIMA', 1, 25),
(994, 'TOCANCIPÁ', 1, 25),
(995, 'TOGUÍ', 1, 15),
(996, 'TOLEDO', 1, 5),
(997, 'TOLEDO', 1, 54),
(998, 'TOLÚ', 1, 70),
(999, 'TOLÚ VIEJO', 1, 70),
(1000, 'TONA', 1, 68),
(1001, 'TOPAGÁ', 1, 15),
(1002, 'TOPAIPÍ', 1, 25),
(1003, 'TORIBÍO', 1, 19),
(1004, 'TORO', 1, 76),
(1005, 'TOTA', 1, 15),
(1006, 'TOTORÓ', 1, 19),
(1007, 'TRINIDAD', 1, 85),
(1008, 'TRUJILLO', 1, 76),
(1009, 'TUBARÁ', 1, 8),
(1010, 'TUCHÍN', 1, 23),
(1011, 'TULÚA', 1, 76),
(1012, 'TUMACO', 1, 52),
(1013, 'TUNJA', 1, 15),
(1014, 'TUNUNGUA', 1, 15),
(1015, 'TURBACO', 1, 13),
(1016, 'TURBANÁ', 1, 13),
(1017, 'TURBO', 1, 5),
(1018, 'TURMEQUÉ', 1, 15),
(1019, 'TUTA', 1, 15),
(1020, 'TUTASÁ', 1, 15),
(1021, 'TÁMARA', 1, 85),
(1022, 'TÁMESIS', 1, 5),
(1023, 'TÚQUERRES', 1, 52),
(1024, 'UBALÁ', 1, 25),
(1025, 'UBAQUE', 1, 25),
(1026, 'UBATÉ', 1, 25),
(1027, 'ULLOA', 1, 76),
(1028, 'UNE', 1, 25),
(1029, 'UNGUÍA', 1, 27),
(1030, 'UNIÓN PANAMERICANA (ÁNIMAS)', 1, 27),
(1031, 'URAMITA', 1, 5),
(1032, 'URIBE', 1, 50),
(1033, 'URIBIA', 1, 44),
(1034, 'URRAO', 1, 5),
(1035, 'URUMITA', 1, 44),
(1036, 'USIACURI', 1, 8),
(1037, 'VALDIVIA', 1, 5),
(1038, 'VALENCIA', 1, 23),
(1039, 'VALLE DE SAN JOSÉ', 1, 68),
(1040, 'VALLE DE SAN JUAN', 1, 73),
(1041, 'VALLE DEL GUAMUEZ', 1, 86),
(1042, 'VALLEDUPAR', 1, 20),
(1043, 'VALPARAISO', 1, 5),
(1044, 'VALPARAISO', 1, 18),
(1045, 'VEGACHÍ', 1, 5),
(1046, 'VENADILLO', 1, 73),
(1047, 'VENECIA', 1, 5),
(1048, 'VENECIA (OSPINA PÉREZ)', 1, 25),
(1049, 'VENTAQUEMADA', 1, 15),
(1050, 'VERGARA', 1, 25),
(1051, 'VERSALLES', 1, 76),
(1052, 'VETAS', 1, 68),
(1053, 'VIANI', 1, 25),
(1054, 'VIGÍA DEL FUERTE', 1, 5),
(1055, 'VIJES', 1, 76),
(1056, 'VILLA CARO', 1, 54),
(1057, 'VILLA RICA', 1, 19),
(1058, 'VILLA DE LEIVA', 1, 15),
(1059, 'VILLA DEL ROSARIO', 1, 54),
(1060, 'VILLAGARZÓN', 1, 86),
(1061, 'VILLAGÓMEZ', 1, 25),
(1062, 'VILLAHERMOSA', 1, 73),
(1063, 'VILLAMARÍA', 1, 17),
(1064, 'VILLANUEVA', 1, 13),
(1065, 'VILLANUEVA', 1, 44),
(1066, 'VILLANUEVA', 1, 68),
(1067, 'VILLANUEVA', 1, 85),
(1068, 'VILLAPINZÓN', 1, 25),
(1069, 'VILLARRICA', 1, 73),
(1070, 'VILLAVICENCIO', 1, 50),
(1071, 'VILLAVIEJA', 1, 41),
(1072, 'VILLETA', 1, 25),
(1073, 'VIOTÁ', 1, 25),
(1074, 'VIRACACHÁ', 1, 15),
(1075, 'VISTA HERMOSA', 1, 50),
(1076, 'VITERBO', 1, 17),
(1077, 'VÉLEZ', 1, 68),
(1078, 'YACOPÍ', 1, 25),
(1079, 'YACUANQUER', 1, 52),
(1080, 'YAGUARÁ', 1, 41),
(1081, 'YALÍ', 1, 5),
(1082, 'YARUMAL', 1, 5),
(1083, 'YOLOMBÓ', 1, 5),
(1084, 'YONDÓ (CASABE)', 1, 5),
(1085, 'YOPAL', 1, 85),
(1086, 'YOTOCO', 1, 76),
(1087, 'YUMBO', 1, 76),
(1088, 'ZAMBRANO', 1, 13),
(1089, 'ZAPATOCA', 1, 68),
(1090, 'ZAPAYÁN (PUNTA DE PIEDRAS)', 1, 47),
(1091, 'ZARAGOZA', 1, 5),
(1092, 'ZARZAL', 1, 76),
(1093, 'ZETAQUIRÁ', 1, 15),
(1094, 'ZIPACÓN', 1, 25),
(1095, 'ZIPAQUIRÁ', 1, 25),
(1096, 'ZONA BANANERA (PRADO - SEVILLA)', 1, 47),
(1097, 'ÁBREGO', 1, 54),
(1098, 'ÍQUIRA', 1, 41),
(1099, 'ÚMBITA', 1, 15),
(1100, 'ÚTICA', 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_aportes`
--

CREATE TABLE `pago_aportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_creditos`
--

CREATE TABLE `pago_creditos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mes` varchar(2) DEFAULT NULL,
  `año` varchar(4) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Cerrado',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(2, 'ver-asociados', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(3, 'crear-asociados', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(4, 'editar-asociados', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(5, 'borrar-asociados', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(6, 'ver-recaudos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(7, 'crear-recaudos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(8, 'editar-recaudos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(9, 'borrar-recaudos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(10, 'ver-lineaaportes', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(11, 'crear-lineaaportes', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(12, 'editar-lineaaportes', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(13, 'borrar-lineaaportes', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(14, 'ver-estado', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(15, 'ver-lineacreditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(16, 'crear-lineacreditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(17, 'editar-lineacreditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(18, 'borrar-lineacreditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(19, 'ver-creditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(20, 'crear-creditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(21, 'editar-creditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(22, 'borrar-creditos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(23, 'ver-periodos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(24, 'crear-periodos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(25, 'editar-periodos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(26, 'borrar-periodos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(27, 'ver-egresos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(28, 'crear-egresos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(29, 'editar-egresos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(30, 'borrar-egresos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(31, 'ver-cierrediario', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(32, 'ver-cierreperiodo', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(33, 'ver-liquidarperiodo', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(34, 'borrar-abonos', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(35, 'ver-simulador', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(36, 'ver-liquidador', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(37, 'ver-configuracion', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(38, 'editar-configuracion', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(39, 'ver-cuadrediario', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(40, 'ver-roles', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(41, 'crear-roles', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(42, 'editar-roles', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(43, 'borrar-roles', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(44, 'ver-usuarios', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(45, 'crear-usuarios', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(46, 'editar-usuarios', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36'),
(47, 'borrar-usuarios', 'web', '2024-05-11 13:36:36', '2024-05-11 13:36:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recaudos`
--

CREATE TABLE `recaudos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_recaudo` date DEFAULT NULL,
  `asociado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `valor_recaudo` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE `referencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asociado_id` bigint(20) UNSIGNED NOT NULL,
  `referenciap_nombre1` varchar(50) DEFAULT NULL,
  `referenciap_relacion1` varchar(50) DEFAULT NULL,
  `referenciap_direccion1` varchar(100) DEFAULT NULL,
  `referenciap_ciudad1` varchar(50) DEFAULT NULL,
  `referenciap_telefono1` varchar(50) DEFAULT NULL,
  `referenciap_nombre2` varchar(50) DEFAULT NULL,
  `referenciap_relacion2` varchar(50) DEFAULT NULL,
  `referenciap_direccion2` varchar(100) DEFAULT NULL,
  `referenciap_ciudad2` varchar(50) DEFAULT NULL,
  `referenciap_telefono2` varchar(50) DEFAULT NULL,
  `referenciac_entidad1` varchar(50) DEFAULT NULL,
  `referenciac_tipo1` varchar(50) DEFAULT NULL,
  `referenciac_producto1` varchar(50) DEFAULT NULL,
  `referenciac_ciudad1` varchar(50) DEFAULT NULL,
  `referenciac_telefono1` varchar(50) DEFAULT NULL,
  `referenciac_entidad2` varchar(50) DEFAULT NULL,
  `referenciac_tipo2` varchar(50) DEFAULT NULL,
  `referenciac_producto2` varchar(50) DEFAULT NULL,
  `referenciac_ciudad2` varchar(50) DEFAULT NULL,
  `referenciac_telefono2` varchar(50) DEFAULT NULL,
  `beneficiario_nombre1` varchar(50) DEFAULT NULL,
  `beneficiario_documento1` varchar(20) DEFAULT NULL,
  `beneficiario_porcentaje1` varchar(3) DEFAULT NULL,
  `beneficiario_nacimiento1` date DEFAULT NULL,
  `beneficiario_parentesco1` varchar(20) DEFAULT NULL,
  `beneficiario_nombre2` varchar(50) DEFAULT NULL,
  `beneficiario_documento2` varchar(20) DEFAULT NULL,
  `beneficiario_porcentaje2` varchar(3) DEFAULT NULL,
  `beneficiario_nacimiento2` date DEFAULT NULL,
  `beneficiario_parentesco2` varchar(20) DEFAULT NULL,
  `beneficiario_nombre3` varchar(50) DEFAULT NULL,
  `beneficiario_documento3` varchar(20) DEFAULT NULL,
  `beneficiario_porcentaje3` varchar(3) DEFAULT NULL,
  `beneficiario_nacimiento3` date DEFAULT NULL,
  `beneficiario_parentesco3` varchar(20) DEFAULT NULL,
  `referido_por` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `referencias`
--

INSERT INTO `referencias` (`id`, `asociado_id`, `referenciap_nombre1`, `referenciap_relacion1`, `referenciap_direccion1`, `referenciap_ciudad1`, `referenciap_telefono1`, `referenciap_nombre2`, `referenciap_relacion2`, `referenciap_direccion2`, `referenciap_ciudad2`, `referenciap_telefono2`, `referenciac_entidad1`, `referenciac_tipo1`, `referenciac_producto1`, `referenciac_ciudad1`, `referenciac_telefono1`, `referenciac_entidad2`, `referenciac_tipo2`, `referenciac_producto2`, `referenciac_ciudad2`, `referenciac_telefono2`, `beneficiario_nombre1`, `beneficiario_documento1`, `beneficiario_porcentaje1`, `beneficiario_nacimiento1`, `beneficiario_parentesco1`, `beneficiario_nombre2`, `beneficiario_documento2`, `beneficiario_porcentaje2`, `beneficiario_nacimiento2`, `beneficiario_parentesco2`, `beneficiario_nombre3`, `beneficiario_documento3`, `beneficiario_porcentaje3`, `beneficiario_nacimiento3`, `beneficiario_parentesco3`, `referido_por`, `created_at`, `updated_at`) VALUES
(1, 1, 'Emily Ortega', 'Esposa', 'Anillo vial Oriental 20-20 Urbanización Arboretto Casa B31', 'Villa del Rosario', '3115283741', 'Jesus Sandoval', 'Amigo', 'Cl 21 A #0B-75, Barrio El Rosal', 'Cucuta', '3042479158', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Emily Ortega', '37397855', '30', '1984-05-17', 'Esposa', 'Valery Gomez', '1092945407', '40', '2009-09-25', 'Hija', 'Florilia Mendoza', '27680729', '30', '1954-03-08', 'Madre', NULL, '2024-05-09 19:39:28', '2024-05-09 19:39:28'),
(2, 2, 'MARILYN CAICEDO', 'HERMANA', 'CONJUNTO  CANARIO - LA CORDIALIDAD', 'LOS  PATIOS', '3174389630', 'MARIA S BOHORQUEZ CAICEDO', 'MADRE', 'CALLE 8# 2-53  BARRIO  VILLA ANTIGUA', 'VILLA DEL ROSARIO', '3233091287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MANUEL JULIAN CAICEDO', '1092359017', '100', '2013-10-23', 'HIJO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-11 14:03:13', '2024-05-11 14:39:52'),
(3, 3, 'GLORIA', 'AMIGO', 'PARQUES RESIDENCIALES  CASA D12', 'CUCUCTA', '3006116737', 'ALVARO GONZALEZ', 'AMIGO', 'PARQUES RESIDENCIALES  CASA D12', 'CUCUTA', '3153772578', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:36:42', '2024-05-14 12:36:42'),
(4, 4, 'MARLON  GRANADOS', 'HERNANDO', 'CALL 32 # 9-32', 'CUCUTA', '300667560', 'ANGIE CARDENAS', 'PRIMA', 'CALLE 30 # 0-50', 'CUCUTA', '3013624653', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MARLON  GRANADOS', NULL, '100', NULL, 'HERMANO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:45:35', '2024-05-14 12:58:16'),
(5, 5, 'GABRIELA VALERO', 'AMIGA', 'CALLE 21A # OB- 75 BRR BLANCO', 'CUCUTA', '3004115643', 'KAREN GARCIA', 'CUÑADA', 'CALLE 23 # 4- 065 SAN  MATEO', 'CUCUTA', '321831757', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NICOL V ROMERO CORDERO', '1091986035', '50', NULL, 'HIJA', 'ASHLEY VANESA ROMERO CORDERO', '1093604625', '50', NULL, 'HIJA', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 13:17:44', '2024-05-14 13:17:44'),
(6, 7, 'MARIA GRANADOS', 'MADRE', 'CALLE 15  # 0-13', 'CUCUTA', '3133870587', 'PAOLA JAIMES', 'AMIGA', 'AV 6 # 8N - 111 SAN MARTIN', 'CUCUTA', '3045732006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MARIA  BECERRA', '60344573', '50', NULL, 'MADRE', 'JAIME GRANADOS', '88196201', '50', NULL, 'PADRE', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:19:00', '2024-05-14 16:19:00'),
(7, 8, 'GUIDO DINDARTE', 'HERMANO', 'BOGOTA', 'BOGOTA', '3012333853', 'NOHORA CORREA', 'MADRE', 'CUCUTA', 'CUCUTA', '3012474866', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:40:38', '2024-05-14 16:40:38'),
(8, 9, 'JAVIER ROJAS', 'TIO', 'CALLE 11 # 19-32', 'BOGOTA', '3103214364', 'YESICA  ROPERO', 'AMIGA', 'CALLE 11 # 19-32', 'CUCUTA', '3229752572', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:57:11', '2024-05-14 19:54:26'),
(9, 13, 'LUZ  ALVAREZ', 'HERMANA', 'CALLE 26#21-40', 'SABANALARGA', '3162550171', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 20:14:48', '2024-05-14 20:14:48'),
(10, 14, 'YEFERSON  BARRERA', 'HERMANO', 'CALLE 7# 3-20  BRR  BOGOTA', 'CUCUTA', '3137739925', 'MARUJA  MONTES', 'MADRE', 'CALLE  7# 3-20 BARRIO  BOGOTA', 'CUCUTA', '3117682657', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 21:24:31', '2024-05-14 21:24:31'),
(11, 15, 'ANDREA VANEGAS', 'AMIGA', 'CLL 7N # 18E- 09 TORRE ASTURIAS', 'CUCUTA', '3002203052', 'EILIN MENESES', 'AMIGA', 'CLL 6  # 8-86 COND  VERA CRUZ', 'CUCUTA', '3214924579', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 21:49:02', '2024-05-14 21:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'web', '2024-05-11 13:36:35', '2024-05-11 13:36:35'),
(2, 'Tesorero', 'web', '2024-05-11 13:36:35', '2024-05-11 13:36:35'),
(3, 'Asociado', 'web', '2024-05-11 13:36:35', '2024-05-11 13:36:35'),
(4, 'Asesor Comercial', 'web', '2024-05-11 13:36:35', '2024-05-11 13:36:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Franklin Albeiro Gómez Mendoza', 'fralgom@gmail.com', '2024-05-11 13:36:38', '$2y$12$T8UONq9cuIkGuReZtW8tUevqt.czmizYBCBlT0ZeBbSoQWauzWE3u', '7KZrJMjXHmanInZ4tU7RhiRg11MJDqWXtZRydqJTdLDcT9fF5UdDFi1gRVad', '2024-05-11 13:36:38', '2024-05-11 13:36:38'),
(2, 'JHOAN MANUEL CAICEDO BOHORQUEZ', 'jhoanmanuelcaicedo@gmail.com', NULL, '$2y$12$rT9oC4sVVX4Sg95Er36/N.eAXH2I2zkltln11gvdqDM5hIr0pg47G', NULL, '2024-05-11 13:42:12', '2024-05-11 13:42:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abonos_asociado_id_foreign` (`asociado_id`),
  ADD KEY `abonos_credito_id_foreign` (`credito_id`);

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activos_asociado_id_foreign` (`asociado_id`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asociados_cedula_unique` (`cedula`),
  ADD UNIQUE KEY `asociados_email_unique` (`email`);

--
-- Indices de la tabla `asociado_aportes`
--
ALTER TABLE `asociado_aportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conocimientos`
--
ALTER TABLE `conocimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conocimientos_asociado_id_foreign` (`asociado_id`);

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creditos_asociado_id_foreign` (`asociado_id`),
  ADD KEY `creditos_lineacredito_id_foreign` (`lineacredito_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `economicas`
--
ALTER TABLE `economicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `economicas_asociado_id_foreign` (`asociado_id`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `lineaaportes`
--
ALTER TABLE `lineaaportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineacreditos`
--
ALTER TABLE `lineacreditos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `movimiento_abonos`
--
ALTER TABLE `movimiento_abonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimiento_creditos`
--
ALTER TABLE `movimiento_creditos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movimiento_creditos_credito_id_foreign` (`credito_id`);

--
-- Indices de la tabla `movimiento_pago_aportes`
--
ALTER TABLE `movimiento_pago_aportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimiento_pago_creditos`
--
ALTER TABLE `movimiento_pago_creditos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `pago_aportes`
--
ALTER TABLE `pago_aportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_creditos`
--
ALTER TABLE `pago_creditos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `recaudos`
--
ALTER TABLE `recaudos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recaudos_asociado_id_foreign` (`asociado_id`);

--
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referencias_asociado_id_foreign` (`asociado_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `asociado_aportes`
--
ALTER TABLE `asociado_aportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `conocimientos`
--
ALTER TABLE `conocimientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `economicas`
--
ALTER TABLE `economicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineaaportes`
--
ALTER TABLE `lineaaportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `lineacreditos`
--
ALTER TABLE `lineacreditos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `movimiento_abonos`
--
ALTER TABLE `movimiento_abonos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `movimiento_creditos`
--
ALTER TABLE `movimiento_creditos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `movimiento_pago_aportes`
--
ALTER TABLE `movimiento_pago_aportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `movimiento_pago_creditos`
--
ALTER TABLE `movimiento_pago_creditos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT de la tabla `pago_aportes`
--
ALTER TABLE `pago_aportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago_creditos`
--
ALTER TABLE `pago_creditos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recaudos`
--
ALTER TABLE `recaudos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `abonos_credito_id_foreign` FOREIGN KEY (`credito_id`) REFERENCES `creditos` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `activos`
--
ALTER TABLE `activos`
  ADD CONSTRAINT `activos_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`);

--
-- Filtros para la tabla `conocimientos`
--
ALTER TABLE `conocimientos`
  ADD CONSTRAINT `conocimientos_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`);

--
-- Filtros para la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD CONSTRAINT `creditos_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `creditos_lineacredito_id_foreign` FOREIGN KEY (`lineacredito_id`) REFERENCES `lineacreditos` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `economicas`
--
ALTER TABLE `economicas`
  ADD CONSTRAINT `economicas_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `movimiento_creditos`
--
ALTER TABLE `movimiento_creditos`
  ADD CONSTRAINT `movimiento_creditos_credito_id_foreign` FOREIGN KEY (`credito_id`) REFERENCES `creditos` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `recaudos`
--
ALTER TABLE `recaudos`
  ADD CONSTRAINT `recaudos_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `referencias`
--
ALTER TABLE `referencias`
  ADD CONSTRAINT `referencias_asociado_id_foreign` FOREIGN KEY (`asociado_id`) REFERENCES `asociados` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
