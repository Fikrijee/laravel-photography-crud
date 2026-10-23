-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 03:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudapp_fotografite`
--

CREATE TABLE `crudapp_fotografite` (
  `id` bigint(20) NOT NULL,
  `Fotografia_umfa` varchar(255) DEFAULT NULL,
  `Fotografi_umfa` varchar(255) DEFAULT NULL,
  `Kategoria_eFotografise_umfa` varchar(255) DEFAULT NULL,
  `RegisteredDate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudapp_fotografite`
--

INSERT INTO `crudapp_fotografite` (`id`, `Fotografia_umfa`, `Fotografi_umfa`, `Kategoria_eFotografise_umfa`, `RegisteredDate`) VALUES
(1, '\"Moonrise, Hernandez, New Mexico\"', 'Ansel Adams', 'Fotografi Peisazhi', '2023-12-26 17:39:02.707410'),
(2, '\"Rayograph\"', 'Man Ray', 'Fotografi Abstrakte', '2023-12-26 17:40:09.008357'),
(3, '\"Stray Dog\"', 'Daido Moriyama', 'Fotografi bardhë e zi', '2023-12-26 17:40:31.395807'),
(4, '\"Various detailed macro shots of insects and arachnids\"', 'Thomas Shahan', 'Fotografi Makro', '2023-12-26 17:41:00.283317'),
(5, '\"Lemurs in the Mist\"', 'Frans Lanting', 'Fotografi Natyre', '2023-12-26 17:41:33.070158'),
(6, '\"Afghan Girl\"', 'Steve McCurry', 'Fotografi portreti', '2023-12-27 19:21:49.627334'),
(7, '\"Case Study House #22\"', 'Julius Shulman', 'Fotografi arkitekture', '2023-12-27 19:23:38.639883'),
(8, '\"Workers: An Archaeology of the Industrial Age\"', 'Sebastião Salgado', 'Fotografi bardhë e zi', '2023-12-28 12:40:39.405920'),
(9, '\"Rainbow Over the Potala Palace\"', 'Galen Rowell', 'Fotografi Peisazhi', '2023-12-28 12:45:53.412697'),
(10, '\"Red Interior, Provincetown, Massachusetts, 1977\"', 'Joel Meyerowitz', 'Fotografi Urbane', '2023-12-28 12:47:38.107460');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudapp_fotografite`
--
ALTER TABLE `crudapp_fotografite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudapp_fotografite`
--
ALTER TABLE `crudapp_fotografite`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
