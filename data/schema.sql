DROP TABLE IF EXISTS bild;

CREATE TABLE `bild` (
  `id` int(11) NOT NULL,
  `picture_pfad` varchar(100) DEFAULT NULL,
  `titel` varchar(100) DEFAULT NULL,
  `beschreibung` varchar(300) DEFAULT NULL,
  `ort` varchar(100) DEFAULT NULL,
  `favorit` tinyint(4) DEFAULT NULL,
  `datum` date DEFAULT NULL
);

ALTER TABLE `bild`
  ADD PRIMARY KEY (`id`),
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
