<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/inventario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Tiny5&display=swap" rel="stylesheet">
</head>

<body>
    <table class="tabela">
        <tr class="inventariolinha">
            <td class="slotarmadura cabeca" id="103"></td>
        </tr>
        <tr class="inventariolinha">
            <td class="slotarmadura peitoral" id="102"></td>
        </tr>
        <tr class="inventariolinha">
            <td class="slotarmadura calca" id="101"></td>
        </tr>
        <tr class="inventariolinha fim">
            <td class="slotarmadura pes" id="100"></td>
            <td class="slotarmadura escudo" id="-106"></td>
        </tr>
        <tr class="inventariolinha"> 
            <td class="slot" id="9"></td>
            <td class="slot" id="10"></td>
            <td class="slot" id="11"></td>
            <td class="slot" id="12"></td>
            <td class="slot" id="13"></td>
            <td class="slot" id="14"></td>
            <td class="slot" id="15"></td>
            <td class="slot" id="16"></td>
            <td class="slot" id="17"></td>
        </tr>
        <tr class="inventariolinha">
            <td class="slot" id="18"></td>
            <td class="slot" id="19"></td>
            <td class="slot" id="20"></td>
            <td class="slot" id="21"></td>
            <td class="slot" id="22"></td>
            <td class="slot" id="23"></td>
            <td class="slot" id="24"></td>
            <td class="slot" id="25"></td>
            <td class="slot" id="26"></td>
        </tr>
        <tr class="inventariolinha">
            <td class="slot" id="27"></td>
            <td class="slot" id="28"></td>
            <td class="slot" id="29"></td>
            <td class="slot" id="30"></td>
            <td class="slot" id="31"></td>
            <td class="slot" id="32"></td>
            <td class="slot" id="33"></td>
            <td class="slot" id="34"></td>
            <td class="slot" id="35"></td>
        </tr>
        <tr class="inventariolinha hotbar">
            <td class="slot" id="0"></td>
            <td class="slot" id="1"></td>
            <td class="slot" id="2"></td>
            <td class="slot" id="3"></td>
            <td class="slot" id="4"></td>
            <td class="slot" id="5"></td>
            <td class="slot" id="6"></td>
            <td class="slot" id="7"></td>
            <td class="slot" id="8"></td>
        </tr>
    </table>

    <?php

    function getJson()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testeid', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql_code = "SELECT vetorsql FROM usuarios";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();

        $json_codificado = $prepare->fetchAll(PDO::FETCH_ASSOC);

        foreach ($json_codificado as $json) {
            $jsonCodificado = $json['vetorsql'];
        }

        return $jsonCodificado;
    }

    $jsonCodificado = getJson();

    $array_de_objetos = json_decode($jsonCodificado);

    if ($array_de_objetos === null) {
        echo "Erro ao decodificar a string JSON.";
    } else {
       ?>

        <script>
            const slots = [];
            const ids = [];
            const counts = [];
            <?php


            foreach ($array_de_objetos as $elemento) { ?>
  
                slots.push(<?= $elemento->Slot . ", "; ?>);
                    ids.push(<?= '"' . $elemento->id . '" , '; ?>);
                    counts.push(<?= $elemento->count . ", "; ?>);
                   
    
                    <?php
            }
            ?>
    
            console.log(slots, ids, counts);
            for (let i = 0; i < 41 ;  i++) {

                const item = document.getElementById(slots[i]);

                if(item == null){}
            else{
                let  newimg = document.createElement("img");
                newimg.className = "item";
                newimg.setAttribute("src", "../../img/iconeitens/items/" + ids[i] + ".png");

                let newcont = document.createElement("p");
                newcont.className = "cont";
                newcont.setAttribute("id", "cont" + i);

                let newnome = document.createElement("p");
                newnome.setAttribute("id", "nome" + i);

                let newpopup = document.createElement("span");
                newpopup.setAttribute("id", "popup" + i);
                newpopup.className = "nomeBloco";
                item.style.backgroundImage = "none";
                newnome.innerHTML = ids[i] + " X" + counts[i];
                newcont.innerHTML = counts[i];
                item.appendChild(newimg);
                if(slots[i] <= 36 && slots[i] > 0){
                item.appendChild(newcont);
                }
                item.appendChild(newpopup);
                newpopup.appendChild(newnome);
                }
            }
       
            </script>
    <?php } ?>
</body>

</html>