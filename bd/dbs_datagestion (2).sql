-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2018 a las 15:26:58
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs_datagestion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `pk_cli_id` int(11) NOT NULL,
  `cli_nombre` varchar(100) DEFAULT NULL,
  `fk_cli_estadohabil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_correosclientes`
--

CREATE TABLE `tbl_correosclientes` (
  `pk_coc_cliente` int(11) NOT NULL,
  `coc_correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_enviosnotificaciones`
--

CREATE TABLE `tbl_enviosnotificaciones` (
  `pk_enn_id` int(11) NOT NULL,
  `fk_enn_notificacion` int(11) NOT NULL,
  `fk_enn_grupo` int(11) NOT NULL,
  `fk_enn_cliente` int(11) NOT NULL,
  `enn_intento` char(1) NOT NULL,
  `fk_enn_estadoenvio` int(11) NOT NULL,
  `enn_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estadoenvios`
--

CREATE TABLE `tbl_estadoenvios` (
  `pk_ese_id` int(11) NOT NULL,
  `ese_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estadohabilitados`
--

CREATE TABLE `tbl_estadohabilitados` (
  `pk_esh_id` int(11) NOT NULL,
  `esh_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupos`
--

CREATE TABLE `tbl_grupos` (
  `pk_gru_id` int(11) NOT NULL,
  `gru_nombre` varchar(100) NOT NULL,
  `gru_descripcion` varchar(300) DEFAULT NULL,
  `fk_gru_usuario` int(11) NOT NULL,
  `fk_gru_estadohabil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gruposclientes`
--

CREATE TABLE `tbl_gruposclientes` (
  `fk_grc_cliente` int(11) NOT NULL,
  `fk_grc_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gruposnotificaciones`
--

CREATE TABLE `tbl_gruposnotificaciones` (
  `fk_grn_notificacion` int(11) NOT NULL,
  `fk_grn_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_medios`
--

CREATE TABLE `tbl_medios` (
  `pk_med_id` int(11) NOT NULL,
  `med_nombre` varchar(100) NOT NULL,
  `fk_med_estadohabil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notificaciones`
--

CREATE TABLE `tbl_notificaciones` (
  `pk_not_id` int(11) NOT NULL,
  `fk_not_medio` int(11) NOT NULL,
  `not_fecha` date NOT NULL,
  `not_asunto` varchar(40) DEFAULT NULL,
  `not_mensaje` varchar(1000) NOT NULL,
  `fk_not_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_numerosclientes`
--

CREATE TABLE `tbl_numerosclientes` (
  `pk_nuc_cliente` int(11) NOT NULL,
  `nuc_numero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paquetes`
--

CREATE TABLE `tbl_paquetes` (
  `pk_paq_id` int(11) NOT NULL,
  `paq_valor` int(11) NOT NULL,
  `paq_descripcion` varchar(500) DEFAULT NULL,
  `paq_sms` int(11) NOT NULL,
  `paq_correos` int(11) NOT NULL,
  `paq_llamadas` int(11) NOT NULL,
  `fk_paq_estadohabil` int(11) NOT NULL,
  `fk_paq_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paquetesusuarios`
--

CREATE TABLE `tbl_paquetesusuarios` (
  `pk_pau_idcompra` int(11) NOT NULL,
  `fk_pau_usuario` int(11) NOT NULL,
  `fk_pau_paquete` int(11) NOT NULL,
  `pau_smsenviado` int(11) NOT NULL,
  `pau_llamadaenviado` int(11) NOT NULL,
  `pau_correoenviado` int(11) NOT NULL,
  `pau_fechacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pruebas`
--

CREATE TABLE `tbl_pruebas` (
  `pk_pru_id` int(11) NOT NULL,
  `fk_pru_notificacion` int(11) NOT NULL,
  `pru_asunto` varchar(40) DEFAULT NULL,
  `pru_mensaje` varchar(1000) NOT NULL,
  `fk_pru_medio` int(11) NOT NULL,
  `pru_fecha` date NOT NULL,
  `pru_destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reportes`
--

CREATE TABLE `tbl_reportes` (
  `pk_rep_id` int(11) NOT NULL,
  `fk_rep_notificacion` int(11) NOT NULL,
  `rep_intento` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `pk_rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`pk_rol_id`, `rol_nombre`) VALUES
(1, 'Superadministrador'),
(2, 'Administrador'),
(3, 'Empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tarjetas`
--

CREATE TABLE `tbl_tarjetas` (
  `pk_tar_id` int(11) NOT NULL,
  `fk_tar_usuario` int(11) NOT NULL,
  `a1` char(2) NOT NULL,
  `a2` char(2) NOT NULL,
  `a3` char(2) NOT NULL,
  `a4` char(2) NOT NULL,
  `a5` char(2) NOT NULL,
  `a6` char(2) NOT NULL,
  `a7` char(2) NOT NULL,
  `b1` char(2) NOT NULL,
  `b2` char(2) NOT NULL,
  `b3` char(2) NOT NULL,
  `b4` char(2) NOT NULL,
  `b5` char(2) NOT NULL,
  `b6` char(2) NOT NULL,
  `b7` char(2) NOT NULL,
  `c1` char(2) NOT NULL,
  `c2` char(2) NOT NULL,
  `c3` char(2) NOT NULL,
  `c4` char(2) NOT NULL,
  `c5` char(2) NOT NULL,
  `c6` char(2) NOT NULL,
  `c7` char(2) NOT NULL,
  `d1` char(2) NOT NULL,
  `d2` char(2) NOT NULL,
  `d3` char(2) NOT NULL,
  `d4` char(2) NOT NULL,
  `d5` char(2) NOT NULL,
  `d6` char(2) NOT NULL,
  `d7` char(2) NOT NULL,
  `e1` char(2) NOT NULL,
  `e2` char(2) NOT NULL,
  `e3` char(2) NOT NULL,
  `e4` char(2) NOT NULL,
  `e5` char(2) NOT NULL,
  `e6` char(2) NOT NULL,
  `e7` char(2) NOT NULL,
  `f1` char(2) NOT NULL,
  `f2` char(2) NOT NULL,
  `f3` char(2) NOT NULL,
  `f4` char(2) NOT NULL,
  `f5` char(2) NOT NULL,
  `f6` char(2) NOT NULL,
  `f7` char(2) NOT NULL,
  `g1` char(2) NOT NULL,
  `g2` char(2) NOT NULL,
  `g3` char(2) NOT NULL,
  `g4` char(2) NOT NULL,
  `g5` char(2) NOT NULL,
  `g6` char(2) NOT NULL,
  `g7` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `pk_usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(100) NOT NULL,
  `usu_correo` varchar(100) NOT NULL,
  `usu_contrasenia` varchar(100) NOT NULL,
  `usu_salt` varchar(10) NOT NULL,
  `usu_direccion` varchar(150) DEFAULT NULL,
  `usu_celular` varchar(30) DEFAULT NULL,
  `fk_usu_estadohabil` int(11) NOT NULL,
  `fk_usu_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`pk_cli_id`),
  ADD KEY `fk_cli_estadohabil` (`fk_cli_estadohabil`);

--
-- Indices de la tabla `tbl_correosclientes`
--
ALTER TABLE `tbl_correosclientes`
  ADD PRIMARY KEY (`pk_coc_cliente`,`coc_correo`);

--
-- Indices de la tabla `tbl_enviosnotificaciones`
--
ALTER TABLE `tbl_enviosnotificaciones`
  ADD PRIMARY KEY (`pk_enn_id`),
  ADD KEY `fk_enn_notificacion` (`fk_enn_notificacion`),
  ADD KEY `fk_enn_grupo` (`fk_enn_grupo`),
  ADD KEY `fk_enn_cliente` (`fk_enn_cliente`),
  ADD KEY `fk_enn_estadoenvio` (`fk_enn_estadoenvio`);

--
-- Indices de la tabla `tbl_estadoenvios`
--
ALTER TABLE `tbl_estadoenvios`
  ADD PRIMARY KEY (`pk_ese_id`);

--
-- Indices de la tabla `tbl_estadohabilitados`
--
ALTER TABLE `tbl_estadohabilitados`
  ADD PRIMARY KEY (`pk_esh_id`);

--
-- Indices de la tabla `tbl_grupos`
--
ALTER TABLE `tbl_grupos`
  ADD PRIMARY KEY (`pk_gru_id`),
  ADD KEY `fk_gru_usuario` (`fk_gru_usuario`),
  ADD KEY `fk_gru_estadohabil` (`fk_gru_estadohabil`);

--
-- Indices de la tabla `tbl_gruposclientes`
--
ALTER TABLE `tbl_gruposclientes`
  ADD KEY `fk_grc_cliente` (`fk_grc_cliente`),
  ADD KEY `fk_grc_grupo` (`fk_grc_grupo`);

--
-- Indices de la tabla `tbl_gruposnotificaciones`
--
ALTER TABLE `tbl_gruposnotificaciones`
  ADD KEY `fk_grn_notificacion` (`fk_grn_notificacion`),
  ADD KEY `fk_grn_grupo` (`fk_grn_grupo`);

--
-- Indices de la tabla `tbl_medios`
--
ALTER TABLE `tbl_medios`
  ADD PRIMARY KEY (`pk_med_id`),
  ADD KEY `fk_med_estadohabil` (`fk_med_estadohabil`);

--
-- Indices de la tabla `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  ADD PRIMARY KEY (`pk_not_id`),
  ADD KEY `fk_not_medio` (`fk_not_medio`),
  ADD KEY `fk_not_usuario` (`fk_not_usuario`);

--
-- Indices de la tabla `tbl_numerosclientes`
--
ALTER TABLE `tbl_numerosclientes`
  ADD PRIMARY KEY (`pk_nuc_cliente`,`nuc_numero`);

--
-- Indices de la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  ADD PRIMARY KEY (`pk_paq_id`),
  ADD KEY `fk_paq_estadohabil` (`fk_paq_estadohabil`),
  ADD KEY `fk_paq_usuario` (`fk_paq_usuario`);

--
-- Indices de la tabla `tbl_paquetesusuarios`
--
ALTER TABLE `tbl_paquetesusuarios`
  ADD PRIMARY KEY (`pk_pau_idcompra`),
  ADD KEY `fk_pau_usuario` (`fk_pau_usuario`),
  ADD KEY `fk_pau_paquete` (`fk_pau_paquete`);

--
-- Indices de la tabla `tbl_pruebas`
--
ALTER TABLE `tbl_pruebas`
  ADD PRIMARY KEY (`pk_pru_id`),
  ADD KEY `fk_pru_notificacion` (`fk_pru_notificacion`),
  ADD KEY `fk_pru_medio` (`fk_pru_medio`);

--
-- Indices de la tabla `tbl_reportes`
--
ALTER TABLE `tbl_reportes`
  ADD PRIMARY KEY (`pk_rep_id`),
  ADD KEY `fk_rep_notificacion` (`fk_rep_notificacion`);

--
-- Indices de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`pk_rol_id`);

--
-- Indices de la tabla `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  ADD PRIMARY KEY (`pk_tar_id`),
  ADD KEY `fk_tar_usuario` (`fk_tar_usuario`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`pk_usu_id`),
  ADD KEY `fk_usu_estadohabil` (`fk_usu_estadohabil`),
  ADD KEY `fk_usu_rol` (`fk_usu_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `pk_cli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_enviosnotificaciones`
--
ALTER TABLE `tbl_enviosnotificaciones`
  MODIFY `pk_enn_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_estadoenvios`
--
ALTER TABLE `tbl_estadoenvios`
  MODIFY `pk_ese_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_estadohabilitados`
--
ALTER TABLE `tbl_estadohabilitados`
  MODIFY `pk_esh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_grupos`
--
ALTER TABLE `tbl_grupos`
  MODIFY `pk_gru_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_medios`
--
ALTER TABLE `tbl_medios`
  MODIFY `pk_med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  MODIFY `pk_not_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  MODIFY `pk_paq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_paquetesusuarios`
--
ALTER TABLE `tbl_paquetesusuarios`
  MODIFY `pk_pau_idcompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_pruebas`
--
ALTER TABLE `tbl_pruebas`
  MODIFY `pk_pru_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_reportes`
--
ALTER TABLE `tbl_reportes`
  MODIFY `pk_rep_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `pk_rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  MODIFY `pk_tar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `pk_usu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD CONSTRAINT `tbl_clientes_ibfk_1` FOREIGN KEY (`fk_cli_estadohabil`) REFERENCES `tbl_estadohabilitados` (`pk_esh_id`);

--
-- Filtros para la tabla `tbl_correosclientes`
--
ALTER TABLE `tbl_correosclientes`
  ADD CONSTRAINT `tbl_correosclientes_ibfk_1` FOREIGN KEY (`pk_coc_cliente`) REFERENCES `tbl_clientes` (`pk_cli_id`);

--
-- Filtros para la tabla `tbl_enviosnotificaciones`
--
ALTER TABLE `tbl_enviosnotificaciones`
  ADD CONSTRAINT `tbl_enviosnotificaciones_ibfk_1` FOREIGN KEY (`fk_enn_notificacion`) REFERENCES `tbl_gruposnotificaciones` (`fk_grn_notificacion`),
  ADD CONSTRAINT `tbl_enviosnotificaciones_ibfk_2` FOREIGN KEY (`fk_enn_grupo`) REFERENCES `tbl_gruposnotificaciones` (`fk_grn_grupo`),
  ADD CONSTRAINT `tbl_enviosnotificaciones_ibfk_3` FOREIGN KEY (`fk_enn_cliente`) REFERENCES `tbl_clientes` (`pk_cli_id`),
  ADD CONSTRAINT `tbl_enviosnotificaciones_ibfk_4` FOREIGN KEY (`fk_enn_estadoenvio`) REFERENCES `tbl_estadoenvios` (`pk_ese_id`);

--
-- Filtros para la tabla `tbl_grupos`
--
ALTER TABLE `tbl_grupos`
  ADD CONSTRAINT `tbl_grupos_ibfk_1` FOREIGN KEY (`fk_gru_usuario`) REFERENCES `tbl_usuarios` (`pk_usu_id`),
  ADD CONSTRAINT `tbl_grupos_ibfk_2` FOREIGN KEY (`fk_gru_estadohabil`) REFERENCES `tbl_estadohabilitados` (`pk_esh_id`);

--
-- Filtros para la tabla `tbl_gruposclientes`
--
ALTER TABLE `tbl_gruposclientes`
  ADD CONSTRAINT `tbl_gruposclientes_ibfk_1` FOREIGN KEY (`fk_grc_cliente`) REFERENCES `tbl_clientes` (`pk_cli_id`),
  ADD CONSTRAINT `tbl_gruposclientes_ibfk_2` FOREIGN KEY (`fk_grc_grupo`) REFERENCES `tbl_grupos` (`pk_gru_id`);

--
-- Filtros para la tabla `tbl_gruposnotificaciones`
--
ALTER TABLE `tbl_gruposnotificaciones`
  ADD CONSTRAINT `tbl_gruposnotificaciones_ibfk_1` FOREIGN KEY (`fk_grn_notificacion`) REFERENCES `tbl_notificaciones` (`pk_not_id`),
  ADD CONSTRAINT `tbl_gruposnotificaciones_ibfk_2` FOREIGN KEY (`fk_grn_grupo`) REFERENCES `tbl_grupos` (`pk_gru_id`);

--
-- Filtros para la tabla `tbl_medios`
--
ALTER TABLE `tbl_medios`
  ADD CONSTRAINT `tbl_medios_ibfk_1` FOREIGN KEY (`fk_med_estadohabil`) REFERENCES `tbl_estadohabilitados` (`pk_esh_id`);

--
-- Filtros para la tabla `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  ADD CONSTRAINT `tbl_notificaciones_ibfk_1` FOREIGN KEY (`fk_not_medio`) REFERENCES `tbl_medios` (`pk_med_id`),
  ADD CONSTRAINT `tbl_notificaciones_ibfk_2` FOREIGN KEY (`fk_not_usuario`) REFERENCES `tbl_usuarios` (`pk_usu_id`);

--
-- Filtros para la tabla `tbl_numerosclientes`
--
ALTER TABLE `tbl_numerosclientes`
  ADD CONSTRAINT `tbl_numerosclientes_ibfk_1` FOREIGN KEY (`pk_nuc_cliente`) REFERENCES `tbl_clientes` (`pk_cli_id`);

--
-- Filtros para la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  ADD CONSTRAINT `tbl_paquetes_ibfk_1` FOREIGN KEY (`fk_paq_estadohabil`) REFERENCES `tbl_estadohabilitados` (`pk_esh_id`),
  ADD CONSTRAINT `tbl_paquetes_ibfk_2` FOREIGN KEY (`fk_paq_usuario`) REFERENCES `tbl_usuarios` (`pk_usu_id`);

--
-- Filtros para la tabla `tbl_paquetesusuarios`
--
ALTER TABLE `tbl_paquetesusuarios`
  ADD CONSTRAINT `tbl_paquetesusuarios_ibfk_1` FOREIGN KEY (`fk_pau_usuario`) REFERENCES `tbl_usuarios` (`pk_usu_id`),
  ADD CONSTRAINT `tbl_paquetesusuarios_ibfk_2` FOREIGN KEY (`fk_pau_paquete`) REFERENCES `tbl_paquetes` (`pk_paq_id`);

--
-- Filtros para la tabla `tbl_pruebas`
--
ALTER TABLE `tbl_pruebas`
  ADD CONSTRAINT `tbl_pruebas_ibfk_1` FOREIGN KEY (`fk_pru_notificacion`) REFERENCES `tbl_notificaciones` (`pk_not_id`),
  ADD CONSTRAINT `tbl_pruebas_ibfk_2` FOREIGN KEY (`fk_pru_medio`) REFERENCES `tbl_medios` (`pk_med_id`);

--
-- Filtros para la tabla `tbl_reportes`
--
ALTER TABLE `tbl_reportes`
  ADD CONSTRAINT `tbl_reportes_ibfk_1` FOREIGN KEY (`fk_rep_notificacion`) REFERENCES `tbl_notificaciones` (`pk_not_id`);

--
-- Filtros para la tabla `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  ADD CONSTRAINT `tbl_tarjetas_ibfk_1` FOREIGN KEY (`fk_tar_usuario`) REFERENCES `tbl_usuarios` (`pk_usu_id`);

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`fk_usu_estadohabil`) REFERENCES `tbl_estadohabilitados` (`pk_esh_id`),
  ADD CONSTRAINT `tbl_usuarios_ibfk_2` FOREIGN KEY (`fk_usu_rol`) REFERENCES `tbl_roles` (`pk_rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
