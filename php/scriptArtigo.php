<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/scriptArtigo.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
</html>
<?php

require_once 'conexao.php';
require_once 'funcoes.php';

$tipoArtigo = $_POST['tipoArtigo'];


if($tipoArtigo == "Farm"){
    setArtigo($tipoArtigo);
}

if($tipoArtigo == "Guia"){
    setArtigo($tipoArtigo);
}

if($tipoArtigo == "Maquina"){
    setArtigo($tipoArtigo);
}

if($tipoArtigo == "Item"){
    setArtigo($tipoArtigo);
}

if($tipoArtigo == "Atualizacao"){
    setArtigo($tipoArtigo);
}
?>