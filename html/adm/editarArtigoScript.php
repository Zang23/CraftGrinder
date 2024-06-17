<?php

    require '../../php/conexao.php';
    $id = $_GET['editar'];
    $tipo = $_GET['tipo'];
    echo $tipo;

    $sql_code = "SELECT * FROM tb$tipo WHERE id$tipo = '$id'";
    $prepare = $pdo->prepare($sql_code);
    $count = $prepare->execute();

    $artigos = $prepare->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/editarartigoscript.css">
    <title>Document</title>
</head>
<body>

    <div class="index_fundo">

    <header class="cabecalho_container_cadArt">

        <div class="cabecalho_superior_container">
            <a href="../index.php"><p class="cabecalho_titulo">CraftGrinder</p></a>
        </div>
        
    </header>

    <form action="" method="post">

        <p class="titulo_editar_script">Editar: <?= $_GET['nome'] ?></p>
        
        <div class="container_input_editar">
            <div class="content_editar">
                <div class="content_inputscript">

        <?php
            foreach($artigos as $artigo){

                $nomeArtigo = "nome" . $tipo;
                $miniDescArtigo = "miniDesc" . $tipo;
                $descArtigo = "desc" . $tipo; ?>
                
                <input type="text" class="inputscript" name="nomeArtigo" value="<?= $artigo[$nomeArtigo] ?>">
                <input type="text" class="inputscript" name="miniDescArtigo" value=" <?= $artigo[$miniDescArtigo] ?>">
                <input type="text" class="inputscript" name="descArtigo" value=" <?= $artigo[$descArtigo] ?>">
            <?php
            }
        ?> 

                <div class="container_button">
                    <button type="Submit" class="button_editar">Editar</button>
                </div>
                </div>
            </div>
        </div>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $nome = $_POST['nomeArtigo'];
            $descArtigo = $_POST['descArtigo'];
            $miniDescArtigo = $_POST['miniDescArtigo'];

            $update_code = "UPDATE tb$tipo SET nome$tipo = '$nome', desc$tipo = '$descArtigo', miniDesc$tipo = '$miniDescArtigo' WHERE id$tipo = '$id' ";
            $pdo->exec($update_code);

            header('location: editarArtigo.php');
        }
    ?>

    </div>
</body>
</html>