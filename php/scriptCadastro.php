<?php


require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$user = $_POST['user'];

$code_sql = "SELECT nome_usuario FROM tbclientes";
$prepare = $pdo->prepare($code_sql);
$count = $prepare->execute();

$usuarios = $prepare->fetchAll();



if($_POST['senha'] != $_POST['senha_confirmada']){
    header('location: ../html/cadastro.php?senhaErro');

}else if(isset($user)){
    foreach($usuarios as $usuario){
        if($usuario['nome_usuario'] == $user){
            header('location: ../html/cadastro.php?userErro');
        }
    }
    
}else if ($_POST['senha'] == $_POST['senha_confirmada'] && (isset($email))){
    $sql_code = $pdo->prepare("INSERT INTO tbclientes VALUES (null,?,?,?)");
    $sql_code->execute([$_POST['email'], $_POST['senha'], $_POST['user']]);

    header('location: ../html/index.html');
}




?>