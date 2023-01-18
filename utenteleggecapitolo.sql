-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 18, 2023 alle 20:06
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
-- Struttura della tabella `utenteleggecapitolo`
--

CREATE TABLE `utenteleggecapitolo` (
  `utente` varchar(255) NOT NULL,
  `capitolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenteleggecapitolo`
--
ALTER TABLE `utenteleggecapitolo`
  ADD PRIMARY KEY (`utente`,`capitolo`),
  ADD KEY `capitolo` (`capitolo`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `utenteleggecapitolo`
--
ALTER TABLE `utenteleggecapitolo`
  ADD CONSTRAINT `utenteleggecapitolo_ibfk_1` FOREIGN KEY (`utente`) REFERENCES `utente` (`email`),
  ADD CONSTRAINT `utenteleggecapitolo_ibfk_2` FOREIGN KEY (`capitolo`) REFERENCES `capitolo` (`numeroCapitolo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
