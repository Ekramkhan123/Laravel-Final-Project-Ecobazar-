-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2026 at 04:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titleone` varchar(255) DEFAULT NULL,
  `titletwo` varchar(255) DEFAULT NULL,
  `titlethree` varchar(255) DEFAULT NULL,
  `imageone` varchar(255) DEFAULT NULL,
  `imagetwo` varchar(255) DEFAULT NULL,
  `imagethree` varchar(255) DEFAULT NULL,
  `descriptionone` longtext DEFAULT NULL,
  `descriptiontwo` longtext DEFAULT NULL,
  `descriptionthree` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `titleone`, `titletwo`, `titlethree`, `imageone`, `imagetwo`, `imagethree`, `descriptionone`, `descriptiontwo`, `descriptionthree`, `created_at`, `updated_at`) VALUES
(1, '100% Trusted Organic Food Store', '100% Trusted Organic Food Store', 'We Delivered, You Enjoy Your Order.', '1770147264_imageone.png', '1770147264_imagetwo.png', '1770147264_imagethree.png', 'Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.', 'Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus neque. Duis non diam eget est luctus tincidunt a a mi. Nulla eu eros consequat tortor tincidunt feugiat.', 'Ut suscipit egestas suscipit. Sed posuere pellentesque nunc, ultrices consectetur velit dapibus eu. Mauris sollicitudin dignissim diam, ac mattis eros accumsan rhoncus. Curabitur auctor bibendum nunc eget elementum.', '2026-02-03 13:34:24', '2026-02-03 13:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:4:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:4:\"edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:6;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:6:\"delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:5;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:4:\"view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:5;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:6:\"create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:6;}}}s:5:\"roles\";a:5:{i:0;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:6:\"writer\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:6:\"editor\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:6;s:1:\"b\";s:7:\"Manager\";s:1:\"c\";s:3:\"web\";}i:4;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:6:\"viewer\";s:1:\"c\";s:3:\"web\";}}}', 1771519270);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`, `status`, `meta_title`, `meta_description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Vegetable', NULL, 1, 'Vegetable', 'Green vegetables', NULL, '2026-02-03 13:38:54', '2026-02-03 13:38:54'),
(2, 'Fruit', NULL, 1, 'Fruits', 'Fruits items', NULL, '2026-02-03 13:39:31', '2026-02-03 13:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `created_at`, `updated_at`) VALUES
(1, '2715 Ash Dr. San Jose, South Dakota 83475', '2026-02-03 13:30:47', '2026-02-03 13:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_emails`
--

CREATE TABLE `contact_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_emails`
--

INSERT INTO `contact_emails` (`id`, `contact_id`, `email`, `created_at`, `updated_at`) VALUES
(5, 1, 'Proxy@gmail.com', '2026-02-08 14:10:16', '2026-02-08 14:10:16'),
(6, 1, 'Help.proxy@gmail.com', '2026-02-08 14:10:16', '2026-02-08 14:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_numbers`
--

CREATE TABLE `contact_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_numbers`
--

INSERT INTO `contact_numbers` (`id`, `contact_id`, `number`, `created_at`, `updated_at`) VALUES
(5, 1, '(219) 555-0114', '2026-02-08 14:10:16', '2026-02-08 14:10:16'),
(6, 1, '(219) 555-0117', '2026-02-08 14:10:16', '2026-02-08 14:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `phone`, `company_name`, `street_address`, `country`, `state`, `postcode`, `profile_image`, `created_at`, `updated_at`, `password`) VALUES
(1, 'Summer Hays', 'Sellers', 'tynuxuzyl@mailinator.com', '+1 (425) 772-9656', 'Brooks Roach Co', 'Iure id pariatur C', 'Distinctio Consequa', 'Dolor nobis est quis', '87877', NULL, '2026-02-03 14:57:37', '2026-02-03 14:57:37', NULL),
(2, 'Adele Wheeler', 'Sexton', 'mypata@mailinator.com', '+1 (255) 476-4252', 'Carr Donovan LLC', 'Laboris nihil praese', 'Esse tenetur dicta', 'Deleniti veritatis p', '34840', NULL, '2026-02-03 14:58:37', '2026-02-03 14:58:37', NULL),
(3, 'Dennis', 'Nzioki', 'dennisnzioki@gmail.com', '254 555-0123', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', '20033', '1771432831.png', '2026-02-03 15:04:15', '2026-02-18 10:40:31', '$2y$12$.ibaz13rF1GXuHLvvpL9w.gXUfWgG4OBIKP/eLgsc5HXqywUhxR/O'),
(4, 'Hakeem Bartlett', 'Suarez', 'fupan@mailinator.com', '+1 (106) 182-2602', 'Avila and Rosario Trading', 'Iste dolor voluptas', 'Ducimus et aperiam', 'Omnis vero neque ips', '60054', NULL, '2026-02-16 13:25:09', '2026-02-16 13:25:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqimages`
--

CREATE TABLE `faqimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqimages`
--

INSERT INTO `faqimages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'faqs-1770147149.faqs.png', '2026-02-03 13:32:29', '2026-02-03 13:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answers` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answers`, `created_at`, `updated_at`) VALUES
(1, 'In elementum est a ante sodales iaculis.', 'Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.', '2026-02-03 13:32:05', '2026-02-03 13:32:05'),
(2, 'Etiam lobortis massa eu nibh tempor elementum.', 'Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.', '2026-02-03 14:01:16', '2026-02-03 14:01:16'),
(3, 'In elementum est a ante sodales iaculis.', 'Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.', '2026-02-03 14:01:34', '2026-02-03 14:01:34'),
(4, 'Aenean quis quam nec lacus semper dignissim.', 'Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.', '2026-02-03 14:01:55', '2026-02-03 14:01:55'),
(5, 'Nulla tincidunt eros id tempus accumsan.', 'Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.', '2026-02-03 14:02:14', '2026-02-03 14:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product/product-1770148519-698252a7ce433.png', '2026-02-03 13:55:19', '2026-02-03 13:55:19'),
(2, 1, 'Product/product-1770148519-698252a7d7e1e.png', '2026-02-03 13:55:19', '2026-02-03 13:55:19'),
(3, 1, 'Product/product-1770148519-698252a7d98a9.png', '2026-02-03 13:55:19', '2026-02-03 13:55:19'),
(4, 1, 'Product/product-1770148519-698252a7dae08.png', '2026-02-03 13:55:19', '2026-02-03 13:55:19'),
(5, 1, 'Product/product-1770148519-698252a7dc360.png', '2026-02-03 13:55:19', '2026-02-03 13:55:19'),
(6, 2, 'Product/product-1770148569-698252d91beb5.png', '2026-02-03 13:56:09', '2026-02-03 13:56:09'),
(7, 2, 'Product/product-1770148569-698252d924118.png', '2026-02-03 13:56:09', '2026-02-03 13:56:09'),
(8, 2, 'Product/product-1770148569-698252d925f2b.png', '2026-02-03 13:56:09', '2026-02-03 13:56:09'),
(9, 2, 'Product/product-1770148569-698252d92780e.png', '2026-02-03 13:56:09', '2026-02-03 13:56:09'),
(10, 2, 'Product/product-1770148569-698252d9293ce.png', '2026-02-03 13:56:09', '2026-02-03 13:56:09'),
(11, 3, 'Product/product-1770148614-6982530670ede.png', '2026-02-03 13:56:54', '2026-02-03 13:56:54'),
(12, 3, 'Product/product-1770148614-69825306787fe.png', '2026-02-03 13:56:54', '2026-02-03 13:56:54'),
(13, 3, 'Product/product-1770148614-6982530679d29.png', '2026-02-03 13:56:54', '2026-02-03 13:56:54'),
(14, 3, 'Product/product-1770148614-698253067b78b.png', '2026-02-03 13:56:54', '2026-02-03 13:56:54'),
(15, 3, 'Product/product-1770148614-698253067ddb9.png', '2026-02-03 13:56:54', '2026-02-03 13:56:54'),
(16, 4, 'Product/product-1770148647-69825327880c9.png', '2026-02-03 13:57:27', '2026-02-03 13:57:27'),
(17, 4, 'Product/product-1770148647-698253279134e.png', '2026-02-03 13:57:27', '2026-02-03 13:57:27'),
(18, 4, 'Product/product-1770148647-6982532792f7a.png', '2026-02-03 13:57:27', '2026-02-03 13:57:27'),
(19, 4, 'Product/product-1770148647-6982532794548.png', '2026-02-03 13:57:27', '2026-02-03 13:57:27'),
(20, 4, 'Product/product-1770148647-6982532795a13.png', '2026-02-03 13:57:27', '2026-02-03 13:57:27'),
(21, 5, 'Product/product-1770148683-6982534b78834.png', '2026-02-03 13:58:03', '2026-02-03 13:58:03'),
(22, 5, 'Product/product-1770148683-6982534b7fda4.png', '2026-02-03 13:58:03', '2026-02-03 13:58:03'),
(23, 5, 'Product/product-1770148683-6982534b8178c.png', '2026-02-03 13:58:03', '2026-02-03 13:58:03'),
(24, 5, 'Product/product-1770148683-6982534b82aba.png', '2026-02-03 13:58:03', '2026-02-03 13:58:03'),
(25, 5, 'Product/product-1770148683-6982534b841c7.png', '2026-02-03 13:58:03', '2026-02-03 13:58:03'),
(26, 6, 'Product/product-1770148717-6982536d3a23f.png', '2026-02-03 13:58:37', '2026-02-03 13:58:37'),
(27, 6, 'Product/product-1770148717-6982536d42535.png', '2026-02-03 13:58:37', '2026-02-03 13:58:37'),
(28, 6, 'Product/product-1770148717-6982536d43d55.png', '2026-02-03 13:58:37', '2026-02-03 13:58:37'),
(29, 6, 'Product/product-1770148717-6982536d45223.png', '2026-02-03 13:58:37', '2026-02-03 13:58:37'),
(30, 6, 'Product/product-1770148717-6982536d464f5.png', '2026-02-03 13:58:37', '2026-02-03 13:58:37'),
(31, 7, 'Product/product-1770148748-6982538c65ca7.png', '2026-02-03 13:59:08', '2026-02-03 13:59:08'),
(32, 7, 'Product/product-1770148748-6982538c6d69e.png', '2026-02-03 13:59:08', '2026-02-03 13:59:08'),
(33, 7, 'Product/product-1770148748-6982538c6ee53.png', '2026-02-03 13:59:08', '2026-02-03 13:59:08'),
(34, 7, 'Product/product-1770148748-6982538c701ef.png', '2026-02-03 13:59:08', '2026-02-03 13:59:08'),
(35, 7, 'Product/product-1770148748-6982538c7205c.png', '2026-02-03 13:59:08', '2026-02-03 13:59:08'),
(36, 8, 'Product/product-1770148786-698253b2aca3a.png', '2026-02-03 13:59:46', '2026-02-03 13:59:46'),
(37, 8, 'Product/product-1770148786-698253b2b68c3.png', '2026-02-03 13:59:46', '2026-02-03 13:59:46'),
(38, 8, 'Product/product-1770148786-698253b2b817c.png', '2026-02-03 13:59:46', '2026-02-03 13:59:46'),
(39, 8, 'Product/product-1770148786-698253b2b98e2.png', '2026-02-03 13:59:46', '2026-02-03 13:59:46'),
(40, 8, 'Product/product-1770148786-698253b2bb34c.png', '2026-02-03 13:59:46', '2026-02-03 13:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_13_072202_create_categories_table', 1),
(5, '2025_10_27_082026_create_products_table', 1),
(6, '2025_10_27_083444_create_images_table', 1),
(7, '2025_11_30_213906_tag', 1),
(8, '2025_12_10_192555_contact', 1),
(9, '2025_12_10_205806_additionalinfo', 1),
(10, '2025_12_21_190410_create_site_settings_table', 1),
(11, '2025_12_21_194552_add_multiple_logos_to_site_settings_table', 1),
(12, '2025_12_21_225830_create_terms_conditions_table', 1),
(13, '2025_12_21_233451_create_privacy_policies_table', 1),
(14, '2025_12_22_002612_add_meta_fields_to_products_table', 1),
(15, '2025_12_22_155802_create_customers_table', 1),
(16, '2025_12_22_155845_create_orders_table', 1),
(17, '2025_12_22_155943_create_order_items_table', 1),
(18, '2026_01_15_205539_faq', 1),
(19, '2026_01_15_221831_faqimage', 1),
(20, '2026_01_16_193753_create_about_table', 1),
(21, '2026_01_16_210430_personnels', 1),
(22, '2026_01_20_235547_add_profile_image_to_customers_table', 1),
(23, '2026_01_23_183317_add_password_to_customers_table', 1),
(24, '2026_01_28_183851_add_payment_method_to_orders_table', 1),
(29, '2026_02_14_211720_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `transaction_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `fname`, `lname`, `company_name`, `street_address`, `country`, `state`, `postcode`, `email`, `phone`, `note`, `amount`, `currency`, `payment_method`, `status`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Summer Hays', 'Sellers', 'Brooks Roach Co', 'Iure id pariatur C', 'Distinctio Consequa', 'Dolor nobis est quis', 87877, 'tynuxuzyl@mailinator.com', '+1 (425) 772-9656', 'Eveniet minima faci', 30, 'BDT', 'cash_on_delivery', 'Pending', '69826141bd966', '2026-02-03 14:57:37', '2026-02-03 14:57:37'),
(2, 2, 'Adele Wheeler', 'Sexton', 'Carr Donovan LLC', 'Laboris nihil praese', 'Esse tenetur dicta', 'Deleniti veritatis p', 34840, 'mypata@mailinator.com', '+1 (255) 476-4252', 'Vitae sunt laudanti', 15, 'BDT', 'online_payment', 'Processing', '6982617dd00dd', '2026-02-03 14:58:37', '2026-02-03 14:58:48'),
(3, 2, 'Adele Wheeler Sexton', 'Townsend', 'Johnson and Bishop Inc', 'Recusandae Aspernat', 'Enim quod aut non is', 'Fuga Aut molestias', 52669, 'mypata@mailinator.com', '+1 (255) 476-4252', 'Aut at odio nisi qua', 15, 'BDT', 'cash_on_delivery', 'Processing', '6982621f2c112', '2026-02-03 15:01:19', '2026-02-03 15:01:44'),
(4, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 75, 'BDT', 'online_payment', 'Processing', '6982643f7e404', '2026-02-03 15:10:23', '2026-02-03 15:10:32'),
(5, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 60, 'BDT', 'cash_on_delivery', 'Shipped', '6982648a2485f', '2026-02-03 15:11:38', '2026-02-03 15:13:00'),
(6, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 1005, 'BDT', 'online_payment', 'Shipped', '6988eabc37ff8', '2026-02-08 13:57:48', '2026-02-08 14:14:10'),
(7, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 45, 'BDT', 'online_payment', 'Shipped', '69925e4a8ca17', '2026-02-15 18:01:14', '2026-02-16 13:13:27'),
(8, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 60, 'BDT', 'online_payment', 'Processing', '69936e2bbc5b8', '2026-02-16 13:21:15', '2026-02-16 13:21:42'),
(9, 4, 'Hakeem Bartlett', 'Suarez', 'Avila and Rosario Trading', 'Iste dolor voluptas', 'Ducimus et aperiam', 'Omnis vero neque ips', 60054, 'fupan@mailinator.com', '+1 (106) 182-2602', 'Est aliquip fugiat', 30, 'BDT', 'online_payment', 'Processing', '69936f157d140', '2026-02-16 13:25:09', '2026-02-16 13:25:27'),
(10, 4, 'Hakeem Bartlett', 'Suarez', 'Ball Chang Trading', 'Eius velit exercitat', 'Eu non maiores dolor', 'Reiciendis et in sap', 57097, 'fupan@mailinator.com', '+1 (106) 182-2602', 'Repellendus Quidem', 60, 'BDT', 'cash_on_delivery', 'Pending', '69936fc77353f', '2026-02-16 13:28:07', '2026-02-16 13:28:07'),
(11, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 15, 'BDT', 'cash_on_delivery', 'Processing', '6993706e9bdaf', '2026-02-16 13:30:54', '2026-02-16 13:31:49'),
(12, 3, 'Dennis', 'Nzioki', 'dnx', '4140 Par|', 'Kenya', 'Nairobi DC', 20033, 'dennisnzioki@gmail.com', '254 555-0123', NULL, 60, 'BDT', 'online_payment', 'Shipped', '699722ac8e1a7', '2026-02-19 08:48:12', '2026-02-19 08:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_title`, `product_image`, `price`, `discount`, `sub_total`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'Green Apple', 'Product/product-1770148519-698252a7ce433.png', 15.00, 6.00, 30.00, 2, '2026-02-03 14:57:37', '2026-02-03 14:57:37'),
(2, 2, 'Green Chilli', 'Product/product-1770148748-6982538c65ca7.png', 15.00, 0.00, 15.00, 1, '2026-02-03 14:58:37', '2026-02-03 14:58:37'),
(3, 3, 'Capsicum', 'Product/product-1770148717-6982536d3a23f.png', 15.00, 0.00, 15.00, 1, '2026-02-03 15:01:19', '2026-02-03 15:01:19'),
(4, 4, 'Red Tomatos', 'Product/product-1770148614-6982530670ede.png', 15.00, 0.00, 45.00, 3, '2026-02-03 15:10:23', '2026-02-03 15:10:23'),
(5, 4, 'Fresh Cauliflower', 'Product/product-1770148647-69825327880c9.png', 15.00, 0.00, 30.00, 2, '2026-02-03 15:10:23', '2026-02-03 15:10:23'),
(6, 5, 'Red Tomatos', 'Product/product-1770148614-6982530670ede.png', 15.00, 0.00, 60.00, 4, '2026-02-03 15:11:38', '2026-02-03 15:11:38'),
(7, 6, 'Green Apple', 'Product/product-1770148519-698252a7ce433.png', 15.00, 6.00, 30.00, 2, '2026-02-08 13:57:48', '2026-02-08 13:57:48'),
(8, 6, 'Capsicum', 'Product/product-1770148717-6982536d3a23f.png', 15.00, 0.00, 45.00, 3, '2026-02-08 13:57:48', '2026-02-08 13:57:48'),
(9, 6, 'Red Tomatos', 'Product/product-1770148614-6982530670ede.png', 15.00, 0.00, 930.00, 62, '2026-02-08 13:57:48', '2026-02-08 13:57:48'),
(10, 7, 'Fresh Cauliflower', 'Product/product-1770148647-69825327880c9.png', 15.00, 0.00, 45.00, 3, '2026-02-15 18:01:14', '2026-02-15 18:01:14'),
(11, 8, 'Green Apple', 'Product/product-1770148519-698252a7ce433.png', 15.00, 6.00, 30.00, 2, '2026-02-16 13:21:15', '2026-02-16 13:21:15'),
(12, 8, 'Red Tomatos', 'Product/product-1770148614-6982530670ede.png', 15.00, 0.00, 30.00, 2, '2026-02-16 13:21:15', '2026-02-16 13:21:15'),
(13, 9, 'Green Apple', 'Product/product-1770148519-698252a7ce433.png', 15.00, 6.00, 30.00, 2, '2026-02-16 13:25:09', '2026-02-16 13:25:09'),
(14, 10, 'Green Chilli', 'Product/product-1770148748-6982538c65ca7.png', 15.00, 0.00, 60.00, 4, '2026-02-16 13:28:07', '2026-02-16 13:28:07'),
(15, 11, 'Red Tomatos', 'Product/product-1770148614-6982530670ede.png', 15.00, 0.00, 15.00, 1, '2026-02-16 13:30:54', '2026-02-16 13:30:54'),
(16, 12, 'Green Chilli', 'Product/product-1770148748-6982538c65ca7.png', 15.00, 0.00, 60.00, 4, '2026-02-19 08:48:12', '2026-02-19 08:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38'),
(2, 'delete', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38'),
(3, 'view', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38'),
(4, 'create', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jenny Wilson', 'Ceo & Founder', '1770147319_personnel.png', '2026-02-03 13:35:19', '2026-02-03 13:35:19'),
(2, 'Jane Cooper', 'Worker', '1770147347_personnel.png', '2026-02-03 13:35:47', '2026-02-03 13:35:47'),
(3, 'Cody Fisher', 'Security Guard', '1770147379_personnel.png', '2026-02-03 13:36:19', '2026-02-03 13:36:19'),
(4, 'Robert Fox', 'Senior Farmer Manager', '1770147408_personnel.png', '2026-02-03 13:36:48', '2026-02-03 13:36:48'),
(5, 'Salvador Vincent', 'Worker', '1770147444_personnel.png', '2026-02-03 13:37:24', '2026-02-03 13:37:24'),
(6, 'Dominique Mcclure', 'Worker', '1770147462_personnel.png', '2026-02-03 13:37:42', '2026-02-03 13:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<div>13\"&gt;3. Sharing Your Personal Information<p data-path-to-node=\"14\">We share your Personal Information with third parties to help us use your Personal Information, as described above. For example:</p><ul data-path-to-node=\"15\"><li><p data-path-to-node=\"15,0,0\"><b data-path-to-node=\"15,0,0\" data-index-in-node=\"0\">E-commerce Platform:</b> We use <b data-path-to-node=\"15,0,0\" data-index-in-node=\"28\">[e.g., Shopify/WooCommerce]</b> to power our online store.</p></li><li><p data-path-to-node=\"15,1,0\"><b data-path-to-node=\"15,1,0\" data-index-in-node=\"0\">Analytics:</b> We use <b data-path-to-node=\"15,1,0\" data-index-in-node=\"18\">[e.g., Google Analytics]</b> to help us understand how our customers use the Site.</p></li><li><p data-path-to-node=\"15,2,0\"><b data-path-to-node=\"15,2,0\" data-index-in-node=\"0\">Compliance:</b> Finally, we may also share your Personal Information to comply with applicable laws and regulations or to respond to a subpoena.</p></li></ul><h3 data-path-to-node=\"16\">4. Behavioral Advertising</h3><p data-path-to-node=\"17\">As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. You can opt out of targeted advertising by visiting the settings of the platforms we use (e.g., Facebook, Google).</p><h3 data-path-to-node=\"18\">5. Your Rights</h3><p data-path-to-node=\"19\">If you are a resident of certain regions (such as the European Union or California), you have the right to access the personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.</p><h3 data-path-to-node=\"20\">6. Data Retention</h3><p data-path-to-node=\"21\">When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete t<span class=\"citation-77 citation-end-77\">his information.<source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"1\"></sup></source-footnote></span><sources-carousel-inline ng-version=\"0.0.0-PLACEHOLDER\"><source-inline-chips class=\"ng-star-inserted\"><source-inline-chip class=\"ng-star-inserted\"></source-inline-chip></source-inline-chips></sources-carousel-inline></p><div class=\"source-inline-chip-container ng-star-inserted\"></div><p></p><h3 data-path-to-node=\"22\"><span class=\"citation-76 citation-end-76\">7. Changes<source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"2\"></sup></source-footnote></span></h3><p data-path-to-node=\"23\"><span class=\"citation-75 citation-end-75\">We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal, or regulatory reasons.<source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"3\"></sup></source-footnote></span><sources-carousel-inline ng-version=\"0.0.0-PLACEHOLDER\"><source-inline-chips class=\"ng-star-inserted\"><source-inline-chip class=\"ng-star-inserted\"></source-inline-chip></source-inline-chips></sources-carousel-inline></p><div class=\"source-inline-chip-container ng-star-inserted\"></div><p></p><hr data-path-to-node=\"24\" /><h3 data-path-to-node=\"25\">Contact Us</h3><p data-path-to-node=\"26\">For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at <b data-path-to-node=\"26\" data-index-in-node=\"146\">[Email Address]</b> or by mail using the details provided below:</p><p data-path-to-node=\"27\"><b data-path-to-node=\"27\" data-index-in-node=\"0\">[Business Name]</b>\r\n<b data-path-to-node=\"27\" data-index-in-node=\"16\"><span class=\"citation-73 citation-74 citation-end-74\">[Physical Address]<source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"4\"></sup></source-footnote></span><span class=\"citation-73 citation-end-73\"><source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"5\"></sup></source-footnote></span></b>\r\n<b data-path-to-node=\"27\" data-index-in-node=\"35\"><span class=\"citation-71 citation-72 citation-end-72\">[Phone Number]<source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"6\"></sup></source-footnote></span><span class=\"citation-71 citation-end-71\"><source-footnote ng-version=\"0.0.0-PLACEHOLDER\"><sup class=\"superscript\" data-turn-source-index=\"7\"></sup></source-footnote></span></b></p>\r\n<br /></div>', '2026-02-03 14:54:43', '2026-02-03 16:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `dis_price` double DEFAULT NULL,
  `is_stock` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` longtext DEFAULT NULL,
  `features` longtext DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `slug`, `price`, `dis_price`, `is_stock`, `status`, `description`, `features`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 2, 'Green Apple', 'product-1770147787-green-apple', 21, 6, 1, 1, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<p>✅ 100 g of fresh leaves provides.</p>\r\n<p>✅ Aliquam ac est at augue volutpat elementum.</p>\r\n<p>✅ Quisque nec enim eget sapien molestie.</p>\r\n<p>✅ Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa. \r\n\r\n<br /></p>', 'Green Apple', 'green fruit', '2026-02-03 13:43:07', '2026-02-03 14:23:01'),
(2, 2, 'Surjapur Mango', 'product-1770147881-surjapur-mango', 15, NULL, 0, 0, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<div>\r\n\r\n</div>\r\n<p>\r\n\r\n\r\n\r\n\r\n\r\n✅100 g of fresh leaves provides.&nbsp;</p>\r\n<p>✅Aliquam ac est at augue volutpat elementum.&nbsp;</p>\r\n<p>✅Quisque nec enim eget sapien molestie.</p>\r\n<p>✅Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.<br /></p>', 'Mango', 'Mango', '2026-02-03 13:44:41', '2026-02-08 15:01:56'),
(3, 1, 'Red Tomatos', 'product-1770148011-red-tomatos', 15, NULL, 1, 1, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<div>✅100 g of fresh leaves provides.</div>\r\n<p>✅Aliquam ac est at augue volutpat elementum.</p>\r\n<p>✅Quisque nec enim eget sapien molestie.</p>\r\n<p>✅Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.</p>', 'Red Tomatos', 'Red Tomatos', '2026-02-03 13:46:51', '2026-02-08 15:07:16'),
(4, 1, 'Fresh Cauliflower', 'product-1770148132-fresh-cauliflower', 15, NULL, 1, 1, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<div>✅100 g of fresh leaves provides.</div>\r\n<p>✅Aliquam ac est at augue volutpat elementum.</p>\r\n<p>✅Quisque nec enim eget sapien molestie.</p>\r\n<p>✅Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.</p>', 'Fresh Cauliflower', 'Fresh Cauliflower', '2026-02-03 13:48:52', '2026-02-08 15:05:15'),
(5, 1, 'Green Lettuce', 'product-1770148209-green-lettuce', 15, NULL, 0, 0, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<div>✅100 g of fresh leaves provides.</div>\r\n<p>✅Aliquam ac est at augue volutpat elementum.</p>\r\n<p>✅Quisque nec enim eget sapien molestie.</p>\r\n<p>✅Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.</p>', 'Green Lettuce', 'Green Lettuce', '2026-02-03 13:50:09', '2026-02-08 15:06:32'),
(6, 1, 'Capsicum', 'product-1770148299-eggplant', 15, NULL, 1, 1, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<p>✅ 100 g of fresh leaves provides.</p>\r\n\r\n\r\n<p>✅ Aliquam ac est at augue volutpat elementum.</p>\r\n\r\n\r\n<p>✅ Quisque nec enim eget sapien molestie.</p>\r\n\r\n\r\n<p>✅ Proin convallis odio volutpat finibus posuere.</p>\r\n\r\n\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.<br /></p>', 'Capsicum', 'Capsicum', '2026-02-03 13:51:39', '2026-02-08 14:04:23'),
(7, 1, 'Green Chilli', 'product-1770148361-green-chilli', 15, NULL, 1, 1, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra. <br /></p>', '<p>✅ 100 g of fresh leaves provides.</p>\r\n<p>✅ Aliquam ac est at augue volutpat elementum.</p>\r\n<p>✅ Quisque nec enim eget sapien molestie.</p>\r\n<p>✅ Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.<br /></p>', 'Green Chilli', 'Green Chilli', '2026-02-03 13:52:41', '2026-02-03 14:42:22'),
(8, 1, 'Eggplant', 'product-1770148416-eggplant', 15, NULL, 0, 0, '<p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.\r\n\r\n\r\nNulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.<br /></p>', '<p>✅ 100 g of fresh leaves provides.</p>\r\n<p>✅ Aliquam ac est at augue volutpat elementum.</p>\r\n<p>✅ Quisque nec enim eget sapien molestie.</p>\r\n<p>✅ Proin convallis odio volutpat finibus posuere.</p>\r\n<p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa.<br /></p>', 'Eggplant', 'Eggplant', '2026-02-03 13:53:36', '2026-02-03 14:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_additional_infos`
--

CREATE TABLE `product_additional_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_additional_infos`
--

INSERT INTO `product_additional_infos` (`id`, `product_id`, `weight`, `color`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '01', 'Green', 'Organic', '2026-02-03 13:43:07', '2026-02-03 13:43:07'),
(2, 2, '01', 'Golden-yellow', 'Organic', '2026-02-03 13:44:41', '2026-02-03 13:44:41'),
(3, 3, '01', 'Red', 'Organic', '2026-02-03 13:46:51', '2026-02-03 13:46:51'),
(4, 4, '02', 'White', 'Organic', '2026-02-03 13:48:52', '2026-02-03 13:48:52'),
(5, 5, '01', 'Green', 'Organic', '2026-02-03 13:50:09', '2026-02-03 13:50:09'),
(6, 6, '01', 'Green', 'Organic', '2026-02-03 13:51:39', '2026-02-03 13:51:39'),
(7, 7, '01', 'Green', 'Organic', '2026-02-03 13:52:41', '2026-02-03 13:52:41'),
(8, 8, '05', 'Dark purple', 'Organic', '2026-02-03 13:53:36', '2026-02-03 13:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 1, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 3, 4, NULL, NULL),
(7, 3, 5, NULL, NULL),
(8, 3, 6, NULL, NULL),
(9, 4, 2, NULL, NULL),
(10, 4, 4, NULL, NULL),
(11, 4, 7, NULL, NULL),
(12, 5, 5, NULL, NULL),
(13, 5, 2, NULL, NULL),
(14, 5, 6, NULL, NULL),
(15, 6, 2, NULL, NULL),
(16, 6, 7, NULL, NULL),
(17, 6, 4, NULL, NULL),
(18, 7, 5, NULL, NULL),
(19, 7, 2, NULL, NULL),
(20, 7, 7, NULL, NULL),
(21, 7, 4, NULL, NULL),
(22, 8, 2, NULL, NULL),
(23, 8, 7, NULL, NULL),
(24, 8, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'writer', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38'),
(3, 'editor', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38'),
(4, 'viewer', 'web', '2026-02-15 14:40:38', '2026-02-15 14:40:38'),
(5, 'admin', 'web', '2026-02-15 17:27:45', '2026-02-15 17:28:06'),
(6, 'Manager', 'web', '2026-02-16 13:38:27', '2026-02-16 13:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(1, 5),
(1, 6),
(2, 3),
(2, 5),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(4, 5),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eUdyKB53lk2EEY8GrRRuonngHVS7G8BZiDzYiPbf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMVdYbGxDQngwWTJscjBZcmo5R29hMFRMUTdqbkJFU2t5MFJnYllBRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO319', 1771434770),
('GrEt9DUfdxcueznrvuFZkbxRQQcC4HfpOtE5UrRA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmxpRVhvdjcxZHNmWTRrUEJnVXRvU2t5VmdzYkZXaU1pNnhlYWNxciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO319', 1771512744),
('sMqeVRw1qBICga36mkfHuH3poEzBcL3JAqQ7vKd3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQm43NXUxWmVwVWtTY0VyVWZTN0xhZDAzdVFxRTloN3Q2a0I1em5tUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771432773),
('Y3m9INqmDSjn3rnANVgTlxDlABJ6Ut4dIII5CKhR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGZsbzJOeHZIM0dBdHNHZXVibUt1MjdRYzh3eUdINmNvUjdXeWJpcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771512356);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `logo_light` varchar(255) DEFAULT NULL,
  `logo_dark` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_title`, `logo_light`, `logo_dark`, `logo`, `favicon`, `footer_text`, `created_at`, `updated_at`) VALUES
(1, 'Ecobazar', 'settings/D6rUOde8RgypEmT5dJikkRN5dNkxnXs03Nw2tkXg.png', 'settings/xmGzQvOozzQngtkY6DxcmEgpvushC9Fa9uCioQHN.png', NULL, 'settings/pJUzQNInqsQsv4V0EKJ0U8jpV8aACcHoCt4gZahV.png', 'Shopery eCommerce © 2021. All Rights Reserved', '2026-02-03 13:26:16', '2026-02-03 13:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', 'fruit', '2026-02-03 13:43:07', '2026-02-03 13:43:07'),
(2, 'Healthy', 'healthy', '2026-02-03 13:43:07', '2026-02-03 13:43:07'),
(3, 'Vitamin', 'vitamin', '2026-02-03 13:43:07', '2026-02-03 13:43:07'),
(4, 'Vegetable', 'vegetable', '2026-02-03 13:46:51', '2026-02-03 13:46:51'),
(5, 'Breakfast', 'breakfast', '2026-02-03 13:46:51', '2026-02-03 13:46:51'),
(6, 'Low Fat', 'low-fat', '2026-02-03 13:46:51', '2026-02-03 13:46:51'),
(7, 'Lunch', 'lunch', '2026-02-03 13:48:52', '2026-02-03 13:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"4\"><b data-path-to-node=\"4\" data-index-in-node=\"0\" style=\"font-size: 18px;\">Last Updated:</b><span style=\"font-size: 18px;\"> [Insert Date]</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"5\"><span style=\"font-size: 18px;\">Welcome to </span><b data-path-to-node=\"5\" data-index-in-node=\"11\" style=\"font-size: 18px;\">[Business Name]</b><span style=\"font-size: 18px;\">! These Terms and Conditions outline the rules and regulations for the use of </span><b data-path-to-node=\"5\" data-index-in-node=\"104\" style=\"font-size: 18px;\">[Website URL]</b><span style=\"font-size: 18px;\">. By accessing this website and/or purchasing something from us, you agree to be bound by the following terms.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"6\"><span style=\"font-size: 18px;\">1. General Use</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"7\"><span style=\"font-size: 18px;\">By agreeing to these Terms, you represent that you are at least the age of majority in your state or province of residence. You may not use our products for any illegal or unauthorized purpose.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"8\"><span style=\"font-size: 18px;\">2. Account Responsibilities</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"9\"><span style=\"font-size: 18px;\">If you create an account on our site, you are responsible for maintaining the confidentiality of your login credentials. We reserve the right to refuse service, terminate accounts, or cancel orders at our sole discretion.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"10\"><span style=\"font-size: 18px;\">3. Products and Pricing</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p><span style=\"font-size: 18px;\">Accuracy: We strive to be as accurate as possible with product descriptions and images. However, we do not warrant that product descriptions are error-free.\r\n\r\nPricing: All prices are subject to change without notice. We reserve the right to modify or discontinue a product at any time.\r\n\r\nErrors: In the event of a pricing error, we reserve the right to cancel any orders placed for the incorrectly priced item.&nbsp;</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p><span style=\"font-weight: bold; font-size: 18px;\">4. Payments and Billing</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p><span style=\"font-size: 18px;\">&nbsp;You agree to provide current, complete, and accurate purchase and account information for all purchases. We use secure third-party payment processors; by purchasing, you also agree to their terms of service.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"14\"><span style=\"font-size: 18px;\">5. Shipping and Delivery</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"15\"><span style=\"font-size: 18px;\">Shipping timelines are estimates and not guarantees. </span><b data-path-to-node=\"15\" data-index-in-node=\"53\" style=\"font-size: 18px;\">[Business Name]</b><span style=\"font-size: 18px;\"> is not responsible for delays caused by the carrier or customs clearance. Risk of loss passes to you upon our delivery to the carrier.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"16\"><span style=\"font-size: 18px;\">6. Returns and Refunds</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"17\"><span style=\"font-size: 18px;\">Our return policy lasts </span><b data-path-to-node=\"17\" data-index-in-node=\"24\" style=\"font-size: 18px;\">[Number, e.g., 30]</b><span style=\"font-size: 18px;\"> days. If </span><b data-path-to-node=\"17\" data-index-in-node=\"52\" style=\"font-size: 18px;\">[Number]</b><span style=\"font-size: 18px;\"> days have gone by since your purchase, we unfortunately cannot offer you a refund or exchange. Items must be unused and in the same condition that you received them.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"18\"><span style=\"font-size: 18px;\">7. Intellectual Property</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"19\"><span style=\"font-size: 18px;\">All content included on this site—such as text, graphics, logos, and images—is the property of </span><b data-path-to-node=\"19\" data-index-in-node=\"95\" style=\"font-size: 18px;\">[Business Name]</b><span style=\"font-size: 18px;\"> and protected by international copyright laws. You may not reproduce or \"scrape\" our content without express written permission.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"20\"><span style=\"font-size: 18px;\">8. Limitation of Liability</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"21\"><span style=\"font-size: 18px;\">To the maximum extent permitted by law, </span><b data-path-to-node=\"21\" data-index-in-node=\"40\" style=\"font-size: 18px;\">[Business Name]</b><span style=\"font-size: 18px;\"> shall not be liable for any indirect, incidental, or consequential damages resulting from your use of the site or products purchased through the site. Basically, we do our best, but we aren\'t responsible if your internet cuts out during a limited-edition drop.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"22\"><span style=\"font-size: 18px;\">9. Governing Law</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"23\"><span style=\"font-size: 18px;\">These Terms shall be governed by and construed in accordance with the laws of </span><b data-path-to-node=\"23\" data-index-in-node=\"78\" style=\"font-size: 18px;\">[Your State/Country]</b><span style=\"font-size: 18px;\">.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"24\"><span style=\"font-size: 18px;\">10. Changes to Terms</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"25\"><span style=\"font-size: 18px;\">We reserve the right to update these terms at any time. Your continued use of the website following the posting of changes constitutes acceptance of those changes.</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<hr data-path-to-node=\"26\" />\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h3 data-path-to-node=\"27\"><span style=\"font-size: 18px;\">Contact Information</span></h3>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p data-path-to-node=\"28\"><span style=\"font-size: 18px;\">Questions about the Terms and Conditions should be sent to us at:\r\n</span><b data-path-to-node=\"28\" data-index-in-node=\"66\" style=\"font-size: 18px;\">[Email Address]</b>\r\n<b data-path-to-node=\"28\" data-index-in-node=\"82\" style=\"font-size: 18px;\">[Physical Address]</b></p>', '2026-02-03 14:52:55', '2026-02-03 16:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ekram Khan', 'profile-1771270506.png', 'ekramkhan@gmail.com', NULL, '$2y$12$wfxwiW7On6f53K8duQW1ku4q0AYxSB5WXZRHtp/bIXw.WKgb6VZdO', NULL, '2026-02-03 13:24:49', '2026-02-18 10:41:45'),
(3, 'Ekram', 'user-image-1771270638-5.png', 'ekram@gmail.com', NULL, '$2y$12$8rhd4Eu.xXIZIuEv8/W0uupB3W2Mh9H1R51tmBY4fGxxXAhrRkLM6', NULL, '2026-02-14 15:09:41', '2026-02-16 13:37:18'),
(4, 'Test User', NULL, 'test@example.com', '2026-02-15 14:28:01', '$2y$12$LgnayPuhZ5/.MINPQbocleZsL9l8f2gjbdEiYHBppQZ2END.PbhnS', 'cAMl33YfcbKM0qhWuvExUSIshCyAKbeAYz6Yt0TApIE20Y7qJmOhwCFDcics', '2026-02-15 14:28:01', '2026-02-15 17:05:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_emails`
--
ALTER TABLE `contact_emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_emails_contact_id_foreign` (`contact_id`);

--
-- Indexes for table `contact_numbers`
--
ALTER TABLE `contact_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_numbers_contact_id_foreign` (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqimages`
--
ALTER TABLE `faqimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_additional_infos`
--
ALTER TABLE `product_additional_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_additional_infos_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_emails`
--
ALTER TABLE `contact_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_numbers`
--
ALTER TABLE `contact_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqimages`
--
ALTER TABLE `faqimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_additional_infos`
--
ALTER TABLE `product_additional_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_emails`
--
ALTER TABLE `contact_emails`
  ADD CONSTRAINT `contact_emails_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_numbers`
--
ALTER TABLE `contact_numbers`
  ADD CONSTRAINT `contact_numbers_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_additional_infos`
--
ALTER TABLE `product_additional_infos`
  ADD CONSTRAINT `product_additional_infos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
