<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/inventario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modelosteve.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Tiny5&display=swap" rel="stylesheet">
    
</head>

<body>
<?php
    session_start();
    require '../php/funcoes.php';
    require '../php/conexao.php';

    $verificado = verificaLogin();
?>

<div class="index_fundo">

    <header class="cabecalho_container r">
        <div class="cabecalho_superior_container">
            <p class="cabecalho_titulo"><a href="index.php">CraftGrinder</a></p>
            <div class="cabecalho_superior_box">
                <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
                <div class="container_navbar_cadastro">
                    <?= mostraLogin($verificado)?>
                </div>
            </div>
        </div>
    </header>


    <h1 class="titulo_inventario">Seu inventário</h1>

    <div class="container_inventario">

    <table class="tabela">
        <tr class="inventariolinha">
            <td class="slotarmadura cabeca_slot" id="103"></td>
            <td class="modelo3d">
            <div class="modelocontainer">
    <div class="containermodel">

        <div class="cabeca" id="corpo">
           
                <div class="s1"></div>
                <div class="s2"></div>
                <div class="s3"></div>
                <div class="s4"></div>
                <div class="s5"></div>
                <div class="s6"></div>
            
            <div id="torso" class="torso">
                <div class="s7"></div>
                <div class="s8"></div>
            </div>
            <div id="pernadireita" class="perna direitasteve">
                <div class="s9"></div>
                <div class="s10"></div>
                <div class="s11"></div>
                <div class="s12"></div>
            </div>
            <div id="pernaesquerda" class="perna esquerdasteve">
                <div class="s13"></div>
                <div class="s14"></div>
                <div class="s15"></div>
                <div class="s15-5"></div>
                
            </div>
            <div id="bracodireito" class="braco direitosteve">
                <div class="s16"></div>
                <div class="s17"></div>
                <div class="s18"></div>
                <div class="s19"></div>
                <div class="s20"></div>

            </div>
            <div id="bracoesquerdo" class="braco esquerdosteve">
                <div class="s21"></div>
                <div class="s22"></div>
                <div class="s23"></div>
                <div class="s24"></div>
                <div class="s25"></div>
            </div>
        </div>


    </div>
</div>
            </td>
        </tr>
        <tr class="inventariolinha">
            <td class="slotarmadura peitoral_slot" id="102"></td>
        </tr>
        <tr class="inventariolinha">
            <td class="slotarmadura calca_slot" id="101"></td>
        </tr>
        <tr class="inventariolinha fim">
            <td class="slotarmadura pes_slot" id="100"></td>
            
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
    </div>
</div>
    <script src="../javascript/tradutor.js"></script>
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
                newimg.setAttribute("src", "../img/iconeitens/" + ids[i] + ".png");

                let newcont = document.createElement("p");
                newcont.className = "contador";
                newcont.setAttribute("id", "cont" + i);

                let newnome = document.createElement("p");
                newnome.setAttribute("id", "nome" + i);
                let newId = document.createElement("p");
                newId.className = "id";
                newId.innerHTML = ids[i].replace('/', ':');
                let newpopup = document.createElement("span");
                newpopup.setAttribute("id", "popup" + i);
                newpopup.className = "nomeBloco";
                item.style.backgroundImage = "none";
                let traduzido = ids[i] + "/";
                traduzido = traduzir(traduzido);
                newnome.innerHTML = traduzido;
                newcont.innerHTML = counts[i];
                item.appendChild(newimg);
                if(slots[i] <= 36 && slots[i] > 0){
                item.appendChild(newcont);
                }
                item.appendChild(newpopup);
                newpopup.appendChild(newnome);
                newpopup.appendChild(newId);
                console.log(traduzido);
                }
            }
       
            </script>
            <?php } ?>
            <script src="../javascript/model.js"></script>

</body>

</html>