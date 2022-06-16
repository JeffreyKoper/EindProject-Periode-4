-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 jun 2022 om 10:35
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
-- Database: `cv_database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `id` int(11) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`id`, `titel`, `beschrijving`) VALUES
(1, 'LINGO', 'het programmeren van een populair tv game show met de naam LINGO.'),
(2, 'Verkeersplein', 'In de eerste periode moest ik in een groep aan een verkeersplein werken. dit verkeersplein had automatische stoplichten nodig en rijdende auto\'s. Na heel wat programmeren en testen was het uit eindelijk gelukt.'),
(3, 'Argentijns restaurant', 'In periode 3 moest ik een website maken voor een Argentijns restaurant. deze website had reservering, bestelling, een menukaart, en een inlog-interface. In periode 3 kreeg ik dit niet af, maar in midden periode 4 ging ik er verder aan werken en kwam het wel af!'),
(4, '4 op een rij', 'Het spel 4 op een rij gemaakt in C-sharp. met gebruik van kleuren.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reacties`
--

CREATE TABLE `reacties` (
  `id` int(11) NOT NULL,
  `vestegingsplaats` varchar(100) NOT NULL,
  `bedrijfsnaam` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `telefoonnummer` varchar(100) NOT NULL,
  `datum` date NOT NULL,
  `reactie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reacties`
--

INSERT INTO `reacties` (`id`, `vestegingsplaats`, `bedrijfsnaam`, `adres`, `postcode`, `telefoonnummer`, `datum`, `reactie`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', '2022-06-14', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vaardigheden`
--

CREATE TABLE `vaardigheden` (
  `id` int(11) NOT NULL,
  `vak` varchar(100) NOT NULL,
  `percentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `vaardigheden`
--

INSERT INTO `vaardigheden` (`id`, `vak`, `percentage`) VALUES
(1, 'HTML', '90%'),
(2, 'CSS', '75%'),
(3, 'C-sharp', '85%'),
(4, 'Python', '65%'),
(5, 'PHP', '70%'),
(6, 'MySQL', '70%');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reacties`
--
ALTER TABLE `reacties`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `reacties`
--
ALTER TABLE `reacties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
