

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/cadastro.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <form action="../php/scriptCadastro.php" method="post">

        

            <div class="cadastro_container">
           
                <div class="formulario_cadastro_container">
            
                    <div class="formulario_input_container">
                    
                        <p class="formulario_cadastro">Cadastro</p>

                        <input class="formulario_input" placeholder="Digite seu email"  type="email" name="email" required>
                        
                        <input class="formulario_input" placeholder="Digite sua senha"  type="password" name="senha" required>

                        <input class="formulario_input" placeholder="Confirme sua senha"  type="password" name="senha_confirmada" required>

                        <div class="formulario_input_erro_container">
                            <input class="formulario_input" placeholder="Escolha seu nome de usuário"  type="text" name="user" required>

                        
                        
                        <?php
                            if (isset($_GET['senhaErro'])){?>
                                 <label class="formulario_input_erro">As senhas devem ser identicas</label> <?php
                            }

                            if(isset($_GET['userErro'])){?>
                                <label class="formulario_input_erro">Esse nome de usuario já existe</label> <?php
                            }

                            if(isset($_GET['emailErro'])){?>
                                <label class="formulario_input_erro">Esse email ja está sendo utilizado</label> <?php
                            }

                        ?>
                        </div>
                        
                        <div class="formulario_notificacao">
                            <input type="checkbox">
                            <p>Deseja receber notificações?</p>
                        </div>
                    </div>

                </div>
                
                <div class="cadastro_perfil_container">

                    <div class="cadastro_input_container">
                        
                        <p>Escolha sua foto de perfil</p>

                        <div class="cadastro_perfil_foto">
                            <img class="perfil_imagem" src="../img/fotoperfil.png" alt="">
                        </div>

                        <div class="content_criar_conta">

                            <button class="cadastro_perfil_botao">Criar Conta</button> 
                            <a href="login.html" class="sublinhado">Já tenho uma conta</a>
                            
                        </div>

                    </div>

                </div>
            
            </div>
        </form>
    </body>
</html>
