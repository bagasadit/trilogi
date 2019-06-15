-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2019 pada 17.36
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phixit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `unique_title_blog` varchar(255) NOT NULL,
  `date_blog` date NOT NULL,
  `title_blog` varchar(255) NOT NULL,
  `desc_blog` text NOT NULL,
  `author_blog` varchar(25) NOT NULL,
  `images_blog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `unique_title_blog`, `date_blog`, `title_blog`, `desc_blog`, `author_blog`, `images_blog`) VALUES
(1, 'tips-to-safe-surfing-with-internet-banking', '2016-11-02', 'Tips to safe surfing with internet banking', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'James Rhodes', 'assets/images/blog/blog1_.jpg'),
(2, 'steps-for-ensuring-a-smooth-financial-merger', '2016-12-04', 'Steps for Ensuring a Smooth Financial Merger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum....', 'Jessica', 'assets/images/blog/blog2_.jpg'),
(3, 'businesses-have-multiple-iot-drp', '2016-12-10', 'Businesses Have Multiple IoT DPO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum....', 'Adrian', 'assets/images/blog/blog3_.jpg'),
(4, 'cats-content-marketing-ideas-for-june', '2016-09-02', 'Cats, Content Marketing Ideas For June', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum....', 'Hammer', 'assets/images/blog/blog4_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `name_sender_message` varchar(100) NOT NULL,
  `email_sender_message` varchar(100) NOT NULL,
  `message_sender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `name_sender_message`, `email_sender_message`, `message_sender`) VALUES
(2, 'admin', 'a@a', 'a'),
(4, 'a', 'a@a', 'a'),
(5, 'jallu', 'jallu@jallu', 'jallu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `email_project` varchar(255) NOT NULL,
  `status_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `email_project`, `status_project`) VALUES
(1, 'irfan@antix.or.id', 1),
(2, 'irfan@antix.or.id', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `name_team` varchar(100) NOT NULL,
  `job_team` varchar(50) NOT NULL,
  `desc_team` text NOT NULL,
  `photo_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id_team`, `name_team`, `job_team`, `desc_team`, `photo_team`) VALUES
(1, 'John Doe', 'Senior Web Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assets/images/team/1_crop.png'),
(2, 'Gavin owen', 'software engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assets/images/team/2_crop.png'),
(3, 'Alexander', 'digital marketing / partner', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assets/images/team/3_crop.png'),
(4, 'George Arnold', 'graphic designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assets/images/team/4_crop.png'),
(5, 'Kyla la grange', 'digital marketing', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assets/images/team/6_crop.png'),
(6, 'Clint Hansen', 'web development', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assets/images/team/5_crop.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id_work` int(11) NOT NULL,
  `title_work` varchar(255) NOT NULL,
  `unique_title_work` varchar(255) NOT NULL,
  `date_time_work` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `desc_work` text NOT NULL,
  `category_work` varchar(50) NOT NULL,
  `category_detail_work` varchar(100) NOT NULL,
  `images_work` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id_work`, `title_work`, `unique_title_work`, `date_time_work`, `desc_work`, `category_work`, `category_detail_work`, `images_work`) VALUES
(1, 'Created theme for your phone', 'created-theme-for-your-phone', '2016-12-11 00:06:41', 'The ridges will flow in one side, recurve, (loop. around) touch or pass through an imaginary line drawn from the. delta to the core, and exit the pattern on the same side as it entered.\n\nWe pride ourselves in merging digital marketing and software development into seamless experiences. We excel in a vast array of disciplines and choose our tools based on our clients’ unique objectives – not the other way around There are three main fingerprint patterns: In a Loop pattern, the ridges will flow in one side, recurve, (loop. around) touch or pass through an imaginary line drawn from the. delta to the core, and exit the pattern on the same side as it entered.', 'mobileapp', 'Mobile Phone', 'assets/images/work/9_.jpg'),
(2, 'Stay Strong, great Web applications', 'stay-strong-great-web-applications', '2016-12-11 00:05:11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'webapp', 'Web Development', 'assets/images/work/45.jpg'),
(3, 'Photography website, beauty design', 'photography-website-beauty-design', '2016-12-11 00:05:15', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'webapp', 'Web Development', 'assets/images/work/5_.jpg'),
(4, 'Social Media Week mobile app', 'social-media-week-mobile-app', '2016-12-11 00:05:26', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'mobileapp', 'Mobile App', 'assets/images/work/6__.png'),
(5, 'Douding FM, music player app', 'douding-fm-music-player-app', '2016-12-11 00:05:30', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'mobileapp', 'Mobile App', 'assets/images/work/7_.png'),
(6, 'Mockerie, photography website', 'mockerie-photography-website', '2016-12-11 00:05:36', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'webapp', 'Web Development', 'assets/images/work/8_.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id_work`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id_work` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
