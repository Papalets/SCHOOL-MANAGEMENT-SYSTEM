-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 01:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walimu and co.`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(255) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `Username`, `email`, `password`, `department`, `date`) VALUES
(17, 'Georgina Kanja', 'kanja123@gmail.com', '$2y$10$cNoFEb2fCyyEZalBx1KTYuGcX6P.Z3ukAJYLZY/iZLyVnyA1pp1nq', 'Teacher', '2024-04-02'),
(18, 'Julie Mikoyan', 'mikoyan456@gmail.com', '$2y$10$OKFbTt13uxBPXGX/Phika.NJiOoKcfvzhilAxo16.kalexmE4onnS', 'Management', '2024-04-02'),
(19, 'Ian Letting', 'letting789@gmail.com', '$2y$10$3aUP4Szlln1Mra30/82oFeH4bwSGcrVqBe2fIz5P9UXal8flbsD.S', 'System-admin', '2024-04-02'),
(20, 'Joan Wamuyu', 'wamuyu122@gmail.com', '$2y$10$OOtHVenNPVlwaXwnuQ6DqOVTdhsXepXOprJ25L6UJKRLB.7lDtVKG', 'Teacher', '2024-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_request`
--

CREATE TABLE `teacher_request` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `requesting_teacher` varchar(255) DEFAULT NULL,
  `responsibility_teacher` varchar(255) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_request`
--

INSERT INTO `teacher_request` (`id`, `subject`, `grade`, `teacher_id`, `requesting_teacher`, `responsibility_teacher`, `reason`, `status`) VALUES
(21, 'Math', 3, 'tsc_001', 'Joan Wamuyu', 'Georgina Kanja', 'Going for hospital checkup', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `teacher_request`
--
ALTER TABLE `teacher_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher_request`
--
ALTER TABLE `teacher_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
