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

    function getCaminhoArtigo(string $nomeArtigo, string $tipo){
        require '../../php/conexao.php';

        $sql_code = "SELECT * FROM tb$tipo WHERE nome$tipo = '$nomeArtigo'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $artigos = $prepare->fetchAll();
        $caminhoCerto = "caminhoImagem" . $tipo;

        foreach($artigos as $artigo){
            return $artigo[$caminhoCerto];
        }
    }

    function deletaArtigo(string $tipo, string $nome, int $id){
        require '../../php/conexao.php';

        $novoCaminho = "../" . getCaminhoArtigo($nome, $tipo);
        unlink($novoCaminho);
        $pdo->exec("DELETE FROM tb$tipo WHERE nome$tipo = '$nome'");
        echo $tipo . " ID:" . $id . " Foi deletado com sucesso"; 

    }

    function voltaAdm(){?>
    
    <div class="container_retorno">
        <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
        <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a>
    </div>


    <?php
    }
    

?>