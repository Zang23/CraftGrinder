<?php
    session_start();
    require '../php/funcoes.php';
    require '../php/conexao.php';

    $verificado = verificaLogin();

    if($verificado == true){
        $idUsuario = $_SESSION['idUsuario'];

        

        $sql_code = "SELECT * FROM tbclientes WHERE idCliente = '$idUsuario'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $usuarios = $prepare->fetchAll();

        $user_code = "SELECT nicknameCliente, imgCliente FROM tbclientes WHERE idCliente = '$idUsuario' ";
        $prepare = $pdo->prepare($user_code);
        $count = $prepare->execute();
        $users = $prepare->fetchAll();

        foreach($users as $user){
            $userNick = $user['nicknameCliente'];
            $userImg = 'usuario/imgPerfilUsuarios/'.$user['imgCliente'];
            if($user['imgCliente'] === null){
                $userImg = "usuario/imgPerfilUsuarios/default.png";
            }
        }
    }
    else{
        $userNick = "";
        $userImg = "";
    }
    


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="icon" href="../img/iconeItens/minecraft/honey_block.png">
    <title>CraftGrinder - Início</title>
</head>
<body>

<div class="index_container">

    <header class="cabecalho_container r">

    <div class="cabecalho_superior_container">
        <p class="cabecalho_titulo"><a href="index.php">CraftGrinder</a></p>
        <div class="cabecalho_superior_box">
            <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
            <div class="container_navbar_cadastro">
                <?= mostraLogin($verificado, $userNick, $userImg)?>
            </div>
        </div>
    </div>

    <table class="cabecalho_inferior_container">
        <tr>
            <th><a href="#atualizacoes"><p class="cabecalho_inferior_nav">Atualizações</p> </a> </th>
            <th><a href="#farms"><p class="cabecalho_inferior_nav">Farms </p> </a> </th>
            <th><a href="#guias"><p class="cabecalho_inferior_nav">Guias </p> </a> </th>
            <th><a href="#itens"><p class="cabecalho_inferior_nav">Itens </p> </a> </th>
            <th><a href="#maquinas"><p class="cabecalho_inferior_nav">Máquinas </p> </a> </th>
            <th><a href="#sobre"><p class="cabecalho_inferior_nav">Sobre </p> </a> </th>
            <th><a href="#contato"><p class="cabecalho_inferior_nav">Contato </p> </a> </th>
        </tr>
    </table>

    </header>



    <h1 id="atualizacoes" class="navbar_titulo"> Últimas Atualizações</h1>

    <?php
        $atualizacao_code = "SELECT idAtualizacao, caminhoImagemAtualizacao, nomeAtualizacao, descAtualizacao FROM tbatualizacao ORDER BY idAtualizacao DESC LIMIT 3 ";
        $prepareAtualizacao = $pdo->prepare($atualizacao_code);
        $count = $prepareAtualizacao->execute();
        $atualizacoes = $prepareAtualizacao->fetchAll(PDO::FETCH_ASSOC);


    ?>

    <div class="carousel_alinhamento">
    <div class="carousel_conteudo">

    <div class="carousel">

        <div class="viewport">
            <?php

                $contador = 1;

                foreach($atualizacoes as $atualizacao){?>


                    <div id="carousel_slide<?=$contador?>" class="carousel__slide"> 
                        <div class="imagem_align">
                            <img src="<?=$atualizacao['caminhoImagemAtualizacao'] ?>" class="imagem_att"> 
                        </div>
                        <div class="descricao_att">
                            <div class="desc_align">
                                <p class="titulo_att"><?=$atualizacao['nomeAtualizacao'] ?></p>
                                <p class="desc_att"><?=$atualizacao['descAtualizacao'] ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $contador++;
                }
            ?>
            <div id="carousel_slide1" class="carousel__slide">
                <div class="imagem_align">
                    slide 3
                </div>
            </div>
            <div id="carousel_slide2" class="carousel__slide">
                <div class="imagem_align">
                    slide 2
                </div>
            </div>
            <div id="carousel_slide3" class="carousel__slide">
                <div class="imagem_align">
                    slide 1
                </div>
            </div>
            
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

                    $farm_code = "SELECT idFarm, caminhoImagemFarm, nomeFarm, miniDescFarm, tipoFarm FROM tbfarm ORDER BY idFarm DESC LIMIT 3";
                    $prepareFarm = $pdo->prepare($farm_code);
                    $count = $prepareFarm->execute();
                    $farms = $prepareFarm->fetchAll(PDO::FETCH_ASSOC);

                    $numRepeticoes = 3;
                    $contador = 0;?>
                    
                    
                    <?php

                    foreach($farms as $farm){?>
                        <th class="conteudo_cards_container _maior">
                            <a href="ler_mais/artigos/modelo.php?id=<?=$farm['idFarm']?>&tipo=<?=$farm['tipoFarm']?>" class="link_">
                            <img class="conteudo_imagem" src="<?= $farm['caminhoImagemFarm'] ?>">
                            <p class="conteudo_cards_titulo"> <?= $farm['nomeFarm'] ?> </p>
                            <p class="conteudo_descricao"> <?= $farm['miniDescFarm']?> </p>
                            </a>
                        </th>

                    <?php    
                    }  ?>
                    
                <th class="conteudo_cards_container final"> 
                    <a  href="ler_mais/farms.php"> <p class="conteudo_lermais"> Ler mais </p> </a>
                </th>
                        
                   
                      
                    
                </tr>
            </table>
        </div>
    </div>

    <h1 id="guias" class="navbar_titulo">Guias</h1>

    <div class="conteudo_container">
        <table class="conteudo_tabela">
            <tr>
                
            <?php

                $guia_code = "SELECT idGuia, caminhoImagemGuia, nomeGuia, miniDescGuia, tipoGuia FROM tbguia ORDER BY idGuia DESC LIMIT 3";
                $prepareGuia = $pdo->prepare($guia_code);
                $count = $prepareGuia->execute();
                $guias = $prepareGuia->fetchAll(PDO::FETCH_ASSOC);

                $numRepeticoesg = 3;
                $contadorg = 0;?>


                <?php

                foreach($guias as $guia){?>
                    <th class="conteudo_cards_container _maior">
                        <a href="ler_mais/artigos/modelo.php?id=<?=$guia['idGuia']?>&tipo=<?=$guia['tipoGuia']?>" class="link_">
                        <img class="conteudo_imagem" src="<?= $guia['caminhoImagemGuia'] ?>">
                        <p class="conteudo_cards_titulo"> <?= $guia['nomeGuia'] ?> </p>
                        <p class="conteudo_descricao"> <?= $guia['miniDescGuia']?> </p>
                        </a>
                    </th>

                <?php    
                }  ?>


                <th class="conteudo_cards_container final">
                    <a  href="ler_mais/guia.php"> <p class="conteudo_lermais"> Ler mais </p> </a>
                </th>
                
            </tr>
        </table>
    </div>

    <h1 id="itens" class="navbar_titulo">Itens</h1>

    <div class="conteudo_container" onclick="explodir(event)">
        <table class="conteudo_tabela">
            <tr>
            <?php

                $item_code = "SELECT idItem, caminhoImagemItem, nomeItem, miniDescItem, tipoItem FROM tbitem ORDER BY idItem DESC LIMIT 3";
                $prepareItem = $pdo->prepare($item_code);
                $count = $prepareItem->execute();
                $itens = $prepareItem->fetchAll(PDO::FETCH_ASSOC);

                $numRepeticoesI = 3;
                $contadorI = 0;?>


                <?php

                foreach($itens as $item){?>
                    <th class="conteudo_cards_container _menor">
                        <a href="ler_mais/artigos/modelo.php?id=<?=$item['idItem']?>&tipo=<?=$item['tipoItem']?>" class="link_">
                        <img class="conteudo_imagem_menor" src="<?= $item['caminhoImagemItem'] ?>">
                        <p class="conteudo_cards_titulo"> <?= $item['nomeItem'] ?> </p>
                        <p class="conteudo_descricao"> <?= $item['miniDescItem']?> </p>
                        </a>
                    </th>

                <?php    
                } ?>
               

                <th class="conteudo_cards_item_container final">
                    <a href="ler_mais/itens.php"> <p class="conteudo_lermais" >Ler mais</p> </a>
                </th>
            </tr>
        </table>
    </div>

    <h1 id="maquinas" class="navbar_titulo">Máquinas</h1>

    <div class="conteudo_container">
        <table class="conteudo_tabela">
            <tr>
            <?php

                $maquina_code = "SELECT idMaquina, caminhoImagemMaquina, nomeMaquina, miniDescMaquina, tipoMaquina FROM tbmaquina ORDER BY idMaquina DESC LIMIT 3";
                $prepareMaquina = $pdo->prepare($maquina_code);
                $count = $prepareMaquina->execute();
                $maquinas = $prepareMaquina->fetchAll(PDO::FETCH_ASSOC);

                $numRepeticoesM = 3;
                $contadorM = 0;?>


                <?php

                foreach($maquinas as $maquina){?>
                    <th class="conteudo_cards_container _menor">
                        <a href="ler_mais/artigos/modelo.php?id=<?=$maquina['idMaquina']?>&tipo=<?=$maquina['tipoMaquina']?>" class="link_">
                        <img class="conteudo_imagem" src="<?= $maquina['caminhoImagemMaquina'] ?>">
                        <p class="conteudo_cards_titulo"> <?= $maquina['nomeMaquina'] ?> </p>
                        <p class="conteudo_descricao"> <?= $maquina['miniDescMaquina']?> </p>
                        </a>
                    </th>

                <?php    
                }  ?>

                <th class="conteudo_cards_item_container final">
                    <a href="ler_mais/maquinas.php"> <p class="conteudo_lermais" >Ler mais</p> </a>
                </th>
            </tr>
        </table>
    </div>

    <div class="conteudo_container">
        <div class="conteudo_sobrenos">
            <div class="sobrenos_container">
                <p id="sobre" class="sobrenos">Sobre nós</p>
                <p class="detalhes_texto">CraftGrinder é destinado para os amantes de Minecraft com sede de conhecimento. 
                    Nossa missão é aproximar os players de suas próprias gameplays, auxiliando por meio da apresentação de tutoriais diversos.
                    Os tutoriais podem incluir farms, guias, itens e muito mais </p>
                <p id="contato" class="ctt">Contato</p>
                <p class="detalhes_texto">Email profissional: suporte@craftgrinder.com</p>
                <p class="detalhes_texto">Telefone: (55)11 0800 8667</p>
            </div>
        </div>
    </div>

</div>

    

<script src="../javascript/script.js"></script>
</body>
</html>
