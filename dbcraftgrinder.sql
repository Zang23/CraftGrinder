-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2024 às 02:13
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
-- Estrutura da tabela `tbartigo`
--

CREATE TABLE `tbartigo` (
  `idArtigo` int(11) NOT NULL,
  `nomeArtigo` varchar(80) DEFAULT NULL,
  `tipoArtigo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbartigo`
--

INSERT INTO `tbartigo` (`idArtigo`, `nomeArtigo`, `tipoArtigo`) VALUES
(114, 'Farm de Esqueleto', 'Farm'),
(115, 'Farm de Pigman', 'Farm'),
(116, 'Farm de Pigman', 'Farm'),
(117, 'Farm de zumbi', 'Farm'),
(118, 'Farm de Kaisa', 'Farm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbatualizacao`
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
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `idCliente` int(11) NOT NULL,
  `emailCliente` varchar(255) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `nicknameCliente` varchar(30) NOT NULL,
  `inventarioClientes` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`idCliente`, `emailCliente`, `senhaCliente`, `nicknameCliente`, `inventarioClientes`) VALUES
(1, 'thiago@gmail.com', 'senha', 'Zang', 'usuarios/06e617e3-84d8-474e-a14a-beceb5cc7726.dat'),
(2, 'kevinviado@gmail.com', 'senha', 'kevin Viado', 'usuarios/06e617e3-84d8-474e-a14a-beceb5cc7726.dat');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfarm`
--

CREATE TABLE `tbfarm` (
  `idFarm` int(11) NOT NULL,
  `nomeFarm` varchar(80) NOT NULL,
  `descFarm` longtext DEFAULT NULL,
  `miniDescFarm` varchar(250) DEFAULT NULL,
  `tipoFarm` varchar(25) DEFAULT NULL,
  `imagemFarm` varchar(250) DEFAULT NULL,
  `caminhoImagemFarm` varchar(150) DEFAULT NULL,
  `galeriaImagensFarm` mediumtext DEFAULT NULL,
  `requisitosFarm` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbfarm`
--

INSERT INTO `tbfarm` (`idFarm`, `nomeFarm`, `descFarm`, `miniDescFarm`, `tipoFarm`, `imagemFarm`, `caminhoImagemFarm`, `galeriaImagensFarm`, `requisitosFarm`) VALUES
(88, 'Farm de Esqueleto', 'toma gap', 'Ossos xesquedole', 'Farm', 'imagem_2024-06-04_064806083.png', '../img/farms/Farm de Esqueleto/665ee2e1ce6a2.png', 'YToyOntpOjA7czo3NjoiY3pvME9Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnUlhOeGRXVnNaWFJ2THpZMk5XVmxNbVV4WTJVM1pEa3VjRzVuSWpzPSI7aToxO3M6NzY6ImN6bzBPRG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1JYTnhkV1ZzWlhSdkx6WTJOV1ZsTW1VeFkyVTRaV0l1Y0c1bklqcz0iO30=', NULL),
(89, 'Farm de Pigman', '', 'Uma farm de esqueletinho', 'Farm', 'Screenshot_2.png', '../img/farms/Farm de Pigman/665ee70d0ed99.png', 'YToxOntpOjA7czo3MjoiY3pvME5Ub2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnVUdsbmJXRnVMelkyTldWbE56QmtNR1ZsWmpBdWNHNW5JanM9Ijt9', NULL),
(90, 'Farm de Pigman', '', 'Uma farm de esqueletinho', 'Farm', 'Screenshot_2.png', '../img/farms/Farm de Pigman/665ee77908dd6.png', 'YToxOntpOjA7czo3MjoiY3pvME5Ub2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnVUdsbmJXRnVMelkyTldWbE56YzVNRGt3T1RRdWNHNW5JanM9Ijt9', NULL),
(91, 'Farm de zumbi', 'ww', 'wda', 'Farm', 'imagem_2024-06-04_070913086.png', '../img/farms/Farm de zumbi/665ee7db02f40.png', 'YToxOntpOjA7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnZW5WdFlta3ZOalkxWldVM1pHSXdNekE0TVM1d2JtY2lPdz09Ijt9', NULL),
(92, 'Farm de Kaisa', 'jjj', 'Uma farm de esqueletinho', 'Farm', 'imagem_2024-06-04_071504988.png', '../img/farms/Farm de Kaisa/665ee955a56c2.png', 'YToyOntpOjA7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnUzJGcGMyRXZOalkxWldVNU5UVmhOVGcyWmk1d2JtY2lPdz09IjtpOjE7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnUzJGcGMyRXZOalkxWldVNU5UVmhOVGxtTWk1d2JtY2lPdz09Ijt9', 'YTozOntpOjA7czo0OiJhd2RhIjtpOjE7czo1OiJrYWlzYSI7aToyO3M6NjoiZXpyZWFsIjt9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbguia`
--

CREATE TABLE `tbguia` (
  `idGuia` int(11) NOT NULL,
  `nomeGuia` varchar(80) NOT NULL,
  `descGuia` longtext DEFAULT NULL,
  `miniDescGuia` varchar(250) DEFAULT NULL,
  `tipoGuia` varchar(25) DEFAULT NULL,
  `imagemGuia` varchar(250) DEFAULT NULL,
  `caminhoImagemGuia` varchar(150) DEFAULT NULL,
  `galeriaImagensGuia` mediumtext DEFAULT NULL,
  `requisitosGuia` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitem`
--

CREATE TABLE `tbitem` (
  `idItem` int(11) NOT NULL,
  `nomeItem` varchar(80) DEFAULT NULL,
  `descItem` longtext DEFAULT NULL,
  `miniDescItem` varchar(250) DEFAULT NULL,
  `tipoItem` varchar(25) DEFAULT NULL,
  `imagemItem` varchar(250) DEFAULT NULL,
  `caminhoImagemItem` varchar(150) DEFAULT NULL,
  `galeriaImagensItem` mediumtext DEFAULT NULL,
  `requisitosItem` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmaquina`
--

CREATE TABLE `tbmaquina` (
  `idMaquina` int(11) NOT NULL,
  `nomeMaquina` varchar(80) DEFAULT NULL,
  `descMaquina` longtext DEFAULT NULL,
  `miniDescMaquina` varchar(250) DEFAULT NULL,
  `tipoMaquina` varchar(25) DEFAULT NULL,
  `imagemMaquina` varchar(250) DEFAULT NULL,
  `caminhoImagemMaquina` varchar(150) DEFAULT NULL,
  `galeriaImagensMaquina` mediumtext DEFAULT NULL,
  `requisitosMaquina` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbartigo`
--
ALTER TABLE `tbartigo`
  ADD PRIMARY KEY (`idArtigo`);

--
-- Índices para tabela `tbatualizacao`
--
ALTER TABLE `tbatualizacao`
  ADD PRIMARY KEY (`idAtualizacao`);

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbfarm`
--
ALTER TABLE `tbfarm`
  ADD PRIMARY KEY (`idFarm`);

--
-- Índices para tabela `tbguia`
--
ALTER TABLE `tbguia`
  ADD PRIMARY KEY (`idGuia`);

--
-- Índices para tabela `tbitem`
--
ALTER TABLE `tbitem`
  ADD PRIMARY KEY (`idItem`);

--
-- Índices para tabela `tbmaquina`
--
ALTER TABLE `tbmaquina`
  ADD PRIMARY KEY (`idMaquina`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbartigo`
--
ALTER TABLE `tbartigo`
  MODIFY `idArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de tabela `tbatualizacao`
--
ALTER TABLE `tbatualizacao`
  MODIFY `idAtualizacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbfarm`
--
ALTER TABLE `tbfarm`
  MODIFY `idFarm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de tabela `tbguia`
--
ALTER TABLE `tbguia`
  MODIFY `idGuia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbitem`
--
ALTER TABLE `tbitem`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbmaquina`
--
ALTER TABLE `tbmaquina`
  MODIFY `idMaquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
