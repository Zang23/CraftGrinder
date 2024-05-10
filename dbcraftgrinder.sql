-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/05/2024 às 10:32
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcraftgrinder`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbartigo`
--

CREATE TABLE `tbartigo` (
  `idArtigo` int(11) NOT NULL,
  `nomeArtigo` varchar(80) DEFAULT NULL,
  `tipoArtigo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbartigo`
--

INSERT INTO `tbartigo` (`idArtigo`, `nomeArtigo`, `tipoArtigo`) VALUES
(37, 'Farm de Ferro', 'Farm'),
(38, 'Farm de Esqueleto', 'Farm'),
(39, 'Como domesticar um lobo', 'Guia'),
(40, 'Fornalha Industrial', 'Maquina'),
(46, 'Atualizacao 1.20.1', 'Atualizacao'),
(48, 'Espada de Netherite', 'Item'),
(49, 'calça de ferro', 'Item'),
(50, 'Arco', 'Item');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbatualizacao`
--

CREATE TABLE `tbatualizacao` (
  `idAtualizacao` int(11) NOT NULL,
  `nomeAtualizacao` varchar(80) NOT NULL,
  `descAtualizacao` longtext DEFAULT NULL,
  `tipoAtualizacao` varchar(25) DEFAULT NULL,
  `imagemAtualizacao` varchar(250) DEFAULT NULL,
  `caminhoImagemAtualizacao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `idCliente` int(11) NOT NULL,
  `emailCliente` varchar(255) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `nicknameCliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfarm`
--

CREATE TABLE `tbfarm` (
  `idFarm` int(11) NOT NULL,
  `nomeFarm` varchar(80) NOT NULL,
  `descFarm` longtext DEFAULT NULL,
  `miniDescFarm` varchar(250) DEFAULT NULL,
  `tipoFarm` varchar(25) DEFAULT NULL,
  `imagemFarm` varchar(250) DEFAULT NULL,
  `caminhoImagemFarm` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbguia`
--

CREATE TABLE `tbguia` (
  `idGuia` int(11) NOT NULL,
  `nomeGuia` varchar(80) NOT NULL,
  `descGuia` longtext DEFAULT NULL,
  `miniDescGuia` varchar(250) DEFAULT NULL,
  `tipoGuia` varchar(25) DEFAULT NULL,
  `imagemGuia` varchar(250) DEFAULT NULL,
  `caminhoImagemGuia` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbitem`
--

CREATE TABLE `tbitem` (
  `idItem` int(11) NOT NULL,
  `nomeItem` varchar(80) DEFAULT NULL,
  `descItem` longtext DEFAULT NULL,
  `miniDescItem` varchar(250) DEFAULT NULL,
  `tipoItem` varchar(25) DEFAULT NULL,
  `imagemItem` varchar(250) DEFAULT NULL,
  `caminhoImagemItem` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmaquina`
--

CREATE TABLE `tbmaquina` (
  `idMaquina` int(11) NOT NULL,
  `nomeMaquina` varchar(80) DEFAULT NULL,
  `descMaquina` longtext DEFAULT NULL,
  `miniDescMaquina` varchar(250) DEFAULT NULL,
  `tipoMaquina` varchar(25) DEFAULT NULL,
  `imagemMaquina` varchar(250) DEFAULT NULL,
  `caminhoImagemMaquina` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbartigo`
--
ALTER TABLE `tbartigo`
  ADD PRIMARY KEY (`idArtigo`);

--
-- Índices de tabela `tbatualizacao`
--
ALTER TABLE `tbatualizacao`
  ADD PRIMARY KEY (`idAtualizacao`);

--
-- Índices de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbfarm`
--
ALTER TABLE `tbfarm`
  ADD PRIMARY KEY (`idFarm`);

--
-- Índices de tabela `tbguia`
--
ALTER TABLE `tbguia`
  ADD PRIMARY KEY (`idGuia`);

--
-- Índices de tabela `tbitem`
--
ALTER TABLE `tbitem`
  ADD PRIMARY KEY (`idItem`);

--
-- Índices de tabela `tbmaquina`
--
ALTER TABLE `tbmaquina`
  ADD PRIMARY KEY (`idMaquina`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbartigo`
--
ALTER TABLE `tbartigo`
  MODIFY `idArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `tbatualizacao`
--
ALTER TABLE `tbatualizacao`
  MODIFY `idAtualizacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfarm`
--
ALTER TABLE `tbfarm`
  MODIFY `idFarm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `tbguia`
--
ALTER TABLE `tbguia`
  MODIFY `idGuia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbitem`
--
ALTER TABLE `tbitem`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbmaquina`
--
ALTER TABLE `tbmaquina`
  MODIFY `idMaquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
