-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Okt 2017 um 09:16
-- Server-Version: 10.1.25-MariaDB
-- PHP-Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `emojis`
--

CREATE TABLE `emojis` (
  `id` int(10) NOT NULL,
  `code` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `emojis`
--

INSERT INTO `emojis` (`id`, `code`, `name`) VALUES
(3, '&#128512;', 'GRINNING FACE'),
(4, '&#128523;', 'FACE SAVOURING DELICIOUS FOOD'),
(5, '&#128514;', 'FACE WITH TEARS OF JOY'),
(6, '&#128522;', 'SMILING FACE WITH SMILING EYES'),
(7, '&#128525;', 'SMILING FACE WITH HEART-SHAPED EYES'),
(8, '&#128564;', 'SLEEPING FACE'),
(9, '&#128555;', 'TIRED FACE'),
(10, '&#128573;', 'KISSING CAT FACE WITH CLOSED EYES'),
(11, '&#128584;', 'SEE-NO-EVIL MONKEY'),
(12, '&#128585;', 'HEAR-NO-EVIL MONKEY'),
(13, '&#128586; ', 'SPEAK-NO-EVIL MONKEY'),
(14, '&#128588;', 'PERSON RAISING BOTH HANDS IN CELEBRATION'),
(15, '&#9728; ', 'SUN'),
(16, '&#9731;', 'SNOWMAN'),
(17, '&#9733;', 'STAR'),
(18, '&#10084;', 'HEART'),
(19, '&#9999;', 'PENCIL');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `emojis`
--
ALTER TABLE `emojis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `emojis`
--
ALTER TABLE `emojis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
