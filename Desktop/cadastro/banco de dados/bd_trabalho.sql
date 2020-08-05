-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Ago-2020 às 21:07
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` char(2) NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `situacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `nome`, `email`, `senha`, `data`, `cidade`, `uf`, `observacao`, `situacao`) VALUES
(28, '2', 'isamendes31@outlook.com', '2', '1999-06-24', 'SaoPaulo', 'SP', ',olololololo', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
