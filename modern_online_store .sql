-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2024 at 11:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern_online_store`
--

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
('keila@gmail.com|127.0.0.1', 'i:1;', 1716662188),
('keila@gmail.com|127.0.0.1:timer', 'i:1716662188;', 1716662188);

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
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Computer & Accessories', NULL, NULL),
(2, 'Mobile Phones & Accessories', NULL, NULL),
(3, 'Fashion', NULL, NULL),
(4, 'Others', NULL, NULL);

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `quantity`, `price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 15000, 1, 3, '2024-05-13 05:55:55', '2024-05-13 05:55:55'),
(2, 1, 450000, 2, 1, '2024-05-13 06:05:24', '2024-05-13 06:05:24'),
(3, 1, 15000, 3, 2, '2024-05-13 06:05:56', '2024-05-13 06:05:56'),
(4, 1, 20000, 4, 4, '2024-05-13 06:06:39', '2024-05-13 06:06:39'),
(5, 1, 15000, 5, 2, '2024-05-13 07:21:54', '2024-05-13 07:21:54'),
(6, 4, 450000, 6, 1, '2024-05-13 07:25:20', '2024-05-13 07:25:20'),
(7, 1, 20000, 7, 4, '2024-05-13 16:33:56', '2024-05-13 16:33:56'),
(8, 1, 15000, 8, 3, '2024-05-24 17:55:19', '2024-05-24 17:55:19'),
(9, 1, 20000, 9, 4, '2024-05-24 21:18:14', '2024-05-24 21:18:14'),
(10, 1, 15000, 10, 3, '2024-05-24 22:40:02', '2024-05-24 22:40:02'),
(11, 1, 2000000, 11, 5, '2024-05-25 07:32:34', '2024-05-25 07:32:34'),
(12, 1, 15000, 12, 2, '2024-05-25 07:33:37', '2024-05-25 07:33:37'),
(13, 1, 20000, 12, 4, '2024-05-25 07:33:37', '2024-05-25 07:33:37'),
(14, 1, 2000000, 13, 5, '2024-05-25 07:57:26', '2024-05-25 07:57:26'),
(15, 1, 2000000, 14, 5, '2024-05-25 07:58:45', '2024-05-25 07:58:45'),
(16, 1, 2000000, 15, 5, '2024-05-25 08:00:18', '2024-05-25 08:00:18'),
(17, 1, 2000000, 16, 5, '2024-05-25 10:33:48', '2024-05-25 10:33:48'),
(18, 1, 20000, 44, 4, '2024-05-27 11:12:12', '2024-05-27 11:12:12'),
(19, 1, 15000, 45, 3, '2024-05-27 11:14:30', '2024-05-27 11:14:30'),
(20, 1, 15000, 46, 3, '2024-05-27 11:15:55', '2024-05-27 11:15:55'),
(21, 1, 15000, 49, 3, '2024-05-27 11:51:04', '2024-05-27 11:51:04'),
(22, 1, 15000, 50, 3, '2024-05-27 11:52:07', '2024-05-27 11:52:07'),
(23, 1, 15000, 51, 3, '2024-05-27 11:52:26', '2024-05-27 11:52:26'),
(24, 1, 15000, 52, 3, '2024-05-27 11:54:37', '2024-05-27 11:54:37'),
(25, 1, 450000, 53, 1, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(26, 1, 15000, 53, 2, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(27, 1, 15000, 53, 3, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(28, 1, 20000, 53, 4, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(29, 1, 2000000, 53, 5, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(30, 1, 15000, 54, 2, '2024-05-27 12:00:34', '2024-05-27 12:00:34'),
(31, 1, 20000, 54, 4, '2024-05-27 12:00:34', '2024-05-27 12:00:34');

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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Kariakoo', -6.81966111, 39.27504444, NULL, NULL),
(2, 'Buguruni', -6.83888889, 39.24365, NULL, NULL),
(3, 'Tazara', -6.85519722, 39.24245278, NULL, NULL),
(4, 'Vingunguti', -6.84550278, 39.22509722, NULL, NULL),
(5, 'Ubungo', -6.79251944, 39.208675, NULL, NULL),
(6, 'Mbagala', -6.89988611, 39.26602778, NULL, NULL),
(7, 'Mbezi', -6.74148333, 39.08811944, NULL, NULL),
(8, 'Kigamboni', -6.82266389, 39.30244722, NULL, NULL),
(9, 'Chanika', -7.00381667, 39.08116111, NULL, NULL),
(10, 'Kinondoni', -6.70533333, 39.11273611, NULL, NULL);

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
(4, '2024_05_03_102834_create_locations_table', 2),
(43, '0001_01_01_000000_create_users_table', 3),
(58, '0001_01_01_000001_create_cache_table', 4),
(59, '0001_01_01_000002_create_jobs_table', 4),
(60, '2024_05_03_122123_create_categories_table', 4),
(61, '2024_05_10_152501_create_locations_table', 4),
(62, '2024_05_10_183641_create_users_table', 5),
(63, '2024_05_12_194936_create_orders_table', 6),
(64, '2024_05_12_200359_create_items_table', 7),
(65, '2024_05_13_085337_create_orders_table', 8),
(66, '2024_05_13_085535_create_items_table', 9),
(67, '2024_05_25_095925_create_sales_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 15000, 6, '2024-05-13 05:55:55', '2024-05-13 05:55:55'),
(2, 450000, 6, '2024-05-13 06:05:24', '2024-05-13 06:05:24'),
(3, 15000, 6, '2024-05-13 06:05:56', '2024-05-13 06:05:56'),
(4, 20000, 6, '2024-05-13 06:06:39', '2024-05-13 06:06:39'),
(5, 15000, 2, '2024-05-13 07:21:54', '2024-05-13 07:21:54'),
(6, 1800000, 1, '2024-05-13 07:25:20', '2024-05-13 07:25:20'),
(7, 20000, 6, '2024-05-13 16:33:56', '2024-05-13 16:33:56'),
(8, 15000, 1, '2024-05-24 17:55:19', '2024-05-24 17:55:19'),
(9, 20000, 2, '2024-05-24 21:18:14', '2024-05-24 21:18:14'),
(10, 15000, 1, '2024-05-24 22:40:02', '2024-05-24 22:40:02'),
(11, 0, 6, '2024-05-25 07:32:34', '2024-05-25 07:32:34'),
(12, 0, 6, '2024-05-25 07:33:37', '2024-05-25 07:33:37'),
(13, 0, 6, '2024-05-25 07:57:26', '2024-05-25 07:57:26'),
(14, 2000000, 6, '2024-05-25 07:58:45', '2024-05-25 07:58:45'),
(15, 2000000, 6, '2024-05-25 08:00:18', '2024-05-25 08:00:18'),
(16, 2000000, 1, '2024-05-25 10:33:48', '2024-05-25 10:33:48'),
(17, 0, 1, '2024-05-25 11:10:45', '2024-05-25 11:10:45'),
(18, 0, 1, '2024-05-25 11:17:25', '2024-05-25 11:17:25'),
(19, 0, 1, '2024-05-25 11:17:31', '2024-05-25 11:17:31'),
(20, 0, 1, '2024-05-25 11:18:03', '2024-05-25 11:18:03'),
(21, 0, 1, '2024-05-25 11:18:13', '2024-05-25 11:18:13'),
(22, 0, 1, '2024-05-25 11:19:13', '2024-05-25 11:19:13'),
(23, 0, 1, '2024-05-25 11:19:31', '2024-05-25 11:19:31'),
(24, 0, 1, '2024-05-25 11:19:33', '2024-05-25 11:19:33'),
(25, 0, 1, '2024-05-25 11:21:06', '2024-05-25 11:21:06'),
(26, 0, 1, '2024-05-25 11:22:08', '2024-05-25 11:22:08'),
(27, 0, 1, '2024-05-25 11:22:22', '2024-05-25 11:22:22'),
(28, 0, 1, '2024-05-25 11:23:17', '2024-05-25 11:23:17'),
(29, 0, 1, '2024-05-25 11:23:44', '2024-05-25 11:23:44'),
(30, 0, 1, '2024-05-25 11:24:18', '2024-05-25 11:24:18'),
(31, 0, 1, '2024-05-25 11:24:56', '2024-05-25 11:24:56'),
(32, 0, 1, '2024-05-25 11:24:56', '2024-05-25 11:24:56'),
(33, 0, 1, '2024-05-25 11:24:57', '2024-05-25 11:24:57'),
(34, 0, 1, '2024-05-25 11:24:57', '2024-05-25 11:24:57'),
(35, 0, 1, '2024-05-25 11:24:57', '2024-05-25 11:24:57'),
(36, 0, 1, '2024-05-25 11:24:58', '2024-05-25 11:24:58'),
(37, 0, 1, '2024-05-25 11:24:59', '2024-05-25 11:24:59'),
(38, 0, 1, '2024-05-25 11:25:00', '2024-05-25 11:25:00'),
(39, 0, 1, '2024-05-25 11:25:00', '2024-05-25 11:25:00'),
(40, 0, 1, '2024-05-25 11:25:01', '2024-05-25 11:25:01'),
(41, 0, 1, '2024-05-25 11:25:01', '2024-05-25 11:25:01'),
(42, 0, 1, '2024-05-25 11:25:02', '2024-05-25 11:25:02'),
(43, 0, 1, '2024-05-25 11:25:03', '2024-05-25 11:25:03'),
(44, 40000, 1, '2024-05-27 11:12:12', '2024-05-27 11:12:12'),
(45, 30000, 1, '2024-05-27 11:14:30', '2024-05-27 11:14:30'),
(46, 30000, 1, '2024-05-27 11:15:55', '2024-05-27 11:15:55'),
(47, 0, 1, '2024-05-27 11:49:56', '2024-05-27 11:49:56'),
(48, 0, 1, '2024-05-27 11:50:33', '2024-05-27 11:50:33'),
(49, 0, 1, '2024-05-27 11:51:04', '2024-05-27 11:51:04'),
(50, 0, 1, '2024-05-27 11:52:07', '2024-05-27 11:52:07'),
(51, 0, 1, '2024-05-27 11:52:26', '2024-05-27 11:52:26'),
(52, 30000, 1, '2024-05-27 11:54:37', '2024-05-27 11:54:37'),
(53, 5000000, 1, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(54, 70000, 1, '2024-05-27 12:00:34', '2024-05-27 12:00:34');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default_product.png',
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `description`, `image`, `price`, `category`, `location`, `created_at`, `updated_at`) VALUES
(1, 6, 'iPhone 13 Pro Max', 'Android Smartphone: Samsung Galaxy S21 Ultra: 6.8-inch Dynamic AMOLED 2X display,\r\nExynos 2100 (Global) / Snapdragon 888 (USA/China) chipset, \r\n12GB/16GB RAM, 128GB/256GB/512GB storage options, \r\nQuad 108MP camera system, 5G capable, Android 12.', 'products_image/a5MPCPcQsJRmPzeKBjKhUC8N04PhdxndyyQiBTvh.png', '450000', 'Mobile Phones & Accessories', 'Buguruni', '2024-05-10 16:01:48', '2024-05-11 15:26:31'),
(2, 2, 'Draft shirts', 'Casual Shirt: Oxford cloth, button-down collar, regular fit, chest pocket, long sleeves with button cuffs, curved hem, 100% cotton, machine washable.', 'products_image/p8wJWOAJP0mpIdJzgCL8g8hN8o9T9I8Ep67Y7dkP.png', '15000', 'Fashion', 'Ubungo', '2024-05-10 16:22:20', '2024-05-10 16:22:20'),
(3, 6, 'T-shirt liloprintiwa', 'Printi shati lako sasa, liwe plane au liwe ni la nyuzi', 'products_image/n9nS9PmuJla4Yul4Lza00ExfVxPxjsGKASiXYs32.jpg', '15000', 'Fashion', 'Mbagala', '2024-05-11 15:33:05', '2024-05-11 15:34:37'),
(4, 6, 'Sweta la Mikono mirefu', NULL, 'products_image/z7raPXfRk6HMjdWZyfz5oatmJVDp1kw2NK8jasJD.jpg', '20000', 'Fashion', 'Kigamboni', '2024-05-11 15:36:56', '2024-05-11 15:36:56'),
(5, 1, 'Iphone-x', 'My phone', 'products_image/B6LxDaGNZ1ViDcFARIWwAEwJVe1MwPqkps8gvQqv.jpg', '2000000', 'Mobile Phones & Accessories', 'Kariakoo', '2024-05-24 18:33:39', '2024-05-24 18:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seller_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `seller_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2024-05-25 07:58:45', '2024-05-25 07:58:45'),
(2, 5, 1, '2024-05-25 08:00:18', '2024-05-25 08:00:18'),
(3, 5, 1, '2024-05-25 10:33:48', '2024-05-25 10:33:48'),
(4, 4, 6, '2024-05-27 11:12:12', '2024-05-27 11:12:12'),
(5, 3, 6, '2024-05-27 11:14:30', '2024-05-27 11:14:30'),
(6, 3, 6, '2024-05-27 11:15:55', '2024-05-27 11:15:55'),
(7, 3, 6, '2024-05-27 11:51:04', '2024-05-27 11:51:04'),
(8, 3, 6, '2024-05-27 11:52:07', '2024-05-27 11:52:07'),
(9, 3, 6, '2024-05-27 11:52:26', '2024-05-27 11:52:26'),
(10, 3, 6, '2024-05-27 11:54:37', '2024-05-27 11:54:37'),
(11, 1, 6, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(12, 2, 2, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(13, 3, 6, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(14, 4, 6, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(15, 5, 1, '2024-05-27 11:56:13', '2024-05-27 11:56:13'),
(16, 2, 2, '2024-05-27 12:00:34', '2024-05-27 12:00:34'),
(17, 4, 6, '2024-05-27 12:00:34', '2024-05-27 12:00:34');

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
('YGdd2gj0MkMI8A15OuCgvEN1e0NINGg7DVVQcnAz', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRm5nVHp6clB2T3BrMzVISUFLaURaRW1HanUzUWJsMXQzWkY4ME9CMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hY2NvdW50L2JhbGFuY2UiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxNjgyMjEzNjt9fQ==', 1716822158);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'client',
  `balance` varchar(255) NOT NULL DEFAULT '10000',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `balance`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', NULL, '$2y$12$XJrpAnuElxWUTxqngT9zqORzb/TiAfMla2ORh3fv/At0vtiSbZIcG', 'admin', '94930000', NULL, NULL, '2024-05-27 12:00:34'),
(2, 'Berlin', 'berlin@email.com', NULL, '$2y$12$Qnwh/k8vntIXOwCAxgWPVeUG7oTKy1bixXmqKaAl7OqawHCSYaDwW', 'client', '130000', NULL, NULL, '2024-05-27 12:00:34'),
(3, 'Roi', 'roi@email.com', NULL, '$2y$12$LI0EZ4ZWWd/KOMTMWJ/QWuIqgffYnQ2lJ1QKIuAXEDj37cNM.bkKi', 'client', '100000', NULL, NULL, NULL),
(4, 'Cameron', 'cameron@email.com', NULL, '$2y$12$QPRCwcYq88MRtuWnSZ2H4.aLEvRgoi..rSU4awsu15x78AwQw1unm', 'client', '100000', NULL, NULL, NULL),
(5, 'Bruce', 'bruce@email.com', NULL, '$2y$12$1hAKqztAFlXF0yBcIhNoJOqHwPIT0e/Mmf5IxIHNrBZD4UW36iVyS', 'client', '100000', NULL, NULL, NULL),
(6, 'Keila', 'keila@email.com', NULL, '$2y$12$bui3gwuBdaPesyPJ03ObkumwA0PT7.6tqVpoyKv49oNLdeVMgbxe2', 'client', '620000', NULL, NULL, '2024-05-27 12:00:34'),
(7, 'Damian', 'damian@email.com', NULL, '$2y$12$zazOrFPaleH5FS0ymfKX9OYZzUJt/goeUbQrj.nDphbVS56EWTuxW', 'client', '100000', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_order_id_foreign` (`order_id`),
  ADD KEY `items_product_id_foreign` (`product_id`);

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
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_seller_id_foreign` (`seller_id`),
  ADD KEY `sales_prouct_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_prouct_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
