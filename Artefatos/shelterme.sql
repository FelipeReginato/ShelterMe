-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2022 at 08:29 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelterme`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `CodAnimal` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Especie` varchar(70) NOT NULL,
  `Raca` varchar(40) NOT NULL,
  `Porte` varchar(40) NOT NULL,
  `Peso` varchar(20) DEFAULT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Cidade` varchar(40) NOT NULL,
  `Endereco` varchar(60) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `DataStatus` varchar(10) NOT NULL,
  `DataNasc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`CodAnimal`, `Nome`, `Especie`, `Raca`, `Porte`, `Peso`, `Sexo`, `Estado`, `Cidade`, `Endereco`, `Status`, `DataStatus`, `DataNasc`) VALUES
(19, 'dadad', 'American Pitbull Terrier', 'pitbull', 'Grande', '21 kg', 'Macho', 'teste', 'Curitiba', 'teste', 'Solucionado', '04-05-2022', '03-05-2022'),
(20, 'aaaaaaa', 'American Pitbull Terrier', 'pitbull', 'Grande', '21 kg', 'Macho', 'teste', 'Curitiba', 'teste', 'Solucionado', '04-05-2022', '05-05-2022'),
(21, 'aaaaaaa', 'American Pitbull Terrier', 'pitbull', 'Pequeno', '21 kg', 'Macho', 'teste', 'Curitiba', 'teste', 'Perdido', '10-05-2022', '10-05-2022'),
(22, 'aaaaaaa', 'American Pitbull Terrier', 'pitbull', 'Grande', '21 kg', 'Macho', 'teste', 'Curitiba', 'teste', 'Perdido', '03-05-2022', '04-05-2022'),
(23, '', 'American Pitbull Terrier', 'pitbull', 'Grande', '21 kg', 'Macho', 'Paraná', 'Curitiba', 'Rua aaaa', 'Perdido', '11-05-2022', '18-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `postagem`
--

CREATE TABLE `postagem` (
  `CodPostagem` int(11) NOT NULL,
  `CodAnimal` int(11) NOT NULL,
  `CodUsuario` int(11) NOT NULL,
  `NomeCompleto` varchar(60) NOT NULL,
  `DataPostagem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postagem`
--

INSERT INTO `postagem` (`CodPostagem`, `CodAnimal`, `CodUsuario`, `NomeCompleto`, `DataPostagem`) VALUES
(50, 21, 2, 'testeNome', '08/05/2022'),
(51, 22, 2, 'Felipe', '08/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `CodUsuario` int(11) NOT NULL,
  `NomeUsuario` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`CodUsuario`, `NomeUsuario`, `Email`, `Senha`) VALUES
(1, 'teste', '120351@dada.com.br', '698dc19d489c4e4db73e28a713eab07b'),
(2, 'aaaaaaa', 'aaaaaaaaaa@gmail.com', '594f803b380a41396ed63dca39503542'),
(5, 'teste1', 'nicolas.ortiz@pucpr.edu.br', 'c0a2e0c56f6d4d2bfc670d859a2a0075');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`CodAnimal`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`CodPostagem`),
  ADD UNIQUE KEY `CodAnimal` (`CodAnimal`),
  ADD KEY `FK_PostagemDono` (`CodUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CodUsuario`),
  ADD UNIQUE KEY `NomeUsuario` (`NomeUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `CodAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `CodPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CodUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `FK_Animal` FOREIGN KEY (`CodAnimal`) REFERENCES `animal` (`CodAnimal`),
  ADD CONSTRAINT `FK_Usuario` FOREIGN KEY (`CodUsuario`) REFERENCES `usuario` (`CodUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
