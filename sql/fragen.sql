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
-- Tabellenstruktur für Tabelle `fragen`
--

CREATE TABLE `fragen` (
  `id` int(10) NOT NULL,
  `frage` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `kategorie` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `fragen`
--

INSERT INTO `fragen` (`id`, `frage`, `kategorie`) VALUES
(20, 'Liest du gerne?', '1'),
(19, 'Party oder Zuhause?', '3'),
(15, 'Wie geht`s dir?', '1'),
(18, 'Für was interessierst du dich?', '1'),
(17, 'Was has du für Hobbies?', '2'),
(12, 'Guten Tag', '1'),
(11, 'Hallo', '1'),
(21, 'Langschläfer oder früher Vogel?', '3'),
(22, 'Was liest du?', '2'),
(23, 'Berge oder Meer?', '3'),
(24, 'Buch oder Film', '3'),
(25, 'Liest du gerne?', '2'),
(26, 'Hose oder Rock', '3'),
(27, 'Gesellschaft oder Technik?', '3'),
(28, 'Für was interessierst du dich?', '2'),
(29, 'OSX,Linux oder Windows?', '3'),
(30, 'Was ist deine Lieblingsfrucht?', '4'),
(31, 'Einkaufscenter oder Onlineshop?', '3'),
(32, 'Was ist dein Lieblingsessen?', '4'),
(33, 'Gehst du zur Schule?', '5'),
(34, 'Was ist dein Lieblingstier?', '4'),
(35, 'Was Arbeitest du?', '5'),
(36, 'Was ist deine Liebligsfarbe?', '4'),
(37, 'Was ist deine Lieblingshausarbeit?', '4'),
(38, 'Hast du Geschwister?', '6'),
(39, 'Wohnst du zuhause?', '6'),
(40, 'Was ist dein Lieblingsfach?', '4'),
(41, 'Hast du Haustiere?', '6'),
(42, 'Hast du Kinder?', '6'),
(43, 'Bist du verheiratet?', '6');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fragen`
--
ALTER TABLE `fragen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
