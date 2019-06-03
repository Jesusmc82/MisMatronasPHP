-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: eu-cdbr-west-02.cleardb.net
-- Tiempo de generación: 03-06-2019 a las 06:50:59
-- Versión del servidor: 5.6.43-log
-- Versión de PHP: 7.0.33-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `heroku_54bd8ecf8967fd9`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarazo`
--

CREATE TABLE `embarazo` (
  `idEmbarazo` int(10) NOT NULL,
  `idUser` int(10) DEFAULT NULL,
  `nhc` int(10) DEFAULT NULL,
  `informacion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `embarazo`
--

INSERT INTO `embarazo` (`idEmbarazo`, `idUser`, `nhc`, `informacion`) VALUES
(1, 3, NULL, 'Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores. Dale a Fistrum para que e salga ese pedaso de texto Chiquito en estado puro. Si te crees muy mo'),
(2, 3, NULL, 'Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores. Dale a Fistrum para que e salga ese pedaso de texto Chiquito en estado puro. Si te crees muy mo'),
(11, 24, 2, 'hadoifghaoihfgaiuhfgalhfiluefhasiluerf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarazo_empleado`
--

CREATE TABLE `embarazo_empleado` (
  `idEmbarazo` int(10) NOT NULL,
  `idEmpleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `embarazo_empleado`
--

INSERT INTO `embarazo_empleado` (`idEmbarazo`, `idEmpleado`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

CREATE TABLE `historial_clinico` (
  `nhc` int(10) NOT NULL,
  `evolucion` varchar(500) DEFAULT NULL,
  `idUser` int(10) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_clinico`
--

INSERT INTO `historial_clinico` (`nhc`, `evolucion`, `idUser`, `observaciones`) VALUES
(1, 'Lorem fistrum a wan tiene musho peligro diodeno fistro a wan de la pradera tiene musho peligro. Llevame al sircoo fistro me cago en tus muelas de la pradera. Fistro a gramenawer sexuarl no te digo trigo por no llamarte Rodrigor qué dise usteer amatomaa quietooor. No puedor a peich papaar papaar a wan te va a hasé pupitaa ese hombree fistro la caidita amatomaa apetecan a gramenawer. Sexuarl a gramenawer te voy a borrar el cerito va usté muy cargadoo se calle ustée a peich a wan diodeno condemor m', 3, 'Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores. Dale a Fistrum para que e salga ese pedaso de texto Chiquito en estado puro. Si te crees muy mo'),
(2, 'Very Good Fandango', 30, 'sigo observando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleado`
--

CREATE TABLE `tipo_empleado` (
  `idEmpleado` int(10) NOT NULL,
  `especialidad` varchar(30) DEFAULT NULL,
  `idUser` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_empleado`
--

INSERT INTO `tipo_empleado` (`idEmpleado`, `especialidad`, `idUser`) VALUES
(1, 'Fisioterapeuta', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(10) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `tipoUser` int(1) DEFAULT NULL,
  `nombre` tinytext,
  `apellidos` tinytext,
  `nacimiento` date NOT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES
(1, '11111111A', 1, 'Jesus', 'Martin Castro', '1986-08-23', 'Casa de Campo', 655244985, 'jesmartin82@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, '07788590P', 3, 'Tercio', 'Rodarte Bahena', '1993-10-18', 'Prolongacion San Sebastian 95', 730869778, 'TercioRodarteBahena@teleworm.u', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, '93026232H', 4, 'Deolinda', 'Garza Pulido', '1983-11-04', 'Extramuros 33', 690508190, 'DeolindaGarzaPulido@jourrapide', NULL),
(4, '59366764S', 3, 'Mireya', 'Enríquez Lozada', '1980-11-27', 'C/ Benito Guinea 10', 660776465, 'MireyaEnriquezLozada@jourrapid', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, '79682408N', 3, 'Sandra', 'Gonzalez Lopez', '1972-04-20', 'Avda. Whasington 35', 748596325, 'SandraGonzalezLopez@jourrapide', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, '01654522V', 2, 'Gay', 'Villalpando Guillén', '1981-06-12', 'C/ Rosa de los Vientos 28', 689372671, 'GayVillalpandoGuillen@teleworm', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, '74757994J', 3, 'Breogan', 'Alcalá Zayas', '1986-06-18', 'C/ Domingo Beltrán 95', 699707986, 'BreoganAlcalaZayas@jourrapide.', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, '26174425B', 2, 'Lauren', 'Zúñiga Gonzales', '1982-04-16', 'Calvo Sotelo 5', 739864317, 'LaurenZunigaGonzales@rhyta.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, '82341486Z', 3, 'Ladolfo', ' Narváez Holguín', '1994-07-20', 'Urzáiz 44', 799515281, 'LadolfoNarvaezHolguin@teleworm', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, '30859930W', 2, 'Shulinen', 'Lomeli Ponce', '1976-06-26', 'Bellavista, 38', 606242097, 'ShulinenLomeliPonce@teleworm.u', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, '74668909F', 3, 'Areb', 'León Rojo', '1989-01-21', 'Ctra. de Siles, 17', 637241708, 'ArebLeonRojo@rhyta.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, '56609253C', 3, 'Amintor', 'Marrero Leiva', '1993-05-19', 'Avda. Explanada Barnuevo, 66', 630489988, 'AmintorMarreroLeiva@armyspy.co', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, '19817031R', 3, 'Valeriano', 'Polanco Casárez', '1990-03-23', 'Fuente del Gallo, 54', 653563954, 'ValerianoPolancoCasarez@armysp', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, '41917500T', 4, 'Giacometta', 'Armendáriz Lozada', '1993-05-14', 'Ctra. Bailén-Motril 87', 624742725, 'GiacomettaArmendarizLozada@jou', NULL),
(15, '72913883L', 3, 'Yoel', 'Velázquez Ornelas', '1990-04-02', 'Plaza Colón, 44', 772666062, 'YoelVelazquezOrnelas@armyspy.c', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, '71192269R', 4, 'Lisette ', 'Heredia Muñiz', '1979-03-19', 'Outid de Arriba, 18', 664069671, 'LisetteHerediaMuniz@armyspy.co', NULL),
(17, '76885757T', 2, 'Alem', 'Bustamante Aragón', '1989-10-22', 'Outid de Arriba, 67', 661740436, 'AlemBustamanteAragon@armyspy.c', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, '30361893F', 3, 'Anfos', 'Reséndez Cantú', '1983-08-06', 'Caño, 31', 624512284, 'AnfosResendezCantu@jourrapide.', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, '91221766V', 3, 'Dunstano', 'Noriega Lucero', '2000-04-28', 'Estrela, 83', 773164367, 'DunstanoNoriegaLucero@armyspy.', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, '85825747M', 2, 'Yulan', 'Flórez Anguiano', '1979-05-25', 'Maestro Puig Valera, 33', 603440255, 'YulanFlorezAnguiano@armyspy.co', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, '22222222B', NULL, 'Patricia', 'Lopez Lopez', '0000-00-00', NULL, NULL, NULL, NULL),
(23, '33333333C', NULL, 'Cecilia ', 'Prieto Prieto', '0000-00-00', NULL, NULL, NULL, NULL),
(24, '44444444D', NULL, 'Marilo', 'Jimenez Blanco', '0000-00-00', NULL, NULL, NULL, NULL),
(25, '75896586A', NULL, 'Usuaria', 'Prueba PHP2', '0000-00-00', NULL, NULL, NULL, NULL),
(26, '15236398A', NULL, 'Rocio', 'Plaza Merida', '0000-00-00', NULL, NULL, NULL, NULL),
(27, '74859698V', NULL, 'Pepa', 'Martin Martin', '1995-12-13', NULL, NULL, NULL, NULL),
(29, '74859698V', NULL, 'Pepa', 'Martin Ruiz', '1989-11-18', NULL, NULL, NULL, NULL),
(30, '00000000O', NULL, 'papa', 'mama2', '2000-07-14', NULL, NULL, NULL, NULL),
(31, '01928374R', 3, 'Rodrigo', 'Faena Faena', '1988-11-03', 'Avenida la flauta 30', 908765432, 'lapera@deflauta.org', '81dc9bdb52d04dc20036dbd8313ed055'),
(41, '33445267U', 2, 'Felisa', 'Pico Pala', '1979-05-23', 'Plaza puerto perico 13', 956176456, 'puertoperico@papafrita.me', '81dc9bdb52d04dc20036dbd8313ed055'),
(51, '01928374t', 3, 'Maikel', 'Roger Coloso', '1981-06-07', 'Avenida Valle Niza 14', 984510634, 'valleniza@roguer.cl', '81dc9bdb52d04dc20036dbd8313ed055'),
(61, '00000000Ñ', 4, 'elvira', 'Villegas Ruiperez', '1956-05-09', 'orquidea', 456789012, 'elvira@elvira.vr', NULL),
(71, '12321232Q', 4, 'Rocio', 'Marfil Rizo', '1986-12-09', 'Arquimedes 23', 981234561, 'arquimedes@veintitres.mr', NULL),
(81, '33401000P', 4, 'Martina', 'Martin Martinez', '1996-08-15', 'Las Roquetas del Mar', 918273691, 'paraparapapa@papa.pa', NULL),
(91, '33401000P', 4, 'Miriam', 'Martin Martinez', '1996-08-15', 'Las Roquetas del Mar', 918273691, 'paraparapapa@papa.pa', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `embarazo`
--
ALTER TABLE `embarazo`
  ADD PRIMARY KEY (`idEmbarazo`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `nhc` (`nhc`);

--
-- Indices de la tabla `embarazo_empleado`
--
ALTER TABLE `embarazo_empleado`
  ADD PRIMARY KEY (`idEmbarazo`,`idEmpleado`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD PRIMARY KEY (`nhc`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `embarazo`
--
ALTER TABLE `embarazo`
  MODIFY `idEmbarazo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  MODIFY `nhc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  MODIFY `idEmpleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `embarazo`
--
ALTER TABLE `embarazo`
  ADD CONSTRAINT `embarazo_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `usuarios` (`idUser`),
  ADD CONSTRAINT `embarazo_ibfk_2` FOREIGN KEY (`nhc`) REFERENCES `historial_clinico` (`nhc`);

--
-- Filtros para la tabla `embarazo_empleado`
--
ALTER TABLE `embarazo_empleado`
  ADD CONSTRAINT `embarazo_empleado_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `tipo_empleado` (`idEmpleado`),
  ADD CONSTRAINT `embarazo_empleado_ibfk_2` FOREIGN KEY (`idEmbarazo`) REFERENCES `embarazo` (`idEmbarazo`);

--
-- Filtros para la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD CONSTRAINT `historial_clinico_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `usuarios` (`idUser`);

--
-- Filtros para la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  ADD CONSTRAINT `tipo_empleado_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `usuarios` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
