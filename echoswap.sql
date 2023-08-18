-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3342
-- Generation Time: Jun 27, 2023 at 05:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echoswap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `number`, `email`, `password`) VALUES
('Lnj2ecKoSjhh0hFBbH5W', 'K S S Harsha', 2147483647, 'harshakss23@gmail.com', 'e9e69cbb5fcca69df6c3b7abbb31f93a90759dbc'),
('rjuaLiO1KuYfOYS8Q32A', 'SAI SRI HARSHA KASIBOTLA', 9182209391, 'harshakss@gmail.com', 'e9e69cbb5fcca69df6c3b7abbb31f93a90759dbc');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `msd_id` int(11) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `receiver_id` varchar(100) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msd_id`, `sender_id`, `sender_name`, `receiver_id`, `receiver_name`, `msg_content`, `msg_status`, `msg_date`) VALUES
(3, 'sYSr37xTHr04py7RSWTT', 'harsha', 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'Hello', 'read', '2023-06-26 20:34:25'),
(4, 'sYSr37xTHr04py7RSWTT', 'harsha', 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'hii', 'read', '2023-06-26 20:49:21'),
(5, 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'sYSr37xTHr04py7RSWTT', 'harsha', 'Hello Harsha', 'read', '2023-06-26 21:04:35'),
(6, 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'sYSr37xTHr04py7RSWTT', 'harsha', 'How are you', 'read', '2023-06-26 21:05:19'),
(8, 'OUqjFf5vasVyXNipPCNh', 'Shubham Jaiswal', 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'Hii', 'read', '2023-06-26 21:35:19'),
(9, 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'OUqjFf5vasVyXNipPCNh', 'Shubham Jaiswal', 'Hello', 'unread', '2023-06-26 22:13:08'),
(10, 'OUqjFf5vasVyXNipPCNh', 'Shubham Jaiswal', 'sYSr37xTHr04py7RSWTT', 'harsha', 'Hi', 'read', '2023-06-26 22:14:29'),
(11, 'sYSr37xTHr04py7RSWTT', 'harsha', 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'I&#039;m fine', 'unread', '2023-06-26 22:55:27'),
(18, 'sYSr37xTHr04py7RSWTT', 'harsha', 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'Hello', 'unread', '2023-06-26 23:11:51'),
(19, 'sYSr37xTHr04py7RSWTT', 'harsha', 'DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 'Hii', 'unread', '2023-06-26 23:11:59'),
(20, 'sYSr37xTHr04py7RSWTT', 'harsha', 'OUqjFf5vasVyXNipPCNh', 'Shubham Jaiswal', 'Hello', 'unread', '2023-06-26 23:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `image_04` varchar(50) NOT NULL,
  `image_05` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pid`, `Product_name`, `address`, `price`, `category`, `image_01`, `image_02`, `image_03`, `image_04`, `image_05`, `description`) VALUES
('DBMMkJJRfhGG54kdrIe9', 'Bt0A5VDrvReRbYOxiyLn', 'Tshiert', 'Delhi', 500, 'clothing', '8tI5AGAYEPm1u4BVPoiY.jpg', '', '', '', '', '12asdfghjk'),
('sYSr37xTHr04py7RSWTT', 's16XzzBmYSihYaa2VlZi', 'Product_1_updated_2', 'Miyapur', 500, 'furniture', 'mOmwPzIuChRA73IyeAWF.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati velit itaque consequatur quam earum quia amet recusandae voluptatibus soluta aspernatur vel, doloremque eaque ad harum sapiente qui sit hic.Lorem ipsum dolor sit amet consectetur ad'),
('sYSr37xTHr04py7RSWTT', '6ogIZaJdKeEAmfs5wKIg', 'Product_2', 'Vellore', 1000, 'electronics', '9BqU0HdFuWuoNS1fyWf5.png', '', '', '', '', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis dignissimos aliquid facere dolorem! Quia similique soluta voluptatem blanditiis rem, eaque rerum modi nulla corporis aliquid veniam vel in maxime consectetur!    Lorem ipsum dolor, sit a'),
('sYSr37xTHr04py7RSWTT', 'TW3kPfuFcxmmrRHyEWrr', 'Product_new', 'Hyderabad', 200, 'electronics', 'sV6w8r36KAShHHAsy3i0.png', 'dPWWxEorVAHF4sazld10.png', '', '', '', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi officia provident odit iure voluptas! Consequuntur, minus, suscipit quam reiciendis dolorum atque quibusdam eius, dignissimos quidem minima odio ea similique fuga.\r\n'),
('OUqjFf5vasVyXNipPCNh', 'fcmS0WFZxpFsuKPRtyg1', 'Subham_prod', 'Motihari', 690, 'beautyproducts', '9KtdyP2FShAwQFe9MkPA.jpg', 'eYR90PpVM0O8XgSdh01z.jpg', '', '', '', 'weruioolkjhgfdszxcvbnmweruioolkjhgfdszxcvbnmweruioolkjhgfdszxcvbnmweruioolkjhgfdszxcvbnmweruioolkjhgfdszxcvbnmweruioolkjhgfdszxcvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_products`
--

CREATE TABLE `temporary_products` (
  `id` varchar(50) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `image_04` varchar(50) NOT NULL,
  `image_05` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
('DBMMkJJRfhGG54kdrIe9', 'Sri Harsha', 2147483647, 'harshakss@gmail.com', 'e9e69cbb5fcca69df6c3b7abbb31f93a90759dbc'),
('OUqjFf5vasVyXNipPCNh', 'Shubham Jaiswal', 9182209391, 'unikboyshubham@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('sYSr37xTHr04py7RSWTT', 'harsha', 2147483647, 'harshakss23@gmail.com', 'e9e69cbb5fcca69df6c3b7abbb31f93a90759dbc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`msd_id`);

--
-- Indexes for table `temporary_products`
--
ALTER TABLE `temporary_products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `msd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
