
<?php

require_once 'conexao.php';
require_once 'funcoes.php';

$tipoArtigo = $_POST['tipoArtigo'];



$contador = $_POST['contador'];



for($i = 1; $i <= $contador; $i++){
    $requisitos[] = $_POST['requisito'.$i];
}



$variavelCodada = (base64_encode(serialize($requisitos)));

print_r($variavelCodada);

echo "<br>";

$mostrarJeito = unserialize(base64_decode($variavelCodada));

print_r ($mostrarJeito);

echo "<br>";

/*$nome = $_POST['nomeFarm'];
$pasta = "../img/" . strtolower($tipoArtigo) . "s/" . $nome . "/"; 

print_r(setArrayImagens($tipoArtigo, $pasta));*/



if($tipoArtigo == "Farm"){
    setArtigo($tipoArtigo);
}
    
    
    


/*if($tipoArtigo == "Farm"){
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
}*/

?>