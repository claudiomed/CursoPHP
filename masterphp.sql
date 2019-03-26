-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-03-2019 a las 05:49:37
-- Versión del servidor: 5.7.23
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
-- Base de datos: `masterphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Sports'),
(2, 'Weather'),
(3, 'Entertainment'),
(4, 'Education'),
(6, 'Technology'),
(7, 'Food'),
(8, 'Music'),
(9, 'Movies');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

DROP TABLE IF EXISTS `entrada`;
CREATE TABLE IF NOT EXISTS `entrada` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(255) DEFAULT NULL,
  `categoria_id` int(255) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` mediumtext,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entrada_user` (`usuario_id`),
  KEY `pk_entrada_categorias` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(28, 23, 3, 'Bill Burr', 'El comediante estara en Costa Rica el proximo jueves 28 de Marzo.', '2019-03-24'),
(29, 49, 1, 'Barcelona en cuartos', 'Los blaugranas estaran disputando cuartos contra el Manchester United.', '2019-03-24'),
(30, 50, 2, 'Verano no tan verano', 'El cambio climatica ha estado afectando las estaciones climaticas.', '2019-03-24'),
(31, 51, 4, 'Ingles para todos', 'Las escuelas publicas impartiran cursos de ingles avanzado para los estudiantes de 5to y 6to año', '2019-03-24'),
(32, 52, 6, 'Tesla Y revelado', 'El nuevo automovil fue presentado a principios del mes de marzo', '2019-03-24'),
(33, 53, 7, 'Donas veganas', 'Una nueva manera de alimentar a la poblacion vegana en Costa Rica. ', '2019-03-24'),
(34, 54, 8, 'Marshall Mathers LP 3` ', 'El album saldra a finales del 2019', '2019-03-24'),
(35, 50, 1, 'Red Sox en la serie mundial', 'Después de conseguir una Serie Mundial con los Medias Rojas, el lanzador prefirió permanecer con la misma novena en lugar de averiguar cuánto ganaría como agente libre al finalizar esta temporada.', '2019-03-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `imagenes` longblob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `password`, `fecha`, `imagenes`) VALUES
(23, 'Glenny', 'Lee', 'glee@gmail.com', '$2y$04$lGjZSkIlO8G7Q8iCWoZdnupemPpMrSnMMCKkLxR9w3j/.uJm2VcWO', '2019-02-22', NULL),
(49, 'Claudio', 'Medrano', 'cmedrano1490@gmail.com', '$2y$04$1uRpYlDM3kqp2euXmQRxW.NduHSi9jc9Slc.Rms2TLrcNTIGbsHce', '2019-03-24', NULL),
(50, 'Max ', 'Mena', 'MaxMena@gmail.com', '$2y$04$h8T5H8uaA/0LYekqG9mnrOwR1t8ub.AUbzDu2qWtBr2tcyfFTzebm', '2019-03-24', NULL),
(51, 'Rosita', 'Gil Hoe', 'rositaHoe@gmail.com', '$2y$04$pdDnO57P3XBxuSeaKe4wHeVGn1GVGzWjaSko81P87B8hywOS243c6', '2019-03-24', NULL),
(52, 'Elon ', 'Musk', 'emusk@gmail.com', '$2y$04$D.YuPZXgGtsJthMiytl8AexH5BUkToovL0nU95MCbZcBkDecbeD4G', '2019-03-24', NULL),
(53, 'Alexandra', 'Solis', 'asolis@gmail.com', '$2y$04$JroaQ2ZbftupF52OYK2LU.rVlEYAE8m3L5j0WNnGfhwmd3Icj26HS', '2019-03-24', NULL),
(54, 'Marshall', 'Mathers', 'mmatters@gmail.com', '$2y$04$BAB7Pf1HVSfg506lW6IzdOABboonc3U1/IoBezIrhtNrd5srbr6G6', '2019-03-24', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_entrada_user` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pk_entrada_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
