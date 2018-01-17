-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 17, 2018 alle 12:18
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twebdb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `gifs`
--

CREATE TABLE `gifs` (
  `id` int(11) NOT NULL,
  `title` varchar(16) NOT NULL,
  `src` varchar(64) NOT NULL,
  `owner` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `gifs`
--

INSERT INTO `gifs` (`id`, `title`, `src`, `owner`) VALUES
(29, '1', '2018-01-17_02-37-47_uploadBy_admin', 'admin'),
(30, '54586', '2018-01-17_02-41-41_uploadBy_admin', 'admin'),
(31, 'Ã²l,Ã Ã²', '2018-01-17_02-45-24_uploadBy_admin', 'admin');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `nickname` varchar(16) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`nickname`, `psw`) VALUES
('a', '$2y$10$DPL371.A9iyFPDvNOFbrr.9cu9JdqurxocUid62oAgdkNYveP8APK'),
('admin', '$2y$10$Pc1ELQt4Jr2bB06EElg8XuzMQ/3ZxUNYQFQ.ctjwu29MHKkyiCTCu');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `gifs`
--
ALTER TABLE `gifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nickname`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `gifs`
--
ALTER TABLE `gifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `gifs`
--
ALTER TABLE `gifs`
  ADD CONSTRAINT `owner` FOREIGN KEY (`owner`) REFERENCES `users` (`nickname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
