-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 07:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pnumber` varchar(10) DEFAULT NULL,
  `feedback` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `pnumber`, `feedback`) VALUES
('abraham', 'enyoone3@gmail.com`', '0803333333', 'i am coming'),
('abraham', 'enyoone3@gmail.com`', '0803333333', 'i am coming'),
('abraham', 'enyoone3@gmail.com`', '0803333333', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_regcode` varchar(20) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `spec` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` text NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_regcode`, `first`, `last`, `email`, `password`, `spec`, `gender`, `age`, `phone`, `address`) VALUES
(2, 'DOC98440', 'Mark', 'Zuckerberg', 'markzuckerberg@gmail.com', '12345678', 'Dentist', 'Male', 70, '09091234567', 'Kogi'),
(3, 'DOC30393', 'Wole', 'Soyinka', 'wolesoyinka@gmail.com', '12345678', 'Optician', 'Female', 62, '07000000000', 'Omala'),
(5, 'DOC77789', 'Emmanuel', 'Enna', 'emmy@gmail.com', 'emmanuel', 'Surgeon', 'Male', 200, '08103228734', 'Lafia'),
(6, 'DOC11111', 'Abseejp', 'Abseejp', 'absee@gmail.com', 'absee', 'Surgeon', 'Male', 20, '30', 'jos'),
(7, 'vivi1000', 'Vivivan', 'Ahmed', 'vivianahmed8@gmail.com', '1997', 'Gynealcologist', 'Female', 100, '08103228734', 'Mashoka, Felele'),
(8, 'doc222', 'Blessing', 'Osadare', 'blessing@gmail.com', 'bleessing@gmail.com', 'Optician', 'Female', 22, '08163815935', '30n ogbomosho');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` int(11) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `treatment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_name`, `treatment`) VALUES
(1, 'paracetamol', 'Treatment of headache, body pain etc'),
(2, 'Tetracycline', 'Treatment of purging system, running stomach, curing of wound.'),
(3, 'Panadol', 'Treatment of headache, body pain etc.'),
(4, 'Amalar', 'Treating of malaria, fever etc'),
(5, 'Ibruprofen', 'Treatment of all kinds of body pain, back ache, headache, building body calcium.'),
(6, 'Ibucap', 'Pains of the neck and ears'),
(8, 'Chloroquin', 'Treating of body aches of all sort.'),
(9, 'anointing oil', 'for spiritual growth and sensitivity'),
(10, 'mustard seed', 'mental disorder'),
(11, 'bitter kola', 'used for treatment of insomnia'),
(12, 'garri', 'treatment of TDB hunger');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nurse_id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `first`, `last`, `email`, `password`, `age`, `gender`, `phone`, `address`) VALUES
(1, 'badmus', 'memunat', 'badmusmemunat@gmail.com', '12345678', 20, 'Female', '08034229879', 'Ejinrin road, Ijebu Ode.'),
(2, 'Isreal ', 'akowe', 'isreal@gmail.com', 'isreal@gmail.comm', 23, 'Male', '08034229879', 'Ogomboso');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `age` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `r_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first`, `last`, `email`, `password`, `age`, `gender`, `phone`, `address`, `r_code`) VALUES
(2, 'Sule', 'Olanrewaju', 'suleolanrewaju@yahoo.com', 'password', '35', 'Male', '08028977141', 'Iyana Ipaja', 'Z2n3kWifoi'),
(3, 'Kasim', 'Femi', 'freesoul4sure@gmail.com', '12345678', '37', 'Male', '08034356079', 'Kemfat road, Ajah', 'y2cAE5GksU'),
(14, 'Rebecca', 'Musa', 'Rebecca@gmail.com', 'Rebecca', '50', 'Female', '08060206662', 'Omala', 'aaxYT2SNwHS'),
(15, 'abraham', 'musa', 'enyoone3@gmail.com', 'abraham', '30', 'Male', '08103228734', 'jos', 'gQ0z4JUVmc2'),
(16, 'Ezekiel', 'Olugbami', 'ezekiel@gmail.com', 'ezekiel@gmail.com', '23', 'Male', '08060206662', 'Ogomboshoooooooooooooooo', 'MYCn8amM0Kd');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pharm_id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharm_id`, `first`, `last`, `email`, `password`, `age`, `gender`, `phone`, `address`) VALUES
(1, 'Ejiro', 'Kasim', 'kasimodunayo2016@gmail.com', '12345678', 55, 'Female', '08124368092', 'Adeola road, Ijebu Ode'),
(2, 'jerry', 'akoh', 'jerry@gmail.com', 'jerry@gmail.com', 22, 'male', '08022334455', 'lokoja');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `drug` text NOT NULL,
  `usage_desc` text NOT NULL,
  `patient_id` text NOT NULL,
  `doctor_id` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_sent` date NOT NULL,
  `approval` varchar(50) NOT NULL,
  `approved_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `complaint`, `drug`, `usage_desc`, `patient_id`, `doctor_id`, `status`, `date_sent`, `approval`, `approved_date`) VALUES
(2, 'i want to see Abraham Enyoone Musa', 'Chloroquin', 'go and pray okay', '14', '6', 'Assigned', '2017-08-29', 'Approved', '2017-08-29'),
(3, '', '', '', '14', '6', 'Assigned', '2017-08-29', 'Approved', '2017-09-07'),
(4, 'i have back pain', '', '', '15', '7', 'Assigned', '2017-08-29', 'Approved', '2017-09-07'),
(12, 'Hello Doctor, i am having some increased pulse rate', 'anointing oil', 'take it 100 times a day', '15', '7', 'Assigned', '2017-09-21', 'Approved', '2017-11-23'),
(13, 'i want to see the doctor.....................', 'anointing oil', 'take it 100 times a day', '15', '7', 'Assigned', '2017-11-22', 'Approved', '2017-11-23'),
(14, 'i want to know why i sleep too much', 'anointing oil', 'take it 100 times a day', '15', '7', 'Assigned', '2017-11-23', 'Approved', '2017-11-23'),
(15, 'My Doctor Please i used to dream and see revelations. what capsules should i take', 'mustard seed', 'eat 10 carton daily', '16', '5', 'Assigned', '2017-11-24', 'Approved', '2017-11-24'),
(16, 'answer me fast', 'mustard seed', 'eat 10 carton daily', '16', '5', 'Assigned', '2017-11-24', 'Approved', '2017-11-24'),
(17, 'please help me solution', 'mustard seed', 'eat 10 carton daily', '16', '5', 'Assigned', '2017-11-24', 'Approved', '2017-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharm_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `pharm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
