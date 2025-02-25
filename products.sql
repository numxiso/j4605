-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2025 at 09:12 AM
-- Server version: 10.5.26-MariaDB-0+deb11u2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop4605`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(9,2) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `c_id`) VALUES
(1, 'บลัชออน Dior Backstage Rosy ', 'บลัชออนสีสดใส เหมาะกับทุกสีผิว ช่วยมอบความเปล่งประกายอย่างเป็นธรรมชาติ', 1700.00, 'jpg', 3),
(2, 'พาเลทคอนทัวร์ไฮไลท์ Dior Backstage', 'พาเลทคอนทัวร์ไฮไลท์แต่งหน้าอเนกประสงค์ เป็นได้ทั้งไฮไลท์และบลัชออน', 2250.00, 'jpg', 5),
(3, 'ลิปออยล์ Dior Addict Lip Glow Oil', 'ลิปออยล์บำรุงปาก ประกายงาม เนื้อเบาสบายไม่เหนียว', 1650.00, 'jpg', 4),
(4, 'รองพื้น Dior Prestige Le Micro-Fluide Teint De Rose', 'รองพื้นอุดมด้วยสารบำรุงผิว Spf 25 Pa+++ ให้ผิวเปล่งประกาย', 5200.00, 'jpg', 4),
(5, 'แป้งคุชชั่น Dior Forever Cushion Powder', 'แป้งฝุ่นคุชชั่นเนื้อละเอียด เพื่อผิวสวยดูสมบูรณ์แบบ โปร่งแสงยาวนาน', 2600.00, 'jpg', 5),
(6, 'มาสคาร่า Diorshow Pump \'N\' Volume Hd', 'มาสคาร่าสูตรกันน้ำ เพิ่มวอลลุ่มขนตาให้ดูหนาอย่างเป็นธรรมชาติ', 1650.00, 'jpg', 3),
(7, 'อายแชโดว์ Mono Couleur Couture High-Color Eyeshadow', 'อายแชโดว์เนื้อแป้ง ให้ผลลัพธ์ที่หลากหลาย เม็ดสีเด่นชัด ติดทนยาวนาน', 1500.00, 'jpg', 5),
(8, 'ที่ดัดขนตา Dior Backstage - Eyelash Curler', 'ที่ดัดขนตา ใช้งานง่าย อ่อนโยนโดยปราศจากการหนีบและหักงอของขนตา', 110.00, 'jpg', 4),
(9, 'ลิปบาล์มบำรุงริมฝีปาก Lip Sugar Scrub', 'ลิปบาล์มขัดริมฝีปากแบบไม่ต้องล้างออก ช่วยบำรุงริมฝีปาก แบบธรรมชาติ', 1650.00, 'jpg', 3),
(10, 'ลิปเซรั่มบำรุงปาก Dior Addict Lip Maximizer Serum', 'ลิปเซรั่มบำรุงปากอย่างเข้มข้น ให้ความชุ่มชื้นแก่ริมฝีปากนาน 24 ชั่วโมง', 1650.00, 'jpg', 2),
(11, 'รองพื้นเนื้อแมท Dior Forever', 'รองพื้นเนื้อแมท ไม่หลุดเลือน ติดทนนานตลอดวัน', 2900.00, 'jpg', 4),
(12, 'ดินสอเขียนคิ้ว Diorshow Crayon Sourcils Poudre', 'ดินสอเขียนคิ้วกันน้ำติดทนโดดเด่น ผลลัพธ์เป็นธรรมชาติพร้อมกบเหลา', 1150.00, 'jpg', 2),
(14, 'รองพื้นเนื้อแมท Dior Forever', 'รองพื้นเนื้อแมท ไม่หลุดเลือน ติดทนนานตลอดวัน', 2900.00, 'jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
