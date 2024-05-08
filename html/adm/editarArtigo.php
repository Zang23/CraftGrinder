<?php
    require '../../php/conexao.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adm.css">
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
                </tr>
            </thead>
            <tbody>
                <?php

                $sql_code = "SELECT * FROM tbfarm";
                $prepare = $pdo->prepare($sql_code);
                $count = $prepare->execute();
                $artigos = $prepare->fetchAll();
                
                foreach($artigos as $artigo){?>
                    <tr>
                        <th><?= $artigo['nomeFarm'] ?></th>
                        <th><?= $artigo['miniDescFarm'] ?></th>
                        <th><?= $artigo['descFarm'] ?></th>
                        <th><?= $artigo['imagemFarm'] ?></th>
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
                </tr>
            </thead>
            <tbody>
                <?php

                $sql_code = "SELECT * FROM tbguia";
                $prepare = $pdo->prepare($sql_code);
                $count = $prepare->execute();
                $artigos = $prepare->fetchAll();
                
                foreach($artigos as $artigo){?>
                    <tr>
                        <th><?= $artigo['nomeGuia'] ?></th>
                        <th><?= $artigo['miniDescGuia'] ?></th>
                        <th><?= $artigo['descGuia'] ?></th>
                        <th><?= $artigo['imagemGuia'] ?></th>
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
                </tr>
            </thead>
            <tbody>
                <?php

                $sql_code = "SELECT * FROM tbmaquina";
                $prepare = $pdo->prepare($sql_code);
                $count = $prepare->execute();
                $artigos = $prepare->fetchAll();
                
                foreach($artigos as $artigo){?>
                    <tr>
                        <th><?= $artigo['nomeMaquina'] ?></th>
                        <th><?= $artigo['miniDescMaquina'] ?></th>
                        <th><?= $artigo['descMaquina'] ?></th>
                        <th><?= $artigo['imagemMaquina'] ?></th>

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
                </tr>
            </thead>
            <tbody>
                <?php

                $sql_code = "SELECT * FROM tbitem";
                $prepare = $pdo->prepare($sql_code);
                $count = $prepare->execute();
                $artigos = $prepare->fetchAll();
                
                foreach($artigos as $artigo){?>
                    <tr>
                        <th><?= $artigo['nomeItem'] ?></th>
                        <th><?= $artigo['miniDescItem'] ?></th>
                        <th><?= $artigo['descItem'] ?></th>
                        <th><?= $artigo['imagemItem'] ?></th>
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
                    <th>Descrição Completa</th>
                    <th>Caminho Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql_code = "SELECT * FROM tbatualizacao";
                $prepare = $pdo->prepare($sql_code);
                $count = $prepare->execute();
                $artigos = $prepare->fetchAll();
                
                foreach($artigos as $artigo){?>
                    <tr>
                        <th><?= $artigo['nomeAtualizacao'] ?></th>
                        <th><?= $artigo['descAtualizacao'] ?></th>
                        <th><?= $artigo['imagemAtualizacao'] ?></th>
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