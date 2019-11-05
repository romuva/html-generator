-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2019 at 05:16 AM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unabas_htmlgenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expire_time` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `price_discount` float NOT NULL,
  `description_short` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_long` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `active`, `title`, `price`, `price_discount`, `description_short`, `description_long`, `logo_url`, `created`) VALUES
(1, 1, 'LED Lamp for Dark Vader fans good in bedroom, living room, office, shop or bar', 30, 25, 'This charming 3D illusion for Dark Vader fans (LED lamp) creates a visual emphasis in the interior of your bedroom, living room, kids room, office, shop, bar, or creative space.&#x3C;br /&#x3E;&#x3C;br /&#x3E;It&#x2019;s perfect for a home d&#xE9;cor; it can become your night lamp or decor item. It will also be great for children who are afraid or just dislike to sleep in the dark.&#x3C;br /&#x3E;&#x3C;br /&#x3E;&#x1F381; An excellent gift idea for a Christmas Gift for Dad, Boyfriend Christmas Gift, Gifts for Him, Husband Christmas Gift, Gifts for Men, Men Gifts, Birthday Gift, New Year Gifts, Christmas gift, Anniversary gift, Kids Gift, Wedding gifts, Housewarming gift or just get one for yourself!&#x3C;br /&#x3E;', 'This charming 3D illusion for Dark Vader fans (LED lamp) creates a visual emphasis in the interior of your bedroom, living room, kids room, office, shop, bar, or creative space.&#x3C;br /&#x3E;&#x3C;br /&#x3E;It&#x2019;s perfect for a home d&#xE9;cor; it can become your night lamp or decor item. It will also be great for children who are afraid or just dislike to sleep in the dark.&#x3C;br /&#x3E;&#x3C;br /&#x3E;&#x1F381; An excellent gift idea for a Christmas Gift for Dad, Boyfriend Christmas Gift, Gifts for Him, Husband Christmas Gift, Gifts for Men, Men Gifts, Birthday Gift, New Year Gifts, Christmas gift, Anniversary gift, Kids Gift, Wedding gifts, Housewarming gift or just get one for yourself!&#x3C;br /&#x3E;&#x3C;br /&#x3E;Acrylic design is created by our Team using a laser cut, and laser engraving. Inserted into the base.&#x3C;br /&#x3E;&#x3C;br /&#x3E;The light changes to 7 Different Colors automatically: blue &#x26; red &#x26; green &#x26; pink &#x26; cyan &#x26; yellow &#x26; white&#x3C;br /&#x3E;&#x3C;br /&#x3E;Lit by hidden LED&#x2019;s and never overheated, it will brighten any space while keeping your electricity bills down to a minimum. Power spend: 0.012 kw.h / 24 hours. LED life span: 10000 hours.&#x3C;br /&#x3E;&#x3C;br /&#x3E;Lights are tested and are fully functional prior to shipping.&#x3C;br /&#x3E;&#x3C;br /&#x3E;How it comes:&#x3C;br /&#x3E;1 * 3D lamp&#x3C;br /&#x3E;1 * Base&#x3C;br /&#x3E;1 * Micro USB cable&#x3C;br /&#x3E;&#x3C;br /&#x3E;This item will be shipped within 1-2 business days after the payment is received. Worldwide shipping !&#x3C;br /&#x3E;&#x3C;br /&#x3E;Please contact us if you need help with your order, Thank you!&#x3C;br /&#x3E;&#x3C;br /&#x3E;Smart Touch/Remote Controller, USB/ batteries.&#x3C;br /&#x3E;The light changes 7 Different Colors: - green - blue - yellow - cyan - pink - white .&#x3C;br /&#x3E;Color switching mods- slow flash , fast automatic flicker , fast automatic color change , automaticklly balance color changes.&#x3C;br /&#x3E;Eco-friendly acrylic material, no harm to health or eyes, energy saving.&#x3C;br /&#x3E;An excellent gift idea for a friend, Dad, Boyfriend, Christmas Gift, Gifts for Him or Her, advertising, Birthday Gift, New Year Gifts, Christmas gift, Promotional gifts, Anniversary gift, Kids Gift, Wedding gifts, Housewarming gift or just get one for yourself!&#x3C;br /&#x3E;Also, you can use it for all kinds of decorations like Christmas gatherings, Halloween, Birthday parties, special celebrations.&#x3C;br /&#x3E;Creates beautiful environment in the interior of your bedroom, living room, kids room, office, shop, bar, or creative space. It will also be great for children who are afraid or just dislike to sleep in the dark.It works with LED lights that light up acrylic.&#x3C;br /&#x3E;&#x3C;br /&#x3E;Here is a video of how LED Lamp works:&#x3C;br /&#x3E;&#x3C;video id=&#x22;video&#x22; width=&#x22;100%&#x22; height=&#x22;auto&#x22; controls=&#x22;&#x22;&#x3E;&#x3C;source src=&#x22;https://underlabas.com/ebay-images/underlabas-com-halloween-house-led-lamp%201-5-720p.mp4&#x22; type=&#x22;video/mp4&#x22;&#x3E;&#x3C;/source&#x3E;&#x3C;/video&#x3E;', 'https%3A%2F%2Funderlabas.com%2Febay-images%2Fmade_in_underlabas_logo_200x100.png', '2019-11-04 20:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `removed`
--

CREATE TABLE `removed` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0',
  `avatar` varchar(255) NOT NULL DEFAULT 'uploads/default.jpg',
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `removed`
--
ALTER TABLE `removed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `removed`
--
ALTER TABLE `removed`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
