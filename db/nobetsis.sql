-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 09:32 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nobetsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hash` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `keyValue` varchar(23) COLLATE utf8_turkish_ci NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `name`, `hash`, `keyValue`, `createdDate`) VALUES
(5, 'NöbetSis ile ilgili sorularınız için sorumlunuz ile iletişime geçiniz!', 'bbc9179a1a19277027c084d7e5bd8c9ede06b819d1253b2bf08c56b6a58cca29', '593d72ac5a14a2.87658095', '2017-06-11 19:42:38'),
(6, 'NöbetBorsası ile daha fazla nöbet alabilirsiniz.', '0862213f476ba7d5a6411ed5b71a093fece2719034c94faf7babde53ed048abc', '593d72b57b7196.34283604', '2017-06-11 19:42:38'),
(7, 'NöbetSis uygulaması hayata geçirilmiştir.', '6c6c21287725fdb102c86ebc0a29efb25f4c31f74a8a8d87a04cbcc7163aa4d9', '593d72bc01c618.60298995', '2017-06-11 19:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `assignOperToLab`
--

CREATE TABLE `assignOperToLab` (
  `id` int(11) NOT NULL,
  `dormitoryId` int(11) DEFAULT NULL,
  `monday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `tuesday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `wednesday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `thursday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `friday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `saturday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `sunday` varchar(40) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `assignOperToLab`
--

INSERT INTO `assignOperToLab` (`id`, `dormitoryId`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `userId`) VALUES
(1, 1, '0-0-e123456-e234567-e186904', '0-e123456-e186904-e186904-e123456', '0-e123456-e186904-e234567-e123456', 'e234567-e123456-e186904-e234567-e123456', 'e186904-e186904-e234567-e123456-e123456', 'e186904-e186904-e234567-e123456-e123456', 'e186904-e186904-e186904-e123456-e123456', 6),
(2, 2, 'e234567-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 'e186904-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 6),
(3, 3, '0-0-0-0-0', 'e186904-e186904-e186904-e186904-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 6),
(4, 4, '0-e123456-e123456-e234567-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 6),
(5, 5, '0-0-0-0-0', '0-0-0-0-0', 'e234567-e234567-e234567-e186904-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 6),
(6, 6, '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 'e186904-e186904-e186904-e186904-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 6),
(7, 7, 'e234567-e234567-e186904-e186904-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', '0-0-0-0-0', 6);

-- --------------------------------------------------------

--
-- Table structure for table `dormitories`
--

CREATE TABLE `dormitories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `dormitories`
--

INSERT INTO `dormitories` (`id`, `name`) VALUES
(1, '1. YURT PC SALONU'),
(2, '2. YURT I. PC SALONU'),
(3, '2. YURT II. PC SALONU'),
(4, 'İSA DEMİRAY YURDU PC SALONU'),
(5, 'FAİKA AKSOY YURDU PC SALONU'),
(6, '19. YURT PC SALONU'),
(7, 'REFİKA AKSOY YURDU PC SALONU');

-- --------------------------------------------------------

--
-- Table structure for table `labWatchSettings`
--

CREATE TABLE `labWatchSettings` (
  `id` int(11) NOT NULL,
  `dormitoryId` int(11) DEFAULT NULL,
  `monday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `tuesday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `wednesday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `thursday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `friday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `saturday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0',
  `sunday` varchar(9) COLLATE utf8_turkish_ci DEFAULT '0-0-0-0-0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `labWatchSettings`
--

INSERT INTO `labWatchSettings` (`id`, `dormitoryId`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 1, '1-1-1-1-1', '1-1-1-1-1', '1-1-1-1-1', '1-1-1-1-1', '1-1-1-1-1', '1-1-1-1-1', '1-1-1-1-1'),
(2, 2, '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '0-0-0-0-0', '0-0-0-0-0'),
(3, 3, '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '0-0-0-0-0', '0-0-0-0-0'),
(4, 4, '0-1-1-1-0', '0-1-1-1-0', '0-1-1-1-0', '0-1-1-1-0', '0-1-1-1-0', '0-0-0-0-0', '0-0-0-0-0'),
(5, 5, '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '0-0-0-0-0', '0-0-0-0-0'),
(6, 6, '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '0-0-0-0-0', '0-0-0-0-0'),
(7, 7, '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '1-1-1-1-0', '0-0-0-0-0', '0-0-0-0-0');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `userTypeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `userId`, `userTypeId`) VALUES
(2, 'Kullanici', NULL, 1),
(3, 'Sorumlu', NULL, 2),
(4, 'Yonetici', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `punishments`
--

CREATE TABLE `punishments` (
  `id` int(11) NOT NULL,
  `givenBy` int(11) DEFAULT NULL,
  `operId` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `punishments`
--

INSERT INTO `punishments` (`id`, `givenBy`, `operId`, `createdDate`, `description`) VALUES
(1, 7, 1, '2017-06-11 23:11:33', 'yemek yedi'),
(2, 7, 1, '2017-06-11 23:11:50', 'su içti'),
(3, 6, 8, '2017-06-11 23:27:07', 'laba gelmedi'),
(6, 6, 1, '2017-06-12 01:00:16', 'çalışmıyor'),
(7, 6, 9, '2017-06-12 01:00:35', 'çalışmıyor'),
(8, 6, 8, '2017-06-12 01:00:50', 'ikinci kez laba gelmedi'),
(9, 6, 1, '2017-06-12 01:02:10', 'projeyi yapmadı'),
(10, 7, 8, '2017-06-12 01:02:37', 'laba gelmedi yine'),
(11, 6, 9, '2017-06-13 16:29:13', 'laba gelmedi'),
(12, 6, 9, '2017-06-14 09:45:52', 'yemek yedi');

-- --------------------------------------------------------

--
-- Table structure for table `quitWatches`
--

CREATE TABLE `quitWatches` (
  `id` int(11) NOT NULL,
  `operId` int(11) DEFAULT NULL,
  `dormitoryId` int(11) DEFAULT NULL,
  `watchInfo` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `weekNo` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tempWatches`
--

CREATE TABLE `tempWatches` (
  `id` int(11) NOT NULL,
  `operId` int(11) DEFAULT NULL,
  `weekNo` int(11) DEFAULT NULL,
  `watchInfo` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dormitoryId` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `userTypeId` int(11) DEFAULT '1',
  `firstname` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `lastname` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hash` varchar(64) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keyValue` varchar(23) COLLATE utf8_turkish_ci DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userTypeId`, `firstname`, `lastname`, `hash`, `keyValue`, `createdDate`) VALUES
(1, 'e186904', 1, 'Şevki', 'Kocadağ', 'ebe325aed9098e6b582f321e2f74392ebe994104fa16897b9f600561cf77122b', '593d3fb7bb7f69.37119171', '2017-06-11 16:03:51'),
(6, 'ahmet', 3, 'Ahmet', 'Yurdakul', '966c1b34069a8d19968adf8d2b6debd5b47793aaf6ffaf3bda90b54a272a0fce', '593d58f5261910.47320151', '2017-06-11 17:51:33'),
(7, 'yasin', 2, 'Yasin', 'Mısırlı', '77665d8d8c5b122229c6942f8d22d222aba6dbaa1289312ddd887ae4b039a8a2', '593d591a67d864.84477414', '2017-06-11 17:52:10'),
(8, 'e123456', 1, 'Semir', 'Kurt', '7059ba501e2044f60ed389067a8dfeef5cf76ec920c1cfd7642c5cd1bc1e8fbf', '593da7814c7029.74726001', '2017-06-11 23:26:41'),
(9, 'e234567', 1, 'Enes', 'Dağ', '7126cd371a276d47754539022eaaa4eda8898ac0111cb15389a49c73e3204539', '593db54d4867f9.57211759', '2017-06-12 00:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `userTypes`
--

CREATE TABLE `userTypes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `authorizationDegree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `userTypes`
--

INSERT INTO `userTypes` (`id`, `name`, `authorizationDegree`) VALUES
(1, 'Kullanıcı', 1),
(2, 'Sorumlu', 2),
(3, 'Yönetici', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignOperToLab`
--
ALTER TABLE `assignOperToLab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fUserId_a_idx` (`userId`),
  ADD KEY `fDormitoryId_a_idx` (`dormitoryId`);

--
-- Indexes for table `dormitories`
--
ALTER TABLE `dormitories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labWatchSettings`
--
ALTER TABLE `labWatchSettings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fDormitoryId_la_idx` (`dormitoryId`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fUserId_l` (`userId`),
  ADD KEY `fUserTypeId_l` (`userTypeId`);

--
-- Indexes for table `punishments`
--
ALTER TABLE `punishments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fUserId_p_idx` (`givenBy`),
  ADD KEY `fOperId_p_idx` (`operId`);

--
-- Indexes for table `quitWatches`
--
ALTER TABLE `quitWatches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fOperId_q_idx` (`operId`),
  ADD KEY `fDormitoryId_q_idx` (`dormitoryId`);

--
-- Indexes for table `tempWatches`
--
ALTER TABLE `tempWatches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fDormitoryId_t_idx` (`dormitoryId`),
  ADD KEY `fOperId_t_idx` (`operId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fUserTypeId_u_idx` (`userTypeId`);

--
-- Indexes for table `userTypes`
--
ALTER TABLE `userTypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `assignOperToLab`
--
ALTER TABLE `assignOperToLab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dormitories`
--
ALTER TABLE `dormitories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `labWatchSettings`
--
ALTER TABLE `labWatchSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `punishments`
--
ALTER TABLE `punishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quitWatches`
--
ALTER TABLE `quitWatches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `userTypes`
--
ALTER TABLE `userTypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignOperToLab`
--
ALTER TABLE `assignOperToLab`
  ADD CONSTRAINT `fDormitoryId_a` FOREIGN KEY (`dormitoryId`) REFERENCES `dormitories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fUserId_a` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `labWatchSettings`
--
ALTER TABLE `labWatchSettings`
  ADD CONSTRAINT `fDormitoryId_la` FOREIGN KEY (`dormitoryId`) REFERENCES `dormitories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `fUserId_l` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fUserTypeId_l` FOREIGN KEY (`userTypeId`) REFERENCES `userTypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `punishments`
--
ALTER TABLE `punishments`
  ADD CONSTRAINT `fOperId_p` FOREIGN KEY (`operId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fUserId_p` FOREIGN KEY (`givenBy`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `quitWatches`
--
ALTER TABLE `quitWatches`
  ADD CONSTRAINT `fDormitoryId_q` FOREIGN KEY (`dormitoryId`) REFERENCES `dormitories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fOperId_q` FOREIGN KEY (`operId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tempWatches`
--
ALTER TABLE `tempWatches`
  ADD CONSTRAINT `fDormitoryId_t` FOREIGN KEY (`dormitoryId`) REFERENCES `dormitories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fOperId_t` FOREIGN KEY (`operId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fUserTypeId_u` FOREIGN KEY (`userTypeId`) REFERENCES `userTypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
