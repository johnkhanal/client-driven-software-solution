-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 04:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `firstname`, `surname`, `username`, `password`, `role`) VALUES
(12, 'Mark', 'Jones', 'admin', '$2y$10$dRbcb3DByAfLSyTi.b3eCO1fsvWgxmRIl9xtsbHC8FMIIYUWa4Aya', 'root'),
(13, 'Ram', 'Parsad', 'ram', '$2y$10$I/yrnH2YIUHokp6Ys9osTeAepjEInTXQ5BKWmNZxr.FuS8XuplX7.', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `animalofweek`
--

CREATE TABLE `animalofweek` (
  `id` int(8) NOT NULL,
  `animal_id` int(8) NOT NULL,
  `finalDateOfChange` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animalofweek`
--

INSERT INTO `animalofweek` (`id`, `animal_id`, `finalDateOfChange`) VALUES
(36, 11, '2020-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animal_id` int(11) NOT NULL,
  `species_name` varchar(255) NOT NULL,
  `given_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `life_span` varchar(255) NOT NULL,
  `classification_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `diet_requirement` varchar(999) NOT NULL,
  `habitat_desc` varchar(999) NOT NULL,
  `population_distribution` varchar(255) NOT NULL,
  `date_joined` date NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `nest` varchar(255) DEFAULT NULL,
  `clutch_size` varchar(255) DEFAULT NULL,
  `wing_span` varchar(255) DEFAULT NULL,
  `fly` varchar(5) DEFAULT NULL,
  `bird_colour` varchar(255) DEFAULT NULL,
  `fish_body_temp` varchar(255) DEFAULT NULL,
  `water_type` varchar(255) DEFAULT NULL,
  `fish_colour` varchar(255) NOT NULL,
  `reproduction_type` varchar(255) DEFAULT NULL,
  `avg_clutch_size` varchar(255) DEFAULT NULL,
  `avg_offspring` varchar(255) DEFAULT NULL,
  `gestational_period` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `body_temp` varchar(255) DEFAULT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animal_id`, `species_name`, `given_name`, `dob`, `gender`, `life_span`, `classification_id`, `location_id`, `diet_requirement`, `habitat_desc`, `population_distribution`, `date_joined`, `dimension`, `nest`, `clutch_size`, `wing_span`, `fly`, `bird_colour`, `fish_body_temp`, `water_type`, `fish_colour`, `reproduction_type`, `avg_clutch_size`, `avg_offspring`, `gestational_period`, `category_id`, `body_temp`, `archive`) VALUES
(11, 'Psittaciformes', 'Parrot Green Bird', '2013-07-09', 'Female', '50 Years', 1, 2, 'Omnivores', 'Parrots, also known as psittacines, are birds of the roughly 393 species in 92 genera comprising the order Psittaciformes, found mostly in tropical and subtropical regions. The order is subdivided into three superfamilies: the Psittacoidea, the Cacatuoidea, and the Strigopoidea', '126854', '2018-06-05', '100 cm, 3 kg', 'Trees', '5-12', '48 cm', 'Yes', 'Green', '', '', '', '', '', '', '', NULL, '', 0),
(12, 'Poecilia reticulata', 'Guppy', '2019-10-09', 'Male', '2 Years', 5, 4, 'Omnivores', 'The guppy, also known as millionfish and rainbow fish, is one of the world\'s most widely distributed tropical fish and one of the most popular freshwater aquarium fish species. It is a member of the family Poeciliidae and, like almost all American members of the family, is live-bearing.', '25746354', '2020-03-18', '0.6-2.4 inches', '', '', '', NULL, '', '20 degree celsius', 'Salt', 'Red', '', '', '', '', 0, '', 0),
(13, 'Crocodylinae', 'Crocodile', '2009-02-03', 'Male', '70-100 years', 4, 3, 'Meat', 'Crocodiles or true crocodiles are large semiaquatic reptiles that live throughout the tropics in Africa, Asia, the Americas and Australia. Crocodylinae, all of whose members are considered true crocodiles, is classified as a biological subfamily.', '309000', '2017-07-06', '5 meters, 400 kg', '', '', '', NULL, '', '', '', '', 'Egg layer', '45', 'N/A', '', 0, '', 0),
(14, 'Ursidae', 'Bear', '2012-01-31', 'Male', '25 Years', 2, 5, 'Omnivores', 'Bears are carnivoran mammals of the family Ursidae. They are classified as caniforms, or doglike carnivorans. Although only eight species of bears are extant, they are widespread, appearing in a wide variety of habitats throughout the Northern Hemisphere and partially in the Southern Hemisphere.', '200000', '2014-01-28', '2 meters, 100 kg', '', '', '', NULL, '', '', '', '', '', '', '', '180 days', NULL, '97 degree Celsius', 0),
(15, 'Folivora', 'Sloth', '2015-05-04', 'Male', '25-30 years', 2, 5, 'Omnivorous', 'Sloths are a group of arboreal Neotropical xenathran mammals, constituting the suborder Folivora. Noted for slowness of movement, they spend most of their lives hanging upside down in the trees of the tropical rain forests of South America and Central America.', '1000', '2017-01-18', '25 inches, 7 kg', '', '', '', NULL, '', '', '', '', '', '', '', '100 days', 2, '23-24 degree celsius', 0);

-- --------------------------------------------------------

--
-- Table structure for table `animal_sponser`
--

CREATE TABLE `animal_sponser` (
  `as_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `sponser_id` int(11) NOT NULL,
  `band` varchar(2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
  `sponsorship_approval` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_sponser`
--

INSERT INTO `animal_sponser` (`as_id`, `animal_id`, `sponser_id`, `band`, `quantity`, `total_price`, `from_date`, `to_date`, `sponsorship_approval`) VALUES
(11, 11, 10, 'A', 1, '2500.00', '2020-08-21', NULL, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `applicant_id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `cv` varchar(999) NOT NULL,
  `approval_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicant_id`, `vacancy_id`, `firstname`, `surname`, `email`, `contact`, `cv`, `approval_status`) VALUES
(6, 4, 'Ram', 'Parsad', 'ramparsa@gmail.com', '9800000000', '5f3ea08d77e89.docx', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Prototheria'),
(2, 'Metatheria'),
(3, 'Eutheria'),
(4, 'new category');

-- --------------------------------------------------------

--
-- Table structure for table `classifications`
--

CREATE TABLE `classifications` (
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classifications`
--

INSERT INTO `classifications` (`class_id`, `name`) VALUES
(1, 'Birds'),
(2, 'Mammals'),
(3, 'Amphibians'),
(4, 'Reptiles'),
(5, 'Fish'),
(7, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(8) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `eventDate` varchar(255) NOT NULL,
  `noOfDays` varchar(255) NOT NULL,
  `archive` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `eventName`, `description`, `eventDate`, `noOfDays`, `archive`, `imageName`) VALUES
(7, 'White Tiger', 'New animal white tiger is revealed', '2020-08-29', '5', '0', '5f3ea10e949ec.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `animal_id`, `image`) VALUES
(17, 11, 'parrot.jpg'),
(18, 11, 'parrot1.jpg'),
(19, 12, 'guppy.jpg'),
(20, 12, 'guppy1.jpg'),
(21, 13, 'crocodile.jpg'),
(22, 13, 'crocodile1.jpg'),
(23, 14, 'bear.jpg'),
(24, 14, 'bear1.jpg'),
(25, 15, 'guppy1.jpg'),
(26, 15, 'parrot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `message` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location`) VALUES
(2, 'The Aviary'),
(3, 'The Hothouse'),
(4, 'The Aquarium'),
(5, 'The Cages/Compounds'),
(7, 'Pond');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `sponser_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `secondary_phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approval_status` varchar(255) DEFAULT NULL,
  `imageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`sponser_id`, `name`, `email`, `phone`, `secondary_phone`, `address`, `city`, `state`, `zip`, `username`, `password`, `approval_status`, `imageName`) VALUES
(10, 'My Company', 'sponsor@gmail.com', '9800000000', '', 'Kapan', 'Kathmandu', 'Bagmati', '01010', 'sponsor', '$2y$10$wWnxu7O97gmeJUejPfZcTu2quMKX1GUS4t17Frbx2CSbykoTsMCpS', 'Yes', '5f3e9f717ea0c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `persons` int(5) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `visiting_date` date NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `archive_status` varchar(255) DEFAULT NULL,
  `approval_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `name`, `persons`, `contact`, `visiting_date`, `total_price`, `archive_status`, `approval_status`) VALUES
(12, 'My Company', 5, '9800000000', '2020-08-28', '440.00', 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `vacancy_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `requirement` varchar(999) NOT NULL,
  `deadline` date NOT NULL,
  `approval_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitor_id` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitor_id`, `username`, `password`) VALUES
(11, 'user', '$2y$10$Zfjf5fuxUx1phpXFCN0oJeBU71xLPP/Rf3oOw00oDWzNDYtEuyJsW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `animalofweek`
--
ALTER TABLE `animalofweek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `animal_sponser`
--
ALTER TABLE `animal_sponser`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `classifications`
--
ALTER TABLE `classifications`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `sponsers`
--
ALTER TABLE `sponsers`
  ADD PRIMARY KEY (`sponser_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `animalofweek`
--
ALTER TABLE `animalofweek`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `animal_sponser`
--
ALTER TABLE `animal_sponser`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classifications`
--
ALTER TABLE `classifications`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sponsers`
--
ALTER TABLE `sponsers`
  MODIFY `sponser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitor_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
