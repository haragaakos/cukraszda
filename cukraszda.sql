-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Nov 24. 19:29
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `cukraszda`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ar`
--

CREATE TABLE `ar` (
  `id` int(3) NOT NULL,
  `sutiid` int(3) DEFAULT NULL,
  `ertek` int(5) DEFAULT NULL,
  `egyseg` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `ar`
--

INSERT INTO `ar` (`id`, `sutiid`, `ertek`, `egyseg`) VALUES
(1, 32, 500, 'db'),
(2, 76, 10900, '16 szeletes'),
(3, 106, 4300, '8 szeletes'),
(4, 88, 300, 'db'),
(5, 116, 16200, '24 szeletes'),
(6, 135, 250, 'db'),
(7, 127, 4400, 'kg'),
(8, 50, 13400, '24 szeletes'),
(9, 70, 700, 'db'),
(10, 31, 5200, 'kg'),
(11, 96, 3300, 'kg ??'),
(12, 116, 5700, '8 szeletes'),
(13, 22, 9000, '16 szeletes'),
(14, 138, 4400, 'kg'),
(15, 112, 2900, 'kg'),
(16, 58, 3200, 'kg'),
(17, 98, 10400, '16 szeletes'),
(18, 75, 2100, 'r?d'),
(19, 24, 11400, '24 szeletes'),
(20, 62, 600, 'db'),
(21, 61, 8400, '16 szeletes'),
(22, 105, 10900, '16 szeletes'),
(23, 20, 4700, '8 szeletes'),
(24, 123, 1800, 'r?d'),
(25, 60, 8200, '16 szeletes'),
(26, 24, 3900, '8 szeletes'),
(27, 38, 4300, '8 szeletes'),
(28, 126, 2100, 'r?d'),
(29, 64, 750, 'db'),
(30, 109, 300, 'db'),
(31, 66, 350, ''),
(32, 89, 13200, '24 szeletes'),
(33, 98, 15400, '24 szeletes'),
(34, 24, 7400, '16 szeletes'),
(35, 76, 5700, '8 szeletes'),
(36, 131, 250, 'db'),
(37, 50, 9200, '16 szeletes'),
(38, 55, 600, 'db'),
(39, 87, 3400, 'kg'),
(40, 4, 3500, 'koszor?'),
(41, 8, 400, 'db'),
(42, 100, 450, 'db'),
(43, 129, 5300, '8 szeletes'),
(44, 35, 4700, '8 szeletes'),
(45, 47, 490, 'db'),
(46, 89, 9000, '16 szeletes'),
(47, 111, 3300, 'kg'),
(48, 94, 400, 'db'),
(49, 42, 16200, '24 szeletes'),
(50, 80, 350, 'db'),
(51, 134, 4700, '8 szeletes'),
(52, 128, 4000, 'kg'),
(53, 90, 5200, 'kg'),
(54, 39, 13200, '24 szeletes'),
(55, 71, 7400, '16 szeletes'),
(56, 17, 3400, 'kg'),
(57, 68, 18400, '24 szeletes'),
(58, 81, 8200, '16 szeletes'),
(59, 134, 9000, '16 szeletes'),
(60, 108, 11400, '24 szeletes'),
(61, 97, 5200, 'kg'),
(62, 81, 4300, '8 szeletes'),
(63, 44, 3800, 'kg'),
(64, 72, 5700, '8 szeletes'),
(65, 49, 250, 'db'),
(66, 48, 350, 'db'),
(67, 14, 350, 'db'),
(68, 107, 12200, '24 szeletes'),
(69, 27, 15400, '24 szeletes'),
(70, 106, 12100, '24 szeletes'),
(71, 74, 7400, '16 szeletes'),
(72, 40, 5700, '8 szeletes'),
(73, 133, 450, 'db'),
(74, 77, 490, 'db'),
(75, 22, 13200, '24 szeletes'),
(76, 119, 9000, '16 szeletes'),
(77, 120, 3400, 'kg'),
(78, 105, 5700, '8 szeletes'),
(79, 119, 13200, '24 szeletes'),
(80, 99, 4600, 'kg'),
(81, 61, 12200, '24 szeletes'),
(82, 93, 4200, 'kg'),
(83, 59, 13200, '24 szeletes'),
(84, 82, 5700, '8 szeletes'),
(85, 56, 600, 'db'),
(86, 23, 550, 'db'),
(87, 81, 12100, '24 szeletes'),
(88, 67, 500, 'db'),
(89, 68, 6400, '8 szeletes'),
(90, 38, 8200, '16 szeletes'),
(91, 139, 4700, '8 szeletes'),
(92, 30, 530, 'db'),
(93, 95, 16200, '24 szeletes'),
(94, 101, 400, 'db'),
(95, 65, 400, 'db'),
(96, 10, 12100, '24 szeletes'),
(97, 59, 9000, '16 szeletes'),
(98, 119, 4700, '8 szeletes'),
(99, 82, 16200, '24 szeletes'),
(100, 3, 3300, 'kg'),
(101, 104, 4200, 'kg'),
(102, 110, 530, 'db'),
(103, 1, 300, 'db'),
(104, 25, 8200, '16 szeletes'),
(105, 40, 16200, '24 szeletes'),
(106, 36, 490, 'db'),
(107, 124, 3900, '8 szeletes'),
(108, 16, 530, 'db'),
(109, 29, 3500, 'koszor?'),
(110, 116, 10900, '16 szeletes'),
(111, 71, 3900, '8 szeletes'),
(112, 2, 500, 'db'),
(113, 71, 11400, '24 szeletes'),
(114, 10, 4300, '8 szeletes'),
(115, 108, 3900, '8 szeletes'),
(116, 69, 450, 'db'),
(117, 39, 9000, '16 szeletes'),
(118, 25, 4300, '8 szeletes'),
(119, 107, 8400, '16 szeletes'),
(120, 5, 9000, '12 szeletes'),
(121, 106, 8200, '16 szeletes'),
(122, 114, 450, 'db'),
(123, 26, 400, 'db'),
(124, 82, 10900, '16 szeletes'),
(125, 28, 8200, '16 szeletes'),
(126, 42, 10900, '16 szeletes'),
(127, 35, 13200, '24 szeletes'),
(128, 74, 3900, '8 szeletes'),
(129, 19, 450, 'db'),
(130, 25, 12100, '24 szeletes'),
(131, 125, 5700, '8 szeletes'),
(132, 95, 5700, '8 szeletes'),
(133, 34, 1700, 'r?d'),
(134, 121, 530, 'db'),
(135, 76, 16200, '24 szeletes'),
(136, 13, 400, 'db'),
(137, 60, 12100, '24 szeletes'),
(138, 33, 350, 'db'),
(139, 132, 530, 'db'),
(140, 117, 9900, '16 szeletes'),
(141, 27, 10400, '16 szeletes'),
(142, 18, 490, 'db'),
(143, 124, 7400, '16 szeletes'),
(144, 122, 5200, 'kg'),
(145, 59, 4700, '8 szeletes'),
(146, 124, 11400, '24 szeletes'),
(147, 134, 13200, '24 szeletes'),
(148, 45, 450, 'db'),
(149, 63, 350, 'db'),
(150, 6, 3900, '8 szeletes'),
(151, 28, 4300, '8 szeletes'),
(152, 37, 3900, '8 szeletes'),
(153, 52, 5000, 'kg'),
(154, 61, 4500, '8 szeletes'),
(155, 86, 600, 'db'),
(156, 6, 7400, '16 szeletes'),
(157, 37, 7400, '16 szeletes'),
(158, 11, 490, 'db'),
(159, 108, 7400, '16 szeletes'),
(160, 35, 9000, '16 szeletes'),
(161, 107, 4500, '8 szeletes'),
(162, 6, 11400, '24 szeletes'),
(163, 79, 4000, 'kg'),
(164, 60, 4300, '8 szeletes'),
(165, 21, 5700, '8 szeletes'),
(166, 28, 12100, '24 szeletes'),
(167, 15, 5000, 'kg'),
(168, 21, 5700, '8 szeletes'),
(169, 37, 11400, '24 szeletes'),
(170, 74, 11400, '24 szeletes'),
(171, 103, 650, 'db'),
(172, 43, 4200, 'kg '),
(173, 12, 3400, 'kg'),
(174, 27, 5400, '8 szeletes'),
(175, 7, 490, 'db'),
(176, 84, 5200, 'kg'),
(177, 115, 3600, 'kg'),
(178, 51, 4000, 'kg'),
(179, 118, 450, 'db'),
(180, 41, 530, 'db'),
(181, 135, 400, 'db'),
(182, 73, 5400, '8 szeletes'),
(183, 10, 8200, '16 szeletes'),
(184, 98, 5400, '8 szeletes'),
(185, 113, 850, 'db'),
(186, 130, 350, 'db'),
(187, 39, 4700, '8 szeletes'),
(188, 136, 3400, 'kg'),
(189, 83, 650, 'db'),
(190, 91, 800, '20 dkg'),
(191, 46, 5200, 'kg'),
(192, 102, 330, 'db'),
(193, 95, 10900, '16 szeletes'),
(194, 54, 580, 'db'),
(195, 57, 530, 'db'),
(196, 22, 4700, '8 szeletes'),
(197, 92, 450, 'db'),
(198, 68, 12400, '16 szeletes'),
(199, 42, 5700, '8 szeletes'),
(200, 40, 10900, '16 szeletes'),
(201, 9, 450, 'db'),
(202, 78, 4200, 'kg'),
(203, 85, 500, 'db'),
(204, 137, 600, 'db'),
(205, 50, 4900, '8 szeletes'),
(206, 38, 12100, '24 szeletes'),
(207, 53, 4200, 'kg'),
(208, 89, 4700, '8 szeletes');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text COLLATE utf8_hungarian_ci NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'Ákos', 5, 'Finomak a sütik!', 1700831842),
(2, 'Próba kettő', 5, 'Nagyon finom minden!', 1700831884),
(3, 'Random Béla', 4, 'Egész jó!', 1700850371);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `suti`
--

CREATE TABLE `suti` (
  `id` int(3) NOT NULL,
  `nev` varchar(36) DEFAULT NULL,
  `tipus` varchar(16) DEFAULT NULL,
  `dijazott` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `suti`
--

INSERT INTO `suti` (`id`, `nev`, `tipus`, `dijazott`) VALUES
(1, 'S?ni', 'vegyes', 0),
(2, 'Gesztenyealag?t', 'vegyes', 0),
(3, 'Sajtos pog?csa', 's?s teas?tem?ny', 0),
(4, 'Di?s-m?kos', 'bejgli', 0),
(5, 'Sajttorta (m?ln?s)', 'torta', 0),
(6, 'Citrom', 'torta', 0),
(7, 'Eszterh?zy', 'tortaszelet', 0),
(8, 'R?k?czi-t?r?s;pite', '0', NULL),
(9, 'Meggyes kocka', 'tejsz?nes s?tem?', 0),
(10, 'Leg?nyfog?;torta', '-1', NULL),
(11, 'Alpesi karamell', 'tortaszelet', 0),
(12, 'K?kuszcs?k;?des teas?tem?ny', '0', NULL),
(13, 'Habos m?kos', 'pite', 0),
(14, 'Szilv?s;pite', '0', NULL),
(15, 'Juht?r?s p?rna', 's?s teas?tem?ny', 0),
(16, 'M?kos guba', 'tortaszelet', 0),
(17, 'N?r?', '?des teas?tem?ny', 0),
(18, 'Sacher', 'tortaszelet', 0),
(19, 'Citrom', 'tortaszelet', 0),
(20, 'Ribizlihabos-alm?s r?teges', 'k?l?nleges torta', -1),
(21, 'H?rom k?v?ns?g;torta', '-1', NULL),
(22, 'Dobos', 'torta', 0),
(23, 'Epres mascarpone', 'tortaszelet', 0),
(24, 'Csokol?d?mousse', 'torta', 0),
(25, 'Oroszkr?m;torta', '0', NULL),
(26, 'Medvetalp', 'vegyes', 0),
(27, 'Tr?ffel', 'torta', 0),
(28, 'Tejsz?nes gy?m?lcs?s (meggy)', 'torta', 0),
(29, 'M?kos-szilvalekv?ros', 'bejgli', 0),
(30, 'Ribizlihabos-?alm??s r?teges tortasz', 'tortaszelet', 0),
(31, 'Marcip?nos v?gott', '?des teas?tem?ny', 0),
(32, 'Indi?ner', 'vegyes', 0),
(33, 'Meggyes', 'pite', 0),
(34, 'M?kos', 'bejgli', 0),
(35, 'S?s karamella', 'torta', 0),
(36, 'Leg?nyfog?;tortaszelet', '0', NULL),
(37, 'Rig? Jancsi', 'torta', 0),
(38, 'Tejsz?nes gy?m?lcs?s (erdei gy?m?lcs', 'torta', 0),
(39, 'Ez+Az (csokol?d? ?s gesztenye)', 'torta', 0),
(40, 'M?ln?s mascarpone', 'torta', 0),
(41, 'Dobos', 'tortaszelet', 0),
(42, 'Ferrero', 'torta', 0),
(43, 'Vegyes h?zi pite falatok', 'pite', 0),
(44, '?k?rszem', '?des teas?tem?ny', 0),
(45, 'Danubius kocka', 'tejsz?nes s?tem?', 0),
(46, 'Sajtkr?mmel t?lt?tt f?nkocska', 's?s teas?tem?ny', 0),
(47, 'T?r?kr?m gy?m?lccsel d?sz?tve', 'tortaszelet', 0),
(48, 'Alm?s;pite', '0', NULL),
(49, 'Mignon', 'vegyes', 0),
(50, 'Csokol?d?mousse f?nyes csokol?d?val', 'torta', 0),
(51, 'V?gott s?s (s?s oml?s);s?s teas?tem?', '0', NULL),
(52, 'Nagyi s?s;s?s teas?tem?ny', '0', NULL),
(53, 'Vegyes s?s;s?s teas?tem?ny', '0', NULL),
(54, 'Soml?i;tortaszelet', '0', NULL),
(55, 'Tiramisu', 'tortaszelet', 0),
(56, 'Hegyvid?k;tortaszelet', '0', NULL),
(57, 'Szedres csokol?d?', 'tortaszelet', 0),
(58, 'Pog?cs?k vegyesen', 's?s teas?tem?ny', 0),
(59, 'L?dl?b;torta', '0', NULL),
(60, 'Sacher', 'torta', 0),
(61, 'Eszterh?zy', 'torta', 0),
(62, 'Zalav?ri gesztenye', 'tortaszelet', 0),
(63, 'Gesztenyegoly?;vegyes', '0', NULL),
(64, 'Piszt?ci?s-m?ln?s mascarpone', 'tortaszelet', 0),
(65, 'Habos m?kos', 'vegyes', 0),
(66, 'Franciakr?mes', 'kr?mes', 0),
(67, 'Gesztenye kocka', 'tejsz?nes s?tem?', 0),
(68, 'Piszt?ci?s-m?ln?s mascarpone', 'torta', 0),
(69, 'M?ln?s kocka', 'tejsz?nes s?tem?', 0),
(70, 'Sajttorta (m?ln?s)', 'tortaszelet', 0),
(71, 'T?r?kr?m gy?m?lccsel', 'torta', 0),
(72, 'Csokis kaland', 'k?l?nleges torta', -1),
(73, 'Soml?i;torta', '0', NULL),
(74, 'Palermo', 'torta', 0),
(75, 'Szilvalekv?ros', 'bejgli', 0),
(76, '?nnepi di?torta grill?zzsal', 'torta', 0),
(77, 'Oroszkr?m;tortaszelet', '0', NULL),
(78, 'Mini zserb?;?des teas?tem?ny', '0', NULL),
(79, 'Sajtos masni', 's?s teas?tem?ny', 0),
(80, 'Zserb?;pite', '0', NULL),
(81, 'Tejsz?nes gy?m?lcs?s (m?lna)', 'torta', 0),
(82, 'Marcip?nos csokol?d?', 'torta', 0),
(83, 'Csokis kaland', 'tortaszelet', 0),
(84, 'Marcip?n tekercs', '?des teas?tem?ny', 0),
(85, 'K?pvisel?f?nk', 'vegyes', 0),
(86, 'Epres omlett', 'vegyes', 0),
(87, 'Mini linzer', '?des teas?tem?ny', 0),
(88, 'Linzerkarika', 'vegyes', 0),
(89, 'Szedres csokol?d?', 'torta', 0),
(90, 'Narancs?v;?des teas?tem?ny', '0', NULL),
(91, 'Gesztenyep?r?;vegyes', '0', NULL),
(92, 'Palermo', 'tejsz?nes s?tem?', 0),
(93, 'Csokis n?r?', '?des teas?tem?ny', 0),
(94, 'Fl?dni', 'pite', 0),
(95, 'M?zeskal?cs', 'torta', 0),
(96, 'Ol?v?s pog?csa', 's?s teas?tem?ny', 0),
(97, 'Florentin', '?des teas?tem?ny', 0),
(98, 'Tiramisu', 'torta', 0),
(99, 'Zoli kedvence (v?gott ?des tea)', '?des teas?tem?ny', 0),
(100, 'Erdei gy?m?lcs kocka', 'tejsz?nes s?tem?', 0),
(101, 'R?k?czi-t?r?s;tortaszelet', '0', NULL),
(102, 'M?zeskr?mes', 'pite', 0),
(103, 'Tr?ffel', 'tortaszelet', 0),
(104, 'Szilv?s papucs', '?des teas?tem?ny', 0),
(105, 'Zalav?ri gesztenye', 'torta', -1),
(106, 'Danubius', 'torta', 0),
(107, 'Alpesi karamell', 'torta', 0),
(108, 'Puncs', 'torta', 0),
(109, 'Gesztenye sz?v;vegyes', '0', NULL),
(110, 'Ez+Az (csokol?d? ?s gesztenye)', 'tortaszelet', 0),
(111, 'T?kmagos f?lhold', 's?s teas?tem?ny', 0),
(112, 'Burgony?s pog?csa', 's?s teas?tem?ny', 0),
(113, 'Soml?i galuska', 'vegyes', 0),
(114, 'Puncs', 'tortaszelet', 0),
(115, 'Lekv?ros v?gott', '?des teas?tem?ny', 0),
(116, 'Oreo', 'torta', 0),
(117, 'Vintage', 'torta', 0),
(118, 'Rig? Jancsi', 'tejsz?nes s?tem?', 0),
(119, 'Feketeerd?', 'torta', 0),
(120, 'K?kuszos v?gott', '?des teas?tem?ny', 0),
(121, 'Feketeerd?', 'tortaszelet', 0),
(122, 'Moscauer', '?des teas?tem?ny', 0),
(123, 'Di?s;bejgli', '0', NULL),
(124, 'R?k?czi-t?r?s;torta', '0', NULL),
(125, 'H?rom k?v?ns?g;k?l?nleges torta', '0', NULL),
(126, 'Geszteny?s-karamell?s;bejgli', '0', NULL),
(127, 'Geszteny?s sz?v;?des teas?tem?ny', '0', NULL),
(128, 'Ropi', 's?s teas?tem?ny', 0),
(129, 'Paleolit ?tcsokol?d?', 'k?l?nleges torta', 0),
(130, 'T?r?s;pite', '0', NULL),
(131, 'Ischler', 'vegyes', 0),
(132, 'L?dl?b;tortaszelet', '0', NULL),
(133, 'Csokol?d?mousse', 'tortaszelet', 0),
(134, 'Di?;torta', '0', NULL),
(135, 'Kr?mes', 'kr?mes', 0),
(136, 'Mini ischler', '?des teas?tem?ny', 0),
(137, 'Paleolit ?tcsokol?d?', 'tortaszelet', 0),
(138, 'Tejf?l?s t?r?s hajtogatott', 's?s teas?tem?ny', 0),
(139, 'M?kos guba', 'torta', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tartalom`
--

CREATE TABLE `tartalom` (
  `id` int(2) NOT NULL,
  `sutiid` int(3) DEFAULT NULL,
  `mentes` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `tartalom`
--

INSERT INTO `tartalom` (`id`, `sutiid`, `mentes`) VALUES
(1, 26, 'G'),
(2, 37, 'L'),
(3, 83, 'HC'),
(4, 91, 'G'),
(5, 137, 'G'),
(6, 60, 'Te'),
(7, 129, 'HC'),
(8, 122, 'To'),
(9, 90, 'G'),
(10, 26, 'To'),
(11, 94, 'L'),
(12, 46, '?\r'),
(13, 72, 'HC'),
(14, 114, 'Te'),
(15, 63, 'To'),
(16, 12, 'Te'),
(17, 128, '?\r'),
(18, 51, '?\r'),
(19, 109, 'To'),
(20, 109, 'G'),
(21, 97, 'G'),
(22, 97, 'To'),
(23, 24, 'L'),
(24, 91, 'To'),
(25, 137, 'L'),
(26, 84, 'G'),
(27, 30, 'HC'),
(28, 108, 'Te'),
(29, 84, 'To'),
(30, 6, 'L'),
(31, 108, 'L'),
(32, 12, 'L'),
(33, 79, '?\r'),
(34, 72, 'G'),
(35, 118, 'L'),
(36, 60, 'L'),
(37, 52, '?\r'),
(38, 137, 'HC'),
(39, 114, 'L'),
(40, 90, 'To'),
(41, 20, 'HC'),
(42, 63, 'G'),
(43, 129, 'G'),
(44, 129, 'L'),
(45, 15, '?\r');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `usersEmail` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `usersUid` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `usersPwd` varchar(128) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(2, 'Akos', 'hakos@gmail.hu', 'Akos', '$2y$10$N0OIGc8RWkyNtuP.KdDXceyNyERnRzlrPRHoiGGSsaoasC.Rpn9ja'),
(3, 'Proba', 'proba@gmail.com', 'Proba', '$2y$10$aBPJF9GxKtor/iYIEL/eTuTvXNq/uRFKYqVV1jXhfCs/8z40xiwLq'),
(4, 'Proba2', 'proba3@gmail.com', 'Proba2', '$2y$10$S5Oswl2LO5x0MNk4r3qB.OrqbuNu3B80zvXv9ZFIcz4rYIz4QeN3q'),
(5, 'Proba4', 'proba4@gmail.com', 'Proba4', '$2y$10$vctDAMinC6yIUNmwTZkltuHAPjeCxtXMC7Lp8q6pT90RZwHWcY5Ty');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `ar`
--
ALTER TABLE `ar`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- A tábla indexei `suti`
--
ALTER TABLE `suti`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `tartalom`
--
ALTER TABLE `tartalom`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ar`
--
ALTER TABLE `ar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT a táblához `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `suti`
--
ALTER TABLE `suti`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT a táblához `tartalom`
--
ALTER TABLE `tartalom`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
