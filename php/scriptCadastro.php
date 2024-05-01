<?php


require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirmada = $_POST['senha_confirmada'];
$user = $_POST['user'];

$code_sql = "SELECT nome_usuario FROM tbclientes";
$prepare = $pdo->prepare($code_sql);
$count = $prepare->execute();
$usuarios = $prepare->fetchAll();

$usuarioCorreto = true;

foreach($usuarios as $usuario){
    if( $user == $usuario['nome_usuario']){
        $usuarioCorreto = false;
        header('location: ../html/cadastro.php?userErro');
        break;
    }
}

if($_POST['senha'] != $_POST['senha_confirmada']){
    $senhaCorreta = false;
    header('location: ../html/cadastro.php?senhaErro');
}else{
    $senhaCorreta = true;
}

if($senhaCorreta == true && $usuarioCorreto == true){
    $sql_code = $pdo->prepare("INSERT INTO tbclientes VALUES (null,?,?,?)");
    $sql_code->execute([$_POST['email'], $_POST['senha'], $_POST['user']]);
    header('location: ../html/index.html');
}



?>