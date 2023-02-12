-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 01:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_mostwanted_criminal`
--

CREATE TABLE `add_mostwanted_criminal` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_mostwanted_criminal`
--

INSERT INTO `add_mostwanted_criminal` (`ID`, `Name`, `image`) VALUES
(6, 'Dawood Ibrahim Kaskar', 'dawood.jpg'),
(7, 'Ilyas kashmiri', 'kashmiri.jpg'),
(8, 'Masood azhar', 'azhar.jpg'),
(10, 'Syed salahuddin', 'salahuddin.jpg'),
(11, 'Ritesh', 'WIN_20201205_16_19_09_Pro.jpg'),
(12, 'Ritesh', 'WIN_20201205_16_19_09_Pro.jpg'),
(13, 'demo', 'DSC_6123.JPG'),
(14, 'ewer', 'DSC_6081.JPG'),
(15, 'riteshprihar12@gmail.com', 'DSC_6093.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `add_polce_station`
--

CREATE TABLE `add_polce_station` (
  `ID` int(255) NOT NULL,
  `Police_Station_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Map` varchar(900) NOT NULL,
  `map_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_polce_station`
--

INSERT INTO `add_polce_station` (`ID`, `Police_Station_Name`, `Address`, `Phone`, `Map`, `map_photo`) VALUES
(6, 'R.P.F. Police Head Quarter Station', 'State Highway-67, West Railway Colony, Valsad, Gujarat 396001', '+9195914140XX', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14939.242254072205!2d72.9232750697754!3d20.595792400000022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c291a8ff45db%3A0xedd4207b41e46320!2sR.P.F.%20Police%20Head%20Quarter%20Station!5e0!3m2!1sen!2sin!4v1620219413257!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '4.jpg'),
(10, 'VAPI POLICE STATION', 'Road to Subway, Vapi East, Gita Nagar, Vapi, Gujarat 396191', '+912602xxxxxx', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.241945930863!2d72.90469941539588!3d20.37291181521802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce2c39d2b87d%3A0xbde6b4e6c90c2e8f!2sVAPI%20POLICE%20STATION!5e0!3m2!1sen!2sin!4v1620219676842!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '8.jpg'),
(15, 'Valsad Rural Police Station', 'Valsad Gujarat', '9978405076', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14938.024326782526!2d72.92669177799203!3d20.608218738925082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c29c2a7be451%3A0x39baa4554590e5df!2sCity%20Police%20Station!5e0!3m2!1sen!2sin!4v1620218191838!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_police_officer`
--

CREATE TABLE `add_police_officer` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `Email_Address` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_police_officer`
--

INSERT INTO `add_police_officer` (`ID`, `Name`, `City`, `Phone_Number`, `Email_Address`, `Photo`, `Designation`) VALUES
(2, 'Shri Himkar Singh', 'Narmada', '9978405076', 'sp-nr@gujarat.gov.in', 'himkar.jpg', 'CP'),
(3, 'Shri Anupam Singh Gahlaut', 'Vadodara City', '9978405299', 'cp-vad@gujarat.gov.in', 'anupam.jpg', 'CP'),
(4, 'Shri Manoj Agarwal', 'Rajkot City', '9978406297', 'cp-ra@gujarat.gov.in', 'manoj.jpg', 'CP'),
(5, 'Shri Rajendrasinh Chudasama', 'Bharuch', '9978405066', 'sp-vad@gujarat.gov.in', 'chudasama.jpg', 'SP'),
(6, 'Shri Mayur Chavda', 'Gandhinagar', '9978405070', 'sp-gr@gujarat.gov.in', 'divya.jpg', 'SP'),
(7, 'Dr. Girish Pandya', 'Navsari', '9978405075', 'sp-nv@gujarat.gov.in', 'girish.jpg', 'SP'),
(8, 'Shri Himkar Singh', 'Narmada', '9978405076', 'sp-nr@gujarat.gov.in', 'himkar.jpg', 'SP'),
(10, 'Shri Mayur Chavda', 'Gandhinagar', '9978405089', 'sp-gnr@gujarat.gov.in', 'mayur.jpg', 'SP'),
(13, 'Usha Rada', 'Mahisagar', '9978408065', 'sp-luna-mahi@gujarat.gov.in', 'usha.jpg', 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `admin_ID` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_photo` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_dob` date NOT NULL,
  `admin_post` varchar(255) NOT NULL,
  `admin_address` varchar(255) NOT NULL,
  `login_activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_ID`, `admin_name`, `admin_email`, `admin_password`, `admin_photo`, `admin_phone`, `admin_dob`, `admin_post`, `admin_address`, `login_activity`) VALUES
(1, 17935, 'Ritesh', 'admin@crimevoice.in', '12121212', '1.jpg', '7585458595', '2012-12-05', 'ACP', 'Ranakpur, Rajasthan', '2021-06-20 16:14:30'),
(2, 55450, 'Rajan', 'rajanbhai@gmail.com', '123123123', '', '9585451125', '2002-12-08', 'Assistant Commisionor Of Police ', 'Chala, Vapi', ''),
(3, 39400, 'Gopal', 'gopal@gmail.com', 'gopal123', 'admin.jpg', '7676789856', '2021-06-09', 'Assistant Commisionor Of Police ', 'Vapi', ''),
(4, 84862, 'mittal shah', 'mittal@gmail.com', 'mittal12345', 'admin.png', '9856229878', '2021-06-03', 'Assistant Commisionor Of Police ', 'Vapi', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ID` int(255) NOT NULL,
  `Police_Station_Name` varchar(255) NOT NULL,
  `crime_date` varchar(255) NOT NULL,
  `evidence` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `details` varchar(400) NOT NULL,
  `citizen_name` varchar(255) NOT NULL,
  `citizen_address` varchar(255) NOT NULL,
  `citizen_phone_no` varchar(255) NOT NULL,
  `citizen_email` varchar(255) NOT NULL,
  `suspect` varchar(255) NOT NULL,
  `complaint_id` int(255) NOT NULL,
  `session_mail` varchar(255) NOT NULL,
  `regisration_date` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ID`, `Police_Station_Name`, `crime_date`, `evidence`, `subject`, `details`, `citizen_name`, `citizen_address`, `citizen_phone_no`, `citizen_email`, `suspect`, `complaint_id`, `session_mail`, `regisration_date`, `gender`) VALUES
(1, 'City Police Station', '2021-05-18', 'analytics.png', 'Murder', 'Murder at 2 pm', 'Ritesh', 'Vapi', '9856229878', 'suthar11@gmail.com', 'Gopal', 0, '', '0000-00-00', ''),
(2, 'Pardi Police Station', '2021-05-06', 'IMG20191008182721.jpg', 'Heelo', 'sss', 'Ritesh', 'Vapi', '9856229878', 'suthar11@gmail.com', 'Gopal', 0, '', '0000-00-00', ''),
(3, 'Pardi Police Station', '2021-04-28', 'IMG20191008182721.jpg', 'Robbery', 'Robbery at 1pm', 'admin', 'Vapi,Gujarat', '9876549876', 'admin@crimevoice.in', 'Gopal', 0, '', '0000-00-00', ''),
(4, 'Pardi Police Station', '2021-05-12', 'IMG20191008182723.jpg', 'Robbery', 'ad', 'admin', 'Vapi,Gujarat', '9876549876', 'admin@crimevoice.in', 'Gopal', 0, '', '0000-00-00', ''),
(5, 'Pardi Police Station', '2021-05-14', 'classyfabric2.png', 'Robbery', 'Robbers', 'admin', 'Vapi,Gujarat', '9876549876', 'admin@crimevoice.in', 'Gopal', 1812944442, '', '0000-00-00', ''),
(6, 'Valsad Rural Police Station', '2021-12-03', 'nav.png', 'Robbery', 'Robbery from house at 4pm on 12 march 2021.', 'admin', 'Vapi,Gujarat', '9876549876', 'hhhr@gmail.com', 'Kamlesh', 500947559, 'admin@crimevoice.in', '0000-00-00', ''),
(7, 'VAPI POLICE STATION', '2021-04-30', 'classyfabric2.png', 'Robbery', 'Robbery', 'admin', 'Vapi,Gujarat', '9876549876', 'admin@crimevoice.in', 'Kamlesh', 1189435377, 'admin@crimevoice.in', '0000-00-00', ''),
(8, 'Azad Chowk Police Chowky', '2021-05-08', 'nav.png', 'Robbery', 'ss', 'admin', 'Vapi,Gujarat', '9876549876', 'admin@crimevoice.in', 'Gopal', 765258714, 'admin@crimevoice.in', '2021-05-20', ''),
(9, 'Valsad Rural Police Station', '2021-05-13', 'classyfabric1.png', 'Robbery', 'Robbery', 'Ritesh', 'Vapi', '9856229878', 'suthar11@gmail.com', 'Gopal', 1776243445, 'suthar11@gmail.com', '2021-05-21', ''),
(10, 'Chirri Police Station', '2021-05-05', 'nav.png', 'Robbery', 'AS', 'Ritesh', 'Vapi', '9856229878', 'suthar11@gmail.com', 'Kamlesh', 274507352, 'suthar11@gmail.com', '2021-05-21', ''),
(11, 'R.P.F. Police Head Quarter Station', '2021-06-18', '1.png', 'asdasd', 'sadasdsad', 'Ritesh', 'Vapi', '9856229878', 'suthar11@gmail.com', 'Gopal', 1184958923, 'suthar11@gmail.com', '2021-06-01', ''),
(12, 'Police Head Quarter, Valsad', '2021-06-05', '3.jpg', 'Murder', 'Mureder kar diya bhai ne ', 'Ritesh', 'Vapi', '9856229878', 'suthar11@gmail.com', 'Don Bhai', 1011897973, 'suthar11@gmail.com', '2021-06-01', 'Male'),
(13, 'Chirri Police Station', '2021-06-03', 'admin.jpg', 'Murder', 'Murder', 'Rajan', 'Vapi', '8585659564', 'rajanbhai@gmail.com', 'Gopal', 1676761613, 'rajanbhai@gmail.com', '2021-06-14', 'Male'),
(14, 'Chirri Police Station', '2021-06-10', 'admin.png', 'Robbery', 'dsaas', 'mittal shah', 'Vapi', '7676789856', 'mittal@gmail.com', 'Kamlesh', 962775814, 'mittal@gmail.com', '2021-06-15', 'FeMale'),
(15, 'Chirri Police Station', '2021-06-09', 'background_login.jpg', 'Murder', 'as', 'mittal shah', 'Vapi', '7676789856', 'mittal@gmail.com', 'Gopal', 849788824, 'mittal@gmail.com', '2021-06-15', 'Male'),
(16, 'Chirri Police Station', '2021-06-26', 'admin.jpg', 'Robbery', 'Robbery', 'Gopal', 'Chiri,Vapi', '858585454', 'gopal@yahoo.com', 'Gopal', 1076043722, 'gopal@yahoo.com', '2021-06-15', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`name`) VALUES
('asdasdas'),
('esfd');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_complaints`
--

CREATE TABLE `emergency_complaints` (
  `ID` int(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile_no` varchar(11) NOT NULL,
  `DOO` date NOT NULL,
  `POO` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `complaint_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_complaints`
--

INSERT INTO `emergency_complaints` (`ID`, `First_name`, `Last_name`, `Gender`, `DOB`, `Mobile_no`, `DOO`, `POO`, `Description`, `complaint_id`) VALUES
(46, 'Kamlesh', 'Mali', 'Male', '2021-06-02', '8989786787', '2021-06-15', 'Vapi', 'Murder at 2pm', '2323232'),
(47, 'Gopal', 'Gopal', 'Male', '2021-06-16', '8989786787', '2021-06-18', 'Valsad', 'Robbery', '3456543'),
(48, 'Tanish', 'Soni', 'Male', '2021-06-02', '6675661623', '2021-06-25', 'Vapi', 'Robbery', '87665654'),
(49, 'Ritesh', 'Suthar', 'Female', '2021-06-03', '7568720071', '2021-06-09', 'Sadri', 'Theft', '1746056618'),
(50, 'Ritesh', 'Suthar', 'Male', '2021-06-02', '7568720071', '2021-06-02', 'Mumbai', 'Murder at 2pm', '933471111');

-- --------------------------------------------------------

--
-- Table structure for table `missing_person`
--

CREATE TABLE `missing_person` (
  `ID` int(255) NOT NULL,
  `person_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Age` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `missing_date` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `relative_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `father_phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing_person`
--

INSERT INTO `missing_person` (`ID`, `person_id`, `first_name`, `last_name`, `Age`, `photo`, `address`, `missing_date`, `father_name`, `relative_name`, `phone`, `father_phone_number`) VALUES
(4, '1397631538', 'Rajan ', 'Shah', '2000-05-25', 'missing.png', 'Chhiri, Vapi, Gujarat 396191', '2021-05-07', 'Raj Kishore', 'Dinesh', '9898989898', '7878987867'),
(6, '1031817566', 'Manish', 'chouhan', '1999-06-07', 'missing.png', 'Pune', '2021-05-07', 'jaydeep chouhan', 'jay', '8989786787', '6787900454'),
(7, '1897130496', 'ggg', ',jn,m', '2021-05-19', 'neha.png', 'thgvbm', '2021-05-17', 'jhmbm', 'jhgbm ', '9898989898', '7878987867'),
(8, '908558047', '', '', '0000-00-00', 'WIN_20201205_16_19_09_Pro.jpg', '', '0000-00-00', '', '', '', ''),
(9, '495659806', '', '', '0000-00-00', 'WIN_20201205_16_19_09_Pro.jpg', '', '0000-00-00', '', '', '', ''),
(10, '1172435965', '', '', '0000-00-00', 'DSC_6123.JPG', '', '0000-00-00', '', '', '', ''),
(11, '1747759276', '', '', '0000-00-00', 'DSC_6081.JPG', '', '0000-00-00', '', '', '', ''),
(12, '311816905', '', '', '0000-00-00', 'DSC_6093.JPG', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsticker`
--

CREATE TABLE `newsticker` (
  `ID` int(255) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsticker`
--

INSERT INTO `newsticker` (`ID`, `news`) VALUES
(1, 'Press Note Regarding Covid-19.'),
(2, 'Valsad Police Wants that All peoples Stay Safe.'),
(3, 'Crime Branch Arrests 7 for Remdesivir Black Marketing.'),
(4, 'Kidnapped builder rescued from Ratnagiri.'),
(5, 'Valsad Cops Asked to Find Kin of Unclaimed Covid Victims.'),
(6, 'Two Caught Selling 18 Vials of Remdesivir Injection Illegally.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone_number` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_confirm_password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone_number`, `user_email`, `user_password`, `user_confirm_password`, `gender`, `DOB`, `address`, `aadhar`, `photo`, `state`) VALUES
(1, 'admin', '9876549876', 'admin@crimevoice.in', 'admin12345', 'admin12345', 'Male', '2021-05-12', 'Vapi,Gujarat', '123123123123', 'IMG20191008182723.jpg', 'Gujarat'),
(2, 'Ritesh', '9856229878', 'suthar11@gmail.com', 'admin1234', 'admin1234', 'Male', '1999-05-18', 'Vapi', '232323232323', 'IMG20191007111605.jpg', 'Gujarat'),
(3, 'Rajan', '8585659564', 'rajanbhai@gmail.com', 'rajan12345', 'rajan12345', 'Male', '2021-06-10', 'Vapi', '5325325353262', 'admin.jpg', 'Gujarat'),
(4, 'mittal shah', '7676789856', 'mittal@gmail.com', 'mittal12345', 'mittal12345', 'Male', '2021-06-10', 'Vapi', '12545457845', 'admin.png', 'Gujarat'),
(5, 'riteshprihar12@gmail.com', '7676789856', 'riteshprihar12@gmail.com', '22222222', '22222222', '', '0000-00-00', '', '', '', ''),
(6, 'Ritesh', '7676789856', 'deepak.suthar@taxgenie.in', 'aaaaaaaa', 'aaaaaaaa', '', '0000-00-00', '', '', '', ''),
(7, 'Gopal', '858585454', 'gopal@yahoo.com', 'gopal12345', 'gopal12345', 'Male', '2021-06-16', 'Chiri,Vapi', '8545754758', 'admin.jpg', 'Gujarat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_mostwanted_criminal`
--
ALTER TABLE `add_mostwanted_criminal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_polce_station`
--
ALTER TABLE `add_polce_station`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_police_officer`
--
ALTER TABLE `add_police_officer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emergency_complaints`
--
ALTER TABLE `emergency_complaints`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `missing_person`
--
ALTER TABLE `missing_person`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newsticker`
--
ALTER TABLE `newsticker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_mostwanted_criminal`
--
ALTER TABLE `add_mostwanted_criminal`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_polce_station`
--
ALTER TABLE `add_polce_station`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `add_police_officer`
--
ALTER TABLE `add_police_officer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `emergency_complaints`
--
ALTER TABLE `emergency_complaints`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `missing_person`
--
ALTER TABLE `missing_person`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsticker`
--
ALTER TABLE `newsticker`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
