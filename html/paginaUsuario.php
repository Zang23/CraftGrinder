<?php

    

    session_start();

    if($_SESSION['perfilCadastrado']){
        $idUsuario = $_SESSION['idUsuario'];

        require '../php/conexao.php';

        $sql_code = "SELECT * FROM tbclientes WHERE idCliente = '$idUsuario'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $usuarios = $prepare->fetchAll();
    }


    function getEmail(int $id){
        require "../php/conexao.php";

        $user_code = "SELECT emailCliente FROM tbclientes WHERE idCliente = '$id' ";
        $prepare = $pdo->prepare($user_code);
        $count = $prepare->execute();
        $users = $prepare->fetchAll();

        foreach($users as $user){
            $userEmail =  $user['emailCliente'];
            return $userEmail;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/paginausuario.css">
    <link rel="icon" href="../img/iconeItens/minecraft/honey_block.png">

    <title>Usuário</title>     

</head>
<body>
    <div class="index_fundo">

    <header class="cabecalho_container r">

        <div class="cabecalho_superior_container">
            <p class="cabecalho_titulo"><a href="index.php">CraftGrinder</a></p>
            <div class="cabecalho_superior_box">
                <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
                <div class="container_navbar_sair">
                    <a href="paginaUsuario.html"><img class="imagem_fotoPerfil sair" src="../img/fotoperfil.png"></a>
                    <a class="cabecalho_sair" href="../php/logoff.php">Sair</a>
                </div>
            </div>
        </div>
    </header>
    <h1 class="navbar_titulo">Seu Perfil</h1>  

        <div class="container_perfil">
        
            <div class="content_perfil">
                <div class="perfil_alinhamento">
                    <div class="container_perfilimagem">
                        <img src="../img/fotoperfil.png" class="perfil_usuario">

                        <div class="container_alterarfoto">
                            <label for="">Alterar Foto</label>
                        </div>
                    </div>
                    <div class="container_perfilinfo">
                        <div class="container_usuario">
                            <p class="nome_usuario">Exemplo Nome Kogos</p>
                            <p>Seu email: <?= getEmail($idUsuario)?> </p>
                            <a href="" class="editarperfil_button"><p>Editar Perfil</p></a>
                        </div>
                    </div>
                </div>
            
                <div class="import_invent">
                    <p>Importe seu inventário e veja suas atualizações: </p>
                    <div class="invent_buttons">
                        <label for="" class="invent_imp">Importar Inventário</label>
                        <label for="" class="invent_most">Mostrar inventário já existente</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>