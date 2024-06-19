<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/lermais.css">
    <title>Maquinas - CraftGrinder</title>
    <link rel="icon" href="../img/iconeItens/minecraft/honey_block.png">
</head>
<body>
    <div class="index_fundo">

        <header class="cabecalho_container s">

            <div class="cabecalho_superior_container">
                <p class="cabecalho_titulo"><a href="../index.php">CraftGrinder</a></p>
                <div class="cabecalho_superior_box">
                    <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
                    <a class="cabecalho_cadastro" href="../cadastro.html"> Cadastrar</a>
                    <a class="cabecalho_entrar" href="../login.html">Entrar</a>
                </div>
            </div>
            
        </header>

    <div class="lermais_container">

        <div class="cards_container">

            <h1 class="navbar_titulo">Máquinas</h1>

            <div class="conteudo_cards_container">
            <?php
            
                require '../../php/funcoes.php';

                mostraLerMaisArtigo("Maquina");
            ?>
            </div>
        </div>

        <div class="lateral_container">
            <div class="lateral_conteudo">
                <p>Filtros</p>
                <div class="lateral_select">
                    <input type="text" class="cabecalho_pesquisar" placeholder="Pesquisar">
                    <select class="lateral_select_selects" name="selecionar" id="select_lermais">
                        <option value="maior">Da maior avaliação para a menor</option>
                        <option value="menor">Da menor avaliação para a maior</option>
                        <option value="relevancia" selected>Relevância</option>
                    </select>
                </div>
            </div>
        </div>
    </div>



    </div>

</body>
</html>