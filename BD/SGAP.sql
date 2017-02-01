-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2016 at 01:05 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SGAP`
--

-- --------------------------------------------------------

--
-- Table structure for table `periodico`
--

CREATE TABLE `periodico` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autores` varchar(500) NOT NULL,
  `resumo` text NOT NULL,
  `problema` text NOT NULL,
  `objetivo` text NOT NULL,
  `teorico` text NOT NULL,
  `metodo` text NOT NULL,
  `desenvolvimento` text NOT NULL,
  `resultado` text NOT NULL,
  `analise` text NOT NULL,
  `conclusao` text NOT NULL,
  `pforte` text NOT NULL,
  `pfraco` text NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodico`
--

INSERT INTO `periodico` (`id`, `titulo`, `autores`, `resumo`, `problema`, `objetivo`, `teorico`, `metodo`, `desenvolvimento`, `resultado`, `analise`, `conclusao`, `pforte`, `pfraco`, `idusuario`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1),
(2, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1),
(3, 'eqwqeq', 'eqw', 'eqeq', 'ewqewq', 'eqwewqewqewq', 'ewqewq', 'ewqewqewqe', 'ewqewqe', 'qewqewqe', 'eqewq', 'eqe', 'ewqe', 'ewqeqw', 1),
(4, 'futtuuyf', 'tfuytfutuytfuytfuytfytf', 'ytfuytfytftf', 'tyfyutfyfuytf', 'jhgfjhgfkjf', 'kjfjgçkjhlkjlkj', 'iojiuhuuihkhjk', 'ljkljl', 'qwqqweqwas', 'dasdasdaascs', 'sdfbsdfbsb', 'vsdbdbtbfb', 'qwerty', 1),
(5, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 1),
(6, 'poiuóiuop', 'opiupoiupoiu', 'oiupoiupoiu', 'oiupoiuipou', 'oiupoiupoiup', 'poiupoiuipou', 'poiupoiupoiu', 'poiupoiupoiu', 'poiupoiupoiu', 'poiupoiupou', 'poiupoiupoiu', 'piupoiupoiu', 'piuopoiuopu', 1),
(7, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `instituicao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `nome`, `senha`, `instituicao`) VALUES
(1, 'aofnas@hotmail.com', 'aquilla odlanier', '202cb962ac59075b964b07152d234b70', 'IFNMG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `periodico`
--
ALTER TABLE `periodico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `periodico`
--
ALTER TABLE `periodico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
