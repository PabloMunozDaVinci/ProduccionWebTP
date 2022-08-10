-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2022 at 03:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produccionwebfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `id_padre`) VALUES
(1, 'computacion', 0),
(2, 'consola y videojuegos', 0),
(3, 'TV , audio y foto', 0),
(4, 'perfume ,cosmetica y belleza', 0),
(5, 'electrodomesticos', 0),
(6, 'teststetste', 0),
(7, 'algo', 0),
(8, 'joystick', 2),
(9, 'placa de video', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `email` varchar(30) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `ip` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` char(1) NOT NULL,
  `producto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`email`, `comentario`, `ip`, `fecha`, `estado`, `producto`) VALUES
('dsf@asd', '', 192168, '2020-11-24', '0', '1'),
('dsf@asd', 'ds', 192168, '2020-11-24', '0', '1'),
('dinopabon@hotmail.com', 'holaaaaaaaaaa', 192168, '2020-11-24', '0', '1'),
('dinopabon@hotmail.com', 'holaaaaaaaaaa', 192168, '2020-11-24', '0', '1'),
('dinopabon@hotmail.com', 'holaaaaaaaaaa', 192168, '2020-11-24', '0', '1'),
('pablocapo_93@hotmail.com', 'd', 192168, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', 'z', 192168, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', '', 0, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', '', 1270, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', '', 1270, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', '', 1270, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', 'z', 1270, '2020-11-24', '0', '1'),
('pablo.ariel.199@gmail.com', '', 1270, '2020-11-24', '0', '1'),
('pablo.ariel.199@gmail.com', '', 1270, '2020-11-24', '0', '1'),
('sdfsdfssdfsdfsdsdfasfdasfasf.c', '', 1270, '2020-11-24', '0', '1'),
('sdfsdfssdfsdfsdsdfasfdasfasf.c', 'hola pipi pupup papa popo', 1270, '2020-11-24', '0', '1'),
('ailenmicaelapabon@hotmail.com', 'zxc', 1270, '2020-11-24', '0', '1'),
('ailenmicaelapabon@hotmail.com', 'zxc', 1270, '2020-11-24', '0', '1'),
('ailenmicaelapabon@hotmail.com', 'zxc', 1270, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', 'sddsdfsdjfnsjfn', 1270, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', 'sddsdfsdjfnsjfn', 1270, '2020-11-24', '0', '1'),
('pmunoz@ewwoconsulting.com', 'sddsdfsdjfnsjfn', 1270, '2020-11-24', '0', '1'),
('  cccc', ' c c ', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', '1'),
('aaa', 'aaa', 1270, '2020-11-24', '0', ''),
('aaa', 'aaa', 1270, '2020-11-24', '0', ''),
('aaa', 'aaa', 1270, '2020-11-24', '0', ''),
('aaa', 'aaa', 1270, '2020-11-24', '0', ''),
('aaa', 'aaa', 1270, '2020-11-24', '0', 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `filtros`
--

CREATE TABLE `filtros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filtros`
--

INSERT INTO `filtros` (`id`, `nombre`) VALUES
(1, 'A-Z'),
(2, 'Z-A');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`) VALUES
(1, 'HP'),
(2, 'SONY'),
(3, 'HITACHI'),
(4, 'BENSIMON'),
(5, 'BLACK AND DECKER'),
(7, 'MICROSOFT');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `destacado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria_id`, `marca_id`, `precio`, `activo`, `destacado`) VALUES
(1, 'pc hp', 'pc hp', 1, 1, 143242, 1, 1),
(3, 'perfume bensimon', 'perfume ', 4, 4, 22345, 1, 1),
(4, 'black and decjer', 'cecker', 5, 5, 5677650, 1, 1),
(5, 'tv hitachi', 'tv hitachi', 3, 3, 123213, 0, 0),
(7, 'PS5', 'PS5', 2, 2, 3, 1, 1),
(8, 'XBOX', 'ADSASD', 2, 7, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Comprador');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` text NOT NULL,
  `id_tipo_usuario` tinyint(2) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`, `id_tipo_usuario`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
(1, 'fernando', 'test@gmail.com', '$2y$10$w7vCkix8n3twcCWr1I1ahe2VS1NkkmjbGrAF2HKjsg7XbzlDkh4GW', 2, '2022-08-08 00:55:19', '2022-08-08 00:55:19', NULL),
(2, 'pablo', 'pablo@gmail.com', '$2y$10$.K.vUCAYheL/aqpaczPvze1q81SDq0sdSO5LH1bVn7M/EzfYoJUJ.', 2, '2022-08-08 01:38:56', '2022-08-08 01:38:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filtros`
--
ALTER TABLE `filtros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_fk` (`categoria_id`),
  ADD KEY `marcas_fk` (`marca_id`);

--
-- Indexes for table `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `filtros`
--
ALTER TABLE `filtros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `categoria_fk` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `marcas_fk` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuarios` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
