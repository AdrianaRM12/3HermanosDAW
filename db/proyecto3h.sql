-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-08-2016 a las 13:25:58
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto3h`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addusuario`(in plan varchar (45), in status int)
begin 
insert into usuario values (0,nombre,status);
select "todo bien";

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado`
--

CREATE TABLE IF NOT EXISTS `apartado` (
  `id_Apartado` int(11) NOT NULL AUTO_INCREMENT,
  `Abono_total` varchar(45) DEFAULT NULL,
  `id_Cliente` int(11) NOT NULL,
  `aStatus` int(11) NOT NULL DEFAULT '1',
  `Total_AP` double NOT NULL,
  `FechaA` date NOT NULL,
  PRIMARY KEY (`id_Apartado`),
  KEY `fk_Apartado_Cliente1_idx` (`id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `apartado`
--

INSERT INTO `apartado` (`id_Apartado`, `Abono_total`, `id_Cliente`, `aStatus`, `Total_AP`, `FechaA`) VALUES
(2, '200', 0, 1, 200, '0000-00-00'),
(3, '123', 3, 0, 300, '0000-00-00'),
(4, '150', 5, 0, 250, '0000-00-00'),
(6, '450', 6, 0, 500.5, '0000-00-00'),
(7, '100', 5, 0, 167.5, '0000-00-00'),
(8, '50', 8, 0, 189, '0000-00-00'),
(9, '90', 6, 0, 216, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

CREATE TABLE IF NOT EXISTS `cajero` (
  `id_Cajero` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Cajero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cajero`
--

INSERT INTO `cajero` (`id_Cajero`, `Nombre`) VALUES
(1, 'Jose'),
(2, 'Adriana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calzado`
--

CREATE TABLE IF NOT EXISTS `calzado` (
  `id_Calzado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Precio` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `id_Categoria` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `id_Marca` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Calzado`),
  KEY `id_Categoria_idx` (`id_Categoria`),
  KEY `id_Marca_idx` (`id_Marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `calzado`
--

INSERT INTO `calzado` (`id_Calzado`, `Nombre`, `Precio`, `Descripcion`, `id_Categoria`, `Stock`, `id_Marca`) VALUES
(19, 'Tenis goleto TRX TFFW13 Q33648', '190', 'Tenis para niño', 2, 33, 3),
(28, 'Sandalia dark hombre', '190', 'Sandalia para hombre', 3, 10, 3),
(29, 'Tenis rojo', '123', 'El tenis rojo', 1, 12, 1),
(31, 'ui', '78', 'lkj', 1, 1, 1),
(32, 'iuy', '87', 'lkj', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Categoria`, `Nombre`, `Descripcion`) VALUES
(2, 'Tenis', NULL),
(3, 'Sandalia', 'Todo tipo de sandalias'),
(4, 'Botas', 'Botas para hombre y mujer ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_Cliente`, `Nombre`, `Telefono`, `Direccion`) VALUES
(1, 'toto', '1234', 'juarez'),
(2, 'Juan', '1234567890', 'Hidalgo'),
(3, 'Jose', '1234567890', 'Juarez'),
(4, 'Manuel', '1234567890', 'Juarez'),
(5, 'Mateo', '1234567890', 'Guerrero'),
(6, 'Tomas', '1234567890', 'Guerrero'),
(7, 'Cruz Lopez', '123456789', 'hidalgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id_Marca` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_Marca`, `Nombre`) VALUES
(1, 'Sandra'),
(2, 'Liz'),
(3, 'Collec'),
(4, 'Lady alison');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `uStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `producto`, `precio`, `numero`, `uStatus`) VALUES
(8, 'CHANCLAS', 450, 8, 0),
(11, 'Zapato Piel', 450, 25, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_Proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `id_Marca` int(11) NOT NULL,
  PRIMARY KEY (`id_Proveedor`),
  KEY `fk_Proveedor_Marca1_idx` (`id_Marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_Proveedor`, `Nombre`, `Telefono`, `Direccion`, `id_Marca`) VALUES
(2, 'Lys', '1234567890', 'Hidalgo', 2),
(3, 'Collec', '1234567890', 'Guerrero 12', 3),
(4, 'Sandra', '1234567890', 'Victoria 12', 1),
(5, 'Lady alison', '1234567890', 'Guerrero 22', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `uStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `username`, `password`, `email`, `uStatus`) VALUES
(33, 'Adriana', 'G4FIFrbJuSIjHg61CzG2IveQ61dAS+NOeRPZBk8PO5bczQKK423nPX/sZvmoW++aFBq40szFA9lwaVZMJh/hnA==', 'adriana_@hotmail.com', 1),
(34, 'Nacho', 'ORPOphI9iescjNZdHU1C8MKxKzGAZuS6Db/JKTaCaTa6wPLr1z7ul+bLp+wk7vJX+lFt7pEQtqSEcmvOBi9fuQ==', 'as@hj.com', 0),
(35, 'toto', 'NsfmkeE4X9PbpNapCvf8pjsETPYDFzrVOCVCgMiTEk97evv45Rr2eZixbScGZhpbs4kApIFobFH8DqPX0RaGJw==', 'adriana_@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `id_Vendedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_Vendedor`, `Nombre`) VALUES
(1, 'Laura'),
(2, 'Luis'),
(4, 'Juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_Venta` int(11) NOT NULL AUTO_INCREMENT,
  `Total` varchar(45) DEFAULT NULL,
  `id_Vendedor` int(11) DEFAULT NULL,
  `id_Cajero` int(11) DEFAULT NULL,
  `id_Calzado` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `id_Cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Venta`),
  KEY `id_Cajero_idx` (`id_Cajero`),
  KEY `id_Calzado_idx` (`id_Calzado`),
  KEY `id_Vendedor_idx` (`id_Vendedor`),
  KEY `id_Cliente_idx` (`id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_Venta`, `Total`, `id_Vendedor`, `id_Cajero`, `id_Calzado`, `Fecha`, `id_Cliente`) VALUES
(2, '67', 1, 1, 0, '2016-01-27', 1),
(5, '190', 2, 1, 18, '2016-03-26', 5);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ventas_totales`
--
CREATE TABLE IF NOT EXISTS `ventas_totales` (
`SUM(Total)` double
);
-- --------------------------------------------------------

--
-- Estructura para la vista `ventas_totales`
--
DROP TABLE IF EXISTS `ventas_totales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ventas_totales` AS select sum(`venta`.`Total`) AS `SUM(Total)` from `venta`;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fk_Proveedor_Marca1` FOREIGN KEY (`id_Marca`) REFERENCES `marca` (`id_Marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
