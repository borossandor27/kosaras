-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 15. 21:13
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `allatok`
--
CREATE DATABASE IF NOT EXISTS `allatok` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `allatok`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `allat`
--

CREATE TABLE `allat` (
  `all_id` int(11) NOT NULL,
  `all_neve` varchar(32) NOT NULL,
  `all_faj` varchar(32) NOT NULL,
  `all_fajta` varchar(64) NOT NULL,
  `all_szuletett` date NOT NULL,
  `all_neme` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `allat`
--

INSERT INTO `allat` (`all_id`, `all_neve`, `all_faj`, `all_fajta`, `all_szuletett`, `all_neme`) VALUES
(11234, 'Bodri', 'kutya', 'Border Collie', '2021-09-17', 'kan'),
(11235, 'Fifi', 'macska', 'Perzsa', '2019-04-25', 'nőstény'),
(11236, 'Rex', 'kutya', 'Német juhász', '2020-11-10', 'kan'),
(11237, 'Cicamica', 'macska', 'Bengáli', '2020-07-03', 'nőstény'),
(11238, 'Barna', 'lovak', 'Arab telivér', '2018-02-15', 'mén'),
(11239, 'Szusi', 'hörcsög', 'Aranyhörcsög', '2022-03-30', 'nőstény'),
(11240, 'Macsó', 'kutya', 'Mopsz', '2017-06-12', 'kan'),
(11241, 'Mogyi', 'hörcsög', 'Teddy hörcsög', '2021-01-08', 'nőstény'),
(11242, 'Max', 'papagáj', 'Ara', '2019-11-25', 'kandúr'),
(11243, 'Lucy', 'kutya', 'Bulldog', '2020-03-19', 'nőstény'),
(11244, 'Buddy', 'kutya', 'Labrador Retriever', '2018-08-05', 'kan'),
(11245, 'Whiskers', 'macska', 'Sziámi', '2019-02-14', 'nőstény'),
(11246, 'Luna', 'kutya', 'Shih Tzu', '2020-10-03', 'nőstény'),
(11247, 'Fluffy', 'macska', 'Angora', '2021-05-07', 'nőstény'),
(11248, 'Charlie', 'kutya', 'Beagle', '2019-07-22', 'kan'),
(11249, 'Nibbles', 'nyúl', 'Holland Lop', '2020-09-28', 'nőstény'),
(11250, 'Rocky', 'kutya', 'Staffordshire Bull Terrier', '2018-12-15', 'kan'),
(11251, 'Mia', 'macska', 'Török Van', '2017-03-11', 'nőstény'),
(11252, 'Oreo', 'kutya', 'Dalmatian', '2019-08-30', 'kan'),
(11253, 'Cinnamon', 'macska', 'Walesi macska', '2020-01-17', 'nőstény');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlo`
--

CREATE TABLE `vasarlo` (
  `vevo_id` int(11) NOT NULL,
  `vevo_neve` varchar(64) NOT NULL,
  `vevo_cime` varchar(128) NOT NULL,
  `vevo_tel` bigint(20) NOT NULL,
  `vevo_allatai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `vasarlo`
--

INSERT INTO `vasarlo` (`vevo_id`, `vevo_neve`, `vevo_cime`, `vevo_tel`, `vevo_allatai`) VALUES
(2548, 'Papp Sándor', '1142 Budapest, Léka u. 36', 36302054578, 11234),
(3657, 'Kovács Anna', '1034 Budapest, Eső u. 2', 36302567890, 11235),
(4789, 'Horváth Péter', '1024 Budapest, Pendő u. 85', 36303011223, 11236),
(5921, 'Szabó Judit', '1089 Budapest, Rákospatak u. 7', 36303545678, 11237),
(6543, 'Tóth Gábor', '1223 Budapest, Lépcsős u. 52', 36304078901, 11238),
(7890, 'Nagy Éva', '1075 Budapest, Holló u. 11', 36304512345, 11239),
(8321, 'Kiss Zoltán', '1094 Budapest, Páva u. 27', 36305045678, 11240),
(9456, 'Simon Éva', '1237 Budapest, Micimackó u. 32', 36305578901, 11241),
(10234, 'Molnár Péter', '1104 Budapest, Vörösdinka u. 27', 36306011234, 11242),
(11876, 'Kovács Zsuzsa', '1165 Budapest, Rajka u. 45', 36306545678, 11243),
(11876, 'Kovács Zsuzsa', '1165 Budapest, Rajka u. 45', 36306545678, 11244),
(2598, 'Szabó István', '1142 Budapest, Miskolci u. 8', 36308045678, 11245),
(2598, 'Szabó István', '1142 Budapest, Miskolci u. 8', 36308045678, 11246),
(2598, 'Szabó István', '1142 Budapest, Miskolci u. 8', 36308045678, 11247),
(3659, 'Kovács László', '1092 Budapest, Ráday u. 85', 36309545678, 11248),
(3659, 'Kovács László', '1092 Budapest, Ráday u. 85', 36309545678, 11249),
(5478, 'Cukor József', '1065 Budapest, Szív u. 25', 36310078902, 11250),
(6257, 'November Áron', '1117 Budapest, Alíz u. 14', 36310078903, 11251),
(7589, 'November Áron', '1117 Budapest, Alíz u. 14', 36310078903, 11252),
(9875, 'Pálma Fa', '1118 Budapest, Somlói út 12', 36310078905, 11253);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `allat`
--
ALTER TABLE `allat`
  ADD PRIMARY KEY (`all_id`);

--
-- A tábla indexei `vasarlo`
--
ALTER TABLE `vasarlo`
  ADD UNIQUE KEY `vevo_allatai` (`vevo_allatai`),
  ADD KEY `vevo_id` (`vevo_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `allat`
--
ALTER TABLE `allat`
  MODIFY `all_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11254;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `allat`
--
ALTER TABLE `allat`
  ADD CONSTRAINT `Allat_ibfk_1` FOREIGN KEY (`all_id`) REFERENCES `vasarlo` (`vevo_allatai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
