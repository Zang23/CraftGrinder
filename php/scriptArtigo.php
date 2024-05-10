<?php

require_once 'conexao.php';

$tipoArtigo = $_POST['tipoArtigo'];



if($tipoArtigo == "Farm"){

    if(isset($_FILES['imagemFarm'])){

        $arquivo = $_FILES['imagemFarm'];

        if($arquivo['error']){
            die("Houve um erro ao enviar sua imagem");
        }

        if($arquivo['size'] > 2097152){
            die("Sua imagem é muito pesada, o tamanho máximo suportado é de 2MB");
        }

        $pasta = "../img/farms/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

        if($extensao != "jpg" && $extensao != "png"){
            die("Tipo de arquivo não aceito");
        }

        $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;
        $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);

        function getCaminhoImagem(){
            return $caminhoImagem;
        }
        
        if($verificado){
            $nome = $_POST['nomeFarm'];
            $minidesc = $_POST['miniDescFarm'];
            $desc = $_POST['descFarm'];

            $sql_code = $pdo->prepare("INSERT INTO tbfarm VALUES (null,?,?,?,?,?,?)");
            $sql_code->execute([$nome, $desc, $minidesc, $tipoArtigo, $nomeArquivo, $caminhoImagem]);

            $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
            $code_sql->execute([$nome, $tipoArtigo]);?>

            <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
            <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
        }
    }


    
}

if($tipoArtigo == "Guia"){

    if(isset($_FILES['imagemGuia'])){

        $arquivo = $_FILES['imagemGuia'];

        if($arquivo['error']){
            die("Houve um erro ao enviar sua imagem");
        }

        if($arquivo['size'] > 2097152){
            die("Sua imagem é muito pesada, o tamanho máximo suportado é de 2MB");
        }

        $pasta = "../img/guias/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

        if($extensao != "jpg" && $extensao != "png"){
            die("Tipo de arquivo não aceito");
        }

        $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;
        $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);
    
        if($verificado){
            $nome = $_POST['nomeGuia'];
            $minidesc = $_POST['miniDescGuia'];
            $desc = $_POST['descGuia'];
        
            $sql_code = $pdo->prepare("INSERT INTO tbguia VALUES (null,?,?,?,?,?,?)");
            $sql_code->execute([$nome, $desc, $minidesc, $tipoArtigo, $nomeArquivo, $caminhoImagem ]);
        
            $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
            $code_sql->execute([$nome, $tipoArtigo]);?>
        
            <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
            <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
        }
    }
}

if($tipoArtigo == "Maquina"){

    if(isset($_FILES['imagemMaquina'])){

        $arquivo = $_FILES['imagemMaquina'];

        if($arquivo['error']){
            die("Houve um erro ao enviar sua imagem");
        }

        if($arquivo['size'] > 2097152){
            die("Sua imagem é muito pesada, o tamanho máximo suportado é de 2MB");
        }

        $pasta = "../img/maquinas/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

        if($extensao != "jpg" && $extensao != "png"){
            die("Tipo de arquivo não aceito");
        }

        $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;
        $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);

        if($verificado){
            $nome = $_POST['nomeMaquina'];
            $minidesc = $_POST['miniDescMaquina'];
            $desc = $_POST['descMaquina'];
            

            $sql_code = $pdo->prepare("INSERT INTO tbmaquina VALUES (null,?,?,?,?,?,?)");
            $sql_code->execute([$nome, $desc, $minidesc, $tipoArtigo, $nomeArquivo, $caminhoImagem]);

            $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
            $code_sql->execute([$nome, $tipoArtigo]);?>

            <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
            <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
        }
    }
    
}

if($tipoArtigo == "Item"){

    if(isset($_FILES['imagemItem'])){

        $arquivo = $_FILES['imagemItem'];

        if($arquivo['error']){
            var_dump($arquivo['error']);
            die("Houve um erro ao enviar sua imagem");
            
        }

        if($arquivo['size'] > 2097152){
            die("Sua imagem é muito pesada, o tamanho máximo suportado é de 2MB");
        }

        $pasta = "../img/itens/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

        if($extensao != "jpg" && $extensao != "png"){
            die("Tipo de arquivo não aceito");
        }

        $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;
        $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);

        if($verificado){
            $nome = $_POST['nomeItem'];
            $minidesc = $_POST['miniDescItem'];
            $desc = $_POST['descItem'];

            $sql_code = $pdo->prepare("INSERT INTO tbitem VALUES (null,?,?,?,?,?,?)");
            $sql_code->execute([$nome, $desc, $minidesc, $tipoArtigo, $nomeArquivo, $caminhoImagem]);

            $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
            $code_sql->execute([$nome, $tipoArtigo]);?>

            <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
            <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
        }
    }

    
}

if($tipoArtigo == "Atualizacao"){

    if(isset($_FILES['imagemAtualizacao'])){

        $arquivo = $_FILES['imagemAtualizacao'];

        if($arquivo['error']){
            die("Houve um erro ao enviar sua imagem");
        }

        if($arquivo['size'] > 2097152){
            die("Sua imagem é muito pesada, o tamanho máximo suportado é de 2MB");
        }

        $pasta = "../img/atualizacoes/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION ));

        if($extensao != "jpg" && $extensao != "png"){
            die("Tipo de arquivo não aceito");
        }

        $caminhoImagem = $pasta . $novoNomeArquivo . "." . $extensao;
        $verificado = move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);

        if($verificado){
            $nome = $_POST['nomeAtualizacao'];
            $desc = $_POST['descAtualizacao'];
           
        
            $sql_code = $pdo->prepare("INSERT INTO tbatualizacao VALUES (null,?,?,?,?,?)");
            $sql_code->execute([$nome, $desc, $tipoArtigo, $nomeArquivo, $caminhoImagem]);
        
            $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
            $code_sql->execute([$nome, $tipoArtigo]);?>
        
            <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
            <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
        }
    }
    
}








?>