-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Maj 2022, 13:13
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wallpapers`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE `admin`
(
    `id`            int(11) NOT NULL,
    `menu`          varchar(255) NOT NULL,
    `id_category`   int(11) NOT NULL,
    `id_users`      int(11) NOT NULL,
    `id_wallpapers` int(11) NOT NULL,
    `file_name`     varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`id`, `menu`, `id_category`, `id_users`, `id_wallpapers`, `file_name`)
VALUES (1, 'Kategorie', 1, 1, 1, 'categories.php'),
       (2, 'Użytkownicy', 2, 2, 2, 'users.php'),
       (3, 'Tapety', 3, 3, 3, 'wallpapers.php');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category`
(
    `id_category`   int(11) NOT NULL,
    `category_name` varchar(255) NOT NULL,
    `date`          date         NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `date`)
VALUES (1, 'Piłkarze', '2022-05-16'),
       (2, 'Bramkarze', '2022-05-16'),
       (3, 'Kluby', '2022-05-16'),
       (4, 'Reprezentacje', '2022-05-16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users`
(
    `id_user`         int(11) NOT NULL,
    `login`           varchar(255) NOT NULL,
    `password`        varchar(255) NOT NULL,
    `second_password` varchar(255) NOT NULL,
    `date`            date         NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `second_password`, `date`)
VALUES (1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'd033e22ae348aeb5660fc2140aec35850c4da997',
        '2022-05-12'),
       (2, 'xxxx', 'xxxxx', 'xxxxx', '2022-05-12'),
       (3, 'admin1', '$2y$10$oNrkl7fR6MxdPza76RaKSeZ714u7e5LtbEQqo1w.5Q8Z72QWI/wU.',
        '$2y$10$oNrkl7fR6MxdPza76RaKSeZ714u7e5LtbEQqo1w.5Q8Z72QWI/wU.', '2022-05-12'),
       (4, 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', '315f166c5aca63a157f7d41007675cb44a948b33',
        '2022-05-12'),
       (5, 'admin3', '33aab3c7f01620cade108f488cfd285c0e62c1ec', '33aab3c7f01620cade108f488cfd285c0e62c1ec',
        '2022-05-12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wallpapers`
--

CREATE TABLE `wallpapers`
(
    `id`          int(11) NOT NULL,
    `name`        varchar(255) NOT NULL,
    `image`       varchar(255) NOT NULL,
    `categories`  varchar(255) NOT NULL,
    `width`       int(11) NOT NULL,
    `height`      int(11) NOT NULL,
    `date`        date         NOT NULL DEFAULT current_timestamp(),
    `size`        int(11) NOT NULL,
    `description` varchar(255) NOT NULL,
    `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wallpapers`
--

INSERT INTO `wallpapers` (`id`, `name`, `image`, `categories`, `width`, `height`, `date`, `size`, `description`,
                          `id_category`)
VALUES (1, 'Cristiano Ronaldo', 'cristiano_ronaldo.jpg', 'Piłkarze', 1920, 1080, '2022-05-12', 176,
        'Piłkarz Manchesteru United', 1),
       (2, 'Gareth Bale', 'bale.jpg', 'Piłkarze', 1920, 1080, '2022-05-12', 1400, 'Walijczy grający w Realu Madryt', 1),
       (3, 'Karim Benzema', 'benzema.jpg', 'Piłkarze', 300, 168, '2022-05-22', 10, 'Francuz grający w Realu Madryt', 1),
       (4, 'David Alaba', 'alaba.jpg', 'Piłkarze', 300, 168, '2022-05-22', 7, 'Austriak grający w Realu Madryt', 1),
       (5, 'Kevin De Bruyne', 'deBruyne.jpg', 'Piłkarze', 284, 177, '2022-05-22', 10,
        'Belgijczyj grający w Manchesterze City', 1),
       (6, 'Angel Di Maria', 'dimaria.jpg', 'Piłkarze', 1920, 1080, '2022-05-22', 567,
        'Argentyńczyk grający w Paris Saint Germain', 1),
       (8, 'Eden Hazard', 'Hazard.jpg', 'Piłkarze', 284, 177, '2022-05-03', 9, 'Belgijczyk grający w Realu Madryt', 1),
       (9, 'N\'Golo Kante', 'kante.jpg', 'Piłkarze', 300, 168, '2022-05-04', 10, 'Francuz grający w Chelsea', 1),
(10, 'Joshua Kimmich', 'Kimmich.jpg', 'Piłkarze', 2880, 1800, '2022-05-04', 615, 'Niemiec grający w Bayernie Monachium', 1),
(11, 'Robert Lewandowski', 'lewandowski.jpg', 'Piłkarze', 300, 168, '2022-05-30', 13, 'Polak grający w Bayernie Monachium', 1),
(12, 'Harry Maguire', 'Maguire.jpg', 'Piłkarze', 300, 168, '2022-05-30', 7, 'Anglik grający w Manchesterze United', 1),
(13, 'Kylian Mbappe', 'mbappe.jpg', 'Piłkarze', 1920, 1200, '2022-05-10', 308, 'Francuz grający w Paris Saint Germain', 1),
(14, 'Lionel Messi', 'messi.jpg', 'Piłkarze', 300, 168, '2022-05-11', 6, 'Argentyńczyk grający w Paris Saint Germain', 1),
(15, 'Luka Modric', 'modric.jpg', 'Piłkarze', 1920, 293, '2022-05-14', 293, 'Chorwat grający w Realu Madryt', 1),
(16, 'Thomas Muller', 'muller.jpg', 'Piłkarze', 728, 494, '2022-05-27', 76, 'Niemiec grający w Bayernie Monachium', 1),
(17, 'Neymar', 'neymar.jpg', 'Piłkarze', 1920, 1080, '2022-05-29', 415, 'Brazylijczyk grający w Paris Saint Germain', 1),
(18, 'Paul Pogba', 'pogba.jpg', 'Piłkarze', 284, 177, '2022-05-30', 8, 'Francuz grający w Manchesterze United', 1),
(19, 'Sergio Ramos', 'Ramos.jpg', 'Piłkarze', 300, 168, '2022-05-18', 8, 'Hiszpan grający w Paris Saint Germain', 1),
(20, 'Marcus Rashford', 'rashford.jpg', 'Piłkarze', 300, 168, '2022-05-19', 8, 'Anglik grający w Manchesterze United', 1),
(21, 'Mohamed Salah', 'salah.jpg', 'Piłkarze', 1920, 1200, '2022-05-12', 323, 'Egipcjanin grający w Liverpoolu', 1),
(22, 'Leroy Sane', 'sane.jpg', 'Piłkarze', 1920, 1200, '2022-05-12', 174, 'Niemiec grający w Bayernie Monachium', 1),
(23, 'Luis Suarez', 'Suarez.jpg', 'Piłkarze', 1920, 1200, '2022-05-08', 175, 'Urugwajczyk grający w Atletico Madryt', 1),
(24, 'Toni Kross', 'ToniKross.jpg', 'Piłkarze', 300, 168, '2022-05-09', 9, 'Niemiec grający w Realu Madryt', 1),
(25, 'Vinicius Junior', 'vinicius.jpg', 'Piłkarze', 300, 168, '2022-05-28', 7, 'Brazylijczyk grający w Realu Madryt', 1),
(26, 'Argentyna', 'argentina.jpg', 'Reprezentacje', 284, 177, '2022-05-24', 13, '', 4),
(27, 'Brazylia', 'brazil.jpg', 'Reprezentacje', 284, 177, '2022-05-14', 11, '', 4),
(28, 'Chile', 'chile.jpg', 'Reprezentacje', 1332, 850, '2022-05-04', 462, '', 4),
(29, 'Dania', 'denmark.jpg', 'Reprezentacje', 284, 177, '2022-04-29', 9, '', 4),
(30, 'Anglia', 'england.jpg', 'Reprezentacje', 1920, 1080, '2022-05-21', 520, '', 4),
(31, 'Francja', 'france.jpg', 'Reprezentacje', 1920, 1080, '2022-05-11', 382, '', 4),
(32, 'Niemcy', 'germany.png', 'Reprezentacje', 1440, 900, '2022-05-17', 870, '', 4),
(33, 'Grecja', 'greece.jpg', 'Reprezentacje', 3840, 2400, '2022-05-27', 2130, '', 4),
(34, 'Włochy', 'italy.jpg', 'Reprezentacje', 1280, 960, '2022-05-28', 247, '', 4),
(35, 'Polska', 'poland.jpg', 'Reprezentacje', 1920, 1080, '2022-05-18', 301, '', 4),
(36, 'Portugalia', 'portugal.jpg', 'Reprezentacje', 1920, 1080, '2022-05-08', 707, '', 4),
(37, 'Szwecja', 'Sweden.jpg', 'Reprezentacje', 1332, 850, '2022-05-04', 550, '', 4),
(38, 'Szwajcaria', 'switzerland.jpg', 'Reprezentacje', 225, 225, '2022-05-07', 8, '', 4),
(39, 'Ukraina', 'ukraine.jpg', 'Reprezentacje', 284, 177, '2022-05-09', 9, '', 4),
(40, 'Jan Oblak', 'oblak.jpg', 'Bramkarze', 710, 444, '2022-05-10', 62, 'Bramkarz Atletico Madryt ', 2),
(41, 'Manuel Neuer', 'neuer.jpg', 'Bramkarze', 300, 168, '2022-05-10', 9, 'Bramkarz Bayernu Monachium', 2),
(42, '', 'ter_stegen.jpg', 'Bramkarze', 284, 177, '2022-05-10', 10, 'Bramkarz FC Barcelony', 2),
(43, 'Giangluigi Donnarumma', 'donnaruma.jpg', 'Bramkarze', 1920, 1200, '2022-05-10', 420, 'Bramkarz PSG', 2),
(44, 'Thibau Courtois', 'curtois.jpg', 'Bramakrze', 284, 177, '2022-05-10', 6, 'Bramkarz Realu Madryt', 2),
(45, 'Ederson', 'ederson.jpg', 'Bramkarze', 800, 500, '2022-05-10', 82, 'Bramkarz Manchesteru City', 2),
(46, 'Wojciech Szczęsny', 'szczesny.jpg', 'Bramkarze', 710, 444, '2022-05-10', 61, 'Bramkarz Piemonte Calcio', 2),
(47, 'Hugo Lloris', 'lloris.jpg', 'Bramkarze', 768, 480, '2022-05-10', 56, 'Bramkarz Tottenhamu Hotspur', 2),
(48, 'Kasper Schmeichel', 'schmeichel.jpg', 'Bramkarze', 300, 168, '2022-05-10', 6, 'Bramkarz Leicester City', 2),
(49, 'Ac Milan', 'acmilan.jpg', 'Kluby', 1920, 1080, '2022-05-01', 145, 'włoski klub piłkarski z siedzibą w Mediolanie,
        wielokrotny klubowy mistrz Europy i świata', 3),
(50, 'Arsenal F.C.', 'arsenal.jpg', 'Kluby', 300, 168, '2022-05-02', 5, 'angielski klub piłkarski z siedzibą w północnym Londynie,
        w dzielnicy Holloway', 3),
(51, 'FC Barcelona', 'Barcelona.jpg', 'Kluby', 1920, 1080, '2022-05-03', 261, 'kataloński wielosekcyjny klub sportowy z Barcelony,
        istniejący od chwili powstania męskiej drużyny piłkarskiej', 3),
(52, 'Bayern Monachium', 'bayern.jpg', 'Kluby', 300, 168, '2022-05-23', 9, 'niemiecki klub sportowy z siedzibą w Monachium przy Strasees Bahn w Bawarii. 32 razy zdobył tytuł Mistrza Niemiec,
        20 razy wygrał Puchar Niemiec', 3),
(53, 'Borussia Dortmund', 'Borussia.jpg', 'Kluby', 300, 168, '2022-05-24', 8, 'niemiecki klub sportowy z siedzibą w Dortmundzie,
        w którym główną rolę odgrywa sekcja piłki nożnej', 3),
(54, 'Chelsea F.C.', 'chelsea.jpg', 'Kluby', 300, 168, '2022-05-21', 8, 'angielski,
        profesjonalny klub piłkarski mający swoją siedzibę w zachodnim Londynie, w dzielnicy Hammersmith and Fulham.', 3),
(55, 'Juventus F.C.', 'Juventus.jpg', 'Kluby', 300, 168, '2022-05-20', 9, 'włoski profesjonalny klub piłkarski założony 1 listopada 1897 roku jako SC Juventus przez grupę uczniów z liceum Massimo d’Azeglio', 3),
(56, 'Lechia Gdańsk', 'lechia.jpg', 'Kluby', 1920, 1080, '2022-05-10', 199, 'polski klub piłkarski z siedzibą w Gdańsku,
        zdobywca 2 Pucharów Polski oraz 2 Superpucharów Polski', 3),
(57, 'Liverpool F.C.', 'liverpool.jpg', 'Kluby', 1920, 1080, '2022-05-13', 245, 'pngielski klub piłkarski z siedzibą w Liverpoolu. W sezonie 2021/2022 jego pierwsza drużyna występuje w Premier League. 19-krotnie zostawał mistrzem Anglii,
        7 - krotnie zdobywał Puchar Anglii oraz 9-krotnie Puchar Ligi Angielskiej.', 3),
(58, 'Manchester City F.C.', 'mancity.jpg', 'Kluby', 2560, 1440, '2022-05-13', 670, ' angielski klub piłkarski z siedzibą w Manchesterze. W sezonie 2021/2022 występuje w Premier League. Klub powstał w 1880 roku jako Saint Marks,
        w 1887 został przemianowany na Ardwick AFC, a obecną nazwę nosi od 1894', 3),
(59, 'Manchester United F.C.', 'manutd.jpg', 'Kluby', 300, 168, '2022-05-13', 5, ' angielski klub piłkarski z siedzibą w Stretford,
        w hrabstwie Greater Manchester. Występuje w Premier League, której był jednym z założycieli w 1992 roku.', 3),
(60, 'Paris Saint Germain', 'PSG.jpg', 'Kluby', 300, 168, '2022-05-18', 7, 'francuski klub piłkarski z siedzibą w Paryżu,
        rozgrywający mecze na stadionie Parc des Princes', 3),
(61, 'Real Madryt', 'Real.jpg', 'Kluby', 1920, 1080, '2022-05-25', 376, 'hiszpański klub sportowy powstały w 1902. Słynie głównie z sukcesów istniejącej od chwili założenia drużyny piłki nożnej,
        która 35 razy zdobyła mistrzostwo Hiszpanii, 13 razy Puchar Europy/Ligę Mistrzów', 3),
(62, 'Tottenham Hotspur F.C.', 'Tottenham.jpg', 'Kluby', 1920, 1080, '2022-05-22', 412, 'angielski klub piłkarski z siedzibą w londyńskiej dzielnicy Tottenham,
        założony w 1882 roku jako Hotspur F.C. dwukrotny mistrz Anglii, ośmiokrotny zdobywca Pucharu Anglii, zwycięzca Pucharu Zdobywców Pucharów oraz dwukrotny triumfator rozgrywek o Puchar U', 3),
(64, 'Yann Sommer', 'sommer.jpg', 'Bramkarze', 1920, 1080, '2022-05-10', 1113, 'Bramkarz Borussi Mgladbach', 2),
(71, 'Aubameyang', 'aubameyang.jpg', 'Piłkarze', 284, 177, '2022-05-12', 10, 'Gracz Arsenalu', 1),
(72, 'Bruno Fernandes', 'bruno_fernandes.jpg', 'Piłkarze', 710, 444, '2022-05-12', 77, 'Gracz Manchesteru United', 1),
(74, 'Memphis Depay', 'depay.jpg', 'Piłkarze', 269, 187, '2022-05-12', 6, 'Gracz FC Barcelony', 1),
(75, 'Gnabry', 'gnabry.jpg', 'Piłkarze', 284, 177, '2022-05-12', 9, 'Gracz Bayernu Monachium', 1),
(76, 'Goretzka', 'goretzka.jpg', 'Piłkarze', 710, 444, '2022-05-12', 67, 'Gracz Bayernu Monachium', 1),
(77, 'Harry Kane', 'harry_kane.jpg', 'Piłkarze', 284, 177, '2022-05-12', 8, 'Gracz Tottenhamu Hotspur', 1),
(78, 'Romelou Lukaku', 'lukaku.jpg', 'Piłkarze', 710, 444, '2022-05-12', 61, 'Gracz Chelsea', 1),
(79, 'Mane', 'mane.jpg', 'Piłkarze', 284, 177, '2022-05-12', 9, 'Gracz Liverpoolu', 1),
(80, 'Keylor Navas', 'navas.jpg', 'Bramkarze', 300, 168, '2022-05-12', 8, 'Gracz PSG', 2),
(81, 'Keylor Navas', 'navas.jpg', 'Bramkarze', 300, 168, '2022-05-12', 8, 'Bramkarz PSG', 2),
(82, 'Pedri', 'pedri.jpg', 'Piłkarze', 201, 251, '2022-05-12', 8, 'Gracz FC Barcelony', 1),
(83, 'Phil Foden', 'phil_foden.jpg', 'Piłkarze', 300, 168, '2022-05-12', 14, 'Gracz Manchesteru City', 1),
(84, 'Rahim Sterling', 'rahim_sterling.jpg', 'Piłkarze', 284, 177, '2022-05-12', 9, 'Gracz Manchesteru City', 1),
(85, 'Werner', 'werner.jpg', 'Piłkarze', 1200, 728, '2022-05-12', 90, 'Gracz Chelsea', 1),
(86, 'Verratti', 'verrati.jpg', 'Piłkarze', 284, 177, '2022-05-12', 9, 'Gracz PSG', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeksy dla tabeli `wallpapers`
--
ALTER TABLE `wallpapers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `wallpapers`
--
ALTER TABLE `wallpapers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
