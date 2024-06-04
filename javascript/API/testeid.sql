-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/06/2024 às 13:07
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testeid`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `clinome` varchar(150) NOT NULL,
  `vetorsql` text DEFAULT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `clinome`, `vetorsql`, `file`) VALUES
(1, 'joao', '[{\"Slot\":{0},\"id\":{\"minecraft:log\"},\"Count\":{10},\"Damage\":{0}},{\"Slot\":{1},\"id\":{\"minecraft:wool\"},\"Count\":{1},\"Damage\":{0}},{\"Slot\":{2},\"id\":{\"minecraft:mutton\"},\"Count\":{1},\"Damage\":{0}},{\"Slot\":{3},\"id\":{\"tconstruct:book\"},\"Count\":{1},\"Damage\":{0}},{\"Slot\":{4},\"id\":{\"conarm:book\"},\"Count\":{1},\"Damage\":{0}},{\"Slot\":{5},\"id\":{\"minecraft:apple\"},\"Count\":{1},\"Damage\":{0}},{\"Slot\":{6},\"id\":{\"minecraft:sapling\"},\"Count\":{3},\"Damage\":{0}}]', '0304cadb-1ec5-384b-a49d-1a83b5c502d4.dat');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
