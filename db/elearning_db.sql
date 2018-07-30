-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 10:09 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `for_level` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `for_level`, `category`, `image`, `description`, `path`) VALUES
(1, '', '400', 'docs', '', 'speech', 'files/uploads/'),
(2, 'slips', '200', 'slip', '', 'scripts', 'files/uploads/slip.pdf'),
(3, 'letter', 'all', 'pdf', '', 'union', 'uploads/letter of request.pdf'),
(4, 'CSC 203 ', '200', 'lecture note', '', 'hand outs', 'uploads/CSC203Complete.pdf'),
(5, 'GST211', '200', 'Presentation', '', 'lecture slides', 'uploads/RADIATION GST 211 LECTURE.pptx'),
(6, 'java series', '200', 'pdf', '', 'java programming language 1 of 15', 'uploads/chapter1.pdf'),
(7, ' csc 202 java series', '200', 'pdf', '', 'java programming language 2 of 15', 'uploads/chapter2.pdf'),
(8, 'csc 202 java series', '200', 'pdf', '', 'java programming language 3 of 15', 'uploads/chapter3.pdf'),
(9, 'csc 202 java series', '200', 'pdf', '', 'java programming language 4 of 15', 'uploads/chapter4.pdf'),
(10, 'csc 202 java series', '200', 'pdf', '', 'java programming language 5 of 15', 'uploads/chapter5.pdf'),
(11, 'graph theory', '200', 'pdf', '', 'HAND OUT', 'uploads/208 Graph theory.pdf'),
(12, 'Applied Informatics', 'all', 'pdf', '', 'a journal on aplied informatics published date:2017', 'uploads/applied informatics.pdf'),
(13, 'Trust and Distrust in E-commerce', 'all', 'pdf', '', 'how the issue of trust can be managed in ecommerce', 'uploads/sustainability-10-01015.pdf'),
(14, 'sample video', 'all', 'video', '', 'testing video upload', 'uploads/Wildlife.wmv'),
(15, 'Django web development', 'all', 'video', '', 'a framework for python programming language', 'uploads/Creating App - Django Web Development with Python 2.mp4'),
(16, 'Swaroop C. H.-A Byte of Python 1.92 (2009)', 'all', 'book', '', 'python programming language textbook', 'uploads/Swaroop C. H.-A Byte of Python 1.92 (2009).pdf'),
(17, 'internet of things', '200', 'book', '', 'internet of things ', 'uploads/iot.pdf'),
(18, 'Lips tutorials', '400', 'pdf', '', 'Artificial intelligence course material', 'uploads/LispTutorial.pdf'),
(19, 'Time Table', '400', 'document', '', 'Level 400 First Semester time table', 'uploads/CSC 208 Reading Assignment.docx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `reg_no` text,
  `email` varchar(200) NOT NULL,
  `level` int(255) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `reg_no`, `email`, `level`, `password`) VALUES
(5, 'embash', 'cardon', 'fsc/csc/15/0005', 'embash@app.com', 400, '5f4dcc3b5aa765d61d8327deb882cf'),
(6, 'aminu', 'Halliru', 'fsc/csc/12/008', 'hali@app.com', 400, 'password'),
(7, 'abass', 'rotimi', 'fsc/csc/15/0019', 'rotimi@app.com', 400, '5f4dcc3b5aa765d61d8327deb882cf'),
(8, 'omotoke', 'omosanya amina', 'fsc/mcb/16/1041', 'omosanya2016@gmail.com', 200, '3ab01c5a0185191555f4fe6c54b8f6'),
(10, 'auwal', 'magaji', 'fag/fish/16/0111', 'auwal@fish.com', 200, '5f4dcc3b5aa765d61d8327deb882cf'),
(11, 'olodo', 'oniranu', 'fsc/csc/18/004', 'olodo@fud.com', 100, 'password'),
(12, 'haladu', 'ishaq', 'fsc/csc/17/0009', 'hala@isaqabdul.com', 200, 'password'),
(13, 'ibrahim', 'embash', 'fsc/csc/17/1212', 'emboss@appelearning.com', 200, 'password'),
(14, 'tawakaltu', 'omowa', 'fcs/btg/14/1247', 'tawa@kalitu.com', 400, 'password'),
(15, 'laba', 'bala', 'fsc/csc/14/045', 'abkabk@gmail.com', 400, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
