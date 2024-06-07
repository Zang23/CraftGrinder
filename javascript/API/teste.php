<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/inventario.css">
</head>
<body>
    <table class="tabela">
        <tr><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>b</p></td></tr>
        <tr><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>b</p></td></tr>
        <tr><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>a</p></td><td id=""><p>b</p></td><td id=""><p>b</p></td></tr>
        <br>
        <tr><td id="0"><p>a</p></td><td id="1"><p>b</p></td><td id="2"><p>a</p></td><td id="3"><p>b</p></td><td id="4"><p>a</p></td><td id="5"><p>b</p></td><td id="6"><p>a</p></td><td id="7"><p>b</p></td><td id="8"><p>b</p></td></tr>
    </table>

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
    /* foreach ($array_de_objetos as $objeto) {
        echo "Slot: " . $objeto->Slot . ", id: " . $objeto->id . ", Count: " . $objeto->Count . ", Damage: " . $objeto->Damage . "<br>";
        $slots[] = $objeto->Slot; 
    }*/?>
    <script>
        const slots = [];
        const ids = [];
        const counts = [];
        const damages = [];
    <?php


        foreach($array_de_objetos as $elemento){?>

            slots.push(<?= $elemento->Slot. ", ";?>);
            ids.push(<?= '"' .$elemento-> id. '" , ';?>);
            counts.push(<?= $elemento->Count. ", ";?>);
            damages.push(<?= $elemento->Damage. ", ";?>);

        <?php
        }
    ?>

    console.log(slots, ids, counts, damages);
    for (let i = 0; i < 36; i++) {
        let newp = document.createElement("img");
        newp.setAttribute("src", "../../img/iconeitens/item/" + ids[i] + ".png");
        //newp.innerHTML = ids[i];   more statements
        item = document.getElementById(slots[i]);
        if(ids[i] == null){}
        else{
        item.appendChild(newp);
        }
    }
    </script>
<?php } ?>
</body>
</html>




