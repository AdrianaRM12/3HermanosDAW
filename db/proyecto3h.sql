-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2016 a las 22:54:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `iti701`
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
  PRIMARY KEY (`id_Apartado`),
  KEY `fk_Apartado_Cliente1_idx` (`id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `apartado`
--

INSERT INTO `apartado` (`id_Apartado`, `Abono_total`, `id_Cliente`) VALUES
(2, '100', 2),
(3, '123', 3),
(4, '150', 5),
(5, '203', 2),
(6, '450', 6),
(7, '100', 5),
(8, '50', 8),
(9, '90', 6),
(10, '56', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

CREATE TABLE IF NOT EXISTS `cajero` (
  `id_Cajero` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Cajero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `calzado`
--

INSERT INTO `calzado` (`id_Calzado`, `Nombre`, `Precio`, `Descripcion`, `id_Categoria`, `Stock`, `id_Marca`) VALUES
(1, 'Zapato mocasín rojo', '300', 'Zapato negro', NULL, NULL, NULL),
(3, 'Tenis deportivo predito', '300', 'Tenis para correr', 2, 4, 2),
(4, 'Tenis 3 series 2012 ', '200', 'Tenis deportivo', 2, 7, 2),
(5, 'Sandalia dark dama', '100', 'Sandalia azul ', 3, 20, 3),
(6, 'Sandalia farah dama', '120', 'Sandalia verde', 3, 23, 3),
(7, 'Botas estilo 357', '250', 'Botas para hombre negras', 4, 10, 4),
(8, 'Bota ghost', '200', 'Bota tipo polisia ', 4, 24, 4),
(18, 'Tenis furano 4 W G61182', '210', 'Tenis para correr', 2, 12, 3),
(19, 'Tenis goleto TRX TFFW13 Q33648', '190', 'Tenis para niño', 2, 33, 3),
(26, 'Bota de cuero', '300', 'Bota para mujer', 4, 6, 4),
(27, 'Botines', '340', 'Bota para mujer', 4, 6, 4),
(28, 'Sandalia dark hombre', '190', 'Sandalia para hombre', 3, 10, 3),
(29, 'Sandalia azul', '90', 'Sandalia para niña', 3, 6, 3),
(30, 'Tenis predito negro', '290', 'Tenis para hombre', 2, 20, 2),
(31, 'Tenis dark', '200', 'Tenis blanco', 2, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Categoria`, `Nombre`, `Descripcion`) VALUES
(1, 'Zapatos', '1'),
(2, 'Tenis', 'Tenis de todo tipo '),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_Cliente`, `Nombre`, `Telefono`, `Direccion`) VALUES
(1, 'toto', '1234', 'juarez'),
(2, 'Daniel', '1234567890', 'Hidalgo'),
(3, 'Jose', '1234567890', 'Juarez'),
(4, 'Manuel', '1234567890', 'Juarez'),
(5, 'Mateo', '1234567890', 'Guerrero'),
(6, 'Tomas', '1234567890', 'Guerrero'),
(7, 'Eduardo', '1234567890', '16 Sep'),
(8, 'Juan', '1234567890', '16 Sep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espejo`
--

CREATE TABLE IF NOT EXISTS `espejo` (
  `si quedo` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `espejo`
--

INSERT INTO `espejo` (`si quedo`) VALUES
('tiene que quedar'),
('segunda prueba '),
('tercera prueba '),
('prueba final');

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
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `uStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `username`, `password`, `email`, `uStatus`) VALUES
(1, 'toto', '1234', 'adr@gmail.com', 1),
(4, 'adriana', '1234', 'adriiz_poke@hotmail.com', 1),
(5, 'AdrianaS', '12345', 'adr@gmail.com', 0),
(29, 'Mauricio', '1234', 'mmauricio16@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `id_Vendedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_Vendedor`, `Nombre`) VALUES
(1, 'Laura'),
(2, 'Luis');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_Venta`, `Total`, `id_Vendedor`, `id_Cajero`, `id_Calzado`, `Fecha`, `id_Cliente`) VALUES
(2, '210', 1, 1, 18, '2016-01-27', 1),
(4, '200', 1, 1, 1, '2016-03-10', 1),
(5, '190', 2, 1, 19, '2016-03-26', 5),
(6, '250', 2, 1, 7, '2016-04-20', 5),
(7, '210', 1, 1, 18, '2015-08-13', 7),
(8, '120', 1, 1, 6, '2016-07-06', 1),
(9, '100', 1, 1, 5, '2016-01-29', 6);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartado`
--
ALTER TABLE `apartado`
  ADD CONSTRAINT `fk_Apartado_Cliente1` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calzado`
--
ALTER TABLE `calzado`
  ADD CONSTRAINT `calzado_ibfk_3` FOREIGN KEY (`id_Categoria`) REFERENCES `categoria` (`id_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `calzado_ibfk_4` FOREIGN KEY (`id_Marca`) REFERENCES `marca` (`id_Marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fk_Proveedor_Marca1` FOREIGN KEY (`id_Marca`) REFERENCES `marca` (`id_Marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `id_Cajero` FOREIGN KEY (`id_Cajero`) REFERENCES `cajero` (`id_Cajero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Calzado` FOREIGN KEY (`id_Calzado`) REFERENCES `calzado` (`id_Calzado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Cliente` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_Vendedor` FOREIGN KEY (`id_Vendedor`) REFERENCES `vendedor` (`id_Vendedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
