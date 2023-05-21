-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 21, 2023 alle 20:26
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
-- Struttura della tabella `articolo`
--

CREATE TABLE `articolo` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`id`, `titolo`, `contenuto`, `img`) VALUES
(11, 'Il potere dei fumetti: come la narrazione visiva influenza la cultura popolare', 'I fumetti hanno una lunga e ricca storia di intrattenimento e narrazione visiva che ha influenzato la cultura popolare in modi sorprendenti. Da Superman e Spider-Man a Batman e Wonder Woman, i personaggi dei fumetti sono diventati icone culturali e hanno ispirato innumerevoli film, programmi televisivi e altri media.Ma il potere dei fumetti non si limita ai personaggi famosi. I fumetti sono stati utilizzati per esplorare questioni sociali e politiche, creando storie che hanno sfidato le norme sociali e portando avanti il discorso su temi come la diversità, l uguaglianza e i diritti umani. Ad esempio, la serie Maus di Art Spiegelman racconta la storia di un sopravvissuto all Olocausto e della sua famiglia attraverso i personaggi di topi e gatti, mentre la serie Y: The Last Man di Brian K. Vaughan immagina un mondo in cui tutti gli uomini sono morti, lasciando le donne ad affrontare le conseguenze.I fumetti sono anche stati utilizzati per introdurre nuove generazioni alla letteratura classica, attraverso adattamenti visivi di classici come I viaggi di Gulliver di Jonathan Swift e La Divina Commedia di Dante Alighieri. I fumetti possono anche essere utilizzati per insegnare agli studenti concetti scientifici complessi, come la fisica e la biologia, attraverso storie coinvolgenti e ben illustrate.Oltre a tutto ciò, i fumetti sono un importante forma di arte visiva, che ha ispirato artisti di ogni genere. I disegni dei fumetti sono stati utilizzati in moda, design e grafica pubblicitaria. Il formato dei fumetti ha anche influenzato la produzione di film e televisione, con il montaggio delle scene che spesso richiama il ritmo di una pagina di fumetti.In definitiva, i fumetti rappresentano una forma di intrattenimento e di narrazione visiva che ha influenzato la cultura popolare in molti modi diversi. La loro influenza si estende ben oltre il mondo dei fumetti, raggiungendo ogni aspetto della cultura popolare.', 44),
(23, 'Chainsaw Man: un\'avventura folle e sanguinolenta', '<a href=\'serie.php?id=23\'>Chainsaw Man</a>è un manga scritto e disegnato da Tatsuki Fujimoto, che ha debuttato nel 2018 sulla rivista Weekly Shonen Jump. La serie segue le vicende di Denji, un giovane che si trasforma in un essere mezzo umano e mezzo motosega dopo aver sconfitto un demone.La trama di Chainsaw Man è folle e sanguinolenta, piena di azione frenetica, colpi di scena e personaggi bizzarri. Tuttavia, al di sotto della superficie della serie c\'è una profonda riflessione sulla natura dell\'essere umano e sulla sua relazione con la morte e la sofferenza.Denji, il protagonista della serie, è un personaggio complesso che si trova spesso in conflitto tra la sua umanità e la sua natura di demone. Mentre combatte per sopravvivere in un mondo popolato da demoni, impara lentamente a comprendere il significato della vita e della morte.L\'arte di Fujimoto è straordinaria, con disegni dettagliati e pieni di azione che catturano perfettamente lo spirito della serie. Chainsaw Man è uno dei manga più interessanti degli ultimi anni, che sicuramente soddisferà i fan degli shonen manga più tradizionali, ma che allo stesso tempo offre una visione fresca e originale del genere.', 6),
(24, '20th Century Boys: un\'epica storia di amicizia e salvezza', '<a href=\'serie.php?id=2\'>20th Century Boys</a> è un manga scritto e disegnato da Naoki Urasawa, che ha debuttato nel 1999 sulla rivista Big Comic Spirits. La serie segue la vita di Kenji Endo e dei suoi amici d\'infanzia, che devono affrontare una cospirazione globale che minaccia la distruzione del mondo.La trama di 20th Century Boys è complessa e intrigante, piena di colpi di scena e suspense. Urasawa è un maestro nel creare personaggi realistici e convincenti, che affrontano problemi reali e difficili, ma che riescono a trovare la forza e il coraggio per superarli.La storia si svolge in due periodi differenti, il presente e il futuro, in cui i protagonisti devono unire le forze per sconfiggere il misterioso ', 43),
(25, 'Berserk: un\'opera oscura e brutale che esplora la natura umana', 'Berserk è un manga scritto e disegnato da Kentaro Miura, che ha debuttato nel 1989 sulla rivista Young Animal. La serie segue la vita di Guts, un mercenario solitario che cerca vendetta contro il suo ex-compagno d\'armi, Griffith.La trama di Berserk è oscura e brutale, piena di violenza e di scene disturbanti. Tuttavia, al di sotto della superficie della serie c\'è una profonda riflessione sulla natura umana e sulla sua capacità di affrontare la sofferenza e il dolore.Guts è un personaggio complesso, che lotta contro i suoi demoni interiori e cerca di trovare un senso nella vita, nonostante il suo passato tragico e doloroso. La sua relazione con Griffith è altrettanto complessa, poiché i due personaggi hanno legami profondi e complicati che li legano indissolubilmente.L\'arte di Miura è straordinaria, con disegni dettagliati e intensi che catturano perfettamente lo spirito della serie. Berserk è un\'opera che esplora la natura umana in modo crudo e sincero, mostrando le sue debolezze e le sue forze, senza mai nascondere la brutalità della realtà.In conclusione, Berserk è un manga che merita di essere letto da coloro che cercano storie profonde e coinvolgenti, che non hanno paura di affrontare temi difficili e complessi. Nonostante la sua natura oscura e brutale, Berserk è un\'opera che lascia un segno indelebile nella mente del lettore, grazie alla sua profondità e alla sua intensità.', 45);

-- --------------------------------------------------------

--
-- Struttura della tabella `autore`
--

CREATE TABLE `autore` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `nazionalita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `autore`
--

INSERT INTO `autore` (`id`, `nome`, `cognome`, `nazionalita`) VALUES
(1, 'Takashi', 'Murakami', 'JPN'),
(2, 'Norihiro', 'Yagi', 'JPN'),
(3, 'Miki', 'Yoshikawa', 'JPN'),
(4, 'Karuho', 'Shiina', 'JPN'),
(5, 'Naoki', 'Urasawa', 'JPN'),
(6, 'Tatsuki', 'Fujimoto', 'JPN'),
(7, 'Atsushi', 'Ohkubo', 'JPN'),
(8, 'Negi', 'Haruba', 'JPN'),
(9, 'Tite', 'Okubo', 'JPN'),
(10, 'Inio', 'Asano', 'JPN'),
(11, 'Osamu', 'Tezuka', 'JPN'),
(12, 'Kotoyama', '', 'JPN'),
(13, 'Yuuki', 'Tabata', 'JPN'),
(14, 'Hiro', 'Mashima', 'JPN'),
(15, 'Yuki', 'Suetsugu', 'JPN');

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

-- --------------------------------------------------------

--
-- Struttura della tabella `capitolo`
--

CREATE TABLE `capitolo` (
  `numeroCapitolo` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `capitolo`
--

INSERT INTO `capitolo` (`numeroCapitolo`, `titolo`) VALUES
(1, 'Poesia 1'),
(2, 'Poesia 2'),
(3, 'Poesia 3'),
(4, 'Poesia 4'),
(5, 'Poesia 5');

-- --------------------------------------------------------

--
-- Struttura della tabella `commenti`
--

CREATE TABLE `commenti` (
  `utente` varchar(255) NOT NULL,
  `opera` int(11) NOT NULL,
  `testo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `commentiarticoli`
--

CREATE TABLE `commentiarticoli` (
  `id` int(11) NOT NULL,
  `utente` varchar(255) NOT NULL,
  `articolo` int(11) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `risponde` int(11) DEFAULT NULL,
  `pubblicazione` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `commentiarticoli`
--

INSERT INTO `commentiarticoli` (`id`, `utente`, `articolo`, `contenuto`, `risponde`, `pubblicazione`) VALUES
(62, 'lorenzocavagnaro14@gmail.com', 25, 'aa', NULL, '2023-05-21'),
(63, 'lorenzocavagnaro14@gmail.com', 25, 'aa', NULL, '2023-05-21');

-- --------------------------------------------------------

--
-- Struttura della tabella `edizione`
--

CREATE TABLE `edizione` (
  `id` int(11) NOT NULL,
  `opera` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `edizione`
--

INSERT INTO `edizione` (`id`, `opera`, `nome`) VALUES
(1, 2, ''),
(2, 2, 'Ultimate Deluxe Edition'),
(3, 91, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `img`
--

INSERT INTO `img` (`id`, `path`) VALUES
(0, 'logo.png'),
(1, 'default.png'),
(2, 'monster-cover.jpg'),
(3, 'prova.jpg'),
(6, 'chainsawman-cover.jpg'),
(7, 'ilcanecheguardalestelle-cover.jpg'),
(8, 'topolino.jpeg'),
(9, 'img-6448bf44493111.08214518.jpeg'),
(10, 'img-6448ee96e55e67.92386767.png'),
(11, 'img-6452253d9ca6e7.08125778.png'),
(17, 'img-646a14072f13b3.95029894.gif'),
(18, 'img-646a14390af267.25838094.jpeg'),
(19, 'img-646a14d34d2b78.36482652.jpeg'),
(20, 'img-646a15a5c6a299.89893448.jpeg'),
(21, 'img-646a15c2cda9d5.19432101.jpeg'),
(22, 'img-646a15d6a23b54.24362348.jpeg'),
(23, 'img-646a1647cb39c5.70375183.jpeg'),
(24, 'img-646a164fe3abe4.53161805.jpeg'),
(25, 'img-646a187a740ce9.59544806.jpeg'),
(26, 'img-646a1895dc1eb0.74232443.jpeg'),
(27, 'img-646a18b33c4ff1.28555123.jpeg'),
(28, 'img-646a18b7598cb7.83576373.jpeg'),
(29, 'img-646a201108de34.45923325.jpeg'),
(30, 'img-646a201aeda3f8.12078454.jpeg'),
(31, 'img-646a20f8934a76.14067700.jpeg'),
(32, 'img-646a2148e28a43.16899401.jpeg'),
(33, 'img-646a216d245e37.84717117.jpeg'),
(34, 'img-646a218a9fc423.76844628.png'),
(35, 'img-646a2214f17837.95432806.png'),
(36, 'img-646a2236dc1608.19704926.png'),
(37, 'img-646a2afb885892.41202366.jpeg'),
(38, 'img-646a2bbfb670e3.67400176.jpeg'),
(39, 'img-646a2bda00e5b6.08362287.jpeg'),
(40, 'img-646a2d1f0de7c2.33541510.jpeg'),
(41, 'img-646a2d216d5b55.41373823.jpeg'),
(42, 'img-646a47380be457.26805096.jpeg'),
(43, 'img-646a4749dc5bc2.45584255.jpeg'),
(44, 'img-646a48f7422902.77708863.jpeg'),
(45, 'img-646a49443bd1e6.63915883.png'),
(46, 'img-646a499e0941c4.89588922.webp'),
(47, 'img-646a4a78a6edb7.74049841.jpeg'),
(48, 'img-646a4aba1d70b3.89059740.jpeg'),
(49, 'img-646a4b1d314688.65855786.jpeg'),
(50, 'img-646a4bec128182.95244445.jpeg'),
(51, 'img-646a4c45ed6b87.64577648.jpeg'),
(52, 'img-646a4c6cafbf71.15129424.jpeg'),
(53, 'img-646a607ce667b5.39230880.jpeg'),
(54, 'img-646a60a1e6d566.84586732.jpeg'),
(55, 'img-646a60ca1fa703.85375609.jpeg'),
(56, 'img-646a60d0986c40.13174294.jpeg'),
(57, 'img-646a60f42f7ff7.03538383.jpeg'),
(58, 'img-646a6129acbb93.02762906.jpeg'),
(59, 'img-646a61327c9dc4.54609010.jpeg'),
(60, 'img-646a616879b182.97314393.jpeg'),
(61, 'img-646a623a9970a2.12796778.jpeg');

-- --------------------------------------------------------

--
-- Struttura della tabella `nazionalita`
--

CREATE TABLE `nazionalita` (
  `nome` varchar(255) NOT NULL,
  `nazione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `nazionalita`
--

INSERT INTO `nazionalita` (`nome`, `nazione`) VALUES
('ABW', 'Aruba'),
('AFG', 'Afghanistan'),
('AGO', 'Angola'),
('AIA', 'Anguilla'),
('ALA', 'Åland Islands'),
('ALB', 'Albania'),
('AND', 'Andorra'),
('ARE', 'United Arab Emirates (the)'),
('ARG', 'Argentina'),
('ARM', 'Armenia'),
('ASM', 'American Samoa'),
('ATA', 'Antarctica'),
('ATF', 'French Southern Territories (the)'),
('ATG', 'Antigua and Barbuda'),
('AUS', 'Australia'),
('AUT', 'Austria'),
('AZE', 'Azerbaijan'),
('BDI', 'Burundi'),
('BEL', 'Belgium'),
('BEN', 'Benin'),
('BES', 'Bonaire, Sint Eustatius and Saba'),
('BFA', 'Burkina Faso'),
('BGD', 'Bangladesh'),
('BGR', 'Bulgaria'),
('BHR', 'Bahrain'),
('BHS', 'Bahamas (the)'),
('BIH', 'Bosnia and Herzegovina'),
('BLM', 'Saint Barthélemy'),
('BLR', 'Belarus'),
('BLZ', 'Belize'),
('BMU', 'Bermuda'),
('BOL', 'Bolivia (Plurinational State of)'),
('BRA', 'Brazil'),
('BRB', 'Barbados'),
('BRN', 'Brunei Darussalam'),
('BTN', 'Bhutan'),
('BVT', 'Bouvet Island'),
('BWA', 'Botswana'),
('CAF', 'Central African Republic (the)'),
('CAN', 'Canada'),
('CCK', 'Cocos (Keeling) Islands (the)'),
('CHE', 'Switzerland'),
('CHL', 'Chile'),
('CHN', 'China'),
('CIV', 'Côte d\'Ivoire'),
('CMR', 'Cameroon'),
('COD', 'Congo (the Democratic Republic of the)'),
('COG', 'Congo (the)'),
('COK', 'Cook Islands (the)'),
('COL', 'Colombia'),
('COM', 'Comoros (the)'),
('CPV', 'Cabo Verde'),
('CRI', 'Costa Rica'),
('CUB', 'Cuba'),
('CUW', 'Curaçao'),
('CXR', 'Christmas Island'),
('CYM', 'Cayman Islands (the)'),
('CYP', 'Cyprus'),
('CZE', 'Czechia'),
('DEU', 'Germany'),
('DJI', 'Djibouti'),
('DMA', 'Dominica'),
('DNK', 'Denmark'),
('DOM', 'Dominican Republic (the)'),
('DZA', 'Algeria'),
('ECU', 'Ecuador'),
('EGY', 'Egypt'),
('ERI', 'Eritrea'),
('ESH', 'Western Sahara'),
('ESP', 'Spain'),
('EST', 'Estonia'),
('ETH', 'Ethiopia'),
('FIN', 'Finland'),
('FJI', 'Fiji'),
('FLK', 'Falkland Islands (the) [Malvinas]'),
('FRA', 'France'),
('FRO', 'Faroe Islands (the)'),
('FSM', 'Micronesia (Federated States of)'),
('GAB', 'Gabon'),
('GBR', 'United Kingdom of Great Britain and Northern Ireland (the)'),
('GEO', 'Georgia'),
('GGY', 'Guernsey'),
('GHA', 'Ghana'),
('GIB', 'Gibraltar'),
('GIN', 'Guinea'),
('GLP', 'Guadeloupe'),
('GMB', 'Gambia (the)'),
('GNB', 'Guinea-Bissau'),
('GNQ', 'Equatorial Guinea'),
('GRC', 'Greece'),
('GRD', 'Grenada'),
('GRL', 'Greenland'),
('GTM', 'Guatemala'),
('GUF', 'French Guiana'),
('GUM', 'Guam'),
('GUY', 'Guyana'),
('HKG', 'Hong Kong'),
('HMD', 'Heard Island and McDonald Islands'),
('HND', 'Honduras'),
('HRV', 'Croatia'),
('HTI', 'Haiti'),
('HUN', 'Hungary'),
('IDN', 'Indonesia'),
('IMN', 'Isle of Man'),
('IND', 'India'),
('IOT', 'British Indian Ocean Territory (the)'),
('IRL', 'Ireland'),
('IRN', 'Iran (Islamic Republic of)'),
('IRQ', 'Iraq'),
('ISL', 'Iceland'),
('ISR', 'Israel'),
('ITA', 'Italy'),
('JAM', 'Jamaica'),
('JEY', 'Jersey'),
('JOR', 'Jordan'),
('JPN', 'Japan'),
('KAZ', 'Kazakhstan'),
('KEN', 'Kenya'),
('KGZ', 'Kyrgyzstan'),
('KHM', 'Cambodia'),
('KIR', 'Kiribati'),
('KNA', 'Saint Kitts and Nevis'),
('KOR', 'Korea (the Republic of)'),
('KWT', 'Kuwait'),
('LAO', 'Lao People\'s Democratic Republic (the)'),
('LBN', 'Lebanon'),
('LBR', 'Liberia'),
('LBY', 'Libya'),
('LCA', 'Saint Lucia'),
('LIE', 'Liechtenstein'),
('LKA', 'Sri Lanka'),
('LSO', 'Lesotho'),
('LTU', 'Lithuania'),
('LUX', 'Luxembourg'),
('LVA', 'Latvia'),
('MAC', 'Macao'),
('MAF', 'Saint Martin (French part)'),
('MAR', 'Morocco'),
('MCO', 'Monaco'),
('MDA', 'Moldova (the Republic of)'),
('MDG', 'Madagascar'),
('MDV', 'Maldives'),
('MEX', 'Mexico'),
('MHL', 'Marshall Islands (the)'),
('MKD', 'Republic of North Macedonia'),
('MLI', 'Mali'),
('MLT', 'Malta'),
('MMR', 'Myanmar'),
('MNE', 'Montenegro'),
('MNG', 'Mongolia'),
('MNP', 'Northern Mariana Islands (the)'),
('MOZ', 'Mozambique'),
('MRT', 'Mauritania'),
('MSR', 'Montserrat'),
('MTQ', 'Martinique'),
('MUS', 'Mauritius'),
('MWI', 'Malawi'),
('MYS', 'Malaysia'),
('MYT', 'Mayotte'),
('NAM', 'Namibia'),
('NCL', 'New Caledonia'),
('NER', 'Niger (the)'),
('NFK', 'Norfolk Island'),
('NGA', 'Nigeria'),
('NIC', 'Nicaragua'),
('NIU', 'Niue'),
('NLD', 'Netherlands (the)'),
('NOR', 'Norway'),
('NPL', 'Nepal'),
('NRU', 'Nauru'),
('NZL', 'New Zealand'),
('OMN', 'Oman'),
('PAK', 'Pakistan'),
('PAN', 'Panama'),
('PCN', 'Pitcairn'),
('PER', 'Peru'),
('PHL', 'Philippines (the)'),
('PLW', 'Palau'),
('PNG', 'Papua New Guinea'),
('POL', 'Poland'),
('PRI', 'Puerto Rico'),
('PRK', 'Korea (the Democratic People\'s Republic of)'),
('PRT', 'Portugal'),
('PRY', 'Paraguay'),
('PSE', 'Palestine, State of'),
('PYF', 'French Polynesia'),
('QAT', 'Qatar'),
('REU', 'Réunion'),
('ROU', 'Romania'),
('RUS', 'Russian Federation (the)'),
('RWA', 'Rwanda'),
('SAU', 'Saudi Arabia'),
('SDN', 'Sudan (the)'),
('SEN', 'Senegal'),
('SGP', 'Singapore'),
('SGS', 'South Georgia and the South Sandwich Islands'),
('SHN', 'Saint Helena, Ascension and Tristan da Cunha'),
('SJM', 'Svalbard and Jan Mayen'),
('SLB', 'Solomon Islands'),
('SLE', 'Sierra Leone'),
('SLV', 'El Salvador'),
('SMR', 'San Marino'),
('SOM', 'Somalia'),
('SPM', 'Saint Pierre and Miquelon'),
('SRB', 'Serbia'),
('SSD', 'South Sudan'),
('STP', 'Sao Tome and Principe'),
('SUR', 'Suriname'),
('SVK', 'Slovakia'),
('SVN', 'Slovenia'),
('SWE', 'Sweden'),
('SWZ', 'Eswatini'),
('SXM', 'Sint Maarten (Dutch part)'),
('SYC', 'Seychelles'),
('SYR', 'Syrian Arab Republic'),
('TCA', 'Turks and Caicos Islands (the)'),
('TCD', 'Chad'),
('TGO', 'Togo'),
('THA', 'Thailand'),
('TJK', 'Tajikistan'),
('TKL', 'Tokelau'),
('TKM', 'Turkmenistan'),
('TLS', 'Timor-Leste'),
('TON', 'Tonga'),
('TTO', 'Trinidad and Tobago'),
('TUN', 'Tunisia'),
('TUR', 'Turkey'),
('TUV', 'Tuvalu'),
('TWN', 'Taiwan (Province of China)'),
('TZA', 'Tanzania, United Republic of'),
('UGA', 'Uganda'),
('UKR', 'Ukraine'),
('UMI', 'United States Minor Outlying Islands (the)'),
('URY', 'Uruguay'),
('USA', 'United States of America (the)'),
('UZB', 'Uzbekistan'),
('VAT', 'Holy See (the)'),
('VCT', 'Saint Vincent and the Grenadines'),
('VEN', 'Venezuela (Bolivarian Republic of)'),
('VGB', 'Virgin Islands (British)'),
('VIR', 'Virgin Islands (U.S.)'),
('VNM', 'Viet Nam'),
('VUT', 'Vanuatu'),
('WLF', 'Wallis and Futuna'),
('WSM', 'Samoa'),
('YEM', 'Yemen'),
('ZAF', 'South Africa'),
('ZMB', 'Zambia'),
('ZWE', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Struttura della tabella `opera`
--

CREATE TABLE `opera` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `anno_inizio` int(11) NOT NULL,
  `anno_fine` int(11) DEFAULT NULL,
  `img` int(11) NOT NULL DEFAULT 1,
  `trama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `opera`
--

INSERT INTO `opera` (`id`, `titolo`, `anno_inizio`, `anno_fine`, `img`, `trama`) VALUES
(1, 'Monster', 1995, 2001, 2, NULL),
(2, '20th Century Boys', 1999, 2006, 19, ' Un robot, un'),
(3, 'A Couple of Cuckoos', 2020, NULL, 0, NULL),
(4, 'A Sign of Affection', 2019, NULL, 0, NULL),
(5, 'All You Need Is Kill', 2014, 2014, 0, NULL),
(6, 'Ariadne in the Blue Sky', 2017, NULL, 21, ''),
(7, 'Arrivare a Te', 2006, 2018, 0, NULL),
(8, 'Arrivare a Te-La Persona del Destino', 2019, 2022, 0, NULL),
(9, 'Asadora!', 2018, NULL, 20, '\'\''),
(10, 'Black Clover', 2015, NULL, 0, NULL),
(11, 'Bleach', 2001, 2016, 0, NULL),
(12, 'Blue Box', 2021, NULL, 0, NULL),
(13, 'Boruto', 2016, NULL, 0, NULL),
(14, 'Bungo Stray Dogs', 2012, NULL, 0, NULL),
(15, 'Buonanotte,PunPun', 2007, 2013, 0, NULL),
(16, 'Burn the Witch', 2020, NULL, 22, ''),
(17, 'Call of the Night', 2019, NULL, 25, '\'\''),
(18, 'Chainsaw Man', 2018, NULL, 6, '\'Chainsaw goes nrrrrrrrr\'a'),
(19, 'Claymore', 2001, 2014, 61, '\'\''),
(20, 'Come Sopravvivere nell\'era Sengoku', 2017, NULL, 0, NULL),
(21, 'Cosi Carina-Fly me to the moon', 2018, NULL, 0, NULL),
(22, 'Dandadan', 2021, NULL, 0, NULL),
(23, 'Darwin\'s Game', 2012, NULL, 0, NULL),
(24, 'Dead Dead Demon\'s Dededededestruction', 2014, 2022, 0, NULL),
(25, 'Demon Slave', 2019, NULL, 0, NULL),
(26, 'Dorohedoro', 2001, 2018, 26, '\'\''),
(27, 'Dr. Stone', 2017, 2022, 48, '\'\'\'\''),
(28, 'Fairy Tail', 2006, 2017, 0, NULL),
(29, 'Fire Force', 2015, 2022, 47, '\'\'\'\''),
(30, 'Frieren-oltre la fine del viaggio', 2020, NULL, 0, NULL),
(31, 'Ghost Girl', 2020, NULL, 0, NULL),
(32, 'Gleipnir', 2015, NULL, 0, NULL),
(33, 'Goodbye, Eri', 2022, 2022, 50, '\'\''),
(34, 'Grand Blue', 2014, NULL, 0, NULL),
(35, 'Haganai-I have few friends', 2010, 2021, 0, NULL),
(36, 'Hana l\'Inacessibile', 2019, NULL, 0, NULL),
(37, 'Heavenly Delusion', 2018, NULL, 0, NULL),
(38, 'I am a Hero', 2009, 2017, 0, NULL),
(39, 'Il cane che guarda le stelle', 2008, 2008, 7, NULL),
(40, 'Insomniacs After School', 2019, NULL, 0, NULL),
(41, 'Jujutsu Kaisen-Sorcery Fight', 2018, NULL, 0, NULL),
(42, 'Kaguya-sama:Love is War', 2015, 2022, 51, '\'\''),
(43, 'Kaiju No.8', 2020, NULL, 0, NULL),
(44, 'Kamisama Kiss', 2008, 2016, 0, NULL),
(45, 'Kenshin, Samurai Vagabondo', 1994, 1999, 53, '\'\''),
(46, 'Komi can\'t communicate', 2018, NULL, 0, NULL),
(47, 'Land of the Lustrous', 2012, NULL, 0, NULL),
(48, 'Last Game', 2011, 2016, 0, NULL),
(49, 'Look Back', 2021, 2021, 60, '\'\''),
(50, 'Love After World Domination', 2019, 2022, 0, NULL),
(51, 'Made in Abyss', 2012, NULL, 0, NULL),
(52, 'Mermaid Prince', 2015, 2016, 0, NULL),
(53, 'Mieruko-chan', 2018, NULL, 0, NULL),
(54, 'Mission:Yozakura Family', 2019, NULL, 0, NULL),
(55, 'Moonlight Invader', 2018, 2020, 0, NULL),
(56, 'Moriarty the Patriot', 2016, NULL, 0, NULL),
(57, 'Mujirushi- il segno dei sogni', 2017, 2018, 0, NULL),
(58, 'Museum', 2013, 2014, 0, NULL),
(59, 'My Charms Are Waisted On Kuroiwa Medaka', 2021, NULL, 0, NULL),
(60, 'My Dress-up Darling- Bisque Doll', 2018, NULL, 0, NULL),
(61, 'Nanaco Robin', 2008, 2009, 0, NULL),
(62, 'Naruto', 1999, 2014, 0, NULL),
(63, 'Non mi stuzzicare,Takagi', 2013, NULL, 0, NULL),
(64, 'Non tormentarmi,Nagatoro', 2017, NULL, 0, NULL),
(65, 'One-Punch Man', 2012, NULL, 0, NULL),
(66, 'Oshi no Ko-My star', 2020, NULL, 59, '\'\''),
(67, 'Platinum End', 2015, 2021, 58, '\'\''),
(68, 'Prison School', 2011, 2017, 0, NULL),
(69, 'Sakamoto Days', 2020, NULL, 0, NULL),
(70, 'Sankarea', 2009, 2014, 0, NULL),
(71, 'School Live', 2012, 2019, 0, NULL),
(72, 'Shadow House', 2018, NULL, 0, NULL),
(73, 'Shangri-La Frontier', 2020, NULL, 0, NULL),
(74, 'Soul Eater', 2003, 2013, 57, '\'\''),
(75, 'Spice And Wolf', 2007, 2017, 0, NULL),
(76, 'Spy X Family', 2019, NULL, 28, '\'\''),
(77, 'Squalificati- Ranger Reject', 2021, NULL, 0, NULL),
(78, 'Tatsuki Fujimoto Short Stories 17-21', 2014, 2017, 0, NULL),
(79, 'Tatsuki Fujimoto Short Stories 22-26', 2018, 2018, 0, NULL),
(80, 'The Quintessential Quintuplets', 2017, 2020, 0, NULL),
(81, 'Tokyo Ghoul', 2011, 2014, 56, '\'\''),
(82, 'Tokyo Ghoul:re', 2014, 2018, 55, '\'\''),
(83, 'Tsukimichi moonlit fantasy', 2015, NULL, 0, NULL),
(84, 'Undead Unluck', 2020, NULL, 54, '\'\''),
(85, 'Witch Watch', 2021, NULL, 0, NULL),
(86, 'ZOMBIE 100', 2018, NULL, 52, '\'zombie\''),
(87, 'Fire Punch', 2016, 2018, 0, NULL),
(88, 'Pluto', 2003, 2009, 0, NULL),
(89, 'Yawara!', 1986, 1993, 23, '\'\''),
(90, 'Dagashi Kashi', 2014, 2018, 0, NULL),
(91, 'Chihayafuru', 2008, 2022, 0, NULL),
(94, 'One Piece', 0, NULL, 49, ' In un mondo quasi interamente coperto dall\'acqua e con poche e piccole isole abitate si è fortemente diffusa la pirateria, pratica che riceve un\'ulteriore spinta il giorno in cui Gold Roger, il re dei pirati, annuncia al mondo intero che ha nascosto un i');

-- --------------------------------------------------------

--
-- Struttura della tabella `ruolo`
--

CREATE TABLE `ruolo` (
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ruolo`
--

INSERT INTO `ruolo` (`nome`) VALUES
('admin'),
('utente');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
  `pw` varchar(255) NOT NULL,
  `profilo` int(11) DEFAULT 1,
  `ruolo` varchar(255) DEFAULT 'utente',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`email`, `username`, `des`, `pw`, `profilo`, `ruolo`, `id`) VALUES
('lorenzocavagnaro14@gmail.com', 'Cavosky', NULL, '$2y$10$.1r2Ny/Tif44dIbkbfv43.wynIfWmwc92cgQV2zvYAWa0ZPYabb16', 41, 'admin', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenteleggecapitolo`
--

CREATE TABLE `utenteleggecapitolo` (
  `utente` varchar(255) NOT NULL,
  `capitolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utentesegueopera`
--

CREATE TABLE `utentesegueopera` (
  `utente` varchar(255) NOT NULL,
  `opera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utentesegueopera`
--

INSERT INTO `utentesegueopera` (`utente`, `opera`) VALUES
('lorenzocavagnaro14@gmail.com', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `volumecapitolo`
--

CREATE TABLE `volumecapitolo` (
  `edizione` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `capitolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `volumecapitolo`
--

INSERT INTO `volumecapitolo` (`edizione`, `volume`, `capitolo`) VALUES
(3, 1, 1),
(3, 1, 2),
(3, 1, 3),
(3, 1, 4),
(3, 1, 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `volumi`
--

CREATE TABLE `volumi` (
  `numero` int(11) NOT NULL,
  `nPagine` int(11) DEFAULT NULL,
  `data_di_uscita` date NOT NULL,
  `edizione` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `copertina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `volumi`
--

INSERT INTO `volumi` (`numero`, `nPagine`, `data_di_uscita`, `edizione`, `prezzo`, `copertina`) VALUES
(1, NULL, '2002-05-01', 1, 7, 3),
(1, NULL, '2021-12-16', 2, 14.9, 19),
(1, 184, '2022-12-16', 3, 2.95, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articolo`
--
ALTER TABLE `articolo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img` (`img`);

--
-- Indici per le tabelle `autore`
--
ALTER TABLE `autore`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nazionalita` (`nazionalita`);

--
-- Indici per le tabelle `autorescriveopera`
--
ALTER TABLE `autorescriveopera`
  ADD PRIMARY KEY (`autore`,`opera`),
  ADD KEY `opera` (`opera`);

--
-- Indici per le tabelle `capitolo`
--
ALTER TABLE `capitolo`
  ADD PRIMARY KEY (`numeroCapitolo`);

--
-- Indici per le tabelle `commenti`
--
ALTER TABLE `commenti`
  ADD PRIMARY KEY (`utente`,`opera`),
  ADD KEY `opera` (`opera`);

--
-- Indici per le tabelle `commentiarticoli`
--
ALTER TABLE `commentiarticoli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articolo` (`articolo`),
  ADD KEY `utente` (`utente`),
  ADD KEY `risponde` (`risponde`);

--
-- Indici per le tabelle `edizione`
--
ALTER TABLE `edizione`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opera` (`opera`);

--
-- Indici per le tabelle `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `nazionalita`
--
ALTER TABLE `nazionalita`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `opera`
--
ALTER TABLE `opera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img` (`img`);

--
-- Indici per le tabelle `ruolo`
--
ALTER TABLE `ruolo`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `profilo` (`profilo`),
  ADD KEY `ruolo` (`ruolo`);

--
-- Indici per le tabelle `utenteleggecapitolo`
--
ALTER TABLE `utenteleggecapitolo`
  ADD PRIMARY KEY (`utente`,`capitolo`),
  ADD KEY `capitolo` (`capitolo`);

--
-- Indici per le tabelle `utentesegueopera`
--
ALTER TABLE `utentesegueopera`
  ADD PRIMARY KEY (`utente`,`opera`),
  ADD KEY `opera` (`opera`);

--
-- Indici per le tabelle `volumecapitolo`
--
ALTER TABLE `volumecapitolo`
  ADD PRIMARY KEY (`edizione`,`volume`,`capitolo`),
  ADD KEY `volume` (`volume`),
  ADD KEY `capitolo` (`capitolo`);

--
-- Indici per le tabelle `volumi`
--
ALTER TABLE `volumi`
  ADD PRIMARY KEY (`numero`,`edizione`),
  ADD KEY `edizione` (`edizione`),
  ADD KEY `copertina` (`copertina`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articolo`
--
ALTER TABLE `articolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT per la tabella `autore`
--
ALTER TABLE `autore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `commentiarticoli`
--
ALTER TABLE `commentiarticoli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT per la tabella `edizione`
--
ALTER TABLE `edizione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT per la tabella `opera`
--
ALTER TABLE `opera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `articolo`
--
ALTER TABLE `articolo`
  ADD CONSTRAINT `articolo_ibfk_1` FOREIGN KEY (`img`) REFERENCES `img` (`id`);

--
-- Limiti per la tabella `autore`
--
ALTER TABLE `autore`
  ADD CONSTRAINT `autore_ibfk_1` FOREIGN KEY (`nazionalita`) REFERENCES `nazionalita` (`nome`);

--
-- Limiti per la tabella `autorescriveopera`
--
ALTER TABLE `autorescriveopera`
  ADD CONSTRAINT `autorescriveopera_ibfk_1` FOREIGN KEY (`autore`) REFERENCES `autore` (`id`),
  ADD CONSTRAINT `autorescriveopera_ibfk_2` FOREIGN KEY (`opera`) REFERENCES `opera` (`id`);

--
-- Limiti per la tabella `commenti`
--
ALTER TABLE `commenti`
  ADD CONSTRAINT `commenti_ibfk_1` FOREIGN KEY (`utente`) REFERENCES `utente` (`email`),
  ADD CONSTRAINT `commenti_ibfk_2` FOREIGN KEY (`opera`) REFERENCES `opera` (`id`);

--
-- Limiti per la tabella `commentiarticoli`
--
ALTER TABLE `commentiarticoli`
  ADD CONSTRAINT `commentiarticoli_ibfk_1` FOREIGN KEY (`articolo`) REFERENCES `articolo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentiarticoli_ibfk_2` FOREIGN KEY (`utente`) REFERENCES `utente` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentiarticoli_ibfk_3` FOREIGN KEY (`risponde`) REFERENCES `commentiarticoli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `edizione`
--
ALTER TABLE `edizione`
  ADD CONSTRAINT `edizione_ibfk_1` FOREIGN KEY (`opera`) REFERENCES `opera` (`id`);

--
-- Limiti per la tabella `opera`
--
ALTER TABLE `opera`
  ADD CONSTRAINT `opera_ibfk_1` FOREIGN KEY (`img`) REFERENCES `img` (`id`);

--
-- Limiti per la tabella `utente`
--
ALTER TABLE `utente`
  ADD CONSTRAINT `utente_ibfk_1` FOREIGN KEY (`profilo`) REFERENCES `img` (`id`),
  ADD CONSTRAINT `utente_ibfk_2` FOREIGN KEY (`ruolo`) REFERENCES `ruolo` (`nome`);

--
-- Limiti per la tabella `utenteleggecapitolo`
--
ALTER TABLE `utenteleggecapitolo`
  ADD CONSTRAINT `utenteleggecapitolo_ibfk_1` FOREIGN KEY (`utente`) REFERENCES `utente` (`email`),
  ADD CONSTRAINT `utenteleggecapitolo_ibfk_2` FOREIGN KEY (`capitolo`) REFERENCES `capitolo` (`numeroCapitolo`);

--
-- Limiti per la tabella `utentesegueopera`
--
ALTER TABLE `utentesegueopera`
  ADD CONSTRAINT `utentesegueopera_ibfk_1` FOREIGN KEY (`utente`) REFERENCES `utente` (`email`),
  ADD CONSTRAINT `utentesegueopera_ibfk_2` FOREIGN KEY (`opera`) REFERENCES `opera` (`id`);

--
-- Limiti per la tabella `volumecapitolo`
--
ALTER TABLE `volumecapitolo`
  ADD CONSTRAINT `volumecapitolo_ibfk_1` FOREIGN KEY (`edizione`) REFERENCES `edizione` (`id`),
  ADD CONSTRAINT `volumecapitolo_ibfk_2` FOREIGN KEY (`volume`) REFERENCES `volumi` (`numero`),
  ADD CONSTRAINT `volumecapitolo_ibfk_3` FOREIGN KEY (`capitolo`) REFERENCES `capitolo` (`numeroCapitolo`);

--
-- Limiti per la tabella `volumi`
--
ALTER TABLE `volumi`
  ADD CONSTRAINT `volumi_ibfk_1` FOREIGN KEY (`edizione`) REFERENCES `edizione` (`id`),
  ADD CONSTRAINT `volumi_ibfk_2` FOREIGN KEY (`copertina`) REFERENCES `img` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
