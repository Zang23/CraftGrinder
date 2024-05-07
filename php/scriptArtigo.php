<?php

require_once 'conexao.php';

$tipoArtigo = $_POST['tipoArtigo'];



if($tipoArtigo == "Farm"){

    $nome = $_POST['nomeFarm'];
    $minidesc = $_POST['miniDescFarm'];
    $desc = $_POST['descFarm'];
    $imagem = $_POST['imagemFarm'];

    $sql_code = $pdo->prepare("INSERT INTO tbfarm VALUES (null,?,?,?,?,?)");
    $sql_code->execute([$nome, $desc, $minidesc, $imagem,$tipoArtigo]);

    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
    $code_sql->execute([$nome, $tipoArtigo]);?>

    <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
    <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
}

if($tipoArtigo == "Guia"){

    $nome = $_POST['nomeGuia'];
    $minidesc = $_POST['miniDescGuia'];
    $desc = $_POST['descGuia'];
    $imagem = $_POST['imagemGuia'];

    $sql_code = $pdo->prepare("INSERT INTO tbguia VALUES (null,?,?,?,?,?)");
    $sql_code->execute([$nome, $desc, $minidesc, $imagem,$tipoArtigo]);

    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
    $code_sql->execute([$nome, $tipoArtigo]);?>

    <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
    <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
}

if($tipoArtigo == "Maquina"){

    $nome = $_POST['nomeMaquina'];
    $minidesc = $_POST['miniDescMaquina'];
    $desc = $_POST['descMaquina'];
    $imagem = $_POST['imagemMaquina'];

    $sql_code = $pdo->prepare("INSERT INTO tbmaquina VALUES (null,?,?,?,?,?)");
    $sql_code->execute([$nome, $desc, $minidesc, $imagem,$tipoArtigo]);

    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
    $code_sql->execute([$nome, $tipoArtigo]);?>

    <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
    <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
}

if($tipoArtigo == "Item"){

    $nome = $_POST['nomeItem'];
    $minidesc = $_POST['miniDescItem'];
    $desc = $_POST['descItem'];
    $imagem = $_POST['imagemItem'];

    $sql_code = $pdo->prepare("INSERT INTO tbitem VALUES (null,?,?,?,?,?)");
    $sql_code->execute([$nome, $desc, $minidesc, $imagem,$tipoArtigo]);

    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
    $code_sql->execute([$nome, $tipoArtigo]);?>

    <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
    <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
}

if($tipoArtigo == "Atualizacao"){

    $nome = $_POST['nomeAtualizacao'];
    $desc = $_POST['descAtualizacao'];
    $imagem = $_POST['imagemAtualizacao'];

    $sql_code = $pdo->prepare("INSERT INTO tbatualizacao VALUES (null,?,?,?,?)");
    $sql_code->execute([$nome, $desc, $imagem,$tipoArtigo]);

    $code_sql = $pdo->prepare("INSERT INTO tbartigo VALUES (null,?,?)");
    $code_sql->execute([$nome, $tipoArtigo]);?>

    <a href="../html/adm/cadastroArtigo.html"><button>Adicionar mais um artigo</button></a>
    <a href="../html/adm/adm.php"><button>Voltar a tela de Admin</button></a><?php
}








?>