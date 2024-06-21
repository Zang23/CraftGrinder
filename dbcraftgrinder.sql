-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2024 às 03:21
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
(118, 'Farm de Kaisa', 'Farm'),
(119, 'Farm de ferro', 'Farm'),
(120, 'Farm de Cana de aÃ§Ãºcar, Alga e Bambu', 'Farm');

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
  `inventarioClientes` varchar(250) DEFAULT NULL,
  `vetorInventarioClientes` longtext DEFAULT NULL,
  `imgskin` varchar(255) DEFAULT NULL,
  `imgCliente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`idCliente`, `emailCliente`, `senhaCliente`, `nicknameCliente`, `inventarioClientes`, `vetorInventarioClientes`, `imgskin`, `imgCliente`) VALUES
(1, 'thiago@gmail.com', 'senha', 'Zang', 'usuarios/06e617e3-84d8-474e-a14a-beceb5cc7726.dat', '[{\"count\":64,\"Slot\":3,\"id\":\"minecraft/target\"}, {\"count\":64,\"Slot\":4,\"id\":\"minecraft/sticky_piston\"}, {\"count\":64,\"Slot\":5,\"id\":\"minecraft/warped_hyphae\"}, {\"count\":1,\"Slot\":6,\"id\":\"minecraft/diamond_sword\"}, {\"count\":64,\"Slot\":7,\"id\":\"minecraft/detector_rail\"}, {\"count\":64,\"Slot\":8,\"id\":\"minecraft/rail\"}, {\"count\":64,\"Slot\":9,\"id\":\"minecraft/jungle_log\"}, {\"count\":64,\"Slot\":17,\"id\":\"minecraft/jukebox\"}, {\"count\":64,\"Slot\":21,\"id\":\"minecraft/warped_stem\"}, {\"count\":64,\"Slot\":22,\"id\":\"minecraft/jungle_wood\"}, {\"count\":64,\"Slot\":25,\"id\":\"minecraft/powered_rail\"}, {\"count\":64,\"Slot\":27,\"id\":\"minecraft/redstone\"}, {\"count\":64,\"Slot\":28,\"id\":\"minecraft/redstone_torch\"}, {\"count\":64,\"Slot\":29,\"id\":\"minecraft/redstone_block\"}, {\"count\":1,\"Slot\":100,\"id\":\"minecraft/diamond_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"minecraft/diamond_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"minecraft/diamond_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"minecraft/diamond_helmet\"}, {\"count\":1,\"Slot\":-106,\"id\":\"minecraft/shield\"}]', NULL, NULL),
(2, 'kevinviado@gmail.com', 'senha', 'kevin Viado', 'usuarios/06e617e3-84d8-474e-a14a-beceb5cc7726.dat', '[{\"count\":64,\"Slot\":3,\"id\":\"minecraft/target\"}, {\"count\":64,\"Slot\":4,\"id\":\"minecraft/sticky_piston\"}, {\"count\":64,\"Slot\":5,\"id\":\"minecraft/warped_hyphae\"}, {\"count\":1,\"Slot\":6,\"id\":\"minecraft/diamond_sword\"}, {\"count\":64,\"Slot\":7,\"id\":\"minecraft/detector_rail\"}, {\"count\":64,\"Slot\":8,\"id\":\"minecraft/rail\"}, {\"count\":64,\"Slot\":9,\"id\":\"minecraft/jungle_log\"}, {\"count\":64,\"Slot\":17,\"id\":\"minecraft/jukebox\"}, {\"count\":64,\"Slot\":21,\"id\":\"minecraft/warped_stem\"}, {\"count\":64,\"Slot\":22,\"id\":\"minecraft/jungle_wood\"}, {\"count\":64,\"Slot\":25,\"id\":\"minecraft/powered_rail\"}, {\"count\":64,\"Slot\":27,\"id\":\"minecraft/redstone\"}, {\"count\":64,\"Slot\":28,\"id\":\"minecraft/redstone_torch\"}, {\"count\":64,\"Slot\":29,\"id\":\"minecraft/redstone_block\"}, {\"count\":1,\"Slot\":100,\"id\":\"minecraft/diamond_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"minecraft/diamond_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"minecraft/diamond_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"minecraft/diamond_helmet\"}, {\"count\":1,\"Slot\":-106,\"id\":\"minecraft/shield\"}]', '../img/skins/arquivo_6674284b8d468_1718888523.png', 'arquivo_6674bb1749d18_1718926103.png');

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
(92, 'Farm de Kaisa', 'jjj', 'Uma farm de esqueletinho', 'Farm', 'imagem_2024-06-04_071504988.png', '../img/farms/Farm de Kaisa/665ee955a56c2.png', 'YToyOntpOjA7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnUzJGcGMyRXZOalkxWldVNU5UVmhOVGcyWmk1d2JtY2lPdz09IjtpOjE7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnUzJGcGMyRXZOalkxWldVNU5UVmhOVGxtTWk1d2JtY2lPdz09Ijt9', 'YTozOntpOjA7czo0OiJhd2RhIjtpOjE7czo1OiJrYWlzYSI7aToyO3M6NjoiZXpyZWFsIjt9'),
(93, 'Farm de ferro', '   1.	Escolhe um local para montar sua farm, qualquer local serve menos os biomas gelados pois a Ã¡gua utilizada na farm congela nesses biomas.2.	Comece colocando baÃºs e funis igual na imagem abaixo, 3 fileiras de baÃºs e 2 andares de baÃºs, coloque funis atrÃ¡s dos baÃºs que ficam embaixo e uma Ã¡rea de 3x3 de funis atrÃ¡s dos baÃºs de cima.--imagem1; 3.	Coloque 3 blocos na frente dos funis e coloque tochas de redstone nesses blocos. â€“imagem2; 4.	FaÃ§o uma fileira de 15 blocos temporÃ¡rios, no 15 bloco adicione 3 blocos e coloque tochas de redstone na frente deles, depois coloque 3 blocos em cima das tochas de redstone. â€“imagem3; 5.	Construa uma plataforma e adicione 12 trilhos energizados seguidos de trilhos comuns da seguinte maneira: --imagem4; 6.	Agora coloque blocos em cima dos funis sem trilhos e coloque 3 carrinhos com funil. --imagem5;7.	 8.	FaÃ§a uma camada de blocos de magma por cima dos trilhos. --imagem6; 9.	Suba um tubo de anÃ©is de 18 blocos de altura utilizando a parte inferior das slabs ao redor da plataforma de magma. --imagem7; 10.	Substitua alguns blocos de magma por areia das almas e erga 5 colunas com 19 blocos de altura utilizando o bloco de parede nas seguintes posiÃ§Ãµes: --imagem8; 11.	Adicione uma camada extra no tubo de anÃ©is, utilizando a parte de cima das slabs faÃ§a duas plataformas 3x21 nos dois lados da farm. FaÃ§a um muro no redor da plataforma. -â€“imagem9; 12.	Coloque alguns blocos temporÃ¡rios na parte de cima no meio da plataforma. -â€“imagem10; 13.	Coloque Ã¡gua embaixo de cada bloco de terra, apÃ³s isso coloque algas em todos os blocos de areia das almas e faÃ§a elas crescerem atÃ© o limite. -â€“imagem11; 14.	Agora quebre as algas e substitua os blocos de areia das almas por blocos de magma. -â€“imagem12; 15.	Quebre a plataforma provisÃ³ria e adicione placas no lugar dela, nas beiradas das plataformas coloque slabs e coloque Ã¡gua encima delas. â€“imagem13; 16.	Agora suba as colunas do meio mais 3 blocos e cloque Ã¡gua nas colunas dos cantos. -â€“imagem14; 17.	Estenda as colunas atÃ© alcanÃ§ar as bordas da plataforma. -â€“imagem15; --imagem16;  18.	FaÃ§a as seguintes marcaÃ§Ãµes: --imagem17; 19.	A partir da 3 slab da plataforma faÃ§a essa estrutura e coloque 3 camas encima dela. FaÃ§a uma parede com blocos de vidro sobre as camas, mas deixe o bloco sem cama livre, apÃ³s isso faÃ§a um teto utilizando slabs. --imagem18; 20.	A partir do bloco do meio da plataforma coloque um pistÃ£o e cerque ele com blocos de construÃ§Ã£o. -â€“imagem19; 21.	Agora coloque slabs da seguinte maneira: --imagem20; 22.	FaÃ§a essa estrutura na mesma altura do pistÃ£o, coloque 1 pÃ³ de redstone, 2 repetidores com nÃ­vel 4, outro pÃ³ de redstone entre os blocos com slab, e depois mais outros 2 repetidores com nÃ­vel 4. -â€“imagem21; 23.	Agora repita isso do outro lado da plataforma. -â€“imagem22; 24.	Agora coloque 3 villagers em casa caixa e deixa eles dormirem por cerca de 20 minutos. Coloque um zumbi nas caixas centrais e renomeie eles utilizando uma etiqueta. -â€“imagem23; 25.	Para finalizar adicione uma tocha de redstone nesse bloco e sua farm estarÃ¡ funcionando. -â€“imagem24; 26.	Caso vocÃª deseje, um upgrade pode ser feito, basta vocÃª criar mais plataformas na farm, o importante Ã© elas estarem a 16 blocos de distÃ¢ncia das caixas com os villagers', '   Farm feita para gerar ferro infinito', 'Farm', '23.png', '../img/farms/Farm de ferro/6674c5c7e8577.png', 'YToxOTp7aTowO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT0dFMVpTNXdibWNpT3c9PSI7aToxO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT0dRMVppNXdibWNpT3c9PSI7aToyO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT0daaVlTNXdibWNpT3c9PSI7aTozO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1RJeU5pNXdibWNpT3c9PSI7aTo0O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1RSak1TNXdibWNpT3c9PSI7aTo1O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1Raak5pNXdibWNpT3c9PSI7aTo2O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1Roak9TNXdibWNpT3c9PSI7aTo3O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1dGak1pNXdibWNpT3c9PSI7aTo4O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1dObU9TNXdibWNpT3c9PSI7aTo5O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1dZNE1pNXdibWNpT3c9PSI7aToxMDtzOjcyOiJjem8wTkRvaUxpNHZhVzFuTDJaaGNtMXpMMFpoY20wZ1pHVWdabVZ5Y204dk5qWTNOR00xWXpkbFlUSXdOeTV3Ym1jaU93PT0iO2k6MTE7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnWm1WeWNtOHZOalkzTkdNMVl6ZGxZVFE1WWk1d2JtY2lPdz09IjtpOjEyO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsWVRaak9DNXdibWNpT3c9PSI7aToxMztzOjcyOiJjem8wTkRvaUxpNHZhVzFuTDJaaGNtMXpMMFpoY20wZ1pHVWdabVZ5Y204dk5qWTNOR00xWXpkbFlUaGlNeTV3Ym1jaU93PT0iO2k6MTQ7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnWm1WeWNtOHZOalkzTkdNMVl6ZGxZV0U0Wmk1d2JtY2lPdz09IjtpOjE1O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsWVdVMU9TNXdibWNpT3c9PSI7aToxNjtzOjcyOiJjem8wTkRvaUxpNHZhVzFuTDJaaGNtMXpMMFpoY20wZ1pHVWdabVZ5Y204dk5qWTNOR00xWXpkbFpUTm1OUzV3Ym1jaU93PT0iO2k6MTc7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnWm1WeWNtOHZOalkzTkdNMVl6ZGxaVGcxWmk1d2JtY2lPdz09IjtpOjE4O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsWldObU5DNXdibWNpT3c9PSI7fQ==', 'YToyMjp7aTowO3M6MjI6IjJ4IENhcnJpbmhvcyBjb20gZnVuaWwiO2k6MTtzOjExOiIyeCBQaXN0w7VlcyI7aToyO3M6MjE6Ijh4IFRvY2hhcyBkZSByZWRzdG9uZSI7aTozO3M6NDY6IjExMDcofjE3IHBhY2tzKSB4IFNsYWJzIChCbG9jbyBkZSBwcmVmZXJlbmNpYSkiO2k6NDtzOjI3OiIxMjJ4IEJsb2NvcyBkZSBjb25zdHJ1w6fDo28iO2k6NTtzOjEyOiIyeCBldGlxdWV0YXMiO2k6NjtzOjE5OiI1N3ggQmxvY29zIGRlIE1hZ21hIjtpOjc7czoxMToiNDV4IFRyaWxob3MiO2k6ODtzOjIzOiIxMnggVHJpbGhvcyBFbmVyZ2l6YWRvcyI7aTo5O3M6OToiMTJ4IENhbWFzIjtpOjEwO3M6MTQ6Ijh4IHJlcGV0aWRvcmVzIjtpOjExO3M6MTA6IjM4eCBQbGFjYXMiO2k6MTI7czo4OiIxMnggQmF1cyI7aToxMztzOjk6IjEyeCBGdW5pcyI7aToxNDtzOjE4OiIyeCBCYWxkZXMgZGUgw6FndWEiO2k6MTU7czoxOToiMzJ4IEJsb2NvcyBkZSB2aWRybyI7aToxNjtzOjE5OiI0eCBQw7NzIGRlIHJlZHN0b25lIjtpOjE3O3M6MzE6IjIxNHggTXVyb3MgKEJsb2NvIHByZWZlcmVuY2lhbCkiO2k6MTg7czo5OiIyeCBadW1iaXMiO2k6MTk7czoxMjoiMTJ4IFZpbGxhZ2VyIjtpOjIwO3M6MTA6IjEyOHggQWxnYXMiO2k6MjE7czoyOToiNjR4IEJsb2NvcyBkZSBhcmVpYSBkYXMgYWxtYXMiO30='),
(94, 'Farm de Cana de aÃ§Ãºcar, Alga e Bambu', 'A farm de cana de aÃ§Ãºcar funciona a base de observadores e pistÃµes, quando uma cana-de-aÃ§Ãºcar cresce o bastante, o observador envia uma carga de redstone para o pistÃ£o, que quebra a cana-de-aÃ§Ãºcar automaticamente.\r\nâ€ƒ\r\n1.	Cave um buraco de 2x1 e coloque os dois baÃºs de forma a fazer um baÃº-duplo, e entÃ£o coloque as areias em uma linha reta de 9x1 a esquerda ou Ã  direita do baÃº-duplo. Logo apÃ³s, acima do baÃº-duplo, coloque os 9 funis apontando para o funil no centro, e posicione o mesmo apontado para os baÃºs como mostrado na imagem. ApÃ³s isso, cerque tudo com blocos com exceÃ§Ã£o ao baÃº, que deve ser colocado uma laje. \r\n\r\n--imagem1;\r\n--imagem2;\r\n\r\nâ€ƒ\r\n2.	EntÃ£o, cerque os 9 blocos atrÃ¡s das areias com mais blocos e substitua os mesmos por baldes de Ã¡gua, de forma a nenhum dos blocos de Ã¡gua estar correndo (caso fique sem Ã¡gua, crie uma fonte de Ã¡gua infinita). Feito isso, tape a parte de cima dos blocos de Ã¡gua com laje.\r\n\r\n\r\n--imagem3;\r\n--imagem4;\r\n\r\nâ€ƒ\r\n3.	ApÃ³s isso, erga 3 paredes de 3 de altura (as do lado devem ter 4) ao redor dos funis e das areias com exceÃ§Ã£o a parede acima dos baÃºs. Na parede atrÃ¡s das areias, quebre uma linha de 9 blocos no meio e preencha com pistÃµes apontados para as areias.\r\n--imagem5;\r\n4.	Coloque os 9 observadores 3 blocos acima das areias apontando para as mesmas, logo apÃ³s isso, coloque as 18 redstones sobre os observadores e os blocos logo acima dos pistÃµes.\r\n\r\n--imagem6;\r\n\r\nâ€ƒ\r\n5.	Erga uma parede de 11x5 atrÃ¡s dos pistÃµes e complete com mais uma linha de blocos as paredes laterais, de forma as 3 possuÃ­rem a mesma altura de 5 blocos, entÃ£o, faÃ§a um texto entre essas 3 paredes de 9x4.\r\n--imagem7;\r\n\r\n6.	FaÃ§a uma parede em L, com a parte menor apontando para os observadores, e a parte maior apontando para cima, de forma a esconder toda a fiaÃ§Ã£o de redstone. EntÃ£o, crie uma janela de 9x3 acima dos baÃºs e plante as cana-de-aÃ§Ãºcar nas areias e pronto! Sua farm estÃ¡ pronta.\r\n--imagem8;\r\n--imagem9;\r\n', 'Farm feita para gerar aÃ§Ãºcar, Alga e Bambu infinito', 'Farm', '8.jpg', '../img/farms/Farm de Cana de aÃ§Ãºcar, Alga e Bambu/6674d0f8e7328.jpg', 'YTo5OntpOjA7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTRaVGMyTnpJdWFuQm5JanM9IjtpOjE7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTRaVGM0TWpjdWFuQm5JanM9IjtpOjI7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVEppWldZdWFuQm5JanM9IjtpOjM7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE13TW1VdWFuQm5JanM9IjtpOjQ7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE0wWkRFdWFuQm5JanM9IjtpOjU7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE5oTkRJdWFuQm5JanM9IjtpOjY7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE5sTXpjdWFuQm5JanM9IjtpOjc7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVFF5WVRrdWFuQm5JanM9IjtpOjg7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVFEyWmpndWFuQm5JanM9Ijt9', 'YTowOnt9');

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
  MODIFY `idArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

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
  MODIFY `idFarm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

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
