-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2025 às 01:20
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_turma_h`
--
CREATE DATABASE IF NOT EXISTS `bd_turma_h` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_turma_h`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `altura`, `sexo`, `data_nascimento`, `data_cadastro`) VALUES
(1, 'Prof. Tiago Rodrigues', '1.70', 'M', '1989-02-13', '2025-02-24 21:43:26'),
(6, 'Daniel Farias', '1.72', 'M', '2008-05-12', '2025-02-24 21:43:26'),
(7, 'Eloisa Carvalho', '1.67', 'F', '2005-11-17', '2025-02-24 21:43:26'),
(8, 'joao', '2.00', 'M', '2025-02-20', '2025-02-24 21:43:26'),
(9, 'Maria', '1.00', 'F', '2025-02-19', '2025-02-24 21:43:26'),
(11, 'zezinho', '2.00', 'M', '2025-02-18', '2025-02-24 21:43:26'),
(12, 'Pedro Henrique', '1.85', 'M', '2007-12-14', '2025-02-24 21:50:55'),
(13, 'Wilsom Magalhães Fererira', '2.00', 'M', '1979-09-12', '2025-03-06 20:06:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `salario` decimal(6,2) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `data_nascimento` date DEFAULT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `salario`, `status`, `data_nascimento`, `data_cadastro`) VALUES
(1, 'Prof. Tiago Rodrigues', '5000.00', 1, '1989-02-13', '2025-02-27 19:27:53'),
(2, 'Prof. Jose Marcio', '8500.50', 1, '1982-05-10', '2025-02-27 19:28:00'),
(3, 'Prof. Daniel Santos', '9100.00', 1, '1988-10-10', '2025-02-27 19:28:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
