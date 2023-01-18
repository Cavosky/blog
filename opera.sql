-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 11, 2023 alle 19:51
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
-- Struttura della tabella `opera`
--

CREATE TABLE `opera` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `anno_inizio` int(11) NOT NULL,
  `anno_fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `opera`
--

INSERT INTO `opera` (`id`, `titolo`, `anno_inizio`, `anno_fine`) VALUES
(1, 'Monster', 1995, 2001),
(2, '20th Century Boys', 1999, 2006),
(3, 'A Couple of Cuckoos', 2020, NULL),
(4, 'A Sign of Affection', 2019, NULL),
(5, 'All You Need Is Kill', 2014, 2014),
(6, 'Ariadne in the Blue Sky', 2017, NULL),
(7, 'Arrivare a Te', 2006, 2018),
(8, 'Arrivare a Te-La Persona del Destino', 2019, 2022),
(9, 'Asadora!', 2018, NULL),
(10, 'Black Clover', 2015, NULL),
(11, 'Bleach', 2001, 2016),
(12, 'Blue Box', 2021, NULL),
(13, 'Boruto', 2016, NULL),
(14, 'Bungo Stray Dogs', 2012, NULL),
(15, 'Buonanotte,PunPun', 2007, 2013),
(16, 'Burn the Witch', 2020, NULL),
(17, 'Call of the Night', 2019, NULL),
(18, 'Chainsaw Man', 2018, NULL),
(19, 'Claymore', 2001, 2014),
(20, "Come Sopravvivere nell 'era Sengoku", 2017, NULL),
(21, 'Cosi Carina-Fly me to the moon', 2018, NULL),
(22, 'Dandadan', 2021, NULL),
(23, "Darwin 's Game", 2012, NULL),
(24, "Dead Dead Demon's Dededededestruction", 2014, 2022),
(25, 'Demon Slave', 2019, NULL),
(26, 'Dorohedoro', 2001, 2018),
(27, 'Dr. Stone', 2017, 2022),
(28, 'Fairy Tail', 2006, 2017),
(29, 'Fire Force', 2015, 2022),
(30, 'Frieren-oltre la fine del viaggio', 2020, NULL),
(31, 'Ghost Girl', 2020, NULL),
(32, 'Gleipnir', 2015, NULL),
(33, 'Goodbye, Eri', 2022, 2022),
(34, 'Grand Blue', 2014, NULL),
(35, 'Haganai-I have few friends', 2010, 2021),
(36, "Hana l'Inacessibile", 2019, NULL),
(37, 'Heavenly Delusion', 2018, NULL),
(38, 'I am a Hero', 2009, 2017),
(39, 'Il cane che guarda le stelle', 2008, 2008),
(40, 'Insomniacs After School', 2019, NULL),
(41, 'Jujutsu Kaisen-Sorcery Fight', 2018, NULL),
(42, 'Kaguya-sama:Love is War', 2015, 2022),
(43, 'Kaiju No.8', 2020, NULL),
(44, 'Kamisama Kiss', 2008, 2016),
(45, 'Kenshin, Samurai Vagabondo', 1994, 1999),
(46, "Komi can't communicate", 2018, NULL),
(47, 'Land of the Lustrous', 2012, NULL),
(48, 'Last Game', 2011, 2016),
(49, 'Look Back', 2021, 2021),
(50, 'Love After World Domination', 2019, 2022),
(51, 'Made in Abyss', 2012, NULL),
(52, 'Mermaid Prince', 2015, 2016),
(53, 'Mieruko-chan', 2018, NULL),
(54, 'Mission:Yozakura Family', 2019, NULL),
(55, 'Moonlight Invader', 2018, 2020),
(56, 'Moriarty the Patriot', 2016, NULL),
(57, 'Mujirushi- il segno dei sogni', 2017, 2018),
(58, 'Museum', 2013, 2014),
(59, 'My Charms Are Waisted On Kuroiwa Medaka', 2021, NULL),
(60, 'My Dress-up Darling- Bisque Doll', 2018, NULL),
(61, 'Nanaco Robin', 2008, 2009),
(62, 'Naruto', 1999, 2014),
(63, 'Non mi stuzzicare,Takagi', 2013, NULL),
(64, 'Non tormentarmi,Nagatoro', 2017, NULL),
(65, 'One-Punch Man', 2012, NULL),
(66, 'Oshi no Ko-My star', 2020, NULL),
(67, 'Platinum End', 2015, 2021),
(68, 'Prison School', 2011, 2017),
(69, 'Sakamoto Days', 2020, NULL),
(70, 'Sankarea', 2009, 2014),
(71, 'School Live', 2012, 2019),
(72, 'Shadow House', 2018, NULL),
(73, 'Shangri-La Frontier', 2020, NULL),
(74, 'Soul Eater', 2003, 2013),
(75, 'Spice And Wolf', 2007, 2017),
(76, 'Spy X Family', 2019, NULL),
(77, 'Squalificati- Ranger Reject', 2021, NULL),
(78, 'Tatsuki Fujimoto Short Stories 17-21', 2014, 2017),
(79, 'Tatsuki Fujimoto Short Stories 22-26', 2018, 2018),
(80, 'The Quintessential Quintuplets', 2017, 2020),
(81, 'Tokyo Ghoul', 2011, 2014),
(82, 'Tokyo Ghoul:re', 2014, 2018),
(83, 'Tsukimichi moonlit fantasy', 2015, NULL),
(84, 'Undead Unluck', 2020, NULL),
(85, 'Witch Watch', 2021, NULL),
(86, 'ZOMBIE 100', 2018, NULL),
(87, 'Fire Punch', 2016, 2018),
(88, 'Pluto', 2003, 2009),
(89, 'Yawara!', 1986, 1993),
(90, 'Dagashi Kashi', 2014, 2018);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `opera`
--
ALTER TABLE `opera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `opera`
--
ALTER TABLE `opera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
