<?php

    require '../../php/conexao.php';
    $id = $_GET['editar'];

    $sql_code = "SELECT * FROM tbfarm WHERE idFarm = '$id'";
    $prepare = $pdo->prepare($sql_code);
    $count = $prepare->execute();

    $farms = $prepare->fetchAll();
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
            foreach($farms as $farm){?>
                <input type="text" class="inputscript" name="nomeFarm" value="<?= $farm['nomeFarm'] ?>">
                <input type="text" class="inputscript" name="miniDescFarm" value=" <?= $farm['miniDescFarm'] ?>">
                <input type="text" class="inputscript" name="descFarm" value=" <?= $farm['descFarm'] ?>">
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
            $nome = $_POST['nomeFarm'];
            $descFarm = $_POST['descFarm'];
            $miniDescFarm = $_POST['miniDescFarm'];

            $update_code = "UPDATE tbfarm SET nomeFarm = '$nome', descFarm = '$descFarm', miniDescFarm = '$miniDescFarm' WHERE idFarm = '$id' ";
            $pdo->exec($update_code);

            header('location: editarArtigo.php');
        }
    ?>

    </div>
</body>
</html>