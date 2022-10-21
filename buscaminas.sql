-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 20:42:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buscaminas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` varchar(6) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `passwd` varchar(15) NOT NULL,
  `partidas` int(4) NOT NULL,
  `ganadas` int(4) NOT NULL,
  `perdidas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `nombre`, `passwd`, `partidas`, `ganadas`, `perdidas`) VALUES
('11111A', 'Jaime', '11111A', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `id_jugador` varchar(6) NOT NULL,
  `id_tablero` varchar(6) NOT NULL,
  `tablero` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablero`
--

CREATE TABLE `tablero` (
  `id` varchar(6) NOT NULL,
  `tablero` varchar(999) NOT NULL,
  `id_jugador` varchar(6) NOT NULL,
  `dificultad` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablero`
--

INSERT INTO `tablero` (`id`, `tablero`, `id_jugador`, `dificultad`) VALUES
('11111A', '', '11111A', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`id_jugador`),
  ADD UNIQUE KEY `id_tablero` (`id_tablero`);

--
-- Indices de la tabla `tablero`
--
ALTER TABLE `tablero`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_jugador` (`id_jugador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
