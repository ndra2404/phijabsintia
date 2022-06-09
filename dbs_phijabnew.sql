-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 09:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_phijabnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `datesend` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `receiver_id`, `message`, `status`, `datesend`) VALUES
(1, 2, 1, 'Hai saya sedang mencari hijab', 1, '2022-05-28 10:06:55'),
(2, 2, 1, 'iya saya menjual berbagai macam kerudung', 0, '2022-05-28 10:20:55'),
(3, 6, 1, 'Saya indra', 1, '2022-05-28 10:20:55'),
(4, 2, 1, 'jual jenis apa saja kak', 1, '2022-05-28 10:06:55'),
(5, 2, 1, 'TEST', 0, '2022-05-28 10:55:31'),
(6, 6, 1, 'hai indra', 0, '2022-05-28 10:20:55'),
(7, 2, 1, 'test indra', 1, '2022-05-28 14:22:01'),
(8, 2, 1, 'test indra sedang makan', 0, '2022-05-28 14:23:25'),
(9, 6, 1, 'indra dika', 0, '2022-05-28 14:23:59'),
(10, 6, 1, 'sedang makan', 0, '2022-05-28 14:25:07'),
(11, 2, 1, 'cek', 0, '2022-05-30 12:19:14'),
(12, 2, 1, 'haii', 0, '2022-05-31 04:22:40'),
(13, 8, 1, 'test', 1, '2022-05-31 04:28:24'),
(14, 8, 1, 'coba kirim pesan', 1, '2022-05-31 04:29:13'),
(15, 8, 1, 'iya nyampe', 0, '2022-05-31 04:30:10'),
(16, 8, 1, 'lagi apa?', 1, '2022-05-31 04:30:23'),
(17, 8, 1, 'test', 1, '2022-05-31 04:52:20'),
(18, 8, 1, 'ia ada yang bisa dibantu', 0, '2022-05-31 04:54:07'),
(19, 8, 1, 'cek', 1, '2022-06-01 06:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_no` varchar(14) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_user_id` int(11) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_remark` text NOT NULL,
  `order_norek` varchar(25) DEFAULT NULL,
  `order_nama` varchar(50) DEFAULT NULL,
  `order_jumlah` float(10,2) DEFAULT NULL,
  `order_bukti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `order_date`, `order_user_id`, `metode_pembayaran`, `order_status`, `order_total`, `order_remark`, `order_norek`, `order_nama`, `order_jumlah`, `order_bukti`) VALUES
(1, 'PH-2205260001', '2022-05-26 10:40:04', 2, 'Transfer Bank', 'Pesanan selesai', 138000, 'test', '121313', 'indra', 12345.00, 'confirmation/27598.jpg'),
(2, 'PH-2205260002', '2022-05-26 11:32:23', 2, 'Transfer Bank', 'Pesanan dikirim', 40000, 'test harga', '121313', 'Phasmina jenis seksi banget', 12345.00, 'confirmation/82960.jpg'),
(3, 'PH-2205280003', '2022-05-28 22:16:39', 7, 'Transfer Bank', 'Awaiting Payment', 48000, 'Yang seksi banget ya kak, aku buat baju dinas', NULL, NULL, NULL, NULL),
(4, 'PH-2205300004', '2022-05-30 19:15:17', 8, 'Transfer Bank', 'Awaiting Payment', 14000, 'xxxxx', NULL, NULL, NULL, NULL),
(6, 'PH-2205300006', '2022-05-30 19:38:14', 8, 'Transfer Bank', 'Awaiting Payment', 84000, 'xxx', NULL, NULL, NULL, NULL),
(8, 'PH-2205300008', '2022-05-30 21:08:57', 1, 'Transfer Bank', 'Awaiting Payment', 14000, 'xxx', NULL, NULL, NULL, NULL),
(9, 'PH-2205300009', '2022-05-30 21:10:24', 8, 'Transfer Bank', 'Pesanan selesai', 14000, 'xxxxx', '546565456', 'xxxx', 14000.00, 'confirmation/72277.PNG'),
(10, 'PH-2206010010', '2022-06-01 13:11:02', 8, 'Transfer Bank', 'Awaiting Payment', 60000, 'xxx', NULL, NULL, NULL, NULL),
(11, 'PH-2206010011', '2022-06-01 13:42:55', 1, 'Transfer Bank', 'Awaiting Payment', 20000, 'Ok', NULL, NULL, NULL, NULL),
(12, 'PH-2206020012', '2022-06-02 14:15:30', 8, 'Transfer Bank', 'Pesanan selesai', 200000, 'cek', '000', 'cek', 200.00, 'confirmation/85023.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `qty` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `order_id`, `product_id`, `price`, `qty`, `total`) VALUES
(1, 1, 5, 20000.00, 2.00, 40000.00),
(2, 1, 6, 14000.00, 7.00, 98000.00),
(3, 2, 5, 20000.00, 2.00, 40000.00),
(4, 3, 6, 14000.00, 2.00, 28000.00),
(5, 3, 7, 20000.00, 1.00, 20000.00),
(6, 4, 6, 14000.00, 1.00, 14000.00),
(7, 6, 6, 14000.00, 6.00, 84000.00),
(10, 8, 6, 14000.00, 1.00, 14000.00),
(11, 9, 6, 14000.00, 1.00, 14000.00),
(12, 10, 5, 20000.00, 3.00, 60000.00),
(13, 11, 5, 20000.00, 1.00, 20000.00),
(14, 12, 5, 20000.00, 10.00, 200000.00);

--
-- Triggers `orders_detail`
--
DELIMITER $$
CREATE TRIGGER `stockmin` AFTER INSERT ON `orders_detail` FOR EACH ROW BEGIN
 update product set product_stock = product_stock-new.qty
 where id = new.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_sku` varchar(14) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_desc` text NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_thumb1` text NOT NULL,
  `product_thumb2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_sku`, `product_type_id`, `product_name`, `product_price`, `product_desc`, `product_stock`, `product_thumb1`, `product_thumb2`) VALUES
(5, 'SKU-2205260003', 2, 'TEST', 20000.00, '<p>TESTETSTSTST</p>', 6, 'products/thumb/80323.jpg', 'products/thumb/77557.jpg'),
(6, 'SKU-2205260004', 1, 'Phasmina jenis seksi banget', 14000.00, '<p>testing indra</p>', 0, 'products/thumb/92653.jpg', 'products/thumb/15250.jpg'),
(7, 'SKU-2205270005', 1, 'Kerudung langsung', 20000.00, '<p>TESTSTSTSTSTSTS</p>', 12, 'products/thumb/33544.jpg', 'products/thumb/72224.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `product_image`) VALUES
(5, 5, 'products/20220526063900-2.collection5.jpg'),
(6, 5, 'products/20220526063900-2.demo1-banner3.jpg'),
(7, 6, 'products/20220526064920-1.demo5-age3.jpg'),
(8, 6, 'products/20220526064920-1.demo5-age1.jpg'),
(9, 7, 'products/20220527104855-1.collection-masonary3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `product_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `product_type`) VALUES
(1, 'Pashmina gunung geulis'),
(2, 'Bergo'),
(3, 'Syiria'),
(4, 'Scarf Panjang'),
(6, 'indra');

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
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `no_hp`, `alamat`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '$2y$10$lznSCr6syJEz6rAJgkon..6bafCVJf7Rx1MNG7JFqOjXIeVQUCLWu', 'admin', NULL, NULL, 1, NULL, NULL, NULL),
(2, 'indra', 'ndra2404@gmail.com', NULL, '$2y$10$lznSCr6syJEz6rAJgkon..6bafCVJf7Rx1MNG7JFqOjXIeVQUCLWu', 'customer', NULL, NULL, 1, NULL, '2022-04-08 01:57:33', '2022-04-08 01:57:33'),
(6, 'a', 'a@gmail.com', NULL, '$2y$10$3T1HTaJqMRroKWQj9ZcLYe.i3DstpPa0AMtCSQzT.YIIdVqHAB0Pq$2y$10$lznSCr6syJEz6rAJgkon..6bafCVJf7Rx1MNG7JFqOjXIeVQUCLWu', 'customer', '12345', NULL, 1, NULL, '2022-05-27 15:34:06', '2022-05-27 15:34:06'),
(7, 'babak', 'babakberak@gmail.com', NULL, '$2y$10$BZaARI9r9fZ1QEtm.4f7tOaDHM9OVIOoO2DWU12k97IDZXz.oEYFK', 'customer', '081215349990', NULL, 1, NULL, '2022-05-28 15:13:41', '2022-05-28 15:13:41'),
(8, 'sintia', 'shintiaheraa@gmail.com', NULL, '$2y$10$cYNnPssL2wVz1rCOioUK0uZ9tf5M5t.uoq8TeyFgDDNJV2aBi.f26', 'customer', '098898787898', NULL, 1, NULL, '2022-05-30 12:12:57', '2022-05-30 12:12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
