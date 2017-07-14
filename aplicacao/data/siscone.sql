-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2017 at 02:20 PM
-- Server version: 5.5.46
-- PHP Version: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siscone`
--

-- --------------------------------------------------------

--
-- Table structure for table `especialidade`
--

CREATE TABLE IF NOT EXISTS `especialidade` (
  `id_esp` int(2) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(30) NOT NULL,
  PRIMARY KEY (`id_esp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `especialidade`
--

INSERT INTO `especialidade` (`id_esp`, `especialidade`) VALUES
(1, 'SIN'),
(2, 'SAD'),
(3, 'BET'),
(4, 'SDE'),
(5, 'AV'),
(6, 'INT'),
(7, 'INF'),
(8, 'PED'),
(9, 'SVA'),
(10, 'SVI'),
(11, 'N/P'),
(12, 'TAR'),
(13, 'BCT'),
(18, 'SJU'),
(19, 'BSP'),
(20, 'BCT'),
(21, 'CCO'),
(22, 'SEM'),
(23, 'SSG'),
(24, 'SGS'),
(25, 'PSC'),
(26, 'ANS'),
(27, 'BIB'),
(28, 'EST'),
(29, 'AQV'),
(30, 'BCO'),
(31, 'Esp Com '),
(32, 'REP'),
(33, 'BMA'),
(35, 'TAD'),
(36, 'AR'),
(37, 'ADM');

-- --------------------------------------------------------

--
-- Table structure for table `militar`
--

CREATE TABLE IF NOT EXISTS `militar` (
  `id_militar` int(3) NOT NULL AUTO_INCREMENT,
  `id_post_grad` int(2) NOT NULL,
  `id_esp` int(2) NOT NULL,
  `id_quadro` int(2) NOT NULL,
  `id_secao` int(2) NOT NULL,
  `nome_completo` varchar(60) NOT NULL,
  `nome_guerra` varchar(40) NOT NULL,
  `situacao` varchar(4) NOT NULL,
  `ramal` varchar(10) NOT NULL,
  `rtcaer` varchar(4) DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `data_ult_prom` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `saram` int(7) DEFAULT NULL,
  `antiguidade_turma` int(1) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_militar`),
  KEY `id_post_grad` (`id_post_grad`),
  KEY `id_esp` (`id_esp`),
  KEY `id_quadro` (`id_quadro`),
  KEY `id_secao` (`id_secao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `militar`
--

INSERT INTO `militar` (`id_militar`, `id_post_grad`, `id_esp`, `id_quadro`, `id_secao`, `nome_completo`, `nome_guerra`, `situacao`, `ramal`, `rtcaer`, `data_nasc`, `data_ult_prom`, `email`, `saram`, `antiguidade_turma`, `ativo`) VALUES
(1, 14, 1, 5, 1, 'Fulano de Tal', 'Fulano', '1', '2242', '', '1988-03-01', '2015-11-26', 'fulanoft@fab.mil.br', 1234567, 1, 1),
(2, 14, 1, 5, 2, 'Ciclano de Tal', 'Ciclano', '1', '2242', NULL, '1991-10-01', '2011-06-22', 'ciclanoct@fab.mil.br', 1234567, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posto_grad`
--

CREATE TABLE IF NOT EXISTS `posto_grad` (
  `id_posto_grad` int(2) NOT NULL AUTO_INCREMENT,
  `posto_grad` varchar(3) NOT NULL,
  PRIMARY KEY (`id_posto_grad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `posto_grad`
--

INSERT INTO `posto_grad` (`id_posto_grad`, `posto_grad`) VALUES
(1, 'TB'),
(2, 'MB'),
(3, 'BR'),
(4, 'CL'),
(5, 'TC'),
(6, 'MJ'),
(7, 'CP'),
(8, '1T'),
(9, '2T'),
(10, 'ASP'),
(11, 'SO'),
(12, '1S'),
(13, '2S'),
(14, '3S'),
(15, 'CB'),
(16, 'S1'),
(17, 'S2'),
(18, 'CV');

-- --------------------------------------------------------

--
-- Table structure for table `quadro`
--

CREATE TABLE IF NOT EXISTS `quadro` (
  `id_quadro` int(2) NOT NULL AUTO_INCREMENT,
  `quadro` varchar(10) NOT NULL,
  PRIMARY KEY (`id_quadro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `quadro`
--

INSERT INTO `quadro` (`id_quadro`, `quadro`) VALUES
(1, 'QOAV'),
(2, 'QOINT'),
(3, 'QOAP'),
(4, 'QOCon'),
(5, 'QSS'),
(6, 'QOEA'),
(7, 'QOF'),
(8, 'N/P'),
(9, 'QOINF'),
(10, 'QTA'),
(11, 'QCOA'),
(12, 'QSCon'),
(13, 'QCB'),
(14, 'QSD'),
(15, 'QOESUP'),
(16, 'QESA'),
(17, 'QOECOM'),
(18, 'QFG');

-- --------------------------------------------------------

--
-- Table structure for table `secao`
--

CREATE TABLE IF NOT EXISTS `secao` (
  `id_secao` int(2) NOT NULL AUTO_INCREMENT,
  `secao` varchar(100) NOT NULL,
  PRIMARY KEY (`id_secao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `secao`
--

INSERT INTO `secao` (`id_secao`, `secao`) VALUES
(1, 'SETOR1'),
(2, 'SETOR2'),
(3, 'SETOR3'),
(4, 'SETOR4');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saram` int(7) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `grupo` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `saram`, `nome`, `login`, `email`, `senha`, `grupo`, `ativo`) VALUES
(1, 1234567, 'Severino Silva Sauro', 'severinosss', 'severinosss@fab.mil.brr', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(2, 7654321, 'Filisbino Faria Feliz', 'filisbinofff', 'filisbinofff@fab.mil.br', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `militar`
--
ALTER TABLE `militar`
  ADD CONSTRAINT `militar_ibfk_1` FOREIGN KEY (`id_post_grad`) REFERENCES `posto_grad` (`id_posto_grad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `militar_ibfk_2` FOREIGN KEY (`id_esp`) REFERENCES `especialidade` (`id_esp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `militar_ibfk_3` FOREIGN KEY (`id_quadro`) REFERENCES `quadro` (`id_quadro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `militar_ibfk_4` FOREIGN KEY (`id_secao`) REFERENCES `secao` (`id_secao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
