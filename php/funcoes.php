<?php

    function mostraFarm(int $id){
        
        require 'conexao.php';

        $farm_code = "SELECT nomeFarm, miniDescFarm, imagemFarm FROM tbfarm WHERE idFarm = $id";
        $prepareFarm = $pdo->prepare($farm_code);
        $count = $prepareFarm->execute();
        $farms = $prepareFarm->fetchAll(PDO::FETCH_ASSOC);

        foreach($farms as $farm)
        {
            echo $farm['nomeFarm'];
            echo '<img class="conteudo_imagem" src=" '. $farm['imagemFarm'].'">';
            echo $farm['miniDescFarm'];
        }
    }

?>