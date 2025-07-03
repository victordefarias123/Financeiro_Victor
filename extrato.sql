-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2025 às 02:39
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `financeiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `extrato`
--

CREATE TABLE `extrato` (
  `id` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `valor` double NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `extrato`
--

INSERT INTO `extrato` (`id`, `data`, `tipo`, `valor`, `descricao`) VALUES
(18, '2025-06-30', 'D', -1000, 'oi'),
(19, '2025-06-30', 'C', 2000, 'gas'),
(20, '2025-06-30', 'D', -5000, 'gasolina'),
(21, '2025-06-30', 'D', -1000, 'das'),
(22, '2025-06-30', 'C', 6000, 'gas 2'),
(23, '2025-06-30', 'C', 2000, 'herança'),
(24, '2025-06-30', 'D', -6000, 'motor do carro'),
(25, '2025-06-30', 'C', 8000, 'Salario'),
(26, '', '', 0, ''),
(27, '2025-06-30', 'C', 10000, 'gas 2'),
(28, '2025-06-30', 'D', -15000, 'dasdas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `extrato`
--
ALTER TABLE `extrato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `extrato`
--
ALTER TABLE `extrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
