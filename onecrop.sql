-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 02:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onecrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `vcode` varchar(255) NOT NULL,
  `verified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `first_name`, `last_name`, `email`, `cellphone`, `address`, `password`, `vcode`, `verified`) VALUES
(1, 'James', 'Ga', 'francissopogi@gmail.com', '9389893537', 'Martinez st. Signal Village', 'dc4dab022f6c89926cd13315c98e159a', '08b0c7e1f545a2a68555e9d2717ecbb1', 'Yes'),
(2, 'Florence', 'Malinao', 'odengmalinao@gmail.com', '9237442322', 'Martinez st. Signal Village', '0230a56db1378c0d33f8e95599b878ab', '08b0c7e1f545a2a68555e9d2717ecbb1', 'Yes'),
(3, 'Test', 'Test', 'testbuyer@email.com', '09123456789', 'Test', '24468d6dfc0f6dcde5c8667c09a6ae25', '791a0c76aebaab193ae047a355bb28f4', 'Yes'),
(4, ' Andrea', 'Abuan', 'AbuanAndrea@gmail.com', '9123454593', '18 Di-martino St Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636744', 'Yes'),
(5, ' Woody Allens', 'Arabaca', 'ArabacaWoodyAllens@gmail.com', '9123454594', '32 manalili street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636752', 'Yes'),
(6, ' Ma. Angelica', 'Ariaga', 'AriagaMa.Angelica@gmail.com', '9123454595', '#60 Atis street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636760', 'Yes'),
(7, ' Raiven Jhay', 'Artienda', 'ArtiendaRaivenJhay@gmail.com', '9123454596', '56 San pablo Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636768', 'Yes'),
(8, ' Aaron Justine', 'Balagot', 'BalagotAaronJustine@gmail.com', '9123454597', '32 manalili street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636776', 'Yes'),
(9, ' Alfer Ransley', 'Balin', 'BalinAlferRansley@gmail.com', '9123454598', '98 Davao Street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636784', 'Yes'),
(10, ' John Aaron', 'Baltazar', 'BaltazarJohnAaron@gmail.com', '9123454599', '42 Sultan Kudarat Rizal Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636792', 'Yes'),
(11, ' Alejandro', 'Billan', 'BillanAlejandro@gmail.com', '9123454600', '45 Chico extension Rizal Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636800', 'Yes'),
(12, ' Billy', 'Bocal', 'BocalBilly@gmail.com', '9123454601', 'Blk 16 lt 59 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636808', 'Yes'),
(13, ' Abigail', 'Bongala', 'BongalaAbigail@gmail.com', '9123454602', '59 Mangga Street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636816', 'Yes'),
(14, ' Ara Beatriz B.', 'Buenaventura', 'BuenaventuraAraBeatriz@gmail.com', '9123454603', '67 Ballecer street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636824', 'Yes'),
(15, ' Delfin Jr.', 'Carlos', 'CarlosDelfinJr@gmail.com', '9123454604', '42 Cuasay Street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636832', 'Yes'),
(16, ' Mariecolle', 'Collado', 'ColladoMariecolle@gmail.com', '9123454605', '68 Meralco Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636840', 'Yes'),
(17, ' Roi Dominic', 'Espares', 'EsparesRoiDominic@gmail.com', '9123454606', '35 manalili street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636848', 'Yes'),
(18, ' Ryan Justine', 'De Torres', 'DeTorresRyanJustine@gmail.com', '9123454607', '56 Sultan Kudarat Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636856', 'Yes'),
(19, ' Chriselle', 'Flores', 'FloresChriselle@gmail.com', '9123454608', '47 32nd. Street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636864', 'Yes'),
(20, ' Princess Richell', 'Funa', 'FunaPrincessRichell@gmail.com', '9123454609', '32 Ayala avenue Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636872', 'Yes'),
(21, ' Kristen Julien', 'Guillermo', 'GuillermoKristenJulien@gmail.com', '9123454610', '67 manalili street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636880', 'Yes'),
(22, ' John Patrick C.', 'Isidoro', 'IsidoroJohnPatrick@gmail.com', '9123454611', '23 9th avenue Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636888', 'Yes'),
(23, '  Kenneth', 'Lineses', 'LinesesKenneth@gmail.com', '9123454612', '32 antalan street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636896', 'Yes'),
(24, ' James B.', 'Malabanan', 'MalabananJames@gmail.com', '9123454613', 'Blk 34 lt 67 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636904', 'Yes'),
(25, ' Florence', 'Malinao', 'MalinaoFlorence@gmail.com', '9123454614', '32 Sultan Kudarat Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636912', 'Yes'),
(26, ' Jenzer Kane', 'Managay', 'ManagayJenzerKane@gmail.com', '9123454615', '35 Rizal street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636920', 'Yes'),
(27, ' Femela Aila T.', 'Manay', 'ManayFemelaAila@gmail.com', '9123454616', 'Blk 67 lt 34 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636928', 'Yes'),
(28, ' Dale Lawrence S.', 'Marin', 'MarinDaleLawrence@gmail.com', '9123454617', '74 Antipolo street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636936', 'Yes'),
(29, ' Dave B.', 'Mendoza', 'MendozaDave@gmail.com', '9123454618', '62 Batanes street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636944', 'Yes'),
(30, ' Charles', 'Mindanao', 'MindanaoCharles@gmail.com', '9123454619', '21 Dalupang street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636952', 'Yes'),
(31, ' Venar', 'Ocenar', 'OcenarVenar@gmail.com', '9123454620', '46 Bonifacio street Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636960', 'Yes'),
(32, ' Rainlyn', 'Piojo', 'PiojoRainlyn@gmail.com', '9123454621', 'Blk 23 lt 59 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636968', 'Yes'),
(33, ' Josiah Caleb B.', 'Rana', 'RanaJosiahCaleb@gmail.com', '9123454622', 'Blk 5 lt 42 Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636976', 'Yes'),
(34, ' Angelo Jervyne', 'Redruco', 'RedrucoAngeloJervyne@gmail.com', '9123454623', 'Blk 67 lt 23 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636984', 'Yes'),
(35, ' Razia Princess Joy', 'Saludes', 'SaludesRaziaPrincessJoy@gmail.com', '9123454624', '12 San pablo Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987636992', 'Yes'),
(36, ' Clyde Lenon A.', 'Santuele', 'SantueleClydeLenon@gmail.com', '9123454625', 'Blk 32 lt 6 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987637000', 'Yes'),
(37, ' Charles Vincent', 'Tan', 'TanCharlesVincent@gmail.com', '9123454626', '57 San pablo  Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987637008', 'Yes'),
(38, ' Jan Earl', 'Tobias', 'TobiasJanEarl@gmail.com', '9123454627', '53 San pablo  Poblacion Makati City', 'dc4dab022f6c89926cd13315c98e159a', '72987637016', 'Yes'),
(39, ' Mary Joy ', 'Tomas', 'TomasMaryJoy@gmail.com', '9123454628', 'Blk 12 lt 5 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987637024', 'Yes'),
(40, ' Lawrence John', 'Tusing', 'TusingLawrenceJohn@gmail.com', '9123454629', '3 manalili street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987637032', 'Yes'),
(41, ' Paul Vincent', 'Villanueva', 'VillanuevaPaulVincent@gmail.com', '9123454630', '53 antalan street Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987637040', 'Yes'),
(42, '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', ''),
(52, ' Kent', 'Abar', 'AbarKent@gmail.com', '9123454592', 'Blk 16 lt 59 Signal Village Taguig City', 'dc4dab022f6c89926cd13315c98e159a', '72987636736', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `buyer_id`, `product_id`, `quantity`) VALUES
(50, 0, 21, 5),
(64, 2, 15, 5),
(97, 0, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_creation_date` datetime NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_subtotal` int(11) NOT NULL,
  `shipping_price` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `delivery_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `buyer_id`, `seller_id`, `status`, `payment_type`, `order_creation_date`, `product_name`, `product_id`, `quantity`, `product_price`, `product_subtotal`, `shipping_price`, `grand_total`, `buyer_name`, `receiver_name`, `phone_number`, `delivery_address`) VALUES
(1, 2, 1, 'To ship', 'COD', '2021-05-27 06:39:04', 'Garlic', 5, 2, 25, 50, 90, 140, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(2, 2, 1, 'To ship', 'COD', '2021-05-27 06:39:04', 'Water Spinach (Kang-kong)', 27, 3, 20, 60, 90, 150, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(3, 2, 1, 'To ship', 'COD', '2021-05-27 09:32:52', 'Green Peas', 8, 5, 20, 100, 90, 190, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(4, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Spinach', 1, 10, 100, 1000, 90, 1090, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(5, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Barley', 2, 12, 56, 672, 90, 762, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(6, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Carrots', 3, 3, 50, 150, 90, 240, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(7, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Broccoli', 4, 3, 85, 255, 90, 345, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(8, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Green Peas', 8, 4, 20, 80, 90, 170, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(9, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Kale', 7, 5, 65, 325, 90, 415, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(10, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Brussels sprouts', 6, 3, 55, 165, 90, 255, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(11, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Garlic', 5, 5, 25, 125, 90, 215, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(12, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Ginger', 9, 2, 18, 36, 90, 126, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(13, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Asparagus', 10, 2, 30, 60, 90, 150, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(14, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Cabbage', 11, 1, 22, 22, 90, 112, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(15, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'celery', 12, 3, 33, 99, 90, 189, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(16, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Orange', 16, 4, 45, 180, 90, 270, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(17, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Strawberries', 15, 5, 55, 275, 90, 365, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(18, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Lemon', 14, 11, 21, 231, 90, 321, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(19, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Limes', 17, 2, 17, 34, 90, 124, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(20, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Grapefruit', 18, 8, 39, 312, 90, 402, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(21, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'blackberries', 19, 2, 150, 300, 90, 390, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(22, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Apples', 20, 6, 40, 240, 90, 330, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(23, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Avocado', 24, 7, 200, 1400, 90, 1490, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(24, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Banana', 23, 8, 50, 400, 90, 490, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(25, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Pineapple', 22, 11, 89, 979, 90, 1069, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(26, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Pomegranate', 21, 9, 77, 693, 90, 783, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(27, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Blueberries', 25, 6, 90, 540, 90, 630, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(28, 2, 1, 'To ship', 'COD', '2021-05-27 10:04:41', 'Lychee', 26, 6, 30, 180, 90, 270, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(29, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Rambutan', 28, 5, 30, 150, 90, 240, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(30, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Blackberry', 32, 23, 30, 690, 90, 780, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(31, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Rice (Nueva Ecija)', 31, 3, 32, 96, 90, 186, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(32, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Melon', 30, 23, 40, 920, 90, 1010, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(33, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Tomato', 29, 11, 40, 440, 90, 530, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(34, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Kiwi', 33, 6, 57, 342, 90, 432, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(35, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Longan', 34, 23, 20, 460, 90, 550, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(36, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Papaya (Diz Farm)', 35, 11, 60, 660, 90, 750, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(37, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Pineapple', 36, 34, 33, 1122, 90, 1212, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(38, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Tamarind', 40, 21, 45, 945, 90, 1035, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(39, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Watermelon (Pakwan)', 39, 21, 23, 483, 90, 573, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(40, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Sugar Apple (Atis)', 38, 32, 33, 1056, 90, 1146, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(41, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Jackfruit (Langka)', 37, 54, 28, 1512, 90, 1602, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(42, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Wheat', 41, 32, 32, 1024, 90, 1114, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(43, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Corn (Fresh)', 42, 32, 35, 1120, 90, 1210, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(44, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Beetroot', 43, 12, 60, 720, 90, 810, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(45, 2, 2, 'To ship', 'COD', '2021-05-27 10:04:41', 'Singkamas', 44, 11, 56, 616, 90, 706, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(46, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Spinach', 1, 10, 100, 1000, 90, 1090, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(47, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Barley', 2, 12, 56, 672, 90, 762, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(48, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Carrots', 3, 3, 50, 150, 90, 240, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(49, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Broccoli', 4, 3, 85, 255, 90, 345, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(50, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Green Peas', 8, 4, 20, 80, 90, 170, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(51, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Kale', 7, 5, 65, 325, 90, 415, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(52, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Brussels sprouts', 6, 3, 55, 165, 90, 255, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(53, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Garlic', 5, 5, 25, 125, 90, 215, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(54, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Ginger', 9, 2, 18, 36, 90, 126, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(55, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Asparagus', 10, 2, 30, 60, 90, 150, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(56, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Cabbage', 11, 1, 22, 22, 90, 112, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(57, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'celery', 12, 3, 33, 99, 90, 189, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(58, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Orange', 16, 4, 45, 180, 90, 270, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(59, 2, 0, 'To ship', 'COD', '2021-05-27 12:28:23', '', 15, 4, 0, 0, 90, 90, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(60, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Lemon', 14, 11, 21, 231, 90, 321, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(61, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Limes', 17, 2, 17, 34, 90, 124, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(62, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Grapefruit', 18, 8, 39, 312, 90, 402, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(63, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'blackberries', 19, 2, 150, 300, 90, 390, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(64, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Apples', 20, 6, 40, 240, 90, 330, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(65, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Avocado', 24, 7, 200, 1400, 90, 1490, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(66, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Banana', 23, 8, 50, 400, 90, 490, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(67, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Pineapple', 22, 11, 89, 979, 90, 1069, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(68, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Pomegranate', 21, 9, 77, 693, 90, 783, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(69, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Blueberries', 25, 6, 90, 540, 90, 630, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(70, 2, 1, 'To ship', 'COD', '2021-05-27 12:28:23', 'Lychee', 26, 6, 30, 180, 90, 270, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(71, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:23', 'Rambutan', 28, 5, 30, 150, 90, 240, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(72, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Blackberry', 32, 23, 30, 690, 90, 780, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(73, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Rice (Nueva Ecija)', 31, 3, 32, 96, 90, 186, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(74, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Melon', 30, 23, 40, 920, 90, 1010, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(75, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Tomato', 29, 11, 40, 440, 90, 530, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(76, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Kiwi', 33, 6, 57, 342, 90, 432, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(77, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Longan', 34, 23, 20, 460, 90, 550, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(78, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Papaya (Diz Farm)', 35, 11, 60, 660, 90, 750, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(79, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Pineapple', 36, 34, 33, 1122, 90, 1212, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(80, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Tamarind', 40, 21, 45, 945, 90, 1035, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(81, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Watermelon (Pakwan)', 39, 21, 23, 483, 90, 573, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(82, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Sugar Apple (Atis)', 38, 32, 33, 1056, 90, 1146, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(83, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Jackfruit (Langka)', 37, 54, 28, 1512, 90, 1602, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(84, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Wheat', 41, 32, 32, 1024, 90, 1114, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(85, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Corn (Fresh)', 42, 32, 35, 1120, 90, 1210, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(86, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Beetroot', 43, 12, 60, 720, 90, 810, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(87, 2, 2, 'To ship', 'COD', '2021-05-27 12:28:24', 'Singkamas', 44, 11, 56, 616, 90, 706, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(88, 2, 0, 'To ship', 'COD', '2021-05-27 12:46:01', '', 15, 0, 0, 0, 90, 90, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(89, 2, 1, 'To ship', 'COD', '2021-05-27 12:46:01', 'Carrots', 3, 23, 50, 1150, 90, 1240, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(90, 2, 0, 'To ship', 'COD', '2021-05-29 06:28:25', '', 15, 0, 0, 0, 90, 90, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(91, 2, 1, 'To ship', 'COD', '2021-05-29 06:28:25', 'Barley', 2, 23, 56, 1288, 90, 1378, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(92, 2, 1, 'To ship', 'COD', '2021-05-29 06:29:28', 'Carrots', 3, 2, 50, 100, 90, 190, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village'),
(93, 2, 1, 'To ship', 'COD', '2021-05-30 06:20:19', 'Orange', 16, 4, 45, 180, 90, 270, 'Florence Malinao', 'Florence Malinao', '9237442322', 'Martinez st. Signal Village');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `seller_id`, `product_name`, `product_description`, `stock`, `category`, `price`, `cover_photo`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 1, 'Spinach', ' Spinach is rich in antioxidants that may reduce the risk of chronic disease, as it may reduce risk factors such as high blood pressure.', 85, 'vegetable', 100, '../uploads/images/c5667318059d4723982563bada9f211d.jpg', '../uploads/images/df4d1eaf5f05fef1e8a865d5d46cdc50.jpg', '../uploads/images/03c636fa4687c6011b00091a2041ba34.jpg', '', '', ''),
(2, 1, 'Barley', ' ', 63, 'grain', 56, '../uploads/images/b87533d9b6d6acaa79981d20d97ff203.jpg', '../uploads/images/99a33cfb54eb38a58fceb13f42a92e86.jpg', '../uploads/images/9a5da195a0385ccbcfe0483491d41273.jpg', '', '', ''),
(3, 1, 'Carrots', ' Carrots are especially high in beta-carotene, which can turn into vitamin A in the body. Their high antioxidant content may help reduce the risk of lung and prostate cancer.', 122, 'vegetable', 50, '../uploads/images/bc20d755f508933e1bc91b782f1df2ec.jpg', '../uploads/images/cdbdddfc1ab396f3b7a9a1dced3181af.jpg', '', '', '', ''),
(4, 1, 'Broccoli', ' Broccoli is a cruciferous vegetable that contains sulforaphane, a compound that may prevent cancer growth. Eating broccoli may also help reduce the risk of chronic disease by protecting against oxidative stress.', 197, 'vegetable', 85, '../uploads/images/52ebf6e0a9c98f43ab0c9f326a161800.jpg', '../uploads/images/b199d8b29bfd773098113fcce82b9575.jpg', '', '', '', ''),
(5, 1, 'Garlic', ' ', 91, 'vegetable', 25, '../uploads/images/d01bf8b2bd6ee33166541ac308ff0fa9.jpg', '../uploads/images/d6ad5d1dc95d83d4f99d93b088d2fac0.jpg', '', '', '', ''),
(6, 1, 'Brussels sprouts', ' Brussels sprouts contain an antioxidant called kaempferol, which may protect against oxidative damage to cells and prevent chronic disease. They may also help enhance detoxification in the body.', 117, 'vegetable', 55, '../uploads/images/764d843732a1cc0b7a868cb3ac49d694.jpg', '../uploads/images/3fa6f452c2b5de14e17534f1c9da5311.jpg', '../uploads/images/bc9b07b8a74b05da85f5efaf53cfc6ac.jpg', '../uploads/images/b06fdcc818ed085b694cafad0919714f.jpg', '', ''),
(7, 1, 'Kale', ' Kale is high in vitamins A, C and K as well as antioxidants. Studies show that drinking kale juice could reduce blood pressure and LDL cholesterol while increasing HDL cholesterol.', 45, 'vegetable', 65, '../uploads/images/3ef5aad144bc3f64d21de2210445c75e.jpg', '../uploads/images/b59e0f090ff57c8ec883d9977c8dbecd.jpg', '', '', '', ''),
(8, 1, 'Green Peas', ' Green peas contain a good amount of fiber, which helps support digestive health. They also contain plant compounds called saponins, which may have anti-cancer effects.', 31, 'vegetable', 20, '../uploads/images/5172acc138eb423ae852caed98d54d09.jpg', '../uploads/images/43f7c1d68261e89d75d9bb34048c7c2b.jpg', '../uploads/images/edb816938b5c9fd515999a175c4a5147.jpg', '', '', ''),
(9, 1, 'Ginger', ' ginger could reduce nausea and alleviate inflammation. Ginger supplements may also help decrease blood sugar.', 28, 'vegetable', 18, '../uploads/images/c893558e0aa208eb2827b49d046388a5.jpg', '../uploads/images/1ca7e6b29a9a97ed93e368ab8a266ece.jpg', '../uploads/images/0762cf702ea0cccbbb7d1fa8b1e7d9aa.jpg', '', '', ''),
(10, 1, 'Asparagus', ' Asparagus is especially high in folate, which may help prevent neural tube birth defects. Test-tube studies have also found that asparagus can support liver function and reduce the risk of toxicity.', 63, 'vegetable', 30, '../uploads/images/3d823555575fb868fcc37558ba134b86.jpg', '../uploads/images/f75c4c6e22fc01c14a8fc1c69e157df9.jpg', '../uploads/images/e62a06feaa5e93ecad405570a7175c9a.jpg', '../uploads/images/fe494b3db0da0a5b7f349588bed4eebc.jpg', '../uploads/images/d2c8f24954dd011c1e738682b97871a5.jpg', ''),
(11, 1, 'Cabbage', ' ', 39, 'vegetable', 22, '../uploads/images/ec06d22f73b2d5df216b40bb7143d085.jpg', '../uploads/images/bfe2891ea1c0f8395c69c0fd28b0849d.jpg', '../uploads/images/497ba5c8e245f2b8dc485d1c4926818c.jpg', '', '', ''),
(12, 1, 'celery', ' ', 72, 'vegetable', 33, '../uploads/images/121fda5a06362412828eb63679220700.jpg', '../uploads/images/7d6d977390f52a807ac7b2ae638a10db.jpg', '../uploads/images/29a77227345f77349b34648af58f7660.jpg', '', '', ''),
(13, 1, 'Eggplant', ' ', 33, 'vegetable', 22, '../uploads/images/f43549f6caaefec656458bbead24ea87.jpg', '../uploads/images/04d4addf8e0dc44ccd958e6a060c3f2b.jpg', '', '', '', ''),
(14, 1, 'Lemon', ' Lemons are a citrus fruit that people often use in traditional remedies because of their health benefits. Like other citrus fruits, they contain vitamin C and other antioxidants.', 55, 'fruit', 21, '../uploads/images/d2e24e89ba6c25603ecaa03200c2c72d.jpg', '../uploads/images/ea09d5171dd2e90bd46ba3c9fcd8322e.jpg', '', '', '', ''),
(16, 1, 'Orange', ' Oranges are a sweet, round citrus fruit packed with vitamins and minerals.', 24, 'fruit', 45, '../uploads/images/14196478293388ecc67804c2be3c010c.jpg', '../uploads/images/1426ee438ee92c09518236ea3cb551f1.jpg', '../uploads/images/1fec66517b90cbd57f4c8b9ee5a2b939.jpg', '../uploads/images/24add6b39aaaaa6c13b758d6f233d4b5.jpg', '../uploads/images/87941ce8b78ac7a6f07d70d9f07cc89a.jpg', '../uploads/images/9079c2ef533fc7c3f76f241d3ec9ef82.jpg'),
(17, 1, 'Limes', ' Limes are a sour citrus fruit that provide a range of health benefits.', 27, 'fruit', 17, '../uploads/images/62552cfef3f52e7c5dff3aab3db4b376.jpg', '../uploads/images/ad18aeb5730beaab2bfea95f8e0a969c.jpg', '../uploads/images/20370a5592de1282fd483f120f0d88be.jpg', '', '', ''),
(18, 1, 'Grapefruit', ' Grapefruits are sour fruits full of health-inducing vitamins and minerals. Grapefruits can be pink, red, or white.', 47, 'fruit', 39, '../uploads/images/cd8e9c9fb585881be1449fe791d10b85.jpg', '../uploads/images/646fc99535bc9125dedaff204f4d71dd.jpg', '', '', '', ''),
(19, 1, 'blackberries', ' Blackberries contain many seeds, so they have a high fiber content. This means they can help improve gut health and heart health.\r\n', 30, 'fruit', 150, '../uploads/images/2300d7df813c62b2073bbadc6c099113.jpg', '../uploads/images/a3c440b083e9bdb36de1e33ba269ec44.jpg', '../uploads/images/6cf336580619f2003a52f573aabf497c.jpg', '', '', ''),
(20, 1, 'Apples', ' Apples are high-fiber fruits, meaning that eating them could boost heart health and promote weight loss. The pectin in apples helps to maintain good gut health. ', 84, 'fruit', 40, '../uploads/images/38afe9a91281a2f4ad92377e96f47bb5.jpg', '../uploads/images/17ff843be7ca8ca3d3e79190e81e94af.jpg', '../uploads/images/56b743937db75ff54ab0a9ebad346b1f.jpg', '', '', ''),
(21, 1, 'Pomegranate', ' They are high in antioxidants and polyphenols, which help to combat the oxidative stress that can cause disease in the body.', 84, 'fruit', 77, '../uploads/images/74e939c9fcf7ed7fdfb834016eb60eff.jpg', '../uploads/images/60281a5e74aa38296b1c57290788914f.jpg', '../uploads/images/175f182cd30ca8a9b77240867a69c290.jpg', '../uploads/images/79f9103b939890251dcc8d735e274c21.jpg', '', ''),
(22, 1, 'Pineapple', ' Pineapple is an exotic fruit that may help reduce inflammation and promote healthy tissue growth.', 56, 'fruit', 89, '../uploads/images/82518c1b764e53e765b17c823d35eb65.jpg', '../uploads/images/67e6e431224e934ea51be4c03b0b9105.jpg', '../uploads/images/594b5686cc513f1386ea3f166b93691f.jpg', '', '', ''),
(23, 1, 'Banana', ' ', 82, 'fruit', 50, '../uploads/images/797234a1ba8fbd441e4ef0c7a1848774.jpg', '../uploads/images/ce200ec25f8f227a2644783f2009c988.jpg', '../uploads/images/955d8ca8b409d43e7437271fa472bff8.jpg', '../uploads/images/74f598cae0c833abf4ce855c561cb45d.jpg', '', ''),
(24, 1, 'Avocado', ' Avocados are rich in oleic acid, a monounsaturated fat which helps lower cholesterol levels. The American Heart Association say that maintaining healthy cholesterol levels with healthful fats could reduce the risk of heart disease and stroke.', 83, 'fruit', 200, '../uploads/images/3ee98c0bb3e1aefe8d33708f8079233f.jpg', '../uploads/images/8abb55552ea66bbcf74dc8be8507ad6b.jpg', '', '', '', ''),
(25, 1, 'Blueberries', ' Blueberries also contain pterostilbene, a compound that may help prevent plaque from collecting in the arteries.', 94, 'fruit', 90, '../uploads/images/96c4a3a177ea6226589aab929db95093.jpg', '../uploads/images/df8b008c80554693be18dac7361b495c.jpg', '../uploads/images/238840db1d56cbf347bbf134d86f2e27.jpg', '', '', ''),
(26, 1, 'Lychee', ' Good Fruit', 294, 'fruit', 30, '../uploads/images/7ecec6ff0c60ce92e9bddf9fbc370872.jpg', '../uploads/images/76718aa57bfdeb9f7db1c0ba76579c88.jpg', '../uploads/images/4ca2f423ac457f994c3f4a9c4090bb82.jpg', '', '', ''),
(27, 2, 'Water Spinach (Kang-kong)', '', 297, 'vegetable', 20, '../uploads/images/322e7689e8fc2a53047ed3a08b4c8dca.jpg', '../uploads/images/e9f764f8a677317bf92beba01f30a339.jpg', '../uploads/images/0fc847061278afaf53d58218fce471e9.jpg', '', '', ''),
(28, 2, 'Rambutan', ' ', 285, 'fruit', 30, '../uploads/images/eb2f1284f0ed6dabc6bac414f813f7dd.jpeg', '../uploads/images/c78a2d73b33e9a73837aa3544479e4ee.jpg', '../uploads/images/80fc0454db342fb77c421f599126056b.jpg', '', '', ''),
(29, 2, 'Tomato', ' ', 389, 'vegetable', 40, '../uploads/images/f7c415d83ca574b9c93e1e5e9d012983.jpg', '../uploads/images/f3a4fd5f17c03ddc5d9a5d3cd9c45052.jpg', '../uploads/images/00ee91da92fcdb279ef0f3815bc946ef.jpg', '../uploads/images/11b5b868398ad46bb13c310278b7a7e6.jpg', '../uploads/images/74ba4308bc9a4ba9cc4f0afb8d6a5b21.jpg', ''),
(30, 2, 'Melon', ' ', 537, 'fruit', 40, '../uploads/images/5ad7627e06edf25ef72adafdb005bdf3.jpg', '../uploads/images/c88f37a101b1c7bc0c3ebb0bf2ad701c.jpg', '../uploads/images/89ab0b6c95c87a6a7f529ccca5353ecb.jpg', '', '', ''),
(31, 2, 'Rice (Nueva Ecija)', ' Rice from Nueva Ecija', 447, 'grain', 32, '../uploads/images/0c8268948073bb0c7ea8b973d885f7cc.jpg', '../uploads/images/2f904e5d5e5a24453643a20a344b12c2.jpg', '', '', '', ''),
(32, 2, 'Blackberry', ' ', 306, 'fruit', 30, '../uploads/images/125750c1b607a2d8dc88a9c0d2ee3193.jpg', '../uploads/images/cee7b6844f909f8595d68dc70e4c71bf.jpg', '../uploads/images/0560517d7e4625e42bfbdb4564d968aa.jpg', '', '', ''),
(33, 2, 'Kiwi', ' ', 228, 'fruit', 57, '../uploads/images/e8d8baabd95abc5fd7f912b5137608fc.jpg', '', '../uploads/images/4ad2513c2ea36c203f69c13b4fefa409.jpg', '', '', ''),
(34, 2, 'Longan', ' Fresh longan from farm ', 178, 'fruit', 20, '../uploads/images/9c09878ffe66fb3a623d9a960646c28b.jpg', '../uploads/images/ae2ad47da82204fd78bee3d577d73ac0.jpg', '../uploads/images/13d42c65a0daf815ec83f86a9b5bb324.jpg', '', '', ''),
(35, 2, 'Papaya (Diz Farm)', 'Fresh papaya from Diz Farm', 244, 'fruit', 60, '../uploads/images/9498a460eca3b5979611e3931934ec15.jpg', '../uploads/images/5b451f1d665b10a7310b16ecde205ed9.jpg', '../uploads/images/45354af7c1b479f6d182626409de5563.jpg', '', '', ''),
(36, 2, 'Pineapple', ' Pineapple fresh from farm', 266, 'fruit', 33, '../uploads/images/c758c56c0d853afda86f8368af597352.jpg', '../uploads/images/8ead62686c5d6787623a254ec67e8516.jpg', '../uploads/images/8de8a9e8622a6783e0c24c7ba9a61cef.jpg', '../uploads/images/64be0a1713ce7d6c53f9172d364087dd.jpg', '', ''),
(37, 2, 'Jackfruit (Langka)', ' ', 246, 'fruit', 28, '../uploads/images/d8d5a6bfccf0a2d8c79c2bd7de7ac23a.jpg', '../uploads/images/5a47bafd41e9208054a5b883f259cb65.jpg', '../uploads/images/be5cfc709b2367fd216fbbb9fd418763.jpg', '', '', ''),
(38, 2, 'Sugar Apple (Atis)', ' ', 301, 'fruit', 33, '../uploads/images/d6950cec59a26e62cbfadb061f7946ff.jpg', '../uploads/images/46400346768cd37a55d5e0e62bc601d1.jpg', '../uploads/images/b536d97c37a5ea24e5d44e48ae6b348b.jpg', '', '', ''),
(39, 2, 'Watermelon (Pakwan)', ' ', 855, 'fruit', 23, '../uploads/images/bcda89810a69bb84fa5028c500e847ec.jpg', '../uploads/images/fe6815bf72724dd90c63228151af638c.jpg', '../uploads/images/aeef04f85407005c3e3bc2fed87f1f38.jpg', '', '', ''),
(40, 2, 'Tamarind', ' ', 279, 'fruit', 45, '../uploads/images/26ec6ea59ff0dab1f41436258d5cc464.jpg', '../uploads/images/3b487b4571db049aeead1a7ccd7b7697.jpg', '', '', '', ''),
(41, 2, 'Wheat', ' ', 223, 'grain', 32, '../uploads/images/67734c05df5978a5df6fc888fff43ae2.jpg', '../uploads/images/e4560b7fdd2ff50aea0a6b4c4578329d.jpg', '../uploads/images/90affeda34782d4dd331580846af515d.jpg', '', '', ''),
(42, 2, 'Corn (Fresh)', ' Fresh corns', 325, 'grain', 35, '../uploads/images/e2d29fb5e2dfe3d2a640bdddc128db93.jpg', '../uploads/images/f1ce2c540b6c0cf78e96f93456df3253.jpg', '../uploads/images/ee72efb5127e6a9236c008e29eb442a7.jpg', '', '', ''),
(43, 2, 'Beetroot', ' ', 555, 'fruit', 60, '../uploads/images/d50de0724948d2fb1de99fc12356a27a.jpg', '../uploads/images/00d0024c540dfd588951094b7432878a.jpg', '../uploads/images/50875b810c6f169d1b75657bd9197cb5.jpg', '', '', ''),
(44, 2, 'Singkamas', ' ', 346, 'fruit', 56, '../uploads/images/126463a21754514dc1f8af657550b7af.jpg', '../uploads/images/12332b16844931bd14fe4aea20911631.jpg', '', '', '', ''),
(45, 2, 'Onion', ' ', 1000, 'vegetable', 20, '../uploads/images/98ee02c03c7bd9a768402d3fa0c2ccb7.jpg', '../uploads/images/25734280502cea9aa74e8d0cd18ad621.jpg', '../uploads/images/c6391a3278162663e625e498b7a260d1.jpg', '', '', ''),
(46, 2, 'Garlic', ' ', 678, 'vegetable', 32, '../uploads/images/5fcb8a739c7b1eed20c4e39f555a9e8b.jpg', '../uploads/images/0713c8a40612a40471084c785948f5c7.jpg', '../uploads/images/ef4a43057eeee17b6b8ba2ec1e6a0a54.png', '../uploads/images/14fba44e9b3d3e39f9903aa29bad8fdc.jpg', '', ''),
(47, 1, 'Strawberries', ' Fresh from baguio', 577, 'fruit', 30, '../uploads/images/3a99293b3507532da09a2c254046747d.jpg', '../uploads/images/ad4102f0a044369e4b751a3304210e1f.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `vcode` varchar(255) NOT NULL,
  `verified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `first_name`, `last_name`, `email`, `cellphone`, `address`, `password`, `vcode`, `verified`) VALUES
(1, 'James Francis', 'Ga', 'Jamessopogi@gmail.com', '09389894547', '#24 Martinez st. Central Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', 'aa1518257c08101d186f4ec15978fa15', 'Yes'),
(2, 'Kenneth', 'Lineses', 'lineses.ken@gmail.com', '93894758576', 'Room 245 Tenement Taguig City', '0230a56db1378c0d33f8e95599b878ab', 'e547dc9fc249fce24a15cf19ead0a684', 'Yes'),
(3, 'Test', 'Test', 'testseller@email.com', '09123456789', 'Test', '24468d6dfc0f6dcde5c8667c09a6ae25', 'Test', 'Yes'),
(4, 'Jolynn', 'Alderson', 'JolynnAlderson@gmail.com', '9230113523', '18 Di-martino St Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840908184', 'Yes'),
(5, 'Alta', 'Tooley', 'AltaTooley@gmail.com', '9230113624', '32 manalili street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840908992', 'Yes'),
(6, 'Stacy', 'Sweeny', 'StacySweeny@gmail.com', '9230113725', '#60 Atis street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840909800', 'Yes'),
(7, 'Luciana', 'Pinales', 'LucianaPinales@gmail.com', '9230113826', '56 San pablo Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840910608', 'Yes'),
(8, 'Loma', 'Bera', 'LomaBera@gmail.com', '9230113927', '32 manalili street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840911416', 'Yes'),
(9, 'Katharina', 'Meehan', 'KatharinaMeehan@gmail.com', '9230114028', '98 Davao Street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840912224', 'Yes'),
(10, 'Hae', 'Norsworthy', 'HaeNorsworthy@gmail.com', '9230114129', '42 Sultan Kudarat Rizal Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840913032', 'Yes'),
(11, 'Shakita', 'Mar', 'ShakitaMar@gmail.com', '9230114230', '45 Chico extension Rizal Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840913840', 'Yes'),
(12, 'Shira', 'Teague', 'ShiraTeague@gmail.com', '9230114331', 'Blk 16 lt 59 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840914648', 'Yes'),
(13, 'Craig', 'Skow', 'CraigSkow@gmail.com', '9230114432', '59 Mangga Street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840915456', 'Yes'),
(14, 'Marci?', 'Demark', 'MarciDemark@gmail.com', '9230114533', '67 Ballecer street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840916264', 'Yes'),
(15, 'Lyda?', 'Lamanna', 'LydaLamanna@gmail.com', '9230114634', '42 Cuasay Street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840917072', 'Yes'),
(16, 'Francisco?', 'Saiki', 'FranciscoSaiki@gmail.com', '9230114735', '68 Meralco Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840917880', 'Yes'),
(17, 'Alexis?', 'Buesing', 'AlexisBuesing@gmail.com', '9230114836', '35 manalili street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840918688', 'Yes'),
(18, 'Galina?', 'Betterton', 'GalinaBetterton@gmail.com', '9230114937', '56 Sultan Kudarat Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840919496', 'Yes'),
(19, 'Ronnie', '?Ruch', 'RonnieRuch@gmail.com', '9230115038', '47 32nd. Street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840920304', 'Yes'),
(20, 'Ewa?', 'Edgington', 'EwaEdgington@gmail.com', '9230115139', '32 Ayala avenue Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840921112', 'Yes'),
(21, 'Charline?', 'Soliman', 'CharlineSoliman@gmail.com', '9230115240', '67 manalili street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840921920', 'Yes'),
(22, 'Alyce', '?Corney', 'AlyceCorney@gmail.com', '9230115341', '23 9th avenue Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840922728', 'Yes'),
(23, 'Calandra?', 'Leverich', 'CalandraLeverich@gmail.com', '9230115442', '32 antalan street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840923536', 'Yes'),
(24, 'Kevin?', 'Mele', 'KevinMele@gmail.com', '9230115543', 'Blk 34 lt 67 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840924344', 'Yes'),
(25, 'Agatha', '?Spagnolo', 'AgathaSpagnolo@gmail.com', '9230115644', '32 Sultan Kudarat Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840925152', 'Yes'),
(26, 'Quincy?', 'Lambeth', 'QuincyLambeth@gmail.com', '9230115745', '35 Rizal street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840925960', 'Yes'),
(27, 'Kiyoko?', 'Voorhees', 'KiyokoVoorhees@gmail.com', '9230115846', 'Blk 67 lt 34 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840926768', 'Yes'),
(28, 'Earleen?', 'Arai', 'EarleenArai@gmail.com', '9230115947', '74 Antipolo street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840927576', 'Yes'),
(29, 'Maude?', 'Slayden', 'MaudeSlayden@gmail.com', '9230116048', '62 Batanes street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840928384', 'Yes'),
(30, 'Rey?', 'Corral', 'ReyCorral@gmail.com', '9230116149', '21 Dalupang street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840929192', 'Yes'),
(31, 'Eleanor?', 'Ducksworth', 'EleanorDucksworth@gmail.com', '9230116250', '46 Bonifacio street Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840930000', 'Yes'),
(32, 'Myles?', 'Jordon', 'MylesJordon@gmail.com', '9230116351', 'Blk 23 lt 59 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840930808', 'Yes'),
(33, 'Shayla?', 'Lippman', 'ShaylaLippman@gmail.com', '9230116452', 'Blk 5 lt 42 Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840931616', 'Yes'),
(34, 'Floy?', 'Lobdell', 'FloyLobdell@gmail.com', '9230116553', 'Blk 67 lt 23 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840932424', 'Yes'),
(35, 'Antonette?', 'Slocum', 'AntonetteSlocum@gmail.com', '9230116654', '12 San pablo Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840933232', 'Yes'),
(36, 'Kyla?', 'Mirarchi', 'KylaMirarchi@gmail.com', '9230116755', 'Blk 32 lt 6 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840934040', 'Yes'),
(37, 'Ivan?', 'Cephus', 'IvanCephus@gmail.com', '9230116856', '57 San pablo  Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840934848', 'Yes'),
(38, 'Glenda', '?Kaul', 'GlendaKaul@gmail.com', '9230116957', '53 San pablo  Poblacion Makati City', '0230a56db1378c0d33f8e95599b878ab', '73840935656', 'Yes'),
(39, 'Claudio', '?Marple', 'ClaudioMarple@gmail.com', '9230117058', 'Blk 12 lt 5 Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840936464', 'Yes'),
(40, 'Wen?', 'Cruzan', 'WenCruzan@gmail.com', '9230117159', '3 manalili street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840937272', 'Yes'),
(41, 'Chase?', 'Addington', 'ChaseAddington@gmail.com', '9230117260', '53 antalan street Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '73840938080', 'Yes'),
(42, 'Annita?', 'Bumpers', 'AnnitaBumpers@gmail.com', '9230117361', '68 Meralco Signal Village Taguig City', '0230a56db1378c0d33f8e95599b878ab', '', ''),
(43, '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
