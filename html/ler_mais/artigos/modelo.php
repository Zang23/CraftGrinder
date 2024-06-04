
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/modelo.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Modelo</title>
</head>
<body>
<div class="index_fundo_mod">
    
    <header class="cabecalho_container s">

        <div class="cabecalho_superior_container">
            <p class="cabecalho_titulo"><a href="../../index.php">CraftGrinder</a></p>
            <div class="cabecalho_superior_box">
                <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
                <a class="cabecalho_cadastro" href="../cadastro.html"> Cadastrar</a>
                <a class="cabecalho_entrar" href="../login.html">Entrar</a>
            </div>
        </div>
        
    </header>
<div class="container_modelo_align">

    <div class="container_modelo">
        <div class="container_none">

        </div>
        <div class="container_principal">
            <div class="principal_conteudo">
                <?php

                require "../../../php/funcoes.php";
                    
                $resultado = getArtigo("Farm", 92);


                    
                ?>
                <div class="titulo_principal">
                    <h1><?= $resultado[0]?></h1>
                </div>
                <?= $resultado[1]?>
               

            </div>
        </div>
    </div>

    <div class="container_sidebar">

        <div class="container_sidebar_conteudo">

            <div class="sidebar_titulo">
                <h1><?= $resultado[0]?></h1>
            </div>

            <div class="sidebar_requisitos_titulo">
                <h1>Requisitos</h1>
            </div>

            <div class="sidebar_requisitos_lista">
                <ul>
                    <li>x10 Pedras</li>
                    <li>x25 terras</li>
                    <li>x50 madeiras</li>
                    <li>x90 escadas</li>
                    <li>x10 perolas do fim</li>
                    <li>5x ovelhas</li>
                </ul>

                <?php
                    $arrayRequisitos = unserialize(base64_decode($resultado[3]));

                    foreach($arrayRequisitos as $requisito){ ?>
                        <li>x <?= $requisito?></li>
                    
                    <?php }
                ?>
            </div>   
        </div>
    </div>
</div>

</div>

</body>
</html>