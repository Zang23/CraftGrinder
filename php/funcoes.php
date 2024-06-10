<?php


    function verificaLogin(){

        if(isset($_SESSION['perfilCadastrado'])){
            return $verificado = $_SESSION['perfilCadastrado'];
       }else{
            return $verificado = false;
       }
    }

    function mostraLogin (bool $verificado){

        if($verificado == false){?>
            <div class="container_navbar_cadastro">
                <a class="cabecalho_cadastro" href="cadastro.php">Cadastrar</a>
                <a class="cabecalho_entrar" href="login.html">Entrar</a>
            </div>
        <?php

        }else if ($verificado){?>
            <div class="container_navbar_sair">
                <a href="paginaUsuario.html"><img class="imagem_fotoPerfil sair" src="../img/fotoperfil.png"></a>
                <a class="cabecalho_sair" href="../php/logoff.php">Sair</a>
            </div>
        <?php
        }
    }

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

        if($tipo == "Atualizacao"){
            $novoCaminhoDiretorio = "../../img/atualizacoes/" . $nome;
        }else if($tipo == "Item"){
            $novoCaminhoDiretorio = "../../img/itens/" . $nome;
        }else{
            $novoCaminhoDiretorio = "../../img/" . strtolower($tipo) . "s/". $nome ;
        }
        
        $nomeArquivos = glob("$novoCaminhoDiretorio/*");

        


        for($i = 0; $i < count($nomeArquivos); $i++){
            unlink($nomeArquivos[$i]);
        }
        
        rmdir($novoCaminhoDiretorio);
        $pdo->exec("DELETE FROM tb$tipo WHERE nome$tipo = '$nome'");

        echo $tipo . " ID:" . $id . " Foi deletado com sucesso" . $parangole; 

    }

    function voltaAdm(){?>
        <div class="container">
            <div class="container_retorno">
                <h1 class="retorno_titulo">O que deseja Fazer?</h1>
                <div class="container_clareamento">
                    <a href="../html/adm/cadastroArtigo.html"><button class="clareamento">Adicionar mais um artigo</button></a>
                    <a href="../html/adm/adm.php"><button class="clareamento">Voltar a tela de Admin</button></a>
                </div>
            </div>
        </div>
    <?php
    }


    function setArrayImagens(string $tipoArtigo, string $pasta){
        
        $galeriaArtigo = "galeria" . $tipoArtigo;

        if(isset($_FILES[$galeriaArtigo])){
    
        $galerias = $_FILES[$galeriaArtigo];
    
        
        if(is_array($galerias['name'])){
            
            foreach($galerias['name'] as $indice => $nome_arquivo){
                
                $nome_temporario = $galerias['tmp_name'][$indice];
                $tamanho = $galerias['size'][$indice];
                $erro = $galerias['error'][$indice];
                $tipo = $galerias['type'][$indice];
    
                
                if($erro){
                    die("Houve um erro ao enviar suas imagens");
                }

                if($tamanho > 2097152){
                    die("Suas imagens são muito pesadas. O tamanho limite suportado");
                }

                $nomeArquivo = $nome_arquivo;
                $novoNomeArquivo = uniqid();
                $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

                if($extensao != "jpg" && $extensao != "png"){
                    die("Tipo de arquivo não aceito");
                }

                $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;

                $verificado = move_uploaded_file($nome_temporario, $caminhoImagem);
    
                if($verificado){
                    $imagemCodificada = base64_encode(serialize($caminhoImagem));
                    $arrayImagens[] = $imagemCodificada;

                    
                }
                
            }

        }else {
            die("Envie mais de um arquivo por favor");
        }

        return $arrayImagens;
    }

    }

    

    function setArtigo(string $tipo){
        require 'conexao.php';

        $imagemArtigo = "imagem" . $tipo;
        if(isset($_FILES[$imagemArtigo])){

            $arquivo = $_FILES[$imagemArtigo];

            if($arquivo['error']){
                die("Houve um erro ao enviar sua imagem");
            }
    
            if($arquivo['size'] > 2097152){
                die("Sua imagem é muito pesada, o tamanho máximo suportado é de 2MB");
            }


            $nomeTemp = "nome" . $tipo;
            $nome = $_POST[$nomeTemp];

            if($tipo == "Atualizacao"){
                $caminhoPasta = "../img/atualizacoes/" . $nome;
                mkdir($caminhoPasta);
                $pasta = "../img/atualizacoes/" . $nome . "/";
            }else if($tipo == "Item"){
                $caminhoPasta = "../img/itens/" . $nome;
                mkdir($caminhoPasta);
                $pasta = "../img/itens/" . $nome . "/";
            }else{
                $caminhoPasta = "../img/" . strtolower($tipo) . "s/" . $nome;
                mkdir($caminhoPasta);
                $pasta = "../img/" . strtolower($tipo) . "s/" . $nome . "/"  ;
            }

           
            $nomeArquivo = $arquivo['name'];
            $novoNomeArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

            if($extensao != "jpg" && $extensao != "png"){
                die("Tipo de arquivo não aceito");
            }
    
            $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;

            $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);

            if($verificado){
                
                $descTemp = "desc" . $tipo;
                $bdPersonalizado = strtolower($tipo);

                if($tipo != "Atualizacao"){
                    $miniDescTemp = "miniDesc" . $tipo;
                    $minidesc = $_POST[$miniDescTemp];

                    $contador = $_POST['contador'];

                    for($i = 1; $i <= $contador; $i++){
                        $requisitos[] = $_POST['requisito'.$i];
                    }

                    $requisitosSerializado = (base64_encode(serialize($requisitos)));
                }



                $imagens = base64_encode(serialize(setArrayImagens($tipo, $pasta)));                 
                $desc = $_POST[$descTemp];

                if($tipo == "Atualizacao"){
                    $sql_code = $pdo->prepare("INSERT INTO tb$bdPersonalizado VALUES (null,?,?,?,?,?)");
                    $sql_code->execute([$nome, $desc, $tipo, $nomeArquivo, $caminhoImagem]);

                    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
                    $code_sql->execute([$nome, $tipo]);
                }else{
                    $sql_code = $pdo->prepare("INSERT INTO tb$bdPersonalizado VALUES (null,?,?,?,?,?,?,?,?)");
                    $sql_code->execute([$nome, $desc, $minidesc, $tipo, $nomeArquivo, $caminhoImagem, $imagens, $requisitosSerializado]);
        
                    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
                    $code_sql->execute([$nome, $tipo]);
                }

                
                
                
                voltaAdm();
                
            }
        }
    }
    
    function getArtigo(string $tipo, int $id){
        require "../../../php/conexao.php";

        $sql_code = "SELECT * FROM tb$tipo WHERE id$tipo = $id";
        $prepare = $pdo->prepare($sql_code);
        $count = $prepare->execute();
        $artigos = $prepare->fetchAll();

        foreach($artigos as $artigo){
            $nomeArtigo = "nome" . $tipo;
            $descArtigo = "desc" . $tipo;
            $caminhoImagemArtigo = "caminhoImagem" . $tipo;
            $requisitosArtigo = "requisitos" . $tipo;

           $nomeDoArtigo = $artigo[$nomeArtigo];
           $descDoArtigo = $artigo[$descArtigo];
           $caminhoImagemArtigo = $artigo[$caminhoImagemArtigo];
           $requisitosArtigo = $artigo[$requisitosArtigo];


           return [$nomeDoArtigo, $descDoArtigo, $caminhoImagemArtigo, $requisitosArtigo];
           


        }

    }

    

?>