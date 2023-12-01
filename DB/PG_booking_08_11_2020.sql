-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2020 at 10:17 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pgmbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(50) NOT NULL auto_increment,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artist`
--

CREATE TABLE `tbl_artist` (
  `artist_id` int(50) NOT NULL auto_increment,
  `artist_name` varchar(50) NOT NULL,
  `artist_condact` varchar(10) NOT NULL,
  `artist_email` varchar(50) NOT NULL,
  `artist_gender` varchar(50) NOT NULL,
  `artist_dob` date NOT NULL,
  `artist_image` varchar(50) NOT NULL,
  `place_id` int(50) NOT NULL,
  `artist_username` varchar(50) NOT NULL,
  `artist_password` varchar(50) NOT NULL,
  `artist_repassword` varchar(50) NOT NULL,
  `artisttype_id` int(50) NOT NULL,
  `artist_address` varchar(50) NOT NULL,
  `artist_rate` varchar(50) NOT NULL,
  `artist_status` int(11) NOT NULL,
  PRIMARY KEY  (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_artist`
--

INSERT INTO `tbl_artist` (`artist_id`, `artist_name`, `artist_condact`, `artist_email`, `artist_gender`, `artist_dob`, `artist_image`, `place_id`, `artist_username`, `artist_password`, `artist_repassword`, `artisttype_id`, `artist_address`, `artist_rate`, `artist_status`) VALUES
(1, 'Arun CM', '1234567890', 'jeninjoy21@gmail.com', 'male', '2020-10-15', 'dwayne-johnson-11818916-1-402.jpg', 27, 'Arun', '123456789', '123456789', 9, 'pulikkatill house angamaly', '5000', 0),
(2, 'Jerry', '9876543210', 'jerry@gmail.com', 'male', '1989-06-07', 'royal-enfield-continental-gt-images.jpg', 47, 'jerry', 'jerry123', 'jerry123', 10, '123 house kannur Thalassery', '8000', 1),
(3, 'Ancy joy', '9987653210', 'ancy@gmail.com', 'female', '1994-01-17', 'images', 30, 'ancy', 'ancy1234', 'ancy1234', 8, 'puthupalli house Talappilly Thrissur', '10000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artistbook`
--

CREATE TABLE `tbl_artistbook` (
  `arbook_id` int(50) NOT NULL auto_increment,
  `artist_id` int(50) NOT NULL,
  `troup_id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artistbook_date` date NOT NULL,
  `artistbook_todate` date NOT NULL,
  `arbook_totalamt` varchar(50) NOT NULL,
  `arbook_status` int(50) NOT NULL,
  `condact` varchar(50) NOT NULL,
  `pgm_loc` varchar(50) NOT NULL,
  `arbook_paystatus` int(11) NOT NULL,
  PRIMARY KEY  (`arbook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_artistbook`
--

INSERT INTO `tbl_artistbook` (`arbook_id`, `artist_id`, `troup_id`, `user_id`, `artistbook_date`, `artistbook_todate`, `arbook_totalamt`, `arbook_status`, `condact`, `pgm_loc`, `arbook_paystatus`) VALUES
(1, 1, 1, 0, '2020-10-15', '2020-10-31', '5000', 1, '9987654321', 'Idukki Devikulam ', 1),
(2, 1, 0, 1, '2020-10-15', '2020-12-31', '5000', 0, '99876543210', 'Kannur Thazhachova', 1),
(3, 1, 2, 0, '2020-10-16', '2021-02-10', '5000', 0, '9987654321', 'malayattoor kalady', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artisttype`
--

CREATE TABLE `tbl_artisttype` (
  `artisttype_id` int(50) NOT NULL auto_increment,
  `artisttype_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`artisttype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_artisttype`
--

INSERT INTO `tbl_artisttype` (`artisttype_id`, `artisttype_name`) VALUES
(5, 'Painters'),
(6, 'Photographer'),
(7, 'Graphic Designers'),
(8, 'Singer'),
(9, 'Dancer'),
(10, 'Sand Artist');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artistwork`
--

CREATE TABLE `tbl_artistwork` (
  `artistwork_id` int(50) NOT NULL auto_increment,
  `artistwork_file` varchar(2000) NOT NULL,
  `artistwork_caption` varchar(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  PRIMARY KEY  (`artistwork_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_artistwork`
--

INSERT INTO `tbl_artistwork` (`artistwork_id`, `artistwork_file`, `artistwork_caption`, `artist_id`) VALUES
(1, 'fb.jpg', 'Royal Enfield', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `comp_id` int(50) NOT NULL auto_increment,
  `comp_date` date NOT NULL,
  `comptype_id` varchar(50) NOT NULL,
  `comp_condent` varchar(500) NOT NULL,
  `user_id` int(50) NOT NULL,
  `troop_id` int(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  `comp_status` int(50) NOT NULL,
  `comp_replay` varchar(500) NOT NULL,
  PRIMARY KEY  (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`comp_id`, `comp_date`, `comptype_id`, `comp_condent`, `user_id`, `troop_id`, `artist_id`, `comp_status`, `comp_replay`) VALUES
(1, '2020-10-15', '7', 'They are fakes\r\n', 0, 0, 1, 1, 'ok'),
(2, '2020-10-15', '6', 'They are not responding', 0, 1, 0, 1, 'ok we will fix it'),
(5, '2020-10-16', '10', 'this app is not properly working', 1, 0, 0, 1, 'ok we can fix it'),
(6, '2020-10-16', '10', 'I can,t use this app', 0, 0, 3, 0, ''),
(7, '2020-10-16', '8', 'some one is fake and hacking our account', 0, 2, 0, 0, ''),
(8, '2020-10-22', '10', 'not properly working', 1, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainttype`
--

CREATE TABLE `tbl_complainttype` (
  `comptype_id` int(50) NOT NULL auto_increment,
  `comptype_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`comptype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_complainttype`
--

INSERT INTO `tbl_complainttype` (`comptype_id`, `comptype_name`) VALUES
(6, 'About Artist'),
(7, 'About Troop'),
(8, 'About User'),
(9, 'About Admin'),
(10, 'About App');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(50) NOT NULL auto_increment,
  `contact_name` varchar(50) NOT NULL,
  `contact_number` int(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_msg` varchar(50) NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(50) NOT NULL auto_increment,
  `district_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(9, 'Thiruvananthapuram'),
(10, 'Kollam'),
(11, 'Pathanamthitta'),
(12, 'Alappuzha'),
(13, 'Kottayam'),
(14, 'Idukki'),
(15, 'Ernakulam'),
(16, 'Thrissur'),
(17, 'Palakkad'),
(18, 'Malappuram'),
(19, 'Kozhikode'),
(20, 'Wayanad'),
(21, 'Kannur'),
(22, 'Kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(50) NOT NULL auto_increment,
  `feedback_date` date NOT NULL,
  `feback_details` varchar(500) NOT NULL,
  `user_id` int(50) NOT NULL,
  `troop_id` int(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `feback_details`, `user_id`, `troop_id`, `artist_id`) VALUES
(1, '2020-10-15', 'Nice Web site', 0, 0, 1),
(2, '2020-10-15', 'super', 0, 1, 0),
(3, '2020-10-15', 'nice\r\n', 0, 0, 0),
(4, '2020-10-16', 'good', 1, 0, 0),
(5, '2020-10-16', 'good web application', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(50) NOT NULL auto_increment,
  `package_name` varchar(50) NOT NULL,
  `package_des` varchar(50) NOT NULL,
  `package_rate` int(50) NOT NULL,
  `troop_id` varchar(50) NOT NULL,
  PRIMARY KEY  (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `package_des`, `package_rate`, `troop_id`) VALUES
(1, 'package 1', ' water drum only', 2500, '1'),
(2, 'package 2', 'water drum, dj only ', 3500, '1'),
(3, 'package 3', 'water drum, dj, keythar, smoke ', 8500, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(50) NOT NULL auto_increment,
  `place_name` varchar(50) NOT NULL,
  `district_id` int(50) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(9, 'Nedumangadu', 9),
(10, 'Varkala', 9),
(11, 'Kattakada', 9),
(12, 'Thrikkadavoor', 10),
(13, 'East Kallada', 10),
(14, 'Mangad', 10),
(15, 'Kozhenchery', 11),
(16, 'Adoor', 11),
(17, 'Thiruvalla', 11),
(18, 'Cherthala', 12),
(19, 'Ambalapuzha', 12),
(20, 'Kuttanad', 12),
(21, 'Meenachil', 13),
(22, 'Vaikom', 13),
(23, 'Kanjirappally', 13),
(24, 'Udumbanchola', 14),
(25, 'Thodupuzha', 14),
(26, 'Devikulam', 14),
(27, 'Angamaly', 15),
(28, 'Aluva', 15),
(29, 'Muvattupuzha', 15),
(30, 'Talappilly', 16),
(31, 'Chavakkad', 16),
(32, 'Kodungallur', 16),
(33, 'Ottappalam', 17),
(34, 'Alathur', 17),
(35, 'Chittur', 17),
(36, 'Tirur', 18),
(37, 'Nilambur', 18),
(38, 'Ponnani', 18),
(39, 'Koyilandy', 19),
(40, 'Vadakara', 19),
(41, 'Thamarassery', 19),
(42, 'Kalpetta', 20),
(43, 'Pulpally', 20),
(44, 'Sultan Bathery', 20),
(45, 'Dharmashala', 21),
(46, 'Taliparamba', 21),
(47, 'Thalassery', 21),
(48, 'Manjeshwar', 22),
(49, 'Bekal', 22),
(50, 'Nileshwaram', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programtype`
--

CREATE TABLE `tbl_programtype` (
  `pgmtype_id` int(50) NOT NULL auto_increment,
  `pgmtype_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`pgmtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_programtype`
--

INSERT INTO `tbl_programtype` (`pgmtype_id`, `pgmtype_name`) VALUES
(8, 'Painte'),
(9, 'Singe'),
(10, 'Dance'),
(11, 'Sand Art'),
(12, 'Group Dance'),
(13, 'DJ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_troop`
--

CREATE TABLE `tbl_troop` (
  `troop_id` int(50) NOT NULL auto_increment,
  `troop_name` varchar(50) NOT NULL,
  `troop_condact` varchar(50) NOT NULL,
  `troop_email` varchar(50) NOT NULL,
  `troop_address` varchar(500) NOT NULL,
  `troop_image` varchar(50) NOT NULL,
  `troop_proof` varchar(50) NOT NULL,
  `place_id` int(50) NOT NULL,
  `troop_usname` varchar(50) NOT NULL,
  `troop_password` varchar(50) NOT NULL,
  `troop_repassword` varchar(50) NOT NULL,
  `troop_status` int(11) NOT NULL,
  PRIMARY KEY  (`troop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_troop`
--

INSERT INTO `tbl_troop` (`troop_id`, `troop_name`, `troop_condact`, `troop_email`, `troop_address`, `troop_image`, `troop_proof`, `place_id`, `troop_usname`, `troop_password`, `troop_repassword`, `troop_status`) VALUES
(1, 'Spartans Devikulam', '4567891230', 'spartans@gmail.com', 'Spartans Devikulam Idukki', 'royal-enfield-classic-logo.jpg', 'royal-enfield-classic-logo.jpg', 26, 'spartans', '456789123', '456789123', 2),
(2, 'Challengers', '9876543210', 'challangers@gmail.com', 'Challengers club (near ksrtc bus stand) angamaly\r\nekm', 'interseptor 650.jpg', 'interseptor 650.jpg', 27, 'challengersclub', '456789123', '456789123', 1),
(3, 'Angle club', '9685743210', 'angleclub@gmail.com', 'angleclub(near ksrtc bus stand) vaikom Kottyam', 'himalayan.jpg', 'himalayan.jpg', 22, 'angleclub', '456789123', '456789123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_troopbooking`
--

CREATE TABLE `tbl_troopbooking` (
  `trbook_id` int(50) NOT NULL auto_increment,
  `troop_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_todate` date NOT NULL,
  `package_id` int(50) NOT NULL,
  `pgm_location` varchar(500) NOT NULL,
  `extra` varchar(150) NOT NULL,
  `condact` varchar(50) NOT NULL,
  `pgmtype_id` int(50) NOT NULL,
  `troop_status` int(50) NOT NULL,
  `troopbook_paystatus` int(11) NOT NULL,
  PRIMARY KEY  (`trbook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_troopbooking`
--

INSERT INTO `tbl_troopbooking` (`trbook_id`, `troop_id`, `user_id`, `booking_date`, `booking_todate`, `package_id`, `pgm_location`, `extra`, `condact`, `pgmtype_id`, `troop_status`, `troopbook_paystatus`) VALUES
(1, 0, 0, '2020-10-15', '2020-10-16', 0, 'kuruppampady', 'null', '1234567890', 12, 0, 1),
(2, 1, 1, '2020-10-15', '2020-12-31', 3, 'Kannur Thazhachova', 'nothing', '999876543210', 10, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(50) NOT NULL auto_increment,
  `us_name` varchar(50) NOT NULL,
  `user_condact` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_repassword` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `us_name`, `user_condact`, `user_email`, `user_address`, `user_name`, `user_password`, `user_repassword`) VALUES
(1, 'karthikayan', '7894561230', 'amal@gmail.com', 'Magalasheyre house\r\nkannur', 'MN karthikayan', '7894561230', '7894561230');
