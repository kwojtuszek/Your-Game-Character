-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2021, 10:28
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektpostac`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ekwipunek`
--

CREATE TABLE `ekwipunek` (
  `idEkwipunek` int(11) NOT NULL,
  `Material` varchar(45) NOT NULL DEFAULT 'Brak dla Broni',
  `Nazwa` varchar(45) NOT NULL,
  `Potega` int(11) NOT NULL,
  `idTypu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ekwipunek`
--

INSERT INTO `ekwipunek` (`idEkwipunek`, `Material`, `Nazwa`, `Potega`, `idTypu`) VALUES
(1, 'Szmata', 'Czapka Rozpusty', 100, 5),
(2, 'Szmata', 'Czerep Maga', 115, 5),
(3, 'Metal', 'Hełm Gniewu', 226, 5),
(4, 'Skóra', 'Czapka Poławiacza', 226, 5),
(5, 'Metal', 'Kask Zbieracza', 33, 5),
(6, 'Metal', 'Super Durszlak', 225, 5),
(7, 'Szmata', 'Mądry Beret', 86, 5),
(8, 'Metal', 'Hełm Chytrusa', 98, 5),
(9, 'Skóra', 'Kaptur Wujka', 166, 5),
(10, 'Skóra', 'Czerep Łucznika', 201, 5),
(11, 'Inny', 'Kły Malfona', 220, 4),
(12, 'Inny', 'Oczy Traszki', 56, 4),
(13, 'Skóra', 'Pełzaczowe Ramiona', 19, 4),
(14, 'Skóra', 'Ramiona Poławiacza', 226, 4),
(15, 'Inny', 'Smocze Skrzydła', 185, 4),
(16, 'Metal', 'Ogniste Łopatki', 166, 4),
(17, 'Szmata', 'Naramienniki Mrozu', 108, 4),
(18, 'Szmata', 'Groźne Alibaby', 127, 4),
(19, 'Szmata', 'Łokcie Pustki', 120, 4),
(20, 'Skóra', 'Agresywne Ramiona', 46, 4),
(21, 'Szmata', 'Łapawice Rozpusty', 178, 6),
(22, 'Skóra', 'Rączki Ruana', 85, 6),
(23, 'Skóra', 'Łapska Poławiacza', 226, 6),
(24, 'Metal', 'Dłonie Gniewu', 96, 6),
(25, 'Skóra', 'Rękawice Wujka', 203, 6),
(26, 'Szmata', 'Pijane Rąsie', 86, 6),
(27, 'Skóra', 'Ręce Złodzieja', 142, 6),
(28, 'Metal', 'Łapawice Gniewu', 118, 6),
(29, 'Skóra', 'Łucznicze Rękawice', 18, 6),
(30, 'Szmata', 'Dłonie Czarodzieja', 136, 6),
(31, 'Metal', 'Klata Wuja', 105, 2),
(32, 'Skóra', 'Nakrycie Poławiacza', 226, 2),
(33, 'Metal', 'Kolczatka Berserka', 119, 2),
(34, 'Szmata', 'Zbroja Pustki', 110, 2),
(35, 'Skóra', 'Płaszcz Łotra', 95, 2),
(36, 'Inny', 'Koralowa Bluzka', 178, 2),
(37, 'Skóra', 'Nikczemna Kurtka', 211, 2),
(38, 'Szmata', 'Koszulka Maga', 112, 2),
(39, 'Metal', 'Lodowy Kubrak', 98, 2),
(40, 'Szmata', 'Marynarka Arystokraty', 19, 2),
(41, 'Skóra', 'Rybaczki Poławiacza', 226, 7),
(42, 'Szmata', 'Sztruksy Ewalda', 166, 7),
(43, 'Szmata', 'Dresy Arystokraty', 56, 7),
(44, 'Szmata', 'Spodenki Pustki', 116, 7),
(45, 'Metal', 'Dżinsy Dżina', 213, 7),
(46, 'Szmata', 'Bokserki Rozpusty', 118, 7),
(47, 'Skóra', 'Gacie Łotra', 97, 7),
(48, 'Inny', 'Niewidzialne Spodnie', 221, 7),
(49, 'Szmata', 'Pijane Spodenki', 186, 7),
(50, 'Szmata', 'Ciche rajtki', 198, 7),
(51, 'Skóra', 'Cichobiegi', 196, 8),
(52, 'Skóra', 'Klapki Poławiacza', 226, 8),
(53, 'Szmata', 'Sandały Chytrusa', 75, 8),
(54, 'Skóra', 'Botki Pustki', 112, 8),
(55, 'Metal', 'Buty Zbieracza', 16, 8),
(56, 'Skóra', 'Górnicze Kalosze', 62, 8),
(57, 'Szmata', 'Glany Kapłana', 189, 8),
(58, 'Skóra', 'Kozaki Iriny', 118, 8),
(59, 'Metal', 'Ogniste Szpilki', 165, 8),
(60, 'Szmata', 'Buty Czarodzieja', 82, 8),
(61, 'Brak dla Broni', 'Wędka Poławiacza', 226, 3),
(62, 'Brak dla Broni', 'Ostrze Styksu', 218, 3),
(63, 'Brak dla Broni', 'Tarcza Chaosu', 196, 3),
(64, 'Brak dla Broni', 'Wieczny Nóz', 12, 3),
(65, 'Brak dla Broni', 'Łuk Poszukujących Serc', 185, 3),
(66, 'Brak dla Broni', 'Bliźniacze Pięści', 209, 3),
(67, 'Brak dla Broni', 'Adamantowy Miotacz', 24, 3),
(68, 'Brak dla Broni', 'Noże Pustki', 173, 3),
(69, 'Brak dla Broni', 'Kieł Beliara', 214, 3),
(70, 'Brak dla Broni', 'Rewolwer Smoka', 119, 3),
(71, 'Brak dla Broni', 'Złote Pazury Glazurnika', 225, 3),
(72, 'Brak dla Broni', 'Kubek Grozy', 145, 3),
(73, 'Szmata', 'Portki Mocy', 78, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `Nazwa_Roli` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Aktywna` tinyint(4) NOT NULL DEFAULT 1,
  `Data_Utworzenia` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`idRole`, `Nazwa_Roli`, `Aktywna`, `Data_Utworzenia`) VALUES
(1, 'Admin', 1, '2021-05-26 08:39:52'),
(3, 'Uzytkownik', 1, '2021-05-26 08:40:37'),
(4, 'Moderator', 1, '2021-05-26 08:41:06');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typ_ekwipunku`
--

CREATE TABLE `typ_ekwipunku` (
  `idTyp_Ekwipunku` int(11) NOT NULL,
  `Typ` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `typ_ekwipunku`
--

INSERT INTO `typ_ekwipunku` (`idTyp_Ekwipunku`, `Typ`) VALUES
(3, 'Bron'),
(8, 'Buty'),
(5, 'Helm'),
(2, 'Napiersnik'),
(4, 'Naramienniki'),
(6, 'Rekawice'),
(7, 'Spodnie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `idUzytkownicy` int(11) NOT NULL,
  `Login` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(45) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`idUzytkownicy`, `Login`, `Haslo`) VALUES
(1, 'klauders', 'MTIzNDU='),
(2, 'rupert', 'MTIzNDU='),
(3, 'patrykos', 'MTIzNDU='),
(5, 'dawid', 'MTIzNDU='),
(6, 'radek', 'MTIzNDU='),
(7, 'pawelek', 'MTIzNDU='),
(8, 'admin', 'YWRtaW4='),
(9, 'Tomasz', 'MTIzNDU=');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy_has_role`
--

CREATE TABLE `uzytkownicy_has_role` (
  `idUzytkownika` int(11) NOT NULL,
  `idRoli` int(11) NOT NULL,
  `Data_Przypisania` datetime NOT NULL,
  `Przypisal` varchar(45) COLLATE utf8_polish_ci NOT NULL DEFAULT 'System'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy_has_role`
--

INSERT INTO `uzytkownicy_has_role` (`idUzytkownika`, `idRoli`, `Data_Przypisania`, `Przypisal`) VALUES
(1, 1, '2021-06-04 15:36:02', 'klauders'),
(2, 3, '2021-06-04 15:36:29', 'klauders'),
(3, 1, '2021-06-10 11:39:18', 'radek'),
(5, 4, '2021-06-10 11:36:21', 'patrykos'),
(6, 1, '2021-06-10 11:37:55', 'patrykos'),
(7, 1, '2021-06-11 11:24:00', 'klauders'),
(8, 3, '2021-06-12 13:28:03', 'System'),
(9, 4, '2021-06-14 10:18:34', 'klauders');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisane_postacie`
--

CREATE TABLE `zapisane_postacie` (
  `idZapisane_Postacie` int(11) NOT NULL,
  `Imie_Postaci` varchar(45) NOT NULL,
  `Klasa` varchar(45) NOT NULL,
  `Potega` int(11) NOT NULL DEFAULT 0,
  `idUzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zapisane_postacie`
--

INSERT INTO `zapisane_postacie` (`idZapisane_Postacie`, `Imie_Postaci`, `Klasa`, `Potega`, `idUzytkownika`) VALUES
(1, 'Cataleja', 'Druid', 195, 1),
(2, 'Klaudia', 'Rycerz Śmierci', 116, 6),
(6, 'Daria', 'Czarnoksiężnik', 164, 7),
(7, 'Pawel', 'Paladyn', 54, 1),
(8, 'Janek', 'Wojownik', 54, 1),
(9, 'Koń', 'Łowca', 63, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisane_postacie_has_ekwipunek`
--

CREATE TABLE `zapisane_postacie_has_ekwipunek` (
  `idZalozenia` int(11) NOT NULL,
  `idPostaci` int(11) NOT NULL,
  `idEkwipunku` int(11) NOT NULL,
  `Data_Zalozenia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zapisane_postacie_has_ekwipunek`
--

INSERT INTO `zapisane_postacie_has_ekwipunek` (`idZalozenia`, `idPostaci`, `idEkwipunku`, `Data_Zalozenia`) VALUES
(1, 1, 3, '2021-06-11 18:08:07'),
(2, 1, 18, '2021-06-10 22:00:10'),
(3, 1, 21, '2021-06-10 22:00:48'),
(4, 1, 32, '2021-06-10 22:00:15'),
(5, 1, 49, '2021-06-10 22:01:01'),
(6, 1, 52, '2021-06-10 22:00:42'),
(7, 1, 63, '2021-06-10 22:00:56'),
(8, 2, 9, '2021-06-10 22:02:43'),
(9, 2, 12, '2021-06-10 22:02:50'),
(10, 2, 24, '2021-06-10 22:02:59'),
(11, 2, 37, '2021-06-10 22:03:20'),
(12, 2, 50, '2021-06-10 22:03:31'),
(13, 2, 53, '2021-06-10 22:03:41'),
(14, 2, 64, '2021-06-10 22:03:49'),
(22, 6, 8, '2021-06-11 11:24:57'),
(23, 6, 16, '2021-06-11 11:25:11'),
(24, 6, 30, '2021-06-11 11:25:25'),
(25, 6, 31, '2021-06-11 11:25:29'),
(26, 6, 48, '2021-06-11 11:25:37'),
(27, 6, 51, '2021-06-11 11:25:46'),
(28, 6, 61, '2021-06-11 11:26:01'),
(29, 7, 6, '2021-06-11 18:58:51'),
(30, 7, 13, '2021-06-11 18:49:12'),
(31, 7, 29, '2021-06-11 18:49:12'),
(32, 7, 40, '2021-06-11 18:49:13'),
(33, 7, 43, '2021-06-11 18:49:13'),
(34, 7, 55, '2021-06-11 18:49:14'),
(35, 7, 67, '2021-06-11 18:49:14'),
(36, 8, 6, '2021-06-11 18:58:58'),
(37, 8, 13, '2021-06-11 18:49:41'),
(38, 8, 29, '2021-06-11 18:49:41'),
(39, 8, 40, '2021-06-11 18:49:41'),
(40, 8, 43, '2021-06-11 18:49:42'),
(41, 8, 55, '2021-06-11 18:49:42'),
(42, 8, 67, '2021-06-11 18:49:43'),
(43, 9, 5, '2021-06-14 10:17:58'),
(44, 9, 18, '2021-06-14 10:17:25'),
(45, 9, 29, '2021-06-14 10:17:26'),
(46, 9, 39, '2021-06-14 10:17:27'),
(47, 9, 73, '2021-06-14 10:17:27'),
(48, 9, 53, '2021-06-14 10:17:28'),
(49, 9, 64, '2021-06-14 10:17:29');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ekwipunek`
--
ALTER TABLE `ekwipunek`
  ADD PRIMARY KEY (`idEkwipunek`),
  ADD KEY `idx_Material` (`Material`),
  ADD KEY `idx_Nazwa` (`Nazwa`),
  ADD KEY `idx_Potęga` (`Potega`),
  ADD KEY `fk_Ekwipunek_Typ_Ekwipunku1_idx` (`idTypu`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indeksy dla tabeli `typ_ekwipunku`
--
ALTER TABLE `typ_ekwipunku`
  ADD PRIMARY KEY (`idTyp_Ekwipunku`),
  ADD KEY `idx_Typ` (`Typ`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`idUzytkownicy`);

--
-- Indeksy dla tabeli `uzytkownicy_has_role`
--
ALTER TABLE `uzytkownicy_has_role`
  ADD PRIMARY KEY (`idUzytkownika`),
  ADD KEY `fk_Uzytkownicy_has_Role_Role1_idx` (`idRoli`),
  ADD KEY `fk_Uzytkownicy_has_Role_Uzytkownicy1_idx` (`idUzytkownika`);

--
-- Indeksy dla tabeli `zapisane_postacie`
--
ALTER TABLE `zapisane_postacie`
  ADD PRIMARY KEY (`idZapisane_Postacie`),
  ADD KEY `idx_idUzytkownika` (`idUzytkownika`);

--
-- Indeksy dla tabeli `zapisane_postacie_has_ekwipunek`
--
ALTER TABLE `zapisane_postacie_has_ekwipunek`
  ADD PRIMARY KEY (`idZalozenia`),
  ADD KEY `fk_Zapisane_Postacie_has_Ekwipunek_Zapisane_Postacie1_idx` (`idPostaci`),
  ADD KEY `fk_Zapisane_Postacie_has_Ekwipunek_Ekwipunek1_idx` (`idEkwipunku`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `ekwipunek`
--
ALTER TABLE `ekwipunek`
  MODIFY `idEkwipunek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `typ_ekwipunku`
--
ALTER TABLE `typ_ekwipunku`
  MODIFY `idTyp_Ekwipunku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `idUzytkownicy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zapisane_postacie`
--
ALTER TABLE `zapisane_postacie`
  MODIFY `idZapisane_Postacie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zapisane_postacie_has_ekwipunek`
--
ALTER TABLE `zapisane_postacie_has_ekwipunek`
  MODIFY `idZalozenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ekwipunek`
--
ALTER TABLE `ekwipunek`
  ADD CONSTRAINT `fk_Ekwipunek_Typ_Ekwipunku1` FOREIGN KEY (`idTypu`) REFERENCES `typ_ekwipunku` (`idTyp_Ekwipunku`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `uzytkownicy_has_role`
--
ALTER TABLE `uzytkownicy_has_role`
  ADD CONSTRAINT `fk_Uzytkownicy_has_Role_Role1` FOREIGN KEY (`idRoli`) REFERENCES `role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Uzytkownicy_has_Role_Uzytkownicy1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`idUzytkownicy`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zapisane_postacie`
--
ALTER TABLE `zapisane_postacie`
  ADD CONSTRAINT `fk_idUzytkownika` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`idUzytkownicy`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zapisane_postacie_has_ekwipunek`
--
ALTER TABLE `zapisane_postacie_has_ekwipunek`
  ADD CONSTRAINT `fk_Zapisane_Postacie_has_Ekwipunek_Ekwipunek1` FOREIGN KEY (`idEkwipunku`) REFERENCES `ekwipunek` (`idEkwipunek`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Zapisane_Postacie_has_Ekwipunek_Zapisane_Postacie1` FOREIGN KEY (`idPostaci`) REFERENCES `zapisane_postacie` (`idZapisane_Postacie`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
