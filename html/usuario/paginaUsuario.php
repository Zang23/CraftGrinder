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

        $user_code = "SELECT emailCliente, nicknameCliente FROM tbclientes WHERE idCliente = '$id' ";
        $prepare = $pdo->prepare($user_code);
        $count = $prepare->execute();
        $users = $prepare->fetchAll();

        foreach($users as $user){
            $userEmail =  $user['emailCliente'];
            $userNick = $user['nicknameCliente'];
            return [$userEmail, $userNick];
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
                    <a href="paginaUsuario.html"><img class="imagem_fotoPerfil sair" src="../../img/fotoperfil.png"></a>
                    <a class="cabecalho_sair" href="../../php/logoff.php">Sair</a>
                </div>
            </div>
        </div>
    </header>
    <h1 class="navbar_titulo">Seu Perfil</h1>  

        <div class="container_perfil">
        
            <div class="content_perfil">
                <div class="perfil_alinhamento">
                    <div class="container_perfilimagem">
                        <img src="../../img/fotoperfil.png" class="perfil_usuario">

                        <div class="container_alterarfoto">
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
                            <label for="inputInventario" class="invent_imp">Importar inventario</label> 
                            <input type="file" id="inputInventario" name="inventario" style="display:none;" >
                            <button type="submit" class="enviar_inventario">Enviar Inventario</button>
                        </div>

                            <a  class="invent_most" href="../inventario.php"> <label>Mostrar inventário já existente</label></a>  
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
</body>
</html>