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
  `mail` varchar(32) COLLATE utf8_bin NOT NULL,
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `haslo` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `loginhaslo`
--

INSERT INTO `loginhaslo` (`mail`, `login`, `haslo`) VALUES
('daforap444@sumwan.com', '84ff5d9d6a008c8be354634cba3b5435', 'f7bc67b188bbd41007a18e0becbdfd3fcef7a507dc64e066afd158d226f45151'),
('', 'e3b0c44298fc1c149afbf4c8996fb924', 'ace460ecd53998a95df4c79db658d831df11b302ab431d3bdbe5b9452a25bff7'),
('heter@gmail.com', 'a950bea86bd3586fe8766f69b937c096', '316f34bbe72b96fedb29d957697e0164fcf3ad5364749d5d513962b6ece672d8'),
('oumanyliadvlntkdgv@mhzayt.online', '2a1a7e7296d7a8ea9e3ddf13819043f9', '422dea1ebe78da4acc4abd92b5dceb39380827f96cf18bf7abe92619710b080c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
