-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 11, 2023 alle 19:50
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `autorescriveopera`
--

CREATE TABLE `autorescriveopera` (
  `autore` int(11) NOT NULL,
  `opera` int(11) NOT NULL,
  `disegni` tinyint(1) DEFAULT 1,
  `storia` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `autorescriveopera`
--

INSERT INTO `autorescriveopera` (`autore`, `opera`, `disegni`, `storia`) VALUES
(1, 39, 1, 1),
(2, 6, 1, 1),
(2, 19, 1, 1),
(3, 3, 1, 1),
(4, 7, 1, 1),
(4, 8, 1, 1),
(5, 1, 1, 1),
(5, 2, 1, 1),
(5, 9, 1, 1),
(5, 57, 1, 1),
(5, 88, 1, 1),
(5, 89, 1, 1),
(6, 18, 1, 1),
(6, 33, 1, 1),
(6, 49, 1, 1),
(6, 78, 1, 1),
(6, 79, 1, 1),
(6, 87, 1, 1),
(7, 29, 1, 1),
(7, 74, 1, 1),
(8, 77, 1, 1),
(8, 80, 1, 1),
(9, 11, 1, 1),
(9, 16, 1, 1),
(10, 15, 1, 1),
(10, 24, 1, 1),
(11, 88, 1, 1),
(12, 17, 1, 1),
(12, 90, 1, 1),
(14, 28, 1, 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `autorescriveopera`
--
ALTER TABLE `autorescriveopera`
  ADD PRIMARY KEY (`autore`,`opera`),
  ADD KEY `opera` (`opera`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `autorescriveopera`
--
ALTER TABLE `autorescriveopera`
  ADD CONSTRAINT `autorescriveopera_ibfk_1` FOREIGN KEY (`autore`) REFERENCES `autore` (`id`),
  ADD CONSTRAINT `autorescriveopera_ibfk_2` FOREIGN KEY (`opera`) REFERENCES `opera` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
