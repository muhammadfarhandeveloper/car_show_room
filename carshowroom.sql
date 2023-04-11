-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 08:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshowroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `body_types`
--

CREATE TABLE `body_types` (
  `body_type_id` int(11) NOT NULL,
  `body_type_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `body_types`
--

INSERT INTO `body_types` (`body_type_id`, `body_type_name`, `created_at`, `updated_at`) VALUES
(1, 'seedan', '2023-01-15 09:20:08', '2023-01-15 09:20:08'),
(2, 'MPV', '2023-01-15 09:21:34', '2023-01-15 09:21:34'),
(4, 'sports car', '2023-01-16 00:10:23', '2023-01-16 00:10:23'),
(5, 'SUV', '2023-01-16 00:11:09', '2023-01-16 00:11:09'),
(6, 'minivan', '2023-01-16 00:12:02', '2023-01-16 00:12:02'),
(7, 'Commuter', '2023-01-16 00:45:59', '2023-01-16 00:45:59'),
(8, 'Cruiser', '2023-01-16 00:46:07', '2023-01-16 00:46:07'),
(9, 'Naked', '2023-01-16 00:46:15', '2023-01-16 00:46:15'),
(10, 'Offroad', '2023-01-16 00:46:23', '2023-01-16 00:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brands_id` int(11) NOT NULL,
  `brands_name` varchar(100) NOT NULL,
  `brands_img` varchar(250) NOT NULL,
  `brands_desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_name`, `brands_img`, `brands_desc`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', 'WofQ5MEwdownload (1).jpeg', 'Toyota 2 Motor Corporation is a Japanese multinational automotive manufacturer headquartered in Toyota City, Aichi, Japan. It was founded by Kiichiro Toyoda and incorporated on August 28, 1937. Toyota is one of the largest automobile manufacturers in the world,', '2023-01-15 09:03:39', '2023-01-15 09:03:39'),
(2, 'Suzuki', '9L0Ye6u8download.jpeg', 'Suzuki Motor Corporation is a Japanese multinational corporation headquartered in Minami-ku, Hamamatsu, Japan. Suzuki manufactures automobiles, motorcycles, all-terrain vehicles, outboard marine engines, wheelchairs and a variety of other small internal combustion engines', '2023-01-15 09:03:52', '2023-01-15 09:03:52'),
(3, 'Honda', 'hUem1sJRimages.jpeg', 'Honda Motor Co., Ltd. is a Japanese public multinational conglomerate manufacturer of automobiles, motorcycles, and power equipment, headquartered in Minato, Tokyo, Japan.', '2023-01-15 09:04:14', '2023-01-15 09:04:14'),
(5, 'Mercedes', 'pfKyKS3TMercedes_C300D_0000.jpg', 'Mercedes-Benz, commonly referred to as Mercedes and sometimes as Benz, is a German luxury and commercial vehicle automotive brand established in 1926. Mercedes-Benz AG is headquartered in Stuttgart, Baden-Württemberg, Germany', '2023-01-15 23:48:16', '2023-01-15 23:48:16'),
(6, 'BMW', 'PqHdcPuHbmw.jpeg', 'Bayerische Motoren Werke AG, abbreviated as BMW, is a German multinational manufacturer of luxury vehicles and motorcycles headquartered in Munich, Bavaria. The corporation was founded in 1916 as a manufacturer of aircraft engines, which it produced from 1917 until 1918 and again from 1933 to 1945.', '2023-01-15 23:49:32', '2023-01-15 23:49:32'),
(7, 'kawasaki', 'axO9ouDRkawasaki.jpg', 'Kawasaki Aircraft initially manufactured motorcycles under the Meguro name, having bought an ailing motorcycle manufacturer, Meguro Manufacturing with whom they had been in partnership. This eventually became Kawasaki Motor Sales', '2023-01-16 00:05:49', '2023-01-16 00:05:49'),
(8, 'Harley-Davidson', 'uiEGzY4gHarley-Davidson..jpeg', 'Harley-Davidson, Inc. is an American motorcycle manufacturer headquartered in Milwaukee, Wisconsin, United States. Founded in 1903', '2023-01-16 00:07:25', '2023-01-16 00:07:25'),
(9, 'diahatsu', 'qMEZuo5ucardcar1.png', 'This car has more features and this is our new brand', '2023-01-16 04:56:09', '2023-01-16 04:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `created_at`, `updated_at`) VALUES
(1, 'Green', '2023-01-15 09:53:41', '2023-01-15 09:53:41'),
(2, 'black', '2023-01-15 09:56:20', '2023-01-15 09:56:20'),
(3, 'white', '2023-01-15 09:56:27', '2023-01-15 09:56:27'),
(5, 'brown', '2023-01-16 00:13:11', '2023-01-16 00:13:11'),
(6, 'yellow', '2023-01-16 00:13:18', '2023-01-16 00:13:18'),
(7, 'Red', '2023-01-16 00:13:28', '2023-01-16 00:13:28'),
(8, 'Alice blue', '2023-01-16 00:13:53', '2023-01-16 00:13:53'),
(9, 'pink', '2023-01-16 04:59:04', '2023-01-16 04:59:04'),
(10, 'dark black', '2023-01-17 12:50:25', '2023-01-17 12:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postalcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `fullname`, `phone`, `email`, `area`, `city`, `state`, `postalcode`) VALUES
(1, 'Muhammad Farhan', '03162859445', 'farhan@gmail.com', 'korangi', 'karachi', 'sindh', 34000),
(2, 'Sanaullah Munir', '03182590396', 'Sunny@gmail.com', 'keamari', 'karachi', 'Sindh', 12342),
(3, 'Bisma Abdul Qadir', '0310886880', 'bisma.abdulqadir10@gmail.com', 'korangi', 'Karachi', 'Sindh', 4900);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_types`
--

CREATE TABLE `fuel_types` (
  `fuel_type_id` int(11) NOT NULL,
  `fuel_type_name` char(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel_types`
--

INSERT INTO `fuel_types` (`fuel_type_id`, `fuel_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Petrol', '2023-01-15 19:51:04', '2023-01-15 19:51:04'),
(2, 'diesel', '2023-01-15 19:51:13', '2023-01-15 19:51:13'),
(3, 'electric', '2023-01-15 23:42:38', '2023-01-15 23:42:38'),
(4, 'Gasoline', '2023-01-15 23:42:46', '2023-01-15 23:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_13_035024_create_fueltypes_table', 1),
(6, '2023_01_13_043211_create_brands_table', 2),
(7, '2023_01_15_074608_create_vmodels_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(100) DEFAULT NULL,
  `vehicle_img` varchar(250) DEFAULT NULL,
  `vehicle_transmission` tinyint(1) DEFAULT NULL,
  `vehicle_mileage` int(11) DEFAULT NULL,
  `vehicle_short_desc` varchar(250) DEFAULT NULL,
  `vehicle_long_desc` text DEFAULT NULL,
  `vehicle_old_price` int(11) DEFAULT NULL,
  `vehicle_price` int(11) DEFAULT NULL,
  `vehicle_engine` int(11) DEFAULT NULL,
  `vehicle_owner` tinyint(1) DEFAULT NULL,
  `vehicle_use` tinyint(1) DEFAULT NULL,
  `vehicle_type_id` int(11) DEFAULT NULL,
  `body_type_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `fuel_type_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_name`, `vehicle_img`, `vehicle_transmission`, `vehicle_mileage`, `vehicle_short_desc`, `vehicle_long_desc`, `vehicle_old_price`, `vehicle_price`, `vehicle_engine`, `vehicle_owner`, `vehicle_use`, `vehicle_type_id`, `body_type_id`, `model_id`, `fuel_type_id`, `color_id`) VALUES
(4, 'Corolla Grandiiii', 'NZNc7m7mCorolla-X-Cars-Cropped-Pictures-for-Website.jpg', 1, 100, 'What is the price of Corolla Grande? There are two different variants of Toyota Grande 2022 which are Toyota Corolla Altis Grande X CVT-i 1.8 Beige Interior and Toyota Corolla Altis Grande X CVT-i 1.8 Black Interior', 'What is the price of Corolla Grande?\r\nThere are two different variants of Toyota Grande 2022 which are Toyota Corolla Altis Grande X CVT-i 1.8 Beige Interior and Toyota Corolla Altis Grande X CVT-i 1.8 Black Interior. this Corolla Altis in detial', 24000, 22000, 1800, 0, 0, 3, 1, 3, 1, 3),
(5, 'Toyota Corolla Altis 1.6 X', '1GbipFsQaltis.jpeg', 1, 0, 'What is the price of Corolla Altis? There are two different variants of Toyota Grande 2022 which are Toyota Corolla Altis Grande X CVT-i 1.6', 'What is the price of the Corolla Altis? There are two different variants of Toyota Grande 2022 which are the Toyota Corolla Altis Grande X CVT-i 1.6 Beige Interior and the Toyota Corolla Altis Grande X CVT-i 1.6 Black Interior', 26000, 24500, 1600, 0, 0, 3, 1, 4, 1, 3),
(6, 'Toyota Rush 1.5 G GR-S A/T', 'C8NzZH8irush.jpg', 1, 100, 'This toyota Rush is categorize in SUV.', 'This toyota Rush is categorize in SUV.which are the Toyota Rush', 15000, 13800, 2500, 0, 0, 4, 5, NULL, 2, 2),
(7, 'Toyota Prius', 'F8FaRRYlprius.jpeg', 0, 0, 'Prius\' new Hybrid Synergy Drive® system puts more power to the ground. With up to 196 hp, available Electronic On-Demand All-Wheel Drive (AWD).', 'Prius\' new Hybrid Synergy Drive® system puts more power to the ground. With up to 196 hp, available Electronic On-Demand All-Wheel Drive (AWD) and.It is the special on Prius', 18600, 16700, 2800, 0, 0, 3, 1, 5, 3, 8),
(8, '2022 Kawasaki Ninja H2', 'WEggXmDf2022-Kawasaki-Ninja-H2R2-1536x1152-1.jpg', 1, 0, 'this is 2022 Kawasaki Ninja H2.', '2022 Kawasaki Ninja H2 this is Sport Bike. It is use for racing.', 29000, 28500, 598, 0, 0, 1, 7, 22, 1, 1),
(10, 'TERYX KRX®4 1000 SE', '78LH6uxqe951090d-58f8-402c-afc7-b31c5491c44d.png', 1, 100, 'Dominate adventure with more friends and family with four-passenger seating on the all-new Teryx KRX®4 1000.', 'Dominate adventure with more friends and family with four-passenger seating on the all-new Teryx KRX®4 1000. With an enlarged chassis, no sacrifices were made to accommodate the additional passengers. Advanced electronic suspension technology combined with beefy wheels and tires deliver the ultimate riding experience.', 32000, 31000, 900, 0, 0, 1, 10, 23, 1, 2),
(11, 'KAWASAKI KLX', 'qauR9UpzKAWASAKI_KLX450R-2018_main.jpg', 1, 1500, 'The 2018 Kawasaki KLX 450R has a superior four-stroke engine.', 'The 2018 Kawasaki KLX 450R has a superior four-stroke engine with enhanced power distribution and high performance at low and medium speed, 5-speed transmission, wide seat, electric starter motor, chassis, using only the latest achievements of modern technology.', 26000, 24000, 1600, 0, 0, 1, 10, 24, 1, 1),
(12, 'Honda Accord', '8KYKWuyMHonda_Accord_(CV3)_EX_eHEV,_2021,_front.jpg', 1, 1196, 'The Honda Accord also known as the Honda Inspire  in Japan and China for certain generations, is a series of cars manufactured by Honda since 1976', 'The Honda Accord also known as the Honda Inspire  in Japan and China for certain generations, is a series of cars manufactured by Honda since 1976, best known for its four-door sedan variant, which has been one of the best-selling cars in the United States since 1989. The Accord nameplate has been applied to a variety of vehicles worldwide, including coupes, station wagons, hatchbacks and a Honda Crosstour crossover.', 70000, 68000, 1200, 1, 1, 3, 1, 8, 2, 7),
(13, 'mercedes-benz c-class', 'SL9dG3oU1200px-Mercedes-Benz_C_200_Avantgarde_(W_205)_–_Frontansicht,_26._April_2014,_Düsseldorf.jpg', 1, 0, 'The Mercedes-Benz C-Class is a series of compact executive cars produced by Mercedes-Benz Group AG. Introduced in 1993 as a replacement for the 190 (W201) range', 'The Mercedes-Benz C-Class is a series of compact executive cars produced by Mercedes-Benz Group AG. Introduced in 1993 as a replacement for the 190 (W201) range, the C-Class was the smallest model in the marque\'s line-up until the W168 A-Class arrived in 1997. The C-Class has been available with a \"4MATIC\" four-wheel drive option since 2002. The third generation (W204) was launched in 2007 while the current W206 generation was launched in 2021.', 46000, 45000, 3000, 0, 0, 3, 4, 14, 3, 1),
(14, 'Suzuki Alto', 'RQuC4iY6Suzuki_Alto_-_PNG.png', 0, 0, 'The aerodynamic design with unique lines and curves gives a young and vibrant look.', 'The aerodynamic design with unique lines and curves gives a young and vibrant look. while the headlamps in a bold design instantly grab your attention. The aesthetically designed door panels and irresistible stylish back accentuated the richness of the sharp design as well as give the car a lively appearance.', 35000, 34000, 1000, 0, 0, 3, 6, 11, 1, 7),
(15, 'Suzuki Mehran', 'kw93jwtsmehran.jpg', 1, 0, 'The aerodynamic design with unique lines and curves gives a young and vibrant look.', 'The aerodynamic design with unique lines and curves gives a young and vibrant look. while the headlamps in a bold design instantly grab your attention. The aesthetically designed door panels and irresistible stylish back accentuated the richness of the sharp design as well as give the car a lively appearance.', 6500, 6400, 800, 0, 1, 3, 1, 10, 1, 1),
(16, 'mira 2012', 'Jo0AjYAWabout-car1.jpg', 0, 3000, 'Prius\' new Hybrid Synergy Drive® system puts more power to the ground. With up to 196 hp, available Electronic On-Demand All-Wheel Drive (AWD).', 'my name is farhan im teacher i hae coding skills', 129000000, 54309700, 1800, 0, 1, 4, 6, 25, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `vehicle_type_id` int(11) NOT NULL,
  `vehicle_type_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`vehicle_type_id`, `vehicle_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Bike', '2023-01-15 09:39:17', '2023-01-15 09:39:17'),
(3, 'Car', '2023-01-15 09:47:00', '2023-01-15 09:47:00'),
(4, '4 X 4', '2023-01-15 10:13:41', '2023-01-15 10:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `vmodels`
--

CREATE TABLE `vmodels` (
  `vmodels_id` int(11) NOT NULL,
  `vmodels_name` varchar(50) DEFAULT NULL,
  `brands_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmodels`
--

INSERT INTO `vmodels` (`vmodels_id`, `vmodels_name`, `brands_id`, `created_at`, `updated_at`) VALUES
(2, 'Corolla GLI', 1, '2023-01-15 23:50:46', '2023-01-15 23:50:46'),
(3, 'Corolla XLI', 1, '2023-01-15 23:51:01', '2023-01-15 23:51:01'),
(4, 'Toyota Corolla Altis', 1, '2023-01-15 23:51:48', '2023-01-15 23:51:48'),
(5, 'Toyota prius', 1, '2023-01-15 23:53:33', '2023-01-15 23:53:33'),
(6, 'Honda Civic', 3, '2023-01-15 23:54:07', '2023-01-15 23:54:07'),
(7, 'Honda CRV', 3, '2023-01-15 23:54:47', '2023-01-15 23:54:47'),
(8, 'Honda Accord', 3, '2023-01-15 23:55:17', '2023-01-15 23:55:17'),
(9, 'Honda Ridgeline', 3, '2023-01-15 23:55:57', '2023-01-15 23:55:57'),
(10, 'suzuki mehran', 2, '2023-01-15 23:56:43', '2023-01-15 23:56:43'),
(11, 'suzuki alto', 2, '2023-01-15 23:56:53', '2023-01-15 23:56:53'),
(12, 'suzuki wagon r', 2, '2023-01-15 23:57:10', '2023-01-15 23:57:10'),
(13, 'Suzuki ciaz', 2, '2023-01-15 23:58:20', '2023-01-15 23:58:20'),
(14, 'Mercedes-Benz', 5, '2023-01-15 23:59:09', '2023-01-15 23:59:09'),
(15, 'Mercedes GLC 300', 5, '2023-01-16 00:00:16', '2023-01-16 00:00:16'),
(16, 'mercedes A 20 Class Sedan', 5, '2023-01-16 00:01:13', '2023-01-16 00:01:13'),
(17, 'Mercedes EQB 300', 5, '2023-01-16 00:02:08', '2023-01-16 00:02:08'),
(18, 'bmw 3 Series', 6, '2023-01-16 00:03:29', '2023-01-16 00:03:29'),
(19, 'BMW X5', 6, '2023-01-16 00:04:00', '2023-01-16 00:04:00'),
(20, 'BMW M1', 6, '2023-01-16 00:04:15', '2023-01-16 00:04:15'),
(21, 'Harley-Davidson Sportster', 8, '2023-01-16 00:08:12', '2023-01-16 00:08:12'),
(22, 'Kawasaki Ninja ZX-RR', 7, '2023-01-16 00:09:04', '2023-01-16 00:09:04'),
(23, 'Kawasaki Kz1000', 7, '2023-01-16 00:09:18', '2023-01-16 00:09:18'),
(24, 'Kawasaki Ninja 600R', 7, '2023-01-16 00:09:33', '2023-01-16 00:09:33'),
(25, 'mira', 9, '2023-01-16 04:57:38', '2023-01-16 04:57:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body_types`
--
ALTER TABLE `body_types`
  ADD PRIMARY KEY (`body_type_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brands_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fuel_types`
--
ALTER TABLE `fuel_types`
  ADD PRIMARY KEY (`fuel_type_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `vehicle_type_id` (`vehicle_type_id`),
  ADD KEY `body_type_id` (`body_type_id`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `fuel_type_id` (`fuel_type_id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`vehicle_type_id`);

--
-- Indexes for table `vmodels`
--
ALTER TABLE `vmodels`
  ADD PRIMARY KEY (`vmodels_id`),
  ADD KEY `brands_id` (`brands_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body_types`
--
ALTER TABLE `body_types`
  MODIFY `body_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brands_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel_types`
--
ALTER TABLE `fuel_types`
  MODIFY `fuel_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `vehicle_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vmodels`
--
ALTER TABLE `vmodels`
  MODIFY `vmodels_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_types` (`vehicle_type_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `vehicles_ibfk_2` FOREIGN KEY (`body_type_id`) REFERENCES `body_types` (`body_type_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `vehicles_ibfk_3` FOREIGN KEY (`model_id`) REFERENCES `vmodels` (`vmodels_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `vehicles_ibfk_4` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `vehicles_ibfk_5` FOREIGN KEY (`fuel_type_id`) REFERENCES `fuel_types` (`fuel_type_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `vmodels`
--
ALTER TABLE `vmodels`
  ADD CONSTRAINT `vmodels_ibfk_1` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`brands_id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
