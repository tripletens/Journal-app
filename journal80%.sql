-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 05:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `page_start` int(11) DEFAULT NULL,
  `page_end` int(11) DEFAULT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal_id` int(11) DEFAULT NULL,
  `current_volume` int(11) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author_id`, `page_start`, `page_end`, `body`, `journal_id`, `current_volume`, `verified`, `status`, `created_at`, `updated_at`, `file_name`, `deleted_at`) VALUES
(1, 'New Article changed', 1, 1, 11, 'changed', 5, 23, 0, 1, '2019-09-28 12:57:06', '2019-09-29 00:37:27', 'Chapter_3_1569679026_docx', '2019-09-29 00:37:27'),
(2, 'anaother article', 1, 1, 23, 'yes my articles stay here', 5, 3, 0, 1, '2019-09-29 00:38:29', '2019-10-05 13:50:02', 'references_1569721108_docx', '2019-10-05 13:50:02'),
(3, 'testhyyy', 1, 1, 3, 'kgkgjjgk', 5, 2, 0, 1, '2019-10-05 13:51:24', '2019-10-05 13:51:24', 'judge_document_1570287082_docx', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no image',
  `price` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `title`, `description`, `link`, `field`, `institution`, `country`, `created_at`, `updated_at`, `status`, `image`, `price`, `user_id`, `deleted_at`) VALUES
(4, 'Cyber Security Analytics Researcher Intern Progu', 'A great Journal', 'https://www.facebook.com', 'arts', 'N.A.U', 'nigeria', '2019-09-23 09:57:47', '2019-09-23 14:23:07', 1, 'BToGnaQgeo_1569236267_png', 20000, 1, NULL),
(5, 'Cyber Security Analytics Researcher changed', 'changed', 'https://www.facebook.com', 'science', 'N.A.U', 'ghana', '2019-09-23 10:11:14', '2019-09-23 14:01:47', 1, 'C:\\xampp\\tmp\\php8840.tmp', 20000, 1, NULL),
(6, 'Cyber Security Analytics Resear', 'tfiyfiyyfi', 'https://www.facebook.com', 'science', 'N.A.U', 'nigeria', '2019-09-23 13:33:04', '2019-09-23 15:44:52', 1, 'DJ Murphy Baddest Artwork copy_1569256991_jpg', 20000, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_09_04_121643_add_role_to_users_table', 1),
(15, '2019_09_04_124808_add_status_to_users_table', 1),
(16, '2019_09_19_221241_create_journal_table', 1),
(17, '2019_09_19_222121_create_articles_table', 1),
(18, '2019_09_19_224622_add_status_to_journal_table', 1),
(19, '2019_09_19_224917_add_image_to_journal_table', 1),
(20, '2019_09_22_000955_add_price_to_journal_table', 1),
(21, '2019_09_22_002207_add_file_to_articles_table', 1),
(22, '2019_09_23_095119_add_user_id_to_journal_table', 1),
(23, '2019_09_23_095503_add_softdelete_to_journal_table', 1),
(24, '2019_09_28_222937_add_softdeletes_to_articles_table', 2),
(25, '2019_09_30_000459_add_image_to_users_table', 3),
(26, '2019_09_30_012748_add_institution_field_and_country_to_users_table', 4),
(27, '2019_09_30_084828_create_transactions_table', 5),
(28, '2019_09_30_084924_create_orders_table', 5),
(29, '2019_10_01_171533_add_reference_to_orders_table', 6),
(30, '2019_10_01_173010_add_status_to_orders_table', 7),
(31, '2019_10_04_002015_add_order_ref_transactions_table', 8),
(32, '2019_10_04_215309_add_other_fields_to_orders_table', 9),
(33, '2019_10_05_120914_add_transaction_id_to_orders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `journal_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `journal_id`, `created_at`, `updated_at`, `reference`, `status`, `image`, `description`, `title`, `link`, `price`, `transaction_id`) VALUES
(57, 1, 4, '2019-10-04 14:08:22', '2019-10-04 14:08:22', 'REF-RNJQ97E', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(58, 1, 4, '2019-10-04 14:10:51', '2019-10-04 14:10:51', 'REF-0QTVPNM', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(59, 1, 4, '2019-10-04 14:29:59', '2019-10-04 14:29:59', 'REF-M1K91BX', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(60, 1, 4, '2019-10-04 14:40:27', '2019-10-04 14:40:27', 'REF-OMRUKM4', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(61, 1, 4, '2019-10-04 14:46:57', '2019-10-04 14:46:57', 'REF-VJYOOKX', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(62, 1, 4, '2019-10-04 15:04:33', '2019-10-04 15:04:33', 'REF-I01IJHP', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(63, 1, 4, '2019-10-04 19:27:41', '2019-10-04 19:27:41', 'REF-NXJTZQ6', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(64, 1, 4, '2019-10-04 19:34:37', '2019-10-04 19:34:37', 'REF-M2DEDVH', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(65, 1, 4, '2019-10-04 19:39:22', '2019-10-04 19:39:22', 'REF-ERB0JNQ', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(66, 1, 4, '2019-10-04 19:42:25', '2019-10-04 19:42:25', 'REF-RDUFLEG', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(67, 1, 4, '2019-10-04 19:44:24', '2019-10-04 19:44:24', 'REF-ECLG5ZJ', 1, 'avatar.png', NULL, NULL, NULL, NULL, NULL),
(68, 1, 4, '2019-10-04 21:33:04', '2019-10-04 21:33:04', 'REF-41XBWKI', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', NULL, NULL),
(69, 1, 4, '2019-10-04 21:46:21', '2019-10-04 21:46:21', 'REF-OPYLI56', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', NULL, NULL),
(70, 1, 4, '2019-10-04 21:51:58', '2019-10-04 21:51:58', 'REF-FSYA3VL', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', NULL, NULL),
(71, 1, 4, '2019-10-04 22:00:53', '2019-10-04 22:00:53', 'REF-RG1A7OD', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(72, 1, 4, '2019-10-04 22:38:52', '2019-10-04 22:38:52', 'REF-OP5NHL3', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(73, 1, 6, '2019-10-04 23:15:09', '2019-10-04 23:15:09', 'REF-4B5A6HJ', 1, 'DJ Murphy Baddest Artwork copy_1569256991_jpg', 'tfiyfiyyfi', 'Cyber Security Analytics Resear', 'https://www.facebook.com', '20000', NULL),
(74, 1, 6, '2019-10-04 23:36:27', '2019-10-04 23:36:27', 'REF-VNL252Q', 1, 'DJ Murphy Baddest Artwork copy_1569256991_jpg', 'tfiyfiyyfi', 'Cyber Security Analytics Resear', 'https://www.facebook.com', '20000', NULL),
(75, 1, 4, '2019-10-05 07:00:24', '2019-10-05 07:00:24', 'REF-NZABRB6', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(76, 1, 4, '2019-10-05 07:01:59', '2019-10-05 07:01:59', 'REF-UJB5JRV', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(77, 1, 4, '2019-10-05 07:25:10', '2019-10-05 07:25:10', 'REF-8OM1GQ3', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(78, 1, 4, '2019-10-05 07:52:56', '2019-10-05 07:52:56', 'REF-XY9L6KM', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(79, 1, 4, '2019-10-05 08:11:54', '2019-10-05 08:11:54', 'REF-8TESNSD', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(80, 1, 4, '2019-10-05 11:02:29', '2019-10-05 11:02:29', 'REF-JCQ1T95', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(81, 1, 4, '2019-10-05 11:20:49', '2019-10-05 11:20:49', 'REF-9KNKTVU', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(82, 1, 4, '2019-10-05 11:25:01', '2019-10-05 11:25:01', 'REF-HY80HSQ', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(83, 1, 4, '2019-10-05 11:27:30', '2019-10-05 11:27:30', 'REF-N1V6V1O', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(84, 1, 4, '2019-10-05 11:38:02', '2019-10-05 11:38:02', 'REF-4I210CU', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(85, 1, 4, '2019-10-05 11:43:40', '2019-10-05 11:43:40', 'REF-AS3DNWS', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(86, 1, 4, '2019-10-05 11:45:09', '2019-10-05 11:45:09', 'REF-SOLVHNK', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(87, 1, 4, '2019-10-05 11:50:29', '2019-10-05 11:50:29', 'REF-SH23Z2A', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(88, 1, 4, '2019-10-05 11:53:10', '2019-10-05 11:53:10', 'REF-FE0MDQZ', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(89, 1, 4, '2019-10-05 11:55:41', '2019-10-05 11:55:41', 'REF-RTKLLOV', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(90, 1, 4, '2019-10-05 11:57:41', '2019-10-05 11:57:41', 'REF-QT2L3B3', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(91, 1, 4, '2019-10-05 12:02:55', '2019-10-05 12:02:55', 'REF-4EPQ1SI', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(92, 1, 5, '2019-10-05 12:02:55', '2019-10-05 12:02:55', 'REF-4EPQ1SI', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(93, 1, 4, '2019-10-05 12:07:58', '2019-10-05 12:07:58', 'REF-AW0FVUB', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(94, 1, 5, '2019-10-05 12:07:58', '2019-10-05 12:07:58', 'REF-AW0FVUB', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(95, 1, 4, '2019-10-05 12:10:43', '2019-10-05 12:10:43', 'REF-K3IWOH8', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(96, 1, 5, '2019-10-05 12:10:43', '2019-10-05 12:10:43', 'REF-K3IWOH8', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(97, 1, 4, '2019-10-05 12:19:36', '2019-10-05 12:19:36', 'REF-18SOZWC', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(98, 1, 5, '2019-10-05 12:19:36', '2019-10-05 12:19:36', 'REF-18SOZWC', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(99, 1, 4, '2019-10-05 12:25:38', '2019-10-05 12:25:38', 'REF-DZEHHUD', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(100, 1, 5, '2019-10-05 12:25:38', '2019-10-05 12:25:38', 'REF-DZEHHUD', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(101, 1, 4, '2019-10-05 12:27:41', '2019-10-05 12:27:41', 'REF-ULTP5JF', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(102, 1, 5, '2019-10-05 12:27:41', '2019-10-05 12:27:41', 'REF-ULTP5JF', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(103, 1, 4, '2019-10-05 12:29:01', '2019-10-05 12:29:01', 'REF-5QF006H', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(104, 1, 5, '2019-10-05 12:29:01', '2019-10-05 12:29:01', 'REF-5QF006H', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(105, 1, 4, '2019-10-05 12:30:38', '2019-10-05 12:30:38', 'REF-DWTQGWO', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(106, 1, 5, '2019-10-05 12:30:38', '2019-10-05 12:30:38', 'REF-DWTQGWO', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(107, 1, 4, '2019-10-05 12:35:09', '2019-10-05 12:35:09', 'REF-Z6EP3RB', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(108, 1, 5, '2019-10-05 12:35:09', '2019-10-05 12:35:09', 'REF-Z6EP3RB', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(109, 1, 4, '2019-10-05 12:38:36', '2019-10-05 12:38:36', 'REF-QIXBK41', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(110, 1, 5, '2019-10-05 12:38:36', '2019-10-05 12:38:36', 'REF-QIXBK41', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(111, 1, 4, '2019-10-05 12:41:56', '2019-10-05 12:41:56', 'REF-TFP4RUZ', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', NULL),
(112, 1, 5, '2019-10-05 12:41:56', '2019-10-05 12:41:56', 'REF-TFP4RUZ', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', NULL),
(113, 1, 4, '2019-10-05 13:08:25', '2019-10-05 13:08:25', 'REF-XJKQMGU', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '370656438'),
(114, 1, 5, '2019-10-05 13:08:25', '2019-10-05 13:08:25', 'REF-XJKQMGU', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', '370656438'),
(115, 1, 4, '2019-10-05 13:11:05', '2019-10-05 13:11:05', 'REF-8TEUAEK', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '797793093'),
(116, 1, 5, '2019-10-05 13:11:05', '2019-10-05 13:11:05', 'REF-8TEUAEK', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', '797793093'),
(117, 1, 4, '2019-10-05 13:13:32', '2019-10-05 13:13:32', 'REF-IHYX6TB', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '666589983'),
(118, 1, 5, '2019-10-05 13:13:32', '2019-10-05 13:13:32', 'REF-IHYX6TB', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', '666589983'),
(119, 1, 4, '2019-10-05 13:16:54', '2019-10-05 13:16:54', 'REF-NS0ADTG', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '126870290'),
(120, 1, 5, '2019-10-05 13:16:54', '2019-10-05 13:16:54', 'REF-NS0ADTG', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', '126870290'),
(121, 1, 6, '2019-10-05 13:16:54', '2019-10-05 13:16:54', 'REF-NS0ADTG', 1, 'DJ Murphy Baddest Artwork copy_1569256991_jpg', 'tfiyfiyyfi', 'Cyber Security Analytics Resear', 'https://www.facebook.com', '20000', '126870290'),
(122, 1, 4, '2019-10-05 13:19:51', '2019-10-05 13:19:51', 'REF-4SXH0CX', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '882140807'),
(123, 1, 5, '2019-10-05 13:19:51', '2019-10-05 13:19:51', 'REF-4SXH0CX', 1, 'C:\\xampp\\tmp\\php8840.tmp', 'changed', 'Cyber Security Analytics Researcher changed', 'https://www.facebook.com', '20000', '882140807'),
(124, 1, 6, '2019-10-05 13:19:51', '2019-10-05 13:19:51', 'REF-4SXH0CX', 1, 'DJ Murphy Baddest Artwork copy_1569256991_jpg', 'tfiyfiyyfi', 'Cyber Security Analytics Resear', 'https://www.facebook.com', '20000', '882140807'),
(125, 1, 4, '2019-10-05 13:22:50', '2019-10-05 13:22:50', 'REF-BJHI8W0', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '276799803'),
(126, 1, 4, '2019-10-05 13:25:16', '2019-10-05 13:25:16', 'REF-62HU06T', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '179050008'),
(127, 1, 4, '2019-10-05 13:26:31', '2019-10-05 13:26:31', 'REF-RZ4RFWV', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '500238844'),
(128, 1, 4, '2019-10-05 13:33:31', '2019-10-05 13:33:31', 'REF-Z88ERXU', 1, 'BToGnaQgeo_1569236267_png', 'A great Journal', 'Cyber Security Analytics Researcher Intern Progu', 'https://www.facebook.com', '20000', '206598932');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'card',
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `email`, `amount`, `payment_method`, `reference`, `created_at`, `updated_at`, `order_reference`) VALUES
(61, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:06:31', '2019-10-04 02:06:31', 'REF-C4LSM9I'),
(62, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:15:34', '2019-10-04 02:15:34', 'REF-3MMLB8T'),
(63, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:21:02', '2019-10-04 02:21:02', 'REF-PU9R3ZS'),
(64, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:21:59', '2019-10-04 02:21:59', 'REF-GWMY6JW'),
(65, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:23:24', '2019-10-04 02:23:24', 'REF-PSCG18Z'),
(66, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:24:24', '2019-10-04 02:24:24', 'REF-IGQTO0X'),
(67, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 02:25:40', '2019-10-04 02:25:40', 'REF-DJNI4A1'),
(68, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 14:08:21', '2019-10-04 14:08:21', 'REF-RNJQ97E'),
(69, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 14:10:51', '2019-10-04 14:10:51', 'REF-0QTVPNM'),
(70, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 14:29:59', '2019-10-04 14:29:59', 'REF-M1K91BX'),
(71, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 14:40:27', '2019-10-04 14:40:27', 'REF-OMRUKM4'),
(72, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 14:46:57', '2019-10-04 14:46:57', 'REF-VJYOOKX'),
(73, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 15:04:33', '2019-10-04 15:04:33', 'REF-I01IJHP'),
(74, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 19:27:40', '2019-10-04 19:27:40', 'REF-NXJTZQ6'),
(75, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 19:34:36', '2019-10-04 19:34:36', 'REF-M2DEDVH'),
(76, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 19:39:22', '2019-10-04 19:39:22', 'REF-ERB0JNQ'),
(77, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 19:42:25', '2019-10-04 19:42:25', 'REF-RDUFLEG'),
(78, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 19:44:24', '2019-10-04 19:44:24', 'REF-ECLG5ZJ'),
(79, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 21:33:04', '2019-10-04 21:33:04', 'REF-41XBWKI'),
(80, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 21:43:36', '2019-10-04 21:43:36', 'REF-MXUB57T'),
(81, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 21:46:21', '2019-10-04 21:46:21', 'REF-OPYLI56'),
(82, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 21:51:58', '2019-10-04 21:51:58', 'REF-FSYA3VL'),
(83, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 22:00:53', '2019-10-04 22:00:53', 'REF-RG1A7OD'),
(84, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 22:38:52', '2019-10-04 22:38:52', 'REF-OP5NHL3'),
(85, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 23:15:09', '2019-10-04 23:15:09', 'REF-4B5A6HJ'),
(86, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-04 23:36:27', '2019-10-04 23:36:27', 'REF-VNL252Q'),
(87, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 07:00:24', '2019-10-05 07:00:24', 'REF-NZABRB6'),
(88, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 07:01:59', '2019-10-05 07:01:59', 'REF-UJB5JRV'),
(89, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 07:25:10', '2019-10-05 07:25:10', 'REF-8OM1GQ3'),
(90, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 07:52:56', '2019-10-05 07:52:56', 'REF-XY9L6KM'),
(91, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 08:11:54', '2019-10-05 08:11:54', 'REF-8TESNSD'),
(92, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:02:29', '2019-10-05 11:02:29', 'REF-JCQ1T95'),
(93, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:20:49', '2019-10-05 11:20:49', 'REF-9KNKTVU'),
(94, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:25:01', '2019-10-05 11:25:01', 'REF-HY80HSQ'),
(95, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:27:30', '2019-10-05 11:27:30', 'REF-N1V6V1O'),
(96, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:38:02', '2019-10-05 11:38:02', 'REF-4I210CU'),
(97, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:43:39', '2019-10-05 11:43:39', 'REF-AS3DNWS'),
(98, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:45:09', '2019-10-05 11:45:09', 'REF-SOLVHNK'),
(99, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:47:16', '2019-10-05 11:47:16', 'REF-GNLA2VH'),
(100, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:50:29', '2019-10-05 11:50:29', 'REF-SH23Z2A'),
(101, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:53:10', '2019-10-05 11:53:10', 'REF-FE0MDQZ'),
(102, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:55:41', '2019-10-05 11:55:41', 'REF-RTKLLOV'),
(103, 1, 'tripletens.kc@gmail.com', 20000, 'card', NULL, '2019-10-05 11:57:41', '2019-10-05 11:57:41', 'REF-QT2L3B3'),
(104, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:02:55', '2019-10-05 12:02:55', 'REF-4EPQ1SI'),
(105, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:07:58', '2019-10-05 12:07:58', 'REF-AW0FVUB'),
(106, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:10:43', '2019-10-05 12:10:43', 'REF-K3IWOH8'),
(107, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:19:36', '2019-10-05 12:19:36', 'REF-18SOZWC'),
(108, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:25:38', '2019-10-05 12:25:38', 'REF-DZEHHUD'),
(109, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:27:40', '2019-10-05 12:27:40', 'REF-ULTP5JF'),
(110, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:29:00', '2019-10-05 12:29:00', 'REF-5QF006H'),
(111, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:30:38', '2019-10-05 12:30:38', 'REF-DWTQGWO'),
(112, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:35:09', '2019-10-05 12:35:09', 'REF-Z6EP3RB'),
(113, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:38:36', '2019-10-05 12:38:36', 'REF-QIXBK41'),
(114, 1, 'tripletens.kc@gmail.com', 40000, 'card', NULL, '2019-10-05 12:41:56', '2019-10-05 12:41:56', 'REF-TFP4RUZ'),
(115, 1, 'tripletens.kc@gmail.com', 40000, 'card', '370656438', '2019-10-05 13:08:25', '2019-10-05 13:08:25', 'REF-XJKQMGU'),
(116, 1, 'tripletens.kc@gmail.com', 40000, 'card', '797793093', '2019-10-05 13:11:05', '2019-10-05 13:11:05', 'REF-8TEUAEK'),
(117, 1, 'tripletens.kc@gmail.com', 40000, 'card', '666589983', '2019-10-05 13:13:32', '2019-10-05 13:13:32', 'REF-IHYX6TB'),
(118, 1, 'tripletens.kc@gmail.com', 60000, 'card', '126870290', '2019-10-05 13:16:53', '2019-10-05 13:16:53', 'REF-NS0ADTG'),
(119, 1, 'tripletens.kc@gmail.com', 60000, 'card', '882140807', '2019-10-05 13:19:50', '2019-10-05 13:19:50', 'REF-4SXH0CX'),
(120, 1, 'tripletens.kc@gmail.com', 20000, 'card', '276799803', '2019-10-05 13:22:50', '2019-10-05 13:22:50', 'REF-BJHI8W0'),
(121, 1, 'tripletens.kc@gmail.com', 20000, 'card', '179050008', '2019-10-05 13:25:16', '2019-10-05 13:25:16', 'REF-62HU06T'),
(122, 1, 'tripletens.kc@gmail.com', 20000, 'card', '500238844', '2019-10-05 13:26:31', '2019-10-05 13:26:31', 'REF-RZ4RFWV'),
(123, 1, 'tripletens.kc@gmail.com', 20000, 'card', '645364187', '2019-10-05 13:28:19', '2019-10-05 13:28:19', 'REF-KY3JOZ9'),
(124, 1, 'tripletens.kc@gmail.com', 20000, 'card', '497029795', '2019-10-05 13:29:42', '2019-10-05 13:29:42', 'REF-RTFVCZL'),
(125, 1, 'tripletens.kc@gmail.com', 20000, 'card', '206598932', '2019-10-05 13:33:31', '2019-10-05 13:33:31', 'REF-Z88ERXU');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status`, `image`, `field`, `institution`, `country`) VALUES
(1, 'Kalu Chinonso', 'tripletens.kc@gmail.com', NULL, '$2y$10$kTkI5LAQT.ovh5UqZgU6yOPIiG53qJAXzy5hcIMu0xzlzb9ERxnES', NULL, '2019-09-23 09:16:30', '2019-09-30 01:07:46', 'user', 1, '918ne8w5K1_1569809266_png', 'science', 'N.A.U', 'Nigeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
