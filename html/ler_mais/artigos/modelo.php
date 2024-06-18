
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/modelo.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="icon" href="../img/iconeItens/minecraft/honey_block.png">
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
                $tipo = $_GET['tipo'];

                



                function getGaleria(int $id, string $tipo){
                
                    require "../../../php/conexao.php";

                    $galeria_code = "SELECT * FROM tb$tipo WHERE id$tipo = '$id' ";
                    $prepare = $pdo->prepare($galeria_code);
                    $count = $prepare->execute();
                    $imagens = $prepare->fetchAll();

                    foreach($imagens as $imagem){
                        $galeriaImagens = "galeriaImagens" . $tipo;
                        $arrayGaleria =  $imagem[$galeriaImagens];
                        return $arrayGaleria;
                    }

                }
                
                

                    
                $resultado = getArtigo($tipo, $id);

                $galeriaCodificada = getGaleria($id, $tipo);
                $galeriaImagens = unserialize(base64_decode($galeriaCodificada));

                
                
                ?>
                <div class="titulo_principal">
                    <h1><?= $resultado[0]?> </h1>
                </div>

                <div class="descricao_completa">
                    <?php 
                    
                    

                    $descricao = $resultado[1];

                    
                    

                    for($i = -1; $i <= count($galeriaImagens); $i++){

                        $imagem = "--imagem" . $i . ";";
                        $contador = $i - 1;
                        

                        if (strstr($descricao, $imagem)){

                            if($i == 1){

                                $imagemGaleria = unserialize(base64_decode($galeriaImagens[0]));
                            
                                $imagemGaleria = "<br><img src='../../" . $imagemGaleria . "'class='imagemModelo'><br>"; 

                                $descricao = str_replace("--imagem1;", $imagemGaleria, $descricao);
                                
                              

                            
                            }else{
                            
                                $imagemGaleria = unserialize(base64_decode($galeriaImagens[$contador]));
                                
                                $imagemGaleria = "<br><img src='../../" . $imagemGaleria. " 'class='imagemModelo'><br>"; 

                                $descricao = str_replace($imagem, $imagemGaleria, $descricao);

                            }
                            

                        }
                        
                    }

                    
                    echo $descricao;

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
                        <li ><?= $requisito ?></li>
                        
                    
                    <?php 
                    
                        
                    }
                ?>
                </ul>

                
            </div>   
        </div>
    </div>
</div>

</div>

</body>
</html>