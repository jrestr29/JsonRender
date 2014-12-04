-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2014 a las 15:31:16
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.19-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba_tecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JSON_Elementos`
--

CREATE TABLE IF NOT EXISTS `JSON_Elementos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `json` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `JSON_Elementos`
--

INSERT INTO `JSON_Elementos` (`id`, `json`) VALUES
(1, '{"objects":[{"text":{"x":643,"y":71,"width":82,"height":33,"font":"Arial","style":"bold","size":24,"label":"Part A"}},{"text":{"x":643,"y":116,"width":389,"height":42,"font":"Arial","style":"bold","size":16,"label":"What does \\"novel\\" mean as it is used in paragraph 8 of \\"Turning Down a New Road\\"? "}},{"radiobutton":{"x":643,"y":170,"width":100,"height":20,"label":"A. old"}},{"radiobutton":{"x":643,"y":209,"width":100,"height":20,"label":"B. afraid"}},{"radiobutton":{"x":643,"y":250,"width":100,"height":20,"label":"C. new"}},{"radiobutton":{"x":643,"y":289,"width":100,"height":20,"label":"D. friendly"}}]}'),
(2, '{"objects":[{"text":{"x":643,"y":315,"width":82,"height":33,"font":"Arial","style":"bold","size":24,"label":"Part B"}},{"text":{"x":643,"y":361,"width":537,"height":27,"font":"Arial","style":"bold","size":16,"label":"Mai Chong changes during the story.<br/><br/>Which two words best describes Mai Chong at the END?"}},{"checkbox":{"x":643,"y":450,"width":537,"height":20,"label":"A. powerless"}},{"checkbox":{"x":643,"y":490,"width":537,"height":20,"label":"B. helpful"}},{"checkbox":{"x":643,"y":530,"width":537,"height":20,"label":"C. angry"}},{"checkbox":{"x":643,"y":570,"width":537,"height":20,"label":"D. hurt"}},{"checkbox":{"x":643,"y":610,"width":537,"height":20,"label":"E. brave"}}]}'),
(3, '{"objects":[{"img":{"src":"http://files.sharenator.com/266684.jpg","width":200,"height":150}}]}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
