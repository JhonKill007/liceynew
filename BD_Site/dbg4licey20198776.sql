-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 03:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbg4licey20198776`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `descripcion`, `foto`, `fecha`) VALUES
(1, 'Licey Gana su corona 22', 'Con un productivo bateo de Emilio Bonifacio y Sergio Alcántara los Tigres del Licey derrotaron este sábado en Santiago 6 carreras por 2 a las Águilas Cibaeñas, para coronarse campeones del Torneo Otoño Invernal 2016-2017.\r\nEsta es la corona número 22 del conjunto capitalino ante 20 del equipo cibaeño que buscaba empatar.\r\nEl Licey logró la victoria en el noveno juego de la Serie Final, con el bateo del parador en corto Sergio Alcántara, quien abrió el marcador en el segundo episodio al conectar ', 'img/licey3.jpg', 'Array'),
(2, 'Por vez 17 a Serie del Caribe', 'Santo Domingo. Los Tigres del Licey estarán por ocasión 17 en una Serie del Caribe, buscando ampliar su récord de más diademas conquistadas por un club en toda la historia de estos clásicos.\r\n\r\nLos Tigres del Licey estarán defendiendo en Mexicali, la décima corona que ganaron el pasado año en Santiago de los Caballeros.\r\n\r\nEl clásico está programado para celebrarse del 2 al 7 de febrero con los campeones de los torneos invernales de la República Dominicana, Puerto Rico, Venezuela y México.', 'img/Tigres3.jpg', 'Array'),
(3, 'Tigres del Licey es eliminado', 'Después de varios días de andar con la calculadora en la mano, los Tigres del Licey han sido eliminados de la carrera por los playoffs 2020-21 en la pelota invernal de la Liga Dominicana (LIDOM) al caer por 4-1 ante las Estrellas Orientales el lunes por la noche. El resultado los deja con marca de 11 ganados y 17 perdidos, a dos juegos de distancia del quinto lugar, los Leones del Escogido, quienes ya completaron su calendario de la Serie Regular y en este momento estarían disputando el mini pla', 'img/Tigress.jpg', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `foto`) VALUES
(1, 'foto/1.jpg'),
(2, 'foto/2.jpg'),
(3, 'foto/3.jpg'),
(4, 'foto/4.jpg'),
(5, 'foto/5.jpg'),
(6, 'foto/6.jpg'),
(7, 'foto/7.jpg'),
(8, 'foto/8.jpg'),
(9, 'foto/9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
