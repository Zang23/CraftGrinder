<?php
    require '../php/funcoes.php';
    require '../php/conexao.php';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>CraftGrinder - Início</title>
</head>
<body>

<div class="index_container">

    <header class="cabecalho_container r">

    <div class="cabecalho_superior_container">
        <p class="cabecalho_titulo">CraftGrinder</p>
        <div class="cabecalho_superior_box">
            <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
            <a class="cabecalho_cadastro" href="cadastro.php">Cadastrar</a>
            <a class="cabecalho_entrar" href="login.html">Entrar</a>
        </div>
    </div>

    <table class="cabecalho_inferior_container">
        <tr>
            <th><a href="#atualizacoes"><p class="cabecalho_inferior_nav">Atualizações</p> </a> </th>
            <th><a href="#farms"><p class="cabecalho_inferior_nav">Farms </p> </a> </th>
            <th><a href="#guias"><p class="cabecalho_inferior_nav">Guias </p> </a> </th>
            <th><a href="#itens"><p class="cabecalho_inferior_nav">Itens </p> </a> </th>
            <th><a href="#maquinas"><p class="cabecalho_inferior_nav">Máquinas </p> </a> </th>
            <th><a href="#premium"><p class="cabecalho_inferior_nav">Premium </p> </a> </th>
            <th><a href="#contato"><p class="cabecalho_inferior_nav">Contato </p> </a> </th>
            <th><a href="#sobre"><p class="cabecalho_inferior_nav">Sobre </p> </a> </th>
        </tr>
    </table>

    </header>



    <h1 id="atualizacoes" class="navbar_titulo"> Últimas Atualizações</h1>

    <!--<div class="conteudo">
        <div class="conteudo_atualizacoes">
            <?php
                $atualizacao_code = "SELECT idAtualizacao, caminhoImagemAtualizacao FROM tbatualizacao ORDER BY idAtualizacao DESC LIMIT 3 ";
                $prepareAtualizacao = $pdo->prepare($atualizacao_code);
                $count = $prepareAtualizacao->execute();
                $atualizacoes = $prepareAtualizacao->fetchAll(PDO::FETCH_ASSOC);?>

                <div class="container_index_atualizacao">
                    <?php  
                    foreach($atualizacoes as $atualizacao){?>
                        
                        <img class="indexImagem" src="<?=$atualizacao['caminhoImagemAtualizacao']?>"><?php
                    }

                    ?>
                </div>

        </div>
    </div>-->

    <div class="carousel_alinhamento">
    <div class="carousel_conteudo">

    <div class="carousel">

        <div class="viewport">
            
            <div id="carousel_slide1" class="carousel__slide animacao" data-animacao="stop">slide 1</div>
            <div id="carousel_slide2" class="carousel__slide animacao" data-animacao="stop">slide 2</div>
            <div id="carousel_slide3" class="carousel__slide animacao" data-animacao="stop">slide 3</div>
            
        </div>

        <div class="carousel_buttons">
            <button id="passarBtn" class="button_slide prev"><span class="material-symbols-outlined">chevron_left</span></button>
            <button id="passarBtn" class="button_slide next"><span class="material-symbols-outlined">chevron_right</span></button>
        </div>

    </div>
    
    </div>
    </div>

    <!---->
    
    <div>
        <h1 id="farms" class="navbar_titulo">Farms</h1>
        
        <div class="conteudo_container">
            <table class="conteudo_tabela">
                <tr>

                

                    <?php

                    $farm_code = "SELECT idFarm, caminhoImagemFarm, nomeFarm, miniDescFarm FROM tbfarm ORDER BY idFarm DESC LIMIT 3";
                    $prepareFarm = $pdo->prepare($farm_code);
                    $count = $prepareFarm->execute();
                    $farms = $prepareFarm->fetchAll(PDO::FETCH_ASSOC);

                    $numRepeticoes = 3;
                    $contador = 0;?>
                    
                    
                    <?php

                    foreach($farms as $farm){?>
                        <th class="conteudo_cards_container">
                            <img class="conteudo_imagem" src="<?= $farm['caminhoImagemFarm'] ?>">
                            <p class="conteudo_cards_titulo"> <?= $farm['nomeFarm'] ?> </p>
                            <p class="conteudo_descricao"> <?= $farm['miniDescFarm']?> </p>
                        </th>

                    <?php    
                    }  ?>
                    
                <th class="conteudo_cards_container final"> 
                    <a  href="ler_mais/farms.html"> <p class="conteudo_lermais"> Ler mais </p> </a>
                </th>
                        
                   
                      
                    
                </tr>
            </table>
        </div>
    </div>

    <h1 id="guias" class="navbar_titulo">Guias</h1>

    <div class="conteudo_container">
        <table class="conteudo_tabela">
            <tr>

                <th class="conteudo_cards_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>

                <th class="conteudo_cards_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>

                <th class="conteudo_cards_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>

                <th class="conteudo_cards_container final">
                    <a  href="ler_mais/guia.html"> <p class="conteudo_lermais"> Ler mais </p> </a>
                </th>
                
            </tr>
        </table>
    </div>

    <h1 id="itens" class="navbar_titulo">Itens</h1>

    <div class="conteudo_container" onclick="explodir(event)">
        <table class="conteudo_tabela">
            <tr>
                <th class="conteudo_cards_item_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>
                <th class="conteudo_cards_item_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>
                <th class="conteudo_cards_item_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>

                <th class="conteudo_cards_item_container final">
                    <a href="ler_mais/itens.html"> <p class="conteudo_lermais" >Ler mais</p> </a>
                </th>
            </tr>
        </table>
    </div>

    <h1 id="maquinas" class="navbar_titulo">Máquinas</h1>

    <div class="conteudo_container">
        <table class="conteudo_tabela">
            <tr>
                <th class="conteudo_cards_item_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>
                <th class="conteudo_cards_item_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>
                <th class="conteudo_cards_item_container">
                    <a href="ler_mais/artigos/modelo.php" class="link_"><div class="conteudo_titulo">
                    <img class="conteudo_imagem" src="../img/branco.jpg" alt="">
                    </div>
                    <p>exemplo</p></a>
                </th>

                <th class="conteudo_cards_item_container final">
                    <a href="ler_mais/maquinas.html"> <p class="conteudo_lermais" >Ler mais</p> </a>
                </th>
            </tr>
        </table>
    </div>

    <h1 id="premium" class="navbar_titulo_premium">Premium</h1>

    <div class="conteudo_container">
        <div class="conteudo_premium">
            <div class="premium">
            <p>CraftGrinder possibilita você desbloquear a aba de Mods com o rescurso Premium.</p>
            <p></p>
            </div>
        </div>
    </div>

    <div class="conteudo_container">
        <div class="conteudo_sobrenos">
            <div class="sobrenos_container">
                <h1 id="sobre" class="navbar_titulo">Sobre nós</h1>
                <p>CraftGrinder é destinado para os amantes de Minecraft com sede de conhecimento</p>
            </div>
        </div>
    </div>

</div>

    

<script src="../javascript/script.js"></script>
</body>
</html>
