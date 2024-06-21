<?php
    require '../../php/conexao.php';

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cadastroartigo.css">
    <link rel="stylesheet" href="../../css/editarartigo.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
<div class="index_fundo">

    <header class="cabecalho_container_cadArt">

        <div class="cabecalho_superior_container">
            <a href="../index.php"><p class="cabecalho_titulo">CraftGrinder</p></a>
        </div>
        
    </header>

<div class="cadastro_art_align">
<div class="cadastro_art_container">

    <div class="container_titulo_edicao">
        <p class="titulo_edicao">Escolha o conteúdo que será editado</p>
    </div>

    <div class="cadastro_select_align">

            <div class="titulo_edicao_button_div">
                <a class="titulo_edicao_button" href="../adm/adm.php">
                    <span class="material-symbols-outlined seta">arrow_back</span>
                </a>
            </div>

        <div class="content_align_selector">
            <div class="selector_content">
                <select id="selectTabela">
                    <option value="atualizacao">Atualizacao</option>
                    <option value="farm">Farm</option>
                    <option value="guia">Guia</option>
                    <option value="maquina">Máquina</option>
                    <option value="item">Item</option>
                </select>
            </div>
        </div>

    </div>

    <div class="content_align_cadastro">

        <div class="content_opcao_cadastro">

        <div id="tabelaAtualizacao" class="opcao_content">
        <div class="opcao_content_alinhamento">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Mini Descricao</th>
                        <th>Caminho Imagem</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $code_sql = "SELECT * FROM tbArtigo";
                        $prepare = $pdo->prepare($code_sql);
                        $count = $prepare->execute();

                        $sql_code = "SELECT * FROM tbatualizacao";
                        $prepare = $pdo->prepare($sql_code);
                        $count = $prepare->execute();
                        $artigos = $prepare->fetchAll();

                        if(isset($_GET['editar'])){
                            $id = (int)$_GET['editar'];
                            echo "O . $id . foi editado";
                        }

                        if(isset($_GET['delete'])){
                            $id = (int)$_GET['delete'];
                            $nome = $_GET['nome'];

                            $pdo->exec("DELETE FROM tbatualizacao WHERE idAtualizacao = $id");
                            $pdo->exec("DELETE FROM tbartigo WHERE nomeArtigo = '$nome'");
                            
                        }
                    
                    foreach($artigos as $artigo){?>
                        <tr>
                            <th><?= $artigo['nomeAtualizacao'] ?></th>
                            <th><?= $artigo['descAtualizacao'] ?></th>
                            <th><?= $artigo['imagemAtualizacao'] ?></th>
                            <td class="td_simbolo"> <a href="?editar=<?=$artigo['idAtualizacao']?>&nome=<?=$artigo['nomeAtualizacao']?>"><span class="material-symbols-outlined d">edit_note</span></a></td class="td_simbolo">
                            <td class="td_simbolo"> <a href="?delete=<?=$artigo['idAtualizacao']?>&nome=<?=$artigo['nomeAtualizacao']?>"><span class="material-symbols-outlined d">delete</span></a></td class="td_simbolo">
                        </tr>
                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
        </div>

        <div id="tabelaFarm" class="opcao_content">

        <div class="opcao_content_alinhamento">
            <table class="tabela_editar">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Mini Descricao</th>
                        <th>Descrição Completa</th>
                        <th>Caminho Imagem</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $code_sql = "SELECT * FROM tbArtigo";
                    $prepare = $pdo->prepare($code_sql);
                    $count = $prepare->execute();

                    $sql_code = "SELECT * FROM tbfarm";
                    $prepare = $pdo->prepare($sql_code);
                    $count = $prepare->execute();
                    $artigos = $prepare->fetchAll();

                    if(isset($_GET['editar'])){
                        $id = (int)$_GET['editar'];
                        echo "O . $id . foi editado";
                    }

                    if(isset($_GET['delete'])){
                        $id = (int)$_GET['delete'];
                        $nome = $_GET['nome'];

                        $pdo->exec("DELETE FROM tbfarm WHERE idFarm = $id");
                        $pdo->exec("DELETE FROM tbartigo WHERE nomeArtigo = '$nome'");
                        
                    }

                    
                    
                    foreach($artigos as $artigo){
                        
                        ?>
                        <tr>
                            <th><?= $artigo['nomeFarm'] ?></th>
                            <th><?= $artigo['miniDescFarm'] ?></th>
                            <th><?= $artigo['descFarm'] ?></th>
                            <th><?= $artigo['imagemFarm'] ?></th>
                            <td class="td_simbolo"> <a href="editarArtigoScript.php?editar=<?=$artigo['idFarm']?>&nome=<?=$artigo['nomeFarm']?>&tipo=<?=$artigo['tipoFarm']?>"><span class="material-symbols-outlined d">edit_note</span></a></td class="td_simbolo">
                            <td class="td_simbolo"> <a href="?delete=<?=$artigo['idFarm']?>&nome=<?=$artigo['nomeFarm']?>"><span class="material-symbols-outlined d">delete</span></a></td class="td_simbolo">
                        </tr>
                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
        </div>

        <div id="tabelaGuia" class="opcao_content">

        <div class="opcao_content_alinhamento">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Mini Descricao</th>
                        <th>Descrição Completa</th>
                        <th>Caminho Imagem</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $code_sql = "SELECT * FROM tbArtigo";
                        $prepare = $pdo->prepare($code_sql);
                        $count = $prepare->execute();

                        $sql_code = "SELECT * FROM tbguia";
                        $prepare = $pdo->prepare($sql_code);
                        $count = $prepare->execute();
                        $artigos = $prepare->fetchAll();

                        if(isset($_GET['editar'])){
                            $id = (int)$_GET['editar'];
                            echo "O . $id . foi editado";
                        }
        
                        if(isset($_GET['delete'])){
                            $id = (int)$_GET['delete'];
                            $nome = $_GET['nome'];
        
                            $pdo->exec("DELETE FROM tbguia WHERE idGuia = $id");
                            $pdo->exec("DELETE FROM tbartigo WHERE nomeArtigo = '$nome'");
                            
                        }
                    
                    foreach($artigos as $artigo){?>
                        <tr>
                            <th><?= $artigo['nomeGuia'] ?></th>
                            <th><?= $artigo['miniDescGuia'] ?></th>
                            <th><?= $artigo['descGuia'] ?></th>
                            <th><?= $artigo['imagemGuia'] ?></th>
                            <td class="td_simbolo"> <a href="editarArtigoScript.php?editar=<?=$artigo['idGuia']?>&nome=<?=$artigo['nomeGuia']?>&tipo=<?=$artigo['tipoGuia']?>"><span class="material-symbols-outlined d">edit_note</span></a></td class="td_simbolo">
                            <td class="td_simbolo"> <a href="?delete=<?=$artigo['idGuia']?>&nome=<?=$artigo['nomeGuia']?>"><span class="material-symbols-outlined d">delete</span></a></td class="td_simbolo">
                        </tr>
                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
        </div>

        <div id="tabelaMaquina" class="opcao_content">

        <div class="opcao_content_alinhamento">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Mini Descricao</th>
                        <th>Descrição Completa</th>
                        <th>Caminho Imagem</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $code_sql = "SELECT * FROM tbArtigo";
                        $prepare = $pdo->prepare($code_sql);
                        $count = $prepare->execute();

                        $sql_code = "SELECT * FROM tbmaquina";
                        $prepare = $pdo->prepare($sql_code);
                        $count = $prepare->execute();
                        $artigos = $prepare->fetchAll();

                        if(isset($_GET['editar'])){
                            $id = (int)$_GET['editar'];
                            echo "O . $id . foi editado";
                        }

                        if(isset($_GET['delete'])){
                            $id = (int)$_GET['delete'];
                            $nome = $_GET['nome'];

                            $pdo->exec("DELETE FROM tbmaquina WHERE idMaquina = $id");
                            $pdo->exec("DELETE FROM tbartigo WHERE nomeArtigo = '$nome'");
                            
                        }
                    
                        foreach($artigos as $artigo){?>
                            <tr>
                                <th><?= $artigo['nomeMaquina'] ?></th>
                                <th><?= $artigo['miniDescMaquina'] ?></th>
                                <th><?= $artigo['descMaquina'] ?></th>
                                <th><?= $artigo['imagemMaquina'] ?></th>
                                <td class="td_simbolo"> <a href="editarArtigoScript.php?editar=<?=$artigo['idMaquina']?>&nome=<?=$artigo['nomeMaquina']?>&tipo=<?=$artigo['tipoMaquina']?>"><span class="material-symbols-outlined d">edit_note</span></a></td class="td_simbolo">
                                <td class="td_simbolo"> <a href="?delete=<?=$artigo['idMaquina']?>&nome=<?=$artigo['nomeMaquina']?>"><span class="material-symbols-outlined d">delete</span></a></td class="td_simbolo">

                            </tr>
                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
        </div>

        <div id="tabelaItem" class="opcao_content">
        <div class="opcao_content_alinhamento">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Mini Descricao</th>
                        <th>Descrição Completa</th>
                        <th>Caminho Imagem</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $code_sql = "SELECT * FROM tbArtigo";
                        $prepare = $pdo->prepare($code_sql);
                        $count = $prepare->execute();

                        $sql_code = "SELECT * FROM tbitem";
                        $prepare = $pdo->prepare($sql_code);
                        $count = $prepare->execute();
                        $artigos = $prepare->fetchAll();

                        if(isset($_GET['editar'])){
                            $id = (int)$_GET['editar'];
                            echo "O . $id . foi editado";
                        }

                        if(isset($_GET['delete'])){
                            $id = (int)$_GET['delete'];
                            $nome = $_GET['nome'];

                            $pdo->exec("DELETE FROM tbitem WHERE idItem = $id");
                            $pdo->exec("DELETE FROM tbartigo WHERE nomeArtigo = '$nome'");
                            
                        }
                    
                    foreach($artigos as $artigo){?>
                        <tr>
                            <th><?= $artigo['nomeItem'] ?></th>
                            <th><?= $artigo['miniDescItem'] ?></th>
                            <th><?= $artigo['descItem'] ?></th>
                            <th><?= $artigo['imagemItem'] ?></th>
                            <td class="td_simbolo"> <a href="editarArtigoScript.php?editar=<?=$artigo['idItem']?>&nome=<?=$artigo['nomeItem']?>&tipo=<?=$artigo['tipoItem']?>"><span class="material-symbols-outlined d">edit_note</span></a></td class="td_simbolo">
                            <td class="td_simbolo"> <a href="?delete=<?=$artigo['idItem']?>&nome=<?=$artigo['nomeItem']?>"><span class="material-symbols-outlined d">delete</span></a></td class="td_simbolo">
                        </tr>
                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
        </div>

        </div>
    </div>
    <div>
</div>

</div>
</div>

    <script src="../../javascript/selectTabela.js"></script>
</body>
</html>