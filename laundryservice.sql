-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 01:40 PM
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
-- Database: `laundryservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','supervisor') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@laundryservice.ae', '$2y$10$k.Sn3AZeuQwyQDv/S5V1leSyjrWBL29Mzn2D/6Fuuq.Rp6wVQwSRm', 'admin', NULL, '2024-12-04 00:44:20', '2024-12-04 00:44:20'),
(2, 'Supervisor', 'supervisor@laundryservice.ae', '$2y$10$8U3OkLRg3HLQXhK2NiewnuDw8XgKgHtbaS3/hND6lizsRZuurtZte', 'supervisor', NULL, '2024-12-04 00:44:20', '2024-12-04 00:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `bill` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL DEFAULT 0.00,
  `grand_total` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL DEFAULT 0.00,
  `due` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `payment_status` enum('Due','Paid','Partial') NOT NULL DEFAULT 'Due',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `booking_id`, `bill`, `vat`, `grand_total`, `paid`, `due`, `balance`, `payment_status`, `created_at`, `updated_at`) VALUES
(701, 3, 675.00, 33.75, 708.75, 0.00, 708.75, NULL, 'Due', '2024-12-04 06:02:45', '2024-12-04 06:02:45'),
(702, 5, 1921.00, 96.05, 2017.05, 0.00, 2017.05, NULL, 'Due', '2024-12-04 06:19:17', '2024-12-04 06:19:17'),
(703, 4, 782.00, 39.10, 821.10, 0.00, 821.10, NULL, 'Due', '2024-12-04 06:39:19', '2024-12-04 06:39:19'),
(704, 6, 42.00, 2.10, 44.10, 0.00, 44.10, NULL, 'Due', '2024-12-04 06:47:11', '2024-12-04 06:47:11'),
(705, 8, 20.00, 1.00, 21.00, 0.00, 21.00, NULL, 'Due', '2024-12-06 00:58:24', '2024-12-06 00:58:24'),
(706, 7, 42.00, 2.10, 44.10, 0.00, 44.10, NULL, 'Due', '2024-12-07 03:36:48', '2024-12-07 03:36:48'),
(707, 9, 32.00, 1.60, 33.60, 0.00, 33.60, NULL, 'Due', '2024-12-07 04:03:56', '2024-12-07 04:03:56'),
(708, 15, 43.00, 2.15, 45.15, 0.00, 45.15, NULL, 'Due', '2024-12-07 04:14:36', '2024-12-07 04:14:36'),
(709, 16, 43.00, 2.15, 45.15, 0.00, 45.15, NULL, 'Due', '2024-12-07 04:15:29', '2024-12-07 04:15:29'),
(710, 17, 43.00, 2.15, 45.15, 0.00, 45.15, NULL, 'Due', '2024-12-07 04:18:19', '2024-12-07 04:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `services` longtext NOT NULL,
  `collectDay` varchar(255) NOT NULL,
  `collectTime` varchar(255) NOT NULL,
  `job_status` enum('Pickup','Pickup in Process','Delivery','Delivery in Process','Done') NOT NULL DEFAULT 'Pickup',
  `collectInstruc` varchar(255) NOT NULL,
  `dlvrDay` varchar(255) NOT NULL,
  `dlvrTime` varchar(255) NOT NULL,
  `dlvrInstruc` varchar(255) NOT NULL,
  `specialInstruction` text DEFAULT NULL,
  `freq` varchar(255) NOT NULL,
  `trn_num` varchar(255) DEFAULT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `billing_status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `services`, `collectDay`, `collectTime`, `job_status`, `collectInstruc`, `dlvrDay`, `dlvrTime`, `dlvrInstruc`, `specialInstruction`, `freq`, `trn_num`, `paymentMethod`, `billing_status`, `created_at`, `updated_at`) VALUES
(3, 322, 'Wash:Men:Pent:6:12,Wash:Women:Abbaya:4:12,Wash & Press:Men:Pent:1:342,Wash & Press:Women:Abbaya:1:43,Pressing:Men:Pent:1:42,Pressing:Women:Abbaya:1:32,Curtain Cleaning:Curtain Cleaning:Cotton Curtain:1:12,Curtain Cleaning:Curtain Cleaning:Blackout Curtain:1:15,Curtain Cleaning:Curtain Cleaning:Fancy Curtain:1:20,Curtain Cleaning:Curtain Cleaning:Chiffon Curtain:1:49', '2024-12-04', '03:30 PM - 05:30 PM', 'Pickup in Process', 'Collect from outside (Recommended)', '2024-12-05', '03:30 PM - 05:30 PM', 'Deliver outside (Recommended)', NULL, 'Just Once', NULL, 'Online Transfer', '0', '2024-12-04 05:37:50', '2024-12-05 01:12:08'),
(4, 323, 'Wash:Men:Pent:2:12,Wash:Women:Abbaya:1:12,Carpet Mattress Sofa:Carpet Mattress Sofa:Carpet \nShampooing:1:28,Carpet Mattress Sofa:Carpet Mattress Sofa:Sofa \nShampooing:1:50,Carpet Mattress Sofa:Carpet Mattress Sofa:Couch \nShampooing:1:50,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress Queen \nSteam Cleaning:1:189,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress King \nSteam Cleaning:1:249,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress Single \nSteam Cleaning:1:120,Carpet Mattress Sofa:Carpet Mattress Sofa:Sofa \nSteam Cleaning:1:60', '2024-12-04', '09:00 AM - 10:00 AM', 'Pickup', 'Collect from outside (Recommended)', '2024-12-05', '09:00 AM - 10:00 AM', 'Deliver outside (Recommended)', NULL, 'Just Once', NULL, 'Online Transfer', '1', '2024-12-04 05:57:38', '2024-12-04 06:39:19'),
(5, 323, 'Wash:Men:Pent:1:12,Wash:Women:Abbaya:1:12,Wash & Press:Men:Pent:1:342,Wash & Press:Women:Abbaya:1:43,Pressing:Men:Pent:1:42,Pressing:Women:Abbaya:1:32,Dry Clean:Men:Pent:1:21,Dry Clean:Women:Abbaya:1:54,Curtain Cleaning:Curtain Cleaning:Cotton Curtain:1:12,Curtain Cleaning:Curtain Cleaning:Blackout Curtain:1:15,Curtain Cleaning:Curtain Cleaning:Fancy Curtain:1:20,Curtain Cleaning:Curtain Cleaning:Chiffon Curtain:1:49,Carpet Mattress Sofa:Carpet Mattress Sofa:Carpet \nShampooing:1:28,Carpet Mattress Sofa:Carpet Mattress Sofa:Sofa \nShampooing:1:50,Carpet Mattress Sofa:Carpet Mattress Sofa:Couch \nShampooing:1:50,Carpet Mattress Sofa:Carpet Mattress Sofa:Cushion (45*45 cm) \nShampooing:1:5,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress Single \nShampooing:1:90,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress Queen \nShampooing:1:149,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress King \nShampooing:1:199,Carpet Mattress Sofa:Carpet Mattress Sofa:Carpet \nSteam Cleaning:1:18,Carpet Mattress Sofa:Carpet Mattress Sofa:Sofa \nSteam Cleaning:1:60,Carpet Mattress Sofa:Carpet Mattress Sofa:Couch \nSteam Cleaning:1:60,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress Single \nSteam Cleaning:1:120,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress Queen \nSteam Cleaning:1:189,Carpet Mattress Sofa:Carpet Mattress Sofa:Mattress King \nSteam Cleaning:1:249', '2024-12-04', '03:30 PM - 05:30 PM', 'Pickup in Process', 'Collect from outside (Recommended)', '2024-12-05', '03:30 PM - 05:30 PM', 'Deliver outside (Recommended)', NULL, 'Weekly', NULL, 'Online Transfer', '0', '2024-12-04 06:19:07', '2024-12-05 01:03:01'),
(6, 323, 'Pressing:Men:Pent:1:42', '2024-12-04', '03:30 PM - 05:30 PM', 'Delivery', 'Collect from outside', '2024-12-05', '03:30 PM - 05:30 PM', 'Collect from outside', NULL, 'Just Once', NULL, 'Online Transfer', '0', '2024-12-04 06:47:05', '2024-12-05 01:08:32'),
(7, 323, 'Pressing:Men:Pent:1:42', '2024-12-05', '03:30 PM - 05:30 PM', 'Delivery', 'Collect from outside', '2024-12-06', '03:30 PM - 05:30 PM', 'Collect from outside', NULL, 'Just Once', NULL, 'Online Transfer', '1', '2024-12-05 00:52:25', '2024-12-07 03:36:48'),
(8, 322, 'Curtain Cleaning:Curtain Cleaning:Fancy Curtain:1:20', '2024-12-06', '09:00 AM - 10:00 AM', 'Pickup', 'Collect from outside (Recommended)', '2024-12-07', '09:00 AM - 10:00 AM', 'Deliver outside (Recommended)', NULL, 'Just Once', NULL, 'Online Transfer', '1', '2024-12-06 00:58:16', '2024-12-06 00:58:24'),
(9, 328, 'Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Polo Shirt:1:18', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Online Transfer', '1', '2024-12-07 04:02:10', '2024-12-07 04:03:55'),
(10, 328, 'Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Polo Shirt:1:18', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Online Transfer', '0', '2024-12-07 04:08:48', '2024-12-07 04:08:48'),
(11, 329, 'Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Online Transfer', '0', '2024-12-07 04:09:27', '2024-12-07 04:09:27'),
(12, 329, 'Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Online Transfer', '0', '2024-12-07 04:09:49', '2024-12-07 04:09:49'),
(13, 329, 'Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Online-transfer', '0', '2024-12-07 04:12:25', '2024-12-07 04:12:25'),
(14, 329, 'Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Cash-on-delivery', '0', '2024-12-07 04:12:32', '2024-12-07 04:12:32'),
(15, 329, 'Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'cash on delivery', '1', '2024-12-07 04:13:09', '2024-12-07 04:14:36'),
(16, 329, 'Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Cash-on-delivery', '1', '2024-12-07 04:15:20', '2024-12-07 04:15:29'),
(17, 330, 'Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Cash on Delivery', '1', '2024-12-07 04:18:06', '2024-12-07 04:18:19'),
(18, 330, 'Dry Cleaning:Men:Pant:1:14,Dry Cleaning:Men:Polo Shirt:1:18,Dry Cleaning:Men:Shirt:1:11', '2024-12-06', '12:30 PM - 02:30 PM', 'Pickup', 'collect-from-outside', '2024-12-07', '12:30 PM - 02:30 PM', 'leave-at-door', NULL, 'Just Once', NULL, 'Cash on Delivery', '0', '2024-12-07 04:21:27', '2024-12-07 04:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, '2024-12-04 05:16:16', '2024-12-04 05:16:16'),
(2, 'Women', NULL, '2024-12-04 05:16:25', '2024-12-04 05:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `geolocation` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `geolocation`, `address`, `info`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Ecology Carpet Cleaner', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'M-37 - Abu Dhabi', NULL, 24.3236646, 54.4935259, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(2, 'Margaret Conde ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', ' Lamar Residence Building C Apt 910 Al Seef Al Raha Beach', NULL, 24.4457510, 54.5842360, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(3, 'Gul Khan  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Villa 360, Noya, Yas Island', NULL, 24.4962310, 54.6231170, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(4, 'Ð¢M ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'JLT Cluster C ,Gold Crest Executive Tower Room No 3816', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(5, 'Sarah  ', NULL, '3000', 'https://www.google.com/maps/place/Avani+Ibn+Battuta+Dubai+Hotel/@25.0457241,55.1181574,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f132f33651a3b:0x4743ac937346f4c6!5m2!4m1!1i2!8m2!3d25.0457241!4d55.1181574!16s%2Fg%2F11h_wxmy4g?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Awani Hotel  Room No 1122', NULL, 25.0460147, 55.1176801, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(6, 'Nawazish Abjani', NULL, '3000', 'https://www.google.com/maps/dir/24.3707325,54.4738256/Dynatrade+Regency+2/@24.4903622,55.2667123,11.25z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3e5f5c460a4f9ec7:0xa7e19706e26dfbab!2m2!1d55.3752772!2d25.2762794?entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Dynatrade Regency 2', NULL, 24.4903622, 55.2667123, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(7, 'The Grey ', NULL, '3000', 'https://www.google.com/maps/place/The+Grey+Dubai+-+Coffee+Bar+%26+Coffee+Lounge/@25.1836951,55.237909,15z/data=!4m6!3m5!1s0x3e5f69c44b5f3f27:0x8f8bbdf52b600a9b!8m2!3d25.1836951!4d55.237909!16s%2Fg%2F11n60p79k8?sa=X&ved=1t:2428&ictx=111&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Al Safa 1 - Dubai', NULL, 25.1836434, 55.2382210, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(8, 'Society DXB CafÃ© & Lounge', NULL, '3000', 'https://www.google.com/maps/place/Society+Dubai+-+Restaurant+In+Jumeirah/@25.2303207,55.2551812,15z/data=!4m6!3m5!1s0x3e5f4253823bd6fd:0x47df5a3c162a50f4!8m2!3d25.2323006!4d55.2642363!16s%2Fg%2F11f03wgtnb?entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Jumerah 1', NULL, 25.2303207, 55.2551812, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(9, 'Wawa Restaurant', NULL, '3000', 'https://www.google.com/maps/place/Ba:TE+by+WAWA+Dining/@24.4466067,54.4379126,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e43918ea47af3:0x7008d7233cec9d35!8m2!3d24.4466067!4d54.4379126!16s%2Fg%2F11k584f28g?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Abu Dhabi City', NULL, 24.4467808, 54.4379484, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(10, 'Society Hotel', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B029\'45.8%22N+54%C2%B022\'31.4%22E/@24.496056,54.3728141,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.496056!4d54.375389?q=24.496056,54.375389&shorturl=1&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Ap 701 Abu Dhabi City', NULL, 24.4960700, 54.3727756, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(11, 'Reem Muqbel  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Bloom SoHo Square A Room 617A', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(12, 'V:31', NULL, '3000', 'https://www.google.com/maps/place/31+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%AC%D9%8E%D9%88%D9%91%D9%8E%D8%A7%D9%84%D8%A9+-+Al+Rawdah+-+Abu+Dhabi%E2%80%AD/@24.4271353,54.4252695,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e69d1886ce0a7:0x9f2f6e7df6b3ca9e!8m2!3d24.4271353!4d54.4252695!16s%2Fg%2F11pcvp0_v7?utm_source=mstt_1&lucs=47068609&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', ' Al Rawdah', NULL, 24.4271353, 54.4252695, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(13, 'Mukesh Thagraj ', NULL, '3000', 'https://www.google.com/maps/place/ABC+Cargo+%26+Courier+Abu+dhabi/@24.4820654,54.3633017,15z/data=!4m6!3m5!1s0x3e5e67cdd5d15b3f:0x4ab2fb68b7ec8b29!8m2!3d24.4820654!4d54.3633017!16s%2Fg%2F11dflc1lsg?sa=X&ved=1t:2428&ictx=111&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Room No 402 ABC Cargo & Courier', NULL, 24.4821384, 54.3633330, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(14, 'V:31', NULL, '3000', 'https://www.google.com/maps/place/31+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%AC%D9%8E%D9%88%D9%91%D9%8E%D8%A7%D9%84%D8%A9+-+Al+Rawdah+-+Abu+Dhabi%E2%80%AD/@24.4271353,54.4252695,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e69d1886ce0a7:0x9f2f6e7df6b3ca9e!8m2!3d24.4271353!4d54.4252695!16s%2Fg%2F11pcvp0_v7?utm_source=mstt_1&lucs=47068609&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'Al Rawdah', NULL, 24.4271353, 54.4252695, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(15, 'Zakaia ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B026\'23.1%22N+54%C2%B035\'38.1%22E/@24.439736,54.593925,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.439736!4d54.593925?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD', 'V:1286, Al Raha Garden,', NULL, 24.4396149, 54.5945937, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(16, 'Sarah ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyMi4wKgBIAVAD', 'Room No 545 Millennium Al Barsha Hotel', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(17, 'WaiFong  ', NULL, '3000', 'https://www.google.com/maps/place/Grand+Hyatt+Abu+Dhabi+Hotel+%26+Residences+Emirates+Pearl/@24.4583852,54.3207036,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e65ebade52a03:0x121e38c87ef1093!5m2!4m1!1i2!8m2!3d24.4583852!4d54.3207036!16s%2Fg%2F11crzt724p?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyMi4wKgBIAVAD', 'Room Number 3112, Grand Hyatt', NULL, 24.4583852, 54.3207036, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(18, 'Farhana', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B026\'50.6%22N+54%C2%B023\'28.3%22E/@24.44739,54.3886111,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.44739!4d54.391186?q=24.447390,54.391186&entry=tts&g_ep=EgoyMDI0MDkyMi4wKgBIAVAD', 'Aroma Baqala Building Flat 305', NULL, 24.4473009, 54.3888078, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(19, 'Dr Sanya', NULL, '3000', 'https://www.google.com/maps/place/49JW%2BFP4+-+Dubai+Silicon+Oasis+-+Cedre+Villas+-+Dubai+-+United+Arab+Emirates/@25.1311375,55.3968281,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f640cc0728f71:0xb081a6c150cf710a!8m2!3d25.1311375!4d55.3968281?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', '  J-78, Cedre Villas, Dubai Silicon Oasis', NULL, 25.1311298, 55.3968254, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(20, 'Mickey  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyMi4wKgBIAVAD', 'Room 611   Radisson Blu Yas Island', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(21, 'Alessio', NULL, '3000', 'https://www.google.com/maps/place/Creek+Horizon+Tower+1/@25.2063429,55.3452329,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f677ed9cf776b:0x5c07ba272fbdee1e!8m2!3d25.2063429!4d55.3452329!16s%2Fg%2F11rx1fnpk_?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'CREEK HORIZON 1 - 3203', NULL, 25.2064242, 55.3452302, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(22, 'Zubeida Mahomed', NULL, '3000', 'https://www.google.com/maps/place/Address+Dubai+Mall+Hotel/@25.1949669,55.2827094,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f68261580d3b9:0x502791b014d84bf8!5m2!4m1!1i2!8m2!3d25.1949669!4d55.2827094!16s%2Fg%2F11dxjmd1dt?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' Room number 1705 Dubai Mall  (Fountain view)', NULL, 25.1949669, 55.2827094, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(23, 'Lalah ali ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715915,54.4677452,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyMy4wKgBIAVAD', 'Black A507 Amwaj 2', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(24, 'Najla', NULL, '3000', 'https://www.google.com/maps/place/19+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D9%85%D9%8A%D9%85%D9%86%D8%A9+-+Al+Shamkhah+-+SH-21+-+Abu+Dhabi%E2%80%AD/@24.3636015,54.7097365,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e35c297bdf1db:0x9611b5e681dfc376!8m2!3d24.3636015!4d54.7097365!16s%2Fg%2F11k1my03r6?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyMy4wKgBIAVAD', '  Villa 19 sl shamkha 21', NULL, 24.3636015, 54.7097365, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(25, 'Kate', NULL, '3000', 'https://www.google.com/maps/place/Al+Omran+Group+%26+Real+Estate+Management/@24.4998064,54.3759804,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e6658edca9323:0x74ab8b7e6818f63f!8m2!3d24.4998064!4d54.3759804!16s%2Fg%2F11bbwxk_7p?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' 1308 Al Omran Real Estate Building (behind Mr Baker), Al Zahiyah.', NULL, 24.4998064, 54.3759804, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(26, 'Elif Dogan', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B032\'58.2%22N+54%C2%B027\'08.9%22E/@24.549512,54.452457,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.549512!4d54.452457?entry=tts&g_ep=EgoyMDI0MDkyNC4wKgBIAVAD', ' Building 1 App 516 Sadiyat Island', NULL, 24.5493475, 54.4529393, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(27, 'Dilpreet ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNC4wKgBIAVAD', ' Sidra Tower App 3503', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(28, 'Aarvind ', NULL, '3000', 'https://www.google.com/maps/place/Al+Barsha+-+Dubai/@25.0875052,55.2136692,13z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6c0fdcf8c319:0xc1b5948ee66f3482!8m2!3d25.083827!4d55.220397!16s%2Fm%2F03qjy7j?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNC4wKgBIAVAD', 'Villa#2, Barsha 3 , Dubai', NULL, 25.0872851, 55.2133932, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(29, 'Disha Joseph', NULL, '3000', 'https://www.google.com/maps/place/DJ\'s/@25.0473663,55.1335137,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f1300070c8b27:0x5a4d6a580bf6c6c0!8m2!3d25.0473663!4d55.1335137!16s%2Fg%2F11vssgd7vd?utm_source=mstt_1&lucs=,47075915&entry=tts&g_ep=EgoyMDI0MDkyNC4wKgBIAVAD', ' Discovery Gardens Zen Cluster - Street 2 Building 26 | Apt. 008', NULL, 25.0473663, 55.1335137, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(30, 'Tariq Alkhamis ', NULL, '3000', 'https://www.google.com/maps/place/Arjan+Circle/@25.063133,55.2370058,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6f0068cb1e3d:0x52bbae6f886beab3!8m2!3d25.063133!4d55.2370058!16s%2Fg%2F11w1kgktst?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Arjan DubaiLand Ap 813', NULL, 25.0631330, 55.2370058, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(31, 'Daniel Salewski', NULL, '3000', 'https://www.google.com/maps/place/Acacia+A/@25.1099195,55.2443834,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f69482d8b0ec3:0xbb89e257f0003eca!8m2!3d25.1099195!4d55.2443834!16s%2Fg%2F11f0wfnm1_?entry=tts&g_ep=EgoyMDI0MDkyNC4wKgBIAVAD', 'Ap 618 Acacia A Building Dubai Hills', NULL, 25.1099195, 55.2443834, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(32, 'Deepti ', NULL, '3000', 'https://www.google.com/maps/place/Sofitel+Dubai+The+Palm/@25.1399425,55.1324084,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f154a3af8b24f:0x6607557459d2717c!5m2!4m1!1i2!8m2!3d25.1399425!4d55.1324084!16s%2Fg%2F1jgl_q5f_?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' Sofitel Palm Jumeriah Room2219', NULL, 25.1400131, 55.1323896, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(33, 'Lili  ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B006\'38.1%22N+55%C2%B010\'43.6%22E/@25.110591,55.178775,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.110591!4d55.178775?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Lavender Garden Suites - Apt 3115 ', NULL, 25.1105319, 55.1796811, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(34, 'Cormac ', NULL, '3000', 'https://www.google.com/maps/place/Street+9+-+Springs+11+-+Dubai/@25.0543682,55.1787861,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6cf90177a8e1:0x687c1fb8653ae6f9!8m2!3d25.0543682!4d55.1787861!16s%2Fg%2F11k1mvh88w?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Villa  53  Springs 11 street 9', NULL, 25.0543791, 55.1787966, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(35, 'Yashu Gawda', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Ap 1003 Giovanni boutique studio sports city', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(36, 'Deniz Ali ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Rove Expo City  Room1019', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(37, 'Disha Joseph', NULL, '3000', 'https://www.google.com/maps/dir/25.047166,55.1335342/Murano+Residences+3/@25.03526,55.1229799,14z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5f6d19bf5ae5eb:0x4b6d4dd4ab39a1e8!2m2!1d55.1403291!2d25.0247591!3e0?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Murano Residences 3, Apt 306 Al Furjan', NULL, 25.0352600, 55.1229799, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(38, 'Gammarhputra  ', NULL, '3000', 'https://www.google.com/maps/place/Al+Ain+Palace+Hotel/@24.4972394,54.3651373,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e6661b81c5507:0xfd6ab479551dc347!5m2!4m1!1i2!8m2!3d24.4972394!4d54.3651373!16s%2Fg%2F11cfd9h0q?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Al Ain Palace Hotel Room No 215', NULL, 24.4972394, 54.3651373, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(39, 'Mike  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Residence Central Park Room No 2908', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(40, 'Aysel Hajiyeva ', NULL, '3000', 'https://www.google.com/maps/place/Horizon+Towers/@24.4938793,54.403794,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67ba3213c129:0x9c0226e526b05ac9!8m2!3d24.4938793!4d54.403794!16s%2Fg%2F11b7q6zzsx?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Horizontower E2 Apartment 3501', NULL, 24.4938793, 54.4037940, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(41, 'Ganiesha Widanagama  ', NULL, '3000', 'https://www.google.com/maps/place/144+Ahmed+Bin+Khalaf+Al+Otaiba+St+-+Al+Nahyan+-+Zone+1+-+Abu+Dhabi/@24.4647598,54.3788535,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e66263d57d32d:0x3d9d3751f76715ac!8m2!3d24.4647598!4d54.3788535!16s%2Fg%2F11vylgbnpq?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Al Nahyan Vila 142, 2nd floor Room No 302 E', NULL, 24.4647606, 54.3788547, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(42, 'Saud ', NULL, '3000', 'https://www.google.com/maps/place/74+Al+Nawasif+St+-+Khalifa+City+-+SE+26+-+Abu+Dhabi/@24.4074896,54.5923543,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e46399cb493a3:0x66be9701e1fb37c3!8m2!3d24.4074896!4d54.5923543!16s%2Fg%2F11jvnvs16k?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'V-86 Khalifa City', NULL, 24.4074896, 54.5923543, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(43, 'Shekhar Reddy ', NULL, '3000', 'https://www.google.com/maps/place/2+Al+Tahaddi+St+-+Khalifa+City+-+SE34+-+Abu+Dhabi+-+United+Arab+Emirates/@24.4174843,54.5959938,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4617cba40d87:0xa20656f4dad53c5e!8m2!3d24.4174843!4d54.5959938!16s%2Fg%2F11gy51_2zn?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'V-6, R-1', NULL, 24.4174843, 54.5959938, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(44, 'Munzir  ', NULL, '3000', 'https://www.google.com/maps/place/101+Razam+St+-+Mohamed+Bin+Zayed+City+-+Z12+-+Abu+Dhabi/@24.3288252,54.5685848,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e3860f907a5c3:0xf28cb3c333801225!8m2!3d24.3288252!4d54.5685848!16s%2Fg%2F11hkw9vt0n?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Mbz 12 room 101', NULL, 24.3288280, 54.5686556, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(45, 'Frederic S  ', NULL, '3000', 'https://www.google.com/maps/place/Yas+Acres+-+The+Cedars/@24.5072,54.6025728,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e45cf7029e0b7:0xa84452f11486e11e!8m2!3d24.5072!4d54.6025728!16s%2Fg%2F11jq79q0dj?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Yas Acres The Cedars Villa 64', NULL, 24.5072097, 54.6025343, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(46, 'Lahrasub 4 ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' Etihad Plaza, Building C56, Apt 305', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(47, 'Ansam 3A', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Apartment 407', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(48, 'Alwan Residence Loretto 2B', NULL, '3000', 'https://www.google.com/maps/place/DAMAC+Hills+-+Loreto+2+B/@25.0156082,55.2547033,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f71db43016615:0x27c4456b63694aba!5m2!4m1!1i2!8m2!3d25.0156082!4d55.2547033!16s%2Fg%2F11f2wbp41q?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'B801 Damac Hills: Apartment B801 Area: DAMAC hills 1', NULL, 25.0158889, 55.2547320, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(49, 'AK', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Room 830 Element by masaiem building', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(50, 'Aditya ', NULL, '3000', 'https://www.google.com/maps/place/Palette+Tower/@24.4980836,54.3731581,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67000c5a0c39:0x542f8da6de7ebb0f!8m2!3d24.4980836!4d54.3731581!16s%2Fg%2F11w4yks4m9?q=F9XF+67M+Palette+Tower+-+Hamdan+Bin+Mohammed+St+-+Al+Zahiyah+-+E13+-+Abu+Dhabi&ftid=0x3e5e67000c5a0c39:0x542f8da6de7ebb0f&lucs=,94207808,94224825,94227247,94227248,47071704,47069508,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Palette Tower room 1704 Hamdan Street', NULL, 24.4980836, 54.3731581, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(51, 'Bawinile ', NULL, '3000', 'https://www.google.com/maps/place/Villa-59/@24.4425874,54.4381869,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e43c044dfd7d7:0x6a4255264061beb3!8m2!3d24.4425874!4d54.4381869!16s%2Fg%2F11kpfvjlmk?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'B9 Villa 59 room 9 Al saadaa Abu Dhabi', NULL, 24.4425874, 54.4381869, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(52, 'Helen', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B027\'29.3%22N+54%C2%B040\'12.2%22E/@24.458135,54.6674761,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.458135!4d54.670051?q=24.458135,54.670051&shorturl=1&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' V33 street 7 Arabian Village', NULL, 24.4570491, 54.6680622, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(53, 'Michael Moore', NULL, '3000', 'https://www.google.com/maps/place/Khalifa+City+-+Al+Forsan+Village+-+Abu+Dhabi/@24.4040964,54.5488405,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4694aa126ea5:0xb01a5425a0ec9e9a!8m2!3d24.4043778!4d54.5485148!16s%2Fg%2F11b6b90v7b?utm_source=mstt_1&lucs=karto&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' V: C13, Al Forsan Village, Khalifa City ', NULL, 24.4043778, 54.5485148, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(54, 'Reem Loft', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B026\'58.2%22N+54%C2%B036\'36.7%22E/@24.4495,54.6101944,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4495!4d54.6101944?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Al Raha Lofts 2 apartment gf05', NULL, 24.4498052, 54.6099436, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(55, 'Stephen lebeth ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B023\'02.6%22N+54%C2%B031\'20.9%22E/@24.3840556,54.5224722,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.3840556!4d54.5224722?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Mussafah Gardens Apartments.  Building B1. Apartment 812', NULL, 24.3837267, 54.5226205, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(56, 'Kanika', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Emirated Grand Hotel  Ap 1405', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(57, 'Michelle mercil ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B034\'01.2%22N+54%C2%B027\'39.4%22E/@24.567005,54.460941,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.567005!4d54.460941?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Hidd al sadiyat  Villa 3 street 3', NULL, 24.5667523, 54.4599636, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(58, 'WaiFong ', NULL, '3000', 'https://www.google.com/maps/place/Grand+Hyatt+Abu+Dhabi+Hotel+%26+Residences+Emirates+Pearl/@24.4583852,54.3207036,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e65ebade52a03:0x121e38c87ef1093!5m2!4m1!1i2!8m2!3d24.4583852!4d54.3207036!16s%2Fg%2F11crzt724p?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Room Number 3011, Grand Hyatt', NULL, 24.4583852, 54.3207036, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(59, 'Zayed ', NULL, '3000', 'https://www.google.com/maps/place/Mohamed+Bin+Zayed+City+-+Z19+-+Abu+Dhabi/@24.3335528,54.5466619,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e3899abaef3e3:0x3b987f2bd47384b5!8m2!3d24.3335528!4d54.5466619!16s%2Fg%2F11km_05slh?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Villa 8 MBZ 19', NULL, 24.3335510, 54.5465998, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(60, 'Ahlam  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Masdar City 2 Block F Appartement 111', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(61, 'Byron ', NULL, '3000', 'https://www.google.com/maps/place/Yasmine+2/@24.409972,54.5367365,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4786204c91b7:0x3af70d448a99a86!8m2!3d24.409972!4d54.5367365!16s%2Fg%2F11vl318k1m?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Ap:506, Yasmine 2, Al Rayyana Complex', NULL, 24.4099720, 54.5367365, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(62, 'Temsah ', NULL, '3000', 'https://www.google.com/maps/place/Jeewar+Tower/@25.0592798,55.2096487,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6d6fac6420cb:0x7b2c70b0d77dbbf0!8m2!3d25.0592798!4d55.2096487!16s%2Fg%2F11h6crrtm1?utm_source=mstt_1&lucs=karto&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Ap:105, Jeewar Tower, JVC ', NULL, 25.0592798, 55.2096487, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(63, 'Jenn ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Ap316 B32  Al khail Gate ', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(64, 'Rony M ', NULL, '3000', 'https://www.google.com/maps/place/Atlantis,+The+Palm/@25.1304426,55.1171498,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f153e3609c979:0x5945a418a804ac5!5m2!4m1!1i2!8m2!3d25.1304426!4d55.1171498!16s%2Fm%2F02r9h0j?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', ' Atlantis the palm   Room 18413', NULL, 25.1304439, 55.1171494, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(65, 'Mery', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B011\'12.6%22N+55%C2%B016\'41.4%22E/@25.1868399,55.2755986,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.1868399!4d55.2781735?q=25.1868399,55.2781735&z=17&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Elite downtown residence 1604', NULL, 25.1873598, 55.2753250, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(66, 'Al Marfa Pearl Hotels Management LLC', NULL, '3000', 'https://www.google.com/maps/place/Mirfa+Hotel/@24.1021902,53.4787558,15z/data=!4m9!3m8!1s0x3e5da3d7954a4c2d:0xc6ea13f31bf0246e!5m2!4m1!1i2!8m2!3d24.1021902!4d53.4787558!16s%2Fg%2F1thfcxql?sa=X&ved=1t:2428&ictx=111&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Hotel Resturant', NULL, 24.1022901, 53.4794428, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(67, 'Aswan International Engineering Co. LLC', NULL, '3000', 'https://www.google.com/maps/place/Aswan+International+Engineering+Co.+LLC/@24.9743626,55.151042,15z/data=!4m6!3m5!1s0x3e5f72c70733db3f:0xe9f0e57e52897ad5!8m2!3d24.9743626!4d55.151042!16s%2Fg%2F11_rqby6h?sa=X&ved=1t:2428&ictx=111&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'DIB expoo 2020', NULL, 24.9748899, 55.1515566, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(68, 'Stefan ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Business bay Oval Tower  15 floor  1509', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(69, 'Moira sue ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B006\'43.8%22N+55%C2%B014\'42.1%22E/@25.112155,55.2424571,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.112155!4d55.245032?q=25.112155,55.245032&shorturl=1&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Room B306 Dubai Hills', NULL, 25.1113036, 55.2423702, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(70, 'SH Ap:1109  ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B006\'42.4%22N+55%C2%B012\'24.1%22E/@25.1117778,55.2066944,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.1117778!4d55.2066944?entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Azayez building', NULL, 25.1116980, 55.2066800, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(71, 'Hussain', NULL, '3000', 'https://www.google.com/maps/place/12A+St+-+Oud+Metha+-+Dubai/@25.2356198,55.3117388,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f42cd07d321bb:0x8dffef686df40343!8m2!3d25.2356198!4d55.3117388!16s%2Fg%2F1td70gx9?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Movenpick  Room 504', NULL, 25.2355969, 55.3117198, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(72, 'Amro Saknine', NULL, '3000', 'https://www.google.com/maps/place/M%C3%B6venpick+Hotel+Jumeirah+Village+Triangle/@25.0416621,55.187622,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6dd397937e33:0x51bb57e4a60f9b39!5m2!4m1!1i2!8m2!3d25.0416621!4d55.187622!16s%2Fg%2F11np58r5sk?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Movenpick Hotel Room No 704', NULL, 25.0416621, 55.1876220, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(73, 'Ruchika', NULL, '3000', 'https://www.google.com/maps/place/Greenview+1+-+Emaar+South/@24.8670944,55.1357565,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f0be1959c7357:0x2ed1876e12658faa!8m2!3d24.8670944!4d55.1357565!16s%2Fg%2F11svlkbbbz?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Villa 48, Street 7, Greenview 1, Emaar South', NULL, 24.8671331, 55.1356973, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(74, 'Loveneeth', NULL, '3000', 'https://www.google.com/maps/place/Milano+By+Giovanni+Boutique+Suites/@25.0609885,55.2173767,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6c2db6ff61c3:0xa48eef91fabb657f!8m2!3d25.0609885!4d55.2173767!16s%2Fg%2F11c5xl1xct?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkyNS4wKgBIAVAD', 'Milano By Govanni  Room No 103', NULL, 25.0609885, 55.2173767, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(75, 'Russian School Abu Dhabi', NULL, '3000', 'https://www.google.com/maps/place/The+Russian+School+of+Abu+Dhabi/@24.4599496,54.3377101,15z/data=!4m6!3m5!1s0x3e5e65ed2c8a6977:0x7825448a526d439!8m2!3d24.4599496!4d54.3377101!16s%2Fg%2F11s1_jm9_y?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', '6 Al Quoz St - Al Bateen - Abu Dhabi', NULL, 24.4599496, 54.3377101, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(76, 'Matcha Club', NULL, '3000', 'https://www.google.com/maps/place/Al+Bateen+Ladies+Club+by+Matcha/@24.4265685,54.380277,15z/data=!4m6!3m5!1s0x3e5e69004a9b4a53:0xc7007bddc3b54441!8m2!3d24.4265685!4d54.380277!16s%2Fg%2F11vpwfdk09?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Al Bateen - Abu Dhabi', NULL, 24.4265269, 54.3816925, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(77, 'Unique Yacht', NULL, '3000', 'https://www.google.com/maps/place/Cipriani+Yas+Island/@24.4667198,54.6094839,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4589fe813ef7:0x32ee7be185f8ccd3!8m2!3d24.4667198!4d54.6094839!16s%2Fg%2F12hk56my2?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Yas Island - Abu Dhabi', NULL, 24.4667198, 54.6094839, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(78, 'Bedazzled Beauty Saloon', NULL, '3000', 'https://www.google.com/maps/place/Best+Home+(Corniche+Building+-+Business+Centre)/@24.4819575,54.3497511,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e670ec85de0dd:0x6f03dfa78caad0e5!8m2!3d24.4819575!4d54.3497511!16s%2Fg%2F11h92dngq_?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Office:519 Corniche building', NULL, 24.4819512, 54.3497519, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(79, 'Kohantei Japanese Wagyu Restaurant', NULL, '3000', 'https://www.google.com/maps/place/Kohantei+Japanese+Wagyu+Restaurant/@25.196018,55.2710497,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f42801eb63015:0x609ff990e0034519!8m2!3d25.196018!4d55.2710497!16s%2Fg%2F11c585jdg4?entry=tts&g_ep=EgoyMDI0MDkyOS4wIPu8ASoASAFQAw%3D%3D', 'Plaza Unit 6, Opera Dubai Dubai - Dubai', NULL, 25.1960180, 55.2710497, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(80, 'La Lorrain Bakery', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B018\'29.0%22N+54%C2%B040\'31.6%22E/@24.3080556,54.6754444,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.3080556!4d54.6754444?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Bani Yas East-13', NULL, 24.3072999, 54.6736993, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(81, 'Mamu Chay Building', NULL, '3000', 'https://www.google.com/maps/place/Mammu+Tea/@24.4762145,54.3804107,15z/data=!4m6!3m5!1s0x3e5e67e76ab103ab:0x1882def828cc09a4!8m2!3d24.4762145!4d54.3804107!16s%2Fg%2F11h5_vg02g?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Tessa Ap 403 ', NULL, 24.4762232, 54.3804359, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(82, 'Tessa Ap 403 ', NULL, '3000', 'https://www.google.com/maps/place/Mammu+Tea/@24.4762145,54.3804107,15z/data=!4m6!3m5!1s0x3e5e67e76ab103ab:0x1882def828cc09a4!8m2!3d24.4762145!4d54.3804107!16s%2Fg%2F11h5_vg02g?sa=X&ved=1t:2428&ictx=111&entry=tts&g_ep=EgoyMDI0MDkzMC4wIPu8ASoASAFQAw%3D%3D', '  Mamu Chay Building', NULL, 24.4762232, 54.3804359, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(83, 'Simone Elviss  ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B027\'28.6%22N+54%C2%B036\'49.8%22E/@24.457931,54.613841,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.457931!4d54.613841?entry=tts&g_ep=EgoyMDI0MDkzMC4wIPu8ASoASAFQAw%3D%3D', 'Ap:103, Al Zeina E3 ', NULL, 24.4579160, 54.6136740, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(84, 'Charlene ', NULL, '3000', 'https://www.google.com/maps/place/35+AL+Mazhariyat+St+-+Shakhbout+City+-+MFW-12+-+Abu+Dhabi/@24.3694659,54.6332173,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e48218939f261:0x9146c225c783f66f!8m2!3d24.3694659!4d54.6332173!16s%2Fg%2F11fn9q4nhg?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkzMC4wIPu8ASoASAFQAw%3D%3D', 'c35 Villa room last on the left', NULL, 24.3694659, 54.6332173, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(85, 'Ricky Huang', NULL, '3000', 'https://www.google.com/maps/place/Cayan+Tower/@25.0867481,55.1448059,17z/data=!4m6!3m5!1s0x3e5f6b5107a90883:0xcf56c2d951dd5fb8!8m2!3d25.0870373!4d55.1451496!16zL20vMGRsNV80?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Cayan Tower 4207', NULL, 25.0869437, 55.1452575, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(86, 'Mohammad Abbas', NULL, '3000', 'https://www.google.com/maps/place/TAMANI+Marina+Hotel+and+Hotel+Apartments/@25.0909277,55.1493069,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6b45513fffff:0xa72aaebf6ce5f612!5m2!4m1!1i2!8m2!3d25.0909277!4d55.1493069!16s%2Fg%2F11b6gqm1w4?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Apartment 4301', NULL, 25.0911031, 55.1493195, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(87, 'Marko sardoc ', NULL, '3000', 'https://www.google.com/maps/place/Al+Kheeran+-+Zone+1+-+Abu+Dhabi/@24.4459399,54.4386034,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e428349528b97:0x616de7fb96a3064c!8m2!3d24.4459399!4d54.4386034!16s%2Fg%2F11n03lgzw8?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MDkzMC4wIPu8ASoASAFQAw%3D%3D', 'Room 202', NULL, 24.4460060, 54.4386720, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(88, 'Nadine Zakria', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B023\'08.5%22N+54%C2%B038\'37.3%22E/@24.38569,54.6437,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.38569!4d54.6437?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MTAwMS4wIPu8ASoASAFQAw%3D%3D', 'C-44, V-1, A-6', NULL, 24.3858444, 54.6434526, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(89, 'Eloise', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMS4wIPu8ASoASAFQAw%3D%3D', '  Al Tabadul Street Compound No 6  Villa No 11  Flat No 3 Khalifa City', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(90, 'Meech', NULL, '3000', 'https://www.google.com/maps/place/Hansik+Korean+Restaurant/@24.4512847,54.6113966,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4f69123e9c15:0xb7b879a60978a9e3!8m2!3d24.4512847!4d54.6113966!16s%2Fg%2F11v62yrqvs?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Al Raha Views Building Apt. 407', NULL, 24.4518189, 54.6118087, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(91, 'Hamda', NULL, '3000', 'https://www.google.com/maps/place/Nad+Al+Sheba+-+Nad+Al+Sheba+1+-+Dubai/@25.1602768,55.3069781,14z/data=!3m1!4b1!4m6!3m5!1s0x3e5f663d5a684c25:0xe1dd5a940ab93773!8m2!3d25.1591193!4d55.3088196!16s%2Fg%2F1wh4db99?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMS4wIPu8ASoASAFQAw%3D%3D', '  Ap:310 SM Residence', NULL, 25.1602768, 55.3069781, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(92, 'Curiosity lab', NULL, '3000', 'https://www.google.com/maps/place/Curiosity+Lab/@25.1452462,55.2249864,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f69b3fa187ac7:0x50c5ebe5d3df1338!8m2!3d25.1452462!4d55.2249864!16s%2Fg%2F11px9hf3z9?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMS4wIPu8ASoASAFQAw%3D%3D', 'Al Qouz', NULL, 25.1452462, 55.2249864, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(93, 'Dr Ali Gobashi', NULL, '3000', 'https://www.google.com/maps/place/16a+75b+St+-+Mirdif+-+Dubai/@25.229679,55.420345,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f60a3e5a80c65:0x2fe645032b91daee!8m2!3d25.229679!4d55.420345!16s%2Fg%2F11px95t2_w?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMS4wIPu8ASoASAFQAw%3D%3D', '75B Street Mirdif Villa 9', NULL, 25.2296790, 55.4203450, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(94, 'TM', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B004\'07.8%22N+55%C2%B008\'22.5%22E/@25.0688361,55.1370095,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.0688361!4d55.1395844?q=25.0688361,55.1395844&z=17&entry=tts&g_ep=EgoyMDI0MTAwMS4wIPu8ASoASAFQAw%3D%3D', 'JLT cluster C ,Gold Crest Executive Tower App 3816', NULL, 25.0685617, 55.1373510, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(95, 'Breath Spa  ', NULL, '3000', 'https://www.google.com/maps/place/23+Mrawweh+St+-+Al+Bateen+-+Abu+Dhabi/@24.4419482,54.3672956,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e68be0d2030b5:0x4ef636d1b86d9c3f!8m2!3d24.4419482!4d54.3672956!16s%2Fg%2F11qmpp904c?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'V23 Al Bateen', NULL, 24.4419482, 54.3672956, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(96, 'Peter Clevestig', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', ' Nation Towers Residences, Al Bateen, Abu Dhabi Ap 6002', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(97, 'Noel', NULL, '3000', 'https://www.google.com/maps/place/Khalifa+City+-+Al+Forsan+Village+-+Abu+Dhabi/@24.4040964,54.5488405,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4694aa126ea5:0xb01a5425a0ec9e9a!8m2!3d24.4043778!4d54.5485148!16s%2Fg%2F11b6b90v7b?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Al forsan village Tower A flat G01', NULL, 24.4043778, 54.5485148, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(98, 'David E', NULL, '3000', 'https://www.google.com/maps/place/Al+Khoory+Courtyard+Hotel/@25.1620413,55.248905,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f692c2efa9b63:0xea52efb336b16495!5m2!4m1!1i2!8m2!3d25.1620413!4d55.248905!16s%2Fg%2F11sh7dgdlc?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Al Khoory Courtyard Hotel Room No 233', NULL, 25.1622870, 55.2491990, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(99, 'Juliana Garcia ', NULL, '3000', 'https://www.google.com/maps/place/Westburry+Residence/@25.1861861,55.2744769,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f682df558b79d:0xa639fd1c28ec79ab!8m2!3d25.1861861!4d55.2744769!16s%2Fg%2F11dx9jkwq4?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Ap:2207 Westbury Residence Tower business bay  ', NULL, 25.1861861, 55.2744769, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(100, 'Syrine', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B009\'46.4%22N+55%C2%B013\'28.5%22E/@25.1628889,55.2220084,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.1628889!4d55.2245833?q=25.1628889,55.2245833&lucs=,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Villa 51B', NULL, 25.1628279, 55.2220152, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(101, 'Fatema Alathar', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B036\'44.8%22N+54%C2%B042\'39.0%22E/@24.6124306,54.7082482,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.6124306!4d54.7108231?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Villa 90', NULL, 24.6120019, 54.7080274, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(102, 'Michelle Mercil', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B034\'01.2%22N+54%C2%B027\'39.4%22E/@24.567005,54.460941,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.567005!4d54.460941?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', ' Hidd Al Sadiyat  Villa 3 Street 3', NULL, 24.5667523, 54.4599636, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(103, 'Mohamed Hegazy', NULL, '3000', 'https://www.google.com/maps/place/The+Arc+Tower+A/@24.4942824,54.409162,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e673d618eaeeb:0xd126c9e6212a0c92!8m2!3d24.4942824!4d54.409162!16s%2Fg%2F11lpwbl44f?utm_source=mstt_1&lucs=,47075915&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Ap:1720, ARC Tower A, Reem Island', NULL, 24.4943423, 54.4095311, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(104, 'Asmaa Ahmad', NULL, '3000', 'https://www.google.com/maps/place/African+%2B+Eastern+-+Rawdhat/@24.4200038,54.4630778,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4326e15e6ee5:0x218d546567d9f536!8m2!3d24.4200038!4d54.4630778!16s%2Fg%2F11j5c68v9z?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', ' Ap 104 African Eastern Building', NULL, 24.4199871, 54.4628100, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(105, 'Charmin ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'App 2014 Grand Millenium Hotel, Al Wahda', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(106, 'Jai  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Grand Villagio  Room No 611', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(107, 'Jeff ', NULL, '3000', 'https://www.google.com/maps/place/Taverna+del+Moro/@24.5378843,54.4246618,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e667a3990c237:0x84760a341e08c00e!8m2!3d24.5378843!4d54.4246618!16s%2Fg%2F11c328gpc5?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' St. Regis Saadiyat Building 7 Apartment 7205', NULL, 24.5378843, 54.4246618, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(108, 'Rachel Elizabeth', NULL, '3000', 'https://www.google.com/maps/place/Sigma+1+Tower/@24.4992453,54.40428,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67a52907c4cb:0xc12bb240bdd4cd37!8m2!3d24.4992453!4d54.40428!16s%2Fg%2F11dftvzf5c?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Sigma Tower-1 Apartment 2707', NULL, 24.4991488, 54.4046106, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(109, 'Julia ', NULL, '3000', 'https://www.google.com/maps/place/Al+Nada+2/@24.4499484,54.6071775,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e45f828e28ef5:0xf9fb0f76cc301c40!8m2!3d24.4499484!4d54.6071775!16s%2Fg%2F11g6r1qf6w?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Ap:406, Block-B, Nada 2', NULL, 24.4500976, 54.6071821, '2024-12-04 05:34:45', '2024-12-04 05:34:45'),
(110, 'Elrine ', NULL, '3000', 'https://www.google.com/maps/place/Amwaj+1+Apartments/@24.4492608,54.6122398,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4f57007f501d:0x49b385cd0b34908!8m2!3d24.4492608!4d54.6122398!16s%2Fg%2F11b69slq1r?utm_source=mstt_1&lucs=47068615&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'AP: B108 B: Amwaj 1 Al Raha', NULL, 24.4503641, 54.6125370, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(111, 'Sandra Eid  ', NULL, '3000', 'https://www.google.com/maps/place/95+Azzan+Bin+Mohammed+Al+Mazrouei+St+-+Mohamed+Bin+Zayed+City+-+Z36+-+%D8%A3%D8%A8%D9%88%D8%B8%D8%A8%D9%8A%E2%80%AD/@24.3339559,54.57943,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e3869270b28b7:0xfb1d32a3fb2179e3!8m2!3d24.3339559!4d54.57943!16s%2Fg%2F11vwlrrbc2?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Villa 99 First Floor Room No 12 Azan Bin Mohamed Al Mazrouie', NULL, 24.3339559, 54.5794300, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(112, 'Manu Sam', NULL, '3000', 'https://www.google.com/maps/place/AWS+FAMILY+RESIDENCE/@24.9851589,55.1069832,17z/data=!4m6!3m5!1s0x3e5f0dbcfce3654b:0x3467748c7b65095b!8m2!3d24.9848823!4d55.1071585!16s%2Fg%2F11j5knp8xq?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Room no 315 AWS Family Residency', NULL, 24.9852746, 55.1069082, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(113, 'Rony M ', NULL, '3000', 'https://www.google.com/maps/place/Atlantis,+The+Palm/@25.1304426,55.1171498,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f153e3609c979:0x5945a418a804ac5!5m2!4m1!1i2!8m2!3d25.1304426!4d55.1171498!16s%2Fm%2F02r9h0j?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Atlantis The Palm Room 5443', NULL, 25.1304439, 55.1171494, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(114, 'Fiona', NULL, '3000', 'https://www.google.com/maps/place/Lavender+Garden+Suites+(Sufouh+Gardens)/@25.1111239,55.1788105,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b25595d8c7b:0x6e64d368ac3a71fb!8m2!3d25.1111239!4d55.1788105!16s%2Fg%2F11ry9gy202?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Ap:1801, Lavender Garden Suites, Al Sufouh', NULL, 25.1111239, 55.1788105, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(115, 'Dr Ali Gobashi', NULL, '3000', 'https://www.google.com/maps/place/16a+75b+St+-+Mirdif+-+Dubai/@25.229679,55.420345,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f60a3e5a80c65:0x2fe645032b91daee!8m2!3d25.229679!4d55.420345!16s%2Fg%2F11px95t2_w?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', '75B Street Mirdif Villa 9', NULL, 25.2296790, 55.4203450, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(116, 'Deniz Ali ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Rove Expo Village 2B Room No 1101', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(117, 'Daminee Black ', NULL, '3000', 'https://www.google.com/maps/place/K4+building/@25.2983636,55.4587289,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f5fe1afe9725b:0xa8324543b4e6df16!8m2!3d25.2983636!4d55.4587289!16s%2Fg%2F11sc06jmn_?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Ap:211 M 1 Building ', NULL, 25.2983930, 55.4587611, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(118, 'Faten ', NULL, '3000', 'https://www.google.com/maps/place/Marina+Bay+1/@24.4993955,54.4033889,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67a4e6ffb101:0xea4df6b5e80677b2!8m2!3d24.4993955!4d54.4033889!16s%2Fg%2F11c29g4l4z?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Marina Bay1 C2 1306 Reem Island', NULL, 24.4993955, 54.4033889, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(119, 'Princess Aneeza ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Reem Bay Tower B 804 Al Reem Island', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(120, 'Keli Ye', NULL, '3000', 'https://www.google.com/maps/place/Etihad+Towers/@24.458718,54.321782,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e6593af750357:0x5dcb1ae54858b26!8m2!3d24.458718!4d54.321782!16s%2Fm%2F0hgp9kr?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Etihad tower 4 room no 5805', NULL, 24.4587082, 54.3217814, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(121, 'Sid Bahal ', NULL, '3000', 'https://www.google.com/maps/dir/24.370739,54.4738346/Dusit+Thani+Abu+Dhabi+-+925+Sultan+Bin+Zayed+The+First+Street+(Al+Muroor+Road)+-+Abu+Dhabi/@24.4132828,54.3776331,12z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5e687cb7ccfea3:0x1581edf8070978be!2m2!1d54.3947094!2d24.4550179!3e0?entry=tts&g_ep=EgoyMDI0MTAwMi4xKgBIAVAD', 'Room No 920 Dusit Thani Hotel', NULL, 24.4132828, 54.3776331, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(122, 'Sam Mufti', NULL, '3000', 'https://www.google.com/maps/dir/24.370739,54.4738346/Dusit+Thani+Abu+Dhabi+-+925+Sultan+Bin+Zayed+The+First+Street+(Al+Muroor+Road)+-+Abu+Dhabi/@24.4132828,54.3776331,12z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5e687cb7ccfea3:0x1581edf8070978be!2m2!1d54.3947094!2d24.4550179!3e0?entry=tts&g_ep=EgoyMDI0MTAwMi4xKgBIAVAD', 'Hilton Yas Island  Room No 6069', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(123, 'Fabio', NULL, '3000', 'https://www.google.com/maps/dir/24.370739,54.4738346/Dusit+Thani+Abu+Dhabi+-+925+Sultan+Bin+Zayed+The+First+Street+(Al+Muroor+Road)+-+Abu+Dhabi/@24.4132828,54.3776331,12z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5e687cb7ccfea3:0x1581edf8070978be!2m2!1d54.3947094!2d24.4550179!3e0?entry=tts&g_ep=EgoyMDI0MTAwMi4xKgBIAVAD', 'Novotel Jumeirah Village Triangle ÙÙ†Ø¯Ù‚ Ù†ÙˆÙÙˆØªÙŠÙ„ Room No 1012', NULL, 25.0415433, 55.1872292, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(124, 'Samantha', NULL, '3000', 'https://www.google.com/maps/dir/24.370739,54.4738346/Dusit+Thani+Abu+Dhabi+-+925+Sultan+Bin+Zayed+The+First+Street+(Al+Muroor+Road)+-+Abu+Dhabi/@24.4132828,54.3776331,12z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5e687cb7ccfea3:0x1581edf8070978be!2m2!1d54.3947094!2d24.4550179!3e0?entry=tts&g_ep=EgoyMDI0MTAwMi4xKgBIAVAD', 'Creek Vista Reserve Sohba Heartland Ap A103', NULL, 25.1793538, 55.3041352, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(125, 'Catherine  Miller  ', NULL, '3000', 'https://www.google.com/maps/place/The+Arc+Tower+-+Al+Reem+Island+-+The+Gate+District+-+Abu+Dhabi+-+United+Arab+Emirates/@24.4950441,54.4087833,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67bc293fcded:0xed847b1544ceff47!8m2!3d24.4950441!4d54.4087833!16s%2Fg%2F12vqs3czw?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Arc Tower B  Room No 515', NULL, 24.4950985, 54.4091292, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(126, 'Kerry Ann Moodley ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B024\'38.5%22N+54%C2%B032\'09.8%22E/@24.4106944,54.5360556,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4106944!4d54.5360556?entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Yasmine 4 #303 Khalifa City - Al Rayyana ', NULL, 24.4109728, 54.5360588, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(127, 'Ruhina ', NULL, '3000', 'https://www.google.com/maps/place/Noor+Al+Safa+Building+city+tower/@25.2241564,55.3287449,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f5d4457118129:0x12c56659468b85b7!8m2!3d25.2241564!4d55.3287449!16s%2Fg%2F11c200dr7v?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Room No 806  Al Jaddaf', NULL, 25.2241564, 55.3287449, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(128, 'Maryem Belmokhtar', NULL, '3000', 'https://www.google.com/maps/place/Deira+-+Riggat+Al+Buteen+-+Dubai/@25.2587007,55.3190281,16z/data=!3m1!4b1!4m6!3m5!1s0x3e5f5cd1fcbba527:0xa7428b7379a6dae0!8m2!3d25.2580614!4d55.3233351!16s%2Fm%2F03qklgp?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', ' Rotana Al Bandar  Room No 807', NULL, 25.2590803, 55.3192285, '2024-12-04 05:34:46', '2024-12-04 05:34:46');
INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `geolocation`, `address`, `info`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(129, 'Tahirah Daniel', NULL, '3000', 'https://www.google.com/maps/place/L\'AVENUE/@25.1071709,55.3722016,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f658fc39f9d39:0xa4ffb0b0543a2e57!8m2!3d25.1071709!4d55.3722016!16s%2Fg%2F11j0kf8fv5?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Room No 605 LA Avenue', NULL, 25.1071709, 55.3722016, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(130, 'Sudhindra Rao  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Marina Warf 1, Room No 1801, 18th Floor', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(131, 'Dounia Douk  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Grand Millennium Hotel Room No 2106', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(132, 'Anurag ', NULL, '3000', 'https://www.google.com/maps/place/Grand+Continental+Hotel/@24.4928107,54.3662325,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e6661302c5b33:0x3572a814a092c115!5m2!4m1!1i2!8m2!3d24.4928107!4d54.3662325!16s%2Fg%2F1tfq7q2q?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Grand Continental Hotel  Room 1508', NULL, 24.4928571, 54.3662243, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(133, 'Mary Carrick  ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B027\'49.2%22N+54%C2%B035\'48.1%22E/@24.463669,54.596692,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.463669!4d54.596692?entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Ap:707 Mayan 2 ', NULL, 24.4638050, 54.5964392, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(134, 'Ilona', NULL, '3000', 'https://www.google.com/maps/place/Forte+Tower+2/@25.1948912,55.2689663,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f69b72bd701a9:0x900d5d6800d506c5!8m2!3d25.1948912!4d55.2689663!16s%2Fg%2F11vbzs1cvg?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Forte tower 2 Room No 3503', NULL, 25.1948912, 55.2689663, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(135, 'Sudhindra Rao ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'Marina Warf 1, Room No 1801, 18th Floor', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(136, 'Jessy', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B005\'58.5%22N+55%C2%B010\'37.5%22E/@25.0995827,55.1744995,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.0995827!4d55.1770744?q=25.09958267211914,55.17707443237305&z=17&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'PPS CONSULTANCY LLC  P O Box 53641, Dubai, UAE Tameem House Office Building , Office no. 1509,  Al Fosool Street, Al Thanyah First, Barsha Heights, Dubai, UAE', NULL, 25.0996866, 55.1741467, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(137, 'Saielli', NULL, '3000', 'https://www.google.com/maps/place/The+Grand/@25.2073534,55.342771,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f67115f885625:0xb2a5d333a7f28560!8m2!3d25.2073534!4d55.342771!16s%2Fg%2F11tss05f6l?q=684V+QCX+The+Grand+-+Ras+Al+Khor+-+Dubai+Creek+Harbour+-+Dubai+-+United+Arab+Emirates&ftid=0x3e5f67115f885625:0xb2a5d333a7f28560&lucs=,94242574,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iwb&entry=tts&g_ep=EgoyMDI0MTAwMi4xIPu8ASoASAFQAw%3D%3D', 'The grand 2702, creek harbour', NULL, 25.2073534, 55.3427710, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(138, 'Tomj  ', NULL, '3000', 'https://www.google.com/maps/place/Marina+Heights+2+(Building+6)/@24.4918596,54.3950895,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67b392945661:0x38fd76c4d18b190d!8m2!3d24.4918596!4d54.3950895!16s%2Fg%2F11b75gddh1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwNS4yIPu8ASoASAFQAw%3D%3D', 'Marina Square 2  Building 6 Al Reem Island  Room No 2302', NULL, 24.4918596, 54.3950895, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(139, 'Stephan Heller  ', NULL, '3000', 'https://www.google.com/maps/place/Beach+Rotana+Residences/@24.4939864,54.3850849,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e679a6164b2b9:0x534decb7ccbfc78c!5m2!4m1!1i2!8m2!3d24.4939864!4d54.3850849!16s%2Fg%2F11g0mfq9hh?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Room No 1253 Rotana Beach Residence', NULL, 24.4941417, 54.3849806, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(140, 'David Langley', NULL, '3000', 'https://www.google.com/maps/place//@24.3715915,54.4677452,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwNS4yIPu8ASoASAFQAw%3D%3D', 'Dubai Land Residence Complex Blue Wave Tower Room No 414', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(141, 'Raghu Prasad  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwNS4yIPu8ASoASAFQAw%3D%3D', 'Villa 16 Room No 2 Zone 36 MBZ', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(142, 'Tariq', NULL, '3000', 'https://www.google.com/maps/place/Arjan+Circle/@25.063133,55.2370058,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6f0068cb1e3d:0x52bbae6f886beab3!8m2!3d25.063133!4d55.2370058!16s%2Fg%2F11w1kgktst?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwNy4xIPu8ASoASAFQAw%3D%3D', 'Appartment 813 Arjan Cycle', NULL, 25.0631330, 55.2370058, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(143, 'Pam Parae ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B027\'48.0%22N+54%C2%B019\'08.5%22E/@24.463337,54.319037,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.463337!4d54.319037?entry=tts&g_ep=EgoyMDI0MTAwNy4xIPu8ASoASAFQAw%3D%3D', ' Emirates Palace Hotel Room No 3230', NULL, 24.4635923, 54.3194962, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(144, 'Julia Muschert', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwNy4xIPu8ASoASAFQAw%3D%3D', ' Vision Twin Tower 2 Room No 505', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(145, 'Mahmoud Abomayla ', NULL, '3000', 'https://www.google.com/maps/place/Mohamed+Bin+Zayed+City+-+Z16+-+Abu+Dhabi/@24.3287385,54.5565177,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e388e763abf11:0x1d52753350949275!8m2!3d24.3298135!4d54.5560493!16s%2Fg%2F1ydp72g_d?entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Compound 5, Villa 1, Room 7', NULL, 24.3283618, 54.5564184, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(146, 'Munski ', NULL, '3000', 'https://www.google.com/maps/place/69+Tawi+Zinjar+St+-+Shakhbout+City+-+Abu+Dhabi/@24.353297,54.6349088,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e37c3179ca10b:0x32e3d25981264d91!8m2!3d24.353297!4d54.6349088!16s%2Fg%2F11k1my5x8v?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Villa 69', NULL, 24.3532970, 54.6349088, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(147, 'Eli  ', NULL, '3000', 'https://www.google.com/maps/place/Al+Naseem+B/@24.45076,54.5994818,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e458934cfe46b:0x71780aab876fa693!8m2!3d24.45076!4d54.5994818!16s%2Fg%2F11l8t5y7lh?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Naseem B North App 206', NULL, 24.4507388, 54.5995905, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(148, 'Mervz ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', ' Adress Beach Resort  Room No 1302', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(149, 'Daoud ', NULL, '3000', 'https://www.google.com/maps/place/Grand+Villaggio+Hotel/@24.465244,54.3747087,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e6789040834ff:0xb4d3cd7f90454ffb!5m2!4m1!1i2!8m2!3d24.465244!4d54.3747087!16s%2Fg%2F11smr6cskd?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Grand Villagio Hotel Room No 1103', NULL, 24.4653251, 54.3746956, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(150, 'Alym', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Room no 3405  Bab Al Qasr', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(151, 'Fatima Jameri ', NULL, '3000', 'https://www.google.com/maps/place/BIGmart+Hypermarket+-+TCA+BR-9/@24.493889,54.3787927,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67cde94f49db:0x7136c5b2526077f7!8m2!3d24.493889!4d54.3787927!16s%2Fg%2F11rk8zz6x5?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' Ap:211, Big Mart Hypermarket Building', NULL, 24.4938890, 54.3787927, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(152, 'Arundathi ', NULL, '3000', 'https://www.google.com/maps/place/Al+Hawai+Tower/@25.2117181,55.2748719,17z/data=!4m6!3m5!1s0x3e5f4289591ad6c7:0xa47a52ad26dd67a2!8m2!3d25.2119145!4d55.274742!16s%2Fg%2F11cmstp4h9?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Al Hawai Tower Ap 2404', NULL, 25.2118721, 55.2746821, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(153, 'Sredish Bhaskaran  ', NULL, '3000', 'https://www.google.com/maps/place/Villa+28/@24.3308086,54.5443018,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e39005cef32dd:0xa04afab44a282eb2!8m2!3d24.3308086!4d54.5443018!16s%2Fg%2F11y598xjnh?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'VIlla 28, Building D, First Floor Room No 7', NULL, 24.3308086, 54.5443018, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(154, 'Reffah ', NULL, '3000', 'https://www.google.com/maps/place/MAG+218+Tower/@25.0879538,55.1489525,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b5a7e0d4629:0xad70d7ddd8614c6f!8m2!3d25.0879538!4d55.1489525!16s%2Fm%2F026rj38?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Mag 218  Room No 1609', NULL, 25.0879537, 55.1489526, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(155, 'Soukaina Ben Bihi ', NULL, '3000', 'https://www.google.com/maps/place/The+Gate+Residence+1/@25.0938801,55.3842989,17z/data=!3m1!4b1!4m6!3m5!1s0x3ef5659d6fa0305b:0x55e4bc50007d8520!8m2!3d25.0938801!4d55.3842989!16s%2Fg%2F11flf55kfq?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Apartment 2513  Floor 25', NULL, 25.0938844, 55.3842986, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(156, 'Zaakira  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Al Ghadeer Phase 2 CON 125 G02', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(157, 'Amir Zaheel', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B020\'59.3%22N+54%C2%B030\'47.4%22E/@24.349815,54.513164,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.349815!4d54.513164?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Behind ADJD Building Opposite Grand Tapioca restaurant. Room No 17', NULL, 24.3497630, 54.5133348, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(158, 'Ayeda  ', NULL, '3000', 'https://www.google.com/maps/place/Sheraton+Mall+of+the+Emirates+Hotel,+Dubai/@25.1192959,55.2031531,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6bbec39f339d:0xcdcb2e2120825973!5m2!4m1!1i2!8m2!3d25.1192959!4d55.2031531!16s%2Fg%2F1ptvx0_76?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Sheraton Mall Of Emirates  Room Number 1701', NULL, 25.1192959, 55.2031531, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(159, 'Mais', NULL, '3000', 'https://www.google.com/maps/place/Al+Badri+Tower+B,+Dubai+Land+Residentional+Complex/@25.08795,55.3796009,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f650f684cfafb:0x4086aa05bcd2f34c!8m2!3d25.08795!4d55.3796009!16s%2Fg%2F11trxrzk26?utm_source=mstt_1&lucs=47068615&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Ap:804, Tower A Badri Building, Dubai Land', NULL, 25.0883348, 55.3794234, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(160, 'Haris', NULL, '3000', 'https://www.google.com/maps/place/Leen+Fitness+Club/@24.3535142,54.5590688,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e47ae8adc1cd3:0x855e994a4eab3fe2!8m2!3d24.3535142!4d54.5590688!16s%2Fg%2F11rz96r5q0?q=Leen+Fitness+Club,+Makani+Mall+-+392+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%A5%D9%8A%D8%AB%D8%A7%D8%B1+-+Mohamed+Bin+Zayed+City+-+Z7+-+Abu+Dhabi&ftid=0x3e5e47ae8adc1cd3:0x855e994a4eab3fe2&lucs=,94242535,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Gym', NULL, 24.3535142, 54.5590688, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(161, 'Haris 2', NULL, '3000', 'https://www.google.com/maps/place/Leen+Fitness+Club/@24.3535142,54.5590688,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e47ae8adc1cd3:0x855e994a4eab3fe2!8m2!3d24.3535142!4d54.5590688!16s%2Fg%2F11rz96r5q0?q=Leen+Fitness+Club,+Makani+Mall+-+392+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%A5%D9%8A%D8%AB%D8%A7%D8%B1+-+Mohamed+Bin+Zayed+City+-+Z7+-+Abu+Dhabi&ftid=0x3e5e47ae8adc1cd3:0x855e994a4eab3fe2&lucs=,94242535,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAwOS4wIPu8ASoASAFQAw%3D%3D', 'Gym', NULL, 24.3535142, 54.5590688, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(162, 'Gabreila ', NULL, '3000', 'https://www.google.com/maps/place/Studio+M+Hotel+Al+Barsha/@25.1160069,55.2057039,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6bc071c55d2d:0x961a3e36c21a7e36!5m2!4m1!1i2!8m2!3d25.1160069!4d55.2057039!16s%2Fg%2F11gh48ptfr?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxMy4wIPu8ASoASAFQAw%3D%3D', ' Studio M Hotel,  Al Barsha Room No 1305', NULL, 25.1160069, 55.2057039, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(163, 'Carlene  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716087,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxMy4wIPu8ASoASAFQAw%3D%3D', 'Evershine one 3rd floor room 311 JVC', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(164, 'Tarika  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxMy4wIPu8ASoASAFQAw%3D%3D', 'Al Maha Street Waters Edge  Building 11 Apartment 006', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(165, 'Rabeea Ali', NULL, '3000', 'https://www.google.com/maps/place/Al+Nahyan+Compound+B/@24.4721511,54.3824186,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67ec3a3a5843:0xbee7c8bd51714f98!8m2!3d24.4721511!4d54.3824186!16s%2Fg%2F11vc14kcbq?entry=tts&g_ep=EgoyMDI0MTAxMy4wIPu8ASoASAFQAw%3D%3D', 'Building B6 Apartment 202 Al nahyan compound B', NULL, 24.4721511, 54.3824186, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(166, 'Terma', NULL, '3000', 'https://www.google.com/maps/place/820+Zayed+The+First+St+-+Al+Danah+-+Zone+1+-+Abu+Dhabi/@24.4845266,54.3616675,17z/data=!4m6!3m5!1s0x3e5e666ee055792b:0xe0a91a2b109131ed!8m2!3d24.48442!4d54.3615864!16s%2Fg%2F11gjgv7t4z?entry=tts&g_ep=EgoyMDI0MTAxMy4wIPu8ASoASAFQAw%3D%3D', 'Salma tower building 9 App 1701', NULL, 24.4844200, 54.3615864, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(167, 'Christabel  ', NULL, '3000', 'https://www.google.com/maps/place/Palm+Jumeirah+Rd+-+The+Palm+Jumeirah+-+Dubai/@25.1141786,55.1403554,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f1524ba959f65:0x9aa44b5f60a3b1b2!8m2!3d25.1141786!4d55.1403554!16s%2Fg%2F11h_cl6412?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNC4wIPu8ASoASAFQAw%3D%3D', 'Room No 10306  Golden Mile 10 Palm Jumeirah', NULL, 25.1141675, 55.1403451, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(168, 'Beth Miller  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNC4wIPu8ASoASAFQAw%3D%3D', 'Apartment 1112 Gate Tower One Reem Island ', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(169, 'Villa 56', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B024\'04.7%22N+54%C2%B031\'57.4%22E/@24.4013087,54.5300419,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4013087!4d54.5326168?q=24.4013087,54.5326168&gl=us&lucs=,47071704&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAxNS4wIPu8ASoASAFQAw%3D%3D', 'Sas Alnakel Zone 7', NULL, 24.4012348, 54.5313972, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(170, 'Dina Ashraf', NULL, '3000', 'https://www.google.com/maps/dir/24.3707411,54.4738179/26RW%2B664+Glitz+3+Tower+2+-+Dubai+Studio+City+-+Dubai/@24.7116151,54.2039786,9z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5f6f40a88b9ad9:0x7b237b3538f5067f!2m2!1d55.2455818!2d25.0404345!3e0?entry=tts&g_ep=EgoyMDI0MTAxNS4wKgBIAVAD', 'Apartment 604, Glitz 3 Tower 2, Dubai studio city , El hebiah 2 , Dubai', NULL, 24.7116151, 54.2039786, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(171, 'Nawar ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B029\'22.7%22N+54%C2%B023\'42.1%22E/@24.4896259,54.3924561,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4896259!4d54.395031?q=24.489625930786133,54.3950309753418&z=17&entry=tts&g_ep=EgoyMDI0MTAxNS4wIPu8ASoASAFQAw%3D%3D', 'Mag 5 Building 10 Room 2201 Reem Island', NULL, 24.4903670, 54.3930294, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(172, 'Roshan  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MTAxNS4wIPu8ASoASAFQAw%3D%3D', 'R:507, A4 building, New York University, Saadiyat Island, ', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(173, 'Orlaith  ', NULL, '3000', 'https://www.google.com/maps/place/The+Arc+Tower+C/@24.4951717,54.4094333,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67194c1c7061:0x4f24c77c9bc32b72!8m2!3d24.4951717!4d54.4094333!16s%2Fg%2F11jpyvsmb1?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Arc tower c 1820  Reem Island', NULL, 24.4950985, 54.4091292, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(174, 'Jessica', NULL, '3000', 'https://www.google.com/maps/place/Bloom+Central/@24.4702987,54.3699077,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67b75ce19e5f:0xc5749713a3fd9723!8m2!3d24.4702987!4d54.3699077!16s%2Fg%2F11glw4r25l?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Room No 2001 Bloom Central, Airport Road, Al Manhal, ', NULL, 24.4702987, 54.3699077, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(175, 'Katie ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B024\'35.1%22N+54%C2%B032\'13.5%22E/@24.4097568,54.5345201,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4097568!4d54.537095?q=24.4097568,54.537095&z=17&entry=tts&g_ep=EgoyMDI0MTAxNS4wIPu8ASoASAFQAw%3D%3D', 'Ap:805 Yasmine 2B Al Rayyana', NULL, 24.4102181, 54.5340686, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(176, 'Amer Sandawi ', NULL, '3000', 'https://www.google.com/maps/place/Jumeirah+Al+Qasr/@25.1317691,55.184494,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f4200f6a91439:0xd5f165394c1aa6e4!5m2!4m1!1i2!8m2!3d25.1317691!4d55.184494!16s%2Fg%2F1hxrq7wp3?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNS4wIPu8ASoASAFQAw%3D%3D', 'Al Qasr Hotel Room 209', NULL, 25.1317691, 55.1844940, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(177, 'Kyle Mackay ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B009\'44.0%22N+55%C2%B018\'02.0%22E/@25.1622222,55.3005556,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.1622222!4d55.3005556?entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Room No 106 Masar Residence Nad Al Sheba Dubai ', NULL, 25.1624335, 55.3007143, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(178, 'Abdul Ghani ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', ' M Tower Executive  Room No1007', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(179, 'Jackielou ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', '204 Salem Ahmad Al Moosa Tower 1 , Al Nahda Shajrha. ', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(180, 'Youssef ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Tiger 1 Sharjah Taawun Street Room No 1407', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(181, 'Isabel ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B003\'09.1%22N+55%C2%B012\'06.3%22E/@25.0525278,55.20175,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.0525278!4d55.20175?entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Diamond Views, 1. Villa A07. JVC', NULL, 25.0525235, 55.2015962, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(182, 'Lara Le Roux  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Aloft Room No 917', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(183, 'Ali Ayoub  ', NULL, '3000', 'https://www.google.com/maps/place/Manazel+Rawdhat/@24.4215332,54.4599273,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e433716bd4b8f:0xa60f662fba1abf20!8m2!3d24.4215332!4d54.4599273!16s%2Fg%2F11sgkjkpvm?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Manazel Rawdhat ap 720', NULL, 24.4216888, 54.4597925, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(184, 'Suroor ', NULL, '3000', 'https://www.google.com/maps/place/Mohamed+Bin+Zayed+City+-+Z16+-+Abu+Dhabi/@24.3287385,54.5565177,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e388e763abf11:0x1d52753350949275!8m2!3d24.3298135!4d54.5560493!16s%2Fg%2F1ydp72g_d?utm_source=mstt_1&lucs=47068615&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', ' C:05, V:01, R:04, MBZ 16', NULL, 24.3283618, 54.5564184, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(185, 'Kris ', NULL, '3000', 'https://www.google.com/maps/place/Turquoise+9+-+Mamsha+Al+Saadiyat/@24.5386535,54.4068812,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e671162ad99c7:0x87d3340b7a039f84!8m2!3d24.5386535!4d54.4068812!16s%2Fg%2F11mwqjf7l_?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Ap:603, Turquoise 9, Mamsha Al Saadiyat', NULL, 24.5386161, 54.4060911, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(186, 'Jennifer  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Khalifa Jewelry Bldg. Back Side Of Sofitel Corniche Room No 602', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(187, 'Ahmed Esam  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Grand Hayat Room No 1509', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(188, 'Francesca', NULL, '3000', 'https://www.google.com/maps/place/Al+Saadiyat+Island+-+Abu+Dhabi/@24.5452725,54.4335866,13z/data=!3m1!4b1!4m6!3m5!1s0x3e5e5d8e626d6f7d:0x9ad0556bb84aa990!8m2!3d24.5353834!4d54.4332588!16s%2Fg%2F12ls129xh?entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', '  V:772, Sadiyat beach Villas 7', NULL, 24.5452725, 54.4335866, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(189, 'William Wang', NULL, '3000', 'https://www.google.com/maps/place/Marriott+Hotel+Al+Jaddaf,+Dubai/@25.2113738,55.3156644,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f5d5494a4fd4b:0xa69aa7dfd3aa8517!5m2!4m1!1i2!8m2!3d25.2113738!4d55.3156644!16s%2Fg%2F1yh9tvvq5?sa=X&ved=1t:8290&ictx=111&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Room 551 Marriott Hotel Al Jaddaf', NULL, 25.2112484, 55.3157442, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(190, 'Sebastian ', NULL, '3000', 'https://www.google.com/maps/place/Radisson+Blu+Hotel+%26+Resort,+Abu+Dhabi+Corniche/@24.4629006,54.3257142,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e65eb6785e20d:0x3e496dfca002f047!5m2!4m1!1i2!8m2!3d24.4629006!4d54.3257142!16s%2Fg%2F1tfzktn1?entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Raddison Blu Hotel And Resorts Room No 334', NULL, 24.4629855, 54.3253734, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(191, 'IMPCT Destination and Event  Manageemnt', NULL, '3000', 'https://www.google.com/maps/place/Emirates+Palace+Mandarin+Oriental/@24.4612381,54.3180193,15z/data=!4m2!3m1!1s0x0:0x634ef65bd7bd41c8?sa=X&ved=1t:2428&ictx=111', 'Abu Dhabi', NULL, 24.4612381, 54.3180193, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(192, 'James  ', NULL, '3000', 'https://www.google.com/maps/place/Duja+tower/@25.2288653,55.2862823,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f42ef31952e51:0xff820dcedc8de6d4!8m2!3d25.2288653!4d55.2862823!16s%2Fm%2F03d1fjl?entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', '4614 duja tower Trade Center 1 Dubai', NULL, 25.2288561, 55.2862713, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(193, 'Mariam   ', NULL, '3000', 'https://www.google.com/maps/place/Waterfront+Tower+B/@24.490762,54.3852857,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67c7e3747b23:0x62d157c278bb44c3!8m2!3d24.490762!4d54.3852857!16s%2Fg%2F11k4_d3zck?q=Waterfront+Tower+B+-+02+Al+Zahiyah+St+-+Al+Zahiyah+-+Abu+Dhabi&ftid=0x3e5e67c7e3747b23:0x62d157c278bb44c3&lucs=,47071704,47069508,94218635,94203019,47084304,94208458,94208447,94213318&g_st=ic&entry=tts&g_ep=EgoyMDI0MTAxNi4wIPu8ASoASAFQAw%3D%3D', 'Waterfront building, Tower B, Apartment 807', NULL, 24.4907620, 54.3852857, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(194, 'Fatiha', NULL, '3000', 'https://www.google.com/maps/place/4+Street+41+-+Al+Barsha+-+Al+Barsha+1+-+Dubai/@25.107897,55.1842532,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b9fab12b7d9:0xca7cc87baeb98c91!8m2!3d25.107897!4d55.1842532!16s%2Fg%2F11sy1lvprm?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMC4xIPu8ASoASAFQAw%3D%3D', 'Street 4  Compound Al Hassani  Villa 3 Al Barsha 1', NULL, 25.1078739, 55.1842905, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(195, 'Nair  ', NULL, '3000', 'https://www.google.com/maps/place/6+Al+Wabil+St+-+Mohamed+Bin+Zayed+City+-+Z17+-+Abu+Dhabi/@24.3417049,54.545599,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e476024dbebfb:0x22399426d1576f0f!8m2!3d24.3417049!4d54.545599!16s%2Fg%2F11fj45k3nt?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'V:01, R:02, MBZ 17', NULL, 24.3417049, 54.5455990, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(196, 'Rose ', NULL, '3000', 'https://www.google.com/maps/place/20+Al+Gharib+St+-+Mohamed+Bin+Zayed+City+-+Z31+-+Abu+Dhabi/@24.2987202,54.569166,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e39a91d1e2101:0x4df62fa1c389d0c1!8m2!3d24.2987202!4d54.569166!16s%2Fg%2F11tg2v0468?entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'V:20, 1st Floor, R:06, MBZ 31', NULL, 24.2987202, 54.5691660, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(197, 'Ap:1003 ', NULL, '3000', 'https://www.google.com/maps/place/Al+Hassani+Tower/@25.0962692,55.1785333,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b740039fa5d:0x5d435ccc30e16e1c!8m2!3d25.0962692!4d55.1785333!16s%2Fg%2F11bxb5b03w?q=35WH+GC3+Al+Hassani+Tower+-+Barsha+Heights+-+Dubai&ftid=0x3e5f6b740039fa5d:0x5d435ccc30e16e1c&lucs=,94242475,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Al Hassani Tower Barsha Heights', NULL, 25.0962692, 55.1785333, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(198, 'Sid Bahal', NULL, '3000', 'https://www.google.com/maps/place/Dusit+Thani+Abu+Dhabi/@24.4551799,54.3949616,17z/data=!4m9!3m8!1s0x3e5e687cb7ccfea3:0x1581edf8070978be!5m2!4m1!1i2!8m2!3d24.4550179!4d54.3947094!16s%2Fm%2F0wfjwmg?entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Room No 920 Dusit Thani Abu Dhabi', NULL, 24.4551801, 54.3947254, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(199, 'Anjali  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Room 2103, Ward 2A Near NMC Hospital Khalifa City', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(200, 'Varona', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Al Ameri Building Al Raha Room No Dx05 Ground Floor', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(201, 'Juliana Congiano ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Ap:1209 B: Sail tower, Al Raha', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(202, 'Epo Nine Anika  ', NULL, '3000', 'https://www.google.com/maps/place/95+Al+Soon+Street+-+Umm+Suqeim+-+Jumeirah+3+-+Dubai/@25.1498254,55.196536,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6a44761ccbab:0xd8a3ad185a0caa3f!8m2!3d25.1498254!4d55.196536!16s%2Fg%2F11t1hh091f?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Soon Street,  Villa 95', NULL, 25.1498254, 55.1965360, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(203, 'Sophy Drobnitzky  ', NULL, '3000', 'https://www.google.com/maps/place/Park+Ridge+Tower+C/@25.1120907,55.2488424,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6949f8b0bcf3:0x3d76a11f9f13a24d!8m2!3d25.1120907!4d55.2488424!16s%2Fg%2F11gh46k1lg?utm_source=mstt_1&lucs=karto&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'G02 Park Ridge Tower C', NULL, 25.1120907, 55.2488424, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(204, 'Jayalakshmi ', NULL, '3000', 'https://www.google.com/maps/place/Sultan+Al+Arab+Restaurant+-+Al+Barsha/@25.1107556,55.1949981,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b66292787db:0xe9c061558473dee7!8m2!3d25.1107556!4d55.1949981!16s%2Fg%2F11p5frqnpk?utm_source=mstt_1&lucs=karto&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', ' Ap:510, Nada Al Falasi Al Barsha 1 ', NULL, 25.1107556, 55.1949981, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(205, 'Peregrine Beckette', NULL, '3000', 'https://www.google.com/maps/place/Cayan+Tower/@25.0870373,55.1451496,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b5107a90883:0xcf56c2d951dd5fb8!8m2!3d25.0870373!4d55.1451496!16zL20vMGRsNV80?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMS4xIPu8ASoASAFQAw%3D%3D', 'Cayan Tower Appartment 4207', NULL, 25.0869437, 55.1452575, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(206, 'Qurram ', NULL, '3000', 'https://www.google.com/maps/place/Mangrove+One/@24.4369544,54.4533195,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4260fda62d11:0x1c9345f75c202ad!8m2!3d24.4369544!4d54.4533195!16s%2Fg%2F11hd4_6m37?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', ' V:24 Mangroves Compound ', NULL, 24.4365488, 54.4529606, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(207, ' Spectacular Event Management LLC', NULL, '3000', 'https://www.google.com/maps/place/Al+Wathbah+-+Al-Wathba+South+-+Abu+Dhabi/@24.2099624,54.6537638,12z/data=!3m1!4b1!4m6!3m5!1s0x3e5e2e24eff90f71:0x90d78f7ed7e7291a!8m2!3d24.1902524!4d54.6753231!16s%2Fg%2F12lrd7k53?entry=tts&g_ep=EgoyMDI0MTAyMi4wIPu8ASoASAFQAw%3D%3D', 'Al Wathba', NULL, 24.2099624, 54.6537638, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(208, 'Philly', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B021\'50.6%22N+54%C2%B043\'56.5%22E/@24.3640515,54.7297728,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.3640515!4d54.7323477?q=24.3640515,54.7323477&z=17&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Villa 07 Madinat Al Zaid', NULL, 24.3638234, 54.7309137, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(209, 'Chun Yin Chen', NULL, '3000', 'https://www.google.com/maps/place/Premier+Inn+Dubai+Ibn+Battuta+Hotel/@25.0467208,55.1192902,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f133e6cb5c69d:0x69ffc67a9e338d4d!5m2!4m1!1i2!8m2!3d25.0467208!4d55.1192902!16s%2Fg%2F11bzyn5h4y?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', '  R:1334  Premier Inn ibn battuta', NULL, 25.0466334, 55.1190375, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(210, 'Zaynab ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', ' Swiss Hotel  Room No 1230', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(211, 'Saoud  ', NULL, '3000', 'https://www.google.com/maps/place/Citymax+Hotel+Al+Barsha+at+the+Mall/@25.1155814,55.2039814,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6b9555a6c625:0x841ecc635c9250e2!5m2!4m1!1i2!8m2!3d25.1155814!4d55.2039814!16s%2Fg%2F1tdl95nw?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Citymax Al Barsha Mall Of The Emirates', NULL, 25.1157890, 55.2038690, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(212, 'Omar Saeed', NULL, '3000', 'https://www.google.com/maps/place/The+Ritz-Carlton+Abu+Dhabi,+Grand+Canal/@24.4116996,54.4849239,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e43d6cdd2e50b:0x706be004bc69d3f!5m2!4m1!1i2!8m2!3d24.4116996!4d54.4849239!16s%2Fg%2F119txrvgr?entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', ' Room No 3062 The Ritz Calton Abu Dhabi', NULL, 24.4117300, 54.4850186, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(213, 'Basant', NULL, '3000', 'https://www.google.com/maps/place/6+Al+Saray+St+-+Khalifa+City+-+Sector+33+-+Abu+Dhabi/@24.3986623,54.5658734,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e46580647f059:0x20702e443c76db2c!8m2!3d24.3986623!4d54.5658734!16s%2Fg%2F11sdyn8tky?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Sary Deluxe Hotel  Room No 502', NULL, 24.3986623, 54.5658734, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(214, 'DCDC ', NULL, '3000', 'https://www.google.com/maps/place/Marriott+Hotel+Al+Forsan,+Abu+Dhabi/@24.4073346,54.548079,17z/data=!4m9!3m8!1s0x3e5e469472015ffb:0x538316f47ece91fd!5m2!4m1!1i2!8m2!3d24.4073346!4d54.548079!16s%2Fg%2F11c1rx4zhz?entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Room No 457 Marriot Hotel Al Fursan', NULL, 24.4073346, 54.5480790, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(215, 'Omar Hussain ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'R:3121 Sofitel', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(216, 'Noor  ', NULL, '3000', 'https://www.google.com/maps/place/Harbour+Views+Tower+2/@25.2058042,55.3448574,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f67d0fbc8e60d:0x3a10d18a67b28cb7!8m2!3d25.2058042!4d55.3448574!16s%2Fg%2F11hz020r1l?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Harbour Views Tower 2 Room No 3905', NULL, 25.2061242, 55.3448969, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(217, 'Dr Sanya  ', NULL, '3000', 'https://www.google.com/maps/place/49JW%2BFP4+-+Dubai+Silicon+Oasis+-+Cedre+Villas+-+Dubai/@25.1311375,55.3968281,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f640cc0728f71:0xb081a6c150cf710a!8m2!3d25.1311375!4d55.3968281?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'J-78, Cedre Villas, Dubai Silicon Oasis', NULL, 25.1311298, 55.3968254, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(218, 'Hajar ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B011\'17.5%22N+55%C2%B015\'39.5%22E/@25.1881944,55.2609722,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.1881944!4d55.2609722?entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Business Bay Tiara East Tower Apartment 2007, Dubai', NULL, 25.1877123, 55.2616179, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(219, 'Nilay  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Saadiyat Beach ResidenceBuilding 2 Apartment 406', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(220, 'Sonal  ', NULL, '3000', 'https://www.google.com/maps/place/Mangrove+Place/@24.4969654,54.4088281,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67bc00000001:0x16c65b2cae29e3fa!8m2!3d24.4969654!4d54.4088281!16s%2Fg%2F11bccghyy3?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Apartment1712 mangrove palace', NULL, 24.4969460, 54.4089894, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(221, 'Aliyah', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B021\'16.1%22N+54%C2%B035\'51.1%22E/@24.3544668,54.5949376,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.3544668!4d54.5975125?q=24.3544668,54.5975125&lucs=,94242598,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Villa 32 Room No 11 First Floor', NULL, 24.3544668, 54.5949376, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(222, 'Misbah Saeed ', NULL, '3000', 'https://www.google.com/maps/place/Trade+Centre+-+Trade+Centre+1+-+Dubai/@25.2178988,55.2789953,15z/data=!3m1!4b1!4m6!3m5!1s0x3e5f428d2fafa707:0x3b059f32d982360a!8m2!3d25.2190916!4d55.279105!16s%2Fm%2F03ql696?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', ' Sheraton Grand Hotel   Room 2903', NULL, 25.2179814, 55.2787379, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(223, 'Crystal Goodwin ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Damac Hills 2; Cluster 13 Zinnia; 13h Street; Villa 279', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(224, 'ErweLL  ', NULL, '3000', 'https://www.google.com/maps/place/17+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D9%87%D9%8F%D8%A8%D9%91%D9%8E%D8%A7%D9%86+-+Al+Danah+-+Zone+1+-+Abu+Dhabi%E2%80%AD/@24.4965281,54.3707424,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e665e5b7518ed:0x8af02db092319e5b!8m2!3d24.4965281!4d54.3707424!16s%2Fg%2F11g189bsr2?entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Building 49  Room No 201', NULL, 24.4965281, 54.3707424, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(225, 'Muhammad Mohsin  ', NULL, '3000', 'https://www.google.com/maps/place/219+%D8%B2%D8%A7%D8%AE%D9%90%D8%B1+-+Khalifa+City+-+Sector+33+-+Abu+Dhabi%E2%80%AD/@24.4032417,54.5613436,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e46f414b349c3:0xd0eb8afb76ce8be!8m2!3d24.4032417!4d54.5613436!16s%2Fg%2F11fnb005z2?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyMy4wIPu8ASoASAFQAw%3D%3D', 'Villa 219  Room No 109', NULL, 24.4032417, 54.5613436, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(226, 'Noor', NULL, '3000', 'https://www.google.com/maps/place/O/@24.4022205,54.584082,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e477b00c1f449:0xcf5e9047d02e43a4!8m2!3d24.4022205!4d54.584082!16s%2Fg%2F11fnqlfbcw?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyNy4wIPu8ASoASAFQAw%3D%3D', 'Khalifa city A  C10 Building next to cfour gym and same building as mobasch Apartment 207', NULL, 24.4022205, 54.5840820, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(227, 'Hansika Panjabi ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyNy4wIPu8ASoASAFQAw%3D%3D', 'Polo Residence D1 Building Apartment 208', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(228, 'Yousaf ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyNy4wIPu8ASoASAFQAw%3D%3D', 'Ap 212 Al Manal View Building', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(229, 'Afeela Akhlakh', NULL, '3000', 'https://www.google.com/maps/place/15+Al+Nahmah+St+-+Al+Danah+-+Zone+1+-+Abu+Dhabi/@24.4865861,54.3674491,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e666836f17915:0x79e59f04f314660f!8m2!3d24.4865861!4d54.3674491!16s%2Fg%2F11hkw79ycf?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', ' Villa 13 Room No BG 01', NULL, 24.4865861, 54.3674491, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(230, 'Cathy ', NULL, '3000', 'https://www.google.com/maps/place/3+Al+Miliar+St+-+Mohamed+Bin+Zayed+City+-+Shabiya+12+-+Abu+Dhabi/@24.3195895,54.5378589,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e38b8b6f2739b:0x3e7d098d0970af22!8m2!3d24.3195895!4d54.5378589!16s%2Fg%2F11gk16g96j?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Building 204 flat 706 Shabiya 12', NULL, 24.3195895, 54.5378589, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(231, 'Rose ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Unit 3404, 21st Century Tower', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(232, 'Ainur ', NULL, '3000', 'https://www.google.com/maps/place/Reflection+Tower+-+A/@24.4985778,54.4107825,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67b4088e6d81:0x4bf33ed5a09bdcd5!8m2!3d24.4985778!4d54.4107825!16s%2Fg%2F11t46vyjb1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', ' Reem Island,  Reflection A Tower,  App 1006', NULL, 24.4985778, 54.4107825, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(233, 'Nix ', NULL, '3000', 'https://www.google.com/maps/place/Al+Thani+Building,+Al+Barsha+1,+Dubai,+UAE+(SBK)/@25.1117557,55.2052891,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b8e570c53ab:0x69dabe520380dee1!8m2!3d25.1117557!4d55.2052891!16s%2Fg%2F11jrm81qpr?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Al Barsha Heights 1Flat No 708', NULL, 25.1115664, 55.2049883, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(234, 'Nicole  ', NULL, '3000', 'https://www.google.com/maps/place/9+%D8%A7%D9%84%D9%86%D9%8E%D8%B6%D9%90%D9%8A%D8%AF%D9%92+-+Al+Falah+-+Abu+Dhabi%E2%80%AD/@24.436823,54.7313172,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4bade0c19633:0xb2be3b2141b816e6!8m2!3d24.436823!4d54.7313172?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'International Community School Gate 13, Apartment 3', NULL, 24.4366726, 54.7313761, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(235, 'May Yassin  ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B018\'47.8%22N+54%C2%B034\'26.5%22E/@24.313267,54.574016,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.313267!4d54.574016?utm_source=mstt_1&lucs=47068615&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'V:116, R:04, St:Al Azmina, MBZ 25', NULL, 24.3132320, 54.5740973, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(236, 'Norio', NULL, '3000', 'https://www.google.com/maps/place/Mayan+1+Building/@24.4645773,54.5970057,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e453baac15a9f:0x4f56d0a279398a3d!8m2!3d24.4645773!4d54.5970057!16s%2Fg%2F11pwwtz260?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', ' Room No 805, Mayan Building 1', NULL, 24.4646000, 54.5969979, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(237, 'Nicholle ', NULL, '3000', 'https://www.google.com/maps/place/Pizza+Hut/@24.4923125,54.3661875,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e666723f036a3:0xd0eb83ac1a5f7dc1!8m2!3d24.4923125!4d54.3661875!16s%2Fg%2F1tjtgrcm?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', ' Pizza Hut Building  Room No 53', NULL, 24.4923125, 54.3661875, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(238, 'Mohammad ', NULL, '3000', 'https://www.google.com/maps/place/Al+Reem+Island+-+Shams+Abu+Dhabi+-+Abu+Dhabi/@24.5026327,54.410305,15z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67a23b0bb609:0x18f584dda6f808c5!8m2!3d24.5043484!4d54.4109627!16s%2Fg%2F1q5bnd835?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', ' Bridges Tower 4  Room No 1901', NULL, 24.5023920, 54.4106233, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(239, 'Herbert ', NULL, '3000', 'https://www.google.com/maps/place/Jack+Art+Gallery/@24.4644799,54.3754238,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e6615a52e70cf:0x1983a0ab46d85d8!8m2!3d24.4644799!4d54.3754238!16s%2Fg%2F11c7hxtmng?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Building 99 ( Jack art Gallery)Flat No 203', NULL, 24.4644799, 54.3754238, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(240, 'Crystal ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', ' Al Hassani Tower  Room No 1003', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(241, 'Leah', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Sigma 1 Tower, Reem Island. Apt.2703', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(242, 'Aswathy', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B025\'16.3%22N+54%C2%B035\'08.4%22E/@24.4212017,54.5830994,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4212017!4d54.5856743?q=24.421201705932617,54.58567428588867&z=17&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Villa 12 Room 4  Ground floor', NULL, 24.4210510, 54.5830333, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(243, 'Ahmed', NULL, '3000', 'https://www.google.com/maps/place/Al+Saqi+St+-+Khalifa+City+-+SE42+-+Abu+Dhabi/@24.4348501,54.5957339,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e460983a5913d:0x61f5522ad93d0b0a!8m2!3d24.4348501!4d54.5957339!16s%2Fg%2F11j2xj7fnq?q=Al+Saqi+St+-+Khalifa+City+-+SE42+-+Abu+Dhabi&ftid=0x3e5e460983a5913d:0x61f5522ad93d0b0a&lucs=,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_st=iw&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Villa No 17 , Flat No 3 Al Saqi Street', NULL, 24.4349622, 54.5955754, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(244, 'Nour Al Massri ', NULL, '3000', 'https://www.google.com/maps/place/Khalifa+City+-+Al+Rayyana+-+Abu+Dhabi/@24.4121462,54.5357197,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e46a4dd80a1b3:0x30a854ceccf47c4c!8m2!3d24.4113692!4d54.5361872!16s%2Fg%2F1pxw3qp_p?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Al Rayana Complex Khalifa city, Yasmina 4, App 506', NULL, 24.4121125, 54.5360156, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(245, 'Thiago  ', NULL, '3000', 'https://www.google.com/maps/place/Sidrah+Building/@24.4483668,54.6051108,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e45316fdda499:0x5f266ebf7ea87741!8m2!3d24.4483668!4d54.6051108!16s%2Fg%2F11stnywbxj?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Ap:506 Sidrah Building', NULL, 24.4484354, 54.6050483, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(246, 'Sheikha ', NULL, '3000', 'https://www.google.com/maps/place/Al+Rawdah+-+Abu+Dhabi/@24.4179927,54.4494462,14z/data=!3m1!4b1!4m6!3m5!1s0x3e5e42134bd63e99:0x9fe37764652394a6!8m2!3d24.4208429!4d54.4441416!16s%2Fg%2F11g1696rlc?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'App 202', NULL, 24.4174462, 54.4492540, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(247, 'Al Aryani Building', NULL, '3000', 'https://www.google.com/maps/place/Al+Aryani+Building/@24.4441516,54.5897794,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e45d7e809bf53:0xc381e50420f7e7a3!8m2!3d24.4441516!4d54.5897794!16s%2Fg%2F11jsr8bxbt?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTAyOS4wIPu8ASoASAFQAw%3D%3D', 'Ap:304 B:C-2042, , Al Raha', NULL, 24.4441368, 54.5897441, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(248, 'Krysia Makiela ', NULL, '3000', 'https://www.google.com/maps/place/Sandoval+Gardens+Block+B/@25.0496787,55.1996177,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6d72a3a05245:0x20b0d08f29e4881!8m2!3d25.0496787!4d55.1996177!16s%2Fg%2F11j0874fpn?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNS4wIPu8ASoASAFQAw%3D%3D', 'Apartment G212 Block B Sandoval Gardens', NULL, 25.0496787, 55.1996177, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(249, 'Brave', NULL, '3000', 'https://www.google.com/maps/place//@24.3715971,54.4691137,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNS4wIPu8ASoASAFQAw%3D%3D', '  Building B1 Ap 404 Musaffah Garden', NULL, 24.3717811, 54.4688808, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(250, 'Hector Carrillo  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNS4wIPu8ASoASAFQAw%3D%3D', 'Al Insaf Cargo Building App 101', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(251, 'Karen ', NULL, '3000', 'https://www.google.com/maps/place/P1479-+RBW9-C16/@24.4413952,54.5796939,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e45d371e9f4a1:0x3670564f628f7391!8m2!3d24.4413952!4d54.5796939!16s%2Fg%2F11j_24jqbw?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTEwNS4wIPu8ASoASAFQAw%3D%3D', ' Ap:302, C-16, Al Raha', NULL, 24.4413952, 54.5796939, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(252, 'Krishnendu  ', NULL, '3000', 'https://www.google.com/maps/place/Binghatti+Sales+Boutique/@25.1443578,55.219792,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6be16a2afb97:0x972e96b75aa28f5d!8m2!3d25.1443578!4d55.219792!16s%2Fg%2F11vby37q5b?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Vacay Luxury, 2nd floor, Room 209, Same Building Aroos Damascus Restaurant', NULL, 25.1446484, 55.2193538, '2024-12-04 05:34:46', '2024-12-04 05:34:46');
INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `geolocation`, `address`, `info`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(253, 'KM  ', NULL, '3000', 'https://www.google.com/maps/place/Al+Reef+-+Abu+Dhabi+-+United+Arab+Emirates/@24.465924,54.6562933,14z/data=!3m1!4b1!4m6!3m5!1s0x3e5e4ee57f072503:0xecfc86c31a54a5c8!8m2!3d24.4638305!4d54.6740311!16s%2Fg%2F12lvwcdp9?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Al Reef  Street 5 Villa 36', NULL, 24.4659240, 54.6562933, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(254, 'Ashraf Elkamhawy ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B027\'15.7%22N+54%C2%B036\'47.4%22E/@24.454347,54.613162,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.454347!4d54.613162?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Ap:805, B1-02, Al Zeina', NULL, 24.4545609, 54.6133573, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(255, 'Ap 706', NULL, '3000', 'https://www.google.com/maps/place/Ubora+Residence+Tower/@25.180234,55.2701303,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f683350dc5069:0xfb6c7f966ae99197!8m2!3d25.180234!4d55.2701303!16s%2Fm%2F03c_8sz?utm_source=mstt_1&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Ubora Residence Tower', NULL, 25.1802340, 55.2701303, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(256, 'Suresh ', NULL, '3000', 'https://www.google.com/maps/dir/24.3704252,54.4736942/City+Oasis+3+-+79th+corner+54th+Street,+Community+-+626+54th+St+-+Dubai+Silicon+Oasis+-+Dubai/@24.7488822,54.2747474,9z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3e5f659e27890861:0xa9439cc5f14e9a5f!2m2!1d55.3768038!2d25.1233693?entry=tts&g_ep=EgoyMDI0MTEwNi4wKgBIAVAD', 'City Oasis 3 App 409', NULL, 24.7488822, 54.2747474, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(257, 'Sara Albloshi ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', ' Bloom Marina App112', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(258, 'Muzaffer Khan ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715971,54.4691137,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', ' JLT Cluster P Room No 1105', NULL, 24.3717811, 54.4688808, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(259, 'Iman ', NULL, '3000', 'https://www.google.com/maps/place/28+5+Street+-+Shakhbout+City+-+MFW-18+-+Abu+Dhabi/@24.3746192,54.651288,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e482c82c60a9b:0x30eced9ec6d4a824!8m2!3d24.3746192!4d54.651288!16s%2Fg%2F11k64pnj2z?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Villa 22', NULL, 24.3746192, 54.6512880, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(260, 'Zin Zin ', NULL, '3000', 'https://www.google.com/maps/place/FHWX%2BJM8+-+Yas+Island+-+Abu+Dhabi/@24.4965375,54.5992031,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5e45636ddbaacb:0xfaeee1b39976a189!8m2!3d24.4965375!4d54.5992031?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Room 200 Aldar staffed accommodation Building 3', NULL, 24.4965335, 54.5992079, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(261, 'Swami Sekar  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715971,54.4691137,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'The lakes, Zulal 2,  Villa 153', NULL, 24.3717811, 54.4688808, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(262, 'Abdul Rehman  ', NULL, '3000', 'https://www.google.com/maps/place/VOGO+Grand+Hotel+Dubai/@25.1273329,55.42323,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f639e1f22c805:0x5aba2f0d5d46b157!5m2!4m1!1i2!8m2!3d25.1273329!4d55.42323!16s%2Fg%2F11gkxcc2zb?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Room No 111  Vogo Grand Hotel', NULL, 25.1262864, 55.4235952, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(263, 'Gentry Stephens  ', NULL, '3000', 'https://www.google.com/maps/place/The+Ritz-Carlton+Abu+Dhabi,+Grand+Canal/@24.4116996,54.4849239,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e43d6cdd2e50b:0x706be004bc69d3f!5m2!4m1!1i2!8m2!3d24.4116996!4d54.4849239!16s%2Fg%2F119txrvgr?entry=tts&g_ep=EgoyMDI0MTEwNi4wIPu8ASoASAFQAw%3D%3D', 'Room No.2731 Ritz Calton Hotel', NULL, 24.4117300, 54.4850186, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(264, 'Karina', NULL, '3000', 'https://www.google.com/maps/place/Al+Habtoor+Grand+Resort,+Autograph+Collection/@25.0859964,55.1411965,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6b5258b402c1:0xed92035ee4c3fe4c!5m2!4m1!1i2!8m2!3d25.0859964!4d55.1411965!16s%2Fg%2F1tw_lqgd?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMC4wIPu8ASoASAFQAw%3D%3D', ' Al Habtoor Grand Resort Room No 2420', NULL, 25.0859964, 55.1411965, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(265, 'Smitha Koonan ', NULL, '3000', 'https://www.google.com/maps/place/107+Al+Amjad+St+-+Al+Mushrif+-+W24-02+-+Abu+Dhabi/@24.4498434,54.3883106,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5e6889bdf6fb3d:0xcef297931193f3dc!8m2!3d24.4498434!4d54.3883106?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMC4wIPu8ASoASAFQAw%3D%3D', ' Villa118, Flat No 5, Behind Mongolian Restaurant, Opposite To Rizwan Tailoring Shop', NULL, 24.4497372, 54.3881426, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(266, 'Dr Wafa  ', NULL, '3000', 'https://www.google.com/maps/place/Dubai/@25.0760224,55.2274879,10z/data=!3m1!4b1!4m6!3m5!1s0x3e5f43496ad9c645:0xbde66e5084295162!8m2!3d25.2048493!4d55.2707828!16zL20vMDFmMDhy?entry=tts&g_ep=EgoyMDI0MTExMS4wIPu8ASoASAFQAw%3D%3D', 'Mulberry2A1 Apartment 108', NULL, 25.0759522, 55.2277225, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(267, 'Srirah ', NULL, '3000', 'https://www.google.com/maps/place/Dubai/@25.0760224,55.2274879,10z/data=!3m1!4b1!4m6!3m5!1s0x3e5f43496ad9c645:0xbde66e5084295162!8m2!3d25.2048493!4d55.2707828!16zL20vMDFmMDhy?entry=tts&g_ep=EgoyMDI0MTExMS4wIPu8ASoASAFQAw%3D%3D', 'Villa No 3', NULL, 25.0759522, 55.2277225, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(268, 'Krystal  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'Building Mazaya25 apartment 409', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(269, 'Asma Fuzail  ', NULL, '3000', 'https://www.google.com/maps/place/Arenco+Golden+Sands+Al+Barsha/@25.1114333,55.2016211,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6b9493316ae3:0xf936fc350b16a8ac!8m2!3d25.1114333!4d55.2016211!16s%2Fg%2F11c3vj2mxl?utm_source=mstt_1&lucs=47068615&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'AP: 609 B: Arenco Goldden Sands Al Barsha 1', NULL, 25.1117381, 55.2020026, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(270, 'Nicholas Raj ', NULL, '3000', 'https://www.google.com/maps/place/Premier+Inn+Abu+Dhabi+Airport+(Business+Park)+Hotel/@24.4287434,54.6414452,17z/data=!4m9!3m8!1s0x3e5e48c2a09a2563:0xed2d12db27dd482!5m2!4m1!1i2!8m2!3d24.4293492!4d54.6412736!16s%2Fg%2F1tj7zfs6?entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'Premier Inn Abu Dhabi Room No 121', NULL, 24.4288291, 54.6416667, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(271, 'Mayanak ', NULL, '3000', 'https://www.google.com/maps/place/W+Abu+Dhabi+-+Yas+Island/@24.4673877,54.6050141,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e455ae2cc3b55:0xfc2e85b57ca192b5!5m2!4m1!1i2!8m2!3d24.4673877!4d54.6050141!16s%2Fm%2F09gc3ky?q=W+Abu+Dhabi+-+Yas+Island+-+Yas+Island+-+Abu+Dhabi&ftid=0x3e5e455ae2cc3b55:0xfc2e85b57ca192b5&lucs=,94203325,47075489,94216425,94216401,94249928,94244542,94242583,94224825,94227247,94227248,94247554,47071704,47069508,94218641,94233073,94203019,47084304,94208458,94208447&g_st=ic&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'W Hotel Yas Island Room: 2215', NULL, 24.4674320, 54.6048250, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(272, 'Amna ', NULL, '3000', 'https://www.google.com/maps/place/34+Al+Thiqaybah+St+-+Hadbat+Al+Za\'faranah+-+Zone+1+-+Abu+Dhabi/@24.4403319,54.402452,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e6844c0a800c5:0x997fe0a08555a802!8m2!3d24.4403319!4d54.402452!16s%2Fg%2F11gmftjlwf?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'Building 34 App 201', NULL, 24.4403319, 54.4024520, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(273, 'Chris Wild  ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'Amwaj 1 Apartments, Channel Street App B203', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(274, 'Basant', NULL, '3000', 'https://www.google.com/maps/place/6+Al+Saray+St+-+Khalifa+City+-+Sector+33+-+Abu+Dhabi/@24.3986623,54.5658734,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e46580647f059:0x20702e443c76db2c!8m2!3d24.3986623!4d54.5658734!16s%2Fg%2F11sdyn8tky?entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', ' Saray Deluxe Hotel Apartments  Room No 502', NULL, 24.3986623, 54.5658734, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(275, 'Khaled Taha', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'Villa 20 room12 Mbz 34', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(276, 'SMutito ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B003\'40.3%22N+55%C2%B010\'56.5%22E/@25.0611944,55.1823611,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.0611944!4d55.1823611?entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', ' Springs 4 street 3 villaÂ 3  Dubai -', NULL, 25.0611846, 55.1823836, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(277, 'Kim ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', '1 Solo 5 Building  Room 402', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(278, 'Taman ', NULL, '3000', 'https://www.google.com/maps/place/Pearl+Rotana+Capital+Centre/@24.4179288,54.4399269,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e662336ee947b:0xa576b66266e3c5d!5m2!4m1!1i2!8m2!3d24.4179288!4d54.4399269!16s%2Fg%2F1thp6gr9?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', 'Pearl Rotana Hotel Room No 1206', NULL, 24.4178774, 54.4399289, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(279, 'Gergely Lantai', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', ' Al Ghadeer, Phase 2, Street 6, Unit 136-0101', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(280, 'Ahmad ', NULL, '3000', 'https://www.google.com/maps/place/Al+Radeen+St+-+Al+Reem+Island+-+Tamouh+-+Abu+Dhabi/@24.4997627,54.3951543,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67ac2614fd7b:0xdb54f1657b39a50!8m2!3d24.4997627!4d54.3951543!16s%2Fg%2F11k1m09vqt?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExMy4xIPu8ASoASAFQAw%3D%3D', ' Leaf Tower  Room No 1217  Reem Island', NULL, 24.4992820, 54.3953269, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(281, 'Eni', NULL, '3000', 'https://www.google.com/maps/place/The+First+Collection+Waterfront/@25.1828549,55.2832031,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f69dcfb8b3bdb:0xdb80779e7ce253!5m2!4m1!1i2!8m2!3d25.1828549!4d55.2832031!16s%2Fg%2F11l2lm8zsd?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExNy4wIPu8ASoASAFQAw%3D%3D', ' The First Collection Water Front  Room No 1413', NULL, 25.1828300, 55.2826930, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(282, 'Ishaq Hakim', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B005\'07.8%22N+55%C2%B008\'34.4%22E/@25.0855012,55.1403173,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.0855012!4d55.1428922?entry=tts&g_ep=EgoyMDI0MTExOC4wIPu8ASoASAFQAw%3D%3D', 'Botanica Tower App 3611', NULL, 25.0856826, 55.1403533, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(283, 'Brinee ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B013\'17.6%22N+55%C2%B025\'03.7%22E/@25.221566,55.417682,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.221566!4d55.417682?entry=tts&g_ep=EgoyMDI0MTExOC4wIPu8ASoASAFQAw%3D%3D', ' C:83 V:7 25c st, Mirdif', NULL, 25.2215120, 55.4178055, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(284, 'Charlene ', NULL, '3000', 'https://www.google.com/maps/place/Jumeirah+Heights+East+-+Building+D/@25.0667609,55.1484573,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6cb082521fc7:0xb308ece9c29abe54!8m2!3d25.0667609!4d55.1484573!16s%2Fg%2F11fy9pz20t?entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Ap:109, B: D, Jumeriah Heights East', NULL, 25.0667609, 55.1484573, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(285, 'Hend ', NULL, '3000', 'https://www.google.com/maps/place/31+Jarn+Al+Marzoum+St+-+Al+Rawdah+-+Abu+Dhabi/@24.4272256,54.4253064,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e69d18805f927:0xdb8cef8a7ebf15ad!8m2!3d24.4272256!4d54.4253064!16s%2Fg%2F11kpp3kpch?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Villa 31 Al Rawadah', NULL, 24.4272256, 54.4253064, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(286, 'Amirul ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Holiday Inn Al Barsha Room No 203', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(287, ' Jeevanantham Nallasamy ', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B025\'46.3%22N+54%C2%B025\'43.5%22E/@24.4295264,54.4261681,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4295264!4d54.428743?entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Novetal Al Bustan Room No 719', NULL, 24.4290519, 54.4265192, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(288, 'Rajagopal sivaraj', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B025\'46.3%22N+54%C2%B025\'43.5%22E/@24.4295264,54.4261681,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4295264!4d54.428743?q=24.4295264,54.428743&z=17&entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', ' Novetal Al Bustan Room No 1010', NULL, 24.4290519, 54.4265192, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(289, 'Ali ', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Room No 605 Binghatti Crystals', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(290, 'Noor ', NULL, '3000', 'https://www.google.com/maps/place/Arabian+Ranches+2+-+Dubai/@25.0350703,55.2720183,15z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6fd49a3d0ae5:0x8ed78d2d9e5368ee!8m2!3d25.0331427!4d55.272887!16s%2Fg%2F11b6h_sftb?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Lila Street 7, Villa 159 Arabian Ranches 2', NULL, 25.0349962, 55.2712678, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(291, 'Ouahib', NULL, '3000', 'https://www.google.com/maps/place/Jannah+Burj+Al+Sarab+Hotel/@24.5013248,54.3732476,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e66f5efbbd4a5:0x5919be82e74beb3b!5m2!4m1!1i2!8m2!3d24.5013248!4d54.3732476!16s%2Fg%2F11b7qs0wj6?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', ' Jannah Burj Al Sarab Hotel Room No 1306', NULL, 24.5013540, 54.3732150, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(292, 'Sara', NULL, '3000', 'https://www.google.com/maps/place//@24.3716088,54.467061,15z/data=!3m1!4b1?entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', ' Miracle Hills 1 Room No 208', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(293, 'Radha ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Balqis Residence Block B App 802', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(294, 'Jenn ', NULL, '3000', 'https://www.google.com/maps/place//@24.3715965,54.467051,15z/data=!3m1!4b1?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTExOS4yIPu8ASoASAFQAw%3D%3D', 'Ap316 B32  Al khail Gate ', NULL, 24.3716075, 54.4668208, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(295, 'Artin ', NULL, '3000', 'https://www.google.com/maps/place/Emirates+Park+Zoo+and+Resort/@24.5457068,54.6736902,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e51ddc400a3e3:0xe6a61c20bf520175!8m2!3d24.5457068!4d54.6736902!16s%2Fg%2F11clszmz_x?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Al Shahama', NULL, 24.5454910, 54.6737802, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(296, 'Yannie  ', NULL, '3000', 'https://www.google.com/maps/place/25%C2%B000\'51.9%22N+55%C2%B018\'09.4%22E/@25.0144167,55.3026111,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.0144167!4d55.3026111?entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'VillaÂ 433 Mira Oasis 3 Dubai - United Arab Emirates', NULL, 25.0144167, 55.3026111, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(297, 'Kulveer Singh Jatana ', NULL, '3000', 'https://www.google.com/maps/place/Pullman+Dubai+Downtown/@25.1868677,55.271648,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f69e181efecf5:0x6b0965111b8ce496!5m2!4m1!1i2!8m2!3d25.1868677!4d55.271648!16s%2Fg%2F11ll90yn02?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Pullman Downtown Dubai Room No 510', NULL, 25.1868677, 55.2716480, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(298, 'NurgÃ¼l Beyhatun', NULL, '3000', 'https://www.google.com/maps/place/319+Al+Dhiba+St+-+Al+Saadiyat+Island+-+Abu+Dhabi/@24.549617,54.4543842,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e5de9bdcd053d:0x2b91ba150b05686c!8m2!3d24.549617!4d54.4543842!16s%2Fg%2F11k1mx9ty8?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', ' B1 Room No 516', NULL, 24.5496170, 54.4543842, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(299, 'Anjie Merchant', NULL, '3000', 'https://www.google.com/maps/place/The+St.+Regis+Abu+Dhabi/@24.4639496,54.3278207,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e65eba26b2b7d:0xf75b871430ea245c!5m2!4m1!1i2!8m2!3d24.4639496!4d54.3278207!16s%2Fg%2F1261kn64s?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', ' St Regis Hotel Room No 4101', NULL, 24.4639517, 54.3278477, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(300, 'Zakaia ', NULL, '3000', 'https://www.google.com/maps/place/Black+Mustache+Gents+Salon+%26+Spa+%7C+Barber+Shop/@25.2038088,55.3442983,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f674bb4c2a495:0x601a643fe60ab460!8m2!3d25.2038088!4d55.3442983!16s%2Fg%2F11tjq09bzy?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Creekside Building 18 Room No 1403', NULL, 25.2032742, 55.3444431, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(301, 'Hector Infante ', NULL, '3000', 'https://www.google.com/maps/dir/24.3706283,54.4737524/Mangrove+One+Compound/@24.4029758,54.4482339,13z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5e426051555555:0x7b65134c4b1f7b00!2m2!1d54.4537529!2d24.437823!3e0?utm_source=mstt_0&g_st=ac&entry=tts&g_ep=EgoyMDI0MTEyNC4xKgBIAVAD', 'Villa No 58 Mangrove', NULL, 24.4029758, 54.4482339, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(302, 'Kate ', NULL, '3000', 'https://www.google.com/maps/place/Khalifa+City+-+Al+Rayyana+-+Abu+Dhabi/@24.4121462,54.5357197,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e46a4dd80a1b3:0x30a854ceccf47c4c!8m2!3d24.4113692!4d54.5361872!16s%2Fg%2F1pxw3qp_p?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Tulip 4, Flat 106', NULL, 24.4121125, 54.5360156, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(303, 'Saleesh Abdul Salam ', NULL, '3000', 'https://www.google.com/maps/place/11+%D8%A7%D9%84%D8%A3%D9%8E%D8%AE%D9%92%D8%A8%D9%8E%D8%A7%D8%A8+-+Mohamed+Bin+Zayed+City+-+Z24+-+Abu+Dhabi%E2%80%AD/@24.3065653,54.5560172,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e38fcc0185a23:0x7af81672dd7f3dcb!8m2!3d24.3065653!4d54.5560172!16s%2Fg%2F11qp55m1bb?entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Villa No 11 Room No 3 MBZ 24', NULL, 24.3065653, 54.5560172, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(304, 'Thenjiwe', NULL, '3000', 'https://www.google.com/maps/place/Al+Khair+4+Building/@25.2242498,55.2797521,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f43abae5ac825:0xd822502b32f9b7ae!8m2!3d25.2242498!4d55.2797521!16s%2Fg%2F11n73fv535?q=Al+Khair+4+Building+-+Al+Badaa%27+St+-+Al+Satwa+-+Dubai+-+United+Arab+Emirates&ftid=0x3e5f43abae5ac825:0xd822502b32f9b7ae&lucs=,94244543,94242478,94224825,94227247,94227248,47071704,47069508,94218641,94233079,94203019,47084304,94208458,94208447&g_st=com.google.maps.preview.copy&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Yes please. Al Khair building 4. Unit 606', NULL, 25.2243967, 55.2797897, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(305, 'Michael Krull ', NULL, '3000', 'https://www.google.com/maps/place/Grand+Hyatt+Abu+Dhabi+Hotel+%26+Residences+Emirates+Pearl/@24.4583852,54.3207036,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e65ebade52a03:0x121e38c87ef1093!5m2!4m1!1i2!8m2!3d24.4583852!4d54.3207036!16s%2Fg%2F11crzt724p?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Grand Hyatt Room No 2707', NULL, 24.4583852, 54.3207036, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(306, 'Mahabaleshwar Bhat', NULL, '3000', 'https://www.google.com/maps/place/Atlantis,+The+Palm/@25.1304426,55.1171498,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f153e3609c979:0x5945a418a804ac5!5m2!4m1!1i2!8m2!3d25.1304426!4d55.1171498!16s%2Fm%2F02r9h0j?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', ' Atlantis The Palm Room No 5449', NULL, 25.1304439, 55.1171494, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(307, 'Stephen Jones ', NULL, '3000', 'https://www.google.com/maps/place/Royal+Rose+Abu+Dhabi,+a+Curio+Collection+by+Hilton+Affiliated+Hotel/@24.493274,54.372932,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e65e6cf3259b5:0xb3a7cf18a3a1c878!5m2!4m1!1i2!8m2!3d24.493274!4d54.372932!16s%2Fg%2F1pv610ylw?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Royal Rose Hotel Room No 1615', NULL, 24.4933139, 54.3730820, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(308, 'Paul Lim ', NULL, '3000', 'https://www.google.com/maps/place/Al+\'Oud+St+-+Al+Reem+Island+-+The+Gate+District+-+Abu+Dhabi/@24.4941397,54.4097617,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e67c78d276469:0x34461dd1a8d3381f!8m2!3d24.4941397!4d54.4097617!16s%2Fg%2F11ry5675gl?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Arc Tower A App 1505 Reem Island ', NULL, 24.4943423, 54.4095311, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(309, 'Mariska Fortin', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B026\'40.2%22N+54%C2%B036\'43.0%22E/@24.4444981,54.6093674,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4444981!4d54.6119423?entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'C 54 Building Near Aster Pharmacy  Building', NULL, 24.4446497, 54.6096025, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(310, 'Sharon', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B021\'30.0%22N+54%C2%B037\'46.7%22E/@24.358331,54.6270579,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.358331!4d54.6296328?q=24.358331,54.6296328&z=17&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', '202 Al Maha Compound Villa 4 First Floor First Door To The Left', NULL, 24.3580312, 54.6265074, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(311, 'Sarah Alnasrallah', NULL, '3000', 'https://www.google.com/maps/place/24%C2%B051\'06.1%22N+55%C2%B009\'32.2%22E/@24.851705,55.158946,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.851705!4d55.158946?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Park Side 2 Villa No 6', NULL, 24.8523475, 55.1598409, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(312, 'Richard ', NULL, '3000', 'https://www.google.com/maps/place/457V%2BWQ2+-+Al+Barsha+-+Al+Barsha+1+-+Dubai+-+United+Arab+Emirates/@25.1147625,55.1943906,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f6b94ab31ca35:0x72f20ec27d29c1fc!8m2!3d25.1147625!4d55.1943906?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Pink building Room No 322', NULL, 25.1147669, 55.1942071, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(313, 'Michelle Sterling  ', NULL, '3000', 'https://www.google.com/maps/place/Hilton+Dubai+Al+Habtoor+City/@25.1844946,55.2552322,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f69dba4b8bc19:0x817067b2e7866b05!5m2!4m1!1i2!8m2!3d25.1844946!4d55.2552322!16s%2Fg%2F11c1qjx6pc?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'R-3326 Hilton Dubai', NULL, 25.1841228, 55.2551745, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(314, 'Koukas Salem ', NULL, '3000', 'https://www.google.com/maps/place/C+Central+Hotel+%26+Resort+The+Palm+Dubai/@25.1392994,55.1416,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f6b452bf8f13d:0xa94e5b8900c39663!5m2!4m1!1i2!8m2!3d25.1392994!4d55.1416!16s%2Fg%2F11fm_sxvkr?utm_source=mstt_1&lucs=47068615,,47075915&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', ' R:204, C Central Resort The Palm', NULL, 25.1392994, 55.1416000, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(315, 'Hussam Jallad ', NULL, '3000', 'https://www.google.com/maps/dir/24.0303235,53.5867333/Khalidiya+Palace+Rayhaan+by+Rotana/@24.2312602,53.4059813,9z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e5e6591798b1933:0x21e5f3cf3797eb1!2m2!1d54.3188465!2d24.4559942!3e0?utm_source=mstt_0&g_st=ac&entry=tts&g_ep=EgoyMDI0MTEyNC4xKgBIAVAD', 'Khalidiya By Rotana Room No 301', NULL, 24.2312602, 53.4059813, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(316, 'Joanne  ', NULL, '3000', 'https://www.google.com/maps/place/ASCANA+1/@25.1140595,55.1904952,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6ba2f0400001:0x235afd72eea63176!8m2!3d25.1140595!4d55.1904952!16s%2Fg%2F11f15lgsds?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D', 'Ap:302, Ascana 1, AL barsha', NULL, 25.1140595, 55.1904952, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(317, 'Pulic Djana ', NULL, '3000', 'https://www.google.com/maps/place/Citymax+Hotel+Business+Bay/@25.1794908,55.2772113,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5f69740bbf8c77:0xcf98c33f0dda3af4!5m2!4m1!1i2!8m2!3d25.1794908!4d55.2772113!16s%2Fg%2F11h3c4qqy5?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'City Max Room No 413', NULL, 25.1794742, 55.2772812, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(318, 'Patricia ', NULL, '3000', 'https://www.google.com/maps/place/599+Al+Khaleej+Al+Arabi+St+-+Al+Manhal+-+Abu+Dhabi/@24.4537232,54.3589072,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e68a7c7c129fb:0x1444e03b32d24e07!8m2!3d24.4537232!4d54.3589072!16s%2Fg%2F11k1mywclp?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Villa 599 first floor 202', NULL, 24.4537667, 54.3588472, '2024-12-04 05:34:46', '2024-12-04 05:34:46'),
(319, 'Dalma', NULL, '3000', 'https://www.google.com/maps/place/Grand+Millennium+Al+Wahda/@24.4716749,54.374046,17z/data=!3m1!4b1!4m9!3m8!1s0x3e5e663b5e3100af:0xbe624905bee8ef66!5m2!4m1!1i2!8m2!3d24.4716749!4d54.374046!16s%2Fg%2F1thx723s?utm_source=mstt_1&coh=192189&entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', ' Grand Mileniul Al Wahada Room No 3006', NULL, 24.4719760, 54.3737019, '2024-12-04 05:34:47', '2024-12-04 05:34:47'),
(320, 'Ruchi', NULL, '3000', 'https://www.google.com/maps/place/24CW%2BWCF+-+Jebel+Ali+Village+-+Al+Furjan+-+Dubai/@25.0222691,55.145874,17z/data=!4m5!3m4!1s0x3e5f6d3af3095965:0x1b3b083d468b3af6!8m2!3d25.0223125!4d55.1460469?entry=tts&g_ep=EgoyMDI0MTEyNC4xIPu8ASoASAFQAw%3D%3D', 'Villa 223 Zone F', NULL, 25.0222823, 55.1458366, '2024-12-04 05:34:47', '2024-12-04 05:34:47'),
(322, 'Faizan Yousaf', 'faizan@gmail.com', '+971501234567', 'https://www.google.com/maps/place/31.411014,73.111767', 'Ripple Lane, Faisalabad, Punjab, Pakistan', NULL, 31.4110140, 73.1117670, '2024-12-04 05:37:46', '2024-12-04 05:37:46'),
(323, 'Faizan Yousaf', 'faizan8@gmail.com', '+971501234568', 'https://www.google.com/maps/place/31.4132538,73.1136612', 'Mediacom Shopping Cneter, Faisalabad, Punjab, Pakistan', NULL, 31.4132538, 73.1136612, '2024-12-04 05:57:15', '2024-12-04 05:57:15'),
(325, 'Jordan Stone', 'tumemuveh@mailinator.com', '+971 545454545', 'https://www.google.com/maps/place/undefined,undefined', 'dubai mall', NULL, 25.0440000, 55.2075000, '2024-12-07 03:29:47', '2024-12-07 03:29:47'),
(326, 'Winter Franks', 'hify@mailinator.com', '+971 543213456', 'https://www.google.com/maps/place/25.044,55.2075', 'dubai city mall', NULL, 25.0440000, 55.2075000, '2024-12-07 03:34:03', '2024-12-07 03:34:03'),
(327, 'Judah Mathis', 'cukyreryca@mailinator.com', '+971 545754545', 'https://www.google.com/maps/place/25.044,55.2075', 'dubai mall', NULL, 25.0440000, 55.2075000, '2024-12-07 03:45:51', '2024-12-07 03:45:51'),
(328, 'Ali Hassan', 'umartahir@gmail.com', '+971 030466908', 'https://www.google.com/maps/place/25.044,55.2075', 'dubai mall', NULL, 25.0440000, 55.2075000, '2024-12-07 03:55:37', '2024-12-07 03:55:37'),
(329, 'Samuel Christian', 'waxywajyv@mailinator.com', '+971 545645464', 'https://www.google.com/maps/place/25.044,55.2075', 'dubai mall', NULL, 25.0440000, 55.2075000, '2024-12-07 04:09:26', '2024-12-07 04:09:26'),
(330, 'Avram Duke', 'rohehugov@mailinator.com', '+971 454545454', 'https://www.google.com/maps/place/25.044,55.2075', 'dubai mall', NULL, 25.0440000, 55.2075000, '2024-12-07 04:18:05', '2024-12-07 04:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `email`, `passport_number`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Razaullah', 'Razaullah@gmail.com', NULL, '12345678', '2024-12-05 00:34:54', '2024-12-05 00:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_category_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) DEFAULT 0.00,
  `total` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(91, '2014_10_12_000000_create_users_table', 1),
(92, '2014_10_12_100000_create_password_resets_table', 1),
(93, '2019_08_19_000000_create_failed_jobs_table', 1),
(94, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(95, '2023_08_23_145151_create_admins_table', 1),
(96, '2023_08_23_145318_create_admin_password_resets_table', 1),
(97, '2023_08_23_145414_create_admin_profiles_table', 1),
(98, '2024_10_29_103702_create_categories_table', 1),
(99, '2024_10_30_065855_create_settings_table', 1),
(100, '2024_10_30_073745_create_subscribers_table', 1),
(101, '2024_11_14_070146_create_services_table', 1),
(102, '2024_11_15_061457_create_customers_table', 1),
(103, '2024_11_19_124549_create_bookings_table', 1),
(104, '2024_11_20_072927_create_drivers_table', 1),
(105, '2024_11_20_092057_create_transfers_table', 1),
(106, '2024_11_22_121828_create_billings_table', 1),
(107, '2024_11_23_130630_create_expense_categories_table', 1),
(108, '2024_11_23_132326_create_expenses_table', 1),
(109, '2024_12_04_070658_create_packages_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `list` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `weight`, `list`, `created_at`, `updated_at`) VALUES
(1, 'Wash & Fold', 49.00, '6-Kg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>Load KG Package</li>\r\n	<li>Wash, tumble dry &amp; fold</li>\r\n	<li>Next-day Free Delivery</li>\r\n	<li>On hanger</li>\r\n	<li>Free fold service, upon request</li>\r\n	<li>Drop-off facility</li>\r\n	<li>From 8:00 AM to 11:00 PM</li>\r\n	<li>Urgent 2 hours wash n fold service</li>\r\n</ul>\r\n</body>\r\n</html>', '2024-12-05 04:46:15', '2024-12-06 00:29:31'),
(2, 'Ironing', 89.00, '6-Kg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>Load KG Package</li>\r\n	<li>Wash, tumble dry &amp; fold</li>\r\n	<li>Next-day Free Delivery</li>\r\n	<li>On hanger</li>\r\n	<li>Free fold service, upon request</li>\r\n	<li>Drop-off facility</li>\r\n	<li>From 8:00 AM to 11:00 PM</li>\r\n	<li>Urgent 2 hours wash n fold service</li>\r\n</ul>\r\n</body>\r\n</html>', '2024-12-05 04:49:14', '2024-12-06 00:28:59'),
(3, 'Washing, Drying & Pressing', 139.00, '6-Kg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>Load KG Package</li>\r\n	<li>Wash, tumble dry &amp; fold</li>\r\n	<li>Next-day Free Delivery</li>\r\n	<li>On hanger</li>\r\n	<li>Free fold service, upon request</li>\r\n	<li>Drop-off facility</li>\r\n	<li>From 8:00 AM to 11:00 PM</li>\r\n	<li>Urgent 2 hours wash n fold service</li>\r\n</ul>\r\n</body>\r\n</html>', '2024-12-05 04:50:01', '2024-12-05 05:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `detail_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`detail_images`)),
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `main_image`, `detail_images`, `price`, `old_price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Silver Star Teflon Ironing Shoe', '1731151978_672f486ad1fc140.webp', '\"[\\\"1731151978_672f486ad253e41.webp\\\",\\\"1731151978_672f486ad29ec42.jpg\\\",\\\"1731151978_672f486ad5f2543.jpg\\\"]\"', 20.00, 40.00, 'The inside max length and width is 212mm x 122mm.\nTeflon Iron Shoe for Gravity Feed Bottle Stream Irons.\nＦor Silver Star model ES-85AF =ES-94A Gravity Feed Steam Irons.\nReplace your old and worn iron shoe with this high quality Teflon Bottom Ironing Shoe. NO SHINE...irons Taffeta, Gabardine, Nylon, any Synthetic Materials. No Shine, No Scorch!! LIGHT AS A FEATHER...use it on everything, all day long, making work easier. ALUMINUM INNER LINER...distributes heat and steam over entire ironing surface with minimum steam pressure.', '2024-11-09 06:32:58', '2024-11-09 06:32:58'),
(2, 'PENGUIN Laundry Steam Iron 1300 Watt', '1731152071_672f48c78eb1751.png', '\"[\\\"1731152071_672f48c78f35750.webp\\\"]\"', 499.00, 530.00, 'Made in Kora, High Quality gravity feed type electric steam iron. Make your own steam without a boiler using a water bottle suspended above your working surface. It utilizes a separate water bottle that must be suspended above your working surface. It operates similarly to a household iron but has the separate water storage for longer amounts of pressing and is a heavier professional style iron. Suitable for Alteration shops and Dressmakers. Instruction & trouble shootings included. \n\nKey features of Penguin:\n\nComfortable Urethane handle\nHeat insulation plate protects hands from the heat\nDurable and high quality thermostat\nIron is completed with thermal fuse for the safety from the fire\nPower switch is easy to change and the power lamp showing on & off at work with perfect durability\nThumb switch is designed for proper steam to be ot by slight push of thumb and durable\nDurable Sheath-heating element with very long life\nSpecification:\n\nElectricity : 220 ~ 240 Volts\nWattage : 1300 Watts\nCapacity: 3.0 litrs\nWeight :  (2.6Kgs.)\nBase Size : 137x205mm\nSole plate : Hard anodized aluminum\nMade in Korea (iron)\nMade in Korea (Teflon shoe)', '2024-11-09 06:34:31', '2024-11-09 06:34:31'),
(3, 'SILTER Laundry Steam Iron professional * 3.5 LT', '1731152170_672f492aa396430.png', '\"[\\\"1731152170_672f492aa3e2c30.png\\\",\\\"1731152170_672f492aa436131.png\\\",\\\"1731152170_672f492aa472b32.png\\\",\\\"1731152170_672f492aa5caa33.png\\\",\\\"1731152170_672f492aa61da34.png\\\"]\"', 1250.00, NULL, 'Silter ““Super Mini”” Professional is a steam electric iron attached to a steam boiler, which supplies all the steam that the iron needs. The heating element is underneath the boiler in which water is heated for generating steam under pressure. As long as steam trigger is pressed, solenoid valve permits and continuous dry steam passes through durable steam hose, later to hot channels of soleplate of the iron, and finally gets released through holes of the soleplate. That is how ““Super Mini”” finishes professionally.\n\nUsage Areas: Tailors, dry cleaning shops, modelling shops, wedding dress shops, hotels, restaurants, military facilities, laundries, boutiques, vocational schools, dormitories and clothing workshops\n\nOutstanding Features:\n\nReduces ironing time to 1/3\n5 safety devices\nEnergy saving\nSpecial inox boiler prevents forming of limescale\nStrong and dry steam output: 70g/min.\nContinuous steam output removes stubborn creases effortlessly\nVertical steam ironing for hanging curtains, clothes on hangers and delicate fabrics\n2,5 bar pressurized steam allows you to iron both sides of the clothes at the same time\n“No Water” warning lamp\n“Steam Ready” indicator lamp\nSteamless ironing is also possible\nEasy-grip, anti-perspiration cork handle\nProfessional style iron with thick aluminium soleplate ensuring fast and perfect results', '2024-11-09 06:36:10', '2024-11-09 06:36:10'),
(4, 'Downy Fabric Softener Floral Breeze 20L', '1731152233_672f49694a2494.webp', '\"[]\"', 0.00, NULL, 'Downy Fabric Softener Floral Breeze 20L', '2024-11-09 06:37:13', '2024-11-09 06:37:13'),
(5, 'White Caring Softness Detergent Powder, 25 Kg', '1731152286_672f499e0e94b5.jpg', '\"[]\"', 0.00, NULL, 'White Caring Softness Detergent Powder, 25 Kg', '2024-11-09 06:38:06', '2024-11-09 06:38:06'),
(6, 'Ozone 2-in-1 Detergent Powder, 25Kg', '1731152329_672f49c92df976.jpg', '\"[]\"', 0.00, NULL, 'Ozone 2-in-1 Detergent Powder, 25Kg', '2024-11-09 06:38:49', '2024-11-09 06:38:49'),
(7, 'Chemex Detergent Powder, 25KG', '1731152358_672f49e631b2b7.jpg', '\"[]\"', 0.00, NULL, 'Chemex Detergent Powder, 25KG', '2024-11-09 06:39:18', '2024-11-09 06:39:18'),
(8, 'Ditrex Premium Low Foam Detergent Powder, 25 Kg', '1731152392_672f4a08b306f8.jpg', '\"[]\"', 0.00, NULL, 'Ditrex Premium Low Foam Detergent Powder, 25 Kg', '2024-11-09 06:39:52', '2024-11-09 06:39:52'),
(9, 'Extra White Detergent Powder 25kg', '1731152438_672f4a36645fe9.jpg', '\"[]\"', 0.00, NULL, 'Extra White Detergent Powder 25kg', '2024-11-09 06:40:38', '2024-11-09 06:40:38'),
(10, 'Falcon Detergent Powder, MDPEC004, 15 Kg', '1731152479_672f4a5f338ab10.jpg', '\"[]\"', 0.00, NULL, 'Falcon Detergent Powder, MDPEC004, 15 Kg', '2024-11-09 06:41:19', '2024-11-09 06:41:19'),
(11, 'FEAH COMFY Laundry Detergent Powder Stain-free Clean Laundry, Washing Powder', '1731152498_672f4a721170611.jpg', '\"[]\"', 0.00, NULL, 'FEAH COMFY Laundry Detergent Powder Stain-free Clean Laundry, Washing Powder (6KG)', '2024-11-09 06:41:38', '2024-11-09 06:41:38'),
(12, 'Fioree Detergent Powder,MDPEC009-25 Kg', '1731152523_672f4a8bdf1d712.jpg', '\"[]\"', 0.00, NULL, 'Fioree Detergent Powder,MDPEC009-25 Kg', '2024-11-09 06:42:03', '2024-11-09 06:42:03'),
(13, 'Chemex Laundry Detergent Liquid Cleaner, 25 Litres', '1731152549_672f4aa56617013.jpg', '\"[]\"', 0.00, NULL, 'Chemex Laundry Detergent Liquid Cleaner, 25 Litres', '2024-11-09 06:42:29', '2024-11-09 06:42:29'),
(14, 'Maytag Heavy Duty Top Load Washer, White, 15 Kg, 3Lmvwc315Fw, 1 Year Warranty', '1731152604_672f4adccf8bd14.webp', '\"[]\"', 0.00, NULL, 'Maytag Heavy Duty Top Load Washer, White, 15 Kg, 3Lmvwc315Fw, 1 Year Warranty', '2024-11-09 06:43:24', '2024-11-09 06:43:24'),
(15, 'Clothes Dryer Belt', '1731152622_672f4aee6233715.jpg', '\"[]\"', 0.00, NULL, 'Repairwares Clothes Dryer Belt', '2024-11-09 06:43:42', '2024-11-09 06:43:42'),
(16, 'Maytag Vented Dryer Front Load 10.5 Kg, American Laundry , Up To 15Kg Drying Cap', '1731152669_672f4b1da93c416.jpg', '\"[]\"', 0.00, NULL, 'Maytag Vented Dryer Front Load 10.5 Kg, American Laundry , Up To 15Kg Drying Capacity , White , Made In Usa', '2024-11-09 06:44:29', '2024-11-09 06:44:29'),
(17, 'MAYTAG AMERICA COMMERCIAL DRYER - MAT20MNAGW', '1731152700_672f4b3cd026117.webp', '\"[]\"', 3500.00, NULL, 'MAYTAG AMERICA COMMERCIAL DRYER - MAT20MNAGW', '2024-11-09 06:45:00', '2024-11-09 06:45:00'),
(18, 'Heigh Quality Silver Star Teflon Ironing Shoe', '1731152766_672f4b7ede1fa40.webp', '\"[\\\"1731152766_672f4b7ede76940.webp\\\",\\\"1731152766_672f4b7edeb4041.webp\\\",\\\"1731152766_672f4b7edeea342.jpg\\\",\\\"1731152766_672f4b7ee014943.jpg\\\"]\"', 40.00, 60.00, 'The inside max length and width is 212mm x 122mm.\nTeflon Iron Shoe for Gravity Feed Bottle Stream Irons.\nＦor Silver Star model ES-85AF =ES-94A Gravity Feed Steam Irons.\nReplace your old and worn iron shoe with this high quality Teflon Bottom Ironing Shoe. NO SHINE...irons Taffeta, Gabardine, Nylon, any Synthetic Materials. No Shine, No Scorch!! LIGHT AS A FEATHER...use it on everything, all day long, making work easier. ALUMINUM INNER LINER...distributes heat and steam over entire ironing surface with minimum steam pressure.', '2024-11-09 06:46:06', '2024-11-09 06:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `W_Price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `P_Price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `WP_Price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `DC_Price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category`, `itemName`, `W_Price`, `P_Price`, `WP_Price`, `DC_Price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'Polo Shirt', 9.00, 9.00, 16.00, 16.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 01:57:15', '2024-11-14 01:57:15'),
(2, 'Men', 'Pant', 9.00, 9.00, 16.00, 16.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 01:58:16', '2024-11-14 01:58:16'),
(3, 'Men', 'Shirt', 9.00, 9.00, 16.00, 16.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 01:58:35', '2024-11-14 01:58:35'),
(4, 'Linen & Bedding', 'Hand Towel', 6.00, 0.00, 0.00, 6.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 01:58:57', '2024-11-14 01:58:57'),
(5, 'Linen & Bedding', 'Sofa Cover/seat', 30.00, 12.00, 30.00, 30.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 01:59:25', '2024-11-14 01:59:25'),
(6, 'Laundry Package', '6-KG Package (Mix Wash)', 49.00, 0.00, 0.00, 0.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 02:04:54', '2024-11-14 02:04:54'),
(7, 'Laundry Package', '6-KG Package (Separate Wash)', 98.00, 0.00, 0.00, 0.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 02:06:24', '2024-11-14 02:06:24'),
(8, 'Linen & Bedding', 'Bath Towel', 8.00, 0.00, 0.00, 8.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 02:08:27', '2024-11-14 02:08:27'),
(10, 'Women', 'Pant', 9.00, 9.00, 16.00, 16.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 02:27:16', '2024-11-14 02:27:16'),
(11, 'Women', 'Abbaya', 9.00, 9.00, 15.00, 15.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 02:27:42', '2024-11-14 02:27:42'),
(12, 'Women', 'Shirt', 9.00, 9.00, 15.00, 15.00, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>', '2024-11-14 02:28:09', '2024-11-14 02:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq` longtext DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `terms_condition` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `driver_id`, `booking_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '2024-12-05 00:53:03', '2024-12-05 00:53:03'),
(2, 1, 6, '2024-12-05 00:59:45', '2024-12-05 00:59:45'),
(3, 1, 5, '2024-12-05 01:03:01', '2024-12-05 01:03:01'),
(4, 1, 3, '2024-12-05 01:12:08', '2024-12-05 01:12:08');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_email_unique` (`email`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_expense_category_id_foreign` (`expense_category_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `billings_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_expense_category_id_foreign` FOREIGN KEY (`expense_category_id`) REFERENCES `expense_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
