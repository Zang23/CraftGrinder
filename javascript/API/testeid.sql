-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2024 às 21:45
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
(1, 'joao', '[{\"count\":64,\"Slot\":3,\"id\":\"minecraft/target\"}, {\"count\":64,\"Slot\":4,\"id\":\"minecraft/sticky_piston\"}, {\"count\":64,\"Slot\":5,\"id\":\"minecraft/warped_hyphae\"}, {\"count\":1,\"Slot\":6,\"id\":\"minecraft/diamond_sword\"}, {\"count\":64,\"Slot\":7,\"id\":\"minecraft/detector_rail\"}, {\"count\":64,\"Slot\":8,\"id\":\"minecraft/rail\"}, {\"count\":64,\"Slot\":9,\"id\":\"minecraft/jungle_log\"}, {\"count\":64,\"Slot\":17,\"id\":\"minecraft/jukebox\"}, {\"count\":64,\"Slot\":21,\"id\":\"minecraft/warped_stem\"}, {\"count\":64,\"Slot\":22,\"id\":\"minecraft/jungle_wood\"}, {\"count\":64,\"Slot\":25,\"id\":\"minecraft/powered_rail\"}, {\"count\":64,\"Slot\":27,\"id\":\"minecraft/redstone\"}, {\"count\":64,\"Slot\":28,\"id\":\"minecraft/redstone_torch\"}, {\"count\":64,\"Slot\":29,\"id\":\"minecraft/redstone_block\"}, {\"count\":1,\"Slot\":100,\"id\":\"minecraft/diamond_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"minecraft/diamond_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"minecraft/diamond_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"minecraft/diamond_helmet\"}, {\"count\":1,\"Slot\":-106,\"id\":\"minecraft/shield\"}]', '06e617e3-84d8-474e-a14a-beceb5cc7726.dat');

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
