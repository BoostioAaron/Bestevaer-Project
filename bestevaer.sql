

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `bestevaer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `naam` varchar(50) DEFAULT NULL,
  `achternaam` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `vraag` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9071076, 'NSANGELA', 5714, 3806, 6633.9, NULL),
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
(1, 'Aaron', 'aaron.laan@gmail.com', 'Aaron', '$2y$10$AYTiE/VXfJvCUF01qAfyge/BUcng6ST48kbA4wguC5fbHQHE1qO5W'),
(2, 'Lars Hekelaar', 'larshekelaar@gmail.com', 'Lars Hekelaar', '$2y$10$qwM5gNV8Amy..uOz9E04KuFuRNn8cMWTAvwbBSCPVGt2u8rb3Y83a'),
(3, 'Yann', 'Yann@gmail.com', 'Yann', '$2y$10$oYPCB.vYsNq3UAKNP1zYleKFe3DWfrW4X2QWwv3/azTE5ESlBPo1O'),
(4, 'Boostio', 'Boostio@gmail.com', 'Boostio', '$2y$10$I/UbC.OAC6OjbE1u3v1TBuMfZGSEEyhR4UnlIzbIkAuzSPwFYh.gG');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`achternaam`);

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
  MODIFY `usersId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;


