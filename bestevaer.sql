-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jan 2021 om 14:35
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
  `imono` int(10) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `DWT` int(7) NOT NULL,
  `GT` int(7) NOT NULL,
  `volume` float NOT NULL,
  `afbeelding` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `schepen`
--

INSERT INTO `schepen` (`imono`, `naam`, `DWT`, `GT`, `volume`, `afbeelding`) VALUES
(9071052, 'Hermes', 5809, 3806, 6633.9, NULL),
(9071076, 'NS ANGELA', 5714, 3806, 6633.9, NULL),
(9123506, 'LuckyStar', 6800, 4178, 7527.7, NULL),
(9311555, 'Triumph', 7150, 4039, 8189.1, NULL),
(9414735, 'Sabrina', 10030, 6278, 12594.9, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersId` int(11) UNSIGNED NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Aaron', 'aaron.laan@gmail.nl', 'Aaron', '$2y$10$P8X9725DkfUExRVgRq0sy.UiwzVtQ4r8OjyycB15ofMZonG8hzk1y'),
(2, 'Boostio', 'aj-laan@hotmail.nl', 'Boostio', '$2y$10$PkeLOa.2H.vOeaIQ7pX9V.HuQaodBYo7WKoerQeKURDYYbi03HzHK'),
(3, 'boost', 'aj-laan@gmail.nl', 'boost', '$2y$10$o/TFvjo4ZC19Rx8spPHUyOY6xNVHndbV2m6X6C0jWrE353Hagj2Ty'),
(4, 'Aaronboostio', 'aaron.laan@gmail.com', 'Aaronboostio', '$2y$10$jM0pgmnFfgA7foOwQtkncOU1SrvNwGwaEsnoGmah4ZlM/yNdBFUKa');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `schepen`
--
ALTER TABLE `schepen`
  ADD PRIMARY KEY (`imono`),
  ADD UNIQUE KEY `Naam` (`naam`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
