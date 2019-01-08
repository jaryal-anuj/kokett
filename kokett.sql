-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2019 at 06:19 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kokett`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anuj kumar', 'jaryal', 'anujjar@gmail.com', '$2y$10$XBL2Goa9wu7.EVfY/ulTNe5IgNdtj8jSteF7EFRp1FtV6O50SVI1m', '2019-01-06 12:27:18', '2019-01-06 12:27:18'),
(2, 'Anuj kumar', 'jaryal', 'anujjar10@gmail.com', '$2y$10$1D0oxmHjV3n48tbls3ZSBOgQdQ5mazR7N97niu47vHQj.1dtt3pE6', '2019-01-06 12:27:39', '2019-01-06 12:27:39'),
(3, 'Anuj kumar', 'jaryal', 'anujjar11@gmail.com', '$2y$10$GnENEvqpg0FciYQFvnawJ.boxLxgaAdvHfGQ89o2dPQRiaIk64Gv6', '2019-01-06 12:28:21', '2019-01-06 12:28:21'),
(4, 'Anuj kumar', 'jaryal', 'anujjar13@gmail.com', '$2y$10$JQ.3PfHU8GM1cOmPsHqy/ejHXqe1dQItIn8fdOyYy0dBJOX9GUYkq', '2019-01-06 12:29:59', '2019-01-06 12:29:59'),
(5, 'Anuj kumar', 'jaryal', 'anujjar1@gmail.com', '$2y$10$qfl3XadmiMAUTOwhkYcNLuDFYs8NIW5J/CE49x9FihK3DQEsdWNt2', '2019-01-06 12:34:12', '2019-01-06 12:34:12'),
(6, 'indu', 'bala', 'indu@gmail.com', '$2y$10$xUPvJa4hOPTSG2PuUTL6e.dSkSNAl3OzWVnUvIzdkg71DmMLvuWhq', '2019-01-06 12:46:39', '2019-01-06 12:46:39'),
(7, 'Anuj kumar', 'jaryal', 'sada@gmail.com', '$2y$10$VwIkY0WD7XaZvfxA9QjOFO9cfuMDje5ug4pa7zHRs/lB0870lHvu.', '2019-01-06 13:00:26', '2019-01-06 13:00:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
