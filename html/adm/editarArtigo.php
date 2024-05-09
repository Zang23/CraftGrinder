<?php
    require '../../php/conexao.php';

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
    <select id="selectTabela">
        <option value="farm">Farm</option>
        <option value="atualizacao">Atualizacao</option>
        <option value="guia">Guia</option>
        <option value="maquina">Máquina</option>
        <option value="item">Item</option>
    </select>

    <div id="tabelaFarm" style="display: none;">
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
                        <td> <a href="?editar=<?=$artigo['idFarm']?>&nome=<?=$artigo['nomeFarm']?>"><span class="material-symbols-outlined">edit_note</span></a></td>
                        <td> <a href="?delete=<?=$artigo['idFarm']?>&nome=<?=$artigo['nomeFarm']?>"><span class="material-symbols-outlined">delete</span></a></td>
                    </tr>
                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>

    <div id="tabelaGuia" style="display: none;">
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
                        <td> <a href="?editar=<?=$artigo['idGuia']?>&nome=<?=$artigo['nomeGuia']?>"><span class="material-symbols-outlined">edit_note</span></a></td>
                        <td> <a href="?delete=<?=$artigo['idGuia']?>&nome=<?=$artigo['nomeGuia']?>"><span class="material-symbols-outlined">delete</span></a></td>
                    </tr>
                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>

    <div id="tabelaMaquina" style="display: none;">
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
                            <td> <a href="?editar=<?=$artigo['idMaquina']?>&nome=<?=$artigo['nomeMaquina']?>"><span class="material-symbols-outlined">edit_note</span></a></td>
                            <td> <a href="?delete=<?=$artigo['idMaquina']?>&nome=<?=$artigo['nomeMaquina']?>"><span class="material-symbols-outlined">delete</span></a></td>

                        </tr>
                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>

    <div id="tabelaItem" style="display: none;">
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
                        <td> <a href="?editar=<?=$artigo['idItem']?>&nome=<?=$artigo['nomeItem']?>"><span class="material-symbols-outlined">edit_note</span></a></td>
                        <td> <a href="?delete=<?=$artigo['idItem']?>&nome=<?=$artigo['nomeItem']?>"><span class="material-symbols-outlined">delete</span></a></td>
                    </tr>
                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>

    <div id="tabelaAtualizacao" style="display: none;">
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
                        <td> <a href="?editar=<?=$artigo['idAtualizacao']?>&nome=<?=$artigo['nomeAtualizacao']?>"><span class="material-symbols-outlined">edit_note</span></a></td>
                        <td> <a href="?delete=<?=$artigo['idAtualizacao']?>&nome=<?=$artigo['nomeAtualizacao']?>"><span class="material-symbols-outlined">delete</span></a></td>
                    </tr>
                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>

    <script src="../../javascript/selectTabela.js"></script>
</body>
</html>