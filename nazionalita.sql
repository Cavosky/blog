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
('ABW', "Aruba"),
('AFG', "Afghanistan"),
('AGO', "Angola"),
('AIA', "Anguilla"),
('ALA', "Åland Islands"),
('ALB', "Albania"),
('AND', "Andorra"),
('ARE', "United Arab Emirates (the)"),
('ARG', "Argentina"),
('ARM', "Armenia"),
('ASM', "American Samoa"),
('ATA', "Antarctica"),
('ATF', "French Southern Territories (the)"),
('ATG', "Antigua and Barbuda"),
('AUS', "Australia"),
('AUT', "Austria"),
('AZE', "Azerbaijan"),
('BDI', "Burundi"),
('BEL', "Belgium"),
('BEN', "Benin"),
('BES', "Bonaire, Sint Eustatius and Saba"),
('BFA', "Burkina Faso"),
('BGD', "Bangladesh"),
('BGR', "Bulgaria"),
('BHR', "Bahrain"),
('BHS', "Bahamas (the)"),
('BIH', "Bosnia and Herzegovina"),
('BLM', "Saint Barthélemy"),
('BLR', "Belarus"),
('BLZ', "Belize"),
('BMU', "Bermuda"),
('BOL', "Bolivia (Plurinational State of)"),
('BRA', "Brazil"),
('BRB', "Barbados"),
('BRN', "Brunei Darussalam"),
('BTN', "Bhutan"),
('BVT', "Bouvet Island"),
('BWA', "Botswana"),
('CAF', "Central African Republic (the)"),
('CAN', "Canada"),
('CCK', "Cocos (Keeling) Islands (the)"),
('CHE', "Switzerland"),
('CHL', "Chile"),
('CHN', "China"),
('CIV', "Côte d\'Ivoire"),
('CMR', "Cameroon"),
('COD', "Congo (the Democratic Republic of the)"),
('COG', "Congo (the)"),
('COK', "Cook Islands (the)"),
('COL', "Colombia"),
('COM', "Comoros (the)"),
('CPV', "Cabo Verde"),
('CRI', "Costa Rica"),
('CUB', "Cuba"),
('CUW', "Curaçao"),
('CXR', "Christmas Island"),
('CYM', "Cayman Islands (the)"),
('CYP', "Cyprus"),
('CZE', "Czechia"),
('DEU', "Germany"),
('DJI', "Djibouti"),
('DMA', "Dominica"),
('DNK', "Denmark"),
('DOM', "Dominican Republic (the)"),
('DZA', "Algeria"),
('ECU', "Ecuador"),
('EGY', "Egypt"),
('ERI', "Eritrea"),
('ESH', "Western Sahara"),
('ESP', "Spain"),
('EST', "Estonia"),
('ETH', "Ethiopia"),
('FIN', "Finland"),
('FJI', "Fiji"),
('FLK', "Falkland Islands (the) [Malvinas]"),
('FRA', "France"),
('FRO', "Faroe Islands (the)"),
('FSM', "Micronesia (Federated States of)"),
('GAB', "Gabon"),
('GBR', "United Kingdom of Great Britain and Northern Ireland (the)"),
('GEO', "Georgia"),
('GGY', "Guernsey"),
('GHA', "Ghana"),
('GIB', "Gibraltar"),
('GIN', "Guinea"),
('GLP', "Guadeloupe"),
('GMB', "Gambia (the)"),
('GNB', "Guinea-Bissau"),
('GNQ', "Equatorial Guinea"),
('GRC', "Greece"),
('GRD', "Grenada"),
('GRL', "Greenland"),
('GTM', "Guatemala"),
('GUF', "French Guiana"),
('GUM', "Guam"),
('GUY', "Guyana"),
('HKG', "Hong Kong"),
('HMD', "Heard Island and McDonald Islands"),
('HND', "Honduras"),
('HRV', "Croatia"),
('HTI', "Haiti"),
('HUN', "Hungary"),
('IDN', "Indonesia"),
('IMN', "Isle of Man"),
('IND', "India"),
('IOT', "British Indian Ocean Territory (the)"),
('IRL', "Ireland"),
('IRN', "Iran (Islamic Republic of)"),
('IRQ', "Iraq"),
('ISL', "Iceland"),
('ISR', "Israel"),
('ITA', "Italy"),
('JAM', "Jamaica"),
('JEY', "Jersey"),
('JOR', "Jordan"),
('JPN', "Japan"),
('KAZ', "Kazakhstan"),
('KEN', "Kenya"),
('KGZ', "Kyrgyzstan"),
('KHM', "Cambodia"),
('KIR', "Kiribati"),
('KNA', "Saint Kitts and Nevis"),
('KOR', "Korea (the Republic of)"),
('KWT', "Kuwait"),
('LAO', "Lao People\'s Democratic Republic (the)"),
('LBN', "Lebanon"),
('LBR', "Liberia"),
('LBY', "Libya"),
('LCA', "Saint Lucia"),
('LIE', "Liechtenstein"),
('LKA', "Sri Lanka"),
('LSO', "Lesotho"),
('LTU', "Lithuania"),
('LUX', "Luxembourg"),
('LVA', "Latvia"),
('MAC', "Macao"),
('MAF', "Saint Martin (French part)"),
('MAR', "Morocco"),
('MCO', "Monaco"),
('MDA', "Moldova (the Republic of)"),
('MDG', "Madagascar"),
('MDV', "Maldives"),
('MEX', "Mexico"),
('MHL', "Marshall Islands (the)"),
('MKD', "Republic of North Macedonia"),
('MLI', "Mali"),
('MLT', "Malta"),
('MMR', "Myanmar"),
('MNE', "Montenegro"),
('MNG', "Mongolia"),
('MNP', "Northern Mariana Islands (the)"),
('MOZ', "Mozambique"),
('MRT', "Mauritania"),
('MSR', "Montserrat"),
('MTQ', "Martinique"),
('MUS', "Mauritius"),
('MWI', "Malawi"),
('MYS', "Malaysia"),
('MYT', "Mayotte"),
('NAM', "Namibia"),
('NCL', "New Caledonia"),
('NER', "Niger (the)"),
('NFK', "Norfolk Island"),
('NGA', "Nigeria"),
('NIC', "Nicaragua"),
('NIU', "Niue"),
('NLD', "Netherlands (the)"),
('NOR', "Norway"),
('NPL', "Nepal"),
('NRU', "Nauru"),
('NZL', "New Zealand"),
('OMN', "Oman"),
('PAK', "Pakistan"),
('PAN', "Panama"),
('PCN', "Pitcairn"),
('PER', "Peru"),
('PHL', "Philippines (the)"),
('PLW', "Palau"),
('PNG', "Papua New Guinea"),
('POL', "Poland"),
('PRI', "Puerto Rico"),
('PRK', "Korea (the Democratic People's Republic of)"),
('PRT', "Portugal"),
('PRY', "Paraguay"),
('PSE', "Palestine, State of"),
('PYF', "French Polynesia"),
('QAT', "Qatar"),
('REU', "Réunion"),
('ROU', "Romania"),
('RUS', "Russian Federation (the)"),
('RWA', "Rwanda"),
('SAU', "Saudi Arabia"),
('SDN', "Sudan (the)"),
('SEN', "Senegal"),
('SGP', "Singapore"),
('SGS', "South Georgia and the South Sandwich Islands"),
('SHN', "Saint Helena, Ascension and Tristan da Cunha"),
('SJM', "Svalbard and Jan Mayen"),
('SLB', "Solomon Islands"),
('SLE', "Sierra Leone"),
('SLV', "El Salvador"),
('SMR', "San Marino"),
('SOM', "Somalia"),
('SPM', "Saint Pierre and Miquelon"),
('SRB', "Serbia"),
('SSD', "South Sudan"),
('STP', "Sao Tome and Principe"),
('SUR', "Suriname"),
('SVK', "Slovakia"),
('SVN', "Slovenia"),
('SWE', "Sweden"),
('SWZ', "Eswatini"),
('SXM', "Sint Maarten (Dutch part)"),
('SYC', "Seychelles"),
('SYR', "Syrian Arab Republic"),
('TCA', "Turks and Caicos Islands (the)"),
('TCD', "Chad"),
('TGO', "Togo"),
('THA', "Thailand"),
('TJK', "Tajikistan"),
('TKL', "Tokelau"),
('TKM', "Turkmenistan"),
('TLS', "Timor-Leste"),
('TON', "Tonga"),
('TTO', "Trinidad and Tobago"),
('TUN', "Tunisia"),
('TUR', "Turkey"),
('TUV', "Tuvalu"),
('TWN', "Taiwan (Province of China)"),
('TZA', "Tanzania, United Republic of"),
('UGA', "Uganda"),
('UKR', "Ukraine"),
('UMI', "United States Minor Outlying Islands (the)"),
('URY', "Uruguay"),
('USA', "United States of America (the)"),
('UZB', "Uzbekistan"),
('VAT', "Holy See (the)"),
('VCT', "Saint Vincent and the Grenadines"),
('VEN', "Venezuela (Bolivarian Republic of)"),
('VGB', "Virgin Islands (British)"),
('VIR', "Virgin Islands (U.S.)"),
('VNM', "Viet Nam"),
('VUT', "Vanuatu"),
('WLF', "Wallis and Futuna"),
('WSM', "Samoa"),
('YEM', "Yemen"),
('ZAF', "South Africa"),
('ZMB', "Zambia"),
('ZWE', "Zimbabwe");

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `nazionalita`
--
ALTER TABLE `nazionalita`
  ADD PRIMARY KEY (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
