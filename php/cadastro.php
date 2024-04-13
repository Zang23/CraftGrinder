<?php

require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$user = $_POST['user'];


if(isset($email)){
    $sql_code = $pdo->prepare("INSERT INTO tbclientes VALUES (null,?,?,?)");
    $sql_code->execute([$_POST['email'], $_POST['senha'], $_POST['user']]);


    echo "feito com sucesso";
}

?>