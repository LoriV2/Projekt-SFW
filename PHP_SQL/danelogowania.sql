-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Lis 2021, 18:38
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `danelogowania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `loginhaslo`
--

CREATE TABLE `loginhaslo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `płeć` varchar(32) COLLATE utf8_bin NOT NULL,
  `mail` varchar(32) COLLATE utf8_bin NOT NULL,
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `haslo` varchar(64) COLLATE utf8_bin NOT NULL,
  `userimie` varchar(25) COLLATE utf8_bin NOT NULL,
  `Imię` varchar(25) COLLATE utf8_bin NOT NULL,
  `Nazwisko` varchar(25) COLLATE utf8_bin NOT NULL,
  `liczbalogowan` INT COLLATE utf8_bin NOT NULL,
    `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `loginhaslo`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
