<?php

    

    session_start();

    if($_SESSION['perfilCadastrado']){
        $idUsuario = $_SESSION['idUsuario'];

        require '../../php/conexao.php';

        $sql_code = "SELECT * FROM tbclientes WHERE idCliente = '$idUsuario'";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $usuarios = $prepare->fetchAll();
    }


    function getUser(int $id){
        require "../../php/conexao.php";

        $user_code = "SELECT emailCliente, nicknameCliente, imgCliente FROM tbclientes WHERE idCliente = '$id' ";
        $prepare = $pdo->prepare($user_code);
        $count = $prepare->execute();
        $users = $prepare->fetchAll();

        foreach($users as $user){
            $userEmail =  $user['emailCliente'];
            $userNick = $user['nicknameCliente'];
            $userImg = $user['imgCliente'];
            return [$userEmail, $userNick, $userImg];
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/paginausuario.css">
    <link rel="icon" href="../img/iconeItens/minecraft/honey_block.png">
    <link rel="icon" href="../../img/iconeItens/minecraft/honey_block.png">
    <title>Usuário</title>     

</head>
<body>
    <div class="index_fundo">

    <header class="cabecalho_container r">

        <div class="cabecalho_superior_container">
            <p class="cabecalho_titulo"><a href="../index.php">CraftGrinder</a></p>
            <div class="cabecalho_superior_box">
                <input class="cabecalho_pesquisar" type="text" placeholder="Pesquisar">
                <div class="container_navbar_cadastro">
                    <div class="container_navbar_sair">
                        <div class="hover_perfil">
                            <a href="paginaUsuario.php"><img class="imagem_fotoPerfil sair" src=<?= '"imgPerfilUsuarios/'. getUser($idUsuario)[2] . '"'?>></a>
                        
                        <span class="perfil_modal">
                            <div class="container_modal">
                                <img class="imagem_fotoPerfilmodal" src=<?= '"imgPerfilUsuarios/'. getUser($idUsuario)[2] . '"'?> alt="">
                                <p class="nome_usuariomodal"><?= getUser($idUsuario)[1] ?></p>
                                <a class="cabecalho_sair" href="../../php/logoff.php">Sair</a>
                            </div>
                        </span>
                        </div>
                        
                        <a class="cabecalho_opcoes" href="../../php/logoff.php">Opções</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <h1 class="navbar_titulo">Seu Perfil</h1>  

        <div class="container_perfil">
        
            <div class="content_perfil">
                <div class="perfil_alinhamento">
                    <div class="container_perfilimagem">
                        <img src=<?= '"imgPerfilUsuarios/'. getUser($idUsuario)[2] . '"'?> class="perfil_usuario">

                        <div class="container_alterarfoto" onclick="selecionarFotoPerfil()">
                            <label for="">Alterar Foto</label>
                            
                        </div>
                    </div>
                    <div class="container_perfilinfo">
                        <div class="container_usuario">
                            <p class="nome_usuario"><?= getUser($idUsuario)[1] ?></p>
                            <p>Seu email: <?= getUser($idUsuario)[0]?> </p>
                            <a href="" class="editarperfil_button"><p>Editar Perfil</p></a>
                        </div>
                    </div>
                </div>
            
                <div class="import_invent">
                    <p>Importe seu inventário e veja suas atualizações: </p>
                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="invent_buttons">

                        <div class="button_enviar_inventario">
                            <label for="inputInventario" class="invent_imp">Importe seu inventário</label> 
                            <input type="file" id="inputInventario" name="inventario" style="display:none;" >
                            <button type="submit" class="enviar_inventario">Enviar Inventário</button>
                        </div>
                        <div class="button_mostrar_inventario">
                            <a href="../inventario.php" class="invent_most">
                                <div class="container_button_mostinvent">
                                    <label>Mostrar inventário já existente</label>
                                </div>
                            </a>
                        </div>

                    </div>
                    
                    </form>  
                </div>
            </div>
        </div>

    </div>

    <?php
         
         if($_SERVER["REQUEST_METHOD"] == "POST"){
         
             if(isset($_FILES['inventario'])){

                $arquivo = $_FILES['inventario'];

                
                $nomeArquivo = $arquivo['name'];
                $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

                if($extensao != "dat"){
                    die("Tipo de arquivo não aceito");
                }

                $pasta = "usuarios/";

                $caminhoArquivo = $pasta . $nomeArquivo;

                $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoArquivo);
                

                if($verificado){
                    require '../../php/conexao.php';

                    $update_code = "UPDATE tbclientes SET inventarioClientes = '$caminhoArquivo' WHERE idCliente = '$idUsuario' ";
                    $pdo->exec($update_code);
                }

                header("location: http://localhost:8796/API/". $idUsuario);

             } else {
                 echo "Nenhum arquivo enviado.";
             }
         }
    
         
    ?>
    <script>
        function selecionarFotoPerfil(event){
            document.getElementById("arquivo").click();
            event.preventDefault();
        }
        function mandarFotoPerfil(event) {
            document.getElementById("formularioFotoPerfilPost").submit();
            event.preventDefault();
        }
    </script>
    <form class="enviarfotoperfil" id="formularioFotoPerfilPost" method="post" action="../../php/fotoPerfil.php" enctype="multipart/form-data">
        <label class="input_label">
            mude sua skin aqui:
        <input type="file" class="input_skin" name="arquivo" id="arquivo" onchange="mandarFotoPerfil()">
        </label>
    </form>
</body>
</html>