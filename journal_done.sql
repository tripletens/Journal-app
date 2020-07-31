-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 07:11 AM
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
(1, 'Preliminary Page', 1, 1, 1, 'Journal Participants / Editors', 5, 1, 0, 1, '2019-10-29 21:39:27', '2019-10-29 21:39:27', 'JOURNALS (2)_1572388767_docx', NULL),
(2, 'PRELIMINARY PAGES', 1, 1, 1, 'Preliminary pages of Nnadiebube Journal of Social Sciences (NJSS)\r\nISSN: 2636-638X (Online) & 2636-6398 (Print)', 6, 1, 0, 1, '2019-10-29 21:56:47', '2019-10-29 21:56:47', 'NNADIEBUBE NJSS PRELIMINARY PAGES_1572389807_docx', NULL),
(3, 'PRELIMINARY PAGES', 1, 1, 1, 'Preliminary Pages of Nnadiebube Journal of Education in Africa (NJEA)\r\nISSN: 2636-641X (Online) & 2636-6401 (Print)', 7, 1, 0, 1, '2019-10-29 22:09:23', '2019-10-29 22:09:23', 'NNADIEBUBE NJEA PRELIMINARY PAGES_1572390563_docx', NULL),
(4, 'PRELIMINARY PAGE', 1, 1, 1, 'Preliminary Page of Nnadiebube Journal of Philosophy (NJP)\r\nISSN: 2636-6274 (Online) & 2636-6266 (Print)', 8, 1, 0, 1, '2019-10-29 22:13:11', '2019-10-29 22:13:11', 'NNADIEBUBE NJP PRELIMINARY PAGES_1572390791_docx', NULL),
(5, 'PRELIMINARY PAGE', 1, 1, 1, 'IGWEBUIKE: An African Journal of Arts and Humanities', 15, 1, 0, 1, '2019-10-29 22:52:13', '2019-10-29 22:52:13', 'IGWEBUIKE PRELIMINARIES_1572393133_docx', NULL),
(6, 'PRELIMINARY PAGE', 1, 1, 4, 'Preliminary page of Villanova Journal of Science, Technology and Management. \r\n© 2019 Villanova Polytechnic, Imesi-Ile, Osun State.', 19, 1, 0, 1, '2019-10-30 04:54:13', '2019-10-30 04:54:13', 'PRELIMINARY PAGES VILLANOVA JOURNAL OF SCIENCE_1572414853_docx', NULL),
(7, 'PRELIMINARY PAGE', 1, 1, 6, 'Preliminary Page of VILLANOVA JOURNAL OF SOCIAL SCIENCES, ARTS AND HUMANITIES\r\n(VJSSAH)', 20, 1, 0, 1, '2019-10-30 04:55:42', '2019-10-30 04:55:42', 'PRELIMINARY PAGES VILLANOVA JOURNAL OF SOCIAL SCIENCES_1572414942_docx', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no image',
  `price` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `title`, `description`, `link`, `field`, `institution`, `country`, `created_at`, `updated_at`, `status`, `image`, `price`, `user_id`, `deleted_at`) VALUES
(5, 'Niger Delta Journal of Vocational and Business Education', 'Journals of the Association of Business Educators of Nigeria', NULL, 'business', 'Business Educators of Nigeria', 'nigeria', '2019-10-29 21:31:20', '2019-10-29 21:31:20', 1, 'JOURNAL COVER VOLJPG_1572388280_jpg', 0, 1, NULL),
(6, 'Nnadiebube Journal of Social Sciences (NJSS) ISSN: 2636-638X (Online) & 2636-6398 (Print)', 'Nnadiebube Journal of Social Sciences (NJSS) is a peer-reviewed biannual journal that publishes well researched scholarly articles on Social Sciences and other related researches within African Studies and every field of Humanities.  NJSS is a publication of Nnadiebube Research Institute, NRI,  (former Nnadiebube Academy of Philosophy, Social Sciences, Humanities and Educational Research-NAPSSHER). NJP is published in loving memory of Rt. Rev. Msgr. Martin Okeke Maduka who championed, in his lifetime, the cause of inculturation in Igbo-African society.', NULL, 'social sciences', NULL, 'nigeria', '2019-10-29 21:53:05', '2019-10-29 21:53:05', 1, '00782_1005201_1572389585_jpg', 0, 1, NULL),
(7, 'Nnadiebube Journal of Education in Africa (NJEA) ISSN: 2636-641X (Online) & 2636-6401 (Print)', 'Nnadiebube Journal of Education (NJEA) is a peer-reviewed open journal that publishes well researched scholarly articles on general Education and other related researches within the ambient of African Philosophy of Education.  NJEA is a publication of Nnadiebube Research Institute, NRI,  (former Nnadiebube Academy of Philosophy, Social Sciences, Humanities and Educational Research-NAPSSHER), in affiliation with the School of Education, Federal College of Education (Technical), Umunze, Anambra State. NJEA is published in loving memory of Rt. Rev. Msgr. Martin Okeke Maduka who championed, in his lifetime, the cause of inculturation in Igbo-African society.', NULL, 'education', NULL, 'nigeria', '2019-10-29 22:04:31', '2019-10-29 22:04:31', 1, 'IMG-20190923-WA0001_1572390271_jpg', 0, 1, NULL),
(8, 'Nnadiebube Journal of Philosophy (NJP) ISSN: 2636-6274 (Online) & 2636-6266 (Print)', 'Nnadiebube Journal of Philosophy (NJP) is a peer-reviewed biannual journal that publishes well researched scholarly articles on general Philosophy and Philosophy related researches within African Studies and the field of Humanities.  NJP is a publication of Nnadiebube Research Institute LTD/GTE (former Nnadiebube Academy of Philosophy, Social Sciences, Humanities and Educational Research,-NAPSSHER) in affiliation with the Department of Philosophy, Nnamdi Azikiwe University, Awka-Nigeria. NJP is published in loving memory of Rt. Rev. Msgr. Martin OkekeMaduka who championed, in his lifetime, the cause of inculturation in Igbo-African society.', NULL, 'social sciences', NULL, 'nigeria', '2019-10-29 22:11:31', '2019-10-29 22:11:31', 1, 'IMG-20190923-WA0002_1572390691_jpg', 0, 1, NULL),
(9, 'ORACLE OF WISDOM', 'Journal of Philosophy and Public Affairs. \r\nOWIJOPPA, Volume 1 ,Number 1 , 2017', NULL, 'social sciences', NULL, 'nigeria', '2019-10-29 22:22:03', '2019-10-29 22:22:03', 1, 'cover page 2017_1572391323_png', 0, 1, NULL),
(10, 'INOSR ARTS and HUMANITY', 'Journal of INOSR ARTS and HUMANITY', 'http://inosr.net', 'arts', NULL, 'nigeria', '2019-10-29 22:30:10', '2019-10-29 22:30:10', 1, 'G3_1572391810_jpg', 0, 1, NULL),
(11, 'INOSR APPLIED SCIENCE', 'Journal of INOSR APPLIED SCIENCE', 'http://inosr.net', 'science', NULL, 'nigeria', '2019-10-29 22:38:08', '2019-10-29 22:38:08', 1, 'G5_1572392288_jpg', 0, 1, NULL),
(12, 'INOSR ARTS and MANAGEMENT', 'Journal of INOSR ARTS and MANAGEMENT', 'http://inosr.net', 'arts', NULL, 'nigeria', '2019-10-29 22:39:55', '2019-10-29 22:39:55', 1, 'G6_1572392395_jpg', 0, 1, NULL),
(13, 'INOSR HUMANITIES AND SOCIAL SCIENCES', 'Journal of INOSR HUMANITIES AND SOCIAL SCIENCES', 'http://inosr.net', 'social sciences', NULL, 'nigeria', '2019-10-29 22:42:09', '2019-10-29 22:42:09', 1, 'Graphic1_1572392529_JPG', 0, 1, NULL),
(14, 'INOSR EXPERIMENTAL SCIENCES', 'Journal of INOSR EXPERIMENTAL SCIENCES', 'http://inosr.net', 'science', NULL, 'nigeria', '2019-10-29 22:44:32', '2019-10-29 22:44:32', 1, 'GRAPHIC2_1572392672_jpg', 0, 1, NULL),
(15, 'IGWEBUIKE: An African Journal of Arts and Humanities', 'Igwebuike: An African Journal of Arts and Humanities is a journal published by the Department of Philosophy and Religious Studies, Tansian University, Umunya. IAAJAH is purely dedicated to the publication of original academic papers in the areas of the Arts and Humanities. Results of research are presented as fresh theories, hypotheses, and analyses of new ideas or discoveries. Extensions of existing theories and review of books of this nature are also covered within the standard range of this journal. The journal has a vision to put Africa and African intellectuals on the global map. However, this does not imply that non-Africans cannot publish in it.', NULL, 'arts', NULL, 'nigeria', '2019-10-29 22:48:45', '2019-10-29 22:48:45', 1, 'noimage.jpg', 0, 1, NULL),
(16, 'International Journal of Human and Arts (IJAH)', 'An International Journal of Human and Arts (IJAH)\r\nVolume 6 (1), S/No 20, January 2017 \r\nISSN 2225 8590 (Print) ISSN 2227-5452 (Online)', NULL, 'arts', NULL, 'nigeria', '2019-10-30 04:04:32', '2019-10-30 04:04:32', 1, 'ijah cova_1572411872_png', 0, 1, NULL),
(17, 'International Journal of Language, Literature and General Studies (LALIGENS)', 'An International Journal of Language, Literature and General Studies (LALIGENS)\r\nISSN : 2225 - 8604 (Print) ISSN : 2227 - 5460 (Online)\r\nVol. 6(1), S/No 13, February 2017', NULL, 'arts', NULL, 'nigeria', '2019-10-30 04:24:53', '2019-10-30 04:24:53', 1, 'laligen cova_1572413093_png', 0, 1, NULL),
(18, 'African Research Review', 'An International Multi Disciplinary Journal, Bahir dar, Ethopia,\r\nISSN : 1994-9057 (Print) ISSN : 2007-0083 (Online)\r\nVol. 11(1), S/No 45, January 2017', NULL, 'education', NULL, 'ethopia', '2019-10-30 04:35:06', '2019-10-30 04:35:06', 1, 'research cova_1572413706_png', 0, 1, NULL),
(19, 'VILLANOVA JOURNAL OF SCIENCE, TECHNOLOGY AND MANAGEMENT (VJSTM)', 'VJSTM is a bi-annual Villanova Journal of Science, Technology and Management. The Journal is primarily concerned with publishing research articles, reviews, and innovations in diverse fields as Science, Engineering Technology and Management. Opinions espoused on any issue are that of the writer(s) and do not reflect the view of the Editorial Board. However, copyright on any article published here is vested in the publisher.\r\n© 2019 Villanova Polytechnic, Imesi-Ile, Osun State.', NULL, 'science', NULL, 'nigeria', '2019-10-30 04:42:13', '2019-10-30 04:42:13', 1, 'noimage.jpg', 0, 1, NULL),
(20, 'VILLANOVA JOURNAL OF SOCIAL SCIENCES, ARTS AND HUMANITIES (VJSSAH)', 'Villanova Journal of Social Sciences, Arts and Humanities is a publication of Vilanova Polytechnic, Osogbo. It is purely dedicated to the publication of original academic papers in the areas of social sciences and humanities. Results of research are presented as fresh theories, hypotheses, and analyses of new ideas or discoveries. Extensions of existing theories and review of books of this nature are also covered within the standard range of this journal. The journal has a vision to put Africa and African intellectuals on the global map. However, this does not imply that non-Africans cannot publish in it.', NULL, 'education', NULL, 'nigeria', '2019-10-30 04:45:24', '2019-10-30 04:45:24', 1, 'noimage.jpg', 0, 1, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_04_121643_add_role_to_users_table', 1),
(4, '2019_09_04_124808_add_status_to_users_table', 1),
(5, '2019_09_19_221241_create_journal_table', 1),
(6, '2019_09_19_222121_create_articles_table', 1),
(7, '2019_09_19_224622_add_status_to_journal_table', 1),
(8, '2019_09_19_224917_add_image_to_journal_table', 1),
(9, '2019_09_22_000955_add_price_to_journal_table', 1),
(10, '2019_09_22_002207_add_file_to_articles_table', 1),
(11, '2019_09_23_095119_add_user_id_to_journal_table', 1),
(12, '2019_09_23_095503_add_softdelete_to_journal_table', 1),
(13, '2019_09_28_222937_add_softdeletes_to_articles_table', 1),
(14, '2019_09_30_000459_add_image_to_users_table', 1),
(15, '2019_09_30_012748_add_institution_field_and_country_to_users_table', 1),
(16, '2019_09_30_084828_create_transactions_table', 1),
(17, '2019_09_30_084924_create_orders_table', 1),
(18, '2019_10_01_171533_add_reference_to_orders_table', 1),
(19, '2019_10_01_173010_add_status_to_orders_table', 1),
(20, '2019_10_04_002015_add_order_ref_transactions_table', 1),
(21, '2019_10_04_215309_add_other_fields_to_orders_table', 1),
(22, '2019_10_05_120914_add_transaction_id_to_orders_table', 1);

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
(1, 'tripletens.kc@gmail.com', 'tripletens.kc@gmail.com', NULL, '$2y$10$bKqvEoYM2uGMmW2fFLPCB.1KavY3QR8QxQUZBuwoKSVkjLQdtERp2', NULL, '2019-10-29 15:37:26', '2019-10-29 15:37:26', 'user', 1, 'avatar.png', NULL, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
