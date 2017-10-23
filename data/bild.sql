-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Erstellungszeit: 23. Okt 2017 um 09:08
-- Server-Version: 10.1.9-MariaDB
-- PHP-Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `projekt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bild`
--

CREATE TABLE `bild` (
  `id` int(11) NOT NULL,
  `picture_pfad` varchar(100) DEFAULT NULL,
  `titel` varchar(100) DEFAULT NULL,
  `beschreibung` varchar(300) DEFAULT NULL,
  `ort` varchar(100) DEFAULT NULL,
  `favorit` tinyint(4) DEFAULT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bild`
--

INSERT INTO `bild` (`id`, `picture_pfad`, `titel`, `beschreibung`, `ort`, `favorit`, `datum`) VALUES
(1, '../public/images/firstpicture', 'Erstes Bild', 'Das ist unser erstes Bild.', 'Bbc', NULL, '2017-10-23'),
(2, '../public/images/secondpicture', 'Zweites Bild', 'Das ist unser zweites Bild.', 'Bbc', NULL, '2017-10-23');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bild`
--
ALTER TABLE `bild`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bild`
--
ALTER TABLE `bild`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
