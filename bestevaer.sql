-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 jan 2021 om 13:57
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestevaer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schepen`
--

CREATE TABLE `schepen` (
  `IMOno` int(10) NOT NULL,
  `Naam` varchar(30) NOT NULL,
  `DWT` int(7) NOT NULL,
  `GT` int(7) NOT NULL,
  `Volume` float NOT NULL,
  `Afbeelding` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `schepen`
--

INSERT INTO `schepen` (`IMOno`, `Naam`, `DWT`, `GT`, `Volume`, `Afbeelding`) VALUES
(9071052, 'Hermes', 5809, 3806, 6633.9, NULL),
(9071076, 'NS ANGELA', 5714, 3806, 6633.9, NULL),
(9123506, 'LuckyStar', 6800, 4178, 7527.7, NULL),
(9311555, 'Triumph', 7150, 4039, 8189.1, NULL),
(9414735, 'Sabrina', 10030, 6278, 12594.9, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `schepen`
--
ALTER TABLE `schepen`
  ADD PRIMARY KEY (`IMOno`),
  ADD UNIQUE KEY `Naam` (`Naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
