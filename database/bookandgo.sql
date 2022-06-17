-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 jun 2022 om 16:51
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookandgo`
--
CREATE DATABASE IF NOT EXISTS `bookandgo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookandgo`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boekingen`
--

CREATE TABLE `boekingen` (
  `boekingId` int(11) NOT NULL,
  `gebruikersId` int(11) NOT NULL,
  `vluchtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `boekingen`
--

INSERT INTO `boekingen` (`boekingId`, `gebruikersId`, `vluchtId`) VALUES
(16, 2, 111);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `helpdesk`
--

CREATE TABLE `helpdesk` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `helpdesk`
--

INSERT INTO `helpdesk` (`id`, `email`, `message`) VALUES
(10, 'anus@gmail.com', 'testbericht'),
(11, 'ed@d', 'ed'),
(12, 'ed@e', 'edd'),
(13, 'wdW@e', 'wd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` int(5) NOT NULL,
  `beschrijving` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `email`, `review`, `beschrijving`) VALUES
(11, 'iliasluab@gmail.com', 5, 'Wat een geweldige website!');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `name`) VALUES
(1, 'admin@hotmail.com', 'admin', '3broeken', 'admin'),
(2, 'test@gmail.com', 'test', 'test', 'test'),
(23, 'mirzaselimovic2005@gmail.com', 'PikMirza', 'rby40m', 'Mirza s'),
(24, 'ilias.luab@gmail.com', 'ilias', 'ilias', 'ilias');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vluchten`
--

CREATE TABLE `vluchten` (
  `id` int(255) NOT NULL,
  `place_departure` varchar(255) NOT NULL,
  `place_destination` varchar(255) NOT NULL,
  `time_arrived` date NOT NULL,
  `time_leaving` date NOT NULL,
  `seats` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `vluchten`
--

INSERT INTO `vluchten` (`id`, `place_departure`, `place_destination`, `time_arrived`, `time_leaving`, `seats`) VALUES
(123, 'Frankfurt, Frankfurt Airport', 'Spanje, Madrid', '2022-05-16', '2022-05-15', 111),
(124, 'Amsterdam, Schiphol', 'Spanje, Valencia', '2022-05-15', '2022-05-14', 214),
(154, 'Frankfurt, Frankfurt Airport', 'Spanje, Madrid', '2022-05-15', '2022-05-14', 451),
(172, 'Frankfurt, Frankfurt Airport', 'Spanje, Madrid', '2022-05-18', '2022-05-17', 511),
(182, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-26', '2022-05-25', 432),
(201, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-24', '2022-05-23', 462),
(212, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-21', '2022-05-20', 132),
(225, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-15', '2022-05-14', 712),
(232, 'Frankfurt, Frankfurt Airport', 'Spanje, Madrid', '2022-05-10', '2022-05-11', 411),
(235, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-03', '2022-05-02', 512),
(242, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-04', '2022-05-03', 333),
(255, 'Amsterdam, Schiphol', 'Aruba, Oranjestad', '2022-05-05', '2022-05-04', 411),
(276, 'Amsterdam, Schiphol', 'Japan, Tokio', '2022-05-20', '2022-05-19', 411),
(288, 'Amsterdam, Schiphol', 'Japan, Tokio', '2022-05-23', '2022-05-22', 320),
(294, 'Amsterdam, Schiphol', 'Japan, Tokio', '2022-05-26', '2022-05-25', 510),
(305, 'Amsterdam, Schiphol', 'Japan, Tokio', '2022-05-28', '2022-05-27', 210),
(311, 'Amsterdam, Schiphol', 'Japan, Tokio', '2022-05-29', '2022-05-28', 312),
(531, 'Amsterdam, Schiphol', 'Spanje, Valencia', '2022-05-17', '2022-05-16', 212),
(563, 'Frankfurt, Frankfurt Airport', 'Spanje, Madrid', '2022-05-17', '2022-05-16', 431),
(632, 'Amsterdam, Schiphol\r\n', 'Spanje, Valencia\r\n', '2022-05-22', '2022-05-21', 212),
(2687, 'Amsterdam, Schiphol', 'Japan, Tokio', '2022-05-20', '2022-05-19', 400),
(2713, '', '', '0000-00-00', '0000-00-00', 0),
(2714, '', '', '0000-00-00', '0000-00-00', 0),
(2715, '', '', '0000-00-00', '0000-00-00', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boekingen`
--
ALTER TABLE `boekingen`
  ADD PRIMARY KEY (`boekingId`);

--
-- Indexen voor tabel `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vluchten`
--
ALTER TABLE `vluchten`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `vluchten` ADD FULLTEXT KEY `vluchten` (`place_departure`,`place_destination`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `boekingen`
--
ALTER TABLE `boekingen`
  MODIFY `boekingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT voor een tabel `vluchten`
--
ALTER TABLE `vluchten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2716;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
