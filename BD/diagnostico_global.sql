-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-05-2022 a las 03:52:53
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17593952_la_nueva_realidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico_global`
--

CREATE TABLE `diagnostico_global` (
  `id` int(11) NOT NULL,
  `nit_empresa_d` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `perspectiva_c_d` double NOT NULL,
  `perspectiva_c` double NOT NULL,
  `perspectiva_p_i` double NOT NULL,
  `perspectiva_f` double NOT NULL,
  `total_perspectivas` double NOT NULL,
  `ciiu` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fecha_registro_d_g` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `diagnostico_global`
--

INSERT INTO `diagnostico_global` (`id`, `nit_empresa_d`, `perspectiva_c_d`, `perspectiva_c`, `perspectiva_p_i`, `perspectiva_f`, `total_perspectivas`, `ciiu`, `fecha_registro_d_g`) VALUES
(2, '463697110', 19, 11, 9, 9, 48, 'M', '2021-11-03 04:15:04'),
(3, '400423974', 18, 10, 11, 7, 46, 'Q', '2021-11-04 03:50:38'),
(4, '529604301', 19, 9, 5, 10, 43, 'G', '2021-11-05 22:23:42'),
(5, '8440002822', 14, 2, 12, 10, 38, 'I', '2021-11-05 22:23:49'),
(6, '805054080', 15, 8, 5, 4, 32, 's', '2021-11-05 22:23:55'),
(7, '10986743677', 13, 11, 9, 8, 41, 'M', '2021-11-05 22:24:12'),
(8, '474425560', 21, 3, 4, 9, 37, 'N', '2021-11-05 22:24:25'),
(9, '9005227421', 14, 6, 9, 11, 40, 'H', '2021-11-05 22:24:36'),
(10, '400358191', 17, 8, 9, 6, 40, 'I', '2021-11-05 22:24:59'),
(11, '8440025351', 15, 8, 7, 6, 36, 'A', '2021-11-05 22:25:14'),
(12, '9014692428', 22, 5, 8, 9, 44, 'M', '2021-11-05 22:25:23'),
(13, '474285856', 16, 9, 12, 6, 43, 'C', '2021-11-05 22:25:30'),
(14, '53143501', 14, 4, 8, 7, 33, 'C', '2021-11-05 22:25:57'),
(15, '73643571', 9, 6, 6, 4, 25, 'G', '2021-11-05 22:26:05'),
(16, '40761364', 13, 5, 3, 8, 29, 'C', '2021-11-05 22:26:12'),
(17, '11185343228', 17, 6, 6, 10, 39, 'I', '2021-11-05 22:26:42'),
(18, '912597366', 17, 8, 6, 11, 42, 'G', '2021-11-05 22:27:02'),
(19, '474284231', 15, 15, 6, 9, 45, 'G', '2021-11-05 22:27:09'),
(20, '10207745797', 16, 12, 7, 13, 48, 'C', '2021-11-05 22:27:17'),
(21, '10065590709', 23, 6, 5, 10, 44, 'G', '2021-11-05 22:27:26'),
(22, '683022680', 19, 6, 2, 2, 29, 'N', '2021-11-05 22:27:43'),
(23, '95178173', 12, 8, 4, 11, 35, 'M', '2021-11-05 22:27:52'),
(24, '463620831', 11, 6, 4, 8, 29, 'I', '2021-11-05 22:28:00'),
(25, '67654710', 9, 6, 4, 9, 28, 'C', '2021-11-05 22:28:11'),
(26, '94349816', 17, 6, 4, 5, 32, 'N', '2021-11-10 13:47:24'),
(27, '94323721', 19, 12, 6, 9, 46, 'I', '2021-11-10 13:49:47'),
(28, '11185443284', 14, 4, 2, 3, 23, 'C', '2021-11-10 13:50:00'),
(29, '41441818', 6, 1, 3, 4, 14, 'G', '2021-11-10 14:06:13'),
(30, '473954030', 12, 5, 7, 6, 30, 'G', '2021-11-10 14:06:36'),
(31, '9010431311', 22, 8, 12, 14, 56, 'C', '2021-11-10 14:07:11'),
(32, '427910923', 9, 3, 6, 6, 24, 'G', '2021-11-10 14:07:21'),
(33, '743520292', 12, 4, 3, 10, 29, 'C', '2021-11-10 14:07:38'),
(34, '743352494', 8, 6, 5, 7, 26, 'G', '2021-11-10 14:07:49'),
(35, '234669520', 8, 6, 3, 4, 21, 'G', '2021-11-10 14:08:00'),
(36, '1115854654', 19, 13, 4, 7, 43, 'G', '2021-11-10 14:08:16'),
(37, '416783258', 12, 8, 5, 7, 32, 'Q', '2021-11-10 14:08:27'),
(38, '747532609', 7, 1, 7, 6, 21, 'F', '2021-11-10 14:08:40'),
(39, '11158529133', 19, 15, 14, 7, 55, 'G', '2021-11-10 14:09:05'),
(40, '11218552299', 17, 7, 6, 10, 40, 'G', '2021-11-10 14:10:10'),
(41, '516693485', 13, 5, 11, 8, 37, 'I', '2021-11-10 14:10:25'),
(42, '11158529663', 15, 8, 2, 4, 29, 'G', '2021-11-10 14:10:39'),
(43, '11165489435', 11, 7, 5, 3, 26, 'I', '2021-11-10 14:10:50'),
(44, '11185488839', 15, 6, 1, 3, 25, 'S', '2021-11-10 14:11:32'),
(45, '474414489', 14, 6, 10, 13, 43, 'M', '2021-11-10 14:11:44'),
(46, '242260632', 11, 4, 3, 4, 22, 'I', '2021-11-10 14:11:55'),
(47, '173263419', 14, 9, 12, 7, 42, 'I', '2021-11-10 14:12:47'),
(48, '173085118', 11, 3, 2, 5, 21, 'N', '2021-11-10 14:13:01'),
(49, '793399688', 8, 8, 4, 3, 23, 'G', '2021-11-10 14:13:14'),
(50, '741892520', 1, 12, 12, 6, 31, 'H', '2021-11-10 14:14:50'),
(51, '8909014736', 9, 6, 12, 9, 36, 'G', '2021-11-10 14:15:04'),
(52, '114358486', 13, 8, 5, 4, 30, 'S', '2021-11-10 14:15:18'),
(53, '173045474', 18, 2, 1, 3, 24, 'G', '2021-11-10 14:15:36'),
(54, '11185525474', 14, 9, 10, 6, 39, 'S', '2021-11-10 14:16:14'),
(55, '42952741', 5, 1, 2, 7, 15, 'G', '2021-11-10 14:19:28'),
(56, '747708552', 21, 6, 7, 12, 46, 'M', '2021-11-10 14:20:23'),
(57, '234225812', 7, 0, 0, 0, 7, 'G', '2021-11-10 14:21:21'),
(58, '399492872', 14, 4, 7, 7, 32, 'G', '2021-11-10 21:52:48'),
(59, '239367997', 4, 3, 1, 4, 12, 'I', '2021-11-10 21:53:46'),
(60, '496570428', 9, 4, 3, 2, 18, 'G', '2021-11-11 19:53:53'),
(61, '94325649', 15, 13, 12, 10, 50, 'F', '2021-11-11 19:54:16'),
(62, '912492290', 9, 2, 2, 12, 25, 'G', '2021-11-11 19:54:54'),
(63, '94308540', 14, 8, 7, 4, 33, 'F', '2021-11-11 19:55:14'),
(64, '9001393031', 13, 8, 6, 4, 31, 'F', '2021-11-11 19:55:45'),
(65, '797474393', 14, 7, 7, 4, 32, 'G', '2021-11-16 22:03:16'),
(66, '96586544', 12, 7, 9, 9, 37, 'G', '2022-03-01 14:41:10'),
(67, '474415448', 12, 4, 6, 8, 30, 'H', '2022-03-01 14:41:40'),
(68, '10942675713', 5, 8, 5, 9, 27, 'N', '2022-03-01 14:41:57'),
(69, '747524388', 13, 8, 9, 9, 39, 'C', '2022-03-01 14:42:11'),
(70, '7002119879', 11, 7, 4, 9, 31, 'I', '2022-03-01 14:42:44'),
(71, '72251326', 13, 9, 5, 11, 38, 'F', '2022-03-01 14:43:03'),
(72, '234178111', 12, 7, 6, 7, 32, 'A', '2022-03-01 14:43:24'),
(73, '11185577101', 18, 5, 5, 8, 36, 'G', '2022-03-01 14:43:44'),
(74, '474356498', 16, 4, 4, 9, 33, 'S', '2022-03-01 14:44:00'),
(75, '11158636698', 12, 5, 5, 6, 28, 'I', '2022-03-01 14:44:15'),
(76, '11158636698', 12, 5, 5, 6, 28, 'I', '2022-03-01 14:44:15'),
(77, '234180547', 23, 8, 1, 3, 35, 'G', '2022-03-01 14:44:30'),
(78, '70621364', 9, 0, 5, 6, 20, 'G', '2022-03-01 14:44:46'),
(79, '800489682', 11, 6, 9, 4, 30, 'F', '2022-03-01 14:45:03'),
(80, '416484749', 9, 5, 6, 6, 26, 'I', '2022-03-01 14:45:24'),
(81, '399494664', 14, 8, 3, 3, 28, 'J', '2022-03-01 14:45:50'),
(82, '747555523', 14, 11, 8, 7, 40, 'G', '2022-03-01 22:24:36'),
(83, '237942623', 4, 5, 1, 4, 14, 'G', '2022-04-29 15:34:29'),
(84, '41508454', 9, 2, 4, 7, 22, 'C', '2022-04-29 15:34:42'),
(85, '474387586', 16, 11, 10, 3, 40, 'N', '2022-04-29 15:35:05'),
(86, '11185504721', 20, 4, 8, 5, 37, 'S', '2022-04-29 15:35:13'),
(87, '399485201', 19, 2, 13, 7, 41, 'N', '2022-04-29 15:35:42'),
(88, '237012750', 11, 2, 3, 10, 26, 'G', '2022-04-29 15:36:02'),
(89, '9014687187', 18, 7, 9, 14, 48, 'S', '2022-04-29 15:36:15'),
(90, '336453945', 15, 3, 0, 0, 18, 'G', '2022-04-29 15:36:25'),
(91, '522404040', 18, 7, 8, 5, 38, 'I', '2022-04-29 15:36:43'),
(92, '242307549', 10, 3, 3, 6, 22, 'G', '2022-04-29 15:36:58'),
(93, '353749869', 8, 0, 0, 2, 10, 'G', '2022-04-29 15:37:21'),
(94, '474269606', 17, 9, 7, 4, 37, 'G', '2022-04-29 15:37:48'),
(95, '9014712875', 16, 5, 8, 9, 38, 'P', '2022-04-29 15:37:57'),
(96, '94324665', 10, 3, 5, 8, 26, 'G', '2022-04-29 15:38:13'),
(97, '137027710', 7, 2, 4, 9, 22, 'G', '2022-04-29 15:38:22'),
(98, '96560442', 11, 5, 4, 8, 28, 'G', '2022-04-29 15:38:36'),
(99, '708125365', 14, 15, 6, 4, 39, 'G', '2022-04-29 15:39:31'),
(100, '73610978', 15, 3, 5, 12, 35, 'G', '2022-04-29 15:39:45'),
(101, '11185332067', 12, 8, 6, 9, 35, 'F', '2022-04-29 15:39:59'),
(102, '526569410', 11, 6, 7, 9, 33, 'G', '2022-04-29 15:40:16'),
(103, '237948203', 15, 6, 6, 8, 35, 'G', '2022-04-29 15:40:29'),
(104, '137201338', 7, 3, 5, 6, 21, 'G', '2022-04-29 15:40:53'),
(105, '748605364', 19, 14, 11, 6, 50, 'G', '2022-04-29 15:41:22'),
(106, '474417089', 12, 7, 8, 5, 32, 'I', '2022-04-29 15:41:57'),
(107, '11185505554', 2, 0, 5, 8, 15, 'G', '2022-04-29 15:42:12'),
(108, '463698221', 13, 4, 6, 1, 24, 'I', '2022-04-29 15:43:21'),
(109, '748486861', 8, 2, 6, 3, 19, 'G', '2022-04-29 15:44:02'),
(110, '238356039', 9, 7, 5, 7, 28, 'G', '2022-04-29 15:44:14'),
(111, '96550534', 9, 7, 6, 7, 29, 'G', '2022-04-29 15:44:28'),
(112, '11169924469', 21, 14, 10, 11, 56, 'I', '2022-04-29 15:45:17'),
(113, '237908355', 12, 5, 14, 11, 42, 'I', '2022-04-29 15:45:33'),
(114, '242284397', 11, 2, 3, 1, 17, 'G', '2022-04-29 15:45:50'),
(115, '11368796741', 13, 13, 9, 8, 43, 'N', '2022-04-29 15:46:14'),
(116, '9013229043', 19, 9, 9, 9, 46, 'A', '2022-04-29 15:46:38'),
(117, '398110263', 17, 10, 10, 5, 42, 'I', '2022-04-29 15:46:52'),
(118, '41502960', 15, 8, 1, 4, 28, 'C', '2022-04-29 15:47:04'),
(119, '41565686', 21, 12, 5, 4, 42, 'G', '2022-04-29 15:47:22'),
(120, '47438363', 7, 5, 4, 6, 22, 'I', '2022-04-29 15:48:01'),
(121, '633312360', 15, 8, 10, 7, 40, 'G', '2022-04-29 15:49:54'),
(122, '633312360', 15, 8, 10, 7, 40, 'G', '2022-04-29 15:49:54'),
(123, '334810074', 19, 12, 4, 9, 44, 'G', '2022-04-29 15:50:15'),
(124, '11931507080', 13, 6, 1, 0, 20, 'G', '2022-04-29 15:50:34'),
(125, '204078512', 8, 4, 7, 3, 22, 'C', '2022-04-29 15:50:55'),
(126, '924952463', 18, 3, 4, 5, 30, 'S', '2022-04-29 15:51:15'),
(127, '11159174900', 17, 3, 8, 5, 33, 'E', '2022-04-29 15:52:10'),
(128, '237256882', 15, 9, 5, 9, 38, 'G', '2022-04-29 15:56:02'),
(129, '231485040', 11, 0, 6, 5, 22, 'G', '2022-04-29 15:56:20'),
(130, '11166128953', 17, 8, 7, 5, 37, 'N', '2022-04-29 15:56:31'),
(131, '805423359', 7, 3, 6, 6, 22, 'C', '2022-04-29 16:28:39'),
(132, '96591358', 8, 2, 6, 5, 21, 'I', '2022-04-29 16:29:40'),
(133, '96519167', 6, 6, 3, 2, 17, 'I', '2022-04-29 16:29:50'),
(134, '242279609', 3, 1, 2, 9, 15, 'G', '2022-04-29 16:30:04'),
(135, '11165466377', 9, 4, 2, 9, 24, 'G', '2022-04-29 16:30:20'),
(136, '242282154', 13, 7, 12, 4, 36, 'G', '2022-04-29 16:30:35'),
(137, '241437127', 12, 2, 8, 4, 26, 'C', '2022-04-29 16:33:21'),
(138, '219691763', 10, 6, 7, 8, 31, 'G', '2022-04-29 16:33:47'),
(139, '9009932491', 14, 5, 5, 5, 29, 'H', '2022-05-03 14:20:04'),
(140, '198912058', 8, 2, 5, 6, 21, 'C', '2022-05-13 16:54:11'),
(141, '11185370313', 9, 5, 6, 12, 32, 'G', '2022-05-13 16:54:27'),
(142, '11226514142', 14, 9, 8, 9, 40, 'F', '2022-05-13 16:54:53'),
(143, '395362482', 10, 3, 2, 7, 22, 'G', '2022-05-13 16:56:47'),
(144, '11186506773', 10, 5, 5, 6, 26, 'G', '2022-05-13 16:57:59'),
(145, '190752093', 8, 10, 6, 9, 33, 'G', '2022-05-13 16:58:45'),
(146, '39948144', 6, 0, 8, 2, 16, 'I', '2022-05-13 16:58:59'),
(147, '300561317', 6, 0, 5, 3, 14, 'G', '2022-05-13 16:59:12'),
(148, '8440033231', 13, 3, 7, 8, 31, 'A', '2022-05-13 16:59:26'),
(149, '96581679', 15, 7, 8, 11, 41, 'N', '2022-05-13 16:59:35'),
(150, '242280158', 12, 7, 8, 7, 34, 'Q', '2022-05-13 16:59:45'),
(151, '397521243', 12, 6, 9, 7, 34, 'M', '2022-05-13 17:00:01'),
(152, '212346777', 8, 2, 11, 2, 23, 'I', '2022-05-13 17:00:17'),
(153, '474382127', 15, 0, 7, 1, 23, 'I', '2022-05-13 17:00:49'),
(154, '882339717', 14, 14, 9, 4, 41, 'M', '2022-05-13 17:01:00'),
(155, '87219780', 4, 9, 4, 4, 21, 'F', '2022-05-13 17:01:17'),
(156, '95240731', 13, 2, 6, 4, 25, 'G', '2022-05-13 17:01:32'),
(157, '72125623', 12, 5, 7, 3, 27, 'G', '2022-05-13 17:01:51'),
(158, '508938808', 10, 4, 2, 3, 19, 'G', '2022-05-13 17:02:21'),
(159, '748611190', 9, 5, 1, 4, 19, 'C', '2022-05-13 17:02:49'),
(160, '466740278', 14, 6, 13, 9, 42, 'M', '2022-05-13 17:03:05'),
(161, '796712604', 22, 8, 14, 9, 53, 'M', '2022-05-13 17:03:16'),
(162, '96534996', 8, 4, 3, 9, 24, 'G', '2022-05-13 17:03:31'),
(163, '96567909', 14, 3, 7, 6, 30, 'G', '2022-05-13 17:03:43'),
(164, '237409492', 8, 6, 8, 5, 27, 'I', '2022-05-13 17:03:56'),
(165, '632861621', 16, 14, 8, 8, 46, 'G', '2022-05-13 17:04:13'),
(166, '93991541', 18, 8, 6, 6, 38, 'G', '2022-05-13 17:04:57'),
(167, '740825825', 19, 11, 12, 8, 50, 'G', '2022-05-13 17:05:29'),
(168, '193257786', 18, 3, 12, 6, 39, 'G', '2022-05-13 17:05:47'),
(169, '234666304', 9, 2, 1, 9, 21, 'G', '2022-05-13 17:06:51'),
(170, '39849671', 17, 9, 15, 7, 48, 'G', '2022-05-13 17:07:04'),
(171, '407589225', 7, 3, 5, 4, 19, 'G', '2022-05-13 17:07:16'),
(172, '173254587', 13, 7, 8, 6, 34, 'G', '2022-05-13 17:07:30'),
(173, '474290527', 10, 2, 2, 8, 22, 'G', '2022-05-13 17:07:43'),
(174, '474304403', 10, 9, 1, 2, 22, 'S', '2022-05-13 18:20:54'),
(175, '474327833', 12, 6, 8, 3, 29, 'I', '2022-05-13 18:21:11'),
(176, '474333029', 11, 4, 4, 4, 23, 'S', '2022-05-13 18:22:24'),
(177, '42778561', 14, 6, 11, 7, 38, 'G', '2022-05-13 18:22:37'),
(178, '11159123060', 19, 6, 7, 11, 43, 'G', '2022-05-13 18:22:51'),
(179, '474326691', 21, 7, 10, 4, 42, 'M', '2022-05-13 19:34:24'),
(180, '234669276', 9, 1, 1, 2, 13, 'G', '2022-05-13 19:37:23'),
(181, '73606363', 11, 1, 9, 5, 26, 'I', '2022-05-13 19:37:58'),
(182, '11185749876', 16, 4, 4, 6, 30, 'G', '2022-05-13 19:38:53'),
(183, '860828031', 8, 7, 7, 6, 28, 'G', '2022-05-13 19:39:36'),
(184, '241910962', 8, 3, 11, 6, 28, 'G', '2022-05-13 19:40:46'),
(185, '9013175112', 13, 5, 3, 9, 30, 'M', '2022-05-13 19:42:06'),
(186, '519366921', 8, 0, 3, 8, 19, 'G', '2022-05-13 19:44:05'),
(187, '319555249', 14, 6, 6, 3, 29, 'I', '2022-05-13 19:44:43'),
(188, '463860684', 16, 3, 6, 6, 31, 'C', '2022-05-13 19:45:43'),
(189, '3349513', 11, 4, 4, 7, 26, 'G', '2022-05-13 19:46:28'),
(190, '10323911177', 12, 2, 2, 6, 22, 'G', '2022-05-13 19:48:11'),
(191, '11185350489', 11, 5, 10, 6, 32, 'C', '2022-05-13 19:48:49'),
(192, '237946973', 13, 2, 4, 6, 25, 'G', '2022-05-13 19:50:41'),
(193, '300569828', 13, 3, 12, 6, 34, 'C', '2022-05-13 19:53:06'),
(194, '234176803', 19, 5, 12, 6, 42, 'C', '2022-05-13 19:54:11'),
(195, '474281008', 11, 9, 1, 5, 26, 'I', '2022-05-13 19:55:13'),
(196, '189211772', 12, 10, 7, 9, 38, 'I', '2022-05-13 19:56:00'),
(197, '463778398', 10, 4, 7, 5, 26, 'J', '2022-05-13 19:57:29'),
(198, '474250267', 7, 2, 2, 10, 21, 'I', '2022-05-13 19:58:04'),
(199, '474341604', 9, 1, 0, 4, 14, 'G', '2022-05-13 19:59:03'),
(200, '474341604', 9, 1, 0, 4, 14, 'G', '2022-05-13 19:59:06'),
(201, '399487127', 9, 2, 2, 2, 15, 'G', '2022-05-13 20:00:04'),
(202, '94340425', 17, 8, 5, 7, 37, 'G', '2022-05-13 20:01:41'),
(203, '9004330669', 11, 3, 7, 8, 29, 'L', '2022-05-13 20:04:00'),
(204, '11175136243', 12, 6, 4, 7, 29, 'C', '2022-05-13 20:05:46'),
(205, '403629421', 14, 2, 1, 4, 21, 'I', '2022-05-13 20:06:35'),
(206, '207497013', 6, 2, 2, 3, 13, 'G', '2022-05-13 20:07:23'),
(207, '632971303', 23, 5, 5, 12, 45, 'C', '2022-05-13 20:09:23'),
(208, '237391567', 20, 1, 5, 3, 29, 'G', '2022-05-13 20:13:08'),
(209, '474289621', 15, 5, 10, 4, 34, 'C', '2022-05-13 20:14:33'),
(210, '11185557854', 17, 9, 7, 6, 39, 'G', '2022-05-13 20:15:18'),
(211, '9013204186', 16, 8, 6, 9, 39, 'P', '2022-05-13 20:23:17'),
(212, '173304326', 16, 6, 11, 8, 41, 'G', '2022-05-13 20:23:42'),
(213, '11185373049', 14, 7, 7, 9, 37, 'G', '2022-05-13 20:24:04'),
(214, '463741397', 17, 5, 1, 4, 27, 'F', '2022-05-13 20:25:41'),
(215, '11185495348', 19, 8, 11, 12, 50, 'M', '2022-05-13 20:27:12'),
(216, '474287891', 14, 4, 8, 7, 33, 'G', '2022-05-13 20:28:04'),
(217, '66712315', 12, 8, 5, 7, 32, 'G', '2022-05-13 20:37:55'),
(218, '748490756', 10, 4, 4, 7, 25, 'A', '2022-05-13 20:39:10'),
(219, '237412167', 16, 13, 8, 6, 43, 'G', '2022-05-13 20:40:30'),
(220, '336451576', 18, 2, 3, 6, 29, 'G', '2022-05-13 20:42:19'),
(221, '11040694127', 13, 8, 10, 10, 41, 'G', '2022-05-13 20:44:49'),
(222, '10305932706', 18, 3, 3, 8, 32, 'G', '2022-05-13 20:46:18'),
(223, '523359137', 17, 8, 10, 7, 42, 'G', '2022-05-13 20:48:08'),
(226, '238276651', 12, 6, 5, 7, 30, 'G', '2022-05-13 20:52:02'),
(227, '238348403', 12, 0, 3, 7, 22, 'G', '2022-05-13 20:55:38'),
(228, '823618446', 13, 6, 7, 6, 32, 'V', '2022-05-13 20:57:31'),
(229, '10984066666', 13, 9, 6, 6, 34, 'V', '2022-05-13 21:00:13'),
(230, '10575783376', 15, 9, 9, 10, 43, 'v', '2022-05-13 21:00:49'),
(231, '10077471832', 19, 9, 1, 5, 34, 'G', '2022-05-13 21:01:23'),
(232, '9006902286', 16, 14, 12, 8, 50, 'F', '2022-05-13 21:02:34'),
(233, '793554559', 11, 11, 11, 8, 41, 'G', '2022-05-13 21:04:05'),
(234, '9004740657', 17, 4, 6, 9, 36, 'F', '2022-05-13 21:04:44'),
(235, '165452559', 11, 1, 4, 6, 22, 'I', '2022-05-13 21:05:18'),
(236, '11159127070', 18, 7, 8, 8, 41, 'G', '2022-05-13 21:06:00'),
(237, '72207308', 13, 3, 2, 6, 24, 'A', '2022-05-13 21:07:21'),
(238, '463678625', 15, 3, 4, 6, 28, 'R', '2022-05-13 21:08:20'),
(239, '11158511971', 8, 2, 1, 4, 15, 'S', '2022-05-13 21:09:10'),
(240, '800185975', 20, 7, 9, 8, 44, 'G', '2022-05-13 21:10:45'),
(241, '11185683145', 16, 6, 4, 6, 32, 'M', '2022-05-13 21:11:13'),
(242, '11219162252', 17, 13, 10, 9, 49, 'I', '2022-05-13 21:11:50'),
(243, '474352266', 12, 3, 3, 6, 24, 'G', '2022-05-13 21:12:25'),
(244, '281497903', 12, 7, 2, 5, 26, 'I', '2022-05-13 21:12:59'),
(245, '10496099981', 15, 6, 7, 6, 34, 'M', '2022-05-13 21:13:47'),
(246, '667022554', 13, 11, 4, 5, 33, 'I', '2022-05-13 21:14:58'),
(247, '792628386', 12, 5, 7, 6, 30, 'G', '2022-05-13 21:16:04'),
(248, '463669027', 18, 11, 4, 9, 42, 'G', '2022-05-13 21:17:03'),
(249, '11185756772', 6, 3, 2, 9, 20, 'G', '2022-05-13 21:17:49'),
(250, '8440027317', 12, 2, 11, 11, 36, 'F', '2022-05-13 21:18:41'),
(251, '334472203', 11, 1, 4, 7, 23, 'G', '2022-05-13 21:19:50'),
(252, '288625209', 8, 0, 3, 2, 13, 'G', '2022-05-13 21:21:07'),
(253, '42950849', 10, 6, 7, 4, 27, 'G', '2022-05-13 21:21:58'),
(254, '95244817', 10, 3, 1, 10, 24, 'l', '2022-05-13 21:24:09'),
(255, '9013221729', 14, 5, 10, 7, 36, 'E', '2022-05-13 21:26:58'),
(256, '603982454', 19, 9, 8, 6, 42, 'G', '2022-05-13 21:29:43'),
(257, '464501013', 13, 1, 8, 5, 27, 'S', '2022-05-13 21:34:32'),
(258, '237910078', 3, 3, 4, 15, 25, 'S', '2022-05-13 21:35:20'),
(259, '10705932686', 6, 0, 1, 1, 8, 'C', '2022-05-13 21:36:46'),
(260, '523085874', 5, -1, 1, 3, 8, 'N', '2022-05-13 21:38:15'),
(261, '9013219809', 16, 7, 7, 10, 40, 'G', '2022-05-13 21:41:06'),
(262, '11185650265', 17, 10, 12, 5, 44, 'G', '2022-05-13 21:44:51'),
(263, '11185650265', 17, 10, 12, 5, 44, 'G', '2022-05-13 21:44:54'),
(264, '94322612', 8, 0, 3, 8, 19, 'G', '2022-05-13 21:45:44'),
(265, '860390983', 14, 2, 4, 3, 23, 'Q', '2022-05-13 21:48:50'),
(266, '138939034', 9, 5, 5, 4, 23, 'H', '2022-05-13 21:50:23'),
(267, '125010226', 16, 5, 4, 5, 30, 'A', '2022-05-13 21:55:04'),
(268, '11185455547', 19, 16, 13, 7, 55, 'G', '2022-05-13 22:01:04'),
(269, '334803581', 11, 4, 2, 6, 23, 'G', '2022-05-13 22:02:10'),
(270, '234678677', 19, 5, 8, 7, 39, 'G', '2022-05-13 22:04:58'),
(271, '234672090', 22, 6, 5, 1, 34, 'G', '2022-05-13 22:06:57'),
(272, '242267006', 14, 9, 12, 6, 41, 'R', '2022-05-13 22:07:29'),
(273, '474370925', 14, 9, 8, 6, 37, 'I', '2022-05-13 22:09:15'),
(274, '9006918240', 15, 9, 7, 5, 36, 'F', '2022-05-13 22:09:46'),
(275, '9006934182', 17, 3, 12, 4, 36, 'C', '2022-05-13 22:10:22'),
(276, '463756781', 19, 2, 2, 6, 29, 'S', '2022-05-13 22:17:39'),
(277, '748601021', 13, 7, 9, 8, 37, 'C', '2022-05-13 22:24:04'),
(278, '9003718563', 13, 7, 6, 10, 36, 'M', '2022-05-13 22:24:30'),
(279, '805494595', 20, 9, 10, 2, 41, 'I', '2022-05-13 22:24:54'),
(280, '193246278', 14, 3, 7, 8, 32, 'G', '2022-05-13 22:26:55'),
(281, '400344495', 12, 5, 7, 11, 35, 'G', '2022-05-13 22:27:30'),
(282, '748620624', 11, 9, 9, 9, 38, 'M', '2022-05-13 22:29:27'),
(283, '42508041', 13, 9, 8, 10, 40, 'S', '2022-05-13 22:30:17'),
(284, '474314540', 12, 7, 6, 4, 29, 'G', '2022-05-13 22:31:08'),
(285, '9006746511', 15, 3, 9, 11, 38, 'C', '2022-05-13 22:31:44'),
(286, '748588047', 14, 7, 9, 7, 37, 'G', '2022-05-13 22:32:39'),
(287, '474399951', 13, 9, 4, 4, 30, 'G', '2022-05-13 22:33:01'),
(288, '796455544', 12, 4, 9, 11, 36, 'G', '2022-05-13 22:33:25'),
(289, '234668633', 20, 6, 6, 4, 36, 'I', '2022-05-13 22:33:45'),
(290, '521910814', 14, 5, 9, 7, 35, 'S', '2022-05-13 22:34:18'),
(291, '41733398', 10, 3, 9, 12, 34, 'G', '2022-05-13 22:38:02'),
(292, '95305781', 16, 1, 8, 4, 29, 'C', '2022-05-13 22:40:49'),
(293, '474290851', 13, 3, 8, 9, 33, 'A', '2022-05-13 22:42:16'),
(294, '8320002528', 13, 5, 9, 4, 31, 'F', '2022-05-13 22:43:01'),
(295, '8320002528', 13, 5, 9, 4, 31, 'F', '2022-05-13 22:43:04'),
(296, '474352718', 22, 5, 1, 7, 35, 'G', '2022-05-13 22:44:53'),
(297, '96590912', 10, 7, 6, 5, 28, 'G', '2022-05-13 22:45:55'),
(298, '9008280214', 9, 5, 10, 4, 28, 'F', '2022-05-13 22:46:59'),
(299, '10986831346', 12, 5, 4, 8, 29, 'G', '2022-05-13 22:48:40'),
(300, '94322271', 11, 7, 7, 10, 35, 'K', '2022-05-13 22:49:43'),
(301, '524602893', 10, 6, 8, 10, 34, 'Q', '2022-05-13 22:50:51'),
(302, '70626870', 14, -0, 8, 7, 29, 'G', '2022-05-13 22:54:30'),
(303, '11185299639', 12, 5, 6, 8, 31, 'G', '2022-05-13 22:59:59'),
(304, '635054111', 14, 9, 6, 8, 37, 'G', '2022-05-13 23:00:43'),
(305, '399509112', 9, 5, 9, 7, 30, 'G', '2022-05-13 23:03:40'),
(306, '528338443', 10, 9, 8, 10, 37, 'S', '2022-05-13 23:04:58'),
(307, '96585009', 13, 9, 10, 12, 44, 'C', '2022-05-13 23:06:30'),
(308, '404303401', 13, 6, 9, 6, 34, 'I', '2022-05-13 23:06:57'),
(309, '420639118', 8, 1, 6, 9, 24, 'G', '2022-05-13 23:10:04'),
(310, '121219671', 11, 5, 5, 8, 29, 'G', '2022-05-13 23:11:33'),
(311, '237952674', 13, 8, 9, 4, 34, 'S', '2022-05-13 23:15:48'),
(312, '194245412', 12, 2, 4, 10, 28, 'G', '2022-05-13 23:16:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diagnostico_global`
--
ALTER TABLE `diagnostico_global`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diagnostico_global`
--
ALTER TABLE `diagnostico_global`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;