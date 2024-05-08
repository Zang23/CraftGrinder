
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

                        $sql_code1 = "SELECT * FROM tbartigo";
                        $prepare1 = $pdo->prepare($sql_code1);
                        $count1 = $prepare1->execute();
                        $artigos = $prepare1->fetchAll();

                        $sql_code2 = "SELECT * FROM tbfarm";
                        $prepare2 = $pdo->prepare($sql_code2);
                        $count2 = $prepare2->execute();
                        $farms = $prepare2->fetchAll();

                        foreach($farms as $farm){
                            
                        }

                        $sql_code3 = "SELECT * FROM tbmaquina";
                        $prepare3 = $pdo->prepare($sql_code3);
                        $count3 = $prepare3->execute();

                        $sql_code4 = "SELECT * FROM tbguia";
                        $prepare4 = $pdo->prepare($sql_code4);
                        $count4 = $prepare4->execute();

                        $sql_code5 = "SELECT * FROM tbatualizacao";
                        $prepare5 = $pdo->prepare($sql_code5);
                        $count5 = $prepare5->execute();

                        $sql_code6 = "SELECT * FROM tbitem";
                        $prepare6 = $pdo->prepare($sql_code6);
                        $count6 = $prepare6->execute();

                        if(isset($_GET['delete'])){
                            $id = (int)$_GET['delete'];
                            $pdo->exec("DELETE FROM tbartigo WHERE idArtigo = $id");

                            if($_GET['tipo'] == "Farm"){
                                echo " A farm tambem foi de vala";
                                
                            }

                            if($_GET['tipo'] == "Maquina"){
                                $tipoArtigo = "tipo" . $_GET['tipo'];
                                $pdo->exec("DELETE FROM tbmaquina WHERE tipoMaquina = $tipoArtigo");
                                echo " A Maquina tambem foi de vala";
                            }

                            if($_GET['tipo'] == "Guia"){
                                $tipoArtigo = "tipo" . $_GET['tipo'];
                                $pdo->exec("DELETE FROM tbguia WHERE tipoGuia = $tipoArtigo");
                                echo " O guia tambem foi de vala";
                            }

                            if($_GET['tipo'] == "Item"){
                                $tipoArtigo = "tipo" . $_GET['tipo'];
                                $pdo->exec("DELETE FROM tbitem WHERE tipoItem = $tipoArtigo");
                                echo " O Item tambem foi de vala";
                            }

                            if($_GET['tipo'] == "Atualizacao"){
                                $tipoArtigo = "tipo" . $_GET['tipo'];
                                $pdo->exec("DELETE FROM tbatualizacao WHERE tipoAtualizacao = $tipoArtigo");
                                echo " A atualizacao tambem foi de vala";
                            }
                        }

                        if(isset($_GET['editar'])){
                            echo "O id foi detectado ";

                            if($_GET['tipo'] == "Farm") {
                                echo "Farm editada";
                            }

                            if($_GET['tipo'] == "Maquina") {
                                echo "Maquina editada";
                            }

                            if($_GET['tipo'] == "Guia") {
                                echo "Guia editado";
                            }

                            if($_GET['tipo'] == "Item") {
                                echo "Item editado";
                            }

                            if($_GET['tipo'] == "Atualizacao") {
                                echo "Atualizacao editada";
                            }
                        }

                        foreach($artigos as $artigo){
                            
                        ?>
                        <tr>
                            <td><?= $artigo['nomeArtigo'] ?></td>
                            <td><?= $artigo['tipoArtigo'] ?></td>
                            <td> <a href="?editar=<?=$artigo['idArtigo']?>&tipo=<?=$artigo['tipoArtigo']?>"><span class="material-symbols-outlined">edit_note</span></a></td>
                            <td> <a href="?delete=<?=$artigo['idArtigo']?>&tipo=<?=$artigo['tipoArtigo']?>"><span class="material-symbols-outlined">delete</span></a></td>
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