-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2023 at 04:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `image`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text', 'article/mtzrASTCto .jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-10-19 08:52:11', '2023-10-19 08:52:11'),
(2, 'Lorem Ipsum', 'article/t6FBv8QTPQ .jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-10-19 08:58:47', '2023-10-19 08:52:25'),
(3, 'with desktop publishing software like Aldus PageMaker including versions', 'article/qlxk1JIZJ6 .jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-10-19 08:52:40', '2023-10-19 08:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bali', 'galery/1R7Xv5Far9 .jpg', '2023-10-19 08:04:23', '2023-10-19 08:04:23'),
(2, 'Jakarta', 'galery/cQRnS09dBP .jpg', '2023-10-19 08:04:31', '2023-10-19 08:04:31'),
(4, 'Bandung', 'galery/6BiHVkla1D .jpg', '2023-10-19 08:14:19', '2023-10-19 08:14:19'),
(5, 'Lombok', 'galery/WU12UodJLk .jpg', '2023-10-19 08:24:31', '2023-10-19 08:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `title`, `price`, `capacity`, `location`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'All in Wedding Package Menara Mandiri 9F 800 Pax 2023', '417000000', '800', 'Jakarta', 'jasa/V8pXchUO6E .jpg', 'INCLUSION\r\n3 Hours Usage of Assembly Hall\r\n9th and 10th Floor for Reception\r\nElectricity Capacities from 25,000 watts to 50.000 watts\r\nStandard Air Conditioner During The Event\r\n1 VIP room for 1 Technical Meeting\r\n2 VIP rooms for the bride & groom, and the family\r\n14m-16m x 3,6 x 0,4 m module stage for entertainment\r\nParking lot up to 1500 parking\r\n\r\nCATERING\r\nBuffet and Food Stall Catering\r\nBuffet & Food Stall Decoration with Fresh Flower\r\n*) Food & beverages can be adjusted by request\r\n\r\nDECORATION\r\nWedding Decoration with flower arrangements\r\nAngpao boxes at reception desks\r\n\r\n*applied by voucher\r\n\r\nENTERTAINMENT\r\nBaby Grand Piano, 1 Singer, 1 Professional MC, 1 string or cajon\r\n\r\nPHOTO & VIDEO\r\n2 photographers, 1 videografer, photo album, video teaser after wedding\r\n\r\nWEDDING PLANNER & WO\r\nProfessional Wedding Planner & Organizers with Japanese Standard Hospitality\r\nTo assist wedding planning from pre event, on the day service until after wedding\r\nTo assist and arrange meeting schedule with vendor partners\r\nUnlimited wedding consultation by appointment\r\nTo check all ordered vendor items are according to client\'s order on the wedding day\r\nTo assist family, relatives. bridesmaid, and groomsmen\r\nTo coordinate with each other vendor and report to family committe\r\n\r\nPRIVILEGES\r\nLive Streaming Voucher\r\nSanggar/Bridal Voucher\r\nUsher Voucher\r\nScreen & Projector for Wedding Day\r\n10 units free parking ticket\r\n4 reception tables and 4 guest books\r\n200 banquet chair\r\nRound table for VIP Area', '2023-10-19 06:41:35', '2023-10-19 08:23:12'),
(2, 'Crystal', '199500000', '200', 'Bandung', 'jasa/SndYuM9YYL .jpg', '- Wedding Hall Indoor & Semi-outdoor ( Valid For Sunday Only )\r\n- Buffet Menu For 200 Pax\r\n- Decoration\r\n- MC & Entertainment\r\n- Wedding Organizer\r\n- Photo & Video\r\n- Bridal & Make Up\r\n- Wedding Cake', '2023-10-19 06:52:16', '2023-10-19 07:25:37'),
(4, 'AYANA WEDDING PACKAGE I', '1008888000', '1000', 'Ayana Jakarta', 'jasa/CxYiBd9TA0 .jpg', 'AYANA WEDDING PACKAGE I \r\n\r\nIDR 1.008.888.000 Net for 1000 persons\r\n\r\n\r\nBEFORE THE WEDDING DAY \r\n	Complimentary food tasting session for up to 10 (ten) persons\r\n	Coffee, tea and snacks for 20 (twenty) persons during final technical meeting\r\n\r\nON THE WEDDING DAY\r\n	Complimentary 2 (two) nights stay at our richly decorated Bridal Suite. Take pleasure in a nourishing breakfast enjoyed in the privacy of your suite or experience the social ambience and vast array of buffet breakfast at RASA Restaurant\r\n	A bottle of “Moet” champagne with an indulgent chocolate box to enhance the private celebration of your wedding day\r\n	A 120-minute “Royal Wedding Retreat” spa treatment which includes body scrub, AYANA massage and flower milk bath for the bride and the groom after your wedding day\r\n	12 (Twelve) complimentary stays in a Deluxe Room for one night on the day of the event for family members including buffet breakfast for two in RASA Restaurant\r\n	Wedding buffet for 700 persons with additional food stall for 1500 portions and dessert stall for 200 portions\r\n	Complimentary one glass of soft-drink OR flavored iced tea as per buffet order\r\n	Five-tier Champagne Fountain provided with two complimentary bottles of sparkling juice\r\n	Wedding cake voucher with value IDR 6.500.000,-\r\n	Special flower arrangement for the buffet centerpiece on up to five VIP tables\r\n	Complimentary use of our Jimbaran Garden inclusive of tent (329 sqm)\r\n	LED screen with size of 2x3m\r\n	8 (Eight) complimentary reception books\r\n	Red carpet from the Grand Ballroom entrance to the Bridal stage\r\n	A hospitality room for family members on the wedding day with refreshments for 30 persons\r\n	Early family dinner on the wedding day for 30 persons\r\n	Crew meal on the wedding day for 30 persons\r\n	Complimentary 40 parking vouchers for four hours on the wedding day.\r\n	Exclusive room rates for family and friends on the day of event (minimum 10 rooms)\r\n	Additional buffet order at IDR 858.000 net per person\r\n\r\nSPECIAL GIFT FOR YOUR HONEYMOON\r\n	Complimentary 2 (two) nights stay for a romantic escape in AYANA Resort & Spa BALI OR RIMBA Jimbaran BALI OR AYANA Komodo Resort Waecicu Beach \r\n\r\nON YOUR 1ST ANNIVERSARY DAY\r\n	Complimentary 1 (one) night stay for your first wedding anniversary in our Suite inclusive of buffet breakfast at RASA Restaurant and a memorable dinner for two persons at one of our restaurants', '2023-10-19 07:31:29', '2023-10-19 07:31:29'),
(5, 'Khayangan Estate (Paket Low Season)', '358160000', '250', 'Lombok', 'jasa/uKJ3k398qj .jpg', '- 6 bed rooms , with max stay in-house are 12 adults.\r\n- Airport transfer from/to Khayangan Estate\r\n- Welcome drink and cold towel upon arrival\r\n- Complimentary fresh fruit basket and flower arrangement in the suites\r\n- Continental / Indonesian / American Breakfast\r\n- Daily afternoon tea from 4 - 6 PM\r\n- Free wireless internet access\r\n- Villa Laundry (max 2 pcs/pax/day).\r\n- Dry laundry has to be sent to the professional and will be charges at cost\r\n- Free use of our cliff-top Seventh Heaven Spa with 180 degrees panoramic view overlooking a 3 km white sand beach and the Indian Ocean, fully air-conditioned with all facilities including a Vichy shower, chill cold Jacuzzi by the edge of the cliff (excluding massages).\r\n- Banjar fee is included', '2023-10-19 08:25:49', '2023-10-19 08:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'aria', 'ariagames100@gmail.com', '$2y$10$Ti2zG1pGlAvtUJXjS3rht.YMKvNCnyLaCJgV51n1fCxofW86gNwpe', '2023-10-18 21:04:37', '2023-10-18 21:04:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
