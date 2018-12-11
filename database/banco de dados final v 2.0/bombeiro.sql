-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2018 às 18:36
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bombeiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `email` varchar(45) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `idaluno` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome_gerra` varchar(40) NOT NULL,
  `tipo_sanguineo` varchar(2) NOT NULL,
  `ativo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`email`, `sobrenome`, `usuario`, `idaluno`, `nome`, `cpf`, `senha`, `nome_gerra`, `tipo_sanguineo`, `ativo`) VALUES
('erickson@mail.com', 'Silva Carvalho', 'erick', 7, 'erickson', '12345678910', '$2y$10$SffDcSQ6ohh5PtlmUu8MdOm4nigkSroGmZmfverTQHrjQS8SearLm', 'CARVALHO', 'O-', 1),
('erickson@gmail.com', 'Silva', 'ericks', 8, 'erickson', '12345678910', '$2y$10$.O.dc7pup3thHrYYr8EfLOIczYrWQf8jss/J7F.wink.quWrB7/ZW', 'CARVALHO', 'O-', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `combate_ince` varchar(45) NOT NULL,
  `Resgate_alt` varchar(45) NOT NULL,
  `nos_amara` varchar(45) NOT NULL,
  `aph` varchar(45) NOT NULL,
  `Legislacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`combate_ince`, `Resgate_alt`, `nos_amara`, `aph`, `Legislacao`) VALUES
('Combate à incedios', 'Resgate em Alturas', 'Nós e Amarração', 'APH', 'Legislação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `nome` varchar(45) NOT NULL,
  `idprofessor` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`nome`, `idprofessor`, `email`, `senha`) VALUES
('juvenal', 2, 'admin@admin.com', '$2y$10$B5Cji4XxTyzqcQphb0d6Xedjx4y.uJsRZmgtzOWnm86IMyOLtNNIm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `materia_1` int(3) DEFAULT '0',
  `materia_2` int(3) DEFAULT '0',
  `materia_3` int(3) DEFAULT '0',
  `materia_4` int(3) DEFAULT '0',
  `materia_5` int(3) DEFAULT '0',
  `nome_turma` varchar(40) NOT NULL,
  `idturma` int(11) NOT NULL,
  `idaluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`materia_1`, `materia_2`, `materia_3`, `materia_4`, `materia_5`, `nome_turma`, `idturma`, `idaluno`) VALUES
(80, 90, 80, 70, 50, 'BRAVO', 7, 7),
(0, 0, 0, 0, 0, 'ALFA', 8, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idprofessor`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`),
  ADD KEY `fk_turma_aluno1_idx` (`idaluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `idprofessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_turma_aluno1` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
