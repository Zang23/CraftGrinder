<?php

    function mostraFarm(int $id){
        
        require 'conexao.php';

        $farm_code = "SELECT nomeFarm, miniDescFarm, imagemFarm, caminhoImagemFarm FROM tbfarm WHERE idFarm = $id";
        $prepareFarm = $pdo->prepare($farm_code);
        $count = $prepareFarm->execute();
        $farms = $prepareFarm->fetchAll(PDO::FETCH_ASSOC);

        foreach($farms as $farm)
        {
            echo $farm['nomeFarm'];
            echo '<img class="conteudo_imagem" src=" '. $farm['caminhoImagemFarm'].'">';
            echo $farm['miniDescFarm'];
        }
    }

    function getCaminhoFarm(string $nomeFarm){

        require '../../php/conexao.php';

        $sql_code2 = "SELECT * FROM tbfarm  WHERE nomeFarm = '$nomeFarm'";
        $prepare2 = $pdo->prepare($sql_code2);
        $count2 = $prepare2->execute();
        $farms = $prepare2->fetchAll();

        foreach($farms as $farm){
            return $farm['caminhoImagemFarm'];
        }

    }

    function getCaminhoGuia(string $nomeGuia){
        require '../../php/conexao.php';
        
        $sql_code = "SELECT * FROM tbguia WHERE nomeGuia = '$nomeGuia'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $guias = $prepare->fetchAll();

        foreach($guias as $guia){
            return $guia['caminhoImagemGuia'];
        }
    }

    function getCaminhoMaquina(string $nomeMaquina){
        require '../../php/conexao.php';
        
        $sql_code = "SELECT * FROM tbmaquina WHERE nomeMaquina = '$nomeMaquina'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $maquinas = $prepare->fetchAll();

        foreach($maquinas as $maquina){
            return $maquina['caminhoImagemMaquina'];
        }
    }

    function getCaminhoItem(string $nomeItem){
        require '../../php/conexao.php';
        
        $sql_code = "SELECT * FROM tbitem WHERE nomeItem = '$nomeItem'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $itens = $prepare->fetchAll();

        foreach($itens as $item){
            return $item['caminhoImagemItem'];
        }
    }

    function getCaminhoAtualizacao(string $nomeAtualizacao){
        require '../../php/conexao.php';
        
        $sql_code = "SELECT * FROM tbatualizacao WHERE nomeAtualizacao = '$nomeAtualizacao'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $atualizacoes = $prepare->fetchAll();

        foreach($atualizacoes as $atualizacao){
            return $atualizacao['caminhoImagemAtualizacao'];
        }
    }

    

?>