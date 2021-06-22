-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jun 2021 om 00:47
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliosql`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(4) NOT NULL,
  `naam` varchar(256) NOT NULL,
  `datum` varchar(256) NOT NULL,
  `telefoonnummer` varchar(256) NOT NULL,
  `bedrijfsnaam` varchar(256) NOT NULL,
  `postcode` varchar(256) NOT NULL,
  `plaats` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `onderwerp` varchar(256) NOT NULL,
  `bericht` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`contact_id`, `naam`, `datum`, `telefoonnummer`, `bedrijfsnaam`, `postcode`, `plaats`, `email`, `onderwerp`, `bericht`) VALUES
(1, 'Dennis Dalmolen', '22-06-2020', '0640802405', 'Nova', '1901LN', 'Castricum', 'dennisdalmolen@gmail.com', 'Inhuren', 'xue huao piao piao'),
(4, 'dennis', '12-14-1888', '0640802405', 'ja112d1wed3 bv', '1901PP', 'breda', 'dennisdalmolen@gmail.com', '13fdwqs', '13fwqes'),
(5, 'dennis', '12-14-1888', '0640802405', 'ja112d1wed3 bv', '1901PP', 'breda', 'dennisdalmolen@gmail.com', '13fdwqs', '13fwqes'),


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleidingenwerkervaring`
--

CREATE TABLE `opleidingenwerkervaring` (
  `ow_id` int(4) NOT NULL,
  `ow_img` text NOT NULL,
  `ow_naam` varchar(256) NOT NULL,
  `ow_wat` varchar(256) NOT NULL,
  `ow_datum` varchar(256) NOT NULL,
  `ow_beschrijving` varchar(256) NOT NULL,
  `ow_locatie` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `opleidingenwerkervaring`
--

INSERT INTO `opleidingenwerkervaring` (`ow_id`, `ow_img`, `ow_naam`, `ow_wat`, `ow_datum`, `ow_beschrijving`, `ow_locatie`) VALUES
(1, '', 'Jac. P. Thijsse College', 'School', '2015-2020', 'Havo Opleiding Afgerond', 'Castricum'),
(2, '', 'ROC Nova College', 'School', '2021-Heden', 'Software Developer', 'Haarlem'),
(3, '', 'Vomar', 'Werk', '2018-Heden', 'Vulploeg Medewerker', 'Castricum');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `overmij`
--

CREATE TABLE `overmij` (
  `persoon_id` int(11) NOT NULL,
  `naam` varchar(256) NOT NULL,
  `beschrijving` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `overmij`
--

INSERT INTO `overmij` (`persoon_id`, `naam`, `beschrijving`) VALUES
(1, 'Ik ben Dennis en ik ben een', 'Mijn naam is Dennis Dalmolen, ik ben 17 jaar en ik kom uit Castricum. In het kort over mijzelf, sinds vroeger ben ik altijd al een voetbal fan geweest. Ik voetbal zelf bij Vitesse\'22 en ik steun AZ Alkmaar. Ik vind het leuk om er op uit te gaan met mijn vrienden en doe dit daarom ook zovaak wanneer het kan. Ik vind het leuk om creatief te zijn, daarom vind ik het leuk om soms te tekenen. ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `project_id` int(4) NOT NULL,
  `project_naam` varchar(256) NOT NULL,
  `project_omschrijving` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`project_id`, `project_naam`, `project_omschrijving`) VALUES
(1, 'Hangman', 'Met C# heb ik het spel Galgje geprogrammeerd in een Windows Forms App (.NET Core)'),
(2, 'Nova Fit', 'In HTML heb ik een website gemaakt voor de sportschool Nova Fit, de website is verbonden aan een PHP database.'),
(3, 'Bingo', 'Met C# heb ik het spel Bingo geprogrammeerd in een Windows Forms App (.NET Core)');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vaardigheden`
--

CREATE TABLE `vaardigheden` (
  `vaardigheid_id` int(4) NOT NULL,
  `vaardigheid_naam` varchar(256) NOT NULL,
  `vaardigheid_waarde` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `vaardigheden`
--

INSERT INTO `vaardigheden` (`vaardigheid_id`, `vaardigheid_naam`, `vaardigheid_waarde`) VALUES
(1, 'html', '90%'),
(2, 'css', '75%'),
(3, 'csharp', '60%'),
(4, 'php', '65%'),
(5, 'mysql', '50%');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexen voor tabel `opleidingenwerkervaring`
--
ALTER TABLE `opleidingenwerkervaring`
  ADD PRIMARY KEY (`ow_id`);

--
-- Indexen voor tabel `overmij`
--
ALTER TABLE `overmij`
  ADD PRIMARY KEY (`persoon_id`);

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexen voor tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  ADD PRIMARY KEY (`vaardigheid_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT voor een tabel `opleidingenwerkervaring`
--
ALTER TABLE `opleidingenwerkervaring`
  MODIFY `ow_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `overmij`
--
ALTER TABLE `overmij`
  MODIFY `persoon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `project_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  MODIFY `vaardigheid_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
