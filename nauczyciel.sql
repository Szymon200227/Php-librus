-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Maj 2020, 15:08
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `nauczyciel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rozwiazania`
--

CREATE TABLE `rozwiazania` (
  `id` int(11) NOT NULL,
  `klasa` varchar(4) COLLATE utf8_polish_ci NOT NULL,
  `imie_nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_polish_ci NOT NULL,
  `rozwiazanie` text COLLATE utf8_polish_ci NOT NULL,
  `czas_oddania` datetime NOT NULL,
  `uwagi_n` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `adresip` varchar(10) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `id` int(11) NOT NULL,
  `klasa` varchar(4) COLLATE utf8_polish_ci NOT NULL,
  `temat` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `tresc` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `data_i_godzina` datetime NOT NULL,
  `data_i_godzina_oddania` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rozwiazania`
--
ALTER TABLE `rozwiazania`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `rozwiazania`
--
ALTER TABLE `rozwiazania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `zadania`
--
ALTER TABLE `zadania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
