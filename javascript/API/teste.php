<?php

function getJson(){
    $pdo = new PDO('mysql:host=localhost;dbname=testeid' , 'root', '');
    $pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql_code = "SELECT vetorsql FROM usuarios";
    $prepare = $pdo->prepare($sql_code);
    $count = $prepare->execute();

    $json_codificado = $prepare->fetchAll(PDO::FETCH_ASSOC);

    foreach($json_codificado as $json){
       $jsonCodificado = $json['vetorsql'];
    }

    return $jsonCodificado;
}

$jsonCodificado = getJson();

$array_de_objetos = json_decode($jsonCodificado);

if ($array_de_objetos === null) {
    echo "Erro ao decodificar a string JSON.";
} else {
    // Exemplo de como acessar os dados do array de objetos decodificado
    foreach ($array_de_objetos as $objeto) {
        echo "Slot: " . $objeto->Slot . ", id: " . $objeto->id . ", Count: " . $objeto->Count . ", Damage: " . $objeto->Damage . "<br>";
    }
}




