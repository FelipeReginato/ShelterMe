-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Jun-2022 às 19:42
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `shelterme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abrigo`
--

CREATE TABLE `abrigo` (
  `CodAbrigo` int(11) NOT NULL,
  `Nome_Abrigo` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `CNPJ` varchar(18) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Cidade` varchar(40) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `abrigo`
--

INSERT INTO `abrigo` (`CodAbrigo`, `Nome_Abrigo`, `Email`, `CNPJ`, `Estado`, `Cidade`, `Endereco`, `Senha`) VALUES
(1, 'Teste', 'teste@dada.com.br', '12.123.123/0001-12', 'teste', 'teste', 'teste', '9d2f637b1732565ca813402ef5eb7a24'),
(3, 'Teste1', 'a@gmail.com', '12.123.123/1000-10', 'teste', 'teste', 'teste', '5d44d60379779d3cd66380eb45f5af27'),
(4, 'Abrigo', 'a@gmail.com', '12.143.123/1000-10', 'ESTADO', 'Curitiba', 'Rua teste,000', '5d44d60379779d3cd66380eb45f5af27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `CodAnimal` int(11) NOT NULL,
  `CodPessoa` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Especie` varchar(70) NOT NULL,
  `Raca` varchar(40) NOT NULL,
  `Especs` varchar(60) NOT NULL,
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
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`CodAnimal`, `CodPessoa`, `Nome`, `Especie`, `Raca`, `Especs`, `Peso`, `Sexo`, `Estado`, `Cidade`, `Endereco`, `Status`, `DataStatus`, `DataNasc`) VALUES
(44, 6, 'Animal1', 'Cachorro', 'Border Collie', 'Olhos castanhos', '21 kg', 'Macho', 'ESTADO', 'Curitiba', 'Rua teste,000', 'Perdido', '13-04-2022', '01-12-2021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animalabrigo`
--

CREATE TABLE `animalabrigo` (
  `CodAnimal` int(11) NOT NULL,
  `CodAbrigo` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Especie` varchar(40) NOT NULL,
  `Raca` varchar(40) NOT NULL,
  `Cor` varchar(10) NOT NULL,
  `Porte` varchar(20) NOT NULL,
  `Peso` varchar(20) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Idade` varchar(20) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Cidade` varchar(40) NOT NULL,
  `Endereco` varchar(60) NOT NULL,
  `DataEncontro` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Encontrado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `animalabrigo`
--

INSERT INTO `animalabrigo` (`CodAnimal`, `CodAbrigo`, `Nome`, `Especie`, `Raca`, `Cor`, `Porte`, `Peso`, `Sexo`, `Idade`, `Estado`, `Cidade`, `Endereco`, `DataEncontro`, `Status`) VALUES
(15, 4, 'Animal1', 'Cachorro', 'Border Collie', 'Azul', 'Médio', '21 kg', 'Macho', 'Adulto', 'ESTADO', 'Curitiba', 'dadadasd', '04-08-2021', 'Excluido'),
(16, 4, 'animalabrigo', 'Cachorro', 'Border Collie', 'Azul', 'Grande', '21 kg', 'Fêmea', 'Adulto', 'ESTADO', 'Curitiba', 'Rua teste,000', '04-08-2021', 'Encontrado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `CodPessoa` int(11) NOT NULL,
  `Nome_Usuario` varchar(40) NOT NULL,
  `Nome_Completo` varchar(60) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Data_Nascimento` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`CodPessoa`, `Nome_Usuario`, `Nome_Completo`, `CPF`, `Data_Nascimento`, `Email`, `Senha`) VALUES
(2, 'Teste', 'Teste Teste', '123.456.789-00', '01-01-2022', 'teste@dada.com.br', 'c080d1e98236ae5b70c3f45b1924393d'),
(4, 'teste02', 'teste teste', '111.310.609-21', '01-12-2021', 'aaaaaaaa@gmail.com', '07cd109ac902429f267f8279f2a0041c'),
(5, 'teste03', 'teste teste', '111.310.609-45', '01-12-2021', 'aaaaaaaa@gmail.com', '5d44d60379779d3cd66380eb45f5af27'),
(6, 'Usuario1', 'Usuario Usuario', '111.111.111-11', '01-12-2021', 'a@gmail.com', '5d44d60379779d3cd66380eb45f5af27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `CodPostagem` int(11) NOT NULL,
  `CodAnimal` int(11) NOT NULL,
  `CodPessoa` int(11) NOT NULL,
  `DataPostagem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`CodPostagem`, `CodAnimal`, `CodPessoa`, `DataPostagem`) VALUES
(14, 44, 6, '11/06/2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagemabrigo`
--

CREATE TABLE `postagemabrigo` (
  `CodPostagem` int(11) NOT NULL,
  `CodAbrigo` int(11) NOT NULL,
  `CodAnimal` int(11) NOT NULL,
  `Data` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagemabrigo`
--

INSERT INTO `postagemabrigo` (`CodPostagem`, `CodAbrigo`, `CodAnimal`, `Data`) VALUES
(1, 4, 16, '11/06/2022');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `abrigo`
--
ALTER TABLE `abrigo`
  ADD PRIMARY KEY (`CodAbrigo`),
  ADD UNIQUE KEY `Nome_Abrigo` (`Nome_Abrigo`);

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`CodAnimal`),
  ADD UNIQUE KEY `Nome` (`Nome`),
  ADD KEY `FK_Pessoa` (`CodPessoa`);

--
-- Índices para tabela `animalabrigo`
--
ALTER TABLE `animalabrigo`
  ADD PRIMARY KEY (`CodAnimal`),
  ADD UNIQUE KEY `Nome` (`Nome`),
  ADD KEY `FK_Abrigo` (`CodAbrigo`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`CodPessoa`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `Nome_Usuario` (`Nome_Usuario`);

--
-- Índices para tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`CodPostagem`),
  ADD UNIQUE KEY `CodAnimal` (`CodAnimal`),
  ADD KEY `FK_CodPessoa` (`CodPessoa`);

--
-- Índices para tabela `postagemabrigo`
--
ALTER TABLE `postagemabrigo`
  ADD PRIMARY KEY (`CodPostagem`),
  ADD KEY `FK_AnimalAbrigo` (`CodAnimal`),
  ADD KEY `FK_CodAbrigo` (`CodAbrigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `abrigo`
--
ALTER TABLE `abrigo`
  MODIFY `CodAbrigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `CodAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `animalabrigo`
--
ALTER TABLE `animalabrigo`
  MODIFY `CodAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `CodPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `CodPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `postagemabrigo`
--
ALTER TABLE `postagemabrigo`
  MODIFY `CodPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_Pessoa` FOREIGN KEY (`CodPessoa`) REFERENCES `pessoa` (`CodPessoa`);

--
-- Limitadores para a tabela `animalabrigo`
--
ALTER TABLE `animalabrigo`
  ADD CONSTRAINT `FK_Abrigo` FOREIGN KEY (`CodAbrigo`) REFERENCES `abrigo` (`CodAbrigo`);

--
-- Limitadores para a tabela `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `FK_Animal` FOREIGN KEY (`CodAnimal`) REFERENCES `animal` (`CodAnimal`),
  ADD CONSTRAINT `FK_CodPessoa` FOREIGN KEY (`CodPessoa`) REFERENCES `pessoa` (`CodPessoa`);

--
-- Limitadores para a tabela `postagemabrigo`
--
ALTER TABLE `postagemabrigo`
  ADD CONSTRAINT `FK_AnimalAbrigo` FOREIGN KEY (`CodAnimal`) REFERENCES `animalabrigo` (`CodAnimal`),
  ADD CONSTRAINT `FK_CodAbrigo` FOREIGN KEY (`CodAbrigo`) REFERENCES `abrigo` (`CodAbrigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
