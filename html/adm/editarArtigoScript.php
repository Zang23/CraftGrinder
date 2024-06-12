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
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <h2>Editar: <?= $_GET['nome'] ?></h2>
        

        <?php
            foreach($farms as $farm){?>
                <input type="text" name="nomeFarm" value="<?= $farm['nomeFarm'] ?>">
                <input type="text" name="miniDescFarm" value=" <?= $farm['miniDescFarm'] ?>">
                <input type="text" name="descFarm" value=" <?= $farm['descFarm'] ?>">
            <?php
            }
        ?>

        <button type="Submit">Editar</button>
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
</body>
</html>