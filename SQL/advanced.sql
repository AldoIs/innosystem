-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2015 a las 06:06:44
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `advanced`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1448780369),
('m130524_201442_init', 1448780376);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `cumpleanos` date NOT NULL,
  `telefono` text NOT NULL,
  `invocador` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `twitch` text NOT NULL,
  `puntos` int(11) NOT NULL,
  `logros` int(11) NOT NULL,
  `puesto` text NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `acercade` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `id_user`, `nombre`, `correo`, `cumpleanos`, `telefono`, `invocador`, `facebook`, `twitter`, `twitch`, `puntos`, `logros`, `puesto`, `id_equipo`, `acercade`) VALUES
(2, 4, 'AldoIs', 'aldois.rov@gmail.com', '2015-01-23', '6461086320', 'Stinson', 'aldois', 'AldoisMen', 'aldois', 0, 0, 'Miembro', 0, 'Soy un nuevo miembro que busca mejorar cada dia y mostrar que el unico obstaculo es uno mismo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `summoner`
--

CREATE TABLE IF NOT EXISTS `summoner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `summoner_id` int(11) NOT NULL,
  `summoner_name` text NOT NULL,
  `summoner_level` int(11) NOT NULL,
  `profile_icon` int(11) NOT NULL,
  `has_been_updated` int(11) NOT NULL,
  `update_automatically` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `time_updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `summoner_account_id_index` (`region`,`id_user`),
  KEY `summoner_summoner_name_index` (`region`,`summoner_name`(64)),
  KEY `summoner_update_automatically_index` (`update_automatically`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `summoner`
--

INSERT INTO `summoner` (`id`, `region`, `id_user`, `summoner_id`, `summoner_name`, `summoner_level`, `profile_icon`, `has_been_updated`, `update_automatically`, `time_created`, `time_updated`) VALUES
(5, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(6, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(7, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(8, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(9, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(10, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(11, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248),
(12, 1, 4, 293964, '', 30, 21, 0, 0, 778880248, 778880248);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'n-v6jIyknERgEizFoa0P7-ryq7Z0db9T', '$2y$13$gD5qroNiAHDheUCTvVFRmebXObXJdvxeCQrkEI0GjuPvT.jOC8MN.', 'Bw6juAJ5Zf5F00uadxk-nQh_Sz3_D7F7_1449992187', 'aldois.rov@gmail.com', 10, 1448780717, 1449992187, 0),
(2, 'zapato', 'Sfm6oNvBEjbrsL5puVRbD-vHhbeqkghw', '$2y$13$FPMUyueqkRxGrI7He2mZx.bvkr6FkWcAcHiZr9NsYCrBF6nomTkDa', NULL, 'aldo@a.com', 10, 1449992213, 1449992213, 0),
(3, 'aldoboy5@hotmail.com', '61EiA9NWRXKEK6MsUtZm72GmU5kB6ZdK', '$2y$13$PDyDdlnYF1dzuhmfC1aZLOBJbIq/nvfNPS7IrvmyxMjc.LMpuZ0WO', NULL, 'aldoboy5@hotmail.com', 10, 1450252308, 1450252308, 0),
(4, 'aldois', 'PJNgzt8Hr08hw1-inQ0uroARxVHvss0y', '$2y$13$2DWfa/UM5Pn0.PZ9.2dC/uo/rBdH8ersgHwTFkC6MrmyuCgr7cH1.', NULL, 'aldo@a.coma', 10, 1450332100, 1450332100, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
