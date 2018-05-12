-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2018 a las 18:14:43
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iglesia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `nombre_completo` varchar(100) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `numero_documento` int(14) NOT NULL,
  `lugar_nacimiento` varchar(100) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`nombre_completo`, `id_tipo_documento`, `numero_documento`, `lugar_nacimiento`, `fecha_nacimiento`, `genero`, `direccion`, `telefono`, `foto`) VALUES
('prueba', 1, 4524545, '54', '2017-10-10', 'masculino', 'fdg', 0, '208c725b2a6f85b6fa853a190463f050.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosxgrupo`
--

CREATE TABLE `alumnosxgrupo` (
  `numero_documento` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familia`
--

CREATE TABLE `datos_familia` (
  `numero_documento` int(11) NOT NULL,
  `nombre_padre` varchar(100) NOT NULL,
  `telefono_padre` int(11) NOT NULL,
  `nombre_madre` varchar(100) NOT NULL,
  `telefono_madre` int(11) NOT NULL,
  `hijo_unico` int(1) NOT NULL,
  `numero_hermanos` int(11) NOT NULL,
  `lugar_entre_ellos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_familia`
--

INSERT INTO `datos_familia` (`numero_documento`, `nombre_padre`, `telefono_padre`, `nombre_madre`, `telefono_madre`, `hijo_unico`, `numero_hermanos`, `lugar_entre_ellos`) VALUES
(4524545, '1', 2, '3', 4, 1, 5, 6),
(4524545, '1', 2, '3', 4, 1, 5, 6),
(4524545, '1', 2, '3', 4, 1, 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios_datos`
--

CREATE TABLE `estudios_datos` (
  `numero_documento` int(11) NOT NULL,
  `nombre_institucion` varchar(100) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `grado` int(11) NOT NULL,
  `jornada` varchar(15) NOT NULL,
  `otros_estudios` tinyint(1) NOT NULL,
  `que_estudia` varchar(50) NOT NULL,
  `deporte_favorito` varchar(50) NOT NULL,
  `aficion_tiempo_libre` varchar(100) NOT NULL,
  `perfil_facebook` varchar(60) NOT NULL,
  `correo` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudios_datos`
--

INSERT INTO `estudios_datos` (`numero_documento`, `nombre_institucion`, `nivel`, `grado`, `jornada`, `otros_estudios`, `que_estudia`, `deporte_favorito`, `aficion_tiempo_libre`, `perfil_facebook`, `correo`) VALUES
(4524545, 'df', 'primaria', 0, 'maÃ±ana', 0, 'sfda', 'asdf', 'saf', 'asfd', 'sda@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `edad_min` int(11) NOT NULL,
  `edad_max` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iglesia_datos`
--

CREATE TABLE `iglesia_datos` (
  `numero_documento` int(11) NOT NULL,
  `madre_miembro_ipuc` tinyint(1) NOT NULL,
  `padre_miembre_ipuc` tinyint(1) NOT NULL,
  `confiar_hijo_voluntad` tinyint(1) NOT NULL,
  `asistir_convoque_hijo` tinyint(1) NOT NULL,
  `servio_agrada` varchar(40) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `fecha_inscripcion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'dsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud_datos`
--

CREATE TABLE `salud_datos` (
  `numero_documento` int(11) NOT NULL,
  `numero_carnet_vacunas` int(50) NOT NULL,
  `peso` float NOT NULL,
  `estatura` float NOT NULL,
  `tipo_sangre` varchar(4) NOT NULL,
  `alergia_medicamento` varchar(100) NOT NULL,
  `alimentos_no_comer` varchar(100) NOT NULL,
  `condicion_especial` tinyint(1) NOT NULL,
  `condicion_cual` varchar(50) NOT NULL,
  `cuidados_sugeridos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salud_datos`
--

INSERT INTO `salud_datos` (`numero_documento`, `numero_carnet_vacunas`, `peso`, `estatura`, `tipo_sangre`, `alergia_medicamento`, `alimentos_no_comer`, `condicion_especial`, `condicion_cual`, `cuidados_sugeridos`) VALUES
(4524545, 0, 54, 452, 'Op', '42', '4', 0, '452454', '4'),
(4524545, 375456564, 54, 452, 'Op', '42', '4', 0, '452454', '4'),
(4524545, 54, 452, 65, 'Op', '375456564', '42', 0, '4', '452454'),
(4524545, 546, 456, 456, 'Op', '456', '546', 1, '456', '456'),
(4524545, 546, 456, 456, 'Op', '456', '546', 1, '456', '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `nombre`) VALUES
(1, 'cc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_grupos`
--

CREATE TABLE `tipo_grupos` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre_completo` varchar(60) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `numero_documento` int(14) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `telefono` int(14) NOT NULL,
  `celular` int(14) NOT NULL,
  `correo` varchar(110) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `contra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre_completo`, `id_tipo_documento`, `numero_documento`, `fecha_nacimiento`, `direccion`, `barrio`, `telefono`, `celular`, `correo`, `id_rol`, `contra`) VALUES
('Ramiro', 1, 111, 'sd', 'sad', 'asd', 213, 12321, '213', 1, '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `id_tipo_documento` (`id_tipo_documento`);

--
-- Indices de la tabla `alumnosxgrupo`
--
ALTER TABLE `alumnosxgrupo`
  ADD UNIQUE KEY `numero_documento_2` (`numero_documento`),
  ADD KEY `numero_documento` (`numero_documento`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `datos_familia`
--
ALTER TABLE `datos_familia`
  ADD KEY `numero_documento` (`numero_documento`);

--
-- Indices de la tabla `estudios_datos`
--
ALTER TABLE `estudios_datos`
  ADD KEY `numero_documento` (`numero_documento`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `iglesia_datos`
--
ALTER TABLE `iglesia_datos`
  ADD KEY `numero_documento` (`numero_documento`),
  ADD KEY `numero_documento_2` (`numero_documento`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `salud_datos`
--
ALTER TABLE `salud_datos`
  ADD KEY `numero_documento` (`numero_documento`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_grupos`
--
ALTER TABLE `tipo_grupos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `id_tipo_documento` (`id_tipo_documento`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_grupos`
--
ALTER TABLE `tipo_grupos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumnosxgrupo`
--
ALTER TABLE `alumnosxgrupo`
  ADD CONSTRAINT `alumnosxgrupo_ibfk_1` FOREIGN KEY (`numero_documento`) REFERENCES `alumnos` (`numero_documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnosxgrupo_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_familia`
--
ALTER TABLE `datos_familia`
  ADD CONSTRAINT `datos_familia_ibfk_1` FOREIGN KEY (`numero_documento`) REFERENCES `alumnos` (`numero_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudios_datos`
--
ALTER TABLE `estudios_datos`
  ADD CONSTRAINT `estudios_datos_ibfk_1` FOREIGN KEY (`numero_documento`) REFERENCES `alumnos` (`numero_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_grupos` (`id_tipo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `iglesia_datos`
--
ALTER TABLE `iglesia_datos`
  ADD CONSTRAINT `iglesia_datos_ibfk_1` FOREIGN KEY (`numero_documento`) REFERENCES `alumnos` (`numero_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `salud_datos`
--
ALTER TABLE `salud_datos`
  ADD CONSTRAINT `salud_datos_ibfk_1` FOREIGN KEY (`numero_documento`) REFERENCES `alumnos` (`numero_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
