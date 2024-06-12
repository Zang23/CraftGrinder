
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

                require "../../../php/conexao.php";
                require "../../../php/funcoes.php";

                $id = $_GET['id'];

                $sql_code = "SELECT * FROM tbfarm WHERE idFarm = '$id' ";
                $prepare = $pdo->prepare($sql_code);
                $count = $prepare->execute();
                $farms = $prepare->fetchAll();



                function getGaleria(int $id){
                
                    require "../../../php/conexao.php";

                    $galeria_code = "SELECT * FROM tbfarm WHERE idFarm = '$id' ";
                    $prepare = $pdo->prepare($galeria_code);
                    $count = $prepare->execute();
                    $imagens = $prepare->fetchAll();

                    foreach($imagens as $imagem){
                        $arrayGaleria =  $imagem['galeriaImagensFarm'];
                        return $arrayGaleria;
                    }

                }
                
                

                    
                $resultado = getArtigo("Farm", $id);

                $galeriaCodificada = getGaleria($id);
                $galeriaImagens = unserialize(base64_decode($galeriaCodificada));

                
                
                ?>
                <div class="titulo_principal">
                    <h1><?= $resultado[0]?> </h1>
                </div>

                <div class="descricao_completa">
                    <?= $resultado[1]?>

            
                    
                    
                    <?php 

                    for($i = -1; $i <= count($galeriaImagens); $i++){

                        $imagem = "--imagem" . $i;
                        $contador = $i - 1;

                        if (strstr($resultado[1], $imagem)){

                            if($imagem == "--imagem1"){

                                $imagemGaleria = unserialize(base64_decode($galeriaImagens[0]));
                            
                                $imagemGaleria = "../../" . $imagemGaleria; ?>

                                

                                <img src="<?= $imagemGaleria?>" alt="">
                                

                                

                            <?php
                            }else{
                                
                            $imagemGaleria = unserialize(base64_decode($galeriaImagens[$contador]));
                            
                            $imagemGaleria = "../../" . $imagemGaleria; ?>

                            <img src="<?= $imagemGaleria?>" alt="">

                            <?php
                            }
                            

                        }
                    }

                    
                    

                    
            

                    ?>
                </div>
               

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
                <ul class="requisitos_lista">
                <?php
                    $arrayRequisitos = unserialize(base64_decode($resultado[3]));

                    foreach($arrayRequisitos as $requisito){ ?>
                        <li ><?= $requisito?></li>
                    
                    <?php }
                ?>
                </ul>

                
            </div>   
        </div>
    </div>
</div>

</div>

</body>
</html>