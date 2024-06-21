-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/06/2024 às 07:16
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tbartigo`
--

INSERT INTO `tbartigo` (`idArtigo`, `nomeArtigo`, `tipoArtigo`) VALUES
(119, 'Farm de ferro', 'Farm'),
(120, 'Farm de Cana de açúcar, Alga e Bambu', 'Farm');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbclientes`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tbclientes`
--

INSERT INTO `tbclientes` (`idCliente`, `emailCliente`, `senhaCliente`, `nicknameCliente`, `inventarioClientes`, `vetorInventarioClientes`, `imgskin`, `imgCliente`) VALUES
(1, 'thiago@gmail.com', 'senha', 'Zang', 'usuarios/06e617e3-84d8-474e-a14a-beceb5cc7726.dat', '[{\"count\":64,\"Slot\":3,\"id\":\"minecraft/target\"}, {\"count\":64,\"Slot\":4,\"id\":\"minecraft/sticky_piston\"}, {\"count\":64,\"Slot\":5,\"id\":\"minecraft/warped_hyphae\"}, {\"count\":1,\"Slot\":6,\"id\":\"minecraft/diamond_sword\"}, {\"count\":64,\"Slot\":7,\"id\":\"minecraft/detector_rail\"}, {\"count\":64,\"Slot\":8,\"id\":\"minecraft/rail\"}, {\"count\":64,\"Slot\":9,\"id\":\"minecraft/jungle_log\"}, {\"count\":64,\"Slot\":17,\"id\":\"minecraft/jukebox\"}, {\"count\":64,\"Slot\":21,\"id\":\"minecraft/warped_stem\"}, {\"count\":64,\"Slot\":22,\"id\":\"minecraft/jungle_wood\"}, {\"count\":64,\"Slot\":25,\"id\":\"minecraft/powered_rail\"}, {\"count\":64,\"Slot\":27,\"id\":\"minecraft/redstone\"}, {\"count\":64,\"Slot\":28,\"id\":\"minecraft/redstone_torch\"}, {\"count\":64,\"Slot\":29,\"id\":\"minecraft/redstone_block\"}, {\"count\":1,\"Slot\":100,\"id\":\"minecraft/diamond_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"minecraft/diamond_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"minecraft/diamond_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"minecraft/diamond_helmet\"}, {\"count\":1,\"Slot\":-106,\"id\":\"minecraft/shield\"}]', NULL, NULL),
(2, 'kevinviado@gmail.com', 'senha', 'kevin Viado', 'usuarios/06e617e3-84d8-474e-a14a-beceb5cc7726.dat', '[{\"count\":64,\"Slot\":3,\"id\":\"minecraft/target\"}, {\"count\":64,\"Slot\":4,\"id\":\"minecraft/sticky_piston\"}, {\"count\":64,\"Slot\":5,\"id\":\"minecraft/warped_hyphae\"}, {\"count\":1,\"Slot\":6,\"id\":\"minecraft/diamond_sword\"}, {\"count\":64,\"Slot\":7,\"id\":\"minecraft/detector_rail\"}, {\"count\":64,\"Slot\":8,\"id\":\"minecraft/rail\"}, {\"count\":64,\"Slot\":9,\"id\":\"minecraft/jungle_log\"}, {\"count\":64,\"Slot\":17,\"id\":\"minecraft/jukebox\"}, {\"count\":64,\"Slot\":21,\"id\":\"minecraft/warped_stem\"}, {\"count\":64,\"Slot\":22,\"id\":\"minecraft/jungle_wood\"}, {\"count\":64,\"Slot\":25,\"id\":\"minecraft/powered_rail\"}, {\"count\":64,\"Slot\":27,\"id\":\"minecraft/redstone\"}, {\"count\":64,\"Slot\":28,\"id\":\"minecraft/redstone_torch\"}, {\"count\":64,\"Slot\":29,\"id\":\"minecraft/redstone_block\"}, {\"count\":1,\"Slot\":100,\"id\":\"minecraft/diamond_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"minecraft/diamond_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"minecraft/diamond_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"minecraft/diamond_helmet\"}, {\"count\":1,\"Slot\":-106,\"id\":\"minecraft/shield\"}]', '../img/skins/arquivo_6674284b8d468_1718888523.png', 'arquivo_6674bb1749d18_1718926103.png'),
(3, 'araujo@gmail.com', 'aa', 'aa', 'usuarios/8ec0c478-d221-443e-9860-ab3960d4860e.dat', '[{\"count\":1,\"Slot\":0,\"components\":\"minecraft/damage\":4,\"id\":\"minecraft/wooden_pickaxe\"}, {\"count\":1,\"Slot\":1,\"components\":\"minecraft/damage\":13,\"id\":\"minecraft/stone_pickaxe\"}, {\"count\":1,\"Slot\":2,\"id\":\"minecraft/coal\"}, {\"count\":11,\"Slot\":3,\"id\":\"minecraft/raw_copper\"}, {\"count\":11,\"Slot\":4,\"id\":\"minecraft/oak_planks\"}, {\"count\":10,\"Slot\":5,\"id\":\"minecraft/cobblestone\"}, {\"count\":1,\"Slot\":6,\"id\":\"minecraft/crafting_table\"}]', NULL, NULL),
(4, 'email@gmail.com', 'aa', 'Lepslock', 'usuarios/8ec0c478-d221-443e-9860-ab3960d4860e.dat', '[{\"count\":1,\"Slot\":0,\"id\":\"minecraft/wooden_sword\"}, {\"count\":1,\"Slot\":1,\"id\":\"minecraft/crafting_table\"}, {\"count\":64,\"Slot\":5,\"id\":\"minecraft/spruce_planks\"}, {\"count\":64,\"Slot\":8,\"id\":\"minecraft/spruce_planks\"}, {\"count\":64,\"Slot\":12,\"id\":\"minecraft/netherite_ingot\"}, {\"count\":3,\"Slot\":14,\"id\":\"minecraft/stick\"}, {\"count\":60,\"Slot\":16,\"id\":\"minecraft/spruce_planks\"}, {\"count\":1,\"Slot\":24,\"id\":\"minecraft/wheat_seeds\"}, {\"count\":64,\"Slot\":25,\"id\":\"minecraft/repeater\"}, {\"count\":64,\"Slot\":32,\"id\":\"minecraft/spruce_planks\"}, {\"count\":1,\"Slot\":100,\"id\":\"minecraft/netherite_boots\"}, {\"count\":1,\"Slot\":101,\"id\":\"minecraft/netherite_leggings\"}, {\"count\":1,\"Slot\":102,\"id\":\"minecraft/iron_chestplate\"}, {\"count\":1,\"Slot\":103,\"id\":\"minecraft/diamond_helmet\"}]', NULL, NULL);

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
  `caminhoImagemFarm` varchar(150) DEFAULT NULL,
  `galeriaImagensFarm` mediumtext DEFAULT NULL,
  `requisitosFarm` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tbfarm`
--

INSERT INTO `tbfarm` (`idFarm`, `nomeFarm`, `descFarm`, `miniDescFarm`, `tipoFarm`, `imagemFarm`, `caminhoImagemFarm`, `galeriaImagensFarm`, `requisitosFarm`) VALUES
(93, 'Farm de ferro', 'Escolha um local para montar sua farm, qualquer local serve, exceto os biomas gelados, pois a água utilizada na farm congela nesses biomas.  Comece colocando baús e funis conforme mostrado na imagem abaixo: 3 fileiras de baús e 2 andares de baús. Coloque funis atrás dos baús que ficam embaixo e uma área de 3x3 de funis atrás dos baús de cima. --imagem1;  Coloque 3 blocos na frente dos funis e coloque tochas de redstone nesses blocos. --imagem2;  Faça uma fileira de 15 blocos temporários. No 15º bloco, adicione 3 blocos e coloque tochas de redstone na frente deles. Depois, coloque 3 blocos em cima das tochas de redstone. --imagem3;  Construa uma plataforma e adicione 12 trilhos energizados seguidos de trilhos comuns da seguinte maneira: --imagem4;  Agora coloque blocos em cima dos funis sem trilhos e coloque 3 carrinhos com funil. --imagem5;  Faça uma camada de blocos de magma por cima dos trilhos. --imagem6;  Suba um tubo de anéis de 18 blocos de altura utilizando a parte inferior das slabs ao redor da plataforma de magma. --imagem7;  Substitua alguns blocos de magma por areia das almas e erga 5 colunas com 19 blocos de altura utilizando o bloco de parede nas seguintes posições: --imagem8;  Adicione uma camada extra no tubo de anéis, utilizando a parte de cima das slabs para fazer duas plataformas 3x21 nos dois lados da farm. Faça um muro ao redor da plataforma. --imagem9;  Coloque alguns blocos temporários na parte de cima no meio da plataforma. --imagem10;  Coloque água embaixo de cada bloco de terra. Após isso, coloque algas em todos os blocos de areia das almas e deixe-as crescer até o limite. --imagem11;  Agora quebre as algas e substitua os blocos de areia das almas por blocos de magma. --imagem12;  Quebre a plataforma provisória e adicione placas no lugar dela. Nas beiradas das plataformas, coloque slabs e coloque água em cima delas. --imagem13;  Agora suba as colunas do meio mais 3 blocos e coloque água nas colunas dos cantos. --imagem14;  Estenda as colunas até alcançar as bordas da plataforma. --imagem15; --imagem16;  Faça as seguintes marcações: --imagem17;  A partir da 3ª slab da plataforma, faça essa estrutura e coloque 3 camas em cima dela. Faça uma parede com blocos de vidro sobre as camas, mas deixe o bloco sem cama livre. Após isso, faça um teto utilizando slabs. --imagem18;  A partir do bloco do meio da plataforma, coloque um pistão e cerque-o com blocos de construção. --imagem19;  Agora coloque slabs da seguinte maneira: --imagem20;  Faça essa estrutura na mesma altura do pistão. Coloque 1 pó de redstone, 2 repetidores com nível 4, outro pó de redstone entre os blocos com slab e depois mais 2 repetidores com nível 4. --imagem21;  Repita isso do outro lado da plataforma. --imagem22;  Agora coloque 3 villagers em cada caixa e deixe-os dormirem por cerca de 20 minutos. Coloque um zumbi nas caixas centrais e renomeie-os utilizando uma etiqueta. --imagem23;  Para finalizar, adicione uma tocha de redstone nesse bloco e sua farm estará funcionando. --imagem24;  Caso deseje, um upgrade pode ser feito, basta criar mais plataformas na farm, o importante é que elas estejam a 16 blocos de distância das caixas com os villagers.', '    Farm feita para gerar ferro infinito', 'Farm', '23.png', '../img/farms/Farm de ferro/6674c5c7e8577.png', 'YToxOTp7aTowO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT0dFMVpTNXdibWNpT3c9PSI7aToxO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT0dRMVppNXdibWNpT3c9PSI7aToyO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT0daaVlTNXdibWNpT3c9PSI7aTozO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1RJeU5pNXdibWNpT3c9PSI7aTo0O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1RSak1TNXdibWNpT3c9PSI7aTo1O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1Raak5pNXdibWNpT3c9PSI7aTo2O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1Roak9TNXdibWNpT3c9PSI7aTo3O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1dGak1pNXdibWNpT3c9PSI7aTo4O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1dObU9TNXdibWNpT3c9PSI7aTo5O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsT1dZNE1pNXdibWNpT3c9PSI7aToxMDtzOjcyOiJjem8wTkRvaUxpNHZhVzFuTDJaaGNtMXpMMFpoY20wZ1pHVWdabVZ5Y204dk5qWTNOR00xWXpkbFlUSXdOeTV3Ym1jaU93PT0iO2k6MTE7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnWm1WeWNtOHZOalkzTkdNMVl6ZGxZVFE1WWk1d2JtY2lPdz09IjtpOjEyO3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsWVRaak9DNXdibWNpT3c9PSI7aToxMztzOjcyOiJjem8wTkRvaUxpNHZhVzFuTDJaaGNtMXpMMFpoY20wZ1pHVWdabVZ5Y204dk5qWTNOR00xWXpkbFlUaGlNeTV3Ym1jaU93PT0iO2k6MTQ7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnWm1WeWNtOHZOalkzTkdNMVl6ZGxZV0U0Wmk1d2JtY2lPdz09IjtpOjE1O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsWVdVMU9TNXdibWNpT3c9PSI7aToxNjtzOjcyOiJjem8wTkRvaUxpNHZhVzFuTDJaaGNtMXpMMFpoY20wZ1pHVWdabVZ5Y204dk5qWTNOR00xWXpkbFpUTm1OUzV3Ym1jaU93PT0iO2k6MTc7czo3MjoiY3pvME5Eb2lMaTR2YVcxbkwyWmhjbTF6TDBaaGNtMGdaR1VnWm1WeWNtOHZOalkzTkdNMVl6ZGxaVGcxWmk1d2JtY2lPdz09IjtpOjE4O3M6NzI6ImN6bzBORG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1ptVnljbTh2TmpZM05HTTFZemRsWldObU5DNXdibWNpT3c9PSI7fQ==', 'YToyMjp7aTowO3M6MjI6IjJ4IENhcnJpbmhvcyBjb20gZnVuaWwiO2k6MTtzOjExOiIyeCBQaXN0w7VlcyI7aToyO3M6MjE6Ijh4IFRvY2hhcyBkZSByZWRzdG9uZSI7aTozO3M6NDY6IjExMDcofjE3IHBhY2tzKSB4IFNsYWJzIChCbG9jbyBkZSBwcmVmZXJlbmNpYSkiO2k6NDtzOjI3OiIxMjJ4IEJsb2NvcyBkZSBjb25zdHJ1w6fDo28iO2k6NTtzOjEyOiIyeCBldGlxdWV0YXMiO2k6NjtzOjE5OiI1N3ggQmxvY29zIGRlIE1hZ21hIjtpOjc7czoxMToiNDV4IFRyaWxob3MiO2k6ODtzOjIzOiIxMnggVHJpbGhvcyBFbmVyZ2l6YWRvcyI7aTo5O3M6OToiMTJ4IENhbWFzIjtpOjEwO3M6MTQ6Ijh4IHJlcGV0aWRvcmVzIjtpOjExO3M6MTA6IjM4eCBQbGFjYXMiO2k6MTI7czo4OiIxMnggQmF1cyI7aToxMztzOjk6IjEyeCBGdW5pcyI7aToxNDtzOjE4OiIyeCBCYWxkZXMgZGUgw6FndWEiO2k6MTU7czoxOToiMzJ4IEJsb2NvcyBkZSB2aWRybyI7aToxNjtzOjE5OiI0eCBQw7NzIGRlIHJlZHN0b25lIjtpOjE3O3M6MzE6IjIxNHggTXVyb3MgKEJsb2NvIHByZWZlcmVuY2lhbCkiO2k6MTg7czo5OiIyeCBadW1iaXMiO2k6MTk7czoxMjoiMTJ4IFZpbGxhZ2VyIjtpOjIwO3M6MTA6IjEyOHggQWxnYXMiO2k6MjE7czoyOToiNjR4IEJsb2NvcyBkZSBhcmVpYSBkYXMgYWxtYXMiO30='),
(94, 'Farm de Cana de açucar, Alga e Bambu', '    A farm de cana-de-açúcar funciona com observadores e pistões: quando uma cana-de-açúcar cresce o suficiente, o observador envia um sinal de redstone para o pistão, que quebra automaticamente a cana-de-açúcar.  Cave um buraco de 2x1 e coloque os dois baús de forma a formar um baú-duplo. Em seguida, coloque as areias em uma linha reta de 9x1 à esquerda ou à direita do baú-duplo. Logo acima do baú-duplo, coloque os 9 funis apontando para o funil central, e posicione esse funil apontado para os baús conforme mostrado na imagem. Após isso, cerque tudo com blocos, exceto o baú, que deve ter uma laje em cima. --imagem1;--imagem2;  Em seguida, cerque os 9 blocos atrás das areias com mais blocos e substitua-os por baldes de água, garantindo que nenhum bloco de água esteja fluindo (se necessário, crie uma fonte de água infinita). Feito isso, tape a parte de cima dos blocos de água com laje. --imagem3;--imagem4;  Após isso, erga 3 paredes de 3 blocos de altura (as laterais devem ter 4 blocos de altura) ao redor dos funis e das areias, com exceção à parede acima dos baús. Na parede atrás das areias, quebre uma linha de 9 blocos ao meio e preencha com pistões apontados para as areias. --imagem5;  Coloque os 9 observadores a 3 blocos acima das areias, apontando para elas. Logo após isso, coloque as 18 redstones sobre os observadores e os blocos imediatamente acima dos pistões. --imagem6;  Erga uma parede de 11x5 atrás dos pistões e complete com mais uma linha de blocos nas paredes laterais, de forma que todas tenham a mesma altura de 5 blocos. Em seguida, faça um teto entre essas 3 paredes de 9x4. --imagem7;  Faça uma parede em forma de L, com a parte menor apontando para os observadores e a parte maior apontando para cima, de forma a esconder toda a fiação de redstone. Então, crie uma janela de 9x3 acima dos baús e plante as canas-de-açúcar nas areias. Pronto! Sua farm está pronta. --imagem8;--imagem9;', '     Farm feita para gerar açúcar, Alga e Bambu infinito', 'Farm', '8.jpg', '../img/farms/Farm de Cana de açúcar, Alga e Bambu/6674d0f8e7328.jpg', 'YTo5OntpOjA7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTRaVGMyTnpJdWFuQm5JanM9IjtpOjE7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTRaVGM0TWpjdWFuQm5JanM9IjtpOjI7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVEppWldZdWFuQm5JanM9IjtpOjM7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE13TW1VdWFuQm5JanM9IjtpOjQ7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE0wWkRFdWFuQm5JanM9IjtpOjU7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE5oTkRJdWFuQm5JanM9IjtpOjY7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVE5sTXpjdWFuQm5JanM9IjtpOjc7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVFF5WVRrdWFuQm5JanM9IjtpOjg7czoxMDQ6ImN6bzJPVG9pTGk0dmFXMW5MMlpoY20xekwwWmhjbTBnWkdVZ1EyRnVZU0JrWlNCaHc2ZkR1bU5oY2l3Z1FXeG5ZU0JsSUVKaGJXSjFMelkyTnpSa01HWTVNVFEyWmpndWFuQm5JanM9Ijt9', 'YTowOnt9');

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
  `caminhoImagemGuia` varchar(150) DEFAULT NULL,
  `galeriaImagensGuia` mediumtext DEFAULT NULL,
  `requisitosGuia` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `caminhoImagemItem` varchar(150) DEFAULT NULL,
  `galeriaImagensItem` mediumtext DEFAULT NULL,
  `requisitosItem` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `caminhoImagemMaquina` varchar(150) DEFAULT NULL,
  `galeriaImagensMaquina` mediumtext DEFAULT NULL,
  `requisitosMaquina` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
