-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 08:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampath_pethikada`
--

-- --------------------------------------------------------

--
-- Table structure for table `abroad_population`
--

CREATE TABLE `abroad_population` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_job` int(11) NOT NULL,
  `male_job` int(11) NOT NULL,
  `female_edu` int(11) NOT NULL,
  `male_edu` int(11) NOT NULL,
  `female_otherfor` int(11) NOT NULL,
  `male_otherfor` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abroad_population`
--

INSERT INTO `abroad_population` (`id`, `userid`, `year`, `ds`, `female_job`, `male_job`, `female_edu`, `male_edu`, `female_otherfor`, `male_otherfor`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `admission_universities`
--

CREATE TABLE `admission_universities` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `twothousand_nineteen_female` int(11) NOT NULL,
  `twothousand_nineteen_male` int(11) NOT NULL,
  `twothousand_twenty_female` int(11) NOT NULL,
  `twothousand_twenty_male` int(11) NOT NULL,
  `twothousand_twentyone_female` int(11) NOT NULL,
  `twothousand_twentyone_male` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_universities`
--

INSERT INTO `admission_universities` (`id`, `userid`, `year`, `ds`, `university`, `twothousand_nineteen_female`, `twothousand_nineteen_male`, `twothousand_twenty_female`, `twothousand_twenty_male`, `twothousand_twentyone_female`, `twothousand_twentyone_male`, `gnda`) VALUES
(1, 108, 2022, 'matale', '0', 0, 0, 0, 0, 0, 0, ''),
(2, 108, 2022, 'matale', '0', 2, 3, 4, 5, 6, 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `adult_population_education`
--

CREATE TABLE `adult_population_education` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_notedu` int(11) NOT NULL,
  `male_notedu` int(11) NOT NULL,
  `female_one_five` int(11) NOT NULL,
  `male_one_five` int(11) NOT NULL,
  `female_six_ten` int(11) NOT NULL,
  `male_six_ten` int(11) NOT NULL,
  `female_ol` int(11) NOT NULL,
  `male_ol` int(11) NOT NULL,
  `female_al` int(11) NOT NULL,
  `male_al` int(11) NOT NULL,
  `female_degree` int(11) NOT NULL,
  `male_degree` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adult_population_education`
--

INSERT INTO `adult_population_education` (`id`, `userid`, `year`, `ds`, `female_notedu`, `male_notedu`, `female_one_five`, `male_one_five`, `female_six_ten`, `male_six_ten`, `female_ol`, `male_ol`, `female_al`, `male_al`, `female_degree`, `male_degree`, `gnda`) VALUES
(1, 108, 2022, 'matale', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `agricultural_land`
--

CREATE TABLE `agricultural_land` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `total_land` int(11) NOT NULL,
  `gov_land` int(11) NOT NULL,
  `paddy_land` int(11) NOT NULL,
  `tea` int(11) NOT NULL,
  `coconut` int(11) NOT NULL,
  `rubber` int(11) NOT NULL,
  `peper` int(11) NOT NULL,
  `cashews` int(11) NOT NULL,
  `mixed_cultivation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agricultural_land`
--

INSERT INTO `agricultural_land` (`id`, `userid`, `year`, `ds`, `gnda`, `total_land`, `gov_land`, `paddy_land`, `tea`, `coconut`, `rubber`, `peper`, `cashews`, `mixed_cultivation`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `agricultural_reservoirs`
--

CREATE TABLE `agricultural_reservoirs` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `water_capacity` int(11) NOT NULL,
  `holding_area` int(11) NOT NULL,
  `surface_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agricultural_reservoirs`
--

INSERT INTO `agricultural_reservoirs` (`id`, `userid`, `year`, `ds`, `gnda`, `water_capacity`, `holding_area`, `surface_size`) VALUES
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `animal_statistics`
--

CREATE TABLE `animal_statistics` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `cow` int(11) NOT NULL,
  `buffaloe` int(11) NOT NULL,
  `goat` int(11) NOT NULL,
  `pig` int(11) NOT NULL,
  `chicken` int(11) NOT NULL,
  `duck` int(11) NOT NULL,
  `turkey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_statistics`
--

INSERT INTO `animal_statistics` (`id`, `userid`, `year`, `ds`, `gnda`, `cow`, `buffaloe`, `goat`, `pig`, `chicken`, `duck`, `turkey`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `area_jurisdiction`
--

CREATE TABLE `area_jurisdiction` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `local_authorities` int(11) NOT NULL,
  `electorates` int(11) NOT NULL,
  `birth_certificates` int(11) NOT NULL,
  `police_div` int(11) NOT NULL,
  `agraian_services` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_jurisdiction`
--

INSERT INTO `area_jurisdiction` (`id`, `userid`, `year`, `ds`, `gnda`, `local_authorities`, `electorates`, `birth_certificates`, `police_div`, `agraian_services`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ayurvedic`
--

CREATE TABLE `ayurvedic` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `ayurvedic_center` int(11) NOT NULL,
  `ayurvedic_doctors` int(11) NOT NULL,
  `other_staff` int(11) NOT NULL,
  `patients_treated` int(11) NOT NULL,
  `wards` int(11) NOT NULL,
  `bed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayurvedic`
--

INSERT INTO `ayurvedic` (`id`, `userid`, `year`, `ds`, `gnda`, `ayurvedic_center`, `ayurvedic_doctors`, `other_staff`, `patients_treated`, `wards`, `bed`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `userid`, `year`, `ds`, `gnda`, `name`, `addres`, `contact`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', '0', 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buddhist_temples`
--

CREATE TABLE `buddhist_temples` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `addres` varchar(500) NOT NULL,
  `contact` int(11) NOT NULL,
  `dhamma_school` varchar(500) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buddhist_temples`
--

INSERT INTO `buddhist_temples` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `addres`, `contact`, `dhamma_school`, `no_students`, `no_teachers`) VALUES
(6, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6),
(7, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `catholic_churches`
--

CREATE TABLE `catholic_churches` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(500) NOT NULL,
  `gnd` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `dhamma_school` varchar(200) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catholic_churches`
--

INSERT INTO `catholic_churches` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `addres`, `contact`, `dhamma_school`, `no_students`, `no_teachers`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6),
(2, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `community_source`
--

CREATE TABLE `community_source` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `community_source` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `registration_no` varchar(100) NOT NULL,
  `registration_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_source`
--

INSERT INTO `community_source` (`id`, `userid`, `year`, `ds`, `gnda`, `community_source`, `name`, `addres`, `registration`, `registration_no`, `registration_year`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', '0', '0', '0', '0', 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', '0', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `covid_patient`
--

CREATE TABLE `covid_patient` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `patient_female` int(11) NOT NULL,
  `patient_male` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_patient`
--

INSERT INTO `covid_patient` (`id`, `userid`, `year`, `ds`, `gnda`, `patient_female`, `patient_male`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `child_abuse` int(11) NOT NULL,
  `drugs` int(11) NOT NULL,
  `domestic_violence` int(11) NOT NULL,
  `murder` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`id`, `userid`, `year`, `ds`, `gnda`, `child_abuse`, `drugs`, `domestic_violence`, `murder`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cultivation_fruit`
--

CREATE TABLE `cultivation_fruit` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `fruit` varchar(200) NOT NULL,
  `area` int(11) NOT NULL,
  `harvest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultivation_fruit`
--

INSERT INTO `cultivation_fruit` (`id`, `userid`, `year`, `ds`, `gnda`, `fruit`, `area`, `harvest`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cultivation_paddy`
--

CREATE TABLE `cultivation_paddy` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `crops` varchar(200) NOT NULL,
  `area_yala` int(11) NOT NULL,
  `area_maha` int(11) NOT NULL,
  `harvest_yala` int(11) NOT NULL,
  `harvest_maha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultivation_paddy`
--

INSERT INTO `cultivation_paddy` (`id`, `userid`, `year`, `ds`, `gnda`, `crops`, `area_yala`, `area_maha`, `harvest_yala`, `harvest_maha`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cultivation_spices`
--

CREATE TABLE `cultivation_spices` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `crops` varchar(200) NOT NULL,
  `area` int(11) NOT NULL,
  `harvest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultivation_spices`
--

INSERT INTO `cultivation_spices` (`id`, `userid`, `year`, `ds`, `gnda`, `crops`, `area`, `harvest`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '1', 1, 1),
(2, 109, 2022, 'Matale', 'Malwatta', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cultivation_vegetables`
--

CREATE TABLE `cultivation_vegetables` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `crops` varchar(200) NOT NULL,
  `area_yala` int(11) NOT NULL,
  `area_maha` int(11) NOT NULL,
  `harvest_yala` int(11) NOT NULL,
  `harvest_maha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultivation_vegetables`
--

INSERT INTO `cultivation_vegetables` (`id`, `userid`, `year`, `ds`, `gnda`, `crops`, `area_yala`, `area_maha`, `harvest_yala`, `harvest_maha`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cultural_arts_institute`
--

CREATE TABLE `cultural_arts_institute` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnd` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `caurses` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultural_arts_institute`
--

INSERT INTO `cultural_arts_institute` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `addres`, `contact`, `caurses`) VALUES
(3, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4'),
(4, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4');

-- --------------------------------------------------------

--
-- Table structure for table `dengue`
--

CREATE TABLE `dengue` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `malaria` int(11) NOT NULL,
  `dengue` int(11) NOT NULL,
  `leprosy` int(11) NOT NULL,
  `barawa` int(11) NOT NULL,
  `tuberculosis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dengue`
--

INSERT INTO `dengue` (`id`, `userid`, `year`, `ds`, `gnda`, `malaria`, `dengue`, `leprosy`, `barawa`, `tuberculosis`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dependency_rate`
--

CREATE TABLE `dependency_rate` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `child` int(11) NOT NULL,
  `aging` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dependency_rate`
--

INSERT INTO `dependency_rate` (`id`, `userid`, `year`, `ds`, `child`, `aging`, `gnda`) VALUES
(5, 108, 2022, 'matale', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `disabilities_people`
--

CREATE TABLE `disabilities_people` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `visually_impaired` int(11) NOT NULL,
  `hearing_impaired` int(11) NOT NULL,
  `speech_impaired` int(11) NOT NULL,
  `because_mental` int(11) NOT NULL,
  `movement_disorders` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disabilities_people`
--

INSERT INTO `disabilities_people` (`id`, `userid`, `year`, `ds`, `gnda`, `visually_impaired`, `hearing_impaired`, `speech_impaired`, `because_mental`, `movement_disorders`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `divsec`
--

CREATE TABLE `divsec` (
  `indexno` int(3) NOT NULL,
  `divno` int(2) DEFAULT NULL,
  `divna` varchar(31) DEFAULT NULL,
  `district` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divsec`
--

INSERT INTO `divsec` (`indexno`, `divno`, `divna`, `district`) VALUES
(231, 1, 'ගලේවෙල', 'matale'),
(232, 2, 'දඹුල්ල', 'matale'),
(233, 3, 'නාඋල', 'matale'),
(234, 4, 'පල්ලෙපොල', 'matale'),
(235, 5, 'යටවත්ත', 'matale'),
(236, 6, 'මාතලේ', 'matale'),
(237, 7, 'අඹන්ගඟ කොරළේ', 'matale'),
(238, 8, 'ලග්ගල - පල්ලෙගම', 'matale'),
(239, 9, 'විල්ගමුව', 'matale'),
(240, 10, 'රත්තොට', 'matale'),
(241, 11, 'උකුවෙල', 'matale');

-- --------------------------------------------------------

--
-- Table structure for table `emp_major_sectors`
--

CREATE TABLE `emp_major_sectors` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `agriculture` int(11) NOT NULL,
  `industrial` int(11) NOT NULL,
  `services` int(11) NOT NULL,
  `tot_services_division` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_major_sectors`
--

INSERT INTO `emp_major_sectors` (`id`, `userid`, `year`, `ds`, `agriculture`, `industrial`, `services`, `tot_services_division`, `gnda`) VALUES
(2, 108, 2022, 'matale', 1, 2, 3, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `extent_cultivated_land`
--

CREATE TABLE `extent_cultivated_land` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `extent_cultivated_land` int(11) NOT NULL,
  `great_irrigation` int(11) NOT NULL,
  `minor_irrigation` int(11) NOT NULL,
  `rain_water` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extent_cultivated_land`
--

INSERT INTO `extent_cultivated_land` (`id`, `userid`, `year`, `ds`, `gnda`, `extent_cultivated_land`, `great_irrigation`, `minor_irrigation`, `rain_water`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fishing_industry`
--

CREATE TABLE `fishing_industry` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `major_reservoirs` int(11) NOT NULL,
  `central_reservoirs` int(11) NOT NULL,
  `small_reservoirs` int(11) NOT NULL,
  `seasonal_reservoirs` int(11) NOT NULL,
  `ponds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fishing_industry`
--

INSERT INTO `fishing_industry` (`id`, `userid`, `year`, `ds`, `gnda`, `major_reservoirs`, `central_reservoirs`, `small_reservoirs`, `seasonal_reservoirs`, `ponds`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`id`, `userid`, `year`, `ds`, `gnda`, `name`, `addres`, `contact`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', '0', '0'),
(2, 109, 2022, 'Matale', 'Malwatta', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `government_aid_recipients`
--

CREATE TABLE `government_aid_recipients` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `tuberculosis` int(11) NOT NULL,
  `cancer` int(11) NOT NULL,
  `thalassemia` int(11) NOT NULL,
  `leprosy` int(11) NOT NULL,
  `kidney` int(11) NOT NULL,
  `public_assistance` int(11) NOT NULL,
  `adult_beneficiary` int(11) NOT NULL,
  `disabilities_people` int(11) NOT NULL,
  `female_basic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `government_aid_recipients`
--

INSERT INTO `government_aid_recipients` (`id`, `userid`, `year`, `ds`, `gnda`, `tuberculosis`, `cancer`, `thalassemia`, `leprosy`, `kidney`, `public_assistance`, `adult_beneficiary`, `disabilities_people`, `female_basic`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gov_hospitals`
--

CREATE TABLE `gov_hospitals` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `hospital_name` varchar(500) NOT NULL,
  `no_patients` int(11) NOT NULL,
  `ward` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `doctors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gov_hospitals`
--

INSERT INTO `gov_hospitals` (`id`, `userid`, `year`, `ds`, `gnda`, `hospital_name`, `no_patients`, `ward`, `bed`, `doctors`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hindu_religious_shrines`
--

CREATE TABLE `hindu_religious_shrines` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `dhamma_school` varchar(100) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hindu_religious_shrines`
--

INSERT INTO `hindu_religious_shrines` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `addres`, `contact`, `dhamma_school`, `no_students`, `no_teachers`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6),
(2, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `house_ownership`
--

CREATE TABLE `house_ownership` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `freelancer` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `other_units` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_ownership`
--

INSERT INTO `house_ownership` (`id`, `userid`, `year`, `ds`, `freelancer`, `tax`, `rent`, `other_units`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `housing_unit`
--

CREATE TABLE `housing_unit` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `individual_houses` int(11) NOT NULL,
  `pair_houses` int(11) NOT NULL,
  `shanty_houses` int(11) NOT NULL,
  `appropriate_houses` int(11) NOT NULL,
  `apartments` int(11) NOT NULL,
  `other_houses` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housing_unit`
--

INSERT INTO `housing_unit` (`id`, `userid`, `year`, `ds`, `individual_houses`, `pair_houses`, `shanty_houses`, `appropriate_houses`, `apartments`, `other_houses`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `islamic_religious_centers`
--

CREATE TABLE `islamic_religious_centers` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnd` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `dhamma_school` varchar(200) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `islamic_religious_centers`
--

INSERT INTO `islamic_religious_centers` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `addres`, `contact`, `dhamma_school`, `no_students`, `no_teachers`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6),
(2, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `land_ownership`
--

CREATE TABLE `land_ownership` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `total_land` int(11) NOT NULL,
  `gov_land` int(11) NOT NULL,
  `private_land` int(11) NOT NULL,
  `other_land` int(11) NOT NULL,
  `reserve_forests` int(11) NOT NULL,
  `water_reserve` int(11) NOT NULL,
  `lands_submerged` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `lands_owned_lrc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_ownership`
--

INSERT INTO `land_ownership` (`id`, `userid`, `year`, `ds`, `gnda`, `total_land`, `gov_land`, `private_land`, `other_land`, `reserve_forests`, `water_reserve`, `lands_submerged`, `other`, `lands_owned_lrc`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `land_ownership_lots`
--

CREATE TABLE `land_ownership_lots` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` int(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `three_quarters_familiy` int(11) NOT NULL,
  `three_quarters_half_familiy` int(11) NOT NULL,
  `half_one_familiy` int(11) NOT NULL,
  `one_five_familiy` int(11) NOT NULL,
  `five_ten_familiy` int(11) NOT NULL,
  `ten_familiy` int(11) NOT NULL,
  `no_land_familiy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_ownership_lots`
--

INSERT INTO `land_ownership_lots` (`id`, `userid`, `year`, `ds`, `gnda`, `three_quarters_familiy`, `three_quarters_half_familiy`, `half_one_familiy`, `one_five_familiy`, `five_ten_familiy`, `ten_familiy`, `no_land_familiy`) VALUES
(1, 109, 2022, 0, 'Malwatta', 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 0, 'Malwatta', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `land_ownership_mud`
--

CREATE TABLE `land_ownership_mud` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `three_quarters_familiy` int(11) NOT NULL,
  `three_quarters_half_familiy` int(11) NOT NULL,
  `half_one_familiy` int(11) NOT NULL,
  `one_five_familiy` int(11) NOT NULL,
  `five_familiy` int(11) NOT NULL,
  `no_land_familiy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_ownership_mud`
--

INSERT INTO `land_ownership_mud` (`id`, `userid`, `year`, `ds`, `gnda`, `three_quarters_familiy`, `three_quarters_half_familiy`, `half_one_familiy`, `one_five_familiy`, `five_familiy`, `no_land_familiy`) VALUES
(10, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(11, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `large_scale_factories`
--

CREATE TABLE `large_scale_factories` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `factory_name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `product` varchar(200) NOT NULL,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `large_scale_factories`
--

INSERT INTO `large_scale_factories` (`id`, `userid`, `year`, `ds`, `gnda`, `factory_name`, `addres`, `contact`, `product`, `female`, `male`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', '00', 0, '0', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', '00', 0, '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `tpno` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `userid`, `year`, `ds`, `gnd`, `addres`, `tpno`, `gnda`) VALUES
(3, 109, 2022, 'Matale', '1', '2', 11, 'Malwatta'),
(4, 109, 2022, 'Matale', '1', '2', 11, 'Malwatta'),
(5, 109, 2019, 'Matale', '', '0', 0, 'Malwatta'),
(6, 109, 2019, 'Matale', '', '0', 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `live_births`
--

CREATE TABLE `live_births` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `live_births` int(11) NOT NULL,
  `inanimate_births` int(11) NOT NULL,
  `low_birth_weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_births`
--

INSERT INTO `live_births` (`id`, `userid`, `year`, `ds`, `gnda`, `live_births`, `inanimate_births`, `low_birth_weight`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matale`
--

CREATE TABLE `matale` (
  `gncode` int(3) NOT NULL,
  `gnname` varchar(25) DEFAULT NULL,
  `divsec` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matale`
--

INSERT INTO `matale` (`gncode`, `gnname`, `divsec`) VALUES
(1, 'වැටකොලුවැව', 1),
(2, 'දේවහූව ජනපදය 2', 1),
(3, 'මකුල්ගස්වැව', 1),
(4, 'ඉබ්බන්කටුව', 1),
(5, 'තලකිරියාගම', 1),
(6, 'තෙන්නකෝන්පුර', 1),
(7, 'දඬුබැඳිරුප්ප', 1),
(8, 'දේවහූව ජනපදය 1', 1),
(9, 'බුලනවැව', 1),
(10, 'පහල දිග්ගල', 1),
(11, 'මීවලපතහ', 1),
(12, 'පහලවැව', 1),
(13, 'යටිගල්පොත්ත', 1),
(14, 'කුඹුක්ගොල්ල', 1),
(15, 'කොස්ගහහින්න', 1),
(16, 'රාලලෑ රොටවැව', 1),
(17, 'මොරගොල්ල', 1),
(18, 'පිබිදුනගම', 1),
(19, 'අලුත්වැව', 1),
(20, 'බඔරගස්වැව', 1),
(21, 'බේලියකන්ද', 1),
(22, 'සිල්වත්ගම', 1),
(23, 'වලස්වැව', 1),
(24, 'ගලපාමුල', 1),
(25, 'දමුණුමුල්ල', 1),
(26, 'පට්ටිවෙල', 1),
(27, 'නිලගම', 1),
(28, 'හොම්බාව', 1),
(29, 'පාලු හොම්බාව', 1),
(30, 'දඹවටවන', 1),
(31, 'පුවක්පිටිය', 1),
(32, 'වේරගලවත්ත', 1),
(33, 'නබඩගහවත්ත', 1),
(34, 'ගලේවෙල නගරය', 1),
(35, 'පත්කොලගොල්ල', 1),
(36, 'කොස්පොත', 1),
(37, 'රංවැඩියාව', 1),
(38, 'පහළ බම්බාව', 1),
(39, 'දඬුයාය', 1),
(40, 'දඹගොල්ල', 1),
(41, 'ඉහල බම්බාව', 1),
(42, 'සියඹලාගහවෙල', 1),
(43, 'පිහිල්ලයාය', 1),
(44, 'මැදබැද්ද උතුර', 1),
(45, 'දිවුල්ගස්කොටුව', 1),
(46, 'හත්අඩුක්කුව', 1),
(47, 'බෙළිගමුව', 1),
(48, 'මැදබැද්ද දකුණ', 1),
(49, 'වහකොට්ටේ', 1),
(50, 'ගල්ගොඩයාය', 1),
(51, 'පලාපත්වල', 1),
(52, 'දැඹව', 1),
(53, 'එලමල්පොත', 1),
(54, 'යටිවැහැර', 1),
(55, 'ලේනාවල', 1),
(56, 'හැවනේවෙල', 1),
(57, 'වෑගොඩපොල', 1),
(58, 'කැඳන්ගමුව', 1),
(59, 'මාදිපොල', 1),
(60, 'සියඹලාවැව', 2),
(61, 'අවුඩංගාව', 2),
(62, 'ගෙඩිගස්වලාන', 2),
(63, 'පිදුරංගල', 2),
(64, 'තල්කොටේ', 2),
(65, 'දිගම්පතහ', 2),
(66, 'ඉනාමළුව', 2),
(67, 'නාගලවැව', 2),
(68, 'පොතාන', 2),
(69, 'කිඹිස්ස', 2),
(70, 'එගොඩවැව', 2),
(71, 'පළුටාව', 2),
(72, 'සීගිරිය', 2),
(73, 'මයිලත්තාව', 2),
(74, 'පොල්අත්තාව', 2),
(75, 'නිකවටවන', 2),
(76, 'කුඹුක්කඳන්වල', 2),
(77, 'බෙල්ලනේඔය', 2),
(78, 'රත්මල්කටුව', 2),
(79, 'වැලිහේන', 2),
(80, 'ඇටවරාහේන', 2),
(81, 'පල්ලේගම', 2),
(82, 'බුලාගල', 2),
(83, 'පැල්වෙහෙර', 2),
(84, 'කණ්ඩලම', 2),
(85, 'පහළ ඇරෑවුල', 2),
(86, 'ඉහල ඇරෑවුල', 2),
(87, 'වෙලංගොල්ල', 2),
(88, 'වෑවලවැව', 2),
(89, 'යක්කුරාගල උතුර', 2),
(90, 'විල්හත', 2),
(91, 'අතුපාරයාය', 2),
(92, 'පහලවැව', 2),
(93, 'දඹුල්ල නගරය', 2),
(94, 'දඹුළුගම', 2),
(95, 'හළුඅපුල්ලනවැව', 2),
(96, 'පොහොරන්වැව', 2),
(97, 'යාපාගම', 2),
(98, 'රත්මල්ගහඇළ', 2),
(99, 'යක්කුරාගල දකුණ', 2),
(100, 'කළුන්දෑව අලුත්ගම', 2),
(101, 'අගුණවැල්පැලැස්ස', 2),
(102, 'කලෝගහඇල', 2),
(103, 'තිත්තවැල්ගොල්ල', 2),
(104, 'මොරගොල්ලෑව', 2),
(105, 'කපුවත්ත', 2),
(106, 'කිරලගොල්ල', 2),
(107, 'වවුල්අඹේ', 2),
(108, 'ඇඹුල්අඹේ', 2),
(109, 'පුවක්අත්තාවල', 2),
(110, 'කළුන්දෑව පරණගම', 2),
(111, 'වල්ගම්වැව', 2),
(112, 'කිරලැස්ස', 2),
(113, 'පන්නම්පිටිය', 2),
(114, 'වැලමිටියාව', 2),
(115, 'ඇතාබැඳිවැව', 2),
(116, 'ලෙනදොර උතුර', 2),
(117, 'ලෙනදොර දකුණ', 2),
(118, 'නායාකුඹුර', 2),
(119, 'උස්සත්තෑව', 3),
(120, 'නිකුල', 3),
(121, 'සේරුදන්ඩාපොල', 3),
(122, 'හාඩුව', 3),
(123, 'බඹරගහවත්ත', 3),
(124, 'දඹගොල්ල', 3),
(125, 'හැළඹගහවත්ත', 3),
(126, 'පුබ්බිලිය', 3),
(127, 'මාරාගමුව', 3),
(128, 'හාඩුවෙල', 3),
(129, 'දොඩම්අත්තාවල', 3),
(130, 'කරවිලහේන', 3),
(131, 'බොබැල්ල', 3),
(132, 'බිබිල', 3),
(133, 'මුරුතෝළුව', 3),
(134, 'මේල්පිටිය', 3),
(135, 'වැවැත්තෑව', 3),
(136, 'පෙනලබොඩ', 3),
(137, 'නාඋල', 3),
(138, 'මීගහ ඇල', 3),
(139, 'බෝවතැන්න වත්ත', 3),
(140, 'කුඹියන්ගහ ඇල', 3),
(141, 'මිල්ලගහමුල තැන්න', 3),
(142, 'කෝන්ගහවෙල', 3),
(143, 'රජාවෙල', 3),
(144, 'ගංඉමයාය', 3),
(145, 'මොරගහමඩ', 3),
(146, 'පිළිහුඬුගොල්ල පහළගම', 3),
(147, 'පිළිහුඬුගොල්ල ඉහලගම', 3),
(148, 'අරංගල', 3),
(149, 'හබරගහමඩ', 3),
(150, 'ඇල්හේන', 3),
(151, 'දීයන්කඩුව', 3),
(152, 'අලුගොල්ල', 3),
(153, 'නාලන්ද', 3),
(154, 'වම්බටුයාය', 3),
(155, 'මීගොල්ල', 3),
(156, 'උඩුදෙණිය', 3),
(157, 'හපුගස්යාය', 3),
(158, 'ළිහිණිපිටිය', 3),
(159, 'සේනාගම', 3),
(160, 'ආඳාවල', 3),
(161, 'ඕපල්ගල', 3),
(162, 'අඹන', 3),
(163, 'මොරගොල්ල', 3),
(164, 'ගල්බොඩ', 3),
(165, 'ජානකගම', 4),
(166, 'නිලන්නෝරුව ජනපදය', 4),
(167, 'අලුත්ගම', 4),
(168, 'දෙමදඔය', 4),
(169, 'මනන්වත්ත', 4),
(170, 'නිලන්නෝරුව', 4),
(171, 'තලකිරියාව', 4),
(172, 'කිරිඔරුව', 4),
(173, 'කොස්ගොල්ල', 4),
(174, 'නාගහපොළ', 4),
(175, 'බොමේරුව', 4),
(176, 'කොබ්බෑවැහැර', 4),
(177, 'මිල්ලවාන පහළගම', 4),
(178, 'මිල්ලවාන මැදගම', 4),
(179, 'කන්දෙවත්ත', 4),
(180, 'මහයායවත්ත', 4),
(181, 'මැදලන්ද', 4),
(182, 'වල්මොරුව', 4),
(183, 'මොරගස්පිටිය', 4),
(184, 'අකුරම්බොඩ', 4),
(185, 'දෙවරම්මුල්ල', 4),
(186, 'මිල්ලවාන ඉහළගම', 4),
(187, 'අම්බොක්ක', 4),
(188, 'මානින්ගමුව බටහිර', 4),
(189, 'මානින්ගමුව නැගෙනහිර', 4),
(190, 'කොස්වත්ත', 4),
(191, 'එකමුතුගම', 4),
(192, 'අම්බොකුදෙන', 4),
(193, 'කොහොලන්වෙල', 4),
(194, 'උදුරම්පැලැස්ස', 4),
(195, 'ඇහැලේපොල', 4),
(196, 'පල්ලේපොල උතුර', 4),
(197, 'මොණරුවිල', 4),
(198, 'ගලහිටියාගම', 4),
(199, 'රුසිගම ඉහළගම', 4),
(200, 'රුසිගම පහළගම', 4),
(201, 'පල්ලේපොල දකුණ', 4),
(202, 'කිනිගම', 4),
(203, 'පල්දෙණිය', 4),
(204, 'දොඩම්ගස්යාය', 4),
(205, 'ආරියගම', 4),
(206, 'පොල්වත්ත', 4),
(207, 'තැඹිළිදෙණිය උතුර', 4),
(208, 'දිඹුල්ගමුව', 4),
(209, 'උඩගම බටහිර', 5),
(210, 'සැලගම', 5),
(211, 'සැලගම නැගෙනහිර', 5),
(212, 'තැඹිලිදෙණිය', 5),
(213, 'උතුරු මාතලේ', 5),
(214, 'කවුඩුපැලැල්ල', 5),
(215, 'මහවෙල', 5),
(216, 'මහවෙල බටහිර', 5),
(217, 'දෙල්ගොල්ල', 5),
(218, 'ගලගම', 5),
(219, 'නාගොල්ල', 5),
(220, 'උඩගම', 5),
(221, 'උරුලෑවත්ත', 5),
(222, 'යටවත්ත', 5),
(223, 'මැදියාපොල', 5),
(224, 'නිකගොල්ල', 5),
(225, 'නිකගොල්ල උතුර', 5),
(226, 'දික්කුඹුර බටහිර', 5),
(227, 'රතලවැව', 5),
(228, 'දික්කුඹුර', 5),
(229, 'වත්තේගෙදර', 5),
(230, 'ගලලියද්ද', 5),
(231, 'මුරුතවත්ත', 5),
(232, 'දීවිල්ල දකුණ', 5),
(233, 'දීවිල්ල', 5),
(234, 'ඩන්ගන් පෙදෙස', 5),
(235, 'ආලෝකගම', 5),
(236, 'වල්පොල', 5),
(237, 'මාලිගාතැන්න', 5),
(238, 'අළුත්වත්ත', 5),
(239, 'අඹන්පොල', 5),
(240, 'ලක්ෂහේන', 5),
(241, 'දීවිල්ල උතුර', 5),
(242, 'ගම්මුල්ල', 5),
(243, 'මොට්ටුවෙල', 5),
(244, 'ඉඩංගම', 5),
(245, 'උඩස්ගිරිය', 5),
(246, 'ඇතිපල්ලාවල', 5),
(247, 'අළුත්ගම උතුර', 5),
(248, 'අළුත්ගම', 5),
(249, 'පමුණුව', 5),
(250, 'වාලවෙල', 5),
(251, 'උණවේරුව', 5),
(252, 'මඩදෙනිය', 5),
(253, 'මාතලාපිටිය', 5),
(254, 'මාතලාපිටිය දකුණ', 5),
(255, 'රත්නින්ද', 5),
(256, 'අස්ගිරි දොරකුඹුර', 5),
(257, 'අස්ගිරි දොරකුඹුර නැගෙනහිර', 5),
(258, 'පොල්වත්ත', 5),
(259, 'දුල්ලැව', 5),
(260, 'දුල්ලෑව නැගෙනහිර', 5),
(261, 'තල්ගහගොඩ', 5),
(262, 'දළුවෙල', 5),
(263, 'ඇතිපොල', 5),
(264, 'ඇතිපොල බටහිර', 5),
(265, 'නාරංගමුව', 6),
(266, 'මඩවල උල්පත', 6),
(267, 'තල්ගස්යාය', 6),
(268, 'මඩවල', 6),
(269, 'රජ්ජම්මන', 6),
(270, 'මොරගහමඩ', 6),
(271, 'හතමුණගාල', 6),
(272, 'අංකන්ද', 6),
(273, 'පුවක්පිටිය', 6),
(274, 'වල්ලිවෙල', 6),
(275, 'ගල්වඩුකුඹුර', 6),
(276, 'දොඹවෙල', 6),
(277, 'කවටයාමුණ', 6),
(278, 'ඊරියගොල්ල', 6),
(279, 'ඉඹුලන්දණ්ඩ', 6),
(280, 'ගොලහැන්වත්ත', 6),
(281, 'පරණ දොඹවෙල', 6),
(282, 'ඇල්ලේපොල', 6),
(283, 'පලාපත්වල', 6),
(284, 'කොට්ටේගොඩ', 6),
(285, 'ඕවලපොල්වත්ත', 6),
(286, 'මකුල්ගහරුප්ප', 6),
(287, 'උඩුගම', 6),
(288, 'කිරිගල්පොත්ත', 6),
(289, 'දුන්කොලවත්ත', 6),
(290, 'දොරකුඹුර', 6),
(291, 'බීරිදෙවල', 6),
(292, 'අලු විහාරේ', 6),
(293, 'දික්කිරිය', 6),
(294, 'පාරාවත්ත', 6),
(295, 'කළුදෑවල', 6),
(296, 'මන්දණ්ඩාවෙල', 6),
(297, 'බෝගහකොටුව', 6),
(298, 'හරස්ගම', 6),
(299, 'කන්දේගෙදර', 6),
(300, 'මල්වත්ත', 6),
(301, 'විහාර පාර', 6),
(302, 'මුස්ලිම් නගරය', 6),
(303, 'ඔය පහල', 6),
(304, 'ගොංගාවෙල', 6),
(305, 'සිංහල නගරය', 6),
(306, 'දොඩම්දෙණිය', 6),
(307, 'හුලංගමුව දකුණ', 6),
(308, 'හුලංගමුව උතුර', 6),
(309, 'දියබුබුල', 6),
(310, 'මාළිගාතැන්න', 6),
(311, 'නාගොල්ල', 6),
(312, 'පඬිවිට', 6),
(313, 'පඬිවිට වෙලගම', 6),
(314, 'කොටුවේගෙදර උතුර', 6),
(315, 'කුඹියන්ගොඩ', 6),
(316, 'කොටුවේගෙදර දකුණ', 6),
(317, 'කුඹල්ඔළුව', 7),
(318, 'ගම්මඩුව', 7),
(319, 'කළුගල්තැන්න', 7),
(320, 'නාගුලියද්ද', 7),
(321, 'කොස්ගොල්ල', 7),
(322, 'ඉඹුල්ගොල්ල', 7),
(323, 'රංමුතුගම', 7),
(324, 'රයිතලාව', 7),
(325, 'තිබ්බටුකනත', 7),
(326, 'පල්ලේ අස්වැද්දුම', 7),
(327, 'පල්ලේතැන්න', 7),
(328, 'පුස්සැල්ල', 7),
(329, 'සිරංගහවත්ත', 7),
(330, 'කවුඩාගම්මන', 7),
(331, 'නාරංගොල්ල', 7),
(332, 'හුණුකැටේ', 7),
(333, 'මැටිහක්ක', 7),
(334, 'අළුත්වෙල', 7),
(335, 'ක්ලෝඩා', 7),
(336, 'ගුරුබැබිල', 7),
(337, 'මාඔය', 8),
(338, 'කන්දේපිටවල', 8),
(339, 'දේවාලදෙණිය', 8),
(340, 'කළුගඟ', 8),
(341, 'අකරහැඩිය', 8),
(342, 'හත්තොට අමුණ', 8),
(343, 'දාස්ගිරිය', 8),
(344, 'මොරතැන්න', 8),
(345, 'වැල්ලේවල', 8),
(346, 'වැලිවරණාගොල්ල', 8),
(347, 'ලේල්ඔය', 8),
(348, 'පොත්තටවෙල', 8),
(349, 'දම්මන්තැන්න', 8),
(350, 'ගඟල පුවක්පිටිය', 8),
(351, 'දිවුල්ගස් පතන', 8),
(352, 'පිටවල', 8),
(353, 'කහගල', 8),
(354, 'ඉළුක්කුඹුර', 8),
(355, 'මහලකොටුව', 8),
(356, 'ගඟහේන්වල', 8),
(357, 'කරඳමුල්ල', 8),
(358, 'ගෝනවල', 8),
(359, 'ලග්ගල පල්ලේගම', 8),
(360, 'මිණිරංකැටිය', 8),
(361, 'රාවණගම', 8),
(362, 'ගල්ගෙදවල', 8),
(363, 'ගුරුවෙල', 8),
(364, 'කිවුලේවාඩිය', 8),
(365, 'හල්මිණිය', 8),
(366, 'ඉමාඩුව', 8),
(367, 'රඹුක්ඔළුව', 8),
(368, 'මැද ඇළ', 8),
(369, 'රත්නින්ද', 8),
(370, 'ඇටන්වල', 8),
(371, 'රණමුරේගම', 8),
(372, 'නාරංගමුව', 8),
(373, 'ලකේගල', 8),
(374, 'කුඹුක්ඔය', 9),
(375, 'තුන්හිරියාවැව', 9),
(376, 'පලුපිටිය', 9),
(377, 'රත්තොටයාය', 9),
(378, 'දුණුවිලපිටිය', 9),
(379, 'මැදකන්ද', 9),
(380, 'අලිවංගුව', 9),
(381, 'විහාරගම', 9),
(382, 'හඳුන්ගමුව', 9),
(383, 'ටොප්වලපිටිය', 9),
(384, 'ගැඹුරුඔය', 9),
(385, 'කුඹුකන්දන', 9),
(386, 'ලේඩියංගල', 9),
(387, 'කරව්ගහවැව', 9),
(388, 'රදුන්නේවැව', 9),
(389, 'මාරක', 9),
(390, 'මල්ගම්මන', 9),
(391, 'බෝගහවැව', 9),
(392, 'අලියාවල', 9),
(393, 'වෙහෙරගල', 9),
(394, 'හිඹිළියාකඩ', 9),
(395, 'හෙට්ටිපොල', 9),
(396, 'නාමිණිඔය', 9),
(397, 'දේවගිරිය', 9),
(398, 'පිදුරුඅල්ල', 9),
(399, 'ගුරුවෙලයාය', 9),
(400, 'නාමිණිගම', 9),
(401, 'පේරකනත්ත', 9),
(402, 'විල්ගමුව', 9),
(403, 'වනරව', 9),
(404, 'බත්ගම්පල', 9),
(405, 'නාගොල්ල', 9),
(406, 'මොරගහඋල්පත', 9),
(407, 'නුගගොල්ල', 9),
(408, 'මීවාඔබේ', 9),
(409, '80 යාය', 9),
(410, 'සෝනුත්ත', 9),
(411, 'උඩුවෙල්වල', 9),
(412, 'සුළුගුණේ', 9),
(413, 'ඉකිරිගොල්ල', 10),
(414, 'පහල ඕවල', 10),
(415, 'ඉහල ඕවල', 10),
(416, 'කයිකාවල', 10),
(417, 'නිකවැල්ල', 10),
(418, 'කුරුවාව', 10),
(419, 'රත්තොට', 10),
(420, 'බෝධිකොටුව', 10),
(421, 'දංකන්ද', 10),
(422, 'කිරිමැටිය', 10),
(423, 'පොල්වත්තකන්ද', 10),
(424, 'දඔගොල්ල', 10),
(425, 'මැදවත්ත', 10),
(426, 'වෙරළුගස්තැන්න', 10),
(427, 'මඩකුඹුර', 10),
(428, 'මාඋස්සාගොල්ල', 10),
(429, 'වනරානිය', 10),
(430, 'ලෝන්විල්', 10),
(431, 'මරදුරාවෙළ', 10),
(432, 'පල්ලේගම', 10),
(433, 'කොස්වාන උතුර', 10),
(434, 'පල්ලේවේරගම', 10),
(435, 'විහාරගම', 10),
(436, 'කයිනැක', 10),
(437, 'උඩවේරගම', 10),
(438, 'මැද වේරගම', 10),
(439, 'කොස්වාන දකුණ', 10),
(440, '‍බෝගම්බර', 10),
(441, 'ගලේකොළුව', 10),
(442, 'වෙලන්ගහවත්ත', 10),
(443, 'හොරගොල්ල', 10),
(444, 'බඹරකිරිඇල්ල', 10),
(445, 'අලකොලමඩ', 10),
(446, 'උඩගම', 10),
(447, 'පිටකන්ද', 10),
(448, 'ගන්සරපොල', 10),
(449, 'එපිටමුල්ල', 10),
(450, 'වැටස්යාය', 10),
(451, 'ගොඩපොල', 10),
(452, 'උල්පතපිටිය', 10),
(453, 'බණ්ඩාරපොල', 10),
(454, 'මුවන්දෙනිය', 10),
(455, 'පල්ලේයාය', 10),
(456, 'නෙළුවාකන්ද', 10),
(457, 'පුංචිසෙළුවාකන්ද', 10),
(458, 'තඹලගල', 10),
(459, 'කන්දේනුවර බටහිර', 10),
(460, 'කන්දේනුවර නැගෙනහිර', 10),
(461, 'අල්වත්ත', 10),
(462, 'වරාපිටිය', 10),
(463, 'දොඹගොඩ', 10),
(464, 'පහළ හපුවිද', 10),
(465, 'උඩහපුවිද', 10),
(466, 'හඟරන්කන්ද', 10),
(467, 'ගලඋඩහේන', 11),
(468, 'මකුලේමඩ', 11),
(469, 'පතිංගොල්ල', 11),
(470, 'වදේමඩ', 11),
(471, 'වත්තේගෙදර', 11),
(472, 'වටගොඩ', 11),
(473, 'පල්ලේකුඹුර', 11),
(474, 'කටුඅත්තාමඩ', 11),
(475, 'පන්වත්ත', 11),
(476, 'අලවතුවල', 11),
(477, 'හොරගහපිටිය', 11),
(478, 'ඕවිලිකන්ද', 11),
(479, 'කිරිමැටියාව', 11),
(480, 'තැන්න', 11),
(481, 'මුවගල', 11),
(482, 'ඕවිල්ල', 11),
(483, 'එනසල්මඩ', 11),
(484, 'තිබ්බටුවාව', 11),
(485, 'දොඹගස්දෙණිය', 11),
(486, 'කැන්දගොල්ල', 11),
(487, 'කොහොඹිලිවෙල', 11),
(488, 'වාරියපොල වත්ත', 11),
(489, 'වාරියපොල', 11),
(490, 'පනන්තඩිය', 11),
(491, 'නවරත්නගොඩ', 11),
(492, 'ඊරියගොල්ල', 11),
(493, 'කටුදෙණිය', 11),
(494, 'ඇල්වල', 11),
(495, 'පහලවෙල', 11),
(496, 'දෙහිපිටිය', 11),
(497, 'පුරිජ්ජල', 11),
(498, 'උඩුපිහිල්ල', 11),
(499, 'හලංගොඩ', 11),
(500, 'නාගහතැන්න', 11),
(501, 'වරකාමුර', 11),
(502, 'මිදෙනිය', 11),
(503, 'නාගොල්ල', 11),
(504, 'තවලංකොය', 11),
(505, 'දුඹුකොල', 11),
(506, 'උකුවෙල', 11),
(507, 'උඩුපිටිය', 11),
(508, 'කළල්පිටිය', 11),
(509, 'බළකඩුව', 11),
(510, 'බෝවත්ත', 11),
(511, 'මානාබොඩ', 11),
(512, 'පරගහවෙල', 11),
(513, 'උඩතැන්න', 11),
(514, 'හුණුකැටවල', 11),
(515, 'ලෑලිඅඹේ', 11),
(516, 'ඇල්කඩුව වත්ත', 11),
(517, 'ඇල්කඩුව', 11),
(518, 'උඩංගමුව', 11),
(519, 'කැන්දගොල්ලාමඩ', 11),
(520, 'වැහිගල', 11),
(521, 'රත්වත්ත', 11),
(522, 'වැලිගල', 11),
(523, 'කුරිවෙළ', 11),
(524, 'මාබේරිය', 11),
(525, 'මාරුකොන', 11),
(526, 'ගුරුළවල දකුණ', 11),
(527, 'ගුරුළවෙල උතුර', 11),
(528, 'නුගපිටිය', 11),
(529, 'කන්දේමඩ', 11),
(530, 'උල්පාතපිටිය', 11),
(531, 'රයිතලාවෙල', 11),
(532, 'කඩුවෙල', 11),
(533, 'පූජාගොඩ', 11),
(534, 'පහළ වැහිගල', 11),
(535, 'තාලිංගාමඩ', 11),
(536, 'හුන්නස්ගිරියවත්ත', 11),
(537, 'කරගහහින්න', 11),
(538, 'ඉඹුල්පිටිය', 11),
(539, 'රංගම', 11);

-- --------------------------------------------------------

--
-- Table structure for table `materials_used_houses`
--

CREATE TABLE `materials_used_houses` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `durable_house` int(11) NOT NULL,
  `non_durable_house` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials_used_houses`
--

INSERT INTO `materials_used_houses` (`id`, `userid`, `year`, `ds`, `durable_house`, `non_durable_house`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `material_used_roof`
--

CREATE TABLE `material_used_roof` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `durable_roof` int(11) NOT NULL,
  `non_durable_roof` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_used_roof`
--

INSERT INTO `material_used_roof` (`id`, `userid`, `year`, `ds`, `durable_roof`, `non_durable_roof`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `maternal_death`
--

CREATE TABLE `maternal_death` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `medical_officer` int(11) NOT NULL,
  `maternal_death` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maternal_death`
--

INSERT INTO `maternal_death` (`id`, `userid`, `year`, `ds`, `gnda`, `medical_officer`, `maternal_death`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `milk_egg`
--

CREATE TABLE `milk_egg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `no_cow` int(11) NOT NULL,
  `milk_ltr_a` int(11) NOT NULL,
  `no_buffaloe` int(11) NOT NULL,
  `milk_ltr_b` int(11) NOT NULL,
  `egg_chicken` int(11) NOT NULL,
  `product_egg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_egg`
--

INSERT INTO `milk_egg` (`id`, `userid`, `year`, `ds`, `gnda`, `no_cow`, `milk_ltr_a`, `no_buffaloe`, `milk_ltr_b`, `egg_chicken`, `product_egg`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_vehicle`
--

CREATE TABLE `new_vehicle` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `car` int(11) NOT NULL,
  `tricycle_car` int(11) NOT NULL,
  `tricycle` int(11) NOT NULL,
  `tricycle_van` int(11) NOT NULL,
  `bus` int(11) NOT NULL,
  `motor_bicycle` int(11) NOT NULL,
  `dual_function_vehicle` int(11) NOT NULL,
  `single_cab` int(11) NOT NULL,
  `special_vehicle` int(11) NOT NULL,
  `lorries` int(11) NOT NULL,
  `prime_mover` int(11) NOT NULL,
  `ambulance` int(11) NOT NULL,
  `funeral_red` int(11) NOT NULL,
  `lorry_trailer` int(11) NOT NULL,
  `tractor_trailer` int(11) NOT NULL,
  `hand_tractor` int(11) NOT NULL,
  `tractor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_vehicle`
--

INSERT INTO `new_vehicle` (`id`, `userid`, `year`, `ds`, `gnda`, `car`, `tricycle_car`, `tricycle`, `tricycle_van`, `bus`, `motor_bicycle`, `dual_function_vehicle`, `single_cab`, `special_vehicle`, `lorries`, `prime_mover`, `ambulance`, `funeral_red`, `lorry_trailer`, `tractor_trailer`, `hand_tractor`, `tractor`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `organic_fertilizer`
--

CREATE TABLE `organic_fertilizer` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `production_company` varchar(200) NOT NULL,
  `addres` varchar(500) NOT NULL,
  `contact` int(11) NOT NULL,
  `annual_production` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organic_fertilizer`
--

INSERT INTO `organic_fertilizer` (`id`, `userid`, `year`, `ds`, `gnda`, `production_company`, `addres`, `contact`, `annual_production`) VALUES
(7, 109, 2022, 'Matale', 'Malwatta', '0', '0', 0, 0),
(8, 109, 2022, 'Matale', 'Malwatta', '0', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orphanages`
--

CREATE TABLE `orphanages` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `orphanages` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `requirements` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orphanages`
--

INSERT INTO `orphanages` (`id`, `userid`, `year`, `ds`, `gnda`, `orphanages`, `addres`, `contact`, `client`, `requirements`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', '0', 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `other_educational_institutions`
--

CREATE TABLE `other_educational_institutions` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `institute_name` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `tpno` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_educational_institutions`
--

INSERT INTO `other_educational_institutions` (`id`, `userid`, `year`, `ds`, `gnd`, `institute_name`, `addres`, `tpno`, `gnda`) VALUES
(1, 108, 2022, 'matale', '0', '0', '0', 0, ''),
(2, 108, 2022, 'matale', '0', '2', '3', 4, ''),
(3, 109, 2019, 'Matale', '', '0', '0', 0, 'Malwatta'),
(4, 109, 2019, 'Matale', '', '0', '0', 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `passed_examination`
--

CREATE TABLE `passed_examination` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gradefive_exame_appearances` int(11) NOT NULL,
  `cutoffmarks_applicants` int(11) NOT NULL,
  `ol_appearances` int(11) NOT NULL,
  `al_qualified` int(11) NOT NULL,
  `al_appearances` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passed_examination`
--

INSERT INTO `passed_examination` (`id`, `userid`, `year`, `ds`, `gradefive_exame_appearances`, `cutoffmarks_applicants`, `ol_appearances`, `al_qualified`, `al_appearances`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, ''),
(2, 108, 2022, 'matale', 0, 2, 3, 4, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reg_clinics`
--

CREATE TABLE `patient_reg_clinics` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `diabetes` int(11) NOT NULL,
  `high_blood_pressure` int(11) NOT NULL,
  `cholesterol` int(11) NOT NULL,
  `kidney_disease` int(11) NOT NULL,
  `cancer` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_reg_clinics`
--

INSERT INTO `patient_reg_clinics` (`id`, `userid`, `year`, `ds`, `gnda`, `diabetes`, `high_blood_pressure`, `cholesterol`, `kidney_disease`, `cancer`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permit_vehicle`
--

CREATE TABLE `permit_vehicle` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `car` int(11) NOT NULL,
  `motor_bicycle` int(11) NOT NULL,
  `three_wheel` int(11) NOT NULL,
  `private_bus` int(11) NOT NULL,
  `dual_function_vehicles` int(11) NOT NULL,
  `lorries` int(11) NOT NULL,
  `agri_vehicles` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permit_vehicle`
--

INSERT INTO `permit_vehicle` (`id`, `userid`, `year`, `ds`, `gnda`, `car`, `motor_bicycle`, `three_wheel`, `private_bus`, `dual_function_vehicles`, `lorries`, `agri_vehicles`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 1, 2, 3, 4, 5, 6, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `physical_mental_discomfort`
--

CREATE TABLE `physical_mental_discomfort` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `preschool` int(11) NOT NULL,
  `schools` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `professional` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `not_involved_education` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physical_mental_discomfort`
--

INSERT INTO `physical_mental_discomfort` (`id`, `userid`, `year`, `ds`, `gnda`, `preschool`, `schools`, `degree`, `professional`, `other`, `not_involved_education`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `physical_mental_discomfort_b`
--

CREATE TABLE `physical_mental_discomfort_b` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `public_sector` int(11) NOT NULL,
  `semi_state` int(11) NOT NULL,
  `private` int(11) NOT NULL,
  `self_employment` int(11) NOT NULL,
  `agriculture` int(11) NOT NULL,
  `abroad` int(11) NOT NULL,
  `no_work` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physical_mental_discomfort_b`
--

INSERT INTO `physical_mental_discomfort_b` (`id`, `userid`, `year`, `ds`, `gnda`, `public_sector`, `semi_state`, `private`, `self_employment`, `agriculture`, `abroad`, `no_work`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pirivena`
--

CREATE TABLE `pirivena` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `pirivena_name` varchar(100) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pirivena`
--

INSERT INTO `pirivena` (`id`, `userid`, `year`, `ds`, `gnd`, `pirivena_name`, `no_students`, `no_teachers`, `gnda`) VALUES
(3, 108, 2022, 'matale', '1', '2', 3, 4, ''),
(4, 108, 2022, 'matale', '1', '2', 3, 4, ''),
(5, 108, 2022, 'matale', '1', '2', 3, 4, ''),
(6, 109, 2019, 'Matale', '', '0', 0, 0, 'Malwatta'),
(7, 109, 2019, 'Matale', '', '0', 0, 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `population_age`
--

CREATE TABLE `population_age` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_zero_five` int(11) NOT NULL,
  `male_zero_five` int(11) NOT NULL,
  `female_six_fourteen` int(11) NOT NULL,
  `male_six_fourteen` int(11) NOT NULL,
  `female_fifteen_eighteen` int(11) NOT NULL,
  `male_fifteen_eighteen` int(11) NOT NULL,
  `female_nineteen_thirtyfive` int(11) NOT NULL,
  `male_nineteen_thirtyfive` int(11) NOT NULL,
  `female_thirtysix_sixty` int(11) NOT NULL,
  `male_thirtysix_sixty` int(11) NOT NULL,
  `female_sixty` int(11) NOT NULL,
  `male_sixty` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `population_age`
--

INSERT INTO `population_age` (`id`, `userid`, `year`, `ds`, `female_zero_five`, `male_zero_five`, `female_six_fourteen`, `male_six_fourteen`, `female_fifteen_eighteen`, `male_fifteen_eighteen`, `female_nineteen_thirtyfive`, `male_nineteen_thirtyfive`, `female_thirtysix_sixty`, `male_thirtysix_sixty`, `female_sixty`, `male_sixty`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `population_ds`
--

CREATE TABLE `population_ds` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_town` int(11) NOT NULL,
  `male_town` int(11) NOT NULL,
  `female_rural` int(11) NOT NULL,
  `male_rural` int(11) NOT NULL,
  `female_estates` int(11) NOT NULL,
  `male_estates` int(11) NOT NULL,
  `land_density` int(11) NOT NULL,
  `population_density` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `population_ds`
--

INSERT INTO `population_ds` (`id`, `userid`, `year`, `ds`, `female_town`, `male_town`, `female_rural`, `male_rural`, `female_estates`, `male_estates`, `land_density`, `population_density`, `gnda`) VALUES
(3, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `population_electoral_roll`
--

CREATE TABLE `population_electoral_roll` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_vote` int(11) NOT NULL,
  `male_vote` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `population_electoral_roll`
--

INSERT INTO `population_electoral_roll` (`id`, `userid`, `year`, `ds`, `female_vote`, `male_vote`, `gnda`) VALUES
(1, 108, 2022, 'matale', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `population_ethnicity`
--

CREATE TABLE `population_ethnicity` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_sinhala` int(11) NOT NULL,
  `male_sinhala` int(11) NOT NULL,
  `female_sltamil` int(11) NOT NULL,
  `male_sltamil` int(11) NOT NULL,
  `female_intamil` int(11) NOT NULL,
  `male_intamil` int(11) NOT NULL,
  `female_yonaka` int(11) NOT NULL,
  `male_yonaka` int(11) NOT NULL,
  `female_brg` int(11) NOT NULL,
  `male_brg` int(11) NOT NULL,
  `female_otherpo` int(11) NOT NULL,
  `male_otherpo` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `population_ethnicity`
--

INSERT INTO `population_ethnicity` (`id`, `userid`, `year`, `ds`, `female_sinhala`, `male_sinhala`, `female_sltamil`, `male_sltamil`, `female_intamil`, `male_intamil`, `female_yonaka`, `male_yonaka`, `female_brg`, `male_brg`, `female_otherpo`, `male_otherpo`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `population_religion`
--

CREATE TABLE `population_religion` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_buddhist` int(11) NOT NULL,
  `male_buddhist` int(11) NOT NULL,
  `female_tamil` int(11) NOT NULL,
  `male_tamil` int(11) NOT NULL,
  `female_muslim` int(11) NOT NULL,
  `male_muslim` int(11) NOT NULL,
  `female_rome` int(11) NOT NULL,
  `male_rome` int(11) NOT NULL,
  `female_cristian` int(11) NOT NULL,
  `male_cristian` int(11) NOT NULL,
  `female_other` int(11) NOT NULL,
  `male_other` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `population_religion`
--

INSERT INTO `population_religion` (`id`, `userid`, `year`, `ds`, `female_buddhist`, `male_buddhist`, `female_tamil`, `male_tamil`, `female_muslim`, `male_muslim`, `female_rome`, `male_rome`, `female_cristian`, `male_cristian`, `female_other`, `male_other`, `gnda`) VALUES
(1, 108, 2022, 'matale', 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `post_office`
--

CREATE TABLE `post_office` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `post_office` int(11) NOT NULL,
  `addres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_office`
--

INSERT INTO `post_office` (`id`, `userid`, `year`, `ds`, `gnda`, `post_office`, `addres`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `preschool`
--

CREATE TABLE `preschool` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `preschool_name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `no_students` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preschool`
--

INSERT INTO `preschool` (`id`, `userid`, `year`, `ds`, `gnd`, `preschool_name`, `regno`, `no_students`, `gnda`) VALUES
(1, 108, 2022, 'matale', '1', '1', '1', 1, ''),
(2, 108, 2022, 'matale', '1', '', '', 4, ''),
(3, 109, 2019, 'Matale', '', '0', '0', 0, 'Malwatta'),
(4, 109, 2019, 'Matale', '', '0', '0', 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `products_endemic`
--

CREATE TABLE `products_endemic` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `factory` varchar(200) NOT NULL,
  `families` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_endemic`
--

INSERT INTO `products_endemic` (`id`, `userid`, `year`, `ds`, `gnda`, `factory`, `families`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '0', 0),
(2, 109, 2022, 'Matale', 'Malwatta', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quarantine_staff`
--

CREATE TABLE `quarantine_staff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `specialist_doctor` int(11) NOT NULL,
  `medical_officer` int(11) NOT NULL,
  `dentist` int(11) NOT NULL,
  `assistant_medical_officer` int(11) NOT NULL,
  `nursing_officer` int(11) NOT NULL,
  `family_health_officer` int(11) NOT NULL,
  `laboratory_technician` int(11) NOT NULL,
  `other_technician` int(11) NOT NULL,
  `pharmacist` int(11) NOT NULL,
  `drug_compound` int(11) NOT NULL,
  `establishment_staff` int(11) NOT NULL,
  `caretaker` int(11) NOT NULL,
  `general_hygiene` int(11) NOT NULL,
  `other_employees` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `approved_staff` int(11) NOT NULL,
  `deficit_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quarantine_staff`
--

INSERT INTO `quarantine_staff` (`id`, `userid`, `year`, `ds`, `gnda`, `specialist_doctor`, `medical_officer`, `dentist`, `assistant_medical_officer`, `nursing_officer`, `family_health_officer`, `laboratory_technician`, `other_technician`, `pharmacist`, `drug_compound`, `establishment_staff`, `caretaker`, `general_hygiene`, `other_employees`, `other`, `approved_staff`, `deficit_number`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rabies`
--

CREATE TABLE `rabies` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `rabies_vaccine` int(11) NOT NULL,
  `rabies_death` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rabies`
--

INSERT INTO `rabies` (`id`, `userid`, `year`, `ds`, `gnda`, `rabies_vaccine`, `rabies_death`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registerd_hotels`
--

CREATE TABLE `registerd_hotels` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `gov_locations` int(11) NOT NULL,
  `semi_gov_locations` int(11) NOT NULL,
  `tourism_registerd_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerd_hotels`
--

INSERT INTO `registerd_hotels` (`id`, `userid`, `year`, `ds`, `gnda`, `gov_locations`, `semi_gov_locations`, `tourism_registerd_hotel`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 1, 2, 3),
(2, 109, 2022, 'Matale', 'Malwatta', 4, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `registered_manufacturing_industry`
--

CREATE TABLE `registered_manufacturing_industry` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `mining` int(11) NOT NULL,
  `foods` int(11) NOT NULL,
  `textiles` int(11) NOT NULL,
  `wood` int(11) NOT NULL,
  `paper` int(11) NOT NULL,
  `chemicals` int(11) NOT NULL,
  `minerals` int(11) NOT NULL,
  `metal` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `water` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_manufacturing_industry`
--

INSERT INTO `registered_manufacturing_industry` (`id`, `userid`, `year`, `ds`, `gnda`, `mining`, `foods`, `textiles`, `wood`, `paper`, `chemicals`, `minerals`, `metal`, `other`, `water`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registered_trading_companies`
--

CREATE TABLE `registered_trading_companies` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `grocery_store` int(11) NOT NULL,
  `supermarkets` int(11) NOT NULL,
  `restaurants` int(11) NOT NULL,
  `shoes_textiles` int(11) NOT NULL,
  `vegetable_shop` int(11) NOT NULL,
  `pharmacy` int(11) NOT NULL,
  `house_items` int(11) NOT NULL,
  `electrical_equipment` int(11) NOT NULL,
  `shopping_goods` int(11) NOT NULL,
  `building_materials` int(11) NOT NULL,
  `liquor_stores` int(11) NOT NULL,
  `jewelry` int(11) NOT NULL,
  `books` int(11) NOT NULL,
  `car_parts` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_trading_companies`
--

INSERT INTO `registered_trading_companies` (`id`, `userid`, `year`, `ds`, `gnda`, `grocery_store`, `supermarkets`, `restaurants`, `shoes_textiles`, `vegetable_shop`, `pharmacy`, `house_items`, `electrical_equipment`, `shopping_goods`, `building_materials`, `liquor_stores`, `jewelry`, `books`, `car_parts`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 15),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 15);

-- --------------------------------------------------------

--
-- Table structure for table `religious_centers`
--

CREATE TABLE `religious_centers` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `buddhist_temples` int(11) NOT NULL,
  `hindu_temples` int(11) NOT NULL,
  `catholic_churches` int(11) NOT NULL,
  `mosques` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religious_centers`
--

INSERT INTO `religious_centers` (`id`, `userid`, `year`, `ds`, `gnd`, `buddhist_temples`, `hindu_temples`, `catholic_churches`, `mosques`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 1, 2, 3, 4, 5),
(2, 109, 2022, 'Matale', 'Malwatta', 1, 2, 3, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `religious_places_renovated`
--

CREATE TABLE `religious_places_renovated` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnd` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religious_places_renovated`
--

INSERT INTO `religious_places_renovated` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `reason`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '1', '2'),
(2, 109, 2022, 'Matale', 'Malwatta', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `retired_population`
--

CREATE TABLE `retired_population` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_retirees` int(11) NOT NULL,
  `male_retirees` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retired_population`
--

INSERT INTO `retired_population` (`id`, `userid`, `year`, `ds`, `female_retirees`, `male_retirees`, `gnda`) VALUES
(2, 108, 2022, 'matale', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `road_accident`
--

CREATE TABLE `road_accident` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `deadly_accident` int(11) NOT NULL,
  `serious_accident` int(11) NOT NULL,
  `minor_injuries` int(11) NOT NULL,
  `damage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `road_accident`
--

INSERT INTO `road_accident` (`id`, `userid`, `year`, `ds`, `gnda`, `deadly_accident`, `serious_accident`, `minor_injuries`, `damage`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `road_grade`
--

CREATE TABLE `road_grade` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `high_way` int(11) NOT NULL,
  `grade_a` int(11) NOT NULL,
  `garde_b` int(11) NOT NULL,
  `grade_c` int(11) NOT NULL,
  `grade_d` int(11) NOT NULL,
  `city_council_roads` int(11) NOT NULL,
  `ds_roads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `road_grade`
--

INSERT INTO `road_grade` (`id`, `userid`, `year`, `ds`, `gnda`, `high_way`, `grade_a`, `garde_b`, `grade_c`, `grade_d`, `city_council_roads`, `ds_roads`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rural_private_medical`
--

CREATE TABLE `rural_private_medical` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `local_sinhala` int(11) NOT NULL,
  `ayurvedic_doctors` int(11) NOT NULL,
  `western_medicine` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rural_private_medical`
--

INSERT INTO `rural_private_medical` (`id`, `userid`, `year`, `ds`, `gnda`, `local_sinhala`, `ayurvedic_doctors`, `western_medicine`, `other`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rural_service_centers`
--

CREATE TABLE `rural_service_centers` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `no_hospitals` int(11) NOT NULL,
  `moh` int(11) NOT NULL,
  `health_inspectors` int(11) NOT NULL,
  `hofficers` int(11) NOT NULL,
  `family_health_services` int(11) NOT NULL,
  `fofficers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rural_service_centers`
--

INSERT INTO `rural_service_centers` (`id`, `userid`, `year`, `ds`, `gnda`, `no_hospitals`, `moh`, `health_inspectors`, `hofficers`, `family_health_services`, `fofficers`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `samurdhi_assistance`
--

CREATE TABLE `samurdhi_assistance` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `families` int(11) NOT NULL,
  `supported_families` int(11) NOT NULL,
  `four_hundred_twenty` int(11) NOT NULL,
  `one_thousand_five_hundred` int(11) NOT NULL,
  `two_thousand_five_hundred` int(11) NOT NULL,
  `three_thousand_five_hundred` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `samurdhi_assistance`
--

INSERT INTO `samurdhi_assistance` (`id`, `userid`, `year`, `ds`, `gnda`, `families`, `supported_families`, `four_hundred_twenty`, `one_thousand_five_hundred`, `two_thousand_five_hundred`, `three_thousand_five_hundred`) VALUES
(3, 109, 2022, 'Matale', 'Malwatta', 1, 1, 1, 1, 1, 1),
(4, 109, 2022, 'Matale', 'Malwatta', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `ds` varchar(9) DEFAULT NULL,
  `gnd` varchar(16) DEFAULT NULL,
  `school` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `ds`, `gnd`, `school`) VALUES
(1, 'Pallepola', 'මිල්ලවාන ඉහළ', 'THALAKIRIYAWA P.V.'),
(2, 'Pallepola', 'මිල්ලවාන පහළගම', 'MILLAWANA P.V.'),
(3, 'Galewela', 'පුවක්පිටිය', 'SRI SUGATHA P.V.'),
(4, 'Pallepola', 'මොනරවිල', 'MONARAVILA P.V.'),
(5, 'Dambulla', 'සීගිරිය', 'Diyakepilla P.S'),
(6, 'Pallepola', 'දෙමදඔය', 'DEMADAOYA P.V.'),
(7, 'Pallepola', 'වල්මෝරුව', 'WALMORUWA P.V.'),
(8, 'Dambulla', 'වැලමිටියාව', 'Welamitiyawa P.S'),
(9, 'Pallepola', 'අම්බොක්ක', 'AMBOKKA P.V.'),
(10, 'Galewela', 'කොස්පොත', 'HOMBAWA M.V.'),
(11, 'Pallepola', 'මනන්වත්ත', 'MANANWATTA P.V.'),
(12, 'Pallepola', 'කන්දෙවත්ත', 'KANDEWATTA P.V.'),
(13, 'Dambulla', 'පොල්අත්තාව', 'Alakolawewa P.S'),
(14, 'Dambulla', 'පලුටාව', 'Palutawa P.S'),
(15, 'Pallepola', 'දිඹුල්ගමුව', 'DIMBULGAMUWA P.V.'),
(16, 'Pallepola', 'නිලන්නෝරුව පරනගම', 'NILANNORUWA P.V.'),
(17, 'Dambulla', 'තල්කොටේ', 'Thalkote P.S'),
(18, 'Dambulla', 'පොල්අත්තාව', 'Pollaththawa P.S'),
(19, 'Galewela', 'කැදන්ගමුව', 'KEDANGAMUWA P.V.'),
(20, 'Galewela', 'තෙන්නකෝන්පුර', 'THENNAKOONPURA P.S.'),
(21, 'Dambulla', 'නයාකුඹුර', 'Waththegammeddha P.S'),
(22, 'Pallepola', 'කොස්ගොල්ල', 'KOSGOLLA.P.V.'),
(23, 'Galewela', 'ලේනාවල', 'NEERANGAMUWA K.V.'),
(24, 'Galewela', 'බුලනවැව', 'DEWAHUWA SINHALA K.V.'),
(25, 'Galewela', 'කුඹුක්ගොල්ල', 'IHALA DIGGALA P.V.'),
(26, 'Dambulla', 'තිත්තවැල්ගොල්ල', 'Thiththawelgolla P.S'),
(27, 'Dambulla', 'ඉහල ඇරවූල', 'Ihala Ereula P.S'),
(28, 'Dambulla', 'නාගලවැව', 'Nagalawewa P.S'),
(29, 'Pallepola', 'උදුරම්පැලැස්ස', 'WEERA MADDUMA BANDARA K.V.'),
(30, 'Pallepola', 'දෙමදඔය', 'EBBAWALA P.V.'),
(31, 'Dambulla', 'රත්මල්කටුව', 'Kandalama Madeena Mu.J.S'),
(32, 'Dambulla', 'කුඹුක්කඩන්වල', 'Lenawa P.S'),
(33, 'Dambulla', 'යකුරාගල දකුණ', 'Ereula J.S'),
(34, 'Galewela', 'නිලගම', 'NILAGAMA K.V.'),
(35, 'Pallepola', 'අලුත්ගම', 'AL_AZHAR MUSLIM K.V.'),
(36, 'Dambulla', 'රත්මල්කටුව', 'Bellanneoya P.S'),
(37, 'Galewela', 'පහල දිග්ගල', 'PAHALA DIGGALA P.V.'),
(38, 'Galewela', 'දමුණුමුල්ල', 'DAMUNUMULLA K.V.'),
(39, 'Pallepola', 'දොඩම්ගස්යාය', 'RUSIGAMA M.V.'),
(40, 'Galewela', 'කොස්ගහහින්න', 'KOSGAHAHIINNA P.V.'),
(41, 'Pallepola', 'කොහොලන්වල', 'KOHOLANWALA P.V.'),
(42, 'Dambulla', 'වල්ගම්වැව', 'walgamwewa J.S'),
(43, 'Dambulla', 'බුලාගල', 'Bulagala P.S'),
(44, 'Galewela', 'හොම්බාව', 'ANDAGALA P.V.'),
(45, 'Galewela', 'යටිගල්පොත්ත', 'YATIGALPOTHTHA K.V.'),
(46, 'Galewela', 'පත්කොලගොල්ල', 'PATHKOLAGOLLA K.V.'),
(47, 'Dambulla', NULL, 'Lenadora J.S'),
(48, 'Dambulla', 'ගෙඩිගස්වලාන', 'Udawelayagama J.S'),
(49, 'Pallepola', 'කොබ්බෑවැහැර', 'KOBBEWEHARA K.V.'),
(50, 'Dambulla', 'ඇතාබැදිවැව', 'Eathabendiwewa J.S'),
(51, 'Dambulla', 'කළුන්දෑව පරණගම', 'Mahasen J.S'),
(52, 'Galewela', 'අලුත්වැව', 'ALUTHWEWA K.V.'),
(53, 'Pallepola', 'මානින්ගමුව බටහිර', 'MANINGAMUWA M.V.'),
(54, 'Galewela', 'දඩුබැදිරුප්ප', 'DANDUBEDIRUPPA K.V.'),
(55, 'Pallepola', 'කිරිඔරුව', 'KIRIORUWA P.V.'),
(56, 'Dambulla', 'කණ්ඩලම', 'Thennakoon M.V'),
(57, 'Galewela', 'දඹගොල්ල', 'NIKAWEHARA K.V.'),
(58, 'Dambulla', 'ඉහලඇරවුල', 'Kalogahaela P.S'),
(59, 'Galewela', 'පට්ටිවෙල', 'PATTIWELA K.V.'),
(60, 'Dambulla', 'වැලිහේන', 'Pelwehera J.S'),
(61, 'Galewela', 'යටිවැහැර', 'SIYABALAGAHAWELA K.V.'),
(62, 'Galewela', 'පාළුහොම්බාව', 'DEMBAWA P.S.'),
(63, 'Galewela', 'එළමල්පොත', 'ELAMALPOTHA MUSLIM M.V.'),
(64, 'Galewela', 'මකුළුගස්වැව', 'Janadhipathi P.V'),
(65, 'Galewela', 'බෙලිගමුව', 'BELIGAMUWA K.V.'),
(66, 'Dambulla', 'වැවලවැව', 'Kithsirimewan P.S'),
(67, 'Galewela', 'රාලලෑරොටවැව', 'MORAGOLLA M.V.'),
(68, 'Dambulla', 'රත්මල්ගහඇල', 'Rathmalgahaela J.S'),
(69, 'Dambulla', 'පන්නම්පිටිය', 'Sri Maliyadewa P.S'),
(70, 'Galewela', 'වාසලකෝට්ටේ', 'ST.ANTHONY`S M.V.'),
(71, 'Galewela', 'කොස්පෙත', 'HOMBAWA M.V.'),
(72, 'Galewela', 'දේවහුව 1', 'DEWAHUWA MUSLIM M.V.'),
(73, 'Dambulla', 'පොහොරන්වැව', 'Pohoranwewa J.S'),
(74, 'Galewela', 'දිවුල්ගස්කොටුව', 'DIVULGASKOTUWA P.V.'),
(75, 'Galewela', 'බුලනවැව', 'BULANAWEWA P.V.'),
(76, 'Dambulla', 'කිරලගොල්ල', 'Kiralagolla P.S'),
(77, 'Dambulla', 'යකුරාගල උතුර', 'D.S.Senanayake P.S'),
(78, 'Pallepola', 'මිල්ලවාන ඉහලගම', 'MILLAWANA M.V.'),
(79, 'Dambulla', 'වැවලවැව', 'Wewalawewa M.V'),
(80, 'Dambulla', 'නිකවටවන', 'Nikawatawana Mu.M.V'),
(81, 'Galewela', 'ඉහල බම්බාව', 'BAMBAWA P.V.'),
(82, 'Galewela', 'මාදිපොල', 'MADIPOLA M.V.'),
(83, 'Dambulla', 'දිගම්පතහ', 'Digampathaha J.S'),
(84, 'Dambulla', 'ඉනාමළුව', 'Inamaluwa P.S'),
(85, 'Galewela', 'මැදබැද්ද උතුර', 'T.B TENNAKOON P.V'),
(86, 'Galewela', 'බේලියකන්ද', 'SILWATHGALA M.V.'),
(87, 'Dambulla', 'ඉනාමළුව', 'Weera wijaya Wimalaratne M.V'),
(88, 'Galewela', 'රංවැඩියාව', 'KEPPETIYA MUSLIM M.V.'),
(89, 'Dambulla', 'කිඹිස්ස', 'Kimbissa J.S'),
(90, 'Galewela', 'නබඩගහවත්ත', 'AR RAHAMATH MU P.V'),
(91, 'Dambulla', 'දඹූල්ල', 'Pannampitiya M.V'),
(92, 'Galewela', 'මකුළුගස්වැව', 'MAKULUGASWEWA M.V.'),
(93, 'Pallepola', 'පල්දෙනිය', 'MAHINDA MODEL P.S.'),
(94, 'Pallepola', 'ජානකගම', 'ARAFA MUSLIM M.V.'),
(95, 'Galewela', 'නබඩගහවත්ත', 'AL FURKAN MUSLIM M.V.'),
(96, 'Dambulla', 'යකුරාගල උතුර', 'D.S.Senanayake M.V'),
(97, 'Dambulla', 'කපුවත්ත', 'Thiththawelgolla J.S'),
(98, 'Pallepola', 'පල්ලෙපොල දකුණ', 'MAHABODHI M.V.'),
(99, 'Dambulla', 'සීගිරිය', 'Sigiriya M.M.V'),
(100, 'Galewela', 'වලස්වැව', 'THOLAMBUGOLLA M.V.'),
(101, 'Galewela', 'තලකිරියාගම', 'THALAKIRIYAGAMA .M.V.'),
(102, 'Galewela', 'මැදබැද්ද උතුර', 'MEDABEDDA M.V.'),
(103, 'Galewela', 'ගලේවෙල නගරය', 'GALEWELA P.V.'),
(104, 'Dambulla', 'සීගිරිය', 'Dambulla P.S'),
(105, 'Pallepola', 'අකුරම්බොඩ', 'AKURAMBODA K.V.'),
(106, 'Pallepola', 'අකුරම්බොඩ', 'WEERA KEPPETIPOLA M.M.V.'),
(107, 'Dambulla', 'දඹූල්ල නගරය', 'Rangiri Dambulla National school'),
(108, 'Dambulla', 'සළුඅපුල්ලන වැව', 'Weeramohan Jayamaha M.V'),
(109, 'Galewela', 'ගලේවෙල නගරය', 'GALEWELA M.M.V.');

-- --------------------------------------------------------

--
-- Table structure for table `school_information`
--

CREATE TABLE `school_information` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `national_schools` int(11) NOT NULL,
  `provincial_council_schools` int(11) NOT NULL,
  `oneab` int(11) NOT NULL,
  `onec` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `private_schools` int(11) NOT NULL,
  `sinhala` int(11) NOT NULL,
  `tamil` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_information`
--

INSERT INTO `school_information` (`id`, `userid`, `year`, `ds`, `gnd`, `school_name`, `national_schools`, `provincial_council_schools`, `oneab`, `onec`, `two`, `three`, `private_schools`, `sinhala`, `tamil`, `english`, `no_students`, `no_teachers`, `gnda`) VALUES
(1, 108, 2022, 'matale', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 108, 2022, 'matale', '0', '2', 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, ''),
(3, 108, 2022, 'matale', '1', '2', 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, ''),
(4, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malwatta'),
(5, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `skilled_abroad_emp`
--

CREATE TABLE `skilled_abroad_emp` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_me_skilled` int(11) NOT NULL,
  `male_me_skilled` int(11) NOT NULL,
  `female_korea_skilled` int(11) NOT NULL,
  `male_korea_skilled` int(11) NOT NULL,
  `female_europe_skilled` int(11) NOT NULL,
  `male_europe_skilled` int(11) NOT NULL,
  `female_other_country_skilled` int(11) NOT NULL,
  `male_other_country_skilled` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skilled_abroad_emp`
--

INSERT INTO `skilled_abroad_emp` (`id`, `userid`, `year`, `ds`, `female_me_skilled`, `male_me_skilled`, `female_korea_skilled`, `male_korea_skilled`, `female_europe_skilled`, `male_europe_skilled`, `female_other_country_skilled`, `male_other_country_skilled`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `social_diseases`
--

CREATE TABLE `social_diseases` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `patient_tested` int(11) NOT NULL,
  `patient_absolute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_diseases`
--

INSERT INTO `social_diseases` (`id`, `userid`, `year`, `ds`, `gnda`, `patient_tested`, `patient_absolute`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `source_drinking_water`
--

CREATE TABLE `source_drinking_water` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `well` int(11) NOT NULL,
  `main_pipe_water` int(11) NOT NULL,
  `rural_water_projects` int(11) NOT NULL,
  `tube_well` int(11) NOT NULL,
  `bottled_water` int(11) NOT NULL,
  `river` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `source_drinking_water`
--

INSERT INTO `source_drinking_water` (`id`, `userid`, `year`, `ds`, `well`, `main_pipe_water`, `rural_water_projects`, `tube_well`, `bottled_water`, `river`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `source_light`
--

CREATE TABLE `source_light` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `house_units` int(11) NOT NULL,
  `electricity` int(11) NOT NULL,
  `lamp_oil` int(11) NOT NULL,
  `solar_power` int(11) NOT NULL,
  `other_power` int(11) NOT NULL,
  `no_electricity` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `source_light`
--

INSERT INTO `source_light` (`id`, `userid`, `year`, `ds`, `house_units`, `electricity`, `lamp_oil`, `solar_power`, `other_power`, `no_electricity`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `special_educational_institutions`
--

CREATE TABLE `special_educational_institutions` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `government` int(11) NOT NULL,
  `nogov_student` int(11) NOT NULL,
  `semi_government` int(11) NOT NULL,
  `nosemi_student` int(11) NOT NULL,
  `private` int(11) NOT NULL,
  `nopriv_student` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_educational_institutions`
--

INSERT INTO `special_educational_institutions` (`id`, `userid`, `year`, `ds`, `government`, `nogov_student`, `semi_government`, `nosemi_student`, `private`, `nopriv_student`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, ''),
(2, 108, 2022, 'matale', 0, 2, 3, 4, 5, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `special_locations`
--

CREATE TABLE `special_locations` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `special_locations` int(11) NOT NULL,
  `religion_locations` int(11) NOT NULL,
  `other_locations` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_locations`
--

INSERT INTO `special_locations` (`id`, `userid`, `year`, `ds`, `gnda`, `special_locations`, `religion_locations`, `other_locations`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 4, 5, 6),
(2, 109, 2022, 'Matale', 'Malwatta', 4, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `specific_artists`
--

CREATE TABLE `specific_artists` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnd` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `division` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specific_artists`
--

INSERT INTO `specific_artists` (`id`, `userid`, `year`, `ds`, `gnd`, `name`, `addres`, `contact`, `division`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4'),
(2, 109, 2022, 'Matale', 'Malwatta', '1', '2', 3, '4');

-- --------------------------------------------------------

--
-- Table structure for table `students_grades_studied`
--

CREATE TABLE `students_grades_studied` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `one_five` int(11) NOT NULL,
  `six_ten` int(11) NOT NULL,
  `ol` int(11) NOT NULL,
  `al` int(11) NOT NULL,
  `special_education_units` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_grades_studied`
--

INSERT INTO `students_grades_studied` (`id`, `userid`, `year`, `ds`, `gnd`, `school_name`, `one_five`, `six_ten`, `ol`, `al`, `special_education_units`, `gnda`) VALUES
(1, 108, 2022, 'matale', '0', '0', 0, 0, 0, 0, 0, ''),
(2, 108, 2022, 'matale', '0', '2', 3, 45, 6, 4, 8, ''),
(3, 109, 2019, 'Matale', '', '00', 0, 0, 0, 0, 0, 'Malwatta'),
(4, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `students_medium_instruction`
--

CREATE TABLE `students_medium_instruction` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `sinhala_female` int(11) NOT NULL,
  `sinhala_male` int(11) NOT NULL,
  `tamil_female` int(11) NOT NULL,
  `tamil_male` int(11) NOT NULL,
  `english_female` int(11) NOT NULL,
  `english_male` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_medium_instruction`
--

INSERT INTO `students_medium_instruction` (`id`, `userid`, `year`, `ds`, `gnd`, `school_name`, `sinhala_female`, `sinhala_male`, `tamil_female`, `tamil_male`, `english_female`, `english_male`, `gnda`) VALUES
(1, 108, 2022, 'matale', '1', '2', 3, 4, 5, 6, 7, 8, ''),
(2, 108, 2022, 'matale', '1', '2', 3, 4, 5, 6, 7, 8, ''),
(3, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 0, 0, 'Malwatta'),
(4, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 0, 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_edu_level`
--

CREATE TABLE `teachers_edu_level` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `graduate` int(11) NOT NULL,
  `training` int(11) NOT NULL,
  `untrained` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_edu_level`
--

INSERT INTO `teachers_edu_level` (`id`, `userid`, `year`, `ds`, `gnd`, `school_name`, `graduate`, `training`, `untrained`, `other`, `gnda`) VALUES
(1, 108, 2022, 'matale', '0', '0', 0, 0, 0, 0, ''),
(2, 108, 2022, 'matale', '0', '2', 3, 4, 5, 6, ''),
(3, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 'Malwatta'),
(4, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_medium_instruction`
--

CREATE TABLE `teachers_medium_instruction` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `sinhala` int(11) NOT NULL,
  `tamil` int(11) NOT NULL,
  `sinhala_english` int(11) NOT NULL,
  `english_tamil` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_medium_instruction`
--

INSERT INTO `teachers_medium_instruction` (`id`, `userid`, `year`, `ds`, `gnd`, `school_name`, `sinhala`, `tamil`, `sinhala_english`, `english_tamil`, `gnda`) VALUES
(5, 108, 2022, 'matale', '1', '1', 1, 1, 1, 1, ''),
(6, 108, 2022, 'matale', '1', '0', 0, 0, 0, 0, ''),
(7, 109, 2019, 'Matale', '', '0', 0, 0, 0, 0, 'Malwatta'),
(8, 109, 2019, 'Matale', '', '0', 0, 0, 0, 5, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `toilet_facilities`
--

CREATE TABLE `toilet_facilities` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `has_a_toilet` int(11) NOT NULL,
  `has_a_toilet_shared` int(11) NOT NULL,
  `public_toilet` int(11) NOT NULL,
  `not_using_toilet` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toilet_facilities`
--

INSERT INTO `toilet_facilities` (`id`, `userid`, `year`, `ds`, `has_a_toilet`, `has_a_toilet_shared`, `public_toilet`, `not_using_toilet`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `total_population`
--

CREATE TABLE `total_population` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_population`
--

INSERT INTO `total_population` (`id`, `userid`, `year`, `ds`, `female`, `male`, `gnda`) VALUES
(4, 109, 2022, 'matale', 500, 400, 'Malwatta'),
(5, 109, 2022, 'matale', 500, 400, 'Malwatta'),
(8, 110, 2022, 'Matale', 100, 150, 'Bogahakotuwa');

-- --------------------------------------------------------

--
-- Table structure for table `tot_hous_units`
--

CREATE TABLE `tot_hous_units` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `tot_house_units` int(11) NOT NULL,
  `tot_families` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tot_hous_units`
--

INSERT INTO `tot_hous_units` (`id`, `userid`, `year`, `ds`, `tot_house_units`, `tot_families`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `unemployment`
--

CREATE TABLE `unemployment` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_eighteen_twentyfive` int(11) NOT NULL,
  `male_eighteen_twentyfive` int(11) NOT NULL,
  `female_twentysix_forty` int(11) NOT NULL,
  `male_twentysix_forty` int(11) NOT NULL,
  `female_fortyone_sixty` int(11) NOT NULL,
  `male_fortyone_sixty` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unemployment`
--

INSERT INTO `unemployment` (`id`, `userid`, `year`, `ds`, `female_eighteen_twentyfive`, `male_eighteen_twentyfive`, `female_twentysix_forty`, `male_twentysix_forty`, `female_fortyone_sixty`, `male_fortyone_sixty`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `unemployment_rate`
--

CREATE TABLE `unemployment_rate` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `services_total_female` int(11) NOT NULL,
  `services_total_male` int(11) NOT NULL,
  `government_female` int(11) NOT NULL,
  `government_male` int(11) NOT NULL,
  `semi_government_female` int(11) NOT NULL,
  `semi_government_male` int(11) NOT NULL,
  `private_female` int(11) NOT NULL,
  `private_male` int(11) NOT NULL,
  `self_employment_female` int(11) NOT NULL,
  `self_employment_male` int(11) NOT NULL,
  `unemployment_female` int(11) NOT NULL,
  `unemployment_male` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unemployment_rate`
--

INSERT INTO `unemployment_rate` (`id`, `userid`, `year`, `ds`, `services_total_female`, `services_total_male`, `government_female`, `government_male`, `semi_government_female`, `semi_government_male`, `private_female`, `private_male`, `self_employment_female`, `self_employment_male`, `unemployment_female`, `unemployment_male`, `gnda`) VALUES
(4, 108, 2022, 'matale', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 112, '');

-- --------------------------------------------------------

--
-- Table structure for table `unskilled_abroad_emp`
--

CREATE TABLE `unskilled_abroad_emp` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `female_me_nt` int(11) NOT NULL,
  `male_me_nt` int(11) NOT NULL,
  `female_korea_nt` int(11) NOT NULL,
  `male_korea_nt` int(11) NOT NULL,
  `female_europe_nt` int(11) NOT NULL,
  `male_europe_nt` int(11) NOT NULL,
  `female_other_country_nt` int(11) NOT NULL,
  `male_other_country_nt` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unskilled_abroad_emp`
--

INSERT INTO `unskilled_abroad_emp` (`id`, `userid`, `year`, `ds`, `female_me_nt`, `male_me_nt`, `female_korea_nt`, `male_korea_nt`, `female_europe_nt`, `male_europe_nt`, `female_other_country_nt`, `male_other_country_nt`, `gnda`) VALUES
(1, 108, 2022, 'matale', 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `uploaded_on` date DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `gnd` varchar(500) NOT NULL,
  `ds` varchar(500) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `password`, `contact`, `role`, `uploaded_on`, `nic`, `gnd`, `ds`, `designation`) VALUES
(107, 'Dist', '202cb962ac59075b964b07152d234b70', '0754753105', 'dist', '2022-02-19', '1', '', '', ''),
(108, 'Ds', '202cb962ac59075b964b07152d234b70', '0667894561', 'ds', '2022-02-19', '2', '4', '2', ''),
(109, 'Gnd', '202cb962ac59075b964b07152d234b70', '0754753105', 'gnd', '2022-04-05', '3', '3', '2', ''),
(110, 'ADMIN', '202cb962ac59075b964b07152d234b70', '0123456789', 'admin', '2022-05-27', '5', '', '', ''),
(111, 'abc', '202cb962ac59075b964b07152d234b70', '0661478956', 'gnd', '2022-06-28', '941270883v', '5', '2', ''),
(112, '2', '202cb962ac59075b964b07152d234b70', '0123456789', 'gnd', '2022-06-28', '914657703v', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `vocational_center`
--

CREATE TABLE `vocational_center` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `tpno` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `no_students` int(11) NOT NULL,
  `no_teachers` int(11) NOT NULL,
  `gnda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vocational_center`
--

INSERT INTO `vocational_center` (`id`, `userid`, `year`, `ds`, `gnd`, `center_name`, `addres`, `tpno`, `course_name`, `no_students`, `no_teachers`, `gnda`) VALUES
(1, 108, 2022, 'matale', '0', '0', '0', 0, '0', 0, 0, ''),
(2, 108, 2022, 'matale', '0', '2', '3', 4, '5', 6, 8, ''),
(3, 109, 2019, 'Matale', '', '0', '0', 0, '0', 0, 0, 'Malwatta'),
(4, 109, 2019, 'Matale', '', '0', '0', 0, '0', 0, 0, 'Malwatta');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_fair`
--

CREATE TABLE `weekly_fair` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `gnda` varchar(200) NOT NULL,
  `institution` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weekly_fair`
--

INSERT INTO `weekly_fair` (`id`, `userid`, `year`, `ds`, `gnda`, `institution`, `location`, `date`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yield_sown`
--

CREATE TABLE `yield_sown` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ds` varchar(100) NOT NULL,
  `gnda` varchar(100) NOT NULL,
  `under_irrigation_a` int(11) NOT NULL,
  `rain_water_a` int(11) NOT NULL,
  `under_irrigation_b` int(11) NOT NULL,
  `rain_water_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yield_sown`
--

INSERT INTO `yield_sown` (`id`, `userid`, `year`, `ds`, `gnda`, `under_irrigation_a`, `rain_water_a`, `under_irrigation_b`, `rain_water_b`) VALUES
(1, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0),
(2, 109, 2022, 'Matale', 'Malwatta', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abroad_population`
--
ALTER TABLE `abroad_population`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_universities`
--
ALTER TABLE `admission_universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adult_population_education`
--
ALTER TABLE `adult_population_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agricultural_land`
--
ALTER TABLE `agricultural_land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agricultural_reservoirs`
--
ALTER TABLE `agricultural_reservoirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_statistics`
--
ALTER TABLE `animal_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_jurisdiction`
--
ALTER TABLE `area_jurisdiction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayurvedic`
--
ALTER TABLE `ayurvedic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buddhist_temples`
--
ALTER TABLE `buddhist_temples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catholic_churches`
--
ALTER TABLE `catholic_churches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_source`
--
ALTER TABLE `community_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid_patient`
--
ALTER TABLE `covid_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultivation_fruit`
--
ALTER TABLE `cultivation_fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultivation_paddy`
--
ALTER TABLE `cultivation_paddy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultivation_spices`
--
ALTER TABLE `cultivation_spices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultivation_vegetables`
--
ALTER TABLE `cultivation_vegetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultural_arts_institute`
--
ALTER TABLE `cultural_arts_institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dengue`
--
ALTER TABLE `dengue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependency_rate`
--
ALTER TABLE `dependency_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disabilities_people`
--
ALTER TABLE `disabilities_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divsec`
--
ALTER TABLE `divsec`
  ADD PRIMARY KEY (`indexno`);

--
-- Indexes for table `emp_major_sectors`
--
ALTER TABLE `emp_major_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extent_cultivated_land`
--
ALTER TABLE `extent_cultivated_land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fishing_industry`
--
ALTER TABLE `fishing_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `government_aid_recipients`
--
ALTER TABLE `government_aid_recipients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gov_hospitals`
--
ALTER TABLE `gov_hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hindu_religious_shrines`
--
ALTER TABLE `hindu_religious_shrines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_ownership`
--
ALTER TABLE `house_ownership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housing_unit`
--
ALTER TABLE `housing_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `islamic_religious_centers`
--
ALTER TABLE `islamic_religious_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_ownership`
--
ALTER TABLE `land_ownership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_ownership_lots`
--
ALTER TABLE `land_ownership_lots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_ownership_mud`
--
ALTER TABLE `land_ownership_mud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `large_scale_factories`
--
ALTER TABLE `large_scale_factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_births`
--
ALTER TABLE `live_births`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matale`
--
ALTER TABLE `matale`
  ADD PRIMARY KEY (`gncode`);

--
-- Indexes for table `materials_used_houses`
--
ALTER TABLE `materials_used_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_used_roof`
--
ALTER TABLE `material_used_roof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maternal_death`
--
ALTER TABLE `maternal_death`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milk_egg`
--
ALTER TABLE `milk_egg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_vehicle`
--
ALTER TABLE `new_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organic_fertilizer`
--
ALTER TABLE `organic_fertilizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orphanages`
--
ALTER TABLE `orphanages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_educational_institutions`
--
ALTER TABLE `other_educational_institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passed_examination`
--
ALTER TABLE `passed_examination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_reg_clinics`
--
ALTER TABLE `patient_reg_clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permit_vehicle`
--
ALTER TABLE `permit_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical_mental_discomfort`
--
ALTER TABLE `physical_mental_discomfort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical_mental_discomfort_b`
--
ALTER TABLE `physical_mental_discomfort_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pirivena`
--
ALTER TABLE `pirivena`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_age`
--
ALTER TABLE `population_age`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_ds`
--
ALTER TABLE `population_ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_electoral_roll`
--
ALTER TABLE `population_electoral_roll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_ethnicity`
--
ALTER TABLE `population_ethnicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_religion`
--
ALTER TABLE `population_religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_office`
--
ALTER TABLE `post_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preschool`
--
ALTER TABLE `preschool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_endemic`
--
ALTER TABLE `products_endemic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarantine_staff`
--
ALTER TABLE `quarantine_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rabies`
--
ALTER TABLE `rabies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerd_hotels`
--
ALTER TABLE `registerd_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_manufacturing_industry`
--
ALTER TABLE `registered_manufacturing_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_trading_companies`
--
ALTER TABLE `registered_trading_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religious_centers`
--
ALTER TABLE `religious_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religious_places_renovated`
--
ALTER TABLE `religious_places_renovated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retired_population`
--
ALTER TABLE `retired_population`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road_accident`
--
ALTER TABLE `road_accident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road_grade`
--
ALTER TABLE `road_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rural_private_medical`
--
ALTER TABLE `rural_private_medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rural_service_centers`
--
ALTER TABLE `rural_service_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samurdhi_assistance`
--
ALTER TABLE `samurdhi_assistance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_information`
--
ALTER TABLE `school_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skilled_abroad_emp`
--
ALTER TABLE `skilled_abroad_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_diseases`
--
ALTER TABLE `social_diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_drinking_water`
--
ALTER TABLE `source_drinking_water`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_light`
--
ALTER TABLE `source_light`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_educational_institutions`
--
ALTER TABLE `special_educational_institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_locations`
--
ALTER TABLE `special_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_artists`
--
ALTER TABLE `specific_artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_grades_studied`
--
ALTER TABLE `students_grades_studied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_medium_instruction`
--
ALTER TABLE `students_medium_instruction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_edu_level`
--
ALTER TABLE `teachers_edu_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_medium_instruction`
--
ALTER TABLE `teachers_medium_instruction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toilet_facilities`
--
ALTER TABLE `toilet_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_population`
--
ALTER TABLE `total_population`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tot_hous_units`
--
ALTER TABLE `tot_hous_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unemployment`
--
ALTER TABLE `unemployment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unemployment_rate`
--
ALTER TABLE `unemployment_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unskilled_abroad_emp`
--
ALTER TABLE `unskilled_abroad_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocational_center`
--
ALTER TABLE `vocational_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly_fair`
--
ALTER TABLE `weekly_fair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yield_sown`
--
ALTER TABLE `yield_sown`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abroad_population`
--
ALTER TABLE `abroad_population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_universities`
--
ALTER TABLE `admission_universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adult_population_education`
--
ALTER TABLE `adult_population_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agricultural_land`
--
ALTER TABLE `agricultural_land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agricultural_reservoirs`
--
ALTER TABLE `agricultural_reservoirs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `animal_statistics`
--
ALTER TABLE `animal_statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area_jurisdiction`
--
ALTER TABLE `area_jurisdiction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ayurvedic`
--
ALTER TABLE `ayurvedic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buddhist_temples`
--
ALTER TABLE `buddhist_temples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catholic_churches`
--
ALTER TABLE `catholic_churches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `community_source`
--
ALTER TABLE `community_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `covid_patient`
--
ALTER TABLE `covid_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cultivation_fruit`
--
ALTER TABLE `cultivation_fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cultivation_paddy`
--
ALTER TABLE `cultivation_paddy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cultivation_spices`
--
ALTER TABLE `cultivation_spices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cultivation_vegetables`
--
ALTER TABLE `cultivation_vegetables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cultural_arts_institute`
--
ALTER TABLE `cultural_arts_institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dengue`
--
ALTER TABLE `dengue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dependency_rate`
--
ALTER TABLE `dependency_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `disabilities_people`
--
ALTER TABLE `disabilities_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_major_sectors`
--
ALTER TABLE `emp_major_sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `extent_cultivated_land`
--
ALTER TABLE `extent_cultivated_land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fishing_industry`
--
ALTER TABLE `fishing_industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `government`
--
ALTER TABLE `government`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `government_aid_recipients`
--
ALTER TABLE `government_aid_recipients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gov_hospitals`
--
ALTER TABLE `gov_hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hindu_religious_shrines`
--
ALTER TABLE `hindu_religious_shrines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house_ownership`
--
ALTER TABLE `house_ownership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `housing_unit`
--
ALTER TABLE `housing_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `islamic_religious_centers`
--
ALTER TABLE `islamic_religious_centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `land_ownership`
--
ALTER TABLE `land_ownership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `land_ownership_lots`
--
ALTER TABLE `land_ownership_lots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `land_ownership_mud`
--
ALTER TABLE `land_ownership_mud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `large_scale_factories`
--
ALTER TABLE `large_scale_factories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `live_births`
--
ALTER TABLE `live_births`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materials_used_houses`
--
ALTER TABLE `materials_used_houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `material_used_roof`
--
ALTER TABLE `material_used_roof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maternal_death`
--
ALTER TABLE `maternal_death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `milk_egg`
--
ALTER TABLE `milk_egg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_vehicle`
--
ALTER TABLE `new_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organic_fertilizer`
--
ALTER TABLE `organic_fertilizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orphanages`
--
ALTER TABLE `orphanages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_educational_institutions`
--
ALTER TABLE `other_educational_institutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passed_examination`
--
ALTER TABLE `passed_examination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_reg_clinics`
--
ALTER TABLE `patient_reg_clinics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permit_vehicle`
--
ALTER TABLE `permit_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `physical_mental_discomfort`
--
ALTER TABLE `physical_mental_discomfort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `physical_mental_discomfort_b`
--
ALTER TABLE `physical_mental_discomfort_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pirivena`
--
ALTER TABLE `pirivena`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `population_age`
--
ALTER TABLE `population_age`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `population_ds`
--
ALTER TABLE `population_ds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `population_electoral_roll`
--
ALTER TABLE `population_electoral_roll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `population_ethnicity`
--
ALTER TABLE `population_ethnicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `population_religion`
--
ALTER TABLE `population_religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_office`
--
ALTER TABLE `post_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `preschool`
--
ALTER TABLE `preschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_endemic`
--
ALTER TABLE `products_endemic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quarantine_staff`
--
ALTER TABLE `quarantine_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rabies`
--
ALTER TABLE `rabies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registerd_hotels`
--
ALTER TABLE `registerd_hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registered_manufacturing_industry`
--
ALTER TABLE `registered_manufacturing_industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registered_trading_companies`
--
ALTER TABLE `registered_trading_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `religious_centers`
--
ALTER TABLE `religious_centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `religious_places_renovated`
--
ALTER TABLE `religious_places_renovated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `retired_population`
--
ALTER TABLE `retired_population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `road_accident`
--
ALTER TABLE `road_accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `road_grade`
--
ALTER TABLE `road_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rural_private_medical`
--
ALTER TABLE `rural_private_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rural_service_centers`
--
ALTER TABLE `rural_service_centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `samurdhi_assistance`
--
ALTER TABLE `samurdhi_assistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `school_information`
--
ALTER TABLE `school_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skilled_abroad_emp`
--
ALTER TABLE `skilled_abroad_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_diseases`
--
ALTER TABLE `social_diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `source_drinking_water`
--
ALTER TABLE `source_drinking_water`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `source_light`
--
ALTER TABLE `source_light`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `special_educational_institutions`
--
ALTER TABLE `special_educational_institutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special_locations`
--
ALTER TABLE `special_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specific_artists`
--
ALTER TABLE `specific_artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students_grades_studied`
--
ALTER TABLE `students_grades_studied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_medium_instruction`
--
ALTER TABLE `students_medium_instruction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers_edu_level`
--
ALTER TABLE `teachers_edu_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers_medium_instruction`
--
ALTER TABLE `teachers_medium_instruction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `toilet_facilities`
--
ALTER TABLE `toilet_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `total_population`
--
ALTER TABLE `total_population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tot_hous_units`
--
ALTER TABLE `tot_hous_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unemployment`
--
ALTER TABLE `unemployment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unemployment_rate`
--
ALTER TABLE `unemployment_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unskilled_abroad_emp`
--
ALTER TABLE `unskilled_abroad_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `vocational_center`
--
ALTER TABLE `vocational_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weekly_fair`
--
ALTER TABLE `weekly_fair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yield_sown`
--
ALTER TABLE `yield_sown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
