-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 12:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `dob`, `hobbies`, `gender`, `add_date`, `update_date`, `password`, `status`) VALUES
(2, 'Pramod', 'Shikrapur', '1979', 'traveling', 'male', NULL, NULL, 'pramod', 0),
(3, 'Lahu', 'Aambejogai', '1970', 'traveking', 'male', NULL, NULL, 'lahu', 0),
(4, 'Snehal', 'Kolhapur', '1961', 'sleeping', 'female', '2024-02-14 02:54:54', NULL, 'snehal', 0),
(5, 'Rutik', 'uttur', '1990', 'sleeping', 'male', NULL, NULL, 'rutik', 1),
(6, 'Boss', 'Solapur', '3', 'Reading,Traveling', 'male', NULL, NULL, 'boss', 0),
(7, 'Balika', 'akole', '1', 'Swimming,Reading', 'female', NULL, NULL, 'balika', 0),
(9, 'pqer', 'xcfdf', '2', 'Reading,Traveling', 'female', NULL, NULL, 'sfv', 0),
(10, 'ghi', 'aswdc', '2', 'Reading', 'male', NULL, NULL, '35465', 0),
(15, 'Jay Prakash', 'New Delhi', '09-16-2010', 'Swimming,Reading', 'male', '2024-02-20 11:44:00', NULL, 'aaaaa', 0),
(16, 'Jay Prakash', 'New Delhi', '09-16-2010', 'Swimming,Reading', 'male', '2024-02-20 12:02:39', NULL, 'sdsadas', 0),
(17, 'Jay Prakash x', 'New Delhi x', '09-16-2010', 'Swimming,Traveling', 'male', '2024-02-20 12:04:42', '2024-02-20 12:32:27', 'dsfsdf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
