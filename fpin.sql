-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2017 às 02:05
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE `candidatos` (
  `idCandidato` int(5) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `profissao` varchar(40) NOT NULL,
  `partido` varchar(50) NOT NULL,
  `realizacoes` varchar(200) NOT NULL,
  `ideias` varchar(200) NOT NULL,
  `filiacoes` varchar(200) NOT NULL,
  `cargos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`idCandidato`, `nome`, `sexo`, `idade`, `profissao`, `partido`, `realizacoes`, `ideias`, `filiacoes`, `cargos`) VALUES
(10, 'lu', 'Masculino', '', '', 'PMDB ? Partido do Movimento Democrático Brasileiro', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitores`
--

CREATE TABLE `eleitores` (
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(6) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eleitores`
--

INSERT INTO `eleitores` (`nome`, `cpf`, `email`, `nascimento`, `sexo`, `rua`, `numero`, `bairro`, `complemento`, `telefone`, `estado`, `cidade`, `senha`) VALUES
('luelldo', '12345678912', '', '0000-00-00', '', '', 0, '', '', '91778734', '', '', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`idCandidato`);

--
-- Indexes for table `eleitores`
--
ALTER TABLE `eleitores`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `idCandidato` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
