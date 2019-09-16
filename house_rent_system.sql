-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 09:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rent_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area`, `city`) VALUES
('', 'Chittagong'),
('Agrabad', 'Chittagong'),
('Hazaribag', 'Chittagong'),
('Panithar', 'Chittagong'),
('Station Road', 'Chittagong'),
('Dhanmondi', 'Dhaka'),
('Gulshan', 'Dhaka'),
('Mirpur', 'Dhaka'),
('Mohakhali', 'Dhaka'),
('Shahabag', 'Dhaka'),
('Uttara', 'Dhaka'),
('Airport', 'Sylhet'),
('Amborkhana', 'Sylhet'),
('Bagbari', 'Sylhet'),
('Chowhatta', 'Sylhet'),
('Lamabazar', 'Sylhet'),
('Londoni road', 'Sylhet'),
('Medical', 'Sylhet'),
('Mirabazar', 'Sylhet'),
('Mirboxtulla', 'Sylhet'),
('Modenamarket', 'Sylhet'),
('Raynogor', 'Sylhet'),
('Shahieidgha', 'Sylhet'),
('Shibgonj', 'Sylhet'),
('Subidbazar', 'Sylhet'),
('Telagor', 'Sylhet'),
('Upposhohor', 'Sylhet'),
('Zindabazar', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `availabilty`
--

CREATE TABLE `availabilty` (
  `id` int(10) NOT NULL,
  `house_name` varchar(20) NOT NULL,
  `post_date` date DEFAULT NULL,
  `avilable_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city`) VALUES
('Barisal'),
('Chittagong'),
('Comilla'),
('Dhaka'),
('Gazipur'),
('Khulna'),
('Mymensingh	'),
('Narayanganj	'),
('Rajshahi'),
('Rangpur'),
('Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `house_catagory`
--

CREATE TABLE `house_catagory` (
  `house_catagory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_catagory`
--

INSERT INTO `house_catagory` (`house_catagory`) VALUES
('Building'),
('Duplex'),
('Flat/Apartment'),
('Tinshed');

-- --------------------------------------------------------

--
-- Table structure for table `house_info`
--

CREATE TABLE `house_info` (
  `id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `house_name` varchar(20) NOT NULL,
  `bedroom` varchar(4) DEFAULT NULL,
  `bathroom` varchar(4) DEFAULT NULL,
  `balcony` varchar(4) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `floor` varchar(10) DEFAULT NULL,
  `utility` varchar(50) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `rent` varchar(20) DEFAULT NULL,
  `house_type` varchar(20) NOT NULL,
  `house_catagory` varchar(20) NOT NULL,
  `house_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_info`
--

INSERT INTO `house_info` (`id`, `user_name`, `house_name`, `bedroom`, `bathroom`, `balcony`, `city`, `area`, `floor`, `utility`, `size`, `rent`, `house_type`, `house_catagory`, `house_image`) VALUES
(2, 'taslim', 'digonto villa', '4', '3', '3', 'Sylhet', 'Londoni road', '2nd floor', 'Include Gas,Electricity_bill', '1200 sft', '15000 TK', 'Full_house', 'Building', 'photo1.jpg'),
(3, 'Jabed', 'shanti villa', '5', '3', '4', 'Sylhet', 'Mirabazar', '3rd floor', 'Include Gas,Electricity and Water_bill,', '1500 sft', '25000 TK', 'Full_house', 'Building', 'photo2.jpg'),
(4, 'mustak', 'mina house', '1', '1', '0', 'Sylhet', 'Modenamarket', '1st floor', 'None', '260 sft', '5000 TK', 'Room_mate', 'Tinshed', 'photo3.jpg'),
(5, 'taslim', 'taslimvilla', '2', '2', '2', 'Sylhet', 'Amborkhana', '1', 'Include Electricity_bill', '1200', '6000TK', 'Full_house', 'Building', 'photo5.jpg'),
(6, 'animesh', 'sharma_house', '3', '4', '2', 'Sylhet', 'Lamabazar', '2nd', 'Include Gas,Electricity and Water_bill,', '1200', '16000TK', 'Full_house', 'Building', 'photo4.jpg'),
(7, 'bablu', 'chowdhury_villa', '3', '3', '2', 'Sylhet', 'Medical', '1st', 'Include Gas_bill', '1500', '18000TK', 'Full_house', 'Building', 'photo6.jpg'),
(8, 'rony', 'roy_house', '3', '2', '2', 'Dhaka', 'Dhanmondi', '2nd', 'Include Water_bill', '1800', '25000 TK', 'Full_house', 'Building', 'photo7.jpg'),
(9, 'titu', 'mukta_villa', '2', '2', '', 'Chittagong', 'Agrabad', '1st', 'Include Gas,Electricity_bill', '800', '12000 TK', 'Sublet', 'Tinshed', 'photo8.jpg'),
(10, 'sahni', 'sutto_nir', '3', '2', '2', 'Dhaka', 'Gulshan', '2nd', 'Include Gas,Electricity and Water_bill,', '1500', '25000 TK', 'Room_mate', 'Flat/Apartment', 'photo9.jpg'),
(11, 'abed', 'rowsonvilla', '3', '2', NULL, 'Sylhet', 'Zindabazar', '1', 'Include Gas,Electricity and Water_bill,', '1300', '10000TK', 'Full_house', 'Flat/Apartment', 'photo10.jpg'),
(13, 'tanimahmed', 'asdffsafa', '12', '12', '12', 'Sylhet', 'Amborkhana', '2nd', 'Include Gas,Electricity and Water_bill,', '12', '12222 tk', 'Room', 'Building', 'page1_img1.jpg'),
(14, 'tanimahmed', 'Taslima_villa', '4', '4', '4', 'Sylhet', 'Amborkhana', '2nd', 'Include Gas,Electricity_bill', '411', '12000TK', 'Sublet', 'Building', 'page5_img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `house_type`
--

CREATE TABLE `house_type` (
  `house_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_type`
--

INSERT INTO `house_type` (`house_type`) VALUES
('Full_house'),
('Hostel'),
('Room'),
('Room_mate'),
('Sublet');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `owner_id` int(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass_word` varchar(20) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`owner_id`, `userid`, `user_name`, `email`, `pass_word`, `phone`, `gender`, `address`) VALUES
(4, '', 'abed', 'abed@gmail.com', '', '01611235684', 'Male', '34,Modenamarket,Sylhet'),
(8, '', 'abed2', 'abb@gmail.com', '', '33333', 'male', 'kkkkkk'),
(10, '', 'animesh', 'anisyl@yahoo.com', '', '01711464506', 'Male', '01,Monepuri Rajbari,Sylhet'),
(13, '', 'azad', 'azad@gmail.com', '', '01712254825', 'Male', '24,Munshipara,Sylhet'),
(12, '', 'bablu', 'bablu@gmail.com', '', '01712254825', 'Male', '123,Azadi,Mirboxtulla,Sylhet'),
(11, '', 'don', 'ahmed@gmail.com', '', '01723349272', 'Male', '23,Ramerdighirpar,Sylhet'),
(18, '', 'forhad', 'forhad@gmail.com', '', '01811454132', 'Male', '17,Korerpara,Sylhet'),
(3, '', 'Jabed', 'jabed@gmail.com', '', '01824568596', 'Male', '128,Shibgonj,Sylhet'),
(1, '', 'mustak', 'mustak@gmail.com', '', '017113525648', 'Male', '23,Raynogor,Sylhet'),
(15, '', 'rony', 'rony@yahoo.com', '', '01811453645', 'Male', '23/A,Modenamarket,Sylhet'),
(5, '', 'rukaia', 'ruks@gmail.com', '', '01724365241', 'Female', '52,Medical,Sylhet'),
(17, '', 'sahni', 'sahni@gmail.com', '', '01674218238', 'Female', '23/B,Chowkidhiki,Sylhet'),
(9, '', 'sanjoy', 'sanjoy@gmail.com', '', '01711234506', 'Male', '25,Monepuri Rajbari,Sylhet'),
(2, '', 'taslim', 'taslim@gmail.com', '', '01811456536', 'Male', '12,Arnob,Lamabazar,Sylhet'),
(14, '', 'titu', 'titu@gmail.com', '', '01717300100', 'Male', '27,Soptodipa,Mirabazar,Sylhet'),
(16, '', 'tonmoy', 'tonmoy@gmail.com', '', '01621433131', 'Male', '17/B,Housingstate,Sylhet'),
(20, '11', '111', '111@gmail.com', 'MTI=', '11', 'm', 'm'),
(19, 'subro82', 'subro', 'subro@gamil.com', '123456', '01711041150', 'male', 'sylhet'),
(22, 'tanim55', 'tanimahmed', 'tanimahmed@gmail.com', 'MTIzNA==', '01749219681', 'male', 'amberkhana'),
(21, 'taslima77', 'taslimabegum', 'taslima@gmail.com', 'MTIzNA==', '1234', 'male', 'akalia');

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

CREATE TABLE `renters` (
  `renterid` varchar(10) NOT NULL,
  `renter_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nid` varchar(40) DEFAULT NULL,
  `email_id` varchar(60) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `Present_address` varchar(100) DEFAULT NULL,
  `Permanent_address` varchar(100) DEFAULT NULL,
  `contact` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent_house_details`
--

CREATE TABLE `rent_house_details` (
  `house_name` varchar(20) NOT NULL,
  `rent_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent_house_details`
--

INSERT INTO `rent_house_details` (`house_name`, `rent_status`) VALUES
('digonto villa', 'Rented'),
('mina house', 'Pre_Processing'),
('shanti villa', 'On_Rent');

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `utility` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utility`
--

INSERT INTO `utility` (`utility`) VALUES
('Include Electricity_bill'),
('Include Gas,Electricity and Water_bill,'),
('Include Gas,Electricity_bill'),
('Include Gas_bill'),
('Include Water_bill'),
('None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`city`,`area`),
  ADD KEY `area` (`area`,`city`);

--
-- Indexes for table `availabilty`
--
ALTER TABLE `availabilty`
  ADD PRIMARY KEY (`id`,`house_name`),
  ADD KEY `house_name` (`house_name`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city`);

--
-- Indexes for table `house_catagory`
--
ALTER TABLE `house_catagory`
  ADD PRIMARY KEY (`house_catagory`);

--
-- Indexes for table `house_info`
--
ALTER TABLE `house_info`
  ADD PRIMARY KEY (`id`,`user_name`,`house_name`,`city`,`area`,`utility`,`house_type`,`house_catagory`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `city` (`city`),
  ADD KEY `area` (`area`),
  ADD KEY `utility` (`utility`),
  ADD KEY `house_type` (`house_type`),
  ADD KEY `house_catagory` (`house_catagory`),
  ADD KEY `house_name` (`house_name`);

--
-- Indexes for table `house_type`
--
ALTER TABLE `house_type`
  ADD PRIMARY KEY (`house_type`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`userid`,`user_name`),
  ADD UNIQUE KEY `owner_id` (`owner_id`),
  ADD UNIQUE KEY `owner_id_2` (`owner_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `owner_id_3` (`owner_id`,`user_name`,`email`);

--
-- Indexes for table `renters`
--
ALTER TABLE `renters`
  ADD PRIMARY KEY (`renterid`);

--
-- Indexes for table `rent_house_details`
--
ALTER TABLE `rent_house_details`
  ADD PRIMARY KEY (`house_name`,`rent_status`);

--
-- Indexes for table `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`utility`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house_info`
--
ALTER TABLE `house_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`city`);

--
-- Constraints for table `availabilty`
--
ALTER TABLE `availabilty`
  ADD CONSTRAINT `availabilty_ibfk_1` FOREIGN KEY (`id`) REFERENCES `house_info` (`id`),
  ADD CONSTRAINT `availabilty_ibfk_2` FOREIGN KEY (`house_name`) REFERENCES `house_info` (`house_name`);

--
-- Constraints for table `house_info`
--
ALTER TABLE `house_info`
  ADD CONSTRAINT `house_info_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `owner_info` (`user_name`),
  ADD CONSTRAINT `house_info_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`city`),
  ADD CONSTRAINT `house_info_ibfk_3` FOREIGN KEY (`area`) REFERENCES `area` (`area`),
  ADD CONSTRAINT `house_info_ibfk_4` FOREIGN KEY (`utility`) REFERENCES `utility` (`utility`),
  ADD CONSTRAINT `house_info_ibfk_5` FOREIGN KEY (`house_type`) REFERENCES `house_type` (`house_type`),
  ADD CONSTRAINT `house_info_ibfk_6` FOREIGN KEY (`house_catagory`) REFERENCES `house_catagory` (`house_catagory`);

--
-- Constraints for table `rent_house_details`
--
ALTER TABLE `rent_house_details`
  ADD CONSTRAINT `rent_house_details_ibfk_1` FOREIGN KEY (`house_name`) REFERENCES `house_info` (`house_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
