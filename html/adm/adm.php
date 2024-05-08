
<?php

require '../../php/conexao.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adm.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="index_fundo">

    <header class="cabecalho_container">

        <div class="cabecalho_superior_container">
            <a href="index.html"><p class="cabecalho_titulo">CraftGrinder</p></a>
        </div>
        
    </header>

<div class="adm_container">

    <div class="barra_lateral">
        <div class="content_lateral">

            <p class="sidebar_titulo">Administração</p>

            <div class="lateral_options">

                <a href="cadastroArtigo.html"><p>Inserir novo Artigo</p></a>
                <a href="editarArtigo.php"><p>Editar Artigo</p></a>
                <a href=""><p>Sair</p></a>
               

            </div>
        </div>
    </div>

    
    <div class="container_central">

        <div class="alinhamento_titulo_central">
            <p class="titulo_central">Tabela de Artigos</p>
        </div>
        
        <div class="diretor_pag">
            
            <p>Conferir e editar</p>
                <div class="tabela">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>  
                    <?php

                        $sql_code = "SELECT nomeArtigo, tipoArtigo FROM tbartigo";
                        $prepare = $pdo->prepare($sql_code);
                        $count = $prepare->execute();
                        $artigos = $prepare->fetchAll();

                        foreach($artigos as $artigo){?>
                        <tr>
                            <td><?= $artigo['nomeArtigo'] ?></td>
                            <td><?= $artigo['tipoArtigo'] ?></td>
                        </tr><?php
                        }
                        
                    ?>
                    </tbody>
                </table>
                </div>
        </div>

    </div>

</div>

</div>
</body>
</html>