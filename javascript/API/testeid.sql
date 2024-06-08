-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/06/2024 às 05:29
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
(1, 'joao', '[{\"count\":64,\"Slot\":3,\"id\":\"target\"}, {\"count\":64,\"Slot\":4,\"id\":\"sticky_piston\"}, {\"count\":64,\"Slot\":5,\"id\":\"warped_hyphae\"}, {\"count\":1,\"Slot\":6,\"id\":\"diamond_sword\"}, {\"count\":64,\"Slot\":7,\"id\":\"detector_rail\"}, {\"count\":64,\"Slot\":8,\"id\":\"rail\"}, {\"count\":64,\"Slot\":9,\"id\":\"jungle_log\"}, {\"count\":64,\"Slot\":17,\"id\":\"jukebox\"}, {\"count\":64,\"Slot\":21,\"id\":\"warped_stem\"}, {\"count\":64,\"Slot\":22,\"id\":\"jungle_wood\"}, {\"count\":64,\"Slot\":25,\"id\":\"powered_rail\"}, {\"count\":64,\"Slot\":27,\"id\":\"redstone\"}, {\"count\":64,\"Slot\":28,\"id\":\"redstone_torch\"}, {\"count\":64,\"Slot\":29,\"id\":\"redstone_block\"}, {\"count\":1,\"Slot\":100,\"id\":\"diamond_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"diamond_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"diamond_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"diamond_helmet\"}, {\"count\":1,\"Slot\":-106,\"id\":\"shield\"}]', '06e617e3-84d8-474e-a14a-beceb5cc7726.dat');

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
