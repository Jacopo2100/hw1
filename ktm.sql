-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 05, 2024 alle 20:19
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktm`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `modello` varchar(100) NOT NULL,
  `event_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`id`, `nome`, `modello`, `event_dt`) VALUES
(1, 'luigi', 'Enduro', '2024-06-05 16:30:00'),
(2, 'jacopo', 'Enduro', '2024-06-07 17:00:00'),
(3, 'mario', 'Enduro', '2024-07-01 20:00:00'),
(4, 'jacopo', 'Duke', '2024-06-04 16:00:00'),
(5, 'luigi', 'Duke', '2024-06-04 10:30:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id_utente` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id_utente`, `username`, `email`, `password`) VALUES
(1, 'jacopo', 'jacopomirabella@gmoil.com', '$2y$10$KBh2X9Ta4mai6dtSM20rH.YicWgP821rTQJuChm/5QJzKVVhK/yIO'),
(2, 'gigio', 'gigionumerato@gmoil.com', '$2y$10$k0euHiC7KMiTrzjU0W/27OTAn2V1hKQgj21VHwIsktlpcs3C7i0na'),
(3, 'ciccio', 'cicciorossi@gmoil.com', '$2y$10$kuAP3VOjsEl8/ZVcRwRm8.T/9oZ1pQYuvChmJ0hNEjqoBu2ro/Xiq'),
(5, 'luigi', 'luigibianchi@gmoil.com', '$2y$10$5j904KTfkX4WPCpeqrpDSecIfFwN8Qge5TnhYTNe6MDqIm6X0qwe.');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id_utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
