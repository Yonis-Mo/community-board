-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 04:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `communitydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(70) NOT NULL,
  `posts_title` varchar(200) NOT NULL,
  `posts_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `posts_title`, `posts_detail`, `file`, `date`, `author`) VALUES
(18, 'Russia-Ukraine war LIVE updates: Russia violates ceasefire in Mariupol, evacuation halts; anti-occupation protests spring up across Ukraine', '<p>Russia declared a partial ceasefire on Saturday to allow humanitarian corridors out of the Ukrainian cities of Mariupol and Volnovakha, Russia&#39;s defence ministry said.&nbsp;&quot;From 1000 Moscow time (0700 GMT), the Russian side declares a ceasefire and the opening of humanitarian corridors to allow civilians to leave Mariupol and Volnovakha,&quot; Russian news agencies quoted the Russian defence ministry as saying.However, Mariupol officials said evacuation efforts in the city had to be halted as Russian forces are violating ceasefire by resuming shelling.Meanwhile, Russians are bracing for an uncertain future of spiraling inflation, economic hardship and an even sharper squeeze on imported goods. The rouble has lost a third of its value this week after unprecedented Western sanctions were imposed to punish Russia for invading Ukraine. The moves froze much of the central bank&#39;s $640 billion in reserves and barred several banks from global payments system SWIFT, leaving the rouble in free-fall.</p>\r\n', 'efac_58ee336015136683875c75ad3ffc4346.jpg', '2022-03-05', 'rashid minhas'),
(19, 'Putin says Ukraine’s future in doubt as ceasefires collapse', 'A promised ceasefire in the besieged port city of Mariupol collapsed amid scenes of terror but a pro-Russian official said safe-passage corridors would open again for city residents on Sunday, while Russian President Vladimir Putin warned that the ongoing resistance is putting Ukrainian statehood in jeopardy and likened the West’s sanctions on Russia to “declaring war”.', 'efac_b8b6101f8dc0b99c518a0756f22a57bf.jpg', '2022-03-06', 'Aamir Ali Hussain'),
(20, 'A hasty census exercise', 'The full results of census 2017 were only released six months ago. While there was desperate haste in the preparation and demarcations of the 2018 general elections based on the 2017 census, the pace of releasing detailed data required for actual planning, resource mobilisation and research was slow and lacklustre. The data has hardly been analysed or utilised and here we are sailing towards our next full count. It would be good to conduct a serious postmortem of the 2017 census and review its pitfalls, before wholeheartedly rolling out a full-fledged national exercise costing over Rs10 billion in public funds.', 'efac_09e494ec2a3813339e22ce257806c88c.jpg', '2022-03-06', 'Aamir Ali Hussain'),
(21, 'HOME TO LIMITLESS HORIZONS', 'Panorama residences exude an aura of luxury, and are elegantly designed keeping you and your family in mind.', 'efac_7ae760519b811d5f7735788489f0a124.jpg', '2022-03-06', 'Aamir Ali Hussain');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'rashid minhas', 'rashidminhas@gmail.com', 'admin', 'banner21', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(2, 'Aamir Ali Hussain', 'aamiralihussain53@gmail.com', 'aahj', '12345678', 'efac_c3c6a309f8b3cfcdc941d6f2b43bc174.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
