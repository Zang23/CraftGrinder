
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