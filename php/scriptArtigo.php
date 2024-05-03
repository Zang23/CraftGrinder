<?php

require_once 'conexao.php';


if(isset($_POST['nomeFarm'])){

    $nomeFarm = $_POST['nomeFarm'];
    $minidescFarm = $_POST['miniDescFarm'];
    $descFarm = $_POST['descFarm'];
    $imagemFarm = $_POST['imagemFarm'];
    $tipo = "Farm";

    $sql_code = $pdo->prepare("INSERT INTO tbfarm VALUES (null,?,?,?,?,?)");
    $sql_code->execute([$nomeFarm, $descFarm, $minidescFarm, $imagemFarm,$tipo]);

    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
    $code_sql->execute([$nomeFarm, $tipo]);?>

    <a href="../html/farmCadastro.html"><button>Adicionar mais uma farm</button></a>
    <a href="../html/adm.php"><button>Voltar a tela de Admin</button></a><?php
}

?>