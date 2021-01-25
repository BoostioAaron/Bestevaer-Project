




CREATE TABLE `contact` (
  `voornaam` varchar(50) DEFAULT NULL,
  `achternaam` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `vraag` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `contact` (`voornaam`, `achternaam`, `email`, `vraag`) VALUES
('Aaron', ' laan', ' Aaron.laan@gmail.com', 'Hoeveel boten hebben jullie bij bestevaer?'),
('Aaron', ' Random', ' Steen@gmail.com', '\r\nHoe werkt het berekenen?'),
('Banaan', ' Banaan', ' Banaan@gmail.com', 'Hoeveel schepen zijn er om uit te kiezen?'),
('Aaron', ' Laan', ' Aaronlaan@gmail.com', 'Wat is mijn naam?'),
('Aaron', ' Banaan', ' Aaron@banaan.nl', 'WAT IS MIJN NAAM BANAAN?');



CREATE TABLE `schepen` (
  `imono` int(10) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `DWT` int(7) NOT NULL,
  `GT` int(7) NOT NULL,
  `volume` float NOT NULL,
  `afbeelding` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `schepen` (`imono`, `naam`, `DWT`, `GT`, `volume`, `afbeelding`) VALUES
(9071052, 'Hermes', 5809, 3806, 6633.9, 'image/HermsSchip.jpg'),
(9071076, 'NSANGELA', 5714, 3806, 6633.9, 'image/NS_ANGELASchip.JPG'),
(9123506, 'LuckyStar', 6800, 4178, 7527.7, 'image/LUCKY_STARSchip.JPG'),
(9311555, 'Triumph', 7150, 4039, 8189.1, 'image/TRIUMPHIVSchip.JPG'),
(9414735, 'Sabrina', 10030, 6278, 12594.9, 'image/SABRINASchip.jpg');



CREATE TABLE `users` (
  `usersId` int(11) UNSIGNED NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Aaron', 'aaron.laan@gmail.com', 'Aaron', '$2y$10$AYTiE/VXfJvCUF01qAfyge/BUcng6ST48kbA4wguC5fbHQHE1qO5W'),
(2, 'Lars Hekelaar', 'larshekelaar@gmail.com', 'Lars Hekelaar', '$2y$10$qwM5gNV8Amy..uOz9E04KuFuRNn8cMWTAvwbBSCPVGt2u8rb3Y83a'),
(3, 'Yann', 'Yann@gmail.com', 'Yann', '$2y$10$oYPCB.vYsNq3UAKNP1zYleKFe3DWfrW4X2QWwv3/azTE5ESlBPo1O'),
(4, 'Boostio', 'Boostio@gmail.com', 'Boostio', '$2y$10$I/UbC.OAC6OjbE1u3v1TBuMfZGSEEyhR4UnlIzbIkAuzSPwFYh.gG'),
(7, 'Arno laan', 'ditadres@gmail.com', 'Arno laan', '$2y$10$m7zaHWoL0UqI.n/yYJiNEOIfAyHc2Na2YVeu.DcRmT.fkrC.Yw/Ta'),
(8, 'Yoshi', 'Yoshi@ninetendo.com', 'Yoshi', '$2y$10$xLtvMBK26CoKcE77cAaLROw9wzWtrWAzRkXWgCGIli.K4btt6XwLO');




ALTER TABLE `schepen`
  ADD PRIMARY KEY (`imono`),
  ADD UNIQUE KEY `Naam` (`naam`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);




ALTER TABLE `users`
  MODIFY `usersId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;


